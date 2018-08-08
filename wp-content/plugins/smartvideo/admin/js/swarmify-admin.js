jQuery(document).ready(function($){

	'use strict';
	$('.swarmify_cdn_key').inputmask("********-****-****-****-************");

	$('.cdn_key_button').click(function(e){
		if (!$(".swarmify_cdn_key").inputmask("isComplete")){
			e.preventDefault();;
			alert('Swarm CDN Key is invalid.');
		}
	});

	$(document).on('click', ".swarmify-tabs span", function() {
        var parent = $(this).parent().parent();
		$('.swarmify-tabs span',parent).removeClass('active');
		$(this).addClass('active');
        if($(this).hasClass('swarmify-main-tab')){
            $('.swarmify-basic,.swarmify-advanced',parent).hide();
            $('.swarmify-main',parent).show();
        }else if($(this).hasClass('swarmify-basic-tab')){
            $('.swarmify-main,.swarmify-advanced',parent).hide();
            $('.swarmify-basic',parent).show();
        }else if($(this).hasClass('swarmify-advanced-tab')){
            $('.swarmify-basic,.swarmify-main',parent).hide();
            $('.swarmify-advanced',parent).show();
        }
	});

	$(document).on('click', ".swarmify_add_video",open_video_window)
    $('.swarmify_add_video').click(open_video_window);
    function open_video_window() {
        if (this.window === undefined) {
            this.window = wp.media({
                    title: 'Insert a video',
                    library: {type: 'video'},
                    multiple: false,
                    button: {text: 'Insert'}
                });

            var self = this;
            this.window.on('select', function() {
                    var video = self.window.state().get('selection').first().toJSON();
                    $('.swarmify_url').val(video.url).change();
                });
        }

        this.window.open();
        return false;
    }


	$(document).on('click', ".swarmify_add_image",open_image_window)
    $('.swarmify_add_image').click(open_image_window);
    function open_image_window() {
        if (this.window === undefined) {
            this.window = wp.media({
                    title: 'Insert an image',
                    library: {type: 'image'},
                    multiple: false,
                    button: {text: 'Insert'}
                });

            var self = this;
            this.window.on('select', function() {
                    var video = self.window.state().get('selection').first().toJSON();
                    $('.swarmify_poster').val(video.url).change();
                });
        }

        this.window.open();
        return false;
    }


    $(document).on('hover', ".swarmify_info",function(){
        var tooltip = $($(this)).next();
        tooltip.toggle();
    });

    $('.swarmify_insert_button').click(function(){
        var swarmify_url = $('.swarmify_url').val();
        if(swarmify_url == 'undefined'){
            swarmify_url = '';
        }
        if(swarmify_url === ''){
            alert('Video URL is required.');
            return;
        }

        var swarmify_poster = $('.swarmify_poster').val();
        if(swarmify_poster == 'undefined' || swarmify_poster == ''){
            swarmify_poster = '';
        }else{
            swarmify_poster = 'poster="'+swarmify_poster+'"';
        }



        var swarmify_height = $('.swarmify_height').val();
        if(swarmify_height == 'undefined' || swarmify_height == ''){
            swarmify_height = '720';
        }

        var swarmify_width = $('.swarmify_width').val();
        if(swarmify_width == 'undefined' || swarmify_width == ''){
            swarmify_width = '1280';
        }

        var swarmify_autoplay = $('.swarmify_autoplay');
        if(swarmify_autoplay.is(':checked')){
            swarmify_autoplay = 'autoplay=true';
        }else{
            swarmify_autoplay = '';
        }

        var swarmify_muted = $('.swarmify_muted');
        if(swarmify_muted.is(':checked')){
            swarmify_muted = 'muted=true';
        }else{
            swarmify_muted = '';
        }

        var swarmify_loop = $('.swarmify_loop');
        if(swarmify_loop.is(':checked')){
            swarmify_loop = 'loop=true';
        }else{
            swarmify_loop = '';
        }


        var swarmify_controls = $('.swarmify_controls');
        if(swarmify_controls.is(':checked')){
            swarmify_controls = 'controls=true';
        }else{
            swarmify_controls = '';
        }

        var swarmify_video_inline = $('.swarmify_video_inline');
        if(swarmify_video_inline.is(':checked')){
            swarmify_video_inline = 'playsinline=true';
        }else{
            swarmify_video_inline = '';
        }

        var swarmify_unresponsive = $('.swarmify_unresponsive');
        if(swarmify_unresponsive.is(':checked')){
            swarmify_unresponsive = 'responsive=true';
        }else{
            swarmify_unresponsive = '';
        }


        var smartvideo = '[smartvideo src="'+swarmify_url+'" width="'+swarmify_width+'" height="'+swarmify_height+'" '+swarmify_unresponsive+' '+swarmify_poster+' '+swarmify_autoplay+' '+swarmify_muted+' '+swarmify_loop+' '+swarmify_controls+' '+swarmify_video_inline+']';
        smartvideo = smartvideo.replace(/ +(?= )/g,'');
        smartvideo = smartvideo.replace(' ]',']');
        wp.media.editor.insert(smartvideo);
        clear_form_elements('swarmify-modal-content')
        parent.$.fancybox.close();
    });



    function clear_form_elements(id_name) {
      jQuery("#"+id_name).find(':input').each(function(input_field) {
        switch(this.type) {
            case 'text':
            case 'file':
                jQuery(this).val('');
                break;
            case 'checkbox':
                this.checked = false;
                break;
        }
        $('.swarmify_controls,.swarmify_unresponsive').attr('checked','checked');
      });
    }

    $('.swarmify_add_youtube').click(function(){
        $('#video_url_fancybox .yt').show();
        $('#video_url_fancybox .other').hide();
    });

    $('.swarmify_add_source').click(function(){
        $('#video_url_fancybox .yt').hide();
        $('#video_url_fancybox .other').show();
    });

});