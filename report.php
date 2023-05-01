<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Report</title>
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
    .b2{
        background-color:#FE7F7F;
        border-radius:15px;
    }
   
    
    .img-1{
        height:360px;
        width:880px;
        border-radius:15px;
    }
</style>
  </head>
  <body>
    <?php
    error_reporting(0);
    //session_start();
    //$amt = $_SESSION['amount'];
    //$time = $_SESSION['time'];
      include("connection.php");
      
      $sum1 = 0;
      $sum2 = 0;
      $query1 = "SELECT * FROM income;";
      $query2 = "SELECT * FROM expense;";
      $run1 = mysqli_query($conn,$query1);
      $run2 = mysqli_query($conn,$query2);
      //--------------update---------------------------
      

      while($data1 = mysqli_fetch_assoc($run1)){
        $sum1 = $sum1 + $data1["amount"];
      }
      while($data2 = mysqli_fetch_assoc($run2)){
        $sum2 = $sum2 + $data2["amount"];
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
      <a class="list-group-item list-group-item-action" href="#report.php"><img src="image/report_icon.png" class=" size img-thumbnail"> Reports </a>
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
        <div class="form-control"><?php echo $sum1; ?></div>
        </div>
<!-- --------------------------Income Add in Acount ------------------------ -->
        <br>
        <div class="input-group mb-3">
        <a class="bt btn btn-outline-secondary" href="income.php"> Add Income +</a>
          
          </div>
      </div>
    </div>
    <div class="b2 col-6">
      <div class="bt p-3">Total Expenses
      <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm"> Rs. </span>
        <div class="form-control"><?php echo $sum2; ?></div>
        </div><br>
        <div class="input-group mb-3">
        <a class="bt btn btn-outline-secondary" href="expense.php"> Add Expense -</a>
            
        </div>
      </div>
    </div>
    <!-- ---------------------Reports of transaction-------------------------- -->
    <div class="trans">
    report
    </div>
    
  </div>
</div>
 
  </div>
  
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>

</html>
