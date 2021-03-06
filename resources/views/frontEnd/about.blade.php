<x-frontend-master>
 @section('seo')
     <link rel="canonical" href="{{env('APP_URL')}}/about" />
    <title>{{__('words.portfolio')}} | {{$about->present_title}}</title>
	  <meta name="description" content="{{$about->present_des}}">
    <meta name="keyword" content="lahcen,oubbaih,portfolio,freelancer,web ,developer,remote work ,hiring me ,developer">
    @endsection

    <!-- ==========================    Loader  Start    ==========================  -->
  @section('load')
        <div class="loader show" id="loading">
      <div class="loader_icon"></div>
      <div class="loader_text">
        <h5 class="loader_text-title">{{__('words.about_me')}}</h5>
        <p class="loader_text-des">{{\Illuminate\Support\Str::limit($about->present_title,40)}}</p>
      </div>
    </div>
    @endsection
    <!-- ==========================    Loader End    ==========================  -->

    <!-- ==========================    NavBar Start    ==========================  -->

<!-- ==========================    NavBar End    ==========================  -->
   @section('main') 
   <main class="about-main">
      <div class="container">
        <!-- ==========================    Mani Content Haeder Satrt    ==========================  -->

        <header class="about-header">
          <h5 class="about-header_small">{{__('words.few_word')}}</h5>
          <h1 class="about-header_big">
           {{$about->present_title}}
          </h1>
          <p class="about-header_text">
           {{$about->present_des}}
          </p>
               <!-- ==========================   CV Download Link Start    ==========================  -->
               <div class="d-grid gap-2 col-6 mx-auto">
                <a href="/download" class="  mt-5 btn btn-secondary btn-lg ">{{__('words.cv')}}</a>
               </div>
        <!-- ==========================    CV Download Link End      ==========================  -->
      
      </header>

   
        <!-- ==========================    Mani Content Haeder End    ==========================  -->

        <!-- ==========================    Mani Content Slider Satrt    ==========================  -->

        <div
          id="carouselExampleFade"
          class="carousel slide carousel-fade"
          data-bs-ride="carousel"
        >
          <div class="carousel-inner">
            @if ($about->images != null)
                
            @foreach ($about->images as $image)
                <div class="carousel-item @if ($loop->index === 0)
                    active
                @endif ">
              <img
                src="{{ Storage::disk('s3')->url($image)}}"
                class="d-block w-100"
                alt="{{$loop->index}}"
              />
            </div>
            @endforeach
            @endif
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleFade"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">{{__('words.previous')}}</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleFade"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">{{__('words.next')}}</span>
          </button>
        </div>

        <!-- ==========================    Mani Content Slider End    ==========================  -->

        <!-- ==========================    Tools & Services Satrt    ==========================  -->
        <section class="services">
          <div class="row">
            <div class="col-6">
              <h5 class="services_small">{{__('words.tools')}}</h5>
              <h3 class="services_big">
                @foreach (explode(" ",$about->tools) as $tool)
                    {{$tool}}
                <em>/</em>
                @endforeach
              </h3>
            </div> 
             <div class="col-6">
              <h5 class="services_small">{{__('words.services')}}</h5>
              <h3 class="services_big">
                    @foreach (explode(" ",$about->services) as $service)
                    {{$service}}
                <em>/</em>
                @endforeach
              </h3>
            </div>
          </div>
        </section>
        <!-- ==========================    Tools & Services End    ==========================  -->
        <!-- ==========================    Experience start    ==========================  -->
        <section class="experience">
          <h5 class="experience_small">{{__('words.experience')}}</h5>
          <h3 class="experience_big">{{$about->experience_title}}</h3>
          <p class="experience_text">
           {{$about->experience_des}}
          </p>
        </section>
        <!-- ==========================    Experience End    ==========================  -->
        <!-- ==========================    Work Together  Start     ==========================  -->
        <section class="work mt-3">
          <div class="container">
            <div class="row text-center">
              <div class="col-12">
                <p class="work_alert">{{__('words.need_a_full_stack_developer')}}</p>
                <div class="work_link">
                  <a class="h1" href="{{route('contact.front')}}">{{__('words.lets_work_together')}}</a>
                  <span>&#8594;</span>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- ==========================    Work Together End     ==========================  -->
      </div>
    </main> 
@endsection


    <!-- ==========================    Footer Start      ==========================  -->
</x-frontend-master> 