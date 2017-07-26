@if(count($TextBanners)>0)
    @foreach($TextBanners->slice(0,1) as $TextBanner)
        <?php
        try {
            $TextBanner_type = $TextBanner->webmasterBanner->type;
        } catch (Exception $e) {
            $TextBanner_type = 0;
        }
        ?>
    @endforeach
    <?php
    $title_var = "title_" . trans('backLang.boxCode');
    $details_var = "details_" . trans('backLang.boxCode');
    $file_var = "file_" . trans('backLang.boxCode');

    $col_width = 12;
    if (count($TextBanners) == 2) {
        $col_width = 6;
    }
    if (count($TextBanners) == 3) {
        $col_width = 4;
    }
    if (count($TextBanners) > 3) {
        $col_width = 3;
    }
    ?>
    <section class="content-row-no-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        @foreach($TextBanners as $TextBanner)
                            <div class="col-lg-{{$col_width}}">
                                <div class="box">
                                    <div class="box-gray aligncenter">
                                        @if($TextBanner->icon !="")
                                            <div class="icon">
                                                <i class="fa {{$TextBanner->icon}} fa-3x"></i>
                                            </div>
                                        @elseif($TextBanner->$file_var !="")
                                            <img src="{{ URL::to('uploads/banners/'.$TextBanner->$file_var) }}"
                                                 alt="{{ $TextBanner->$title_var }}"/>
                                        @endif
                                        <h4>{!! $TextBanner->$title_var !!}</h4>
                                        @if($TextBanner->$details_var !="")
                                            <p>{!! nl2br($TextBanner->$details_var) !!}</p>
                                        @endif

                                    </div>
                                    @if($TextBanner->link_url !="")
                                        <div class="box-bottom">
                                            <a href="{!! $TextBanner->link_url !!}">{{ trans('frontLang.moreDetails') }}</a>
                                        </div>
                                    @endif

                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
