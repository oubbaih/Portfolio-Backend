<x-frontend-master>
 @section('seo')
  <title>{{__('words.portfolio')}} | {{__('words.contact')}}</title>
  <link rel="canonical" href="{{env('APP_URL')}}/contact" />
	<meta name="description" content="{{$about->present_des}}">
    <meta name="keyword" content="lahcen,oubbaih,portfolio,freelancer,web ,developer,remote work ,hiring me ,developer">

    @endsection
<!-- ==========================    Loader  Start    ==========================  -->
  @section('load')
          <div class="loader show" id="loading">
      <div class="loader_icon"></div>
      <div class="loader_text">
        <h5 class="loader_text-title">{{__('words.contact')}}</h5>
        <p class="loader_text-des">{{__('words.get_in_touch')}}</p>
      </div>
    </div>
  @endsection
    <!-- ==========================    Loader End    ==========================  -->
    <!-- ==========================    Main Contant Start    ==========================  -->
    @section('main')
        <main class="contact-main">
      <div class="container">
        <div class="contact-main_wrapper">
          <div class="google-map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27719.94999399943!2d-8.995571303092154!3d29.719940318704275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdb6b05811db5691%3A0x43f1121da18b2287!2sTafraoute!5e0!3m2!1sen!2sma!4v1653952148137!5m2!1sen!2sma"
              width="600"
              height="450"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
          <div class="contact-main_wrapper-simple">
            <p class="word-1">let's</p>
            <p class="word-2">wor<span>k</span></p>
            <p class="word-3">toge</p>
            <p class="word-4">ther</p>
          </div>
        </div>

        <!-- ==========================    Contact Form Section Start    ==========================  -->

        <section class="contact-section">
          <div class="row">
            <div class="col-md-12 col-lg-4">
              <h5 class="contact-section_small mt-5">{{__('words.contact')}}</h5>
              <h3 class="contact-section_big">
               {{__('words.get')}}
              </h3>
              <div class="contact-section_text">
                <h5 class="contact-section_small mt-5">{{__('words.address')}}</h5>
                <h3>{{$setting->address}}</h3>
              </div>
            </div>
            <div class="col-md-12 col-lg-8">
              <h3 class="contact-section-form_info">
               {{__('words.contact_message')}}
              </h3>
              <form action="{{route('contact.store')}}" class="contact-section-form_inputs" method="POST">
                @csrf
                <div class="row g-3">
                  <div class="col">
                    <label class="form-label" for="inputName">{{__('words.your_name')}}</label>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="{{__('words.your_name')}}"
                      aria-label="{{__('words.your_name')}}"
                      name="name"
                    />
                  </div>
                  <div class="col">
                    <label class="form-label" for="inputEmail"
                      >{{__('words.your_email')}}</label
                    >
                    <input
                      type="email"
                      class="form-control"
                      placeholder="{{__('words.your_email')}}"
                      aria-label="{{__('words.your_email')}}"
                      name="email"

                    />
                  </div>
                </div>
                <div class="row g-3">
                  <div class="col">
                    <label class="form-label" for="inputName">{{__('words.services')}}</label>
                    <select
                      class="form-select"
                      aria-label="Default select example"
                      name="service"

                    >
                      <option selected>{{__('words.what_are_you_intersted_in')}}</option>
                      <option value="{{__('words.op1')}}">{{__('words.op1')}}</option>
                      <option value="{{__('words.op2')}}">{{__('words.op2')}}</option>
                      <option value="{{__('words.op3')}}">{{__('words.op3')}}</option>
                      <option value="{{__('words.op4')}}">{{__('words.op4')}}</option>
                    </select>
                  </div>
                  <div class="col">
                    <label class="form-label" for="inputEmail">{{__('words.budget')}}</label>
                    <select
                      class="form-select"
                      aria-label="Default select example"
                      name="budget"

                    >
                      <option selected>{{__('words.whats_your_budget')}}</option>
                      <option value="$1000 - $2500">$0 - $500</option>
                      <option value="$1000 - $2500">$500 - $1000</option>
                      <option value="$1000 - $2500">$1000 - $2500</option>
                      <option value="$2500 - $5000">$2500 - $5000</option>
                      <option value="$5000 - $10000">$5000 - $10000</option>
                      <option value="$10000">$10000 {{__('words.more')}}</option>
                    </select>
                  </div>
                  <label class="form-label" for="inputEmail">{{__('words.whats_your_message')}}</label>
                  <textarea
                    type="text"
                    class="form-control mt-5"
                    placeholder="{{__('words.whats_your_message')}}"
                    aria-label="{{__('words.whats_your_message')}}"
                      name="message"

                  ></textarea>
                </div>
                <button class="btn-custom" type>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    fill="currentColor"
                    class="bi bi-envelope"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"
                    />
                  </svg>
                  {{__('words.send_message')}}
                </button>
              </form>
            </div>
          </div>
        </section>

        <!-- ==========================     Contact Form Section End     ==========================  -->
      </div>
    </main>
    @endsection
    
    <!-- ==========================    Main Contant End    ==========================  -->
</x-frontend-master>