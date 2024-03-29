<x-layout>
    <x-slot:title>
        About Us
    </x-slot>
    <div id="myCarousel2" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel2" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" alt="" src="{{asset('img/about-us-1.jpg')}}" style="object-fit: cover">
    
                <div class="container">
                    <div class="carousel-caption text-start px-4 w-50" style="background-color: #00000096">
                        <h1>DJED</h1>
                        <p class="lead">Avec Djed, nous aidons les apprenants à déployer leur curiosité<br/>
                            et à prendre leur envol pour l’apprentissage des langues.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" alt="" src="{{asset('img/about-us-3.jpg')}}" style="object-fit: cover">
                <div class="container">
                    <div class="carousel-caption text-end px-4" style="background-color: #00000096">
                        <h1>DJED</h1>
                        <p class="lead">Construire une communauté culturelle intergénérationnelle.</p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel2" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel2" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    
    <!-- Vision
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    
    <div class="vision my-4 mb-5 container">
        <div class="row">
            <div class="col-12 col-sm-8 order-2 order-sm-1">
                <div class="row illustration">
                    <div class="col-8">
                        <div class="vision-cart cart-1">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="vision-cart cart-2">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="vision-cart cart-3">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="vision-cart cart-4">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="vision-cart cart-5">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="vision-cart cart-6">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 py-2 order-1 order-sm-2">
                <div class="row">
                    <div class="vision-cart py-4 px-5" style="max-height: 450px; overflow-y: auto">
                        <h2 style="text-align: center" class="my-3 fw-light">Vision</h2>
                        <p style="text-align: justify;" class=" fw-light text-muted">
                            Être leader dans la promotion et la vulgarisation de la culture à travers l’apprentissage de la langue, la transformation réelle des communautés pour une vie pacifique, harmonieuse et sociale.
                        </p>
                    </div>
                    <div class="vision-cart py-4 px-5 mt-5" style="max-height: 450px; overflow-y: auto">
                        <h2 style="text-align: center" class="my-3 fw-light">Objectif</h2>
                        <p style="text-align: justify;" class="fw-light text-muted">
                            Avec Djed, nous aidons les apprenants à déployer leur curiosité et à prendre leur envol pour l’apprentissage des langues.
                            Bâtir des citoyens du monde capables d’impacter leur environnement grâce à la connaissance de la langue
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Mission
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    
    <div class="mission container mt-5">
        <h2 style="text-align: center" class="fw-light mt-4">Mission</h2>
        <h4 style="text-align: center" class="lead text-muted mb-1">L’application DJED se donne les missions suivantes :</h4>
        <div class="row my-2">
            <div class="col-md-6 pe-md-5 mt-5">
                <p style="text-align:justify;line-height: 2rem">
                    <ul>
                        <li class="lead text-muted">Offrir des moyens d’acquisition des compétences et de connaissances langagières utiles pour son plein épanouissement.</li>
                        <li class="lead text-muted">Engager chaque apprenant à acquérir des connaissances nécessaires à son épanouissement linguistique.</li>
                    </ul>
                </p>
            </div>
            <div class="col-md-6 ps-md-5 mt-5">
                <p style="text-align:justify;line-height: 2rem">
                    <ul>
                        <li class="lead text-muted">Créer un espace virtuel d’apprentissage et d’échanges, qui est dynamique, convivial et agréable.</li>
                        <li class="lead text-muted">Créer un espace virtuel qui est un véritable monde de diversité culturelle recherché et facilement accessible.</li>
                        <li class="lead text-muted">Construire une communauté culturelle intergénérationnelle.</li>
                    </ul>
                </p>
            </div>
        </div>
    </div>
    
    <!-- Some languages
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    
    <div class="container-fluid bg-light">
        <div class="about-languages mt-5 pt-3 container" style="margin-top: 8rem!important;">
            <h2 style="text-align: center" class="mt-5 fw-light">Languages</h2>
            <h4 style="text-align: center" class="mb-3 fw-light lead text-muted">At vero eos et iusto odio dignissimos voluptatum</h4>
            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-md-4">
                    <div class="py-5">
                        <img class="bd-placeholder-img rounded-circle" width="200" height="200" />
                        <h4 class="lead fw-light">Ghomala</h4>
                        <p class="lead text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                </div><!-- /.col-lg-4 -->
                <div class="col-md-4">
                    <div class="py-5 middle">
                        <img class="bd-placeholder-img rounded-circle" width="200" height="200" />
                        <h4 class="lead fw-light">Yemba</h4>
                        <p class="lead text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                </div><!-- /.col-lg-4 -->
                <div class="col-md-4">
                    <div class="py-5">
                        <img class="bd-placeholder-img rounded-circle" width="200" height="200" />
                        <h4 class="lead fw-light">Medumba</h4>
                        <p class="lead text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div>
    </div>   
</x-layout>