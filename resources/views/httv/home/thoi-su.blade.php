@if (!empty($ThoiSuMenuLinks))

    @foreach($ThoiSuMenuLinks as $MainMenuLink)

        <!-- Post Block Wrapper Start -->
        <div class="post-block-wrapper post-block-wrapper dark bg-dark mb-15" id="ts-ht">
            
            <!-- Post Block Head Start -->
            <div class="head sports-head">
                
                <!-- Title -->
                <a href="{{ $MainMenuLink->webmasterSection->name }}">

                        <h4 class="title" style="color:white">{{ $MainMenuLink->title_vi }}</h4>

                </a>
                
                @if(!empty($MainMenuLink->webmasterSection->sections))
                
                    <!-- Tab List Start -->
                    <ul class="post-block-tab-list feature-post-tab-list nav d-none d-md-block">

                        @foreach($MainMenuLink->webmasterSection->sections as $key=>$Section)

                            <li><a @if ($key==0) class="active" @endif data-toggle="tab" href="#feature-cat-{{ $Section->id }}">{{ $Section->title_vi }}</a></li>

                        @endforeach
                            
                    </ul><!-- Tab List End -->
                
                    <!-- Tab List Start -->
                    <ul class="post-block-tab-list feature-post-tab-list nav d-sm-block d-md-none">
                        <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Tiểu mục</a>
                        
                            <!-- Dropdown -->
                            <ul class="dropdown-menu">
                                
                                    @foreach($MainMenuLink->webmasterSection->sections as $key=>$Section)

                                        <li>
                                            <a @if ($key==0) class="active" @endif data-toggle="tab" href="#feature-cat-{{ $Section->id }}"><small>{{ $Section->title_vi }}</small></a>
                                        </li>

                                    @endforeach

                            </ul>
                            
                        </li>
                    </ul><!-- Tab List End -->

                @endif
                
            </div><!-- Post Block Head End -->
            
            <!-- Post Block Body Start -->
            <div class="body">

                    @if(!empty($MainMenuLink->webmasterSection->sections))
                
                    <!-- Tab Content Start-->
                    <div class="tab-content">
                        @foreach($MainMenuLink->webmasterSection->sections as $key=>$MnuCategory)
                        <!-- Tab Pane Start-->
                        <div 

                            @if ($key==0)

                                class="tab-pane fade show active" 
                            @else

                                class="tab-pane fade"

                            @endif
                            
                            id="feature-cat-{{ $MnuCategory->id }}">
                        
                            <div class="row">

                                @php
                                
                                    $topicIds = $MnuCategory->selectedCategories->sortbyDesc('topic_date')->take(10);

                                    $i = 0;

                                    $tins= array();

                                    if (!empty($topicIds)){

                                        foreach($topicIds as $topicId){

                                            if ( $topicId->topic->status == '1' ){

                                                $tins[] = $topicId->topic;

                                            }

                                            if (count($tins) > 2){
                                                break;
                                            }
                                        }

                                    }

                                @endphp

                                @if (!empty($tins))

                                    @foreach($tins as $key=>$Topic)

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

                                        <div class="col-4">
                                            <div class="row">

                                                <!-- Post Start -->
                                                <div class="post post-overlay" style="padding:0 5px">
                                                    <div class="post-wrap">

                                                        <!-- Image -->
                                                        <a class="image" href="{{ $topic_link_url }}">

                                                            @if ($Topic->photo_file != null && file_exists('uploads/thumbs/'.$Topic->photo_file))
                                                                <img src="/uploads/thumbs/{{ $Topic->photo_file }}" alt="{{ $Topic->$link_title_var}}" class="img-fluid"></a>
                                                            @else
                                                                <img src="/httv/img/post/post-11.jpg" alt="{{ $Topic->$link_title_var}}">
                                                            @endif

                                                        </a>

                                                        @php

                                                            $cat = $Topic->categories->first();

                                                            $cat_url = url(trans('backLang.code') . "/" . $cat->section->seo_url_slug_vi);
                                                            
                                                        @endphp

                                                        <a href="{{ $cat_url }}" class="category sports"><small>{{ $cat->section->$title_var }}</small></a>

                                                        <a class="title-thoi-su" href="{{ $topic_link_url }}">
                                                            <i class="fa fa-clock-o"></i>&nbsp;{{ \Carbon\Carbon::parse($Topic->date)->format('d/m/Y') }}
                                                        </a>
                                                        
                                                    </div>
                                                </div><!-- Post End -->
                                            </div>

                                        </div>

                                    @endforeach

                                @endif

                            </div>
                        
                        </div><!-- Tab Pane End-->

                        @endforeach
                    
                    </div><!-- Tab Content End-->

                    @endif
                
            </div><!-- Post Block Body End -->
            
        </div><!-- Post Block Wrapper End -->

    @endforeach

@endif