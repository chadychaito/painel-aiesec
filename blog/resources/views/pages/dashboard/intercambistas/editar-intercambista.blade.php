@extends('layouts.dashboard')

@section('content')
  <!-- page content -->
  <div class="right_col" role="main">

    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>
            Editar Intercambista
          </h3>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Editar Intercambista</li>
            </ol>
          </nav>
        </div>
        
        <div class="title_right">
          <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                  <button class="btn btn-default" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Intercambista</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Settings 1</a>
                    </li>
                    <li><a href="#">Settings 2</a>
                    </li>
                  </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br />
              <form class="form-horizontal form-label-left" method="POST" action="{{URL::to('/update-intercambista')}}?num_pass={{$intercambista->passaporte}}">
              <h5 class="text-uppercase text-center">Dados Pessoais</h5>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nome Completo <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="nomeCompleto" id="nomeCompleto" maxlength = "100" value="{{$intercambista->nome}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="passport">Nº do Passaporte <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="passport" required="required" class="form-control col-md-7 col-xs-12" name="numPassaporte" id="numPassaporte" maxlength = "14" value="{{$intercambista->passaporte}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Data de Nascimento <span class="required">*</span>
                  </label>
                  <div class="col-md-2 col-sm-2 col-xs-12">
                    <input type="date" id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" name="dataNascimento" id="dataNascimento" value="{{$intercambista->data_nasc}}">
                  </div>
                  <label class="control-label col-md-1 col-sm-1 col-xs-12">Gênero</label>
                  <div class="col-md-3 col-sm-3 col-xs-12">
                    <div id="sexo" class="btn-group" data-toggle="buttons">
                      <label class="btn btn-default active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                        <input type="radio" name="sexo" value="m"> Masculino 
                      </label>
                      <label class="btn btn-primary active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                        <input type="radio" name="sexo" value="f" checked=""> Feminino
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telefone">Telefone<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="tel" id="telefone" required="required" data-inputmask="'mask' : '(999) 99999-9999'" class="form-control col-md-7 col-xs-12" name="numTelefone" id="numTelefone" value="{{$intercambista->telefone}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="buddies">Status</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select class="form-control" id="status" name="status">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="buddy">Buddy <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="buddy" name="buddy" class="form-control col-md-7 col-xs-12" maxlength = "14" required value="{{$intercambista->buddy}}"> 
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="host">Host <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="host" required="required" class="form-control col-md-7 col-xs-12" name="nomeHost" id="nomeHost" maxlength = "14" value="{{$intercambista->host}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="projeto">Projeto <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="projeto"  name="projeto" class="form-control col-md-7 col-xs-12" required value="{{$intercambista->projeto}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-3">Data Início</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="date" type="text" class="form-control" name="dataInicio" id="dataInicio" value="{{$intercambista->data_inicio}}">
                  </div>
                </div>
                <div class="ln_solid"></div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                  <div class="col-md-9 col-sm-9 col-xs-9">
                    <button class="btn btn-primary">Cancelar</button>
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
        
@endsection