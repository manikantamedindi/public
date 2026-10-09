function onYouTubeIframeAPIReady() {
    if (!$('#dealership_video').data('youtube-id')) {
        window.youtubePlayer = new YT.Player('dealership_video__placeholder', {
            videoId: $('#dealership_video').data('youtube-id'),
            suggestedQuality: 'large',
            playerVars: {
                controls: 0,
                modestbranding: 1,
                rel: 0,
                showinfo: 0
            },
            events: {
                onStateChange: function(e) {
                    if (e.data == YT.PlayerState.ENDED) {
                        window.youtubePlayer.seekTo(0);
                        $('#dealership_video').removeClass('dealership_video--active');
                    }
                }
            }
        });
    }
}

function youtubeVideo() {
    var tag = document.createElement('script');
    tag.src = "//www.youtube.com/iframe_api";

    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    $('#dealership_video_stop').click(function(e) {
        e.preventDefault();
        window.youtubePlayer.seekTo(0);
        window.youtubePlayer.stopVideo();
        $('#dealership_video').removeClass('video--active');
    });
}
