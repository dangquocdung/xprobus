@php
    $slug_var = "seo_url_slug_" . trans('backLang.boxCode');
@endphp

<div class="footer-bottom-section section bg-dark" style="background: url('img/bg-footer.jpg') left top no-repeat; background-size: cover">
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="footermain">
                    <div class="row flex flex-wrap">
                        <div class="col-xs-12 col-md-12 col-lg-3">
                            <div class="foot-col">
                                <div class="foot-logo">
                                    <div class="Module Module-141"><div class="ModuleContent"><a href="/"><img alt="" src="/img/logo-footer.png"></a></div></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="foot-col">
                                
                                <div class="title">Liên kết nhanh</div>
                                <nav class="foot-menu">
                                    <ul>

                                        @foreach($LienKetNhanhs as $HeaderMenuLink)

                                            <?php
                                                if ($HeaderMenuLink->webmasterSection[$slug_var] != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                                    if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                        $mmnnuu_link = url(trans('backLang.code')."/" .$HeaderMenuLink->webmasterSection[$slug_var]);
                                                    }else{
                                                        $mmnnuu_link = url($HeaderMenuLink->webmasterSection[$slug_var]);
                                                    }
                                                }else{
                                                    if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                        $mmnnuu_link =url(trans('backLang.code')."/" .$HeaderMenuLink->webmasterSection['name']);
                                                    }else{
                                                        $mmnnuu_link =url($HeaderMenuLink->webmasterSection['name']);
                                                    }
                                                }
                                            ?>
    

                                            <li style="color:#ffffff"><a href="{{ $mmnnuu_link }}">{{ $HeaderMenuLink->title_vi }}</a></li>

                                        @endforeach
                                        

                                    </ul>
                                </nav>
                                
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-5 col-lg-4">
                            <div class="foot-col">
                                
                                <div class="title">Liên hệ với chúng tôi</div>
                                <nav class="foot-menu">
                                    <ul style="color:#ffffff">
                                        <li><strong>Tổng biên tập: Nguyễn Viết Trường</strong></li>
                                        <li>Địa chỉ: {{ $WebsiteSettings->contact_t1_vi }}</li>
                                        <li>Email: {{ $WebsiteSettings->contact_t6 }}</li>
                                        <li>Điện thoại: {{ $WebsiteSettings->contact_t3 }}</li>
                                    </ul>
                                </nav>
                                
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="foot-col">
                                <div class="title">Kết nối với chúng tôi</div>
                                <div class="foot-social"> 
                                    <a href="{{ $WebsiteSettings->social_link1 }}" target="blank"><em class="fa fa-facebook" aria-hidden="true"></em> </a>
                                    <a href="{{ $WebsiteSettings->social_link2 }}" target="blank"><em class="fa fa-twitter" aria-hidden="true"></em> </a>
                                    <a href="{{ $WebsiteSettings->social_link5 }}" target="blank"><em class="fa fa-youtube" aria-hidden="true"></em> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footercopy">
                        <nav class="footer-menu">
                            
                            <ul>
                                <li class="active"><a href="#" target="_self">Trang chủ</a></li>
                                <li><a href="#" target="_self">Sơ đồ trang web</a></li>
                                <li><a href="#" target="_self">Chính sách bảo mật</a></li>
                                <li><a href="#" target="_self">Điều khoản sử dụng</a></li>
                            </ul>
                              
                        </nav>
                        <div class="copy">
                           
                            Đài PT-TH tỉnh Hà Tĩnh giữ bản quyền nội dung trên website này.
                            <br>
                            Không được sao chép thông tin nếu không có sự chấp thuận bằng văn bản của HTTV.<br>
                            Giấy phép ICP số 254/GP-TTĐT cấp ngày 02/8/2017.
                               
                        </div>
                    </div>
            </div>
        
        </div>
    </div>
</div>