<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests;
use App\Map;
use App\Photo;
use App\Section;
use App\Topic;
use App\WebmasterSection;
use Auth;
use File;
use Helper;
use Illuminate\Config;
use Illuminate\Http\Request;
use Redirect;

class TopicsController extends Controller
{
    private $uploadPath = "uploads/topics/";

    // Define Default Variables

    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request $webmasterId
     * @return \Illuminate\Http\Response
     */
    public function index($webmasterId)
    {
        // Check Permissions
        $data_sections_arr = explode(",", Auth::user()->permissionsGroup->data_sections);
        if (!in_array($webmasterId, $data_sections_arr)) {
            return Redirect::to(route('NoPermission'))->send();
        }
        //
        // General for all pages
        $GeneralWebmasterSections = WebmasterSection::where('status', '=', '1')->orderby('row_no', 'asc')->get();
        // General END

        //Webmaster Topic Details
        $WebmasterSection = WebmasterSection::find($webmasterId);
        if (count($WebmasterSection) > 0) {

            if (@Auth::user()->permissionsGroup->view_status) {
                $Topics = Topic::where('created_by', '=', Auth::user()->id)->where('webmaster_id', '=',
                    $webmasterId)->orderby('row_no',
                    'asc')->paginate(env('BACKEND_PAGINATION'));
            } else {
                $Topics = Topic::where('webmaster_id', '=', $webmasterId)->orderby('row_no',
                    'asc')->paginate(env('BACKEND_PAGINATION'));
            }
            return view("backEnd.topics", compact("Topics", "GeneralWebmasterSections", "WebmasterSection"));
        } else {
            return redirect()->route('NotFound');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request $webmasterId
     * @return \Illuminate\Http\Response
     */
    public function create($webmasterId)
    {
        // Check Permissions
        if (!@Auth::user()->permissionsGroup->add_status) {
            return Redirect::to(route('NoPermission'))->send();
        }
        //
        // General for all pages
        $GeneralWebmasterSections = WebmasterSection::where('status', '=', '1')->orderby('row_no', 'asc')->get();
        // General END

        //Webmaster Topic Details
        $WebmasterSection = WebmasterSection::find($webmasterId);
        if (count($WebmasterSection) > 0) {
            $fatherSections = Section::where('webmaster_id', '=', $webmasterId)->where('father_id', '=',
                '0')->orderby('row_no', 'asc')->get();

            return view("backEnd.topics.create",
                compact("GeneralWebmasterSections", "WebmasterSection", "fatherSections"));
        } else {
            return redirect()->route('NotFound');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $webmasterId
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $webmasterId)
    {
        $WebmasterSection = WebmasterSection::find($webmasterId);
        if (count($WebmasterSection) > 0) {
            //
            $this->validate($request, [
                'photo_file' => 'mimes:png,jpeg,jpg,gif|max:3000',
                'audio_file' => 'mimes:mpga,wav', // mpga = mp3
                'video_file' => 'mimes:mp4,ogv,webm'
            ]);


            $next_nor_no = Topic::where('webmaster_id', '=', $webmasterId)->max('row_no');
            if ($next_nor_no < 1) {
                $next_nor_no = 1;
            } else {
                $next_nor_no++;
            }

            // Start of Upload Files
            $formFileName = "photo_file";
            $fileFinalName = "";
            if ($request->$formFileName != "") {
                $fileFinalName = time() . rand(1111,
                        9999) . '.' . $request->file($formFileName)->getClientOriginalExtension();
                $path = $this->getUploadPath();
                $request->file($formFileName)->move($path, $fileFinalName);
            }

            $formFileName = "audio_file";
            $audioFileFinalName = "";
            if ($request->$formFileName != "") {
                $audioFileFinalName = time() . rand(1111,
                        9999) . '.' . $request->file($formFileName)->getClientOriginalExtension();
                $path = $this->getUploadPath();
                $request->file($formFileName)->move($path, $audioFileFinalName);
            }

            $formFileName = "attach_file";
            $attachFileFinalName = "";
            if ($request->$formFileName != "") {
                $attachFileFinalName = time() . rand(1111,
                        9999) . '.' . $request->file($formFileName)->getClientOriginalExtension();
                $path = $this->getUploadPath();
                $request->file($formFileName)->move($path, $attachFileFinalName);
            }

            if ($request->video_type == 2) {
                $videoFileFinalName = $request->vimeo_link;
            } elseif ($request->video_type == 1) {
                $videoFileFinalName = $request->youtube_link;
            } else {
                $formFileName = "video_file";
                $videoFileFinalName = "";
                if ($request->$formFileName != "") {
                    $videoFileFinalName = time() . rand(1111,
                            9999) . '.' . $request->file($formFileName)->getClientOriginalExtension();
                    $path = $this->getUploadPath();
                    $request->file($formFileName)->move($path, $videoFileFinalName);
                }

            }
            // End of Upload Files

            $Topic = new Topic;
            $Topic->row_no = $next_nor_no;
            $Topic->title_ar = $request->title_ar;
            $Topic->title_en = $request->title_en;
            $Topic->details_ar = $request->details_ar;
            $Topic->details_en = $request->details_en;
            $Topic->date = $request->date;
            if ($fileFinalName != "") {
                $Topic->photo_file = $fileFinalName;
            }
            if ($audioFileFinalName != "") {
                $Topic->audio_file = $audioFileFinalName;
            }
            if ($attachFileFinalName != "") {
                $Topic->attach_file = $attachFileFinalName;
            }
            if ($videoFileFinalName != "") {
                $Topic->video_file = $videoFileFinalName;
            }
            $Topic->icon = $request->icon;
            $Topic->video_type = $request->video_type;
            $Topic->webmaster_id = $webmasterId;
            $Topic->section_id = $request->section_id;
            $Topic->created_by = Auth::user()->id;
            $Topic->visits = 0;
            $Topic->status = 1;
            $Topic->save();

            return redirect()->action('TopicsController@edit', [$webmasterId, $Topic->id])->with('doneMessage',
                trans('backLang.addDone'));
        } else {
            return redirect()->route('NotFound');
        }
    }

    public function getUploadPath()
    {
        return $this->uploadPath;
    }

    public function setUploadPath($uploadPath)
    {
        $this->uploadPath = Config::get('app.APP_URL') . $uploadPath;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @param  int $webmasterId
     * @return \Illuminate\Http\Response
     */
    public function edit($webmasterId, $id)
    {
        $WebmasterSection = WebmasterSection::find($webmasterId);
        if (count($WebmasterSection) > 0) {
            // Check Permissions
            if (!@Auth::user()->permissionsGroup->edit_status) {
                return Redirect::to(route('NoPermission'))->send();
            }
            //
            // General for all pages
            $GeneralWebmasterSections = WebmasterSection::where('status', '=', '1')->orderby('row_no', 'asc')->get();
            // General END

            if (@Auth::user()->permissionsGroup->view_status) {
                $Topics = Topic::where('created_by', '=', Auth::user()->id)->find($id);
            } else {
                $Topics = Topic::find($id);
            }
            if (count($Topics) > 0) {
                //Topic Topics Details
                $WebmasterSection = WebmasterSection::find($Topics->webmaster_id);

                $fatherSections = Section::where('webmaster_id', '=', $webmasterId)->where('father_id', '=',
                    '0')->orderby('row_no', 'asc')->get();

                return view("backEnd.topics.edit",
                    compact("Topics", "GeneralWebmasterSections", "WebmasterSection", "fatherSections"));
            } else {
                return redirect()->action('TopicsController@index', $webmasterId);
            }
        } else {
            return redirect()->route('NotFound');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @param  int $webmasterId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $webmasterId, $id)
    {
        $WebmasterSection = WebmasterSection::find($webmasterId);
        if (count($WebmasterSection) > 0) {
            //
            $Topic = Topic::find($id);
            if (count($Topic) > 0) {


                $this->validate($request, [
                    'photo_file' => 'mimes:png,jpeg,jpg,gif|max:3000',
                    'audio_file' => 'mimes:mpga,wav', // mpga = mp3
                    'video_file' => 'mimes:mp4,ogv,webm'
                ]);


                // Start of Upload Files
                $formFileName = "photo_file";
                $fileFinalName = "";
                if ($request->$formFileName != "") {
                    // Delete a Topic photo
                    if ($Topic->$formFileName != "") {
                        File::delete($this->getUploadPath() . $Topic->$formFileName);
                    }

                    $fileFinalName = time() . rand(1111,
                            9999) . '.' . $request->file($formFileName)->getClientOriginalExtension();
                    $path = $this->getUploadPath();
                    $request->file($formFileName)->move($path, $fileFinalName);
                }


                $formFileName = "audio_file";
                $audioFileFinalName = "";
                if ($request->$formFileName != "") {
                    // Delete file if there is a new one
                    if ($Topic->$formFileName != "") {
                        File::delete($this->getUploadPath() . $Topic->$formFileName);
                    }

                    $audioFileFinalName = time() . rand(1111,
                            9999) . '.' . $request->file($formFileName)->getClientOriginalExtension();
                    $path = $this->getUploadPath();
                    $request->file($formFileName)->move($path, $audioFileFinalName);
                }

                $formFileName = "attach_file";
                $attachFileFinalName = "";
                if ($request->$formFileName != "") {
                    // Delete file if there is a new one
                    if ($Topic->$formFileName != "") {
                        File::delete($this->getUploadPath() . $Topic->$formFileName);
                    }
                    $attachFileFinalName = time() . rand(1111,
                            9999) . '.' . $request->file($formFileName)->getClientOriginalExtension();
                    $path = $this->getUploadPath();
                    $request->file($formFileName)->move($path, $attachFileFinalName);
                }

                if ($request->video_type == 2) {
                    $videoFileFinalName = $request->vimeo_link;
                } elseif ($request->video_type == 1) {
                    $videoFileFinalName = $request->youtube_link;
                } else {
                    $formFileName = "video_file";
                    $videoFileFinalName = "";
                    if ($request->$formFileName != "") {
                        // Delete file if there is a new one
                        if ($Topic->$formFileName != "") {
                            File::delete($this->getUploadPath() . $Topic->$formFileName);
                        }
                        $videoFileFinalName = time() . rand(1111,
                                9999) . '.' . $request->file($formFileName)->getClientOriginalExtension();
                        $path = $this->getUploadPath();
                        $request->file($formFileName)->move($path, $videoFileFinalName);
                    }

                }
                // End of Upload Files

                $Topic->title_ar = $request->title_ar;
                $Topic->title_en = $request->title_en;
                $Topic->details_ar = $request->details_ar;
                $Topic->details_en = $request->details_en;
                $Topic->date = $request->date;

                if ($request->photo_delete == 1) {
                    // Delete photo_file
                    if ($Topic->photo_file != "") {
                        File::delete($this->getUploadPath() . $Topic->photo_file);
                    }

                    $Topic->photo_file = "";
                }

                if ($fileFinalName != "") {
                    $Topic->photo_file = $fileFinalName;
                }
                if ($audioFileFinalName != "") {
                    $Topic->audio_file = $audioFileFinalName;
                }

                if ($request->attach_delete == 1) {
                    // Delete attach_file
                    if ($Topic->attach_file != "") {
                        File::delete($this->getUploadPath() . $Topic->attach_file);
                    }

                    $Topic->attach_file = "";
                }

                if ($attachFileFinalName != "") {
                    $Topic->attach_file = $attachFileFinalName;
                }
                if ($videoFileFinalName != "") {
                    $Topic->video_file = $videoFileFinalName;
                }

                $Topic->icon = $request->icon;
                $Topic->video_type = $request->video_type;
                $Topic->section_id = $request->section_id;
                $Topic->status = $request->status;
                $Topic->updated_by = Auth::user()->id;
                $Topic->save();
                return redirect()->action('TopicsController@edit', [$webmasterId, $id])->with('doneMessage',
                    trans('backLang.saveDone'));
            } else {
                return redirect()->action('TopicsController@index', $webmasterId);
            }
        } else {
            return redirect()->route('NotFound');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @param  int $webmasterId
     * @return \Illuminate\Http\Response
     */
    public function destroy($webmasterId, $id)
    {
        $WebmasterSection = WebmasterSection::find($webmasterId);
        if (count($WebmasterSection) > 0) {
            // Check Permissions
            if (!@Auth::user()->permissionsGroup->delete_status) {
                return Redirect::to(route('NoPermission'))->send();
            }
            //
            if (@Auth::user()->permissionsGroup->view_status) {
                $Topic = Topic::where('created_by', '=', Auth::user()->id)->find($id);
            } else {
                $Topic = Topic::find($id);
            }
            if (count($Topic) > 0) {
                // Delete a Topic photo
                if ($Topic->photo_file != "") {
                    File::delete($this->getUploadPath() . $Topic->photo_file);
                }
                if ($Topic->attach_file != "") {
                    File::delete($this->getUploadPath() . $Topic->attach_file);
                }
                if ($Topic->audio_file != "") {
                    File::delete($this->getUploadPath() . $Topic->audio_file);
                }
                if ($Topic->video_type == 0 && $Topic->video_file != "") {
                    File::delete($this->getUploadPath() . $Topic->video_file);
                }

                $Topic->delete();
                return redirect()->action('TopicsController@index', $webmasterId)->with('doneMessage',
                    trans('backLang.deleteDone'));
            } else {
                return redirect()->action('TopicsController@index', $webmasterId);
            }
        } else {
            return redirect()->route('NotFound');
        }
    }


    /**
     * Update all selected resources in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  buttonNames , array $ids[],$webmasterId
     * @return \Illuminate\Http\Response
     */
    public function updateAll(Request $request, $webmasterId)
    {
        $WebmasterSection = WebmasterSection::find($webmasterId);
        if (count($WebmasterSection) > 0) {
            //
            if ($request->action == "order") {
                foreach ($request->row_ids as $rowId) {
                    $Topic = Topic::find($rowId);
                    if (count($Topic) > 0) {
                        $row_no_val = "row_no_" . $rowId;
                        $Topic->row_no = $request->$row_no_val;
                        $Topic->save();
                    }
                }

            } elseif ($request->action == "activate") {
                Topic::wherein('id', $request->ids)
                    ->update(['status' => 1]);

            } elseif ($request->action == "block") {
                Topic::wherein('id', $request->ids)
                    ->update(['status' => 0]);

            } elseif ($request->action == "delete") {
                // Check Permissions
                if (!@Auth::user()->permissionsGroup->delete_status) {
                    return Redirect::to(route('NoPermission'))->send();
                }
                // Delete Topics photo
                $Topics = Topic::wherein('id', $request->ids)->get();
                foreach ($Topics as $Topic) {
                    if ($Topic->photo_file != "") {
                        File::delete($this->getUploadPath() . $Topic->photo_file);
                    }
                    if ($Topic->attach_file != "") {
                        File::delete($this->getUploadPath() . $Topic->attach_file);
                    }
                    if ($Topic->audio_file != "") {
                        File::delete($this->getUploadPath() . $Topic->audio_file);
                    }
                    if ($Topic->video_type == 0 && $Topic->video_file != "") {
                        File::delete($this->getUploadPath() . $Topic->video_file);
                    }
                }

                // Delete files
                $PhotoFiles = Photo::wherein('topic_id', $request->ids)->get();
                foreach ($PhotoFiles as $PhotoFile) {
                    if ($PhotoFile->file != "") {
                        File::delete($this->getUploadPath() . $PhotoFile->file);
                    }
                }

                Photo::wherein('topic_id', $request->ids)
                    ->delete();

                Map::wherein('topic_id', $request->ids)
                    ->delete();

                Comment::wherein('topic_id', $request->ids)
                    ->delete();


                Topic::wherein('id', $request->ids)
                    ->delete();

            }
            return redirect()->action('TopicsController@index', $webmasterId)->with('doneMessage',
                trans('backLang.saveDone'));
        } else {
            return redirect()->route('NotFound');
        }
    }


    /**
     * Update SEO tab
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @param  int $webmasterId
     * @return \Illuminate\Http\Response
     */

    public function seo(Request $request, $webmasterId, $id)
    {
        $WebmasterSection = WebmasterSection::find($webmasterId);
        if (count($WebmasterSection) > 0) {
            //
            $Topic = Topic::find($id);
            if (count($Topic) > 0) {

                $Topic->seo_title_ar = $request->seo_title_ar;
                $Topic->seo_title_en = $request->seo_title_en;
                $Topic->seo_description_ar = $request->seo_description_ar;
                $Topic->seo_description_en = $request->seo_description_en;
                $Topic->seo_keywords_ar = $request->seo_keywords_ar;
                $Topic->seo_keywords_en = $request->seo_keywords_en;
                $Topic->updated_by = Auth::user()->id;
                $Topic->save();
                return redirect()->action('TopicsController@edit', [$webmasterId, $id])->with('doneMessage',
                    trans('backLang.saveDone'))->with('activeTab', 'seo');
            } else {
                return redirect()->action('TopicsController@index', $webmasterId);
            }
        } else {
            return redirect()->route('NotFound');
        }
    }

    /**
     * Store a newly photos.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $webmasterId
     * @param  int $id
     * @return \Illuminate\Http\Response
     */

    public function photos(Request $request, $webmasterId, $id)
    {
        $WebmasterSection = WebmasterSection::find($webmasterId);
        if (count($WebmasterSection) > 0) {
            //
            $this->validate($request, [
                'file' => 'image|max:3000',
            ]);

            $next_nor_no = Photo::where('topic_id', '=', $id)->max('row_no');
            if ($next_nor_no < 1) {
                $next_nor_no = 1;
            } else {
                $next_nor_no++;
            }

            // Start of Upload Files
            $formFileName = "file";
            $fileFinalName = "";
            $fileFinalTitle = ""; // Original file name without extension
            if ($request->$formFileName != "") {
                $fileFinalTitle = basename($request->file($formFileName)->getClientOriginalName(),
                    '.' . $request->file($formFileName)->getClientOriginalExtension());
                $fileFinalName = time() . rand(1111,
                        9999) . '.' . $request->file($formFileName)->getClientOriginalExtension();
                $path = $this->getUploadPath();
                $request->file($formFileName)->move($path, $fileFinalName);
            }
            // End of Upload Files
            if ($fileFinalName != "") {
                $Photo = new Photo;
                $Photo->row_no = $next_nor_no;
                $Photo->file = $fileFinalName;
                $Photo->title = $fileFinalTitle;
                $Photo->topic_id = $id;
                $Photo->created_by = Auth::user()->id;
                $Photo->save();

                return response()->json('success', 200);
            } else {
                return response()->json('error', 400);
            }
        } else {
            return redirect()->route('NotFound');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @param  int $webmasterId
     * @param  int $photo_id
     * @return \Illuminate\Http\Response
     */
    public function photosDestroy($webmasterId, $id, $photo_id)
    {
        $WebmasterSection = WebmasterSection::find($webmasterId);
        if (count($WebmasterSection) > 0) {
            // Check Permissions
            if (!@Auth::user()->permissionsGroup->delete_status) {
                return Redirect::to(route('NoPermission'))->send();
            }
            //
            $Photo = Photo::find($photo_id);
            if (count($Photo) > 0) {
                // Delete a Topic photo
                if ($Photo->photo_file != "") {
                    File::delete($this->getUploadPath() . $Photo->photo_file);
                }


                $Photo->delete();
                return redirect()->action('TopicsController@edit', [$webmasterId, $id])->with('doneMessage',
                    trans('backLang.deleteDone'))->with('activeTab', 'photos');
            } else {
                return redirect()->action('TopicsController@index', $webmasterId);
            }
        } else {
            return redirect()->route('NotFound');
        }
    }


    /**
     * Update all selected resources in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  buttonNames , array $ids[],$webmasterId
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function photosUpdateAll(Request $request, $webmasterId, $id)
    {
        $WebmasterSection = WebmasterSection::find($webmasterId);
        if (count($WebmasterSection) > 0) {
            //
            if ($request->action == "order") {
                foreach ($request->row_ids as $rowId) {
                    $Photo = Photo::find($rowId);
                    if (count($Photo) > 0) {
                        $row_no_val = "row_no_" . $rowId;
                        $Photo->row_no = $request->$row_no_val;
                        $Photo->save();
                    }
                }

            } elseif ($request->action == "delete") {
                // Check Permissions
                if (!@Auth::user()->permissionsGroup->delete_status) {
                    return Redirect::to(route('NoPermission'))->send();
                }
                // Delete Photos
                $Photos = Photo::wherein('id', $request->ids)->get();
                foreach ($Photos as $Photo) {
                    if ($Photo->file != "") {
                        File::delete($this->getUploadPath() . $Photo->file);
                    }
                }

                Photo::wherein('id', $request->ids)
                    ->delete();

            }
            return redirect()->action('TopicsController@edit', [$webmasterId, $id])->with('doneMessage',
                trans('backLang.saveDone'))->with('activeTab', 'photos');
        } else {
            return redirect()->route('NotFound');
        }
    }



    // Comments Functions

    /**
     * Show all comments.
     *
     * @param  int $webmasterId
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function topicsComments($webmasterId, $id)
    {
        $WebmasterSection = WebmasterSection::find($webmasterId);
        if (count($WebmasterSection) > 0) {
            return redirect()->action('TopicsController@edit', [$webmasterId, $id])->with('activeTab', 'comments');
        } else {
            return redirect()->route('NotFound');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  int $webmasterId
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function commentsCreate($webmasterId, $id)
    {
        $WebmasterSection = WebmasterSection::find($webmasterId);
        if (count($WebmasterSection) > 0) {
            // Check Permissions
            if (!@Auth::user()->permissionsGroup->add_status) {
                return Redirect::to(route('NoPermission'))->send();
            }
            return redirect()->action('TopicsController@edit', [$webmasterId, $id])->with('activeTab',
                'comments')->with('commentST', 'create');
        } else {
            return redirect()->route('NotFound');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $webmasterId
     * @return \Illuminate\Http\Response
     */
    public function commentsStore(Request $request, $webmasterId, $id)
    {
        $WebmasterSection = WebmasterSection::find($webmasterId);
        if (count($WebmasterSection) > 0) {
            //
            $this->validate($request, [
                'name' => 'required',
                'email' => 'required',
                'comment' => 'required'
            ]);


            $next_nor_no = Comment::where('topic_id', '=', $id)->max('row_no');
            if ($next_nor_no < 1) {
                $next_nor_no = 1;
            } else {
                $next_nor_no++;
            }

            $Comment = new Comment;
            $Comment->row_no = $next_nor_no;
            $Comment->name = $request->name;
            $Comment->email = $request->email;
            $Comment->comment = $request->comment;
            $Comment->topic_id = $id;
            $Comment->date = date("Y-m-d H:i:s");
            $Comment->status = 1;
            $Comment->created_by = Auth::user()->id;
            $Comment->save();

            return redirect()->action('TopicsController@edit', [$webmasterId, $id])->with('doneMessage',
                trans('backLang.saveDone'))->with('activeTab', 'comments');
        } else {
            return redirect()->route('NotFound');
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @param  int $webmasterId
     * @param  int $comment_id
     * @return \Illuminate\Http\Response
     */
    public function commentsEdit($webmasterId, $id, $comment_id)
    {
        $WebmasterSection = WebmasterSection::find($webmasterId);
        if (count($WebmasterSection) > 0) {
            // Check Permissions
            if (!@Auth::user()->permissionsGroup->edit_status) {
                return Redirect::to(route('NoPermission'))->send();
            }

            $Comment = Comment::find($comment_id);
            if (count($Comment) > 0) {
                return redirect()->action('TopicsController@edit', [$webmasterId, $id])->with('activeTab',
                    'comments')->with('commentST', 'edit')->with('Comment', $Comment);
            } else {
                return redirect()->action('TopicsController@edit', [$webmasterId, $id])->with('activeTab', 'comments');
            }
        } else {
            return redirect()->route('NotFound');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @param  int $webmasterId
     * @param  int $comment_id
     * @return \Illuminate\Http\Response
     */
    public function commentsUpdate(Request $request, $webmasterId, $id, $comment_id)
    {
        $WebmasterSection = WebmasterSection::find($webmasterId);
        if (count($WebmasterSection) > 0) {
            //
            $Comment = Comment::find($comment_id);
            if (count($Comment) > 0) {


                $this->validate($request, [
                    'name' => 'required',
                    'email' => 'required',
                    'comment' => 'required'
                ]);
                $Comment->name = $request->name;
                $Comment->email = $request->email;
                $Comment->comment = $request->comment;
                $Comment->status = $request->status;
                $Comment->updated_by = Auth::user()->id;
                $Comment->save();
                return redirect()->action('TopicsController@edit', [$webmasterId, $id])->with('doneMessage',
                    trans('backLang.saveDone'))->with('activeTab', 'comments');
            } else {
                return redirect()->action('TopicsController@edit', [$webmasterId, $id])->with('activeTab', 'comments');
            }
        } else {
            return redirect()->route('NotFound');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @param  int $webmasterId
     * @param  int $comment_id
     * @return \Illuminate\Http\Response
     */
    public function commentsDestroy($webmasterId, $id, $comment_id)
    {
        $WebmasterSection = WebmasterSection::find($webmasterId);
        if (count($WebmasterSection) > 0) {
            // Check Permissions
            if (!@Auth::user()->permissionsGroup->delete_status) {
                return Redirect::to(route('NoPermission'))->send();
            }
            //
            $Comment = Comment::find($comment_id);
            if (count($Comment) > 0) {
                $Comment->delete();
                return redirect()->action('TopicsController@edit', [$webmasterId, $id])->with('doneMessage',
                    trans('backLang.deleteDone'))->with('activeTab', 'comments');
            } else {
                return redirect()->action('TopicsController@edit', [$webmasterId, $id])->with('activeTab', 'comments');
            }
        } else {
            return redirect()->route('NotFound');
        }
    }


    /**
     * Update all selected resources in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  buttonNames , array $ids[],$webmasterId
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function commentsUpdateAll(Request $request, $webmasterId, $id)
    {
        $WebmasterSection = WebmasterSection::find($webmasterId);
        if (count($WebmasterSection) > 0) {
            //
            if ($request->action == "order") {
                foreach ($request->row_ids as $rowId) {
                    $Comment = Comment::find($rowId);
                    if (count($Comment) > 0) {
                        $row_no_val = "row_no_" . $rowId;
                        $Comment->row_no = $request->$row_no_val;
                        $Comment->save();
                    }
                }
            } elseif ($request->action == "activate") {
                Comment::wherein('id', $request->ids)
                    ->update(['status' => 1]);

            } elseif ($request->action == "block") {
                Comment::wherein('id', $request->ids)
                    ->update(['status' => 0]);

            } elseif ($request->action == "delete") {
                // Check Permissions
                if (!@Auth::user()->permissionsGroup->delete_status) {
                    return Redirect::to(route('NoPermission'))->send();
                }

                Comment::wherein('id', $request->ids)
                    ->delete();

            }
            return redirect()->action('TopicsController@edit', [$webmasterId, $id])->with('doneMessage',
                trans('backLang.saveDone'))->with('activeTab', 'comments');
        } else {
            return redirect()->route('NotFound');
        }
    }


    // Maps Functions

    /**
     * Show all Maps.
     *
     * @param  int $webmasterId
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function topicsMaps($webmasterId, $id)
    {
        $WebmasterSection = WebmasterSection::find($webmasterId);
        if (count($WebmasterSection) > 0) {
            return redirect()->action('TopicsController@edit', [$webmasterId, $id])->with('activeTab', 'maps');
        } else {
            return redirect()->route('NotFound');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  int $webmasterId
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function mapsCreate($webmasterId, $id)
    {
        $WebmasterSection = WebmasterSection::find($webmasterId);
        if (count($WebmasterSection) > 0) {
            // Check Permissions
            if (!@Auth::user()->permissionsGroup->add_status) {
                return Redirect::to(route('NoPermission'))->send();
            }
            return redirect()->action('TopicsController@edit', [$webmasterId, $id])->with('activeTab',
                'maps')->with('mapST', 'create');
        } else {
            return redirect()->route('NotFound');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $webmasterId
     * @return \Illuminate\Http\Response
     */
    public function mapsStore(Request $request, $webmasterId, $id)
    {
        $WebmasterSection = WebmasterSection::find($webmasterId);
        if (count($WebmasterSection) > 0) {
            //
            $this->validate($request, [
                'longitude' => 'required',
                'longitude' => 'required'
            ]);


            $next_nor_no = Map::where('topic_id', '=', $id)->max('row_no');
            if ($next_nor_no < 1) {
                $next_nor_no = 1;
            } else {
                $next_nor_no++;
            }

            $Map = new Map;
            $Map->row_no = $next_nor_no;
            $Map->longitude = $request->longitude;
            $Map->latitude = $request->latitude;
            $Map->title_ar = $request->title_ar;
            $Map->title_en = $request->title_en;
            $Map->details_ar = $request->details_ar;
            $Map->details_en = $request->details_en;
            $Map->icon = $request->icon;
            $Map->topic_id = $id;
            $Map->status = 1;
            $Map->created_by = Auth::user()->id;
            $Map->save();

            return redirect()->action('TopicsController@edit', [$webmasterId, $id])->with('doneMessage',
                trans('backLang.saveDone'))->with('activeTab', 'maps');
        } else {
            return redirect()->route('NotFound');
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @param  int $webmasterId
     * @param  int $map_id
     * @return \Illuminate\Http\Response
     */
    public function mapsEdit($webmasterId, $id, $map_id)
    {
        $WebmasterSection = WebmasterSection::find($webmasterId);
        if (count($WebmasterSection) > 0) {
            // Check Permissions
            if (!@Auth::user()->permissionsGroup->edit_status) {
                return Redirect::to(route('NoPermission'))->send();
            }

            $Map = Map::find($map_id);
            if (count($Map) > 0) {
                return redirect()->action('TopicsController@edit', [$webmasterId, $id])->with('activeTab',
                    'maps')->with('mapST', 'edit')->with('Map', $Map);
            } else {
                return redirect()->action('TopicsController@edit', [$webmasterId, $id])->with('activeTab', 'maps');
            }
        } else {
            return redirect()->route('NotFound');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @param  int $webmasterId
     * @param  int $map_id
     * @return \Illuminate\Http\Response
     */
    public function mapsUpdate(Request $request, $webmasterId, $id, $map_id)
    {
        $WebmasterSection = WebmasterSection::find($webmasterId);
        if (count($WebmasterSection) > 0) {
            //
            $Map = Map::find($map_id);
            if (count($Map) > 0) {


                $this->validate($request, [
                    'longitude' => 'required',
                    'longitude' => 'required'
                ]);
                $Map->longitude = $request->longitude;
                $Map->latitude = $request->latitude;
                $Map->title_ar = $request->title_ar;
                $Map->title_en = $request->title_en;
                $Map->details_ar = $request->details_ar;
                $Map->details_en = $request->details_en;
                $Map->icon = $request->icon;
                $Map->status = $request->status;
                $Map->updated_by = Auth::user()->id;
                $Map->save();
                return redirect()->action('TopicsController@edit', [$webmasterId, $id])->with('doneMessage',
                    trans('backLang.saveDone'))->with('activeTab', 'maps');
            } else {
                return redirect()->action('TopicsController@edit', [$webmasterId, $id])->with('activeTab', 'maps');
            }
        } else {
            return redirect()->route('NotFound');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @param  int $webmasterId
     * @param  int $map_id
     * @return \Illuminate\Http\Response
     */
    public function mapsDestroy($webmasterId, $id, $map_id)
    {
        $WebmasterSection = WebmasterSection::find($webmasterId);
        if (count($WebmasterSection) > 0) {
            // Check Permissions
            if (!@Auth::user()->permissionsGroup->delete_status) {
                return Redirect::to(route('NoPermission'))->send();
            }
            //
            $Map = Map::find($map_id);
            if (count($Map) > 0) {
                $Map->delete();
                return redirect()->action('TopicsController@edit', [$webmasterId, $id])->with('doneMessage',
                    trans('backLang.deleteDone'))->with('activeTab', 'maps');
            } else {
                return redirect()->action('TopicsController@edit', [$webmasterId, $id])->with('activeTab', 'maps');
            }
        } else {
            return redirect()->route('NotFound');
        }
    }


    /**
     * Update all selected resources in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  buttonNames , array $ids[],$webmasterId
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function mapsUpdateAll(Request $request, $webmasterId, $id)
    {
        $WebmasterSection = WebmasterSection::find($webmasterId);
        if (count($WebmasterSection) > 0) {
            //
            if ($request->action == "order") {
                foreach ($request->row_ids as $rowId) {
                    $Map = Map::find($rowId);
                    if (count($Map) > 0) {
                        $row_no_val = "row_no_" . $rowId;
                        $Map->row_no = $request->$row_no_val;
                        $Map->save();
                    }
                }
            } elseif ($request->action == "activate") {
                Map::wherein('id', $request->ids)
                    ->update(['status' => 1]);

            } elseif ($request->action == "block") {
                Map::wherein('id', $request->ids)
                    ->update(['status' => 0]);

            } elseif ($request->action == "delete") {

                // Check Permissions
                if (!@Auth::user()->permissionsGroup->delete_status) {
                    return Redirect::to(route('NoPermission'))->send();
                }

                Map::wherein('id', $request->ids)
                    ->delete();

            }
            return redirect()->action('TopicsController@edit', [$webmasterId, $id])->with('doneMessage',
                trans('backLang.saveDone'))->with('activeTab', 'maps');
        } else {
            return redirect()->route('NotFound');
        }
    }

}
