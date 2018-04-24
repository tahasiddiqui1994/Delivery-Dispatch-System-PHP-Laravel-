<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="{{url('https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900')}}" rel="stylesheet" type="text/css">
	<link href="{{url('assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
	<link href="{{url('assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
	<link href="{{url('assets/css/core.css')}}" rel="stylesheet" type="text/css">
	<link href="{{url('assets/css/components.css')}}" rel="stylesheet" type="text/css">
	<link href="{{url('assets/css/colors.css')}}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="{{url('assets/js/plugins/loaders/pace.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/core/libraries/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/core/libraries/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/loaders/blockui.min.js')}}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="{{url('assets/js/plugins/ui/prism.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/core/app.js')}}"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="index"><img src="assets/images/logo_light.png" alt=""></a>

			<ul class="nav navbar-nav pull-right visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li class="dropdown mega-menu mega-menu-wide active">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-menu7 position-left"></i> Menu <span class="caret"></span>
					</a>

					<div class="dropdown-menu dropdown-content">
						<div class="dropdown-content-body">
							<div class="row">
								<div class="col-md-2">
									<span class="menu-heading underlined">Form components</span>
									<ul class="menu-list">
										<li><a href="form_inputs_basic">Basic inputs</a></li>
										<li><a href="form_checkboxes_radios">Checkboxes &amp; radios</a></li>
										<li><a href="form_input_groups">Input groups</a></li>
										<li><a href="form_controls_extended">Extended controls</a></li>
										<li><a href="form_floating_labels">Floating labels</a></li>
										<li><a href="form_select2">Selects</a></li>
									</ul>
								</div>
								<div class="col-md-2">
									<span class="menu-heading underlined">UI components</span>
									<ul class="menu-list">
										<li><a href="components_modals">Modals</a></li>
										<li><a href="components_dropdowns">Dropdown menus <span class="badge badge-default">30+</span></a></li>
										<li><a href="components_popups">Tooltips and popovers</a></li>
										<li><a href="components_tabs">Tabs component</a></li>
										<li><a href="components_navs">Accordion and navs</a></li>
										<li><a href="components_notifications_pnotify">Notifications <span class="badge badge-danger">3</span></a></li>
									</ul>
								</div>
								<div class="col-md-2">
									<span class="menu-heading underlined">Sidebars</span>
									<ul class="menu-list">
										<li><a href="sidebar_default_collapse">Default sidebar</a></li>
										<li><a href="sidebar_mini_collapse">Mini sidebar</a></li>
										<li><a href="sidebar_dual">Dual sidebar</a></li>
										<li><a href="sidebar_double_collapse">Double sidebar</a></li>
										<li><a href="sidebar_detached_left">Detached sidebar</a></li>
										<li><a href="sidebar_components">Sidebar components</a></li>
									</ul>
								</div>
								<div class="col-md-2">
									<span class="menu-heading underlined">Navigation</span>
									<ul class="menu-list">
										<li><a href="navigation_horizontal_click">Submenu on click</a></li>
										<li><a href="navigation_horizontal_hover">Submenu on hover</a></li>
										<li><a href="navigation_horizontal_elements">With custom elements</a></li>
										<li class="active"><a href="navigation_horizontal_tabs">Tabbed navigation</a></li>
										<li><a href="navigation_horizontal_disabled">Disabled navigation links</a></li>
										<li><a href="navigation_horizontal_mega">Horizontal mega menu</a></li>
									</ul>
								</div>
								<div class="col-md-2">
									<span class="menu-heading underlined">Navbars</span>
									<ul class="menu-list">
										<li><a href="navbar_single">Single navbar</a></li>
										<li><a href="navbar_multiple_navbar_navbar">Multiple navbars</a></li>
										<li><a href="navbar_colors">Color options</a></li>
										<li><a href="navbar_sizes">Sizing options <span class="badge badge-info">14</span></a></li>
										<li><a href="navbar_hideable">Hide on scroll</a></li>
										<li><a href="navbar_components">Navbar components</a></li>
									</ul>
								</div>
								<div class="col-md-2">
									<span class="menu-heading underlined">Extensions</span>
									<ul class="menu-list">
										<li><a href="extension_dnd">Drag &amp; drop <span class="label label-primary">HOT</span></a></li>
										<li><a href="extension_blockui">Block UI</a></li>
										<li><a href="uploader_plupload">File uploaders</a></li>
										<li><a href="extension_image_cropper">Image cropper</a></li>
										<li><a href="internationalization_switch_direct">Translation <span class="label label-success">New</span></a></li>
										<li><a href="extension_fullcalendar_views">Calendars</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</li>
				
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-dots position-left"></i> Levels <span class="caret"></span>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="#"><i class="icon-IE"></i> Second level</a></li>
						<li class="dropdown-submenu">
							<a href="#"><i class="icon-firefox"></i> Has child</a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="icon-android"></i> Third level</a></li>
								<li class="dropdown-submenu">
									<a href="#"><i class="icon-apple2"></i> Has child</a>
									<ul class="dropdown-menu">
										<li><a href="#"><i class="icon-html5"></i> Fourth level</a></li>
										<li><a href="#"><i class="icon-css3"></i> Fourth level</a></li>
									</ul>
								</li>
								<li><a href="#"><i class="icon-windows"></i> Third level</a></li>
							</ul>
						</li>
						<li><a href="#"><i class="icon-chrome"></i> Second level</a></li>
					</ul>
				</li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-people"></i>
						<span class="visible-xs-inline-block position-right">Users</span>
					</a>
					
					<div class="dropdown-menu dropdown-content">
						<div class="dropdown-content-heading">
							Users online
							<ul class="icons-list">
								<li><a href="#"><i class="icon-gear"></i></a></li>
							</ul>
						</div>

						<ul class="media-list dropdown-content-body width-300">
							<li class="media">
								<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
								<div class="media-body">
									<a href="#" class="media-heading text-semibold">Jordana Ansley</a>
									<span class="display-block text-muted text-size-small">Lead web developer</span>
								</div>
								<div class="media-right media-middle"><span class="status-mark border-success"></span></div>
							</li>

							<li class="media">
								<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
								<div class="media-body">
									<a href="#" class="media-heading text-semibold">Will Brason</a>
									<span class="display-block text-muted text-size-small">Marketing manager</span>
								</div>
								<div class="media-right media-middle"><span class="status-mark border-danger"></span></div>
							</li>

							<li class="media">
								<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
								<div class="media-body">
									<a href="#" class="media-heading text-semibold">Hanna Walden</a>
									<span class="display-block text-muted text-size-small">Project manager</span>
								</div>
								<div class="media-right media-middle"><span class="status-mark border-success"></span></div>
							</li>

							<li class="media">
								<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
								<div class="media-body">
									<a href="#" class="media-heading text-semibold">Dori Laperriere</a>
									<span class="display-block text-muted text-size-small">Business developer</span>
								</div>
								<div class="media-right media-middle"><span class="status-mark border-warning-300"></span></div>
							</li>

							<li class="media">
								<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
								<div class="media-body">
									<a href="#" class="media-heading text-semibold">Vanessa Aurelius</a>
									<span class="display-block text-muted text-size-small">UX expert</span>
								</div>
								<div class="media-right media-middle"><span class="status-mark border-grey-400"></span></div>
							</li>
						</ul>

						<div class="dropdown-content-footer">
							<a href="#" data-popup="tooltip" title="All users"><i class="icon-menu display-block"></i></a>
						</div>
					</div>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-bubbles4"></i>
						<span class="visible-xs-inline-block position-right">Messages</span>
						<span class="badge bg-warning-400">2</span>
					</a>
					
					<div class="dropdown-menu dropdown-content width-350">
						<div class="dropdown-content-heading">
							Messages
							<ul class="icons-list">
								<li><a href="#"><i class="icon-compose"></i></a></li>
							</ul>
						</div>

						<ul class="media-list dropdown-content-body">
							<li class="media">
								<div class="media-left">
									<img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
									<span class="badge bg-danger-400 media-badge">5</span>
								</div>

								<div class="media-body">
									<a href="#" class="media-heading">
										<span class="text-semibold">James Alexander</span>
										<span class="media-annotation pull-right">04:58</span>
									</a>

									<span class="text-muted">who knows, maybe that would be the best thing for me...</span>
								</div>
							</li>

							<li class="media">
								<div class="media-left">
									<img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
									<span class="badge bg-danger-400 media-badge">4</span>
								</div>

								<div class="media-body">
									<a href="#" class="media-heading">
										<span class="text-semibold">Margo Baker</span>
										<span class="media-annotation pull-right">12:16</span>
									</a>

									<span class="text-muted">That was something he was unable to do because...</span>
								</div>
							</li>

							<li class="media">
								<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
								<div class="media-body">
									<a href="#" class="media-heading">
										<span class="text-semibold">Jeremy Victorino</span>
										<span class="media-annotation pull-right">22:48</span>
									</a>

									<span class="text-muted">But that would be extremely strained and suspicious...</span>
								</div>
							</li>

							<li class="media">
								<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
								<div class="media-body">
									<a href="#" class="media-heading">
										<span class="text-semibold">Beatrix Diaz</span>
										<span class="media-annotation pull-right">Tue</span>
									</a>

									<span class="text-muted">What a strenuous career it is that I've chosen...</span>
								</div>
							</li>

							<li class="media">
								<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
								<div class="media-body">
									<a href="#" class="media-heading">
										<span class="text-semibold">Richard Vango</span>
										<span class="media-annotation pull-right">Mon</span>
									</a>
									
									<span class="text-muted">Other travelling salesmen live a life of luxury...</span>
								</div>
							</li>
						</ul>

						<div class="dropdown-content-footer">
							<a href="#" data-popup="tooltip" title="All messages"><i class="icon-menu display-block"></i></a>
						</div>
					</div>
				</li>

				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="assets/images/placeholder.jpg" alt="">
						<span>Victoria</span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
						<li><a href="#"><i class="icon-coins"></i> My balance</a></li>
						<li><a href="#"><span class="badge badge-warning pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a></li>
						<li class="divider"></li>
						<li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
						<li><a href="#"><i class="icon-switch2"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Secondary navbar -->
	<div class="navbar navbar-default navbar-xs">
		<ul class="nav navbar-nav no-border visible-xs-block">
			<li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second-toggle"><i class="icon-circle-down2"></i></a></li>
		</ul>

		<div class="navbar-collapse collapse" id="navbar-second-toggle">
			<ul class="nav navbar-nav">
				<li class="active">
					<a href="#tab1" data-toggle="tab">
						<i class="icon-width position-left"></i>
						Tabbed
						<span class="badge badge-inline badge-warning position-right">47</span>
					</a>
				</li>

				<li><a href="#tab2" data-toggle="tab"><i class="icon-circles2 position-left"></i> Sub on click</a></li>
				<li class="disabled"><a href="#" data-toggle="tab"><i class="icon-make-group position-left"></i> Disabled</a></li>
			</ul>

			<div class="navbar-right">
				<p class="navbar-text"><i class="icon-user-check position-left"></i> Signed in as <a href="#" class="navbar-link">Victoria</a></p>

				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-share4"></i>
							<span class="visible-xs-inline-block position-right">Share</span>
							<span class="caret"></span>
						</a>

						<ul class="dropdown-menu dropdown-menu-right">
							<li><a href="#"><i class="icon-dribbble3"></i> Dribbble</a></li>
							<li><a href="#"><i class="icon-pinterest2"></i> Pinterest</a></li>
							<li><a href="#"><i class="icon-github"></i> Github</a></li>
							<li><a href="#"><i class="icon-stackoverflow"></i> Stack Overflow</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /secondary navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Horizontal Nav</span> - Tabbed</h4>
						</div>

						<div class="heading-elements">
							<div class="heading-btn-group">
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
							</div>
						</div>
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="navigation_horizontal_tabs">Horizontal nav</a></li>
							<li class="active">Tabbed</li>
						</ul>

						<ul class="breadcrumb-elements">
							<li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear position-left"></i>
									Settings
									<span class="caret"></span>
								</a>

								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
									<li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
									<li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="icon-gear"></i> All settings</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Tabs content -->
					<div class="tab-content">
						<div class="tab-pane active fade in no-padding" id="tab1">

							<!-- Tabbed navigation -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h5 class="panel-title">Tabbed navigation</h5>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="content-group">
										<p class="content-group">Replace standard navigation links with quick, dynamic tab functionality to transition through panes of local content, even via dropdown menus. Add <code>data-toggle="tab"</code> to the navbar navigation links and specify id's. Tabs content needs to be placed in div's that have unique id's, <code>.tab-pane</code> class and <code>.tab-pane.active</code> classes for active pane. Wrap all content panes in <code>&lt;div class="tab-content no-padding />"</code> div.</p>

										<p class="text-semibold">Example navigation</p>
										<div class="content-group tab-content-bordered navbar-component">
											<div class="navbar navbar-inverse bg-teal-400" style="position: relative; z-index: 30;">
												<div class="navbar-header">
													<a class="navbar-brand" href="index"><img src="assets/images/logo_light.png" alt=""></a>

													<ul class="nav navbar-nav pull-right visible-xs-block">
														<li><a data-toggle="collapse" data-target="#demo1"><i class="icon-tree5"></i></a></li>
													</ul>
												</div>

												<div class="navbar-collapse collapse" id="demo1">
													<ul class="nav navbar-nav">
														<li class="active">
															<a href="#tab-demo1" data-toggle="tab">
																<i class="icon-file-picture2 position-left"></i>
																Images
															</a>
														</li>

														<li>
															<a href="#tab-demo2" data-toggle="tab"><i class="icon-file-music2 position-left"></i>
																Music
																<span class="badge bg-teal-800 badge-inline position-right">26</span>
															</a>
														</li>

														<li class="disabled">
															<a href="#tab-disabled" data-toggle="tab">
																<i class="icon-file-video2 position-left"></i>
																Video
															</a>
														</li>
														
														<li class="dropdown">
															<a href="#" class="dropdown-toggle" data-toggle="dropdown">
																<i class="icon-file-stats2 position-left"></i>
																Statistics
																<span class="caret"></span>
															</a>

															<ul class="dropdown-menu dropdown-menu-right">
																<li><a href="#tab-demo3" data-toggle="tab"><i class="icon-dribbble3"></i> Dribbble</a></li>
																<li><a href="#tab-demo4" data-toggle="tab"><i class="icon-pinterest2"></i> Pinterest</a></li>
																<li><a href="#tab-demo5" data-toggle="tab"><i class="icon-github"></i> Github</a></li>
																<li><a href="#tab-demo6" data-toggle="tab"><i class="icon-stackoverflow"></i> Stack Overflow</a></li>
															</ul>
														</li>
													</ul>

													<ul class="nav navbar-nav navbar-right">
														<li class="dropdown">
															<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
																<i class="icon-bubbles4"></i>
																<span class="visible-xs-inline-block position-right">Messages</span>
																<span class="badge bg-teal-800">2</span>
															</a>
															
															<div class="dropdown-menu dropdown-content width-350">
																<div class="dropdown-content-heading">
																	Messages
																	<ul class="icons-list">
																		<li><a href="#"><i class="icon-compose"></i></a></li>
																	</ul>
																</div>

																<ul class="media-list dropdown-content-body">
																	<li class="media">
																		<div class="media-left">
																			<img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
																			<span class="badge bg-danger-400 media-badge">5</span>
																		</div>

																		<div class="media-body">
																			<a href="#" class="media-heading">
																				<span class="text-semibold">James Alexander</span>
																				<span class="media-annotation pull-right">04:58</span>
																			</a>

																			<span class="text-muted">who knows, maybe that would be the best thing for me...</span>
																		</div>
																	</li>

																	<li class="media">
																		<div class="media-left">
																			<img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
																			<span class="badge bg-danger-400 media-badge">4</span>
																		</div>

																		<div class="media-body">
																			<a href="#" class="media-heading">
																				<span class="text-semibold">Margo Baker</span>
																				<span class="media-annotation pull-right">12:16</span>
																			</a>

																			<span class="text-muted">That was something he was unable to do because...</span>
																		</div>
																	</li>

																	<li class="media">
																		<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
																		<div class="media-body">
																			<a href="#" class="media-heading">
																				<span class="text-semibold">Jeremy Victorino</span>
																				<span class="media-annotation pull-right">22:48</span>
																			</a>

																			<span class="text-muted">But that would be extremely strained and suspicious...</span>
																		</div>
																	</li>

																	<li class="media">
																		<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
																		<div class="media-body">
																			<a href="#" class="media-heading">
																				<span class="text-semibold">Beatrix Diaz</span>
																				<span class="media-annotation pull-right">Tue</span>
																			</a>

																			<span class="text-muted">What a strenuous career it is that I've chosen...</span>
																		</div>
																	</li>

																	<li class="media">
																		<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
																		<div class="media-body">
																			<a href="#" class="media-heading">
																				<span class="text-semibold">Richard Vango</span>
																				<span class="media-annotation pull-right">Mon</span>
																			</a>
																			
																			<span class="text-muted">Other travelling salesmen live a life of luxury...</span>
																		</div>
																	</li>
																</ul>

																<div class="dropdown-content-footer">
																	<a href="#" data-popup="tooltip" title="All messages"><i class="icon-menu display-block"></i></a>
																</div>
															</div>
														</li>

														<li class="dropdown dropdown-user">
															<a class="dropdown-toggle" data-toggle="dropdown">
																<img src="assets/images/placeholder.jpg" alt="">
																<span>Victoria</span>
																<i class="caret"></i>
															</a>

															<ul class="dropdown-menu dropdown-menu-right">
																<li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
																<li><a href="#"><i class="icon-coins"></i> My balance</a></li>
																<li><a href="#"><span class="badge badge-warning pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a></li>
																<li class="divider"></li>
																<li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
																<li><a href="#"><i class="icon-switch2"></i> Logout</a></li>
															</ul>
														</li>
													</ul>
												</div>
											</div>

											<div class="tab-content">
												<div class="tab-pane fade active in has-padding" id="tab-demo1">Images tab content</div>
												<div class="tab-pane fade has-padding" id="tab-demo2">Music tab content</div>
												<div class="tab-pane fade has-padding" id="tab-demo3">Dribbble statistics tab content</div>
												<div class="tab-pane fade has-padding" id="tab-demo4">Pinterest statistics tab content</div>
												<div class="tab-pane fade has-padding" id="tab-demo5">Github statistics tab content</div>
												<div class="tab-pane fade has-padding" id="tab-demo6">Stack Overflow statistics tab content</div>
											</div>
										</div>

										<p class="text-semibold">Example markup:</p>
										<pre class="language-markup"><code>&lt;!-- Tabbed navigation -->
