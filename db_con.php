<?php
$con=  mysql_connect('localhost','root','');
$db_select=  mysql_select_db('blood_bank',$con);
if(!$db_select){
    echo "Database not connected";
}