<?php
include "layouts/header.php";

?>


<div class="container">
    <div class="row">
        <div class="col-12 h1 text-center text-dark mt-5">
            <h1>You Rivew</h1>
        </div>
        <div class="col-4 offset-4 my-5">
            <form action="result.php" method="post">
                <div class="form-group">
                <table class="table">
  <thead>
    <tr>
      <th colspan="8">Question</th>
      <th>Bad</th>
      <th>Good</th>
      <th>VeryGood</th>
      <th>Excellant</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td colspan="8">Are you satisfied with the cleanliness?</td>
      <td>  <input type="radio" id="html" name="clean" value="0">
</td>
      <td>  <input type="radio" id="html" name="clean" value="3">
</td>
      <td>  <input type="radio" id="html" name="clean" value="5">
</td>
      <td>  <input type="radio" id="html" name="clean" value="10">
</td>
    </tr>
    <tr>
      <td colspan="8">Are you satisfied with prices of the serveces?</td>
      <td>  <input type="radio" id="html" name="prices" value="0">
</td>
      <td>  <input type="radio" id="html" name="prices" value="3">
</td>
      <td>  <input type="radio" id="html" name="prices" value="5">
</td>
      <td>  <input type="radio" id="html" name="prices" value="10">
</td>
    </tr>
    <tr>
      <td colspan="8">Are you satisfied with nursing serveces?</td>
      <td>  <input type="radio" id="html" name="nursing" value="0">
</td>
      <td>  <input type="radio" id="html" name="nursing" value="3">
</td>
      <td>  <input type="radio" id="html" name="nursing" value="5">
</td>
      <td>  <input type="radio" id="html" name="nursing" value="10">
</td>
    </tr>
    <tr>
      <td colspan="8">Are you satisfied with the level of the doctor ?</td>
      <td>  <input type="radio" id="html" name="doctor" value="0">
</td>
      <td>  <input type="radio" id="html" name="doctor" value="3">
</td>
      <td>  <input type="radio" id="html" name="doctor" value="5">
</td>
      <td>  <input type="radio" id="html" name="doctor" value="10">
</td>
    </tr>
    <tr>
      <td colspan="8">Are you satisfied with the calmness in the hospital ?</td>
      <td>  <input type="radio" id="html" name="calmness" value="0">
</td>
      <td>  <input type="radio" id="html" name="calmness" value="3">
</td>
      <td>  <input type="radio" id="html" name="calmness" value="5">
</td>
      <td>  <input type="radio" id="html" name="calmness" value="10">
</td>
    </tr>
  </tbody>
</table>
                </div>
                <div class="form-group">
                    <button class="btn btn-outline-dark btn-sm"> submit </button>
                </div>
            </form>
        </div>
    </div>
</div>












<?php

include "layouts/scripts.php";
?>