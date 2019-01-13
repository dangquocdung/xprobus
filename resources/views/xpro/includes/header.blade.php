@php
    $slug_var = "seo_url_slug_" . trans('backLang.boxCode');
@endphp
<!-- HEADER -->
<header class="header">
    <div class="container">
        <!-- logo -->
        <div class="logo">
            <a href="home.html"> <img class="l-white" src="xpro/assets/images/logo.png" alt=""/> <img class="l-black" src="xpro/assets/images/logo-black.png" alt=""/> </a>
        </div>
        <!--End logo-->
        <!-- Navigation Menu -->
        <nav class='navigation'>
            <ul>
                @foreach($HeaderMenuLinks as $HeaderMenuLink)
                <li class="nav-has-sub">
                        <a href="javascript:void(0)">{{ $HeaderMenuLink->title_vi }}</a>
                    <!-- Nav Dropdown -->
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
                        
                    </ul>
                    <!-- End Nav Dropdown -->
                </li>
                @endforeach
            </ul>
        </nav>
        <!--End Navigation Menu -->
    </div>
</header>
<!-- END HEADER -->