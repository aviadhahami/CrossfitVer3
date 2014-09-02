jQuery(document).ready(function() {
    var GreetingAll = jQuery("#GreetingAll").val();
    jQuery("#PleasePushMe").click(function() {
        jQuery.ajax({
            type: 'POST',
            url: 'http://www.iscadb.org/crossfit/wp-admin/admin-ajax.php',
            data: {
                action: 'MyAjaxFunction',
                GreetingAll: GreetingAll,
            },
            success: function(data, textStatus, XMLHttpRequest) {
                jQuery("#test-div1").html('');
                jQuery("#test-div1").append(data);
            },
            error: function(MLHttpRequest, textStatus, errorThrown) {
                alert(errorThrown);
            }
        });
    });
    jQuery('#PaginationExample a').live('click', function(e) {
        e.preventDefault();
        var link = jQuery(this).attr('href');
        jQuery('#contentInner').html('Loading...');
        jQuery('#contentInner').load(link + ' #contentInner');

    });
});