<?php  
if($_SERVER['REQUEST_METHOD']=='POST'  && $_POST){

    $num1 = $_POST['number-1'];
    $num2 = $_POST['number-2'];
    $num3 = $_POST['number-3'];
    $num4 = $_POST['number-4'];
    $num5 = $_POST['number-5'];

    $sum = $num1 + $num2 + $num3 + $num4 + $num5 ;
    $total = 500 ;
    $result = ($sum / $total) * 100 ;

    

    if($result >=90){
        echo  $result ." %  Grade A";
    }else if($result >=80){
        echo  $result ." %  Grade B";
    }else if($result >=70){
        echo  $result ." %  Grade C";
    }else if($result >=60){
        echo  $result ." %  Grade D";
    }else if($result >=50){
        echo  $result ." %  Grade E";
    }else{
        echo  $result ." % Grade F";
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

      <div class="form-group">
        <label for="exampleInputEmail1">type your Physics grade :</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="number-1" aria-describedby="emailHelp">
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">type your Chemistry grade :</label>
        <input type="text" class="form-control" name="number-2" id="exampleInputPassword1">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">type your Biology grade :</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="number-3" aria-describedby="emailHelp">
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">type your Mathematics grade :</label>
        <input type="text" class="form-control" name="number-4" id="exampleInputPassword1">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">type your Computer grade :</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="number-5" aria-describedby="emailHelp">
      </div>

     

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