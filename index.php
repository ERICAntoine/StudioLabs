<html>
    <?php
        include("component/Head/head2.php"); 
    ?>
    <body style=
    "background: url('images/login-fond.png'); 
    background-position: center; 
    background-size: cover;">
        <header class="header-login">
            <div class="container-fluid row-header">
                <ul>
                    <a href="inscription.php"><li>S'inscrire</li></a>
                    <a href="index.php"><li>Connexion</li></a>
                </ul>
            </div>
        </header>
        <section class="page_login">
            <div class="login">
                <div class="login_form">
                    <div class="container">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <img src="images/play-button.svg">
                                    StudioLabs
                                </div>
                                <form>
                                    <div class="form-label-group">
                                        <input type="email" id="inputEmail" class="form-control" placeholder="Adresse Email" required>
                                    </div>

                                    <div class="form-label-group">
                                        <input type="password" id="inputPassword" class="form-control" placeholder="Mot de Passe" required>
                                    </div>
                                    <a href="#">Remember password</label>
                                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>