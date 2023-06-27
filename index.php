<?php
/**
* Plugin Name: 500 Designs UTMs
* Plugin URI: https://500designs.com/
* Description: UTM'S as Cookies
* Version: 1.0.0
* Author: 500 Designs
* Author URI: https://500designs.com/
*/

function set_cookies_input(){
?>
<script type="text/javascript">
jQuery(document).ready(function() {
    // function to get URL parameters
    function getUrlParameter(name) {
        name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
        var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
        var results = regex.exec(location.search);
        return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
    };

    // set cookies for utm parameters
    var utm_params = ['utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content'];
    for(var i = 0; i < utm_params.length; i++) {
        var utm_value = getUrlParameter(utm_params[i]);
        if (utm_value != '') {
            var date = new Date();
            date.setFullYear(date.getFullYear() + 1);
            document.cookie = utm_params[i] + "=" + utm_value + "; expires=" + date.toUTCString() + "; path=/";
        }
    }

    // function to get cookie
    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for(var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
              c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
              return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    // populate form fields with utm values from cookies
    for(var i = 0; i < utm_params.length; i++) {
        var cookie_value = getCookie(utm_params[i]);
        if (cookie_value != '') {
            jQuery('#form-field-' + utm_params[i]).val(cookie_value);
        }
    }
});
</script>
<style>
	
	.elementor-field-group-utm_source, 
	.elementor-field-group-utm_medium, 
	.elementor-field-group-utm_campaign, 
	.elementor-field-group-utm_term, 
	.elementor-field-group-utm_content{
		display: none!important;
	}

</style>
<?php
}
add_action('wp_footer', 'set_cookies_input');
?>
