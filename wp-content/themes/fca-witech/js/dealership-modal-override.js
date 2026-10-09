$(function() {
    // Unbind existing click to prevent double firing
    $(".videos__video__button").off('click').on('click', function(e) {
        e.preventDefault();
        var yId = $(this).data("youtube-id");
        
        // Remove old class if it exists
        $("#dealership_video").removeClass("video--active").removeClass("video");
        
        // Initialize and open modal
        $("#dealership_video").modal({
            fadeDuration: 250,
            closeClass: 'dealership-modal-close'
        });
        
        if (window.youtubePlayer && window.youtubePlayer.loadVideoById) {
            window.youtubePlayer.loadVideoById(yId);
            window.youtubePlayer.playVideo();
        }
    });

    // Listen to modal close event to stop video
    $('#dealership_video').on($.modal.CLOSE, function(event, modal) {
        if (window.youtubePlayer && window.youtubePlayer.stopVideo) {
            window.youtubePlayer.seekTo(0);
            window.youtubePlayer.stopVideo();
        }
    });
});
