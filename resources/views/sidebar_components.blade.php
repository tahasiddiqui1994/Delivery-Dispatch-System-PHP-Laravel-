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
	<script type="text/javascript" src="{{url('assets/js/core/libraries/jquery_ui/interactions.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/core/libraries/jquery_ui/widgets.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/core/libraries/jquery_ui/touch.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/sliders/slider_pips.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/forms/selects/select2.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/forms/selects/selectboxit.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/forms/selects/bootstrap_select.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/forms/inputs/duallistbox.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/ui/moment/moment.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/pickers/daterangepicker.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/trees/fancytree_all.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/ui/prism.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/pickers/color/spectrum.js')}}"></script>

	<script type="text/javascript" src="{{url('assets/js/core/app.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/pages/sidebar_components.js')}}"></script>
	<!-- /theme JS files -->

</head>

<body class="sidebar-xs">

	<!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="index"><img src="assets/images/logo_light.png" alt=""></a>

			<ul class="nav navbar-nav pull-right visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
				<li><a class="sidebar-mobile-secondary-toggle"><i class="icon-more"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li>
					<a class="sidebar-control sidebar-main-toggle hidden-xs">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>

				<li>
					<a class="sidebar-control sidebar-secondary-hide hidden-xs">
						<i class="icon-transmission"></i>
					</a>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-git-compare"></i>
						<span class="visible-xs-inline-block position-right">Git updates</span>
						<span class="badge bg-warning-400">9</span>
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

			<p class="navbar-text">
				<span class="label bg-success">Online</span>
			</p>

			<div class="navbar-right">
				<ul class="nav navbar-nav">
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
							<li><a href="#"><span class="badge bg-blue pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a></li>
							<li class="divider"></li>
							<li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
							<li><a href="#"><i class="icon-switch2"></i> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								<a href="#" class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></a>
								<div class="media-body">
									<span class="media-heading text-semibold">Victoria Baker</span>
									<div class="text-size-mini text-muted">
										<i class="icon-pin text-size-small"></i> &nbsp;Santa Ana, CA
									</div>
								</div>

								<div class="media-right media-middle">
									<ul class="icons-list">
										<li>
											<a href="#"><i class="icon-cog3"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /user menu -->


					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

								<!-- Main -->
								<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
								<li><a href="index"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
								<li>
									<a href="#"><i class="icon-stack2"></i> <span>Page layouts</span></a>
									<ul>
										<li><a href="layout_navbar_fixed">Fixed navbar</a></li>
										<li><a href="layout_navbar_sidebar_fixed">Fixed navbar &amp; sidebar</a></li>
										<li><a href="layout_sidebar_fixed_native">Fixed sidebar native scroll</a></li>
										<li><a href="layout_navbar_hideable">Hideable navbar</a></li>
										<li><a href="layout_navbar_hideable_sidebar">Hideable &amp; fixed sidebar</a></li>
										<li><a href="layout_footer_fixed">Fixed footer</a></li>
										<li class="navigation-divider"></li>
										<li><a href="boxed_default">Boxed with default sidebar</a></li>
										<li><a href="boxed_mini">Boxed with mini sidebar</a></li>
										<li><a href="boxed_full">Boxed full width</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-copy"></i> <span>Layouts</span></a>
									<ul>
										<li><a href="../../../layout_1/LTR/index" id="layout1">Layout 1</a></li>
										<li><a href="index" id="layout2">Layout 2 <span class="label bg-warning-400">Current</span></a></li>
										<li><a href="../../../layout_3/LTR/index" id="layout3">Layout 3</a></li>
										<li><a href="../../../layout_4/LTR/index" id="layout4">Layout 4</a></li>
										<li><a href="../../../layout_5/LTR/index" id="layout5">Layout 5</a></li>
										<li class="disabled"><a href="../../../layout_6/LTR/index" id="layout6">Layout 6 <span class="label label-transparent">Coming soon</span></a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-droplet2"></i> <span>Color system</span></a>
									<ul>
										<li><a href="colors_primary">Primary palette</a></li>
										<li><a href="colors_danger">Danger palette</a></li>
										<li><a href="colors_success">Success palette</a></li>
										<li><a href="colors_warning">Warning palette</a></li>
										<li><a href="colors_info">Info palette</a></li>
										<li class="navigation-divider"></li>
										<li><a href="colors_pink">Pink palette</a></li>
										<li><a href="colors_violet">Violet palette</a></li>
										<li><a href="colors_purple">Purple palette</a></li>
										<li><a href="colors_indigo">Indigo palette</a></li>
										<li><a href="colors_blue">Blue palette</a></li>
										<li><a href="colors_teal">Teal palette</a></li>
										<li><a href="colors_green">Green palette</a></li>
										<li><a href="colors_orange">Orange palette</a></li>
										<li><a href="colors_brown">Brown palette</a></li>
										<li><a href="colors_grey">Grey palette</a></li>
										<li><a href="colors_slate">Slate palette</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-stack"></i> <span>Starter kit</span></a>
									<ul>
										<li><a href="starters/horizontal_nav">Horizontal navigation</a></li>
										<li><a href="starters/1_col">1 column</a></li>
										<li><a href="starters/2_col">2 columns</a></li>
										<li>
											<a href="#">3 columns</a>
											<ul>
												<li><a href="starters/3_col_dual">Dual sidebars</a></li>
												<li><a href="starters/3_col_double">Double sidebars</a></li>
											</ul>
										</li>
										<li><a href="starters/4_col">4 columns</a></li>
										<li>
											<a href="#">Detached layout</a>
											<ul>
												<li><a href="starters/detached_left">Left sidebar</a></li>
												<li><a href="starters/detached_right">Right sidebar</a></li>
												<li><a href="starters/detached_sticky">Sticky sidebar</a></li>
											</ul>
										</li>
										<li><a href="starters/layout_boxed">Boxed layout</a></li>
										<li class="navigation-divider"></li>
										<li><a href="starters/layout_navbar_fixed_main">Fixed main navbar</a></li>
										<li><a href="starters/layout_navbar_fixed_secondary">Fixed secondary navbar</a></li>
										<li><a href="starters/layout_navbar_fixed_both">Both navbars fixed</a></li>
										<li><a href="starters/layout_fixed">Fixed layout</a></li>
									</ul>
								</li>
								<li><a href="changelog"><i class="icon-list-unordered"></i> <span>Changelog <span class="label bg-blue-400">1.6</span></span></a></li>
								<!-- /main -->

								<!-- Forms -->
								<li class="navigation-header"><span>Forms</span> <i class="icon-menu" title="Forms"></i></li>
								<li>
									<a href="#"><i class="icon-pencil3"></i> <span>Form components</span></a>
									<ul>
										<li><a href="form_inputs_basic">Basic inputs</a></li>
										<li><a href="form_checkboxes_radios">Checkboxes &amp; radios</a></li>
										<li><a href="form_input_groups">Input groups</a></li>
										<li><a href="form_controls_extended">Extended controls</a></li>
										<li><a href="form_floating_labels">Floating labels</a></li>
										<li>
											<a href="#">Selects</a>
											<ul>
												<li><a href="form_select2">Select2 selects</a></li>
												<li><a href="form_multiselect">Bootstrap multiselect</a></li>
												<li><a href="form_select_box_it">SelectBoxIt selects</a></li>
												<li><a href="form_bootstrap_select">Bootstrap selects</a></li>
											</ul>
										</li>
										<li><a href="form_tag_inputs">Tag inputs</a></li>
										<li><a href="form_dual_listboxes">Dual Listboxes</a></li>
										<li><a href="form_editable">Editable forms</a></li>
										<li><a href="form_validation">Validation</a></li>
										<li><a href="form_inputs_grid">Inputs grid</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-file-css"></i> <span>JSON forms</span></a>
									<ul>
										<li><a href="alpaca_basic">Basic inputs</a></li>
										<li><a href="alpaca_advanced">Advanced inputs</a></li>
										<li><a href="alpaca_controls">Controls</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-footprint"></i> <span>Wizards</span></a>
									<ul>
										<li><a href="wizard_steps">Steps wizard</a></li>
										<li><a href="wizard_form">Form wizard</a></li>
										<li><a href="wizard_stepy">Stepy wizard</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-spell-check"></i> <span>Editors</span></a>
									<ul>
										<li><a href="editor_summernote">Summernote editor</a></li>
										<li><a href="editor_ckeditor">CKEditor</a></li>
										<li><a href="editor_wysihtml5">WYSIHTML5 editor</a></li>
										<li><a href="editor_code">Code editor</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-select2"></i> <span>Pickers</span></a>
									<ul>
										<li><a href="picker_date">Date &amp; time pickers</a></li>
										<li><a href="picker_color">Color pickers</a></li>
										<li><a href="picker_location">Location pickers</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-insert-template"></i> <span>Form layouts</span></a>
									<ul>
										<li><a href="form_layout_vertical">Vertical form</a></li>
										<li><a href="form_layout_horizontal">Horizontal form</a></li>
									</ul>
								</li>
								<!-- /forms -->

								<!-- Appearance -->
								<li class="navigation-header"><span>Appearance</span> <i class="icon-menu" title="Appearance"></i></li>
								<li>
									<a href="#"><i class="icon-grid"></i> <span>Components</span></a>
									<ul>
										<li><a href="components_modals">Modals</a></li>
										<li><a href="components_dropdowns">Dropdown menus</a></li>
										<li><a href="components_tabs">Tabs component</a></li>
										<li><a href="components_pills">Pills component</a></li>
										<li><a href="components_navs">Accordion and navs</a></li>
										<li><a href="components_buttons">Buttons</a></li>
										<li><a href="components_notifications_pnotify">PNotify notifications</a></li>
										<li><a href="components_notifications_others">Other notifications</a></li>
										<li><a href="components_popups">Tooltips and popovers</a></li>
										<li><a href="components_alerts">Alerts</a></li>
										<li><a href="components_pagination">Pagination</a></li>
										<li><a href="components_labels">Labels and badges</a></li>
										<li><a href="components_loaders">Loaders and bars</a></li>
										<li><a href="components_thumbnails">Thumbnails</a></li>
										<li><a href="components_page_header">Page header</a></li>
										<li><a href="components_breadcrumbs">Breadcrumbs</a></li>
										<li><a href="components_media">Media objects</a></li>
										<li><a href="components_affix">Affix and Scrollspy</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-puzzle2"></i> <span>Content appearance</span></a>
									<ul>
										<li><a href="appearance_content_panels">Content panels</a></li>
										<li><a href="appearance_panel_heading">Panel heading elements</a></li>
										<li><a href="appearance_panel_footer">Panel footer elements</a></li>
										<li><a href="appearance_draggable_panels">Draggable panels</a></li>
										<li><a href="appearance_text_styling">Text styling</a></li>
										<li><a href="appearance_typography">Typography</a></li>
										<li><a href="appearance_helpers">Helper classes</a></li>
										<li><a href="appearance_syntax_highlighter">Syntax highlighter</a></li>
										<li><a href="appearance_content_grid">Grid system</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-gift"></i> <span>Extra components</span></a>
									<ul>
										<li><a href="extra_sliders_noui">NoUI sliders</a></li>
										<li><a href="extra_sliders_ion">Ion range sliders</a></li>
										<li><a href="extra_session_timeout">Session timeout</a></li>
										<li><a href="extra_idle_timeout">Idle timeout</a></li>
										<li><a href="extra_trees">Dynamic tree views</a></li>
										<li><a href="extra_context_menu">Context menu</a></li>
										<li><a href="extra_fab">Floating action buttons</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-spinner2 spinner"></i> <span>Animations</span></a>
									<ul>
										<li><a href="animations_css3">CSS3 animations</a></li>
										<li>
											<a href="#">Velocity animations</a>
											<ul>
												<li><a href="animations_velocity_basic">Basic usage</a></li>
												<li><a href="animations_velocity_ui">UI pack effects</a></li>
												<li><a href="animations_velocity_examples">Advanced examples</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-thumbs-up2"></i> <span>Icons</span></a>
									<ul>
										<li><a href="icons_glyphicons">Glyphicons</a></li>
										<li><a href="icons_icomoon">Icomoon</a></li>
										<li><a href="icons_fontawesome">Font awesome</a></li>
									</ul>
								</li>
								<!-- /appearance -->

								<!-- Layout -->
								<li class="navigation-header"><span>Layout</span> <i class="icon-menu" title="Layout options"></i></li>
								<li>
									<a href="#"><i class="icon-indent-decrease2"></i> <span>Sidebars</span></a>
									<ul>
										<li><a href="sidebar_default_collapse">Default collapsible</a></li>
										<li><a href="sidebar_default_hide">Default hideable</a></li>
										<li><a href="sidebar_mini_collapse">Mini collapsible</a></li>
										<li><a href="sidebar_mini_hide">Mini hideable</a></li>
										<li>
											<a href="#">Dual sidebar</a>
											<ul>
												<li><a href="sidebar_dual">Dual sidebar</a></li>
												<li><a href="sidebar_dual_double_collapse">Dual double collapse</a></li>
												<li><a href="sidebar_dual_double_hide">Dual double hide</a></li>
												<li><a href="sidebar_dual_swap">Swap sidebars</a></li>
											</ul>
										</li>
										<li>
											<a href="#">Double sidebar</a>
											<ul>
												<li><a href="sidebar_double_collapse">Collapse main sidebar</a></li>
												<li><a href="sidebar_double_hide">Hide main sidebar</a></li>
												<li><a href="sidebar_double_fix_default">Fix default width</a></li>
												<li><a href="sidebar_double_fix_mini">Fix mini width</a></li>
												<li><a href="sidebar_double_visible">Opposite sidebar visible</a></li>
											</ul>
										</li>
										<li>
											<a href="#">Detached sidebar</a>
											<ul>
												<li><a href="sidebar_detached_left">Left position</a></li>
												<li><a href="sidebar_detached_right">Right position</a></li>
												<li><a href="sidebar_detached_sticky_custom">Sticky (custom scroll)</a></li>
												<li><a href="sidebar_detached_sticky_native">Sticky (native scroll)</a></li>
												<li><a href="sidebar_detached_separate">Separate categories</a></li>
											</ul>
										</li>
										<li><a href="sidebar_hidden">Hidden sidebar</a></li>
										<li><a href="sidebar_light">Light sidebar</a></li>
										<li class="active"><a href="sidebar_components">Sidebar components</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-sort"></i> <span>Vertical navigation</span></a>
									<ul>
										<li><a href="navigation_vertical_collapsible">Collapsible menu</a></li>
										<li><a href="navigation_vertical_accordion">Accordion menu</a></li>
										<li><a href="navigation_vertical_sizing">Navigation sizing</a></li>
										<li><a href="navigation_vertical_bordered">Bordered navigation</a></li>
										<li><a href="navigation_vertical_right_icons">Right icons</a></li>
										<li><a href="navigation_vertical_labels_badges">Labels and badges</a></li>
										<li><a href="navigation_vertical_disabled">Disabled navigation links</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-transmission"></i> <span>Horizontal navigation</span></a>
									<ul>
										<li><a href="navigation_horizontal_click">Submenu on click</a></li>
										<li><a href="navigation_horizontal_hover">Submenu on hover</a></li>
										<li><a href="navigation_horizontal_elements">With custom elements</a></li>
										<li><a href="navigation_horizontal_tabs">Tabbed navigation</a></li>
										<li><a href="navigation_horizontal_disabled">Disabled navigation links</a></li>
										<li><a href="navigation_horizontal_mega">Horizontal mega menu</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-menu3"></i> <span>Navbars</span></a>
									<ul>
										<li><a href="navbar_single">Single navbar</a></li>
										<li>
											<a href="#">Multiple navbars</a>
											<ul>
												<li><a href="navbar_multiple_navbar_navbar">Navbar + navbar</a></li>
												<li><a href="navbar_multiple_navbar_header">Navbar + header</a></li>
												<li><a href="navbar_multiple_header_navbar">Header + navbar</a></li>
												<li><a href="navbar_multiple_top_bottom">Top + bottom</a></li>
											</ul>
										</li>
										<li><a href="navbar_colors">Color options</a></li>
										<li><a href="navbar_sizes">Sizing options</a></li>
										<li><a href="navbar_hideable">Hide on scroll</a></li>
										<li><a href="navbar_components">Navbar components</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-tree5"></i> <span>Menu levels</span></a>
									<ul>
										<li><a href="#"><i class="icon-IE"></i> Second level</a></li>
										<li>
											<a href="#"><i class="icon-firefox"></i> Second level with child</a>
											<ul>
												<li><a href="#"><i class="icon-android"></i> Third level</a></li>
												<li>
													<a href="#"><i class="icon-apple2"></i> Third level with child</a>
													<ul>
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
								<!-- /layout -->

								<!-- Data visualization -->
								<li class="navigation-header"><span>Data visualization</span> <i class="icon-menu" title="Data visualization"></i></li>
								<li>
									<a href="#"><i class="icon-graph"></i> <span>Echarts library</span></a>
									<ul>
										<li><a href="echarts_lines_areas">Lines and areas</a></li>
										<li><a href="echarts_columns_waterfalls">Columns and waterfalls</a></li>
										<li><a href="echarts_bars_tornados">Bars and tornados</a></li>
										<li><a href="echarts_scatter">Scatter charts</a></li>
										<li><a href="echarts_pies_donuts">Pies and donuts</a></li>
										<li><a href="echarts_funnels_chords">Funnels and chords</a></li>
										<li><a href="echarts_candlesticks_others">Candlesticks and others</a></li>
										<li><a href="echarts_combinations">Chart combinations</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-statistics"></i> <span>D3 library</span></a>
									<ul>
										<li><a href="d3_lines_basic">Simple lines</a></li>
										<li><a href="d3_lines_advanced">Advanced lines</a></li>
										<li><a href="d3_bars_basic">Simple bars</a></li>
										<li><a href="d3_bars_advanced">Advanced bars</a></li>
										<li><a href="d3_pies">Pie charts</a></li>
										<li><a href="d3_circle_diagrams">Circle diagrams</a></li>
										<li><a href="d3_tree">Tree layout</a></li>
										<li><a href="d3_other">Other charts</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-stats-dots"></i> <span>Dimple library</span></a>
									<ul>
										<li>
											<a href="#">Line charts</a>
											<ul>
												<li><a href="dimple_lines_horizontal">Horizontal orientation</a></li>
												<li><a href="dimple_lines_vertical">Vertical orientation</a></li>
											</ul>
										</li>
										<li>
											<a href="#">Bar charts</a>
											<ul>
												<li><a href="dimple_bars_horizontal">Horizontal orientation</a></li>
												<li><a href="dimple_bars_vertical">Vertical orientation</a></li>
											</ul>
										</li>
										<li>
											<a href="#">Area charts</a>
											<ul>
												<li><a href="dimple_area_horizontal">Horizontal orientation</a></li>
												<li><a href="dimple_area_vertical">Vertical orientation</a></li>
											</ul>
										</li>
										<li>
											<a href="#">Step charts</a>
											<ul>
												<li><a href="dimple_step_horizontal">Horizontal orientation</a></li>
												<li><a href="dimple_step_vertical">Vertical orientation</a></li>
											</ul>
										</li>
										<li><a href="dimple_pies">Pie charts</a></li>
										<li><a href="dimple_rings">Ring charts</a></li>
										<li><a href="dimple_scatter">Scatter charts</a></li>
										<li><a href="dimple_bubble">Bubble charts</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-stats-bars"></i> <span>C3 library</span></a>
									<ul>
										<li><a href="c3_lines_areas">Lines and areas</a></li>
										<li><a href="c3_bars_pies">Bars and pies</a></li>
										<li><a href="c3_advanced">Advanced examples</a></li>
										<li><a href="c3_axis">Chart axis</a></li>
										<li><a href="c3_grid">Grid options</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-google"></i> <span>Google visualization</span></a>
									<ul>
										<li><a href="google_lines">Line charts</a></li>
										<li><a href="google_bars">Bar charts</a></li>
										<li><a href="google_pies">Pie charts</a></li>
										<li><a href="google_scatter_bubble">Bubble &amp; scatter charts</a></li>
										<li><a href="google_other">Other charts</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-map5"></i> <span>Maps integration</span></a>
									<ul>
										<li>
											<a href="#">Google maps</a>
											<ul>
												<li><a href="maps_google_basic">Basics</a></li>
												<li><a href="maps_google_controls">Controls</a></li>
												<li><a href="maps_google_markers">Markers</a></li>
												<li><a href="maps_google_drawings">Map drawings</a></li>
												<li><a href="maps_google_layers">Layers</a></li>
											</ul>
										</li>
										<li><a href="maps_vector">Vector maps</a></li>
									</ul>
								</li>
								<!-- /data visualization -->

								<!-- Extensions -->
								<li class="navigation-header"><span>Extensions</span> <i class="icon-menu" title="Extensions"></i></li>
								<li>
									<a href="#"><i class="icon-puzzle4"></i> <span>Extensions</span></a>
									<ul>
										<li><a href="extension_image_cropper">Image cropper</a></li>
										<li><a href="extension_blockui">Block UI</a></li>
										<li><a href="extension_dnd">Drag and drop</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-popout"></i> <span>JQuery UI</span></a>
									<ul>
										<li><a href="jqueryui_interactions">Interactions</a></li>
										<li><a href="jqueryui_forms">Forms</a></li>
										<li><a href="jqueryui_components">Components</a></li>
										<li><a href="jqueryui_sliders">Sliders</a></li>
										<li><a href="jqueryui_navigation">Navigation</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-upload"></i> <span>File uploaders</span></a>
									<ul>
										<li><a href="uploader_plupload">Plupload</a></li>
										<li><a href="uploader_bootstrap">Bootstrap file uploader</a></li>
										<li><a href="uploader_dropzone">Dropzone</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-calendar3"></i> <span>Event calendars</span></a>
									<ul>
										<li><a href="extension_fullcalendar_views">Basic views</a></li>
										<li><a href="extension_fullcalendar_styling">Event styling</a></li>
										<li><a href="extension_fullcalendar_formats">Language and time</a></li>
										<li><a href="extension_fullcalendar_advanced">Advanced usage</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-sphere"></i> <span>Internationalization</span></a>
									<ul>
										<li><a href="internationalization_switch_direct">Direct translation</a></li>
										<li><a href="internationalization_switch_query">Querystring parameter</a></li>
										<li><a href="internationalization_on_init">Set language on init</a></li>
										<li><a href="internationalization_after_init">Set language after init</a></li>
										<li><a href="internationalization_fallback">Language fallback</a></li>
										<li><a href="internationalization_callbacks">Callbacks</a></li>
									</ul>
								</li>
								<!-- /extensions -->

								<!-- Tables -->
								<li class="navigation-header"><span>Tables</span> <i class="icon-menu" title="Tables"></i></li>
								<li>
									<a href="#"><i class="icon-table2"></i> <span>Basic tables</span></a>
									<ul>
										<li><a href="table_basic">Basic examples</a></li>
										<li><a href="table_sizing">Table sizing</a></li>
										<li><a href="table_borders">Table borders</a></li>
										<li><a href="table_styling">Table styling</a></li>
										<li><a href="table_elements">Table elements</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-grid7"></i> <span>Data tables</span></a>
									<ul>
										<li><a href="datatable_basic">Basic initialization</a></li>
										<li><a href="datatable_styling">Basic styling</a></li>
										<li><a href="datatable_advanced">Advanced examples</a></li>
										<li><a href="datatable_sorting">Sorting options</a></li>
										<li><a href="datatable_api">Using API</a></li>
										<li><a href="datatable_data_sources">Data sources</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-alignment-unalign"></i> <span>Data tables extensions</span></a>
									<ul>
										<li><a href="datatable_extension_reorder">Columns reorder</a></li>
										<li><a href="datatable_extension_row_reorder">Row reorder</a></li>
										<li><a href="datatable_extension_fixed_columns">Fixed columns</a></li>
										<li><a href="datatable_extension_fixed_header">Fixed header</a></li>
										<li><a href="datatable_extension_autofill">Auto fill</a></li>
										<li><a href="datatable_extension_key_table">Key table</a></li>
										<li><a href="datatable_extension_scroller">Scroller</a></li>
										<li><a href="datatable_extension_select">Select</a></li>
										<li>
											<a href="#">Buttons</a>
											<ul>
												<li><a href="datatable_extension_buttons_init">Initialization</a></li>
												<li><a href="datatable_extension_buttons_flash">Flash buttons</a></li>
												<li><a href="datatable_extension_buttons_print">Print buttons</a></li>
												<li><a href="datatable_extension_buttons_html5">HTML5 buttons</a></li>
											</ul>
										</li>

										<li><a href="datatable_extension_colvis">Columns visibility</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-file-spreadsheet"></i> <span>Handsontable</span></a>
									<ul>
										<li><a href="handsontable_basic">Basic configuration</a></li>
										<li><a href="handsontable_advanced">Advanced setup</a></li>
										<li><a href="handsontable_cols">Column features</a></li>
										<li><a href="handsontable_cells">Cell features</a></li>
										<li><a href="handsontable_types">Basic cell types</a></li>
										<li><a href="handsontable_custom_checks">Custom &amp; checkboxes</a></li>
										<li><a href="handsontable_ac_password">Autocomplete &amp; password</a></li>
										<li><a href="handsontable_search">Search</a></li>
										<li><a href="handsontable_context">Context menu</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-versions"></i> <span>Responsive options</span></a>
									<ul>
										<li><a href="table_responsive">Responsive basic tables</a></li>
										<li><a href="datatable_responsive">Responsive data tables</a></li>
									</ul>
								</li>
								<!-- /tables -->

								<!-- Page kits -->
								<li class="navigation-header"><span>Page kits</span> <i class="icon-menu" title="Page kits"></i></li>
								<li>
									<a href="#"><i class="icon-grid6"></i> <span>General pages</span></a>
									<ul>
										<li><a href="general_feed">Feed</a></li>
										<li><a href="general_widgets_content">Content widgets</a></li>
										<li><a href="general_widgets_stats">Statistics widgets</a></li>
										<li><a href="general_embeds">Embeds</a></li>
										<li><a href="general_faq">FAQ page</a></li>
										<li><a href="general_knowledgebase">Knowledgebase</a></li>
										<li>
											<a href="#">Blog</a>
											<ul>
												<li><a href="blog_classic_v">Classic vertical</a></li>
												<li><a href="blog_classic_h">Classic horizontal</a></li>
												<li><a href="blog_grid">Grid</a></li>
												<li><a href="blog_single">Single post</a></li>
												<li class="navigation-divider"></li>
												<li><a href="blog_sidebar_left">Left sidebar</a></li>
												<li><a href="blog_sidebar_right">Right sidebar</a></li>
											</ul>
										</li>
										<li>
											<a href="#">Timelines</a>
											<ul>
												<li><a href="timelines_left">Left timeline</a></li>
												<li><a href="timelines_right">Right timeline</a></li>
												<li><a href="timelines_center">Centered timeline</a></li>
											</ul>
										</li>
										<li>
											<a href="#">Gallery</a>
											<ul>
												<li><a href="gallery_grid">Media grid</a></li>
												<li><a href="gallery_titles">Media with titles</a></li>
												<li><a href="gallery_description">Media with description</a></li>
												<li><a href="gallery_library">Media library</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-wrench3"></i> <span>Service pages</span></a>
									<ul>
										<li><a href="service_sitemap">Sitemap</a></li>
										<li>
											<a href="#">Invoicing</a>
											<ul>
												<li><a href="invoice_template">Invoice template</a></li>
												<li><a href="invoice_grid">Invoice grid</a></li>
												<li><a href="invoice_archive">Invoice archive</a></li>
											</ul>
										</li>
										<li>
											<a href="#">Authentication</a>
											<ul>
												<li><a href="login_simple">Simple login</a></li>
												<li><a href="login_advanced">More login info</a></li>
												<li><a href="login_registration">Simple registration</a></li>
												<li><a href="login_registration_advanced">More registration info</a></li>
												<li><a href="login_unlock">Unlock user</a></li>
												<li><a href="login_password_recover">Reset password</a></li>
												<li><a href="login_hide_navbar">Hide navbar</a></li>
												<li><a href="login_transparent">Transparent box</a></li>
												<li><a href="login_background">Background option</a></li>
												<li><a href="login_validation">With validation</a></li>
												<li><a href="login_tabbed">Tabbed form</a></li>
												<li><a href="login_modals">Inside modals</a></li>
											</ul>
										</li>
										<li>
											<a href="#">Error pages</a>
											<ul>
												<li><a href="error_403">Error 403</a></li>
												<li><a href="error_404">Error 404</a></li>
												<li><a href="error_405">Error 405</a></li>
												<li><a href="error_500">Error 500</a></li>
												<li><a href="error_503">Error 503</a></li>
												<li><a href="error_offline">Offline page</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-people"></i> <span>User pages</span></a>
									<ul>
										<li><a href="user_pages_list">User list</a></li>
										<li><a href="user_pages_cards">User cards</a></li>
										<li><a href="user_pages_profile">Simple profile</a></li>
										<li><a href="user_pages_profile_tabbed">Tabbed profile</a></li>
										<li><a href="user_pages_profile_cover">Profile with cover</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-cube3"></i> <span>Application pages</span></a>
									<ul>
										<li>
											<a href="#">Task manager</a>
											<ul>
												<li><a href="task_manager_grid">Task grid</a></li>
												<li><a href="task_manager_list">Task list</a></li>
												<li><a href="task_manager_detailed">Task detailed</a></li>
											</ul>
										</li>
										<li>
											<a href="#">Inbox</a>
											<ul>
												<li><a href="mail_list">Mail list</a></li>
												<li><a href="mail_list_detached">Mail list (detached)</a></li>
												<li><a href="mail_read">Read mail</a></li>
												<li><a href="mail_write">Write mail</a></li>
												<li class="navigation-divider"></li>
												<li><a href="chat_layouts">Chat layouts</a></li>
												<li><a href="chat_options">Chat options</a></li>
											</ul>
										</li>
										<li>
											<a href="#">Search</a>
											<ul>
												<li><a href="search_basic">Basic search results</a></li>
												<li><a href="search_users">User search results</a></li>
												<li><a href="search_images">Image search results</a></li>
												<li><a href="search_videos">Video search results</a></li>
											</ul>
										</li>
										<li>
											<a href="#">Job search</a>
											<ul>
												<li><a href="job_list_cards">Cards view</a></li>
												<li><a href="job_list_panel">Panel view</a></li>
												<li><a href="job_detailed">Job detailed</a></li>
												<li><a href="job_apply">Apply</a></li>
											</ul>
										</li>
										<li>
											<a href="#">Learning</a>
											<ul>
												<li><a href="learning_list">List view</a></li>
												<li><a href="learning_grid">Grid view</a></li>
												<li><a href="learning_detailed">Detailed course</a></li>
											</ul>
										</li>
										<li>
											<a href="#">Ecommerce set</a>
											<ul>
												<li><a href="ecommerce_product_list">Product list</a></li>
												<li><a href="ecommerce_product_grid">Product grid</a></li>
												<li><a href="ecommerce_orders_history">Orders history</a></li>
												<li><a href="ecommerce_customers">Customers</a></li>
												<li><a href="ecommerce_pricing">Pricing tables</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<!-- /page kits -->

							</ul>
						</div>
					</div>
					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->


			<!-- Secondary sidebar -->
			<div class="sidebar sidebar-secondary sidebar-default">
				<div class="sidebar-content">

					<!-- Sidebar tabs -->
					<div class="tabbable sortable">
						<ul class="nav nav-lg nav-tabs nav-justified">
							<li class="active">
								<a href="#components-tab" data-toggle="tab">
									<i class="icon-grid-alt"></i>
									<span class="visible-xs-inline-block position-right">Components</span>
								</a>
							</li>

							<li>
								<a href="#forms-tab" data-toggle="tab">
									<i class="icon-menu6"></i>
									<span class="visible-xs-inline-block position-right">Forms</span>
								</a>
							</li>

							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="icon-grid5"></i>
									<span class="visible-xs-inline-block position-right">Other components</span>
									<span class="caret"></span>
								</a>

								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#other-tab" data-toggle="tab"><i class="icon-task pull-right"></i> Other elements</a></li>
									<li><a href="#custom-tab" data-toggle="tab"><i class="icon-googleplus5 pull-right"></i> Custom content</a></li>
								</ul>
							</li>
						</ul>

						<div class="tab-content">
							<div class="tab-pane active no-padding" id="components-tab">

								<!-- Block buttons -->
								<div class="sidebar-category">
									<div class="category-title">
										<span>Block buttons</span>
										<ul class="icons-list">
											<li><a href="#" data-action="collapse"></a></li>
										</ul>
									</div>

									<div class="category-content">
										<div class="row">
											<div class="col-xs-6">
												<button class="btn bg-teal-400 btn-block btn-float btn-float-lg" type="button"><i class="icon-git-branch"></i> <span>Branch</span></button>
												<button class="btn bg-purple-300 btn-block btn-float btn-float-lg" type="button"><i class="icon-mail-read"></i> <span>Messages</span></button>
											</div>
											
											<div class="col-xs-6">
												<button class="btn bg-warning-400 btn-block btn-float btn-float-lg" type="button"><i class="icon-stats-bars"></i> <span>Statistics</span></button>
												<button class="btn bg-blue btn-block btn-float btn-float-lg" type="button"><i class="icon-people"></i> <span>Users</span></button>
											</div>
										</div>
									</div>
								</div>
								<!-- /block buttons -->


								<!-- Daterange picker -->
								<div class="sidebar-category">
									<div class="category-title">
										<span>Daterange picker</span>
										<ul class="icons-list">
											<li><a href="#" data-action="collapse"></a></li>
										</ul>
									</div>

									<div class="category-content text-center">
										<div id="reportrange" class="daterange-custom">
											<div class="daterange-custom-display"></div>
											<span class="badge badge-danger">36</span>
										</div>
									</div>
								</div>
								<!-- /daterange picker -->


								<!-- Sub navigation -->
								<div class="sidebar-category">
									<div class="category-title">
										<span>Navigation</span>
										<ul class="icons-list">
											<li><a href="#" data-action="collapse"></a></li>
										</ul>
									</div>

									<div class="category-content no-padding">
										<ul class="navigation navigation-alt navigation-accordion">

											<!-- Sidebars -->
											<li>
												<a href="#"><i class="icon-indent-decrease"></i> <span>Sidebars</span></a>
												<ul>
													<li class="active"><a href="sidebar_components">Sidebar components</a></li>
													<li><a href="sidebar_default_collapse">Default sidebar</a></li>
													<li><a href="sidebar_mini_collapse">Mini sidebar <span class="label label-warning">New</span></a></li>
													<li><a href="sidebar_dual">Dual sidebar</a></li>
													<li><a href="sidebar_double_collapse">Double sidebar</a></li>
												</ul>
											</li>
											<li><a href="navigation_vertical_accordion"><i class="icon-sort"></i> <span>Vertical navigation</span></a></li>
											<li><a href="navigation_horizontal_click"><i class="icon-transmission"></i> <span>Horizontal navigation</span></a></li>
											<li><a href="navbar_single"><i class="icon-menu6"></i> <span>Navbars</span> <span class="badge badge-primary">99+</span></a></li>
											<!-- /sidebars -->

											<!-- Extensions -->
											<li class="navigation-header"><span>Extensions</span></li>
											<li>
												<a href="#"><i class="icon-stack"></i> <span>Velocity animations</span></a>
												<ul>
													<li><a href="extension_velocity_basic">Basic usage</a></li>
													<li><a href="extension_velocity_ui">UI pack effects</a></li>
													<li><a href="extension_velocity_examples">Advanced examples</a></li>
												</ul>
											</li>
											<li><a href="extension_blockui"><i class="icon-history"></i> <span>Block UI</span> <span class="badge bg-pink-400">8</span></a></li>
											<li>
												<a href="#"><i class="icon-upload"></i> <span>File uploaders</span></a>
												<ul>
													<li><a href="uploader_plupload">Plupload</a></li>
													<li><a href="uploader_bootstrap">Bootstrap file uploader</a></li>
													<li><a href="uploader_dropzone">Dropzone</a></li>
												</ul>
											</li>
											<li><a href="extension_image_cropper"><i class="icon-crop"></i> <span>Image cropper</span> <span class="label bg-teal-400">Hot</span></a></li>
											<!-- /extensions -->

										</ul>
									</div>
								</div>
								<!-- /sub navigation -->


								<!-- Thumbnails -->
								<div class="sidebar-category">
									<div class="category-title">
										<span>Thumbnails</span>
										<ul class="icons-list">
											<li><a href="#" data-action="collapse"></a></li>
										</ul>
									</div>

									<div class="sidebar-category-wrapper">
										<div class="category-content">
											<div class="thumbnail">
												<div class="thumb">
													<a href="#">
														<img src="assets/images/placeholder.jpg" alt="">
														<span class="zoom-image"><i class="icon-plus22"></i></span>
													</a>
												</div>
											</div>

											<div class="row">
												<div class="col-xs-6">
													<div class="thumbnail">
														<div class="thumb">
															<a href="#">
																<img src="assets/images/placeholder.jpg" alt="">
																<span class="zoom-image"><i class="icon-plus22"></i></span>
															</a>
														</div>
													</div>

													<div class="thumbnail">
														<div class="thumb">
															<a href="#">
																<img src="assets/images/placeholder.jpg" alt="">
																<span class="zoom-image"><i class="icon-plus22"></i></span>
															</a>
														</div>
													</div>
												</div>

												<div class="col-xs-6">
													<div class="thumbnail">
														<div class="thumb">
															<a href="#">
																<img src="assets/images/placeholder.jpg" alt="">
																<span class="zoom-image"><i class="icon-plus22"></i></span>
															</a>
														</div>
													</div>

													<div class="thumbnail">
														<div class="thumb">
															<a href="#">
																<img src="assets/images/placeholder.jpg" alt="">
																<span class="zoom-image"><i class="icon-plus22"></i></span>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /thumbnails -->


								<!-- Pickers -->
								<div class="sidebar-category">
									<div class="category-title">
										<span>Pickers</span>
										<ul class="icons-list">
											<li><a href="#" data-action="collapse"></a></li>
										</ul>
									</div>

									<div class="category-content">
										<form action="#">
											<div class="form-group">
												<label>Color picker:</label>
												<input type="text" class="form-control colorpicker-flat-full" data-preferred-format="hex" value="#45818e">
											</div>

											<div class="form-group">
												<label>Date picker:</label>
												<div class="input-group">
													<span class="input-group-addon"><i class="icon-calendar"></i></span>
													<input type="text" class="form-control datepicker" placeholder="Pick a date&hellip;">
												</div>
											</div>
										</form>
									</div>
								</div>
								<!-- /pickers -->


								<!-- Rounded buttons -->
								<div class="sidebar-category">
									<div class="category-title">
										<span>Rounded buttons</span>
										<ul class="icons-list">
											<li><a href="#" data-action="collapse"></a></li>
										</ul>
									</div>

									<div class="category-content text-center">
										<ul class="list-inline no-margin">
											<li><a href="#" class="btn btn-primary btn-float btn-rounded"><i class="icon-facebook"></i></a></li>
											<li><a href="#" class="btn btn-success btn-float btn-rounded"><i class="icon-google-drive"></i></a></li>
											<li><a href="#" class="btn btn-warning btn-float btn-rounded"><i class="icon-feed2"></i></a></li>
										</ul>
									</div>
								</div>
								<!-- /rounded buttons -->


								<!-- Progress bars -->
								<div class="sidebar-category">
									<div class="category-title">
										<span>Progress bars</span>
										<ul class="icons-list">
											<li><a href="#" data-action="collapse"></a></li>
										</ul>
									</div>

									<div class="category-content">
										<div class="content-group">
											<div class="progress">
												<div class="progress-bar progress-bar-striped active" style="width: 15%">
													<span class="sr-only">15% Complete</span>
												</div>
											</div>
										</div>

										<div class="content-group">
											<div class="progress progress-sm">
												<div class="progress-bar progress-bar-danger progress-bar-striped active" style="width: 30%">
													<span class="sr-only">30% Complete</span>
												</div>
											</div>
										</div>

										<div class="content-group">
											<div class="progress progress-xs">
												<div class="progress-bar progress-bar-success progress-bar-striped active" style="width: 45%">
													<span class="sr-only">45% Complete</span>
												</div>
											</div>
										</div>

										<div class="content-group">
											<div class="progress progress-xxs">
												<div class="progress-bar progress-bar-info" style="width: 60%">
													<span class="sr-only">60% Complete</span>
												</div>
											</div>
										</div>

										<div class="progress progress-micro">
											<div class="progress-bar bg-teal-300" style="width: 75%">
												<span class="sr-only">75% Complete</span>
											</div>
										</div>
									</div>
								</div>
								<!-- /progress bars -->


								<!-- Buttons -->
								<div class="sidebar-category">
									<div class="category-title">
										<span>Buttons</span>
										<ul class="icons-list">
											<li><a href="#" data-action="collapse"></a></li>
										</ul>
									</div>

									<div class="category-content text-center">
										<div class="mb-10">
											<button type="button" class="btn bg-slate-700 btn-block">Block button</button>
										</div>

										<div class="mb-10">
											<button type="button" class="btn btn-danger btn-labeled">
												<b><i class="icon-task"></i></b> Labeled button
											</button>
										</div>

										<div class="mb-10">
											<button class="btn btn-info" type="button">
												With icon <i class="icon-menu7 position-right"></i>
											</button>
										</div>

										<div class="mb-10">
											<div class="btn-group">
												<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Button dropdown <span class="caret"></span></button>
												<ul class="dropdown-menu">
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">One more separated line</a></li>
												</ul>
											</div>
										</div>

										<div class="mb-10">
											<div class="btn-group">
					                        	<button class="btn btn-primary btn-icon"><i class="icon-pin-alt"></i></button>
				                                <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
												<ul class="dropdown-menu">
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">One more separated line</a></li>
												</ul>
				                            </div>
			                            </div>

			                            <div class="mb-10">
				                            <button class="btn btn-warning btn-rounded" type="button">
					                            Rounded button <i class="icon-arrow-right8 position-right"></i>
				                            </button>
			                            </div>

										<div class="row">
											<div class="col-xs-6"><button type="button" class="btn bg-teal btn-block">Grid</button></div>
											<div class="col-xs-6"><button type="button" class="btn bg-purple btn-block">Buttons</button></div>
										</div>
									</div>
								</div>
								<!-- /buttons -->


								<!-- Accordion -->
								<div class="sidebar-category">
									<div class="category-title no-border">
										<span>Accordion</span>
										<ul class="icons-list">
											<li><a href="#" data-action="collapse"></a></li>
										</ul>
									</div>

									<div class="category-content no-padding">
										<div class="panel-group" id="accordion1">
											<div class="panel panel-white">
												<div class="panel-heading">
													<div class="panel-title text-semibold">
														<a data-toggle="collapse" data-parent="#accordion1" href="#accordion-group1">Accordion Item #1</a>
													</div>
												</div>
												<div id="accordion-group1" class="panel-collapse collapse in">
													<div class="panel-body">
														Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry.
													</div>
												</div>
											</div>

											<div class="panel panel-white">
												<div class="panel-heading">
													<div class="panel-title text-semibold">
														<a class="collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion-group2">Accordion Item #2</a>
													</div>
												</div>
												<div id="accordion-group2" class="panel-collapse collapse">
													<div class="panel-body">
														Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod 3 wolf moon.
													</div>
												</div>
											</div>

											<div class="panel panel-white">
												<div class="panel-heading">
													<div class="panel-title text-semibold">
														<a class="collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion-group3">Accordion Item #3</a>
													</div>
												</div>
												<div id="accordion-group3" class="panel-collapse collapse">
													<div class="panel-body">
														3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck.
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /accordion -->

							</div>

							<div class="tab-pane no-padding" id="forms-tab">

								<!-- Sidebar search -->
								<div class="sidebar-category">
									<div class="category-title">
										<span>Sidebar search</span>
										<ul class="icons-list">
											<li><a href="#" data-action="collapse"></a></li>
										</ul>
									</div>

									<div class="category-content">
										<form action="#">
											<div class="has-feedback has-feedback-left">
												<input type="search" class="form-control" placeholder="Search">
												<div class="form-control-feedback">
													<i class="icon-search4 text-size-base text-muted"></i>
												</div>
											</div>
										</form>
									</div>
								</div>
								<!-- /sidebar search -->


								<!-- Select2 selects -->
								<div class="sidebar-category">
									<div class="category-title">
										<span>Select2 selects</span>
										<ul class="icons-list">
											<li><a href="#" data-action="collapse"></a></li>
										</ul>
									</div>

									<div class="category-content">
										<form action="#">
											<div class="form-group">
												<label>Single Select:</label>
												<select class="select">
													<optgroup label="Alaskan/Hawaiian Time Zone">
														<option value="AK">Alaska</option>
														<option value="HI">Hawaii</option>
													</optgroup>
													<optgroup label="Pacific Time Zone">
														<option value="CA">California</option>
														<option value="NV">Nevada</option>
														<option value="OR">Oregon</option>
														<option value="WA">Washington</option>
													</optgroup>
													<optgroup label="Mountain Time Zone">
														<option value="AZ">Arizona</option>
														<option value="CO">Colorado</option>
														<option value="ID">Idaho</option>
														<option value="WY">Wyoming</option>
													</optgroup>
												</select>
											</div>

											<div class="form-group">
												<label>Multiple Select:</label>
												<select class="select" multiple="multiple">
													<optgroup label="Alaskan/Hawaiian Time Zone">
														<option value="AK">Alaska</option>
														<option value="HI" selected="selected">Hawaii</option>
													</optgroup>
													<optgroup label="Pacific Time Zone">
														<option value="CA">California</option>
														<option value="NV" selected="selected">Nevada</option>
														<option value="OR">Oregon</option>
														<option value="WA">Washington</option>
													</optgroup>
													<optgroup label="Mountain Time Zone">
														<option value="AZ">Arizona</option>
														<option value="CO">Colorado</option>
														<option value="ID">Idaho</option>
														<option value="WY">Wyoming</option>
													</optgroup>
												</select>
											</div>
										</form>
									</div>
								</div>
								<!-- /select2 selects -->


								<!-- Multiselect -->
								<div class="sidebar-category">
									<div class="category-title">
										<span>Multiselect</span>
										<ul class="icons-list">
											<li><a href="#" data-action="collapse"></a></li>
										</ul>
									</div>

									<div class="category-content">
										<form action="#">
											<div class="form-group">
												<label>Single select:</label>
												<select class="multiselect">
													<option value="cheese">Cheese</option>
													<option value="tomatoes">Tomatoes</option>
													<option value="mozarella">Mozzarella</option>
													<option value="mushrooms">Mushrooms</option>
													<option value="pepperoni">Pepperoni</option>
													<option value="onions">Onions</option>
												</select>
											</div>

											<div class="form-group">
												<label>Multiple select:</label>
												<select class="multiselect" multiple="multiple">
													<option value="cheese">Cheese</option>
													<option value="tomatoes">Tomatoes</option>
													<option value="mozarella" selected="selected">Mozzarella</option>
													<option value="mushrooms">Mushrooms</option>
													<option value="pepperoni">Pepperoni</option>
													<option value="onions" selected="selected">Onions</option>
												</select>
											</div>
										</form>
									</div>
								</div>
								<!-- /multiselect -->


								<!-- Other selects -->
								<div class="sidebar-category">
									<div class="category-title">
										<span>Other selects</span>
										<ul class="icons-list">
											<li><a href="#" data-action="collapse"></a></li>
										</ul>
									</div>

									<div class="category-content">
										<form action="#">
											<div class="form-group">
												<label>SelectBoxIt select:</label>
												<select class="selectbox">
													<option value="branch" data-icon="icon-git-branch">Branch</option>
													<option value="commit" data-icon="icon-git-commit">Commit</option>
													<option value="compare" data-icon="icon-git-compare">Compare</option>
													<option value="merge" data-icon="icon-git-merge">Merge</option>
													<option value="request" data-icon="icon-git-pull-request">Pull request</option>
													<option value="forked" data-icon="icon-repo-forked">Repo forked</option>
												</select>
											</div>

											<div class="form-group">
												<label>Bootstrap select:</label>
												<select class="bootstrap-select" data-width="100%">
													<option value="branch" data-icon="icon-git-branch">Branch</option>
													<option value="commit" data-icon="icon-git-commit">Commit</option>
													<option value="compare" data-icon="icon-git-compare">Compare</option>
													<option value="merge" data-icon="icon-git-merge">Merge</option>
													<option value="request" data-icon="icon-git-pull-request">Pull request</option>
													<option value="forked" data-icon="icon-repo-forked" selected="selected">Repo forked</option>
												</select>
											</div>
										</form>
									</div>
								</div>
								<!-- /other selects -->


								<!-- Left checkbox group -->
								<div class="sidebar-category">
									<div class="category-title">
										<span>Left checkbox group</span>
										<ul class="icons-list">
											<li><a href="#" data-action="collapse"></a></li>
										</ul>
									</div>

									<div class="category-content">
										<form action="#">
											<div class="form-group">
												<div class="checkbox">
													<label>
														<input type="checkbox" class="styled">
														Janet Cook
													</label>
												</div>

												<div class="checkbox">
													<label>
														<input type="checkbox" class="styled" checked="checked">
														Michelle Brown
													</label>
												</div>

												<div class="checkbox">
													<label>
														<input type="checkbox" class="styled">
														Lauren Wood
													</label>
												</div>

												<div class="checkbox">
													<label>
														<input type="checkbox" class="styled" checked="checked">
														Michael Johnson
													</label>
												</div>

												<div class="checkbox">
													<label>
														<input type="checkbox" class="styled" checked="checked">
														Joseph Dixon
													</label>
												</div>
											</div>
										</form>
									</div>
								</div>
								<!-- /left checkbox group -->


								<!-- Left radio group -->
								<div class="sidebar-category">
									<div class="category-title">
										<span>Left radio group</span>
										<ul class="icons-list">
											<li><a href="#" data-action="collapse"></a></li>
										</ul>
									</div>

									<div class="category-content">
										<form action="#">
											<div class="form-group">
												<div class="radio">
													<label>
														<input type="radio" name="radio-group" class="styled">
														Elise Parkes
													</label>
												</div>

												<div class="radio">
													<label>
														<input type="radio" name="radio-group" class="styled">
														Sofia Fuller
													</label>
												</div>

												<div class="radio">
													<label>
														<input type="radio" name="radio-group" class="styled" checked="checked">
														Nicholas Blackburn
													</label>
												</div>

												<div class="radio">
													<label>
														<input type="radio" name="radio-group" class="styled">
														Max Brennan
													</label>
												</div>

												<div class="radio">
													<label>
														<input type="radio" name="radio-group" class="styled">
														Cameron Allan
													</label>
												</div>
											</div>
										</form>
									</div>
								</div>
								<!-- /left radio group -->


								<!-- Right checkbox group -->
								<div class="sidebar-category">
									<div class="category-title">
										<span>Right checkbox group</span>
										<ul class="icons-list">
											<li><a href="#" data-action="collapse"></a></li>
										</ul>
									</div>

									<div class="category-content">
										<form action="#">
											<div class="form-group">
												<div class="checkbox checkbox-right">
													<label>
														<input type="checkbox" class="styled" checked="checked">
														Chris Wallace
													</label>
												</div>

												<div class="checkbox checkbox-right">
													<label>
														<input type="checkbox" class="styled" checked="checked">
														Brittany Clark
													</label>
												</div>

												<div class="checkbox checkbox-right">
													<label>
														<input type="checkbox" class="styled">
														Michael Langer
													</label>
												</div>

												<div class="checkbox checkbox-right">
													<label>
														<input type="checkbox" class="styled" checked="checked">
														Jennifer Garcia
													</label>
												</div>

												<div class="checkbox checkbox-right">
													<label>
														<input type="checkbox" class="styled">
														Daniel Andersen
													</label>
												</div>
											</div>
										</form>
									</div>
								</div>
								<!-- /right checkbox group -->


								<!-- Right radio group -->
								<div class="sidebar-category">
									<div class="category-title">
										<span>Right radio group</span>
										<ul class="icons-list">
											<li><a href="#" data-action="collapse"></a></li>
										</ul>
									</div>

									<div class="category-content">
										<form action="#">
											<div class="form-group">
												<div class="radio radio-right">
													<label>
														<input type="radio" name="radio-group" class="styled">
														Daisy Moods
													</label>
												</div>

												<div class="radio radio-right">
													<label>
														<input type="radio" name="radio-group" class="styled">
														Madeleine Bruce
													</label>
												</div>

												<div class="radio radio-right">
													<label>
														<input type="radio" name="radio-group" class="styled" checked="checked">
														David Patterson
													</label>
												</div>

												<div class="radio radio-right">
													<label>
														<input type="radio" name="radio-group" class="styled">
														Bethany Hold
													</label>
												</div>

												<div class="radio radio-right">
													<label>
														<input type="radio" name="radio-group" class="styled">
														Eleanor Charltons
													</label>
												</div>
											</div>
										</form>
									</div>
								</div>
								<!-- /right radio group -->


								<!-- File inputs -->
								<div class="sidebar-category">
									<div class="category-title">
										<span>File inputs</span>
										<ul class="icons-list">
											<li><a href="#" data-action="collapse"></a></li>
										</ul>
									</div>

									<div class="category-content">
										<form action="#">
											<div class="form-group">
												<label>Styled file input:</label>
												<input type="file" class="file-styled">
											</div>

											<div class="form-group">
												<label>Default file input:</label>
												<input type="file" class="form-control">
											</div>
										</form>
									</div>
								</div>
								<!-- /file inputs -->


								<!-- Default selects -->
								<div class="sidebar-category">
									<div class="category-title">
										<span>Default selects</span>
										<ul class="icons-list">
											<li><a href="#" data-action="collapse"></a></li>
										</ul>
									</div>

									<div class="category-content">
										<form action="#">
											<div class="form-group">
												<label>Single select:</label>
												<select name="select" class="form-control">
					                                <option value="opt1">Usual select box</option>
					                                <option value="opt2">Option 2</option>
					                                <option value="opt3">Option 3</option>
					                                <option value="opt4">Option 4</option>
					                                <option value="opt5">Option 5</option>
					                                <option value="opt6">Option 6</option>
					                                <option value="opt7">Option 7</option>
					                                <option value="opt8">Option 8</option>
					                            </select>
											</div>

											<div class="form-group">
												<label>Multiple select:</label>
												<select multiple="multiple" class="form-control">
					                                <option selected="selected">Amsterdam</option>      
					                                <option selected="selected">Atlanta</option>
					                                <option>Baltimore</option>
					                                <option>Boston</option>
					                                <option>Buenos Aires</option>
					                                <option>Calgary</option>
					                                <option selected="selected">Chicago</option>
					                                <option>Denver</option>
					                                <option>Dubai</option>
					                                <option>Frankfurt</option>
					                                <option>Hong Kong</option>
					                                <option>Honolulu</option>
					                            </select>
											</div>
										</form>
									</div>
								</div>
								<!-- /default selects -->


								<!-- Input groups -->
								<div class="sidebar-category">
									<div class="category-title">
										<span>Input groups</span>
										<ul class="icons-list">
											<li><a href="#" data-action="collapse"></a></li>
										</ul>
									</div>

									<div class="category-content">
										<form action="#">
											<div class="form-group">
												<label>Input group example:</label>
												<div class="input-group">
													<span class="input-group-addon"><i class="icon-spinner3 spinner"></i></span>
													<input type="text" class="form-control" placeholder="Input group">
													<div class="input-group-btn">
														<button type="button" class="btn btn-default dropdown-toggle btn-icon" data-toggle="dropdown">
															<span class="caret"></span>
														</button>
														<ul class="dropdown-menu dropdown-menu-right">
															<li><a href="#">Action</a></li>
															<li><a href="#">Another action</a></li>
															<li><a href="#">Something else here</a></li>
															<li class="divider"></li>
															<li><a href="#">One more separated line</a></li>
														</ul>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
								<!-- /input groups -->


								<!-- Switchery group -->
								<div class="sidebar-category">
									<div class="category-title">
										<span>Switchery group</span>
										<ul class="icons-list">
											<li><a href="#" data-action="collapse"></a></li>
										</ul>
									</div>

									<div class="category-content">
										<form action="#">
											<div class="form-group">
												<div class="checkbox checkbox-switchery checkbox-right switchery-xs">
													<label class="display-block">
														<input type="checkbox" class="switchery" checked="checked">
														Free People
													</label>	
												</div>

												<div class="checkbox checkbox-switchery checkbox-right switchery-xs">
													<label class="display-block">
														<input type="checkbox" class="switchery">
														GAP
													</label>
												</div>

												<div class="checkbox checkbox-switchery checkbox-right switchery-xs">
													<label class="display-block">
														<input type="checkbox" class="switchery" checked="checked">
														Lane Bryant
													</label>
												</div>

												<div class="checkbox checkbox-switchery checkbox-right switchery-xs">
													<label class="display-block">
														<input type="checkbox" class="switchery" checked="checked">
														Ralph Lauren
													</label>
												</div>

												<div class="checkbox checkbox-switchery checkbox-right switchery-xs">
													<label class="display-block">
														<input type="checkbox" class="switchery">
														Liz Claiborne
													</label>
												</div>
											</div>
										</form>
									</div>
								</div>
								<!-- /switchery group -->


								<!-- Form sample -->
								<div class="sidebar-category">
									<div class="category-title">
										<span>Form example</span>
										<ul class="icons-list">
											<li><a href="#" data-action="collapse"></a></li>
										</ul>
									</div>

									<form action="#" class="category-content">
										<div class="form-group">
											<label>Your name:</label>
											<input type="text" class="form-control" placeholder="Username">
										</div>

										<div class="form-group">
											<label>Your password:</label>
											<input type="password" class="form-control" placeholder="Password">
										</div>

										<div class="form-group">
											<label>Your message:</label>
											<textarea rows="3" cols="3" class="form-control" placeholder="Default textarea"></textarea>
										</div>

										<div class="row">
											<div class="col-xs-6">
												<button type="reset" class="btn btn-danger btn-block">Reset</button>
											</div>
											<div class="col-xs-6">
												<button type="submit" class="btn btn-info btn-block">Submit</button>
											</div>
										</div>
									</form>
								</div>
								<!-- /form sample -->

							</div>

							<div class="tab-pane no-padding" id="other-tab">

								<!-- Closable category -->
								<div class="sidebar-category">
									<div class="category-title">
										<span>Closable category</span>
										<ul class="icons-list">
											<li><a href="#" data-action="close"></a></li>
										</ul>
									</div>

									<div class="category-content">
										<ul class="list">
											<li>It wasn't actually a dream</li>
											<li>A collection of textile samples</li>
											<li>I've got the money together</li>
										</ul>
									</div>
								</div>
								<!-- /closable category -->


								<!-- Sortable category -->
								<div class="sidebar-category">
									<div class="category-title">
										<span>Sortable category</span>
										<ul class="icons-list">
											<li><a href="#" data-action="move"></a></li>
										</ul>
									</div>

									<div class="category-content">
										<ul class="list">
											<li>I've got the money together</li>
											<li>That's definitely what I'll do</li>
											<li>What should he do now?</li>
										</ul>
									</div>
								</div>
								<!-- /sortable category -->


								<!-- Updatable category -->
								<div class="sidebar-category">
									<div class="category-title">
										<span>Updatable category</span>
										<ul class="icons-list">
											<li><a href="#" data-action="reload"></a></li>
										</ul>
									</div>

									<div class="category-content">
										<ul class="list">
											<li>A collection of textile samples</li>
											<li>I've got the money together</li>
											<li>That's definitely what I'll do</li>
										</ul>
									</div>
								</div>
								<!-- /updatable category -->


								<!-- Dual listbox -->
								<div class="sidebar-category">
									<div class="category-title">
										<span>Dual listbox</span>
										<ul class="icons-list">
											<li><a href="#" data-action="collapse"></a></li>
										</ul>
									</div>

									<div class="category-content">
										<form action="#">
											<select multiple="multiple" class="form-control listbox-no-selection">
												<option value="option1">Option 1</option>
												<option value="option2">Option 2</option>
												<option value="option4">Option 4</option>
												<option value="option5">Option 5</option>
												<option value="option7">Option 7</option>
												<option value="option8" selected="selected">Option 8</option>
												<option value="option9">Option 9</option>
												<option value="option10">Option 10</option>
												<option value="option11">Option 11</option>
												<option value="option12">Option 12</option>
												<option value="option13">Option 13</option>
												<option value="option14" selected="selected">Option 14</option>
												<option value="option15">Option 15</option>
												<option value="option16" selected="selected">Option 16</option>
												<option value="option17">Option 17</option>
												<option value="option18" selected="selected">Option 18</option>
												<option value="option19">Option 19</option>
												<option value="option20">Option 20</option>
											</select>
										</form>
									</div>
								</div>
								<!-- /dual listbox -->


								<!-- Progress list -->
								<div class="sidebar-category">
									<div class="category-title">
										<span>Progress list</span>
										<ul class="icons-list">
											<li><a href="#" data-action="collapse"></a></li>
										</ul>
									</div>

									<div class="category-content">
										<ul class="progress-list">
								            <li>
								                <label>CPU usage <span>50%</span></label>
												<div class="progress progress-xxs">
													<div class="progress-bar progress-bar-info" style="width: 50%">
														<span class="sr-only">50% Complete</span>
													</div>
												</div>
								            </li>
								            <li>
								                <label>RAM usage <span>70%</span></label>
												<div class="progress progress-xxs">
													<div class="progress-bar progress-bar-danger" style="width: 70%">
														<span class="sr-only">70% Complete</span>
													</div>
												</div>
								            </li>
								            <li>
								                <label>Disc space <span>80%</span></label>
												<div class="progress progress-xxs">
													<div class="progress-bar progress-bar-success" style="width: 80%">
														<span class="sr-only">80% Complete</span>
													</div>
												</div>
								            </li>
								            <li>
								                <label>Bandwidth <span>60%</span></label>
												<div class="progress progress-xxs">
													<div class="progress-bar progress-bar-primary" style="width: 60%">
														<span class="sr-only">60% Complete</span>
													</div>
												</div>
								            </li>
								        </ul>
									</div>
								</div>
								<!-- /progress list -->


								<!-- Horizontal sliders -->
								<div class="sidebar-category">
									<div class="category-title">
										<span>Horizontal sliders</span>
										<ul class="icons-list">
											<li><a href="#" data-action="collapse"></a></li>
										</ul>
									</div>

									<div class="category-content">
										<form action="#">
											<div class="form-group">
												<label class="mb-10">Default slider</label>
												<div class="ui-slider-range ui-slider-danger ui-slider-sm"></div>
											</div>

											<div class="form-group">
												<label class="mb-10">Slider with pips</label>
												<div class="ui-slider-labels ui-slider-info ui-slider-sm"></div>
											</div>
										</form>
									</div>
								</div>
								<!-- /horizontal sliders -->


								<!-- Vertical sliders -->
								<div class="sidebar-category">
									<div class="category-title">
										<span>Vertical sliders</span>
										<ul class="icons-list">
											<li><a href="#" data-action="collapse"></a></li>
										</ul>
									</div>

									<div class="category-content text-center">
										<div class="ui-slider-vertical-pips vertical-pips">
											<span class="ui-slider-success ui-slider-sm">2</span>
											<span class="ui-slider-danger ui-slider-sm">4</span>
											<span class="ui-slider-info ui-slider-sm">6</span>
										</div>
									</div>
								</div>
								<!-- /vertical sliders -->


								<!-- Dynamic tree -->
								<div class="sidebar-category">
									<div class="category-title">
										<span>Dynamic tree</span>
										<ul class="icons-list">
											<li><a href="#" data-action="collapse"></a></li>
										</ul>
									</div>

									<div class="category-content tree-default">
										<ul>
											<li class="folder expanded">Expanded folder
												<ul>
													<li class="expanded">Expanded sub-item
														<ul>
															<li class="active focused">Active sub-item</li>
															<li>Basicmenu item</li>
														</ul>
													</li>
													<li>Collapsed sub-item
														<ul>
															<li>Sub-item 2.2.1</li>
															<li>Sub-item 2.2.2</li>
														</ul>
													</li>
												</ul>
											</li>
											<li>Menu item</li>
											<li class="folder">Collapsed folder
												<ul>
													<li>Sub-item 1.1</li>
													<li>Sub-item 1.2</li>
												</ul>
											</li>
											<li class="selected">This is a selected item</li>
											<li class="expanded">Document with children
												<ul>
													<li>Document sub-item</li>
													<li>Another sub-item
														<ul>
															<li>Sub-item 2.1.1</li>
															<li>Sub-item 2.1.2</li>
														</ul>
													</li>
												</ul>
											</li>	
										</ul>
									</div>
								</div>
								<!-- /dynamic tree -->

							</div>

							<div class="tab-pane no-padding" id="custom-tab">

								<!-- User list -->
								<div class="sidebar-category">
									<div class="category-title">
										<span>Media list</span>
										<ul class="icons-list">
											<li><a href="#" data-action="collapse"></a></li>
										</ul>
									</div>

									<div class="category-content">
										<ul class="media-list">
											<li class="media">
												<a href="#" class="media-left"><img src="assets/images/placeholder.jpg" class="img-sm img-circle" alt=""></a>
												<div class="media-body">
													<a href="#" class="media-heading text-semibold">James Alexander</a>
													<span class="text-size-mini text-muted display-block">Santa Ana, CA.</span>
												</div>
												<div class="media-right media-middle">
													<span class="status-mark border-success"></span>
												</div>
											</li>

											<li class="media">
												<a href="#" class="media-left"><img src="assets/images/placeholder.jpg" class="img-sm img-circle" alt=""></a>
												<div class="media-body">
													<a href="#" class="media-heading text-semibold">Jeremy Victorino</a>
													<span class="text-size-mini text-muted display-block">Dowagiac, MI.</span>
												</div>
												<div class="media-right media-middle">
													<span class="status-mark border-danger"></span>
												</div>
											</li>

											<li class="media">
												<a href="#" class="media-left"><img src="assets/images/placeholder.jpg" class="img-sm img-circle" alt=""></a>
												<div class="media-body">
													<a href="#" class="media-heading text-semibold">Margo Baker</a>
													<span class="text-size-mini text-muted display-block">Kasaan, AK.</span>
												</div>
												<div class="media-right media-middle">
													<span class="status-mark border-success"></span>
												</div>
											</li>

											<li class="media">
												<a href="#" class="media-left"><img src="assets/images/placeholder.jpg" class="img-sm img-circle" alt=""></a>
												<div class="media-body">
													<a href="#" class="media-heading text-semibold">Beatrix Diaz</a>
													<span class="text-size-mini text-muted display-block">Neenah, WI.</span>
												</div>
												<div class="media-right media-middle">
													<span class="status-mark border-warning"></span>
												</div>
											</li>

											<li class="media">
												<a href="#" class="media-left"><img src="assets/images/placeholder.jpg" class="img-sm img-circle" alt=""></a>
												<div class="media-body">
													<a href="#" class="media-heading text-semibold">Richard Vango</a>
													<span class="text-size-mini text-muted display-block">Grapevine, TX.</span>
												</div>
												<div class="media-right media-middle">
													<span class="status-mark border-grey-400"></span>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<!-- /user list -->


								<!-- Linked user list -->
								<div class="sidebar-category">
									<div class="category-title">
										<span>Linked user list</span>
										<ul class="icons-list">
											<li><a href="#" data-action="collapse"></a></li>
										</ul>
									</div>

									<div class="category-content no-padding">
										<ul class="media-list media-list-linked">
											<li class="media">
												<a href="#" class="media-link">
													<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-sm img-circle" alt=""></div>
													<div class="media-body">
														<span class="media-heading text-semibold">Will Baker</span>
														<span class="text-size-mini text-muted display-block">Santa Ana, CA.</span>
													</div>
													<div class="media-right media-middle">
														<span class="status-mark bg-success"></span>
													</div>
												</a>
											</li>

											<li class="media">
												<a href="#" class="media-link">
													<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-sm img-circle" alt=""></div>
													<div class="media-body">
														<span class="media-heading text-semibold">Joseph Mills</span>
														<span class="text-size-mini text-muted display-block">Dowagiac, MI.</span>
													</div>
													<div class="media-right media-middle">
														<span class="status-mark bg-danger"></span>
													</div>
												</a>
											</li>

											<li class="media">
												<a href="#" class="media-link">
													<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-sm img-circle" alt=""></div>
													<div class="media-body">
														<span class="media-heading text-semibold">Buzz Brenson</span>
														<span class="text-size-mini text-muted display-block">Kasaan, AK.</span>
													</div>
													<div class="media-right media-middle">
														<span class="status-mark bg-success"></span>
													</div>
												</a>
											</li>

											<li class="media">
												<a href="#" class="media-link">
													<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-sm img-circle" alt=""></div>
													<div class="media-body">
														<span class="media-heading text-semibold">Zachary Willson</span>
														<span class="text-size-mini text-muted display-block">Neenah, WI.</span>
													</div>
													<div class="media-right media-middle">
														<span class="status-mark bg-warning"></span>
													</div>
												</a>
											</li>

											<li class="media">
												<a href="#" class="media-link">
													<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-sm img-circle" alt=""></div>
													<div class="media-body">
														<span class="media-heading text-semibold">Bastian Miller</span>
														<span class="text-size-mini text-muted display-block">Grapevine, TX.</span>
													</div>
													<div class="media-right media-middle">
														<span class="status-mark bg-grey-400"></span>
													</div>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<!-- /linked user list -->


								<!-- Conversation -->
								<div class="sidebar-category">
									<div class="category-title">
										<span>Conversation</span>
										<ul class="icons-list">
											<li><a href="#" data-action="collapse"></a></li>
										</ul>
									</div>

									<div class="category-content no-padding">
										<ul class="media-list media-list-linked">
											<li class="media">
												<a href="#" class="media-link">
													<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-sm img-circle" alt=""></div>
													<div class="media-body">
														<span class="media-heading text-semibold">Will Samuel</span>
														<span class="text-muted">And he looked over at the alarm clock, ticking..</span>
														<div class="media-annotation mt-5"><i class="icon-check"></i> Just now</div>
													</div>
												</a>
											</li>

											<li class="media">
												<a href="#" class="media-link">
													<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-sm img-circle" alt=""></div>
													<div class="media-body">
														<span class="media-heading text-semibold">Margo Baker</span>
														<span class="text-muted">However hard he threw himself onto..</span>
														<div class="media-annotation mt-5"><i class="icon-check"></i> 6 minutes ago</div>
													</div>
												</a>
											</li>

											<li class="media">
												<a href="#" class="media-link">
													<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-sm img-circle" alt=""></div>
													<div class="media-body">
														<span class="media-heading text-semibold">Monica Smith</span>
														<span class="text-muted">Yes, but was it possible to quietly sleep through..</span>
														<div class="media-annotation mt-5"><i class="icon-check"></i> Yesterday</div>
													</div>
												</a>
											</li>

											<li class="media">
												<a href="#" class="media-link">
													<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-sm img-circle" alt=""></div>
													<div class="media-body">
														<span class="media-heading text-semibold">Jordana Mills</span>
														<span class="text-muted">What should he do now? The next train went at..</span>
														<div class="media-annotation mt-5"><i class="icon-check"></i> Monday</div>
													</div>
												</a>
											</li>

											<li class="media">
												<a href="#" class="media-link">
													<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-sm img-circle" alt=""></div>
													<div class="media-body">
														<span class="media-heading text-semibold">John Craving</span>
														<span class="text-muted">Gregor then turned to look out the window..</span>
														<div class="media-annotation mt-5"><i class="icon-check"></i> Jan 24, 14:50</div>
													</div>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<!-- /conversation -->


								<!-- Action link -->
								<div class="sidebar-category">
									<div class="category-title">
										<span>Action links</span>
										<ul class="icons-list">
											<li><a href="#" data-action="collapse"></a></li>
										</ul>
									</div>

									<div class="category-content">
										<ul class="media-list">
											<li class="media">
												<div class="media-left">
													<a href="#"><img src="assets/images/placeholder.jpg" class="img-xs img-circle" alt=""></a>
												</div>

												<div class="media-body media-middle">
													Victoria Mongerini
												</div>

												<div class="media-right media-middle">
													<ul class="icons-list text-nowrap">
														<li>
															<a href="#"><i class="icon-comment-discussion"></i></a>
														</li>
													</ul>
												</div>
											</li>

											<li class="media">
												<div class="media-left">
													<a href="#">
														<img src="assets/images/placeholder.jpg" class="img-xs img-circle" alt="">
														<span class="badge badge-warning media-badge">8</span>
													</a>
												</div>

												<div class="media-body media-middle">
													Sarah Clifferson
												</div>

												<div class="media-right media-middle">
													<ul class="icons-list text-nowrap">
														<li>
															<a href="#"><i class="icon-comment-discussion"></i></a>
														</li>
													</ul>
												</div>
											</li>

											<li class="media">
												<div class="media-left">
													<a href="#"><img src="assets/images/placeholder.jpg" class="img-xs img-circle" alt=""></a>
												</div>

												<div class="media-body media-middle">
													Shane Brigger
												</div>

												<div class="media-right media-middle">
													<ul class="icons-list text-nowrap">
														<li>
															<a href="#"><i class="icon-comment-discussion"></i></a>
														</li>
													</ul>
												</div>
											</li>

											<li class="media">
												<div class="media-left">
													<a href="#"><img src="assets/images/placeholder.jpg" class="img-xs img-circle" alt=""></a>
												</div>

												<div class="media-body media-middle">
													Aaron Statement
												</div>

												<div class="media-right media-middle">
													<ul class="icons-list text-nowrap">
														<li>
															<a href="#"><i class="icon-comment-discussion"></i></a>
														</li>
													</ul>
												</div>
											</li>

											<li class="media">
												<div class="media-left">
													<a href="#"><img src="assets/images/placeholder.jpg" class="img-xs img-circle" alt=""></a>
												</div>

												<div class="media-body media-middle">
													Jeff Stickson
												</div>

												<div class="media-right media-middle">
													<ul class="icons-list text-nowrap">
														<li>
															<a href="#"><i class="icon-comment-discussion"></i></a>
														</li>
													</ul>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<!-- /action link -->


								<!-- Action dropdown -->
								<div class="sidebar-category">
									<div class="category-title">
										<span>Action dropdown</span>
										<ul class="icons-list">
											<li><a href="#" data-action="collapse"></a></li>
										</ul>
									</div>

									<div class="category-content">
										<ul class="media-list">
											<li class="media">
												<div class="media-left">
													<a href="#">
														<img src="assets/images/placeholder.jpg" class="img-xs img-circle" alt="">
														<span class="badge badge-info media-badge">6</span>
													</a>
												</div>

												<div class="media-body media-middle">
													Rebecca Jameson
												</div>

												<div class="media-right media-middle">
													<ul class="icons-list text-nowrap">
														<li>
															<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-more2"></i></a>
															<ul class="dropdown-menu dropdown-menu-right">
																<li><a href="#"><i class="icon-comment-discussion pull-right"></i> Start chat</a></li>
																<li><a href="#"><i class="icon-phone2 pull-right"></i> Make a call</a></li>
																<li><a href="#"><i class="icon-mail5 pull-right"></i> Send mail</a></li>
																<li class="divider"></li>
																<li><a href="#"><i class="icon-statistics pull-right"></i> Statistics</a></li>
															</ul>
														</li>
													</ul>
												</div>
											</li>

											<li class="media">
												<div class="media-left">
													<a href="#">
														<img src="assets/images/placeholder.jpg" class="img-xs img-circle" alt="">
														<span class="badge badge-info media-badge">9</span>
													</a>
												</div>

												<div class="media-body media-middle">
													Walter Sommers
												</div>

												<div class="media-right media-middle">
													<ul class="icons-list text-nowrap">
														<li>
															<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-more2"></i></a>
															<ul class="dropdown-menu dropdown-menu-right">
																<li><a href="#"><i class="icon-comment-discussion pull-right"></i> Start chat</a></li>
																<li><a href="#"><i class="icon-phone2 pull-right"></i> Make a call</a></li>
																<li><a href="#"><i class="icon-mail5 pull-right"></i> Send mail</a></li>
																<li class="divider"></li>
																<li><a href="#"><i class="icon-statistics pull-right"></i> Statistics</a></li>
															</ul>
														</li>
													</ul>
												</div>
											</li>

											<li class="media">
												<div class="media-left">
													<a href="#"><img src="assets/images/placeholder.jpg" class="img-xs img-circle" alt=""></a>
												</div>

												<div class="media-body media-middle">
													Otto Gerwald
												</div>

												<div class="media-right media-middle">
													<ul class="icons-list text-nowrap">
														<li>
															<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-more2"></i></a>
															<ul class="dropdown-menu dropdown-menu-right">
																<li><a href="#"><i class="icon-comment-discussion pull-right"></i> Start chat</a></li>
																<li><a href="#"><i class="icon-phone2 pull-right"></i> Make a call</a></li>
																<li><a href="#"><i class="icon-mail5 pull-right"></i> Send mail</a></li>
																<li class="divider"></li>
																<li><a href="#"><i class="icon-statistics pull-right"></i> Statistics</a></li>
															</ul>
														</li>
													</ul>
												</div>
											</li>

											<li class="media">
												<div class="media-left">
													<a href="#"><img src="assets/images/placeholder.jpg" class="img-xs img-circle" alt=""></a>
												</div>

												<div class="media-body media-middle">
													Vince Satmann
												</div>

												<div class="media-right media-middle">
													<ul class="icons-list text-nowrap">
														<li>
															<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-more2"></i></a>
															<ul class="dropdown-menu dropdown-menu-right">
																<li><a href="#"><i class="icon-comment-discussion pull-right"></i> Start chat</a></li>
																<li><a href="#"><i class="icon-phone2 pull-right"></i> Make a call</a></li>
																<li><a href="#"><i class="icon-mail5 pull-right"></i> Send mail</a></li>
																<li class="divider"></li>
																<li><a href="#"><i class="icon-statistics pull-right"></i> Statistics</a></li>
															</ul>
														</li>
													</ul>
												</div>
											</li>

											<li class="media">
												<div class="media-left">
													<a href="#"><img src="assets/images/placeholder.jpg" class="img-xs img-circle" alt=""></a>
												</div>

												<div class="media-body media-middle">
													Jason Leroy
												</div>

												<div class="media-right media-middle">
													<ul class="icons-list text-nowrap">
														<li>
															<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-more2"></i></a>
															<ul class="dropdown-menu dropdown-menu-right">
																<li><a href="#"><i class="icon-comment-discussion pull-right"></i> Start chat</a></li>
																<li><a href="#"><i class="icon-phone2 pull-right"></i> Make a call</a></li>
																<li><a href="#"><i class="icon-mail5 pull-right"></i> Send mail</a></li>
																<li class="divider"></li>
																<li><a href="#"><i class="icon-statistics pull-right"></i> Statistics</a></li>
															</ul>
														</li>
													</ul>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<!-- /action dropdown -->


								<!-- List with flat labels -->
								<div class="sidebar-category">
									<div class="category-title">
										<span>Flat icon labels</span>
										<ul class="icons-list">
											<li><a href="#" data-action="collapse"></a></li>
										</ul>
									</div>

									<div class="category-content">
										<ul class="media-list">
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
									</div>
								</div>
								<!-- /list with flat labels -->

							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /secondary sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Sidebars</span> - Components</h4>
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
							<li><a href="sidebar_components">Sidebars</a></li>
							<li class="active">Components</li>
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

					<!-- Info alert -->
					<div class="alert alert-info alert-styled-left alert-arrow-left alert-component">
						<button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
						<h6 class="alert-heading text-semibold">Sidebar components</h6>
						This page contains a part of components adapted for usage in the sidebar: form components, navigation, UI components, plugins and custom widgets.
				    </div>
				    <!-- /info alert -->


					<!-- Sidebars overview -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Sidebars overview</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<p class="content-group">Sidebar - vertical area that displays onscreen and presents widget components and website navigation menu in a text-based hierarchical form. All sidebars are css-driven - just add one of css classes to the <code>body</code> tag and/or <code>.sidebar</code> container, and sidebar will change its width and color. No js, css only. Although sidebar type is based on css, buttons do their job with jQuery - they switch necessary classes in <code>&lt;body></code> tag. Below you'll find summarized tables with all available <code>button</code> and sidebar container classes. By default the template includes 6 different sidebar types and combinations:</p>

							<div class="content-group">
								<h6 class="text-semibold">1. Default sidebar</h6>
							</div>

							<div class="content-group">
								<h6 class="text-semibold">2. Mini sidebar</h6>
							</div>

							<div class="content-group">
								<h6 class="text-semibold">3. Dual sidebar</h6>
								<p>Main sidebar has <code>260px</code> width or <code>56px</code> (if <code>.sidebar-xs</code> class added). Secondary sidebar has fixed width of <code>260px</code>, which is identical to default and opposite sidebars, so different sidebar components can be placed to all these sidebars. Main and secondary sidebars can contain any content - menu, navigation, buttons, lists, tabs etc. In this type of sidebar only main sidebar is collapsible.</p>
							</div>

							<div class="content-group">
								<h6 class="text-semibold">4. Double sidebar</h6>
								<p>Double sidebar includes additional sidebar displayed on the opposite side of the main sidebar. It has a static position, appears as an additional component with 100% height and pushes content left/right. There are 2 different ways of displaying alternative sidebar: first - when it collapses main sidebar from default to mini width and second - when it hides the main sidebar. For these actions are responsible 2 different buttons - <code>.sidebar-opposite-toggle</code> and <code>.sidebar-opposite-fix</code>.</p>
							</div>

							<div class="content-group">
								<h6 class="text-semibold">5. Dual double sidebar</h6>
								<p>Dual and Double sidebars can be used together, so basically it is a 4 column layout. When opposite sidebar is shown, additional options are available: hide main sidebar, hide secondary sidebar, hide all sidebars or collapse main sidebar width. Since opposite sidebar is hidden by default, by manipulating classes you can display all 4 sidebars at once. Options are accessible via proper button and/or body classes.</p>
							</div>

							<div class="content-group">
								<h6 class="text-semibold">6. Detached sidebar</h6>
								<p>Sidebar usually is not a part of content and mainly used for navigation. Limitless allows you to use sidebar outside and inside content area. Detached sidebar isn't based on grid and has the same width as other sidebars, this means all sidebar components can be placed inside detached sidebar. Supports left and right positioning.</p>
							</div>
						</div>
					</div>
					<!-- /sidebars overview -->


					<!-- Button classes -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Button classes</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<h6 class="text-semibold">Overview</h6>
							<p class="content-group">This table displays all optional <code>button</code> classes, responsible for the sidebar appearance. Depending on the sidebar type, add one of these classes to any button or link and this element will handle sidebar control. Multiple controls are also available - add as many sidebar controls as you wish. Pleas note: these classes don't change sidebar markup, only its CSS.</p>
							<div class="table-responsive content-group-lg">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th style="width: 300px;">Button class</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><code>.sidebar-main-toggle</code></td>
											<td>Collapsible sidebar. Changes main sidebar width from default to mini. This button is added to all pages by default.</td>
										</tr>
										<tr>
											<td><code>.sidebar-main-hide</code></td>
											<td>Hides and shows <code>main</code> sidebar. Used mostly in dual sidebar type to hide main sidebar. In other layouts this button does the same job as <code>.sidebar-hide-all</code> button.</td>
										</tr>
										<tr>
											<td><code>.sidebar-all-hide</code></td>
											<td>Hideable sidebar. Hides and shows <code>main</code> sidebar. Works with all sidebar types, except opposite sidebar.</td>
										</tr>
										<tr>
											<td><code>.sidebar-opposite-fix</code></td>
											<td>Double sidebar with fixed width. If alt sidebar is shown, main sidebar stays the same and doesn't change the width.</td>
										</tr>
										<tr>
											<td><code>.sidebar-opposite-toggle</code></td>
											<td>Collapsible double sidebar. If opposite sidebar is shown, main sidebar changes its width from default to mini. Works with all sidebar types - single and dual.</td>
										</tr>
										<tr>
											<td><code>.sidebar-opposite-main-hide</code></td>
											<td>Hides and shows <code>main</code> sidebar in dual sidebar layout. If opposite sidebar is shown, main sidebar is hidden. This works only in dual double sidebar version of layout.</td>
										</tr>
										<tr>
											<td><code>.sidebar-secondary-hide</code></td>
											<td>Hides/shows <code>secondary</code> sidebar in dual sidebar layout. Secondary sidebar supports only toggle functionality and always has fixed width of <code>260px</code>.</td>
										</tr>
										<tr>
											<td><code>.sidebar-opposite-secondary-hide</code></td>
											<td>Hides/shows <code>secondary</code> sidebar in dual sidebar layout. If opposite sidebar is shown, secondary sidebar is hidden. This works only in dual double sidebar version of layout.</td>
										</tr>
										<tr>
											<td><code>.sidebar-opposite-hide</code></td>
											<td>Hides/shows <code>all</code> sidebars when opposite sidebar is shown. If opposite sidebar is shown, all sidebars are hidden. This works in all layout types.</td>
										</tr>
										<tr>
											<td><code>.sidebar-detached-hide</code></td>
											<td>Hides/shows <code>detached</code> sidebars. Detached sidebars aren't connected with other sidebars, so this is the only button that controls its visibility.</td>
										</tr>
									</tbody>
								</table>
							</div>

							<h6 class="text-semibold">Example Markup</h6>
							<div class="row">
								<div class="col-md-6">
									<p>Default placement of sidebar control buttons is top navbar:</p>
									<pre class="language-markup content-group" data-line="7-11"><code>&lt;!-- Navbar placement -->
