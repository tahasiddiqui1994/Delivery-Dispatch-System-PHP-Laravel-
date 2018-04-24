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
	<link href="{{url('assets/css/icons/fontawesome/styles.min.css')}}" rel="stylesheet" type="text/css">
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
										<li class="active"><a href="icons_fontawesome">Font awesome</a></li>
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
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Icons</span> - Font Awesome</h4>
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
							<li><a href="icons_fontawesome">Icons</a></li>
							<li class="active">Font awesome</li>
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

					<!-- New icons -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">New Icons in v4.6</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<div class="row glyphs">
								<div class="col-md-3 col-sm-4"><i class="fa fa-american-sign-language-interpreting"></i> american-sign-language-interpreting</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-asl-interpreting"></i> asl-interpreting <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-assistive-listening-systems"></i> assistive-listening-systems</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-audio-description"></i> audio-description</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-blind"></i> blind</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-braille"></i> braille</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-deaf"></i> deaf</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-deafness"></i> deafness <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-envira"></i> envira</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-fa"></i> fa <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-first-order"></i> first-order</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-font-awesome"></i> font-awesome</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-gitlab"></i> gitlab</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-glide"></i> glide</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-glide-g"></i> glide-g</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-google-plus-circle"></i> google-plus-circle <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-google-plus-official"></i> google-plus-official</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-hard-of-hearing"></i> hard-of-hearing <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-instagram"></i> instagram</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-low-vision"></i> low-vision</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-pied-piper"></i> pied-piper</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-question-circle-o"></i> question-circle-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-sign-language"></i> sign-language</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-signing"></i> signing <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-snapchat"></i> snapchat</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-snapchat-ghost"></i> snapchat-ghost</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-snapchat-square"></i> snapchat-square</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-themeisle"></i> themeisle</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-universal-access"></i> universal-access</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-viadeo"></i> viadeo</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-viadeo-square"></i> viadeo-square</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-volume-control-phone"></i> volume-control-phone</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-wheelchair-alt"></i> wheelchair-alt</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-wpbeginner"></i> wpbeginner</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-wpforms"></i> wpforms</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-yoast"></i> yoast</div>
							</div>
						</div>
					</div>
					<!-- /new icons -->


					<!-- Web application icons -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Web application icons</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<div class="row glyphs">
								<div class="col-md-3 col-sm-4"><i class="fa fa-adjust"></i> adjust</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-american-sign-language-interpreting"></i> american-sign-language-interpreting</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-anchor"></i> anchor</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-archive"></i> archive</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-area-chart"></i> area-chart</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-arrows"></i> arrows</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-arrows-h"></i> arrows-h</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-arrows-v"></i> arrows-v</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-asl-interpreting"></i> asl-interpreting <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-assistive-listening-systems"></i> assistive-listening-systems</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-asterisk"></i> asterisk</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-at"></i> at</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-audio-description"></i> audio-description</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-automobile"></i> automobile <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-balance-scale"></i> balance-scale</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-ban"></i> ban</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-bank"></i> bank <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-bar-chart"></i> bar-chart</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-bar-chart-o"></i> bar-chart-o <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-barcode"></i> barcode</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-bars"></i> bars</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-battery-0"></i> battery-0 <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-battery-1"></i> battery-1 <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-battery-2"></i> battery-2 <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-battery-3"></i> battery-3 <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-battery-4"></i> battery-4 <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-battery-empty"></i> battery-empty</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-battery-full"></i> battery-full</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-battery-half"></i> battery-half</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-battery-quarter"></i> battery-quarter</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-battery-three-quarters"></i> battery-three-quarters</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-bed"></i> bed</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-beer"></i> beer</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-bell"></i> bell</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-bell-o"></i> bell-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-bell-slash"></i> bell-slash</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-bell-slash-o"></i> bell-slash-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-bicycle"></i> bicycle</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-binoculars"></i> binoculars</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-birthday-cake"></i> birthday-cake</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-blind"></i> blind</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-bluetooth"></i> bluetooth</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-bluetooth-b"></i> bluetooth-b</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-bolt"></i> bolt</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-bomb"></i> bomb</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-book"></i> book</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-bookmark"></i> bookmark</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-bookmark-o"></i> bookmark-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-braille"></i> braille</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-briefcase"></i> briefcase</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-bug"></i> bug</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-building"></i> building</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-building-o"></i> building-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-bullhorn"></i> bullhorn</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-bullseye"></i> bullseye</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-bus"></i> bus</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-cab"></i> cab <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-calculator"></i> calculator</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-calendar"></i> calendar</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-calendar-check-o"></i> calendar-check-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-calendar-minus-o"></i> calendar-minus-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-calendar-o"></i> calendar-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-calendar-plus-o"></i> calendar-plus-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-calendar-times-o"></i> calendar-times-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-camera"></i> camera</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-camera-retro"></i> camera-retro</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-car"></i> car</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-down"></i> caret-square-o-down</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-left"></i> caret-square-o-left</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-right"></i> caret-square-o-right</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-up"></i> caret-square-o-up</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-cart-arrow-down"></i> cart-arrow-down</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-cart-plus"></i> cart-plus</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-cc"></i> cc</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-certificate"></i> certificate</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-check"></i> check</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-check-circle"></i> check-circle</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-check-circle-o"></i> check-circle-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-check-square"></i> check-square</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-check-square-o"></i> check-square-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-child"></i> child</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-circle"></i> circle</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-circle-o"></i> circle-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-circle-o-notch"></i> circle-o-notch</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-circle-thin"></i> circle-thin</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-clock-o"></i> clock-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-clone"></i> clone</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-close"></i> close <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-cloud"></i> cloud</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-cloud-download"></i> cloud-download</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-cloud-upload"></i> cloud-upload</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-code"></i> code</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-code-fork"></i> code-fork</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-coffee"></i> coffee</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-cog"></i> cog</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-cogs"></i> cogs</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-comment"></i> comment</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-comment-o"></i> comment-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-commenting"></i> commenting</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-commenting-o"></i> commenting-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-comments"></i> comments</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-comments-o"></i> comments-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-compass"></i> compass</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-copyright"></i> copyright</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-creative-commons"></i> creative-commons</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-credit-card"></i> credit-card</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-credit-card-alt"></i> credit-card-alt</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-crop"></i> crop</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-crosshairs"></i> crosshairs</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-cube"></i> cube</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-cubes"></i> cubes</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-cutlery"></i> cutlery</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-dashboard"></i> dashboard <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-database"></i> database</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-deaf"></i> deaf</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-deafness"></i> deafness <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-desktop"></i> desktop</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-diamond"></i> diamond</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-dot-circle-o"></i> dot-circle-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-download"></i> download</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-edit"></i> edit <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-ellipsis-h"></i> ellipsis-h</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-ellipsis-v"></i> ellipsis-v</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-envelope"></i> envelope</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-envelope-o"></i> envelope-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-envelope-square"></i> envelope-square</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-eraser"></i> eraser</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-exchange"></i> exchange</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-exclamation"></i> exclamation</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-exclamation-circle"></i> exclamation-circle</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-exclamation-triangle"></i> exclamation-triangle</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-external-link"></i> external-link</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-external-link-square"></i> external-link-square</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-eye"></i> eye</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-eye-slash"></i> eye-slash</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-eyedropper"></i> eyedropper</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-fax"></i> fax</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-feed"></i> feed <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-female"></i> female</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-fighter-jet"></i> fighter-jet</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-file-archive-o"></i> file-archive-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-file-audio-o"></i> file-audio-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-file-code-o"></i> file-code-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-file-excel-o"></i> file-excel-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-file-image-o"></i> file-image-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-file-movie-o"></i> file-movie-o <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-file-pdf-o"></i> file-pdf-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-file-photo-o"></i> file-photo-o <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-file-picture-o"></i> file-picture-o <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-file-powerpoint-o"></i> file-powerpoint-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-file-sound-o"></i> file-sound-o <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-file-video-o"></i> file-video-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-file-word-o"></i> file-word-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-file-zip-o"></i> file-zip-o <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-film"></i> film</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-filter"></i> filter</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-fire"></i> fire</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-fire-extinguisher"></i> fire-extinguisher</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-flag"></i> flag</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-flag-checkered"></i> flag-checkered</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-flag-o"></i> flag-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-flash"></i> flash <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-flask"></i> flask</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-folder"></i> folder</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-folder-o"></i> folder-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-folder-open"></i> folder-open</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-folder-open-o"></i> folder-open-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-frown-o"></i> frown-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-futbol-o"></i> futbol-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-gamepad"></i> gamepad</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-gavel"></i> gavel</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-gear"></i> gear <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-gears"></i> gears <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-gift"></i> gift</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-glass"></i> glass</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-globe"></i> globe</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-graduation-cap"></i> graduation-cap</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-group"></i> group <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-hand-grab-o"></i> hand-grab-o <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-hand-lizard-o"></i> hand-lizard-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-hand-paper-o"></i> hand-paper-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-hand-peace-o"></i> hand-peace-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-hand-pointer-o"></i> hand-pointer-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-hand-rock-o"></i> hand-rock-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-hand-scissors-o"></i> hand-scissors-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-hand-spock-o"></i> hand-spock-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-hand-stop-o"></i> hand-stop-o <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-hard-of-hearing"></i> hard-of-hearing <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-hashtag"></i> hashtag</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-hdd-o"></i> hdd-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-headphones"></i> headphones</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-heart"></i> heart</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-heart-o"></i> heart-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-heartbeat"></i> heartbeat</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-history"></i> history</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-home"></i> home</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-hotel"></i> hotel <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-hourglass"></i> hourglass</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-hourglass-1"></i> hourglass-1 <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-hourglass-2"></i> hourglass-2 <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-hourglass-3"></i> hourglass-3 <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-hourglass-end"></i> hourglass-end</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-hourglass-half"></i> hourglass-half</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-hourglass-o"></i> hourglass-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-hourglass-start"></i> hourglass-start</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-i-cursor"></i> i-cursor</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-image"></i> image <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-inbox"></i> inbox</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-industry"></i> industry</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-info"></i> info</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-info-circle"></i> info-circle</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-institution"></i> institution <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-key"></i> key</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-keyboard-o"></i> keyboard-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-language"></i> language</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-laptop"></i> laptop</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-leaf"></i> leaf</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-legal"></i> legal <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-lemon-o"></i> lemon-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-level-down"></i> level-down</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-level-up"></i> level-up</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-life-bouy"></i> life-bouy <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-life-buoy"></i> life-buoy <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-life-ring"></i> life-ring</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-life-saver"></i> life-saver <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-lightbulb-o"></i> lightbulb-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-line-chart"></i> line-chart</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-location-arrow"></i> location-arrow</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-lock"></i> lock</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-low-vision"></i> low-vision</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-magic"></i> magic</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-magnet"></i> magnet</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-mail-forward"></i> mail-forward <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-mail-reply"></i> mail-reply <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-mail-reply-all"></i> mail-reply-all <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-male"></i> male</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-map"></i> map</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-map-marker"></i> map-marker</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-map-o"></i> map-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-map-pin"></i> map-pin</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-map-signs"></i> map-signs</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-meh-o"></i> meh-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-microphone"></i> microphone</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-microphone-slash"></i> microphone-slash</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-minus"></i> minus</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-minus-circle"></i> minus-circle</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-minus-square"></i> minus-square</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-minus-square-o"></i> minus-square-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-mobile"></i> mobile</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-mobile-phone"></i> mobile-phone <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-money"></i> money</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-moon-o"></i> moon-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-mortar-board"></i> mortar-board <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-motorcycle"></i> motorcycle</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-mouse-pointer"></i> mouse-pointer</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-music"></i> music</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-navicon"></i> navicon <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-newspaper-o"></i> newspaper-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-object-group"></i> object-group</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-object-ungroup"></i> object-ungroup</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-paint-brush"></i> paint-brush</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-paper-plane"></i> paper-plane</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-paper-plane-o"></i> paper-plane-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-paw"></i> paw</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-pencil"></i> pencil</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-pencil-square"></i> pencil-square</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-pencil-square-o"></i> pencil-square-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-percent"></i> percent</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-phone"></i> phone</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-phone-square"></i> phone-square</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-photo"></i> photo <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-picture-o"></i> picture-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-pie-chart"></i> pie-chart</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-plane"></i> plane</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-plug"></i> plug</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-plus"></i> plus</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-plus-circle"></i> plus-circle</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-plus-square"></i> plus-square</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-plus-square-o"></i> plus-square-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-power-off"></i> power-off</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-print"></i> print</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-puzzle-piece"></i> puzzle-piece</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-qrcode"></i> qrcode</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-question"></i> question</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-question-circle"></i> question-circle</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-question-circle-o"></i> question-circle-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-quote-left"></i> quote-left</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-quote-right"></i> quote-right</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-random"></i> random</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-recycle"></i> recycle</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-refresh"></i> refresh</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-registered"></i> registered</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-remove"></i> remove <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-reorder"></i> reorder <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-reply"></i> reply</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-reply-all"></i> reply-all</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-retweet"></i> retweet</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-road"></i> road</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-rocket"></i> rocket</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-rss"></i> rss</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-rss-square"></i> rss-square</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-search"></i> search</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-search-minus"></i> search-minus</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-search-plus"></i> search-plus</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-send"></i> send <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-send-o"></i> send-o <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-server"></i> server</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-share"></i> share</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-share-alt"></i> share-alt</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-share-alt-square"></i> share-alt-square</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-share-square"></i> share-square</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-share-square-o"></i> share-square-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-shield"></i> shield</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-ship"></i> ship</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-shopping-bag"></i> shopping-bag</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-shopping-basket"></i> shopping-basket</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-shopping-cart"></i> shopping-cart</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-sign-in"></i> sign-in</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-sign-language"></i> sign-language</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-sign-out"></i> sign-out</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-signal"></i> signal</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-signing"></i> signing <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-sitemap"></i> sitemap</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-sliders"></i> sliders</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-smile-o"></i> smile-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-soccer-ball-o"></i> soccer-ball-o <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-sort"></i> sort</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-sort-alpha-asc"></i> sort-alpha-asc</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-sort-alpha-desc"></i> sort-alpha-desc</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-sort-amount-asc"></i> sort-amount-asc</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-sort-amount-desc"></i> sort-amount-desc</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-sort-asc"></i> sort-asc</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-sort-desc"></i> sort-desc</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-sort-down"></i> sort-down <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-sort-numeric-asc"></i> sort-numeric-asc</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-sort-numeric-desc"></i> sort-numeric-desc</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-sort-up"></i> sort-up <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-space-shuttle"></i> space-shuttle</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-spinner"></i> spinner</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-spoon"></i> spoon</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-square"></i> square</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-square-o"></i> square-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-star"></i> star</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-star-half"></i> star-half</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-star-half-empty"></i> star-half-empty <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-star-half-full"></i> star-half-full <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-star-half-o"></i> star-half-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-star-o"></i> star-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-sticky-note"></i> sticky-note</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-sticky-note-o"></i> sticky-note-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-street-view"></i> street-view</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-suitcase"></i> suitcase</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-sun-o"></i> sun-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-support"></i> support <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-tablet"></i> tablet</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-tachometer"></i> tachometer</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-tag"></i> tag</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-tags"></i> tags</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-tasks"></i> tasks</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-taxi"></i> taxi</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-television"></i> television</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-terminal"></i> terminal</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-thumb-tack"></i> thumb-tack</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-thumbs-down"></i> thumbs-down</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-thumbs-o-down"></i> thumbs-o-down</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-thumbs-o-up"></i> thumbs-o-up</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-thumbs-up"></i> thumbs-up</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-ticket"></i> ticket</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-times"></i> times</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-times-circle"></i> times-circle</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-times-circle-o"></i> times-circle-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-tint"></i> tint</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-toggle-down"></i> toggle-down <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-toggle-left"></i> toggle-left <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-toggle-off"></i> toggle-off</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-toggle-on"></i> toggle-on</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-toggle-right"></i> toggle-right <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-toggle-up"></i> toggle-up <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-trademark"></i> trademark</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-trash"></i> trash</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-trash-o"></i> trash-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-tree"></i> tree</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-trophy"></i> trophy</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-truck"></i> truck</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-tty"></i> tty</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-tv"></i> tv <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-umbrella"></i> umbrella</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-universal-access"></i> universal-access</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-university"></i> university</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-unlock"></i> unlock</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-unlock-alt"></i> unlock-alt</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-unsorted"></i> unsorted <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-upload"></i> upload</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-user"></i> user</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-user-plus"></i> user-plus</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-user-secret"></i> user-secret</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-user-times"></i> user-times</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-users"></i> users</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-video-camera"></i> video-camera</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-volume-control-phone"></i> volume-control-phone</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-volume-down"></i> volume-down</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-volume-off"></i> volume-off</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-volume-up"></i> volume-up</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-warning"></i> warning <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-wheelchair"></i> wheelchair</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-wheelchair-alt"></i> wheelchair-alt</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-wifi"></i> wifi</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-wrench"></i> wrench</div>
							</div>
						</div>
					</div>
					<!-- /web application icons -->


					<!-- Accessibility icons -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Accessibility icons</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<div class="row glyphs">
								<div class="col-md-3 col-sm-4"><i class="fa fa-american-sign-language-interpreting"></i> american-sign-language-interpreting</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-asl-interpreting"></i> asl-interpreting <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-assistive-listening-systems"></i> assistive-listening-systems</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-audio-description"></i> audio-description</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-blind"></i> blind</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-braille"></i> braille</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-cc"></i> cc</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-deaf"></i> deaf</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-deafness"></i> deafness <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-hard-of-hearing"></i> hard-of-hearing <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-low-vision"></i> low-vision</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-question-circle-o"></i> question-circle-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-sign-language"></i> sign-language</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-signing"></i> signing <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-tty"></i> tty</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-universal-access"></i> universal-access</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-volume-control-phone"></i> volume-control-phone</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-wheelchair"></i> wheelchair</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-wheelchair-alt"></i> wheelchair-alt</div>
							</div>
						</div>
					</div>
					<!-- /accessibility icons -->


					<!-- Hand icons -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Hand icons</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<div class="row glyphs">
								<div class="col-md-3 col-sm-4"><i class="fa fa-hand-grab-o"></i> hand-grab-o <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-hand-lizard-o"></i> hand-lizard-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-hand-o-down"></i> hand-o-down</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-hand-o-left"></i> hand-o-left</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-hand-o-right"></i> hand-o-right</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-hand-o-up"></i> hand-o-up</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-hand-paper-o"></i> hand-paper-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-hand-peace-o"></i> hand-peace-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-hand-pointer-o"></i> hand-pointer-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-hand-rock-o"></i> hand-rock-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-hand-scissors-o"></i> hand-scissors-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-hand-spock-o"></i> hand-spock-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-hand-stop-o"></i> hand-stop-o <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-thumbs-down"></i> thumbs-down</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-thumbs-o-down"></i> thumbs-o-down</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-thumbs-o-up"></i> thumbs-o-up</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-thumbs-up"></i> thumbs-up</div>
							</div>
						</div>
					</div>
					<!-- /hand icons -->


					<!-- Transportation icons -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Transportation icons</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<div class="row glyphs">
								<div class="col-md-3 col-sm-4"><i class="fa fa-ambulance"></i> ambulance</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-automobile"></i> automobile <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-bicycle"></i> bicycle</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-bus"></i> bus</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-cab"></i> cab <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-car"></i> car</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-fighter-jet"></i> fighter-jet</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-motorcycle"></i> motorcycle</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-plane"></i> plane</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-rocket"></i> rocket</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-ship"></i> ship</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-space-shuttle"></i> space-shuttle</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-subway"></i> subway</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-taxi"></i> taxi</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-train"></i> train</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-truck"></i> truck</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-wheelchair"></i> wheelchair</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-wheelchair-alt"></i> wheelchair-alt</div>
							</div>
						</div>
					</div>
					<!-- /transportation icons -->


					<!-- Gender icons -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Gender icons</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<div class="row glyphs">
								<div class="col-md-3 col-sm-4"><i class="fa fa-genderless"></i> genderless</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-intersex"></i> intersex <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-mars"></i> mars</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-mars-double"></i> mars-double</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-mars-stroke"></i> mars-stroke</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-mars-stroke-h"></i> mars-stroke-h</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-mars-stroke-v"></i> mars-stroke-v</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-mercury"></i> mercury</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-neuter"></i> neuter</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-transgender"></i> transgender</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-transgender-alt"></i> transgender-alt</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-venus"></i> venus</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-venus-double"></i> venus-double</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-venus-mars"></i> venus-mars</div>
							</div>
						</div>
					</div>
					<!-- /gender icons -->


					<!-- File type icons -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">File type icons</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<div class="row glyphs">
								<div class="col-md-3 col-sm-4"><i class="fa fa-file"></i> file</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-file-archive-o"></i> file-archive-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-file-audio-o"></i> file-audio-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-file-code-o"></i> file-code-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-file-excel-o"></i> file-excel-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-file-image-o"></i> file-image-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-file-movie-o"></i> file-movie-o <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-file-o"></i> file-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-file-pdf-o"></i> file-pdf-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-file-photo-o"></i> file-photo-o <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-file-picture-o"></i> file-picture-o <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-file-powerpoint-o"></i> file-powerpoint-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-file-sound-o"></i> file-sound-o <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-file-text"></i> file-text</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-file-text-o"></i> file-text-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-file-video-o"></i> file-video-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-file-word-o"></i> file-word-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-file-zip-o"></i> file-zip-o <span class="text-muted">(alias)</span></div>
							</div>
						</div>
					</div>
					<!-- /file type icons -->


					<!-- Spinner icons -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Spinner icons</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">

							<!-- Info alert -->
							<div class="alert alert-info alert-styled-left alert-arrow-left">
								<button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
								These icons work great with the <code>.fa-spin</code> class
						    </div>
						    <!-- /info alert -->

							<div class="row glyphs">
								<div class="col-md-3 col-sm-4"><i class="fa fa-circle-o-notch"></i> circle-o-notch</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-cog"></i> cog</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-gear"></i> gear <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-refresh"></i> refresh</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-spinner"></i> spinner</div>
							</div>
						</div>
					</div>
					<!-- /spinner icons -->


					<!-- Form control icons -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Form control icons</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<div class="row glyphs">
								<div class="col-md-3 col-sm-4"><i class="fa fa-check-square"></i> check-square</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-check-square-o"></i> check-square-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-circle"></i> circle</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-circle-o"></i> circle-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-dot-circle-o"></i> dot-circle-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-minus-square"></i> minus-square</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-minus-square-o"></i> minus-square-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-plus-square"></i> plus-square</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-plus-square-o"></i> plus-square-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-square"></i> square</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-square-o"></i> square-o</div>
							</div>
						</div>
					</div>
					<!-- /form control icons -->


					<!-- Payment icons -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Payment icons</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<div class="row glyphs">
								<div class="col-md-3 col-sm-4"><i class="fa fa-cc-amex"></i> cc-amex</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-cc-diners-club"></i> cc-diners-club</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-cc-discover"></i> cc-discover</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-cc-jcb"></i> cc-jcb</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-cc-mastercard"></i> cc-mastercard</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-cc-paypal"></i> cc-paypal</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-cc-stripe"></i> cc-stripe</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-cc-visa"></i> cc-visa</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-credit-card"></i> credit-card</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-credit-card-alt"></i> credit-card-alt</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-google-wallet"></i> google-wallet</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-paypal"></i> paypal</div>
							</div>
						</div>
					</div>
					<!-- /payment icons -->


					<!-- Chart icons -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Chart icons</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<div class="row glyphs">
								<div class="col-md-3 col-sm-4"><i class="fa fa-area-chart"></i> area-chart</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-bar-chart"></i> bar-chart</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-bar-chart-o"></i> bar-chart-o <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-line-chart"></i> line-chart</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-pie-chart"></i> pie-chart</div>
							</div>
						</div>
					</div>
					<!-- /chart icons -->


					<!-- Currency icons -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Currency icons</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<div class="row glyphs">
								<div class="col-md-3 col-sm-4"><i class="fa fa-bitcoin"></i> bitcoin <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-btc"></i> btc</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-cny"></i> cny <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-dollar"></i> dollar <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-eur"></i> eur</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-euro"></i> euro <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-gbp"></i> gbp</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-gg"></i> gg</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-gg-circle"></i> gg-circle</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-ils"></i> ils</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-inr"></i> inr</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-jpy"></i> jpy</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-krw"></i> krw</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-money"></i> money</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-rmb"></i> rmb <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-rouble"></i> rouble <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-rub"></i> rub</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-ruble"></i> ruble <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-rupee"></i> rupee <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-shekel"></i> shekel <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-sheqel"></i> sheqel <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-try"></i> try</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-turkish-lira"></i> turkish-lira <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-usd"></i> usd</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-won"></i> won <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-yen"></i> yen <span class="text-muted">(alias)</span></div>
							</div>
						</div>
					</div>
					<!-- /currency icons -->


					<!-- Text editor icons -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Text editor icons</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<div class="row glyphs">
								<div class="col-md-3 col-sm-4"><i class="fa fa-align-center"></i> align-center</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-align-justify"></i> align-justify</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-align-left"></i> align-left</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-align-right"></i> align-right</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-bold"></i> bold</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-chain"></i> chain <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-chain-broken"></i> chain-broken</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-clipboard"></i> clipboard</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-columns"></i> columns</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-copy"></i> copy <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-cut"></i> cut <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-dedent"></i> dedent <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-eraser"></i> eraser</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-file"></i> file</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-file-o"></i> file-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-file-text"></i> file-text</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-file-text-o"></i> file-text-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-files-o"></i> files-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-floppy-o"></i> floppy-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-font"></i> font</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-header"></i> header</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-indent"></i> indent</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-italic"></i> italic</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-link"></i>i> link</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-list"></i> list</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-list-alt"></i> list-alt</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-list-ol"></i> list-ol</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-list-ul"></i> list-ul</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-outdent"></i> outdent</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-paperclip"></i> paperclip</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-paragraph"></i> paragraph</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-paste"></i> paste <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-repeat"></i> repeat</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-rotate-left"></i> rotate-left <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-rotate-right"></i> rotate-right <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-save"></i> save <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-scissors"></i> scissors</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-strikethrough"></i> strikethrough</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-subscript"></i> subscript</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-superscript"></i> superscript</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-table"></i> table</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-text-height"></i> text-height</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-text-width"></i> text-width</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-th"></i> th</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-th-large"></i> th-large</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-th-list"></i> th-list</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-underline"></i> underline</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-undo"></i> undo</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-unlink"></i> unlink <span class="text-muted">(alias)</span></div>
							</div>
						</div>
					</div>
					<!-- /text editor icons -->


					<!-- Directional icons -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Directional icons</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<div class="row glyphs">
								<div class="col-md-3 col-sm-4"><i class="fa fa-angle-double-down"></i> angle-double-down</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-angle-double-left"></i> angle-double-left</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-angle-double-right"></i> angle-double-right</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-angle-double-up"></i> angle-double-up</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-angle-down"></i> angle-down</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-angle-left"></i> angle-left</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-angle-right"></i> angle-right</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-angle-up"></i> angle-up</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-down"></i> arrow-circle-down</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-left"></i> arrow-circle-left</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-o-down"></i> arrow-circle-o-down</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-o-left"></i> arrow-circle-o-left</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-o-right"></i> arrow-circle-o-right</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-o-up"></i> arrow-circle-o-up</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-right"></i> arrow-circle-right</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-up"></i> arrow-circle-up</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-arrow-down"></i> arrow-down</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-arrow-left"></i> arrow-left</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-arrow-right"></i> arrow-right</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-arrow-up"></i> arrow-up</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-arrows"></i> arrows</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-arrows-alt"></i> arrows-alt</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-arrows-h"></i> arrows-h</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-arrows-v"></i> arrows-v</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-caret-down"></i> caret-down</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-caret-left"></i> caret-left</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-caret-right"></i> caret-right</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-down"></i> caret-square-o-down</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-left"></i> caret-square-o-left</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-right"></i> caret-square-o-right</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-up"></i> caret-square-o-up</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-caret-up"></i> caret-up</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-chevron-circle-down"></i> chevron-circle-down</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-chevron-circle-left"></i> chevron-circle-left</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-chevron-circle-right"></i> chevron-circle-right</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-chevron-circle-up"></i> chevron-circle-up</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-chevron-down"></i> chevron-down</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-chevron-left"></i> chevron-left</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-chevron-right"></i> chevron-right</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-chevron-up"></i> chevron-up</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-exchange"></i> exchange</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-hand-o-down"></i> hand-o-down</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-hand-o-left"></i> hand-o-left</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-hand-o-right"></i> hand-o-right</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-hand-o-up"></i> hand-o-up</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-long-arrow-down"></i> long-arrow-down</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-long-arrow-left"></i> long-arrow-left</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-long-arrow-right"></i> long-arrow-right</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-long-arrow-up"></i> long-arrow-up</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-toggle-down"></i> toggle-down <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-toggle-left"></i> toggle-left <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-toggle-right"></i> toggle-right <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-toggle-up"></i> toggle-up <span class="text-muted">(alias)</span></div>
							</div>
						</div>
					</div>
					<!-- /directional icons -->


					<!-- Video player icons -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Video player icons</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<div class="row glyphs">
								<div class="col-md-3 col-sm-4"><i class="fa fa-arrows-alt"></i> arrows-alt</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-backward"></i> backward</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-compress"></i> compress</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-eject"></i> eject</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-expand"></i> expand</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-fast-backward"></i> fast-backward</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-fast-forward"></i> fast-forward</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-forward"></i> forward</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-pause"></i> pause</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-pause-circle"></i> pause-circle</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-pause-circle-o"></i> pause-circle-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-play"></i> play</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-play-circle"></i> play-circle</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-play-circle-o"></i> play-circle-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-random"></i> random</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-step-backward"></i> step-backward</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-step-forward"></i> step-forward</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-stop"></i> stop</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-stop-circle"></i> stop-circle</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-stop-circle-o"></i> stop-circle-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-youtube-play"></i> youtube-play</div>
							</div>
						</div>
					</div>
					<!-- /video player icons -->


					<!-- Brand icons -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Brand icons</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<div class="row glyphs">
								<div class="col-md-3 col-sm-4"><i class="fa fa-500px"></i> 500px</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-adn"></i> adn</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-amazon"></i> amazon</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-android"></i> android</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-angellist"></i> angellist</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-apple"></i> apple</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-behance"></i> behance</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-behance-square"></i> behance-square</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-bitbucket"></i> bitbucket</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-bitbucket-square"></i> bitbucket-square</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-bitcoin"></i> bitcoin <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-black-tie"></i> black-tie</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-bluetooth"></i> bluetooth</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-bluetooth-b"></i> bluetooth-b</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-btc"></i> btc</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-buysellads"></i> buysellads</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-cc-amex"></i> cc-amex</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-cc-diners-club"></i> cc-diners-club</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-cc-discover"></i> cc-discover</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-cc-jcb"></i> cc-jcb</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-cc-mastercard"></i> cc-mastercard</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-cc-paypal"></i> cc-paypal</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-cc-stripe"></i> cc-stripe</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-cc-visa"></i> cc-visa</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-chrome"></i> chrome</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-codepen"></i> codepen</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-codiepie"></i> codiepie</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-connectdevelop"></i> connectdevelop</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-contao"></i> contao</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-css3"></i> css3</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-dashcube"></i> dashcube</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-delicious"></i> delicious</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-deviantart"></i> deviantart</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-digg"></i> digg</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-dribbble"></i> dribbble</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-dropbox"></i> dropbox</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-drupal"></i> drupal</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-edge"></i> edge</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-empire"></i> empire</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-envira"></i> envira</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-expeditedssl"></i> expeditedssl</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-fa"></i> fa <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-facebook"></i> facebook</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-facebook-f"></i> facebook-f <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-facebook-official"></i> facebook-official</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-facebook-square"></i> facebook-square</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-firefox"></i> firefox</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-first-order"></i> first-order</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-flickr"></i> flickr</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-font-awesome"></i> font-awesome</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-fonticons"></i> fonticons</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-fort-awesome"></i> fort-awesome</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-forumbee"></i> forumbee</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-foursquare"></i> foursquare</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-ge"></i> ge <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-get-pocket"></i> get-pocket</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-gg"></i> gg</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-gg-circle"></i> gg-circle</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-git"></i> git</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-git-square"></i> git-square</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-github"></i> github</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-github-alt"></i> github-alt</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-github-square"></i> github-square</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-gitlab"></i> gitlab</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-gittip"></i> gittip <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-glide"></i> glide</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-glide-g"></i> glide-g</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-google"></i> google</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-google-plus"></i> google-plus</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-google-plus-circle"></i> google-plus-circle <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-google-plus-official"></i> google-plus-official</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-google-plus-square"></i> google-plus-square</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-google-wallet"></i> google-wallet</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-gratipay"></i> gratipay</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-hacker-news"></i> hacker-news</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-houzz"></i> houzz</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-html5"></i> html5</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-instagram"></i> instagram</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-internet-explorer"></i> internet-explorer</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-ioxhost"></i> ioxhost</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-joomla"></i> joomla</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-jsfiddle"></i> jsfiddle</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-lastfm"></i> lastfm</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-lastfm-square"></i> lastfm-square</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-leanpub"></i> leanpub</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-linkedin"></i> linkedin</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-linkedin-square"></i> linkedin-square</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-linux"></i> linux</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-maxcdn"></i> maxcdn</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-meanpath"></i> meanpath</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-medium"></i> medium</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-mixcloud"></i> mixcloud</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-modx"></i> modx</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-odnoklassniki"></i> odnoklassniki</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-odnoklassniki-square"></i> odnoklassniki-square</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-opencart"></i> opencart</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-openid"></i> openid</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-opera"></i> opera</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-optin-monster"></i> optin-monster</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-pagelines"></i> pagelines</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-paypal"></i> paypal</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-pied-piper"></i> pied-piper</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-pied-piper-alt"></i> pied-piper-alt</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-pied-piper-pp"></i> pied-piper-pp</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-pinterest"></i> pinterest</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-pinterest-p"></i> pinterest-p</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-pinterest-square"></i> pinterest-square</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-product-hunt"></i> product-hunt</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-qq"></i> qq</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-ra"></i> ra <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-rebel"></i> rebel</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-reddit"></i> reddit</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-reddit-alien"></i> reddit-alien</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-reddit-square"></i> reddit-square</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-renren"></i> renren</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-resistance"></i> resistance <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-safari"></i> safari</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-scribd"></i> scribd</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-sellsy"></i> sellsy</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-share-alt"></i> share-alt</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-share-alt-square"></i> share-alt-square</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-shirtsinbulk"></i> shirtsinbulk</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-simplybuilt"></i> simplybuilt</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-skyatlas"></i> skyatlas</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-skype"></i> skype</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-slack"></i> slack</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-slideshare"></i> slideshare</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-snapchat"></i> snapchat</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-snapchat-ghost"></i> snapchat-ghost</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-snapchat-square"></i> snapchat-square</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-soundcloud"></i> soundcloud</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-spotify"></i> spotify</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-stack-exchange"></i> stack-exchange</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-stack-overflow"></i> stack-overflow</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-steam"></i> steam</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-steam-square"></i> steam-square</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-stumbleupon"></i> stumbleupon</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-stumbleupon-circle"></i> stumbleupon-circle</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-tencent-weibo"></i> tencent-weibo</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-themeisle"></i> themeisle</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-trello"></i> trello</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-tripadvisor"></i> tripadvisor</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-tumblr"></i> tumblr</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-tumblr-square"></i> tumblr-square</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-twitch"></i> twitch</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-twitter"></i> twitter</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-twitter-square"></i> twitter-square</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-usb"></i> usb</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-viacoin"></i> viacoin</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-viadeo"></i> viadeo</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-viadeo-square"></i> viadeo-square</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-vimeo"></i> vimeo</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-vimeo-square"></i> vimeo-square</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-vine"></i> vine</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-vk"></i> vk</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-wechat"></i> wechat <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-weibo"></i> weibo</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-weixin"></i> weixin</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-whatsapp"></i> whatsapp</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-wikipedia-w"></i> wikipedia-w</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-windows"></i> windows</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-wordpress"></i> wordpress</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-wpbeginner"></i> wpbeginner</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-wpforms"></i> wpforms</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-xing"></i> xing</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-xing-square"></i> xing-square</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-y-combinator"></i> y-combinator</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-y-combinator-square"></i> y-combinator-square <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-yahoo"></i> yahoo</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-yc"></i> yc <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-yc-square"></i> yc-square <span class="text-muted">(alias)</span></div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-yelp"></i> yelp</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-yoast"></i> yoast</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-youtube"></i> youtube</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-youtube-play"></i> youtube-play</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-youtube-square"></i> youtube-square</div>
							</div>
						</div>
					</div>
					<!-- /brand icons -->


					<!-- Medical icons -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Medical icons</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<div class="row glyphs">
								<div class="col-md-3 col-sm-4"><i class="fa fa-ambulance"></i> ambulance</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-h-square"></i> h-square</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-heart"></i> heart</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-heart-o"></i> heart-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-heartbeat"></i> heartbeat</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-hospital-o"></i> hospital-o</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-medkit"></i> medkit</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-plus-square"></i> plus-square</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-stethoscope"></i> stethoscope</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-user-md"></i> user-md</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-wheelchair"></i> wheelchair</div>
								<div class="col-md-3 col-sm-4"><i class="fa fa-wheelchair-alt"></i> wheelchair-alt</div>
							</div>
						</div>
					</div>
					<!-- /medical icons -->


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
