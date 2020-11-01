<?php
require 'functions.php';

if(!isset($_GET["id"])){
    header("location:index.php");
    exit;
}

deleteData($_GET["id"]);

?>