<?php
ob_start();

require('connect.php');
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Final Project TCC</title>
</head>

<body>
  <!-- header -->
  <div class="menu" style="background-color:midnightblue">
    <h2 class="text-light mb-0" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
      <center>LIST OF INVENTORY<br>EVERYTHING OFFFICE</center>
    </h2>

    <!-- navbar -->
    <nav class="navbar navbar-expand-sm navbar-light p-0" style="background-color:lightsteelblue;">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item ps-2">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="view_inventory.php">Inventory List</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              List per Category
            </a>
            <ul class="dropdown-menu mt-0 pt-1 ms-3 rounded-0" style="background-color: lightsteelblue;"
              aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="view_list_building.php">Buildings</a></li>
              <li><a class="dropdown-item" href="view_list_vehicle.php">Vehicles</a></li>
              <li><a class="dropdown-item" href="view_list_office.php">Office Inventory</a></li>
              <li><a class="dropdown-item" href="view_list_electronic.php">Electronic</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="nav-item">
        <form action="" class="nav-link active py-0" method="POST">
          <button class="btn rounded-0 p-0 text-light px-3" name="logout" style="background-color: midnightblue;">Logout</button>
        </form>
      </div>
    </nav>
  </div>

  <!-- Content -->
  <div class="">
    <h1 style="padding-top: 12rem; color: midnightblue;">
      <center>WELCOME ADMIN</center>
    </h1>
  </div>

  <!-- footer -->
  <div class="fixed-bottom text-light" style="background-color:midnightblue; height: 43px;">
    <p class="m-2">
      <center>Inventory Web 2021</center>
    </p>
  </div>

  <style>
    .menu>.navbar>.collapse>.navbar-nav>.nav-item>.nav-link:hover {
      background-color: midnightblue;
      color: white;
    }
    .menu>.navbar>.collapse>.navbar-nav>.nav-item>.dropdown-menu>li>.dropdown-item:hover {
      background-color: midnightblue;
      color: white;
    }
  </style>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
</body>

<?php
  if(isset($_POST['logout'])){
    // session_destroy();
    header("location:https://user-cred-op-r4kjthgzqa-et.a.run.app/");
  }
?>
</html>