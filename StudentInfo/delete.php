<?php
    include "Crud.php";
    $crud = new Crud();

    $id = $_GET['id'];
    if($crud->delete($id, 'info')){
        header('location:show.php');
    }
?>
