<x-frontend-master>
	<!-- ==========================    Loader  Start    ==========================  -->
	@section('load')
	<div class="loader show" id="loading">
		<div class="loader_icon"></div>
		<div class="loader_text">
			<h5 class="loader_text-title">welcome</h5>
			<p class="loader_text-des">wait a bite ...</p>
		</div>
	</div>
	@endsection
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


	<!-- ==========================    NavBar End    ==========================  -->

	<!-- ==========================    Main Content Start     ==========================  -->
@section('main')
	<div class="main">
		<!-- ==========================    Portfolio Details Start     ==========================  -->

		<div class="portfolio">
			<div class="container">
				<div class="row">
					<div class="col-6">
						<div class="case">
							<div class="case-study">
								<h5 class="portfolio_small">case study</h5>
								<h3 class="portfolio_big">Symova — responsive website design</h3>
							</div>
							<div class="case-study">
								<h5 class="portfolio_small">my role</h5>
								<h3 class="portfolio_big">
									Creative Direction UX / UI Website Design Icon Design
								</h3>
							</div>
							<div class="case-study">
								<h5 class="portfolio_small">client</h5>
								<h3 class="portfolio_big">Symova</h3>
							</div>
							<div class="case-study">
								<h5 class="portfolio_small">year</h5>
								<h3 class="portfolio_big">2020</h3>
							</div>
						</div>
					</div>

					<div class="col-6">
						<p class="portfolio_text">
							Symova is a pension fund for medium and large companies in the
							public transport and tourism sector in Switzerland.

							They need a completely new design for their website, which would be
							optimized for mobile devices and would support their updated
							strategy with new features and modern technology. Together with
							cloudtec AG, our goal was to establish a clear, friendly and
							trustworthy brand presence.

							The design needed to be simple, and
							the navigation easy to understand to ensure that all the
							information was easy to access for a large group of their
							clients and employees.

							After receiving some basic brand
							guidelines (logo and colors), I had a free hand with my creative
							process, with some good input from the client. The outcome was a
							revitalized digital experience, focused on information
							architecture, consistent typography and bright colors, with
							references to their public transport and tourism roots. This
							makes Symova distinctive and unique in their sector.
							<div>
								<span class="portfolio_agency">Agency: </span>
								<strong class="portfolio_name">cloudtec AG</strong>
							</div>
						</p>
					</div>
				</div>
			</div>
		</div>
		<!-- ==========================    Portfolio Details End     ==========================  -->
		<!-- ==========================    Portfolio Images Show Case Start     ==========================  -->
		<div class="image-showcase">
			<div class="row">
				<img src="https://cdn.pixabay.com/photo/2022/05/18/10/27/sea-7204955__480.jpg" class="img-fluid" alt="...">
			</div>
		</div>
		<!-- ==========================    Portfolio Images Show Case End     ==========================  -->



	</div>
@endsection
	<!-- ==========================    Main Conten End     ==========================  -->


</x-frontend-master>