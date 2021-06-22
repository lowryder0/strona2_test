
    <?php
        $title = 'Edit Record';
        require_once 'includes/header.php';
        require_once 'db/conn.php';

        $result = $crud->getSpecialities();

        if(!isset($_GET['id']))
            {
                //echo 'error';
                include 'includes/errormessage.php';
                header("Location: viewrecords.php");
            }
        else
            {
                $id = $_GET['id'];
                $attendee = $crud->getAttendeeDetails($id);
            
    ?>
    <br>
    <h1 class="text-center">Edit Record</h1>
    <br>

    <form method="post" action="editpost.php">
        <input type="hidden" name="id" value="<?php echo $attendee['attendee_id'] ?>">
        <div class="mb-3">
                <label for="firstname" class="form-label">Frist Name</label>
                <input type="text" class="form-control" value="<?php echo $attendee['firstname'] ?>" id="firstname" name ="firstname">
        </div>

        <div class="mb-3">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control" value="<?php echo $attendee['lastname'] ?>" id="lastname" name="lastname">
        </div>

        <div class="mb-3">
            <label for="dateofbirth" class="form-label">Date of birth</label>
            <input type="text" class="form-control" value="<?php echo $attendee['dateofbirth'] ?>" id="dateofbirth" name="dateofbirth">
        </div>

        <div class="mb-3">
            <label for="speciality_id" class="form-label">Area of expertise</label>
            <select class="form-control" id="speciality_id" name="speciality_id">           
                <?php
                    while($r = $result->fetch(PDO::FETCH_ASSOC)) {
                ?>
                    <option value="<?php echo $r['speciality_id'] ?>" <?php if($r['speciality_id'] == $attendee['speciality_id']) echo 'selected' ?>>
                    <?php
                        echo $r['name'];
                    ?>
                    </option>
                <?php
                    }
                ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="emailadress" class="form-label">Email address</label>
            <input type="emailadress" class="form-control" value="<?php echo $attendee['emailadress'] ?>" id="emailadress"  name="emailadress" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>   
        </div>

        <div class="mb-3">
            <label for="contactnumber" class="form-label">Contact numer</label>
            <input type="text" class="form-control" value="<?php echo $attendee['contactnumber'] ?>" id="contactnumber" name="contactnumber" aria-describedby="phoneHelp">
            <div id="phoneHelp" class="form-text">We'll never share your numer with anyone else.</div>   
        </div>

        <!-- <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="exampleInputPassword1">
        </div> -->

        <button type="submit" name="submit" class="btn btn-primary">Save changes</button>

    </form>

    <?php
        }
    ?> 

    <br>
    <br>
    <br>

    <?php
        require_once 'includes/footer.php';
    ?>