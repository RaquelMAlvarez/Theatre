<?php 
  session_start(); 
  include '../../../components/header.php';
  include '../../../components/navigation.php';
  if (!isset($_SESSION['loggedin'])){
    header('Location: ../login/');
    exit;
    
    }
?>
<h1>User Dashboard</h1> 


  <?php include '../../../components/footer.php'; ?>

