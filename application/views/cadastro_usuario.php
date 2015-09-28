
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="col-md-10">
            <h1>
                Cadastro
                <small>de novo Usuário</small>
            </h1>
        </div>

        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Dados</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form action="<?= base_url() ?>usuario/cadastrar" method="post">
                    <div class="box-body">
                        <form class="form-control">
                            <div class="form-group">
                                <label for="nome">Nome:</label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o nome..." required>
                            </div>
                            <div class="row">

                                <div class="col-md-7">
                                    <label for="usuario">Nome de Usuário:</label>
                                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Informe o nome do usuário..." required>
                                </div>
                                <div class="col-md-2">
                                    <label for="nivel">Nível: </label>
                                    <select id="nivel"class="form-control" name="nivel" required>
                                        <option value="0">---</opton>
                                        <option value="1">Administrador</opton>
                                        <option value="2">Funcionário</opton>
                                    </select>
                                </div> 
                                <div class="col-md-2">
                                    <label for="status" ">Status: </label>
                                    <select id="status"class="form-control" name="status" required>
                                        <option value="0">---</opton>
                                        <option value="1">Ativo</opton>
                                        <option value="2">Inativo</opton>
                                    </select>

                                </div>

                            </div>
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="formgroup">
                                        <label for="senha">Senha:</label>
                                        <input type="password" class="form-control" id="senha" name="senha" placeholder="Informe a senha..." required>
                                    </div>
                                </div>

                            </div>



                            <div style="text-align: right">
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                                <button type="reset" class="btn btn-default">Cancelar</button>
                        </form>
                    </div><!-- /.box -->


            </div>


    </section>


</div><!-- /.content-wrapper -->
<footer class="main-footer">

    <strong>Copyright &copy; 2014-2015 Equipe OPE</a>.</strong> Todos os direitos reservados.
</footer>

