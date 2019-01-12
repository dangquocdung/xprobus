@extends('httv.layout')

@section('content')

    <div class="container nen-trang">
    
        <!-- Truc tuyen Section Start -->
        @include('httv.home.main-top-box')

        <!-- Slide Section Start -->
        {{--  @include('httv.home.slide')  --}}

        <!-- Youtube Section Start -->
        {{--  @include('httv.home.youtube')  --}}
        
        <!-- Chuong trinh moi hang ngay -->

        @include('httv.home.chuong-trinh-moi')

        <!-- Tin moi dang -->

        @include('httv.includes.tin-moi-dang')
        
        <!-- Post Section Start -->
        <div class="post-section section">
            
                @include('httv.home.tin-bai')
            
        </div>

    </div>

    <script>
        $(document).ready(function(){
            $("#shadow").css("height", $(document).height()).hide();
            $(".lightSwitcher").click(function(){
                $("#shadow").toggle();
                if ($("#shadow").is(":hidden"))
                    $(this).html("Tắt Đèn ").removeClass("turnedOff");
                else
                    $(this).html("Bật Đèn ").addClass("turnedOff");
            });


            //Nghe lai
            $(".nghe-lai").click(function(){
               //alert($(this).attr('value'));

                $('.my_audio>source').remove();

                $('.my_audio').append("<source src=" + "/phatthanh/mu/ghilai/" + $(this).attr('ngaynghe') + "_" + $(this).attr('value') + ".mp3" + " type='audio/mpeg'>");

                $(".my_audio").trigger('load');

                $(".my_audio").trigger('play');



            });
            
        });
    </script>

 @stop
 