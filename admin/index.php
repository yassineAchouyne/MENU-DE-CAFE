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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
 <body style="background-color: #eaebed;">
    
    <body>
    <div class="main">
        <!-- ======================= Cards ================== -->
        <div class="cardBox">
            <div class="card" onclick="changer(1)">
                <div>
                    <div class="numbers">
                        <?php
                        $sql = $db->prepare("SELECT count(*) cp from livreur");
                        $sql->execute([]);
                        echo $sql->fetch()['cp'];
                        ?>
                    </div>
                    <div class="cardName">livreur</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="person-circle-outline"></ion-icon>
                </div>
            </div>

            <div class="card" onclick="changer(2)">
                <div>
                    <div class="numbers">
                        <?php
                        // $sql = $db->prepare("SELECT count(*) cp from produit_panier where statut=?");
                        // $sql->execute(["instance"]);
                        // echo $sql->fetch()['cp'];
                        ?>
                    </div>
                    <div class="cardName">Menu</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="cart-outline"></ion-icon>
                </div>
            </div>

            

        
            

            
        </div>

       

    <!-- =========== Scripts =========  -->

    <!-- ====== ionicons ======= -->
    <script src="main.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
</body>
</html>