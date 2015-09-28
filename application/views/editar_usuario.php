
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="col-md-10">
            <h1>
                Editar
                <small>Usuário</small>
            </h1>
        </div>

        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Dados</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form action="<?= base_url() ?>usuario/salvar_atualizacao" method="post">
                    <input type="hidden" id="idUsuario" name="idUsuario" value="<?= $usuario[0]->idUsuario; ?>">
                    <div class="box-body">
                        <form class="form-control">
                            <div class="form-group">
                                <label for="nome">Nome:</label>
                                <input type="text" class="form-control" id="nome" name="nome"  value="<?= $usuario[0]->nome; ?>" required>
                            </div>
                            <div class="row">

                                <div class="col-md-7">
                                    <label for="usuario">Nome de Usuário:</label>
                                    <input type="text" class="form-control" id="usuario" name="usuario" value="<?= $usuario[0]->usuario; ?>" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="nivel">Nível: </label>
                                    <select id="nivel"class="form-control" name="nivel" required>
                                        <option value="0">---</opton>
                                        <option value="1" <?= $usuario[0]->nivel == 1 ? 'selected' : ''; ?>>Administrador</opton>
                                        <option value="2" <?= $usuario[0]->nivel == 2 ? 'selected' : ''; ?>>Funcionário</opton>
                                    </select>
                                </div> 
                                <div class="col-md-2">
                                    <label for="status" ">Status: </label>
                                    <select id="status"class="form-control" name="status" required>
                                        <option value="0">---</opton>
                                        <option value="1" <?= $usuario[0]->status == 1 ? 'selected' : ''; ?>>Ativo</opton>
                                        <option value="2" <?= $usuario[0]->status == 2 ? 'selected' : ''; ?>>Inativo</opton>
                                    </select>

                                </div>

                            </div>
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="formgroup">
                                        <label for="senha">Senha:</label>
                                        <input type="button" class="btn btn-default btn-block" value="Atualizar Senha" data-toggle="modal" data-target="#myModal">
                                    </div>
                                </div>

                            </div>



                            <div style="text-align: right">
                                <button type="submit" class="btn btn-primary">Atualizar</button>
                                <button type="back" class="btn btn-default">Cancelar</button>
                        </form>
                    </div><!-- /.box -->


            </div>


    </section>


</div><!-- /.content-wrapper -->
<footer class="main-footer">

    <strong>Copyright &copy; 2014-2015 Equipe OPE</a>.</strong> Todos os direitos reservados.
</footer>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="<?= base_url() ?>usuario/salvar_senha" method="post">
            <input type="hidden" id="idUsuario" name="idUsuario" value="<?= $usuario[0]->idUsuario; ?>">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Atualizar Senha</h4>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url() ?>usuario/salvar_senha" method="post">
                        <div class="row">                    
                            <div class="col-md-12" form-group>
                                <label for="senha_antiga">Senha Antiga:</label>
                                <input type="password" name="senha_antiga" id="senha_antiga" class="form-control">
                            </div>
                            <div class="col-md-12" form-group>
                                <label for="senha_nova">Nova Senha :</label>
                                <input type="password" name="senha_nova" id="senha_nova" onkeyup="checarSenha()" class="form-control">
                            </div>
                            <div class="col-md-12" form-group>
                                <label for="senha_confirmar">Confirma Nova Senha :</label>
                                <input type="password" name="senha_confirmar" id="senha_confirmar" onkeyup="checarSenha()" class="form-control">
                            </div>
                            <div class="col-md-12" form-group>
                                <div id="divcheck">

                                </div>
                            </div>
                        </div>

                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary" id="enviarsenha" disabled>Salvar Senha</button>
                </div>
            </div>
        </form>
    </div>
</div>


<script>
    $(document).ready(function () {
        $("#senha_nova").keyup(checkPasswordMatch);
        $("#senha_confirmar").keyup(checkPasswordMatch);
    });
    function checarSenha() {
        var password = $("#senha_nova").val();
        var confirmPassword = $("#senha_confirmar").val();

        if (password != confirmPassword || (password == '' || '' == confirmPassword)) {
            $("#divcheck").html("<span style='color: red'>Senhas não conferem!</span>");
            document.getElementById("enviarsenha").disabled = true;
        } else {
            $("#divcheck").html("<span style='color: green'>Senhas Iguais!</span>");
            document.getElementById("enviarsenha").disabled = false;
        }
    }
</script>

