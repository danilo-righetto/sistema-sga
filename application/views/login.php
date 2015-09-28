<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Acesso Restrito</title>
    </head>
    <body class="login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href=""><b>SGA</b>transporte escolar</a>
            </div><!-- /.login-logo -->
            <div class="login-box-body">
                <form class="form-signin" method="post" action="<?= base_url() ?>dashboard/logar">
                    <p class="login-box-msg">Entre com seu usuário e senha</p>

                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" name="usuario" placeholder="Usuário"/>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" name="senha" placeholder="Password"/>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">                        
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
                        </div><!-- /.col -->
                    </div>
                </form>




            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->

        <!-- jQuery 2.1.4 -->
        <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="../../plugins/iCheck/icheck.min.js" type="text/javascript"></script>
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
    </body>
</html>