<script async src="https://www.googletagmanager.com/gtag/js?id=G-BJGNXBETHP"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-BJGNXBETHP');
</script>

<!DOCTYPE html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}"
    dir="{{ LaravelLocalization::getCurrentLocale()  === 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/gif/png/svg" href="{{Storage::disk('s3')->url($setting->favicon)}}" />
    <link rel="stylesheet" href="{{asset('css/style-front.css')}}" />
    <meta name="robots" content="index, follow ,max-snippet:20, max-image-preview:large" />
    @yield('seo')
    <style>
        @font-face {
            font-family: 'Helvetica Now Display DW';
            src: url('fonts/HelveticaNowDisplay-Bold.ttf');
            font-family: 'Noto Sans Arabic', sans-serif;
        }
    </style>
    <!-- ==========================     Font Arab  End    ==========================  -->
    @yield('styles')
    <!-- ==========================    Font Arab  Start    ==========================  -->
    @if (LaravelLocalization::getCurrentLocale() === 'ar')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Arabic:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/front-style-rtl.css')}}">
    <style>
        .loader_text{
            left: auto !important;
            right:5%;
            
        }
    </style>
    @endif

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HZ309K8G3S"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-HZ309K8G3S');

    </script>
</head>

<body>




    <!-- ==========================    Loader  Start    ==========================  -->
    @yield('load')
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
        <a class="contact_icon" href="{{route('contact.front')}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope"
                viewBox="0 0 16 16">
                <path
                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
            </svg>
            <span class="contact_name">{{__('words.contact')}}</span>
        </a>
    </div>
    <!-- ==========================    Contact Icon end    ==========================  -->

    <!-- ==========================    NavBar Start    ==========================  -->
    <nav class="navbar fixed-top" id="navbar-id">
        <div class="container">
            <a class="navbar-brand logo" href="/">
                <img src="{{Storage::disk('s3')->url($setting->favicon)}}" alt="favicon" />
                <img src="{{Storage::disk('s3')->url($setting->logo)}}" alt="logo" />
            </a>
            <button class="navbar-toggler menu" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" id="menu-btn" aria-controls="offcanvasNavbar">
                {{__('words.menu')}}
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
                        <a class="offcanvas-title menulogo" id="offcanvasNavbarLabel" href="/">
                            <img src="{{Storage::disk('s3')->url($setting->favicon)}}" alt="favicon" />
                            <img src="{{Storage::disk('s3')->url($setting->logo)}}" alt="logo" />
                        </a>
                        <button type="button" class="btn-close" id="close" data-bs-dismiss="offcanvas"
                            aria-label="Close">
                            {{__('words.close')}}
                        </button>
                    </div>
                    <!-- Menu Links  -->
                    <div class="offcanvas-body">

                        <ul
                            class="navbar-nav justify-content-end flex-grow-1 p-4 align-items-center align-content-center">
                            <li class="nav-item">
                                <span class="text-uppercase"
                                    style="font-size: 18px; color: #8b8e93">{{__('words.menu')}}</span>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('project.front')}}">{{__('words.projects')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('about.front')}}">{{__('words.about_me')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('contact.front')}}">{{__('words.contact')}}</a>
                            </li>
                            @if (Auth()->user())
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('dashboard')}}">{{__('words.dashboard')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('words.logout') }}
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                            @endif

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
    @yield('header')
    @yield('main')


    <!-- ==========================    Footer Start      ==========================  -->
    <footer class="footer">
        <div class="container">
            <hr />
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <h5 class="footer_title">{{__('words.contact_information')}} ???</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <p class="footer_text">
                                {{__('words.contact_text')}}
                            </p>
                            <span>{{__('words.email')}}:{{$setting->email}} </span>
                            <span>{{__('words.phone')}}:{{$setting->phone}} </span>
                        </li>


                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <h5 class="footer_title">{{__('words.latest_projects')}} ???</h5>
                    <ul class="nav flex-column">
                        @foreach($projects as $project)
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('project.first' ,str_replace(' ' , '-' ,$project->casestudy) )}}">{{$project->casestudy}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <h5 class="footer_title">{{__('words.follow_me_on')}} ???</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            @if($setting->fb)
                            <a  target="_blank" href="https://www.facebook.com/{{$setting->fb}}"  class="nav-link">{{__('words.fb')}}</a>
                            @endif
                             @if($setting->yt)
                            <a href="https://www.youtube.com/{{$setting->yt}}" target="_blank" class="nav-link">{{__('words.yt')}}</a>
                             @endif
                             @if($setting->tw)
                            <a href="https://twitter.com/{{$setting->tw}}" target="_blank" class="nav-link">{{__('words.tw')}}</a>
                             @endif
                             @if($setting->ink)
                            <a href="https://www.linkedin.com/{{$setting->ink}}" target="_blank" class="nav-link">{{__('words.ink')}}</a>
                             @endif
                             @if($setting->lk)
                            <a href="https://github.com/{{$setting->lk}}" target="_blank" class="nav-link">{{__('words.lk')}}</a>
                             @endif
                             @if($setting->tk)
                            <a href="https://www.tiktok.com/{{$setting->tk}}" target="_blank" class="nav-link">{{__('words.tk')}}</a>
                             @endif

                        </li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <h5 class="footer_title">{{__('words.current_availability')}} ???</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <p class="footer_text">
                                {{__('words.availability_text')}}
                            </p>
                        </li>
                    </ul>
                    <h5 class="footer_title">{{__('words.languages')}} ???</h5>
                    <ul class="nav flex-column">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li class="nav-item">
                            <a rel="alternate" hreflang="{{ $localeCode }}"
                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                class="footer_text nav-link">
                                {{ $properties['native'] }}
                            </a>
                        </li>
                        @endforeach
                        <li class="nav-item">
                            @if(Auth()->user())
                            <a class="nav-link" href="/login">
                                {{__('words.logout')}}
                            </a>
                            @else
                            <a class="nav-link" href="/login">
                                {{__('words.login')}}
                            </a>
                            @endif</li>

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
    <script>
        let menuBTN = document.getElementById('menu-btn');
        menuBTN.addEventListener('click', function () {
            let offcanvas = document.getElementById('menu-btn');
        });

    </script>
    @yield('scripts')

</body>

</html>
