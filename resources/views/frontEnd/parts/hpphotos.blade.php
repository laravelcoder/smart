@if(count($HomePhotos)>0)
    <section class="content-row-no-bg">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="home-row-head">
                        <h3 class="heading">{{ trans('frontLang.homeContents2Title') }}</h3>
                        <small>{{ trans('frontLang.homeContents2desc') }}</small>
                    </div>
                    <div class="row">
                        <section id="projects">
                            <ul id="thumbs" class="portfolio">
                                <?php
                                $title_var = "title_" . trans('backLang.boxCode');
                                $title_var2 = "title_" . trans('backLang.boxCodeOther');
                                $section_url = "";
                                $ph_count = 0;
                                ?>
                                @foreach($HomePhotos as $HomePhoto)
                                    <?php
                                    if ($HomePhoto->$title_var != "") {
                                        $title = $HomePhoto->$title_var;
                                    } else {
                                        $title = $HomePhoto->$title_var2;
                                    }
                                    $section_url = $HomePhoto->webmasterSection->name;
                                    ?>
                                    @foreach($HomePhoto->photos as $photo)
                                        @if($ph_count<12)
                                            <li class="col-lg-2 design" data-id="id-0" data-type="web">
                                                <div class="relative">
                                                    <div class="item-thumbs">
                                                        <a class="hover-wrap fancybox" data-fancybox-group="gallery"
                                                           title="{{ $title }}"
                                                           href="{{ URL::to('uploads/topics/'.$photo->file) }}">
                                                            <span class="overlay-img"></span>
                                                            <span class="overlay-img-thumb"><i class="fa fa-search-plus"></i></span>
                                                        </a>
                                                        <!-- Thumb Image and Description -->
                                                        <img src="{{ URL::to('uploads/topics/'.$photo->file) }}"
                                                             alt="{{ $title }}">
                                                    </div>
                                                </div>
                                            </li>
                                        @endif
                                        <?php
                                        $ph_count++;
                                        ?>
                                    @endforeach
                                @endforeach

                            </ul>
                        </section>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="more-btn">
                                <a href="{{ url($section_url) }}" class="btn btn-theme"><i class="fa fa-angle-left"></i>&nbsp; {{ trans('frontLang.viewMore') }} &nbsp;<i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>

                    @endif


                </div>
            </div>
        </div>
    </section>

