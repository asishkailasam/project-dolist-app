<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE DATAS</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<?php
$id =$_GET['ID'];
include " config.php";
$Rdata = mysqli_query($con,"select * from tbltodo where id =$id");
$data=mysqli_fetch_array($Rdata);

?>


<body class="bg-info">
<form action="update1.php" method="GET">
<div class="container">
    <div class="row">
        <h3 class="text-center text-danger form-Times New Roman" >UPDATE DATAS </h3>
        <div class="col-11">
            <input type="text" value="<?php echo $data['list'] ?>" name="list" class="form-control" >
        </div>
        <div class="col-1">
            <button class="btn btn-outline-danger">UPDATE</button>
            <input type="hidden" name="id" value="<?php echo $data['id'] ?>"  >
        </div>
    </div>
</div>
</form>

    
</body>
</html>