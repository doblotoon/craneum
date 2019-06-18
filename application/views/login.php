<!--
Author: w3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<?php
    require_once('segmentos/header.php');
?>


<section class="banner-bottom py-5">
        <div class="container py-md-4">
            <h3 class="tittle-w3layouts two text-center" id="espacoInferiorLogin">Login</h3>
            <div class="comment-top mt-6 row">
                <div class="col-lg-1 comment-bottom"></div>
                <div class="col-lg-4 comment-bottom w3pvt_mail_grid-img">
                    <img class="img-fluid" src="../assets/images/apply2.jpg" alt="">
                </div>
                <div class="col-lg-1 comment-bottom"></div>
                <div class="col-lg-6 comment-bottom w3pvt_mail_grid_right">
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-lg-7 form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="email" placeholder="" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-7 form-group">
                                <label>Senha</label>
                                <input class="form-control" type="password" name="Senha" placeholder="" required="">
                            </div>
                        </div>
                        <button type="submit" class="btn submit mt-3">Entrar</button>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- //banner-bottom -->
    <!-- footer -->
    
<?php
    require_once('segmentos/footer.php');
?>   

    <!-- //footer -->


</body>

</html>