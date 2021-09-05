<html>
<head>
   
  <!-- soal01  -->
  
<title>MEDIUM | <?php echo $_REQUEST["c"]; ?> | LiveTV</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<link rel="shortcut icon" type="image/x-icon" href="ab">
<script type="text/javascript" src="https://ajax.cloudflare.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
<script src="https://cdn.plyr.io/2.0.18/plyr.js"></script>
<link rel="stylesheet" href="https://cdn.plyr.io/2.0.18/plyr.css">
<style>
html {
  font-family: Poppins;
  background: #000;
  margin: 0;
  padding: 0
}

.loading {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #000;
        z-index: 9999;
    }
    
    .loading-text {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
        text-align: center;
        width: 100%;
        height: 100px;
        line-height: 100px;
    }
    
    .loading-text span {
        display: inline-block;
        margin: 0 5px;
        color: #00b3ff;
        font-family: 'Quattrocento Sans', sans-serif;
    }
    
    .loading-text span:nth-child(1) {
        filter: blur(0px);
        animation: blur-text 1.5s 0s infinite linear alternate;
    }
    
    .loading-text span:nth-child(2) {
        filter: blur(0px);
        animation: blur-text 1.5s 0.2s infinite linear alternate;
    }
    
    .loading-text span:nth-child(3) {
        filter: blur(0px);
        animation: blur-text 1.5s 0.4s infinite linear alternate;
    }
    
    .loading-text span:nth-child(4) {
        filter: blur(0px);
        animation: blur-text 1.5s 0.6s infinite linear alternate;
    }
    
    .loading-text span:nth-child(5) {
        filter: blur(0px);
        animation: blur-text 1.5s 0.8s infinite linear alternate;
    }
    
    .loading-text span:nth-child(6) {
        filter: blur(0px);
        animation: blur-text 1.5s 1s infinite linear alternate;
    }
    
    .loading-text span:nth-child(7) {
        filter: blur(0px);
        animation: blur-text 1.5s 1.2s infinite linear alternate;
    }
    
    @keyframes blur-text {
        0% {
            filter: blur(0px);
        }
        100% {
            filter: blur(4px);
        }
    }

    .plyr__video-wrapper::before {
        position: absolute;
        top: 10px;
        right: 10px;
        z-index: 10;
        content: '';
        height: 35px;
        width: 35px;
        background: url('ab') no-repeat;
        background-size: 35px auto, auto;
    }

</style>

</head>
<body>
  <div id="loading" class="loading">

</div>

<div id="player">
<video id="video" style="width:100%;height:100%;"></video>
</div>
<script>
  setTimeout(videovisible, 4000)

function videovisible() {
    document.getElementById('loading').style.display = 'none'
}

var url="../live.php?c=<?php echo $_REQUEST["c"]; ?>&q=400&e=junk.m3u8";

plyr.setup(video);

 if(Hls.isSupported()) {
    var video = document.getElementById('video');
    var hls = new Hls();
    hls.loadSource(url);
    hls.attachMedia(video);
    hls.on(Hls.Events.MANIFEST_PARSED,function() {
      video.play();
  });
 }
  else if (video.canPlayType('application/vnd.apple.mpegurl')) {
    video.src = url;
    video.addEventListener('canplay',function() {
      video.play();
    });

  }
// soal01 

</script>

</body>
</html>
