
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="col-md-10">
            <h1>
                Editar
                <small>Escola</small>
            </h1>
        </div>

        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Dados</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form action="<?= base_url() ?>escola/salvar_atualizacao" method="post">
                    <input type="hidden" id="idEscola" name="idEscola" value="<?= $escola[0]->idEscola; ?>">
                    <div class="box-body">
                        <form class="form-control">
                            <div class="form-group">
                                <label for="nome">Nome:</label>
                                <input type="text" class="form-control" id="nome" name="nome" value="<?= $escola[0]->nome; ?>" required>
                            </div>
                            <div class="row">

                                <div class="col-md-4">
                                    <label for="nomeDiretor">Nome do diretor:</label>
                                    <input type="text" class="form-control" id="nomeDiretor" name="nomeDiretor" value="<?= $escola[0]->nomeDiretor; ?>"  required>
                                </div>
                                <div class="col-md-8">
                                    <label for="endereco">Enderço:</label>
                                    <input type="text" class="form-control" id="endereco" name="endereco" value="<?= $escola[0]->endereco; ?>" required>
                                </div>                         

                            </div>
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="formgroup">
                                        <label for="bairro">Bairro:</label>
                                        <input type="text" class="form-control" id="bairro" name="bairro" value="<?= $escola[0]->nome; ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="formgroup">
                                        <label for="telefone">Telefone:</label>
                                        <input type="text" class="form-control" id="telefone" name="telefone" value="<?= $escola[0]->telefone; ?>"required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="formgroup">
                                        <label for="email">Email:</label>
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $escola[0]->email; ?>"required>
                                    </div>
                                </div>

                            </div>


                            
                            </br>
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

