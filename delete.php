<?php
    require_once 'db/conn.php';

    if(!$_GET['id'])
    {
        echo 'error';
    }
    else
    {
        // get id value
        $if = $_GET['id'];
    }
        //call delete function
        $result = $crud->deleteAttendee($id);
        //redirect to list
        if($result)
        {
            header("Location: viewrecord.php");
        }
        else
        {
            //echo 'error';
            include 'includes/errormessage.php';
        }
?>