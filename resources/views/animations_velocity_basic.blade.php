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
	<script type="text/javascript" src="{{url('assets/js/plugins/velocity/velocity.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/velocity/velocity.ui.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/ui/prism.min.js')}}"></script>

	<script type="text/javascript" src="{{url('assets/js/core/app.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/pages/animations_velocity_basic.js')}}"></script>
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
												<li class="active"><a href="animations_velocity_basic">Basic usage</a></li>
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
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Velocity</span> - Basic Animations</h4>
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
							<li><a href="animations_velocity_basic">Velocity</a></li>
							<li class="active">Basic animations</li>
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

					<!-- Plugin overview -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Velocity animations</h5>
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
								<h6 class="text-semibold">Velocity overview</h6>
								Velocity is an animation engine that re-implements jQuery's <code>$.animate()</code> for significantly greater performance (making Velocity also faster than CSS animation libraries) while including several new features. In just 9Kb zipped, Velocity includes all of <code>$.animate()</code>'s features while packing in color animation, transforms, loops, easings, SVG support, and scrolling. Velocity is the best of jQuery, jQuery UI, and CSS transitions combined.
							</div>

							<div class="content-group-lg">
								<h6 class="text-semibold">Compatibility and browser support</h6>
								<p>Velocity works everywhere — back to IE8 and Android 2.3. Under the hood, Velocity uses jQuery's <code>$.queue()</code>, and thus interoperates seamlessly with jQuery's <code>$.animate()</code>, <code>$.fade()</code> and <code>$.delay()</code>. Since Velocity's syntax is identical to <code>$.animate()</code>, your code doesn't need to change. <br>
								<strong>Browser support</strong>: Back to IE8 and Android 2.3. Below IE8, Velocity avoids loading, and aliases itself to jQuery's <code>$.animate()</code>. Also remember that 3D transforms are not supported below IE 10 and below Android 3.0, and that even 2D transforms aren't supported below IE 9. Also, remember that a perspective must be set on a parent element for 3D transforms to take effect.</p>
							</div>

							<h6 class="text-semibold">Velocity options</h6>
							<p class="content-group">JavaScript and jQuery are falsely conflated. JavaScript animation, which Velocity uses, is fast; it's jQuery that's slow. Although Velocity works alongside jQuery, it uses its own animation stack that delivers its performance through two underlying principles: 1) synchronize the DOM → tween stack to minimize layout thrashing, and 2) cache values to minimize DOM querying. Below is a set of basic Velocity options:</p>

							<pre class="language-javascript"><code>// Animation basics
