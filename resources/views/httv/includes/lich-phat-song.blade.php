<div class="single-sidebar mb-15">
    <div class="sidebar-block-wrapper">
        <!-- Sidebar Block Head Start -->
        <div class="head education-head">

            <!-- Tab List -->
            <div class="sidebar-tab-list education-sidebar-tab-list nav">
                <a class="active" data-toggle="tab" href="#tab-truyen-hinh" style="width:100%;"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Lịch truyền hình</a>
            </div>

        </div><!-- Sidebar Block Head End -->

        @php
            $thus = array('T2','T3','T4','T5','T6','T7','CN');

            $hnay = \Carbon\Carbon::now()->dayOfWeek;

            $homnay= \Carbon\Carbon::now()->format('Y-m-d');

            $now = \Carbon\Carbon::now();

            $weekStartDate = $now->startOfWeek()->format('Y-m-d');

            $weekEndDate = $now->endOfWeek()->format('Y-m-d');

            $i=0;

        @endphp
        
        <!-- Sidebar Block Body Start -->
        <div class="body" style="padding:0">
        
            <div class="tab-content">
                <!--Truyen hinh-->
                <div class="tab-pane fade show active" id="tab-truyen-hinh">
                        
                    <div id="lich-truyen-hinh" class="lps">

                        <div class="head politic-head mt-1" style="border-bottom: 1px solid #f05555">

                            <!-- Tab List -->
                            <div class="sidebar-tab-list politic-sidebar-tab-list nav">
                                @foreach ($thus as $key=>$thu)
                                    @php
                                        $key++;
                                    @endphp
                                    <a class="{{ ($key == $hnay) ? 'active':'' }}" data-toggle="tab" href="#th-{{ $thu }}" style="width:14%;">{{ $thu }} </a>
                                @endforeach
                
                            </div>
                
                        </div><!-- Sidebar Block Head End -->

                        <!-- Sidebar Block Body Start -->
                        <div class="body" style="padding:0">
                        
                            <div class="tab-content">
                                @foreach ($thus as $key=>$thu)
                                    @php
                                        $key++;
                                    @endphp
                                    
                                    <div class="tab-pane fade {{ ($key == $hnay) ? 'show active':'' }}" id="th-{{ $thu }}">

                                        <div class="sidebar-lps truyen-hinh">

                                            @php

                                                $date_now = \Carbon\Carbon::parse($weekStartDate)->addDay($i)->format('Y-m-d');
                
                                                $time_now = date("H:i");

                                                $i++;
                                                
                                            @endphp

                                            <div style="text-align:center; margin:5px">
                                                <strong>Ngày: {{ \Carbon\Carbon::parse($date_now)->format('d/m/Y') }}</strong>
                                            </div>
                                            
                                            @foreach ($Lth->where('ngay_ps','like',$date_now)->sortby('gio_ps') as $key=>$lps)
                
                                                @php
                                                    $time_ps = Carbon\Carbon::parse($lps->gio_ps)->format('H:i')
                                                @endphp
                
                                                <div class="calendar-item {{ (($date_now < $homnay )||(($date_now == $homnay)&&($time_ps < $time_now)))? 'done':'cho-truyen-hinh' }}">
                                                    <div class="time">{{ $time_ps  }}</div>
                                                    <div class="name">
                                                        <strong>{{ $lps->chuong_trinh}}</strong>
                                                        <br>
                                                        {{ $lps->noi_dung }}
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        
                                    </div>
                                @endforeach
                            </div>
                            
                        </div><!-- Sidebar Block Body End -->

                    </div>
                            
                </div>
                
            </div>
            
        </div><!-- Sidebar Block Body End -->

    </div>
    
</div>


    
<iframe id="if-phat-thanh" class="embed-responsive-item" src="phat-thanh" width="100%" scrolling="no" frameborder="0"></iframe>
{{--  <video id="box-nghe-lai" src="http://hatinhtv.vn/phatthanh/pho_xa.mp3"></video>  --}}





