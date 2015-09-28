
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="col-md-10">
            <h1>
                Cadastro
                <small>de novo Itinerário</small>
            </h1>
        </div>

        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Dados</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form action="<?= base_url() ?>itinerario/cadastrar" method="post">                  
                    <div class="box-body">
                        <form class="form-control">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="itinerario">Itinerário:</label>
                                    <input type="text" class="form-control" id="itinerario" name="itinerario" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="horario_Part_Ida">Horário Partida Ida:</label>
                                    <input type="text" class="form-control" id="horario_Part_Ida" name="horario_Part_Ida" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="horario_Cheg_Ida">Horario Chegada Ida:</label>
                                    <input type="text" class="form-control" id="horario_Cheg_Ida" name="horario_Cheg_Ida" required>
                                </div>                                
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="horario_Part_Volta">Horário Partida Volta:</label>
                                    <input type="text" class="form-control" id="horario_Part_Volta" name="horario_Part_Volta" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="horario_Cheg_Volta">Horario Chegada Volta:</label>
                                    <input type="text" class="form-control" id="horario_Cheg_Volta" name="horario_Cheg_Volta" required>
                                </div>                                
                            </div>
                            <div class="row">
                                
                                <div class="col-md-2">
                                    <label for="funcionario">Motorista: </label>
                                    <select id="funcionario" class="form-control" name="funcionario" required>
                                        <option value="0">---</opton>
                                        <option value="Eraldo Alves de Lima">Eraldo Alves de Lima</opton>
                                        <option value="João Carlos da Silveira">João Carlos da Silveira</opton>
                                    </select>
                                </div> 
                                <div class="col-md-2">
                                    <label for="monitor" ">Monitor: </label>
                                    <select id="status"class="form-control" name="status" required>
                                        <option value="0">---</opton>
                                        <option value="Tayse Silva de Lima">Tayse Silva de Lima</opton>
                                        <option value="Juliana de Almeida Sanches">Juliana de Almeida Sanches</opton>
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