&lt;div class="navbar navbar-inverse">
	&lt;div class="navbar-header">...&lt;/div>
	&lt;ul class="nav navbar-nav">
		&lt;li>
			&lt;a class="sidebar-main-toggle">
				&lt;i class="icon-menu">&lt;/i>
			&lt;/a>
		&lt;/li>
	&lt;/ul>
&lt;/div>
&lt;!-- /navbar placement -->
</code></pre>
								</div>

								<div class="col-md-6">
									<p>Here is an example of button inside panel heading:</p>
									<pre class="language-markup content-group" data-line="6-9"><code>&lt;!-- Panel heading placement -->
&lt;div class="panel panel-default">
	&lt;div class="panel-heading">
		&lt;h5 class="panel-title">Panel title&lt;/h5>
		&lt;div class="heading-elements">
			&lt;button type="button" class="sidebar-main-toggle">
				&lt;i class="icon-menu">&lt;/i>
				Collapse sidebar
			&lt;/button>
		&lt;/div>
	&lt;/div>
	&lt;div class="panel-body">...&lt;/div>
&lt;/div>
&lt;!-- /panel heading placement -->
</code></pre>
								</div>
							</div>


						</div>
					</div>
					<!-- /button classes -->


					<!-- Sidebar classes -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Sidebar classes</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<h6 class="text-semibold">Overview</h6>
							<p class="content-group">This table demonstrates all classes for <code>sidebar</code> container, responsible for the sidebar width and color. Almost all these classes are mandatory, some of them are responsible for proper styling or have a specific code attached to this class (like <code>.sidebar-main</code> class, which has collapsible functionality attached). All classes can be combined depending on the type of sidebar:</p>
							<div class="table-responsive content-group-lg">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th style="width: 300px">Body class</th>
											<th>Description</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><code>.sidebar</code></td>
											<td>Default sidebar class, should be added in all layout types.</td>
										</tr>
										<tr>
											<td><code>.sidebar-main</code></td>
											<td>Defines main sidebar. Mini sidebar <code>.sidebar-xs</code> class takes effect only if class <code>.sidebar-main</code> specified. By default all components except main navigation are hidden in mini sidebar.</td>
										</tr>
										<tr>
											<td><code>.sidebar-secondary</code></td>
											<td>Defines secondary sidebar in dual sidebar layout. Has fixed <code>260px</code> width.</td>
										</tr>
										<tr>
											<td><code>.sidebar-opposite</code></td>
											<td>Defines opposite sidebar in double sidebar layout. Has fixed <code>260px</code> width and appears on the opposite side from the main sidebar.</td>
										</tr>
										<tr>
											<td><code>.sidebar-default</code></td>
											<td>Defines light sidebar. This class can be applied to all sidebar types and positions.</td>
										</tr>
										<tr>
											<td><code>.sidebar.bg-*</code></td>
											<td>Defines sidebar background color. According to the custom color system, sidebar background color can be changed to one of the available colors by adding a proper class to the main sidebar container.</td>
										</tr>
										<tr>
											<td><code>.sidebar-detached</code></td>
											<td>Needs to be added to the parent container. Also requires <code>.has-detached-left</code> or <code>.has-detached-right</code> added to the <code>&lt;body></code> tag.</td>
										</tr>
										<tr>
											<td><code>.sidebar-separate</code></td>
											<td>Removes background and border from sidebar and displays categories as separate widgets. Mainly used with detached sidebar.</td>
										</tr>
									</tbody>
								</table>
							</div>

							<h6 class="text-semibold">Example Markup</h6>
							<div class="row">
								<div class="col-md-6">
									<p>Default left aligned sidebar markup:</p>
									<pre class="language-markup content-group" data-line="2"><code>&lt;!-- Default sidebar layout -->
