<div class="col-md-12">
  <form method="post" class="form-horizontal" action="options.php">
  <?php
    settings_fields( 'swarmify_config_settings' );
    do_settings_sections( 'swarmify_config_settings' );
  ?>
    <h1>Let's get you set up! 👍</h1>
    <ul class="list-group">
      <li class="list-group-item">Visit <a target="_blank" href="https://dash.swarmify.com">dash.swarmify.com</a></li>
      <li class="list-group-item">Copy your <b>Swarm CDN Key</b> (highlighted below) to your clipboard
        <br><br>
        <img class="img-responsive" src="<?php echo plugin_dir_url( __DIR__ ) .'images/screen1.png' ?>" alt="">
      </li>
      <li class="list-group-item">
        Paste your <b>Swarm CDN Key</b> into the field below:
        <br><br>
        <input type="text" name="swarmify_cdn_key" value="<?php echo esc_attr(get_option('swarmify_cdn_key')); ?>" placeholder="Swarm CDN Key" class="form-control swarmify_cdn_key">
      </li>
      <li class="list-group-item">
      Click the button below:
      <br><br>
        <input class="swarmify-button cdn_key_button" type="submit" value="Enable SmartVideo">
      </li>
    </ul>
  </form>

  <hr>
  <hr>

  <h1>What happens next?</h1>
  <p class="paragraph">
    After clicking the <b>Enable SmartVideo</b> button, SmartVideo will begin scanning your site for videos. <b>If you have YouTube videos on your site</b>, they will be automatically converted to SmartVideo and be displayed in a clean, fast-loading player automatically, requiring no extra work on your part. 
  </p>

  <p class="paragraph">
    When a page with a video loads for the first time, SmartVideo fetches that video, encodes it, and stores it on our network. Depending on the length and resolution of the video file, <b>a&nbsp;video can take up to 30 minutes to convert to SmartVideo. </b>You will know that a video has been fully converted by SmartVideo when, while hovering over the Video Acceleration icon on the player, the popup box says <b>Video Acceleration: On</b>
  </p>

  <img class="img-responsive" src="<?php echo plugin_dir_url( __DIR__ ) .'images/screen2.gif' ?>" alt="">
  
  <p class="paragraph">
    If the popup box says <b>Video Acceleration: Off</b>, the video is still being processed.
  </p>

  <p class="paragraph">
    After the conversion process is complete, the video is hosted on our global delivery network and served via our accelerated playback technology. This means you can keep uploading your videos to YouTube and placing them on your site, as SmartVideo will continuously look for new videos and convert them automatically.
  </p>

  <hr>

  <p class="paragraph">
    <b>If you do not have YouTube videos on your site</b>, our script will do nothing for your current videos; you will have to make use of a SmartVideo tag.
  </p>
  <a class="swarmify-button" target="_blank" href="http://help.swarmify.com/using-smartvideo-on-your-site/the-smartvideo-tag/introducing-smartvideo-tag">SmartVideo tags</a>

  
  <hr>

  <?php
    $name ='configuration';
    require('footer-display.php'); 
  ?>

</div>