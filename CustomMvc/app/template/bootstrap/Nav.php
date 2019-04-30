<?php
    $controller = $this->getController();
    $action = $this->getAction();
?>

<li class="nav-item">
    <a class="nav-link" href="/Usuario/Cadastrar">Cadastrar</a>
</li>

<li class="nav-item">
    <a class="nav-link" href="/Usuario/Listar">Listar</a>
</li>

<li class="nav-item">
    <a class="nav-link <?php echo ($action == 'Login')? 'active' : ''; ?>" href="/Usuario/Login">Login</a>
</li>