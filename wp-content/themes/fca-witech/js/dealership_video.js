$(function() {
    $(".videos__video__button").click(function(e) {
        e.preventDefault();
        $('#dealership_video').addClass('video--active');
        window.youtubePlayer.loadVideoById($(this).data('youtube-id'))
        window.youtubePlayer.playVideo();
    });
});
