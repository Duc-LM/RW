<?php

require_once 'Models/Reservation.php';
class ReservationController
{
    public function getAllReservation()
    {
        $reservation = new Reservation();
        $reservation->_connect();
        $reservationList = $reservation->get_All_Data();
        require_once 'views/admin-reservations.php';
    }

    public function createForm()
    {
        require_once 'views/reservation.php';
    }

    public function createReservation()
    {
        $reservation = new Reservation();
        $reservation->_connect();
        $date = $_POST['date'];
        $time = $_POST['time'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $cus_name = $_POST['cus_name'];
        $no_of_guests = $_POST['no_of_guests'];
        
        //validation
        $err = array();
        if (!is_numeric($phone)) $err = "Your phone must be numeric";
        
        if(!$err)
        {
            $reservation->createReservation($date,$time,$address,$phone,$cus_name,$no_of_guests);
            ?>
			<script>
				window.alert("Create Successfully!");
			</script>
			<meta http-equiv="refresh" content="1;url=index.php" />
			<?php
        }
        else require_once 'views/reservation.php';
    }

    public function updateForm()
    {
        $reservation = new Reservation();
        $reservation->_connect();
        $id = $_GET['id'];
        $reservation = $reservation->get_Reservation_By_Id($id);
        require_once 'views/admin-reservationdetails.php';
    }

    public function updateReservation()
    {
        $reservation = new Reservation();
        $id = $_GET['id'];
        
        $date = $_POST['date'];
        $time = $_POST['time'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $cus_name = $_POST['cus_name'];
        $no_of_guests = $_POST['no_of_guests'];
        
        //validation
        $err = array();
        if (empty($date)) $err = "Please choose date";
        if (empty($time)) $err = "Please choose time";
        if (empty($address)) $err = "Please choose address";
        if (empty($phone)) $err = "Please fill phone";
        elseif (!is_numeric($phone)) $err = "Your phone must be numeric";
        if (empty($cus_name)) $err = "Please choose your name";
        if (empty($no_of_guests)) $err = "Please choose number of guests";
        
        if(!$err)
        {
            $reservation->updateReservattion($id,$date,$time,$address,$phone,$cus_name,$no_of_guests);
            require_once '';
        }
        else require_once '';
    }

    public function deleteReservation($id)
    {
        $reservation = new Reservation();
        $reservation->_connect()
;        $reservation->deleteReservation($id);
        require_once '';
    }

    public function changeStatus()
    {
        $reservation = new Reservation();
        $reservation->_connect();
        $id = $_GET['id'];
        $status = $_POST['status'];
        $reservation->changeStatus($id,$status);
        require_once '';
    }
}