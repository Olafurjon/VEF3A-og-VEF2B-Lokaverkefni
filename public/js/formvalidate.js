/**
 * Created by ÓliJón on 25/03/2017.
 */

$('#username').on('blur', function() {
    checkAvailability();
});

function checkAvailability() {
    jQuery.ajax({
        url: "http://www.sterkari.eu/nyskraning/validation",
        data:'username='+$("#username").val(),
        type: "POST",
        success:function(data){
            $("#user-availability-status").html(data);
        },
        error:function (){}
    });
}


