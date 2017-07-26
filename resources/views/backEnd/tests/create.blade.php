@extends('backEnd.layout')

@section('headerInclude')
    <link href="{{ URL::to("backEnd/libs/js/iconpicker/fontawesome-iconpicker.min.css") }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
@endsection

@section('content')

    <div class="padding">
        <div class="box">
            <div class="box-header dker">
                <h3><i class="material-icons"> &#xe02e;</i>
                        {{ trans('tests.topicNew') }} {!! trans('tests.'. WebmasterSection->name) !!}
                        Test
                </h3>
                <small>
                    <a href="{{ route('adminHome') }}">{{ trans('backLang.home') }}</a> /
                    <a>{!! trans('backLang.'.$WebmasterSection->name) !!}</a>
                </small>
            </div>
            <div class="box-tool">
                <ul class="nav">
                    <li class="nav-item inline">
                        <a class="nav-link" href="{{ route('topics', $test->id ) }}">
                            <i class="material-icons md-18">×</i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="box-body">
            @include('adminlte-templates::common.errors')
                     {{--       admin.tests.update', $test->id  --}}

                {!! Form::open(['route' => 'admin.tests.store']) !!}


                        @include('backEnd.tests.fields')

                {!! Form::close() !!}

            </div>
        </div>
    </div>

@endsection

@section('footerInclude')

    <script src="{{ URL::to("backEnd/libs/js/iconpicker/fontawesome-iconpicker.js") }}"></script>
    <script>
        $(function() {
            $('.icp-auto').iconpicker({ placement: '{{ (trans('tests.direction')=="rtl")?"topLeft":"topRight" }}'});
        });
    </script>
@endsection

{{--
MODEL_NAME_PLURAL_CAMEL  = tests
MODEL_NAME_CAMEL  = test
PRIMARY_KEY_NAME = id
MODEL_NAME_HUMAN =  Test
VIEW_PREFIX = backEnd.
MODEL_NAME_PLURAL_SNAKE = tests
ROUTE_NAMED_PREFIX = admin.
--}}
