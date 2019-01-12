@php
    $link_title_var = "title_" . trans('backLang.boxCode');    
    $summary_var = "summary_" . trans('backLang.boxCode');
    $title_var = "title_" . trans('backLang.boxCode');
    $slug_var = "seo_url_slug_" . trans('backLang.boxCode');
@endphp
                    
<!-- Post Block Wrapper Start -->
<div class="post-block-wrapper dark bg-dark mb-20">
    
    <!-- Post Block Head Start -->
    <div class="head sports-head">
        
        <!-- Title -->
        <h4 class="title">Chương trình mới hàng ngày</h4>
        
    </div><!-- Post Block Head End -->
    
    <!-- Post Block Body Start -->
    <div class="body pb-0">
        
            <div class="row">

                @php

                    $Topic = $HotVideos->shift();

                @endphp

                @if (!empty($Topic))

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

                    <div class="post post-overlay sports-post col-12 mb-10" style="padding: 0 7px;">
                        <div class="post-wrap">

                            <!-- Image -->
                            <a class="image" href="{{ $topic_link_url }}">
                                    
                                @if ($Topic->photo_file != null && file_exists('uploads/thumbs/'.$Topic->photo_file))
                                    <img src="/uploads/thumbs/{{ $Topic->photo_file }}" alt="{{ $Topic->title_vi }}" class="img-fluid"></a>
                                @else
                                    <img src="/httv/img/post/post-38.jpg" alt="{{ $Topic->title_vi }}"></a>
                                @endif    
                                                                        
                            </a> 

                            @php

                                $cats = $Topic->categories;

                                $cat = $cats->shift();
                                
                            @endphp

                            <a href="#" class="category sports">{{ $cat->section->$title_var }} </a>

                            <!-- Content -->
                            {{--  <a class="content" href="{{ $topic_link_url }}">

                                <!-- Title -->
                                <h4 class="title"><a href="#">{{ $Topic->title_vi }}</a></h4>

                                <!-- Meta -->
                                <div class="meta fix">
                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ \Carbon\Carbon::parse($Topic->date)->format('d/m/Y') }}</span>
                                </div>
                            </a>  --}}

                            <a class="title-thoi-su" href="{{ $topic_link_url }}">
                                <i class="fa fa-clock-o"></i>&nbsp;{{ \Carbon\Carbon::parse($Topic->date)->format('d/m/Y') }}
                            </a>
                            
                        </div>
                    </div>

                    <div class="col-12 mb-10">
                        <div class="row">

                            @foreach($HotVideos as $Topic)

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

                                <div class="post sports-post col-4 mb-15" style="padding: 0 7px !important">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="{{ $topic_link_url }}">
                                                @if ($Topic->photo_file != null && file_exists('uploads/thumbs/'.$Topic->photo_file))
                                                    <img src="/uploads/thumbs/{{ $Topic->photo_file }}" alt="{{ $Topic->title_vi }}" class="img-fluid"></a>
                                                @else
                                                    <img src="/httv/img/post/post-38.jpg" alt="{{ $Topic->title_vi }}"></a>
                                                @endif     
                                        </a>

                                        
                                        <!-- Content -->
                                        <a class="content" href="{{ $topic_link_url }}">

                                            <!-- Title -->
                                            {{--  <h4 class="title"><a href="#">{{ $Topic->title_vi }}</a></h4>  --}}

                                            <!-- Meta -->
                                            <div class="meta fix d-none d-xs-block">
                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ \Carbon\Carbon::parse($Topic->date)->format('d/m/Y') }}</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            @endforeach

                        </div>
                                
                    </div>
                @endif
            
            </div>

        
    </div><!-- Post Block Body End -->
    
</div><!-- Post Block Wrapper End -->
