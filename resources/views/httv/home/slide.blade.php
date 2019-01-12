<?php
    $title_var = "title_" . trans('backLang.boxCode');
    $details_var = "details_" . trans('backLang.boxCode');
    $file_var = "file_" . trans('backLang.boxCode');
?>
@if(!empty($SliderBanners) && count($SliderBanners) > 0 )

<div class="post-section section mb-15" id="slide-anh">
    <!-- Sports Post Row Start -->
    <div class="row">

        <div class="col-12 box-mobile">

                <!-- Hero Post Slider Start -->
                <div class="post-carousel-1">

                        @foreach($SliderBanners as $key=>$SliderBanner)

                            <!-- Overlay Post Start -->
                            <div class="post post-large hero-post">
                                <div class="post-wrap">

                                    <!-- Image -->
                                    <a href="{{ $SliderBanner->link_url }}" class="image">
                                        <img src="/uploads/banners/{{ $SliderBanner->$file_var }}" alt="{{ $SliderBanner->$title_var }}">
                                    </a>
                                    
                                    
                                </div>
                            </div><!-- Overlay Post End -->

                        @endforeach
                    
                </div><!-- Hero Post Slider End -->
                

           
                    
                

        </div>

    </div>

</div>

@endif

