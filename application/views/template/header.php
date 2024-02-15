<?php header('Access-Control-Allow-Origin: *'); ?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>CIFRAs'FINDER</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Sono:wght@200;300;400;500;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url();?>public/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?= base_url();?>public/css/bootstrap-icons.css">

    <link rel="stylesheet" href="<?= base_url();?>public/css/owl.carousel.min.css">

    <link rel="stylesheet" href="<?= base_url();?>public/css/owl.theme.default.min.css">

    <link href="<?= base_url();?>public/css/templatemo-pod-talk.css" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url();?>public/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <!--

TemplateMo 584 Pod Talk

https://templatemo.com/tm-584-pod-talk

-->
</head>
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand me-lg-5 me-0" href="<?= base_url(); ?>home">
            <img src="<?= base_url(); ?>images/pod-talk-logo.png" class="logo-image img-fluid" alt="templatemo pod talk">
        </a>

        <form action="#" method="get" class="custom-form search-form flex-fill me-3" role="search">
            <div class="input-group input-group-lg">
                <input name="search" type="search" class="form-control" id="search" placeholder="Search Podcast"
                    aria-label="Search">

                <button type="submit" class="form-control" id="submit">
                    <i class="bi-search"></i>
                </button>
            </div>
        </form>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-lg-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="<?= base_url(); ?>home">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">Pages</a>

                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Listing Page</a></li>

                        <li><a class="dropdown-item" href="#">Detail Page</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>

            <div class="ms-4" style="color:white;" >
                <a id="showlogin" data-toggle="modal" data-target="" class="btn btn-outline-info showlogin">Logar</a>
            </div>
        </div>
    </div>
</nav>
<body style="background-color: #252525;">

                                                            <!-- Modais -->

<!-- Modal login -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <form>
  <div style="background-color:#373838;color:white;border-radius:12px;" class="modal-dialog" role="document">
    <div class="modal-content" style="background-color:#696969;">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">LOGIN</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label"><h5>E-mail</h5></label>
              <input id="id_login" type="email" style="height:75px;border-radius:25px" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label"><h5>Senha</h5></label>
              <input id="id_password" type="password" style="height:75px;border-radius:25px" class="form-control " id="user_password">
            </div>
            <div style="text-align:center;color:white;"class="form-text">Ainda nao tem cadatro ? <a type="button" class="showCadastrar" style="color:#48D1CC;"><b>Cadastrar</b></a></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-outline-success">Logar</button>
      </div>
    </div>
  </div>
    </form>
</div>

<!-- Modal cadastrar -->
<div class="modal fade" id="cadastrarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <form>
  <div style="align-items:top;background-color:#373838;color:white;border-radius:12px;" class="modal-dialog modal-lg" role="document">
    <div class="modal-content" style="margin-top: 34px;background-color:#696969;">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">CADASTRAR</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="container">
              <div class="row">
                <div class="col-md-3" style="font-size:100px">
                  <label class="btn btn btn-outline-light" style="height: 122px;width: 175px;">
                    <img id="user_img_src" class=""src="" style="max-height: 106px;max-width: 144px;">
                    <i id="logoImg" style="margin-top: 13px;margin-left: -9px;"class="fa fa-user-circle fa-5x clearInfo"></i>
                    <input type="file" id="upload_user_img" accept="image/*" style="display: none;max-height: 150px; max-width: 150px;">
                  </label>
                  <input  id="user_img" value="" hidden name="user_img">
                  <span style="font-size: 12px;color: #ff8888;"class="help-block"></span>
                </div>
              <div class="col-md-9">
                  <div class="col-sm">
                      <div class="row">
                        <div class="col-md-6 mb-3">
                          <label class="form-label"><h3>Nome de usuario</h3></label>
                          <input type="" style="height:53px;border-radius:10px" class="form-control " id="user_name" >
                        </div>
                        <div class="col-md-6 mb-3">
                          <label for="" class="form-label"><h3 style="font-size: 25px;">Instrumento favorito</h3></label>
                          <select style="height:53px;border-radius:10px" class="form-control " id="inst_id" >
                            <option value="">Escolha um Instrumento . . . </option>
                            <?php foreach ($row as $inst): ?>
                                <option value="<?= $inst->inst_id ?>"><?=$inst->inst_name?></option>
                            <?php endforeach; ?>
                          </select>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"><h3>E-mail</h3></label>
                        <input type="email" style="height:53px;border-radius:10px" class="form-control " id="user_email" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                        <label for="password" class="form-label"><h3>Senha</h3></label>
                        <input type="password" style="height:53px;border-radius:10px" class="form-control " id="user_password">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label"><h3>Biografia</h3></label>
                        <textarea class="form-control" style="border-radius:12px;"id="user_bio" rows="4"></textarea>
                      </div>
                </div>
            </div>
            </div>
          </div>
            <div style="text-align:center;color:white;"class="form-text">Já tem cadastro ? <a type="button" class="showlogin" style="color:#48D1CC;"><b>Login</b></a></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-outline-success">Cadastrar</button>
      </div>
    </div>
  </div>
    </form>
</div>
