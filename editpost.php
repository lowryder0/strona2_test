
<?php
    require_once 'db/conn.php';
    //Get values from post operation
    if(isset($_POST['submit']))
    {
        $id = $_POST['id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $dateofbirth = $_POST['dateofbirth'];
        $emailadress = $_POST['emailadress'];
        $contactnumber = $_POST['contactnumber'];
        $speciality_id = $_POST['speciality_id'];
    

    //Call Crud function
        $result = $crud->editAttendee($id, $firstname, $lastname, $dateofbirth, $emailadress, $contactnumber, $speciality_id);

    //Redirect to index.php
        if($result)
        {
            header("Location: viewrecord.php");
        }
        else
        {
            //echo 'error';
            include 'includes/errormessage.php';
        }
    }
    else
    {
        //echo 'error';
        include 'includes/errormessage.php';
    }


?>