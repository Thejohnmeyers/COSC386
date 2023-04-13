<?php

$conn = @mysqli_connect('localhost', 'gbeauchamp1', 'gbeauchamp1', 'JobFairDB');

if(!$conn){
    echo "Connection Failed";
}