<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Resume - Start Bootstrap Theme</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('asset/assets/img/favicon.ico') }}"/>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css"/>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('asset/css/styles.css') }}" rel="stylesheet"/>
</head>
<body id="page-top">
    <div id="app">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Clarence Taylor</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{ asset('asset/assets/img/profile.jpg') }}" alt="..."/></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <router-link class="nav-link js-scroll-trigger" :to="{ name: 'about'}">About</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link js-scroll-trigger" :to="{ name: 'experience'}">Experience</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link js-scroll-trigger" :to="{ name: 'education'}">Education</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link js-scroll-trigger" :to="{ name: 'skills'}">Skills</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link js-scroll-trigger" :to="{ name: 'interests'}">Interests</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link js-scroll-trigger" :to="{ name: 'awards'}">Awards</router-link>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <router-view></router-view>


        </div>
        <!-- Core theme JS-->
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ asset('asset/js/scripts.js') }}"></script>
</body>
</html>
