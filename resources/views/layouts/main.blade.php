@extends('layouts.app')

@section('contenido')
    <div class="row">
        <div class="col-12">
            <!-- Carousel wrapper -->
            <div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel"
                data-mdb-carousel-init>
                <!-- Indicators -->
                <div class="carousel-indicators">
                    <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>

                <!-- Inner -->
                <div class="carousel-inner">
                    <!-- Single item -->
                    <div class="carousel-item active">
                        <img src="https://i.ytimg.com/vi/8hFx3IOLWIc/hq720.jpg?sqp=-oaymwEXCKAGEMIDIAQqCwjVARCqCBh4INgESFo&rs=AMzJL3nxN5zkvVm1D1YtIQOHKU2SXradzw" class="d-block w-100"
                            alt="Sunset Over the City" />
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Union Fatal</h5>
                            <p>Manteniendo vivo el under</p>
                        </div>
                    </div>

                    <!-- Single item -->
                    <div class="carousel-item">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSEVSvq4wvl3aK9JomGFVTlHw2LzTaQP-KiNw&s" class="d-block w-100" alt="Canyon at Nigh" />
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Metrik Vader</h5>
                            <p>Genio moderno incomprendido</p>
                        </div>
                    </div>

                    <!-- Single item -->
                    <div class="carousel-item">
                        <img src="https://i.ytimg.com/vi/TQAwbflDRQc/maxresdefault.jpg" class="d-block w-100"
                            alt="Cliff Above a Stormy Sea" />
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Faruz Feet</h5>
                            <p>En camino a ser la cabra</p>
                        </div>
                    </div>
                </div>
                <!-- Inner -->

                <!-- Controls -->
                <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample"
                    data-mdb-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample"
                    data-mdb-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- Carousel wrapper -->
        </div>

        <div class="col-12 mt-4">
            <div class="form-outline mb-4" data-mdb-input-init>
                <input type="search" class="form-control" id="datatable-search-input">
                <label class="form-label" for="datatable-search-input">Search</label>
            </div>
        </div>

        <div class="col-12 mt-4">
            <div class="row d-flex flex-wrap justify-content-center gap-3">
                
                <div class="card mt-4 w-25">
                    <img src="https://i.scdn.co/image/ab67616d00001e02ea0491bc9ee424cac4295c68" class="card-img-top w-100"
                        alt="Fissure in Sandstone" />
                    <div class="card-body"><h5 class="card-title">Luces Fantasma</h5>
                        <p class="card-text fs-6">El mejor disco de La Banda Baston, no leo lloros.</p>
                        <a href="#!" class="btn btn-primary" data-mdb-ripple-init>Ver Más</a>
                    </div>
                </div>
                <div class="card mt-4 w-25">
                    <img src="https://i.scdn.co/image/ab67616d00001e028610dee10f00ee9a43df9833" class="card-img-top w-100"
                        alt="Fissure in Sandstone" />
                    <div class="card-body">
                        <h5 class="card-title">Tu Antiheroe Favorito</h5>
                        <p class="card-text fs-6">El que no conoce a Tino a cualquier gato le reza.</p>
                        <a href="#!" class="btn btn-primary" data-mdb-ripple-init>Ver Más</a>
                    </div>
                </div>
                <div class="card mt-4 w-25">
                    <img src="https://i.scdn.co/image/ab67616d00001e02fa4d0b810473dceb61ec2a74"
                        class="card-img-top w-100" alt="Fissure in Sandstone" />
                    <div class="card-body">
                        <h5 class="card-title">Misantropia</h5>
                        <p class="card-text fs-6">Soopa Marrano Luva esta reviviendo el hiphop.</p>
                        <a href="#!" class="btn btn-primary" data-mdb-ripple-init>Ver Más</a>
                    </div>
                </div>
                <div class="card mt-4 w-25">
                    <img src="https://i.scdn.co/image/ab67616d0000b273c9370b5f539dec594285c5d5"
                        class="card-img-top w-100" alt="Fissure in Sandstone" />
                    <div class="card-body">
                        <h5 class="card-title">Pragma</h5>
                        <p class="card-text fs-6">Reno871 es de lo mejor que hay en en el pais.</p>
                        <a href="#!" class="btn btn-primary" data-mdb-ripple-init>Ver Más</a>
                    </div>
                </div>
                <div class="card mt-4 w-25">
                    <img src="https://i.scdn.co/image/ab67616d0000b2731e5f8c0a71f7342010d3e7cf"
                        class="card-img-top w-100" alt="Fissure in Sandstone" />
                    <div class="card-body">
                        <h5 class="card-title">La Divina Comedia</h5>
                        <p class="card-text fs-6">Proof es demasiado bueno.</p>
                        <a href="#!" class="btn btn-primary" data-mdb-ripple-init>Ver Más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
