<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Popland</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

            <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link href="//db.onlinewebfonts.com/c/89d11a443c316da80dcb8f5e1f63c86e?family=Bauhaus+93" rel="stylesheet" type="text/css"/>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>


    </head>
    <body>
            <div id="app">
                <nav class="navbar navbar-expand-md bg-white navbar-light shadow-sm py-4">
                        <a class="navbar-brand Bauhaus" href="{{ url('/') }}">
                            <img src='https://svgshare.com/i/Yte.svg' class="img-fluid Bauhaus" alt="Logo Popland" width="35%">
                                {{ config('app.name', 'POPLAND') }}
                        </a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item marge">
                                    <a class="nav-link h3" href="#Calendrier">Calendrier</a>
                                </li>
                                <li class="nav-item marge">
                                    <a class="nav-link h3" href="#Tarifs">Tarifs</a>
                                </li>
                                <li class="nav-item marge">
                                    <a class="nav-link h3" href="#Plan">Plan</a>
                                </li>
                                <li class="nav-item marge">
                                    <a class="nav-link h3" href="#Contact">Contact</a>
                                </li>
                            </ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto">
                                <a class="nav-link marge" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                  </svg></a>
                                <!-- Authentication Links -->
                                @guest
                                <button type="button" class="btn btn-primary">
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link h5" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                                        </li>
                                    @endif
                                </button>
                                <p>&nbsp;</p>
                                <button type="button" class="btn btn-primary">
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link h5" href="{{ route('register') }}">{{ __('Inscription') }}</a>
                                        </li>
                                    @endif
                                </button>
                                @else
                                <button type="button" class="btn btn-primary">
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle h5" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Déconnexion') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </button>
                            </ul>
                        </div>
                </nav>
            @yield('content')
                 <!-- Header-->
        <header class="py-5 img1 img-fluid" id="img1">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <img src='https://svgshare.com/i/Ytg.svg' class="block1 pad1 img-fluid" alt="Popland background">
                    <p class="lead fw-normal text-white mb-0 pad2">Popland est un festival de Pop se déroulant sous 3 jours et accueillant un maximum de 5000 personnes.</p>
                </div>
            </div>
        </header>
        <!-- Section-->
            <section class="img2 img-fluid shadow1" id="img2">
            </section>
            <div class="container p-5 block3">
                <h1 class="text-center Bauhaus" id="Calendrier">
                    <img src='https://svgshare.com/i/Yw1.svg' class="img-fluid marge3" id="img3">
                        Calendrier
                    <img src='https://svgshare.com/i/Yx6.svg' class="img-fluid marge4" id="img3">
                </h1>
                    <img src='https://svgshare.com/i/YyZ.svg' class="img-fluid zoom" id="img4">
                    <img src='https://svgshare.com/i/Yw8.svg' class=" img-fluid shadow1" id="img5">
                <h1 class="text-center Bauhaus" id="Tarifs">
                    <img src='https://svgshare.com/i/Yy1.svg' class="img-fluid marge5" id="img3">
                        Tickets
                    <img src='https://svgshare.com/i/Yxs.svg' class="img-fluid marge6" id="img3">
                </h1>

                    <div class=" container px-4 px-lg-5 mt-5">
                        <div class="row lg-4 justify-content-center">
                            <div class="col mb-5">
                                    <span class="p-5 block4">
                                        <img src='https://svgshare.com/i/Yyk.svg' alt="Ticket classique" class="card-img-top img-fluid"/>
                                            <h2 class="Bauhaus2">
                                                Ticket classique
                                            </h2>
                                            <h4 class="Bauhaus2">
                                                75€
                                            </h4>
                                        <button type="button" class="btn btn-primary float-right">
                                            Ajouter au panier
                                        </button>
                                    </span>
                            </div>
                            <div class="col mb-5">
                                    <span class="p-5 block4">
                                        <img src='https://svgshare.com/i/Ywz.svg' alt="Ticket VIP" class="card-img-top img-fluid"/>
                                            <h2 class="Bauhaus2">
                                                Ticket VIP
                                            </h2>
                                            <h4 class="Bauhaus2">
                                                250€
                                            </h4>
                                        <button type="button" class="btn btn-primary float-right">
                                            Ajouter au panier
                                        </button>
                                    </span>
                            </div>
                        </div>
                    </div>
                <img src='https://svgshare.com/i/Yw8.svg' class=" img-fluid shadow1" id="img5">
                    <h1 class="text-center Bauhaus" id="Plan">
                        <img src='https://svgshare.com/i/Yw1.svg' class="img-fluid marge7" id="img3">
                            Plan
                        <img src='https://svgshare.com/i/Yx6.svg' class="img-fluid marge8" id="img3">
                    </h1>
                    <img src='https://svgshare.com/i/YxR.svg' class="img-fluid zoom" id="img6">
            </div>
        <div class="pad1"></div>
        <!-- Footer-->
        <footer class="py-5 block2" id="Contact">
            <div class="container px-4 px-lg-5 my-5">
                <a class="navbar-brand Bauhaus">
                <img src='https://svgshare.com/i/Yte.svg' class="img-fluid Bauhaus" alt="Logo Popland" width="35%">
                    {{ config('app.name', 'POPLAND') }}
                </a>
                <div class="text-left">
                    <p class="lead3">Contactez-nous &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Réseaux sociaux</p>
                    <p class="text-white">08 94 35 78 22 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src='https://svgshare.com/i/Yxj.svg' class="img-fluid"></p>
                    <p class="text-white">alexandre.nguyen@epitech.digital</p>
                    <p class="text-white">alexandre.quintela@epitech.digital</p>
                </div>
                <img src='https://svgshare.com/i/Yxx.svg' class="img-fluid">
            </div>
        </footer>
    </div>
    </body>
</html>
