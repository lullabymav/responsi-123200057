<?php
    require('connect.php');
    session_start();

    $id = $_GET['id'];

    $query = "SELECT * FROM inventory WHERE item_id='$id'";
    $execute = $mydb->query($query);
    $row = $execute->fetch_object();
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
    <div class="content">
        <div class="boxContent d-flex justify-content-center mt-4">
            <form action="process_delete.php" method="POST">
                <table>
                    <thead class="text-center text-light" style="background-color: midnightblue;">
                        <tr class="align-middle">
                            <th colspan="2" style="width: 500px;">Clear Inventory Data</th>
                        </tr>
                    </thead>
                </table>
                <div class="info mt-3">
                    <p>Are You Sure Want to Remove the <span class="text-primary"><?= $row->item_name?></span>?</p>
                </div>
                <div class="d-flex justify-content-center pt-2">                            
                    <button class="btn rounded-0 p-0 text-light px-3 py-1 mx-1" name="delete" style="background-color: midnightblue;">Delete</button>
                    <button class="btn rounded-0 p-0 text-light px-3 mx-1" name="cancel" style="background-color: midnightblue;">Cancel</button>      
                </div>
            </form>
        </div>
    </div>

    <style>
        .content>.boxContent>form>table>tbody>tr>td>input::placeholder{
            padding-left: 8px;
        }
    </style>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>
</html>