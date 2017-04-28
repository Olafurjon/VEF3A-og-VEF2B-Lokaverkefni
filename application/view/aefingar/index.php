
<!-- About Us Page
==========================================-->
<div id="tf-about">
    <div class="aefingaslider">
        <a href="#upp" class="fyrrisida"><i class="fa fa-step-backward"></i></a>
        <a href="#upp" class="bt "><p class="btsida1"> Brjóst </p></a>
        <a href="#upp" <p class="bt btsida2"> Bak </p></a>
        <a href="#upp" <p class="bt btsida3"> Fætur </p></a>
        <a href="#upp" <p class="bt btsida4"> Axlir </p></a>
        <a href="#upp" <p class="bt btsida5"> Hendur </p></a>
        <a href="#upp" <p class="bt btsida6"> Kviður </p></a>
        <a href="#upp" class="bt seinnisida"><i class="fa fa-step-forward"></i></a>
    </div>

    <div class="container text-center ">
        <div id="Brjóst" class="slideraefing syna ">
        <table id="aefingar">
            <tr>
                <th> Æfing </th>
                <th> Reps </th>
                <th> Kg </th>
                <th> Hvíld </th>
                <th> Leiðbeiningar </th>
            </tr>
            <tr>
                <td> Upphitun</td>
                <td> 10 mín</td>
                <td> </td>
                <td></td>
                <td> Bretti/stigavél etc...</td>
            </tr>
            <?php
            defaultWorkout($brjost);
            ?>
            <tr>
                <td> Brennsla</td>
                <td> 20-30 mín</td>
                <td> </td>
                <td></td>
                <td> Bretti/stigavél etc...</td>
            </tr>
            <tr>
                <td> Teygja í teygjuherbergi</td>
                <td> 5-10 mín</td>
                <td></td>
                <td> </td>
                <td> Teygja á vöðvum</td>
            </tr>
        </table>
            <hr>
        </div>

        <div id="Bak" class="slideraefing fela">
            <table id="aefingar">
                <tr>
                    <th> Æfing </th>
                    <th> Reps </th>
                    <th> Kg </th>
                    <th> Hvíld </th>
                    <th> Leiðbeiningar </th>
                </tr>
                <tr>
                    <td> Upphitun</td>
                    <td> 10 mín</td>
                    <td> </td>
                    <td></td>
                    <td> Bretti/stigavél etc...</td>
                </tr>
                <?php
                defaultWorkout($back);
                ?>
                <tr>
                    <td> Brennsla</td>
                    <td> 20-30 mín</td>
                    <td> </td>
                    <td></td>
                    <td> Bretti/stigavél etc...</td>
                </tr>
                <tr>
                    <td> Teygja í teygjuherbergi</td>
                    <td> 5-10 mín</td>
                    <td></td>
                    <td> </td>
                    <td> Teygja á vöðvum</td>
                </tr>
            </table>
            <hr>
        </div>

            <div id="Fætur" class="slideraefing fela">
                <table id="aefingar">
                    <tr>
                        <th> Æfing </th>
                        <th> Reps </th>
                        <th> Kg </th>
                        <th> Hvíld </th>
                        <th> Leiðbeiningar </th>
                    </tr>
                    <tr>
                        <td> Upphitun</td>
                        <td> 10 mín</td>
                        <td> </td>
                        <td></td>
                        <td> Bretti/stigavél etc...</td>
                    </tr>
                    <?php
                    defaultWorkout($faetur);
                    ?>
                    <tr>
                        <td> Brennsla</td>
                        <td> 20-30 mín</td>
                        <td> </td>
                        <td></td>
                        <td> Bretti/stigavél etc...</td>
                    </tr>
                    <tr>
                        <td> Teygja í teygjuherbergi</td>
                        <td> 5-10 mín</td>
                        <td></td>
                        <td> </td>
                        <td> Teygja á vöðvum</td>
                    </tr>
                </table>
                <hr>
            </div>
        <div class="aefingaslider">
            <a href="#upp" class="fyrrisida"><i class="fa fa-step-backward"></i></a>
            <a href="#upp" class="bt "><p class="btsida1"> Brjóst </p></a>
            <a href="#upp" <p class="bt btsida2"> Bak </p></a>
            <a href="#upp" <p class="bt btsida3"> Fætur </p></a>
            <a href="#upp" <p class="bt btsida4"> Axlir </p></a>
            <a href="#upp" <p class="bt btsida5"> Hendur </p></a>
            <a href="#upp" <p class="bt btsida6"> Kviður </p></a>
            <a href="#upp" class="bt seinnisida"><i class="fa fa-step-forward"></i></a>
        </div>

    </div>

