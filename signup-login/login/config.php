

<?php

$con=new mysqli("localhost","root","","events_360");


if($con->connect_error)
{
    echo $con->connect_error;
    die("Sorry Database Connection Failed");

}

?>