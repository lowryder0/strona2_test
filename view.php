<?php
        $title = 'View Record';
        require_once 'includes/header.php';
        require_once 'db/conn.php';

        //$result = $crud->getAttendees();
        //Get attendee by id
        if(!isset($_GET['id']))
        {
            //echo "<h1 class='text-danger'>Please chceck details and try again</h1>";
            include 'includes/errormessage.php';
        }
        else
        {
            $id = $_GET['id'];
            $result = $crud->getAttendeeDetails($id);    
        
    ?>
    <br>
    <h1 class="text-center">View Attendee Details</h1>
    <br>

    <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">
            <?php echo $result['firstname'] . ' ' . $result['lastname']; ?>
        </h5>
        <h6 class="card-subtitle mb-2 text-muted">
            <?php echo $result['name']; ?>
        </h6>
        <p class="card-text">
            Date of birth: <?php echo $result['dateofbirth']; ?>
        </p>
        <p class="card-text">
            email adress: <?php echo $result['emailadress']; ?>
        </p>
        <p class="card-text">
            phone number: <?php echo $result['contactnumber']; ?>
        </p>
        
    </div>
    </div>

    <?php
        }
    ?>




    <br>
    <br>
    <br>

    <?php
        require_once 'includes/footer.php';
    ?>