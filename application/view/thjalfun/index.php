
<!-- Þjálfunarsíðan
==========================================-->
<div id="tf-team2" class="text-center">
    <div class="overlay">
        <div class="container">
            <div class="section-title center sectionh2">
                <?php if(isset($info)) {

                    if ($info[0]->Status == "Trainer" or $info[0]->Status == "Admin") {
                        echo "<h2>Fylgstu með <strong>fólkinu þínu</strong></h2>";
                        $subject = "Þú stendur þig vel!";
                    } else {
                        echo "<h2>Skoðaðu <strong>Þjálfarana okkar</strong></h2>";
                        $subject = "Ég vill ná betri árangri!";
                    }
                }

                else {
                    echo "<h2>Skoðaðu <strong>Þjálfarana okkar</strong></h2>";
                    $subject = "Ég vill ná betri árangri!";
                }?>

                <div class="line">
                    <hr>
                </div>
            </div>
            <?php if(isset($message)) {if($message[0] == true) {echo "<h4 class='messageok'>Að senda skilaboð til ".$message[1]." tókst</h4>";} else{echo "<h4 class='xk2'>Að senda skilaboð til ".$message[1]." tókst ekki";}} ?>
            <div id="team" class="owl-carousel owl-theme row">

                <?php
                if(isset($info)) {
                    if ($info[0]->Status == "Trainer" or $info[0]->Status == "Admin") {
                        foreach ($trainees as $slave) {
                            if ($slave->profilepic == null) {
                                $pic = URL . "img/profile/dp_default/defaultthjalfun.png";
                            } else {
                                $pic = $slave->profilepic;
                            }

                            echo '<div class="item">';
                            echo '<div class="thumbnail">';
                            echo '<img src="' . $pic . '" alt="..." class="img-circle team-img">';
                            echo '<div class="caption">';
                            echo '<h3>' . $slave->name . '</h3>';
                            echo '<p>' . $slave->email . '<p>';

                            echo '<p ><a  href="#"> <u class="clickme ' . $slave->name . '"> Hafa samband </u></a></p>';
                            echo '<p ><a  href="#"> <u class="clickme ' . $slave->name . '"> skoða Sérsniðið plan</u></a></p>';
                            echo "</div> ";
                            echo "</div>";
                            echo "</div> ";
                        }

                    }
                    else
                    {
                        foreach ($trainers as $trainer) {
                            if ($trainer->profilepic == null) {
                                $pic = URL . "img/profile/dp_default/defaultthjalfun.png";
                            } else {
                                $pic = $trainer->profilepic;
                            }

                            echo '<div class="item">';
                            echo '<div class="thumbnail">';
                            echo '<img src="' . $pic . '" alt="..." class="img-circle team-img">';
                            echo '<div class="caption">';
                            echo '<h3>' . $trainer->name . '</h3>';
                            echo '<p>' . $trainer->email . '<p>';

                            echo '<p ><a  href="#"> <u class="clickme ' .  $trainer->name . '"> Hafa samband </u></a></p>';
                            echo "</div> ";
                            echo "</div>";
                            echo "</div> ";
                        }
                    }
                }
                else
                {
                    foreach ($trainers as $trainer) {
                        if ($trainer->profilepic == null) {
                            $pic = URL . "img/profile/dp_default/defaultthjalfun.png";
                        } else {
                            $pic = $trainer->profilepic;
                        }

                        echo '<div class="item">';
                        echo '<div class="thumbnail">';
                        echo '<img src="' . $pic . '" alt="..." class="img-circle team-img">';
                        echo '<div class="caption">';
                        echo '<h3>' . $trainer->name . '</h3>';
                        echo '<p>' . $trainer->email . '<p>';

                        echo '<p ><a  href="#"> <u class="clickme ' .  $trainer->name . '"> Hafa samband </u></a></p>';
                        echo "</div> ";
                        echo "</div>";
                        echo "</div> ";
                    }
                }

                ?>


            </div>
        </div>
    </div>
    <hr>
</div>

<div class="clearfix"></div>
<div class="text-center MakeMessage fela">
    <form method="post" action="<?php echo URL ?>thjalfun/postMessage" >
        <div class="inner">


            <div class="messageform">

                <div class="form-style-6">
                        <h2>Hafðu samband</h2>
                        <p>Sendu mér línu hvað þú ert að spá og ég svara</p>
                        <label for="nafntrainer">Nafn Þjálfara </label>
                        <input type="text" class="nafntrainer" name="nafntrainer" value="" required readonly />
                        <label for="username"> Þitt Notendanafn  </label>
                        <input type="text" name="username" value="<?php if(isset($username)) {echo $username . '" readonly';} else {echo "Notendanafn"; } ?>"  />
                        <label for="subject"> Fyrisögn </label>
                        <input type="text" name="subject" placeholder="<?php echo $subject ?>" />
                        <label for="message"> Skilaboð </label>
                        <textarea name="message"  placeholder="Skilaboð..."></textarea>
                        <input type="submit" value="Send" />
                        <input type="reset" value="Reset" />

                </div>
        </div>
    </form>
</div>
</div>

<!-- Hvatningarorðin
==========================================-->
<div id="tf-testimonials" class="text-center newpic2">
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
<script src="<?php echo URL; ?>js/thjalfun.js" type="text/javascript"></script>




