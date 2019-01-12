@extends('layouts.dashboard')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3> Listar Pontos Atrativos</h3>
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
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Pontos Atrativos Cadastrados</h2>
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
            <div class="row">
              @foreach ($pontos_atrativos as $ponto_atrativo)
              <div class="col-md-4">
                <div class="thumbnail">
                  <div class="image view view-first">
                    <img style="width: 100%; display: block;" src="storage/pontos/{{$ponto_atrativo->id}}.jpeg" alt="{{$ponto_atrativo->nome}}" />
                    <div class="mask">
                      <p>{{$ponto_atrativo->nome}}</p>
                      <div class="tools tools-bottom">
                        <a href="/editar-pontos-atrativos?id={{$ponto_atrativo->id}}"><i class="fa fa-pencil"></i></a>
                        <a data-toggle="modal" data-target="#confirmarExcluirAtrativo" ><i class="fa fa-times"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="caption">
                    <p class="endereco">{{$ponto_atrativo->endereco}}</p>
                    <p class="descricao">{{$ponto_atrativo->descricao}}</p>
                  </div>
                  <!-- Modal Excluir Ponto Atrativo -->
                  <div class="modal fade" id="confirmarExcluirAtrativo" tabindex="-1" role="dialog" aria-labelledby="confirmarExcluirModalTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="confirmarExcluirAtrativoTitle">
                            Excluir Ponto Atrativo</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Você deseja mesmo excluir o Ponto Atrativo: <b>{{$ponto_atrativo->nome}}</b>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                          <a href="/remover-pontos-atrativos?id={{$ponto_atrativo->id}}">
                            <button type="button" class="btn btn-danger">Excluir</button>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
              @endforeach      
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
@endsection