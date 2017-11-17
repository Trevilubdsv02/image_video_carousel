    /* CARREGA O YOUTUBE API*/
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    /*....CARREGA O YOUTUBE API....*/
    
    /*VARIAVEIS DOS VIDEOS*/
      var id;
      var ytplayer1;
    /*....VARIAVEIS DOS VIDEOS....*/
    
    /*....OPCOES DOS VIDEOS....*/
      function onYouTubeIframeAPIReady() {
          
    ytplayer1 = new YT.Player('ytplayer1', {
          height: '99.9%',
          width: '99.9%',
          videoId: 'rUWxSEwctFU',
          events: {
            'onStateChange': onPlayerStateChange
          },
        playerVars: {
            'autoplay': 0,
            'showinfo': 0,
            'controls': 1
        }
        });
      }
    /*....OPCOES DOS VIEOS....*/
    
    //FAZ PARAR O CAROUSEL
    function onPlayerStateChange(event) {
     if(event.data== YT.PlayerState.PLAYING) 
     {
       $("#carouselprincipal").carousel('pause');
     }
     else 
     {
       $("#carouselprincipal").carousel('cycle');
     }

    if(event.data== YT.PlayerState.ENDED) {
       $("#carouselprincipal").carousel('next');
  }
}
    //..... FAZ PARAR O CAROUSEL .....//

// TESTE SE O CAROUSEL TA NO ID
$('#carouselprincipal').on('slide.bs.carousel', function (ev, event) {
  id = ev.relatedTarget.id;
  switch (id) {
    case "ytplayer1":
      ytplayer1.playVideo();
    break;
    default:
  }
})