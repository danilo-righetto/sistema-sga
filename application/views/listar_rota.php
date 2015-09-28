
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="col-md-10">
            <h1>
                Rotas
                
            </h1>
        </div>
        </br>
        </br>
        </br>

        

    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">                           

                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title"><Strong>Lista de Endereços</strong></h3>
                        </div><!-- /.box-header -->
                        <div class="box-body no-padding">
                            <table class="table table-condensed">
                                <tr>
                                    
                                    <th>Horário</th>
                                    <th>Aluno</th>
                                    <th>Endereço</th>
                                    <th>Escola</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <?php foreach ($usuarios as $usu) {?>
                                
                                <tr>
                                    <td><?= $usu->nome; ?></td>
                                    <td><?= $usu->nivel; ?></td>
                                    <td><?= $usu->status; ?></td>                               
                                    <td align="center"><a href="<?= base_url("usuario/atualizar/".$usu->idUsuario)?>" class="fa fa-fw fa-pencil-square-o" title="Atualizar"></td>
                                    <td align="center"><a href="<?= base_url("usuario/excluir/".$usu->idUsuario)?>" class="fa fa-fw fa-trash-o" title="Atualizar" onclick="return confirm('Deseja realmente excluir este Aluno desta Rota?');"></td>
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