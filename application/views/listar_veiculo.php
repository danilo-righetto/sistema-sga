
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="col-md-10">
            <h1>
                Lista
                <small>de Veículos</small>
            </h1>
        </div>
        </br>
        </br>
        </br>

        <div class="col-md-2">
            <a class="btn btn-block btn-primary btn-block" href="<?= base_url() ?>veiculo/cadastro">Novo</a>
        </div>

    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">                           

                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title"><Strong>Veículos Cadastrados</strong></h3>
                        </div><!-- /.box-header -->
                        <div class="box-body no-padding">
                            <table class="table table-condensed">
                                <tr>
                                    
                                    <th align="center">Modelo</th>
                                    <th align="center">Placa</th>
                                    <th align="center">Ano</th>
                                    <th align="center"></th>
                                    <th align="center"></th>
                                </tr>
                                <?php foreach ($veiculos as $vei) {?>
                                
                                <tr>
                                    <td><?= $vei->modelo; ?></td>
                                    <td><?= $vei->placa; ?></td>
                                    <td><?= $vei->ano; ?></td>                               
                                    <td><a href="<?= base_url("veiculo/atualizar/".$vei->idVeiculo)?>" class="fa fa-fw fa-pencil-square-o" title="Atualizar"></td>
                                    <td><a href="<?= base_url("veiculo/excluir/".$vei->idVeiculo)?>" class="fa fa-fw fa-trash-o" title="Atualizar" onclick="return confirm('Deseja realmente excluir este Veículo?');"></td>
                                </tr>
                                <?php }?>
                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col -->          

            </div><!-- /.row -->

    </section><!-- /.content -->




</div><!-- /.content-wrapper -->
<footer class="main-footer">

    <strong>Copyright &copy; 2014-2015 Equipe OPE</a>.</strong> Todos os direitos reservados.
</footer>