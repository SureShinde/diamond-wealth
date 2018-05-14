// 2. This code loads the IFrame Player API code asynchronously.
var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// 3. This function creates an <iframe> (and YouTube player)
//    after the API code downloads.
var player,
    video_id = $('#youtub_bg_video').attr('video-id');
function onYouTubeIframeAPIReady() {
    player = new YT.Player('youtub_bg_video', {      
      videoId: video_id,
      playerVars: {
          autoplay: 1,        // Auto-play the video on load
          controls: 0,  
          rel: 0,      // Show pause/play buttons in player
          showinfo: 0,        // Hide the video title
          modestbranding: 1,  // Hide the Youtube Logo
          loop: 1,
          playlist: video_id,        
          fs: 0,              // Hide the full screen button
          cc_load_policy: 0, // Hide closed captions
          iv_load_policy: 3,  // Hide the Video Annotations
          autohide: 0         // Hide video controls when playing
        },
        events: {
          onReady: function(e) {
            e.target.mute();
          }
        }
    });
}

// 4. The API will call this function when the video player is ready.
function onPlayerReady(event) {
event.target.mute();
}
