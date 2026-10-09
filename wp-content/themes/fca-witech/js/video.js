function video() {
  var iframe = $('#hero-video-placeholder')[0];
  var player = $f(iframe);

  $('#hero-video-start').click(function(e) {
    e.preventDefault();
    $('#hero-video').addClass('video--active');
    player.api('play');
  });

  $('#hero-video-stop').click(function(e) {
    e.preventDefault();
    player.api('pause');
    player.api('seekTo',0);
    $('#hero-video').removeClass('video--active');
  });
}
