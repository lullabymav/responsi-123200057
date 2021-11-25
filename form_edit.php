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
            <form action="process_edit.php" method="POST">
                <table>
                    <thead class="text-center text-light" style="background-color: midnightblue;">
                        <tr class="align-middle">
                            <th colspan="2" style="width: 500px;">Change Inventory Data</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="p-3" style="width: 150px;">Item code</td>
                            <td>
                                <input type="text" name="code" placeholder="Item code" style="width: 330px" value="<?=$row->item_id?>">
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-3 " style="width: 150px;">Name of goods</td>
                            <td>
                                <input type="text" name="goods" placeholder="Name of goods" style="width: 330px" value="<?=$row->item_name?>">
                            </td>
                        </tr>
                        <tr>
                            <td class="p-3" style="width: 150px;">Amount</td>
                            <td>
                                <input type="text" name="amount" placeholder="Amount" style="width: 80px" value="<?=$row->amount?>">
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-3" style="width: 150px;">Unit</td>
                            <td>
                                <input type="text" name="unit" placeholder="Unit" style="width: 80px" value="<?=$row->unit?>">
                            </td>
                        </tr>
                        <tr>
                            <td class="p-3" style="width: 150px;">Coming Date</td>
                            <td>
                                <input type="date" name="codate" class="py-1 ps-2" value="<?=$row->arrival_date?>">
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-3" style="width: 150px;">Category</td>
                            <td>
                                <select name="category" class="py-1 ps-2">
                                    <option value="Building" >Building</option>
                                    <option value="Vehicle">Vehicle</option>
                                    <option value="Office Stationary">Office Stationary</option>
                                    <option value="Electronic">Electronic</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-3" style="width: 150px;">Status</td>
                            <td>
                                <div class="d-flex">
                                    <div class="form-check p-0">
                                        <input class="form-check-input ms-0 me-1" type="radio" name="status" value="Well" id="flexRadioDefault1">
                                        <label class="form-check-label pe-3" for="flexRadioDefault1">
                                          Well
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="form-check-input ms-0 me-1" type="radio" name="status" value="Maintenance" id="flexRadioDefault2">
                                        <label class="form-check-label p-0 pe-3" for="flexRadioDefault2">
                                          Maintenance
                                        </label>
                                    </div>
                                    <div class="form-check p-0">
                                        <input class="form-check-input ms-0 me-1" type="radio" name="status" value="Damage" id="flexRadioDefault3">
                                        <label class="form-check-label p-0" for="flexRadioDefault3">
                                          Damage
                                        </label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-3" style="width: 150px;">Unit price</td>
                            <td>
                                <input type="text" name="price" placeholder="Unit price" style="width: 330px" value="<?=$row->price?>">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="d-flex justify-content-center pt-2">                            
                    <button class="btn rounded-0 p-0 text-light px-3 py-1 mx-1" name="save" style="background-color: midnightblue;">Change</button>
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