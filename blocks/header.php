<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none" mb-checked="1" data-tip="">
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/" class="nav-link px-2 text-secondary" mb-checked="1" data-tip="">Գլխաոր</a></li>
                <li><a href="/about.php" class="nav-link px-2 text-white" mb-checked="1" data-tip="">Կոնտակտ</a></li>
            </ul>
            <?php
            if ($_COOKIE["User"] == "այո") :
            ?>
                
                    <a class="btn btn-outline-primary" href="/auth.php">Օգտագործողի Հաշիվ</a>
                
            
<?php else:?>

                
                    <a class="btn btn-outline-primary" href="/auth.php">Մուտք</a>
                
            <?php endif ?>
        </div>
    </div>
</header>