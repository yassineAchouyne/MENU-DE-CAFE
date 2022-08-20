<?php
include "db.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Café</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <?php 
        $sql=$db->prepare("SELECT * from livreur where id =?");
        $sql->execute([$_GET['id']]);
        $tab=$sql->fetch();
        echo $tab['nom'];
        ?>
    </header>
    <section class="container">
        <?php 
        $sql=$db->prepare("SELECT * from menu");
        $sql->execute();
        $tab=$sql->fetchAll();
        foreach($tab as $val){
        ?>
        <div class="line" onclick="selecte(this)">
            <h5><?=$val['nom']?></h5> 
            <input type="number" name="" id="" value="1">
        </div>
        <?php }?>
        <button class="btn btn-info" onclick="imprimerie()">imprimerie</button>
    </section>
    <script src="admin/main.js"></script>
</body>
</html>