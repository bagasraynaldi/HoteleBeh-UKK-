<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        body {
            background-color: #bdecb6;
        }
        .my_text
        {
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: 40px;
        }
    </style>

    <title>Home</title>
</head>
    <body>
        <div class="container">
            <header>
                <nav class="navbar navbar-expand-lg navbar-light mt-4">
                    <div class="container-fluid">
                        <div class="my_text">Hotele Beh</div>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
    
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <!-- <button href="/" type="button" class="nav-link {{ Request::is('/') ?  : '' }} btn btn-outline-info">Home</button>    
                                    <button href="/login" type="button" class="nav-link {{ Request::is('login') ?  : '' }} btn btn-outline-success">login</button>        -->
                                    <a href="/" class="nav-link {{ Request::is('/') ? 'active' : '' }}">HOME</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/login" class="nav-link {{ Request::is('login') ? 'active' : '' }}">LOGIN</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
        
            <main class="mt-4">
                <div class="container-fluid">
                     <div class="text-center">
                        <img src="../assets/app-img/a.jpg" class="img-fluid" width="900" alt="Hotel Image 01">
                    </div>
                    <!-- <div class="w-90 input-group mb-3 input-group-sm mt-5">
                        <input type="date" class="form-control sm" style="margin-right:10px; height:50px;" name="date1" value="{{ request('date1') }}">
                        <input type="date" class="form-control sm" style="margin-right:10px; height:50px;" name="date2" value="{{ request('date2') }}">
                        <a href="booking">
                            <button class="btn btn-outline-secondary" style="margin-right:10px; height:50px;" type="submit">Booking</button>
                        </a>
                    </div> -->
                </div>
            </div>
                    {{-- Container --}}
                    @yield('container')
                    
                </div>
            </main>
        
            <footer class="footer mt-auto py-3">
                <div class="container">
                    <div class="text-center">
                        &copy; 2022 Hotele Beh
                    </div>
                </div>
              </footer>
        </div>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        
    </body>
</html>