   <!-- Section: Services 1 -->
    <section id="services">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-12">
              <h2 class="mt-0 mb-0 line-height-1 text-center">Our <span class="text-theme-color-2"> Services</span></h2>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="owl-carousel-4col our-services-gallery" data-dots="true">


@if(count($HomeTopics)>0)

              <div class="gallery-item">
                <div class="thumb">
                  <img class="img-fullwidth" src="//placehold.it/280x280" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a data-lightbox="image" href="//placehold.it/280x280"><i class="fa fa-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="our-services-details">
                  <h4 class="title mb-5 mt-10"><a href="#">Computer Repair</a></h4>
                  <p>Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                  <a href="#" class="btn btn-theme-colored btn-flat mt-15 btn-sm" role="button">Get Service</a>
                  <span class="pull-right ml-10 mt-12 font-17 text-theme-colored">Cost: $500</span>
                </div>
              </div>
@endif

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
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
