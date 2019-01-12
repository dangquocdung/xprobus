<!-- Single Sidebar -->
<div class="single-sidebar" id="box-tnb">
    
    <!-- Sidebar Block Wrapper -->
    <div class="sidebar-block-wrapper">
    
        <!-- Sidebar Block Head Start -->
        <div class="head education-head">

            <!-- Tab List -->
            <div class="sidebar-tab-list education-sidebar-tab-list nav">
                <a class="active" data-toggle="tab" href="#latest-news">Tin nổi bật</a>
                <a data-toggle="tab" href="#popular-news">Tin đọc nhiều</a>
            </div>

        </div><!-- Sidebar Block Head End -->
        
        <!-- Sidebar Block Body Start -->
        <div class="body">
        
            <div class="tab-content">
                <div class="tab-pane fade show active" id="latest-news">

                    @if (!empty($HotTopics))
                        @foreach($HotTopics as $key=>$Topic)

                            <?php

                                $key++;
                                
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

                            <!-- Small Post Start -->
                            <div class="post post-small post-list sports-post post-separator-border">
                                <div class="post-wrap">

                                    <!-- Content -->
                                    <div class="content">

                                        <!-- Title -->
                                        <h5 class="title"><a href="{{ $topic_link_url }}"><span class="number-tnb">{{ $key.'.'}}</span>&nbsp;{{ $Topic->title_vi }}</a></h5>

                                        <!-- Meta -->
                                        <div class="meta fix">
                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ \Carbon\Carbon::parse($Topic->created_at)->format('d/m/Y H:i') }}</span>
                                        </div>

                                    </div>
                                    
                                </div>
                            </div><!-- Small Post End -->

                        @endforeach
                    @endif

                </div>
                <div class="tab-pane fade" id="popular-news">

                    @if (!empty($TopicsMostViewed))
                        @foreach($TopicsMostViewed as $key=>$Topic)

                            <?php
                                $key++;
                                
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

                            <!-- Small Post Start -->
                            <div class="post post-small post-list education-post post-separator-border">
                                <div class="post-wrap">

                                    <!-- Content -->
                                    <div class="content">

                                        <!-- Title -->
                                        <h5 class="title"><a href="{{ $topic_link_url }}"><span class="number-tnb">{{ $key.'.'}}</span>&nbsp;{{ $Topic->title_vi}}</a></h5>

                                        <!-- Meta -->
                                        <div class="meta fix">
                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ \Carbon\Carbon::parse($Topic->created_at)->format('d/m/Y H:i') }}</span>
                                        </div>

                                    </div>
                                    
                                </div>
                            </div><!-- Small Post End -->

                        @endforeach
                    @endif
               
                </div>
            </div>
            
        </div><!-- Sidebar Block Body End -->

    </div>
    
</div>