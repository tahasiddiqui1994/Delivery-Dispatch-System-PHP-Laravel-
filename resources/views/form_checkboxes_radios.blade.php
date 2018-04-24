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
	<script type="text/javascript" src="{{url('assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/forms/styling/switch.min.js')}}"></script>

	<script type="text/javascript" src="{{url('assets/js/core/app.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/pages/form_checkboxes_radios.js')}}"></script>
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
								<!-- /main -->

								<!-- Forms -->
								<li class="navigation-header"><span>Forms</span> <i class="icon-menu" title="Forms"></i></li>
								<li>
									<a href="#"><i class="icon-pencil3"></i> <span>Form components</span></a>
									<ul>
										<li><a href="form_inputs_basic">Basic inputs</a></li>
										<li class="active"><a href="form_checkboxes_radios">Checkboxes &amp; radios</a></li>
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
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Forms</span> - Checkboxes &amp; Radios</h4>
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
							<li><a href="form_checkboxes_radios">Forms</a></li>
							<li class="active">Checkboxes &amp; radios</li>
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

					<!-- Checkboxes -->
	            	<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Checkboxes</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

	                	<div class="panel-body">
            				<p class="content-group">The HTML input element <code>&lt;input type=checkbox></code> is an input element to enter an array of different values. The <code>value</code> attribute is used to define the value submitted by the checkbox. The <code>checked</code> attribute is used to indicate whether this item is selected. The <code>indeterminate</code> attribute is used to indicate that the checkbox is in an indeterminate state (on most platforms, this draws a horizontal line across the checkbox).</p>

            				<div class="row">
            					<div class="col-md-6">
									<div class="form-group">
										<label class="text-semibold">Left stacked default</label>
										<div class="checkbox">
											<label>
												<input type="checkbox" checked="checked">
												Checked default
											</label>
										</div>

										<div class="checkbox">
											<label>
												<input type="checkbox">
												Unchecked default
											</label>
										</div>

										<div class="checkbox disabled">
											<label>
												<input type="checkbox" checked="checked" disabled="disabled">
												Disabled default
											</label>
										</div>
									</div>

									<div class="form-group">
										<label class="display-block text-semibold">Left inline default</label>
										<label class="checkbox-inline">
											<input type="checkbox" checked="checked">
											Checked default
										</label>

										<label class="checkbox-inline">
											<input type="checkbox">
											Unchecked default
										</label>
									</div>

									<div class="form-group pt-15">
										<label class="display-block text-semibold">Left stacked styled</label>
										<div class="checkbox">
											<label>
												<input type="checkbox" class="styled" checked="checked">
												Checked styled
											</label>
										</div>

										<div class="checkbox">
											<label>
												<input type="checkbox" class="styled">
												Unchecked styled
											</label>
										</div>

										<div class="checkbox disabled">
											<label>
												<input type="checkbox" class="styled" disabled="disabled">
												Disabled styled
											</label>
										</div>
									</div>

									<div class="form-group">
										<label class="display-block text-semibold">Lef inline styled</label>
										<label class="checkbox-inline">
											<input type="checkbox" class="styled" checked="checked">
											Checked styled
										</label>

										<label class="checkbox-inline">
											<input type="checkbox" class="styled">
											Unchecked styled
										</label>
									</div>
            					</div>

            					<div class="col-md-6">
									<div class="form-group">
										<label class="text-semibold">Right stacked default</label>
										<div class="checkbox checkbox-right">
											<label>
												<input type="checkbox" checked="checked">
												Checked default
											</label>
										</div>

										<div class="checkbox checkbox-right">
											<label>
												<input type="checkbox">
												Unchecked default
											</label>
										</div>

										<div class="checkbox checkbox-right disabled">
											<label>
												<input type="checkbox" checked="checked" disabled="disabled">
												Disabled default
											</label>
										</div>
									</div>

									<div class="form-group">
										<label class="display-block text-semibold">Right inline default</label>
										<label class="checkbox-inline checkbox-right">
											<input type="checkbox" checked="checked">
											Checked default
										</label>

										<label class="checkbox-inline checkbox-right">
											<input type="checkbox">
											Unchecked default
										</label>
									</div>

									<div class="form-group pt-15">
										<label class="display-block text-semibold">Right stacked styled</label>

										<div class="checkbox checkbox-right">
											<label>
												<input type="checkbox" class="styled" checked="checked">
												Checked styled
											</label>
										</div>

										<div class="checkbox checkbox-right">
											<label>
												<input type="checkbox" class="styled">
												Unchecked styled
											</label>
										</div>

										<div class="checkbox checkbox-right disabled">
											<label>
												<input type="checkbox" class="styled" checked="checked" disabled="disabled">
												Disabled styled
											</label>
										</div>
									</div>

									<div class="form-group">
										<label class="display-block text-semibold">Right inline styled</label>
										<label class="checkbox-inline checkbox-right">
											<input type="checkbox" class="styled" checked="checked">
											Checked styled
										</label>

										<label class="checkbox-inline checkbox-right">
											<input type="checkbox" class="styled">
											Unchecked styled
										</label>
									</div>
            					</div>
        					</div>
    					</div>
					</div>
					<!-- /checkboxes -->


					<!-- Radio buttons -->
	            	<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Radio buttons</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

	                	<div class="panel-body">
            				<p class="content-group">Radio button is an element that can be turned on and off. Radio buttons are almost always grouped together in groups. Only one radio button within the same <code>radiogroup</code> may be selected at a time. The user can switch which radio button is turned on by selecting it with the mouse or keyboard. Other radio buttons in the same group are turned off. A label, specified with the <code>label</code> attribute may be added beside the radio button.</p>

            				<div class="row">
            					<div class="col-md-6">
									<div class="form-group">
										<label class="text-semibold">Left stacked default</label>
										<div class="radio">
											<label>
												<input type="radio" name="unstyled-radio-left" checked="checked">
												Selected default
											</label>
										</div>

										<div class="radio">
											<label>
												<input type="radio" name="unstyled-radio-left">
												Unselected default
											</label>
										</div>

										<div class="radio disabled">
											<label>
												<input type="radio" checked="checked" disabled="disabled">
												Disabled default
											</label>
										</div>
									</div>

									<div class="form-group">
										<label class="display-block text-semibold">Left inline default</label>
										<label class="radio-inline">
											<input type="radio" name="radio-unstyled-inline-left" checked="checked">
											Selected default
										</label>

										<label class="radio-inline">
											<input type="radio" name="radio-unstyled-inline-left">
											Unselected default
										</label>
									</div>

									<div class="form-group pt-15">
										<label class="text-semibold">Left stacked styled</label>
										<div class="radio">
											<label>
												<input type="radio" name="stacked-radio-left" class="styled" checked="checked">
												Selected styled
											</label>
										</div>

										<div class="radio">
											<label>
												<input type="radio" name="stacked-radio-left" class="styled">
												Unselected styled
											</label>
										</div>

										<div class="radio disabled">
											<label>
												<input type="radio" class="styled" disabled="disabled">
												Disabled styled
											</label>
										</div>
									</div>

									<div class="form-group">
										<label class="display-block text-semibold">Left inline styled</label>
										<label class="radio-inline">
											<input type="radio" name="radio-inline-left" class="styled" checked="checked">
											Selected styled
										</label>

										<label class="radio-inline">
											<input type="radio" name="radio-inline-left" class="styled">
											Unselected styled
										</label>
									</div>
            					</div>

            					<div class="col-md-6">
									<div class="form-group">
										<label class="text-semibold">Right stacked default</label>
										<div class="radio radio-right">
											<label>
												<input type="radio" name="unstyled-radio-right" checked="checked">
												Selected default
											</label>
										</div>

										<div class="radio radio-right">
											<label>
												<input type="radio" name="unstyled-radio-right">
												Unselected default
											</label>
										</div>

										<div class="radio radio-right disabled">
											<label>
												<input type="radio" checked="checked" disabled="disabled">
												Disabled default
											</label>
										</div>
									</div>

									<div class="form-group">
										<label class="display-block text-semibold">Right inline default</label>
										<label class="radio-inline radio-right">
											<input type="radio" name="radio-unstyled-inline-right" checked="checked">
											Selected default
										</label>

										<label class="radio-inline radio-right">
											<input type="radio" name="radio-unstyled-inline-right">
											Unselected default
										</label>
									</div>

									<div class="form-group pt-15">
										<label class="text-semibold">Right stacked styled</label>
										<div class="radio radio-right">
											<label>
												<input type="radio" name="stacked-radio-right" class="styled" checked="checked">
												Selected styled
											</label>
										</div>

										<div class="radio radio-right">
											<label>
												<input type="radio" name="stacked-radio-right" class="styled">
												Unselected styled
											</label>
										</div>

										<div class="radio radio-right disabled">
											<label>
												<input type="radio" class="styled" checked="checked" disabled="disabled">
												Disabled styled
											</label>
										</div>
									</div>

									<div class="form-group">
										<label class="display-block text-semibold">Right inline styled</label>
										<label class="radio-inline radio-right">
											<input type="radio" name="radio-inline-right" class="styled" checked="checked">
											Selected styled
										</label>

										<label class="radio-inline radio-right">
											<input type="radio" name="radio-inline-right" class="styled">
											Unselected styled
										</label>
									</div>
            					</div>
            				</div>
						</div>
					</div>
					<!-- /radio buttons -->


					<!-- Colors -->
	            	<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Color options</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

	                	<div class="panel-body">
            				<p class="content-group">Besides default color, both checkboxes and radio buttons support 5 additional contextual color classes and other custom colors from color system. Colors are adapted to use in different background colors of parent elements - dropdown menus, active list states, input group addons - all checkboxes and radios are white on dark backgrounds. To use, simply add <code>background</code> and <code>text</code> color classes to Uniform's <code>wrapperClass</code> options.</p>

	                		<div class="row">
		                		<div class="col-md-6">
									<div class="form-group">
										<label class="text-semibold">Checkboxes</label>
										<div class="row">
											<div class="col-md-6">
												<div class="checkbox">
													<label>
														<input type="checkbox" class="control-primary" checked="checked">
														Primary checkbox
													</label>
												</div>

												<div class="checkbox">
													<label>
														<input type="checkbox" class="control-danger" checked="checked">
														Danger checkbox
													</label>
												</div>

												<div class="checkbox">
													<label>
														<input type="checkbox" class="control-success" checked="checked">
														Success checkbox
													</label>
												</div>
											</div>

											<div class="col-md-6">
												<div class="checkbox">
													<label>
														<input type="checkbox" class="control-warning" checked="checked">
														Warning checkbox
													</label>
												</div>

												<div class="checkbox">
													<label>
														<input type="checkbox" class="control-info" checked="checked">
														Info checkbox
													</label>
												</div>

												<div class="checkbox">
													<label>
														<input type="checkbox" class="control-custom" checked="checked">
														Custom color
													</label>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label class="text-semibold">Radio buttons</label>
										<div class="row">
											<div class="col-md-6">
												<div class="radio">
													<label>
														<input type="radio" name="radio-styled-color" class="control-primary" checked="checked">
														Primary radio
													</label>
												</div>

												<div class="radio">
													<label>
														<input type="radio" name="radio-styled-color" class="control-danger">
														Danger radio
													</label>
												</div>

												<div class="radio">
													<label>
														<input type="radio" name="radio-styled-color" class="control-success">
														Success radio
													</label>
												</div>
											</div>

											<div class="col-md-6">
												<div class="radio">
													<label>
														<input type="radio" name="radio-styled-color" class="control-warning">
														Warning radio
													</label>
												</div>

												<div class="radio">
													<label>
														<input type="radio" name="radio-styled-color" class="control-info">
														Info radio
													</label>
												</div>

												<div class="radio">
													<label>
														<input type="radio" name="radio-styled-color" class="control-custom">
														Custom color
													</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
        				</div>
    				</div>
    				<!-- /colors -->


					<!-- Switchery toggles -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Switchery toggles</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<div class="row">
								<div class="col-md-6">
									<div class="content-group-lg">
										<h6 class="text-semibold">Default switchers</h6>
										<p class="content-group">You can add as many switches as you like, as long as their corresponding checkboxes have the same class. Select them and make new instance of the Switchery class for every of them.</p>

										<div class="checkbox checkbox-switchery">
											<label>
												<input type="checkbox" class="switchery" checked="checked">
												Checked switch
											</label>
										</div>

										<div class="checkbox checkbox-switchery">
											<label>
												<input type="checkbox" class="switchery">
												Unchecked switch
											</label>
										</div>

										<div class="checkbox checkbox-switchery disabled">
											<label>
												<input type="checkbox" class="switchery" checked="checked" disabled="disabled">
												Checked disabled
											</label>
										</div>

										<div class="checkbox checkbox-switchery disabled">
											<label>
												<input type="checkbox" class="switchery" disabled="disabled">
												Unchecked disabled
											</label>
										</div>
									</div>
								</div>

								<div class="col-md-6">
									<div class="content-group-lg">
										<h6 class="text-semibold">Switcher colors</h6>
										<p class="content-group">You can change the default color of the switch to fit your design perfectly. According to the color system, any of its color can be applied to the switchery. Custom colors are also supported.</p>

										<div class="checkbox checkbox-switchery">
											<label>
												<input type="checkbox" class="switchery-primary" checked="checked">
												Switch in <span class="text-semibold">primary</span> context
											</label>
										</div>

										<div class="checkbox checkbox-switchery">
											<label>
												<input type="checkbox" class="switchery-danger" checked="checked">
												Switch in <span class="text-semibold">danger</span> context
											</label>
										</div>

										<div class="checkbox checkbox-switchery">
											<label>
												<input type="checkbox" class="switchery-info" checked="checked">
												Switch in <span class="text-semibold">info</span> context
											</label>
										</div>

										<div class="checkbox checkbox-switchery">
											<label>
												<input type="checkbox" class="switchery-warning" checked="checked">
												Switch in <span class="text-semibold">warning</span> context
											</label>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="content-group-lg">
										<h6 class="text-semibold">Single label</h6>
										<p class="content-group">You can choose one of 4 main Switch sizes - large (29px height), default (25px height), small (21px height) and mini (17px height). Just add proper class to the <code>.checkbox</code> wrapper.</p>

										<div class="checkbox checkbox-switchery switchery-lg">
											<label>
												<input type="checkbox" class="switchery" checked="checked">
												Large size
											</label>
										</div>

										<div class="checkbox checkbox-switchery">
											<label>
												<input type="checkbox" class="switchery" checked="checked">
												Default size
											</label>
										</div>

										<div class="checkbox checkbox-switchery switchery-sm">
											<label>
												<input type="checkbox" class="switchery" checked="checked">
												Small size
											</label>
										</div>

										<div class="checkbox checkbox-switchery switchery-xs">
											<label>
												<input type="checkbox" class="switchery" checked="checked">
												Mini size
											</label>
										</div>
									</div>
								</div>

								<div class="col-md-6">
									<div class="content-group-lg">
										<h6 class="text-semibold">Multiple labels</h6>
										<p class="content-group">Switchery can be used with single label or with multiple labels. To use, add <code>.switchery-double</code> class to the container. All sizing options are available for this switchery type as well.</p>

										<div class="checkbox checkbox-switchery switchery-lg switchery-double">
											<label>
												Option 1
												<input type="checkbox" class="switchery" checked="checked">
												Option 2
											</label>
										</div>

										<div class="checkbox checkbox-switchery switchery-double">
											<label>
												Option 1
												<input type="checkbox" class="switchery" checked="checked">
												Option 2
											</label>
										</div>

										<div class="checkbox checkbox-switchery switchery-sm switchery-double">
											<label>
												Option 1
												<input type="checkbox" class="switchery" checked="checked">
												Option 2
											</label>
										</div>

										<div class="checkbox checkbox-switchery switchery-xs switchery-double">
											<label>
												Option 1
												<input type="checkbox" class="switchery" checked="checked">
												Option 2
											</label>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="content-group-lg">
										<h6 class="text-semibold">Right alignment</h6>
										<p class="content-group">Default switchery position is left. Use <code>.checkbox-right</code> class to change switchery position to right. This class sets correct side padding for label and changes main position.</p>

										<div class="checkbox checkbox-right checkbox-switchery">
											<label>
												<input type="checkbox" class="switchery" checked="checked">
												Checked switch
											</label>
										</div>

										<div class="checkbox checkbox-right checkbox-switchery">
											<label>
												<input type="checkbox" class="switchery">
												Unchecked switch
											</label>
										</div>

										<div class="checkbox checkbox-right checkbox-switchery disabled">
											<label>
												<input type="checkbox" class="switchery" checked="checked" disabled="disabled">
												Checked disabled
											</label>
										</div>

										<div class="checkbox checkbox-right checkbox-switchery disabled">
											<label>
												<input type="checkbox" class="switchery" disabled="disabled">
												Unchecked disabled
											</label>
										</div>
									</div>
								</div>

								<div class="col-md-6">
									<div class="content-group-lg">
										<h6 class="text-semibold">Sticked to the right</h6>
										<p class="content-group">Sometimes it's very useful to have switches on the right side of the container. Just add <code>.display-block</code> class to the <code>&lt;label></code> for the very right side switcher alignment.</p>

										<div class="checkbox checkbox-right checkbox-switchery">
											<label class="display-block">
												<input type="checkbox" class="switchery" checked="checked">
												Checked switch
											</label>
										</div>

										<div class="checkbox checkbox-right checkbox-switchery">
											<label class="display-block">
												<input type="checkbox" class="switchery">
												Unchecked switch
											</label>
										</div>

										<div class="checkbox checkbox-right checkbox-switchery disabled">
											<label class="display-block">
												<input type="checkbox" class="switchery" checked="checked" disabled="disabled">
												Checked disabled
											</label>
										</div>

										<div class="checkbox checkbox-right checkbox-switchery disabled">
											<label class="display-block">
												<input type="checkbox" class="switchery" disabled="disabled">
												Unchecked disabled
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /switchery toggles -->


					<!-- Bootstrap switch -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Bootstrap switch</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<div class="row">
								<div class="col-md-6">
									<div class="content-group">
										<h6 class="text-semibold">Switch states</h6>
										<p>By default Bootstrap Switch supports standard attributes for checkboxes such as <code>disabled</code>, <code>checked</code> and <code>readonly</code> or use <code>true</code> or <code>false</code> in plugin options.</p>

										<div class="row">
											<div class="col-md-6">
												<div class="checkbox checkbox-switch">
													<label>
														<input type="checkbox" class="switch" data-on-text="On" data-off-text="Off" checked="checked">
														Checked switch
													</label>
												</div>

												<div class="checkbox checkbox-switch">
													<label>
														<input type="checkbox" data-on-text="On" data-off-text="Off" class="switch" checked="checked" disabled="disabled">
														Checked disabled
													</label>
												</div>

												<div class="checkbox checkbox-switch">
													<label>
														<input type="checkbox" data-on-text="On" data-off-text="Off" class="switch" readonly="readonly" checked="checked">
														Checked readonly
													</label>
												</div>
											</div>

											<div class="col-md-6">
												<div class="checkbox checkbox-switch">
													<label>
														<input type="checkbox" data-on-text="On" data-off-text="Off" class="switch">
														Unchecked switch
													</label>
												</div>

												<div class="checkbox checkbox-switch">
													<label>
														<input type="checkbox" data-on-text="On" data-off-text="Off" class="switch" disabled="disabled">
														Unchecked disabled
													</label>
												</div>

												<div class="checkbox checkbox-switch">
													<label>
														<input type="checkbox" data-on-text="On" data-off-text="Off" class="switch" readonly="readonly">
														Unchecked readonly
													</label>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-6">
									<div class="content-group">
										<h6 class="text-semibold">Switch colors</h6>
										<p>You can change the default color of the switch by choosing one of 6 predefined classes and use them in <code>data-on-color</code> and <code>data-off-color</code> attributes.</p>

										<div class="row">
											<div class="col-sm-6">
												<div class="checkbox checkbox-switch">
													<label>
														<input type="checkbox" class="switch" data-on-text="On" data-off-text="Off" data-on-color="default" data-off-color="danger" checked="checked">
														Default color
													</label>
												</div>

												<div class="checkbox checkbox-switch">
													<label>
														<input type="checkbox" class="switch" data-on-text="On" data-off-text="Off" data-on-color="primary" data-off-color="default" checked="checked">
														Primary color
													</label>
												</div>

												<div class="checkbox checkbox-switch">
													<label>
														<input type="checkbox" class="switch" data-on-text="On" data-off-text="Off" data-on-color="danger" data-off-color="default" checked="checked">
														Danger color
													</label>
												</div>
											</div>

											<div class="col-sm-6">
												<div class="checkbox checkbox-switch">
													<label>
														<input type="checkbox" class="switch" data-on-text="On" data-off-text="Off" data-on-color="success" data-off-color="default" checked="checked">
														Success color
													</label>
												</div>

												<div class="checkbox checkbox-switch">
													<label>
														<input type="checkbox" class="switch" data-on-text="On" data-off-text="Off" data-on-color="warning" data-off-color="default" checked="checked">
														Warning color
													</label>
												</div>

												<div class="checkbox checkbox-switch">
													<label>
														<input type="checkbox" class="switch" data-on-text="On" data-off-text="Off" data-on-color="info" data-off-color="default" checked="checked">
														Info color
													</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="content-group">
										<h6 class="text-semibold">Switch sizes</h6>
										<p>Default height is equal to input field height, but you can also choose one of 4 available sizes (large, small and mini) by changing <code>data-size</code> attribute.</p>

										<div class="row">
											<div class="col-md-6">
												<div class="checkbox checkbox-switch">
													<label>
														<input type="checkbox" class="switch" data-on-text="On" data-off-text="Off" data-size="large" checked="checked">
														Large switch
													</label>
												</div>

												<div class="checkbox checkbox-switch">
													<label>
														<input type="checkbox" data-on-text="On" data-off-text="Off" class="switch" data-size="small" checked="checked">
														Small switch
													</label>
												</div>
											</div>

											<div class="col-md-6">
												<div class="checkbox checkbox-switch">
													<label>
														<input type="checkbox" data-on-text="On" data-off-text="Off" class="switch" checked="checked">
														Default switch
													</label>
												</div>

												<div class="checkbox checkbox-switch">
													<label>
														<input type="checkbox" data-on-text="On" data-off-text="Off" class="switch" data-size="mini" checked="checked">
														Mini switch
													</label>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-6">
									<div class="content-group">
										<h6 class="text-semibold">Label options</h6>
										<p>Labels support any text or icon via <code>data-on-text</code> and <code>data-off-text</code> attributes. If no custom text specified, switch will display default on/off text.</p>

										<div class="row">
											<div class="col-md-6">
												<div class="checkbox checkbox-switch">
													<label>
														<input type="checkbox" data-off-color="danger" data-on-text="Yes" data-off-text="No" class="switch" checked="checked">
														Default text
													</label>
												</div>

												<div class="checkbox checkbox-switch">
													<label>
														<input type="checkbox" data-on-color="warning" data-off-color="info" data-on-text="<i class='icon-link'></i>" data-off-text="<i class='icon-unlink'></i>" class="switch" checked="checked">
														Icons only
													</label>
												</div>
											</div>

											<div class="col-md-6">
												<div class="checkbox checkbox-switch">
													<label>
														<input type="checkbox" data-on-color="danger" data-off-color="primary" data-on-text="Enable" data-off-text="Disable" class="switch" checked="checked">
														Enable/Disable
													</label>
												</div>

												<div class="checkbox checkbox-switch">
													<label>
														<input type="checkbox" data-on-color="success" data-off-color="danger" data-on-text="Online" data-off-text="Offline" class="switch" checked="checked">
														Online/Offline
													</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /bootstrap switch -->


					<!-- Footer -->
					<div class="footer text-muted">
						&copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /content wrapper -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>
