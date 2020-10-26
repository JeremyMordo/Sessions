<?php

    session_start();
    if(empty($_SESSION["loginname"])) 
    {
        header('Location: ./login.php');
    exit();
    }
    require 'inc/head.php';
    require 'inc/data/products.php';
 
    ?>
<section class="cookies container-fluid">
    <div class="row">
        TODO : Display shopping cart items from $_COOKIES here.

        <p> Le client a ajouter à son panier le: </p>

        <p><?= implode(", ", $catalog[$_SESSION['cookie']]); ?></p>

    </div>
</section>
<?php require 'inc/foot.php'; ?>
