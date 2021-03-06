
<!-- Æfingasíða
==========================================-->
<div id="tf-about">
    <div class="section-title profiletitle ">
        <h4>Æfingar</h4>
        <?php if(!isset($_SESSION['username'])) {echo "<p>Mundu að skrá þig inn til að komast á sérsniðin æfingarplön </p>";} ?>
        <?php if((isset($_SESSION['username']) && $info[0]->trainer_id == null || ($info[0]->Status != "Admin" || $info[0]->Status != "Trainer"))) {echo "<p> <a href='".URL."/thjalfun'>Smelltu hér</a> til að sækja um þjálfara og fá sérsniðin plön </p>";} ?>
</div>

    <div class="aefingaslider">
        <a href="#upp" ><p class="bt btsida1 xk2"> Brjóst </p></a>
        <a href="#upp" ><p class="bt btsida2"> Bak </p></a>
        <a href="#upp" ><p class="bt btsida3"> Fætur </p></a>
        <a href="#upp" ><p class="bt btsida4"> Axlir </p></a>
        <a href="#upp" ><p class="bt btsida5"> Hendur </p></a>
        <a href="#upp" ><p class="bt btsida6"> Kviður </p></a>

    </div>

    <div class="container text-center ">
        <div class="popup" id="media-popup"><label class="popuploka" for="popupgluggi">LOKA GLUGGA </label><iframe width="560" height="315" src="" frameborder="0" allowfullscreen></iframe></div>
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

        <div id="Axlir" class="slideraefing fela">
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
                defaultWorkout($shoulders);
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

        <div id="Hendur" class="slideraefing fela">
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
                defaultWorkout($hendur);
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

        <div id="Kviður" class="slideraefing fela">
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
                defaultWorkout($abs);
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



    </div>


<!-- Hvatningarorðin
==========================================-->
<div id="tf-testimonials" class="text-center newpic">
    <div class="overlay">
        <div class="container">
            <div class="section-title center">
                <h2><strong>Hvatningarorð</strong> Núins</h2>
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
        $url = $aef->hjalp;
        $url = str_replace("watch?v=","embed/",$url);
        echo "<td rowspan='4'><a href='#media-popup' data-media='" . $url  ."'>Hjálparvideo</a> </td>";
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



