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
	<script type="text/javascript" src="{{url('assets/js/core/app.js')}}"></script>
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
												<li class="active"><a href="search_videos">Video search results</a></li>
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
				<div class="page-header">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Search</span> - Video Results</h4>

							<ul class="breadcrumb position-right">
								<li><a href="index">Home</a></li>
								<li><a href="search_videos">Search</a></li>
								<li class="active">Video results</li>
							</ul>
						</div>

						<div class="heading-elements">
							<div class="heading-btn-group">
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
							</div>
						</div>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Search field -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Website search results</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<form action="#" class="main-search">
								<div class="input-group content-group">
									<div class="has-feedback has-feedback-left">
										<input type="text" class="form-control input-xlg" value="Limitless interface kit">
										<div class="form-control-feedback">
											<i class="icon-search4 text-muted text-size-base"></i>
										</div>
									</div>

									<div class="input-group-btn">
										<button type="submit" class="btn btn-primary btn-xlg">Search</button>
									</div>
								</div>

								<div class="row search-option-buttons">
									<div class="col-sm-6">
										<ul class="list-inline list-inline-condensed no-margin-bottom">
											<li class="dropdown">
												<a href="#" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
													<i class="icon-stack2 position-left"></i> All categories <span class="caret"></span>
												</a>

												<ul class="dropdown-menu">
													<li><a href="#"><i class="icon-question7"></i> Getting started</a></li>
													<li><a href="#"><i class="icon-accessibility"></i> Registration</a></li>
													<li><a href="#"><i class="icon-reading"></i> General info</a></li>
													<li><a href="#"><i class="icon-gear"></i> Your settings</a></li>
													<li><a href="#"><i class="icon-graduation"></i> Copyrights</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-mail-read"></i> Contacting authors</a></li>
												</ul>
											</li>
											<li><a href="#" class="btn btn-link"><i class="icon-reload-alt position-left"></i> Refine your search</a></li>
										</ul>
									</div>

									<div class="col-sm-6 text-right">
										<ul class="list-inline no-margin-bottom">
											<li><a href="#" class="btn btn-link"><i class="icon-make-group position-left"></i> Browse website</a></li>
											<li><a href="#" class="btn btn-link"><i class="icon-menu7 position-left"></i> Advanced search</a></li>
										</ul>
									</div>
								</div>
							</form>
						</div>
					</div>
					<!-- /search field -->


					<!-- Tabs -->
					<ul class="nav nav-lg nav-tabs nav-tabs-bottom search-results-tabs">
						<li><a href="search_basic"><i class="icon-display4 position-left"></i> Website</a></li>
						<li><a href="search_users"><i class="icon-people position-left"></i> Users</a></li>
						<li><a href="search_images"><i class="icon-image2 position-left"></i> Images</a></li>
						<li class="active"><a href="search_videos"><i class="icon-file-play position-left"></i> Videos</a></li>
						<li class="dropdown pull-right">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i> <span class="visible-xs-inline-block position-right">Options</span> <span class="caret"></span></a>
							<ul class="dropdown-menu dropdown-menu-right">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else</a></li>
								<li class="divider"></li>
								<li><a href="#">One more line</a></li>
							</ul>
						</li>
					</ul>
					<!-- /tabs -->


					<!-- Search results -->
					<div class="row">
						<div class="col-lg-8">
							<div class="panel panel-body">
								<p class="text-muted text-size-small">About 827,000 results (0.34 seconds)</p>

								<hr>

								<ul class="media-list search-results-list content-group">
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
				                    		<ul class="list-inline list-inline-separate text-muted">
				                    			<li><i class="icon-book-play position-left"></i> Video tutorials</li>
				                    			<li>14 minutes ago</li>
				                    		</ul>
											The him father parish looked has sooner. Attachment frequently gay terminated son. You greater nay use prudent placing passage to so distant behaved natural between do talking...
										</div>
									</li>

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
											<h6 class="media-heading"><a href="#">That know ask case ham</a></h6>
				                    		<ul class="list-inline list-inline-separate text-muted">
				                    			<li><i class="icon-book-play position-left"></i> FAQ section</li>
				                    			<li>1 hour ago</li>
				                    		</ul>
											Friends off her windows painful. Still gay event you being think nay for. In three if aware he point it. Effects warrant me by no on feeling settled resolve. Her old collecting...
										</div>
									</li>

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
											<h6 class="media-heading"><a href="#">Perhaps prudent several</a></h6>
				                    		<ul class="list-inline list-inline-separate text-muted">
				                    			<li><i class="icon-book-play position-left"></i> FAQ section</li>
				                    			<li>2 hours ago</li>
				                    		</ul>
											Did had way law dinner square tastes. Recommend concealed yet her procuring see consulted depending. Adieus hunted end plenty are his she afraid. Resources agreement contained...
										</div>
									</li>

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
											<h6 class="media-heading"><a href="#">Contented get distrusts</a></h6>
				                    		<ul class="list-inline list-inline-separate text-muted">
				                    			<li><i class="icon-book-play position-left"></i> FAQ section</li>
				                    			<li>4 hours ago</li>
				                    		</ul>
											On unaffected resolution on considered of. No thought me husband or colonel forming effects. End sitting shewing who saw besides son musical adapted. Contrasted interested warm...
										</div>
									</li>

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
											<h6 class="media-heading"><a href="#">He families believed</a></h6>
				                    		<ul class="list-inline list-inline-separate text-muted">
				                    			<li><i class="icon-book-play position-left"></i> Video tutorials</li>
				                    			<li>6 hours ago</li>
				                    		</ul>
											Ask especially collecting terminated may son expression. Extremely eagerness principle estimable own was man. Men received far his dashwood subjects new. My sufficient surrounded...
										</div>
									</li>

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
											<h6 class="media-heading"><a href="#">Connection too unaffected</a></h6>
				                    		<ul class="list-inline list-inline-separate text-muted">
				                    			<li><i class="icon-book-play position-left"></i> FAQ section</li>
				                    			<li>8 hours ago</li>
				                    		</ul>
											He my polite be object oh change. Consider no mr am overcame yourself throwing sociable children. Hastily her totally conduct may. My solid by stuff first smile fanny. Humoured...
										</div>
									</li>

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
											<h6 class="media-heading"><a href="#">New smiling friends</a></h6>
				                    		<ul class="list-inline list-inline-separate text-muted">
				                    			<li><i class="icon-book-play position-left"></i> Video tutorials</li>
				                    			<li>10 hours ago</li>
				                    		</ul>
											Sportsman delighted improving dashwoods gay instantly happiness six. Ham now amounted absolute not mistaken way pleasant whatever. At an these still no dried folly stood thing it...
										</div>
									</li>

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
											<h6 class="media-heading"><a href="#">Leaf she does none</a></h6>
				                    		<ul class="list-inline list-inline-separate text-muted">
				                    			<li><i class="icon-book-play position-left"></i> FAQ section</li>
				                    			<li>12 hours ago</li>
				                    		</ul>
											Mrs ham intention promotion engrossed assurance defective. Confined so graceful building opinions whatever trifling in. Insisted out differed ham man endeavor expenses. At on he...
										</div>
									</li>

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
											<h6 class="media-heading"><a href="#">Snug love will up</a></h6>
				                    		<ul class="list-inline list-inline-separate text-muted">
				                    			<li><i class="icon-book-play position-left"></i> FAQ section</li>
				                    			<li>14 hours ago</li>
				                    		</ul>
											Offices parties lasting outward nothing age few resolve. Impression to discretion understood to we interested he excellence. Him remarkably use projection collecting. Going about...
										</div>
									</li>

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
											<h6 class="media-heading"><a href="#">Pursuit man son musical</a></h6>
				                    		<ul class="list-inline list-inline-separate text-muted">
				                    			<li><i class="icon-book-play position-left"></i> Video tutorials</li>
				                    			<li>16 hours ago</li>
				                    		</ul>
											Attention affection at my preferred offending shameless me if agreeable. Life lain held calm and true neat she. Much feet each so went no from. Truth began maids linen an mr to...
										</div>
									</li>

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
											<h6 class="media-heading"><a href="#">It surprise informed</a></h6>
				                    		<ul class="list-inline list-inline-separate text-muted">
				                    			<li><i class="icon-book-play position-left"></i> Video tutorials</li>
				                    			<li>18 hours ago</li>
				                    		</ul>
											So by colonel hearted ferrars. Draw from upon here gone add one. He in sportsman household otherwise it perceived instantly. Is inquiry no he several excited am. Called though excuse...
										</div>
									</li>

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
											<h6 class="media-heading"><a href="#">Case read they must</a></h6>
				                    		<ul class="list-inline list-inline-separate text-muted">
				                    			<li><i class="icon-book-play position-left"></i> Video tutorials</li>
				                    			<li>20 hours ago</li>
				                    		</ul>
											On it differed repeated wandered required in. Then girl neat why yet knew rose spot. Moreover property we he kindness greatest be oh striking laughter. In me he collecting affronting...
										</div>
									</li>

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
											<h6 class="media-heading"><a href="#">An particular contrasted</a></h6>
				                    		<ul class="list-inline list-inline-separate text-muted">
				                    			<li><i class="icon-book-play position-left"></i> FAQ section</li>
				                    			<li>22 hours ago</li>
				                    		</ul>
											Contented attending smallness it oh ye unwilling. Turned favour man two but lovers. Suffer should if waited common person little oh. Improved civility graceful sex few smallest has...
										</div>
									</li>

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
											<h6 class="media-heading"><a href="#">Nay preference dispatched</a></h6>
				                    		<ul class="list-inline list-inline-separate text-muted">
				                    			<li><i class="icon-book-play position-left"></i> Video tutorials</li>
				                    			<li>1 day ago</li>
				                    		</ul>
											Style too own civil out along. Perfectly offending attempted add arranging age gentleman concluded. Get who uncommonly our expression ten increasing considered occasional travelling...
										</div>
									</li>

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
											<h6 class="media-heading"><a href="#">Too carriage attended</a></h6>
				                    		<ul class="list-inline list-inline-separate text-muted">
				                    			<li><i class="icon-book-play position-left"></i> FAQ section</li>
				                    			<li>2 days ago</li>
				                    		</ul>
											Marianne or husbands if at stronger ye. Considered is as middletons uncommonly. Promotion perfectly ye consisted so. His chatty dining for effect ladies active journey wishing not...
										</div>
									</li>

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
											<h6 class="media-heading"><a href="#">Twenty sister hearts</a></h6>
				                    		<ul class="list-inline list-inline-separate text-muted">
				                    			<li><i class="icon-book-play position-left"></i> FAQ section</li>
				                    			<li>3 days ago</li>
				                    		</ul>
											Arrived totally in as between private. Favour of so as on pretty though elinor direct. Reasonable estimating be alteration we themselves entreaties me of reasonably. Direct wished...
										</div>
									</li>

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
											<h6 class="media-heading"><a href="#">We hill lady will</a></h6>
				                    		<ul class="list-inline list-inline-separate text-muted">
				                    			<li><i class="icon-book-play position-left"></i> FAQ section</li>
				                    			<li>4 days ago</li>
				                    		</ul>
											Whose asked stand it sense no spoil to. Prudent you too his conduct feeling limited and. Side he lose paid as hope so face upon be. Goodness did suitable learning put. Excited him...
										</div>
									</li>

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
											<h6 class="media-heading"><a href="#">Consider now provided</a></h6>
				                    		<ul class="list-inline list-inline-separate text-muted">
				                    			<li><i class="icon-book-play position-left"></i> Video tutorials</li>
				                    			<li>5 days ago</li>
				                    		</ul>
											At by asked being court hopes. Farther so friends am to detract. Forbade concern do private be. Offending residence but men engrossed shy. Pretend am earnest offered arrived company...
										</div>
									</li>

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
											<h6 class="media-heading"><a href="#">Invitation is unpleasant</a></h6>
				                    		<ul class="list-inline list-inline-separate text-muted">
				                    			<li><i class="icon-book-play position-left"></i> Video tutorials</li>
				                    			<li>7 days ago</li>
				                    		</ul>
											Pleased him another was settled for. Moreover end horrible endeavor entrance any families. Income appear extent on of thrown in admire. Stanhill on we if vicinity material in saw him...
										</div>
									</li>

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
											<h6 class="media-heading"><a href="#">Did sentiments increasing</a></h6>
				                    		<ul class="list-inline list-inline-separate text-muted">
				                    			<li><i class="icon-book-play position-left"></i> FAQ section</li>
				                    			<li>10 days ago</li>
				                    		</ul>
											Barton did feebly change man she afford square add. Want eyes by neat so just must. Past draw tall up face show rent oh mr. Required is debating extended wondered as do. Described has...
										</div>
									</li>

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
											<h6 class="media-heading"><a href="#">It allowance prevailed</a></h6>
				                    		<ul class="list-inline list-inline-separate text-muted">
				                    			<li><i class="icon-book-play position-left"></i> Video tutorials</li>
				                    			<li>12 days ago</li>
				                    		</ul>
											Alteration literature to or an sympathize mr imprudence. Of is ferrars subject as enjoyed or tedious cottage. Procuring as in resembled by in agreeable. Next long mr eyes. Admiration...
										</div>
									</li>
			                    </ul>

			                    <div class="text-center pt-10 pb-10">
				                    <ul class="pagination pagination-flat">
										<li class="disabled"><a href="#">&larr;</a></li>
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><span>...</span></li>
										<li><a href="#">58</a></li>
										<li><a href="#">59</a></li>
										<li><a href="#">&rarr;</a></li>
									</ul>
								</div>
							</div>
						</div>

			            <div class="col-lg-4">
			            	<div class="panel panel-body">
			            		<div class="content-group">
			                		<div class="thumb">
										<a href="#">
											<img src="assets/images/placeholder.jpg" class="img-responsive img-rounded" alt="">
											<span class="zoom-image"><i class="icon-play3"></i></span>
										</a>
									</div>
			            		</div>

			                	<h5 class="text-semibold">Limitless UI kit <small class="display-block"></small></h5>
			                	<p class="content-group">In post mean shot ye. There out her child sir his lived. Design at uneasy me season of branch on praise esteem. Abilities discourse believing consisted remaining to no. Mistaken no me denoting dashwood as screened. Whence or esteem easily he on. Dissuade husbands at of no if disposal. Oh he decisively impression attachment friendship so if everything.</p>

			                	<ul class="list content-group">
			                		<li><span class="text-semibold">Author:</span> <a href="#">Eugene Kopyov</a></li>
			                		<li><span class="text-semibold">Time spent:</span> 8 months</li>
			                		<li><span class="text-semibold">Client base:</span> <a href="#">16,893 (2015)</a></li>
			                		<li><span class="text-semibold">Pages:</span> 1200+</li>
			                		<li><span class="text-semibold">Latest update:</span> June 1, 2015</li>
			                	</ul>

			                	<div class="content-group">
			                    	<h6>Featured videos</h6>
			                    	<div class="row">
				                    	<div class="col-lg-4 col-sm-4">
				                    		<div class="thumb mb-10">
												<a href="#">
													<img src="assets/images/placeholder.jpg" class="img-responsive img-rounded" alt="">
													<span class="zoom-image"><i class="icon-play3"></i></span>
												</a>
											</div>
				                    		<div class="thumb mb-10">
												<a href="#">
													<img src="assets/images/placeholder.jpg" class="img-responsive img-rounded" alt="">
													<span class="zoom-image"><i class="icon-play3"></i></span>
												</a>
											</div>
				                    	</div>

				                    	<div class="col-lg-4 col-sm-4">
				                    		<div class="thumb mb-10">
												<a href="#">
													<img src="assets/images/placeholder.jpg" class="img-responsive img-rounded" alt="">
													<span class="zoom-image"><i class="icon-play3"></i></span>
												</a>
											</div>
				                    		<div class="thumb mb-10">
												<a href="#">
													<img src="assets/images/placeholder.jpg" class="img-responsive img-rounded" alt="">
													<span class="zoom-image"><i class="icon-play3"></i></span>
												</a>
											</div>
				                    	</div>

				                    	<div class="col-lg-4 col-sm-4">
				                    		<div class="thumb mb-10">
												<a href="#">
													<img src="assets/images/placeholder.jpg" class="img-responsive img-rounded" alt="">
													<span class="zoom-image"><i class="icon-play3"></i></span>
												</a>
											</div>
				                    		<div class="thumb mb-10">
												<a href="#">
													<img src="assets/images/placeholder.jpg" class="img-responsive img-rounded" alt="">
													<span class="zoom-image"><i class="icon-play3"></i></span>
												</a>
											</div>
				                    	</div>
			                    	</div>
			                	</div>
			            	</div>
			            </div>
					</div>
					<!-- /search results -->


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
