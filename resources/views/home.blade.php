@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <!--carousel-->
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
            <!--carousel-->
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