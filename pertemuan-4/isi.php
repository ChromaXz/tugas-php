<div style="height: 500px;">
        <!-- halaman depan -->
    <?php
        $hal = $_GET["hal"];

        if(!empty($hal)){
            include_once $menuBawah[$hal];
        }else{
            include_once "home.php";
        }

    ?>
</div>