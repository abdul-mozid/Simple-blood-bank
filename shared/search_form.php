<form action="search.php" method="POST">
    <div class="col-md-12">
        <div class="search-filter">
            <!--Start Search Keyword-->
            <input type="text" class="form-control keyword" name="name" placeholder="Doner Name">
            <!--End Search Filter-->

            <!--Start Search Location Options-->
            <div class="search-location">
                <select name="group" class="form-control selectpicker">
                    <option value="">All Group</option>
                    <?php 
                    $query=  mysql_query("select * from blood_group order by id asc");
                    while($row=  mysql_fetch_array($query)){
                    ?>
                    <option value="<?php echo $row['blood_group']?>"><?php echo $row['blood_group']?></option>
                    <?php } ?>
                </select>
            </div>
            <!--End Search Location Options-->

            <!--Start Search Category Options-->
            <div class="search-location">
                <select name="location" class="form-control selectpicker">
                    <option value="">All District</option>
                    <?php 
                    $query=  mysql_query("select * from districts order by name asc");
                    while($row=  mysql_fetch_array($query)){
                    ?>
                    <option value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option>
                    <?php } ?>
                </select>
            </div>
            <!--End Search Category Options-->

            <!--Start Search Button-->
            <div class="search-btn">
                <button type="submit">SEARCH</button>
            </div>
            <!--End Search Button-->
        </div>
    </div>
</form>