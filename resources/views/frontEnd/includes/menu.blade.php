<?php
// Current Full URL
$fullPagePath = Request::url();
// Char Count of Backend folder Plus 1
$envAdminCharCount = strlen(env('BACKEND_PATH')) + 1;
// URL after Root Path EX: admin/home
$urlAfterRoot = substr($fullPagePath, strpos($fullPagePath, env('BACKEND_PATH')) + $envAdminCharCount);
?>
<?php
$category_title_var = "title_" . trans('backLang.boxCode');
?>
<div class="navbar-collapse collapse ">
    <ul class="menuzord-menu nav navbar-nav">
        <?php
        $link_title_var = "title_" . trans('backLang.boxCode');
        ?>
        @foreach($HeaderMenuLinks as $HeaderMenuLink)

            @if($HeaderMenuLink->type==3)
                <?php
                // Section with drop list
                ?>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown"
                       data-delay="0" data-close-others="true">{{ $HeaderMenuLink->$link_title_var }}</a>

                    @if(count($HeaderMenuLink->webmasterSection->sections) >0)
                        {{--categories drop down--}}
                        <ul class="dropdown-menu">
                            @foreach($HeaderMenuLink->webmasterSection->sections as $MnuCategory)
                                <li>
                                    <a href="{{ route('FrontendTopicsByCat',["section"=>$HeaderMenuLink->webmasterSection->name,"cat"=>$MnuCategory->id]) }}">
                                        @if($MnuCategory->icon !=="")
                                            <i class="fa {{$MnuCategory->icon}}"></i> &nbsp;
                                        @endif
                                        {{$MnuCategory->$category_title_var}}</a>
                                </li>
                            @endforeach
                        </ul>
                    @elseif(count($HeaderMenuLink->webmasterSection->topics) >0)
                        {{--topics drop down--}}
                        <ul class="dropdown-menu">
                            @foreach($HeaderMenuLink->webmasterSection->topics as $MnuTopic)
                                <li>
                                    <a href="{{route('FrontendTopic',["section"=>$HeaderMenuLink->webmasterSection->name,"id"=>$MnuTopic->id]) }}">
                                        @if($MnuTopic->icon !=="")
                                            <i class="fa {{$MnuTopic->icon}}"></i> &nbsp;
                                        @endif
                                        {{$MnuTopic->$category_title_var}}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endif

                </li>
            @elseif($HeaderMenuLink->type==2)
                <?php
                // Section Link
                ?>
                <li>
                    <a href="{{ url($HeaderMenuLink->webmasterSection->name) }}">{{ $HeaderMenuLink->$link_title_var }}</a>
                </li>
            @elseif($HeaderMenuLink->type==1)
                <?php
                // Direct Link
                ?>
                <li><a href="{{ url($HeaderMenuLink->link) }}">{{ $HeaderMenuLink->$link_title_var }}</a></li>
            @else
                <?php
                // Main title ( have drop down menu )
                ?>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown"
                       data-delay="0" data-close-others="true">{{ $HeaderMenuLink->$link_title_var }}</a>
                    @if(count($HeaderMenuLink->subMenus) >0)
                        <ul class="dropdown-menu">
                            @foreach($HeaderMenuLink->subMenus as $subMenu)
                                @if($subMenu->type==3)
                                    <?php
                                    // sub menu - Section will drop list
                                    ?>
                                    <li><a href="javascript:void(0)" class="dropdown-toggle " data-toggle="dropdown"
                                           data-hover="dropdown" data-delay="0"
                                           data-close-others="true">{{ $subMenu->$link_title_var }}</a>
                                        <?php
                                        // make list
                                        // - check is categories list
                                        // - or pages list
                                        ?>

                                        @if(count($subMenu->webmasterSection->sections) >0)
                                            {{--categories drop down--}}
                                            <ul class="dropdown-menu">
                                                @foreach($subMenu->webmasterSection->sections as $SubMnuCategory)
                                                    <li>
                                                        <a href="{{ route('FrontendTopicsByCat',["section"=>$subMenu->webmasterSection->name,"cat"=>$SubMnuCategory->id]) }}">
                                                            @if($SubMnuCategory->icon !=="")
                                                                <i class="fa {{$SubMnuCategory->icon}}"></i> &nbsp;
                                                            @endif
                                                            {{$SubMnuCategory->$category_title_var}}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @elseif(count($subMenu->webmasterSection->topics) >0)
                                            {{--topics drop down--}}
                                            <ul class="dropdown-menu">
                                                @foreach($subMenu->webmasterSection->topics as $SubMnuTopic)
                                                    <li>
                                                        <a href="{{route('FrontendTopic',$SubMnuTopic->id)}}">{{$SubMnuTopic->$category_title_var}}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif

                                    </li>
                                @elseif($subMenu->type==2)
                                    <?php
                                    // sub menu - Section Link
                                    ?>
                                    <li>
                                        <a href="{{ url($subMenu->webmasterSection->name) }}">{{ $subMenu->$link_title_var }}</a>
                                    </li>
                                @elseif($subMenu->type==1)
                                    <?php
                                    // sub menu - Direct Link
                                    ?>
                                    <li><a href="{{ url($subMenu->link) }}">{{ $subMenu->$link_title_var }}</a>
                                    </li>
                                @else
                                    <?php
                                    // sub menu - Main title ( have drop down menu )
                                    ?>
                                    <li><a href="javascript:void(0)">{{ $subMenu->$link_title_var }}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endif
        @endforeach

    </ul>
</div>
