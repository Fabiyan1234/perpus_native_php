<?php
$conn = mysqli_connect( 'localhost' , 'root', '', 'db_intercom');
if (mysqli_connect_errno()) {
    printf("error connenting to database %s\n", mysqli_connect_error());
    exit();
}
?>