$element.velocity({ 
    width: "500px",
    property2: value2
}, {
    // Velocity's default options
    duration: 400,
    easing: "swing",
    queue: "",
    begin: undefined,
    progress: undefined,
    complete: undefined,
    display: undefined,
    visibility: undefined,
    loop: false,
    delay: false,
    mobileHA: true
});</code></pre>

						</div>
					</div>
					<!-- /plugin overview -->


					<!-- Border animation -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Border animation</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<p class="content-group">Velocity allows you to animate border CSS properties such as border width, border color and border radius: the border-width CSS property sets the width of the border of a box; the border-color CSS property is a shorthand for setting the color of the four sides of an element's border; the border-radius CSS property allows Web authors to define how rounded border corners are. All these properties can be animated together or separately for all 4 sides (corners).</p>
							
							<div class="content-group-sm">
								<p class="text-semibold">General border animation</p>
								<div class="row">
									<div class="col-md-6">
										<div class="demo-velocity-box clearfix">
											<span>Border width</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="borderWidth" data-value="3"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>

									<div class="col-md-6">
										<div class="demo-velocity-box clearfix">
											<span>Border radius</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="borderRadius" data-value="100"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>
								</div>
							</div>

							<div class="content-group-sm">
								<p class="text-semibold">Detailed border animation</p>
								<div class="row">
									<div class="col-md-3">
										<div class="demo-velocity-box clearfix">
											<span>Left border width</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="borderLeftWidth" data-value="10"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>

									<div class="col-md-3">
										<div class="demo-velocity-box clearfix">
											<span>Top border width</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="borderTopWidth" data-value="10"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>

									<div class="col-md-3">
										<div class="demo-velocity-box clearfix">
											<span>Right border width</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="borderRightWidth" data-value="10"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>

									<div class="col-md-3">
										<div class="demo-velocity-box clearfix">
											<span>Bottom border width</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="borderBottomWidth" data-value="10"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /border animation -->


					<!-- Padding animation -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Padding animation</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<p class="content-group">The padding CSS property sets the required padding space on all sides of an element. The padding area is the space between the content of the element and its border. The padding property is a shorthand to avoid setting each side separately. Velocity animates one numeric value per property. Hence, you can pass in: { padding: 1 } or { paddingLeft: 1, paddingRight: 1 }. But you cannot pass in { padding: "1 1 1 1" } because you're providing multiple numeric values.</p>

							<div class="content-group-sm">
								<p class="text-semibold">General padding animation</p>
								<div class="row">
									<div class="col-md-6">
										<div class="demo-velocity-box clearfix">
											<span>Box padding</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="padding" data-value="20"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>

									<div class="col-md-6">
										<div class="demo-velocity-box clearfix">
											<span>2 paddings</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="paddingLeft" data-value="30"  data-property2="paddingRight" data-value2="30"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>
								</div>
							</div>

							<div class="content-group-sm">
								<p class="text-semibold">Detailed padding animation</p>
								<div class="row">
									<div class="col-md-3">
										<div class="demo-velocity-box clearfix">
											<span>Left padding</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="paddingLeft" data-value="20"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>

									<div class="col-md-3">
										<div class="demo-velocity-box clearfix">
											<span>Top padding</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="paddingTop" data-value="20"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>

									<div class="col-md-3">
										<div class="demo-velocity-box clearfix">
											<span>Right padding</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="paddingRight" data-value="20"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>

									<div class="col-md-3">
										<div class="demo-velocity-box clearfix">
											<span>Bottom padding</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="paddingBottom" data-value="20"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /padding animation -->


					<!-- Margin animation -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Margin animation</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<p class="content-group">The margin CSS property sets the margin for all four sides. It is a shorthand to avoid setting each side separately with the other margin properties: margin-top, margin-right, margin-bottom and margin-left. Negative values are also allowed. Velocity animates one numeric value per property. Hence, you can pass in: { margin: 1 } or { marginLeft: 1, marginRight: 1 }. But you cannot pass in { margin: "1 1 1 1" } because you're providing multiple numeric values.</p>

							<div class="content-group-sm">
								<p class="text-semibold">General margin animation</p>
								<div class="row">
									<div class="col-md-6">
										<div class="demo-velocity-box clearfix">
											<span>Box margin</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="margin" data-value="20"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>

									<div class="col-md-6">
										<div class="demo-velocity-box clearfix">
											<span>2 margins</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="marginLeft" data-value="30" data-property2="marginRight" data-value2="30"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>
								</div>
							</div>

							<div class="content-group-sm">
								<p class="text-semibold">Detailed margin animation</p>
								<div class="row">
									<div class="col-md-3">
										<div class="demo-velocity-box clearfix">
											<span>Left margin</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="marginLeft" data-value="20"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>

									<div class="col-md-3">
										<div class="demo-velocity-box clearfix">
											<span>Top margin</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="marginTop" data-value="20"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>

									<div class="col-md-3">
										<div class="demo-velocity-box clearfix">
											<span>Right margin</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="marginRight" data-value="20"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>

									<div class="col-md-3">
										<div class="demo-velocity-box clearfix">
											<span>Bottom margin</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="marginBottom" data-value="20"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /margin animation -->


					<!-- Edge animation -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Edge animation</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<p class="content-group">Velocity allows you to animate side edges: left, right, top and bottom. You can specify only 1 or 2 properties (1 vertical and 1 horizontal). When both the right CSS property and the left CSS property are defined, the position of the element is overspecified, the left value has precedence. When both top and bottom are specified, and height is unspecified or either auto or 100%, both the top and bottom distances are respected.</p>

							<div class="content-group-sm">
								<p class="text-semibold">General edge animation</p>
								<div class="row">
									<div class="col-md-6">
										<div class="demo-velocity-box clearfix">
											<span>Left and top</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="left" data-value="10" data-property2="top" data-value2="10"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>

									<div class="col-md-6">
										<div class="demo-velocity-box clearfix">
											<span>Right and bottom</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="right" data-value="10" data-property2="bottom" data-value2="10"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>
								</div>
							</div>

							<div class="content-group-sm">
								<p class="text-semibold">Detailed edge animation</p>
								<div class="row">
									<div class="col-md-3">
										<div class="demo-velocity-box clearfix">
											<span>Left edge</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="left" data-value="20"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>

									<div class="col-md-3">
										<div class="demo-velocity-box clearfix">
											<span>Top edge</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="top" data-value="20"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>

									<div class="col-md-3">
										<div class="demo-velocity-box clearfix">
											<span>Right edge</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="right" data-value="20"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>

									<div class="col-md-3">
										<div class="demo-velocity-box clearfix">
											<span>Bottom edge</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="bottom" data-value="20"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /edge animation -->


					<!-- Text animation -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Text animation</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<p class="content-group">Font size, line height, letter spacing and word spacing are also animatable: the font-size property specifies the size of the font – specifically the desired height of glyphs from the font; on block level elements, the line-height property specifies the minimal height of line boxes within the element; the letter-spacing property specifies spacing behavior between text characters; the word-spacing property specifies spacing behavior between tags and words.</p>

							<p class="text-semibold">General text animation</p>
							<div class="row">
								<div class="col-md-3">
									<div class="demo-velocity-box clearfix">
										<span>Font size</span>
										<ul class="icons-list">
					                		<li><a href="#" class="velocity-property" data-property="fontSize" data-value="15"><i class="icon-play3"></i></a></li>
					                	</ul>
									</div>
								</div>

								<div class="col-md-3">
									<div class="demo-velocity-box clearfix">
										<span>Line height</span>
										<ul class="icons-list">
					                		<li><a href="#" class="velocity-property" data-property="lineHeight" data-value="30"><i class="icon-play3"></i></a></li>
					                	</ul>
									</div>
								</div>

								<div class="col-md-3">
									<div class="demo-velocity-box clearfix">
										<span>Letter spacing</span>
										<ul class="icons-list">
					                		<li><a href="#" class="velocity-property" data-property="letterSpacing" data-value="1"><i class="icon-play3"></i></a></li>
					                	</ul>
									</div>
								</div>

								<div class="col-md-3">
									<div class="demo-velocity-box clearfix">
										<span>Word spacing</span>
										<ul class="icons-list">
					                		<li><a href="#" class="velocity-property" data-property="wordSpacing" data-value="10"><i class="icon-play3"></i></a></li>
					                	</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /text animation -->


					<!-- Color animation -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Color animation</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<p class="content-group">Velocity supports color animation for the following properties: color, backgroundColor, borderColor, and outlineColor. You can pass a color property a hex string (rgb, hsla strings, and color keywords are not supported), or you can animate the individual RGB component values of a color property: The color components are Red, Green, Blue, and Alpha, and they range from from 0 to 255. The fourth component, Alpha, ranges from 0 to 1.</p>

							<div class="content-group-sm">
								<p class="text-semibold">Color animation</p>
								<div class="row">
									<div class="col-md-3">
										<div class="demo-velocity-box clearfix">
											<span>Text color</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="color" data-value="#E91E63"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>

									<div class="col-md-3">
										<div class="demo-velocity-box clearfix">
											<span>Background color</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="backgroundColor" data-value="#2DB1DF" data-property2="borderColor" data-value2="#2DB1DF" data-property3="color" data-value3="#fff"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>

									<div class="col-md-3">
										<div class="demo-velocity-box clearfix">
											<span>Border color</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="borderColor" data-value="#2DB1DF"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>

									<div class="col-md-3">
										<div class="demo-velocity-box clearfix" style="outline: 2px solid #fff;">
											<span>Outline color</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="outlineColor" data-value="#2DB1DF"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>
								</div>
							</div>

							<div class="content-group-sm">
								<p class="text-semibold">Color alpha animation</p>
								<div class="row">
									<div class="col-md-3">
										<div class="demo-velocity-box clearfix">
											<span>Text color alpha</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="colorAlpha" data-value="0.5"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>

									<div class="col-md-3">
										<div class="demo-velocity-box clearfix bg-blue">
											<span>Background color alpha</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="backgroundColorAlpha" data-value="0.1"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>

									<div class="col-md-3">
										<div class="demo-velocity-box clearfix">
											<span>Border color alpha</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="borderColor" data-value="#2DB1DF" data-property2="borderColorAlpha" data-value2="0.6"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>

									<div class="col-md-3">
										<div class="demo-velocity-box clearfix" style="outline: 2px solid #fff;">
											<span>Outline color alpha</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="outlineColor" data-value="#2DB1DF" data-property2="outlineColorAlpha" data-value2="0.6"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /color animation -->


					<!-- Shadow animation -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Shadow animation</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<p class="content-group">Velocity supports shadow animation for the following properties: textShadow and boxShadow. The text-shadow property adds shadows to text, it accepts a comma-separated list of shadows to be applied to the text and text-decorations of the element. The box-shadow CSS property describes one or more shadow effects as a comma-separated list, it allows casting a drop shadow from the frame of almost any element.</p>

							<div class="content-group-sm">
								<p class="text-semibold">Text shadow animation</p>
								<div class="row">
									<div class="col-md-4">
										<div class="demo-velocity-box clearfix">
											<span>Text shadow X</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="textShadowX" data-value="35"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>

									<div class="col-md-4">
										<div class="demo-velocity-box clearfix">
											<span>Text shadow Y</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="textShadowY" data-value="35"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>

									<div class="col-md-4">
										<div class="demo-velocity-box clearfix">
											<span>Text shadow blur</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="textShadowBlur" data-value="15"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>
								</div>
							</div>

							<div class="content-group-sm">
								<p class="text-semibold">Box shadow animation</p>
								<div class="row">
									<div class="col-md-3">
										<div class="demo-velocity-box clearfix">
											<span>Box shadow X</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="boxShadowX" data-value="2"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>

									<div class="col-md-3">
										<div class="demo-velocity-box clearfix">
											<span>Box shadow Y</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="boxShadowY" data-value="2"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>

									<div class="col-md-3">
										<div class="demo-velocity-box clearfix">
											<span>Box shadow blur</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="boxShadowBlur" data-value="5"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>

									<div class="col-md-3">
										<div class="demo-velocity-box clearfix">
											<span>Box shadow spread</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="boxShadowSpread" data-value="3"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /shadow animation -->


					<!-- Transform animation -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Transform animation</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<p class="content-group">The CSS transform property allows you to perform translation, scaling, and rotation in 2D or 3D space. To achieve parity with CSS, Velocity uses the translateX and translateY property names for transform translations, not X and Y. Since Velocity only animates one numeric value per CSS property, an axis must be declared with a transform property. For example, scale cannot be animated to "1.5, 2", but scaleX() and scaleY() can be simultaneously animated to those values to achieve the same effect.</p>

							<div class="content-group-sm">
								<p class="text-semibold">Translate animation</p>
								<div class="row">
									<div class="col-md-4">
										<div class="demo-velocity-box clearfix">
											<span>Translate X</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="translateX" data-value="20"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>

									<div class="col-md-4">
										<div class="demo-velocity-box clearfix">
											<span>Translate Y</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="translateY" data-value="20"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>

									<div class="col-md-4" style="-webkit-perspective: 1000;">
										<div class="demo-velocity-box clearfix">
											<span>Translate Z</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="translateZ" data-value="50"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>
								</div>
							</div>

							<div class="content-group-sm">
								<p class="text-semibold">Scale animation</p>
								<div class="row">
									<div class="col-md-6">
										<div class="demo-velocity-box clearfix">
											<span>Scale X</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="scaleX" data-value="1.1"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>

									<div class="col-md-6">
										<div class="demo-velocity-box clearfix">
											<span>Scale Y</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="scaleY" data-value="1.5"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>
								</div>
							</div>

							<div class="content-group-sm">
								<p class="text-semibold">Rotate animation</p>
								<div class="row">
									<div class="col-md-4">
										<div class="demo-velocity-box clearfix">
											<span>Rotate X</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="rotateX" data-value="180deg"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>

									<div class="col-md-4">
										<div class="demo-velocity-box clearfix">
											<span>Rotate Y</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="rotateY" data-value="180deg"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>

									<div class="col-md-4" style="-webkit-perspective: 1000;">
										<div class="demo-velocity-box clearfix">
											<span>Rotate Z</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="rotateZ" data-value="180deg"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>
								</div>
							</div>

							<div class="content-group-sm">
								<p class="text-semibold">Skew animation</p>
								<div class="row">
									<div class="col-md-6">
										<div class="demo-velocity-box clearfix">
											<span>Skew X</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="skewX" data-value="50"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>

									<div class="col-md-6">
										<div class="demo-velocity-box clearfix">
											<span>Skew Y</span>
											<ul class="icons-list">
						                		<li><a href="#" class="velocity-property" data-property="skewY" data-value="10"><i class="icon-play3"></i></a></li>
						                	</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /transform animation -->


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
