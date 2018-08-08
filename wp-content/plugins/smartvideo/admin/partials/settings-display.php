<div class="col-md-12 settings">
  <form method="post" class="form-horizontal" action="options.php">
    <?php
    settings_fields( 'swarmify_settings' );
    do_settings_sections( 'swarmify_settings' );
    ?>

    <div class="form-group">
      <label class="col-sm-12 main_label">
        <?php _e('Toggle SmartVideo on or off',$this->plugin_name); ?>
         <small><?php if(get_option('swarmify_cdn_key') == ''){ echo '(To enable SmartVideo, follow the instructions on the <a href="'.admin_url("options-general.php?page=SmartVideo.php&tab=configuration").'">Configuration page</a>.)';} ?></small>
      </label>
      <div class="col-sm-12 radio_buttons <?php if(get_option('swarmify_cdn_key') == ''){ echo 'low_opacity'; }?>">
        <div>
          <input <?php if(get_option('swarmify_cdn_key') == ''){ echo 'disabled';} ?> id="enable_swarmify" value="on" type="radio" <?php if(get_option('swarmify_status') == 'on'){echo 'checked';} ?> <?php if(get_option('swarmify_cdn_key') != ''){ echo 'name="swarmify_status"';} ?> >
          <label for="enable_swarmify"><span>Enable</span> SmartVideo</label>
        </div>
        <div>
          <input <?php if(get_option('swarmify_cdn_key') == ''){ echo 'disabled';} ?> id="disable_swarmify" value="off" type="radio" <?php if(get_option('swarmify_status') !== 'on'){echo 'checked';} ?> <?php if(get_option('swarmify_cdn_key') != ''){ echo 'name="swarmify_status"';} ?>>
          <label for="disable_swarmify"><span class="red">Disable</span> SmartVideo</label>
        </div>
      </div>
    </div>
    <hr>
    <div class="form-group">
      <label class="col-sm-12 main_label">
        <?php _e('Toggle YouTube auto-conversions on or off',$this->plugin_name); ?>
      </label>
      <div class="col-sm-12">
          <input id="toggle_youtube" value="on" <?php if(get_option('swarmify_toggle_youtube') == 'on'){echo 'checked';} ?> type="checkbox" name="swarmify_toggle_youtube">
          <label for="toggle_youtube">Auto-convert YouTube videos</label>
      </div>
    </div>
    <hr>
    <div class="form-group">
      <label class="col-sm-12 main_label">
        <?php _e('Toggle alternate layout method on or off',$this->plugin_name); ?>
      </label>
      <div class="col-sm-12">
          <input <?php if(get_option('swarmify_toggle_layout') == 'on'){echo 'checked';} ?> id="toggle_layout" value="on" type="checkbox" name="swarmify_toggle_layout">
          <label for="toggle_layout">Alternate layout method (if you are experiencing odd video sizing or full-screen issues, try this)</label>
      </div>
    </div>
    <hr>
    <input class="swarmify-button" type="submit" value="Save Settings">
  </form>
  <hr>
  <?php
    $name ='settings';
    require('footer-display.php'); 
  ?>
</div>