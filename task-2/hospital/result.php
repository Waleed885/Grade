<?php
include "layouts/header.php";
    session_start();

$clean = $_POST['clean'];
$prices = $_POST['prices'];
$nursing = $_POST['nursing'];
$doctor = $_POST['doctor'];
$calmness = $_POST['calmness'];

$total = $clean + $prices + $nursing + $doctor + $calmness ;

?>


<div class="container">
    <div class="row">
        <div class="col-12 h1 text-center text-dark mt-5">
            <h1>Risults</h1>
        </div>
        <div class="col-4 offset-4 my-5">
           
                <div class="form-group">
                <table class="table">
  <thead>
    <tr>
      <th colspan="8">Question</th>
      <th>result</th>
   
    </tr>
  </thead>
  <tbody>
    <tr>
      <td colspan="8">Are you satisfied with the cleanliness?</td>
      <td> <?php  if($_SERVER['REQUEST_METHOD']=='POST' && $_POST){
       
        if($clean  == 0){
            echo "bad";
        }else if( $clean ==3){
            echo "good";
        }else if( $clean ==5){
            echo "very good";
        }else if($clean ==10){
            echo "excellant";
        }else{
            echo "error";
        }
      } ?>
</td>

    </tr>
    <tr>
      <td colspan="8">Are you satisfied with prices of the serveces?</td>
      <td>  <?php  if($_SERVER['REQUEST_METHOD']=='POST' && $_POST){
       
       if($prices == 0){
           echo "bad";
       }else if($prices==3){
           echo "good";
       }else if($prices==5){
           echo "very good";
       }else if( $prices==10){
           echo "excellant";
       }else{
           echo "error";
       }
     } ?>
</td>

    </tr>
    <tr>
      <td colspan="8">Are you satisfied with nursing serveces?</td>
      <td>   <?php  if($_SERVER['REQUEST_METHOD']=='POST' && $_POST){
       
       if($nursing == 0){
           echo "bad";
       }else if($nursing==3){
           echo "good";
       }else if($nursing==5){
           echo "very good";
       }else if($nursing==10){
           echo "excellant";
       }else{
           echo "error";
       }
     } ?>
</td>
 
    </tr>
    <tr>
      <td colspan="8">Are you satisfied with the level of the doctor ?</td>
      <td>  <?php  if($_SERVER['REQUEST_METHOD']=='POST' && $_POST){
       
       if($doctor == 0){
           echo "bad";
       }else if($doctor==3){
           echo "good";
       }else if($doctor==5){
           echo "very good";
       }else if($doctor==10){
           echo "excellant";
       }else{
           echo "error";
       }
     } ?>
</td>

    </tr>
    <tr>
      <td colspan="8">Are you satisfied with the calmness in the hospital ?</td>
      <td>  <?php  if($_SERVER['REQUEST_METHOD']=='POST' && $_POST){
       
       if($calmness == 0){
           echo "bad";
       }else if($calmness==3){
           echo "good";
       }else if($calmness==5){
           echo "very good";
       }else if($calmness==10){
           echo "excellant";
       }else{
           echo "error";
       }
     } ?>

    </tr>

    <tr>
      <td colspan="8">Your Rivew is : </td>
      <td>  <?php  if($_SERVER['REQUEST_METHOD']=='POST' && $_POST){
  
       if($total > 7){
        echo "good";
       }else if($total > 15){
        echo "very good";
       }else if($total > 25){
        echo "very good";
       }else{
        echo "bad";
       }
  
     } ?>

    </tr>
    
    <tr>
      <td> 
<?php 
if($_SERVER['REQUEST_METHOD']=='POST' && $_POST){
if($total <= 10){

    echo "We will call you later in this phone : " . $_SESSION['phone'] ;
}else {
    echo "thanks";
}
}
?>

</tr>
</tbody>
</table>




<?php

include "layouts/scripts.php";
?>