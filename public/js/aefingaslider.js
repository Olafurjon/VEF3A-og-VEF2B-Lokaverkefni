
    $(".bt").click(function (e) {
        var tar = $(e.target);

        $(".bt").each(function () {
            $(this).removeClass("xk2");
        });
        var comp = tar[0].innerHTML.toString()
        tar.addClass("xk2");





        $syna = $(this)[0].innerText;
        $(".slideraefing").each(function () {
            $(this).addClass("fela");
            $(this).removeClass("syna");
            $("#"+$syna).addClass("syna");


        })


    });

    $(".forback").click(function () {
        if($(".forback")[0].click(function () {
            $syna = $(".bt")[index +1].innerText;
                $(".slideraefing").each(function () {
                    $(this).addClass("fela");
                    $(this).removeClass("syna");
                    $("#" + $syna).addClass("syna");

                });


            }));

    });