<div class="single-sidebar mb-15">
    <div class="sidebar-block-wrapper">
        <!-- Sidebar Block Head Start -->
        <div class="head education-head">

            <!-- Tab List -->
            <div class="sidebar-tab-list education-sidebar-tab-list nav">
                <a class="active" data-toggle="tab" href="#tab-truyen-hinh" style="width:100%;"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Lịch phát thanh</a>
            </div>

        </div><!-- Sidebar Block Head End -->

        @php

            $i=0;

        @endphp
        
        <!-- Sidebar Block Body Start -->
        <div class="body" style="padding:0">
        
            <div class="tab-content">
                <!--Truyen hinh-->
                <div class="tab-pane fade show active" id="tab-phat-thanh">
                        
                    <div id="lich-phat-thanh" class="lps">

                        <audio class="my_audio mt-2 mb-2" controls preload="none" style="display:block; margin:auto;">
                            {{--  <source src="http://hatinhtv.vn/phatthanh/pho_xa.mp3" type="audio/mpeg">  --}}
                        </audio>

                        <div class="head politic-head mt-1" style="border-bottom: 1px solid #f05555">

                            <!-- Tab List -->
                            <div class="sidebar-tab-list politic-sidebar-tab-list nav">
                                @foreach ($thus as $key=>$thu)
                                    @php
                                        $key++;
                                    @endphp
                                    <a class="{{ ($key == $hnay) ? 'active':'' }}" data-toggle="tab" href="#pt-{{ $thu }}" style="width:14%;">{{ $thu }} </a>
                                @endforeach
                
                            </div>
                
                        </div><!-- Sidebar Block Head End -->

                        <!-- Sidebar Block Body Start -->
                        <div class="body" style="padding:0">
                        
                            <div class="tab-content">
                                @foreach ($thus as $key=>$thu)
                                    @php
                                        $key++;
                                    @endphp
                                    
                                    <div class="tab-pane fade {{ ($key == $hnay) ? 'show active':'' }}" id="pt-{{ $thu }}">

                                        <div class="sidebar-lps phat-thanh">

                                            @php

                                                $date_now = \Carbon\Carbon::parse($weekStartDate)->addDay($i)->format('Y-m-d');
                
                                                $time_now = date("H:i");

                                                $i++;

                                                $ngaynghe = \Carbon\Carbon::parse($date_now)->format('Ymd')
                                                
                                            @endphp

                                            <div style="text-align:center; margin:5px">
                                                <strong>Ngày: {{ \Carbon\Carbon::parse($date_now)->format('d/m/Y') }}</strong>
                                            </div>
                                            
                                            @foreach ($Lpt->where('ngay_ps','like',$date_now)->sortby('gio_ps') as $key=>$lps)
                
                                                @php
                                                    $time_ps = Carbon\Carbon::parse($lps->gio_ps)->format('H:i')
                                                @endphp
                
                                                <div class="calendar-item {{ (($date_now < $homnay )||(($date_now == $homnay)&&($time_ps < $time_now)))? 'done':'cho-phat-thanh' }}">
                                                    <div class="time">{{ $time_ps  }}</div>
                                                    <div class="name nghe-lai" value= {{ str_replace(':','', $time_ps)  }} ngaynghe={{ $ngaynghe }}>
                                                        <strong>{{ $lps->chuong_trinh}}</strong>
                                                        <br>
                                                        {{ $lps->noi_dung }}
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        
                                    </div>
                                @endforeach
                            </div>
                            
                        </div><!-- Sidebar Block Body End -->

                    </div>
                            
                </div>
                
            </div>
            
        </div><!-- Sidebar Block Body End -->

    </div>
    
</div>

<script>

    $(document).ready(function(){

        //$("#sidebar-lps-th").scrollTop(parseInt($(".chotruyenhinh").first().offset().top));
        $(".sidebar-lps.truyen-hinh").scrollTop(parseInt($(".cho-truyen-hinh").first().offset().top));

        console.log(parseInt($(".cho-truyen-hinh").first().offset().top));

        $(".sidebar-lps.phat-thanh").scrollTop(parseInt($(".cho-phat-thanh").first().offset().top));

        console.log(parseInt($(".cho-phat-thanh").first().offset().top));

    })

</script>
