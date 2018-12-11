// This closure function makes the $-sign an alias for jQuery (noConflict)
(function($) {

    /**
 * Function which should help doing AJAX calls
 * @param url
 * @param data
 * @param callback
 * @param method
 */
function do_ajax(url, data, callback, method) {

    var ajax_method = 'post';

    if(typeof method != 'undefined') {
        ajax_method = method;
    }

    window.doingAjax   = true;

    $('body').addClass('loading');

    $.ajax({
        url: url,
        type: ajax_method,
        dataType: 'json',
        timeout: 240000,
        data: data,

        success: function(response_data) {

            console.log(['Ajax Success:',response_data]);
            $('body').removeClass('loading');
            window.doingAjax = false;
            callback(response_data, data);

        },

        error: function(response_data, status, error) {

            console.error(['Ajax Error:', response_data, status, error]);
            $('body').removeClass('loading');
            window.doingAjax = false;

            if(status == "timeout") {
                alert("Error: Your request could not be completed because it timed out. Try again later");
                document.location.href="/";
            } else {
                callback(response_data, data);
            }

        }

    });
}

// Will run when DOM is loaded
$(document).ready(function() {

    init_theme_logo_upload();

});

// Will run when the page is fully loaded - including graphics.
$(window).load(function() {

    // Add your methods here
    
});
/**
 * Will initialize the theme logo upload functionality
 */
function init_theme_logo_upload() {

    var upload_logo_button = $('.upload_logo_button');

    if(upload_logo_button.length > 0){

        var clicked_button_input_data = '';

        upload_logo_button.on('click', function() {

            clicked_button_input_data = $(this).attr('data-text-input');

            tb_show('', 'media-upload.php?type=image&TB_iframe=true');

            return false;

        });

        window.send_to_editor = function(html) {

            var imgurl = $(html).attr('src');

            $('#'+clicked_button_input_data).val(imgurl);

            var logo_wrapper = $('#'+clicked_button_input_data+"_wrapper");

            logo_wrapper.html("<img src='"+ imgurl +"' height='100' />");

            tb_remove();

            clicked_button_input_data = '';

        };

        $('.remove_logo').click(function(){

            var image_type = $(this).attr('data-logo-type');

            $('#'+image_type+"_wrapper").find('img').remove();

            $('#'+image_type).val('');

        });

    }
}

})(jQuery);