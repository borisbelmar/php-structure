<?php
    require_once('../backend/config.php');
    if(!isset($_SESSION['id'])) {
        header('location: '.$_BASE_URL.'login.php');
    }
    require_once('../backend/models/User.php');
    $users = User::get_all();
?>
<?php require('../includes/head.php') ?>
<body>
    <?php require('../includes/nav.php') ?>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <div class="content">
                        <h2>Usuarios</h2>
                    </div>
                </div>
                <div class="column is-3">
                    <a class="button is-primary is-pulled-right" href="create.php">
                        <span class="icon is-small">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span>Nuevo Cliente</span>
                    </a>
                </div>
            </div>
            
            <table class="table is-hoverable is-bordered is-fullwidth">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Fecha de registro</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <th><?php echo $user['usr_id']; ?></th>
                            <td><?php echo $user['usr_username']; ?></td>
                            <td><?php echo $user['usr_email']; ?></td>
                            <td><?php echo $user['usr_firstname']; ?></td>
                            <td><?php echo $user['usr_lastname']; ?></td>
                            <td><?php echo $user['usr_createDate']; ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $user['usr_id']; ?>" class="tag is-warning">Editar</a>
                                <?php if($user['usr_id'] != $_SESSION['id']): ?>
                                <a class="tag is-danger" href="_crud.php?accion=delete&id=<?php echo $user['usr_id']; ?>">Eliminar</a>
                                <?php endif ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
            </table>
        </div>
    </section>
</body>
</html>