<!-- Hvatningarorðin
==========================================-->
<div id="tf-testimonials" class="text-center newpic">
    <div class="overlay">
        <div class="container">
            <div class="section-title center">
                <h2><strong>Hvatningarorð</strong> dagsins</h2>
                <div class="line">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div id="testimonial" class="owl-carousel owl-theme">
                        <div class="item">
                            <?php $json = file_get_contents("http://178.62.25.29/JSON/quotes.JSON");
                            $JSON_dec = json_decode($json,true);
                            $x = random_int(0,count($JSON_dec) -1);
                            $y = random_int(0,count($JSON_dec) -1);
                            $z = random_int(0,count($JSON_dec) -1);
                            while ($y == $x)
                            {
                                $y = random_int(0,count($JSON_dec) -1);
                            }
                            while ($z == $x or $z == $y)
                            {
                                $z = random_int(0,count($JSON_dec) -1);
                            }

                            ?>

                            <h5><?php echo $JSON_dec[$x]['Quote'];?></h5>
                            <p><?php echo $JSON_dec[$x]['Author'];?></p>
                        </div>

                        <div class="item">
                            <h5><?php echo $JSON_dec[$y]['Quote'];?></h5>
                            <p><?php echo $JSON_dec[$y]['Author'];?></p>
                        </div>

                        <div class="item">
                            <h5><?php echo $JSON_dec[$z]['Quote'];?></h5>
                            <p><?php echo $JSON_dec[$z]['Author'];?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo URL; ?>js/formvalidate.js" type="text/javascript"></script>

<?php
function defaultWorkout($aefing)
{
    $aefing = array($aefing);
    $i = 0;
    $k = 18;



    foreach ($aefing[0] as $aef )
    {
        if($i == 1)
        {
            $k = 10;
        }
        if($i == 2)
        {
            $k = 8;
        }
        if($i == 3)
        {
            $k = 12;
        }
        if($i == 4)
        {
            $k = 16;
        }

        if($i == 10)
        {
            $k = 8;
        }

        if($i == 6)
        {
            $k = 10;
        }

        if($i == 7)
        {
            $k = 10;
        }
        if($i == 8)
        {
            $k = 15;
        }

        echo "<td rowspan='5'>". $aef->nafn ."</td>";
        echo "<tr>";
        echo "<td> $k </td>";
        echo "<td> <input class='kg'> </td> ";
        echo "<td> 1 mín </td>";
        echo "<td rowspan='4'><a href='".$aef->hjalp  ."'>Hjálparvideo</a> </td>";
        if($i == 0 or $i == 4 ){$k -= 2;}

        echo "</tr>";
        echo "<tr>";
        echo "<td> $k </td>";
        echo "<td> <input class='kg'> </td> ";
        echo "<td> 0:45 </td>";
        if($i == 0 or $i == 4){$k -= 2;}
        echo "</tr>";
        echo "<tr>";
        echo "<td> $k </td>";
        echo "<td> <input class='kg'> </td> ";
        echo "<td> 0:45 </td>";
        if($i == 0 or $i == 4){$k -= 2;}
        echo "</tr>";
        echo "<tr>";
        echo "<td> $k </td>";
        echo "<td> <input class='kg'> </td> ";
        echo "<td> 0:45 </td>";
        if($i == 0 or $i == 4){$k -= 2;}
        echo "</tr>";
        $i++;


    }
}?>



