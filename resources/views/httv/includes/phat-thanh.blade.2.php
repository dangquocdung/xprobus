

<style>html,body{margin:0;}</style>
<style> .video-js {width: 100%; height: 100%;} #videojs {width: 100%; height: 100%;}</style>
<meta name="referrer" content="no-referrer">
<!-- jQuery JS -->
<script src="{{ URL::asset('httv/js/vendor/jquery-1.12.0.min.js') }}"></script>
<link href="/httv/css/video-js.min.css" rel="stylesheet">
<script src="/httv/js/videojs-ie8.min.js"></script>
<script src="/httv/js/video.min.js"></script>
<script src="/httv/js/videojs-contrib-hls.min.js"></script>
<script src="/httv/js/vjs-hls.min.js"></script>

<style>

        @import url(https://fonts.googleapis.com/css?family=Oswald:300);
        * { box-sizing: border-box; }
        html { width: 100%; height: 100%; overflow: hidden; background: #1f323e; background: radial-gradient(80% 0%, ellipse cover, rgba(66,97,104,1) 0%,rgba(49,67,74,.1) 100%), radial-gradient(20% 100%, ellipse cover, rgba(8,13,17,1) 0%,rgba(36,58,67,1) 100%); }
        body { 
            
            font-family: 'Oswald', sans-serif;
          
        }
        
        video { border-radius: 6px; }
        
        /* video container */
        .videoContainer{
            width:380px;
            height:163px;
            position:relative;
            overflow:hidden;
            background:#000;
            color:#ccc;
            border-radius: 6px;
            border: 1px solid rgba(0,0,0,0.8);
            box-shadow: 0 0 5px rgba(0,0,0,0.5);
            margin: 50px auto 0;
        }
        .videoContainer:before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            box-shadow: inset 0 1px 2px rgba(255,255,255,0.3);
            z-index: 6;
            border-radius: 6px;
            pointer-events: none;
        }
        
        /* video caption css */
        .caption{
            display:none;
            position:absolute;
            top:0;
            left:0;
            width:100%;
            padding: 5px 10px;
            color:#ddd;
            font-size:14px;
            font-weight:300;
            text-align: center;
            background: rgba(0,0,0,0.4);
            text-transform: uppercase;
            border-radius: 6px 6px 0 0;
            -webkit-backface-visibility: hidden;
          -moz-backface-visibility:    hidden;
          -ms-backface-visibility:     hidden;
        }
        
        /*** VIDEO CONTROLS CSS ***/
        /* control holder */
        .control{
            color:#ccc;
            position:absolute;
            bottom:10px;
            left:10px;
            width:360px;
            z-index:5;
            display:none;
        }
        /* control bottom part */
        .btmControl{
            clear:both;
        }
        .control .btnPlay {
            float:left;
            width:34px;
            height:30px;
            padding:5px;
            background: rgba(0,0,0,0.5);
            cursor:pointer;
            border-radius: 6px 0 0 6px;
            border: 1px solid rgba(0,0,0,0.7);
            box-shadow: inset 0 0 1px rgba(255,255,255,0.5);
        }
        .control .icon-play{
            background:url(https://s.cdpn.io/6035/vp_sprite.png) no-repeat -11px 0;
            width: 6px;
            height: 9px;
            display: block;
            margin: 4px 0 0 8px;
        }
        .control .icon-pause{
            background:url(https://s.cdpn.io/6035/vp_sprite.png) no-repeat -34px -1px;
            width: 8px;
            height: 9px;
            display: block;
            margin: 4px 0 0 8px;
        }
        .control .selected{
            font-size:15px;
            color:#ccc;
        }
        .control .sound{
            width: 30px;
            height: 30px;
            float:left;
            background: rgba(0,0,0,0.5);
            border: 1px solid rgba(0,0,0,0.7);
            border-left: none;
            box-shadow: inset 0 0 1px rgba(255,255,255,0.5);
            cursor: pointer;
        }
        .control .icon-sound {  
            background:url(https://s.cdpn.io/6035/vp_sprite.png) no-repeat -19px 0;
            width: 13px;
            height: 10px;
            display: block;
            margin: 8px 0 0 8px;
        }
        .control .muted .icon-sound{
            width: 7px !important;
        }
        .control .btnFS{
            width: 30px;
            height: 30px;
            border-radius: 0 6px 6px 0;
            float:left;
            background: rgba(0,0,0,0.5);
            border: 1px solid rgba(0,0,0,0.7);
            border-left: none;
            box-shadow: inset 0 0 1px rgba(255,255,255,0.5);
        
        }
        .control .icon-fullscreen {  
            background:url(https://s.cdpn.io/6035/vp_sprite.png) no-repeat 0 0;
            width: 10px;
            height: 10px;
            display: block;
            margin: 8px 0 0 9px;
        }
        
        /* PROGRESS BAR CSS */
        /* Progress bar */
        .progress-bar {
            height: 30px;
            padding: 10px;
            background: rgba(0,0,0,0.6);
            border: 1px solid rgba(0,0,0,0.7);
            border-left: none;
            box-shadow: inset 0 0 1px rgba(255,255,255,0.5);
            float:left;
        
        }
        .progress {
            width:240px;
            height:7px;
            position:relative;
            cursor:pointer;
            background: rgba(0,0,0,0.4); /* fallback */
            box-shadow: 0 1px 0 rgba(255,255,255,0.1), inset 0 1px 1px rgba(0,0,0,1);
            border-radius:10px;
        }
        .progress span {
            height:100%;
            position:absolute;
            top:0;
            left:0;
            display:block;
            border-radius:10px;
        }
        .timeBar{
            z-index:10;
            width:0;
            background: -webkit-linear-gradient(top, rgba(107,204,226,1) 0%,rgba(29,163,208,1) 100%);
            box-shadow: 0 0 7px rgba(107,204,226,.5);
        }
        .bufferBar{
            z-index:5;
            width:0;
            background: rgba(255,255,255,0.2);
        }
        
        /* VOLUME BAR CSS */
        /* volume bar */
        .volume{
            position:relative;
            cursor:pointer;
            width:70px;
            height:10px;
            float:right;
            margin-top:10px;
            margin-right:10px;
        }
        .volumeBar{
            display:block;
            height:100%;
            position:absolute;
            top:0;
            left:0;
            background-color:#eee;
            z-index:10;
        }
</style>
<body onLoad="init()">

<section id="wrapper">
    <div class="videoContainer">
        
        <video id="myVideo" controls preload="auto" poster="https://s.cdpn.io/6035/vp_poster.jpg" width="380" >
            <p>Your browser does not support the video tag.</p>
        </video>
        <div class="caption">Prometheus</div>
        <div class="control">
            <div class="btmControl">
                <div class="btnPlay btn" title="Play/Pause video"><span class="icon-play"></span></div>
                <div class="progress-bar">
                    <div class="progress">
                        <span class="bufferBar"></span>
                        <span class="timeBar"></span>
                    </div>
                </div>
                <!--<div class="volume" title="Set volume">
                    <span class="volumeBar"></span>
                </div>-->
                <div class="sound btn muted" title="Mute/Unmute sound"><span class="icon-sound"></span></div>
                <div class="btnFS btn" title="Switch to full screen"><span class="icon-fullscreen"></span></div>
            </div>
            
        </div>
    </div>
</section>

<script>
    function play(link){
        if(link.indexOf('.php')!=-1){
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.open("GET",link,!1);
            xmlhttp.send();
            src=xmlhttp.responseText;
        }else 
            src=link;
        
        player=videojs("myVideo");

        player.ready(function(){
            player.src({src:src,type:"application/x-mpegURL"})
        });

        player.play()
    }
    function reload(i){
        if(player.paused()&&player.error_!=null){
            if(i<link.length){
                play(link[i])
            }
        }
    }

	function init(){
        var i=0;
        

        link=[
            'http://113.160.178.167/phatthanh/m3u8/audio.m3u8'
        ];
        
        play(link[i]);

        interval=setInterval(function(){
            i++;reload(i)
            },2000)
    }


    $(document).ready(function(){
        //INITIALIZE
        var video = $('#myVideo');
        
        //remove default control when JS loaded
        video[0].removeAttribute("controls");
        $('.control').fadeIn(500);
        $('.caption').fadeIn(500);
     
        //before everything get started
        video.on('loadedmetadata', function() {
                
            //set video properties
            $('.current').text(timeFormat(0));
            $('.duration').text(timeFormat(video[0].duration));
            updateVolume(0, 0.7);
                
            //start to get video buffering data 
            setTimeout(startBuffer, 150);
                
            //bind video events
            $('.videoContainer')
            .hover(function() {
                $('.control').stop().fadeIn();
                $('.caption').stop().fadeIn();
            }, function() {
                if(!volumeDrag && !timeDrag){
                    $('.control').stop().fadeOut();
                    $('.caption').stop().fadeOut();
                }
            })
            .on('click', function() {
                $('.btnPlay').find('.icon-play').addClass('icon-pause').removeClass('icon-play');
                $(this).unbind('click');
                video[0].play();
            });
        });
        
        //display video buffering bar
        var startBuffer = function() {
            var currentBuffer = video[0].buffered.end(0);
            var maxduration = video[0].duration;
            var perc = 100 * currentBuffer / maxduration;
            $('.bufferBar').css('width',perc+'%');
                
            if(currentBuffer < maxduration) {
                setTimeout(startBuffer, 500);
            }
        };	
        
        //display current video play time
        video.on('timeupdate', function() {
            var currentPos = video[0].currentTime;
            var maxduration = video[0].duration;
            var perc = 100 * currentPos / maxduration;
            $('.timeBar').css('width',perc+'%');	
            $('.current').text(timeFormat(currentPos));	
        });
        
        //CONTROLS EVENTS
        //video screen and play button clicked
        video.on('click', function() { playpause(); } );
        $('.btnPlay').on('click', function() { playpause(); } );
        var playpause = function() {
            if(video[0].paused || video[0].ended) {
                $('.btnPlay').addClass('paused');
                $('.btnPlay').find('.icon-play').addClass('icon-pause').removeClass('icon-play');
                video[0].play();
            }
            else {
                $('.btnPlay').removeClass('paused');
                $('.btnPlay').find('.icon-pause').removeClass('icon-pause').addClass('icon-play');
                video[0].pause();
            }
        };
    
        
        //fullscreen button clicked
        $('.btnFS').on('click', function() {
            if($.isFunction(video[0].webkitEnterFullscreen)) {
                video[0].webkitEnterFullscreen();
            }	
            else if ($.isFunction(video[0].mozRequestFullScreen)) {
                video[0].mozRequestFullScreen();
            }
            else {
                alert('Your browsers doesn\'t support fullscreen');
            }
        });
        
        //sound button clicked
        $('.sound').click(function() {
            video[0].muted = !video[0].muted;
            $(this).toggleClass('muted');
            if(video[0].muted) {
                $('.volumeBar').css('width',0);
            }
            else{
                $('.volumeBar').css('width', video[0].volume*100+'%');
            }
        });
        
        //VIDEO EVENTS
        //video canplay event
        video.on('canplay', function() {
            $('.loading').fadeOut(100);
        });
        
        //video canplaythrough event
        //solve Chrome cache issue
        var completeloaded = false;
        video.on('canplaythrough', function() {
            completeloaded = true;
        });
        
        //video ended event
        video.on('ended', function() {
            $('.btnPlay').removeClass('paused');
            video[0].pause();
        });
    
        //video seeking event
        video.on('seeking', function() {
            //if video fully loaded, ignore loading screen
            if(!completeloaded) { 
                $('.loading').fadeIn(200);
            }	
        });
        
        //video seeked event
        video.on('seeked', function() { });
        
        //video waiting for more data event
        video.on('waiting', function() {
            $('.loading').fadeIn(200);
        });
        
        //VIDEO PROGRESS BAR
        //when video timebar clicked
        var timeDrag = false;	/* check for drag event */
        $('.progress').on('mousedown', function(e) {
            timeDrag = true;
            updatebar(e.pageX);
        });
        $(document).on('mouseup', function(e) {
            if(timeDrag) {
                timeDrag = false;
                updatebar(e.pageX);
            }
        });
        $(document).on('mousemove', function(e) {
            if(timeDrag) {
                updatebar(e.pageX);
            }
        });
        var updatebar = function(x) {
            var progress = $('.progress');
            
            //calculate drag position
            //and update video currenttime
            //as well as progress bar
            var maxduration = video[0].duration;
            var position = x - progress.offset().left;
            var percentage = 100 * position / progress.width();
            if(percentage > 100) {
                percentage = 100;
            }
            if(percentage < 0) {
                percentage = 0;
            }
            $('.timeBar').css('width',percentage+'%');	
            video[0].currentTime = maxduration * percentage / 100;
        };
    
        //VOLUME BAR
        //volume bar event
        var volumeDrag = false;
        $('.volume').on('mousedown', function(e) {
            volumeDrag = true;
            video[0].muted = false;
            $('.sound').removeClass('muted');
            updateVolume(e.pageX);
        });
        $(document).on('mouseup', function(e) {
            if(volumeDrag) {
                volumeDrag = false;
                updateVolume(e.pageX);
            }
        });
        $(document).on('mousemove', function(e) {
            if(volumeDrag) {
                updateVolume(e.pageX);
            }
        });
        var updateVolume = function(x, vol) {
            var volume = $('.volume');
            var percentage;
            //if only volume have specificed
            //then direct update volume
            if(vol) {
                percentage = vol * 100;
            }
            else {
                var position = x - volume.offset().left;
                percentage = 100 * position / volume.width();
            }
            
            if(percentage > 100) {
                percentage = 100;
            }
            if(percentage < 0) {
                percentage = 0;
            }
            
            //update volume bar and video volume
            $('.volumeBar').css('width',percentage+'%');	
            video[0].volume = percentage / 100;
            
            //change sound icon based on volume
            if(video[0].volume == 0){
                $('.sound').removeClass('sound2').addClass('muted');
            }
            else if(video[0].volume > 0.5){
                $('.sound').removeClass('muted').addClass('sound2');
            }
            else{
                $('.sound').removeClass('muted').removeClass('sound2');
            }
            
        };
    
        //Time format converter - 00:00
        var timeFormat = function(seconds){
            var m = Math.floor(seconds/60)<10 ? "0"+Math.floor(seconds/60) : Math.floor(seconds/60);
            var s = Math.floor(seconds-(m*60))<10 ? "0"+Math.floor(seconds-(m*60)) : Math.floor(seconds-(m*60));
            return m+":"+s;
        };
    });

</script>
</body>
