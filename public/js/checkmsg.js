/**
 * Created by ÓliJón on 25/03/2017.
 */


function checkmsg() {
    jQuery.ajax({
        url: "http://www.sterkari.eu/postur/checkMsg",
        data:'username='+$(".username").html(),
        type: "POST",
        success:function(data){
            data = data.replace('.', '');
            data = data.replace('.', '');
            $(".messages").html('<i class="fa fa-envelope" aria-hidden="FALSE"> </i> <b class="unreadmail"> ' + data + '</b>');

        },
        error:function (){}
    });
}
checkmsg()
/*split = data.split(" ");
split = split[2].replace(".","");
split = parseInt(split)
console.log(typeof split);
data = data.replace('.', '');
data = data.replace('.', '');
*/