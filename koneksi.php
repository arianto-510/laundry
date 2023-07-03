<?php

$conn = mysqli_connect("localhost", "root", "", "laundry");

if (mysqli_errno($conn)) {
    echo "error";
}
