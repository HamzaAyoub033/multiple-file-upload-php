<?php

 define('SERVERNAME', 'localhost');
 define('USERNAME', 'root');
 define('PASSWORD', '');
 define('DATABASE', 'imageupload');


$con = mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DATABASE);
if (mysqli_connect_errno()) {
    printf("Connection failed: %s\n", mysqli_connect_error());
    exit();
}

?>