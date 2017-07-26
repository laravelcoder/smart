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
                <h3><i class="material-icons">&#xe3c9;</i> {{ trans('backLang.sectionEdit') }}</h3>
                <small>
                    <a href="{{ route('adminHome') }}">{{ trans('backLang.home') }}</a> /
                    <a>{!! trans('backLang.'.$WebmasterSection->name) !!}</a> /
                    <a>{{ trans('backLang.sectionsOf') }}  {!! trans('backLang.'.$WebmasterSection->name) !!}</a>
                </small>
            </div>
            <div class="box-tool">
                <ul class="nav">
                    <li class="nav-item inline">
                        <a class="nav-link" href="{{ route('sections',$WebmasterSection->id) }}">
                            <i class="material-icons md-18">×</i>
                        </a>
                    </li>
                </ul>
            </div>

        </div>

        <?php
        $tab_1 = "active";
        $tab_2 = "";
        if (Session::has('activeTab')) {
            if (Session::get('activeTab') == "seo") {
                $tab_1 = "";
                $tab_2 = "active";
            }
        }
        ?>
        <div class="box nav-active-border b-info">
            <ul class="nav nav-md">
                <li class="nav-item inline">
                    <a class="nav-link {{ $tab_1 }}" href data-toggle="tab" data-target="#tab_details">
                        <span class="text-md"><i class="material-icons">
                                &#xe31e;</i> {{ trans('backLang.topicTabSection') }}</span>
                    </a>
                </li>
                @if(Helper::GeneralWebmasterSettings("seo_status"))
                    <li class="nav-item inline">
                        <a class="nav-link  {{ $tab_2 }}" href data-toggle="tab" data-target="#tab_seo">
                    <span class="text-md"><i class="material-icons">
                            &#xe8e5;</i> {{ trans('backLang.seoTabTitle') }}</span>
                        </a>
                    </li>
                @endif
            </ul>
            <div class="tab-content clear b-t">
                <div class="tab-pane  {{ $tab_1 }}" id="tab_details">
                    <div class="box-body">
                        {{Form::open(['route'=>['sectionsUpdate',"webmasterId"=>$WebmasterSection->id,"id"=>$Sections->id],'method'=>'POST', 'files' => true])}}

                        @if($WebmasterSection->sections_status==2)
                            <div class="form-group row">
                                <label for="father_id"
                                       class="col-sm-2 form-control-label">{!!  trans('backLang.sectionFather') !!} </label>
                                <div class="col-sm-10">
                                    <select name="father_id" id="father_id" class="form-control c-select">
                                        <option value="0">- - {!!  trans('backLang.sectionNoFather') !!} - -</option>
                                        <?php
                                        $title_var = "title_" . trans('backLang.boxCode');
                                        $title_var2 = "title_" . trans('backLang.boxCodeOther');
                                        ?>
                                        @foreach ($fatherSections as $fatherSection)
                                            <?php
                                            if ($fatherSection->$title_var != "") {
                                                $title = $fatherSection->$title_var;
                                            } else {
                                                $title = $fatherSection->$title_var2;
                                            }
                                            ?>
                                            <option value="{{ $fatherSection->id  }}" {{ ($fatherSection->id == $Sections->father_id) ? "selected='selected'":""  }}>{{ $title }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                        @else
                            {!! Form::hidden('father_id',$Sections->father_id) !!}
                        @endif

                        @if(Helper::GeneralWebmasterSettings("ar_box_status"))
                            <div class="form-group row">
                                <label for="title_ar"
                                       class="col-sm-2 form-control-label">{!!  trans('backLang.sectionName') !!}
                                    @if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")){!!  trans('backLang.arabicBox') !!}@endif
                                </label>
                                <div class="col-sm-10">
                                    {!! Form::text('title_ar',$Sections->title_ar, array('placeholder' => '','class' => 'form-control','id'=>'title_ar','required'=>'', 'dir'=>trans('backLang.rtl'))) !!}
                                </div>
                            </div>
                        @endif
                        @if(Helper::GeneralWebmasterSettings("en_box_status"))
                            <div class="form-group row">
                                <label for="title_en"
                                       class="col-sm-2 form-control-label">{!!  trans('backLang.sectionName') !!}
                                    @if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")){!!  trans('backLang.englishBox') !!}@endif
                                </label>
                                <div class="col-sm-10">
                                    {!! Form::text('title_en',$Sections->title_en, array('placeholder' => '','class' => 'form-control','id'=>'title_en','required'=>'', 'dir'=>trans('backLang.ltr'))) !!}
                                </div>
                            </div>
                        @endif

                        <div class="form-group row">
                            <label for="photo"
                                   class="col-sm-2 form-control-label">{!!  trans('backLang.sectionIcon') !!}</label>
                            <div class="col-sm-10">
                                @if($Sections->photo!="")
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="col-sm-4 box p-a-xs">
                                                <a target="_blank"
                                                   href="{{ URL::to('uploads/sections/'.$Sections->photo) }}"><img
                                                            src="{{ URL::to('uploads/sections/'.$Sections->photo) }}"
                                                            class="img-responsive">
                                                    {{ $Sections->photo }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                {!! Form::file('photo', array('class' => 'form-control','id'=>'photo','accept'=>'image/*')) !!}
                            </div>
                        </div>

                        <div class="form-group row m-t-md" style="margin-top: 0 !important;">
                            <div class="col-sm-offset-2 col-sm-10">
                                <small>
                                    <i class="material-icons">&#xe8fd;</i>
                                    {!!  trans('backLang.imagesTypes') !!}
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="link_status"
                                   class="col-sm-2 form-control-label">{!!  trans('backLang.status') !!}</label>
                            <div class="col-sm-10">
                                <div class="radio">
                                    <label class="ui-check ui-check-md">
                                        {!! Form::radio('status','1',($Sections->status==1) ? true : false, array('id' => 'status1','class'=>'has-value')) !!}
                                        <i class="dark-white"></i>
                                        {{ trans('backLang.active') }}
                                    </label>
                                    &nbsp; &nbsp;
                                    <label class="ui-check ui-check-md">
                                        {!! Form::radio('status','0',($Sections->status==0) ? true : false, array('id' => 'status2','class'=>'has-value')) !!}
                                        <i class="dark-white"></i>
                                        {{ trans('backLang.notActive') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        @if($WebmasterSection->section_icon_status)
                            <div class="form-group row">
                                <label for="icon"
                                       class="col-sm-2 form-control-label">{!!  trans('backLang.sectionIcon') !!}</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        {!! Form::text('icon',$Sections->icon, array('placeholder' => '','class' => 'form-control icp icp-auto','id'=>'title_en', 'data-placement'=>'bottomRight')) !!}
                                        <span class="input-group-addon"></span>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div class="form-group row m-t-md">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary m-t"><i class="material-icons">
                                        &#xe31b;</i> {!! trans('backLang.update') !!}</button>
                                <a href="{{ route('sections',$WebmasterSection->id) }}"
                                   class="btn btn-default m-t"><i class="material-icons">
                                        &#xe5cd;</i> {!! trans('backLang.cancel') !!}</a>
                            </div>
                        </div>

                        {{Form::close()}}
                    </div>
                </div>
                @if(Helper::GeneralWebmasterSettings("seo_status"))
                    <div class="tab-pane  {{ $tab_2 }}" id="tab_seo">

                        <div class="box-body">
                            {{Form::open(['route'=>['sectionsSEOUpdate',"webmasterId"=>$WebmasterSection->id,"id"=>$Sections->id],'method'=>'POST', 'files' => true])}}

                            @if(Helper::GeneralWebmasterSettings("ar_box_status"))
                                <div class="form-group row">
                                    <label for="seo_title_ar"
                                           class="col-sm-2 form-control-label">{!!  trans('backLang.topicSEOTitle') !!}
                                        @if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")){!!  trans('backLang.arabicBox') !!}@endif
                                    </label>
                                    <div class="col-sm-10">
                                        {!! Form::text('seo_title_ar',$Sections->seo_title_ar, array('placeholder' => '','class' => 'form-control','id'=>'title_ar','maxlength'=>'65', 'dir'=>trans('backLang.rtl'))) !!}
                                    </div>
                                </div>
                            @endif
                            @if(Helper::GeneralWebmasterSettings("en_box_status"))
                                <div class="form-group row">
                                    <label for="seo_title_en"
                                           class="col-sm-2 form-control-label">{!!  trans('backLang.topicSEOTitle') !!}
                                        @if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")){!!  trans('backLang.englishBox') !!}@endif
                                    </label>
                                    <div class="col-sm-10">
                                        {!! Form::text('seo_title_en',$Sections->seo_title_en, array('placeholder' => '','class' => 'form-control','id'=>'title_en','maxlength'=>'65', 'dir'=>trans('backLang.ltr'))) !!}
                                    </div>
                                </div>
                            @endif

                            @if(Helper::GeneralWebmasterSettings("ar_box_status"))
                                <div class="form-group row">
                                    <label for="seo_description_ar"
                                           class="col-sm-2 form-control-label">{!!  trans('backLang.topicSEODesc') !!}
                                        @if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")){!!  trans('backLang.arabicBox') !!}@endif
                                    </label>
                                    <div class="col-sm-10">
                                        {!! Form::textarea('seo_description_ar',$Sections->seo_description_ar, array('placeholder' => trans('backLang.metaDescription'),'class' => 'form-control','id'=>'seo_description_ar','maxlength'=>'165', 'dir'=>trans('backLang.rtl'),'rows'=>'2')) !!}
                                    </div>
                                </div>
                            @endif
                            @if(Helper::GeneralWebmasterSettings("en_box_status"))
                                <div class="form-group row">
                                    <label for="seo_description_en"
                                           class="col-sm-2 form-control-label">{!!  trans('backLang.topicSEODesc') !!}
                                        @if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")){!!  trans('backLang.englishBox') !!}@endif
                                    </label>
                                    <div class="col-sm-10">
                                        {!! Form::textarea('seo_description_en',$Sections->seo_description_en, array('placeholder' => trans('backLang.metaDescription'),'class' => 'form-control','id'=>'seo_description_en','maxlength'=>'165', 'dir'=>trans('backLang.ltr'),'rows'=>'2')) !!}
                                    </div>
                                </div>
                            @endif
                            @if(Helper::GeneralWebmasterSettings("ar_box_status"))
                                <div class="form-group row">
                                    <label for="seo_keywords_ar"
                                           class="col-sm-2 form-control-label">{!!  trans('backLang.topicSEOKeywords') !!}
                                        @if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")){!!  trans('backLang.arabicBox') !!}@endif
                                    </label>
                                    <div class="col-sm-10">
                                        {!! Form::textarea('seo_keywords_ar',$Sections->seo_keywords_ar, array('placeholder' => trans('backLang.metaKeywords'),'class' => 'form-control','id'=>'seo_keywords_ar', 'dir'=>trans('backLang.rtl'),'rows'=>'2')) !!}
                                    </div>
                                </div>
                            @endif
                            @if(Helper::GeneralWebmasterSettings("en_box_status"))
                                <div class="form-group row">
                                    <label for="seo_keywords_en"
                                           class="col-sm-2 form-control-label">{!!  trans('backLang.topicSEOKeywords') !!}
                                        @if(Helper::GeneralWebmasterSettings("ar_box_status") && Helper::GeneralWebmasterSettings("en_box_status")){!!  trans('backLang.englishBox') !!}@endif
                                    </label>
                                    <div class="col-sm-10">
                                        {!! Form::textarea('seo_keywords_en',$Sections->seo_keywords_en, array('placeholder' => trans('backLang.metaKeywords'),'class' => 'form-control','id'=>'seo_keywords_en', 'dir'=>trans('backLang.ltr'),'rows'=>'2')) !!}
                                    </div>
                                </div>
                            @endif

                            <div class="form-group row m-t-md">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary m-t"><i class="material-icons">
                                            &#xe31b;</i> {!! trans('backLang.update') !!}</button>
                                    <a href="{{ route('sections',$WebmasterSection->id) }}"
                                       class="btn btn-default m-t"><i class="material-icons">
                                            &#xe5cd;</i> {!! trans('backLang.cancel') !!}</a>
                                </div>
                            </div>

                            {{Form::close()}}
                        </div>

                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection

@section('footerInclude')

    <script src="{{ URL::to("backEnd/libs/js/iconpicker/fontawesome-iconpicker.js") }}"></script>
    <script>
        $(function () {
            $('.icp-auto').iconpicker({placement: '{{ (trans('backLang.direction')=="rtl")?"topLeft":"topRight" }}'});
        });
    </script>
@endsection