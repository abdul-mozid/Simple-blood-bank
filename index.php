<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
    <!--<![endif]-->

    <head>
        <?php
        include "shared/css_links.php";
        include 'db_con.php';
        ?>
    </head>

    <body class="layout-wide color-seven">
        <!--Start Preloader Eight-->
        <div class="site-preloader eight">
            <div class="spinner"></div>
        </div>
        <!--End Preloader Eight-->

        <!--Start Body Wrap-->
        <div id="body-wrap">
            <!--Start Header-->
            <?php
            include "shared/nav.php";
            ?>
            <!--End Header-->
            <!--Start Search Directory Section-->
            <section class="directory-search-form-slider business">
                <!--Start Slider Carousel-->
                <div id="directory-slider-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">


                        <!--Start Slide Item-->
                        <div class="item active" style="background: url('img/slider/1504940419.jpg');">
                            <div class="directory-slider-overlay"></div>
                            <div class="slider-content">
                                <h2 class="text-bold animated rollIn">Welcome to eBlood</h2>
                                <h3 class="animated rollIn">Give blood and save lives.</h3>
                            </div>
                        </div>
                        <!--End Slide Item-->


                    </div>
                    <a class="left carousel-control" href="#directory-slider-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                    <a class="right carousel-control" href="#directory-slider-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
                <!--End Slider Carousel-->

                <!--Start Search Filter-->
                <div class="container">
                    <div class="row">
                        <?php
                        include "shared/search_form.php";
                        ?>
                    </div>
                </div>
                <!--End Search Filter-->
            </section>
            <!--End Search Directory Section-->

            <!--Start Featured section-->
            <section class="business-feat">
                <!--Start Featured container-->
                <div class="container">
                    <!--Start Section Title-->
                    <div class="section-title">
                        <h2 class="text-center text-bold"><span>6 New Donors</span></h2>
                    </div>
                    <!--End Section Title-->

                    <!--Start Featured Row-->
                    <div class="row">

                        <?php
                        $query_donor = mysql_query("select * from donor_information order by id desc limit 0,6");
                        while($row_donor = mysql_fetch_array($query_donor)){
                        ?>
                        <!--Start Featured Item Col-->
                        <div class="col-md-4 col-sm-6">
                            <!--Start Featured Item-->
                            <div class="feat-item">
                                <div class="feat-item-img">
                                    <img class="img-responsive" src="<?php echo $row_donor['photo'];?>" alt="" style="height:260px;width:100%;">
                                </div>
                                <div class="feat-item-cont">
                                    <h4 class="text-bold"><?php echo $row_donor['name'];?></h4>
                                    <p><i class="fa fa-arrow-circle-right color-main"></i><strong> Blood Group: <?php echo $row_donor['blood_group'];?></strong> </p>
                                    <p><i class="fa fa-arrow-circle-right color-main"></i><strong> Age:</strong> <?php echo $row_donor['age'];?></p>
                                    <p><i class="fa fa-arrow-circle-right color-main"></i><strong> Sex:</strong> <?php echo $row_donor['sex'];?></p>
                                    <p><i class="fa fa-arrow-circle-right color-main"></i><strong> Mobile:</strong> <?php echo $row_donor['mobile'];?></p>
                                    <p><i class="fa fa-arrow-circle-right color-main"></i><strong> Location:</strong> <?php echo $row_donor['location'];?></p>
                                    <p><i class="fa fa-arrow-circle-right color-main"></i><strong> Registration Date:</strong> <?php echo date('j F, Y',strtotime($row_donor['registration_date']));?></p>
                                </div>
                            </div>
                            <!--End Featured Item-->
                        </div>
                        <!--End Featured Item Col-->
                        <?php } ?>
                    </div>
                    <!--End Featured Row-->
                </div>
                <!--End Featured container-->
            </section>
            <!--End Featured section-->

            <!--Start Counter Section-->
            <section class="counter two">
                <div class="counter-bg-ovelay"></div>
                <!--Start container-->
                <div class="container">
                    <div class="row">


                        <!--Start Item-->
                        <div class="col-sm-4">
                            <div class="counter-item">
                                <i class="fa fa-users text-center"></i>
                                <h1 class="text-center extra integers">
                                    <?php
                                    $query_donor = mysql_query("select count(*) as counter from donor_information");
                                    $row_donor = mysql_fetch_array($query_donor);
                                    echo $row_donor['counter'];
                                    ?>
                                </h1>
                                <h4 class="text-center">Total Donors</h4>
                            </div>
                        </div>
                        <!--End Item-->


                        <!--Start Item-->
                        <div class="col-sm-4">
                            <div class="counter-item">
                                <i class="fa fa-users text-center"></i>
                                <h1 class="text-center extra integers">
                                    <?php
                                    $query_district = mysql_query("select count(distinct(location)) as counter from donor_information");
                                    $row_district = mysql_fetch_array($query_district);
                                    echo $row_district['counter'];
                                    ?>
                                </h1>
                                <h4 class="text-center">Available Donors in District</h4>
                            </div>
                        </div>
                        <!--End Item-->


                        <!--Start Item-->
                        <div class="col-sm-4">
                            <div class="counter-item">
                                <i class="fa fa-medkit text-center"></i>
                                <h1 class="text-center extra integers">
                                    <?php
                                    $query_blood_group = mysql_query("select count(distinct(blood_group)) as counter from donor_information");
                                    $row_blood_group = mysql_fetch_array($query_blood_group);
                                    echo $row_blood_group['counter'];
                                    ?>
                                </h1>
                                <h4 class="text-center">Available Blood Groups</h4>
                            </div>
                        </div>
                        <!--End Item-->

                    </div>
                </div>
                <!--Start container-->
            </section>
            <!--End Counter Section-->

            <!--Start Testimonial Section-->
            <section class="doctor testimonial three">
                <!--Start container-->
                <div class="container">
                    <!--Start Section Title-->
                    <div class="section-title two">
                        <h2 class="text-center text-bold">Testimonial</h2>
                    </div>
                    <!--End Section Title-->

                    <!--Start Testimonial Item Row-->
                    <div class="row">


                        <!--Start Testimonial Item Col-->
                        <div class="col-md-6">
                            <!--Start Testimonial Item-->
                            <div class="testi-item-three">
                                <div class="testi-item-left float-left">
                                    <img class="img-responsive" src="https://shanto.thesoftking.com/eblood/assets/img/1504983857.png" alt="">
                                </div>
                                <div class="testi-item-right float-right">
                                    <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos veritatis, suscipit beatae sunt assumenda ipsum earum recusandae fuga, omnis nam laborum, accusamus inventore cupiditate libero fugit at. Enim, impedit, perspiciatis.</blockquote>
                                </div>
                            </div>
                            <!--End Testimonial Item-->
                        </div>
                        <!--End Testimonial Item Col-->


                        <!--Start Testimonial Item Col-->
                        <div class="col-md-6">
                            <!--Start Testimonial Item-->
                            <div class="testi-item-three">
                                <div class="testi-item-left float-left">
                                    <img class="img-responsive" src="https://shanto.thesoftking.com/eblood/assets/img/1504983807.png" alt="">
                                </div>
                                <div class="testi-item-right float-right">
                                    <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos veritatis, suscipit beatae sunt assumenda ipsum earum recusandae fuga, omnis nam laborum, accusamus inventore cupiditate libero fugit at. Enim, impedit, perspiciatis.</blockquote>
                                </div>
                            </div>
                            <!--End Testimonial Item-->
                        </div>
                        <!--End Testimonial Item Col-->


                    </div>
                    <!--End Testimonial Item Row-->
                </div>
                <!--End container-->
            </section>
            <!--End Testimonial Section-->



            <!--Start Footer-->
            <?php
            include "shared/footer.php";
            ?>
            <!--End Footer-->
        </div>
        <!--End Body Wrap-->

        <?php
        include "shared/js_links.php";
        ?>

    </body>

</html>                                        </div>
                            <!--End Featured Item-->
                        </div>
                        <!--End Featured Item Col-->


                    </div>
                    <!--End Featured Row-->
                </div>
                <!--End Featured container-->
            </section>
            <!--End Featured section-->

            <!--Start Counter Section-->
            <section class="counter two">
                <div class="counter-bg-