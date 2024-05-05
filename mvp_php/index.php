<?php

/******************************************
Asisten Pemrogaman 13
 ******************************************/

include("model/Template.class.php");
include("model/DB.class.php");
include("model/Pasien.class.php");
include("model/TabelPasien.class.php");
include("view/TampilPasien.php");



$tp = new TampilPasien();

if(isset($_POST['add'])){
    $tp->onFormAdd($_POST);
}else if(isset($_POST['edit'])){
    $tp->onFormEdit($_POST);
}else if(isset($_GET['add'])){
    $tp->showAddForm();
}else if(isset($_GET['edit'])){
    $tp->showEditForm($_GET['edit']);
}else if(isset($_GET['delete'])){
    $tp->onFormDelete($_GET['delete']);
}else{
    $tp->tampil();
}