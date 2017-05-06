/**
 * Created by ÓliJón on 06/05/2017.
 */
$(".clickme").click(function (e) {
    console.log(e.target.className);
    $(".MakeMessage").removeClass("fela");
    var val = e.target.className;
    val = val.split(" ");
    val = val.slice(1);
    val = val.toString();
    val = val.replace(','," ");
    $('input[name=nafntrainer]').val(val);


    });