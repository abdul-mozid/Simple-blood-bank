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
            ?>
            <!--End Header-->

             <!--Start Featured section-->
        <section class="business-feat">
            <!--Start Featured container-->
            <div class="container" style="margin-top:100px;">
                              <!--Start Section Title-->
                <div class="section-title">
                    <h2 class="text-center text-bold"><span>Contact</span> With Us</h2>
                </div>
                <!--End Section Title-->

                <!--Start Featured Row-->
                <div class="row">
                    <!--Start Featured Item Col-->
                    <div class="col-md-8 col-md-offset-2 col-sm-12">
                      
                      <form action="http://ebloodbank.rexbd.net//contact.php" method="post" >
                        <div class="col-md-6 col-md-offset-0">
                          <div class="form-group">
                            <label class="control-label">Name <span style="color: #E50000;">*</span></label>
                            <input name="name" id="name" class="form-control" type="text" required="">
                          </div>
                        </div>

                        <div class="col-md-6 col-md-offset-0">
                          <div class="form-group">
                            <label class="control-label">Email <span style="color: #E50000;">*</span></label>
                            <input name="email" id="email" class="form-control" type="text" required="">
                          </div>
                        </div>

                        <div class="col-md-6 col-md-offset-0">
                          <div class="form-group">
                            <label class="control-label">Mobile <span style="color: #E50000;">*</span></label>
                            <input name="mobile" id="mobile" class="form-control" type="text" required="">
                          </div>
                        </div>

                        <div class="col-md-6 col-md-offset-0">
                          <div class="form-group">
                            <label class="control-label">Address <span style="color: #E50000;">*</span></label>
                            <input name="location" id="location" class="form-control" type="text" required="">
                          </div>
                        </div>

                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="control-label">Message <span style="color: #E50000;">*</span></label>
                            <textarea rows="8" name="btext" id="message" class="form-control" required=""></textarea>
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary cont-frm-btn">Send Message</button>
                          </div>
                        </div>
                      </form>

                    </div>
                    <!--End Featured Item Col-->
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