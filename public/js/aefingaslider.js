
    $(".bt").click(function () {
        $(".bt").each(function () {
            $(this).removeClass("xk2");
        });
        $(this).addClass("xk2");
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