&lt;ul class="nav navbar-nav">
	&lt;li class="active">&lt;a href="#tab-demo1" data-toggle="tab">Active tab&lt;/a>&lt;/li>
	&lt;li>&lt;a href="#tab-demo2" data-toggle="tab">Second tab&lt;/a>&lt;/li>
	&lt;li>&lt;a href="#tab-demo3" data-toggle="tab">Third tab&lt;/a>&lt;/li>
	&lt;li class="dropdown">
		&lt;a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown &lt;span class="caret">&lt;/span>&lt;/a>
		&lt;ul class="dropdown-menu dropdown-menu-right">
			&lt;li>&lt;a href="#tab-demo4" data-toggle="tab">Another tab&lt;/a>&lt;/li>
			&lt;li>&lt;a href="#tab-demo5" data-toggle="tab">One more tab&lt;/a>&lt;/li>
		&lt;/ul>
	&lt;/li>
&lt;/ul>
&lt;!-- /tabbed navigation -->

&lt;!-- Tabbed navigation content -->
&lt;div class="tab-content">
	&lt;div class="tab-pane fade active in" id="tab-demo1">Tab 1 content&lt;/div>
	&lt;div class="tab-pane fade" id="tab-demo2">Tab 2 content&lt;/div>
	&lt;div class="tab-pane fade" id="tab-demo3">Tab 3 content&lt;/div>
	&lt;div class="tab-pane fade" id="tab-demo4">Tab 4 content&lt;/div>
	&lt;div class="tab-pane fade" id="tab-demo5">Tab 5 content&lt;/div>
