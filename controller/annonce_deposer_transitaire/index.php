<?php
session_start();
if($_SESSION['type']==1){
    include_once('Model/transitaire/espace.php  ');
    $affiche=deposer($_SESSION['id']);
include_once('Vue/annonce_deposer_transitaire/index.php');
}
else{
    session_destroy();
    header("location:login_transitaire.php");}
