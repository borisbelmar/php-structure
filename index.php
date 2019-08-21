<?php
    require_once('backend/config.php');
    if(!isset($_SESSION['id'])) {
        header('location: '.$_BASE_URL.'login.php');
    }
?>
<?php require('includes/head.php') ?>
<body>
    <?php require('includes/nav.php') ?>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <div class="content">
                        <h1>Hola <?php print $_SESSION['firstname']." ".$_SESSION['lastname'] ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>