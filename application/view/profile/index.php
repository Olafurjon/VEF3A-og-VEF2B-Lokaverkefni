
<div id="tf-about tf-about-profile">
    <div class="container text-center ">

            <div class="section-title profiletitle sectionh2   ">
                <h4>Upplýsingar</h4>
            </div>
            <div class="dpimg form-style-6 ">

                <?php if ($info[0]->sex == "Kvenkyns"){ $pic = 'src="'.URL.'/img/profile/dp_default/defaultfemale.jpg"';} elseif ($info[0]->sex == "Annað"){$pic = 'src="'.URL.'/img/profile/dp_default/defaultother.jpg"';} else { $pic = 'src="'.URL.'/img/profile/dp_default/defaultmale.png"';}  ?>
            <img class="dpmynd" <?php if($info[0]->profilepic != null){echo 'src="'.$info[0]->profilepic.'?='.Date('U').'"';} else {echo $pic;}?>">
                <form class="uploadform" action="<?php echo URL;?>profile/upload" method="post" enctype="multipart/form-data" >
                    <label class="uploadtakki" for="image">Veldu mynd</label>
                    <input type="file" name="image" id="image"  >
                    <input  type="submit" name="upload" id="upload" value="Breyta" >
                </form>
            </div>

<div class="form-style-6">
                <form class="register" action="<?php echo URL;?>profile/breyta" method="post">

                    <label for="nafn">Nafns:</label>
                    <input id="nafn" name="nafn" type="text" value=" <?php echo $info[0]->name; ?>" required>
                    <label for="username">Notendanafn:</label>
                    <input id="username" name="username" type="text" value=" <?php echo $info[0]->username; ?>" readonly>
                    <label for="username">Þjálfari:</label>
                    <input id="username" name="username" type="text" value=" <?php if( $info[0]->trainer_id == null) {echo "Sæktu um þjálfara";} else { echo $info[0]->trainer_id;} ?>" readonly>
                    <label for="user">Netfang:</label>
                    <input id="user" name="user" type="email" value="<?php echo $info[0]->email;?>" readonly ><br>
                    <label for="kyn">Kyn:</label>
                    <input id="kyn" name="kyn" type="text" value="<?php echo $info[0]->sex;?>" readonly ><br>
                    <label for="pass">Lykilorð:</label>
                    <input id="pass" name="pass" type="password" required>
                    <label for="confpass" >Staðfesta Lykilorð:</label>
                    <input id="confpass" name="confpass" type="password" required>
                    <label for="datejoined" >Aðgangur Stofnaður:</label>
                    <input id="datejoined" name="datejoined" type="datetime" value="<?php echo $info[0]->date_joined;?>" disabled >
                    <input id="btbreyta" name="breyta" type="submit" value="Breyta">
                </form>
</div>
            </div>


    </div>

            <hr>
            <div class="clearfix"></div>

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
<script type="text/javascript" src="<?PHP echo URL ?>js/bootstrap-filestyle.min.js"> </script>



