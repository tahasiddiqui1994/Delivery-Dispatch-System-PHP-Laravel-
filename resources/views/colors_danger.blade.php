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
	<script type="text/javascript" src="{{url('assets/js/core/libraries/jquery_ui/core.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/forms/selects/select2.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/forms/selects/selectboxit.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/forms/selects/bootstrap_select.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/notifications/pnotify.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/notifications/noty.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/notifications/jgrowl.min.js')}}"></script>

	<script type="text/javascript" src="{{url('assets/js/core/app.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/pages/colors_danger.js')}}"></script>
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
										<li class="active"><a href="colors_danger">Danger palette</a></li>
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
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Colors</span> - Danger Palette</h4>
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
							<li><a href="colors_danger">Colors</a></li>
							<li class="active">Danger palette</li>
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

					<!-- Palette colors -->
					<h6 class="content-group-sm text-semibold">
						Danger palette colors
						<small class="display-block">Includes 1 main and 5 accent colors</small>
					</h6>

					<div class="row">
						<div class="col-sm-4 col-lg-2">
							<div class="panel">
								<div class="bg-danger-800 demo-color"><span>danger-800</span></div>

								<div class="p-15">
									<div class="media-body">
										<strong>Danger 800</strong>
										<div class="text-muted mt-5">#C62828</div>
									</div>

									<div class="media-right">
										<ul class="icons-list">
											<li><a href="#" data-toggle="modal" data-target="#danger_800"><i class="icon-three-bars"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-4 col-lg-2">
							<div class="panel">
								<div class="bg-danger-700 demo-color"><span>danger-700</span></div>
								
								<div class="p-15">
									<div class="media-body">
										<strong>Danger 700</strong>
										<div class="text-muted mt-5">#D32F2F</div>
									</div>

									<div class="media-right">
										<ul class="icons-list">
											<li><a href="#" data-toggle="modal" data-target="#danger_700"><i class="icon-three-bars"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-4 col-lg-2">
							<div class="panel">
								<div class="bg-danger-600 demo-color"><span>danger-600</span></div>
								
								<div class="p-15">
									<div class="media-body">
										<strong>Danger 600</strong>
										<div class="text-muted mt-5">#E53935</div>
									</div>

									<div class="media-right">
										<ul class="icons-list">
											<li><a href="#" data-toggle="modal" data-target="#danger_600"><i class="icon-three-bars"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-4 col-lg-2">
							<div class="panel">
								<div class="bg-danger demo-color"><span>danger</span></div>
								
								<div class="p-15">
									<div class="media-body">
										<strong>Danger 500</strong>
										<div class="text-muted mt-5">#F44336</div>
									</div>

									<div class="media-right">
										<ul class="icons-list">
											<li><a href="#" data-toggle="modal" data-target="#danger_500"><i class="icon-three-bars"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-4 col-lg-2">
							<div class="panel">
								<div class="bg-danger-400 demo-color"><span>danger-400</span></div>
								
								<div class="p-15">
									<div class="media-body">
										<strong>Danger 400</strong>
										<div class="text-muted mt-5">#EF5350</div>
									</div>

									<div class="media-right">
										<ul class="icons-list">
											<li><a href="#" data-toggle="modal" data-target="#danger_400"><i class="icon-three-bars"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-4 col-lg-2">
							<div class="panel">
								<div class="bg-danger-300 demo-color"><span>danger-300</span></div>
								
								<div class="p-15">
									<div class="media-body">
										<strong>Danger 300</strong>
										<div class="text-muted mt-5">#E57373</div>
									</div>

									<div class="media-right">
										<ul class="icons-list">
											<li><a href="#" data-toggle="modal" data-target="#danger_300"><i class="icon-three-bars"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /palette colors -->


					<!-- Palette classes -->
					<div class="panel panel-flat content-group-lg">
						<div class="panel-heading">
							<h5 class="panel-title">Palette classes</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<p>Danger color palette includes 6 colors: 1 main color without suffix and 5 accent colors with 300, 400, 600, 700 and 800 suffixes. Majority of components and layout parts are coded with maximum flexibility and support of different color options that can be changed on-the-fly just by adding or replacing proper color class. Also works perfectly in combination with other helpers, that makes Limitless very flexible and configurable.</p>
							<strong>Please note:</strong> default Bootstrap contextual classes - primary, danger, success, warning, info - still available and correspond to main colors, so you can use both <code>.bg-danger</code> and <code>.btn-danger</code> as main colors, but if you want to use accent colors, use only <code>.bg-*-*</code>, BS accent classes have been dropped to avoid unnecessary dublicating.
						</div>

						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th style="width: 300px;">Class</th>
										<th>Description</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><code>.bg-danger</code><br><code>.bg-danger-*</code></td>
										<td>Classes for background color. You can choose between 1 danger color using <code>.bg-danger</code> class and 5 accent colors using <code>.bg-danger-*</code> class in 300, 400, 600, 700, 800 range</td>
									</tr>
									<tr>
										<td><code>.border-danger</code><br><code>.border-danger-*</code></td>
										<td>Classes for border color. Useful when only border needs to have different colors - validation, highlights, custom buttons etc. Can be used with form controls, selects, wells, buttons and any other block element</td>
									</tr>
									<tr>
										<td><code>.border-top-danger</code><br><code>.border-top-danger-*</code></td>
										<td>Classes for <code>top</code> border color. Use this class if you need to highlight top border only</td>
									</tr>
									<tr>
										<td><code>.border-bottom-danger</code><br><code>.border-bottom-danger-*</code></td>
										<td>Classes for <code>bottom</code> border color. Use this class if you need to highlight bottom border only</td>
									</tr>
									<tr>
										<td><code>.border-left-danger</code><br><code>.border-left-danger-*</code></td>
										<td>Classes for <code>left</code> border color. Use this class if you need to highlight left border only</td>
									</tr>
									<tr>
										<td><code>.border-right-danger</code><br><code>.border-right-danger-*</code></td>
										<td>Classes for <code>right</code> border color. Use this class if you need to highlight right border only</td>
									</tr>
									<tr>
										<td><code>.text-danger</code><br><code>.text-danger-*</code></td>
										<td>Classes for text color. These colors can be used with: text, links, icons, lists etc. Base text color doesn't require suffix</td>
									</tr>
									<tr>
										<td><code>.alpha-danger</code></td>
										<td>Classes for light accent color. Mainly used in alerts with darker text color from the same palette. Available only in 1 class</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<!-- /palette classes -->


					<!-- Alert options -->
				    <h6 class="content-group text-semibold">
						Alert options
						<small class="display-block">Bordered, styled, solid in both directions</small>
					</h6>

					<div class="content-group-lg">

						<!-- Basic alert -->
						<div class="alert alert-danger alert-styled-left">
							<button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
							Here you can see how danger palette can be used with different components. By the way, this alert uses it as well
					    </div>
					    <!-- /basic alert -->


					    <!-- Solid alert -->
					    <div class="alert bg-danger-400 alert-styled-left">
							<button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
							<span class="text-semibold">Morning!</span> We're glad to <a href="#" class="alert-link">see you again</a> and wish you a nice day.
					    </div>
					    <!-- /solid alert -->

				    </div>
				    <!-- /alert options -->


				    <!-- Form components -->
				    <h6 class="content-group text-semibold">
						Form components
						<small class="display-block">Inputs, selects, checkboxes, radios, groups etc.</small>
					</h6>

				    <div class="row">
				    	<div class="col-md-4">
				    		<div class="panel panel-body border-top-danger">
								<div class="text-center">
									<h6 class="no-margin text-semibold">Input field text</h6>
									<p class="mb-15 text-muted">Using <code>.text-danger</code> classes</p>
								</div>

								<input type="text" class="form-control text-danger text-uppercase text-semibold text-size-small" value="Input field text">
							</div>
				    	</div>

				    	<div class="col-md-4">
				    		<div class="panel panel-body border-top-danger">
								<div class="text-center">
									<h6 class="no-margin text-semibold">Input border color</h6>
									<p class="mb-15 text-muted">Using <code>.border-danger</code> or classes</p>
								</div>

								<input type="text" class="form-control border-danger border-lg" placeholder="Input field border">
							</div>
				    	</div>

				    	<div class="col-md-4">
				    		<div class="panel panel-body border-top-danger">
								<div class="text-center">
									<h6 class="no-margin text-semibold">Input background color</h6>
									<p class="mb-15 text-muted">Using <code>.bg-danger</code> classes</p>
								</div>

								<input type="text" class="form-control bg-danger-400" placeholder="Input field background">
							</div>
				    	</div>
				    </div>

				    <div class="row">
				    	<div class="col-md-4">
				    		<div class="panel panel-body border-top-danger">
								<div class="text-center">
									<h6 class="no-margin text-semibold">Input with feedback</h6>
									<p class="mb-15 text-muted">Using <code>.bg-danger</code> classes</p>
								</div>

								<div class="has-feedback">
									<input type="text" class="form-control bg-danger-400" placeholder="Icon feedback, danger input">
									<div class="form-control-feedback">
										<i class="icon-help"></i>
									</div>
								</div>
							</div>
				    	</div>

				    	<div class="col-md-4">
				    		<div class="panel panel-body border-top-danger">
								<div class="text-center">
									<h6 class="no-margin text-semibold">Select background color</h6>
									<p class="mb-15 text-muted">Using <code>.bg-danger</code> classes</p>
								</div>

								<select class="form-control bg-danger-400">
									<optgroup label="Alaskan/Hawaiian Time Zone">
										<option value="AK" selected="selected">Alaska</option>
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
				    	</div>

				    	<div class="col-md-4">
				    		<div class="panel panel-body border-top-danger">
								<div class="text-center">
									<h6 class="no-margin text-semibold">File input color</h6>
									<p class="mb-15 text-muted">Styled file input button color</p>
								</div>

								<input type="file" class="file-styled">
							</div>
				    	</div>
				    </div>

				    <div class="row">
				    	<div class="col-md-4">
				    		<div class="panel panel-body border-top-danger">
								<div class="text-center">
									<h6 class="no-margin text-semibold">Input group addon</h6>
									<p class="mb-15 text-muted">Using <code>.bg-danger</code> classes</p>
								</div>

								<div class="input-group">
									<span class="input-group-addon bg-danger-400"><i class="icon-menu7"></i></span>
									<input type="text" class="form-control" placeholder="Solid background color">
								</div>
							</div>
				    	</div>

				    	<div class="col-md-4">
				    		<div class="panel panel-body border-top-danger">
								<div class="text-center">
									<h6 class="no-margin text-semibold">Addon and button</h6>
									<p class="mb-15 text-muted">Combine text addon and button</p>
								</div>

								<div class="input-group">
									<span class="input-group-addon bg-danger-700"><i class="icon-lock2"></i></span>
									<input type="text" class="form-control bg-danger-400" placeholder="Solid background color">
									<span class="input-group-btn">
										<button class="btn bg-danger-700" type="button"><i class="icon-help"></i></button>
									</span>
								</div>
							</div>
				    	</div>

				    	<div class="col-md-4">
				    		<div class="panel panel-body border-top-danger">
								<div class="text-center">
									<h6 class="no-margin text-semibold">Input group button</h6>
									<p class="mb-15 text-muted">Using <code>.bg-danger</code> classes</p>
								</div>

								<div class="input-group">
									<input type="text" class="form-control" placeholder="Solid background color">

									<span class="input-group-btn">
										<button class="btn bg-danger-400" type="button">Button</button>
									</span>									
								</div>
							</div>
				    	</div>
				    </div>

				    <div class="row">
				    	<div class="col-md-4">
				    		<div class="panel panel-body border-top-danger text-center">
								<h6 class="no-margin text-semibold">Checkbox colors</h6>
								<p class="mb-15 text-muted">Using border and text color classes</p>

								<label class="checkbox-inline">
									<input type="checkbox" class="styled" checked="checked">
									Checked
								</label>

								<label class="checkbox-inline">
									<input type="checkbox" class="styled">
									Unchecked
								</label>
							</div>
				    	</div>

				    	<div class="col-md-4">
				    		<div class="panel panel-body border-top-danger text-center">
								<h6 class="no-margin text-semibold">Radio classes</h6>
								<p class="mb-15 text-muted">Using border color classes</p>

								<label class="radio-inline">
									<input type="radio" class="styled" name="danger-radio" checked="checked">
									Selected
								</label>

								<label class="radio-inline">
									<input type="radio" class="styled" name="danger-radio">
									Unselected
								</label>
							</div>
				    	</div>

				    	<div class="col-md-4">
				    		<div class="panel panel-body border-top-danger text-center">
								<h6 class="no-margin text-semibold">Switchery colors</h6>
								<p class="mb-15 text-muted">Using native plugin options</p>

								<label class="checkbox-inline checkbox-switchery switchery-sm switchery-double">
									Checked
									<input type="checkbox" class="switch" checked="checked">
									Unchecked
								</label>
							</div>
				    	</div>
				    </div>
				    <!-- /form components -->


				    <!-- Select2 selects -->
				    <h6 class="content-group text-semibold">
						Select2 selects
						<small class="display-block">Single and multiple select colors</small>
					</h6>

				    <div class="row">
				    	<div class="col-md-4">
				    		<div class="panel panel-body border-top-danger">
								<div class="text-center">
									<h6 class="no-margin text-semibold">Select2 single</h6>
									<p class="mb-15 text-muted">Custom single select background</p>
								</div>

								<select class="select bg-danger-400">
									<optgroup label="Mountain Time Zone">
										<option value="AZ">Arizona</option>
										<option value="CO">Colorado</option>
										<option value="ID">Idaho</option>
										<option value="WY">Wyoming</option>
									</optgroup>
									<optgroup label="Central Time Zone">
										<option value="AL">Alabama</option>
										<option value="IA">Iowa</option>
										<option value="KS">Kansas</option>
										<option value="KY">Kentucky</option>
									</optgroup>
									<optgroup label="Eastern Time Zone">
										<option value="CT">Connecticut</option>
										<option value="FL">Florida</option>
										<option value="MA">Massachusetts</option>
										<option value="WV">West Virginia</option>
									</optgroup>
								</select>
							</div>
				    	</div>

				    	<div class="col-md-4">
				    		<div class="panel panel-body border-top-danger">
								<div class="text-center">
									<h6 class="no-margin text-semibold">Select multiple</h6>
									<p class="mb-15 text-muted">Custom multiple select background</p>
								</div>

								<select class="select-item-color" data-placeholder="Select a state" multiple="multiple">
									<optgroup label="Mountain Time Zone">
										<option value="AZ">Arizona</option>
										<option value="CO">Colorado</option>
										<option value="ID" selected="selected">Idaho</option>
										<option value="WY">Wyoming</option>
									</optgroup>
									<optgroup label="Central Time Zone">
										<option value="AL">Alabama</option>
										<option value="IA" selected="selected">Iowa</option>
										<option value="KS">Kansas</option>
										<option value="KY">Kentucky</option>
									</optgroup>
									<optgroup label="Eastern Time Zone">
										<option value="CT">Connecticut</option>
										<option value="FL" selected="selected">Florida</option>
										<option value="MA">Massachusetts</option>
										<option value="WV">West Virginia</option>
									</optgroup>
								</select>
							</div>
				    	</div>

				    	<div class="col-md-4">
				    		<div class="panel panel-body border-top-danger">
								<div class="text-center">
									<h6 class="no-margin text-semibold">Result and menu colors</h6>
									<p class="mb-15 text-muted">Combination of CSS class options</p>
								</div>

								<select class="select-menu-color">
									<optgroup label="Mountain Time Zone">
										<option value="AZ">Arizona</option>
										<option value="CO">Colorado</option>
										<option value="ID">Idaho</option>
										<option value="WY">Wyoming</option>
									</optgroup>
									<optgroup label="Central Time Zone">
										<option value="AL">Alabama</option>
										<option value="IA">Iowa</option>
										<option value="KS">Kansas</option>
										<option value="KY">Kentucky</option>
									</optgroup>
									<optgroup label="Eastern Time Zone">
										<option value="CT">Connecticut</option>
										<option value="FL">Florida</option>
										<option value="MA">Massachusetts</option>
										<option value="WV">West Virginia</option>
									</optgroup>
								</select>
							</div>
				    	</div>
				    </div>
				    <!-- /select2 selects -->


				    <!-- Other selects -->
				    <h6 class="content-group text-semibold">
						Other selects
						<small class="display-block">Multiselect, selectboxit and BS select</small>
					</h6>

				    <div class="row">
				    	<div class="col-md-4">
				    		<div class="panel panel-body border-top-danger">
								<div class="text-center">
									<h6 class="no-margin text-semibold">Bootstrap multiselect</h6>
									<p class="mb-15 text-muted">Using plugin <code>buttonClass</code> option</p>

									<select class="multiselect" multiple="multiple">
										<option value="AZ">Arizona</option>
										<option value="CO">Colorado</option>
										<option value="ID">Idaho</option>
										<option value="WY">Wyoming</option>
										<option value="AL">Alabama</option>
										<option value="IA">Iowa</option>
										<option value="KS">Kansas</option>
										<option value="KY">Kentucky</option>
									</select>
								</div>
							</div>
				    	</div>

				    	<div class="col-md-4">
				    		<div class="panel panel-body border-top-danger">
								<div class="text-center">
									<h6 class="no-margin text-semibold">Select box</h6>
									<p class="mb-15 text-muted">Using <code>.bg-danger</code> or classes</p>

									<select class="selectbox bg-danger-400">
										<option value="AZ">Arizona</option>
										<option value="CO">Colorado</option>
										<option value="ID">Idaho</option>
										<option value="WY">Wyoming</option>
										<option value="AL">Alabama</option>
										<option value="IA">Iowa</option>
										<option value="KS">Kansas</option>
										<option value="KY">Kentucky</option>
									</select>
								</div>
							</div>
				    	</div>

				    	<div class="col-md-4">
				    		<div class="panel panel-body border-top-danger">
								<div class="text-center">
									<h6 class="no-margin text-semibold">Result and menu colors</h6>
									<p class="mb-15 text-muted">Using <code>data-style</code> attribute</p>

									<select class="bootstrap-select" data-style="bg-danger-400">
										<option value="AZ">Arizona</option>
										<option value="CO">Colorado</option>
										<option value="ID">Idaho</option>
										<option value="WY">Wyoming</option>
										<option value="AL">Alabama</option>
										<option value="IA">Iowa</option>
										<option value="KS">Kansas</option>
										<option value="KY">Kentucky</option>
									</select>
								</div>
							</div>
				    	</div>
				    </div>
				    <!-- /other selects -->


				    <!-- Tabs -->
				    <h6 class="content-group text-semibold">
						Tabs component color
						<small class="display-block">Solid tabs nav and content color</small>
					</h6>

				    <div class="row">
				    	<div class="col-md-6">
				    		<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Tabs navigation color</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable tab-content-bordered">
										<ul class="nav nav-tabs bg-danger-400">
											<li class="active"><a href="#colored-nav-tab1" data-toggle="tab">Active</a></li>
											<li><a href="#colored-nav-tab2" data-toggle="tab">Inactive</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#colored-nav-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#colored-nav-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane has-padding active" id="colored-nav-tab1">
												Add <code>custom</code> background color to the tab navigation with <code>.bg-danger</code> palette classes
											</div>

											<div class="tab-pane has-padding" id="colored-nav-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin
											</div>

											<div class="tab-pane has-padding" id="colored-nav-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever
											</div>

											<div class="tab-pane has-padding" id="colored-nav-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet
											</div>
										</div>
									</div>
								</div>
							</div>
				    	</div>

				    	<div class="col-md-6">
				    		<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Solid color tabs</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="tabbable tab-content-bordered">
										<ul class="nav nav-tabs bg-danger-400">
											<li class="active"><a href="#colored-tab1" data-toggle="tab">Active</a></li>
											<li><a href="#colored-tab2" data-toggle="tab">Inactive</a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#colored-tab3" data-toggle="tab">Dropdown tab</a></li>
													<li><a href="#colored-tab4" data-toggle="tab">Another tab</a></li>
												</ul>
											</li>
										</ul>

										<div class="tab-content bg-danger-400">
											<div class="tab-pane active has-padding" id="colored-tab1">
												Add <code>custom</code> background color to the tabs navigation and content with <code>.bg-danger</code> palette classes
											</div>

											<div class="tab-pane has-padding" id="colored-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin
											</div>

											<div class="tab-pane has-padding" id="colored-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever
											</div>

											<div class="tab-pane has-padding" id="colored-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet
											</div>
										</div>
									</div>
								</div>
							</div>
				    	</div>
				    </div>
				    <!-- /tabs -->


				    <!-- Text options -->
				    <h6 class="content-group text-semibold">
						Text options
						<small class="display-block">Text, link, labels, badges, icons</small>
					</h6>

				    <div class="row">
				    	<div class="col-md-4">
				    		<div class="panel panel-body border-top-danger text-center">
								<h6 class="no-margin text-semibold">Text and link color</h6>
								<p class="mb-15 text-muted">Using <code>.text-danger</code> classes</p>

								<span class="text-danger">Danger text</span> and <a href="#" class="text-danger">danger link</a>
							</div>
				    	</div>

				    	<div class="col-md-4">
				    		<div class="panel panel-body border-top-danger text-center">
								<h6 class="no-margin text-semibold">Label color</h6>
								<p class="mb-15 text-muted">Using <code>.bg-danger</code> classes</p>

								<span class="label bg-danger-400">Danger label</span>
							</div>
				    	</div>

				    	<div class="col-md-4">
				    		<div class="panel panel-body border-top-danger text-center">
								<h6 class="no-margin text-semibold">Badge color</h6>
								<p class="mb-15 text-muted">Using <code>.bg-danger</code> classes</p>

								<span class="badge bg-danger-400">390</span>
							</div>
				    	</div>
				    </div>
				    <!-- /text options -->


				    <!-- Progress bar -->
				    <h6 class="content-group text-semibold">
						Progress bars
						<small class="display-block">All colors, all sizes, all options</small>
					</h6>

				    <div class="row">
				    	<div class="col-md-4">
				    		<div class="panel panel-body border-top-danger text-center">
								<h6 class="no-margin text-semibold">Basic bar color</h6>
								<p class="mb-15 text-muted">Using <code>.bg-danger</code> classes</p>

								<div class="progress progress-lg">
									<div class="progress-bar bg-danger-400" style="width: 55%">
										<span>55% Complete</span>
									</div>
								</div>
							</div>
				    	</div>

				    	<div class="col-md-4">
				    		<div class="panel panel-body border-top-danger text-center">
								<h6 class="no-margin text-semibold">Striped bar color</h6>
								<p class="mb-15 text-muted">Using <code>.bg-danger</code> classes</p>

								<div class="progress progress-lg">
									<div class="progress-bar bg-danger-400 progress-bar-striped" style="width: 65%">
										<span>65% Complete</span>
									</div>
								</div>
							</div>
				    	</div>

				    	<div class="col-md-4">
				    		<div class="panel panel-body border-top-danger text-center">
								<h6 class="no-margin text-semibold">Animated bar color</h6>
								<p class="mb-15 text-muted">Using <code>.bg-danger</code> classes</p>

								<div class="progress progress-lg">
									<div class="progress-bar bg-danger-400 progress-bar-striped active" style="width: 75%">
										<span>75% Complete</span>
									</div>
								</div>
							</div>
				    	</div>
				    </div>
				    <!-- /progress bar -->


				    <!-- Tables -->
				    <h6 class="content-group text-semibold">
						Table color options
						<small class="display-block">header, footer, rows, columns, cells etc</small>
					</h6>

				    <div class="row">
				    	<div class="col-md-6">
				    		<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Header and footer</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									Easily change background color of table header and table footer by adding color class to the table header or footer row
								</div>

								<div class="table-responsive">
									<table class="table">
										<thead>
											<tr class="bg-danger-400">
												<th>#</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Username</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Eugene</td>
												<td>Kopyov</td>
												<td>@Kopyov</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Victoria</td>
												<td>Baker</td>
												<td>@Vicky</td>
											</tr>
											<tr>
												<td>3</td>
												<td>James</td>
												<td>Alexander</td>
												<td>@Alex</td>
											</tr>
										</tbody>
										<tfoot>
											<tr class="bg-danger-400">
												<th>#</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Username</th>
											</tr>
										</tfoot>
									</table>
								</div>
							</div>
						</div>

				    	<div class="col-md-6">
				    		<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Table rows</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									All table layouts support different row color options - highlight and solid fill
								</div>

								<div class="table-responsive">
									<table class="table">
										<thead>
											<tr>
												<th>#</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Username</th>
											</tr>
										</thead>
										<tbody>
											<tr class="bg-danger-400">
												<td>1</td>
												<td>Eugene</td>
												<td>Kopyov</td>
												<td>@Kopyov</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Victoria</td>
												<td>Baker</td>
												<td>@Vicky</td>
											</tr>
											<tr class="danger">
												<td>3</td>
												<td>James</td>
												<td>Alexander</td>
												<td>@Alex</td>
											</tr>
										</tbody>
										<tfoot>
											<tr>
												<th>#</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Username</th>
											</tr>
										</tfoot>
									</table>
								</div>
							</div>
						</div>
					</div>

				    <div class="row">
				    	<div class="col-md-6">
				    		<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Table columns</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									Besides table rows, you can also highlight table columns in the same way as rows
								</div>

								<div class="table-responsive">
									<table class="table">
										<thead>
											<tr>
												<th>#</th>
												<th class="danger">First Name</th>
												<th>Last Name</th>
												<th class="bg-danger-400">Username</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td class="danger">Eugene</td>
												<td>Kopyov</td>
												<td class="bg-danger-400">@Kopyov</td>
											</tr>
											<tr>
												<td>2</td>
												<td class="danger">Victoria</td>
												<td>Baker</td>
												<td class="bg-danger-400">@Vicky</td>
											</tr>
											<tr>
												<td>3</td>
												<td class="danger">James</td>
												<td>Alexander</td>
												<td class="bg-danger-400">@Alex</td>
											</tr>
										</tbody>
										<tfoot>
											<tr>
												<th>#</th>
												<th class="danger">First Name</th>
												<th>Last Name</th>
												<th class="bg-danger-400">Username</th>
											</tr>
										</tfoot>
									</table>
								</div>
							</div>
						</div>

				    	<div class="col-md-6">
				    		<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Solid table</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									Sometimes it may be very handy to highlight the whole table, you just need to add <code>.bg-*</code> classes to the table
								</div>

								<div class="table-responsive">
									<table class="table bg-danger-400">
										<thead>
											<tr>
												<th>#</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Username</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Eugene</td>
												<td>Kopyov</td>
												<td>@Kopyov</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Victoria</td>
												<td>Baker</td>
												<td>@Vicky</td>
											</tr>
											<tr>
												<td>3</td>
												<td>James</td>
												<td>Alexander</td>
												<td>@Alex</td>
											</tr>
										</tbody>
										<tfoot>
											<tr>
												<th>#</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Username</th>
											</tr>
										</tfoot>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!-- /tables -->


				    <!-- Buttons -->
				    <h6 class="content-group text-semibold">
						Button colors
						<small class="display-block">Button text, border and background colors</small>
					</h6>

				    <div class="row">
				    	<div class="col-md-4">
				    		<div class="panel panel-body border-top-danger text-center">
								<h6 class="no-margin text-semibold">Basic button</h6>
								<p class="mb-15 text-muted">Using <code>.bg-danger</code> classes</p>

								<button type="button" class="btn bg-danger-400"><i class="icon-menu7 position-left"></i> Button</button>
							</div>
				    	</div>

				    	<div class="col-md-4">
				    		<div class="panel panel-body border-top-danger text-center">
								<h6 class="no-margin text-semibold">Labeled button</h6>
								<p class="mb-15 text-muted">Using <code>.bg-danger</code> classes</p>

								<button type="button" class="btn bg-danger-400 btn-labeled"><b><i class="icon-menu7"></i></b> Labeled button</button>
							</div>
				    	</div>

				    	<div class="col-md-4">
				    		<div class="panel panel-body border-top-danger text-center">
								<h6 class="no-margin text-semibold">Flat button colors</h6>
								<p class="mb-15 text-muted">Using border and text color classes</p>

								<button type="button" class="btn text-danger-800 border-danger btn-flat"><i class="icon-menu7 position-left"></i> Button</button>
							</div>
				    	</div>
				    </div>
				    <!-- /buttons -->


				    <!-- Panels -->
				    <h6 class="content-group text-semibold">
						Panel colors
						<small class="display-block">Panel, panel border and heading colors</small>
					</h6>

				    <div class="row">
				    	<div class="col-md-4">
				    		<div class="panel">
								<div class="panel-heading bg-danger-400">
									<h6 class="panel-title">Danger panel</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									Danger panel using <code>.bg-danger</code> class added to the panel heading
								</div>
							</div>
				    	</div>

				    	<div class="col-md-4">
				    		<div class="panel border-danger-400">
								<div class="panel-heading bg-danger-400">
									<h6 class="panel-title">Danger bordered panel</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									Bordered danger panel using <code>.bg-danger</code> and <code>.border-danger</code> classes
								</div>
							</div>
				    	</div>

				    	<div class="col-md-4">
				    		<div class="panel bg-danger-400">
								<div class="panel-heading">
									<h6 class="panel-title">Danger solid panel</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									Solid danger panel using <code>.bg-danger</code> class added to the panel container
								</div>
							</div>
				    	</div>
				    </div>
				    <!-- /panels -->


				    <!-- Notifications and dialogs -->
				    <h6 class="content-group text-semibold">
						Notifications &amp; dialogs
						<small class="display-block">Notifications, modals, popovers, tooltips</small>
					</h6>

				    <div class="row">
				    	<div class="col-md-4">
				    		<div class="panel panel-body border-top-danger text-center">
								<h6 class="no-margin text-semibold">Tooltip color</h6>
								<p class="mb-15 text-muted">Change default tooltip color</p>

								<button type="button" class="btn bg-danger-400" data-popup="tooltip-custom" title="Danger tooltip" data-placement="bottom" data-container="body"><i class="icon-comment position-left"></i> Tooltip</button>
							</div>
				    	</div>

				    	<div class="col-md-4">
				    		<div class="panel panel-body border-top-danger text-center">
								<h6 class="no-margin text-semibold">Popover heading</h6>
								<p class="mb-15 text-muted">Using <code>.bg-danger</code> classes</p>

								<button type="button" class="btn bg-danger-400" data-popup="popover-custom" title="Danger popover" data-content="And here's some amazing content. It's very engaging. Right?" data-placement="bottom" data-container="body">
									<i class="icon-comment position-left"></i> Popover title
								</button>
							</div>
				    	</div>

				    	<div class="col-md-4">
				    		<div class="panel panel-body border-top-danger text-center">
								<h6 class="no-margin text-semibold">Popover background</h6>
								<p class="mb-15 text-muted">Apply custom color to the whole popover</p>

								<button type="button" class="btn bg-danger-400" data-popup="popover-solid" title="Danger popover" data-content="And here's some amazing content. It's very engaging. Right?" data-placement="bottom" data-container="body">
									<i class="icon-comment position-left"></i> Popover background
								</button>
							</div>
				    	</div>
				    </div>

				    <div class="row">
				    	<div class="col-md-4">
				    		<div class="panel panel-body border-top-danger text-center">
								<h6 class="no-margin text-semibold">Modal dialog header</h6>
								<p class="mb-15 text-muted">Using <code>.bg-danger</code> classes</p>

								<button type="button" class="btn bg-danger-400" data-toggle="modal" data-target="#modal_danger"><i class="icon-menu7 position-left"></i> Modal dialog</button>
							</div>
				    	</div>

				    	<div class="col-md-4">
				    		<div class="panel panel-body border-top-danger text-center">
								<h6 class="no-margin text-semibold">jGrowl notification</h6>
								<p class="mb-15 text-muted">Using <code>.bg-danger</code> color classes</p>

								<button class="btn bg-danger-400 growl-launch">jGrowl notification</button>
							</div>
				    	</div>

				    	<div class="col-md-4">
				    		<div class="panel panel-body border-top-danger text-center">
								<h6 class="no-margin text-semibold">PNotify notification</h6>
								<p class="mb-15 text-muted">Using <code>.bg-danger</code> color classes</p>

								<button class="btn bg-danger-400 pnotify-launch">Pnotify notification</button>
							</div>
				    	</div>
				    </div>
				    <!-- /notifications and dialogs -->


				    <!-- Dropdown menus -->
				    <h6 class="content-group text-semibold">
						Dropdown menu colors
						<small class="display-block">Panel, panel border and heading colors</small>
					</h6>

				    <div class="row">
				    	<div class="col-md-4">
				    		<div class="panel panel-body border-top-danger">
								<div class="text-center">
									<h6 class="no-margin text-semibold">Dropdown border color</h6>
									<p class="mb-15 text-muted">Using <code>.border-danger</code> color classes</p>
								</div>

								<ul class="dropdown-menu border-danger-400 border-lg" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
									<li><a href="#"><i class="icon-menu7"></i> Action</a></li>
									<li><a href="#"><i class="icon-screen-full"></i> Another action</a></li>
									<li><a href="#"><i class="icon-mail5"></i> Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="icon-gear"></i> One more separated line</a></li>
								</ul>
							</div>
				    	</div>

				    	<div class="col-md-4">
				    		<div class="panel panel-body border-top-danger">
								<div class="text-center">
									<h6 class="no-margin text-semibold">Dropdown background color</h6>
									<p class="mb-15 text-muted">Using <code>.bg-danger</code> color classes</p>
								</div>

								<ul class="dropdown-menu bg-danger-400" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
									<li><a href="#"><i class="icon-menu7"></i> Action</a></li>
									<li><a href="#"><i class="icon-screen-full"></i> Another action</a></li>
									<li><a href="#"><i class="icon-mail5"></i> Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="icon-gear"></i> One more separated line</a></li>
								</ul>
							</div>
				    	</div>

				    	<div class="col-md-4">
				    		<div class="panel panel-body border-top-danger">
								<div class="text-center">
									<h6 class="no-margin text-semibold">Adapted menu components</h6>
									<p class="mb-15 text-muted">Labels, badges, checkboxes, radios</p>
								</div>

								<ul class="dropdown-menu bg-danger-400" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
									<li><a href="#"><i class="icon-menu7"></i> <span class="label bg-danger pull-right">Label</span> Action</a></li>
									<li><a href="#"><i class="icon-screen-full"></i> <span class="badge bg-danger pull-right">98</span> Another action</a></li>
									<li class="divider"></li>
									<li class="checkbox"><label><input type="checkbox" class="styled" checked="checked"> Something else here</label></li>
									<li class="radio"><label><input type="radio" name="dropdown-radio" class="styled" checked="checked"> Something else here</label></li>
								</ul>
							</div>
				    	</div>
				    </div>
				    <!-- /dropdown menus -->



					<!-- Danger modal -->
					<div id="modal_danger" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header bg-danger">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h6 class="modal-title">Danger header</h6>
								</div>

								<div class="modal-body">
									<h6 class="text-semibold mt-5">Text in a modal</h6>
									<p>Friendship contrasted solicitude insipidity in introduced literature it. He seemed denote except as oppose do spring my. Between any may mention evening age shortly can ability regular. He shortly sixteen of colonel colonel evening cordial to.</p>

									<hr>

									<h6 class="text-semibold">Another paragraph</h6>
									<p>Comfort reached gay perhaps chamber his six detract besides add. Moonlight newspaper up he it enjoyment agreeable depending. Timed voice share led his widen noisy young.</p>
									<p>Up attempt offered ye civilly so sitting to. She new course get living within elinor joy. She her rapturous suffering concealed.</p>
								</div>

								<div class="modal-footer">
									<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
									<button type="button" class="btn bg-danger-400">Save changes</button>
								</div>
							</div>
						</div>
					</div>
					<!-- /danger modal -->


		            <!-- Danger 800 -->
					<div id="danger_800" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h5 class="modal-title">Available options</h5>
								</div>

								<div class="modal-body">
									For a quick usage of different color, you can use one of these optional classes. They work with almost all components and layout parts: sidebar, panels, tables, text, buttons, controls, forms etc. That means you can easily change any background, text and border color of almost any element on-the-fly just by adding one of the classes listed below.
								</div>

								<div class="table-responsive content-group">
									<table class="table">
										<tr>
											<td>Background color:</td>
											<td><code>.bg-danger-800</code></td>
										</tr>
										<tr>
											<td>Border color:</td>
											<td><code>.border-danger-800</code></td>
										</tr>
										<tr>
											<td>Border top color:</td>
											<td><code>.border-top-danger-800</code></td>
										</tr>
										<tr>
											<td>Border bottom color:</td>
											<td><code>.border-bottom-danger-800</code></td>
										</tr>
										<tr>
											<td>Border left color:</td>
											<td><code>.border-left-danger-800</code></td>
										</tr>
										<tr>
											<td>Text color:</td>
											<td><code>.text-danger-800</code></td>
										</tr>
									</table>
								</div>

								<div class="modal-footer">
									<button type="button" class="btn btn-link btn-xs text-uppercase text-semibold" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
					<!-- /danger 800 -->


		            <!-- Danger 700 -->
					<div id="danger_700" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h5 class="modal-title">Available options</h5>
								</div>

								<div class="modal-body">
									For a quick usage of different color, you can use one of these optional classes. They work with almost all components and layout parts: sidebar, panels, tables, text, buttons, controls, forms etc. That means you can easily change any background, text and border color of almost any element on-the-fly just by adding one of the classes listed below.
								</div>

								<div class="table-responsive content-group">
									<table class="table">
										<tr>
											<td>Background color:</td>
											<td><code>.bg-danger-700</code></td>
										</tr>
										<tr>
											<td>Border color:</td>
											<td><code>.border-danger-700</code></td>
										</tr>
										<tr>
											<td>Border top color:</td>
											<td><code>.border-top-danger-700</code></td>
										</tr>
										<tr>
											<td>Border bottom color:</td>
											<td><code>.border-bottom-danger-700</code></td>
										</tr>
										<tr>
											<td>Border left color:</td>
											<td><code>.border-left-danger-700</code></td>
										</tr>
										<tr>
											<td>Text color:</td>
											<td><code>.text-danger-700</code></td>
										</tr>
									</table>
								</div>

								<div class="modal-footer">
									<button type="button" class="btn btn-link btn-xs text-uppercase text-semibold" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
					<!-- /danger 700 -->


		            <!-- Danger 600 -->
					<div id="danger_600" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h5 class="modal-title">Available options</h5>
								</div>

								<div class="modal-body">
									For a quick usage of different color, you can use one of these optional classes. They work with almost all components and layout parts: sidebar, panels, tables, text, buttons, controls, forms etc. That means you can easily change any background, text and border color of almost any element on-the-fly just by adding one of the classes listed below.
								</div>

								<div class="table-responsive content-group">
									<table class="table">
										<tr>
											<td>Background color:</td>
											<td><code>.bg-danger-600</code></td>
										</tr>
										<tr>
											<td>Border color:</td>
											<td><code>.border-danger-600</code></td>
										</tr>
										<tr>
											<td>Border top color:</td>
											<td><code>.border-top-danger-600</code></td>
										</tr>
										<tr>
											<td>Border bottom color:</td>
											<td><code>.border-bottom-danger-600</code></td>
										</tr>
										<tr>
											<td>Border left color:</td>
											<td><code>.border-left-danger-600</code></td>
										</tr>
										<tr>
											<td>Text color:</td>
											<td><code>.text-danger-600</code></td>
										</tr>
									</table>
								</div>

								<div class="modal-footer">
									<button type="button" class="btn btn-link btn-xs text-uppercase text-semibold" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
					<!-- /danger 600 -->


		            <!-- Danger 500 -->
					<div id="danger_500" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h5 class="modal-title">Available options</h5>
								</div>

								<div class="modal-body">
									For a quick usage of different color, you can use one of these optional classes. They work with almost all components and layout parts: sidebar, panels, tables, text, buttons, controls, forms etc. That means you can easily change any background, text and border color of almost any element on-the-fly just by adding one of the classes listed below.
								</div>

								<div class="table-responsive content-group">
									<table class="table">
										<tr>
											<td>Background color:</td>
											<td><code>.bg-danger</code></td>
										</tr>
										<tr>
											<td>Border color:</td>
											<td><code>.border-danger</code></td>
										</tr>
										<tr>
											<td>Border top color:</td>
											<td><code>.border-top-danger</code></td>
										</tr>
										<tr>
											<td>Border bottom color:</td>
											<td><code>.border-bottom-danger</code></td>
										</tr>
										<tr>
											<td>Border left color:</td>
											<td><code>.border-left-danger</code></td>
										</tr>
										<tr>
											<td>Text color:</td>
											<td><code>.text-danger</code></td>
										</tr>
										<tr>
											<td>Alpha color:</td>
											<td><code>.alpha-danger</code></td>
										</tr>
									</table>
								</div>

								<div class="modal-footer">
									<button type="button" class="btn btn-link btn-xs text-uppercase text-semibold" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
					<!-- /danger 500 -->


		            <!-- Danger 400 -->
					<div id="danger_400" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h5 class="modal-title">Available options</h5>
								</div>

								<div class="modal-body">
									For a quick usage of different color, you can use one of these optional classes. They work with almost all components and layout parts: sidebar, panels, tables, text, buttons, controls, forms etc. That means you can easily change any background, text and border color of almost any element on-the-fly just by adding one of the classes listed below.
								</div>

								<div class="table-responsive content-group">
									<table class="table">
										<tr>
											<td>Background color:</td>
											<td><code>.bg-danger-400</code></td>
										</tr>
										<tr>
											<td>Border color:</td>
											<td><code>.border-danger-400</code></td>
										</tr>
										<tr>
											<td>Border top color:</td>
											<td><code>.border-top-danger-400</code></td>
										</tr>
										<tr>
											<td>Border bottom color:</td>
											<td><code>.border-bottom-danger-400</code></td>
										</tr>
										<tr>
											<td>Border left color:</td>
											<td><code>.border-left-danger-400</code></td>
										</tr>
										<tr>
											<td>Text color:</td>
											<td><code>.text-danger-400</code></td>
										</tr>
									</table>
								</div>

								<div class="modal-footer">
									<button type="button" class="btn btn-link btn-xs text-uppercase text-semibold" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
					<!-- /danger 400 -->


		            <!-- Danger 300 -->
					<div id="danger_300" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h5 class="modal-title">Available options</h5>
								</div>

								<div class="modal-body">
									For a quick usage of different color, you can use one of these optional classes. They work with almost all components and layout parts: sidebar, panels, tables, text, buttons, controls, forms etc. That means you can easily change any background, text and border color of almost any element on-the-fly just by adding one of the classes listed below.
								</div>

								<div class="table-responsive content-group">
									<table class="table">
										<tr>
											<td>Background color:</td>
											<td><code>.bg-danger-300</code></td>
										</tr>
										<tr>
											<td>Border color:</td>
											<td><code>.border-danger-300</code></td>
										</tr>
										<tr>
											<td>Border top color:</td>
											<td><code>.border-top-danger-300</code></td>
										</tr>
										<tr>
											<td>Border bottom color:</td>
											<td><code>.border-bottom-danger-300</code></td>
										</tr>
										<tr>
											<td>Border left color:</td>
											<td><code>.border-left-danger-300</code></td>
										</tr>
										<tr>
											<td>Text color:</td>
											<td><code>.text-danger-300</code></td>
										</tr>
									</table>
								</div>

								<div class="modal-footer">
									<button type="button" class="btn btn-link btn-xs text-uppercase text-semibold" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
					<!-- /danger 300 -->

					
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
