@php
    $link_title_var = "title_" . trans('backLang.boxCode');    
    $summary_var = "summary_" . trans('backLang.boxCode');
    $title_var = "title_" . trans('backLang.boxCode');
    $slug_var = "seo_url_slug_" . trans('backLang.boxCode');
@endphp

<!-- Tin bai -->
<div class="post-section section">
    @if (!empty($MainMenuLinks))

            <div class="row">
                        
                <div class="col-lg-7 col-12 box-mobile" style="padding-right:0px">

                    @foreach($MainMenuLinks as $MainMenuLink)

                        @if (count($MainMenuLink->webmasterSection->topics->where('status',1)) > 0)

                            <?php
                                if ($MainMenuLink->webmasterSection[$slug_var] != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                    if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                        $mmnnuu_link = url(trans('backLang.code')."/" .$MainMenuLink->webmasterSection[$slug_var]);
                                    }else{
                                        $mmnnuu_link = url($MainMenuLink->webmasterSection[$slug_var]);
                                    }
                                }else{
                                    if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                        $mmnnuu_link =url(trans('backLang.code')."/" .$MainMenuLink->webmasterSection['name']);
                                    }else{
                                        $mmnnuu_link =url($MainMenuLink->webmasterSection['name']);
                                    }
                                }
                            ?>

                            <!-- Post Block Wrapper Start -->
                            <div class="post-block-wrapper mb-15">
                            
                                <!-- Post Block Head Start -->
                                <div class="head businsee-head bg-dark">
                                    
                                    <!-- Title -->
                                    <h4 class="title"><a href="{{ $mmnnuu_link }}">{{ $MainMenuLink->title_vi }}</a></h4>
                                    
                                </div><!-- Post Block Head End -->

                                    <!-- Post Block Body Start -->
                                    <div class="body pb-0">

                                        <div class="row">

                                            @php

                                                $Topic = $MainMenuLink->webmasterSection->topics->where('status',1)->sortbyDesc('row_no')->first();

                                                $Topic1 = $Topic;

                                                if ($Topic->$slug_var != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                                    if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                        $topic_link_url = url(trans('backLang.code') . "/" . $Topic->$slug_var);
                                                    } else {
                                                        $topic_link_url = url($Topic->$slug_var);
                                                    }
                                                } else {
                                                    if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                        $topic_link_url = route('FrontendTopicByLang', ["lang" => trans('backLang.code'), "section" => $Topic->webmasterSection->name, "id" => $Topic->id]);
                                                    } else {
                                                        $topic_link_url = route('FrontendTopic', ["section" => $Topic->webmasterSection->name, "id" => $Topic->id]);
                                                    }
                                                }
                                                
                                            @endphp

                                            <!-- Post Wrapper Start -->
                                            <div class="col-md-6 col-12 mb-15">

                                                <!-- Post Start -->
                                                <div class="post post-overlay feature-post post-separator-border">
                                                    <div class="post-wrap">

                                                        <!-- Image -->

                                                        <a class="image mb-15" href="{{ $topic_link_url }}">
                                                            @if ($Topic->photo_file != null && file_exists('uploads/thumbs/'.$Topic->photo_file))
                                                                <img src="uploads/thumbs/{{ $Topic->photo_file }}" alt="{{ $Topic->$link_title_var}}">
                                                            @else
                                                                <img src="httv/img/post/post-11.jpg" alt="{{ $Topic->$link_title_var}}">
                                                            @endif
                                                        </a>

                                                        <!-- Category -->
                                                        @php

                                                            $cats = $Topic->categories;

                                                            $cat = $cats->shift();

                                                            $cat_url = url(trans('backLang.code') . "/" . $cat->section->seo_url_slug_vi);
                                                            
                                                        @endphp

                                                        <a href="{{ $cat_url }}" class="category travel">{{ $cat->section->$title_var }} </a>

                                                        <!-- Content -->
                                                        <div class="content mt-15">

                                                            <!-- Title -->
                                                            <h4 class="title"><a href="{{ $topic_link_url }}"> {{ $Topic->title_vi }}</a></h4>

                                                            <!-- Meta -->
                                                            <div class="meta fix">
                                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>&nbsp;{{ \Carbon\Carbon::parse($Topic->created_at)->format('d/m/Y H:i') }}</span>
                                                                <br>
                                                                <a href="#" class="meta-item author"><i class="fa fa-user"></i>&nbsp;{{ $Topic->user->name }}</a>

                                                            </div>

                                                            <!-- Description -->
                                                            <p align="justify">{{ $Topic->sapo }}</p>

                                                        </div>
                                                        
                                                    </div>
                                                </div><!-- Post End -->

                                            </div><!-- Post Wrapper End -->

                                            <!-- Small Post Wrapper Start -->
                                            <div class="col-md-6 col-12 mb-15">

                                                @foreach ($MainMenuLink->webmasterSection->topics->where('status',1)->sortbyDesc('row_no')->take(5) as $Topic )

                                                    @if ($Topic->id != $Topic1->id)

                                                        <?php
                                                            
                                                            if ($Topic->$slug_var != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                                                if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                                    $topic_link_url = url(trans('backLang.code') . "/" . $Topic->$slug_var);
                                                                } else {
                                                                    $topic_link_url = url($Topic->$slug_var);
                                                                }
                                                            } else {
                                                                if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                                    $topic_link_url = route('FrontendTopicByLang', ["lang" => trans('backLang.code'), "section" => $Topic->webmasterSection->name, "id" => $Topic->id]);
                                                                } else {
                                                                    $topic_link_url = route('FrontendTopic', ["section" => $Topic->webmasterSection->name, "id" => $Topic->id]);
                                                                }
                                                            }
                                                        ?>
                                                        
                                                        <!-- Post Small Start -->
                                                        <div class="post post-overlay post-small post-list feature-post post-separator-border">
                                                            <div class="post-wrap">

                                                                <!-- Image -->
                                                                <a class="image" href="{{ $topic_link_url }}">
                                                                    @if ($Topic->photo_file != null && file_exists('uploads/thumbs/'.$Topic->photo_file))
                                                                        <img src="/uploads/thumbs/{{ $Topic->photo_file }}" alt="{{ $Topic->$link_title_var}}" style="width:100%">
                                                                    @else
                                                                        <img src="/img/post/post-13.jpg" alt="{{ $Topic->$link_title_var}}">
                                                                    @endif
                                                                </a>

                                                                @php

                                                                    $cat = $Topic->categories->first();

                                                                    $cat_url = url(trans('backLang.code') . "/" . $cat->section->seo_url_slug_vi);
                                                                    
                                                                @endphp

                                                                <a href="{{ $cat_url }}" class="category sports"><small>{{ $cat->section->$title_var }}</small> </a>

                                                                <!-- Content -->
                                                                <div class="content">

                                                                    <!-- Title -->
                                                                    <h5 class="title"><a href="{{ $topic_link_url }}">{{ $Topic->$link_title_var}}</a></h5>

                                                                    <!-- Meta -->
                                                                    <div class="meta fix">
                                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ \Carbon\Carbon::parse($Topic->created_at)->format('d/m/Y H:i') }}</span>
                                                                    </div>

                                                                </div>
                                                                
                                                            </div>
                                                        </div><!-- Post Small End -->

                                                    @endif

                                                @endforeach

                                            </div><!-- Small Post Wrapper End -->

                                        </div>
                                                    
                                    </div><!-- Post Block Body End -->

                            </div><!-- Post Block Wrapper End -->

                        @endif
                        
                    @endforeach
                    
                </div>
                
                <!-- Sidebar Start -->
                
                <div class="col-lg-5 col-12 box-mobile">

                    {{--  @include('httv.includes.hinh-anh')  --}}

                    @foreach($RightMenuLinks as $MainMenuLink)

                        @if (count($MainMenuLink->webmasterSection->topics->where('status',1)) > 0)

                            <?php
                                if ($MainMenuLink->webmasterSection[$slug_var] != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                    if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                        $mmnnuu_link = url(trans('backLang.code')."/" .$MainMenuLink->webmasterSection[$slug_var]);
                                    }else{
                                        $mmnnuu_link = url($MainMenuLink->webmasterSection[$slug_var]);
                                    }
                                }else{
                                    if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                        $mmnnuu_link =url(trans('backLang.code')."/" .$MainMenuLink->webmasterSection['name']);
                                    }else{
                                        $mmnnuu_link =url($MainMenuLink->webmasterSection['name']);
                                    }
                                }
                            ?>
                        
                            <!-- Post Block Wrapper Start -->
                            <div class="post-block-wrapper mb-15">
                                
                                <!-- Post Block Head Start -->
                                <div class="head businsee-head bg-dark">
                                    
                                    <!-- Title -->
                                    <h4 class="title"><a href="{{ $mmnnuu_link }}">{{ $MainMenuLink->title_vi }}</a></h4>
                                    
                                </div><!-- Post Block Head End -->

                                    @php

                                        $Topic = $MainMenuLink->webmasterSection->topics->where('status',1)->sortbyDesc('id')->first();

                                        $Topic1 = $Topic;

                                        if ($Topic->$slug_var != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                            if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                $topic_link_url = url(trans('backLang.code') . "/" . $Topic->$slug_var);
                                            } else {
                                                $topic_link_url = url($Topic->$slug_var);
                                            }
                                        } else {
                                            if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                $topic_link_url = route('FrontendTopicByLang', ["lang" => trans('backLang.code'), "section" => $Topic->webmasterSection->name, "id" => $Topic->id]);
                                            } else {
                                                $topic_link_url = route('FrontendTopic', ["section" => $Topic->webmasterSection->name, "id" => $Topic->id]);
                                            }
                                        }
                                        
                                    @endphp
                                    
                                    <!-- Post Block Body Start -->
                                    <div class="body pb-0">

                                        <div class="row">
                                                    
                                            <!-- Post Wrapper Start -->
                                            <div class="col-md-6 col-12 mb-15">
                                                
                                                <!-- Post Start -->
                                                <div class="post feature-post post-separator-border">
                                                    <div class="post-wrap">

                                                        <!-- Image -->
                                                        <a class="image mb-15" href="{{ $topic_link_url }}">

                                                            @if ($Topic->photo_file != null && file_exists('uploads/thumbs/'.$Topic->photo_file))
                                                                <img src="uploads/thumbs/{{ $Topic->photo_file }}" alt="{{ $Topic->$link_title_var}}">
                                                            @else
                                                                <img src="httv/img/post/post-11.jpg" alt="{{ $Topic->$link_title_var}}">
                                                            @endif

                                                        </a>

                                                        @if (count($Topic->categories) > 0 )
                                                        
                                                            @php

                                                                $cat = $Topic->categories->first();
                                                                
                                                            @endphp

                                                            {{--  <a href="#" class="category sports">{{ $cat->section->$title_var }} </a>  --}}

                                                        @endif

                                                        <!-- Content -->
                                                        <div class="content mt-15">

                                                            <!-- Title -->
                                                            <h4 class="title"><a href="{{ $topic_link_url }}"> {{ $Topic->title_vi }}</a></h4>

                                                            <!-- Meta -->
                                                            <div class="meta fix">
                                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ \Carbon\Carbon::parse($Topic->created_at)->format('d/m/Y H:i') }}</span>
                                                            </div>

                                                            <p align="justify">{{ $Topic->sapo }}</p>
                                                            
                                                        </div>
                                                        
                                                    </div>
                                                </div><!-- Post End -->

                                            </div><!-- Post Wrapper End -->

                                            <!-- Small Post Wrapper Start -->
                                            <div class="col-md-6 col-12 mb-15">

                                                @foreach ($MainMenuLink->webmasterSection->topics->where('status',1)->sortbyDesc('id')->take(5) as $Topic )

                                                    @if ($Topic->id != $Topic1->id)

                                                        <?php
                                                            
                                                            if ($Topic->$slug_var != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                                                if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                                    $topic_link_url = url(trans('backLang.code') . "/" . $Topic->$slug_var);
                                                                } else {
                                                                    $topic_link_url = url($Topic->$slug_var);
                                                                }
                                                            } else {
                                                                if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                                    $topic_link_url = route('FrontendTopicByLang', ["lang" => trans('backLang.code'), "section" => $Topic->webmasterSection->name, "id" => $Topic->id]);
                                                                } else {
                                                                    $topic_link_url = route('FrontendTopic', ["section" => $Topic->webmasterSection->name, "id" => $Topic->id]);
                                                                }
                                                            }
                                                        ?>

                                                        <!-- Post Small Start -->
                                                        <div class="post post-small post-list feature-post post-separator-border">
                                                            <div class="post-wrap">

                                                                <!-- Content -->
                                                                <div class="content">

                                                                    <!-- Title -->
                                                                    <h5 class="title"><a href="{{ $topic_link_url }}">{{ $Topic->$link_title_var}}</a></h5>

                                                                    <!-- Meta -->
                                                                    <div class="meta fix">
                                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ \Carbon\Carbon::parse($Topic->created_at)->format('d/m/Y H:i') }}</span>
                                                                    </div>

                                                                </div>
                                                                
                                                            </div>
                                                        </div><!-- Post Small End -->

                                                    @endif
                
                                                @endforeach

                                            </div><!-- Small Post Wrapper End -->

                                        </div>
                                                    
                                    </div><!-- Post Block Body End -->

                            </div><!-- Post Block Wrapper End -->
                            @endif

                    @endforeach

                    @include('httv.includes.thong-ke')

                </div>
            </div>
        
    @endif
</div>
    