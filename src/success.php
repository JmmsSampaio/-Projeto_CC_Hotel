<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db = "hotel";
	
	
	$con = new mysqli($dbhost, $dbuser, $dbpass,$db);

    $result = mysqli_query($con, "SELECT * FROM HOTEL WHERE ID_HOTEL = " .$_POST['hotel_id']);

    if($result->num_rows > 0) {
        $result = mysqli_query($con, "SELECT * FROM CLIENTE WHERE CC = " .$_POST['cc']);

        try {
            if($result->num_rows > 0) {
                mysqli_query($con, "INSERT INTO RESERVA VALUES(NULL, " .$_POST['cc']. "," .$_POST['hotel_id']. "," .$_POST['n_quarto']. ",'" .$_POST['type_quarto']. "','" .$_POST['check_in']. "','" .$_POST['check_out']. "')");
            } else {
                mysqli_query($con, "INSERT INTO CLIENTE VALUES(" .$_POST['cc']. ",'" .$_POST['name']. "'," .$_POST['contribuinte']. "," .$_POST['idade']. ")");
                mysqli_query($con, "INSERT INTO RESERVA VALUES(NULL, " .$_POST['cc']. "," .$_POST['hotel_id']. "," .$_POST['n_quarto']. ",'" .$_POST['type_quarto']. "','" .$_POST['check_in']. "','" .$_POST['check_out']. "')");
            }
            echo "Reserva Criada com sucesso!";
        } catch (Exception $e) {
            echo "Error trying to create the reserve";
        }
        header("refresh:5;url=http://localhost/hotel");
        die();
    }
?>