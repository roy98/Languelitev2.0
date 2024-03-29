
<x-layout>
    <x-slot:title>
        Accueil
    </x-slot>
        
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('img/home_carroussel.jpg')}}" style="object-fit: cover; opacity:0.78" alt="">
    
                <div class="container">
                    <div class="carousel-caption text-start px-4 w-50" style="background-color: #00000096">
                        <h1>Welcome to LANGUELITE.</h1>
                        <p class="lead">Nous aidons les apprenants à déployer leur curiosité <br /> et à prendre leur envol pour l’apprentissage des langues.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <!-- Feature
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    
    <div class="container-fluid" style="background-color: var(--blue-light)">
    <div class="features py-5 container">
        <h1 style="text-align: center" class="py-4 mb-5 fw-light">Our Features</h1>
        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-md-4">
                <div class="pt-5">
                    <img class="bd-placeholder-img rounded-circle" width="200" height="200" src="{{asset('img/instant-traduction.jpg')}}" style="object-fit:cover; -o-object-fit:cover; object-position:center" />
                    <h4 class="fw-light lead">Instant traduction</h4>
                    <p class="text-dark fw-light">Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
                </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-md-4">
                <div class="pt-0">
                    <img class="bd-placeholder-img rounded-circle" width="250" height="250" src="{{asset('img/instant-traduction.jpg')}}" style="object-fit:cover; -o-object-fit:cover; object-position:center" />
                    <h4 class="fw-light lead">Dictionary</h4>
                    <p class="text-dark fw-light">Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
                </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-md-4">
                <div class="pt-5">
                    <img class="bd-placeholder-img rounded-circle" width="200" height="200" src="{{asset('img/instant-traduction.jpg')}}" style="object-fit:cover; -o-object-fit:cover; object-position:center" />
                    <h4 class="fw-light lead">More than 50 languages</h4>
                    <p class="text-dark fw-light">Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
                </div>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div>
    </div>
    
    <!-- Pricing
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    
    <div class="container pricing my-5">
        <h1 style="text-align: center" class="my-5 fw-light">Our Prices</h1>
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
            <div class="col">
                <div class="card mb-4 mt-5 shadow-sm pointer" style="border-bottom: none!important; min-height: 320px">
                    <div class="card-body py-4">
                        <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/month</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>10 users included</li>
                            <li>2 GB of storage</li>
                            <li>Email support</li>
                            <li>Help center access</li>
                        </ul>
                    </div>
                    <div class="card-bottom py-3">
                        <h4 class="my-0 fw-normal text-white"><span>Free trial</span></h4>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 mt-3 shadow-sm border-primary pointer" style="border-bottom: none!important; min-height: 351px">
                    <div class="card-body py-4">
                        <h1 class="card-title pricing-card-title">$9.99<small class="text-muted fw-light">/month</small></h1>
                        <ul class="list-unstyled mt-3 py-3 mb-4">
                            <li>20 users included</li>
                            <li>10 GB of storage</li>
                            <li>Priority email support</li>
                            <li>Help center access</li>
                        </ul>
                    </div>
                    <div class="card-bottom py-3">
                        <h4 class="my-0 fw-normal text-white"><span>Personal</span></h4>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 shadow-sm mt-5 pointer" style="border-bottom: none!important; min-height: 320px">
                    <div class="card-body py-4">
                        <h1 class="card-title pricing-card-title">$49.99<small class="text-muted fw-light">/month</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>30 users included</li>
                            <li>15 GB of storage</li>
                            <li>Phone and email support</li>
                            <li>Help center access</li>
                        </ul>
                    </div>
                    <div class="card-bottom py-3">
                        <h4 class="my-0 fw-normal text-white"><span>Business</span></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Stats
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    
    <div class="p-3 my-5 stats">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold" style="text-align: center">Meet some of our stats</h1>
            <div class="row mt-4">
                <div class="col-6 col-sm-3">
                    <h4>Downloads</h4>
                    <strong class="stat fw-bold">+14k</strong>
                </div>
                <div class="col-6 col-sm-3">
                    <h4>Languages</h4>
                    <strong class="stat fw-bold">30</strong>
                </div>
                <div class="col-6 col-sm-3">
                    <h4>Users</h4>
                    <strong class="stat fw-bold">+13K</strong>
                </div>
                <div class="col-6 col-sm-3">
                    <h4>Countries</h4>
                    <strong class="stat fw-bold">05</strong>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Traductors
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    
    <div class="container mb-3 traductors">
        <div class="row pb-3">
            <div class="col-12 col-sm-4 px-4" style="align-self: center">
                <h2 class="display-6 fw-light py-4">Our Traductors</h2>
                <p style="text-align: justify">Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                <p style="text-align: justify">Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                <strong>Paragraph of text beneath the heading to explain the heading.</strong>
            </div>
            <div class="col-12 col-sm-8">
                <div class="row mt-2 trad-content">
                    <div class="col-6 col-sm-4">
                        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('https://getbootstrap.com/docs/5.1/examples/features/unsplash-photo-2.jpg');">
                            <div class="d-flex flex-column h-100 p-3 pb-3 text-white text-shadow-1">
                                <h2 class="mt-5 mb-2 lh-1 fw-bold">John Doe</h2>
                                <h6 class="mb-4 lh-1 fw-bold">Yemba-French</h6>
                                <ul class="d-flex list-unstyled mt-auto">
                                    <li class="me-auto">
                                        <a class="text-white" href="#"><i class="fa fa-lg fa-globe" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <a class="text-white" href="#"><i class="fa fa-lg fa-instagram me-4" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <a class="text-white" href="#"><i class="fa fa-lg fa-twitter me-4" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <a class="text-white" href="#"><i class="fa fa-lg fa-facebook me-4" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4">
                        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('https://getbootstrap.com/docs/5.1/examples/features/unsplash-photo-3.jpg');">
                            <div class="d-flex flex-column h-100 p-3 pb-3 text-white text-shadow-1">
                                <h2 class="mt-5 mb-2 lh-1 fw-bold">Angelique Kidjio</h2>
                                <h6 class="mb-4 lh-1 fw-bold">Medumba-French</h6>
                                <ul class="d-flex list-unstyled mt-auto">
                                    <li class="me-auto">
                                        <a class="text-white" href="#"><i class="fa fa-lg fa-globe" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <a class="text-white" href="#"><i class="fa fa-lg fa-instagram me-4" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <a class="text-white" href="#"><i class="fa fa-lg fa-twitter me-4" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <a class="text-white" href="#"><i class="fa fa-lg fa-facebook me-4" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4">
                        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('https://getbootstrap.com/docs/5.1/examples/features/unsplash-photo-1.jpg');">
                            <div class="d-flex flex-column h-100 p-3 pb-3 text-white text-shadow-1">
                                <h2 class="mt-5 mb-2 lh-1 fw-bold">Ismaëll Siwe</h2>
                                <h6 class="mb-4 lh-1 fw-bold">Medumba-English</h6>
                                <ul class="d-flex list-unstyled mt-auto">
                                    <li class="me-auto">
                                        <a class="text-white" href="#"><i class="fa fa-lg fa-globe" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <a class="text-white" href="#"><i class="fa fa-lg fa-instagram me-4" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <a class="text-white" href="#"><i class="fa fa-lg fa-twitter me-4" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <a class="text-white" href="#"><i class="fa fa-lg fa-facebook me-4" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4">
                        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('https://getbootstrap.com/docs/5.1/examples/features/unsplash-photo-1.jpg');">
                            <div class="d-flex flex-column h-100 p-3 pb-3 text-white text-shadow-1">
                                <h2 class="mt-5 mb-2 lh-1 fw-bold">Alice Ndjie</h2>
                                <h6 class="mb-4 lh-1 fw-bold">Ghomala-French</h6>
                                <ul class="d-flex list-unstyled mt-auto">
                                    <li class="me-auto">
                                        <a class="text-white" href="#"><i class="fa fa-lg fa-globe" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <a class="text-white" href="#"><i class="fa fa-lg fa-instagram me-4" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <a class="text-white" href="#"><i class="fa fa-lg fa-twitter me-4" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <a class="text-white" href="#"><i class="fa fa-lg fa-facebook me-4" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4">
                        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('https://getbootstrap.com/docs/5.1/examples/features/unsplash-photo-2.jpg');">
                            <div class="d-flex flex-column h-100 p-3 pb-3 text-white text-shadow-1">
                                <h2 class="mt-5 mb-2 lh-1 fw-bold">Ahkene Durent</h2>
                                <h6 class="mb-4 lh-1 fw-bold">Swahili-French</h6>
                                <ul class="d-flex list-unstyled mt-auto">
                                    <li class="me-auto">
                                        <a class="text-white" href="#"><i class="fa fa-lg fa-globe" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <a class="text-white" href="#"><i class="fa fa-lg fa-instagram me-4" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <a class="text-white" href="#"><i class="fa fa-lg fa-twitter me-4" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <a class="text-white" href="#"><i class="fa fa-lg fa-facebook me-4" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4">
                        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('https://getbootstrap.com/docs/5.1/examples/features/unsplash-photo-3.jpg');">
                            <div class="d-flex flex-column h-100 p-3 pb-3 text-white text-shadow-1">
                                <h2 class="mt-5 mb-2 lh-1 fw-bold">Samuel Tonia</h2>
                                <h6 class="mb-4 lh-1 fw-bold">Yemba-English</h6>
                                <ul class="d-flex list-unstyled mt-auto">
                                    <li class="me-auto">
                                        <a class="text-white" href="#"><i class="fa fa-lg fa-globe" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <a class="text-white" href="#"><i class="fa fa-lg fa-instagram me-4" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <a class="text-white" href="#"><i class="fa fa-lg fa-twitter me-4" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <a class="text-white" href="#"><i class="fa fa-lg fa-facebook me-4" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Contact Us
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    
    <div id="contact-us" class="p-5 contact">
        <div class="container d-flex justify-content-end py-5">
            <div class="card px-5 py-2" style="width: 40rem;">
                <div class="card-body">
                    <h6 class="card-title display-6 fw-light">Contact Us</h6>
                    <form action="{{url('/')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Email">
                            @error('email')
                                <div style="display: inline-block!important" class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" id="message" name="message" placeholder="Type something" rows="5">{{ old('message') }}</textarea>
                            @error('message')
                                <div style="display: inline-block!important" class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-md px-5 btn-primary fw-light">Send</button>
                    </form>
                </div>
                @if (isset($message_sent) && $message_sent)
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Houra!</strong> Your message has been send successfully.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
            </div>
        </div>
    </div>
</x-layout>