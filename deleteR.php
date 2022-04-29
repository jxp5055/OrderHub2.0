<?php
  include('config/constants.php');
  session_start();
  if(!$_SESSION['m_un']){
    header('Location: login.php');
    exit();
  }
  $id = $_GET['id'];

  $sql = "DELETE FROM remote_orders WHERE id=$id";

  $res = mysqli_query($conn, $sql);
  header("Location: remoteOrders.php")
?>