<?php
    require_once('backend/config.php');
    if(isset($_SESSION['id'])) {
        header('location: '.$_BASE_URL);
    }
?>

<?php require('includes/head.php') ?>
<body>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-one-third is-offset-one-third">
                    <div class="box">
                        <div class="content has-text-centered">
                            <h2>Admin Panel</h2>
                            <?php if(isset($_SESSION['errors'])): ?>
                            <p class="has-text-danger has-text-centered"><?php echo $_SESSION['errors'] ?></p>
                            <?php endif ?>
                        </div>
                        <form class="form" action="backend/auth/login.php" method="POST">
                            <div class="field">
                                <label class="label">Usuario</label>
                                <div class="control">
                                    <input class="input" type="text" placeholder="Usuario" name="username" required>
                                </div>
                            </div>
                    
                            <div class="field">
                                <label class="label">Contraseña</label>
                                <div class="control">
                                    <input class="input" type="password" placeholder="Contraseña" name="pass" required>
                                </div>
                            </div>
                            <div class="control">
                                <button class="button is-primary is-fullwidth">Ingresar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>