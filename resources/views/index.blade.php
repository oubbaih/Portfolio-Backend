<x-frontend-master>
    @section('seo')
    <title>{{__('words.portfolio')}} | {{$setting->fullname}}</title>
    <link rel="canonical" href="{{env('APP_URL')}}" />
    <meta name="description" content="{{$setting->description}}">
    @endsection
    @section('styles')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @endsection
    @section('load')
    <div class="loader show" id="loading">
        <div class="loader_icon"></div>

        <div class="loader_text">
            <h5 class="loader_text-title">{{__('words.welcome')}}</h5>
            <p class="loader_text-des">{{__('words.wait_a_bit')}}</p>
        </div>
    </div>
    @endsection
    <!-- ==========================    Header Section Start     ==========================  -->
    @section('header')
    <section id="header" class="header">
        <div class="container">
            <div class="header_logo">
                <img src="{{ Storage::disk('s3')->url($setting->bgImage)}}" class="header_logo-img" alt="header logo" />
            </div>
            <div class="row">
                <div data-aos="fade-left">
                    <div class="col-4 header_personal d-md-block">
                        <img src="{{ Storage::disk('s3')->url($setting->persnalImage)}}" class="header-personal-img"
                            alt="personal image" />
                    </div>
                </div>
                <div data-aos="fade-right">
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
                                <a href="/#" class="header_content-links m-2">{{__('words.view_project')}}</a>
                                {{__('words.or')}}
                                <a href="/#" class="header_content-links m-2">{{__('words.read_about_me')}}</a>
                            </div>
                            <div class="mt-2">
                                <a href="/download" class="btn btn-outline-dark">{{__('words.cv')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <!-- ==========================   CV Download Link Start    ==========================  -->
    <!-- ==========================    CV Download Link End      ==========================  -->
    <a class="col-12 header_content-icon mt-md-2" href="/#case-study">
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
        <div>
        </div>
        <!-- ==========================    Case Studies  Section Start     ==========================  -->

        <section id="case-study" class="case-study">
            <div class="container">
                <div data-aos="fade-right">
                    <h5 class="case-study_project">{{__('words.selected_projects')}}</h5>
                </div>
                <div data-aos="fade-left">
                    <h1 class="case-study_title">{{__('words.case_studies')}}</h1>
                </div>
                <div class="row mt-5">
                    @foreach ($projects as $project)

                    <div class="col-md-6 col-sm-12 mb-4">
                        <div data-aos="fade-right">
                            <div class="card bg-dark text-white">

                                <img src=" {{ Storage::disk('s3')->url($project->featureImage)}}" class="card-img"
                                    alt=" {{$project->casestudy}}" />


                                <div class="card-img-overlay">
                                    <p class="card-text">{{$project->year}}</p>
                                    <h5 class="card-title">
                                        {{$project->casestudy}}
                                    </h5>
                                    <a class="card-link"
                                        href="{{route('project.view' , $project)}}">{{__('words.view_case_study')}}<span>&#8594;</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!-- ==========================    Case Studies  Section End    ==========================  -->

        <!-- ==========================    Work Together  Start     ==========================  -->
        <section class="work mt-3">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12">
                        <div data-aos="fade-right">
                            <p class="work_alert">{{__('words.need_a_full_stack_developer')}}</p>
                        </div>
                        <div data-aos="fade-left">
                            <div class="work_link">
                                <a class="h1" href="{{route('contact.front')}}">{{__('words.lets_work_together')}}</a>
                                <span>&#8594;</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ==========================    Work Together End     ==========================  -->


        <!-- ==========================    Main Conten End     ==========================  -->


    </div>
    @endsection
    @section('scripts')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 400,
            duration: 1000,
        });

    </script>
    @endsection
</x-frontend-master>
