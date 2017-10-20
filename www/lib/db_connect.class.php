<?php
 //echo("1");
$connect_db = mysql_connect("localhost","root","");
mysql_query("SET NAMES utf8",$connect_db);

if(!$connect_db){

    die('disconnect!!!'.mysql_error());

}
echo("OK");
$select_db = mysql_select_db('',$connect_db);

if(!$select_db){
    die('disconnect!!!'.mysql_error());
}

?>