<?php
if($_SERVER['REQUEST_METHOD']=='POST'  && $_POST){
  $num1 = $_POST['number-1'];
  $num2 = $_POST['number-2'];
  $op = $_POST['op'];

  if($op == '+'){
    echo $num1 + $num2 ;
  }else if($op == '-'){
    echo $num1 - $num2 ;
  }else if($op == '*'){
    echo $num1 * $num2 ;
  }else if($op == '/'){
    echo $num1 / $num2 ;
  }else if($op == '%'){
    echo $num1 % $num2 ;
  }else{
    echo "Invalid Operator";
  }



}



?>


<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

<div class="container">

  <form method="post">

<!--number 1  -->

  <div class="form-group">
    <label for="exampleInputEmail1">first number</label>
    <input type="double" class="form-control" name="number-1" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>


<!-- op -->

operator :  <select class="form-control"name="op" id="exampleFormControlSelect1">
      <option>+</option>
      <option>-</option>
      <option>*</option>
      <option>/</option>
      <option>%</option>
  
    </select>



  <!-- number 2 -->

  <div class="form-group">
    <label for="exampleInputPassword1">second number</label>
    <input type="double" class="form-control" name="number-2" id="exampleInputPassword1">
  </div>

<!-- result -->

<!-- <div class="form-group">
    <label for="exampleInputPassword1">result</label>
    <input type="password" class="form-control" name="result" id="exampleInputPassword1">
  </div> -->

  <!-- <input type="submit" value="add" name="operation">
  <input type="submit" value="sub" name="operation">
  <input type="submit" value="pro" name="operation">
  <input type="submit" value="div" name="operation"> -->

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>



      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>