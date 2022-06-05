<x-frontend-master>
    @section('load')
        <div class="loader show" id="loading">
        <div class="loader_icon"></div>
        <div class="loader_text">
            <h5 class="loader_text-title">welcome</h5>
            <p class="loader_text-des">wait a bite ...</p>
        </div>
    </div>
    @endsection
    <!-- ==========================    Header Section Start     ==========================  -->
    @section('header')
    <section id="header" class="header">
        <div class="container">
            <div class="header_logo">
                <img src="{{asset($setting->bgImage)}}" class="header_logo-img" alt="header logo" />
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
    @endsection

    <!-- ==========================    Header Section End    ==========================  -->
    <!-- ==========================    Main Content Start     ==========================  -->
    @section('main')
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
    @endsection

    <!-- ==========================    Main Conten End     ==========================  -->




</x-frontend-master>
