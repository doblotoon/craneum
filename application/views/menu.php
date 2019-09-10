<?php
    //session_destroy();
    //$pasta = __DIR__;
    //echo $pasta;
    // TODO: Alterar o formato dos links para eles funcionarem em todas as páginas da forma correta.
?>
                    <script>
                        
                        var scroll = function() {
                            var top = window.pageYOffset;
                            var menu = document.getElementById("menuScroll");
                            if(top>100){
                                menu.classList.add("fixado");
                            }else if(top<100){
                                menu.classList.remove("fixado");
                            }
                        };
                        window.onscroll = scroll;
                    </script>

                    <nav class="py-md-1 py-1 d-lg-flex nav_w3pvt fixed-top" id='menuScroll'>
                        <div id="logo">
                            <h1><a href="<?=$caminho?>index.php">Craneum</a></h1>
                        </div>
                        <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu mt-lg-3 ml-auto">
                            <li class="active"><a href="<?=$caminho?>index.php">Home</a></li>
                            <li>
                                <?php if($login):?>
                                    <label>
                                        <a href="<?=$caminho?>controllers/Login.php?log=out&check=true">
                                            Sair
                                        </a>
                                    </label>
                                    <label>
                                        <a href='views/editarUsuario.php'><?=$_SESSION['nome'];?></a>
                                    </label>
                                <?php else:?>
                                    <!-- First Tier Drop Down -->
                                    <label for="drop-2" class="toggle">Entrar <span class="fa fa-angle-down" aria-hidden="true"></span></span></label>
                                    <h6 class="linkEntrarMenu">Entrar <span class="fa fa-angle-down" aria-hidden="true"></span></h6>
                                    <input type="checkbox" id="drop-2" />
                                    <ul id="dropUL">
                                        <li><a href="<?=$caminho?>views/login.php" class="drop-text">Login</a></li>
                                        <li><a href="<?=$caminho?>views/cadastroUsuario.php" class="drop-text">Registrar-se</a></li>
                                    </ul>
                                <?php endif;?>
                            </li>
                        </ul>
                    </nav>