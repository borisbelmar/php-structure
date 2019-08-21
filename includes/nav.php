<nav class="navbar is-dark" role="navigation" aria-label="main navigation">
  <div class="container">
    <div class="navbar-brand">
      <a class="navbar-item" href="<?php echo $_BASE_URL ?>">
        <strong>Admin Panel</strong>
      </a>
      <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>
    <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-start">
        <span class="navbar-item">
          |
        </span>
        <?php if($_SESSION['level'] == 2): ?>
        <a class="navbar-item" href="<?php echo $_BASE_URL.'users/' ?>">
          Users
        </a>
        <?php endif ?>
      </div>
      <div class="navbar-end">
        <span class="navbar-item">
          <b>Usuario</b><span>: <?php echo $_SESSION['firstname']." ".$_SESSION['lastname'] ?></span>
        </span>
        <div class="navbar-item">
          <div class="buttons">
            <a class="button is-primary" href="<?php echo $_BASE_URL.'backend/auth/logout.php' ?>">
              <strong>Logout</strong>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>