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
	<link href="{{url('assets/css/extras/animate.min.css')}}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="{{url('assets/js/plugins/loaders/pace.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/core/libraries/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/core/libraries/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/loaders/blockui.min.js')}}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="{{url('assets/js/plugins/velocity/velocity.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/velocity/velocity.ui.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/buttons/spin.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/buttons/ladda.min.js')}}"></script>

	<script type="text/javascript" src="{{url('assets/js/core/app.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/pages/components_buttons.js')}}"></script>
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
										<li class="active"><a href="components_buttons">Buttons</a></li>
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
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Components</span> - Buttons</h4>
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
							<li><a href="components_buttons">Components</a></li>
							<li class="active">Buttons</li>
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

					<!-- Button layouts title -->
					<h6 class="content-group text-semibold">
						Button layouts
						<small class="display-block">Basic button layout options</small>
					</h6>
					<!-- /button layouts title -->


					<!-- Default button -->
					<div class="row">
						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Default button</h6>
								<p class="text-muted content-group-sm">Default light button example</p>

		                    	<button type="button" class="btn btn-default">Default button</button>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Default with icon</h6>
								<p class="text-muted content-group-sm">Available in both directions</p>

		                    	<button type="button" class="btn btn-default"><i class="icon-make-group position-left"></i> With icon</button>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Default with menu</h6>
								<p class="text-muted content-group-sm">Default button with dropdown</p>

								<div class="btn-group">
			                    	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></button>
			                    	<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#"><i class="icon-menu7"></i> Action</a></li>
										<li><a href="#"><i class="icon-screen-full"></i> Another action</a></li>
										<li><a href="#"><i class="icon-mail5"></i> One more action</a></li>
										<li class="divider"></li>
										<li><a href="#"><i class="icon-gear"></i> Separated line</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /default button -->


					<!-- Colored button -->
					<div class="row">
						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Colored button</h6>
								<p class="text-muted content-group-sm">Button with contextual colors</p>

		                    	<button type="button" class="btn btn-primary">Default button</button>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Colored with icon</h6>
								<p class="text-muted content-group-sm">Available in both directions</p>

		                    	<button type="button" class="btn btn-primary"><i class="icon-cog3 position-left"></i> With icon</button>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Colored with menu</h6>
								<p class="text-muted content-group-sm">Colored button with dropdown</p>

								<div class="btn-group">
			                    	<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></button>
			                    	<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#"><i class="icon-menu7"></i> Action</a></li>
										<li><a href="#"><i class="icon-screen-full"></i> Another action</a></li>
										<li><a href="#"><i class="icon-mail5"></i> One more action</a></li>
										<li class="divider"></li>
										<li><a href="#"><i class="icon-gear"></i> Separated line</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /colored button -->


					<!-- Rounded button -->
					<div class="row">
						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Rounded button</h6>
								<p class="text-muted content-group-sm">Works with all button types</p>

		                    	<button type="button" class="btn btn-danger btn-rounded">Rounded button</button>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Rounded with icon</h6>
								<p class="text-muted content-group-sm">Available in both directions</p>

		                    	<button type="button" class="btn btn-danger btn-rounded"><i class="icon-help position-left"></i> With icon</button>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Rounded with menu</h6>
								<p class="text-muted content-group-sm">Rounded button with dropdown</p>

								<div class="btn-group">
			                    	<button type="button" class="btn btn-danger btn-rounded dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></button>
			                    	<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#"><i class="icon-menu7"></i> Action</a></li>
										<li><a href="#"><i class="icon-screen-full"></i> Another action</a></li>
										<li><a href="#"><i class="icon-mail5"></i> One more action</a></li>
										<li class="divider"></li>
										<li><a href="#"><i class="icon-gear"></i> Separated line</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /rounded button -->


					<!-- Labeled button -->
					<div class="row">
						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Labeled button</h6>
								<p class="text-muted content-group-sm">Works with all button colors</p>

		                    	<button type="button" class="btn bg-teal-400 btn-labeled"><b><i class="icon-reading"></i></b> Labeled</button>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Rounded with label</h6>
								<p class="text-muted content-group-sm">Available in both directions</p>

		                    	<button type="button" class="btn bg-teal-400 btn-labeled btn-rounded"><b><i class="icon-reading"></i></b> Rounded</button>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Labeled with menu</h6>
								<p class="text-muted content-group-sm">Labeled button with dropdown</p>

								<div class="btn-group">
			                    	<button type="button" class="btn bg-teal-400 btn-labeled dropdown-toggle" data-toggle="dropdown"><b><i class="icon-reading"></i></b> Dropdown <span class="caret"></span></button>
			                    	<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#"><i class="icon-menu7"></i> Action</a></li>
										<li><a href="#"><i class="icon-screen-full"></i> Another action</a></li>
										<li><a href="#"><i class="icon-mail5"></i> One more action</a></li>
										<li class="divider"></li>
										<li><a href="#"><i class="icon-gear"></i> Separated line</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /labeled button -->


					<!-- Flat button -->
					<div class="row">
						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Flat button</h6>
								<p class="text-muted content-group-sm">Transparent background</p>

		                    	<button type="button" class="btn border-slate text-slate-800 btn-flat">Flat button</button>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Colored with icon</h6>
								<p class="text-muted content-group-sm">Available in both directions</p>

		                    	<button type="button" class="btn border-slate text-slate-800 btn-flat"><i class="icon-cog3 position-left"></i> With icon</button>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Colored with menu</h6>
								<p class="text-muted content-group-sm">Flat button with dropdown</p>

								<div class="btn-group">
			                    	<button type="button" class="btn border-slate text-slate-800 btn-flat dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></button>
			                    	<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#"><i class="icon-menu7"></i> Action</a></li>
										<li><a href="#"><i class="icon-screen-full"></i> Another action</a></li>
										<li><a href="#"><i class="icon-mail5"></i> One more action</a></li>
										<li class="divider"></li>
										<li><a href="#"><i class="icon-gear"></i> Separated line</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /flat button -->


					<!-- Linked button -->
					<div class="row">
						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Linked button</h6>
								<p class="text-muted content-group-sm">Transparent button example</p>

		                    	<button type="button" class="btn btn-link">Linked button</button>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Linked with icon</h6>
								<p class="text-muted content-group-sm">Available in both directions</p>

		                    	<button type="button" class="btn btn-link"><i class="icon-comment-discussion position-left"></i> With icon</button>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Linked with menu</h6>
								<p class="text-muted content-group-sm">Linked button with dropdown</p>

								<div class="btn-group">
			                    	<button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></button>
			                    	<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#"><i class="icon-menu7"></i> Action</a></li>
										<li><a href="#"><i class="icon-screen-full"></i> Another action</a></li>
										<li><a href="#"><i class="icon-mail5"></i> One more action</a></li>
										<li class="divider"></li>
										<li><a href="#"><i class="icon-gear"></i> Separated line</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /linked button -->


					<!-- Icon button -->
					<div class="row">
						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Single icon button</h6>
								<p class="text-muted content-group-sm">Button with a single icon only</p>

		                    	<button type="button" class="btn btn-primary btn-icon"><i class="icon-menu7"></i></button>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Rounded icon button</h6>
								<p class="text-muted content-group-sm">Works with <code>all</code> button types</p>

		                    	<button type="button" class="btn btn-primary btn-icon btn-rounded"><i class="icon-menu7"></i></button>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Icon with menu</h6>
								<p class="text-muted content-group-sm">Icon button with dropdown</p>

								<div class="btn-group">
			                    	<button type="button" class="btn btn-primary btn-icon dropdown-toggle" data-toggle="dropdown">
				                    	<i class="icon-menu7"></i> &nbsp;<span class="caret"></span>
			                    	</button>

			                    	<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#"><i class="icon-menu7"></i> Action</a></li>
										<li><a href="#"><i class="icon-screen-full"></i> Another action</a></li>
										<li><a href="#"><i class="icon-mail5"></i> One more action</a></li>
										<li class="divider"></li>
										<li><a href="#"><i class="icon-gear"></i> Separated line</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /icon button -->


					<!-- Flat icon button -->
					<div class="row">
						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Single icon button</h6>
								<p class="text-muted content-group-sm">Button with a single icon only</p>

		                    	<button type="button" class="btn border-warning text-warning-600 btn-flat btn-icon"><i class="icon-pin-alt"></i></button>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Rounded icon button</h6>
								<p class="text-muted content-group-sm">Works with <code>all</code> button types</p>

		                    	<button type="button" class="btn border-warning text-warning-600 btn-flat btn-icon btn-rounded"><i class="icon-pin-alt"></i></button>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Icon with menu</h6>
								<p class="text-muted content-group-sm">Icon button with dropdown</p>

								<div class="btn-group">
			                    	<button type="button" class="btn border-warning text-warning-600 btn-flat btn-icon dropdown-toggle" data-toggle="dropdown">
				                    	<i class="icon-pin-alt"></i> &nbsp;<span class="caret"></span>
			                    	</button>

			                    	<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#"><i class="icon-menu7"></i> Action</a></li>
										<li><a href="#"><i class="icon-screen-full"></i> Another action</a></li>
										<li><a href="#"><i class="icon-mail5"></i> One more action</a></li>
										<li class="divider"></li>
										<li><a href="#"><i class="icon-gear"></i> Separated line</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /flat icon button -->


					<!-- Floating buttons -->
					<div class="row">
						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Floating button</h6>
								<p class="text-muted content-group-sm">Floating action button example</p>

		                        <button type="button" class="btn btn-info btn-float"><i class="icon-search4"></i></button>
		                        <button type="button" class="btn btn-danger btn-float btn-float-lg"><i class="icon-air"></i></button>
		                        <button type="button" class="btn btn-info btn-float btn-loading" data-loading-text="<i class='icon-spinner4 spinner'></i>"><i class="icon-spinner4"></i></button>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Floating with text</h6>
								<p class="text-muted content-group-sm">Float buttons with text and icons</p>

		                        <button type="button" class="btn btn-info btn-float"><i class="icon-search4"></i> <span>Search</span></button>
		                        <button type="button" class="btn btn-danger btn-float btn-float-lg"><i class="icon-html52"></i> <span>Download</span></button>
		                        <button type="button" class="btn btn-info btn-float btn-loading" data-loading-text="<i class='icon-spinner4 spinner'></i> <span>Update</span>"><i class="icon-spinner4"></i> <span>Update</span></button>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Rounded float buttons</h6>
								<p class="text-muted content-group-sm">Rounded float buttons with icons</p>

		                        <button type="button" class="btn btn-info btn-float btn-rounded"><i class="icon-search4"></i></button>
		                        <button type="button" class="btn btn-danger btn-float btn-float-lg btn-rounded"><i class="icon-pin-alt"></i></button>
		                        <button type="button" class="btn btn-info btn-float btn-rounded btn-loading" data-loading-text="<i class='icon-spinner4 spinner'></i>"><i class="icon-spinner4"></i></button>
							</div>
						</div>
					</div>
					<!-- /floating buttons -->



					<!-- Button sizes and colors title -->
					<h6 class="content-group text-semibold">
						Button styling
						<small class="display-block">Predefined button colors and sizing</small>
					</h6>
					<!-- /button sizes and colors title -->


					<!-- Button sizes and colors -->
					<div class="row">
						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Available button styling</h6>
								<p class="text-muted content-group-sm">Button sizing and color presets</p>

		                    	<p><button type="button" class="btn btn-primary btn-xlg"><i class="icon-comment-discussion position-left"></i> Extra large size</button></p>
		                    	<p><button type="button" class="btn btn-danger btn-lg"><i class="icon-comment-discussion position-left"></i> Large size</button></p>
		                    	<p><button type="button" class="btn btn-success"><i class="icon-comment-discussion position-left"></i> Default size</button></p>
		                    	<p><button type="button" class="btn btn-warning btn-sm"><i class="icon-comment-discussion position-left"></i> Small size</button></p>
		                    	<p><button type="button" class="btn btn-info btn-xs"><i class="icon-comment-discussion position-left"></i> Mini size</button></p>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Labeled button styling</h6>
								<p class="text-muted content-group-sm">Available styling of <code>labeled</code> button</p>

		                    	<p><button type="button" class="btn btn-primary btn-labeled btn-xlg"><b><i class="icon-pin-alt"></i></b> Extra large size</button></p>
		                    	<p><button type="button" class="btn btn-danger btn-labeled btn-lg"><b><i class="icon-pin-alt"></i></b> Large size</button></p>
		                    	<p><button type="button" class="btn btn-success btn-labeled"><b><i class="icon-pin-alt"></i></b> Default size</button></p>
		                    	<p><button type="button" class="btn btn-warning btn-labeled btn-sm"><b><i class="icon-pin-alt"></i></b> Small size</button></p>
		                    	<p><button type="button" class="btn btn-info btn-labeled btn-xs"><b><i class="icon-pin-alt"></i></b> Mini size</button></p>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Rounded button styling</h6>
								<p class="text-muted content-group-sm">Available styling of <code>rounded</code> button</p>

		                    	<p><button type="button" class="btn btn-primary btn-rounded btn-xlg"><i class="icon-mention position-left"></i> Extra large size</button></p>
		                    	<p><button type="button" class="btn btn-danger btn-rounded btn-lg"><i class="icon-mention position-left"></i> Large size</button></p>
		                    	<p><button type="button" class="btn btn-success btn-rounded"><i class="icon-mention position-left"></i> Default size</button></p>
		                    	<p><button type="button" class="btn btn-warning btn-rounded btn-sm"><i class="icon-mention position-left"></i> Small size</button></p>
		                    	<p><button type="button" class="btn btn-info btn-rounded btn-xs"><i class="icon-mention position-left"></i> Mini size</button></p>
							</div>
						</div>
					</div>
					<!-- /button sizes and colors -->


					<!-- Button states -->
					<p class="text-size-small text-uppercase text-muted">Button states</p>
					<div class="row">
						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Default state</h6>
								<p class="text-muted content-group-sm">Default button state example</p>

		                    	<button type="button" class="btn btn-primary">Default state</button>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Active state</h6>
								<p class="text-muted content-group-sm">Active button state example</p>

		                    	<button type="button" class="btn btn-primary active">Active state</button>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Disabled state</h6>
								<p class="text-muted content-group-sm">Disabled button state example</p>

		                    	<button type="button" class="btn btn-primary disabled">Disabled state</button>
							</div>
						</div>
					</div>
					<!-- /button states -->


					<!-- Icon positions -->
					<p class="text-size-small text-uppercase text-muted">Icon positions</p>
					<div class="row">
						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Left icon position</h6>
								<p class="text-muted content-group-sm">Display icon on the left side</p>

		                    	<button type="button" class="btn bg-brown"><i class="icon-menu7 position-left"></i> Left position</button>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Right icon position</h6>
								<p class="text-muted content-group-sm">Display icon on the right side</p>

		                    	<button type="button" class="btn bg-brown">Right position <i class="icon-menu7 position-right"></i></button>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Right in dropdown</h6>
								<p class="text-muted content-group-sm">Additional option for right icon</p>

								<div class="btn-group">
			                    	<button type="button" class="btn bg-brown dropdown-toggle" data-toggle="dropdown">Dropdown <i class="icon-menu7 position-right"></i> <span class="caret"></span></button>
			                    	<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#"><i class="icon-menu7"></i> Action</a></li>
										<li><a href="#"><i class="icon-screen-full"></i> Another action</a></li>
										<li><a href="#"><i class="icon-mail5"></i> One more action</a></li>
										<li class="divider"></li>
										<li><a href="#"><i class="icon-gear"></i> Separated line</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /icon positions -->


					<!-- Label positions -->
					<div class="row">
						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Left label position</h6>
								<p class="text-muted content-group-sm">Display label on the left side</p>

		                    	<button type="button" class="btn btn-danger btn-labeled"><b><i class="icon-menu7"></i></b> Left position</button>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Right label position</h6>
								<p class="text-muted content-group-sm">Display label on the right side</p>

		                    	<button type="button" class="btn btn-danger btn-labeled btn-labeled-right"><b><i class="icon-menu7"></i></b> Right position</button>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Right in dropdown</h6>
								<p class="text-muted content-group-sm">Additional option for right label</p>

								<div class="btn-group">
			                    	<button type="button" class="btn btn-danger btn-labeled btn-labeled-right dropdown-toggle" data-toggle="dropdown"><b><i class="icon-menu7"></i></b> Dropdown <span class="caret"></span></button>
			                    	<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#"><i class="icon-menu7"></i> Action</a></li>
										<li><a href="#"><i class="icon-screen-full"></i> Another action</a></li>
										<li><a href="#"><i class="icon-mail5"></i> One more action</a></li>
										<li class="divider"></li>
										<li><a href="#"><i class="icon-gear"></i> Separated line</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /label positions -->


					<!-- Custom button colors -->
					<p class="text-size-small text-uppercase text-muted">Custom colors</p>
					<div class="row">
						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Custom brown color</h6>
								<p class="text-muted content-group-sm">Custom color from <a href="colors_brown">brown palette</a></p>

		                    	<button type="button" class="btn bg-brown">Custom brown color</button>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Custom pink color</h6>
								<p class="text-muted content-group-sm">Custom color from <a href="colors_pink">pink palette</a></p>

		                    	<button type="button" class="btn bg-pink">Custom pink color</button>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Custom teal color</h6>
								<p class="text-muted content-group-sm">Custom color from <a href="colors_teal">teal palette</a></p>

		                    	<button type="button" class="btn bg-teal">Custom teal color</button>
							</div>
						</div>
					</div>
					<!-- /custom button colors -->



					<!-- Button dropdowns title -->
					<h6 class="content-group text-semibold">
						Button dropdowns
						<small class="display-block">Dropdown menus attached to buttons</small>
					</h6>
					<!-- /button dropdowns title -->


					<!-- Dropdown menu animations -->
					<div class="row">
						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">jQuery Fade animation</h6>
								<p class="text-muted content-group-sm">Animate menu with fadeIn/fadeOut</p>

		                        <div class="btn-group btn-group-fade">
	                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Button dropdown <span class="caret"></span></button>
									<ul class="dropdown-menu">
										<li><a href="#"><i class="icon-menu7"></i> Action</a></li>
										<li><a href="#"><i class="icon-screen-full"></i> Another action</a></li>
										<li><a href="#"><i class="icon-mail5"></i> One more action</a></li>
										<li class="divider"></li>
										<li><a href="#"><i class="icon-gear"></i> Separated line</a></li>
									</ul>
	                            </div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Animate.css animation</h6>
								<p class="text-muted content-group-sm">Animate menu with <code>animate.css</code></p>

		                        <div class="btn-group btn-group-animated">
	                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Button dropdown <span class="caret"></span></button>
									<ul class="dropdown-menu">
										<li><a href="#"><i class="icon-menu7"></i> Action</a></li>
										<li><a href="#"><i class="icon-screen-full"></i> Another action</a></li>
										<li><a href="#"><i class="icon-mail5"></i> One more action</a></li>
										<li class="divider"></li>
										<li><a href="#"><i class="icon-gear"></i> Separated line</a></li>
									</ul>
	                            </div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Velocity animation</h6>
								<p class="text-muted content-group-sm">Animate menu with <code>Velocity.js</code></p>

		                        <div class="btn-group btn-group-velocity">
	                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Button dropdown <span class="caret"></span></button>
									<ul class="dropdown-menu">
										<li><a href="#"><i class="icon-menu7"></i> Action</a></li>
										<li><a href="#"><i class="icon-screen-full"></i> Another action</a></li>
										<li><a href="#"><i class="icon-mail5"></i> One more action</a></li>
										<li class="divider"></li>
										<li><a href="#"><i class="icon-gear"></i> Separated line</a></li>
									</ul>
	                            </div>
							</div>
						</div>
					</div>
					<!-- /dropdown menu animations -->


					<!-- Colored button menus -->
					<p class="text-size-small text-uppercase text-muted">Dropdown variations</p>
					<div class="row">
						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Button dropup</h6>
								<p class="text-muted content-group-sm">Basic button dropup example</p>

								<div class="btn-group dropup">
			                    	<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Dropup <span class="caret"></span></button>
			                    	<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#"><i class="icon-menu7"></i> Action</a></li>
										<li><a href="#"><i class="icon-screen-full"></i> Another action</a></li>
										<li><a href="#"><i class="icon-mail5"></i> One more action</a></li>
										<li class="divider"></li>
										<li><a href="#"><i class="icon-gear"></i> Separated line</a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Menu with icon</h6>
								<p class="text-muted content-group-sm">Dropdown button with icon</p>

								<div class="btn-group">
			                    	<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="icon-cog5 position-left"></i> Dropdown <span class="caret"></span></button>
			                    	<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#"><i class="icon-menu7"></i> Action</a></li>
										<li><a href="#"><i class="icon-screen-full"></i> Another action</a></li>
										<li><a href="#"><i class="icon-mail5"></i> One more action</a></li>
										<li class="divider"></li>
										<li><a href="#"><i class="icon-gear"></i> Separated line</a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Segmented button</h6>
								<p class="text-muted content-group-sm">Segmented button dropdown</p>

								<div class="btn-group">
									<button type="button" class="btn btn-primary"><i class="icon-cog5 position-left"></i> Segmented</button>
			                    	<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
			                    	<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#"><i class="icon-menu7"></i> Action</a></li>
										<li><a href="#"><i class="icon-screen-full"></i> Another action</a></li>
										<li><a href="#"><i class="icon-mail5"></i> One more action</a></li>
										<li class="divider"></li>
										<li><a href="#"><i class="icon-gear"></i> Separated line</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /colored button menus -->


					<!-- Rounded button menus -->
					<div class="row">
						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Rounded button dropup</h6>
								<p class="text-muted content-group-sm">Dropup attached to <code>rounded</code> button</p>

								<div class="btn-group dropup">
			                    	<button type="button" class="btn btn-danger btn-rounded dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></button>
			                    	<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#"><i class="icon-menu7"></i> Action</a></li>
										<li><a href="#"><i class="icon-screen-full"></i> Another action</a></li>
										<li><a href="#"><i class="icon-mail5"></i> One more action</a></li>
										<li class="divider"></li>
										<li><a href="#"><i class="icon-gear"></i> Separated line</a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Rounded button menu</h6>
								<p class="text-muted content-group-sm">Rouned button menu with icon</p>

								<div class="btn-group">
			                    	<button type="button" class="btn btn-danger btn-rounded dropdown-toggle" data-toggle="dropdown"><i class="icon-cog5 position-left"></i> Dropdown <span class="caret"></span></button>
			                    	<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#"><i class="icon-menu7"></i> Action</a></li>
										<li><a href="#"><i class="icon-screen-full"></i> Another action</a></li>
										<li><a href="#"><i class="icon-mail5"></i> One more action</a></li>
										<li class="divider"></li>
										<li><a href="#"><i class="icon-gear"></i> Separated line</a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Rounded segmented</h6>
								<p class="text-muted content-group-sm">Rounded button with segments</p>

								<div class="btn-group">
									<button type="button" class="btn btn-danger btn-rounded"><i class="icon-cog5 position-left"></i> Segmented</button>
			                    	<button type="button" class="btn btn-danger btn-rounded dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
			                    	<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#"><i class="icon-menu7"></i> Action</a></li>
										<li><a href="#"><i class="icon-screen-full"></i> Another action</a></li>
										<li><a href="#"><i class="icon-mail5"></i> One more action</a></li>
										<li class="divider"></li>
										<li><a href="#"><i class="icon-gear"></i> Separated line</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /rounded button menus -->


					<!-- Labeled button menus -->
					<div class="row">
						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Labeled button dropup</h6>
								<p class="text-muted content-group-sm">Dropup attached to <code>labeled</code> button</p>

								<div class="btn-group dropup">
			                    	<button type="button" class="btn bg-teal-400 btn-labeled dropdown-toggle" data-toggle="dropdown"><b><i class="icon-law"></i></b> Dropup <span class="caret"></span></button>
			                    	<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#"><i class="icon-menu7"></i> Action</a></li>
										<li><a href="#"><i class="icon-screen-full"></i> Another action</a></li>
										<li><a href="#"><i class="icon-mail5"></i> One more action</a></li>
										<li class="divider"></li>
										<li><a href="#"><i class="icon-gear"></i> Separated line</a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Labeled segment</h6>
								<p class="text-muted content-group-sm">Segmented labeled button</p>

								<div class="btn-group">
									<button type="button" class="btn bg-teal-400 btn-labeled"><b><i class="icon-law"></i></b> Segmented</button>
			                    	<button type="button" class="btn bg-teal-400 dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
			                    	<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#"><i class="icon-menu7"></i> Action</a></li>
										<li><a href="#"><i class="icon-screen-full"></i> Another action</a></li>
										<li><a href="#"><i class="icon-mail5"></i> One more action</a></li>
										<li class="divider"></li>
										<li><a href="#"><i class="icon-gear"></i> Separated line</a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Segmented dropup</h6>
								<p class="text-muted content-group-sm">Labeled button dropup</p>

								<div class="btn-group dropup">
									<button type="button" class="btn bg-teal-400 btn-labeled"><b><i class="icon-law"></i></b> Segmented</button>
			                    	<button type="button" class="btn bg-teal-400 dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
			                    	<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#"><i class="icon-menu7"></i> Action</a></li>
										<li><a href="#"><i class="icon-screen-full"></i> Another action</a></li>
										<li><a href="#"><i class="icon-mail5"></i> One more action</a></li>
										<li class="divider"></li>
										<li><a href="#"><i class="icon-gear"></i> Separated line</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /labeled button menus -->


					<!-- Icon button menus -->
					<div class="row">
						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Icon button dropup</h6>
								<p class="text-muted content-group-sm">Dropup attached to <code>icon</code> button</p>

								<div class="btn-group dropup">
			                    	<button type="button" class="btn bg-slate btn-icon dropdown-toggle" data-toggle="dropdown">
				                    	<i class="icon-grid-alt"></i>
				                    	<span class="caret"></span>
			                    	</button>

			                    	<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#"><i class="icon-menu7"></i> Action</a></li>
										<li><a href="#"><i class="icon-screen-full"></i> Another action</a></li>
										<li><a href="#"><i class="icon-mail5"></i> One more action</a></li>
										<li class="divider"></li>
										<li><a href="#"><i class="icon-gear"></i> Separated line</a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Segmented dropdown icon</h6>
								<p class="text-muted content-group-sm">Dropdown in segmented icon button</p>

								<div class="btn-group">
									<button type="button" class="btn bg-slate btn-icon"><i class="icon-grid-alt"></i></button>
			                    	<button type="button" class="btn bg-slate dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
			                    	<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#"><i class="icon-menu7"></i> Action</a></li>
										<li><a href="#"><i class="icon-screen-full"></i> Another action</a></li>
										<li><a href="#"><i class="icon-mail5"></i> One more action</a></li>
										<li class="divider"></li>
										<li><a href="#"><i class="icon-gear"></i> Separated line</a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Segmented dropup button</h6>
								<p class="text-muted content-group-sm">Dropup in segmented icon button</p>

								<div class="btn-group dropup">
									<button type="button" class="btn bg-slate btn-icon"><i class="icon-grid-alt"></i></button>
			                    	<button type="button" class="btn bg-slate dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
			                    	<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#"><i class="icon-menu7"></i> Action</a></li>
										<li><a href="#"><i class="icon-screen-full"></i> Another action</a></li>
										<li><a href="#"><i class="icon-mail5"></i> One more action</a></li>
										<li class="divider"></li>
										<li><a href="#"><i class="icon-gear"></i> Separated line</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /icon button menus -->



					<!-- Button options title -->
					<h6 class="content-group text-semibold">
						Additional options
						<small class="display-block">Default button colors and sizing</small>
					</h6>
					<!-- /button options title -->


					<!-- Button options -->
					<div class="row">
						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Loading button</h6>
								<p class="text-muted content-group-sm">BS loading button option</p>

		                    	<button type="button" data-loading-text="<i class='icon-spinner4 spinner position-left'></i> Loading state" class="btn btn-default btn-loading"><i class="icon-spinner4 position-left"></i> Loading state</button>
							</div>

							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Radio button group</h6>
								<p class="text-muted content-group-sm">Bootstrap <code>radio</code> button group</p>

		                    	<div class="btn-group" data-toggle="buttons">
									<label class="btn btn-primary">
										<input type="radio" name="options" id="option1"> Option 1
									</label>

									<label class="btn btn-primary">
										<input type="radio" name="options" id="option2"> Option 2
									</label>

									<label class="btn btn-primary">
										<input type="radio" name="options" id="option3"> Option 3
									</label>
								</div>
							</div>

							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Justified link group</h6>
								<p class="text-muted content-group-sm">Justified <code>links</code> in button group</p>

			                    <div class="btn-group btn-group-justified">
									<a href="#" class="btn bg-slate-700">Left</a>
									<a href="#" class="btn bg-slate-700">Middle</a>
									<a href="#" class="btn bg-slate-700">Right</a>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Button group</h6>
								<p class="text-muted content-group-sm">Group of buttons in <code>btn-group</code></p>

								<div class="btn-group">
									<button type="button" class="btn btn-primary">Left</button>
									<button type="button" class="btn btn-primary">Middle</button>
									<button type="button" class="btn btn-primary">Right</button>
								</div>
							</div>

							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Single toggle button</h6>
								<p class="text-muted content-group-sm">Using <code>data-toggle="button"</code></p>

		                    	<button type="button" class="btn btn-danger" data-toggle="button">Single toggle</button>
							</div>

							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Button group nesting</h6>
								<p class="text-muted content-group-sm">Example of nested button groups</p>

		                    	<div class="btn-group">
									<button type="button" class="btn bg-teal-400">1</button>
									<button type="button" class="btn bg-teal-400">2</button>
									<div class="btn-group">
										<button type="button" class="btn bg-teal-400 dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></button>
				                    	<ul class="dropdown-menu dropdown-menu-right">
											<li><a href="#"><i class="icon-menu7"></i> Action</a></li>
											<li><a href="#"><i class="icon-screen-full"></i> Another action</a></li>
											<li><a href="#"><i class="icon-mail5"></i> One more action</a></li>
											<li class="divider"></li>
											<li><a href="#"><i class="icon-gear"></i> Separated line</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Button toolbar</h6>
								<p class="text-muted content-group-sm">Complex <code>btn-group</code> components</p>

								<div class="btn-toolbar">
		                            <div class="btn-group">
										<button type="button" class="btn btn-default">1</button>
										<button type="button" class="btn btn-default">2</button>
										<button type="button" class="btn btn-default">3</button>
									</div>

		                            <div class="btn-group">
										<button type="button" class="btn btn-default">4</button>
										<button type="button" class="btn btn-default">5</button>
									</div>
		                        </div>
							</div>

							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Checkbox button group</h6>
								<p class="text-muted content-group-sm">Bootstrap <code>checkbox</code> button group</p>

			                    <div class="btn-group" data-toggle="buttons">
									<label class="btn btn-primary">
										<input type="checkbox"> Option 1
									</label>

									<label class="btn btn-primary">
										<input type="checkbox"> Option 2
									</label>

									<label class="btn btn-primary">
										<input type="checkbox"> Option 3
									</label>
								</div>
							</div>

							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Justified button group</h6>
								<p class="text-muted content-group-sm">Justified <code>buttons</code> in button group</p>

								<div class="btn-group btn-group-justified">
									<div class="btn-group">
										<button type="button" class="btn bg-slate-700">Left</button>
									</div>

									<div class="btn-group">
										<button type="button" class="btn bg-slate-700">Middle</button>
									</div>

									<div class="btn-group">
										<button type="button" class="btn bg-slate-700">Right</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /button options -->



					<!-- Progress buttons title -->
					<h6 class="content-group text-semibold">
						Progress animation
						<small class="display-block">Button loading spinner with progress</small>
					</h6>
					<!-- /progress buttons title -->


					<!-- Progress buttons -->
					<div class="row">
						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Expand Left</h6>
								<p class="text-muted content-group-sm">Spinner appears on left</p>

		                        <button type="button" class="btn btn-default btn-ladda btn-ladda-spinner" data-style="expand-left" data-spinner-color="#333" data-spinner-size="20"><span class="ladda-label">Spinner</span></button>
		                        <button type="button" class="btn bg-teal btn-ladda btn-ladda-progress" data-style="expand-left" data-spinner-size="20"><span class="ladda-label">Spinner + Progress</span></button>
							</div>

							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Expand Right</h6>
								<p class="text-muted content-group-sm">Spinner appears on right</p>

		                        <button type="button" class="btn btn-default btn-ladda btn-ladda-spinner" data-style="expand-right" data-spinner-color="#333" data-spinner-size="20"><span class="ladda-label">Spinner</span></button>
		                        <button type="button" class="btn bg-teal btn-ladda btn-ladda-progress" data-style="expand-right" data-spinner-size="20"><span class="ladda-label">Spinner + Progress</span></button>
							</div>

							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Expand Up</h6>
								<p class="text-muted content-group-sm">Spinner appears on top</p>

		                        <button type="button" class="btn btn-default btn-ladda btn-ladda-spinner" data-spinner-color="#333" data-style="expand-up"><span class="ladda-label">Spinner</span></button>
		                        <button type="button" class="btn bg-brown btn-ladda btn-ladda-progress" data-style="expand-up"><span class="ladda-label">Spinner + Progress</span></button>
							</div>

							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Expand Down</h6>
								<p class="text-muted content-group-sm">Spinner appears on bottom</p>

		                        <button type="button" class="btn btn-default btn-ladda btn-ladda-spinner" data-spinner-color="#333" data-style="expand-down"><span class="ladda-label">Spinner</span></button>
		                        <button type="button" class="btn bg-brown btn-ladda btn-ladda-progress" data-style="expand-down"><span class="ladda-label">Spinner + Progress</span></button>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Slide Left</h6>
								<p class="text-muted content-group-sm">Spinner slides from right</p>

		                        <button type="button" class="btn btn-default btn-ladda btn-ladda-spinner" data-spinner-color="#333" data-style="slide-left"><span class="ladda-label">Spinner</span></button>
		                        <button type="button" class="btn bg-purple-400 btn-ladda btn-ladda-progress" data-style="slide-left"><span class="ladda-label">Spinner + Progress</span></button>
							</div>

							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Slide Right</h6>
								<p class="text-muted content-group-sm">Spinner slides from left</p>

		                        <button type="button" class="btn btn-default btn-ladda btn-ladda-spinner" data-spinner-color="#333" data-style="slide-right"><span class="ladda-label">Spinner</span></button>
		                        <button type="button" class="btn bg-purple-400 btn-ladda btn-ladda-progress" data-style="slide-right"><span class="ladda-label">Spinner + Progress</span></button>
							</div>

							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Slide Up</h6>
								<p class="text-muted content-group-sm">Spinner slides from bottom</p>

		                        <button type="button" class="btn btn-default btn-ladda btn-ladda-spinner" data-spinner-color="#333" data-style="slide-up"><span class="ladda-label">Spinner</span></button>
		                        <button type="button" class="btn bg-slate-400 btn-ladda btn-ladda-progress" data-style="slide-up"><span class="ladda-label">Spinner + Progress</span></button>
							</div>

							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Slide Down</h6>
								<p class="text-muted content-group-sm">Spinner slides from top</p>

		                        <button type="button" class="btn btn-default btn-ladda btn-ladda-spinner" data-spinner-color="#333" data-style="slide-down"><span class="ladda-label">Spinner</span></button>
		                        <button type="button" class="btn bg-slate-400 btn-ladda btn-ladda-progress" data-style="slide-down"><span class="ladda-label">Spinner + Progress</span></button>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Zoom In</h6>
								<p class="text-muted content-group-sm">Spinner appears after zoom in</p>

		                        <button type="button" class="btn btn-default btn-ladda btn-ladda-spinner" data-spinner-color="#333" data-style="zoom-in"><span class="ladda-label">Spinner</span></button>
		                        <button type="button" class="btn btn-primary btn-ladda btn-ladda-progress" data-style="zoom-in"><span class="ladda-label">Spinner + Progress</span></button>
							</div>

							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Zoom Out</h6>
								<p class="text-muted content-group-sm">Spinner appears after zoom out</p>

		                        <button type="button" class="btn btn-default btn-ladda btn-ladda-spinner" data-spinner-color="#333" data-style="zoom-out"><span class="ladda-label">Spinner</span></button>
		                        <button type="button" class="btn btn-primary btn-ladda btn-ladda-progress" data-style="zoom-out"><span class="ladda-label">Spinner + Progress</span></button>
							</div>

							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Fixed Position</h6>
								<p class="text-muted content-group-sm">Spinner appears instead of text</p>

		                        <button type="button" class="btn btn-default btn-ladda btn-ladda-spinner" data-spinner-color="#333" data-style="fade"><span class="ladda-label">Spinner</span></button>
		                        <button type="button" class="btn btn-danger btn-ladda btn-ladda-progress" data-style="fade"><span class="ladda-label">Spinner + Progress</span></button>
							</div>

							<div class="panel panel-body border-top-primary text-center">
								<h6 class="no-margin text-semibold">Border radius</h6>
								<p class="text-muted content-group-sm">Border radius animation</p>

		                        <button type="button" class="btn btn-default btn-ladda btn-ladda-spinner" data-spinner-color="#333" data-style="radius"><span class="ladda-label">Spinner</span></button>
		                        <button type="button" class="btn btn-danger btn-ladda btn-ladda-progress" data-style="radius"><span class="ladda-label">Spinner + Progress</span></button>
							</div>
						</div>
					</div>
					<!-- /progress buttons -->


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
