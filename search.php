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
            include 'db_con.php';
            ?>
            <!--End Header-->

            <!--Start Featured section-->
            <section class="directory-search-form-slider business">
                <!--Start Search Filter-->
                <div class="container">
                    <div class="row"  style="margin-top:200px">
                        <?php
                        include "shared/search_form.php";
                        include 'db_con.php';
                        $condition= "where 1=1";
                        if(!empty($_POST)){
                            if(!empty($_POST['group'])){
                                $condition.= " and blood_group='$_POST[group]'";
                            }
                            if(!empty($_POST['location'])){
                                $condition.= " and location='$_POST[location]'";
                            }
                            if(!empty($_POST['name'])){
                                $condition.= " and name like '%$_POST[name]%'";
                            }
                        }
                        ?>
                    </div>
                </div>
                <!--End Search Filter-->
            </section>
            <section class="business-feat">
                <!--Start Featured container-->
                <div class="container">
                    <!--Start Section Title-->
                    <div class="section-title">
                        <h2 class="text-center text-bold"><span>Doners</span></h2>
                    </div>
                    <!--End Section Title-->

                    <!--Start Featured Row-->
                    <div class="row">


                        <?php
                        $query_donor = mysql_query("select * from donor_information $condition order by id desc");
                        $rows=  mysql_num_rows($query_donor);
                        if($rows>0){
                        while ($row_donor = mysql_fetch_array($query_donor)) {
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
                        <?php }} else{ echo "<div style='text-align:center;font-size:22px;color:red;font-weight:bold;'>Data Not Found.</div>"; } ?>

                    </div>
                    <!--End Featured Row-->
                </div>
                <!--End Featured container-->
            </section>
            <!--End Featured section-->
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

</html>