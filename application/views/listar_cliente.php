
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="col-md-10">
            <h1>
                Lista
                <small>de Clientes</small>
            </h1>
        </div>
        </br>
        </br>
        </br>

        <div class="col-md-2">
            <a class="btn btn-block btn-primary btn-block" href="<?= base_url() ?>cliente/cadastro">Novo</a>
        </div>

    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">                           

                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title"><Strong>Clientes Cadastrados</strong></h3>
                        </div><!-- /.box-header -->
                        <div class="box-body no-padding">
                            <table class="table table-condensed">
                                <tr>
                                    
                                    <th>Nome do Cliente</th>
                                    <th>Endereco</th>
                                    <th>Telefone</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <?php foreach ($clientes as $cli) {?>
                                
                                <tr>
                                    <td><?= $cli->nome; ?></td>
                                    <td><?= $cli->endereco; ?></td>
                                    <td><?= $cli->telefoneRes; ?></td>                               
                                    <td><a href="<?= base_url("cliente/atualizar/".$cli->idCliente)?>" class="fa fa-fw fa-pencil-square-o" title="Atualizar"></td>
                                    <td><a href="<?= base_url("cliente/excluir/".$cli->idCliente)?>" class="fa fa-fw fa-trash-o" title="Atualizar" onclick="return confirm('Deseja realmente excluir este Cliente?');"></td>
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