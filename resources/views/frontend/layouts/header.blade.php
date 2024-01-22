<section class="header">

	<div class="container">

		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="#"><img src="{{url('public/upload/logo_images/'.$logo->image)}}"></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="{{route('index')}}">Home</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="">About US</a>
						</li>

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Services
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li ><a class="dropdown-item" style="color: black" href="{{route('wade')}}">Workflow Automation And Data Engineering </a></li>
								<li ><a class="dropdown-item" style="color: black" href="">Software Product Engineering</a></li>
								<li ><a class="dropdown-item" style="color: black" href="">Enterprise Scale Platforms and Framework Development</a></li>
								<li ><a class="dropdown-item" style="color: black" href="">Applied AI Solutions</a></li>

								{{--<li><hr class="dropdown-divider"><strong style="padding-left: 10px;background-color:green;opacity: 1;">Organizational Structure</strong></li>
								<li><a class="dropdown-item" href="{{route('foundationcommittee')}}">Foundation Committees</a></li>
								<li><a class="dropdown-item" href="{{route('executivecommittee')}}">Executive Committee</a></li>
								<li><a class="dropdown-item" href="{{route('auditcommittee')}}">Audit Committee</a></li>
								<li><a class="dropdown-item" href="{{route('hospitalcommittee')}}">Hospital Committee</a></li>
								<li><a class="dropdown-item" href="{{route('communityhospitalcommittee')}}">Community Hospital Committee</a></li>
								<li><a class="dropdown-item" href="{{route('communityhospitalboard')}}">Islami Bank Community Hospitals Board</a></li>
								<li><a class="dropdown-item" href="">Executive Committee of Islami Bank Health Educational Institutions</a></li>
								<li><a class="dropdown-item" href="{{route('healtheducationcommittee')}}">Education,Health Education & Social Work Committee</a></li>
--}}

							</ul>
						</li>

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Technology Expertise
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li ><a class="dropdown-item" style="color: black" href="">LabView</a></li>
								<li ><a class="dropdown-item" style="color: black" href="">Full Stack Vevelopment</a></li>

							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Products
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li ><a class="dropdown-item" style="color: black" href="">Mavis</a></li>
								<li ><a class="dropdown-item" style="color: black" href="">Digital Product Validation Solutions</a></li>
								<li><a class="dropdown-item" href="#">DIVE-Waveform Analysis</a></li>
								<li><a class="dropdown-item" href="#">Protocol Analyzer Solutions</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Company  </a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#"> About Solution </a></li>
								<li><a class="dropdown-item" href="#"> News & Events &raquo; </a>
									<ul class="submenu dropdown-menu">
										<li><a class="dropdown-item" href="#">Corporate Social Responsibility</a></li>

										<li><a class="dropdown-item" href="#">News Letter</a></li>
										<li><a class="dropdown-item" href="#">Events</a></li>
									</ul>
								</li>
								<li><a class="dropdown-item" href="#"> Blogs </a></li>
								<li><a class="dropdown-item" href="#"> Case Studies </a></li>
								<li><a class="dropdown-item" href="#"> Leadership Team </a></li>
								<li><a class="dropdown-item" href="#"> Careers &raquo; </a>
									<ul class="submenu dropdown-menu">
										<li><a class="dropdown-item" href="#">Job Opening</a></li>
										<li><a class="dropdown-item" href="#">Employee Value Proposition</a></li>

									</ul>
								</li>
								<li><a class="dropdown-item" href="#">Privicy Policy</a></li>

							</ul>
						<li class="nav-item">
							<a class="nav-link" href="{{route('contact')}}">Contract US</a>
						</li>

					</ul>
				</div>
			</div>
		</nav>


	</div>



</section>