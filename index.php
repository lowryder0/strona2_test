
    <?php
        $title = 'Index';
        require_once 'includes/header.php';
        require_once 'db/conn.php';

        $result = $crud->getSpecialities();
    ?>
    <br>
    <h1 class="text-center">Registration for drugs</h1>
    <br>

    <form method="post" action="succes.php"> 
        <div class="mb-3">
                <label for="firstname" class="form-label">Frist Name</label>
                <input type="text" class="form-control" id="firstname" name ="firstname">
        </div>

        <div class="mb-3">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastname" name="lastname">
        </div>

        <div class="mb-3">
            <label for="dateofbirth" class="form-label">Date of birth</label>
            <input type="text" class="form-control" id="dateofbirth" name="dateofbirth">
        </div>

        <div class="mb-3">
            <label for="speciality" class="form-label">Area of expertise</label>
            <select class="form-control" id="speciality" name="speciality">           
                <?php
                    while($r = $result->fetch(PDO::FETCH_ASSOC)) {
                ?>
                    <option value="<?php echo $r['speciality_id'] ?>">
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
            <input type="email" class="form-control" id="emailadress"  name="emailadress" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>   
        </div>

        <div class="mb-3">
            <label for="contactnumber" class="form-label">Contact numer</label>
            <input type="text" class="form-control" id="contactnumber" name="contactnumber" aria-describedby="phoneHelp">
            <div id="phoneHelp" class="form-text">We'll never share your numer with anyone else.</div>   
        </div>

        <!-- <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="exampleInputPassword1">
        </div> -->

        <button type="submit" name="submit" class="btn btn-primary">Register</button>

    </form>
    <br>
    <br>
    <br>

    

    


    <?php
        require_once 'includes/footer.php';
    ?>