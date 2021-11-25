<?php
    require('connect.php');
    session_start();

    $i = 0;
    $total_all = 0;
    $query = "SELECT * FROM inventory WHERE category='Office Stationary'";
    $execute = $mydb->query($query);
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

    <title>123200057</title>
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
                        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="view_inventory.php">Inventory List</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            List per Category
                        </a>
                        <ul class="dropdown-menu mt-0 py-1 ms-3 rounded-0" style="background-color: lightsteelblue;"
                            aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="view_list_building.php">Buildings</a></li>
                            <li><a class="dropdown-item" href="view_list_vehicle.php">Vehicles</a></li>
                            <li><a class="dropdown-item" href="view_list_office.php">Office Inventory</a></li>
                            <li><a class="dropdown-item" href="view_list_electronic.php">Electronic</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- content -->
    <div class="content">
        <div class="bttn m-2">
            <a href="form_add.php">
                <button class="btn rounded-0 text-light" style="background-color: midnightblue;">+ Add</button>
            </a>
        </div>
        <div class="d-flex justify-content-center">
            <table style="min-width: min-content; border: 1px solid midnightblue;">
                <thead class="text-center text-light" style="background-color: midnightblue;">
                    <tr class="align-middle">
                        <th class="ps-2">No</th>
                        <th class="px-2">Code</th>
                        <th class="px-2">Name of goods</th>
                        <th class="px-2">Amount</th>
                        <th class="px-2">Unit</th>
                        <th class="px-2">Coming Date</th>
                        <th class="px-2">Category</th>
                        <th class="px-2">Status</th>
                        <th class="px-2">Unit Price</th>
                        <th class="px-2">Total price</th>
                        <th class="px-2" colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                        while($row = $execute->fetch_object()){
                            $price_format = number_format($row->price, 2, ".", ",");
                            $total_price = $row->price * $row->amount;
                            $total_format = number_format($total_price, 2, ".", ",");
                    ?>
                    <tr>
                        <td class="px-2"><?= $i+1 ?></td>
                        <td class="px-2"><?= $row->item_id ?></td>
                        <td class="px-2"><?= $row->item_name ?></td>
                        <td class="px-2"><?= $row->amount ?></td>
                        <td class="px-2"><?= $row->unit ?></td>
                        <td class="px-2"><?= $row->arrival_date ?></td>
                        <td class="px-2"><?= $row->category ?></td>
                        <td class="px-2"><?= $row->item_status ?></td>
                        <?php
                            
                        ?>
                        <td class="px-2 text-end">Rp<?= $price_format ?></td>
                        <td class="px-2 text-end">Rp<?= $total_format ?></td>
                        <div class="action">
                            <td class="d-flex justify-content-center">
                                <a class="nav-link active p-0 px-1" href="form_edit.php?id=<?= $row->item_id ?>">
                                    <button class="btn rounded-0 pt-0 my-1 text-light"
                                        style="background-color: midnightblue; width: 80px">Edit</button>
                                </a>
                                <a class="nav-link active p-0 px-1" href="process_delete.php?id=<?= $row->item_id ?>">
                                    <button class="btn rounded-0 pt-0 my-1 text-light"
                                        style="background-color: midnightblue; width: 80px">Delete</button>
                                </a>
                            </td>
                        </div>
                    </tr>
                    <?php
                        $i++;
                        $total_all += $total_price;
                        $all_format = number_format($total_all, 2, ".", ",");
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="total text-end" style="margin-right: 229px">
            <span>Total Inventory = Rp<?= $all_format ?></span>
        </div>
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

</html>