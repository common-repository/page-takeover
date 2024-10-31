jQuery(document).ready(function($){    
    jQuery('.page-takeover-color').wpColorPicker({
        color: true,
		hide: true,
		palettes: true,
		change: function(event, ui) {

            var data = $(this).data('page-takeover-live-preview'),
            value = $(this).val(),
            selector,
            rule;
        
            data = data.split('|');
            selector = data[0];
            rule = data[1];	

            $(data[0]).css( data[1], ui.color.toString());
            
		}
    });
});