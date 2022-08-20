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

<body onload="color()">
    <header>
        <h1>Café Slate</h1>
    </header>
    <section class="livreur">
        <?php
        $sql = $db->prepare("SELECT * from livreur");
        $sql->execute();
        $tab = $sql->fetchAll();
        foreach ($tab as $val) {
        ?>
        <a href="page.php?id=<?=$val['id']?>" class="btn"><?=$val['nom']?></a>
        <?php
        }
        ?>
    </section>
    <script src="admin/main.js"></script>
</body>

</html>