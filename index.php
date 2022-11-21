<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body class="bg-success">
    <form action="insert tasks.php" method="GET">
<div class="container">
    <div class="row">
        <h3 class="text-center text-danger form-Times New Roman" >ToDo LIST PROJECT </h3>
        <div class="col-11">
            <input type="text" name="list" class="form-control" >
        </div>
        <div class="col-1">
            <button class="btn btn-outline-danger">ADD</button>
        </div>
    </div>
</div>
</form>
<!--getdata-->
<?php
include "config.php";
$rawData = mysqli_query($con, "select * tbltodo");

?>




<div class="container">
    <div class="col-11 bg-white mt-5">

<table class="table">
    <tbody>
        <?php
            while($row = mysqli_fetch_array($rawData)){
        ?>
        <tr> 
            <td><?php echo $row['id'] ?> </td>
            <td><?php echo $row['list'] ?> </td>
            <td style="width:10%;"><a href="delete.php? ID=<?php echo $row['id'] ?>" class="btn btn-danger">DELETE</a></td>
            <td style="width:10%;"><a href=" update.php? ID=<?php echo $row['id'] ?>"class="btn btn-success" >UPDATE</a></td>
        </tr>
        <?php
            }

        ?>
       
    </tbody>
</table>
</div>
</body>
</html>