@php
    $slug_var = "seo_url_slug_" . trans('backLang.boxCode');
@endphp
<!-- HEADER -->
<header class="header">
    <div class="container">
        <!-- logo -->
        <div class="logo">
            <a href="home.html"> 
                <img class="l-white" src="xpro/assets/images/logo.png" alt=""/> 
                <img class="l-black" src="xpro/assets/images/logo-black.png" alt=""/> 
            </a>
        </div>
        <!--End logo-->
        <!-- Navigation Menu -->
        <nav class='navigation'>
            <ul>
                @foreach($HeaderMenuLinks as $HeaderMenuLink)

                    @if($HeaderMenuLink->type==3)

                        <li class="nav-has-sub">
                                <a href="javascript:void(0)">{{ $HeaderMenuLink->title_vi }}</a>
                            <!-- Nav Dropdown -->

                                @if(count($HeaderMenuLink->webmasterSection->sections) >0)
                                    <ul class="nav-dropdown">

                                            @foreach($HeaderMenuLink->webmasterSection->sections->where('father_id','0')->sortby('title_vi') as $MnuCategory)

                                                <?php
                                                    if ($MnuCategory->$slug_var != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                                        if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                            $Category_link_url = url(trans('backLang.code')."/" .$MnuCategory->$slug_var);
                                                        }else{
                                                            $Category_link_url = url($MnuCategory->$slug_var);
                                                        }
                                                    } else {
                                                        if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                            $Category_link_url = route('FrontendTopicsByCatWithLang', ["lang"=>trans('backLang.code'),"section" => $HeaderMenuLink->webmasterSection->name, "cat" => $MnuCategory->id]);
                                                        }else{
                                                            $Category_link_url = route('FrontendTopicsByCat', ["section" => $HeaderMenuLink->webmasterSection->name, "cat" => $MnuCategory->id]);
                                                        }
                                                    }
                                                ?>
                                                <li>
                                                    <a href="{{ $Category_link_url }}">{{ $MnuCategory->title_vi }}</a>
                                                </li>
                                            @endforeach
                                    
                                    </ul><!-- Submenu End -->

                                @elseif(count($HeaderMenuLink->webmasterSection->topics) >0)
                                    
                                    <ul class="nav-dropdown">
                                        @foreach($HeaderMenuLink->webmasterSection->topics->where('status','1') as $MnuTopic)
                                            @if($MnuTopic->expire_date =='' || ($MnuTopic->expire_date !='' && $MnuTopic->expire_date >= date("Y-m-d")))
                                                <li>
                                                    <?php
                                                        if ($MnuTopic->$slug_var != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                                            if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                                $topic_link_url = url(trans('backLang.code')."/" .$MnuTopic->$slug_var);
                                                            }else{
                                                                $topic_link_url = url($MnuTopic->$slug_var);
                                                            }
                                                        } else {
                                                            if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                                $topic_link_url = route('FrontendTopicByLang', ["lang"=>trans('backLang.code'),"section" => $HeaderMenuLink->webmasterSection->name, "id" => $MnuTopic->id]);
                                                            }else{
                                                                $topic_link_url = route('FrontendTopic', ["section" => $HeaderMenuLink->webmasterSection->name, "id" => $MnuTopic->id]);
                                                            }
                                                        }
                                                    ?>
                                                    <a href="{{ $topic_link_url }}">
                                                        @if($MnuTopic->icon !="")
                                                            <i class="fa {{$MnuTopic->icon}}"></i> &nbsp;
                                                        @endif
                                                        {{$MnuTopic->title_vi}}</a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                @endif
                                
                            <!-- End Nav Dropdown -->
                        </li>
                    
                    @else

                        <li>
                            <a href="{{ (trim($HeaderMenuLink->link) !="") ? $HeaderMenuLink->link:$mmnnuu_link }}">{{ $HeaderMenuLink->title_vi }}</a>
                        </li>

                    @endif
                
                @endforeach
            </ul>
        </nav>
        <!--End Navigation Menu -->
    </div>
</header>
<!-- END HEADER -->