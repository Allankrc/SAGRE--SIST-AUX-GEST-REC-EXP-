<?php 
session_start();
?>

<!DOCTYPE html>

<h1> Excel Uploader Page </h>
<?php
  if(isset ($_SESSION['msg'])){
    print $_SESSION['msg'];
    unset($_SESSION['msg']);
  }
  ?>

<form action="process.php" method="POST" enctype="multipart/form-data">
  Select pdf to upload:
  <input type="file" name="arquivo" id="arquivo"> 
  <input type="submit" value="Enviar" name="submit">
</form> 

