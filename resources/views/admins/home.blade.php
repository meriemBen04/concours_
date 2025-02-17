{{-- <!doctype html>
<html lang="en" dir="ltr">
	<head>
		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="Solic – Bootstrap5 Responsive Modern Simple Dashboard Clean HTML Premium Admin Template" name="description">
		<meta content="Spruko Technologies Private Limited" name="author">
		<meta name="keywords">

		<!--favicon -->
		<link rel="icon" href={{asset("solic_pro/assets/images/brand/favicon.ico")}} type="image/x-icon" >

		<!-- TITLE -->
		<title>User page</title>

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
					ccc
					<!-- END HEADER -->

					<!-- START LEFT-SIDEBAR-MENU -->
					<div class="sticky">
						<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
						<aside class="app-sidebar">
							<div class="app-sidebar__header">
								<a class="main-logo" href="">
									<img src={{ asset("images/conc.png") }} class="desktop-logo desktop-logo-dark" alt="soliclogo">
									<img src={{ asset("solic_pro/assets/images/brand/dark-logo.png") }} class="desktop-logo" alt="soliclogo">
									<img src={{ asset("solic_pro/assets/images/brand/icon.png") }} class="mobile-logo mobile-logo-dark" alt="soliclogo">
									<img src={{ asset("solic_pro/assets/images/brand/icon-2.png") }} class="mobile-logo" alt="soliclogo">
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
										<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
											<span class="side-menu__icon">
												<svg xmlns="http://www.w3.org/2000/svg" class="side_menu_img" viewBox="0 0 24 24"><path d="M3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707l-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13zm7 7v-5h4v5h-4zm2-15.586 6 6V15l.001 5H16v-5c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H6v-9.586l6-6z"></path></svg>
											</span>
											<span class="side-menu__label text-truncate">Home</span>
											<i class="angle fa fa-angle-right"></i>
										</a>
										<ul class="slide-menu">
											<li class="panel sidetab-menu">
												<div class="tab-menu-heading p-0 pb-2 border-0">
													<div class="tabs-menu ">
														<ul class="nav panel-tabs">
															<li><a href="#side1" class="active" data-bs-toggle="tab"><i class="ri-home-5-line"></i><p>Home</p></a></li>
														</ul>
													</div>
												</div>
												<div class="panel-body tabs-menu-body p-0 border-0">
													<div class="tab-content">
														<div class="tab-pane active" id="side1">
															<ul class="sidemenu-list">
																<li class="side-menu__label1"><a href="javascript:void(0)">Home</a></li>
																<li><a class="slide-item" href="index.html">Profile</a></li>
																<li><a class="slide-item" href="index.html">Home Page</a></li>
															</ul>
															<div class="menutabs-content">
																<h5 class="my-4 px-1 ">Activites</h5>
															</div>
														
														</div>
														
													</div>
												</div>
											</li>

										</ul>
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
																<li><a class="slide-item" href="javascript:void(0)">Your condidats</a></li>
																<li><a class="slide-item" href="javascript:void(0)">Your rooms</a></li>
																<li><a class="slide-item" href="javascript:void(0)">Your concours </a></li>
																
															</ul>
															
														</div>
													</div>
												</div>
											</li>
										</ul>
									</li>
									
									
								<div class="slide-right" id="slide-right">
									<svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
										<path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
									</svg>
								</div>
							</div>
						</aside>
					</div>
					<!-- END LEFT-SIDEBAR-MENU -->
				</div>

				<!-- START APP-CONTENT -->
				<div class="main-content app-content">

					<!-- START PAGE-HEADER -->
					<div class="page-header main-container container-fluid px-5">
						<h4 class="page-title">Dashboard</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">HomePage</li>
						</ol>
					</div>
					<!-- END PAGE-HEADER -->

					<!-- START MAIN-CONTAINER -->
					<div class="main-container container-fluid">

						<!-- START ROW-1 -->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="row">
										<div class="col-xl-3 col-lg-6 col-sm-6 ">
											<div class="card-body border-end text-center">
												<h6 class="mb-3">Revenue</h6>
												<div class="chart-circle chart-circle-md" data-value="0.75" data-thickness="10" data-color="#564ec1">
													<div class="chart-circle-value text-center "><h6 class="mb-0">75%</h6></div>
												</div>
												<h2 class="mb-1 mt-3  display-4 fw-semibold text-dark">$6,246</h2>
												<p class="mb-3 text-muted"> For Last month</p>
												<a href="javascript:void(0);" class="btn btn-primary btn-sm">View more <i class="fe fe-arrow-right align-middle"></i></a>
											</div>
										</div>
										<div class="col-xl-3 col-lg-6  col-sm-6">
											<div class="card-body text-center border-end">
												<h6 class="mb-3">Costs</h6>
												<div class="chart-circle chart-circle-md" data-value="0.25" data-thickness="10" data-color="#04cad0">
													<div class="chart-circle-value text-center "><h6 class="mb-0">25%</h6></div>
												</div>
												<h2 class="mb-1 mt-3 display-4 fw-semibold text-dark">$8,361</h2>
												<p class="mb-3 text-muted"> For Last month</p>
												<a href="javascript:void(0);" class="btn btn-secondary btn-sm">View more <i class="fe fe-arrow-right align-middle"></i></a>
											</div>
										</div>
										<div class="col-xl-3 col-lg-6 col-sm-6">
											<div class="card-body text-center border-end">
												<h6 class="mb-3">Profit</h6>
												<div class="chart-circle chart-circle-md" data-value="0.38" data-thickness="10" data-color="#f5334f">
													<div class="chart-circle-value text-center "><h6 class="mb-0">38%</h6></div>
												</div>
												<h2 class="mb-1 mt-3  display-4 fw-semibold text-dark">$3,678</h2>
												<p class="mb-3 text-muted"> For Last month</p>
												<a href="javascript:void(0);" class="btn btn-danger btn-sm">View more <i class="fe fe-arrow-right align-middle"></i></a>
											</div>
										</div>
										<div class="col-xl-3 col-lg-6  col-sm-6">
											<div class="card-body text-center border-end">
												<h6 class="mb-3">Shipments</h6>
												<div class="chart-circle chart-circle-md" data-value="0.58" data-thickness="10" data-color="#f7b731">
													<div class="chart-circle-value text-center "><h6 class="mb-0">58%</h6></div>
												</div>
												<h2 class="mb-1 mt-3  display-4 fw-semibold text-dark">397</h2>
												<p class="mb-3 text-muted"> For Last month</p>
												<a href="javascript:void(0);" class="btn btn-warning btn-sm">View more <i class="fe fe-arrow-right align-middle"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--  END ROW-1 -->

						<!-- START ROW-2 -->
						<div class="row">
							<div class="col-md-12 col-lg-12 col-xl-8">
								<div class="card">
									<div class="card-header d-flex justify-content-between align-items-center">
										<div class="card-title">Perfect Order Rate</div>
										<button type="button" class="btn btn-sm btn-primary d-inline-flex align-items-center"><i class="ri-file-chart-line me-1"></i>View Report</button>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col">
												<p class="mb-1">Avg Order Rate this Week</p>
												<h2 class="mb-1 display-6 fw-bold">23.8%</h2>
												<span class="mb-0 text-muted"><i class="fa fa-caret-up text-success me-1"></i><span class="text-success">0.5%</span> last week</span>
											</div>
											<div class="col">
												<p class="mb-1">Avg Order Rate this month</p>
												<h2 class="mb-1 display-6 fw-bold">56.18%</h2>
												<span class="mb-0 text-muted"><i class="fa fa-caret-up text-success me-1"></i><span class="text-success">1.6%</span> last month</span>
											</div>
										</div>
										<div id="perfectorder"></div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-12 col-xl-4">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Delivery Status</div>
									</div>
									<div class="card-body">
										<div class="row text-start mb-5">
											<div class="col dash-1">
												<p class="mb-0">Within Time Limit</p>
												<h2 class="mb-0 ">678</h2>
												<p class="mb-0 text-muted">
													<span class="text-success"><i class="fa fa-chevron-circle-up text-success ms-1"></i> 1.34%</span>
													last month
												</p>
											</div>
											<div class="col">
												<p class="mb-0">Outof Time Limit</p>
												<h2 class="mb-0 ">128</h2>
												<p class="mb-0 text-muted">
													<span class="text-danger"><i class="fa fa-chevron-circle-down text-danger ms-1"></i> 0.3%</span>
													last month
												</p>
											</div>
										</div>
										<div id="echart1" class="chart-visitors"></div>
									</div>
								</div>
							</div>
						</div>
						<!--  END ROW-2 -->

						<!-- START ROW-3 -->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="row">
										<div class="col-xl-3 col-lg-6 col-sm-6 pe-0 ps-0">
											<div class="card-body text-center border-end">
												<h6 class="mb-0">Avg loading Time</h6>
												<h2 class="mb-1 mt-2">54 mins</h2>
												<p class="mb-0 text-muted"><span class="mb-0 text-danger fs-13 ms-1"><i class="fe fe-arrow-down"></i> 1.68%</span> for Last month</p>
											</div>
										</div>
										<div class="col-xl-3 col-lg-6 col-sm-6 pe-0 ps-0">
											<div class="card-body text-center border-end">
												<h6 class="mb-0">Avg loading Weight</h6>
												<h2 class="mb-1 mt-2">50 tons</h2>
												<p class="mb-0 text-muted"><span class="mb-0 text-success fs-13 ms-1"><i class="fe fe-arrow-up"></i> 0.27%</span> for Last month</p>
											</div>
										</div>
										<div class="col-xl-3 col-lg-6 col-sm-6 pe-0 ps-0">
											<div class="card-body text-center border-end">
												<h6 class="mb-0">Orders to Ship</h6>
												<h2 class="mb-1 mt-2 ">15,897</h2>
												<p class="mb-0 text-muted"><span class="mb-0 text-danger fs-13 ms-1"><i class="fe fe-arrow-down"></i> 0.87%</span> for Last month</p>
											</div>
										</div>
										<div class="col-xl-3 col-lg-6 col-sm-6 pe-0 ps-0">
											<div class="card-body text-center border-end">
												<h6 class="mb-0">Inventory Accuracy</h6>
												<h2 class="mb-1 mt-2">18.76</h2>
												<p class="mb-0 text-muted"><span class="mb-0 text-success fs-13 ms-1"><i class="fe fe-arrow-up"></i> 22%</span> for Last month</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--  END ROW-3 -->

						<!-- START ROW-4 -->
						<div class="row">
							<div class="col-md-12 col-lg-12 col-xl-4">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Carrying Costs Of Inventory</div>
									</div>
									<div class="card-body">
										<div class="chart-wrapper">
											<canvas id="inventory" class="chartwidget"></canvas>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-12 col-xl-4">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Warehouse Operating Costs</div>
									</div>
									<div class="card-body p-0">
										<div class="list-group projects-list">
											<a href="#" class="list-group-item list-group-item-action flex-column align-items-start border-0">
												<div class="d-flex w-100 justify-content-between">
													<h6 class="mb-1 font-weight-sembold text-dark">Order Picking</h6>
													<h4 class="text-dark mb-0 font-weight-sembold text-dark">3,876</h4>
												</div>
												<div class="d-flex w-100 justify-content-between">
													<span class="text-muted"><i class="fe fe-arrow-down text-success "></i> <span class="text-success">03%</span> last month</span>
													<span class="text-muted fs-12">5 days ago</span>
												</div>
											</a>
											<a href="#" class="list-group-item list-group-item-action flex-column align-items-start border-bottom-0  border-start-0 border-end-0 border-top">
												<div class="d-flex w-100 justify-content-between">
													<h6 class="mb-1 font-weight-sembold text-dark">Storage</h6>
													<h4 class="text-dark mb-0 font-weight-sembold text-dark">2,178</h4>
												</div>
												<div class="d-flex w-100 justify-content-between">
													<span class="text-muted"><i class="fe fe-arrow-down text-danger "></i><span class="text-danger"> 16%</span> last month</span>
													<span class="text-muted fs-12">2 days ago</span>
												</div>
											</a>
											<a href="#" class="list-group-item list-group-item-action flex-column align-items-start border-bottom-0  border-start-0 border-end-0 border-top">
												<div class="d-flex w-100 justify-content-between">
													<h6 class="mb-1 font-weight-sembold text-dark">Shipping</h6>
													<h4 class="text-dark mb-0 font-weight-sembold text-dark">1,367</h4>
												</div>
												<div class="d-flex w-100 justify-content-between">
													<span class="text-muted"><i class="fe fe-arrow-up text-success"></i><span class="text-success"> 06%</span> last month</span>
													<span class="text-muted fs-12">1 days ago</span>
												</div>
											</a>
											<a href="#" class="list-group-item list-group-item-action flex-column align-items-start border-bottom-0  border-start-0 border-end-0 border-top">
												<div class="d-flex w-100 justify-content-between">
													<h6 class="mb-1 font-weight-sembold text-dark">Receiving</h6>
													<h4 class="text-dark mb-0 font-weight-sembold text-dark">678</h4>
												</div>
												<div class="d-flex w-100 justify-content-between">
													<span class="text-muted"><i class="fe fe-arrow-down text-danger "></i><span class="text-danger"> 25%</span> last month</span>
													<span class="text-muted fs-12">10 days ago</span>
												</div>
											</a>
											<a href="#" class="list-group-item list-group-item-action flex-column align-items-start border-bottom-0  border-start-0 border-end-0 border-top">
												<div class="d-flex w-100 justify-content-between">
													<h6 class="mb-1 font-weight-sembold text-dark">Other</h6>
													<h4 class="text-dark mb-0 font-weight-sembold text-dark">5,678</h4>
												</div>
												<div class="d-flex w-100 justify-content-between">
													<span class="text-muted"><i class="fe fe-arrow-up text-success "></i> <span class="text-success">16%</span> last month</span>
													<span class="text-muted fs-12">5 days ago</span>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-12 col-xl-4">
								<div class="card">
									<div class="card-header d-flex justify-content-between align-items-center">
										<div class="card-title">Deliveries by Country</div>
										<nav class="nav">
											<div class="dropdown">
												<a class="nav-link py-2 btn  br-4 bg-primary-transparent" href="javascript:;" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="ti-pulse"></i></a>
												<div class="dropdown-menu dropdown-menu-end">
													<a class="dropdown-item" href="javascript:void(0)">Monthly</a>
													<a class="dropdown-item" href="javascript:void(0)">Weekly</a>
													<a class="dropdown-item" href="javascript:void(0)">Yearly</a>
												</div>
											</div>
										</nav>
									</div>
									<div class="card-body">
										<div class="mb-5">
											<p class="mb-2">Australia <span class="float-end fw-semibold">65%</span></p>
											<div class="progress  progress-xs">
												<div class="progress-bar bg-primary w-65" role="progressbar"></div>
											</div>
										</div>
										<div class="mb-5">
											<p class="mb-2">Brazil <span class="float-end fw-semibold">70%</span></p>
											<div class="progress  progress-xs">
												<div class="progress-bar bg-secondary w-70" role="progressbar"></div>
											</div>
										</div>
										<div class="mb-5">
											<p class="mb-2">Germany <span class="float-end fw-semibold">80%</span></p>
											<div class="progress  progress-xs">
												<div class="progress-bar bg-danger w-80" role="progressbar"></div>
											</div>
										</div>
										<div class="mb-5">
											<p class="mb-2">Denmark <span class="float-end fw-semibold">50%</span></p>
											<div class="progress  progress-xs">
												<div class="progress-bar bg-warning w-50" role="progressbar"></div>
											</div>
										</div>

										<div class="mb-0">
											<p class="mb-2">France <span class="float-end fw-semibold">60%</span></p>
											<div class="progress  progress-xs">
												<div class="progress-bar bg-success w-60" role="progressbar"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--  END ROW-4 -->

					</div>
					<!-- END MAIN-CONTAINER -->
				</div>
				<!-- END APP-CONTENT -->
			</div>

			

			<!-- START SEARCH MODAL -->
			<div class="modal fade header-search-modal" id="searchModal" tabindex="-1" aria-hidden="true">
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
			</div>
			<!-- END SEARCH MODAL -->

			<!-- START FOOTER -->
			<footer class="footer">
				<div class="container">
					<div class="row align-items-center flex-row-reverse">
						<div class="col-md-12 col-sm-12 text-center">
							Copyright © 2023 <a href="#">Solic</a>. Designed by <a href="#">Spruko Technologies Private Limited</a> All rights reserved.
						</div>
					</div>
				</div>
			</footer>
			<!-- END FOOTER -->

		</div>
		<!-- END PAGE -->

		<!-- BACK-TO-TOP -->
		<a href="#top" id="back-to-top"><i class="fa fa-level-up"></i></a>

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

       	<!-- STICKY JS-->
		<script src={{ asset("solic_pro/assets/js/sticky.js") }}></script>

		<!-- SIDEMENU JS-->
		<script src={{ asset("solic_pro/assets/plugins/sidemenu/sidemenu.js") }}></script>

		<!-- PERFECT SCROLL BAR JS-->
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

		<!-- CUSTOM JS-->
		<script src={{ asset("solic_pro/assets/js/custom.js") }}></script>
		<script>
			document.addEventListener("DOMContentLoaded", function () {
				const langMenu = document.querySelectorAll(".dropdown-menu .dropdown-item");
				const currentLang = document.getElementById("current-lang");
		
				langMenu.forEach(item => {
					item.addEventListener("click", function (e) {
						e.preventDefault();
						let selectedLang = this.getAttribute("data-lang");
						let selectedText = this.textContent;
		
						// Met à jour le texte affiché dans le menu
						currentLang.innerHTML = selectedText + ' <i class="mdi mdi-chevron-down ms-2"></i>';
		
						// Stocke la langue sélectionnée (optionnel, pour persister la préférence)
						localStorage.setItem("selectedLang", selectedLang);
		
						// Met à jour le contenu selon la langue sélectionnée (exemple simple)
						changeLanguage(selectedLang);
					});
				});
		
				// Charger la langue stockée si elle existe
				let savedLang = localStorage.getItem("selectedLang");
				if (savedLang) {
					let savedText = document.querySelector(`.dropdown-item[data-lang="${savedLang}"]`).textContent;
					currentLang.innerHTML = savedText + ' <i class="mdi mdi-chevron-down ms-2"></i>';
					changeLanguage(savedLang);
				}
		
				function changeLanguage(lang) {
					// Ici, tu peux charger dynamiquement du contenu traduit
					console.log("Langue changée en : " + lang);
					// Exemple : Modifier du texte dans la page
					document.documentElement.lang = lang;
				}
			});
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


	</body>
</html> --}}

@extends('layouts.solic')