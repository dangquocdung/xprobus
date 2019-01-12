<div class="instagram-section section">
        <div class="container-fluid">
            <div class="row">
                
                <!-- Full Width Instagram Carousel Start -->
                <div class="fullwidth-instagram-carousel instagram-carousel col pl-0 pr-0">

                    @foreach ($Albums->topics as $Topic)

                        <!-- Image -->
                        {{--  @if ($Topic->photo_file != null)  --}}
                            {{--  <div class="image"><img src="/uploads/thumbs/{{ $Topic->photo_file }}" alt="{{ $Topic->$link_title_var}}" style="width:100%; height:256px"></div>  --}}
                            {{--  <a href="#"><img src="/uploads/thumbs/{{ $Topic->photo_file }}" alt="{{ $Topic->$link_title_var}}" style="width:100%; height:221px"></a>
                        @else
                            <a href="#"><img src="frontEnd/httv/img/instagram/1.jpg" alt="{{ $Topic->$link_title_var}}" style="width:100%; height:221px"></a>
                        @endif  --}}

                            <?php
                                if ($Topic->$title_var != "") {
                                    $title = $Topic->$title_var;
                                } else {
                                    $title = $Topic->$title_var2;
                                }

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

                            <!-- Overlay Post Start -->
                            <div class="post post-overlay sports-post col-6 mb-20">
                                <div class="post-wrap">

                                    <!-- Image -->
                                    @if ($Topic->photo_file != null)
                                        <div class="image"><img src="/uploads/thumbs/{{ $Topic->photo_file }}" alt="{{ $Topic->$link_title_var}}" style="width:100%; height:256px"></div>
                                    @else
                                        <div class="image"><img src="httv/img/post/post-38.jpg" alt="{{ $Topic->$link_title_var}}"></div>
                                    @endif

                                    <!-- Content -->
                                    <div class="content">

                                        <!-- Title -->
                                        <h4 class="title"><a href="post-details.html">{{ $Topic->$link_title_var}}</a></h4>

                                        <!-- Meta -->
                                        <div class="meta fix">
                                            <a href="#" class="meta-item author"><i class="fa fa-user"></i> {{ $Topic->user->name }}</a>
                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ \Carbon\Carbon::parse($Topic->date)->format('d/m/Y') }}</span>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div><!-- Overlay Post End -->
                            <!-- Post End -->
                    
                    

                    @endforeach
                    
                    
                </div><!-- Full Width Instagram Carousel End -->
                
            </div>
        </div>
    </div>