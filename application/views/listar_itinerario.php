
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="col-md-10">
            <h1>
                Lista
                <small>de Itinerários</small>
            </h1>
        </div>
        </br>
        </br>
        </br>

        <div class="col-md-2">
            <a class="btn btn-block btn-primary btn-block" href="<?= base_url() ?>itinerario/cadastro">Novo</a>
        </div>

    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">                           

                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title"><Strong>Itinerários Cadastrados</strong></h3>
                        </div><!-- /.box-header -->
                        <div class="box-body no-padding">
                            <table class="table table-condensed">
                                <tr>
                                    
                                    <th align="center">Itinerário</th>
                                    <th align="center">Horário Part. Ida</th>
                                    <th align="center">Horário Cheg. Ida</th>
                                    <th align="center">Horário Part. Volta</th>
                                    <th align="center">Horário Cheg. Volta</th>
                                    <th align="center">Rota</th>
                                    <th align="center"></th>
                                    <th align="center"></th>
                                </tr>
                                <?php foreach ($itinerarios as $iti) {?>
                                
                                <tr>
                                    <td align="center" ><?= $iti->itinerario; ?></td>
                                    <td align="center" ><?= $iti->horario_Part_Ida; ?></td>
                                    <td align="center"><?= $iti->horario_Cheg_Ida; ?></td>
                                    <td align="center"><?= $iti->horario_Part_Volta; ?></td>
                                    <td align="center"><?= $iti->horario_Cheg_Volta; ?></td>
                                    <td align="center"><a href="<?= base_url()?>rota"><span class="glyphicon glyphicon-road" aria-hidden="true" title="Visualizar Rota" ></span></td>
                                    <td align="center"><a href="<?= base_url("itinerario/atualizar/".$iti->idItinerario)?>" class="fa fa-fw fa-pencil-square-o" title="Atualizar"></td>
                                    <td align="center"><a href="<?= base_url("itinerario/excluir/".$iti->idItinerario)?>" class="fa fa-fw fa-trash-o" title="Excluir" onclick="return confirm('Deseja realmente excluir este Itinerário?');"></td>
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