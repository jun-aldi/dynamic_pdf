<?php
    $conn = mysqli_connect("localhost","root","","mbank");
        if (!$conn){
            echo "Error! Database connect error.".mysqli_error($conn);
        }
?>