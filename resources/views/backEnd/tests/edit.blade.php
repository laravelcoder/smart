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
                        {{ trans('backLang.topicNew') }} {!! trans('backLang.'.$WebmasterSection->name) !!}
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
                        <a class="nav-link" href="{{ route('topics',$WebmasterSection->id) }}">
                            <i class="material-icons md-18">×</i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="box-body">
            @include('adminlte-templates::common.errors')
                     {{--       admin.tests.update', $test->id  --}}

                   {!! Form::model($test, ['route' => ['admin.tests.update', $test->id], 'method' => 'patch']) !!}

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
            $('.icp-auto').iconpicker({ placement: '{{ (trans('backLang.direction')=="rtl")?"topLeft":"topRight" }}'});
        });
    </script>
@endsection
