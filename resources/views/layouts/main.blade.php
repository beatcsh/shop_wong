@extends('layouts.app')
@section('contenido')
    <div class="row w-100">
        <!-- Carousel wrapper -->
    <div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel" data-mdb-carousel-init>
        <!-- Indicators -->
        <div class="carousel-indicators">
        <button
            type="button"
            data-mdb-target="#carouselBasicExample"
            data-mdb-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
        ></button>
        <button
            type="button"
            data-mdb-target="#carouselBasicExample"
            data-mdb-slide-to="1"
            aria-label="Slide 2"
        ></button>
        <button
            type="button"
            data-mdb-target="#carouselBasicExample"
            data-mdb-slide-to="2"
            aria-label="Slide 3"
        ></button>
        </div>
    
        <!-- Inner -->
        <div class="carousel-inner">
        <!-- Single item -->
        <div class="carousel-item active">
            <img src="https://wallpapercave.com/wp/wp7123278.jpg" class="d-block w-100" alt="Sunset Over the City"/>
            <div class="carousel-caption d-none d-md-block">
            <h5>Buscando a Nemo</h5>
            <p>El nemo.</p>
            </div>
        </div>
    
        <!-- Single item -->
        <div class="carousel-item">
            <img src="https://wallpapercave.com/wp/wp13005966.jpg" class="d-block w-100" alt="Canyon at Nigh"/>
            <div class="carousel-caption d-none d-md-block">
            <h5>Shrek</h5>
            <p>Nada mejor que el cherk</p>
            </div>
        </div>
    
        <!-- Single item -->
        <div class="carousel-item">
            <img src="https://wallpapercave.com/wp/wp8707562.jpg" class="d-block w-100" alt="Cliff Above a Stormy Sea"/>
            <div class="carousel-caption d-none d-md-block">
            <h5>El Viaje de Chihiro</h5>
            <p>Pelicula recomendada por la jessica.</p>
            </div>
        </div>
        </div>
        <!-- Inner -->
    
        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Carousel wrapper -->
    <div class="form-outline mb-4 mt-4" data-mdb-input-init>
        <input type="search" class="form-control" id="datatable-search-input">
        <label class="form-label" for="datatable-search-input">Search</label>
    </div>
    </div>
    <div class="row">
        <div class="card mt-4 w-25">
            <img src="https://wallpapercave.com/wp/wp12002307.jpg" class="card-img-top" alt="Fissure in Sandstone"/>
            <div class="card-body">
              <h5 class="card-title">Madagascar</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#!" class="btn btn-primary" data-mdb-ripple-init>Button</a>
            </div>
        </div>
        <div class="card mt-4 w-25">
            <img src="https://wallpapercave.com/wp/wp11414116.jpg" class="card-img-top" alt="Fissure in Sandstone"/>
            <div class="card-body">
              <h5 class="card-title">Increibles</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#!" class="btn btn-primary" data-mdb-ripple-init>Button</a>
            </div>
        </div>
        <div class="card mt-4 w-25">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdR2ge07RkmXPoUG9S6l3sE7zRGq20tCo7Wg&s" class="card-img-top" alt="Fissure in Sandstone"/>
            <div class="card-body">
              <h5 class="card-title">Chicuarotes</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#!" class="btn btn-primary" data-mdb-ripple-init>Button</a>
            </div>
        </div>
        <div class="card mt-4 w-25">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQNjHgFVIrCYjhOC10NmLo6yCRJx5qrBNV2w&s" class="card-img-top" alt="Fissure in Sandstone"/>
            <div class="card-body">
              <h5 class="card-title">Infierno</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#!" class="btn btn-primary" data-mdb-ripple-init>Button</a>
            </div>
        </div>
    </div>
@endsection