
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="col-md-10">
            <h1>
                Cadastro
                <small>de novo Funcionário</small>
            </h1>
        </div>

        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Dados</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form action="<?= base_url() ?>funcionario/cadastrar" method="post">
                    <div class="box-body">
                        <form class="form-control">
                            <div class="form-group">
                                <label for="nome">Nome:</label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o nome..." required>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="cpf">CPF:</label>
                                    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Informe o CPF..." required>
                                </div>
                                <div class="col-md-4">
                                    <label for="rg">RG:</label>
                                    <input type="text" class="form-control" id="rg" name="rg" placeholder="Informe o RG..." required>
                                </div>
                                <div class="col-md-4">
                                    <label for="dataNascimento">Data Nascimento:</label>
                                    <input type="date" class="form-control" id="dataNascimento" name="dataNascimento" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="sexo">Sexo:</label>
                                    <input type="text" class="form-control" id="sexo" name="sexo" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="cep">CEP:</label>
                                    <input type="text" class="form-control" id="cep" name="cep" placeholder="Informe o CEP..." required>
                                </div>
                                <div class="col-md-7">
                                    <label for="endereco">Endereço:</label>
                                    <input type="text" class="form-control" id="endereco" name="endereco" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="bairro">Bairro:</label>
                                    <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Informe o Bairro..." required>
                                </div>
                                <div class="col-md-5">
                                    <label for="cidade">Cidade:</label>
                                    <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Informe a Cidade..." required>
                                </div>
                                <div class="col-md-2">
                                    <label for="estado">Estado:</label>
                                    <input type="text" class="form-control" id="estado" name="estado" placeholder="Estado.." required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="telefoneRes">Telefone Residencial:</label>
                                    <input type="text" class="form-control" id="telefoneRes" name="telefoneRes" placeholder="Telefone Residencial..." required>
                                </div>
                                <div class="col-md-4">
                                    <label for="telefoneCel">Telefone Celular:</label>
                                    <input type="text" class="form-control" id="telefoneCel" name="telefoneCel" placeholder="Telefone Celular..." required>
                                </div>
                                <div class="col-md-4">
                                    <label for="cargo">Cargo:</label>
                                    <input type="text" class="form-control" id="cargo" name="cargo" placeholder="Informe o cargo.." required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="status" ">Status: </label>
                                    <select id="status"class="form-control" name="status" required>
                                        <option value="0">---</opton>
                                        <option value="1">Ativo</opton>
                                        <option value="2">Inativo</opton>
                                    </select>
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

