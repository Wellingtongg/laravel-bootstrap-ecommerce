@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="images/3.jpg" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/4.jpg" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/5.jpg" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/6.jpg" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/7.jpg" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/8.jpg" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/9.jpg" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/10.jpg" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/11.jpg" alt="">
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                </a>
            </div>
        </div>

        <p>&nbsp;</p>
        
        <div class="col-md-12">
            <div class="container-fluid">
                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top" src="images/3.jpg" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Título do card</h5>
                            <p class="card-text">Este é um card maior com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional. Este conteúdo é um pouco maior, para demonstração.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Atualizados 3 minutos atrás</small>
                        </div>
                    </div>
            
                    <div class="card">
                        <img class="card-img-top" src="images/4.jpg" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Título do card</h5>
                            <p class="card-text">Este é um card com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Atualizados 3 minutos atrás</small>
                        </div>
                    </div>
            
                    <div class="card">
                        <img class="card-img-top" src="images/5.jpg" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Título do card</h5>
                            <p class="card-text">Este é um card maior com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional. Este card tem o conteúdo ainda maior que o primeiro, para mostrar a altura igual, em ação.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Atualizados 3 minutos atrás</small>
                        </div>
                    </div>
            
                    <div class="card">
                        <img class="card-img-top" src="images/6.jpg" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Título do card</h5>
                            <p class="card-text">Este é um card maior com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional. Este card tem o conteúdo ainda maior que o primeiro, para mostrar a altura igual, em ação.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Atualizados 3 minutos atrás</small>
                        </div>
                    </div>
                </div>

                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top" src="images/7.jpg" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Título do card</h5>
                            <p class="card-text">Este é um card maior com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional. Este conteúdo é um pouco maior, para demonstração.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Atualizados 3 minutos atrás</small>
                        </div>
                    </div>
            
                    <div class="card">
                        <img class="card-img-top" src="images/8.jpg" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Título do card</h5>
                            <p class="card-text">Este é um card com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Atualizados 3 minutos atrás</small>
                        </div>
                    </div>
            
                    <div class="card">
                        <img class="card-img-top" src="images/9.jpg" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Título do card</h5>
                            <p class="card-text">Este é um card maior com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional. Este card tem o conteúdo ainda maior que o primeiro, para mostrar a altura igual, em ação.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Atualizados 3 minutos atrás</small>
                        </div>
                    </div>
            
                    <div class="card">
                        <img class="card-img-top" src="images/10.jpg" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Título do card</h5>
                            <p class="card-text">Este é um card maior com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional. Este card tem o conteúdo ainda maior que o primeiro, para mostrar a altura igual, em ação.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Atualizados 3 minutos atrás</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    body .container {
        max-width: 100%;
        padding: 0;
    }

    body .py-4 {
        padding-top: 0 !important;
    }

    body .row {
        margin-right: 0;
        margin-left: 0;
    }

    body .col-md-12 {
        padding-right: 0;
        padding-left: 0;
    }
</style>