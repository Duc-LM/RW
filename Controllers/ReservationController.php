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
        if (!isset($_SESSION['role']))
        require_once 'views/reservation.php';
        else require_once 'views/admin-addreservations.php';
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
    
            $reservation->createReservation($date,$time,$address,$phone,$cus_name,$no_of_guests);
            ?>
			<script>
				window.alert("Create Successfully!");
			</script>
			<meta http-equiv="refresh" content="1;url=index.php" />
			<?php
        
    }

    public function updateForm()
    {
        $reservationModel = new Reservation();
        $reservationModel->_connect();
        $id = $_GET['id'];
        $reservation = $reservationModel->get_Reservation_By_Id($id);
        require_once 'views/admin-reservationdetails.php';
    }

    public function updateReservation()
    {
        $reservation = new Reservation();
        $reservation->_connect();
        $id = $_GET['id'];
        
        $date = $_POST['date'];
        $time = $_POST['time'];
        $address = $_POST['address'];
        $cus_name = $_POST['cus_name'];
        $no_of_guests = $_POST['no_of_guests'];
            $reservation->updateReservattion($id,$date,$time,$address,$cus_name,$no_of_guests);
        header('Location: index.php?controller=ReservationController&action=getAllReservation');
    }

    public function deleteReservation()
    {
        $reservation = new Reservation();
        $reservation->_connect();
        $id = $_GET['id'];
        $reservation->deleteReservation($id);
        header('Location: index.php?controller=ReservationController&action=getAllReservation');
    }
//     public function changeStatus()
//     {
//         $reservation = new Reservation();
//         $reservation->_connect();
//         $id = $_GET['id'];
//         $status = $_POST['status'];
//         $reservation->changeStatus($id,$status);
//         header('Location: index.php?controller=ReservationController&action=getAllReservation');
//     }
}