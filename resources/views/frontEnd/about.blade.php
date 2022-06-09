<x-frontend-master>
    <!-- ==========================    Loader  Start    ==========================  -->
    @section('load')
        <div class="loader show" id="loading">
      <div class="loader_icon"></div>
      <div class="loader_text">
        <h5 class="loader_text-title">{{__('about_me')}}</h5>
        <p class="loader_text-des">full stack developer</p>
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
            i'm lahcen oubbaih, a full stack developer who focuses on design and
            build app from back into front.
          </h1>
          <p class="about-header_text">
            Over the past 9 years I have been working with big companies and
            rising startups around the world as a designer and art director,
            working solo and leading small design teams. In my spare time I
            enjoy photography and motorcycle adventures.
          </p>
        </header>
        <!-- ==========================    Mani Content Haeder End    ==========================  -->

        <!-- ==========================    Mani Content Slider Satrt    ==========================  -->

        <div
          id="carouselExampleFade"
          class="carousel slide carousel-fade"
          data-bs-ride="carousel"
        >
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="https://cdn.pixabay.com/photo/2017/08/07/16/36/cat-2605502__340.jpg"
                class="d-block w-100"
                alt="..."
              />
            </div>
            <div class="carousel-item">
              <img
                src="https://cdn.pixabay.com/photo/2019/09/19/06/04/young-woman-4488313__340.jpg"
                class="d-block w-100"
                alt="..."
              />
            </div>
            <div class="carousel-item">
              <img
                src="https://cdn.pixabay.com/photo/2021/11/17/16/40/bike-ride-6804105__340.jpg"
                class="d-block w-100"
                alt="..."
              />
            </div>
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
                photoshop
                <em>/</em>
                illustrator
                <em>/</em>
                adobexd
              </h3>
            </div>
            <div class="col-6">
              <h5 class="services_small">{{__('words.services')}}</h5>
              <h3 class="services_big">
                web & mobile
                <em>/</em>
                illustrator
                <em>/</em>
                adobexd
              </h3>
            </div>
          </div>
        </section>
        <!-- ==========================    Tools & Services End    ==========================  -->
        <!-- ==========================    Experience start    ==========================  -->
        <section class="experience">
          <h5 class="experience_small">{{__('words.experience')}}</h5>
          <h3 class="experience_big">over 9 years of experince</h3>
          <p class="experience_text">
            I’ve been lucky enough to establish relationships with amazing
            clients from all over the world, ranging from individual clients,
            through up-and-coming startups, to multinational companies. For more
            details, head over to my LinkedIn profile.
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
                  <a class="h1" href="{{route('contact.index')}}">{{__('words.lets_work_together')}}</a>
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