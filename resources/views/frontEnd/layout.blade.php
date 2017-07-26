<!DOCTYPE html>
<html lang="{{ trans('backLang.code') }}" dir="{{ trans('backLang.direction') }}">
<head>
    @include('frontEnd.partials.head')
    @include('frontEnd.includes.colors')
    @yield('json-ld')
</head>
<?php
$bdy_class = "";
$bdy_bg_color = "";
$bdy_bg_image = "";
if (Helper::GeneralSiteSettings("style_type")) {
    $bdy_class = "boxed-layout";
    if (Helper::GeneralSiteSettings("style_bg_type") == 0) {
        $bdy_bg_color = "background-color: #000;";
        if (Helper::GeneralSiteSettings("style_bg_color") != "") {
            $bdy_bg_color = "background-attachment: fixed;background-color: " . Helper::GeneralSiteSettings("style_bg_color") . ";";
        }
        $bdy_bg_image = "";
    } elseif (Helper::GeneralSiteSettings("style_bg_type") == 1) {
        $bdy_bg_color = "";
        $bdy_bg_image = "background-attachment: fixed;background-image:url(" . URL::to('uploads/pattern/' . Helper::GeneralSiteSettings("style_bg_pattern")) . ")";
    } elseif (Helper::GeneralSiteSettings("style_bg_type") == 2) {
        $bdy_bg_color = "";
        $bdy_bg_image = "background-attachment: fixed;background-image:url(" . URL::to('uploads/settings/' . Helper::GeneralSiteSettings("style_bg_image")) . ")";
    }
}
?>
{{-- <body class="js {!!  $bdy_class !!}" style=" {!!  $bdy_bg_color !!} {!! $bdy_bg_image !!}"> --}}
<body class="js  " style="  ">
    <div id="wrapper" class="clearfix">
    {{--   <!-- preloader -->
      <div id="preloader">
        <div id="spinner">
          <img alt="" src="{!! asset('/frontEnd/images/preloaders/5.gif') !!}">
        </div>
        <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
      </div> --}}
    {{-- @include('frontEnd.partials.header') --}}
      <!-- Start main-content -->
      <div class="main-content">
        <!-- Content Section -->
        @yield('content')
        <!-- end of Content Section -->
      </div>
      <!-- end main-content -->
      @include('frontEnd.partials.footer')

      <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    </div>
<!-- end wrapper -->

  <!-- Footer Scripts -->
  <!-- JS | Custom script for all pages -->
  <script src="{!! asset('/frontEnd/js/custom.js') !!}"></script>


  <script type="text/javascript" src="{!! asset('/frontEnd/js/revolution-slider/js/extensions/revolution.extension.actions.min.js') !!}"></script>
  <script type="text/javascript" src="{!! asset('/frontEnd/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js') !!}"></script>
  <script type="text/javascript" src="{!! asset('/frontEnd/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js') !!}"></script>
  <script type="text/javascript" src="{!! asset('/frontEnd/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js') !!}"></script>
  <script type="text/javascript" src="{!! asset('/frontEnd/js/revolution-slider/js/extensions/revolution.extension.migration.min.js') !!}"></script>
  <script type="text/javascript" src="{!! asset('/frontEnd/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js') !!}"></script>
  <script type="text/javascript" src="{!! asset('/frontEnd/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js') !!}"></script>
  <script type="text/javascript" src="{!! asset('/frontEnd/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js') !!}"></script>
  <script type="text/javascript" src="{!! asset('/frontEnd/js/revolution-slider/js/extensions/revolution.extension.video.min.js') !!}"></script>
</body>
</html>
