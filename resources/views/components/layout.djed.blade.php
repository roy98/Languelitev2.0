<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>{{ $title ?? 'Languelite' }}</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/site.css')}}" />
        {{-- <link rel="stylesheet" href="~/LangueLite.styles.css" /> --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
    </head>
<body>
    <div class="app-container">
        <!-- HEADER-->
        <header>
            <nav class="navbar fixed-top navbar-expand-sm navbar-toggleable-sm navbar-blue box-shadow mb-0">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/Index">LANGUELITE</a>
                    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-collapse collapse d-sm-inline-flex justify-content-center">
                        <ul class="navbar-nav flex-grow-1 flex-sm-grow-0">
                            <li class="nav-item px-2">
                                <a class="nav-link text-dark" href="/">HOME</a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link text-dark" href="/about">ABOUT US</a>
                            </li>
                            <li class="collapse navbar-collapse nav-item px-2" id="navbarNavDarkDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            DJED
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                            <li><a class="dropdown-item" href="signup">S'inscrire</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item" href="/abonnement">Gerer vos abonnement</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item" href="/payments">Paiements</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                           <li><a class="dropdown-item" target='_blank' href='https://www.google.com'>Connexion</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link text-dark" href="/languages">LANGUAGES</a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link text-dark" href="/tchat">TCHAT</a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link text-dark" href="/#contact-us">CONTACT US</a>
                            </li>
                        </ul>
                        <div class="d-sm-block d-md-none">
                            <a type='button' class="btn header-btn" href="/paiements"><strong>Payer Maintenant</strong></a>
                        </div>
                    </div>
                    <div class="d-none d-md-block">
                        <a type='button' class="btn header-btn" href="/paiements"><strong>Payer Maintenant</strong></a>
                    </div>
                </div>
            </nav>
        </header>

        <!-- MAIN-->
        <div class="" style="background-color:aliceblue;color: var(--main-color)">
            <main role="main" class="pb-0 ml-5 w-100">
                {{ $slot }}
            </main>
        </div>

        <!-- FOOTER-->
    </div>

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/1ccc837a13.js"></script>
    <script src="{{asset('js/site.js')}}"></script>
    <script>
        $(function() {
          $('nav a[href="/' + location.pathname.split("/")[1] + '"]').addClass('active');
        });
    </script>
</body>
</html>