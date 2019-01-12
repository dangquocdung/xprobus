
function playM3u8(url){
  if(Hls.isSupported()) {
      var video = document.getElementById('video');
      video.volume = 1.0;
      var hls = new Hls();
      var m3u8Url = decodeURIComponent(url)
      hls.loadSource(m3u8Url);
      hls.attachMedia(video);
      hls.on(Hls.Events.MANIFEST_PARSED,function() {
        video.play();
      });
      document.title = url
    }
}

playM3u8('http://113.160.178.167/phatthanh/m3u8/audio.m3u8')
