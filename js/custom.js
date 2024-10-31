var root_path_url = "http";
jQuery(document).ready(function($) { 
	root_path_url = $('link[rel="start"]').attr("href") + "/";
});


/***************************************************
	     TOGGLE STYLE
***************************************************/
jQuery(document).ready(function($) {
								
	$(".toggle-container").hide(); 
	$(".trigger").click(function(){
		$(this).toggleClass('active');
		$(this).next(".toggle-container").slideToggle();
	});
});

/***************************************************
	     ACCORDION
***************************************************/
jQuery(document).ready(function($){	
	$('.trigger-button').click(function() {
		$(".trigger-button").removeClass("active")
	 	$('.accordion').slideUp('normal');
		if($(this).next().is(':hidden') == true) {
			$(this).next().slideDown('normal');
			$(this).addClass("active");
		 } 
	 });
	$('.accordion').hide();
});


/***************************************************
	  Check path
***************************************************/

jQuery(document).ready(function($){
	
	$('.check_path').each(function(){
		var icon_path = $(this).attr("src");
		if (icon_path.substr(0, 10) == "wp-content") {
			$(this).attr("src", root_path_url + ""+ icon_path);
		}
	});
});

/**
 * Async Google Fonts Loads
 */
jQuery(document).ready(function(){

	function load_google_font( font ) {
		if ( typeof font === 'string'  ) {
			WebFont.load({
				google: {
					families: [ font ]
				}
			});
		}
	}

	jQuery('.page-takeover-select-font-family').each(function(){
		load_google_font( jQuery(this).val() );
	});

	jQuery('.page-takeover-select-font-family').on('change', function(){
		load_google_font( jQuery(this).val() );
	});

});

/**
 * Show/hide options
 */
jQuery(document).ready(function(){

	function show_hide_trigger_options() {
		var currValue = jQuery('#page_takeover_trigger_type').val();
		jQuery('.page-takeover-option-group-trigger-time').hide();
		if ( currValue == 'time' ) {
			jQuery('.page-takeover-option-group-trigger-time').show();
		}
	}
	
	show_hide_trigger_options();
	
	jQuery('#page_takeover_trigger_type').on('change', function(){
		show_hide_trigger_options();
	});

});

/**
 * Live preview of changes
 */
jQuery(document).ready(function($){

	/**
	 * Handle live preview of changes ( HTML and CSS )
	 */
	$('.page-takeover-live-preview').on( 'change', function(){

		var data = $(this).data('page-takeover-live-preview'),
		value = $(this).val(),
		selector,
		rule;
	
		data = data.split('|');
		selector = data[0];
		rule = data[1];		

		if ( rule == 'html' ) {
			$(selector).html(value);
		} else {
			$(selector).css( rule, value );
		}
		
	});

	$('#page_takeover_subtitle_text').on( 'change', function(){
		$( '#page-takeover-subtitle-inner' ).html( $('#page_takeover_subtitle_text').val() );
	});

	$('#page_takeover_background').wpColorPicker({
		color: true,
		hide: true,
		palettes: true,
		change: function(event, ui) {
			$("#page-takeover-inner").css( 'background-color', ui.color.toString());
		}
	});

	$('#page_takeover_title_color').wpColorPicker({
		color: true,
		hide: true,
		palettes: true,
		change: function(event, ui) {
			$("#page-takeover-title").css( 'color', ui.color.toString());
		}
	});

	$('#page_takeover_subtitle_color').wpColorPicker({
		color: true,
		hide: true,
		palettes: true,
		change: function(event, ui) {
			$("#page-takeover-subtitle-inner").css( 'color', ui.color.toString());
		}
	});

	$('#page_takeover_button_color').wpColorPicker({
		color: true,
		hide: true,
		palettes: true,
		change: function(event, ui) {
			$("#page-takeover-button").css( 'color', ui.color.toString());
		}
	});

	$('#page_takeover_button_background').wpColorPicker({
		color: true,
		hide: true,
		palettes: true,
		change: function(event, ui) {
			$("#page-takeover-button").css( 'background-color', ui.color.toString());
		}
	});

	$('#page_takeover_decline_color').wpColorPicker({
		color: true,
		hide: true,
		palettes: true,
		change: function(event, ui) {
			$("#page-takeover-decline").css( 'color', ui.color.toString());
		}
	});

});