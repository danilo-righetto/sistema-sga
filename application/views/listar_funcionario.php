
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="col-md-10">
            <h1>
                Lista
                <small>de Funcionários</small>
            </h1>
        </div>
        </br>
        </br>
        </br>

        <div class="col-md-2">
            <a class="btn btn-block btn-primary btn-block" href="<?= base_url() ?>funcionario/cadastro">Novo</a>
        </div>

    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">                           

                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title"><Strong>Funcionários Cadastrados</strong></h3>
                        </div><!-- /.box-header -->
                        <div class="box-body no-padding">
                            <table class="table table-condensed">
                                <tr>
                                    
                                    <th align="center">Nome do Funcionário</th>
                                    <th align="center">Cargo</th>
                                    <th align="center">Status</th>
                                    <th align="center"></th>
                                    <th align="center"></th>
                                </tr>
                                <?php foreach ($funcionarios as $fun) {?>
                                
                                <tr>
                                    <td><?= $fun->nome; ?></td>
                                    <td><?= $fun->cargo; ?></td>
                                    <td><?= $fun->status==1?'Ativo':'Inativo'; ?></td>                               
                                    <td><a href="<?= base_url("funcionario/atualizar/".$fun->idFuncionario)?>" class="fa fa-fw fa-pencil-square-o" title="Atualizar"></td>
                                    <td><a href="<?= base_url("funcionario/excluir/".$fun->idFuncionario)?>" class="fa fa-fw fa-trash-o" title="Atualizar" onclick="return confirm('Deseja realmente excluir este Funcionário?');"></td>
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