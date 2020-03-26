<div class="container-fluid">
    <div class="row">


        <?php require_once("sideMenu.php"); ?>
        <?php
        if ($connection) {
            require_once("tableView.php");
        } else {
            require_once("formConnexion.php");
        }
        ?>

    </div>
</div>
</main>