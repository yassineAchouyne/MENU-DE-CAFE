<?php
include "../db.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Café Slate</title>
    <script src="https://kit.fontawesome.com/ee309550fb.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>
<div class="back">
        <a href="index.php"><i class="fa-solid fa-arrow-left-long"></i></a>
    </div>
    <div>
        <table class="table table-striped">
            <tr>
                <td>Nom livreur</td>
                <td>Action</td>
            </tr>
            <?php
            $sql = $db->prepare("SELECT * from livreur");
            $sql->execute();
            $tab = $sql->fetchAll();
            foreach ($tab as $val) {
            ?>
                <tr>
                    <td><?=$val['nom']?></td>
                    <td>
                        <a class="btn btn-outline-primary" href="livreur.php?id=<?=$val['id']?>">Modifier</a>
                        <a class="btn btn-outline-danger" href="livreur.php?sup=<?=$val['id']?>">Supprimer</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
    <section class="admin a">
        <form action="" method="post">
            <h2>Ajouter Nouvelle livreur</h2>
            <input type="text" name="nom" id="" class="form-control" required>
            <input type="submit" value="Ajouter" name="Ajouter" class="btn btn-outline-primary">
        </form>
    </section>
    <?php
    if(isset($_GET['id'])){
        $sql = $db->prepare("SELECT * from livreur");
            $sql->execute();
            $tab=$sql->fetch()
 ?>
   <article class="admin change">
    <form action="" method="post">
            <h2>Modifier Le Nom De livreur</h2>
            <input type="text" name="nom" value="<?=$tab['nom']?>" id="" class="form-control" required>
            <input type="submit" value="Modifier" name="Modifier" class="btn btn-outline-primary">
        </form>
    </article>
   
    <?php
    }
    ?>
    
</body>

</html>
<?php
if (isset($_POST['Ajouter'])) {
    $sql = $db->prepare("INSERT into livreur(nom) values (?)");
    $sql->execute([$_POST['nom']]);
    header("Location:livreur.php");
}
if (isset($_POST['Modifier'])) {
    $sql = $db->prepare("UPDATE `livreur` SET`nom`=? WHERE id=?");
    $sql->execute([$_POST['nom'],$_GET['id']]);
    header("Location:livreur.php");
}
if (isset($_GET['sup'])) {
    $sql = $db->prepare("DELETE FROM `livreur` WHERE id=?");
    $sql->execute([$_GET['sup']]);
    header("Location:livreur.php");
}

?>