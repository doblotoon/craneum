<?php
    //$pasta = __DIR__;
    //echo $pasta;
?>
                    <nav class="py-md-4 py-3 d-lg-flex nav_w3pvt">
                    <div id="logo">
                        <h1><a href="../../index.php">Craneum</a></h1>
                    </div>
                    <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu mt-lg-3 ml-auto">
                        <li class="active"><a href="../../index.php">Home</a></li>
                        <li>
                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle">Entrar <span class="fa fa-angle-down" aria-hidden="true"></span></span>
                            </label>
                            <h6 class="linkEntrarMenu">Entrar <span class="fa fa-angle-down" aria-hidden="true"></span></h6>
                            <input type="checkbox" id="drop-2" />
                            <ul>
                                <li><a href="application/views/login.php" class="drop-text">Login</a></li>
                                <li><a href="application/views/cadastroUsuario.php" class="drop-text">Registrar-se</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>