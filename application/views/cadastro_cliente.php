
<script src="http://code.jquery.com/jquery-1.7.1.min.js" type="text/javascript"></script>
<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>
<script src="<?= base_url() ?>dist/js/gmaps.js" type="text/javascript"></script>
<script src="<?= base_url() ?>dist/js/cep.js" type="text/javascript"></script>
<link href="<?= base_url() ?>dist/css/main.css" rel="stylesheet" />

<script>
    $(function () {
        wscep({map: 'map1', auto: true});
    })
</script>




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
                <form action="<?= base_url() ?>cliente/cadastrar" method="post">
                    <div class="box-body">
                        <form class="form-control">
                            <div class="form-group">
                                <label for="nome">Nome:</label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o nome..." required>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="cpf">CPF:</label>
                                    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Informe o CPF..." required>
                                </div>
                                <div class="col-md-4">
                                    <label for="rg">RG:</label>
                                    <input type="text" class="form-control" id="rg" name="rg" placeholder="Informe o RG..." required>
                                </div>
                                <div class="col-md-4">
                                    <label for="dataNascimento">Data Nascimento:</label>
                                    <input type="date" class="form-control" id="dataNascimento" name="dataNascimento" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="sexo">Sexo:</label>

                                    <select id="sexo" class="form-control" name="sexo" required>
                                        <option value="0">---</opton>
                                        <option value="M">Masculino</opton>
                                        <option value="F">Feminino</opton>                                        
                                    </select>
                                </div>
                                <div class="col-md-3 cep-label">
                                    <label for="cep">CEP:</label>
                                    <input type="text" class="form-control" id="cep" name="cep"  placeholder="CEP..." required>
                                </div>
                                <div class="col-md-7">
                                    <label for="endereco">Endereço:</label>
                                    <input type="text" class="form-control" id="endereco" name="endereco" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="numero">Número:</label>
                                    <input type="text" class="form-control" id="numero" name="numero" placeholder="Número..." required>
                                </div>
                                <div class="col-md-4">
                                    <label for="bairro">Bairro:</label>
                                    <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Informe o Bairro..." required>
                                </div>
                                <div class="col-md-4">
                                    <label for="cidade">Cidade:</label>
                                    <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Informe a Cidade..." required>
                                </div>
                                <div class="col-md-2">
                                    <label for="uf">Estado:</label>
                                    <input type="text" class="form-control" id="uf" name="uf" placeholder="UF.." required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="telefoneRes">Telefone Residencial:</label>
                                    <input type="text" class="form-control" id="telefoneRes" name="telefoneRes" placeholder="Telefone Residencial..." required>
                                </div>
                                <div class="col-md-4">
                                    <label for="telefoneCel">Telefone Celular:</label>
                                    <input type="text" class="form-control" id="telefoneCel" name="telefoneCel" placeholder="Telefone Celular..." required>
                                </div>
                                <div class="col-md-4">
                                    <label for="telCOmercial">Telefone Comercial:</label>
                                    <input type="text" class="form-control" id="telComercial" name="telCmercial" placeholder="Telefone Comercial.." required>
                                </div>
                            </div>



                    </div>
                    <div style="text-align: right">
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

