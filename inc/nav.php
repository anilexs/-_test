<?php if(isset($_SESSION['id'])){?>
    <nav>
            <form action="/!_test/model/db_connexion.php" method="post">
                <button name="logout" class="logout">deconexion</button>
            </form>
            <div class="menu">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsE7KO6169g-_4yrQNmyCB0pXgyqETpQKLtA&usqp=CAU" alt="">
                <div class="sold">0.00</div>
                <i class="fa-solid fa-chevron-up fa-rotate-90"></i>
            </div>
    </nav>
<?php }else{?>
    <nav>
        <a href="../connexion.php"></a>
    </nav>
<?php } ?>

