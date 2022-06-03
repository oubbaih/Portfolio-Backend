<!DOCTYPE html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}"
    dir="{{ LaravelLocalization::getCurrentLocale()  === 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/gif/png/svg" href="{{$setting->favicon}}" />
    <link rel="stylesheet" href="{{asset('css/style-front.css')}}" />
    <title>Portfolio | Lahcen Oubbaih</title>
    <style>
        @font-face {
            font-family: 'Helvetica Now Display DW';
            src: url('fonts/HelveticaNowDisplay-Bold.ttf');

            font-family: 'Noto Sans Arabic', sans-serif;

        }

    </style>
    <!-- ==========================    Font Arab  Start    ==========================  -->
    @if (LaravelLocalization::getCurrentLocale() === 'ar')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Arabic:wght@300;700&display=swap" rel="stylesheet">
    <style>
        @font-face {
            font-family: 'Noto Sans Arabic', sans-serif;
        }

        .header_content-user {
            letter-spacing: 0;
        }

        .header_personal {
     
            left: 10rem;
            right: initial;
           
        }
         @media only screen and (max-width: 767px) {
           .header_personal {
                  top:18rem;
              left:50%;
           }
            }

    </style>
    @endif

    <!-- ==========================     Font Arab  End    ==========================  -->

</head>

