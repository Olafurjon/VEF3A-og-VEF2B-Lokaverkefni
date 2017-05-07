
<div id="tf-about tf-about-profile">
    <div class="container text-center ">

            <div class="section-title profiletitle sectionh2   ">
                <h4>Pósthólf</h4>
            </div>
            <?php if(!isset($username))
            {
                echo "<h2>Þú verður að vera skráður inn til að skoða póstinn... </h2> <p></p><br>" ;
            }
            else {
            ?>



            <?php }?>
            <div class="clearfix"></div>
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
<script type="text/javascript" src="<?PHP echo URL ?>js/bootstrap-filestyle.min.js"> </script>



