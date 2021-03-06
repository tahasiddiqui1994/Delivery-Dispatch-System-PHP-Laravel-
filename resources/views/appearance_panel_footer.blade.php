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
	<script type="text/javascript" src="{{url('assets/js/core/libraries/jquery_ui/widgets.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/core/libraries/jquery_ui/interactions.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/forms/styling/switch.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/forms/selects/select2.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/forms/selects/selectboxit.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/forms/selects/bootstrap_select.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/forms/inputs/touchspin.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/sliders/nouislider.min.js')}}"></script>

	<script type="text/javascript" src="{{url('assets/js/core/app.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/pages/appearance_panel_heading.js')}}"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="index"><img src="assets/images/logo_light.png" alt=""></a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>

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
								<!-- /main -->

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
										<li class="active"><a href="appearance_panel_footer">Panel footer elements</a></li>
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
										<li><a href="sidebar_components">Sidebar components</a></li>
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
			

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Appearance</span> - Panel Footer</h4>
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
							<li><a href="appearance_panel_footer">Appearance</a></li>
							<li class="active">Panel footer</li>
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

		            <!-- Settings modal -->
					<div id="settings" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h5 class="modal-title"><i class="icon-cog5 position-left"></i> Settings modal</h5>
								</div>

								<!-- Form inside modal -->
								<form action="#">
									<div class="modal-body">
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6">
													<label>First name</label>
													<input type="text" placeholder="Eugene" class="form-control">
												</div>

												<div class="col-sm-6">
													<label class="control-label">Last name</label>
													<input type="text" placeholder="Kopyov" class="form-control">
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="row">
												<div class="col-sm-6">
													<label>Address line 1</label>
													<input type="text" placeholder="Ring street 12" class="form-control">
												</div>

												<div class="col-sm-6">
													<label>Address line 2</label>
													<input type="text" placeholder="building D, flat #67" class="form-control">
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="row">
												<div class="col-sm-4">
													<label>City</label>
													<input type="text" placeholder="Munich" class="form-control">
												</div>

												<div class="col-sm-4">
													<label>State/Province</label>
													<input type="text" placeholder="Bayern" class="form-control">
												</div>

												<div class="col-sm-4">
													<label>ZIP code</label>
													<input type="text" placeholder="1031" class="form-control">
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="row">
												<div class="col-sm-6">
													<label>Email</label>
													<input type="text" placeholder="eugene@kopyov.com" class="form-control">
													<span class="help-block">name@domain.com</span>
												</div>

												<div class="col-sm-6">
													<label>Phone #</label>
													<input type="text" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999" class="form-control">
													<span class="help-block">+99-99-9999-9999</span>
												</div>
											</div>
										</div>
									</div>

									<div class="modal-footer">
										<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-info">Save changes</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- /settings modal -->


					<!-- Footer layouts -->
					<h6 class="content-group text-semibold">
						Footer layouts
						<small class="display-block">Different styling options</small>
					</h6>

					<div class="row">
						<div class="col-md-6">

							<!-- Default footer -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Default footer</h6>
								</div>
								
								<div class="panel-body">
									Default panel footer styling
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text">Active user:</span>
										<ul class="heading-thumbnails pull-right">
											<li>
												<img src="assets/images/placeholder.jpg" alt="">
												<span class="badge bg-danger">9</span>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!-- /default footer -->


							<!-- Condensed footer -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Condensed footer</h6>
								</div>
								
								<div class="panel-body">
									Panel footer with smaller vertical spacing
								</div>

								<div class="panel-footer panel-footer-condensed">
									<div class="heading-elements">
										<span class="heading-text"><i class="icon-twitter position-left"></i> 281 tweets</span>
										<a href="#" class="heading-text text-default pull-right">Read more <i class="icon-arrow-right14 position-right"></i></a>
									</div>
								</div>
							</div>
							<!-- /condensed footer -->

						</div>

						<div class="col-md-6">

							<!-- Transparent footer -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Transparent footer</h6>
								</div>
								
								<div class="panel-body">
									Transparent panel footer
								</div>

								<div class="panel-footer panel-footer-transparent">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Users online:</span>
										<ul class="heading-thumbnails pull-right">
											<li>
												<img src="assets/images/placeholder.jpg" alt="">
												<span class="status-mark border-blue"></span>
											</li>
											<li>
												<img src="assets/images/placeholder.jpg" alt="">
												<span class="status-mark border-grey-300"></span>
											</li>
											<li>
												<img src="assets/images/placeholder.jpg" alt="">
												<span class="status-mark border-warning"></span>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!-- /transparent footer -->


							<!-- Bordered footer -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Bordered footer</h6>
								</div>
								
								<div class="panel-body">
									Panel footer with top border
								</div>

								<div class="panel-footer panel-footer-bordered">
									<div class="heading-elements">
										<span class="heading-text"><span class="status-mark border-success-400 position-left"></span> Availability:</span>
										<form class="heading-form pull-right" action="#">
											<div class="form-group">
												<label class="checkbox-inline checkbox-right checkbox-switchery switchery-sm">
													<input type="checkbox" class="switchery" checked="checked">
													Online
												</label>
											</div>
										</form>
									</div>
								</div>
							</div>
							<!-- /bordered footer -->

						</div>
					</div>
					<!-- /footer layouts -->


					<!-- Basic footer options -->
					<h6 class="content-group text-semibold">
						Basic elements
						<small class="display-block">Just a mix of basic elements</small>
					</h6>

					<div class="row">
						<div class="col-md-6">

							<!-- Simple text -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Panel footer with plain text
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Plain footer text:</span>
										<span class="heading-text pull-right">Simple text</span>
									</div>
								</div>
							</div>
							<!-- /simple text -->


							<!-- Text with left icon -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Panel footer text with left icon
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Text with left icon:</span>
										<span class="heading-text pull-right"><i class="icon-twitter position-left"></i> 281 tweets</span>
									</div>
								</div>
							</div>
							<!-- /text with left icon -->


							<!-- Inline list -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Panel footer with simple inline list
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Inline list:</span>
										<ul class="list-inline heading-text pull-right">
											<li>Download</li>
											<li>Upload</li>
											<li><a href="#">Generate</a></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- /inline list -->


							<!-- Single label -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Panel footer with single label
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Single label:</span>
										<span class="heading-text pull-right"><span class="label bg-danger-400">Label</span></span>
									</div>
								</div>
							</div>
							<!-- /single label -->


							<!-- Left status mark -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Panel footer with left aligned status mark
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Left status mark:</span>
										<span class="heading-text pull-right"><span class="status-mark border-warning position-left"></span> Out of stock</span>
									</div>
								</div>
							</div>
							<!-- /left status mark -->


							<!-- Pagination -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Panel footer with pagination
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Pagination:</span>
										<ul class="pagination pagination-flat pagination-xs pull-right">
											<li><a href="#">←</a></li>
											<li><a href="#">1</a></li>
											<li class="active"><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">→</a></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- /pagination -->

						</div>

						<div class="col-md-6">

							<!-- Inline link -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Panel footer with simple link
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Inline footer link:</span>
										<a href="#" class="heading-text pull-right">Clickable inline link</a>
									</div>
								</div>
							</div>
							<!-- /inline link -->


							<!-- Text with right icon -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Panel footer text with right icon
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Text with right icon:</span>
										<a href="#" class="heading-btn btn btn-link pull-right">Read more <i class="icon-arrow-right6 position-right"></i></a>
									</div>
								</div>
							</div>
							<!-- /text with right icon -->


							<!-- Bullet inline list -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Panel footer with bullet inline list
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Bullet inline list:</span>
										<ul class="list-inline list-inline-separate heading-text pull-right">
											<li>Download</li>
											<li>Upload</li>
											<li><a href="#">Generate</a></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- /bullet inline list -->


							<!-- Single badge -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Panel footer with single badge
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Single badge:</span>
										<span class="heading-text pull-right"><span class="badge bg-success-400">38</span></span>
									</div>
								</div>
							</div>
							<!-- /single badge -->


							<!-- Right status mark -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Panel footer with right aligned status mark
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Right status mark:</span>
										<span class="heading-text pull-right">Status: <span class="status-mark bg-success position-right"></span></span>
									</div>
								</div>
							</div>
							<!-- /right status mark -->


							<!-- Pager -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Panel footer with pager
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Pager:</span>
										<ul class="pager pager-xs pull-right">
											<li><a href="#">&larr; Prev</a></li>
											<li><a href="#">Next &rarr;</a></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- /pager -->

						</div>
					</div>
					<!-- /basic footer options -->


					<!-- Footer thumbnails -->
					<h6 class="content-group text-semibold">
						Panel footer thumbnails
						<small class="display-block">Single and thumbnail groups</small>
					</h6>

					<div class="row">
						<div class="col-md-6">

							<!-- Single thumbnail -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Panel footer with single thumbnail
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Single thumbnail:</span>
										<ul class="heading-thumbnails pull-right">
											<li><img src="assets/images/placeholder.jpg" alt=""></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- /single thumbnail -->


							<!-- Thumbnail group -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Panel footer with thumbnail group
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Thumbnail group:</span>
										<ul class="heading-thumbnails pull-right">
											<li><img src="assets/images/placeholder.jpg" alt=""></li>
											<li><img src="assets/images/placeholder.jpg" alt=""></li>
											<li><img src="assets/images/placeholder.jpg" alt=""></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- /thumbnail group -->


							<!-- Thumbnail with badge -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Panel footer thumbnail with badge
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Thumb with badge:</span>
										<ul class="heading-thumbnails pull-right">
											<li>
												<img src="assets/images/placeholder.jpg" alt="">
												<span class="badge bg-danger">9</span>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!-- /thumbnail with badge -->

						</div>

						<div class="col-md-6">

							<!-- Single linked thumbnail -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Panel footer with single linked thumbnail
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Linked thumbnail:</span>
										<ul class="heading-thumbnails pull-right">
											<li><a href="#"><img src="assets/images/placeholder.jpg" alt=""></a></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- /Ssingle linked thumbnail -->


							<!-- Linked thumbnail group -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Panel footer with linked thumbnail group
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Linked thumbnail group:</span>
										<ul class="heading-thumbnails pull-right">
											<li><a href="#"><img src="assets/images/placeholder.jpg" alt=""></a></li>
											<li><a href="#"><img src="assets/images/placeholder.jpg" alt=""></a></li>
											<li><a href="#"><img src="assets/images/placeholder.jpg" alt=""></a></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- /linked thumbnail group -->


							<!-- Thumbnail with status mark -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Panel footer thumbnail with status mark
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Thumb with status mark:</span>
										<ul class="heading-thumbnails pull-right">
											<li>
												<img src="assets/images/placeholder.jpg" alt="">
												<span class="status-mark border-success"></span>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!-- /thumbnail with status mark -->

						</div>
					</div>
					<!-- /footer thumbnails -->


					<!-- Footer icons -->
					<h6 class="content-group text-semibold">
						Footer icons
						<small class="display-block">Single and multiple icons</small>
					</h6>

					<div class="row">
						<div class="col-md-6">

							<!-- Single icon -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Panel footer with single icon
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Single icon:</span>
										<ul class="icons-list pull-right">
					                		<li><a href="#"><i class="icon-cog3"></i></a></li>
					                	</ul>
				                	</div>
								</div>
							</div>
							<!-- /single icon -->


							<!-- Multiple icons -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Panel footer with multiple icons set
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Multiple icons:</span>
										<ul class="icons-list pull-right">
					                		<li><a href="#"><i class="icon-mention"></i></a></li>
					                		<li><a href="#"><i class="icon-screen-full"></i></a></li>
					                		<li><a href="#"><i class="icon-mail5"></i></a></li>
					                	</ul>
				                	</div>
								</div>
							</div>
							<!-- /multiple icons -->

						</div>

						<div class="col-md-6">

							<!-- Single icon dropdown -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Panel footer with single icon dropdown
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Icon dropdown:</span>
										<ul class="icons-list pull-right">
					                		<li class="dropdown">
					                			<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">One more separated line</a></li>
												</ul>
					                		</li>
					                	</ul>
				                	</div>
								</div>
							</div>
							<!-- /single icon dropdown -->


							<!-- Multiple icon dropdown -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Panel footer with multiple icon and dropdown menu
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Multiple icon dropdown:</span>
										<ul class="icons-list pull-right">
					                		<li><a href="#"><i class="icon-dribbble3"></i></a></li>
					                		<li><a href="#"><i class="icon-wordpress"></i></a></li>
					                		<li class="dropdown">
						                		<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-github4"></i> <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">One more separated line</a></li>
												</ul>
					                		</li>
					                	</ul>
				                	</div>
								</div>
							</div>
							<!-- /multiple icon dropdowns -->

						</div>
					</div>
					<!-- /footer icons -->


					<!-- Footer form components -->
					<h6 class="content-group text-semibold">
						Form components
						<small class="display-block">A set of different form elements</small>
					</h6>

					<div class="row">
						<div class="col-md-6">

							<!-- Single checkbox -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Single checkbox. Available in both directions
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Single checkbox:</span>
										<form class="heading-form pull-right" action="#">
											<div class="form-group">
												<label class="checkbox-inline">
													<input type="checkbox" class="styled" checked="checked">
													Uncheck me
												</label>
											</div>
										</form>
									</div>
								</div>
							</div>
							<!-- /single checkbox -->


							<!-- Checkbox group -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Footer with group of inline checkboxes
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Checkbox group:</span>
										<form class="heading-form pull-right" action="#">
											<div class="form-group">
												<label class="checkbox-inline checkbox-right">
													<input type="checkbox" class="styled" checked="checked">
													Uncheck
												</label>

												<label class="checkbox-inline checkbox-right">
													<input type="checkbox" class="styled">
													Check
												</label>
											</div>
										</form>
									</div>
								</div>
							</div>
							<!-- /checkbox group -->


							<!-- Switchery toggle -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Switchery toggle. Available in all styles
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Switchery toggle:</span>
										<form class="heading-form pull-right" action="#">
											<div class="form-group">
												<label class="checkbox-inline checkbox-right checkbox-switchery switchery-sm">
													<input type="checkbox" class="switchery" checked="checked">
													Enable
												</label>
											</div>
										</form>
									</div>
								</div>
							</div>
							<!-- /switchery toggle -->


							<!-- Input field -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Footer with basic text input field
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Text input:</span>
										<form class="heading-form pull-right" action="#">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Search...">
											</div>
										</form>
									</div>
								</div>
							</div>
							<!-- /input field -->


							<!-- File input -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Panel footer with styled file input field
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">File input:</span>
										<form class="heading-form pull-right" action="#">
											<div class="form-group">
												<input type="file" class="file-styled">
											</div>
										</form>
									</div>
								</div>
							</div>
							<!-- /file input -->

						</div>

						<div class="col-md-6">

							<!-- Single radio -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Single radio. Available in both directions
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Single radio:</span>
										<form class="heading-form pull-right" action="#">
											<div class="form-group">
												<label class="radio-inline">
													<input type="radio" name="single-radio" class="styled">
													Select me
												</label>
											</div>
										</form>
									</div>
								</div>
							</div>
							<!-- /single radio -->


							<!-- Radio group -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Footer with group of inline radios
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Radio group:</span>
										<form class="heading-form pull-right" action="#">
											<div class="form-group">
												<label class="radio-inline radio-right">
													<input type="radio" name="group-radio" class="styled" checked="checked">
													Select
												</label>

												<label class="radio-inline radio-right">
													<input type="radio" name="group-radio" class="styled">
													Unselect
												</label>
											</div>
										</form>
									</div>
								</div>
							</div>
							<!-- /radio group -->


							<!-- Toggle switch -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Panel footer with Bootstrap toggle switch
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Toggle switch:</span>
										<form class="heading-form pull-right" action="#">
											<div class="form-group">
												<label class="checkbox-inline checkbox-right checkbox-switch checkbox-switch-sm">
													<input type="checkbox" class="switch" data-on-text="On" data-off-text="Off" data-size="small" checked="checked">
												</label>
											</div>
										</form>
									</div>
								</div>
							</div>
							<!-- /toggle switch -->


							<!-- Field with icon feedback -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Input field and icon feedback
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Input with icon:</span>
										<form class="heading-form pull-right" action="#">
											<div class="form-group has-feedback">
												<input type="search" class="form-control" placeholder="Search...">
												<div class="form-control-feedback">
													<i class="icon-search4 text-size-base text-muted"></i>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
							<!-- /field with icon feedback -->


							<!-- Touchspin spinner -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Footer with <code>Touchspin</code> input group spinner
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Touchspin spinner:</span>
										<form class="heading-form pull-right" action="#">
											<div class="form-group">
												<input type="text" value="55" class="form-control touchspin-postfix">
											</div>
										</form>
									</div>
								</div>
							</div>
							<!-- /touchspin spinner -->

						</div>
					</div>
					<!-- /footer form components -->


					<!-- Footer selects -->
					<h6 class="content-group text-semibold">
						Select menus
						<small class="display-block">Different select options</small>
					</h6>

					<div class="row">
						<div class="col-md-6">

							<!-- Basic select -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Panel footer with basic select
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Basic select:</span>
										<form class="heading-form pull-right" action="#">
											<div class="form-group">
												<select class="form-control">
													<optgroup label="Alaskan Time Zone">
														<option value="AK">Alaska</option>
														<option value="HI">Hawaii</option>
													</optgroup>
													<optgroup label="Pacific Time Zone">
														<option value="CA">California</option>
														<option value="OR">Oregon</option>
														<option value="WA">Washington</option>
													</optgroup>
													<optgroup label="Mountain Time Zone">
														<option value="AZ">Arizona</option>
														<option value="ID">Idaho</option>
														<option value="WY">Wyoming</option>
													</optgroup>
												</select>
											</div>
										</form>
									</div>
								</div>
							</div>
							<!-- /basic select -->


							<!-- SelectBoxIt select -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Panel footer with <code>SelectBoxIt</code> select
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">SelectBoxIt select:</span>
										<form class="heading-form pull-right" action="#">
											<div class="form-group">
												<select class="selectbox selectbox-fixed">
													<optgroup label="Alaskan Time Zone">
														<option value="AK">Alaska</option>
														<option value="HI">Hawaii</option>
													</optgroup>
													<optgroup label="Pacific Time Zone">
														<option value="CA">California</option>
														<option value="OR">Oregon</option>
														<option value="WA">Washington</option>
													</optgroup>
													<optgroup label="Mountain Time Zone">
														<option value="AZ">Arizona</option>
														<option value="ID">Idaho</option>
														<option value="WY">Wyoming</option>
													</optgroup>
												</select>
											</div>
										</form>
									</div>
								</div>
							</div>
							<!-- /selectBoxIt select -->


							<!-- Single multiselect -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Footer with single multiselect
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Single multiselect:</span>
										<form class="heading-form pull-right" action="#">
											<div class="form-group">
												<select class="multiselect">
													<option value="cheese">Cheese</option>
													<option value="tomatoes">Tomatoes</option>
													<option value="mozarella">Mozzarella</option>
													<option value="mushrooms">Mushrooms</option>
													<option value="pepperoni">Pepperoni</option>
													<option value="onions">Onions</option>
												</select>
											</div>
										</form>
									</div>
								</div>
							</div>
							<!-- /single multiselect -->

						</div>


						<div class="col-md-6">

							<!-- Select2 select -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Panel footer with <code>Select2</code> select
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Select2 select:</span>
										<form class="heading-form pull-right" action="#">
											<div class="form-group">
												<select class="select">
													<optgroup label="Alaskan Time Zone">
														<option value="AK">Alaska</option>
														<option value="HI">Hawaii</option>
													</optgroup>
													<optgroup label="Pacific Time Zone">
														<option value="CA">California</option>
														<option value="NV">Nevada</option>
														<option value="WA">Washington</option>
													</optgroup>
													<optgroup label="Mountain Time Zone">
														<option value="AZ">Arizona</option>
														<option value="CO">Colorado</option>
														<option value="ID">Idaho</option>
													</optgroup>
												</select>
											</div>
										</form>
									</div>
								</div>
							</div>
							<!-- /select2 select -->


							<!-- Bootstrap select -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Panel footer with <code>Bootstrap</code> custom select
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Bootstrap select:</span>
										<form class="heading-form pull-right" action="#">
											<div class="form-group">
												<select class="bootstrap-select" data-width="220">
													<optgroup label="Alaskan Time Zone">
														<option value="AK">Alaska</option>
														<option value="HI">Hawaii</option>
													</optgroup>
													<optgroup label="Pacific Time Zone">
														<option value="CA">California</option>
														<option value="OR">Oregon</option>
														<option value="WA">Washington</option>
													</optgroup>
													<optgroup label="Mountain Time Zone">
														<option value="AZ">Arizona</option>
														<option value="CO">Colorado</option>
														<option value="WY">Wyoming</option>
													</optgroup>
												</select>
											</div>
										</form>
									</div>
								</div>
							</div>
							<!-- /bootstrap select -->


							<!-- Multiselect -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Footer with multiple select
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Multiselect:</span>
										<form class="heading-form pull-right" action="#">
											<div class="form-group">
												<select class="multiselect" multiple="multiple">
													<option value="cheese">Cheese</option>
													<option value="tomatoes">Tomatoes</option>
													<option value="mozarella">Mozzarella</option>
													<option value="mushrooms">Mushrooms</option>
													<option value="pepperoni">Pepperoni</option>
													<option value="onions">Onions</option>
												</select>
											</div>
										</form>
									</div>
								</div>
							</div>
							<!-- /multiselect -->

						</div>
					</div>
					<!-- /heading selects -->


					<!-- Footer buttons -->
					<h6 class="content-group text-semibold">
						Footer buttons
						<small class="display-block">Basic buttons with options</small>
					</h6>

					<div class="row">
						<div class="col-md-6">

							<!-- Single button -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Footer with basic button. Available in 3 smallest sizes
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Single button:</span>
										<button type="button" class="btn btn-primary heading-btn pull-right">Button</button>
									</div>
								</div>
							</div>
							<!-- /single button -->


							<!-- Single button dropdown -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Footer with single button dropdown menu
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Button dropdown:</span>
										<div class="btn-group heading-btn pull-right">
											<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Menu <span class="caret"></span></button>
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
							</div>
							<!-- /single button dropdown -->


							<!-- Segmented button -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Panel footer with segmented button
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Segmented button:</span>
										<div class="btn-group heading-btn pull-right">
				                            <button class="btn btn-success">Menu</button>
				                            <button class="btn btn-success dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
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
							</div>
							<!-- /segmented button -->


							<!-- Multiple buttons -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Footer with multiple buttons
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Multiple buttons:</span>
										<div class="heading-btn pull-right">
											<button type="button" class="btn btn-info">Save</button>
											<button type="button" class="btn btn-default">Cancel</button>
										</div>
									</div>
								</div>
							</div>
							<!-- /multiple button -->

						</div>


						<div class="col-md-6">

							<!-- Icon button -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Panel footer with single icon button
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Icon button:</span>
										<button type="button" class="btn btn-success btn-icon heading-btn pull-right"><i class="icon-task"></i></button>
									</div>
								</div>
							</div>
							<!-- /icon button -->


							<!-- Icon button dropdown -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Panel footer with icon button dropdown
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Icon button dropdown:</span>
										<div class="btn-group heading-btn pull-right">
											<button type="button" class="btn btn-primary btn-icon dropdown-toggle" data-toggle="dropdown"><i class="icon-menu6"></i> <span class="caret"></span></button>
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
							</div>
							<!-- /icon button dropdown -->


							<!-- Segmented icon button -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Panel footer with segmented icon button
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Segmented icon button:</span>
										<div class="btn-group heading-btn pull-right">
				                            <button class="btn btn-danger btn-icon"><i class="icon-accessibility"></i></button>
				                            <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
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
							</div>
							<!-- /segmented icon button -->


							<!-- Multiple icon buttons -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Panel footer with multiple icon buttons
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Multiple icon buttons:</span>
										<div class="heading-btn pull-right">
											<button type="button" class="btn btn-primary btn-icon"><i class="icon-download"></i></button>
											<button type="button" class="btn btn-info btn-icon"><i class="icon-upload"></i></button>
										</div>
									</div>
								</div>
							</div>
							<!-- /multiple icon buttons -->

						</div>
					</div>
					<!-- /footer buttons -->


					<!-- Additional heading elements -->
					<h6 class="content-group text-semibold">
						Other elements
						<small class="display-block">Other panel heading elements</small>
					</h6>

					<div class="row">
						<div class="col-md-6">

							<!-- Tabs -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="tab-content panel-tab-content">
									<div class="tab-pane active has-padding" id="panel-tab1">
										This is the first panel tab content
									</div>

									<div class="tab-pane has-padding" id="panel-tab2">
										This is the second panel tab content
									</div>

									<div class="tab-pane has-padding" id="panel-tab3">
										This is the third panel tab content
									</div>

									<div class="tab-pane has-padding" id="panel-tab4">
										This is the fourth panel tab content
									</div>
								</div>

								<div class="panel-footer">
									<div class="heading-elements panel-nav">
										<span class="heading-text text-semibold">Panel footer tabs:</span>
										<ul class="nav nav-tabs nav-tabs-bottom pull-right">
											<li class="active"><a href="#panel-tab1" data-toggle="tab"><i class="icon-screen-full position-left"></i> Home</a></li>
											<li><a href="#panel-tab2" data-toggle="tab"><i class="icon-stats-bars position-left"></i> Stats</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-cog5"></i>
													<span class="visible-xs-inline-block position-right">Dropdown</span>
													<span class="caret"></span>
												</a>
												
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#panel-tab3" data-toggle="tab"><i class="icon-people"></i> Profile settings</a></li>
													<li><a href="#panel-tab4" data-toggle="tab"><i class="icon-stack"></i> Layout settings</a></li>
												</ul>
											</li>
										</ul>
				                	</div>
								</div>
							</div>
							<!-- /tabs -->


							<!-- Progress bar -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Panel footer with progress bar. Available in all sizes
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Progress bar:</span>
										<div class="progress pull-right">
											<div class="progress-bar progress-bar-success" style="width: 60%;">
												<span class="sr-only">60% Complete</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /progress bar -->


							<!-- jQuery UI slider -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Footer with jQuery UI slider. Available in all sizes
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">jQuery UI slider:</span>
										<div class="ui-slider ui-slider-info pull-right"></div>
				                	</div>
								</div>
							</div>
							<!-- /jquery UI slider -->

						</div>


						<div class="col-md-6">

							<!-- Pills -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="tab-content panel-tab-content">
									<div class="tab-pane active has-padding" id="panel-pill1">
										This is the first panel pill content
									</div>

									<div class="tab-pane has-padding" id="panel-pill2">
										This is the second panel pill content
									</div>

									<div class="tab-pane has-padding" id="panel-pill3">
										This is the third panel pill content
									</div>

									<div class="tab-pane has-padding" id="panel-pill4">
										This is the fourth panel pill content
									</div>
								</div>

								<div class="panel-footer">
									<div class="heading-elements panel-nav">
										<span class="heading-text text-semibold">Panel footer pills:</span>
										<ul class="nav nav-pills pull-right">
											<li class="active"><a href="#panel-pill1" data-toggle="tab"><i class="icon-screen-full position-left"></i> Home</a></li>
											<li><a href="#panel-pill2" data-toggle="tab"><i class="icon-stats-bars position-left"></i> Stats</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-cog5"></i>
													<span class="visible-xs-inline-block position-right">Dropdown</span>
													<span class="caret"></span>
												</a>
												
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#panel-pill3" data-toggle="tab"><i class="icon-people"></i> Profile settings</a></li>
													<li><a href="#panel-pill4" data-toggle="tab"><i class="icon-stack"></i> Layout settings</a></li>
												</ul>
											</li>
										</ul>
				                	</div>
								</div>
							</div>
							<!-- /pills -->


							<!-- Breadcrumbs -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Panel footer with breadcrumbs. Supports all available breadcrumb options
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Breadcrumbs:</span>
										<div class="pull-right">
											<ul class="breadcrumb heading-text">
												<li><a href="index"><i class="icon-home2 position-left"></i> Home</a></li>
												<li><a href="panels_footer">Appearance</a></li>
												<li class="active">Panel footer</li>
											</ul>
										</div>
				                	</div>
								</div>
							</div>
							<!-- /breadcrumbs -->


							<!-- Noui slider -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Panel footer with NoUI slider. Available in all sizes
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">NoUI slider:</span>
										<div class="noui-slider noui-slider-danger pull-right" id="noui-slider-demo"></div>
				                	</div>
								</div>
							</div>
							<!-- /noui slider -->

						</div>
					</div>
					<!-- /additional heading elements -->


					<!-- Mixing heading elements -->
					<h6 class="content-group text-semibold">
						Mixing elements
						<small class="display-block">Different element variations</small>
					</h6>

					<div class="row">
						<div class="col-md-6">

							<!-- Input field with button -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Mixing input field with button
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Input and button:</span>
										<form class="heading-form pull-right" action="#">
											<div class="form-group">
												<div class="input-group">
													<input type="text" class="form-control" placeholder="Search...">
													<div class="input-group-btn">
														<button type="button" class="btn btn-info btn-icon"><i class="icon-three-bars"></i></button>
													</div>
												</div>
											</div>
										</form>
				                	</div>
								</div>
							</div>
							<!-- /input field with button -->


							<!-- Checkbox and icon dropdown -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Mixing checkbox with label and icon dropdown
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Checkbox and dropdown:</span>
										<div class="pull-right">
											<form class="heading-form" action="#">
												<div class="form-group">
													<label class="checkbox-inline">
														<input type="checkbox" class="styled" checked="checked">
														Enable
													</label>
												</div>
											</form>

											<ul class="icons-list">
						                		<li class="dropdown">
						                			<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog4"></i> <span class="caret"></span></a>
													<ul class="dropdown-menu dropdown-menu-right">
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">One more separated line</a></li>
													</ul>
						                		</li>
						                	</ul>
					                	</div>
				                	</div>
								</div>
							</div>
							<!-- /checkbox and icon dropdown -->


							<!-- Switchery and button -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Mixing switchery toggle and simple single button
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Switch and button:</span>
										<div class="pull-right">
											<form class="heading-form" action="#">
												<div class="form-group">
													<label class="checkbox-inline checkbox-right checkbox-switchery switchery-sm">
														<input type="checkbox" class="switchery" checked="checked">
														Enable
													</label>
												</div>
											</form>

											<button type="button" class="btn bg-indigo-400 btn-xs heading-btn">Save</button>
					                	</div>
									</div>
								</div>
							</div>
							<!-- /switchery and button -->

						</div>


						<div class="col-md-6">

							<!-- Label and segmented button dropdown -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Mixing label and segmented button dropdown
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Label and button:</span>
										<div class="pull-right">
					                		<span class="heading-text">Label</span>
						                	<div class="btn-group heading-btn">
					                            <button class="btn btn-success btn-xs btn-icon"><i class="icon-accessibility"></i></button>
					                            <button class="btn btn-success btn-xs dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
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
								</div>
							</div>
							<!-- /label and segmented button dropdown -->


							<!-- Spinner and progress bar -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Mixing spinner and progress bar
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Spinner and progress:</span>
										<div class="pull-right">
											<span class="heading-text"><i class="icon-spinner2 spinner"></i></span>
											<div class="progress progress-xxs">
												<div class="progress-bar progress-bar-warning" style="width: 60%;">
													<span class="sr-only">60% Complete</span>
												</div>
											</div>
										</div>
				                	</div>
								</div>
							</div>
							<!-- /spinner and progress bar -->


							<!-- Multiple elements -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Panel title</h6>
								</div>
								
								<div class="panel-body">
									Mixing spinner icon, label and icon list group
								</div>

								<div class="panel-footer">
									<div class="heading-elements">
										<span class="heading-text text-semibold">Multiple elements:</span>
										<div class="pull-right">
											<ul class="icons-list">
						                		<li><i class="icon-spinner4 spinner no-edge-top"></i></li>
						                	</ul>

						                	<span class="label label-danger heading-text">Label</span>

											<ul class="icons-list">
						                		<li><a href="#"><i class="icon-googleplus5"></i></a></li>
						                		<li><a href="#"><i class="icon-pin-alt"></i></a></li>
						                		<li><a href="#"><i class="icon-portfolio"></i></a></li>
						                	</ul>
					                	</div>
				                	</div>
								</div>
							</div>
							<!-- /multiple elements -->

						</div>
					</div>
					<!-- /mixing heading elements -->


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
