<?php
    $title = 'Succes';
    require_once 'includes/header.php';
    require_once 'db/conn.php';

    if(isset($_POST['submit']))
    {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $dateofbirth = $_POST['dateofbirth'];
        $emailadress = $_POST['emailadress'];
        $contactnumber = $_POST['contactnumber'];
        $speciality = $_POST['speciality'];

        $isSuccess = $crud->insertAttendees($firstname, $lastname, $dateofbirth, $emailadress, $contactnumber, $speciality);
 
        if ($isSuccess) 
        {
            include 'includes/successmessage.php';
            //echo '<h1 class="text-center text-success">You have been registered</h1>';
        }
        else
        {
            include 'includes/errormessage.php';
            //echo '<h1 class="text-center text-danger">There was an error in processing</h1>';
        }
    }
?>
    <br>
    

    <!-- <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">
            <?php echo $_GET['firstname'] . ' ' . $_GET['lastname']; ?>
        </h5>
        <h6 class="card-subtitle mb-2 text-muted">
            <?php echo $_GET['speciality']; ?>
        </h6>
        <p class="card-text">
            Date of birth: <?php echo $_GET['dob']; ?>
        </p>
        <p class="card-text">
            email adress: <?php echo $_GET['email']; ?>
        </p>
        <p class="card-text">
            phone number: <?php echo $_GET['connumber']; ?>
        </p>
        
    </div>
    </div> -->

    <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">
            <?php echo $_POST['firstname'] . ' ' . $_POST['lastname']; ?>
        </h5>
        <h6 class="card-subtitle mb-2 text-muted">
            <?php echo $_POST['speciality']; ?>
        </h6>
        <p class="card-text">
            Date of birth: <?php echo $_POST['dateofbirth']; ?>
        </p>
        <p class="card-text">
            email adress: <?php echo $_POST['emailadress']; ?>
        </p>
        <p class="card-text">
            phone number: <?php echo $_POST['contactnumber']; ?>
        </p>
        
    </div>
    </div>


     <!-- <?php
        echo $_GET['firstname'];
        echo $_GET['lastname'];
        echo $_GET['dob'];
        echo $_GET['speciality'];
        echo $_GET['email'];
        echo $_GET['connumber'];

    ?>  -->



<br>
<br>
<br>
<br>
<br>


<?php
    require_once 'includes/footer.php';
?>