<?php
    class crud
    {
        private $db;
        
        //construct inicjalizujący prywatne zmienne do połączenia z bazą danych
        function __construct($conn)
        {
            $this->db = $conn;
        }

        public function insertAttendees($firstname, $lastname, $dateofbirth, $emailadress, $contactnumber, $speciality_id)
        {
            try {
                $sql = "INSERT INTO attendee (firstname,lastname,dateofbirth,emailadress,contactnumber,speciality_id) VALUES (:firstname,:lastname,:dateofbirth,:emailadress,:contactnumber,:speciality_id)";
                $stmt = $this->db->prepare($sql);

                $stmt->bindparam(':firstname',$firstname);
                $stmt->bindparam(':lastname',$lastname);
                $stmt->bindparam(':dateofbirth',$dateofbirth);
                $stmt->bindparam(':emailadress',$emailadress);
                $stmt->bindparam(':contactnumber',$contactnumber);
                $stmt->bindparam(':speciality_id',$speciality_id);

                $stmt->execute();
                return true;

            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function editAttendee($id, $firstname, $lastname, $dateofbirth, $emailadress, $contactnumber, $speciality_id)
        {   
            try{
            $sql = "UPDATE `attendee` SET `firstname`=:firstname,`lastname`=:lastname,`dateofbirth`=:dateofbirth,`emailadress`=:emailadress,`contactnumber`=:contactnumber,`speciality_id`=:speciality_id WHERE attendee_id :id";
            $stmt = $this->db->prepare($sql);

                $stmt->bindparam(':id',$id);
                $stmt->bindparam(':firstname',$firstname);
                $stmt->bindparam(':lastname',$lastname);
                $stmt->bindparam(':dateofbirth',$dateofbirth);
                $stmt->bindparam(':emailadress',$emailadress);
                $stmt->bindparam(':contactnumber',$contactnumber);
                $stmt->bindparam(':speciality_id',$speciality_id);

                $stmt->execute();
                return true;
            }
            catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }

        }

        public function getAttendees()
        {
            try
            {
                $sql = "SELECT * FROM `attendee` a inner join speciality s on a.speciality_id = s.speciality_id";
                $result = $this->db->query($sql);
                return $result;
            }
            catch (PDOException $e) 
            {
                echo $e->getMessage();
                return false;
            }
        }    

        public function getAttendeeDetails($id)
        {
            try
            {
                $sql = "select * from `attendee` a inner join speciality s on a.speciality_id = s.speciality_id where attendee_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            }
            catch (PDOException $e) 
            {
                echo $e->getMessage();
                return false;
            }
        }

        public function deleteAttendee($id)
        {
            try 
            {
                $sql = "delete from attendee where attendee_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id',$id);
                $stmt->execute();
                return true;
            }
            catch (PDOException $e)
            {
                echo $e->getMessage();
                return false;
            }

        }

        public function getSpecialities()
        {
        try
        {
            $sql = "SELECT * FROM `speciality`";
            $result = $this->db->query($sql);
            return $result;
        }
        catch (PDOException $e) 
            {
                echo $e->getMessage();
                return false;
            }
        }
    }
?>