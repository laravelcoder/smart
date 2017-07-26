@extends('backEnd.layout')

@section('headerInclude')
    <link href="{{ URL::to("backEnd/libs/js/iconpicker/fontawesome-iconpicker.min.css") }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
@endsection

@section('content')
    <div class="padding">
        <div class="box m-b-0">
            <div class="box-header dker">
            <h1 class="pull-left">Tests</h1>
                <h3><i class="material-icons">&#xe3c9;</i> {{ trans('tests.tests') }}</h3>

                <small>
                    <a href="{{ route('adminHome') }}">{{ trans('tests.home') }}</a> /

                    <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('admin.tests.create') !!}">Add New</a>
                </small>

            </div>
            <div class="box-tool">
                <ul class="nav">
                    <li class="nav-item inline">
                        <a class="nav-link" href="">
                         route('tests', WebmasterSection->id)
                            <i class="material-icons md-18">×</i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="box nav-active-border b-info">
            <ul class="nav nav-md">
                <li class="nav-item inline">
                    <a class="nav-link {{ $tab_1 }}" href data-toggle="tab" data-target="#tab_details">
                        <span class="text-md"><i class="material-icons"> &#xe31e;</i>  trans('tests.topicTabSection')  </span>
                    </a>
                </li>

            </ul>
            <div class="tab-content clear b-t">
                <div class="tab-pane  {{ $tab_1 }}" id="tab_details">
                    <div class="box-body">
                    @include('flash::message')

                     @include('backEnd.tests.table')
                    </div>
                </div>
             </div>
        </div>
    </div>
@endsection

@section('footerInclude')

    <script src="{{ URL::to("backEnd/libs/js/iconpicker/fontawesome-iconpicker.js") }}"></script>
    <script>
        $(function() {
            $('.icp-auto').iconpicker({ placement: '{{ (trans('backLang.direction')=="rtl")?"topLeft":"topRight" }}'});
        });
    </script>
@endsection
