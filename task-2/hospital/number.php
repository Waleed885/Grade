<?php
include "layouts/header.php";

if($_SERVER['REQUEST_METHOD']=='POST' && $_POST){

    session_start();

     

    $_SESSION['phone'] = $_post['phone']; ;

}

?>

<div class="container">
    <div class="row">
        <div class="col-12 h1 text-center text-dark mt-5">
            Login
        </div>
        <div class="col-4 offset-4 my-5">
            <form action="review.php" method="post">
                <div class="form-group">
                    <label for="email">Phone Number</label>
                    <input type="int" name="phone" id="email" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <button class="btn btn-outline-dark btn-sm"> Login </button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php

include "layouts/scripts.php";
?>

