<?php
$link = mysqli_connect("localhost", "notes", "xb2zMkUHTVI4tmbW", "onlinenotes");
if(mysqli_connect_error()){
    die('ERROR: Unable to connect:' . mysqli_connect_error()); 
    echo "<script>window.alert('Hi!')</script>";
}
    ?>