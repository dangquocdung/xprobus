@php
    $link_title_var = "title_" . trans('backLang.boxCode');    
    $summary_var = "summary_" . trans('backLang.boxCode');
    $title_var = "title_" . trans('backLang.boxCode');
    $slug_var = "seo_url_slug_" . trans('backLang.boxCode');
@endphp


<!-- Recent Section Start -->
    <div class="recent-section section mb-15">
            
            <!-- Feature Post Row Start -->
            <div class="row">
                
                <div class="col-12 box-mobile">
                    
                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper dark bg-dark">
                        
                        <!-- Post Block Head Start -->
                        <div class="head life-style-head">
                            
                            <!-- Title -->
                            <h4 class="title">Tin mới đăng</h4>
                            
                        </div><!-- Post Block Head End -->
                        
                        <!-- Post Block Body Start -->
                        <div class="body">
                            
                            <div class="three-column-post-carousel column-post-carousel post-block-carousel dark life-style-post-carousel row">
                                
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
                                    <div class="post post-overlay life-style-post" style="margin:10px">
                                        <div class="post-wrap">
                
                                            <!-- Image -->
                
                                            <div class="image">
                                                @if ($Topic->photo_file != null && file_exists('uploads/thumbs/'.$Topic->photo_file))
                                                    <img src="uploads/thumbs/{{ $Topic->photo_file }}" alt="{{ $Topic->$title_var}}" style="max-height:240px;">
                                                @else
                                                    <img src="httv/img/post/post-48.jpg" alt="{{ $Topic->$title_var}}">
                                                @endif
                                            </div>
                
                                            <!-- Category -->
                                            @php

                                                $cat = $Topic->categories->first();

                                                $cat_url = url(trans('backLang.code') . "/" . $cat->section->seo_url_slug_vi);
                                                
                                            @endphp

                                            @if (!empty($cat))
                
                                                <a href="{{ $cat_url }}" class="category education">{{ $cat->section->$title_var }} </a>
                
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
                    
                </div>
                
            </div><!-- Feature Post Row End -->
            
        
    </div><!-- Popular Section End -->