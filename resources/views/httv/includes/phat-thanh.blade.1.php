
<!DOCTYPE html>
<html>
<head>
  <script src="/httv/js/hls.min.js"></script>
  <style>
    body{
      background-color:black;
    }
    #video{
      position: absolute;
      top: 0px;
      right: 0px;
      bottom: 0px;
      left: 0px;
      margin: auto;
      max-height: 100%;
      max-width: 100%;
    }
  </style>
</head>
<body>
  <video id="video" style="width: 100%; height: 100%;" controls></video>
  <script>
  function playM3u8(){
        if(Hls.isSupported()) {
            var video = document.getElementById('video');
            video.volume = 1.0;
            var hls = new Hls();
            var m3u8Url = decodeURIComponent('http://hatinhtv.vn/phatthanh/m3u8/audio.m3u8')
            hls.loadSource(m3u8Url);
            hls.attachMedia(video);
            hls.on(Hls.Events.MANIFEST_PARSED,function() {
            video.play();
            });
            document.title = url
        }
    }  
    </script>
</body>
</html>