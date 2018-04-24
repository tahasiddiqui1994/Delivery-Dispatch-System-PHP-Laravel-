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
	<script type="text/javascript" src="{{url('assets/js/core/libraries/jquery_ui/widgets.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/core/libraries/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/loaders/blockui.min.js')}}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="{{url('assets/js/plugins/visualization/d3/d3.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/uploaders/dropzone.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/forms/selects/select2.min.js')}}"></script>

	<script type="text/javascript" src="{{url('assets/js/core/app.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/pages/general_widgets_content.js')}}"></script>
	<!-- /theme JS files -->

</head>

<body class="sidebar-xs">

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
										<li><a href="picker_period">Period picker</a></li>
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
										<li class="active"><a href="general_widgets_content">Content widgets</a></li>
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
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">General Pages</span> - Content Widgets</h4>
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
							<li><a href="general_widgets_content">General pages</a></li>
							<li class="active">Content widgets</li>
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

					<!-- Widgets list -->
					<div class="row">
						<div class="col-sm-6 col-lg-3">

							<!-- User details (with sample pattern) -->
							<div class="content-group">
								<div class="panel-body bg-blue border-radius-top text-center" style="background-image: url(http://demo.interface.club/limitless/assets/images/bg.png); background-size: contain;">
									<div class="content-group-sm">
										<h5 class="text-semibold no-margin-bottom">
											Victoria Davidson
										</h5>

										<span class="display-block">Head of UX</span>
									</div>

									<a href="#" class="display-inline-block content-group-sm">
										<img src="assets/images/placeholder.jpg" class="img-circle img-responsive" alt="" style="width: 120px; height: 120px;">
									</a>

									<ul class="list-inline no-margin-bottom">
										<li><a href="#" class="btn bg-blue-700 btn-rounded btn-icon"><i class="icon-phone"></i></a></li>
										<li><a href="#" class="btn bg-blue-700 btn-rounded btn-icon"><i class="icon-bubbles4"></i></a></li>
										<li><a href="#" class="btn bg-blue-700 btn-rounded btn-icon"><i class="icon-envelop4"></i></a></li>
									</ul>
								</div>

								<div class="panel panel-body no-border-top no-border-radius-top">
									<div class="form-group mt-5">
										<label class="text-semibold">Full name:</label>
										<span class="pull-right-sm">Victoria Anna Davidson</span>
									</div>

									<div class="form-group">
										<label class="text-semibold">Phone number:</label>
										<span class="pull-right-sm">+3630 8911837</span>
									</div>

									<div class="form-group">
										<label class="text-semibold">Corporate Email:</label>
										<span class="pull-right-sm"><a href="#">corporate@domain.com</a></span>
									</div>

									<div class="form-group no-margin-bottom">
										<label class="text-semibold">Personal Email:</label>
										<span class="pull-right-sm"><a href="#">personal@domain.com</a></span>
									</div>
								</div>
							</div>
							<!-- /user details (with sample pattern) -->


							<!-- My messages -->
							<div class="panel panel-flat">

								<!-- Panel heading -->
								<div class="panel-heading">
									<h6 class="panel-title">Today's stats</h6>

									<div class="heading-elements">
										<a href="#" class="heading-text">See all &rarr;</a>
				                	</div>
								</div>
								<!-- /panel heading -->


								<!-- Area chart -->
								<div id="messages-stats"></div>
								<!-- /area chart -->


								<!-- Tabs nav -->
			                	<ul class="nav nav-tabs nav-justified no-margin no-border-radius bg-teal-400 border-top border-top-teal-300">
									<li class="active">
										<a href="#today" class="text-size-small text-uppercase text-semibold" data-toggle="tab">
											Today
										</a>
									</li>

									<li>
										<a href="#yesterday" class="text-size-small text-uppercase text-semibold" data-toggle="tab">
											Yesterday
										</a>
									</li>
								</ul>
								<!-- /tabs nav -->


								<!-- Tabs content -->
								<div class="tab-content panel-body">
									<div class="tab-pane active fade in" id="today">
										<ul class="media-list">
											<li class="media">
												<div class="media-left">
													<img src="assets/images/placeholder.jpg" class="img-circle img-xs" alt="">
													<span class="badge bg-danger-400 media-badge">8</span>
												</div>

												<div class="media-body">
													<a href="#">
														James Alexander
														<span class="media-annotation pull-right">14:58</span>
													</a>

													<span class="display-block text-muted">The constitutionally inventoried precariously...</span>
												</div>
											</li>

											<li class="media">
												<div class="media-left">
													<img src="assets/images/placeholder.jpg" class="img-circle img-xs" alt="">
													<span class="badge bg-danger-400 media-badge">6</span>
												</div>

												<div class="media-body">
													<a href="#">
														Margo Baker
														<span class="media-annotation pull-right">12:16</span>
													</a>

													<span class="display-block text-muted">Pinched a well more moral chose goodness...</span>
												</div>
											</li>

											<li class="media">
												<div class="media-left">
													<img src="assets/images/placeholder.jpg" class="img-circle img-xs" alt="">
												</div>

												<div class="media-body">
													<a href="#">
														Jeremy Victorino
														<span class="media-annotation pull-right">09:48</span>
													</a>

													<span class="display-block text-muted">Pert thickly mischievous clung frowned well...</span>
												</div>
											</li>

											<li class="media">
												<div class="media-left">
													<img src="assets/images/placeholder.jpg" class="img-circle img-xs" alt="">
												</div>

												<div class="media-body">
													<a href="#">
														Beatrix Diaz
														<span class="media-annotation pull-right">05:54</span>
													</a>

													<span class="display-block text-muted">Nightingale taped hello bucolic fussily cardinal...</span>
												</div>
											</li>
										</ul>
									</div>

									<div class="tab-pane fade" id="yesterday">
										<ul class="media-list">
											<li class="media">
												<div class="media-left">
													<img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
												</div>

												<div class="media-body">
													<a href="#">
														Isak Temes
														<span class="media-annotation pull-right">Tue, 19:58</span>
													</a>

													<span class="display-block text-muted">Reasonable palpably rankly expressly grimy...</span>
												</div>
											</li>

											<li class="media">
												<div class="media-left">
													<img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
												</div>

												<div class="media-body">
													<a href="#">
														Vittorio Cosgrove
														<span class="media-annotation pull-right">Tue, 16:35</span>
													</a>

													<span class="display-block text-muted">Arguably therefore more unexplainable fumed...</span>
												</div>
											</li>

											<li class="media">
												<div class="media-left">
													<img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
												</div>

												<div class="media-body">
													<a href="#">
														Hilary Talaugon
														<span class="media-annotation pull-right">Tue, 12:16</span>
													</a>

													<span class="display-block text-muted">Nicely unlike porpoise a kookaburra past more...</span>
												</div>
											</li>

											<li class="media">
												<div class="media-left">
													<img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
												</div>

												<div class="media-body">
													<a href="#">
														Bobbie Seber
														<span class="media-annotation pull-right">Tue, 09:20</span>
													</a>

													<span class="display-block text-muted">Before visual vigilantly fortuitous tortoise...</span>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<!-- /tabs content -->

							</div>
							<!-- /my messages -->


							<!-- Course widget -->
							<div class="thumbnail">
								<div class="thumb">
									<img src="assets/images/placeholder.jpg" alt="">
									<div class="caption-overflow">
										<span>
											<a href="#" class="btn btn-flat border-white text-white">Details</a>
											<a href="#" class="btn btn-flat border-white text-white">Subscribe</a>
										</span>
									</div>
								</div>

								<div class="caption">
									<div class="content-group-sm media">
										<div class="media-body">
											<h6 class="text-semibold no-margin">
												<a href="#" class="text-default">Data Governance</a>
											</h6>

											<small class="text-muted">by <a href="#">Eugene Kopyov</a></small>
										</div>

										<h6 class="text-success media-right no-margin-bottom text-semibold">$49.99</h6>
									</div>

									Way extensive and dejection get delivered deficient sincerity gentleman age. Calling offence six joy feeling <a href="#">[...]</a>
								</div>

								<div class="panel-footer panel-footer-transparent">
									<div class="heading-elements">
										<ul class="list-inline list-inline-separate heading-text">
											<li><i class="icon-comment position-left"></i> 384</li>
										</ul>
										
										<span class="heading-text pull-right">
											<i class="icon-star-full2 text-size-base text-warning-300"></i>
											<i class="icon-star-full2 text-size-base text-warning-300"></i>
											<i class="icon-star-full2 text-size-base text-warning-300"></i>
											<i class="icon-star-full2 text-size-base text-warning-300"></i>
											<i class="icon-star-full2 text-size-base text-warning-300"></i>
											<span class="text-muted position-right">(49)</span>
										</span>
									</div>
								</div>
							</div>
							<!-- /course widget -->


							<!-- List of latest updates -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Latest updates</h6>

									<div class="heading-elements">
										<a href="#" class="heading-text">See all &rarr;</a>
				                	</div>
								</div>

								<div class="panel-body">
									<ul class="media-list">
										<li class="media">
											<div class="media-left">
												<a href="#" class="btn border-primary text-primary btn-flat btn-icon btn-rounded btn-sm">
													<i class="icon-spinner11"></i>
												</a>
											</div>

											<div class="media-body">
												<a href="#">David Linner</a> requested refund for a double card charge
												<div class="media-annotation">12 minutes ago</div>
											</div>
										</li>

										<li class="media">
											<div class="media-left">
												<a href="#" class="btn border-danger text-danger btn-flat btn-icon btn-rounded btn-sm">
													<i class="icon-infinite"></i>
												</a>
											</div>

											<div class="media-body">
												User <a href="#">Christopher Wallace</a> is awaiting for staff reply
												<div class="media-annotation">16 minutes ago</div>
											</div>
										</li>

										<li class="media">
											<div class="media-left">
												<a href="#" class="btn border-slate text-slate btn-flat btn-icon btn-rounded btn-sm">
													<i class="icon-cash3"></i>
												</a>
											</div>

											<div class="media-body">
												All sellers have received monthly payouts
												<div class="media-annotation">4 hours ago</div>
											</div>
										</li>

										<li class="media">
											<div class="media-left">
												<a href="#" class="btn border-success text-success btn-flat btn-icon btn-rounded btn-sm">
													<i class="icon-checkmark3"></i>
												</a>
											</div>
											
											<div class="media-body">
												Ticket #43683 has been closed by <a href="#">Victoria Wilson</a> 
												<div class="media-annotation">Apr 28, 21:39</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- /list of latest updates -->


							<!-- Thumbnail with image and button -->
							<div class="thumbnail">
								<div class="thumb">
									<img src="assets/images/placeholder.jpg" alt="">

									<div class="caption-overflow">
										<span>
											<a href="#" class="btn btn-info">View profile</a>
										</span>
									</div>
								</div>

								<div class="caption text-center">
									<h5 class="text-semibold no-margin">Monica Richardson</h5>
									<p class="text-muted mb-15 mt-5">In on my jointure horrible margaret suitable he followed speedily</p>

									<a href="#" class="btn bg-indigo-400">Find out more <i class="icon-arrow-right14 position-right"></i></a>
								</div>
							</div>
							<!-- /thumbnail with image and button -->


							<!-- Messages widget -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Messages</h6>

									<div class="heading-elements">
										<ul class="icons-list">
											<li><a href="#"><i class="icon-cog3"></i></a></li>
										</ul>
				                	</div>
								</div>

								<ul class="media-list panel-body">
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

											<span class="text-muted">Who knows, maybe that would be the best thing for me...</span>
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
										<div class="media-left">
											<img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
										</div>

										<div class="media-body">
											<a href="#" class="media-heading">
												<span class="text-semibold">Jeremy Victorino</span>
												<span class="media-annotation pull-right">22:48</span>
											</a>

											<span class="text-muted">But that would be extremely strained and suspicious...</span>
										</div>
									</li>

									<li class="media">
										<div class="media-left">
											<img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
										</div>

										<div class="media-body">
											<a href="#" class="media-heading">
												<span class="text-semibold">Beatrix Diaz</span>
												<span class="media-annotation pull-right">Tue</span>
											</a>

											<span class="text-muted">What a strenuous career it is that I've chosen...</span>
										</div>
									</li>
								</ul>
							</div>
							<!-- /messages widget -->


							<!-- Simple thumbnail with image -->
							<div class="thumbnail">
								<div class="thumb">
									<img src="assets/images/placeholder.jpg" alt="">

									<div class="caption-overflow">
										<span>
											<a href="#" class="btn btn-link btn-icon text-white">
												<i class="icon-circle-right2 icon-2x"></i>
											</a>
										</span>
									</div>
								</div>

								<div class="caption">
									Delivered is to ye belonging enjoyment preferred. Astonished and acceptance men two discretion...
								</div>
							</div>
							<!-- /simple thumbnail with image -->

						</div>

						<div class="col-sm-6 col-lg-3">

							<!-- Dropzone -->
							<div class="content-group">
								<form action="#" class="dropzone" id="dropzone_multiple"></form>
							</div>
							<!-- /dropzone -->


							<!-- Simple inline block with icon and button -->
							<div class="panel panel-body">
								<div class="media no-margin stack-media-on-mobile">
									<div class="media-left media-middle">
										<i class="icon-lifebuoy icon-3x text-muted no-edge-top"></i>
									</div>

									<div class="media-body">
										<h6 class="media-heading text-semibold">Got a question or request?</h6>
										<span class="text-muted">Contact us directly</span>
									</div>

									<div class="media-right media-middle">
										<a href="#" class="btn btn-primary">Contact</a>
									</div>
								</div>
							</div>
							<!-- /simple inline block with icon and button -->


							<!-- Support ticket widget -->
							<div class="panel">
								<div class="panel-body">
									<h6 class="text-semibold no-margin-top">
										<a href="#">Ticket #462 - Application design and development</a>
									</h6>

									The constitutionally inventoried precariously. Pinched a well more moral chose goodness...

									<ul class="list-inline list-inline-condensed no-margin-bottom mt-15">
										<li><a href="#"><img src="assets/images/placeholder.jpg" class="img-circle img-xs" alt=""></a></li>
										<li><a href="#"><img src="assets/images/placeholder.jpg" class="img-circle img-xs" alt=""></a></li>
										<li><a href="#"><img src="assets/images/placeholder.jpg" class="img-circle img-xs" alt=""></a></li>
										<li><span class="btn btn-xs btn-icon btn-flat btn-rounded border-grey text-grey"><i class="icon-plus22"></i></span></li>
									</ul>
								</div>

								<div class="panel-footer panel-footer-condensed">
									<div class="heading-elements not-collapsible">
										<span class="heading-text">
											<i class="icon-history position-left"></i>
											March, 10th
										</span>

										<span class="heading-text pull-right label label-danger">
											Pending
										</span>
									</div>
								</div>
							</div>
							<!-- /support ticket widget -->


							<!-- Thumbnail with social icons -->
							<div class="thumbnail">
								<div class="thumb">
									<img src="assets/images/placeholder.jpg" alt="">
									<div class="caption-overflow">
										<span>
											<a href="#" class="btn btn-info">View profile</a>
										</span>
									</div>
								</div>

								<div class="caption text-center">
									<h6 class="text-semibold no-margin">Monica Richardson</h6>
									<p class="text-muted mb-15 mt-5">In on my jointure horrible margaret suitable he followed speedily</p>

									<ul class="icons-list icons-list-extended">
				                		<li><a href="#" data-popup="tooltip" title="Dribbble"><i class="icon-dribbble3"></i></a></li>
				                		<li><a href="#" data-popup="tooltip" title="Github"><i class="icon-github"></i></a></li>
				                		<li><a href="#" data-popup="tooltip" title="Twitter"><i class="icon-twitter"></i></a></li>
									</ul>
								</div>
							</div>
							<!-- /thumbnail with social icons -->


							<!-- Share your thoughts -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Share your thoughts</h6>

									<div class="heading-elements">
										<ul class="icons-list">
					                    	<li class="dropdown">
						                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						                    		<i class="icon-arrow-down12"></i>
					                    		</a>

						                    	<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-popout"></i> Notifications</a></li>
													<li><a href="#"><i class="icon-embed"></i> Embed video</a></li>
													<li><a href="#"><i class="icon-pin-alt"></i> Show location</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-cog3"></i> Settings</a></li>
												</ul>
					                    	</li>
				                    	</ul>
									</div>
								</div>

								<div class="panel-body">
									<form action="#">
										<div class="form-group">
											<textarea name="enter-message" class="form-control mb-15" rows="3" cols="1" placeholder="What's on your mind?"></textarea>
										</div>

										<div class="row">
				                    		<div class="col-xs-6">
					                        	<ul class="icons-list icons-list-extended mt-10">
					                                <li><a href="#" data-popup="tooltip" data-container="body" title="Add photo"><i class="icon-images2"></i></a></li>
					                            	<li><a href="#" data-popup="tooltip" data-container="body" title="Add video"><i class="icon-film2"></i></a></li>
					                                <li><a href="#" data-popup="tooltip" data-container="body" title="Add event"><i class="icon-calendar2"></i></a></li>
					                            </ul>
				                    		</div>

				                    		<div class="col-xs-6 text-right">
					                            <button type="button" class="btn btn-primary btn-labeled btn-labeled-right">Share <b><i class="icon-circle-right2"></i></b></button>
				                    		</div>
				                    	</div>
			                    	</form>
		                    	</div>
							</div>
							<!-- /share your thoughts -->


							<!-- Inline user card -->
							<div class="panel panel-body">
								<div class="media">
									<div class="media-left">
										<a href="{{url('assets/images/placeholder.jpg">
											<img src="assets/images/placeholder.jpg" class="img-circle img-lg" alt="">
										</a>
									</div>

									<div class="media-body">
										<h6 class="media-heading">James Alexander</h6>
										<span class="text-muted">Lead developer</span>
									</div>

									<div class="media-right media-middle">
										<ul class="icons-list">
					                    	<li class="dropdown">
						                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						                    		<i class="icon-menu7"></i>
					                    		</a>

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
								</div>
							</div>
							<!-- /inline user card -->


							<!-- Icon and text -->
							<div class="panel panel-body">
								<div class="media">
									<div class="media-left">
										<a href="#">
											<i class="icon-file-play text-warning-400 icon-2x no-edge-top mt-5"></i>
										</a>
									</div>

									<div class="media-body">
										<h6 class="media-heading text-semibold"><a href="#" class="text-default">Ducked ravenously dear</a></h6>
										Reran sincere said monkey one slapped jeepers rubbed fleetly incongruously due yet llama
									</div>
								</div>
							</div>
							<!-- /icon and text -->


							<!-- My tasks -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">My Tasks</h6>

									<div class="heading-elements">
										<span class="label bg-indigo-400 heading-text">43 new</span>
									</div>
								</div>

								<div class="panel-body">
									<ul class="media-list content-group">
										<li class="media">
											<div class="media-left">
												<input type="checkbox" class="styled" checked="checked" id="task1">
											</div>

											<div class="media-body">
												<h6 class="media-heading">
													<label for="task1" class="no-margin text-semibold cursor-pointer">Resplendent much during</label>
												</h6>

												Urchin that understood yikes special ladybug that
											</div>
										</li>

										<li class="media">
											<div class="media-left">
												<input type="checkbox" class="styled" id="task2">
											</div>

											<div class="media-body">
												<h6 class="media-heading">
													<label for="task2" class="no-margin text-semibold cursor-pointer">Insect far hound</label>
												</h6>
												
												Hey where more that much meanly shivered salamander
											</div>
										</li>

										<li class="media">
											<div class="media-left">
												<input type="checkbox" class="styled" id="task3">
											</div>

											<div class="media-body">
												<h6 class="media-heading">
													<label for="task3" class="no-margin text-semibold cursor-pointer">The him father parish</label>
												</h6>

												Reran sincere said monkey one slapped jeepers
											</div>
										</li>

										<li class="media">
											<div class="media-body text-center">
												<a href="#" class="text-muted">View completed tasks (16)</a>
											</div>
										</li>
									</ul>

			                    	<textarea name="enter-message" class="form-control content-group" rows="1" cols="1" placeholder="New task..."></textarea>

			                    	<div class="row">
			                    		<div class="col-xs-6">
				                        	<ul class="icons-list icons-list-extended mt-10">
				                            	<li><a href="#"><i class="icon-mic2"></i></a></li>
				                                <li><a href="#"><i class="icon-file-picture"></i></a></li>
				                                <li><a href="#"><i class="icon-file-plus"></i></a></li>
				                            </ul>
			                    		</div>

			                    		<div class="col-xs-6 text-right">
				                            <button type="button" class="btn bg-pink-400">Create task</button>
			                    		</div>
			                    	</div>
								</div>
							</div>
							<!-- /my tasks -->


							<!-- Application status -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">App Status</h6>

									<div class="heading-elements">
										<div class="heading-text">
											<span class="status-mark border-success position-left"></span>
											Operational
										</div>
									</div>
								</div>

								<div class="panel-body">
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
							<!-- /application status -->


							<!-- Simple stats with thumbnail -->
							<div class="panel">
								<a href="#">
									<img src="assets/images/placeholder.jpg" class="img-responsive" alt="">
								</a>

								<div class="panel-body">
									<div class="row text-center">
										<div class="col-xs-4">
											<h5 class="text-semibold no-margin">2,345</h5>
											<span class="text-muted text-size-small">today</span>
										</div>

										<div class="col-xs-4">
											<h5 class="text-semibold no-margin">3,568</h5>
											<span class="text-muted text-size-small">this week</span>
										</div>

										<div class="col-xs-4">
											<h5 class="text-semibold no-margin">32,693</h5>
											<span class="text-muted text-size-small">overall</span>
										</div>
									</div>
								</div>
							</div>
							<!-- /simple stats with thumbnail -->


							<!-- Accordion widget -->
							<div class="panel-group content-group" id="menu-accordion">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h6 class="panel-title text-semibold">
											<a data-toggle="collapse" data-parent="#menu-accordion" href="#accordion1">Accordion Group Item #1</a>
										</h6>
									</div>

									<div id="accordion1" class="panel-collapse collapse in">
										<div class="panel-body">Ut consectetur ullamcorper purus a rutrum. Etiam dui nisi, hendrerit feugiat scelerisque et, cursus eu magna. </div>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading">
										<h6 class="panel-title text-semibold">
											<a data-toggle="collapse" data-parent="#menu-accordion" href="#accordion2">Accordion Group Item #2</a>
										</h6>
									</div>

									<div id="accordion2" class="panel-collapse collapse">
										<div class="panel-body">Nullam pretium fermentum sapien ut convallis. Suspendisse vehicula, magna non tristique tincidunt. </div>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading">
										<h6 class="panel-title text-semibold">
											<a data-toggle="collapse" data-parent="#menu-accordion" href="#accordion3">Accordion Group Item #3</a>
										</h6>
									</div>

									<div id="accordion3" class="panel-collapse collapse">
										<div class="panel-body">Praesent leo quam, faucibus at facilisis id, rhoncus sit amet metus. Sed vitae ipsum congue eget id augue. </div>
									</div>
								</div>
							</div>
							<!-- /accordion widget -->

						</div>

						<div class="col-sm-6 col-lg-3">

							<!-- Thumbnail with feed -->
							<div class="panel">
								<a href="#">
									<img src="assets/images/placeholder.jpg" class="img-responsive" alt="">
								</a>

								<div class="panel-body">
									<ul class="list-feed">
										<li class="border-warning-400">
											<div class="text-muted text-size-small mb-5">12 minutes ago</div>
											<a href="#">David Linner</a> requested refund for a double card charge 
										</li>

										<li class="border-warning-400">
											<div class="text-muted text-size-small mb-5">12 minutes ago</div>
											User <a href="#">Christopher Wallace</a> is awaiting for staff reply
										</li>

										<li class="border-warning-400">
											<div class="text-muted text-size-small mb-5">12 minutes ago</div>
											Ticket <strong>#43683</strong> has been closed by <a href="#">Victoria Wilson</a>
										</li>

										<li class="border-warning-400">
											<div class="text-muted text-size-small mb-5">12 minutes ago</div>
											All sellers have received payouts for December!
										</li>
									</ul>
								</div>
							</div>
							<!-- /thumbnail with feed -->


							<!-- Widget with rounded icon -->
							<div class="panel">
								<div class="panel-body text-center">
									<div class="icon-object border-success text-success"><i class="icon-book"></i></div>
									<h5 class="text-semibold">Knowledge Base</h5>
									<p class="mb-15">Ouch found swore much dear conductively hid submissively hatchet vexed far</p>
									<a href="#" class="btn bg-success-400">Browse articles</a>
								</div>
							</div>
							<!-- /widget with rounded icon -->


							<!-- Simple user card with social icons -->
							<div class="panel panel-body">
								<div class="media">
									<div class="media-left">
										<a href="{{url('assets/images/placeholder.jpg">
											<img src="assets/images/placeholder.jpg" style="width: 70px; height: 70px;" class="img-circle img-md" alt="">
										</a>
									</div>

									<div class="media-body">
										<h6 class="media-heading">Nathan Jacobson</h6>
										<p class="text-muted">Lead UX designer</p>

										<ul class="icons-list">
					                    	<li><a href="#" data-popup="tooltip" data-container="body" title="Google Drive"><i class="icon-google-drive"></i></a></li>
					                    	<li><a href="#" data-popup="tooltip" data-container="body" title="Twitter"><i class="icon-twitter"></i></a></li>
					                    	<li><a href="#" data-popup="tooltip" data-container="body" title="Github"><i class="icon-github"></i></a></li>
				                    	</ul>
									</div>
								</div>
							</div>
							<!-- /simple user card with social icons -->


							<!-- Widget with inline medium sized thumbnail -->
							<div class="panel panel-body">
								<ul class="media-list">
									<li class="media stack-media-on-mobile">
			        					<div class="media-left">
											<div class="thumb">
												<a href="#">
													<img src="assets/images/placeholder.jpg" class="img-responsive img-rounded media-preview" alt="">
													<span class="zoom-image"><i class="icon-play3"></i></span>
												</a>
											</div>
										</div>

			        					<div class="media-body">
											<h6 class="media-heading"><a href="#">Up unpacked friendly</a></h6>
				                    		<ul class="list-inline list-inline-separate text-muted mb-5">
				                    			<li><i class="icon-book-play position-left"></i> Video tutorials</li>
				                    		</ul>

											The him father parish looked has sooner. Attachment frequently son
										</div>
									</li>
								</ul>
							</div>
							<!-- /widget with inline medium sized thumbnail -->


							<!-- Subscription form -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Subscribe</h6>

									<div class="heading-elements">
										<form class="heading-form" action="#">
											<div class="form-group">
												<label class="checkbox-inline checkbox-right checkbox-switchery switchery-xs">
													<input type="checkbox" class="switchery" checked="checked">
													Auto updates
												</label>
											</div>
										</form>
									</div>
								</div>

								<form class="panel-body" action="#">
									<div class="form-group has-feedback">
										<input type="text" class="form-control" placeholder="Your email">
										<div class="form-control-feedback">
											<i class="icon-mention text-muted"></i>
										</div>
									</div>

									<div class="form-group">
										<select data-placeholder="Subscription plan" class="select">
											<option value="updates">Website updates</option>
											<option value="discounts">Discount offers</option>
											<option value="catalog">Catalog</option>
											<option value="prints">Prints</option>
											<option value="promo">Promotions</option>
										</select>
									</div>

									<div class="form-group">
										<textarea class="form-control" cols="3" rows="3" placeholder="Your message"></textarea>
									</div>

									<div class="row">
										<div class="col-xs-6">
											<div class="checkbox disabled">
												<label>
													<input type="checkbox" class="styled" checked="checked" disabled="disabled">
													Accept terms
												</label>
											</div>
										</div>

										<div class="col-xs-6 text-right">
											<button type="submit" class="btn btn-info">Subscribe</button>
										</div>
									</div>
								</form>
							</div>
							<!-- /subscription form -->


							<!-- Tabs widget -->
							<div class="tab-content-bordered content-group">
								<ul class="nav nav-tabs nav-tabs-highlight nav-lg nav-justified">
									<li class="active"><a href="#tab-desc" data-toggle="tab">Overview</a></li>
									<li><a href="#tab-spec" data-toggle="tab">Specs</a></li>
									<li><a href="#tab-shipping" data-toggle="tab">Shipping</a></li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane has-padding active" id="tab-desc">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>

									<div class="tab-pane has-padding" id="tab-spec">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane has-padding" id="tab-shipping">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>
								</div>
							</div>
							<!-- /tabs widget -->


							<!-- User card with thumb and social icons at the bottom -->
							<div class="panel">
								<div class="panel-body text-center">
									<a href="#" class="display-inline-block">
										<img src="assets/images/placeholder.jpg" class="img-circle img-responsive" alt="" style="width: 120px; height: 120px;">
									</a>

									<h6 class="text-semibold no-margin-bottom">
										<a href="#" class="text-default">Nathan Jacobson</a>
										<small class="display-block">Lead UX designer</small>
									</h6>
								</div>

						    	<div class="panel-footer text-center no-padding">
							    	<div class="row">
							    		<div class="col-xs-3">
							    			<a href="#" class="display-block p-10 text-default" data-popup="tooltip" data-placement="top" data-container="body" title="Google Drive"><i class="icon-google-drive"></i></a>
							    		</div>

							    		<div class="col-xs-3">
							    			<a href="#" class="display-block p-10 text-default" data-popup="tooltip" data-placement="top" data-container="body" title="Twitter"><i class="icon-twitter"></i></a>
							    		</div>

							    		<div class="col-xs-3">
							    			<a href="#" class="display-block p-10 text-default" data-popup="tooltip" data-placement="top" data-container="body" title="Github"><i class="icon-github"></i></a>
							    		</div>

							    		<div class="col-xs-3">
							    			<a href="#" class="display-block p-10 text-default" data-popup="tooltip" data-placement="top" data-container="body" title="Dribbble"><i class="icon-dribbble"></i></a>
							    		</div>
							    	</div>
								</div>
							</div>
							<!-- /user card with thumb and social icons at the bottom -->


							<!-- Thumbnail with linked title -->
							<div class="thumbnail">
								<div class="thumb">
									<img src="assets/images/placeholder.jpg" alt="">
									<div class="caption-overflow">
										<span>
											<a href="#" class="btn btn-link btn-icon text-white"><i class="icon-circle-right2 icon-2x"></i></a>
										</span>
									</div>
								</div>

								<div class="caption">
									<h6 class="no-margin-top">
										<a href="#">Eugene Kopyov</a>
									</h6>

									Delivered is to ye belonging enjoyment preferred. Astonished and acceptance men two discretion...
								</div>
							</div>
							<!-- /thumbnail with linked title -->


							<!-- List of files -->
							<div class="panel panel-white">
								<div class="panel-heading">
									<h6 class="text-semibold panel-title">
										<i class="icon-folder6 position-left"></i>
										Downloaded files
									</h6>

									<div class="heading-elements">
										<span class="heading-text text-muted">(93)</span>
									</div>
								</div>

								<div class="list-group no-border">
									<a href="#" class="list-group-item">
										<i class="icon-file-pdf"></i> Hello_exotic_staunch.pdf <span class="label bg-success-400">New</span>
									</a>

									<a href="#" class="list-group-item">
										<i class="icon-file-word"></i> That_well_ecstatically.docx
									</a>

									<a href="#" class="list-group-item">
										<i class="icon-file-excel"></i> Shared_coast_concurrent.csv <span class="label bg-slate">Draft</span>
									</a>

									<a href="#" class="list-group-item">
										<i class="icon-file-word"></i> Into_intrepid_belated.docx
									</a>

									<a href="#" class="list-group-item">
										<i class="icon-arrow-right22"></i> Show all files (93)
									</a>
								</div>
							</div>
							<!-- /list of files -->


							<!-- Simple card with a list and button -->
							<div class="panel">
								<div class="panel-body">
									<h5 class="content-group">
										<span class="label label-flat label-rounded label-icon border-grey text-grey mr-10">
											<i class="icon-statistics"></i>
										</span>

										<a href="#" class="text-default">
											Data Visualization
										</a>
									</h5>

									<p class="content-group">The constitutionally inventoried precariously. Pinched a well more moral chose goodness...</p>

									<ul class="list list-icons">
										<li>
											<i class="icon-checkmark-circle text-success position-left"></i>
											But that would be extremely strained
										</li>
										<li>
											<i class="icon-checkmark-circle text-success position-left"></i>
											Who knows, maybe that would be the best
										</li>
										<li>
											<i class="icon-checkmark-circle text-success position-left"></i>
											That was something he was unable to do
										</li>
										<li>
											<i class="icon-checkmark-circle text-success position-left"></i>
											Way extensive and dejection get delivered
										</li>
									</ul>
								</div>

								<hr class="no-margin">

								<div class="panel-body text-center alpha-grey">
									<a href="#" class="btn bg-pink-400">
										<i class="icon-bubbles8 position-left"></i>
										Request demo
									</a>
								</div>
							</div>
							<!-- /simple card with a list and button -->

						</div>

						<div class="col-sm-6 col-lg-3">

							<!-- Seamless button group -->
							<div class="content-group">
								<div class="row row-seamless btn-block-group">
									<div class="col-xs-6">
										<button type="button" class="btn btn-default btn-block btn-float btn-float-lg">
											<i class="icon-firefox text-warning-600"></i>
											<span>Firefox</span>
										</button>

										<button type="button" class="btn btn-default btn-block btn-float btn-float-lg">
											<i class="icon-chrome text-success-400"></i>
											<span>Google Chrome</span>
										</button>
									</div>

									<div class="col-xs-6">
										<button type="button" class="btn btn-default btn-block btn-float btn-float-lg">
											<i class="icon-IE text-blue"></i>
											<span>Internet Explorer</span>
										</button>

										<button type="button" class="btn btn-default btn-block btn-float btn-float-lg">
											<i class="icon-opera text-danger-400"></i>
											<span>Opera</span>
										</button>
									</div>
								</div>
							</div>
							<!-- /seamless button group -->


							<!-- Widget with centered text and colored icon -->
							<div class="panel">
								<div class="panel-body text-center">
									<div class="content-group mt-5">
										<i class="icon-css3 icon-3x text-warning"></i>
									</div>

									<h6 class="text-semibold"><a href="#" class="text-default">Knowledge Base</a></h6>

									<p class="mb-15">Inanimately alongside candidly much and jeez conductively hid submissively hatchet</p>

									<a href="#">Read more &rarr;</a>
								</div>
							</div>
							<!-- /widget with centered text and colored icon -->


							<!-- Colored info widget -->
							<div class="panel panel-body bg-pink-400" style="background-image: url(http://demo.interface.club/limitless/assets/images/bg.png);">
								<div class="media no-margin">
									<div class="media-left media-middle">
										<i class="icon-wave icon-2x"></i>
									</div>

									<div class="media-body text-right">
										<h6 class="media-heading text-semibold">Search Engine Optimization</h6>
										<span class="text-muted">Grow visibility in organic search results</span>
									</div>
								</div>
							</div>
							<!-- /colored info widget -->


							<!-- Chat widget -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Chatting with James</h6>
								</div>

								<div class="panel-body">
									<ul class="media-list chat-list content-group">
										<li class="media reversed">
											<div class="media-body">
												<div class="media-content">Satisfactorily strenuously while sleazily</div>
												<span class="media-annotation display-block mt-10">2 hours ago</span>
											</div>

											<div class="media-right">
												<a href="{{url('assets/images/placeholder.jpg">
													<img src="assets/images/placeholder.jpg" class="img-circle img-md" alt="">
												</a>
											</div>
										</li>

										<li class="media">
											<div class="media-left">
												<a href="{{url('assets/images/placeholder.jpg">
													<img src="assets/images/placeholder.jpg" class="img-circle img-md" alt="">
												</a>
											</div>

											<div class="media-body">
												<div class="media-content">Grunted smirked and grew.</div>
												<span class="media-annotation display-block mt-10">13 minutes ago</span>
											</div>
										</li>

										<li class="media reversed">
											<div class="media-body">
												<div class="media-content"><i class="icon-menu display-block"></i></div>
											</div>

											<div class="media-right">
												<a href="{{url('assets/images/placeholder.jpg">
													<img src="assets/images/placeholder.jpg" class="img-circle img-md" alt="">
												</a>
											</div>
										</li>
									</ul>

			                    	<textarea name="enter-message" class="form-control content-group" rows="3" cols="1" placeholder="Enter your message..."></textarea>

			                    	<div class="row">
			                    		<div class="col-xs-6">
				                        	<ul class="icons-list icons-list-extended mt-10">
				                                <li><a href="#" data-popup="tooltip" data-container="body" title="Send photo"><i class="icon-file-picture"></i></a></li>
				                            	<li><a href="#" data-popup="tooltip" data-container="body" title="Send video"><i class="icon-file-video"></i></a></li>
				                                <li><a href="#" data-popup="tooltip" data-container="body" title="Send file"><i class="icon-file-plus"></i></a></li>
				                            </ul>
			                    		</div>

			                    		<div class="col-xs-6 text-right">
				                            <button type="button" class="btn bg-teal-400 btn-labeled btn-labeled-right"><b><i class="icon-circle-right2"></i></b> Send</button>
			                    		</div>
			                    	</div>
								</div>
							</div>
							<!-- /chat widget -->


							<!-- Thumbnail with comments and form -->
							<div class="thumbnail">
								<div class="thumb">
									<img src="assets/images/placeholder.jpg" alt="">
									<div class="caption-overflow">
										<span>
											<a href="#" class="btn btn-link btn-icon text-white"><i class="icon-circle-right2 icon-2x"></i></a>
										</span>
									</div>
								</div>

								<div class="caption">
									<ul class="media-list content-group">
										<li class="media">
											<a href="#" class="media-left">
												<img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
											</a>

											<div class="media-body">
												<div class="media-heading text-semibold"><a href="#">Eugene Kopyov</a></div>
												Delivered is to ye belonging enjoyment preferred. Astonished and acceptance men...
											</div>
										</li>

										<li class="media">
											<a href="#" class="media-left">
												<img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
											</a>

											<div class="media-body">
												<div class="media-heading text-semibold"><a href="#">Amanda Baker</a></div>
												Delivered is to ye belonging enjoyment preferred. Astonished and acceptance men...
											</div>
										</li>
									</ul>

			                    	<textarea name="enter-message" class="form-control content-group" rows="2" cols="1" placeholder="Add comment"></textarea>

			                    	<div class="row">
			                    		<div class="col-xs-6">
				                        	<ul class="icons-list icons-list-extended mt-10">
				                            	<li><a href="#"><i class="icon-mic2"></i></a></li>
				                                <li><a href="#"><i class="icon-file-picture"></i></a></li>
				                                <li><a href="#"><i class="icon-file-plus"></i></a></li>
				                            </ul>
			                    		</div>

			                    		<div class="col-xs-6 text-right">
				                            <button type="button" class="btn bg-teal-400">Submit</button>
			                    		</div>
			                    	</div>
								</div>
							</div>
							<!-- /thumbnail with comments and form -->


							<!-- Upload file widget -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Upload image</h6>

									<div class="heading-elements">
										<ul class="icons-list">
											<li><a href="#"><i class="icon-gear"></i></a></li>
										</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<input type="file" class="file-styled">
									<span class="help-block no-margin-bottom">Accepted formats: gif, png, jpg</span>
								</div>
							</div>
							<!-- /upload widget -->


							<!-- Login form -->
							<div class="panel panel-body">
								<div class="text-center">
									<a href="#" class="display-inline-block">
										<img src="assets/images/placeholder.jpg" class="img-circle img-responsive" alt="" style="width: 100px; height: 100px;">
									</a>

									<h5 class="content-group">Login to your account <small class="display-block">Enter your credentials below</small></h5>
								</div>

								<form action="index">
									<div class="form-group has-feedback has-feedback-left">
										<input type="text" class="form-control" placeholder="Username">
										<div class="form-control-feedback">
											<i class="icon-user text-muted"></i>
										</div>
									</div>

									<div class="form-group has-feedback has-feedback-left">
										<input type="password" class="form-control" placeholder="Password">
										<div class="form-control-feedback">
											<i class="icon-lock2 text-muted"></i>
										</div>
									</div>

									<div class="form-group">
										<button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-right2 position-right"></i></button>
									</div>
								</form>

								<div class="text-center">
									<a href="login_password_recover">Forgot password?</a>
								</div>
							</div>
							<!-- /login form -->


							<!-- Simple info widget with icon -->
							<div class="panel panel-body">
								<div class="media no-margin">
									<div class="media-body">
										<h6 class="media-heading text-semibold">Mortgage and private loan</h6>
										<span class="text-muted">Standard rate is up to 4.5%</span>
									</div>

									<div class="media-right media-middle">
										<i class="icon-home2 icon-2x text-purple-300"></i>
									</div>
								</div>
							</div>
							<!-- /simplw info widget with icon -->


							<!-- Navigation widget -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Navigation</h6>

									<div class="heading-elements">
										<ul class="icons-list">
											<li><a href="#"><i class="icon-wrench3"></i></a></li>
										</ul>
				                	</div>
								</div>

								<div class="list-group no-border no-padding-top">
									<a href="#" class="list-group-item"><i class="icon-user"></i> My profile</a>
									<a href="#" class="list-group-item"><i class="icon-cash3"></i> Balance</a>
									<a href="#" class="list-group-item"><i class="icon-tree7"></i> <span class="badge bg-danger pull-right">29</span> Connections</a>
									<div class="list-group-divider"></div>
									<a href="#" class="list-group-item"><i class="icon-calendar3"></i> <span class="badge bg-teal-400 pull-right">48</span> Events</a>
									<a href="#" class="list-group-item"><i class="icon-cog3"></i> Account settings</a>
								</div>
							</div>
							<!-- /navigation widget -->


							<!-- Simple text stats with icons -->
							<div class="panel panel-body">
								<div class="row text-center">
									<div class="col-xs-4">
										<p><i class="icon-users2 icon-2x display-inline-block text-info"></i></p>
										<h5 class="text-semibold no-margin">2,345</h5>
										<span class="text-muted text-size-small">users</span>
									</div>

									<div class="col-xs-4">
										<p><i class="icon-point-up icon-2x display-inline-block text-warning"></i></p>
										<h5 class="text-semibold no-margin">3,568</h5>
										<span class="text-muted text-size-small">clicks</span>
									</div>

									<div class="col-xs-4">
										<p><i class="icon-cash3 icon-2x display-inline-block text-success"></i></p>
										<h5 class="text-semibold no-margin">$9,693</h5>
										<span class="text-muted text-size-small">revenue</span>
									</div>
								</div>
							</div>
							<!-- /simple text stats with icons -->


							<!-- Calendar widget -->
							<div class="panel has-scroll">
								<div class="datepicker no-border"></div>
							</div>
							<!-- /calendar widget -->

						</div>
					</div>
					<!-- /widgets list -->


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
