
  <!-- Meta Tags -->
  <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
{{--   <meta name="description" content="Affordable Programmer, Hire programmers to work on your websites, online software or help you manage your project or developments" /> --}}
  {{-- <meta name="keywords" content="" /> --}}
  <meta name="author" content="Phillip Madsen" />
  <title>{{$PageTitle}} {{($PageTitle !="")? "|":""}} {{ Helper::GeneralSiteSettings("site_title_" . trans('backLang.boxCode')) }}</title>
  <meta name="description" content="{{$PageDescription}}"/>
  <meta name="keywords" content="{{$PageKeywords}}"/>
{{--   <meta name="author" content="{{ URL::to('') }}"/> --}}
{{--  --}}
  <!-- Page Title -->
  {{-- <title>Affordable Programmer | Website & Online Software Development Company</title> --}}

  <!-- Favicon and Touch Icons -->
  <link href="{!! asset('/frontEnd/images/favicon.png') !!}" rel="shortcut icon" type="image/png">
  <link href="{!! asset('/frontEnd/images/apple-touch-icon.png') !!}" rel="apple-touch-icon">
  <link href="{!! asset('/frontEnd/images/apple-touch-icon-72x72.png') !!}" rel="apple-touch-icon" sizes="72x72">
  <link href="{!! asset('/frontEnd/images/apple-touch-icon-114x114.png') !!}" rel="apple-touch-icon" sizes="114x114">
  <link href="{!! asset('/frontEnd/images/apple-touch-icon-144x144.png') !!}" rel="apple-touch-icon" sizes="144x144">

  <!-- Stylesheet -->
  <link href="{!! asset('/frontEnd/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css">
  <link href="{!! asset('/frontEnd/css/jquery-ui.min.css') !!}" rel="stylesheet" type="text/css">
  <link href="{!! asset('/frontEnd/css/animate.css') !!}" rel="stylesheet" type="text/css">
  <link href="{!! asset('/frontEnd/css/css-plugin-collections.css') !!}" rel="stylesheet"/>
  <!-- CSS | menuzord megamenu skins -->
  <link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
  <!-- CSS | Main style file -->
  <link href="{!! asset('/frontEnd/css/style-main.css') !!}" rel="stylesheet" type="text/css">
  <!-- CSS | Preloader Styles -->
  <link href="{!! asset('/frontEnd/css/preloader.css') !!}" rel="stylesheet" type="text/css">
  <!-- CSS | Custom Margin Padding Collection -->
  <link href="{!! asset('/frontEnd/css/custom-bootstrap-margin-padding.css') !!}" rel="stylesheet" type="text/css">
  <!-- CSS | Responsive media queries -->
  <link href="{!! asset('/frontEnd/css/responsive.css') !!}" rel="stylesheet" type="text/css">
  <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
  <!-- <link href="{!! asset('/frontEnd/css/style.css') !!}" rel="stylesheet" type="text/css"> -->

  <!-- Revolution Slider 5.x CSS settings -->
  <link  href="{!! asset('/frontEnd/js/revolution-slider/css/settings.css') !!}" rel="stylesheet" type="text/css"/>
  <link  href="{!! asset('/frontEnd/js/revolution-slider/css/layers.css') !!}" rel="stylesheet" type="text/css"/>
  <link  href="{!! asset('/frontEnd/js/revolution-slider/css/navigation.css') !!}" rel="stylesheet" type="text/css"/>

  <!-- CSS | Theme Color -->
  <link href="{!! asset('/frontEnd/css/colors/theme-skin-color-set-1.css') !!}" rel="stylesheet" type="text/css">

  <!-- external javascripts -->
  <script src="{!! asset('/frontEnd/js/jquery-2.2.4.min.js') !!}"></script>
  <script src="{!! asset('/frontEnd/js/jquery-ui.min.js') !!}"></script>
  <script src="{!! asset('/frontEnd/js/bootstrap.min.js') !!}"></script>
  <!-- JS | jquery plugin collection for this theme -->
  <script src="{!! asset('/frontEnd/js/jquery-plugin-collection.js') !!}"></script>

  <!-- Revolution Slider 5.x SCRIPTS -->
  <script src="{!! asset('/frontEnd/js/revolution-slider/js/jquery.themepunch.tools.min.js') !!}"></script>
  <script src="{!! asset('/frontEnd/js/revolution-slider/js/jquery.themepunch.revolution.min.js') !!}"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="{!! asset('/frontEnd/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') !!}"></script>
    <script src="{!! asset('/frontEnd/https://oss.maxcdn.com/respond/1.4.2/respond.min.js') !!}"></script>
  <![endif]-->