<body>
    <!-- ==========================    Loader  Start    ==========================  -->
    <div class="loader show" id="loading">
        <div class="loader_icon"></div>
        <div class="loader_text">
            <h5 class="loader_text-title">welcome</h5>
            <p class="loader_text-des">wait a bite ...</p>
        </div>
    </div>
    <!-- ==========================    Loader End    ==========================  -->

    <!-- ==========================    Go Upp Icon Start    ==========================  -->

    <div class="goup">
        <a class="goup_icon" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
            </svg>
        </a>
    </div>
    <!-- ==========================    Go Upp Icon  End    ==========================  -->

    <!-- ==========================    Contact Icon Start    ==========================  -->
    <div class="contact">
        <a class="contact_icon" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope"
                viewBox="0 0 16 16">
                <path
                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
            </svg>
            <span class="contact_name">contact</span>
        </a>
    </div>
    <!-- ==========================    Contact Icon end    ==========================  -->

    <!-- ==========================    NavBar Start    ==========================  -->
    <nav class="navbar fixed-top" id="navbar-id">
        <div class="container">
            <a class="navbar-brand logo" href="#">
                <img src="{{asset($setting->favicon)}}" alt="favicon" />
                <img src="{{asset($setting->logo)}}" alt="logo" />
            </a>
            <button class="navbar-toggler menu" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                MENU
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                    class="bi bi-text-paragraph" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2 12.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm4-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z" />
                </svg>
            </button>
            <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="container">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title menulogo" id="offcanvasNavbarLabel">
                            <img src="{{asset($setting->favicon)}}" alt="favicon" />
                            <img src="{{asset($setting->logo)}}" alt="logo" />
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <!-- Menu Links  -->
                    <div class="offcanvas-body">
                        <ul
                            class="navbar-nav justify-content-end flex-grow-1 p-4 align-items-center align-content-center">
                            <li class="nav-item">
                                <span class="text-uppercase" style="font-size: 18px; color: #8b8e93">menu</span>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">projects</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/about.html">about me</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/contact.html">contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Dribble</a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Menu Links  -->
                    <div class="copyright">
                        <p>
                            &copy;
                            <script>
                                document.write(new Date().getFullYear());

                            </script>
                            {{$setting->copyright}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- ==========================    NavBar End    ==========================  -->

    <!-- ==========================    Header Section Start     ==========================  -->
    <section id="header" class="header">
        <div class="container">
            <div class="header_logo">
                <img src="images/jkj.png" class="header_logo-img" alt="header logo" />
            </div>
            <div class="row">
                <div class="col-4 header_personal d-md-block">
                    <img src="{{asset($setting->persnalImage)}}" class="header-personal-img" alt="personal image" />
                </div>
                <div class="col-lg-7 col-md-6 header_content">
                    <div class="space">
                        <h5 class="header_content-user">{{$setting->fullname}}</h5>
                        <h1 class="header_content-job h1"> {{$setting->jobTitle}}</h1>
                        <div class="header_content-wrap">
                            <p class="header_content-wrap-info">
                                {{$setting->description}}
                            </p>
                        </div>
                        <div>
                            <a href="#" class="header_content-links m-2">view Projects</a>
                            or
                            <a href="#" class="header_content-links m-2"> Read about me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <a class="col-12 header_content-icon mt-md-2" href="#case-study">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
            class="bi bi-arrow-down-square" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.5 2.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
        </svg>
    </a>
    <!-- ==========================    Header Section End    ==========================  -->
    <!-- ==========================    Main Content Start     ==========================  -->

    <div class="main">
        <!-- ==========================    Case Studies  Section Start     ==========================  -->

        <section id="case-study" class="case-study">
            <div class="container">
                <h5 class="case-study_project">selected projects</h5>
                <h1 class="case-study_title">case studies</h1>
                <div class="row mt-5">
                    <div class="col-md-6 col-sm-12 mb-4">
                        <div class="card bg-dark text-white">
                            <img src="https://cdn.pixabay.com/photo/2021/10/24/18/16/stream-6738889__340.jpg"
                                class="card-img" alt="..." />
                            <div class="card-img-overlay">
                                <p class="card-text">2018 - 2022</p>
                                <h5 class="card-title">
                                    ful stack - blog multi user with laravel
                                </h5>
                                <a class="card-link" href="/portfolio.html">view case study<span>&#8594;</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-4">
                        <div class="card bg-dark text-white">
                            <img src="https://cdn.pixabay.com/photo/2021/11/17/16/40/bike-ride-6804105__340.jpg"
                                class="card-img" alt="..." />
                            <div class="card-img-overlay">
                                <p class="card-text">2018 - 2022</p>
                                <h5 class="card-title">
                                    ful stack - blog multi user with laravel
                                </h5>
                                <a class="card-link" href="#">view case study<span>&#8594;</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-4">
                        <div class="card bg-dark text-white">
                            <img src="https://cdn.pixabay.com/photo/2020/09/16/04/02/skyline-5575251__340.jpg"
                                class="card-img" alt="..." />
                            <div class="card-img-overlay">
                                <p class="card-text">2018 - 2022</p>
                                <h5 class="card-title">
                                    ful stack - blog multi user with laravel
                                </h5>
                                <a class="card-link" href="#">view case study<span>&#8594;</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-4">
                        <div class="card bg-dark text-white">
                            <img src="https://cdn.pixabay.com/photo/2019/04/03/03/06/treatment-4099432__340.jpg"
                                class="card-img" alt="..." />
                            <div class="card-img-overlay">
                                <p class="card-text">2018 - 2022</p>
                                <h5 class="card-title">
                                    ful stack - blog multi user with laravel
                                </h5>
                                <a class="card-link" href="#">view case study<span>&#8594;</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ==========================    Case Studies  Section End    ==========================  -->

        <!-- ==========================    Work Together  Start     ==========================  -->
        <section class="work mt-3">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12">
                        <p class="work_alert">need a full stack developer?</p>
                        <div class="work_link">
                            <a class="h1" href="#">let's work together</a>
                            <span>&#8594;</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ==========================    Work Together End     ==========================  -->
    </div>
    <!-- ==========================    Main Conten End     ==========================  -->

    <!-- ==========================    Footer Start      ==========================  -->
    <footer class="footer">
        <div class="container">
            <hr />
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <h5 class="footer_title">Contact information —</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <p class="footer_text">
                                Feel free to reach out to me any time. I prefer to talk over
                                email, especially since we may be a few time zones away.
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <h5 class="footer_title">Latest projects —</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#">project</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">project2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">project3</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <h5 class="footer_title">Follow me on —</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="#" class="nav-link">facebook</a>
                            <a href="#" class="nav-link">youtube</a>
                            <a href="#" class="nav-link">twitter</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <h5 class="footer_title">Current availability —</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <p class="footer_text">
                                Feel free to reach out to me any time. I prefer to talk over
                                email, especially since we may be a few time zones away.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- ==========================    Footer End      ==========================  -->

    <!-- ==========================    CopyRight Start      ==========================  -->
    <div class="copyright mt-5">
        <div class="conatainer">
            <p>
                &copy;
                <script>
                    document.write(new Date().getFullYear());

                </script>
                {!! $setting->copyright !!}
            </p>
        </div>
    </div>
    <!-- ==========================    CopyRight End      ==========================  -->

    <!-- ==========================    Bootstrap js Start     ==========================  -->

    <script src="{{asset('js/front/bootstrap.min.js')}}"></script>

    <!-- ==========================    Bootstrap js End    ==========================  -->

    <!-- ==========================    Main js Start     ==========================  -->

    <script src="{{asset('js/front/main.js')}}"></script>

    <!-- ==========================    Main js End    ==========================  -->
</body>

</html>
