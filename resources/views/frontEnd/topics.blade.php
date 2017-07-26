@extends('frontEnd.layout')

@section('content')

    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="breadcrumb">

                        </li>
                        @if(@$WebmasterSection!="none")
                            <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">{!! trans('backLang.'.$WebmasterSection->name) !!}</li>
                        @elseif(@$search_word!="")
                            <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">{{ @$search_word }}</li>
                        @else
                            <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">{{ $User->name }}</li>
                        @endif
                        @if($CurrentCategory!="none")
                            @if(count($CurrentCategory) >0)
                                <?php $category_title_var = "title_" . trans('backLang.boxCode'); ?>
                                <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><i class="icon-angle-right"></i>{{ $CurrentCategory->$category_title_var }} </li>
                            @endif
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </section>





    <section class="inner-header divider parallax layer-overlay overlay-dark-8" data-bg-img="http://placehold.it/1920x1280">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title text-white">Blog Details</h2>
              <ol class="breadcrumb text-center text-black mt-10">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active text-white">Page Title</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>







     <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="http://placehold.it/1920x1280">
      <div class="container pt-30 pb-30">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-sm-8 text-left flip xs-text-center">
              <h2 class="title text-black-333">Page Title</h2>
            </div>
            <div class="col-sm-4">
              <ol class="breadcrumb text-right sm-text-center text-black mt-10" itemscope itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="{{ route("Home") }}"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i>
                @if(@$WebmasterSection!="none")
                    <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    {!! trans('backLang.'.$WebmasterSection->name) !!}
                    </li>
                @elseif(@$search_word!="")
                    <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    {{ @$search_word }}
                    </li>
                @else
                    <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    {{ $User->name }}
                    </li>
                @endif
                @if($CurrentCategory!="none")
                    @if(count($CurrentCategory) >0)
                        <?php $category_title_var = "title_" . trans('backLang.boxCode'); ?>
                        <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <i class="icon-angle-right"></i>{{ $CurrentCategory->$category_title_var }}
                        </li>
                    @endif
                @endif
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="#">Pages</a></li>
                <li class="active text-gray-silver" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">Page Title</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>



    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-{{(count($Categories)>0)? "8":"12"}}">
                    @if($Topics->total() == 0)
                        <div class="alert alert-warning"> <i class="fa fa-info"></i> &nbsp; {{ trans('frontLang.noData') }} </div>
                    @else
                        <div class="row">
                            @if($Topics->total() > 0)

                                <?php
                                $title_var = "title_" . trans('backLang.boxCode');
                                $title_var2 = "title_" . trans('backLang.boxCodeOther');
                                $details_var = "details_" . trans('backLang.boxCode');
                                $details_var2 = "details_" . trans('backLang.boxCodeOther');
                                $i = 0;
                                ?>
                                @foreach($Topics as $Topic)
                                    <?php
                                    if ($Topic->$title_var != "") {
                                        $title = $Topic->$title_var;
                                    } else {
                                        $title = $Topic->$title_var2;
                                    }
                                    if ($Topic->$details_var != "") {
                                        $details = $details_var;
                                    } else {
                                        $details = $details_var2;
                                    }
                                    $section = "";
                                    try {
                                        if ($Topic->section->$title_var != "") {
                                            $section = $Topic->section->$title_var;
                                        } else {
                                            $section = $Topic->section->$title_var2;
                                        }
                                    } catch (Exception $e) {
                                        $section = "";
                                    }

                                    // set row div
                                    if (($i == 1 && count($Categories) > 0) || ($i == 2 && count($Categories) == 0)) {
                                        $i = 0;
                                        echo "</div><div class='row'>";
                                    }
                                    ?>
                                    <div class="col-lg-{{(count($Categories)>0)? "12":"6"}}">

                                        <article>
                                            @if($Topic->webmasterSection->type==2 && $Topic->video_file!="")
                                                {{--video--}}
                                                <div class="post-video">
                                                    <div class="post-heading">
                                                        <h3 itemprop="hasPart about">
                                                            <a href="{{route('FrontendTopic',["section"=>$Topic->webmasterSection->name,"id"=>$Topic->id])}}" itemprop="url">
                                                                @if($Topic->icon !="")
                                                                    <i class="fa {!! $Topic->icon !!} "></i>&nbsp;
                                                                @endif
                                                                {{ $title }}
                                                            </a></h3>
                                                    </div>
                                                    <div class="video-container">
                                                        @if($Topic->video_type ==1)
                                                            <?php
                                                            $Youtube_id = Helper::Get_youtube_video_id($Topic->video_file);
                                                            ?>
                                                            @if($Youtube_id !="")
                                                                {{-- Youtube Video --}}
                                                                <iframe allowfullscreen
                                                                        src="https://www.youtube.com/embed/{{ $Youtube_id }}">
                                                                </iframe>
                                                            @endif
                                                        @elseif($Topic->video_type ==2)
                                                            <?php
                                                            $Vimeo_id = Helper::Get_vimeo_video_id($Topic->video_file);
                                                            ?>
                                                            @if($Vimeo_id !="")
                                                                {{-- Vimeo Video --}}
                                                                <iframe allowfullscreen
                                                                        src="http://player.vimeo.com/video/{{ $Vimeo_id }}?title=0&amp;byline=0">
                                                                </iframe>
                                                            @endif

                                                        @else
                                                            <video width="100%" height="300" controls>
                                                                <source src="{{ URL::to('uploads/topics/'.$Topic->video_file) }}"
                                                                        type="video/mp4">
                                                                Your browser does not support the video tag.
                                                            </video>
                                                        @endif


                                                    </div>
                                                </div>
                                            @elseif($Topic->webmasterSection->type==3 && $Topic->audio_file!="")
                                                {{--audio--}}
                                                <div class="post-video">
                                                    <div class="post-heading">
                                                        <h3 itemprop="hasPart about">
                                                            <a href="{{route('FrontendTopic',["section"=>$Topic->webmasterSection->name,"id"=>$Topic->id])}}">
                                                                @if($Topic->icon !="")
                                                                    <i class="fa {!! $Topic->icon !!} "></i>&nbsp;
                                                                @endif
                                                                {{ $title }}
                                                            </a></h3>
                                                    </div>
                                                    @if($Topic->photo_file !="")
                                                        <img itemprop="image" src="{{ URL::to('uploads/topics/'.$Topic->photo_file) }}" alt="{{ $title }}"/>
                                                    @endif
                                                    <div>
                                                        <audio controls>
                                                            <source src="{{ URL::to('uploads/topics/'.$Topic->audio_file) }}"
                                                                    type="audio/mpeg">
                                                            Your browser does not support the audio element.
                                                        </audio>

                                                    </div>
                                                </div>

                                            @elseif(count($Topic->photos)>0)
                                                {{--photo slider--}}
                                                <div class="post-slider">
                                                    <div class="post-heading">
                                                        <h3>
                                                            <a href="{{route('FrontendTopic',["section"=>$Topic->webmasterSection->name,"id"=>$Topic->id])}}" itemprop="url">
                                                                @if($Topic->icon !="")
                                                                    <i class="fa {!! $Topic->icon !!} "></i>&nbsp;
                                                                @endif
                                                                {{ $title }}
                                                            </a></h3>
                                                    </div>
                                                    <!-- start flexslider -->
                                                    <div class="p-slider flexslider">
                                                        <ul class="slides">
                                                            @if($Topic->photo_file !="")
                                                                <li>
                                                                    <img itemprop="image" src="{{ URL::to('uploads/topics/'.$Topic->photo_file) }}" alt="{{ $title }}" itemprop="image" />
                                                                </li>
                                                            @endif

                                                            @foreach($Topic->photos as $photo)
                                                                <li>
                                                                    <img itemprop="image" src="{{ URL::to('uploads/topics/'.$photo->file) }}" alt="{{ $photo->title  }}" itemprop="image" />
                                                                </li>
                                                            @endforeach

                                                        </ul>
                                                    </div>
                                                    <!-- end flexslider -->
                                                </div>

                                            @else
                                                {{--one photo--}}
                                                <div class="post-image">
                                                    <div class="post-heading">
                                                        <h3 itemprop="hasPart about">
                                                            <a href="{{route('FrontendTopic',["section"=>$Topic->webmasterSection->name,"id"=>$Topic->id])}}" itemprop="url">
                                                                @if($Topic->icon !="")
                                                                    <i class="fa {!! $Topic->icon !!} "></i>&nbsp;
                                                                @endif
                                                                {{ $title }}
                                                            </a></h3>
                                                    </div>
                                                    @if($Topic->photo_file !="")
                                                        <img src="{{ URL::to('uploads/topics/'.$Topic->photo_file) }}" alt="{{ $title }}" itemprop="image" />
                                                    @endif
                                                </div>
                                            @endif


                                            {{-- <p>{{ str_limit(strip_tags($Topic->$details), $limit = 350, $end = '...') }}</p> --}}

                                            <div class="bottom-article">
                                                <ul class="meta-post">
                                                    @if($Topic->webmasterSection->date_status)
                                                        <li><i class="fa fa-calendar"></i> <a>{!! $Topic->date  !!}</a>
                                                        </li>
                                                    @endif
                                                    <li><i class="fa fa-user"></i> <a
                                                                href="{{route('FrontendUserTopics',$Topic->created_by)}}">{{$Topic->user->name}}</a>
                                                    </li>
                                                    <li><i class="fa fa-eye"></i> <a>{{ trans('frontLang.visits') }}
                                                            : {!! $Topic->visits !!}</a></li>
                                                    @if($Topic->webmasterSection->comments_status)
                                                        <li><i class="fa fa-comments"></i>
                                                        <a href="{{route('FrontendTopic',["section"=>$Topic->webmasterSection->name,"id"=>$Topic->id])}}#comments"  itemprop="url">
                                                        {{count($Topic->comments)}}
                                                                Comments</a>
                                                        </li>
                                                    @endif
                                                </ul>
                                                <a href="{{route('FrontendTopic',["section"=>$Topic->webmasterSection->name,"id"=>$Topic->id])}}"
                                                   class="pull-right">{{ trans('frontLang.readMore') }} <i class="fa fa-caret-{{ trans('backLang.right') }}"></i></a>
                                            </div>
                                        </article>
                                    </div>
                                    <?php $i++; ?>
                                @endforeach

                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                {!! $Topics->links() !!}
                            </div>
                            <div class="col-lg-4 text-right">
                                <br>
                                <small>{{ $Topics->firstItem() }} - {{ $Topics->lastItem() }} {{ trans('backLang.of') }}
                                    ( {{ $Topics->total()  }} ) {{ trans('backLang.records') }}</small>
                            </div>
                        </div>
                    @endif
                    @endif
                </div>
                @if(count($Categories)>0)
                    @include('frontEnd.includes.slide')
                @endif
            </div>
        </div>
    </section>

@endsection
