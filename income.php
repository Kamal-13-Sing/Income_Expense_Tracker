<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Income Add</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<!-- ---------------------Style --------------------------- -->
<style>
    .tr{
        background-color:#EAF9FF;
    }
    .size{
        height:39px;
        width:40px;
    }
    .bt{
        color:black;
    }
   
    .nav{
        color:black;
        background-color:#3ADDD3;
    }
    .b1{
        background-color:#98FE7F;
        border-radius:15px;
     
    }

    .img-1{
      height:180px;
      width:410px;
      border-radius:15px;
  }
    .trans{
        border:1px solid black;
        height:380px;
        width:900px;
    }
    .h{
      background-color:#97F97E;
    }
    .bt1{
        padding-left:10px
    }
    .a{
      background-color:#98FE7F;
        border:1px solid #97F97E;
        height:195px;
        width:430px;
        border-radius:20px 0 0 20px;
    }
    .b{
      background-color:#98FE7F;
        border:1px solid #97F97E;
        height:195px;
        width:430px;
        border-radius:0 20px 20px 0;
    }
    input[type=number],select,textarea,date{
      width: 50%;
    padding: 7px 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
    .bttn{
      width:865px;
    }

</style>
  </head>
  <body>
    <!-- --------------------------PHP--------------------------- -->
<?php

include("connection.php");

error_reporting(0);
$amount = $_POST["amount"];
$category = $_POST["category"];
$date = $_POST["date"];
$notes = $_POST["note"];

if(isset($_POST["submit"])){
  if(!empty($amount)){
  $query = "INSERT INTO income(category,notes,date,amount)
        VALUES('$category','$notes','$date','$amount');";
        $run = mysqli_query($conn, $query);
}else{
  echo "<script>alert('All fields are required');</script>";
}

}
/*
if($run){
echo "sucess";
}else{
echo "failed because ".mysqli_error($conn);
}
*/
//---------------data fetch from table-----------------------
$sum = 0;
$query1 = "SELECT * FROM income;";
$run = mysqli_query($conn,$query1);
while($data = mysqli_fetch_assoc($run)){
  $sum = $sum + $data["amount"];
}
?>
<!-- --------------------------------------Nav BAr -------------------------------------------------------------------- -->
  <nav class=" nav navbar navbar-expand-lg bg-body-tertiary">
  <div class="nav container-fluid">
    <a class="navbar-brand" href="#"><img src="image/khata_icon.png" class=" size img-thumbnail"> Digital Khata </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
      <ul class="navbar-nav me-auto mb-2 mb-lg-0"> </ul>
      <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link active"  href="home.php">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav nav-link" href="#">ABOUT US</a>
            </li>
            <li class="nav-item">
                <a class="nav nav-link" href="#">CONTACT US</a>
            </li>
            <li class="nav-item">
            <a class="nav nav-link" href="#">Log-In</a>
            </li>
    </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- ------------------------side Bar ------------------------------------------- -->
  <div class="tr row">
  <div class="col-3">
    <div id="list-example" class="list-group">
      <a class="h list-group-item list-group-item-action" href="home.php"><img src="image/home_icon.png" class=" size img-thumbnail"> HOME</a>
      <a class="list-group-item list-group-item-action" href="#list-item-2"><img src="image/account_icon.png" class=" size img-thumbnail"> Accounts </a>
      <a class="list-group-item list-group-item-action" href="ledger.php"><img src="image/ledger_icon.png" class=" size img-thumbnail"> Ledger </a>
      <a class="list-group-item list-group-item-action" href="#list-item-4"><img src="image/budget_icon.png" class=" size img-thumbnail"> Budget </a>
      <a class="list-group-item list-group-item-action" href="#list-item-1"><img src="image/saving_icon.png" class=" size img-thumbnail"> Saving Target </a>
      <a class="list-group-item list-group-item-action" href="#list-item-2"><img src="image/receive_icon.png" class=" size img-thumbnail"> Receives & Pays </a>
      <a class="list-group-item list-group-item-action" href="#list-item-3"><img src="image/categori_icon.png" class=" size img-thumbnail"> Categories </a>
      <a class="list-group-item list-group-item-action" href="#list-item-4"><img src="image/template_icone.png" class=" size img-thumbnail"> Template </a>
      <a class="list-group-item list-group-item-action" href="report.php"><img src="image/report_icon.png" class=" size img-thumbnail"> Reports </a>
      <a class="list-group-item list-group-item-action" href="#list-item-2"><img src="image/setting_icon.png" class=" size img-thumbnail"> Settings </a>
     </div>
  </div>
<!-- ---------------------------right side Balance ------------------------------- -->
  <div class="amount col-8">
    <div class="container text-center">
  <div class="row g-2">
    <div class="b1 col-6">
      <div class="bt p-3">Total Balance
      <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm"> Rs. </span>
        <div class="form-control"><?php echo $sum; ?></div>
        
        </div>
<!-- --------------------------Income Add in Acount ------------------------ -->
        <br>
        <div class="input-group mb-3">
        <a class="bt btn btn-outline-secondary" href="income.php"> Add Income </a>
          
          </div>
      </div>
    </div>
    <div class="b2 col-6">
      <img class="img-1" src="image/image.jpg">
    </div>
    <!-- ------------------------Table of transaction------------------------ -->
    <br>
    Transaction Type: Income
    <div class="input-group mb-3">
    <a class="bt1 btn btn-success" href="income.php"> Income </a>
    <a class="bt1 btn btn btn-danger" href="expense.php"> Expense </a>
    <a class="bt1 btn btn-primary" href="income.php"> Transfer </a>
     </div>
     
     <div class="input-group mb-4">
        <div class="a">
          <form action="" method="POST">
            <br>
            Amount <input type="number" name="amount"><br><br>
            Category
            <select name="category" aria-label=".form-select-sm example">
            <option value="salary">Salary</option>
            <option value="bonus">Bonus</option>
            <option value="profit">Profit</option>
            </select>
       
        </div>
        <div class="b">
        <br>
     
          Date <input type="date" name="date">
          <br><br>
          Notes <textarea name="note" placeholder="khana....."></textarea>
          
        </div>
     </div>
     
          <input class="bttn btn btn-primary" type="submit" name="submit" value="Add New Income">
          </form>
     
  </div>
</div>
 
  </div>
  
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>

</html>
