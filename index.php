<!DOCTYPE html>
<html>
 
<head>
    <title>Lem Urbanismo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, max-scale=1.0">
    <link rel="stylesheet" href="indexStyle.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand logo" href="#">
            <img src="imagens/logo1.png" width="250px" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin/View/informativo.php">Informativos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin/View/download.php">Downloads</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle='modal' data-target='#modal_cadastro'>Cadastro</a>
                </li>
            </ul>
        </div>
        <div class="login-container">
            <a class="nav-link" href="admin/View/area_profissional.php"><i class="fas fa-user-circle"></i> Login</a>
        </div>
    </nav>
    <!-- fim Navbar -->
    <!-- inicio redes rociais -->
    <div class="redes-container">
        <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
        <a href="#"><i class="fab fa-youtube fa-2x"></i></a>
    </div>
    <!-- fim redes rociais -->
    <!-- inicio hero -->
    <section class="lem">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>LEM</h1>
                    <h1>URBANISMO</h1>
                    <hr class="green-line">
                    <p class="text-justify"><b>Secretaria Municipal de Infraestrutura e Urbanismo</b><br><br>
                        A Secretaria Municipal de Infraestrutura e Urbanismo tem por finalidade desempenhar as
                        funções do Município em matéria de obras, serviços públicos e desenvolvimento urbano.<br><br>
                        O Sistema <b>LEM URBANISMO</b> faz parte da Secretaria Municipal de Infraestrutura e Urbanismo e
                        tem por objetivo virtualizar todas as etapas dos processos de Alvará de Construção,
                        Regularização, Acréscimo de Área, Redimensionamentos (desmembramento e
                        remembramento) e Habite-se. <br><br>
                        O profissionalresponsável técnico pelo processo providenciará o cadastro neste sistema gerando
                        o número para acompanhamento do mesmo. Posteriormente o respectivo requerente deverá
                        oficializar o protocolo de forma física, através da apresentação de todos os documentos
                        necessários em cada tipo de solicitação (conforme checklist na aba “informativos”)</p>
                </div>
                <div class="col-md-4">
                    <div class="img-container">
                        <div class="circle">
                            <a href="admin/View/area_profissional.php"> <img src="imagens/40385.png" alt="Imagem"> </a>
                        </div>
                    </div>
                </div><br><br>

                <div class="row2" style="margin-top: 80px; margin-left: 50px;">
                    <div class="circle2" style="height: 60px;">
                        <div class="icon-container" style="margin-top: -30px;">

                            <i class="bi bi-info-circle">&nbsp;<a href="admin/View/informativo.php" style="text-decoration:none; font-size: 30px;">Informativos</a></i>
                        </div>
                        <div class="text-container">
                        </div>
                    </div>
                    <div class="circle2" style="height: 60px;">
                        <div class="icon-container" style="margin-top: -30px;">

                            <i class="bi bi-file-earmark-arrow-down">&nbsp;<a href="admin/View/download.php" style="text-decoration:none; font-size: 30px;">Downloads</a></i>
                        </div>
                        <div class="text-container">
                        </div>
                    </div>
                    <div class="circle2" style="height: 60px;">
                        <div class="icon-container" style="margin-top: -30px;">

                            <i class="bi bi-person-plus">&nbsp;<a href="admin/View/informativo.php" style="text-decoration:none; font-size: 30px;">Cadastro</a></i>
                        </div>
                        <div class="text-container">

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- fim hero -->

    <!-- Inicio do Modal - Cadastro de Propietário-->
    <div class='modal fade bd-example-modal-lg' id='modal_cadastro'>
        <div class='modal-dialog modal-lg'>
            <div class='modal-content'>
                <div class='modal-header' style="background-color: #DCDCDC;">
                    <h4 class='modal-title' style="margin-left: 300px;">LEM URBANISMO</h4>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div><br>

                <!-- Fim do Modal - Cadastro Dados do Projeto -->
                <div class='modal-body'>
                    <form>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-primary card-outline">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            <!--i class="fas fa-edit"></i-->
                                            Escolha o Tipo de Cadastro
                                        </h3>
                                    </div>
                                    <div class="card-body pad table-responsive">
                                        <!--p>Escolha <code></code></p-->
                                        <table class="table table-bordered text-center">
                                            <!--tr>
                                                <th>Normal</th>
                                            </tr-->
                                            <tr>
                                                <td>
                                                    <button type="button" class="btn btn-block btn-outline-primary" data-toggle='modal' data-target='#modal_cadastro_engenheiro'>Engenheiro</button>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-block btn-outline-primary" data-toggle='modal' data-target='#modal_cadastro_arquiteto'>Arquiteto</button>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-block btn-outline-primary" data-toggle='modal' data-target='#modal_cadastro_tecnico'>Técnico</button>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-block btn-outline-primary" data-toggle='modal' data-target='#modal_cadastro_contribuinte'>Contribuinte</button>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span id="aparecepropietario"></span>
                        <span id="campo_proprietario"></span>
                    </form>
                </div>
                <!--Fim Form Modal Cadastro Propietário-->
            </div>
        </div>
    </div>
    <!-- Fim do Modal - Cadastro Dados do Projeto -->

    <!-- Inicio do Modal - Tipos de Cadastro - Modal Arquiteto - Pagina Inicial -->
    <div class='modal fade bd-example-modal-lg' id='modal_cadastro_engenheiro'>
        <div class='modal-dialog modal-lg'>
            <div class='modal-content'>
                <div class='modal-header' style="background-color: #DCDCDC;">
                    <h4 class='modal-title' style="margin-left: 300px;">LEM URBANISMO</h4>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div><br>

                <!-- Inicio Modal Form - Cadastro De Engenheiro -->
                <div class='modal-body'>
                    <form>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card text-white bg-info card-outline">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            <i class="fas fa-edit"></i>
                                            Cadastro Engenheiro
                                        </h3>
                                    </div>
                                </div><br>
                                <h4 style="text-align: center;">Dados Pessoais</h4>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="exampleInputEmail1">Nome</label>
                                        <div class="input-group ">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Digite o Nome" name="nome_engenheiro[]" id="nome_engenheiro">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="exampleInputcpf">CPF</label>
                                        <input type="text" class="form-control" id="cpf_engenheiro" placeholder="Digite o cpf" name="cpf_engenheiro[]" required>
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="exampleInputcpf">CREA</label>
                                        <input type="text" class="form-control" id="crea_engenheiro" placeholder="Digite o crea" name="crea_engenheiro[]" required>
                                    </div>
                                    <div class="col-sm-5"><br>
                                        <label for="exampleInputEmail1">Email</label>
                                        <div class="input-group ">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Digite o Email" name="email_engenheiro[]" id="email_engenheiro">
                                        </div>
                                    </div>
                                    <div class="col-sm-4"><br>
                                        <label>Contato:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                            </div>
                                            <input type="text" name="telefone_engenheiro[]" class="form-control" id="telefone_engenheiro">
                                        </div>
                                    </div>
                                    <div class="col-sm-3"><br>
                                        <label>Senha:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                            </div>
                                            <input type="password" name="telefone_engenheiro[]" class="form-control" id="telefone_engenheiro">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <hr>
                                <h4 style="text-align: center;">Endereço</h4>
                                <div class="row" style="margin-left: 5px;">
                                    <div class="col-sm-6" style="margin-left: -15px;">
                                        <label>Estado</label>
                                        <div class="input-group mb-3">
                                            <input type="text" name="telefone_engenheiro[]" class="form-control" id="telefone_engenheiro">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Cidade</label>
                                        <div class="input-group mb-3">
                                            <input type="text" name="cidade_engenheiro[]" class="form-control" id="cidade_engenheiro">
                                        </div>
                                    </div>
                                    <div class="col-sm-6" style="margin-left: -15px;">
                                        <label>Endereço</label>
                                        <div class="input-group mb-3">
                                            <input type="text" name="endereco_engenheiro[]" class="form-control" id="endereco_engenheiro">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Bairro</label>
                                        <div class="input-group mb-3">
                                            <input type="text" name="bairro_engenheiro[]" class="form-control" id="bairro_engenheiro">
                                        </div>
                                    </div>
                                    <div class="col-sm-3" style="margin-left: -15px;">
                                        <label>Cep</label>
                                        <div class="input-group">
                                            <input type="text" name="cep_engenheiro[]" class="form-control" id="cep_engenheiro">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <label>Número</label>
                                        <div class="input-group">
                                            <input type="text" name="numero_engenheiro[]" class="form-control" id="numero_engenheiro">
                                        </div>
                                    </div>
                                </div><br>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success" id="btn_cad_alvara" onclick="submit_post_generico('../Controller/Cad_propietario.php,form_cad_alvara,btn_cad_alvara')">Cadastrar</button>
                                </div>
                            </div>
                        </div>
                        <span id="aparecepropietario"></span>
                        <span id="campo_proprietario"></span>
                    </form>
                </div>
                <!-- Fim Modal Form - Cadastro De Engenheiro -->
            </div>
        </div>
    </div>
    <!-- Fim do Modal - Tipos de Cadastro - Modal Arquiteto - Pagina Inicial -->
    <!-- Inicio do Modal - Tipos de Cadastro - Modal Arquiteto - Pagina Inicial -->
    <div class='modal fade bd-example-modal-lg' id='modal_cadastro_arquiteto'>
        <div class='modal-dialog modal-lg'>
            <div class='modal-content'>
                <div class='modal-header' style="background-color: #DCDCDC;">
                    <h4 class='modal-title' style="margin-left: 300px;">LEM URBANISMO</h4>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div><br>
                <!-- Inicio Modal Form - Cadastro De Arquiteto -->
                <div class='modal-body'>
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card text-white bg-info card-outline">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            <i class="fas fa-edit"></i>
                                            Cadastro Arquiteto
                                        </h3>
                                    </div>
                                </div><br>
                                <h4 style="text-align: center;">Dados Pessoais</h4>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="exampleInputEmail1">Nome</label>
                                        <div class="input-group ">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Digite o Nome" name="nome_arquiteto[]" id="nome_arquiteto">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="exampleInputcpf">CPF</label>
                                        <input type="text" class="form-control" id="cpf_arquiteto" placeholder="Digite o cpf" name="cpf_arquiteto[]" required>
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="exampleInputcpf">CREA</label>
                                        <input type="text" class="form-control" id="crea_arquiteto" placeholder="Digite o crea" name="crea_arquiteto[]" required>
                                    </div>
                                    <div class="col-sm-5"><br>
                                        <label for="exampleInputEmail1">Email</label>
                                        <div class="input-group ">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Digite o Email" name="email_arquiteto[]" id="email_arquiteto">
                                        </div>
                                    </div>
                                    <div class="col-sm-4"><br>
                                        <label>Contato:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                            </div>
                                            <input type="text" name="telefone_arquiteto[]" class="form-control" id="telefone_arquiteto">
                                        </div>
                                    </div>
                                    <div class="col-sm-3"><br>
                                        <label>Senha:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                            </div>
                                            <input type="password" name="telefone_arquiteto[]" class="form-control" id="telefone_arquiteto">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <hr>
                                <h4 style="text-align: center;">Endereço</h4>
                                <div class="row" style="margin-left: 5px;">
                                    <div class="col-sm-6" style="margin-left: -15px;">
                                        <label>Estado</label>
                                        <div class="input-group mb-3">
                                            <input type="text" name="telefone_arquiteto[]" class="form-control" id="telefone_arquiteto">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Cidade</label>
                                        <div class="input-group mb-3">
                                            <input type="text" name="cidade_arquiteto[]" class="form-control" id="cidade_arquiteto">
                                        </div>
                                    </div>
                                    <div class="col-sm-6" style="margin-left: -15px;">
                                        <label>Endereço</label>
                                        <div class="input-group mb-3">
                                            <input type="text" name="endereco_arquiteto[]" class="form-control" id="endereco_arquiteto">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Bairro</label>
                                        <div class="input-group mb-3">
                                            <input type="text" name="bairro_arquiteto[]" class="form-control" id="bairro_arquiteto">
                                        </div>
                                    </div>
                                    <div class="col-sm-3" style="margin-left: -15px;">
                                        <label>Cep</label>
                                        <div class="input-group">
                                            <input type="text" name="cep_arquiteto[]" class="form-control" id="cep_arquiteto">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <label>Número</label>
                                        <div class="input-group">
                                            <input type="text" name="numero_arquiteto[]" class="form-control" id="numero_arquiteto">
                                        </div>
                                    </div>
                                </div><br>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success" id="btn_cad_alvara" onclick="submit_post_generico('../Controller/Cad_propietario.php,form_cad_alvara,btn_cad_alvara')">Cadastrar</button>
                                </div>
                            </div>
                        </div>
                        <span id="aparecepropietario"></span>
                        <span id="campo_proprietario"></span>
                    </form>
                </div>
                <!-- Fim Modal Form - Cadastro De Arquiteto -->
            </div>
        </div>
    </div>
    <!-- Fim do Modal - Tipos de Cadastro - Modal Arquiteto - Pagina Inicial -->
    <!-- Inicio do Modal - Tipos de Cadastro - Modal Técnico - Pagina Inicial -->
    <div class='modal fade bd-example-modal-lg' id='modal_cadastro_tecnico'>
        <div class='modal-dialog modal-lg'>
            <div class='modal-content'>
                <div class='modal-header' style="background-color: #DCDCDC;">
                    <h4 class='modal-title' style="margin-left: 300px;">LEM URBANISMO</h4>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div><br>

                <!-- Inicio Modal Form - Cadastro De Técnico -->
                <div class='modal-body'>
                    <form>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card text-white bg-info card-outline">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            <i class="fas fa-edit"></i>
                                            Cadastro Técnico
                                        </h3>
                                    </div>
                                </div><br>
                                <h4 style="text-align: center;">Dados Pessoais</h4>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="exampleInputEmail1">Nome</label>
                                        <div class="input-group ">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Digite o Nome" name="nome_tecnico[]" id="nome_tecnico">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="exampleInputcpf">CPF</label>
                                        <input type="text" class="form-control" id="cpf_tecnico" placeholder="Digite o cpf" name="cpf_tecnico[]" required>
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="exampleInputcpf">CREA</label>
                                        <input type="text" class="form-control" id="crea_tecnico" placeholder="Digite o crea" name="crea_tecnico[]" required>
                                    </div>
                                    <div class="col-sm-5"><br>
                                        <label for="exampleInputEmail1">Email</label>
                                        <div class="input-group ">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Digite o Email" name="email_tecnico[]" id="email_tecnico">
                                        </div>
                                    </div>
                                    <div class="col-sm-4"><br>
                                        <label>Contato:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                            </div>
                                            <input type="text" name="telefone_tecnico[]" class="form-control" id="telefone_tecnico">
                                        </div>
                                    </div>
                                    <div class="col-sm-3"><br>
                                        <label>Senha:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                            </div>
                                            <input type="password" name="telefone_tecnico[]" class="form-control" id="telefone_tecnico">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <hr>
                                <h4 style="text-align: center;">Endereço</h4>
                                <div class="row" style="margin-left: 5px;">
                                    <div class="col-sm-6" style="margin-left: -15px;">
                                        <label>Estado</label>
                                        <div class="input-group mb-3">
                                            <input type="text" name="telefone_tecnico[]" class="form-control" id="telefone_tecnico">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Cidade</label>
                                        <div class="input-group mb-3">
                                            <input type="text" name="cidade_tecnico[]" class="form-control" id="cidade_tecnico">
                                        </div>
                                    </div>
                                    <div class="col-sm-6" style="margin-left: -15px;">
                                        <label>Endereço</label>
                                        <div class="input-group mb-3">
                                            <input type="text" name="endereco_tecnico[]" class="form-control" id="endereco_tecnico">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Bairro</label>
                                        <div class="input-group mb-3">
                                            <input type="text" name="bairro_tecnico[]" class="form-control" id="bairro_tecnico">
                                        </div>
                                    </div>
                                    <div class="col-sm-3" style="margin-left: -15px;">
                                        <label>Cep</label>
                                        <div class="input-group">
                                            <input type="text" name="cep_tecnico[]" class="form-control" id="cep_tecnico">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <label>Número</label>
                                        <div class="input-group">
                                            <input type="text" name="numero_tecnico[]" class="form-control" id="numero_tecnico">
                                        </div>
                                    </div>
                                </div><br>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success" id="btn_cad_alvara" onclick="submit_post_generico('../Controller/Cad_propietario.php,form_cad_alvara,btn_cad_alvara')">Cadastrar</button>
                                    <!--button type="submit" class="btn btn-primary" style="margin-left: 500px;">Fechar</button-->
                                </div>
                            </div>
                        </div>
                        <span id="aparecepropietario"></span>
                        <span id="campo_proprietario"></span>
                    </form>
                </div>
                <!-- Fim Modal Form - Cadastro De Técnico -->

            </div>
        </div>
    </div>
    <!-- Fim do Modal - Tipos de Cadastro - Modal Técnico - Pagina Inicial -->

    <!-- Inicio do Modal - Tipos de Cadastro - Modal Contruinte - Pagina Inicial -->
    <div class='modal fade bd-example-modal-lg' id='modal_cadastro_contribuinte'>
        <div class='modal-dialog modal-lg'>
            <div class='modal-content'>
                <div class='modal-header' style="background-color: #DCDCDC;">
                    <h4 class='modal-title' style="margin-left: 300px;">LEM URBANISMO</h4>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div><br>

                <!-- Inicio Modal Form - Cadastro De Técnico -->
                <div class='modal-body'>
                    <form>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card text-white bg-info card-outline">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            <i class="fas fa-edit"></i>
                                            Cadastro Contribuinte
                                        </h3>
                                    </div>
                                </div><br>
                                <h4 style="text-align: center;">Dados Pessoais</h4>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <label for="exampleInputEmail1">Nome</label>
                                        <div class="input-group ">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Digite o Nome" name="nome_contribuinte[]" id="nome_contribuinte">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="exampleInputcpf">CPF</label>
                                        <input type="text" class="form-control" id="cpf_contribuinte" placeholder="Digite o cpf" name="cpf_contribuinte[]" required>
                                    </div>

                                    <div class="col-sm-8"><br>
                                        <label for="exampleInputEmail1">Email</label>
                                        <div class="input-group ">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Digite o Email" name="email_contribuinte[]" id="email_contribuinte">
                                        </div>
                                    </div>

                                    <div class="col-sm-4"><br>
                                        <label>Contato:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                            </div>
                                            <input type="text" name="telefone_contribuinte[]" class="form-control" id="telefone_contribuinte">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <hr>
                                <h4 style="text-align: center;">Endereço</h4>
                                <div class="row" style="margin-left: 5px;">
                                    <div class="col-sm-4" style="margin-left: -15px;">
                                        <label>Estado</label>
                                        <div class="input-group mb-3">
                                            <input type="text" name="telefone_contribuinte[]" class="form-control" id="telefone_contribuinte">
                                        </div>
                                    </div>

                                    <div class="col-sm-8">
                                        <label>Cidade</label>
                                        <div class="input-group mb-3">
                                            <input type="text" name="cidade_contribuinte[]" class="form-control" id="cidade_contribuinte">
                                        </div>
                                    </div>

                                    <div class="col-sm-8" style="margin-left: -15px;">
                                        <label>Endereço</label>
                                        <div class="input-group mb-3">
                                            <input type="text" name="endereco_contribuinte[]" class="form-control" id="endereco_contribuinte">
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Qd</label>
                                        <div class="input-group">
                                            <input type="text" name="qd_contribuinte[]" class="form-control" id="qd_contribuinte">
                                        </div>
                                    </div>
                                    <div class="col-sm-4" style="margin-left: -15px;">
                                        <label>Lote</label>
                                        <div class="input-group">
                                            <input type="text" name="lote_contribuinte[]" class="form-control" id="lote_contribuinte">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <label>CEP</label>
                                        <div class="input-group">
                                            <input type="text" name="numero_contribuinte[]" class="form-control" id="numero_contribuinte">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <label>Número</label>
                                        <div class="input-group">
                                            <input type="text" name="numero_contribuinte[]" class="form-control" id="numero_contribuinte">
                                        </div>
                                    </div>
                                </div><br>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success" id="btn_cad_alvara" onclick="submit_post_generico('../Controller/Cad_propietario.php,form_cad_alvara,btn_cad_alvara')">Cadastrar</button>
                                </div>
                            </div>
                        </div>
                        <span id="aparecepropietario"></span>
                        <span id="campo_proprietario"></span>
                    </form>
                </div>
                <!-- Fim Modal Form - Cadastro De Contribuinte -->
            </div>
        </div>
    </div>
    <!-- Fim do Modal - Tipos de Cadastro - Modal Contribuinte - Pagina Inicial -->
    <section class="hero2">
        <div class="container">
            <div class="form-group" style="display: center;">

                <center>

                    <div class="profissional-container" style="display: center;">
                        <a class="nav-link" href="admin/View/area_profissional.php"><i class="fas fa-briefcase fa-1x"></i>Área Profissional</a>
                    </div>
                </center>

                <!--                 <div class="cliente-container" style="margin-right: 50px; margin-left: 10px;">
                    <a class="nav-link" href="admin/View/consulta_protocolo.php"><i class="fas fa-user-friends fa-1x"></i>Área do Contribuinte</a>
                </div> -->

            </div>

            <br><br><br>
            <div class="row">
                <div class="col-md-12">
                    <div class="logofinal">
                        <img src="imagens/logo.png" width="100px;" alt="">
                    </div>
                </div>
            </div><br>
            <center>
                <div style="margin-top: 100px;"><br>
                    <a style="margin-left: px;"><strong>
                            Avenida Luís Eduardo Magalhães, n° 2291 - Jardim das Acácias, Luís Eduardo Magalhães - Bahia, 47862-090
                        </strong></a><br><br>
                    <a href='http://valleteclab.com' target="_blank">
                        &copy; Copyright © 2023-2024&nbsp;<span class="current-year">VALLE TEC LAB</span> todos os direitos reservados.
                    </a>
                </div>
            </center>
        </div><br><br>
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>