&lt;/div>
&lt;!-- /tabbed navigation content --></code></pre>
									</div>
								</div>
							</div>
							<!-- /tabbed navigation -->

						</div>

						<div class="tab-pane fade no-padding" id="tab2">

							<!-- Open submenu on click -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h5 class="panel-title">Submenu on click</h5>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="content-group">
										<p class="content-group">By default dropdown menu opens on click. Via data attributes or JavaScript, the dropdown plugin toggles hidden content (dropdown menus) by toggling the <code>.open</code> class on the parent list item. <strong>Note:</strong> The <code>data-toggle="dropdown"</code> attribute is relied on for closing dropdown menus at an application level, so it's a good idea to always use it. Horizontal navigation supports left and right menu directions, full width mega menu and submenus.</p>

										<p class="text-semibold">Example navigation</p>
										<div class="navbar navbar-inverse bg-indigo-400 navbar-component" style="position: relative; z-index: 29;">
											<div class="navbar-header">
												<a class="navbar-brand" href="index"><img src="assets/images/logo_light.png" alt=""></a>

												<ul class="nav navbar-nav pull-right visible-xs-block">
													<li><a data-toggle="collapse" data-target="#navbar-demo"><i class="icon-tree5"></i></a></li>
												</ul>
											</div>

											<div class="navbar-collapse collapse" id="navbar-demo">
												<ul class="nav navbar-nav">
													<li class="mega-menu mega-menu-wide active">
														<a href="#" class="dropdown-toggle" data-toggle="dropdown">
															<i class="icon-menu7 position-left"></i>
															Menu
															<span class="caret"></span>
														</a>

														<div class="dropdown-menu dropdown-content">
															<div class="dropdown-content-body">
																<div class="row">
																	<div class="col-md-2">
																		<span class="menu-heading underlined">Form components</span>
																		<ul class="menu-list">
																			<li><a href="form_components">General components</a></li>
																			<li><a href="form_components_advanced">Advanced components</a></li>
																			<li><a href="form_select2">Selects</a></li>
																			<li><a href="form_dual_listboxes">Dual Listboxes</a></li>
																			<li><a href="form_editable">Editable forms</a></li>
																			<li><a href="form_validation">Validation</a></li>
																		</ul>
																	</div>
																	<div class="col-md-2">
																		<span class="menu-heading underlined">UI components</span>
																		<ul class="menu-list">
																			<li><a href="components_modals">Modals</a></li>
																			<li><a href="components_dropdowns">Dropdown menus <span class="badge badge-default">30+</span></a></li>
																			<li><a href="components_popups">Tooltips and popovers</a></li>
																			<li><a href="components_tabs">Tabs component</a></li>
																			<li><a href="components_navs">Accordion and navs</a></li>
																			<li><a href="components_notifications_pnotify">Notifications <span class="badge badge-danger">3</span></a></li>
																		</ul>
																	</div>
																	<div class="col-md-2">
																		<span class="menu-heading underlined">Sidebars</span>
																		<ul class="menu-list">
																			<li><a href="sidebar_default_collapse">Default sidebar</a></li>
																			<li><a href="sidebar_mini_collapse">Mini sidebar</a></li>
																			<li><a href="sidebar_dual">Dual sidebar</a></li>
																			<li><a href="sidebar_double_collapse">Double sidebar</a></li>
																			<li><a href="sidebar_light">Light sidebar</a></li>
																			<li><a href="sidebar_components">Sidebar components</a></li>
																		</ul>
																	</div>
																	<div class="col-md-2">
																		<span class="menu-heading underlined">Navigation</span>
																		<ul class="menu-list">
																			<li class="active"><a href="navigation_horizontal_click">Submenu on click</a></li>
																			<li><a href="navigation_horizontal_hover">Submenu on hover</a></li>
																			<li><a href="navigation_horizontal_elements">With custom elements</a></li>
																			<li><a href="navigation_horizontal_tabs">Tabbed navigation</a></li>
																			<li><a href="navigation_horizontal_disabled">Disabled navigation links</a></li>
																			<li><a href="navigation_horizontal_mega">Horizontal mega menu</a></li>
																		</ul>
																	</div>
																	<div class="col-md-2">
																		<span class="menu-heading underlined">Navbars</span>
																		<ul class="menu-list">
																			<li><a href="navbar_single">Single navbar</a></li>
																			<li><a href="navbar_multiple_navbar_navbar">Multiple navbars</a></li>
																			<li><a href="navbar_colors">Color options</a></li>
																			<li><a href="navbar_sizes">Sizing options <span class="badge badge-info">14</span></a></li>
																			<li><a href="navbar_hideable">Hide on scroll</a></li>
																			<li><a href="navbar_components">Navbar components</a></li>
																		</ul>
																	</div>
																	<div class="col-md-2">
																		<span class="menu-heading underlined">Extensions</span>
																		<ul class="menu-list">
																			<li><a href="extension_velocity_basic">Velocity animations <span class="label label-primary">HOT</span></a></li>
																			<li><a href="extension_blockui">Block UI</a></li>
																			<li><a href="uploader_plupload">File uploaders</a></li>
																			<li><a href="extension_image_cropper">Image cropper</a></li>
																			<li><a href="internationalization_switch_direct">Translation <span class="label label-success">New</span></a></li>
																			<li><a href="extra_fullcalendar_views">Calendars</a></li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</li>

													<li class="dropdown">
														<a href="#" class="dropdown-toggle" data-toggle="dropdown">
															<i class="icon-git-compare position-left"></i>
															Updates
															<span class="badge bg-indigo-800 badge-inline position-right">26</span>
															<span class="caret"></span>
														</a>
														
														<div class="dropdown-menu dropdown-content">
															<div class="dropdown-content-heading">
																Git updates
																<ul class="icons-list">
																	<li><a href="#"><i class="icon-sync"></i></a></li>
																</ul>
															</div>

															<ul class="media-list dropdown-content-body width-350">
																<li class="media">
																	<div class="media-left">
																		<a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
																	</div>

																	<div class="media-body">
																		Drop the IE <a href="#">specific hacks</a> for temporal inputs
																		<div class="media-annotation">4 minutes ago</div>
																	</div>
																</li>

																<li class="media">
																	<div class="media-left">
																		<a href="#" class="btn border-warning text-warning btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-commit"></i></a>
																	</div>
																	
																	<div class="media-body">
																		Add full font overrides for popovers and tooltips
																		<div class="media-annotation">36 minutes ago</div>
																	</div>
																</li>

																<li class="media">
																	<div class="media-left">
																		<a href="#" class="btn border-info text-info btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-branch"></i></a>
																	</div>
																	
																	<div class="media-body">
																		<a href="#">Chris Arney</a> created a new <span class="text-semibold">Design</span> branch
																		<div class="media-annotation">2 hours ago</div>
																	</div>
																</li>

																<li class="media">
																	<div class="media-left">
																		<a href="#" class="btn border-success text-success btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-merge"></i></a>
																	</div>
																	
																	<div class="media-body">
																		<a href="#">Eugene Kopyov</a> merged <span class="text-semibold">Master</span> and <span class="text-semibold">Dev</span> branches
																		<div class="media-annotation">Dec 18, 18:36</div>
																	</div>
																</li>

																<li class="media">
																	<div class="media-left">
																		<a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
																	</div>
																	
																	<div class="media-body">
																		Have Carousel ignore keyboard events
																		<div class="media-annotation">Dec 12, 05:46</div>
																	</div>
																</li>
															</ul>

															<div class="dropdown-content-footer">
																<a href="#" data-popup="tooltip" title="All activity"><i class="icon-menu display-block"></i></a>
															</div>
														</div>
													</li>
												</ul>

												<ul class="nav navbar-nav navbar-right">
													<li class="dropdown">
														<a href="#" class="dropdown-toggle" data-toggle="dropdown">
															<i class="icon-people position-left"></i>
															Users
															<span class="caret"></span>
														</a>
														
														<div class="dropdown-menu dropdown-content">
															<div class="dropdown-content-heading">
																Users online
																<ul class="icons-list">
																	<li><a href="#"><i class="icon-gear"></i></a></li>
																</ul>
															</div>

															<ul class="media-list dropdown-content-body width-300">
																<li class="media">
																	<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
																	<div class="media-body">
																		<a href="#" class="media-heading text-semibold">Jordana Ansley</a>
																		<span class="display-block text-muted text-size-small">Lead web developer</span>
																	</div>
																	<div class="media-right media-middle"><span class="status-mark border-success"></span></div>
																</li>

																<li class="media">
																	<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
																	<div class="media-body">
																		<a href="#" class="media-heading text-semibold">Will Brason</a>
																		<span class="display-block text-muted text-size-small">Marketing manager</span>
																	</div>
																	<div class="media-right media-middle"><span class="status-mark border-danger"></span></div>
																</li>

																<li class="media">
																	<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
																	<div class="media-body">
																		<a href="#" class="media-heading text-semibold">Hanna Walden</a>
																		<span class="display-block text-muted text-size-small">Project manager</span>
																	</div>
																	<div class="media-right media-middle"><span class="status-mark border-success"></span></div>
																</li>

																<li class="media">
																	<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
																	<div class="media-body">
																		<a href="#" class="media-heading text-semibold">Dori Laperriere</a>
																		<span class="display-block text-muted text-size-small">Business developer</span>
																	</div>
																	<div class="media-right media-middle"><span class="status-mark border-warning-300"></span></div>
																</li>

																<li class="media">
																	<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
																	<div class="media-body">
																		<a href="#" class="media-heading text-semibold">Vanessa Aurelius</a>
																		<span class="display-block text-muted text-size-small">UX expert</span>
																	</div>
																	<div class="media-right media-middle"><span class="status-mark border-grey-400"></span></div>
																</li>
															</ul>

															<div class="dropdown-content-footer">
																<a href="#" data-popup="tooltip" title="All users"><i class="icon-menu display-block"></i></a>
															</div>
														</div>
													</li>

													<li class="dropdown">
														<a href="#" class="dropdown-toggle" data-toggle="dropdown">
															<i class="icon-tree5 position-left"></i>
															Levels
															<span class="caret"></span>
														</a>

														<ul class="dropdown-menu dropdown-menu-right">
															<li><a href="#"><i class="icon-IE"></i> Second level</a></li>
															<li class="dropdown-submenu dropdown-submenu-left">
																<a href="#"><i class="icon-firefox"></i> Has child</a>
																<ul class="dropdown-menu">
																	<li><a href="#"><i class="icon-android"></i> Third level</a></li>
																	<li class="dropdown-submenu dropdown-submenu-left">
																		<a href="#"><i class="icon-apple2"></i> Has child</a>
																		<ul class="dropdown-menu">
																			<li><a href="#"><i class="icon-html5"></i> Fourth level</a></li>
																			<li><a href="#"><i class="icon-css3"></i> Fourth level</a></li>
																		</ul>
																	</li>
																	<li><a href="#"><i class="icon-windows"></i> Third level</a></li>
																</ul>
															</li>
															<li><a href="#"><i class="icon-chrome"></i> Second level</a></li>
														</ul>
													</li>

													<li class="dropdown dropdown-user">
														<a class="dropdown-toggle" data-toggle="dropdown">
															<img src="assets/images/placeholder.jpg" alt="">
															<span>Victoria</span>
															<i class="caret"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right">
															<li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
															<li><a href="#"><i class="icon-coins"></i> My balance</a></li>
															<li><a href="#"><span class="badge badge-warning pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a></li>
															<li class="divider"></li>
															<li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
															<li><a href="#"><i class="icon-switch2"></i> Logout</a></li>
														</ul>
													</li>
												</ul>
											</div>
										</div>

										<p class="text-semibold">Example markup:</p>
										<pre class="language-markup" data-line="5-12"><code>&lt;!-- Left aligned navigation -->
		&lt;ul class="nav navbar-nav">
			&lt;li class="active">&lt;a href="#">Link&lt;/a>&lt;/li>
			&lt;li>&lt;a href="#">Link&lt;/a>&lt;/li>
			&lt;li class="dropdown">
				&lt;a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown &lt;span class="caret">&lt;/span>&lt;/a>
				&lt;ul class="dropdown-menu">
					&lt;li>&lt;a href="#">Action&lt;/a>&lt;/li>
					&lt;li>&lt;a href="#">Another action&lt;/a>&lt;/li>
					&lt;li>&lt;a href="#">Something else here&lt;/a>&lt;/li>
				&lt;/ul>
			&lt;/li>
		&lt;/ul>
		&lt;!-- /left aligned navigation -->

		&lt;!-- Right aligned navigation -->
		&lt;ul class="nav navbar-nav navbar-right">
			&lt;li>&lt;a href="#">Link&lt;/a>&lt;/li>
			&lt;li>&lt;a href="#">Another link&lt;/a>&lt;/li>
			&lt;li>&lt;a href="#">One more link&lt;/a>&lt;/li>
		&lt;/ul>
		&lt;!-- /right aligned navigation -->
		</code></pre>
									</div>
								</div>
							</div>
							<!-- /open submenu on click -->

						</div>
					</div>
					<!-- /tabs content -->


					<!-- Horizontal navigation overview -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Navigation overview</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<div class="content-group-lg">
							</div>

							<div class="content-group-lg">
								<h6 class="text-semibold">1. Navigation placement</h6>
								<p>Simple usage of horizontal navigation allows to add simple navigation links to the main navbar: left or right position, excluding navbar header area with logo. For more advanced usage navigation can have multiple menu levels, tabbed navigation option, links with icons, inline and absolute positioned labels and badges etc. And can be placed in separate secondary navbar or in both navbars: top or bottom, fixed or static. Everything depends on specific needs. Since horizontal navigation is a part of <code>navbar</code> component, is does support all available navbar options, components, sizes, colors etc.</p>
							</div>

							<div class="content-group-lg">
								<h6 class="text-semibold">2. Double side navigation</h6>
								<p>By default horizontal navigation supports 2 main positions: <code>left</code> and <code>right</code>. For these positions are responsible 2 classes: <code>.navbar-left</code> and <code>navbar-right</code> that can be added to all navbar components to align them properly. For more advanced options like 3 or more positions, add grid columns inside navbar content. But please note: BS grid is mobile-first, if you need to use responsive columns, they wrap to a new line on certain screen size. To avoid this issue use <code>.col-xs-*</code> classes.</p>
							</div>

							<div class="content-group-lg">
								<h6 class="text-semibold">3. Multiple level dropdowns</h6>
								<p>Horizontal navigation supports multiple menu levels with different directions. Navigation menu uses default markup for Bootstrap <strong>dropdown menus</strong> and opens children levels <strong>on click</strong>. Another option available - show submenu <strong>on hover</strong> using <code>hover_dropdown.js</code> plugin. Navigation dropdopwns support all available options for dropdown menus: border and background colors, icons, headers, dividers etc. For example - they can be white or match navbar background color by adding <code>.bg-*</code> and <code>border-*</code> classes to the dropdown.</p>
							</div>

							<div class="content-group">
								<h6 class="text-semibold">4. Additional styling</h6>
								<p>Depending on navbar background color, navigation menu automatically adjust link colors for parent level. By default all dropdowns have white background color, but this color can be changed by adding proper classes to the dropdown menu list. Available options are: border width and border color - <code>.border-*</code> class; background color - <code>.bg-*</code> class; active state background color - <code>.element-*</code> class.</p>
							</div>
						</div>
					</div>
					<!-- /horizontal navigation overview -->


					<!-- Navbar component classes -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Component classes</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							The table below contains default navbar classes for components available for use in the navbar component. Control navigation and elements placement, color theme of navbar and child elements, dropdown menu appearance and positioning, sizing by adding or removing proper class:
						</div>

						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th style="width: 20%;">Class</th>
										<th>Description</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><code>.navbar-nav</code></td>
										<td>Default navbar navigation class, must be used with any navigation type and color. Responsible for basic navigation styling.</td>
									</tr>
									<tr>
										<td><code>.navbar-left</code>, <code>.navbar-right</code></td>
										<td>Positioning classes. Align nav links, forms, buttons, or text, using the <code>.navbar-left</code> or <code>.navbar-right</code> utility classes. Both classes will add a CSS float in the specified direction</td>
									</tr>
									<tr>
										<td><code>.navbar-form</code></td>
										<td>Place form content within <code>.navbar-form</code> for proper vertical alignment and collapsed behavior in narrow viewports. Use the alignment options to decide where it resides within the navbar content.</td>
									</tr>
									<tr>
										<td><code>.navbar-btn</code></td>
										<td>Add the <code>.navbar-btn</code> class to <code>&lt;button></code> elements not residing in a <code>&lt;form></code> to vertically center them in the navbar. Supports default, small and mini button sizes.</td>
									</tr>
									<tr>
										<td><code>.navbar-text</code></td>
										<td>Wrap strings of text in an element with <code>.navbar-text</code>, usually on a <code>&lt;p></code> tag for proper leading and color.</td>
									</tr>
									<tr>
										<td><code>.navbar-link</code></td>
										<td>For standard links that are not within the regular navbar navigation component, use the <code>.navbar-link</code> class to add the proper colors for the default and inverse navbar options.</td>
									</tr>
									<tr>
										<td><code>data-hover="dropdown"</code></td>
										<td>This data attribute shows submenu on hover instead of click. Needs to be added to the parent navigation link after <code>data-toggle="dropdown"</code>. Requires <code>hover_dropdown.min.js</code> file to be added.</td>
									</tr>
									<tr>
										<td><code>.navbar.bg-*</code>, <code>.navbar-header.bg-*</code></td>
										<td>Apply custom background color to the whote navbar or navbar header only. All navbar components automatically adjust their styling according to the navbar color.</td>
									</tr>
									<tr>
										<td><code>.disabled</code></td>
										<td>Disable any navbar navigation item by adding <code>.disabled</code> class to the <code>&lt;li></code> element. To disable item in hover navigation version, <code>data-hover="dropdown"</code> needs to be removed as well.</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<!-- /navbar component classes -->


					<!-- Footer -->
					<div class="footer text-muted">
						&copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>
