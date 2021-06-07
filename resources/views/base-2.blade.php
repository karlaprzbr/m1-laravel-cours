<!doctype html>
<html lang="fr">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <title>Test</title>
        <style>
            pre.code {
                white-space: pre-wrap;
            }
            pre.code::before {
                counter-reset: listing;
            }
            pre.code code {
                counter-increment: listing;
            }
            pre.code code::before {
                content: counter(listing) " ";
                display: inline-block;
                background-color: darkgrey;
                width: 3em;         
                padding-left: auto; 
                margin-left: auto;  
                text-align: right;  
            }
        </style>
    </head>
    <body>
        <div class="row">
            <div class="col-2 bg-dark navbar-dark min-vh-100 p-2">
                <ul class="navbar-nav fixed-top w-100">
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="{{ url('/templating') }}">Templating</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="{{ url('/routes') }}">Routes</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="{{ url('/controllers') }}">Controllers</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="{{ url('/form') }}">Formulaires</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="{{ url('/bdd') }}">Base de données</a>
                    </li>
                  </ul>
            </div>
            <div class="col-10">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
      {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ url('/') }}">LARAVEL</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ url('/templating') }}">Templating</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ url('/routes') }}">Routes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ url('/controllers') }}">Controllers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ url('/form') }}">Formulaires</a>
              </li>
            </ul>
          </div>
        </div>
      </nav> --}}
      

      <!-- Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>