<div class="row">
    @foreach($ongs as $ong)
    <div class="col-lg-4 col-md-6">
        <div class="recipe">
            <img src="img/recipes/1.jpg" alt="">
            <div class="recipe-info-warp">
                <div class="recipe-info">
                    <h3>{{$ong->nome}}</h3>
                    <div class="telefone">
                        {{$ong->telefone}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    {{$ongs->links()}}
</div>