|<!DOCTYPE html>
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
            include "db_con.php";
            if (!empty($_POST)) {
                $target_dir = "uploads/";
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
                if (isset($_POST["submit"])) {
                    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                    if ($check !== false) {
                        echo "File is an image - " . $check["mime"] . ".";
                        $uploadOk = 1;
                    } else {
                        echo "File is not an image.";
                        $uploadOk = 0;
                    }
                }
// Check if file already exists
                if (file_exists($target_file)) {
                    echo "Sorry, file already exists.";
                    $uploadOk = 0;
                }
// Check file size
                if ($_FILES["fileToUpload"]["size"] > 500000) {
                    echo "Sorry, your file is too large.";
                    $uploadOk = 0;
                }
// Allow certain file formats
                if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    $uploadOk = 0;
                }
// Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
                } else {
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                        $registration_date = date('Y-m-d');
                        $sql="INSERT INTO `donor_information` (`name`, `blood_group`, `age`, `sex`, `mobile`, `location`, `photo`, `registration_date` ) VALUES ('$_POST[name]', '$_POST[blood_group]', '$_POST[age]', '$_POST[sex]', '$_POST[mobile]', '$_POST[location]', '$target_file', '$registration_date' )";
                        $query_insert = mysql_query($sql);
                        if($query_insert){
                            echo "<script>alert('Data Inserted Successfully');</script>";
                        }
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                }
            }
            ?>
            <!--End Header-->

            <!--Start Featured section-->
            <!--Start Featured section-->
            <section class="business-feat">
                <!--Start Featured container-->
                <div class="container" style="margin-top:100px;">
                    <!--Start Section Title-->
                    <div class="section-title">
                        <h2 class="text-center text-bold"><span>Become </span>a Donor</h2>
                    </div>
                    <!--End Section Title-->

                    <!--Start Featured Row-->
                    <div class="row">
                        <!--Start Featured Item Col-->
                        <div class="col-md-8 col-md-offset-2 col-sm-12">

                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="col-md-6 col-md-offset-0">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Name <span style="color: #E50000;">*</span></label>
                                        <input name="name" id="name" class="form-control" type="text" required="">
                                    </div>
                                </div>

                                <div class="col-md-6 col-md-offset-0">
                                    <div class="form-group">
                                        <label for="img" class="control-label">Picture <span style="color: #E50000;">*</span></label>
                                        <input name="fileToUpload" id="fileToUpload" class="form-control" type="file" required="">
                                    </div>
                                </div>

                                <div class="col-md-6 col-md-offset-0">
                                    <div class="form-group">
                                        <label for="age" class="control-label">Age (Year)<span style="color: #E50000;">*</span></label>
                                        <input name="age" id="age" class="form-control" type="number" required="">
                                    </div>
                                </div>

                                <div class="col-md-6 col-md-offset-0">
                                    <div class="form-group">
                                        <label for="mobile" class="control-label">Mobile <span style="color: #E50000;">*</span></label>
                                        <input name="mobile" id="mobile" class="form-control" type="number" required="">
                                    </div>
                                </div>

                                <div class="col-md-6 col-md-offset-0">
                                    <div class="form-group">
                                        <label for="location" class="control-label">Location <span style="color: #E50000;">*</span></label>
                                        <select name="location" id="location" class="form-control" required="">
                                            <option value="">Select District</option>
                                            <?php
                                            $query = mysql_query("select * from districts order by name asc");
                                            while ($row = mysql_fetch_array($query)) {
                                                ?>
                                                <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 col-md-offset-0">
                                    <div class="form-group">
                                        <label for="sex" class="control-label">Sex <span style="color: #E50000;">*</span></label>
                                        <select name="sex" id="sex" class="form-control" required="">
                                            <option value="MALE">MALE</option>
                                            <option value="FEMALE">FEMALE</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="bgroup" class="control-label">Blood Group <span style="color: #E50000;">*</span></label>
                                        <select name="blood_group" id="blood_group" class="form-control" required="">
                                            <option value="">Select Group</option>
                                            <?php
                                            $query = mysql_query("select * from blood_group order by blood_group asc");
                                            while ($row = mysql_fetch_array($query)) {
                                                ?>
                                                <option value="<?php echo $row['blood_group']; ?>"><?php echo $row['blood_group']; ?></option>
                                            <?php } ?>                                                                        
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-block btn-primary cont-frm-btn">Register</button>
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