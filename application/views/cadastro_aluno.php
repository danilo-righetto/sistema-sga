<?php $id_cliente = $this->uri->segment(3); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="col-md-10">
            <h1>
                Cadastro
                <small>de novo Aluno</small>
            </h1>
        </div>

        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Dados</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form action="<?= base_url() ?>aluno/cadastrar" method="post">
                    <div class="box-body">
                        <form class="form-control">
                            <div class="form-group">
                                <label for="nome">Nome do Aluno:</label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o nome..." required>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="dataNascimento">Data Nascimento:</label>
                                    <input type="date" class="form-control" id="dataNascimento" name="dataNascimento" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="escola">Escola:</label>
                                    
                                    <select id="escola" class="form-control" name="escola" required>
                                        <option value="0">---</opton>
                                        <option value=""></opton>
                                        <option value=""></opton>                                        
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="professor">Professor:</label>
                                    <input type="text" class="form-control" id="professor" name="professor" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="sala">Sala :</label>
                                    <input type="text" class="form-control" id="sala" name="sala" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="serie">Serie:</label>
                                    <input type="text" class="form-control" id="serie" name="serie" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="horarioEntrada">Horario Entrada:</label>
                                    <input type="text" class="form-control" id="horarioEntrada" name="horarioEntrada" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="horarioSaida">Horario Saída:</label>
                                    <input type="text" class="form-control" id="horarioSaida" name="horarioSaida" required>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-4">
                                    <label for="mendalidae">Mensalidade:</label>
                                    <input type="text" class="form-control" id="mensalidade" name="mensalidade" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="inicioContrato">Início Contrato:</label>
                                    <input type="date" class="form-control" id="inicioContrato" name="inicioContrato" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="terminoContrato">Término de Contrato:</label>
                                    <input type="date" class="form-control" id="terminoContrato" name="terminoContato" required>
                                </div>
                            </div>

                            <div style="text-align: right">
                                </br>
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                                <button type="reset" class="btn btn-default">Cancelar</button>
                            </div>


                        </form>
                    </div><!-- /.box -->
                    

            </div>


    </section>


</div><!-- /.content-wrapper -->
<footer class="main-footer">

    <strong>Copyright &copy; 2014-2015 Equipe OPE</a>.</strong> Todos os direitos reservados.
</footer>