&lt;body>

	&lt;!-- Page container -->
	&lt;div class="page-container">

		&lt;!-- Page content -->
		&lt;div class="page-content">

			&lt;!-- Main sidebar -->
			&lt;div class="sidebar sidebar-main">
				&lt;div class="sidebar-content">...&lt;/div>
			&lt;/div>
			&lt;!-- /main sidebar -->

			&lt;!-- Main content -->
			&lt;div class="content-wrapper">...&lt;/div>
			&lt;!-- /main content -->

		&lt;/div>
		&lt;!-- /page content -->

	&lt;/div>
	&lt;!-- /page container -->

&lt;/body>
&lt;!-- /default sidebar layout -->
</code></pre>

								</div>

								<div class="col-md-6">
									<p>Mini sidebar markup. The only difference is <code>&lt;body></code> class:</p>
									<pre class="language-markup content-group" data-line="2"><code>&lt;!-- Mini sidebar layout -->
&lt;body class="sidebar-xs">

	&lt;!-- Page container -->
	&lt;div class="page-container">

		&lt;!-- Page content -->
		&lt;div class="page-content">

			&lt;!-- Main sidebar -->
			&lt;div class="sidebar sidebar-main">
				&lt;div class="sidebar-content">...&lt;/div>
			&lt;/div>
			&lt;!-- /main sidebar -->

			&lt;!-- Main content -->
			&lt;div class="content-wrapper">...&lt;/div>
			&lt;!-- /main content -->

		&lt;/div>
		&lt;!-- /page content -->

	&lt;/div>
	&lt;!-- /page container -->

&lt;/body>
&lt;!-- /mini sidebar layout -->
</code></pre>
								</div>
							</div>
						</div>
					</div>
					<!-- /sidebar classes -->

					
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
