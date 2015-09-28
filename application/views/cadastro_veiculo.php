
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="col-md-10">
            <h1>
                Cadastro
                <small>de novo Veículo</small>
            </h1>
        </div>

        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Dados</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form action="<?= base_url() ?>veiculo/cadastrar" method="post">
                    <div class="box-body">
                        <form class="form-control">                            
                            <div class="row">
                                <div class="col-md-8">
                                    <label for="modelo">Modelo:</label>
                                    <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Informe o modelo do veículo..." required>
                                </div>
                                <div class="col-md-4">
                                    <label for="placa">Placa:</label>
                                    <input type="text" class="form-control" id="placa" name="placa" placeholder="Informe a placa..." required>
                                </div>                         

                            </div>
                            <div class="row">

                                <div class="col-md-5">
                                    <div class="formgroup">
                                        <label for="ano">Ano:</label>
                                        <input type="text" class="form-control" id="ano" name="ano" placeholder="Informe o ano..." required>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="formgroup">
                                        <label for="seguro">Seguro:</label>
                                        <input type="text" class="form-control" id="seguro" name="seguro" placeholder="Informe o seguro..." required>
                                    </div>
                                </div>                               

                            </div>


                            
                            </br>
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

