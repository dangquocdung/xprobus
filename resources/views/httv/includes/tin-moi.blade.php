@php
    $link_title_var = "title_" . trans('backLang.boxCode');    
    $summary_var = "summary_" . trans('backLang.boxCode');
    $title_var = "title_" . trans('backLang.boxCode');
    $slug_var = "seo_url_slug_" . trans('backLang.boxCode');
@endphp


    
@if (!empty($LatestNewsAll))
                
    <!-- Post Block Wrapper Start -->
    <div class="post-block-wrapper mb-15">
        
        <!-- Post Block Head Start -->
        <div class="head">
            
            <!-- Title -->
            <h4 class="title">Tin mới</h4>
            
        </div><!-- Post Block Head End -->
        
        <!-- Post Block Body Start -->
        <div class="body">
            
            <!-- Sidebar Post Slider Start -->
            <div class="sidebar-post-carousel post-block-carousel life-style-post-carousel">

                @foreach($LatestNewsAll as $Topic)

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
                
                    <!-- Post Start -->
                    <div class="post post-overlay life-style-post">
                        <div class="post-wrap">

                            <!-- Image -->

                            <div class="image"s>
                                @if ($Topic->photo_file != null && file_exists('uploads/thumbs/'.$Topic->photo_file))
                                    <img src="uploads/thumbs/{{ $Topic->photo_file }}" alt="{{ $Topic->$title_var}}">
                                @else
                                    <img src="httv/img/post/post-48.jpg" alt="{{ $Topic->$title_var}}">
                                @endif
                            </div>

                            <!-- Category -->
                            @php

                                $cats = $Topic->categories;

                                $cat = $cats->shift();
                                
                            @endphp

                            @if (!empty($cat))

                                <a href="#" class="category travel">{{ $cat->section->$title_var }} </a>

                            @endif

                            <!-- Content -->
                            <div class="content-tlq">

                                <!-- Title -->
                                <h4 class="title"><a href="{{ $topic_link_url }}"> {{ $Topic->title_vi }}</a></h4>

                                <!-- Meta -->
                                <div class="meta fix">
                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ \Carbon\Carbon::parse($Topic->date)->format('d/m/Y') }}</span>
                                </div>

                            </div>

                        </div>
                    </div><!-- Overlay Post End -->
                    

                @endforeach

            </div>
            
        </div><!-- Post Block Body End -->
        
    </div><!-- Post Block Wrapper End -->

@endif

  

