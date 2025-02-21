<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<!--favicon -->
		<link rel="icon" href="{{ asset('images/conc.png') }}" type="image/png">

		<!-- TITLE -->
		<title>Concours 2024/2025</title>

		<!-- BOOTSTRAP CSS -->
		<link id="style" href={{ asset("solic_pro/assets/plugins/bootstrap/css/bootstrap.min.css") }} rel="stylesheet">
		
		


		<!-- STYLES CSS -->
		<link href={{ asset("solic_pro/assets/css/style.css") }} rel="stylesheet" >

		<!-- PLUGIN CSS -->
		<link href={{ asset("solic_pro/assets/css/plugin.css") }} rel="stylesheet">

		<!--- FONT-ICONS CSS -->
		<link href={{ asset("solic_pro/assets/css/icons.css") }} rel="stylesheet" >

		<!-- Switcher css -->
		<link href={{ asset("solic_pro/assets/switcher/css/switcher.css") }} rel="stylesheet" id="switcher-css" type="text/css" media="all" >
		<link href={{ asset("solic_pro/assets/switcher/demo.css") }} rel="stylesheet" >


		<style>
			/* Masquer complètement la barre de traduction Google */
			#google_translate_element,
			.goog-te-banner-frame,
			.goog-te-gadget,
			.goog-te-banner-frame.skiptranslate,
			.goog-te-menu-value span:first-child,
			.goog-logo-link,
			.goog-te-balloon-frame {
				display: none !important;
			}
		
			/* Empêcher Google Translate d'affecter toute la page */
			body {
				top: 0px !important;
			}
			
			/* Masquer le logo Google en bas */
			.goog-te-gadget span {
				display: none !important;
			}
		
			/* Masquer l'iframe de traduction */
			iframe.skiptranslate {
				display: none !important;
			}
			.alert-container {
			position: fixed;
			top: 20px;
			left: 50%;
			transform: translateX(-50%);
			z-index: 1050; /* Pour être au-dessus des autres éléments */
			width: auto; /* Ajuste la largeur selon tes besoins */
			max-width: 90%;
			}
			
			#goog-gt-tt, .VIpgJd-yAWNEb-L7lbkb {
			display: none !important;
			}


			

						#candidate-info {
				font-size: 1.5rem; /* Augmente la taille du texte */
				padding: 20px; /* Ajoute un espacement interne */
			}

		.salle-highlight {
			background-color: rgba(0, 128, 0, 0.3); /* Vert transparent */
			transition: background-color 1s ease-in-out;
		}



		</style>
		
	</head>

	<body class="sidebar-mini2 app sidebar-mini">
		
		

	    <!-- GLOBAL-LOADER -->
		<div id="global-loader">
			<img src={{ asset("solic_pro/assets/images/svgs/loader.svg") }} class="loader-img" alt="Loader">
		</div>

		<!-- START PAGE -->
		<div class="page">
			<div class="page-main">
				<div>
					<!-- START HEADER -->
					<div class="app-header sticky">
						<div class="main-container container-fluid d-flex ">
							<div class="d-flex header-left">
								<div class="responsive-logo">
									<a class="main-logo" href="">
										<img src={{ asset("images/conc.png") }}  class="desktop-logo desktop-logo-dark" alt="logo">
										<img src={{ asset("images/conc.png") }}  class="desktop-logo" alt="logo">
									</a>
								</div>
								<div class="header-nav-link">
									<a href="javascript:void(0);" data-bs-toggle="sidebar" class="nav-link icon toggle app-sidebar__toggle">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M4 11h12v2H4zm0-5h16v2H4zm0 12h7.235v-2H4z"></path></svg>
									</a>
								</div>

								<div id="google_translate_element" style="display: none;"></div>

								
								<div class="header-nav-link d-none d-lg-flex">
									<a href="javascript:void(0);" class="d-flex nav-link icon" data-bs-toggle="dropdown">
										<span id="current-lang" class="country-text ms-2 fs-14 fw-600">English<i class="mdi mdi-chevron-down ms-2"></i></span>
									</a>
									<ul class="dropdown-menu dropdown-menu-arrow">
										<li><a href="#" class="dropdown-item" data-lang="en">English</a></li>
										<li><a href="#" class="dropdown-item" data-lang="fr">French</a></li>
										<li><a href="#" class="dropdown-item" data-lang="de">German</a></li>
										<li><a href="#" class="dropdown-item" data-lang="it">Italian</a></li>
										<li><a href="#" class="dropdown-item" data-lang="ru">Russian</a></li>
										<li><a href="#" class="dropdown-item" data-lang="es">Spanish</a></li>
										<li><a href="#" class="dropdown-item" data-lang="ar">Arabic</a></li>

									</ul>
								</div>
								
							</div>
							<div class="d-flex header-right ms-auto">
								<div class="header-nav-link">
									<a href="javascript:void(0);" class="nav-link icon d-lg-none" role="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0-6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 12c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path></svg>
									</a>
								</div>
								<div class="responsive-navbar align-items-stretch navbar-expand-lg navbar-dark p-0 mb-0">
									<div class="collapse align-items-stretch navbar-collapse" id="navbarSupportedContent-4">
										<ul class="list-unstyled nav">

											<li class="header-nav-link">
												<a href="javascript:void(0);" class="nav-link icon" data-bs-toggle="modal" data-bs-target="#searchModal">
													<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"></path></svg>
												</a>
											</li><!-- Search -->

											<li class="header-nav-link header-fullscreen">
												<a href="javascript:void(0);" class="nav-link icon" id="fullscreen-button">
													<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M10 4H8v4H4v2h6zM8 20h2v-6H4v2h4zm12-6h-6v6h2v-4h4zm0-6h-4V4h-2v6h6z"></path></svg>
												</a>
											</li><!-- Fullscreen -->

											<li class="header-nav-link">
												<a href="javascript:void(0);" class="nav-link icon layout-setting light-layout">
													<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.742 13.045a8.088 8.088 0 0 1-2.077.271c-2.135 0-4.14-.83-5.646-2.336a8.025 8.025 0 0 1-2.064-7.723A1 1 0 0 0 9.73 2.034a10.014 10.014 0 0 0-4.489 2.582c-3.898 3.898-3.898 10.243 0 14.143a9.937 9.937 0 0 0 7.072 2.93 9.93 9.93 0 0 0 7.07-2.929 10.007 10.007 0 0 0 2.583-4.491 1.001 1.001 0 0 0-1.224-1.224zm-2.772 4.301a7.947 7.947 0 0 1-5.656 2.343 7.953 7.953 0 0 1-5.658-2.344c-3.118-3.119-3.118-8.195 0-11.314a7.923 7.923 0 0 1 2.06-1.483 10.027 10.027 0 0 0 2.89 7.848 9.972 9.972 0 0 0 7.848 2.891 8.036 8.036 0 0 1-1.484 2.059z"></path></svg>
												</a>
												<a href="javascript:void(0);" class="nav-link icon layout-setting dark-layout">
													<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M6.993 12c0 2.761 2.246 5.007 5.007 5.007s5.007-2.246 5.007-5.007S14.761 6.993 12 6.993 6.993 9.239 6.993 12zM12 8.993c1.658 0 3.007 1.349 3.007 3.007S13.658 15.007 12 15.007 8.993 13.658 8.993 12 10.342 8.993 12 8.993zM10.998 19h2v3h-2zm0-17h2v3h-2zm-9 9h3v2h-3zm17 0h3v2h-3zM4.219 18.363l2.12-2.122 1.415 1.414-2.12 2.122zM16.24 6.344l2.122-2.122 1.414 1.414-2.122 2.122zM6.342 7.759 4.22 5.637l1.415-1.414 2.12 2.122zm13.434 10.605-1.414 1.414-2.122-2.122 1.414-1.414z"></path></svg>
												</a>
											</li><!-- theme-layout -->

											<li class="header-nav-link dropdown">
												<a href="javascript:void(0);" class="nav-link icon text-center" data-bs-toggle="dropdown">
													<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19 13.586V10c0-3.217-2.185-5.927-5.145-6.742C13.562 2.52 12.846 2 12 2s-1.562.52-1.855 1.258C7.185 4.074 5 6.783 5 10v3.586l-1.707 1.707A.996.996 0 0 0 3 16v2a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-2a.996.996 0 0 0-.293-.707L19 13.586zM19 17H5v-.586l1.707-1.707A.996.996 0 0 0 7 14v-4c0-2.757 2.243-5 5-5s5 2.243 5 5v4c0 .266.105.52.293.707L19 16.414V17zm-7 5a2.98 2.98 0 0 0 2.818-2H9.182A2.98 2.98 0 0 0 12 22z"></path></svg>
													<span class="pulse bg-success"></span>
												</a>
												<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
													<div class="drop-heading">
														<div class="d-flex">
															<h5 class="mb-0 text-dark">Notifications</h5>
															{{-- <span class="badge bg-danger ms-auto br-5">4</span> --}}
														</div>
													</div>
													{{-- <div class="dropdown-divider mt-0"></div> --}}
													{{-- <div class="header-dropdown-scroll1">
														<a href="emailinbox.html" class="dropdown-item d-flex">
															<div class="notifyimg bg-success-transparent">
																<i class="fa fa-thumbs-o-up text-success"></i>
															</div>
															<div>
																<strong>Someone likes our posts.</strong>
																<div class="small text-muted">3 hours ago</div>
															</div>
														</a>
														<a href="emailinbox.html" class="dropdown-item d-flex">
															<div class="notifyimg bg-primary-transparent">
																<i class="fa fa-exclamation-triangle text-primary"></i>
															</div>
															 <div>
																<strong> Issues Fixed</strong>
																<div class="small text-muted">30 mins ago</div>
															</div> 
														</a>
														
														<a href="emailinbox.html" class="dropdown-item d-flex">
															<div class="notifyimg bg-danger-transparent">
																<i class="fa fa-cogs text-danger"></i>
															</div>
															<div>
																<strong> Server Rebooted.</strong>
																<div class="small text-muted">45 mintues ago</div>
															</div>
														</a>
														
													</div> --}}
													{{-- <div class="dropdown-divider mb-0"></div>
													<div class=" text-center p-2">
														<a href="" class="text-dark pt-0">View All Notifications</a>
													</div> --}}
												</div>
											</li><!-- Notification -->

										

											<li class="header-nav-link dropdown">
												<a href="javascript:void(0);" class="nav-link icon" data-bs-toggle="dropdown">
													<i class="icon icon-user"></i>
												</a>
												<ul class="dropdown-menu w-250 pt-0 dropdown-menu-arrow dropdown-menu-right">
													<li>
														<div class="dropdown-header mb-2 p-3 text-center">
															<img class="avatar avatar-xl rounded-circle mx-auto mb-2" src="{{ asset('solic_pro/assets/images/users/profile.png') }}" alt="image" height="150" width="auto">
															<h5 class="mb-0">{{ Auth::user()->nom }} {{ Auth::user()->prenom  }}</h5>
															<p class="mb-0 fs-13 opacity-75">{{ Auth::user()->email }}</p>
														</div>
													</li>
													
													<li>
														<a href="profile.html" class="dropdown-item d-flex align-items-center">
															<i class="ri-user-line fs-18 me-2 text-primary"></i>
															<span>Profile</span>
														</a>
													</li>
													<li>
														<a href="settings.html" class="dropdown-item d-flex align-items-center">
															<i class="ri-settings-5-line fs-18 me-2 text-primary"></i>
															<span>Settings</span>
														</a>
													</li>
													
													<li>
														<a href="faq.html" class="dropdown-item d-flex align-items-center">
															<i class="ri-question-line fs-18 me-2 text-primary"></i>
															<span>Need help?</span>
														</a>
													</li>
													<li>
														<a onclick="event.preventDefault();

														document.getElementById('logout-form').submit();" href="{{ url('/users/logout') }}" class="dropdown-item d-flex align-items-center">
															<i class="ri-logout-circle-r-line fs-18 me-2 text-primary"></i>
															<span>Sign out</span>
														</a>
														<form id="logout-form" action="{{ url('/logout') }}" method="Post" style="display: none;">

															{{ csrf_field() }}
				
														</form>
													</li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END HEADER -->

					<!-- START LEFT-SIDEBAR-MENU -->
					<div class="sticky">
						<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
						<aside class="app-sidebar">
							<div class="app-sidebar__header">
								<a class="main-logo" href="">
                                    <img src="{{ asset('images/conc.png') }}" class="desktop-logo desktop-logo-dark" alt="logo" width="150" height="auto">
									<img src={{ asset("images/conc.png" )}} class="desktop-logo" alt="logo" width="150" height="auto">
									<img src={{ asset("images/conc.png") }} class="mobile-logo mobile-logo-dark" alt="logo" width="150" height="auto">
									<img src={{ asset("images/conc.png") }} class="mobile-logo" alt="logo"  width="150" height="auto">
								</a>
							</div>
							<div class="main-sidemenu">
								<div class="slide-left disabled" id="slide-left">
									<svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
										<path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
									</svg>
								</div>
								<ul class="side-menu">
									<li class="sub-category">
										<h3>Main</h3>
									</li>
									<li class="slide">
										<a class="side-menu__item" href="/user/home">
											<span class="side-menu__icon">
												<svg xmlns="http://www.w3.org/2000/svg" class="side_menu_img" viewBox="0 0 24 24">
													<path d="M3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707l-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13zm7 7v-5h4v5h-4zm2-15.586 6 6V15l.001 5H16v-5c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H6v-9.586l6-6z"></path>
												</svg>
											</span>
											<span class="side-menu__label text-truncate">Home</span>
										</a>
									</li>
									
									<li class="sub-category">
										<h3>GENERAL</h3>
									</li>

									<li class="slide">
										<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
											<span class="side-menu__icon">
												<svg xmlns="http://www.w3.org/2000/svg" class="side_menu_img" viewBox="0 0 24 24"><path d="M4 11h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zm1-6h4v4H5V5zm15-2h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zm-1 6h-4V5h4v4zm-9 12a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6zm-5-6h4v4H5v-4zm13-1h-2v2h-2v2h2v2h2v-2h2v-2h-2z"></path></svg>
											</span>
											<span class="side-menu__label">Activities</span>
											<i class="angle fa fa-angle-right"></i>
										</a>
										<ul class="slide-menu">
											<li class="panel sidetab-menu">
												
												<div class="panel-body tabs-menu-body p-0 border-0">
													<div class="tab-content">
														<div class="tab-pane active" id="side23">
															<ul class="sidemenu-list">
																<li class="side-menu__label1"><a href="javascript:void(0)">Activites</a></li>
																<li><a class="slide-item" href="/condidats">Candidats</a></li>
																<li><a class="slide-item" href="/salles">Salles</a></li>
																<li><a class="slide-item" href="/concours">Concours </a></li>
																<li><a class="slide-item" href="/specialites">Spécialités </a></li>	
														</div>
													</div>
												</div>
											</li>
										</ul>
										<br>
										<li class="slide">
											<a class="side-menu__item" href="/scan">
												<span class="side-menu__icon">
													<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"></path></svg>
												</span>
												<span class="side-menu__label text-truncate">Chercher votre salle</span>
											</a>
										</li>
									</li>
									
									
									<div class="slide-right" id="slide-right">
										<svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
											<path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
										</svg>
									</div>
								</ul>
							</div>
						</aside>
					</div>
  


					<!-- END LEFT-SIDEBAR-MENU -->
					@yield('content')
					@if(session('notification.message'))
					<div class=" alert-container alert 
						@if(session('notification.type') == 'success') alert-success
						@elseif(session('notification.type') == 'error') alert-danger
						@elseif(session('notification.type') == 'info') alert-info
						@elseif(session('notification.type') == 'warning') alert-warning
						@elseif(session('notification.type') == 'primary') alert-primary
						@elseif(session('notification.type') == 'secondary') alert-secondary
						@endif alert-dismissible fade show" role="alert">
						
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">x</button>
						
						{{ session('notification.message') }}
					</div>
