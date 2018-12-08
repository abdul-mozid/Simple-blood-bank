<footer class="footer switcher-footer-three">
    <!--Start Footer Top-->
    <div class="footer-top">
        <!--Start container-->
        <div class="container">
            <!--Start Row-->
            <div class="row">
                <!--Start Col-->
                <div class="col-md-3 col-sm-6">
                    <div class="footer-cont-details">
                        <h5 class="text-left text-upper">Short About us</h5>
                        <div class="border-line"></div>
                        <img class="img-responsive" src="images/logo/logo-footer.png" alt="">
                        <p class="text-left">Register to be a blood donor, give blood and save lives. Find out more about blood donation.</p>
                        <div class="footer-address">
                            <p class="text-left"><i class="fa fa-phone"></i> +8801771561620</p>
                            <p class="text-left"><i class="fa fa-envelope"></i> farhana.runu33@gmail.com</p>
                        </div>
                    </div>
                </div>
                <!--End Col-->

                <!--Start Col-->
                <div class="col-md-3 col-sm-6">
                    <div class="footer-categories">
                        <h5 class="text-left text-upper">Menus</h5>
                        <div class="border-line"></div>
                        <div class="footer-categories-links">
                            <ul>
                                <li><a href="index.php"><i class="fa fa-arrow-circle-right"></i> Home</a></li>

                                <li><a href="contact_us.php"><i class="fa fa-arrow-circle-right"></i>About Us</a></li>
                                <li><a href="why_become_donor.php"><i class="fa fa-arrow-circle-right"></i>Why Become Donor</a></li>
                                <li><a href="contact_us.php"><i class="fa fa-arrow-circle-right"></i>contact</a></li>
                                <li><a href="donor_registration.php"><i class="fa fa-arrow-circle-right"></i>Become A Donor</a></li>                                    </ul>
                        </div>
                    </div>
                </div>
                <!--End Col-->

                <!--Start Col-->
                <div class="col-md-3 col-sm-6">
                    <div class="footer-categories">
                        <h5 class="text-left text-upper">8 Old Donors</h5>
                        <div class="border-line"></div>
                        <div class="footer-categories-links">
                            <ul>
                                <?php
                                $query_old_donor = mysql_query("select * from donor_information order by id asc limit 0,6");
                                while ($row_old_donor = mysql_fetch_array($query_old_donor)) {
                                    ?>
                                <li><a><i class="fa fa-user"> <?php echo $row_old_donor['name'];?></i></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Col-->

                <!--Start Col-->
                <div class="col-md-3 col-sm-6">
                    <div class="footer-contact-form">
                        <h5 class="text-left text-upper">Feedback</h5>
                        <div class="border-line"></div>
                        <form action="contact.php" method="POST" id="feed-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name" name="name">
                                <input type="text" class="form-control" placeholder="Email" name="email">
                                <input type="text" class="form-control" placeholder="Mobile" name="mobile">
                                <input type="hidden" name="location" value="feedback-location">
                                <textarea class="form-control" rows="5" placeholder="Message" name="btext"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary cont-frm-btn">Send Message</button>
                        </form>
                    </div>
                </div>
                <!--End Col-->
            </div>
            <!--End Row-->
        </div>
        <!--End container-->
    </div>
    <!--End Footer Top-->
    <!--Start Footer Bottom-->
    <div class="footer-bottom">
        <!--Start container-->
        <div class="container">
            <!--Start Row-->
            <div class="row">
                <!--Start Col-->
                <div class="col-sm-6 col-xs-12">
                    <div class="copy-right-text">
                        <p class="text-left">Copyright © 2017 - eBloodBank - All Rights Reserved</p>
                    </div>
                </div>
                <!--End Col-->

                <!--Start Col-->
                <div class="col-sm-6 col-xs-12">
                    <div class="footer-menu">
                        <nav>
                            <ul>
                                <li><a href="index.php">Home</a></li>

                                <li><a href="about_us.php">About Us</a></li>
                                <li><a href="why_become_donor.php">Why Become Donor</a></li>
                                <li><a href="contact_us.php">contact</a></li>                                    </ul>
                        </nav>
                    </div>
                </div>
                <!--End Col-->
            </div>
            <!--End Row-->
        </div>
        <!--End container-->
    </div>
    <!--End Footer Bottom-->

    <!--Start ClickToTop-->
    <div class="totop">
        <!--Start ClickToTop-->
        <a href="#top"><i class="fa fa-angle-up"></i></a>
    </div>
    <!--End ClickToTop-->
</footer>