<?php

$conn = mysqli_connect("localhost", "root", "root", "laundry");

if (mysqli_errno($conn)) {
    echo "error";
}
