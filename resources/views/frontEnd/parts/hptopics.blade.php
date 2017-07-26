@if(count($HomeTopics)>0)
    <section class="content-row-bg">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="home-row-head">
                        <h3 class="heading">{{ trans('frontLang.homeContents1Title') }}</h3>
                        <small>{{ trans('frontLang.homeContents1desc') }}</small>
                    </div>
                    <div class="row">
                        <?php
                        $title_var = "title_" . trans('backLang.boxCode');
                        $title_var2 = "title_" . trans('backLang.boxCodeOther');
                        $details_var = "details_" . trans('backLang.boxCode');
                        $details_var2 = "details_" . trans('backLang.boxCodeOther');
                        $section_url = "";
                        ?>
                        @foreach($HomeTopics as $HomeTopic)
                            <?php
                            if ($HomeTopic->$title_var != "") {
                                $title = $HomeTopic->$title_var;
                            } else {
                                $title = $HomeTopic->$title_var2;
                            }
                            if ($HomeTopic->$details_var != "") {
                                $details = $details_var;
                            } else {
                                $details = $details_var2;
                            }
                            $section_url = $HomeTopic->webmasterSection->name;
                            ?>
                            <div class="col-lg-4 text-center">
                                <h4>
                                    @if($HomeTopic->icon !="")
                                        <i class="fa {!! $HomeTopic->icon !!} "></i>&nbsp;
                                    @endif
                                    {{ $title }}
                                </h4>
                                @if($HomeTopic->photo_file !="")
                                    <img src="{{ URL::to('uploads/topics/'.$HomeTopic->photo_file) }}"
                                         alt="{{ $title }}"/>
                                @endif
                                <p class="text-justify">{{ str_limit(strip_tags($HomeTopic->$details), $limit = 400, $end = '...') }}
                                    &nbsp; <a href="{{route('FrontendTopic',["section"=>$HomeTopic->webmasterSection->name,"id"=>$HomeTopic->id])}}">{{ trans('frontLang.readMore') }}
                                        <i
                                                class="fa fa-caret-{{ trans('backLang.right') }}"></i></a>
                                </p>

                            </div>
                        @endforeach

                    </div>
                </div>
            </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="more-btn">
                            <a href="{{ url($section_url) }}" class="btn btn-theme"><i
                                        class="fa fa-angle-left"></i>&nbsp; {{ trans('frontLang.viewMore') }}
                                &nbsp;<i
                                        class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

        </div>
    </section>
@endif