@endif

				</div>
            
			</div>

			

			<!-- START SEARCH MODAL -->
			{{-- <div class="modal fade header-search-modal" id="searchModal" tabindex="-1" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header p-0">
							<div class="input-group">
								<input type="search" class="form-control border-0 py-3 ps-4" placeholder="Search anything...">
								<a href="javascript:void(0);" class="input-group-text bg-transparent border-0 justify-content-center pe-4"><i class="ri-search-line"></i></a>
							</div>
						</div>
						<div class="modal-body">
							<h6 class="mb-2">Recent Searches</h6>
							<div class="list-group">
								<a href="javascript:window.location.reload(true)" class="list-group-item list-group-item-action text-truncate">
									<i class="ri-history-fill align-middle fs-15 me-2 opacity-75 d-inline-block"></i>
									<span>Nowa Admin Dashboard - Themeforest</span>
								</a>
								<a href="javascript:window.location.reload(true)" class="list-group-item list-group-item-action text-truncate">
									<i class="ri-history-fill align-middle fs-15 me-2 opacity-75 d-inline-block"></i>
									<span>Bootstrap 5 Latest - Bootstrap</span>
								</a>
								<a href="javascript:window.location.reload(true)" class="list-group-item list-group-item-action text-truncate">
									<i class="ri-history-fill align-middle fs-15 me-2 opacity-75 d-inline-block"></i>
									<span>Sash – Bootstrap Responsive Flat Admin Dashboard HTML5 Template</span>
								</a>
								<a href="javascript:window.location.reload(true)" class="list-group-item list-group-item-action text-truncate">
									<i class="ri-history-fill align-middle fs-15 me-2 opacity-75 d-inline-block"></i>
									<span>Sparci Admin Template - Themeforest</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div> --}}
			<!-- END SEARCH MODAL -->

			<!-- START FOOTER -->
			
		
		
	</div>

		<!-- END PAGE -->
		<footer class="footer">
			<div class="container">
				<div class="row align-items-center flex-row-reverse">
					<div class="col-md-12 col-sm-12 text-center">
						Copyright © 2025 <a href="#"></a>. Designed by <a href="#">Meriem benyammi
					</div>
				</div>
			</div>
		</footer>
		<!-- END FOOTER -->

		<!-- JQUERY SCRIPTS -->

		<script src={{ asset("solic_pro/assets/js/vendors/jquery.min.js") }}></script>

		<!-- BOOTSTRAP SCRIPTS -->
		<script src={{ asset("solic_pro/assets/plugins/bootstrap/js/popper.min.js") }}></script>
		<script src={{ asset("solic_pro/assets/plugins/bootstrap/js/bootstrap.min.js") }}></script>

		<!-- CHART-CIRCLE -->
		<script src={{ asset("solic_pro/assets/js/vendors/circle-progress.min.js") }}></script>

		<!-- CHARTJS CHART -->
		<script src={{ asset("solic_pro/assets/plugins/chart/Chart.bundle.js") }}></script>
		<script src={{ asset("solic_pro/assets/plugins/chart/utils.js") }}></script>

		<!-- APEX-CHARTS JS -->
		<script src={{ asset("solic_pro/assets/plugins/apexcharts/apexcharts.min.js") }}></script>

		<!-- STICKY JS -->
		<script src={{ asset("solic_pro/assets/js/sticky.js") }}></script>

		<!-- SIDEMENU JS -->
		<script src={{ asset("solic_pro/assets/plugins/sidemenu/sidemenu.js") }}></script>

		<!-- PERFECT SCROLL BAR JS -->
		<script src={{ asset("solic_pro/assets/plugins/pscrollbar/perfect-scrollbar.js") }}></script>
		<script src={{ asset("solic_pro/assets/plugins/pscrollbar/pscroll-sidemenu.js") }}></script>

		<!-- PIETY CHART -->
		<script src={{ asset("solic_pro/assets/plugins/peitychart/jquery.peity.min.js") }}></script>
		<script src={{ asset("solic_pro/assets/plugins/peitychart/peitychart.init.js") }}></script>

		<!-- ECHART JS -->
		<script src={{ asset("solic_pro/assets/plugins/echarts/echart.min.js") }}></script>

		<!-- SIDEBAR JS -->
		<script src={{ asset("solic_pro/assets/plugins/sidebar/sidebar.js") }}></script>

		<!-- INDEX-5 JS -->
		<script src={{ asset("solic_pro/assets/js/index5.js") }}></script>

		<!-- CUSTOM-SWICTHER JS -->
		<script src={{ asset("solic_pro/assets/js/custom-switcher.js") }}></script>

		<!-- SWITCHER JS -->
		<script src={{ asset("solic_pro/assets/switcher/js/switcher.js") }}></script>

		<!-- CUSTOM JS -->
		<script src={{ asset("solic_pro/assets/js/custom.js") }}></script>

		<script>
			// document.addEventListener("DOMContentLoaded", function () {
			// 	const langMenu = document.querySelectorAll(".dropdown-menu .dropdown-item");
			// 	const currentLang = document.getElementById("current-lang");
		
			// 	langMenu.forEach(item => {
			// 		item.addEventListener("click", function (e) {
			// 			e.preventDefault();
			// 			let selectedLang = this.getAttribute("data-lang");
			// 			let selectedText = this.textContent;
		
			// 			// Met à jour le texte affiché dans le menu
			// 			currentLang.innerHTML = selectedText + ' <i class="mdi mdi-chevron-down ms-2"></i>';
		
			// 			// Stocke la langue sélectionnée (optionnel, pour persister la préférence)
			// 			localStorage.setItem("selectedLang", selectedLang);
		
			// 			// Met à jour le contenu selon la langue sélectionnée (exemple simple)
			// 			changeLanguage(selectedLang);
			// 		});
			// 	});
		
			// 	// Charger la langue stockée si elle existe
			// 	let savedLang = localStorage.getItem("selectedLang");
			// 	if (savedLang) {
			// 		let savedText = document.querySelector(`.dropdown-item[data-lang="${savedLang}"]`).textContent;
			// 		currentLang.innerHTML = savedText + ' <i class="mdi mdi-chevron-down ms-2"></i>';
			// 		changeLanguage(savedLang);
			// 	}
		
			// 	function changeLanguage(lang) {
			// 		// Ici, tu peux charger dynamiquement du contenu traduit
			// 		console.log("Langue changée en : " + lang);
			// 		// Exemple : Modifier du texte dans la page
			// 		document.documentElement.lang = lang;
			// 	}
			// });
		</script>
		<script>
		function googleTranslateElementInit() {
			new google.translate.TranslateElement({
				pageLanguage: 'en', // Langue par défaut
				includedLanguages: 'en,fr,de,it,ru,es,ar', // Langues disponibles
				autoDisplay: false
			}, 'google_translate_element');
		}

		// Charger Google Translate API en arrière-plan
		(function() {
			var gtScript = document.createElement('script');
			gtScript.src = "https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit";
			document.body.appendChild(gtScript);
		})();

		document.addEventListener("DOMContentLoaded", function () {
			const langMenu = document.querySelectorAll(".dropdown-menu .dropdown-item");
			const currentLang = document.getElementById("current-lang");

			langMenu.forEach(item => {
				item.addEventListener("click", function (e) {
					e.preventDefault();
					let selectedLang = this.getAttribute("data-lang");
					let selectedText = this.textContent;

					// Mettre à jour le texte affiché dans le menu
					currentLang.innerHTML = selectedText + ' <i class="mdi mdi-chevron-down ms-2"></i>';

					// Appliquer la langue via Google Translate
					let googleFrame = document.querySelector(".goog-te-combo");
					if (googleFrame) {
						googleFrame.value = selectedLang;
						googleFrame.dispatchEvent(new Event("change"));
					}
				});
			});
		});

		</script>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<!-- Peity -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/peity/3.3.0/jquery.peity.min.js"></script>
		<!-- Select2 CSS -->
		<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />

		<!-- Select2 JS -->
		<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

		<script>
			$(document).ready(function() {
				$('.select2').select2({
					placeholder: "Sélectionner une spécialité",
					allowClear: true
				});
			});
		</script>


    <script src="{{asset('solic_pro/assets/plugins/select2/select2.full.min.js')}}"></script>
    <script src="{{asset('solic_pro/assets/js/select2.js')}}"></script>

    


		<!-- DATA TABLE -->
		<script src="{{ asset("solic_pro/assets/plugins/datatable/js/jquery.dataTables.min.js")}}"></script>
		<script src="{{ asset("solic_pro/assets/plugins/datatable/js/dataTables.bootstrap5.js")}}"></script>
		<script src="{{ asset("solic_pro/assets/plugins/datatable/js/dataTables.buttons.min.js")}}"></script>
		<script src="{{ asset("solic_pro/assets/plugins/datatable/js/buttons.bootstrap5.min.js")}}"></script>
		<script src="{{ asset("solic_pro/assets/plugins/datatable/js/jszip.min.js")}}"></script>
		<script src="{{ asset("solic_pro/assets/plugins/datatable/pdfmake/pdfmake.min.js")}}"></script>
		<script src="{{ asset("solic_pro/assets/plugins/datatable/pdfmake/vfs_fonts.js")}}"></script>
		<script src="{{ asset("solic_pro/assets/plugins/datatable/js/buttons.html5.min.js")}}"></script>
		<script src="{{ asset("solic_pro/assets/plugins/datatable/js/buttons.print.min.js")}}"></script>
		<script src="{{ asset("solic_pro/assets/plugins/datatable/js/buttons.colVis.min.js")}}"></script>
		<script src="{{ asset("solic_pro/assets/plugins/datatable/dataTables.responsive.min.js")}}"></script>
		<script src="{{ asset("solic_pro/assets/plugins/datatable/responsive.bootstrap5.min.js")}}"></script>
		<script src="{{ asset("solic_pro/assets/js/table-data.js")}}"></script>
		<script src="{{ asset("solic_pro/assets/js/select2.js")}}"></script>
		<script src="{{asset("assets/plugins/multipleselect/multiple-select.js")}}"></script>
		<script src="{{asset("assets/plugins/multipleselect/multi-select.js")}}"></script>

		<script src="{{  asset('solic_pro/assets/plugins/select2/select2.full.min.js')}}"></script>
		<script src="{{  asset('solic_pro/assets/plugins/select2/select2.full.min.js')}}"></script>
		<script src="{{  asset('solic_pro/assets/js/select2.js')}}"></script>
		
				<!-- CSS Select2 -->
		<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />

		<!-- JS Select2 -->
		<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
		<script src="{{asset("solic_pro/assets/plugins/sweet-alert/sweetalert.min.js")}}"></script>
		<script src="{{asset("solic_pro/assets/js/sweet-alert.js")}}"></script>

		
		{{-- <script>
		$(document).ready(function() {
					$('.js-example-basic-single1').select2({
						'width': '99%',
						'tags':true
					});
				});
		</script> --}}
		

		
	</body>
</html>