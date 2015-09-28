
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="col-md-10">
            <h1>
                Cadastro
                <small>de novo Cliente</small>
            </h1>
        </div>

        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Dados</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form action="<?= base_url() ?>cliente/salvar_atualizacao" method="post">
                    <input type="hidden" id="idCliente" name="idCliente" value="<?= $cliente[0]->idCliente; ?>">
                    <div class="box-body">
                        <form class="form-control">
                            <div class="form-group">
                                <label for="nome">Nome:</label>
                                <input type="text" class="form-control" id="nome" name="nome" value="<?= $cliente[0]->nome; ?>" required>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="cpf">CPF:</label>
                                    <input type="text" class="form-control" id="cpf" name="cpf" value="<?= $cliente[0]->cpf; ?>" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="rg">RG:</label>
                                    <input type="text" class="form-control" id="rg" name="rg" value="<?= $cliente[0]->rg; ?>" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="dataNascimento">Data Nascimento:</label>
                                    <input type="date" class="form-control" id="dataNascimento" value="<?= $cliente[0]->dataNascimento; ?>" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="sexo">Sexo:</label>
                                    <input type="text" class="form-control" id="sexo" name="sexo" value="<?= $cliente[0]->sexo; ?>" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="cep">CEP:</label>
                                    <input type="text" class="form-control" id="cep" name="cep" value="<?= $cliente[0]->cep; ?>" required>
                                </div>
                                <div class="col-md-7">
                                    <label for="endereco">Endereço:</label>
                                    <input type="text" class="form-control" id="endereco" name="endereco" value="<?= $cliente[0]->endereco; ?>" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="bairro">Bairro:</label>
                                    <input type="text" class="form-control" id="bairro" name="bairro" value="<?= $cliente[0]->bairro; ?>" required>
                                </div>
                                <div class="col-md-5">
                                    <label for="cidade">Cidade:</label>
                                    <input type="text" class="form-control" id="cidade" name="cidade" value="<?= $cliente[0]->cidade; ?>" required>
                                </div>
                                <div class="col-md-2">
                                    <label for="estado">Estado:</label>
                                    <input type="text" class="form-control" id="estado" name="estado" value="<?= $cliente[0]->estado; ?>" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="telefoneRes">Telefone Residencial:</label>
                                    <input type="text" class="form-control" id="telefoneRes" name="telefoneRes" value="<?= $cliente[0]->telefoneRes; ?>" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="telefoneCel">Telefone Celular:</label>
                                    <input type="text" class="form-control" id="telefoneCel" name="telefoneCel"  value="<?= $cliente[0]->telefoneCel; ?>" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="telComercial">Telefone Comercial:</label>
                                    <input type="text" class="form-control" id="telComercial" name="telComercial" value="<?= $cliente[0]->telComercial; ?>" required>
                                </div>
                            </div>                           

                    </div>
                    <div style="text-align: right">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <button type="reset" class="btn btn-default">Cancelar</button>
                        
                </form>
            </div><!-- /.box -->


        </div>


    </section>


</div><!-- /.content-wrapper -->
<footer class="main-footer">

    <strong>Copyright &copy; 2014-2015 Equipe OPE</a>.</strong> Todos os direitos reservados.
</footer>

