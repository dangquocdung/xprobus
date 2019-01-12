@php

    $link_title_var = "title_" . trans('backLang.boxCode');
    $category_title_var = "title_" . trans('backLang.boxCode');
    $slug_var = "seo_url_slug_" . trans('backLang.boxCode');
    $slug_var2 = "seo_url_slug_" . trans('backLang.boxCodeOther');
    $summary_var = "summary_" . trans('backLang.boxCode');
    $details_var = "details_" . trans('backLang.boxCode');
    $details_var2 = "details_" . trans('backLang.boxCodeOther');
    $title_var = "title_" . trans('backLang.boxCode');
    $title_var2 = "title_" . trans('backLang.boxCodeOther');

@endphp

<!-- Post Section Start -->
<div class="post-section section mt-15">

    <!-- Sports Post Row Start -->
    <div class="row">

        <div class="col-md-8 col-12 box-mobile mb-15" style="padding-right:0px">

                @include('httv.home.truc-tuyen')

                @include('httv.home.thoi-su')

                @include('httv.home.slide')

                @include('httv.home.youtube')


        </div>

        <!-- Sidebar Start -->
        <div class="col-md-4 col-12 box-mobile mb-15">

            @include('httv.includes.lich-phat-song')

            @include('httv.includes.tin-noi-bat')

        </div><!-- Sidebar End -->

    </div><!-- Sports Post Row End -->

</div><!-- Post Section End -->
