<x-frontend-master>
    @section('seo')
    <title>{{$setting->fullname}} | {{__('words.projectsList')}}</title>
    <link rel="canonical" href="{{env('APP_URL')}}/project" />
    <meta name="description" content="show case of my all projects that i worked in, include personal projects and also client projects">
    <meta name="keyword" content="lahcen,oubbaih,portfolio,freelancer,web ,developer,remote work ,hiring me ,developer">

    @endsection
    @section('main')
    <div class="main" style="margin-top: 8rem;">
        <!-- ==========================    Case Studies  Section Start     ==========================  -->

        <section id="case-study" class="case-study">
            <div class="container">
                <h5 class="case-study_project">{{__('words.selected_projects')}}</h5>
                <h1 class="case-study_title">{{__('words.case_studies')}}</h1>
                <div class="row mt-5">
                    @foreach ($projects as $project)
                    <div class="col-md-6 col-sm-12 mb-4">
                        <div class="card bg-dark text-white">
                            <img src="{{ Storage::disk('s3')->url($project->featureImage)}}" class="card-img"
                                alt=" {{$project->casestudy}}" />
                            <div class="card-img-overlay">
                                <p class="card-text">{{$project->year}}</p>
                                <h5 class="card-title">
                                    {{$project->casestudy}}
                                </h5>
                                <a class="card-link"
                                    href="{{route('project.first' ,str_replace(' ' , '-' ,$project->casestudy) )}}">{{__('words.view_case_study')}}<span>&#8594;</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>


    </div>
    @endsection
</x-frontend-master>
