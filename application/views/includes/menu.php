
<body class="skin-blue sidebar-mini">
    <div class="wrapper">      
        <header class="main-header">
            <!-- Logo -->
            <a href="http://localhost/sistema/dashboard" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>SGA</b></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>SGA</b></span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="http://www.gmail.com" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class="label label-success"></span>
                            </a>

                        </li>


                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?= base_url(); ?>dist/img/avatar5.png" class="user-image" alt="User Image"/>
                                <span class="hidden-xs">Olá, seja bem vindo!</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?= base_url(); ?>dist/img/avatar5.png" class="img-circle" alt="User Image" />

                                <li class="user-footer">                    
                                    <div class="pull-right">
                                        <a href="<?= base_url() ?>dashboard/login" class="btn btn-default btn-default">Logout</a>
                                    </div>
                                </li>


                                <!-- Menu Footer-->

                            </ul>
                        </li>


                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?= base_url(); ?>dist/img/avatar5.png" class="img-circle" alt="User Image" />
                    </div>
                    <div class="pull-left info">


                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- search form -->
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search..."/>
                        <span class="input-group-btn">
                            <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </form>
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li class="header">MENU</li>
                    <li class="active treeview">
                        <a href="#">
                            <i class="glyphicon glyphicon-user"></i> <span>Cliente</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active"><a href="<?= base_url() ?>cliente/cadastro"><i class="glyphicon glyphicon-user"></i> Cadastro de Cliente</a></li>
                            <li><a href="<?= base_url() ?>cliente"><i class="glyphicon glyphicon-user"></i> Listar Cliente</a></li>
                        </ul>
                    </li>          

                    <li class="active treeview">
                        <a href="#">
                            <i class="glyphicon glyphicon-education"></i> <span>Aluno</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">                
                            <li><a href="<?= base_url() ?>aluno"><i class="glyphicon glyphicon-education"></i> Listar Aluno</a></li>
                        </ul>
                    </li>
                    <li class="active treeview">
                        <a href="#">
                            <i class="glyphicon glyphicon-home"></i> <span>Escola</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">                
                            <li class="active"><a href="<?= base_url() ?>escola/cadastro"><i class="glyphicon glyphicon-home"></i> Cadastro de Escola</a></li>
                            <li><a href="<?= base_url() ?>escola"><i class="glyphicon glyphicon-home"></i> Listar Escola</a></li>
                        </ul>
                    </li>
                    <li class="active treeview">
                        <a href="#">
                            <i class="glyphicon glyphicon-bed"></i> <span>Veículo</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">                
                            <li class="active"><a href="<?= base_url() ?>veiculo/cadastro"><i class="glyphicon glyphicon-bed"></i> Cadastro de Veículo</a></li>
                            <li><a href="<?= base_url() ?>veiculo"><i class="glyphicon glyphicon-bed"></i> Listar Veículo</a></li>
                        </ul>
                    </li>            
                    <li class="active treeview">
                        <a href="#">
                            <i class="glyphicon glyphicon-user"></i> <span>Funcionário</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">                
                            <li class="active"><a href="<?= base_url() ?>funcionario/cadastro"><i class="glyphicon glyphicon-user"></i> Cadastro de Funcionário</a></li>
                            <li><a href="<?= base_url() ?>funcionario"><i class="glyphicon glyphicon-user"></i> Listar Funcionário</a></li>
                        </ul>
                    </li>
                    <li class="active treeview">
                        <a href="#">
                            <i class="glyphicon glyphicon-user"></i> <span>Usuário</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">                
                            <li class="active"><a href="<?= base_url() ?>usuario/cadastro"><i class="glyphicon glyphicon-user"></i> Cadastro de Usuário</a></li>
                            <li><a href="<?= base_url() ?>usuario"><i class="glyphicon glyphicon-user"></i> Listar Usuário</a></li>
                        </ul>
                    </li>
                    <li class="active treeview">
                        <a href="#">
                            <i class="glyphicon glyphicon-road"></i> <span>Itinerário</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">                
                            <li class="active"><a href="<?= base_url() ?>itinerario/cadastro"><i class="glyphicon glyphicon-road"></i> Cadastro de Itinerário</a></li>
                            <li><a href="<?= base_url() ?>itinerario"><i class="glyphicon glyphicon-road"></i> Listar Itinerário</a></li>
                        </ul>
                    </li>
                </ul>>
            </section>
            <!-- /.sidebar -->
        </aside>