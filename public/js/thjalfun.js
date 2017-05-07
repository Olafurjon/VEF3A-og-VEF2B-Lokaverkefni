/**
 * Created by ÓliJón on 06/05/2017.
 */
$(".clickme").click(function (e) {
    console.log(e.target.className);
    $(".MakeMessage").removeClass("fela");
    var val = e.target.className;
    val = val.split(" ");
    console.log(val);
    val = val.slice(1);
    console.log(val);
    val = val.toString();
    val = val.replace(',',' ');
    val = val.replace(',',' ');
    console.log(val.toString());
    $('input[name=nafntrainer]').attr('value',val);


    });