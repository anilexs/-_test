<?php if(isset($_SESSION['id'])){?>
    <nav>
            <form action="/!_test/model/db_connexion.php" method="post">
                <button name="logout" class="logout">deconexion</button>
            </form>
            <div>
                <button class="menu">
                    <img src="http://localhost/!_test/asset/img/<?= $_SESSION['img']; ?>" alt="">
    
                    <div class="sold">0.00 €</div>
                    <i class="fa-solid fa-chevron-up fa-rotate-90"></i>
                </button>
            </div>
        </nav>
        <?php }else{?>
            <nav>
                <a href="../connexion.php">connexion</a>
                <a href="../inscription.php">inscription</a>
            </nav>
<?php } ?>

