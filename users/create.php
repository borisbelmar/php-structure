<?php
    require_once('../backend/config.php');
    if(!isset($_SESSION['id']) || $_SESSION['level'] != 2) {
        header('location: '.$_BASE_URL.'login.php');
    }
    require_once('../backend/models/User.php');
?>
<?php require('../includes/head.php') ?>
<body>
<?php require('../includes/nav.php') ?>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-6 is-offset-3">
                    <div class="box">
                        <div class="content has-text-centered">
                            <h2>Admin Panel</h2>
                            <h4>Crear usuario</h4>
                        </div>
                        <form class="form" action="_crud.php?action=create" method="POST">
                            <div class="columns">
                                <div class="column">
                                    <div class="field">
                                        <label class="label">Nombre*</label>
                                        <div class="control">
                                            <input class="input" type="text" placeholder="Juanito" name="firstname" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="field">
                                        <label class="label">Apellido*</label>
                                        <div class="control">
                                            <input class="input" type="text" placeholder="Pérez" name="lastname" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="columns">
                                <div class="column">
                                    <div class="field">
                                        <label class="label">Username*</label>
                                        <div class="control">
                                            <input class="input" type="text" placeholder="Username" name="username" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="field">
                                        <label class="label">Email*</label>
                                        <div class="control">
                                            <input class="input" type="email" placeholder="ejemplo@gmail.com" name="email" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Contraseña</label>
                                <div class="control">
                                    <input class="input" type="password" placeholder="Contraseña" name="pass">
                                </div>
                            </div>
                            <hr>
                            <div class="field">
                                <div class="control">
                                    <button class="button is-primary is-fullwidth">Registrar usuario</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>