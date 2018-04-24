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
										<li class="active"><a href="icons_icomoon">Icomoon</a></li>
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
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Icons</span> - Icomoon</h4>
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
							<li><a href="icons_icomoon">Icons</a></li>
							<li class="active">Icomoon</li>
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

					<!-- Icomoon icon set -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Icomoon icon set</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<p class="content-group">Icomoon is a custom icon set, includes 1145 icon glyphs based on 16px grid. This set is a <code>default</code> icon set of the template, majority of components are using Icomoon font family for UI elements instead of images, so all of them are retina-ready. <code>Glyphicon</code> and <code>FontAwesome</code> icon sets are also added, but as optional choice. In order to get the best look of UI elements, I recommend to include this icon set only as you can find perfectly crafted icons according to most of your common needs.</p>

							<div class="row glyphs">
								<div class="col-md-3 col-sm-4"><i class="icon-home"></i> icon-home</div>
								<div class="col-md-3 col-sm-4"><i class="icon-home2"></i> icon-home2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-home5"></i> icon-home5</div>
								<div class="col-md-3 col-sm-4"><i class="icon-home7"></i> icon-home7</div>
								<div class="col-md-3 col-sm-4"><i class="icon-home8"></i> icon-home8</div>
								<div class="col-md-3 col-sm-4"><i class="icon-home9"></i> icon-home9</div>
								<div class="col-md-3 col-sm-4"><i class="icon-office"></i> icon-office</div>
								<div class="col-md-3 col-sm-4"><i class="icon-city"></i> icon-city</div>
								<div class="col-md-3 col-sm-4"><i class="icon-newspaper"></i> icon-newspaper</div>
								<div class="col-md-3 col-sm-4"><i class="icon-magazine"></i> icon-magazine</div>
								<div class="col-md-3 col-sm-4"><i class="icon-design"></i> icon-design</div>
								<div class="col-md-3 col-sm-4"><i class="icon-pencil"></i> icon-pencil</div>
								<div class="col-md-3 col-sm-4"><i class="icon-pencil3"></i> icon-pencil3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-pencil4"></i> icon-pencil4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-pencil5"></i> icon-pencil5</div>
								<div class="col-md-3 col-sm-4"><i class="icon-pencil6"></i> icon-pencil6</div>
								<div class="col-md-3 col-sm-4"><i class="icon-pencil7"></i> icon-pencil7</div>
								<div class="col-md-3 col-sm-4"><i class="icon-eraser"></i> icon-eraser</div>
								<div class="col-md-3 col-sm-4"><i class="icon-eraser2"></i> icon-eraser2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-eraser3"></i> icon-eraser3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-quill2"></i> icon-quill2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-quill4"></i> icon-quill4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-pen"></i> icon-pen</div>
								<div class="col-md-3 col-sm-4"><i class="icon-pen-plus"></i> icon-pen-plus</div>
								<div class="col-md-3 col-sm-4"><i class="icon-pen-minus"></i> icon-pen-minus</div>
								<div class="col-md-3 col-sm-4"><i class="icon-pen2"></i> icon-pen2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-blog"></i> icon-blog</div>
								<div class="col-md-3 col-sm-4"><i class="icon-pen6"></i> icon-pen6</div>
								<div class="col-md-3 col-sm-4"><i class="icon-brush"></i> icon-brush</div>
								<div class="col-md-3 col-sm-4"><i class="icon-spray"></i> icon-spray</div>
								<div class="col-md-3 col-sm-4"><i class="icon-color-sampler"></i> icon-color-sampler</div>
								<div class="col-md-3 col-sm-4"><i class="icon-toggle"></i> icon-toggle</div>
								<div class="col-md-3 col-sm-4"><i class="icon-bucket"></i> icon-bucket</div>
								<div class="col-md-3 col-sm-4"><i class="icon-gradient"></i> icon-gradient</div>
								<div class="col-md-3 col-sm-4"><i class="icon-eyedropper"></i> icon-eyedropper</div>
								<div class="col-md-3 col-sm-4"><i class="icon-eyedropper2"></i> icon-eyedropper2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-eyedropper3"></i> icon-eyedropper3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-droplet"></i> icon-droplet</div>
								<div class="col-md-3 col-sm-4"><i class="icon-droplet2"></i> icon-droplet2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-color-clear"></i> icon-color-clear</div>
								<div class="col-md-3 col-sm-4"><i class="icon-paint-format"></i> icon-paint-format</div>
								<div class="col-md-3 col-sm-4"><i class="icon-stamp"></i> icon-stamp</div>
								<div class="col-md-3 col-sm-4"><i class="icon-image2"></i> icon-image2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-image-compare"></i> icon-image-compare</div>
								<div class="col-md-3 col-sm-4"><i class="icon-images2"></i> icon-images2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-image3"></i> icon-image3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-images3"></i> icon-images3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-image4"></i> icon-image4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-image5"></i> icon-image5</div>
								<div class="col-md-3 col-sm-4"><i class="icon-camera"></i> icon-camera</div>
								<div class="col-md-3 col-sm-4"><i class="icon-shutter"></i> icon-shutter</div>
								<div class="col-md-3 col-sm-4"><i class="icon-headphones"></i> icon-headphones</div>
								<div class="col-md-3 col-sm-4"><i class="icon-headset"></i> icon-headset</div>
								<div class="col-md-3 col-sm-4"><i class="icon-music"></i> icon-music</div>
								<div class="col-md-3 col-sm-4"><i class="icon-album"></i> icon-album</div>
								<div class="col-md-3 col-sm-4"><i class="icon-tape"></i> icon-tape</div>
								<div class="col-md-3 col-sm-4"><i class="icon-piano"></i> icon-piano</div>
								<div class="col-md-3 col-sm-4"><i class="icon-speakers"></i> icon-speakers</div>
								<div class="col-md-3 col-sm-4"><i class="icon-play"></i> icon-play</div>
								<div class="col-md-3 col-sm-4"><i class="icon-clapboard-play"></i> icon-clapboard-play</div>
								<div class="col-md-3 col-sm-4"><i class="icon-clapboard"></i> icon-clapboard</div>
								<div class="col-md-3 col-sm-4"><i class="icon-media"></i> icon-media</div>
								<div class="col-md-3 col-sm-4"><i class="icon-presentation"></i> icon-presentation</div>
								<div class="col-md-3 col-sm-4"><i class="icon-movie"></i> icon-movie</div>
								<div class="col-md-3 col-sm-4"><i class="icon-film"></i> icon-film</div>
								<div class="col-md-3 col-sm-4"><i class="icon-film2"></i> icon-film2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-film3"></i> icon-film3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-film4"></i> icon-film4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-video-camera"></i> icon-video-camera</div>
								<div class="col-md-3 col-sm-4"><i class="icon-video-camera2"></i> icon-video-camera2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-video-camera-slash"></i> icon-video-camera-slash</div>
								<div class="col-md-3 col-sm-4"><i class="icon-video-camera3"></i> icon-video-camera3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-dice"></i> icon-dice</div>
								<div class="col-md-3 col-sm-4"><i class="icon-chess-king"></i> icon-chess-king</div>
								<div class="col-md-3 col-sm-4"><i class="icon-chess-queen"></i> icon-chess-queen</div>
								<div class="col-md-3 col-sm-4"><i class="icon-chess"></i> icon-chess</div>
								<div class="col-md-3 col-sm-4"><i class="icon-megaphone"></i> icon-megaphone</div>
								<div class="col-md-3 col-sm-4"><i class="icon-new"></i> icon-new</div>
								<div class="col-md-3 col-sm-4"><i class="icon-connection"></i> icon-connection</div>
								<div class="col-md-3 col-sm-4"><i class="icon-station"></i> icon-station</div>
								<div class="col-md-3 col-sm-4"><i class="icon-satellite-dish2"></i> icon-satellite-dish2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-feed"></i> icon-feed</div>
								<div class="col-md-3 col-sm-4"><i class="icon-mic2"></i> icon-mic2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-mic-off2"></i> icon-mic-off2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-book"></i> icon-book</div>
								<div class="col-md-3 col-sm-4"><i class="icon-book2"></i> icon-book2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-book-play"></i> icon-book-play</div>
								<div class="col-md-3 col-sm-4"><i class="icon-book3"></i> icon-book3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-bookmark"></i> icon-bookmark</div>
								<div class="col-md-3 col-sm-4"><i class="icon-books"></i> icon-books</div>
								<div class="col-md-3 col-sm-4"><i class="icon-archive"></i> icon-archive</div>
								<div class="col-md-3 col-sm-4"><i class="icon-reading"></i> icon-reading</div>
								<div class="col-md-3 col-sm-4"><i class="icon-library2"></i> icon-library2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-graduation2"></i> icon-graduation2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-file-text"></i> icon-file-text</div>
								<div class="col-md-3 col-sm-4"><i class="icon-profile"></i> icon-profile</div>
								<div class="col-md-3 col-sm-4"><i class="icon-file-empty"></i> icon-file-empty</div>
								<div class="col-md-3 col-sm-4"><i class="icon-file-empty2"></i> icon-file-empty2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-files-empty"></i> icon-files-empty</div>
								<div class="col-md-3 col-sm-4"><i class="icon-files-empty2"></i> icon-files-empty2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-file-plus"></i> icon-file-plus</div>
								<div class="col-md-3 col-sm-4"><i class="icon-file-plus2"></i> icon-file-plus2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-file-minus"></i> icon-file-minus</div>
								<div class="col-md-3 col-sm-4"><i class="icon-file-minus2"></i> icon-file-minus2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-file-download"></i> icon-file-download</div>
								<div class="col-md-3 col-sm-4"><i class="icon-file-download2"></i> icon-file-download2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-file-upload"></i> icon-file-upload</div>
								<div class="col-md-3 col-sm-4"><i class="icon-file-upload2"></i> icon-file-upload2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-file-check"></i> icon-file-check</div>
								<div class="col-md-3 col-sm-4"><i class="icon-file-check2"></i> icon-file-check2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-file-eye"></i> icon-file-eye</div>
								<div class="col-md-3 col-sm-4"><i class="icon-file-eye2"></i> icon-file-eye2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-file-text2"></i> icon-file-text2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-file-text3"></i> icon-file-text3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-file-picture"></i> icon-file-picture</div>
								<div class="col-md-3 col-sm-4"><i class="icon-file-picture2"></i> icon-file-picture2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-file-music"></i> icon-file-music</div>
								<div class="col-md-3 col-sm-4"><i class="icon-file-music2"></i> icon-file-music2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-file-play"></i> icon-file-play</div>
								<div class="col-md-3 col-sm-4"><i class="icon-file-play2"></i> icon-file-play2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-file-video"></i> icon-file-video</div>
								<div class="col-md-3 col-sm-4"><i class="icon-file-video2"></i> icon-file-video2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-copy"></i> icon-copy</div>
								<div class="col-md-3 col-sm-4"><i class="icon-copy2"></i> icon-copy2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-file-zip"></i> icon-file-zip</div>
								<div class="col-md-3 col-sm-4"><i class="icon-file-zip2"></i> icon-file-zip2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-file-xml"></i> icon-file-xml</div>
								<div class="col-md-3 col-sm-4"><i class="icon-file-xml2"></i> icon-file-xml2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-file-css"></i> icon-file-css</div>
								<div class="col-md-3 col-sm-4"><i class="icon-file-css2"></i> icon-file-css2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-file-presentation"></i> icon-file-presentation</div>
								<div class="col-md-3 col-sm-4"><i class="icon-file-presentation2"></i> icon-file-presentation2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-file-stats"></i> icon-file-stats</div>
								<div class="col-md-3 col-sm-4"><i class="icon-file-stats2"></i> icon-file-stats2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-file-locked"></i> icon-file-locked</div>
								<div class="col-md-3 col-sm-4"><i class="icon-file-locked2"></i> icon-file-locked2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-file-spreadsheet"></i> icon-file-spreadsheet</div>
								<div class="col-md-3 col-sm-4"><i class="icon-file-spreadsheet2"></i> icon-file-spreadsheet2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-copy3"></i> icon-copy3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-copy4"></i> icon-copy4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-paste"></i> icon-paste</div>
								<div class="col-md-3 col-sm-4"><i class="icon-paste2"></i> icon-paste2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-paste3"></i> icon-paste3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-paste4"></i> icon-paste4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-stack"></i> icon-stack</div>
								<div class="col-md-3 col-sm-4"><i class="icon-stack2"></i> icon-stack2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-stack3"></i> icon-stack3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-folder"></i> icon-folder</div>
								<div class="col-md-3 col-sm-4"><i class="icon-folder-search"></i> icon-folder-search</div>
								<div class="col-md-3 col-sm-4"><i class="icon-folder-download"></i> icon-folder-download</div>
								<div class="col-md-3 col-sm-4"><i class="icon-folder-upload"></i> icon-folder-upload</div>
								<div class="col-md-3 col-sm-4"><i class="icon-folder-plus"></i> icon-folder-plus</div>
								<div class="col-md-3 col-sm-4"><i class="icon-folder-plus2"></i> icon-folder-plus2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-folder-minus"></i> icon-folder-minus</div>
								<div class="col-md-3 col-sm-4"><i class="icon-folder-minus2"></i> icon-folder-minus2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-folder-check"></i> icon-folder-check</div>
								<div class="col-md-3 col-sm-4"><i class="icon-folder-heart"></i> icon-folder-heart</div>
								<div class="col-md-3 col-sm-4"><i class="icon-folder-remove"></i> icon-folder-remove</div>
								<div class="col-md-3 col-sm-4"><i class="icon-folder2"></i> icon-folder2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-folder-open"></i> icon-folder-open</div>
								<div class="col-md-3 col-sm-4"><i class="icon-folder3"></i> icon-folder3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-folder4"></i> icon-folder4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-folder-plus3"></i> icon-folder-plus3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-folder-minus3"></i> icon-folder-minus3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-folder-plus4"></i> icon-folder-plus4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-folder-minus4"></i> icon-folder-minus4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-folder-download2"></i> icon-folder-download2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-folder-upload2"></i> icon-folder-upload2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-folder-download3"></i> icon-folder-download3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-folder-upload3"></i> icon-folder-upload3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-folder5"></i> icon-folder5</div>
								<div class="col-md-3 col-sm-4"><i class="icon-folder-open2"></i> icon-folder-open2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-folder6"></i> icon-folder6</div>
								<div class="col-md-3 col-sm-4"><i class="icon-folder-open3"></i> icon-folder-open3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-certificate"></i> icon-certificate</div>
								<div class="col-md-3 col-sm-4"><i class="icon-cc"></i> icon-cc</div>
								<div class="col-md-3 col-sm-4"><i class="icon-price-tag"></i> icon-price-tag</div>
								<div class="col-md-3 col-sm-4"><i class="icon-price-tag2"></i> icon-price-tag2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-price-tags"></i> icon-price-tags</div>
								<div class="col-md-3 col-sm-4"><i class="icon-price-tag3"></i> icon-price-tag3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-price-tags2"></i> icon-price-tags2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-barcode2"></i> icon-barcode2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-qrcode"></i> icon-qrcode</div>
								<div class="col-md-3 col-sm-4"><i class="icon-ticket"></i> icon-ticket</div>
								<div class="col-md-3 col-sm-4"><i class="icon-theater"></i> icon-theater</div>
								<div class="col-md-3 col-sm-4"><i class="icon-store"></i> icon-store</div>
								<div class="col-md-3 col-sm-4"><i class="icon-store2"></i> icon-store2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-cart"></i> icon-cart</div>
								<div class="col-md-3 col-sm-4"><i class="icon-cart2"></i> icon-cart2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-cart4"></i> icon-cart4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-cart5"></i> icon-cart5</div>
								<div class="col-md-3 col-sm-4"><i class="icon-cart-add"></i> icon-cart-add</div>
								<div class="col-md-3 col-sm-4"><i class="icon-cart-add2"></i> icon-cart-add2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-cart-remove"></i> icon-cart-remove</div>
								<div class="col-md-3 col-sm-4"><i class="icon-basket"></i> icon-basket</div>
								<div class="col-md-3 col-sm-4"><i class="icon-bag"></i> icon-bag</div>
								<div class="col-md-3 col-sm-4"><i class="icon-percent"></i> icon-percent</div>
								<div class="col-md-3 col-sm-4"><i class="icon-coins"></i> icon-coins</div>
								<div class="col-md-3 col-sm-4"><i class="icon-coin-dollar"></i> icon-coin-dollar</div>
								<div class="col-md-3 col-sm-4"><i class="icon-coin-euro"></i> icon-coin-euro</div>
								<div class="col-md-3 col-sm-4"><i class="icon-coin-pound"></i> icon-coin-pound</div>
								<div class="col-md-3 col-sm-4"><i class="icon-coin-yen"></i> icon-coin-yen</div>
								<div class="col-md-3 col-sm-4"><i class="icon-piggy-bank"></i> icon-piggy-bank</div>
								<div class="col-md-3 col-sm-4"><i class="icon-wallet"></i> icon-wallet</div>
								<div class="col-md-3 col-sm-4"><i class="icon-cash"></i> icon-cash</div>
								<div class="col-md-3 col-sm-4"><i class="icon-cash2"></i> icon-cash2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-cash3"></i> icon-cash3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-cash4"></i> icon-cash4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-credit-card"></i> icon-credit-card</div>
								<div class="col-md-3 col-sm-4"><i class="icon-credit-card2"></i> icon-credit-card2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-calculator4"></i> icon-calculator4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-calculator2"></i> icon-calculator2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-calculator3"></i> icon-calculator3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-chip"></i> icon-chip</div>
								<div class="col-md-3 col-sm-4"><i class="icon-lifebuoy"></i> icon-lifebuoy</div>
								<div class="col-md-3 col-sm-4"><i class="icon-phone"></i> icon-phone</div>
								<div class="col-md-3 col-sm-4"><i class="icon-phone2"></i> icon-phone2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-phone-slash"></i> icon-phone-slash</div>
								<div class="col-md-3 col-sm-4"><i class="icon-phone-wave"></i> icon-phone-wave</div>
								<div class="col-md-3 col-sm-4"><i class="icon-phone-plus"></i> icon-phone-plus</div>
								<div class="col-md-3 col-sm-4"><i class="icon-phone-minus"></i> icon-phone-minus</div>
								<div class="col-md-3 col-sm-4"><i class="icon-phone-plus2"></i> icon-phone-plus2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-phone-minus2"></i> icon-phone-minus2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-phone-incoming"></i> icon-phone-incoming</div>
								<div class="col-md-3 col-sm-4"><i class="icon-phone-outgoing"></i> icon-phone-outgoing</div>
								<div class="col-md-3 col-sm-4"><i class="icon-phone-hang-up"></i> icon-phone-hang-up</div>
								<div class="col-md-3 col-sm-4"><i class="icon-address-book"></i> icon-address-book</div>
								<div class="col-md-3 col-sm-4"><i class="icon-address-book2"></i> icon-address-book2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-address-book3"></i> icon-address-book3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-notebook"></i> icon-notebook</div>
								<div class="col-md-3 col-sm-4"><i class="icon-envelop"></i> icon-envelop</div>
								<div class="col-md-3 col-sm-4"><i class="icon-envelop2"></i> icon-envelop2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-envelop3"></i> icon-envelop3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-envelop4"></i> icon-envelop4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-envelop5"></i> icon-envelop5</div>
								<div class="col-md-3 col-sm-4"><i class="icon-mailbox"></i> icon-mailbox</div>
								<div class="col-md-3 col-sm-4"><i class="icon-pushpin"></i> icon-pushpin</div>
								<div class="col-md-3 col-sm-4"><i class="icon-location3"></i> icon-location3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-location4"></i> icon-location4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-compass4"></i> icon-compass4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-map"></i> icon-map</div>
								<div class="col-md-3 col-sm-4"><i class="icon-map4"></i> icon-map4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-map5"></i> icon-map5</div>
								<div class="col-md-3 col-sm-4"><i class="icon-direction"></i> icon-direction</div>
								<div class="col-md-3 col-sm-4"><i class="icon-reset"></i> icon-reset</div>
								<div class="col-md-3 col-sm-4"><i class="icon-history"></i> icon-history</div>
								<div class="col-md-3 col-sm-4"><i class="icon-watch"></i> icon-watch</div>
								<div class="col-md-3 col-sm-4"><i class="icon-watch2"></i> icon-watch2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-alarm"></i> icon-alarm</div>
								<div class="col-md-3 col-sm-4"><i class="icon-alarm-add"></i> icon-alarm-add</div>
								<div class="col-md-3 col-sm-4"><i class="icon-alarm-check"></i> icon-alarm-check</div>
								<div class="col-md-3 col-sm-4"><i class="icon-alarm-cancel"></i> icon-alarm-cancel</div>
								<div class="col-md-3 col-sm-4"><i class="icon-bell2"></i> icon-bell2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-bell3"></i> icon-bell3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-bell-plus"></i> icon-bell-plus</div>
								<div class="col-md-3 col-sm-4"><i class="icon-bell-minus"></i> icon-bell-minus</div>
								<div class="col-md-3 col-sm-4"><i class="icon-bell-check"></i> icon-bell-check</div>
								<div class="col-md-3 col-sm-4"><i class="icon-bell-cross"></i> icon-bell-cross</div>
								<div class="col-md-3 col-sm-4"><i class="icon-calendar"></i> icon-calendar</div>
								<div class="col-md-3 col-sm-4"><i class="icon-calendar2"></i> icon-calendar2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-calendar3"></i> icon-calendar3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-calendar52"></i> icon-calendar52</div>
								<div class="col-md-3 col-sm-4"><i class="icon-printer"></i> icon-printer</div>
								<div class="col-md-3 col-sm-4"><i class="icon-printer2"></i> icon-printer2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-printer4"></i> icon-printer4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-shredder"></i> icon-shredder</div>
								<div class="col-md-3 col-sm-4"><i class="icon-mouse"></i> icon-mouse</div>
								<div class="col-md-3 col-sm-4"><i class="icon-mouse-left"></i> icon-mouse-left</div>
								<div class="col-md-3 col-sm-4"><i class="icon-mouse-right"></i> icon-mouse-right</div>
								<div class="col-md-3 col-sm-4"><i class="icon-keyboard"></i> icon-keyboard</div>
								<div class="col-md-3 col-sm-4"><i class="icon-typewriter"></i> icon-typewriter</div>
								<div class="col-md-3 col-sm-4"><i class="icon-display"></i> icon-display</div>
								<div class="col-md-3 col-sm-4"><i class="icon-display4"></i> icon-display4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-laptop"></i> icon-laptop</div>
								<div class="col-md-3 col-sm-4"><i class="icon-mobile"></i> icon-mobile</div>
								<div class="col-md-3 col-sm-4"><i class="icon-mobile2"></i> icon-mobile2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-tablet"></i> icon-tablet</div>
								<div class="col-md-3 col-sm-4"><i class="icon-mobile3"></i> icon-mobile3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-tv"></i> icon-tv</div>
								<div class="col-md-3 col-sm-4"><i class="icon-radio"></i> icon-radio</div>
								<div class="col-md-3 col-sm-4"><i class="icon-cabinet"></i> icon-cabinet</div>
								<div class="col-md-3 col-sm-4"><i class="icon-drawer"></i> icon-drawer</div>
								<div class="col-md-3 col-sm-4"><i class="icon-drawer2"></i> icon-drawer2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-drawer-out"></i> icon-drawer-out</div>
								<div class="col-md-3 col-sm-4"><i class="icon-drawer-in"></i> icon-drawer-in</div>
								<div class="col-md-3 col-sm-4"><i class="icon-drawer3"></i> icon-drawer3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-box"></i> icon-box</div>
								<div class="col-md-3 col-sm-4"><i class="icon-box-add"></i> icon-box-add</div>
								<div class="col-md-3 col-sm-4"><i class="icon-box-remove"></i> icon-box-remove</div>
								<div class="col-md-3 col-sm-4"><i class="icon-download"></i> icon-download</div>
								<div class="col-md-3 col-sm-4"><i class="icon-upload"></i> icon-upload</div>
								<div class="col-md-3 col-sm-4"><i class="icon-floppy-disk"></i> icon-floppy-disk</div>
								<div class="col-md-3 col-sm-4"><i class="icon-floppy-disks"></i> icon-floppy-disks</div>
								<div class="col-md-3 col-sm-4"><i class="icon-usb-stick"></i> icon-usb-stick</div>
								<div class="col-md-3 col-sm-4"><i class="icon-drive"></i> icon-drive</div>
								<div class="col-md-3 col-sm-4"><i class="icon-server"></i> icon-server</div>
								<div class="col-md-3 col-sm-4"><i class="icon-database"></i> icon-database</div>
								<div class="col-md-3 col-sm-4"><i class="icon-database2"></i> icon-database2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-database4"></i> icon-database4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-database-menu"></i> icon-database-menu</div>
								<div class="col-md-3 col-sm-4"><i class="icon-database-add"></i> icon-database-add</div>
								<div class="col-md-3 col-sm-4"><i class="icon-database-remove"></i> icon-database-remove</div>
								<div class="col-md-3 col-sm-4"><i class="icon-database-insert"></i> icon-database-insert</div>
								<div class="col-md-3 col-sm-4"><i class="icon-database-export"></i> icon-database-export</div>
								<div class="col-md-3 col-sm-4"><i class="icon-database-upload"></i> icon-database-upload</div>
								<div class="col-md-3 col-sm-4"><i class="icon-database-refresh"></i> icon-database-refresh</div>
								<div class="col-md-3 col-sm-4"><i class="icon-database-diff"></i> icon-database-diff</div>
								<div class="col-md-3 col-sm-4"><i class="icon-database-edit2"></i> icon-database-edit2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-database-check"></i> icon-database-check</div>
								<div class="col-md-3 col-sm-4"><i class="icon-database-arrow"></i> icon-database-arrow</div>
								<div class="col-md-3 col-sm-4"><i class="icon-database-time2"></i> icon-database-time2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-undo"></i> icon-undo</div>
								<div class="col-md-3 col-sm-4"><i class="icon-redo"></i> icon-redo</div>
								<div class="col-md-3 col-sm-4"><i class="icon-rotate-ccw"></i> icon-rotate-ccw</div>
								<div class="col-md-3 col-sm-4"><i class="icon-rotate-cw"></i> icon-rotate-cw</div>
								<div class="col-md-3 col-sm-4"><i class="icon-rotate-ccw2"></i> icon-rotate-ccw2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-rotate-cw2"></i> icon-rotate-cw2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-rotate-ccw3"></i> icon-rotate-ccw3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-rotate-cw3"></i> icon-rotate-cw3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-flip-vertical2"></i> icon-flip-vertical2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-flip-horizontal2"></i> icon-flip-horizontal2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-flip-vertical3"></i> icon-flip-vertical3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-flip-vertical4"></i> icon-flip-vertical4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-angle"></i> icon-angle</div>
								<div class="col-md-3 col-sm-4"><i class="icon-shear"></i> icon-shear</div>
								<div class="col-md-3 col-sm-4"><i class="icon-align-left"></i> icon-align-left</div>
								<div class="col-md-3 col-sm-4"><i class="icon-align-center-horizontal"></i> icon-align-center-horizontal</div>
								<div class="col-md-3 col-sm-4"><i class="icon-align-right"></i> icon-align-right</div>
								<div class="col-md-3 col-sm-4"><i class="icon-align-top"></i> icon-align-top</div>
								<div class="col-md-3 col-sm-4"><i class="icon-align-center-vertical"></i> icon-align-center-vertical</div>
								<div class="col-md-3 col-sm-4"><i class="icon-align-bottom"></i> icon-align-bottom</div>
								<div class="col-md-3 col-sm-4"><i class="icon-undo2"></i> icon-undo2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-redo2"></i> icon-redo2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-forward"></i> icon-forward</div>
								<div class="col-md-3 col-sm-4"><i class="icon-reply"></i> icon-reply</div>
								<div class="col-md-3 col-sm-4"><i class="icon-reply-all"></i> icon-reply-all</div>
								<div class="col-md-3 col-sm-4"><i class="icon-bubble"></i> icon-bubble</div>
								<div class="col-md-3 col-sm-4"><i class="icon-bubbles"></i> icon-bubbles</div>
								<div class="col-md-3 col-sm-4"><i class="icon-bubbles2"></i> icon-bubbles2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-bubble2"></i> icon-bubble2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-bubbles3"></i> icon-bubbles3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-bubbles4"></i> icon-bubbles4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-bubble-notification"></i> icon-bubble-notification</div>
								<div class="col-md-3 col-sm-4"><i class="icon-bubbles5"></i> icon-bubbles5</div>
								<div class="col-md-3 col-sm-4"><i class="icon-bubbles6"></i> icon-bubbles6</div>
								<div class="col-md-3 col-sm-4"><i class="icon-bubble6"></i> icon-bubble6</div>
								<div class="col-md-3 col-sm-4"><i class="icon-bubbles7"></i> icon-bubbles7</div>
								<div class="col-md-3 col-sm-4"><i class="icon-bubble7"></i> icon-bubble7</div>
								<div class="col-md-3 col-sm-4"><i class="icon-bubbles8"></i> icon-bubbles8</div>
								<div class="col-md-3 col-sm-4"><i class="icon-bubble8"></i> icon-bubble8</div>
								<div class="col-md-3 col-sm-4"><i class="icon-bubble-dots3"></i> icon-bubble-dots3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-bubble-lines3"></i> icon-bubble-lines3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-bubble9"></i> icon-bubble9</div>
								<div class="col-md-3 col-sm-4"><i class="icon-bubble-dots4"></i> icon-bubble-dots4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-bubble-lines4"></i> icon-bubble-lines4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-bubbles9"></i> icon-bubbles9</div>
								<div class="col-md-3 col-sm-4"><i class="icon-bubbles10"></i> icon-bubbles10</div>
								<div class="col-md-3 col-sm-4"><i class="icon-user"></i> icon-user</div>
								<div class="col-md-3 col-sm-4"><i class="icon-users"></i> icon-users</div>
								<div class="col-md-3 col-sm-4"><i class="icon-user-plus"></i> icon-user-plus</div>
								<div class="col-md-3 col-sm-4"><i class="icon-user-minus"></i> icon-user-minus</div>
								<div class="col-md-3 col-sm-4"><i class="icon-user-cancel"></i> icon-user-cancel</div>
								<div class="col-md-3 col-sm-4"><i class="icon-user-block"></i> icon-user-block</div>
								<div class="col-md-3 col-sm-4"><i class="icon-user-lock"></i> icon-user-lock</div>
								<div class="col-md-3 col-sm-4"><i class="icon-user-check"></i> icon-user-check</div>
								<div class="col-md-3 col-sm-4"><i class="icon-users2"></i> icon-users2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-users4"></i> icon-users4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-user-tie"></i> icon-user-tie</div>
								<div class="col-md-3 col-sm-4"><i class="icon-collaboration"></i> icon-collaboration</div>
								<div class="col-md-3 col-sm-4"><i class="icon-vcard"></i> icon-vcard</div>
								<div class="col-md-3 col-sm-4"><i class="icon-hat"></i> icon-hat</div>
								<div class="col-md-3 col-sm-4"><i class="icon-bowtie"></i> icon-bowtie</div>
								<div class="col-md-3 col-sm-4"><i class="icon-quotes-left"></i> icon-quotes-left</div>
								<div class="col-md-3 col-sm-4"><i class="icon-quotes-right"></i> icon-quotes-right</div>
								<div class="col-md-3 col-sm-4"><i class="icon-quotes-left2"></i> icon-quotes-left2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-quotes-right2"></i> icon-quotes-right2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-hour-glass"></i> icon-hour-glass</div>
								<div class="col-md-3 col-sm-4"><i class="icon-hour-glass2"></i> icon-hour-glass2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-hour-glass3"></i> icon-hour-glass3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-spinner"></i> icon-spinner</div>
								<div class="col-md-3 col-sm-4"><i class="icon-spinner2"></i> icon-spinner2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-spinner3"></i> icon-spinner3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-spinner4"></i> icon-spinner4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-spinner6"></i> icon-spinner6</div>
								<div class="col-md-3 col-sm-4"><i class="icon-spinner9"></i> icon-spinner9</div>
								<div class="col-md-3 col-sm-4"><i class="icon-spinner10"></i> icon-spinner10</div>
								<div class="col-md-3 col-sm-4"><i class="icon-spinner11"></i> icon-spinner11</div>
								<div class="col-md-3 col-sm-4"><i class="icon-microscope"></i> icon-microscope</div>
								<div class="col-md-3 col-sm-4"><i class="icon-enlarge"></i> icon-enlarge</div>
								<div class="col-md-3 col-sm-4"><i class="icon-shrink"></i> icon-shrink</div>
								<div class="col-md-3 col-sm-4"><i class="icon-enlarge3"></i> icon-enlarge3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-shrink3"></i> icon-shrink3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-enlarge5"></i> icon-enlarge5</div>
								<div class="col-md-3 col-sm-4"><i class="icon-shrink5"></i> icon-shrink5</div>
								<div class="col-md-3 col-sm-4"><i class="icon-enlarge6"></i> icon-enlarge6</div>
								<div class="col-md-3 col-sm-4"><i class="icon-shrink6"></i> icon-shrink6</div>
								<div class="col-md-3 col-sm-4"><i class="icon-enlarge7"></i> icon-enlarge7</div>
								<div class="col-md-3 col-sm-4"><i class="icon-shrink7"></i> icon-shrink7</div>
								<div class="col-md-3 col-sm-4"><i class="icon-key"></i> icon-key</div>
								<div class="col-md-3 col-sm-4"><i class="icon-lock"></i> icon-lock</div>
								<div class="col-md-3 col-sm-4"><i class="icon-lock2"></i> icon-lock2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-lock4"></i> icon-lock4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-unlocked"></i> icon-unlocked</div>
								<div class="col-md-3 col-sm-4"><i class="icon-lock5"></i> icon-lock5</div>
								<div class="col-md-3 col-sm-4"><i class="icon-unlocked2"></i> icon-unlocked2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-safe"></i> icon-safe</div>
								<div class="col-md-3 col-sm-4"><i class="icon-wrench"></i> icon-wrench</div>
								<div class="col-md-3 col-sm-4"><i class="icon-wrench2"></i> icon-wrench2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-wrench3"></i> icon-wrench3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-equalizer"></i> icon-equalizer</div>
								<div class="col-md-3 col-sm-4"><i class="icon-equalizer2"></i> icon-equalizer2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-equalizer3"></i> icon-equalizer3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-equalizer4"></i> icon-equalizer4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-cog"></i> icon-cog</div>
								<div class="col-md-3 col-sm-4"><i class="icon-cogs"></i> icon-cogs</div>
								<div class="col-md-3 col-sm-4"><i class="icon-cog2"></i> icon-cog2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-cog3"></i> icon-cog3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-cog4"></i> icon-cog4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-cog52"></i> icon-cog52</div>
								<div class="col-md-3 col-sm-4"><i class="icon-cog6"></i> icon-cog6</div>
								<div class="col-md-3 col-sm-4"><i class="icon-cog7"></i> icon-cog7</div>
								<div class="col-md-3 col-sm-4"><i class="icon-hammer"></i> icon-hammer</div>
								<div class="col-md-3 col-sm-4"><i class="icon-hammer-wrench"></i> icon-hammer-wrench</div>
								<div class="col-md-3 col-sm-4"><i class="icon-magic-wand"></i> icon-magic-wand</div>
								<div class="col-md-3 col-sm-4"><i class="icon-magic-wand2"></i> icon-magic-wand2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-pulse2"></i> icon-pulse2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-aid-kit"></i> icon-aid-kit</div>
								<div class="col-md-3 col-sm-4"><i class="icon-bug2"></i> icon-bug2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-construction"></i> icon-construction</div>
								<div class="col-md-3 col-sm-4"><i class="icon-traffic-cone"></i> icon-traffic-cone</div>
								<div class="col-md-3 col-sm-4"><i class="icon-traffic-lights"></i> icon-traffic-lights</div>
								<div class="col-md-3 col-sm-4"><i class="icon-pie-chart"></i> icon-pie-chart</div>
								<div class="col-md-3 col-sm-4"><i class="icon-pie-chart2"></i> icon-pie-chart2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-pie-chart3"></i> icon-pie-chart3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-pie-chart4"></i> icon-pie-chart4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-pie-chart5"></i> icon-pie-chart5</div>
								<div class="col-md-3 col-sm-4"><i class="icon-pie-chart6"></i> icon-pie-chart6</div>
								<div class="col-md-3 col-sm-4"><i class="icon-pie-chart7"></i> icon-pie-chart7</div>
								<div class="col-md-3 col-sm-4"><i class="icon-stats-dots"></i> icon-stats-dots</div>
								<div class="col-md-3 col-sm-4"><i class="icon-stats-bars"></i> icon-stats-bars</div>
								<div class="col-md-3 col-sm-4"><i class="icon-pie-chart8"></i> icon-pie-chart8</div>
								<div class="col-md-3 col-sm-4"><i class="icon-stats-bars2"></i> icon-stats-bars2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-stats-bars3"></i> icon-stats-bars3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-stats-bars4"></i> icon-stats-bars4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-chart"></i> icon-chart</div>
								<div class="col-md-3 col-sm-4"><i class="icon-stats-growth"></i> icon-stats-growth</div>
								<div class="col-md-3 col-sm-4"><i class="icon-stats-decline"></i> icon-stats-decline</div>
								<div class="col-md-3 col-sm-4"><i class="icon-stats-growth2"></i> icon-stats-growth2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-stats-decline2"></i> icon-stats-decline2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-stairs-up"></i> icon-stairs-up</div>
								<div class="col-md-3 col-sm-4"><i class="icon-stairs-down"></i> icon-stairs-down</div>
								<div class="col-md-3 col-sm-4"><i class="icon-stairs"></i> icon-stairs</div>
								<div class="col-md-3 col-sm-4"><i class="icon-ladder"></i> icon-ladder</div>
								<div class="col-md-3 col-sm-4"><i class="icon-rating"></i> icon-rating</div>
								<div class="col-md-3 col-sm-4"><i class="icon-rating2"></i> icon-rating2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-rating3"></i> icon-rating3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-podium"></i> icon-podium</div>
								<div class="col-md-3 col-sm-4"><i class="icon-stars"></i> icon-stars</div>
								<div class="col-md-3 col-sm-4"><i class="icon-medal-star"></i> icon-medal-star</div>
								<div class="col-md-3 col-sm-4"><i class="icon-medal"></i> icon-medal</div>
								<div class="col-md-3 col-sm-4"><i class="icon-medal2"></i> icon-medal2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-medal-first"></i> icon-medal-first</div>
								<div class="col-md-3 col-sm-4"><i class="icon-medal-second"></i> icon-medal-second</div>
								<div class="col-md-3 col-sm-4"><i class="icon-medal-third"></i> icon-medal-third</div>
								<div class="col-md-3 col-sm-4"><i class="icon-crown"></i> icon-crown</div>
								<div class="col-md-3 col-sm-4"><i class="icon-trophy2"></i> icon-trophy2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-trophy3"></i> icon-trophy3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-diamond"></i> icon-diamond</div>
								<div class="col-md-3 col-sm-4"><i class="icon-trophy4"></i> icon-trophy4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-gift"></i> icon-gift</div>
								<div class="col-md-3 col-sm-4"><i class="icon-pipe"></i> icon-pipe</div>
								<div class="col-md-3 col-sm-4"><i class="icon-mustache"></i> icon-mustache</div>
								<div class="col-md-3 col-sm-4"><i class="icon-cup2"></i> icon-cup2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-coffee"></i> icon-coffee</div>
								<div class="col-md-3 col-sm-4"><i class="icon-paw"></i> icon-paw</div>
								<div class="col-md-3 col-sm-4"><i class="icon-footprint"></i> icon-footprint</div>
								<div class="col-md-3 col-sm-4"><i class="icon-rocket"></i> icon-rocket</div>
								<div class="col-md-3 col-sm-4"><i class="icon-meter2"></i> icon-meter2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-meter-slow"></i> icon-meter-slow</div>
								<div class="col-md-3 col-sm-4"><i class="icon-meter-fast"></i> icon-meter-fast</div>
								<div class="col-md-3 col-sm-4"><i class="icon-hammer2"></i> icon-hammer2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-balance"></i> icon-balance</div>
								<div class="col-md-3 col-sm-4"><i class="icon-fire"></i> icon-fire</div>
								<div class="col-md-3 col-sm-4"><i class="icon-fire2"></i> icon-fire2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-lab"></i> icon-lab</div>
								<div class="col-md-3 col-sm-4"><i class="icon-atom"></i> icon-atom</div>
								<div class="col-md-3 col-sm-4"><i class="icon-atom2"></i> icon-atom2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-bin"></i> icon-bin</div>
								<div class="col-md-3 col-sm-4"><i class="icon-bin2"></i> icon-bin2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-briefcase"></i> icon-briefcase</div>
								<div class="col-md-3 col-sm-4"><i class="icon-briefcase3"></i> icon-briefcase3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-airplane2"></i> icon-airplane2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-airplane3"></i> icon-airplane3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-airplane4"></i> icon-airplane4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-paperplane"></i> icon-paperplane</div>
								<div class="col-md-3 col-sm-4"><i class="icon-car"></i> icon-car</div>
								<div class="col-md-3 col-sm-4"><i class="icon-steering-wheel"></i> icon-steering-wheel</div>
								<div class="col-md-3 col-sm-4"><i class="icon-car2"></i> icon-car2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-gas"></i> icon-gas</div>
								<div class="col-md-3 col-sm-4"><i class="icon-bus"></i> icon-bus</div>
								<div class="col-md-3 col-sm-4"><i class="icon-truck"></i> icon-truck</div>
								<div class="col-md-3 col-sm-4"><i class="icon-bike"></i> icon-bike</div>
								<div class="col-md-3 col-sm-4"><i class="icon-road"></i> icon-road</div>
								<div class="col-md-3 col-sm-4"><i class="icon-train"></i> icon-train</div>
								<div class="col-md-3 col-sm-4"><i class="icon-train2"></i> icon-train2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-ship"></i> icon-ship</div>
								<div class="col-md-3 col-sm-4"><i class="icon-boat"></i> icon-boat</div>
								<div class="col-md-3 col-sm-4"><i class="icon-chopper"></i> icon-chopper</div>
								<div class="col-md-3 col-sm-4"><i class="icon-cube"></i> icon-cube</div>
								<div class="col-md-3 col-sm-4"><i class="icon-cube2"></i> icon-cube2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-cube3"></i> icon-cube3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-cube4"></i> icon-cube4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-pyramid"></i> icon-pyramid</div>
								<div class="col-md-3 col-sm-4"><i class="icon-pyramid2"></i> icon-pyramid2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-package"></i> icon-package</div>
								<div class="col-md-3 col-sm-4"><i class="icon-puzzle"></i> icon-puzzle</div>
								<div class="col-md-3 col-sm-4"><i class="icon-puzzle2"></i> icon-puzzle2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-puzzle3"></i> icon-puzzle3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-puzzle4"></i> icon-puzzle4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-glasses-3d2"></i> icon-glasses-3d2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-brain"></i> icon-brain</div>
								<div class="col-md-3 col-sm-4"><i class="icon-accessibility"></i> icon-accessibility</div>
								<div class="col-md-3 col-sm-4"><i class="icon-accessibility2"></i> icon-accessibility2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-strategy"></i> icon-strategy</div>
								<div class="col-md-3 col-sm-4"><i class="icon-target"></i> icon-target</div>
								<div class="col-md-3 col-sm-4"><i class="icon-target2"></i> icon-target2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-shield-check"></i> icon-shield-check</div>
								<div class="col-md-3 col-sm-4"><i class="icon-shield-notice"></i> icon-shield-notice</div>
								<div class="col-md-3 col-sm-4"><i class="icon-shield2"></i> icon-shield2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-racing"></i> icon-racing</div>
								<div class="col-md-3 col-sm-4"><i class="icon-finish"></i> icon-finish</div>
								<div class="col-md-3 col-sm-4"><i class="icon-power2"></i> icon-power2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-power3"></i> icon-power3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-switch"></i> icon-switch</div>
								<div class="col-md-3 col-sm-4"><i class="icon-switch22"></i> icon-switch22</div>
								<div class="col-md-3 col-sm-4"><i class="icon-power-cord"></i> icon-power-cord</div>
								<div class="col-md-3 col-sm-4"><i class="icon-clipboard"></i> icon-clipboard</div>
								<div class="col-md-3 col-sm-4"><i class="icon-clipboard2"></i> icon-clipboard2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-clipboard3"></i> icon-clipboard3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-clipboard4"></i> icon-clipboard4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-clipboard5"></i> icon-clipboard5</div>
								<div class="col-md-3 col-sm-4"><i class="icon-clipboard6"></i> icon-clipboard6</div>
								<div class="col-md-3 col-sm-4"><i class="icon-playlist"></i> icon-playlist</div>
								<div class="col-md-3 col-sm-4"><i class="icon-playlist-add"></i> icon-playlist-add</div>
								<div class="col-md-3 col-sm-4"><i class="icon-list-numbered"></i> icon-list-numbered</div>
								<div class="col-md-3 col-sm-4"><i class="icon-list"></i> icon-list</div>
								<div class="col-md-3 col-sm-4"><i class="icon-list2"></i> icon-list2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-more"></i> icon-more</div>
								<div class="col-md-3 col-sm-4"><i class="icon-more2"></i> icon-more2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-grid"></i> icon-grid</div>
								<div class="col-md-3 col-sm-4"><i class="icon-grid2"></i> icon-grid2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-grid3"></i> icon-grid3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-grid4"></i> icon-grid4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-grid52"></i> icon-grid52</div>
								<div class="col-md-3 col-sm-4"><i class="icon-grid6"></i> icon-grid6</div>
								<div class="col-md-3 col-sm-4"><i class="icon-grid7"></i> icon-grid7</div>
								<div class="col-md-3 col-sm-4"><i class="icon-tree5"></i> icon-tree5</div>
								<div class="col-md-3 col-sm-4"><i class="icon-tree6"></i> icon-tree6</div>
								<div class="col-md-3 col-sm-4"><i class="icon-tree7"></i> icon-tree7</div>
								<div class="col-md-3 col-sm-4"><i class="icon-lan"></i> icon-lan</div>
								<div class="col-md-3 col-sm-4"><i class="icon-lan2"></i> icon-lan2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-lan3"></i> icon-lan3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-menu"></i> icon-menu</div>
								<div class="col-md-3 col-sm-4"><i class="icon-circle-small"></i> icon-circle-small</div>
								<div class="col-md-3 col-sm-4"><i class="icon-menu2"></i> icon-menu2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-menu3"></i> icon-menu3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-menu4"></i> icon-menu4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-menu5"></i> icon-menu5</div>
								<div class="col-md-3 col-sm-4"><i class="icon-menu62"></i> icon-menu62</div>
								<div class="col-md-3 col-sm-4"><i class="icon-menu7"></i> icon-menu7</div>
								<div class="col-md-3 col-sm-4"><i class="icon-menu8"></i> icon-menu8</div>
								<div class="col-md-3 col-sm-4"><i class="icon-menu9"></i> icon-menu9</div>
								<div class="col-md-3 col-sm-4"><i class="icon-menu10"></i> icon-menu10</div>
								<div class="col-md-3 col-sm-4"><i class="icon-cloud"></i> icon-cloud</div>
								<div class="col-md-3 col-sm-4"><i class="icon-cloud-download"></i> icon-cloud-download</div>
								<div class="col-md-3 col-sm-4"><i class="icon-cloud-upload"></i> icon-cloud-upload</div>
								<div class="col-md-3 col-sm-4"><i class="icon-cloud-check"></i> icon-cloud-check</div>
								<div class="col-md-3 col-sm-4"><i class="icon-cloud2"></i> icon-cloud2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-cloud-download2"></i> icon-cloud-download2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-cloud-upload2"></i> icon-cloud-upload2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-cloud-check2"></i> icon-cloud-check2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-import"></i> icon-import</div>
								<div class="col-md-3 col-sm-4"><i class="icon-download4"></i> icon-download4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-upload4"></i> icon-upload4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-download7"></i> icon-download7</div>
								<div class="col-md-3 col-sm-4"><i class="icon-upload7"></i> icon-upload7</div>
								<div class="col-md-3 col-sm-4"><i class="icon-download10"></i> icon-download10</div>
								<div class="col-md-3 col-sm-4"><i class="icon-upload10"></i> icon-upload10</div>
								<div class="col-md-3 col-sm-4"><i class="icon-sphere"></i> icon-sphere</div>
								<div class="col-md-3 col-sm-4"><i class="icon-sphere3"></i> icon-sphere3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-earth"></i> icon-earth</div>
								<div class="col-md-3 col-sm-4"><i class="icon-link"></i> icon-link</div>
								<div class="col-md-3 col-sm-4"><i class="icon-unlink"></i> icon-unlink</div>
								<div class="col-md-3 col-sm-4"><i class="icon-link2"></i> icon-link2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-unlink2"></i> icon-unlink2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-anchor"></i> icon-anchor</div>
								<div class="col-md-3 col-sm-4"><i class="icon-flag3"></i> icon-flag3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-flag4"></i> icon-flag4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-flag7"></i> icon-flag7</div>
								<div class="col-md-3 col-sm-4"><i class="icon-flag8"></i> icon-flag8</div>
								<div class="col-md-3 col-sm-4"><i class="icon-attachment"></i> icon-attachment</div>
								<div class="col-md-3 col-sm-4"><i class="icon-attachment2"></i> icon-attachment2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-eye"></i> icon-eye</div>
								<div class="col-md-3 col-sm-4"><i class="icon-eye-plus"></i> icon-eye-plus</div>
								<div class="col-md-3 col-sm-4"><i class="icon-eye-minus"></i> icon-eye-minus</div>
								<div class="col-md-3 col-sm-4"><i class="icon-eye-blocked"></i> icon-eye-blocked</div>
								<div class="col-md-3 col-sm-4"><i class="icon-eye2"></i> icon-eye2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-eye-blocked2"></i> icon-eye-blocked2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-eye4"></i> icon-eye4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-bookmark2"></i> icon-bookmark2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-bookmark3"></i> icon-bookmark3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-bookmarks"></i> icon-bookmarks</div>
								<div class="col-md-3 col-sm-4"><i class="icon-bookmark4"></i> icon-bookmark4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-spotlight2"></i> icon-spotlight2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-starburst"></i> icon-starburst</div>
								<div class="col-md-3 col-sm-4"><i class="icon-snowflake"></i> icon-snowflake</div>
								<div class="col-md-3 col-sm-4"><i class="icon-weather-windy"></i> icon-weather-windy</div>
								<div class="col-md-3 col-sm-4"><i class="icon-fan"></i> icon-fan</div>
								<div class="col-md-3 col-sm-4"><i class="icon-umbrella"></i> icon-umbrella</div>
								<div class="col-md-3 col-sm-4"><i class="icon-sun3"></i> icon-sun3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-contrast"></i> icon-contrast</div>
								<div class="col-md-3 col-sm-4"><i class="icon-bed2"></i> icon-bed2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-furniture"></i> icon-furniture</div>
								<div class="col-md-3 col-sm-4"><i class="icon-chair"></i> icon-chair</div>
								<div class="col-md-3 col-sm-4"><i class="icon-star-empty3"></i> icon-star-empty3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-star-half"></i> icon-star-half</div>
								<div class="col-md-3 col-sm-4"><i class="icon-star-full2"></i> icon-star-full2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-heart5"></i> icon-heart5</div>
								<div class="col-md-3 col-sm-4"><i class="icon-heart6"></i> icon-heart6</div>
								<div class="col-md-3 col-sm-4"><i class="icon-heart-broken2"></i> icon-heart-broken2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-thumbs-up2"></i> icon-thumbs-up2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-thumbs-down2"></i> icon-thumbs-down2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-thumbs-up3"></i> icon-thumbs-up3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-thumbs-down3"></i> icon-thumbs-down3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-height"></i> icon-height</div>
								<div class="col-md-3 col-sm-4"><i class="icon-man"></i> icon-man</div>
								<div class="col-md-3 col-sm-4"><i class="icon-woman"></i> icon-woman</div>
								<div class="col-md-3 col-sm-4"><i class="icon-man-woman"></i> icon-man-woman</div>
								<div class="col-md-3 col-sm-4"><i class="icon-yin-yang"></i> icon-yin-yang</div>
								<div class="col-md-3 col-sm-4"><i class="icon-cursor"></i> icon-cursor</div>
								<div class="col-md-3 col-sm-4"><i class="icon-cursor2"></i> icon-cursor2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-lasso2"></i> icon-lasso2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-select2"></i> icon-select2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-point-up"></i> icon-point-up</div>
								<div class="col-md-3 col-sm-4"><i class="icon-point-right"></i> icon-point-right</div>
								<div class="col-md-3 col-sm-4"><i class="icon-point-down"></i> icon-point-down</div>
								<div class="col-md-3 col-sm-4"><i class="icon-point-left"></i> icon-point-left</div>
								<div class="col-md-3 col-sm-4"><i class="icon-pointer"></i> icon-pointer</div>
								<div class="col-md-3 col-sm-4"><i class="icon-reminder"></i> icon-reminder</div>
								<div class="col-md-3 col-sm-4"><i class="icon-drag-left-right"></i> icon-drag-left-right</div>
								<div class="col-md-3 col-sm-4"><i class="icon-drag-left"></i> icon-drag-left</div>
								<div class="col-md-3 col-sm-4"><i class="icon-drag-right"></i> icon-drag-right</div>
								<div class="col-md-3 col-sm-4"><i class="icon-touch"></i> icon-touch</div>
								<div class="col-md-3 col-sm-4"><i class="icon-multitouch"></i> icon-multitouch</div>
								<div class="col-md-3 col-sm-4"><i class="icon-touch-zoom"></i> icon-touch-zoom</div>
								<div class="col-md-3 col-sm-4"><i class="icon-touch-pinch"></i> icon-touch-pinch</div>
								<div class="col-md-3 col-sm-4"><i class="icon-hand"></i> icon-hand</div>
								<div class="col-md-3 col-sm-4"><i class="icon-grab"></i> icon-grab</div>
								<div class="col-md-3 col-sm-4"><i class="icon-stack-empty"></i> icon-stack-empty</div>
								<div class="col-md-3 col-sm-4"><i class="icon-stack-plus"></i> icon-stack-plus</div>
								<div class="col-md-3 col-sm-4"><i class="icon-stack-minus"></i> icon-stack-minus</div>
								<div class="col-md-3 col-sm-4"><i class="icon-stack-star"></i> icon-stack-star</div>
								<div class="col-md-3 col-sm-4"><i class="icon-stack-picture"></i> icon-stack-picture</div>
								<div class="col-md-3 col-sm-4"><i class="icon-stack-down"></i> icon-stack-down</div>
								<div class="col-md-3 col-sm-4"><i class="icon-stack-up"></i> icon-stack-up</div>
								<div class="col-md-3 col-sm-4"><i class="icon-stack-cancel"></i> icon-stack-cancel</div>
								<div class="col-md-3 col-sm-4"><i class="icon-stack-check"></i> icon-stack-check</div>
								<div class="col-md-3 col-sm-4"><i class="icon-stack-text"></i> icon-stack-text</div>
								<div class="col-md-3 col-sm-4"><i class="icon-stack4"></i> icon-stack4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-stack-music"></i> icon-stack-music</div>
								<div class="col-md-3 col-sm-4"><i class="icon-stack-play"></i> icon-stack-play</div>
								<div class="col-md-3 col-sm-4"><i class="icon-move"></i> icon-move</div>
								<div class="col-md-3 col-sm-4"><i class="icon-dots"></i> icon-dots</div>
								<div class="col-md-3 col-sm-4"><i class="icon-warning"></i> icon-warning</div>
								<div class="col-md-3 col-sm-4"><i class="icon-warning22"></i> icon-warning22</div>
								<div class="col-md-3 col-sm-4"><i class="icon-notification2"></i> icon-notification2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-question3"></i> icon-question3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-question4"></i> icon-question4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-plus3"></i> icon-plus3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-minus3"></i> icon-minus3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-plus-circle2"></i> icon-plus-circle2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-minus-circle2"></i> icon-minus-circle2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-cancel-circle2"></i> icon-cancel-circle2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-blocked"></i> icon-blocked</div>
								<div class="col-md-3 col-sm-4"><i class="icon-cancel-square"></i> icon-cancel-square</div>
								<div class="col-md-3 col-sm-4"><i class="icon-cancel-square2"></i> icon-cancel-square2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-spam"></i> icon-spam</div>
								<div class="col-md-3 col-sm-4"><i class="icon-cross2"></i> icon-cross2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-cross3"></i> icon-cross3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-checkmark"></i> icon-checkmark</div>
								<div class="col-md-3 col-sm-4"><i class="icon-checkmark3"></i> icon-checkmark3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-checkmark2"></i> icon-checkmark2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-checkmark4"></i> icon-checkmark4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-spell-check"></i> icon-spell-check</div>
								<div class="col-md-3 col-sm-4"><i class="icon-spell-check2"></i> icon-spell-check2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-enter"></i> icon-enter</div>
								<div class="col-md-3 col-sm-4"><i class="icon-exit"></i> icon-exit</div>
								<div class="col-md-3 col-sm-4"><i class="icon-enter2"></i> icon-enter2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-exit2"></i> icon-exit2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-enter3"></i> icon-enter3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-exit3"></i> icon-exit3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-wall"></i> icon-wall</div>
								<div class="col-md-3 col-sm-4"><i class="icon-fence"></i> icon-fence</div>
								<div class="col-md-3 col-sm-4"><i class="icon-play3"></i> icon-play3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-pause"></i> icon-pause</div>
								<div class="col-md-3 col-sm-4"><i class="icon-stop"></i> icon-stop</div>
								<div class="col-md-3 col-sm-4"><i class="icon-previous"></i> icon-previous</div>
								<div class="col-md-3 col-sm-4"><i class="icon-next"></i> icon-next</div>
								<div class="col-md-3 col-sm-4"><i class="icon-backward"></i> icon-backward</div>
								<div class="col-md-3 col-sm-4"><i class="icon-forward2"></i> icon-forward2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-play4"></i> icon-play4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-pause2"></i> icon-pause2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-stop2"></i> icon-stop2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-backward2"></i> icon-backward2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-forward3"></i> icon-forward3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-first"></i> icon-first</div>
								<div class="col-md-3 col-sm-4"><i class="icon-last"></i> icon-last</div>
								<div class="col-md-3 col-sm-4"><i class="icon-previous2"></i> icon-previous2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-next2"></i> icon-next2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-eject"></i> icon-eject</div>
								<div class="col-md-3 col-sm-4"><i class="icon-volume-high"></i> icon-volume-high</div>
								<div class="col-md-3 col-sm-4"><i class="icon-volume-medium"></i> icon-volume-medium</div>
								<div class="col-md-3 col-sm-4"><i class="icon-volume-low"></i> icon-volume-low</div>
								<div class="col-md-3 col-sm-4"><i class="icon-volume-mute"></i> icon-volume-mute</div>
								<div class="col-md-3 col-sm-4"><i class="icon-speaker-left"></i> icon-speaker-left</div>
								<div class="col-md-3 col-sm-4"><i class="icon-speaker-right"></i> icon-speaker-right</div>
								<div class="col-md-3 col-sm-4"><i class="icon-volume-mute2"></i> icon-volume-mute2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-volume-increase"></i> icon-volume-increase</div>
								<div class="col-md-3 col-sm-4"><i class="icon-volume-decrease"></i> icon-volume-decrease</div>
								<div class="col-md-3 col-sm-4"><i class="icon-volume-mute5"></i> icon-volume-mute5</div>
								<div class="col-md-3 col-sm-4"><i class="icon-loop"></i> icon-loop</div>
								<div class="col-md-3 col-sm-4"><i class="icon-loop3"></i> icon-loop3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-infinite-square"></i> icon-infinite-square</div>
								<div class="col-md-3 col-sm-4"><i class="icon-infinite"></i> icon-infinite</div>
								<div class="col-md-3 col-sm-4"><i class="icon-loop4"></i> icon-loop4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-shuffle"></i> icon-shuffle</div>
								<div class="col-md-3 col-sm-4"><i class="icon-wave"></i> icon-wave</div>
								<div class="col-md-3 col-sm-4"><i class="icon-wave2"></i> icon-wave2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-split"></i> icon-split</div>
								<div class="col-md-3 col-sm-4"><i class="icon-merge"></i> icon-merge</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-up5"></i> icon-arrow-up5</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-right5"></i> icon-arrow-right5</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-down5"></i> icon-arrow-down5</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-left5"></i> icon-arrow-left5</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-up-left2"></i> icon-arrow-up-left2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-up7"></i> icon-arrow-up7</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-up-right2"></i> icon-arrow-up-right2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-right7"></i> icon-arrow-right7</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-down-right2"></i> icon-arrow-down-right2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-down7"></i> icon-arrow-down7</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-down-left2"></i> icon-arrow-down-left2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-left7"></i> icon-arrow-left7</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-up-left3"></i> icon-arrow-up-left3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-up8"></i> icon-arrow-up8</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-up-right3"></i> icon-arrow-up-right3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-right8"></i> icon-arrow-right8</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-down-right3"></i> icon-arrow-down-right3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-down8"></i> icon-arrow-down8</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-down-left3"></i> icon-arrow-down-left3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-left8"></i> icon-arrow-left8</div>
								<div class="col-md-3 col-sm-4"><i class="icon-circle-up2"></i> icon-circle-up2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-circle-right2"></i> icon-circle-right2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-circle-down2"></i> icon-circle-down2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-circle-left2"></i> icon-circle-left2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-resize7"></i> icon-arrow-resize7</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-resize8"></i> icon-arrow-resize8</div>
								<div class="col-md-3 col-sm-4"><i class="icon-square-up-left"></i> icon-square-up-left</div>
								<div class="col-md-3 col-sm-4"><i class="icon-square-up"></i> icon-square-up</div>
								<div class="col-md-3 col-sm-4"><i class="icon-square-up-right"></i> icon-square-up-right</div>
								<div class="col-md-3 col-sm-4"><i class="icon-square-right"></i> icon-square-right</div>
								<div class="col-md-3 col-sm-4"><i class="icon-square-down-right"></i> icon-square-down-right</div>
								<div class="col-md-3 col-sm-4"><i class="icon-square-down"></i> icon-square-down</div>
								<div class="col-md-3 col-sm-4"><i class="icon-square-down-left"></i> icon-square-down-left</div>
								<div class="col-md-3 col-sm-4"><i class="icon-square-left"></i> icon-square-left</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-up15"></i> icon-arrow-up15</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-right15"></i> icon-arrow-right15</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-down15"></i> icon-arrow-down15</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-left15"></i> icon-arrow-left15</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-up16"></i> icon-arrow-up16</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-right16"></i> icon-arrow-right16</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-down16"></i> icon-arrow-down16</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-left16"></i> icon-arrow-left16</div>
								<div class="col-md-3 col-sm-4"><i class="icon-menu-open"></i> icon-menu-open</div>
								<div class="col-md-3 col-sm-4"><i class="icon-menu-open2"></i> icon-menu-open2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-menu-close"></i> icon-menu-close</div>
								<div class="col-md-3 col-sm-4"><i class="icon-menu-close2"></i> icon-menu-close2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-enter5"></i> icon-enter5</div>
								<div class="col-md-3 col-sm-4"><i class="icon-esc"></i> icon-esc</div>
								<div class="col-md-3 col-sm-4"><i class="icon-enter6"></i> icon-enter6</div>
								<div class="col-md-3 col-sm-4"><i class="icon-backspace"></i> icon-backspace</div>
								<div class="col-md-3 col-sm-4"><i class="icon-backspace2"></i> icon-backspace2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-tab"></i> icon-tab</div>
								<div class="col-md-3 col-sm-4"><i class="icon-transmission"></i> icon-transmission</div>
								<div class="col-md-3 col-sm-4"><i class="icon-sort"></i> icon-sort</div>
								<div class="col-md-3 col-sm-4"><i class="icon-move-up2"></i> icon-move-up2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-move-down2"></i> icon-move-down2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-sort-alpha-asc"></i> icon-sort-alpha-asc</div>
								<div class="col-md-3 col-sm-4"><i class="icon-sort-alpha-desc"></i> icon-sort-alpha-desc</div>
								<div class="col-md-3 col-sm-4"><i class="icon-sort-numeric-asc"></i> icon-sort-numeric-asc</div>
								<div class="col-md-3 col-sm-4"><i class="icon-sort-numberic-desc"></i> icon-sort-numberic-desc</div>
								<div class="col-md-3 col-sm-4"><i class="icon-sort-amount-asc"></i> icon-sort-amount-asc</div>
								<div class="col-md-3 col-sm-4"><i class="icon-sort-amount-desc"></i> icon-sort-amount-desc</div>
								<div class="col-md-3 col-sm-4"><i class="icon-sort-time-asc"></i> icon-sort-time-asc</div>
								<div class="col-md-3 col-sm-4"><i class="icon-sort-time-desc"></i> icon-sort-time-desc</div>
								<div class="col-md-3 col-sm-4"><i class="icon-battery-6"></i> icon-battery-6</div>
								<div class="col-md-3 col-sm-4"><i class="icon-battery-0"></i> icon-battery-0</div>
								<div class="col-md-3 col-sm-4"><i class="icon-battery-charging"></i> icon-battery-charging</div>
								<div class="col-md-3 col-sm-4"><i class="icon-command"></i> icon-command</div>
								<div class="col-md-3 col-sm-4"><i class="icon-shift"></i> icon-shift</div>
								<div class="col-md-3 col-sm-4"><i class="icon-ctrl"></i> icon-ctrl</div>
								<div class="col-md-3 col-sm-4"><i class="icon-opt"></i> icon-opt</div>
								<div class="col-md-3 col-sm-4"><i class="icon-checkbox-checked"></i> icon-checkbox-checked</div>
								<div class="col-md-3 col-sm-4"><i class="icon-checkbox-unchecked"></i> icon-checkbox-unchecked</div>
								<div class="col-md-3 col-sm-4"><i class="icon-checkbox-partial"></i> icon-checkbox-partial</div>
								<div class="col-md-3 col-sm-4"><i class="icon-square"></i> icon-square</div>
								<div class="col-md-3 col-sm-4"><i class="icon-triangle"></i> icon-triangle</div>
								<div class="col-md-3 col-sm-4"><i class="icon-triangle2"></i> icon-triangle2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-diamond3"></i> icon-diamond3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-diamond4"></i> icon-diamond4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-checkbox-checked2"></i> icon-checkbox-checked2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-checkbox-unchecked2"></i> icon-checkbox-unchecked2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-checkbox-partial2"></i> icon-checkbox-partial2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-radio-checked"></i> icon-radio-checked</div>
								<div class="col-md-3 col-sm-4"><i class="icon-radio-checked2"></i> icon-radio-checked2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-radio-unchecked"></i> icon-radio-unchecked</div>
								<div class="col-md-3 col-sm-4"><i class="icon-checkmark-circle"></i> icon-checkmark-circle</div>
								<div class="col-md-3 col-sm-4"><i class="icon-circle"></i> icon-circle</div>
								<div class="col-md-3 col-sm-4"><i class="icon-circle2"></i> icon-circle2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-circles"></i> icon-circles</div>
								<div class="col-md-3 col-sm-4"><i class="icon-circles2"></i> icon-circles2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-crop"></i> icon-crop</div>
								<div class="col-md-3 col-sm-4"><i class="icon-crop2"></i> icon-crop2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-make-group"></i> icon-make-group</div>
								<div class="col-md-3 col-sm-4"><i class="icon-ungroup"></i> icon-ungroup</div>
								<div class="col-md-3 col-sm-4"><i class="icon-vector"></i> icon-vector</div>
								<div class="col-md-3 col-sm-4"><i class="icon-vector2"></i> icon-vector2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-rulers"></i> icon-rulers</div>
								<div class="col-md-3 col-sm-4"><i class="icon-pencil-ruler"></i> icon-pencil-ruler</div>
								<div class="col-md-3 col-sm-4"><i class="icon-scissors"></i> icon-scissors</div>
								<div class="col-md-3 col-sm-4"><i class="icon-filter3"></i> icon-filter3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-filter4"></i> icon-filter4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-font"></i> icon-font</div>
								<div class="col-md-3 col-sm-4"><i class="icon-ampersand2"></i> icon-ampersand2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-ligature"></i> icon-ligature</div>
								<div class="col-md-3 col-sm-4"><i class="icon-font-size"></i> icon-font-size</div>
								<div class="col-md-3 col-sm-4"><i class="icon-typography"></i> icon-typography</div>
								<div class="col-md-3 col-sm-4"><i class="icon-text-height"></i> icon-text-height</div>
								<div class="col-md-3 col-sm-4"><i class="icon-text-width"></i> icon-text-width</div>
								<div class="col-md-3 col-sm-4"><i class="icon-height2"></i> icon-height2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-width"></i> icon-width</div>
								<div class="col-md-3 col-sm-4"><i class="icon-strikethrough2"></i> icon-strikethrough2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-font-size2"></i> icon-font-size2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-bold2"></i> icon-bold2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-underline2"></i> icon-underline2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-italic2"></i> icon-italic2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-strikethrough3"></i> icon-strikethrough3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-omega"></i> icon-omega</div>
								<div class="col-md-3 col-sm-4"><i class="icon-sigma"></i> icon-sigma</div>
								<div class="col-md-3 col-sm-4"><i class="icon-nbsp"></i> icon-nbsp</div>
								<div class="col-md-3 col-sm-4"><i class="icon-page-break"></i> icon-page-break</div>
								<div class="col-md-3 col-sm-4"><i class="icon-page-break2"></i> icon-page-break2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-superscript"></i> icon-superscript</div>
								<div class="col-md-3 col-sm-4"><i class="icon-subscript"></i> icon-subscript</div>
								<div class="col-md-3 col-sm-4"><i class="icon-superscript2"></i> icon-superscript2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-subscript2"></i> icon-subscript2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-text-color"></i> icon-text-color</div>
								<div class="col-md-3 col-sm-4"><i class="icon-highlight"></i> icon-highlight</div>
								<div class="col-md-3 col-sm-4"><i class="icon-pagebreak"></i> icon-pagebreak</div>
								<div class="col-md-3 col-sm-4"><i class="icon-clear-formatting"></i> icon-clear-formatting</div>
								<div class="col-md-3 col-sm-4"><i class="icon-table"></i> icon-table</div>
								<div class="col-md-3 col-sm-4"><i class="icon-table2"></i> icon-table2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-insert-template"></i> icon-insert-template</div>
								<div class="col-md-3 col-sm-4"><i class="icon-pilcrow"></i> icon-pilcrow</div>
								<div class="col-md-3 col-sm-4"><i class="icon-ltr"></i> icon-ltr</div>
								<div class="col-md-3 col-sm-4"><i class="icon-rtl"></i> icon-rtl</div>
								<div class="col-md-3 col-sm-4"><i class="icon-ltr2"></i> icon-ltr2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-rtl2"></i> icon-rtl2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-section"></i> icon-section</div>
								<div class="col-md-3 col-sm-4"><i class="icon-paragraph-left2"></i> icon-paragraph-left2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-paragraph-center2"></i> icon-paragraph-center2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-paragraph-right2"></i> icon-paragraph-right2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-paragraph-justify2"></i> icon-paragraph-justify2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-indent-increase"></i> icon-indent-increase</div>
								<div class="col-md-3 col-sm-4"><i class="icon-indent-decrease"></i> icon-indent-decrease</div>
								<div class="col-md-3 col-sm-4"><i class="icon-paragraph-left3"></i> icon-paragraph-left3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-paragraph-center3"></i> icon-paragraph-center3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-paragraph-right3"></i> icon-paragraph-right3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-paragraph-justify3"></i> icon-paragraph-justify3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-indent-increase2"></i> icon-indent-increase2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-indent-decrease2"></i> icon-indent-decrease2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-share"></i> icon-share</div>
								<div class="col-md-3 col-sm-4"><i class="icon-share2"></i> icon-share2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-new-tab"></i> icon-new-tab</div>
								<div class="col-md-3 col-sm-4"><i class="icon-new-tab2"></i> icon-new-tab2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-popout"></i> icon-popout</div>
								<div class="col-md-3 col-sm-4"><i class="icon-embed"></i> icon-embed</div>
								<div class="col-md-3 col-sm-4"><i class="icon-embed2"></i> icon-embed2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-markup"></i> icon-markup</div>
								<div class="col-md-3 col-sm-4"><i class="icon-regexp"></i> icon-regexp</div>
								<div class="col-md-3 col-sm-4"><i class="icon-regexp2"></i> icon-regexp2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-code"></i> icon-code</div>
								<div class="col-md-3 col-sm-4"><i class="icon-circle-css"></i> icon-circle-css</div>
								<div class="col-md-3 col-sm-4"><i class="icon-circle-code"></i> icon-circle-code</div>
								<div class="col-md-3 col-sm-4"><i class="icon-terminal"></i> icon-terminal</div>
								<div class="col-md-3 col-sm-4"><i class="icon-unicode"></i> icon-unicode</div>
								<div class="col-md-3 col-sm-4"><i class="icon-seven-segment-0"></i> icon-seven-segment-0</div>
								<div class="col-md-3 col-sm-4"><i class="icon-seven-segment-1"></i> icon-seven-segment-1</div>
								<div class="col-md-3 col-sm-4"><i class="icon-seven-segment-2"></i> icon-seven-segment-2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-seven-segment-3"></i> icon-seven-segment-3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-seven-segment-4"></i> icon-seven-segment-4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-seven-segment-5"></i> icon-seven-segment-5</div>
								<div class="col-md-3 col-sm-4"><i class="icon-seven-segment-6"></i> icon-seven-segment-6</div>
								<div class="col-md-3 col-sm-4"><i class="icon-seven-segment-7"></i> icon-seven-segment-7</div>
								<div class="col-md-3 col-sm-4"><i class="icon-seven-segment-8"></i> icon-seven-segment-8</div>
								<div class="col-md-3 col-sm-4"><i class="icon-seven-segment-9"></i> icon-seven-segment-9</div>
								<div class="col-md-3 col-sm-4"><i class="icon-share3"></i> icon-share3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-share4"></i> icon-share4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-google"></i> icon-google</div>
								<div class="col-md-3 col-sm-4"><i class="icon-google-plus"></i> icon-google-plus</div>
								<div class="col-md-3 col-sm-4"><i class="icon-google-plus2"></i> icon-google-plus2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-google-drive"></i> icon-google-drive</div>
								<div class="col-md-3 col-sm-4"><i class="icon-facebook"></i> icon-facebook</div>
								<div class="col-md-3 col-sm-4"><i class="icon-facebook2"></i> icon-facebook2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-instagram"></i> icon-instagram</div>
								<div class="col-md-3 col-sm-4"><i class="icon-twitter"></i> icon-twitter</div>
								<div class="col-md-3 col-sm-4"><i class="icon-twitter2"></i> icon-twitter2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-feed2"></i> icon-feed2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-feed3"></i> icon-feed3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-youtube"></i> icon-youtube</div>
								<div class="col-md-3 col-sm-4"><i class="icon-youtube2"></i> icon-youtube2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-youtube3"></i> icon-youtube3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-vimeo"></i> icon-vimeo</div>
								<div class="col-md-3 col-sm-4"><i class="icon-vimeo2"></i> icon-vimeo2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-lanyrd"></i> icon-lanyrd</div>
								<div class="col-md-3 col-sm-4"><i class="icon-flickr"></i> icon-flickr</div>
								<div class="col-md-3 col-sm-4"><i class="icon-flickr2"></i> icon-flickr2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-flickr3"></i> icon-flickr3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-picassa"></i> icon-picassa</div>
								<div class="col-md-3 col-sm-4"><i class="icon-picassa2"></i> icon-picassa2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-dribbble"></i> icon-dribbble</div>
								<div class="col-md-3 col-sm-4"><i class="icon-dribbble2"></i> icon-dribbble2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-dribbble3"></i> icon-dribbble3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-forrst"></i> icon-forrst</div>
								<div class="col-md-3 col-sm-4"><i class="icon-forrst2"></i> icon-forrst2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-deviantart"></i> icon-deviantart</div>
								<div class="col-md-3 col-sm-4"><i class="icon-deviantart2"></i> icon-deviantart2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-steam"></i> icon-steam</div>
								<div class="col-md-3 col-sm-4"><i class="icon-steam2"></i> icon-steam2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-dropbox"></i> icon-dropbox</div>
								<div class="col-md-3 col-sm-4"><i class="icon-onedrive"></i> icon-onedrive</div>
								<div class="col-md-3 col-sm-4"><i class="icon-github"></i> icon-github</div>
								<div class="col-md-3 col-sm-4"><i class="icon-github4"></i> icon-github4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-github5"></i> icon-github5</div>
								<div class="col-md-3 col-sm-4"><i class="icon-wordpress"></i> icon-wordpress</div>
								<div class="col-md-3 col-sm-4"><i class="icon-wordpress2"></i> icon-wordpress2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-joomla"></i> icon-joomla</div>
								<div class="col-md-3 col-sm-4"><i class="icon-blogger"></i> icon-blogger</div>
								<div class="col-md-3 col-sm-4"><i class="icon-blogger2"></i> icon-blogger2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-tumblr"></i> icon-tumblr</div>
								<div class="col-md-3 col-sm-4"><i class="icon-tumblr2"></i> icon-tumblr2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-yahoo"></i> icon-yahoo</div>
								<div class="col-md-3 col-sm-4"><i class="icon-tux"></i> icon-tux</div>
								<div class="col-md-3 col-sm-4"><i class="icon-apple2"></i> icon-apple2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-finder"></i> icon-finder</div>
								<div class="col-md-3 col-sm-4"><i class="icon-android"></i> icon-android</div>
								<div class="col-md-3 col-sm-4"><i class="icon-windows"></i> icon-windows</div>
								<div class="col-md-3 col-sm-4"><i class="icon-windows8"></i> icon-windows8</div>
								<div class="col-md-3 col-sm-4"><i class="icon-soundcloud"></i> icon-soundcloud</div>
								<div class="col-md-3 col-sm-4"><i class="icon-soundcloud2"></i> icon-soundcloud2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-skype"></i> icon-skype</div>
								<div class="col-md-3 col-sm-4"><i class="icon-reddit"></i> icon-reddit</div>
								<div class="col-md-3 col-sm-4"><i class="icon-linkedin"></i> icon-linkedin</div>
								<div class="col-md-3 col-sm-4"><i class="icon-linkedin2"></i> icon-linkedin2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-lastfm"></i> icon-lastfm</div>
								<div class="col-md-3 col-sm-4"><i class="icon-lastfm2"></i> icon-lastfm2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-delicious"></i> icon-delicious</div>
								<div class="col-md-3 col-sm-4"><i class="icon-stumbleupon"></i> icon-stumbleupon</div>
								<div class="col-md-3 col-sm-4"><i class="icon-stumbleupon2"></i> icon-stumbleupon2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-stackoverflow"></i> icon-stackoverflow</div>
								<div class="col-md-3 col-sm-4"><i class="icon-pinterest2"></i> icon-pinterest2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-xing"></i> icon-xing</div>
								<div class="col-md-3 col-sm-4"><i class="icon-flattr"></i> icon-flattr</div>
								<div class="col-md-3 col-sm-4"><i class="icon-foursquare"></i> icon-foursquare</div>
								<div class="col-md-3 col-sm-4"><i class="icon-paypal"></i> icon-paypal</div>
								<div class="col-md-3 col-sm-4"><i class="icon-paypal2"></i> icon-paypal2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-yelp"></i> icon-yelp</div>
								<div class="col-md-3 col-sm-4"><i class="icon-file-pdf"></i> icon-file-pdf</div>
								<div class="col-md-3 col-sm-4"><i class="icon-file-openoffice"></i> icon-file-openoffice</div>
								<div class="col-md-3 col-sm-4"><i class="icon-file-word"></i> icon-file-word</div>
								<div class="col-md-3 col-sm-4"><i class="icon-file-excel"></i> icon-file-excel</div>
								<div class="col-md-3 col-sm-4"><i class="icon-libreoffice"></i> icon-libreoffice</div>
								<div class="col-md-3 col-sm-4"><i class="icon-html5"></i> icon-html5</div>
								<div class="col-md-3 col-sm-4"><i class="icon-html52"></i> icon-html52</div>
								<div class="col-md-3 col-sm-4"><i class="icon-css3"></i> icon-css3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-git"></i> icon-git</div>
								<div class="col-md-3 col-sm-4"><i class="icon-svg"></i> icon-svg</div>
								<div class="col-md-3 col-sm-4"><i class="icon-codepen"></i> icon-codepen</div>
								<div class="col-md-3 col-sm-4"><i class="icon-chrome"></i> icon-chrome</div>
								<div class="col-md-3 col-sm-4"><i class="icon-firefox"></i> icon-firefox</div>
								<div class="col-md-3 col-sm-4"><i class="icon-IE"></i> icon-IE</div>
								<div class="col-md-3 col-sm-4"><i class="icon-opera"></i> icon-opera</div>
								<div class="col-md-3 col-sm-4"><i class="icon-safari"></i> icon-safari</div>
								<div class="col-md-3 col-sm-4"><i class="icon-check2"></i> icon-check2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-home4"></i> icon-home4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-people"></i> icon-people</div>
								<div class="col-md-3 col-sm-4"><i class="icon-checkmark-circle2"></i> icon-checkmark-circle2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-up-left32"></i> icon-arrow-up-left32</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-up52"></i> icon-arrow-up52</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-up-right32"></i> icon-arrow-up-right32</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-right6"></i> icon-arrow-right6</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-down-right32"></i> icon-arrow-down-right32</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-down52"></i> icon-arrow-down52</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-down-left32"></i> icon-arrow-down-left32</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-left52"></i> icon-arrow-left52</div>
								<div class="col-md-3 col-sm-4"><i class="icon-calendar5"></i> icon-calendar5</div>
								<div class="col-md-3 col-sm-4"><i class="icon-move-alt1"></i> icon-move-alt1</div>
								<div class="col-md-3 col-sm-4"><i class="icon-reload-alt"></i> icon-reload-alt</div>
								<div class="col-md-3 col-sm-4"><i class="icon-move-vertical"></i> icon-move-vertical</div>
								<div class="col-md-3 col-sm-4"><i class="icon-move-horizontal"></i> icon-move-horizontal</div>
								<div class="col-md-3 col-sm-4"><i class="icon-hash"></i> icon-hash</div>
								<div class="col-md-3 col-sm-4"><i class="icon-bars-alt"></i> icon-bars-alt</div>
								<div class="col-md-3 col-sm-4"><i class="icon-eye8"></i> icon-eye8</div>
								<div class="col-md-3 col-sm-4"><i class="icon-search4"></i> icon-search4</div>
								<div class="col-md-3 col-sm-4"><i class="icon-zoomin3"></i> icon-zoomin3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-zoomout3"></i> icon-zoomout3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-add"></i> icon-add</div>
								<div class="col-md-3 col-sm-4"><i class="icon-subtract"></i> icon-subtract</div>
								<div class="col-md-3 col-sm-4"><i class="icon-exclamation"></i> icon-exclamation</div>
								<div class="col-md-3 col-sm-4"><i class="icon-question6"></i> icon-question6</div>
								<div class="col-md-3 col-sm-4"><i class="icon-close2"></i> icon-close2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-task"></i> icon-task</div>
								<div class="col-md-3 col-sm-4"><i class="icon-inbox"></i> icon-inbox</div>
								<div class="col-md-3 col-sm-4"><i class="icon-inbox-alt"></i> icon-inbox-alt</div>
								<div class="col-md-3 col-sm-4"><i class="icon-envelope"></i> icon-envelope</div>
								<div class="col-md-3 col-sm-4"><i class="icon-compose"></i> icon-compose</div>
								<div class="col-md-3 col-sm-4"><i class="icon-newspaper2"></i> icon-newspaper2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-calendar22"></i> icon-calendar22</div>
								<div class="col-md-3 col-sm-4"><i class="icon-hyperlink"></i> icon-hyperlink</div>
								<div class="col-md-3 col-sm-4"><i class="icon-trash"></i> icon-trash</div>
								<div class="col-md-3 col-sm-4"><i class="icon-trash-alt"></i> icon-trash-alt</div>
								<div class="col-md-3 col-sm-4"><i class="icon-grid5"></i> icon-grid5</div>
								<div class="col-md-3 col-sm-4"><i class="icon-grid-alt"></i> icon-grid-alt</div>
								<div class="col-md-3 col-sm-4"><i class="icon-menu6"></i> icon-menu6</div>
								<div class="col-md-3 col-sm-4"><i class="icon-list3"></i> icon-list3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-gallery"></i> icon-gallery</div>
								<div class="col-md-3 col-sm-4"><i class="icon-calculator"></i> icon-calculator</div>
								<div class="col-md-3 col-sm-4"><i class="icon-windows2"></i> icon-windows2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-browser"></i> icon-browser</div>
								<div class="col-md-3 col-sm-4"><i class="icon-portfolio"></i> icon-portfolio</div>
								<div class="col-md-3 col-sm-4"><i class="icon-comments"></i> icon-comments</div>
								<div class="col-md-3 col-sm-4"><i class="icon-screen3"></i> icon-screen3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-iphone"></i> icon-iphone</div>
								<div class="col-md-3 col-sm-4"><i class="icon-ipad"></i> icon-ipad</div>
								<div class="col-md-3 col-sm-4"><i class="icon-googleplus5"></i> icon-googleplus5</div>
								<div class="col-md-3 col-sm-4"><i class="icon-pin"></i> icon-pin</div>
								<div class="col-md-3 col-sm-4"><i class="icon-pin-alt"></i> icon-pin-alt</div>
								<div class="col-md-3 col-sm-4"><i class="icon-cog5"></i> icon-cog5</div>
								<div class="col-md-3 col-sm-4"><i class="icon-graduation"></i> icon-graduation</div>
								<div class="col-md-3 col-sm-4"><i class="icon-air"></i> icon-air</div>
								<div class="col-md-3 col-sm-4"><i class="icon-droplets"></i> icon-droplets</div>
								<div class="col-md-3 col-sm-4"><i class="icon-statistics"></i> icon-statistics</div>
								<div class="col-md-3 col-sm-4"><i class="icon-pie5"></i> icon-pie5</div>
								<div class="col-md-3 col-sm-4"><i class="icon-cross"></i> icon-cross</div>
								<div class="col-md-3 col-sm-4"><i class="icon-minus2"></i> icon-minus2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-plus2"></i> icon-plus2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-info3"></i> icon-info3</div>
								<div class="col-md-3 col-sm-4"><i class="icon-info22"></i> icon-info22</div>
								<div class="col-md-3 col-sm-4"><i class="icon-question7"></i> icon-question7</div>
								<div class="col-md-3 col-sm-4"><i class="icon-help"></i> icon-help</div>
								<div class="col-md-3 col-sm-4"><i class="icon-warning2"></i> icon-warning2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-add-to-list"></i> icon-add-to-list</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-left12"></i> icon-arrow-left12</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-down12"></i> icon-arrow-down12</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-up12"></i> icon-arrow-up12</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-right13"></i> icon-arrow-right13</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-left22"></i> icon-arrow-left22</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-down22"></i> icon-arrow-down22</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-up22"></i> icon-arrow-up22</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-right22"></i> icon-arrow-right22</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-left32"></i> icon-arrow-left32</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-down32"></i> icon-arrow-down32</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-up32"></i> icon-arrow-up32</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-right32"></i> icon-arrow-right32</div>
								<div class="col-md-3 col-sm-4"><i class="icon-switch2"></i> icon-switch2</div>
								<div class="col-md-3 col-sm-4"><i class="icon-checkmark5"></i> icon-checkmark5</div>
								<div class="col-md-3 col-sm-4"><i class="icon-ampersand"></i> icon-ampersand</div>
								<div class="col-md-3 col-sm-4"><i class="icon-alert"></i> icon-alert</div>
								<div class="col-md-3 col-sm-4"><i class="icon-alignment-align"></i> icon-alignment-align</div>
								<div class="col-md-3 col-sm-4"><i class="icon-alignment-aligned-to"></i> icon-alignment-aligned-to</div>
								<div class="col-md-3 col-sm-4"><i class="icon-alignment-unalign"></i> icon-alignment-unalign</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-down132"></i> icon-arrow-down132</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-up13"></i> icon-arrow-up13</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-left13"></i> icon-arrow-left13</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-right14"></i> icon-arrow-right14</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-small-down"></i> icon-arrow-small-down</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-small-left"></i> icon-arrow-small-left</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-small-right"></i> icon-arrow-small-right</div>
								<div class="col-md-3 col-sm-4"><i class="icon-arrow-small-up"></i> icon-arrow-small-up</div>
								<div class="col-md-3 col-sm-4"><i class="icon-check"></i> icon-check</div>
								<div class="col-md-3 col-sm-4"><i class="icon-chevron-down"></i> icon-chevron-down</div>
								<div class="col-md-3 col-sm-4"><i class="icon-chevron-left"></i> icon-chevron-left</div>
								<div class="col-md-3 col-sm-4"><i class="icon-chevron-right"></i> icon-chevron-right</div>
								<div class="col-md-3 col-sm-4"><i class="icon-chevron-up"></i> icon-chevron-up</div>
								<div class="col-md-3 col-sm-4"><i class="icon-clippy"></i> icon-clippy</div>
								<div class="col-md-3 col-sm-4"><i class="icon-comment"></i> icon-comment</div>
								<div class="col-md-3 col-sm-4"><i class="icon-comment-discussion"></i> icon-comment-discussion</div>
								<div class="col-md-3 col-sm-4"><i class="icon-dash"></i> icon-dash</div>
								<div class="col-md-3 col-sm-4"><i class="icon-diff"></i> icon-diff</div>
								<div class="col-md-3 col-sm-4"><i class="icon-diff-added"></i> icon-diff-added</div>
								<div class="col-md-3 col-sm-4"><i class="icon-diff-ignored"></i> icon-diff-ignored</div>
								<div class="col-md-3 col-sm-4"><i class="icon-diff-modified"></i> icon-diff-modified</div>
								<div class="col-md-3 col-sm-4"><i class="icon-diff-removed"></i> icon-diff-removed</div>
								<div class="col-md-3 col-sm-4"><i class="icon-diff-renamed"></i> icon-diff-renamed</div>
								<div class="col-md-3 col-sm-4"><i class="icon-file-media"></i> icon-file-media</div>
								<div class="col-md-3 col-sm-4"><i class="icon-fold"></i> icon-fold</div>
								<div class="col-md-3 col-sm-4"><i class="icon-gear"></i> icon-gear</div>
								<div class="col-md-3 col-sm-4"><i class="icon-git-branch"></i> icon-git-branch</div>
								<div class="col-md-3 col-sm-4"><i class="icon-git-commit"></i> icon-git-commit</div>
								<div class="col-md-3 col-sm-4"><i class="icon-git-compare"></i> icon-git-compare</div>
								<div class="col-md-3 col-sm-4"><i class="icon-git-merge"></i> icon-git-merge</div>
								<div class="col-md-3 col-sm-4"><i class="icon-git-pull-request"></i> icon-git-pull-request</div>
								<div class="col-md-3 col-sm-4"><i class="icon-graph"></i> icon-graph</div>
								<div class="col-md-3 col-sm-4"><i class="icon-law"></i> icon-law</div>
								<div class="col-md-3 col-sm-4"><i class="icon-list-ordered"></i> icon-list-ordered</div>
								<div class="col-md-3 col-sm-4"><i class="icon-list-unordered"></i> icon-list-unordered</div>
								<div class="col-md-3 col-sm-4"><i class="icon-mail5"></i> icon-mail5</div>
								<div class="col-md-3 col-sm-4"><i class="icon-mail-read"></i> icon-mail-read</div>
								<div class="col-md-3 col-sm-4"><i class="icon-mention"></i> icon-mention</div>
								<div class="col-md-3 col-sm-4"><i class="icon-mirror"></i> icon-mirror</div>
								<div class="col-md-3 col-sm-4"><i class="icon-move-down"></i> icon-move-down</div>
								<div class="col-md-3 col-sm-4"><i class="icon-move-left"></i> icon-move-left</div>
								<div class="col-md-3 col-sm-4"><i class="icon-move-right"></i> icon-move-right</div>
								<div class="col-md-3 col-sm-4"><i class="icon-move-up"></i> icon-move-up</div>
								<div class="col-md-3 col-sm-4"><i class="icon-person"></i> icon-person</div>
								<div class="col-md-3 col-sm-4"><i class="icon-plus22"></i> icon-plus22</div>
								<div class="col-md-3 col-sm-4"><i class="icon-primitive-dot"></i> icon-primitive-dot</div>
								<div class="col-md-3 col-sm-4"><i class="icon-primitive-square"></i> icon-primitive-square</div>
								<div class="col-md-3 col-sm-4"><i class="icon-repo-forked"></i> icon-repo-forked</div>
								<div class="col-md-3 col-sm-4"><i class="icon-screen-full"></i> icon-screen-full</div>
								<div class="col-md-3 col-sm-4"><i class="icon-screen-normal"></i> icon-screen-normal</div>
								<div class="col-md-3 col-sm-4"><i class="icon-sync"></i> icon-sync</div>
								<div class="col-md-3 col-sm-4"><i class="icon-three-bars"></i> icon-three-bars</div>
								<div class="col-md-3 col-sm-4"><i class="icon-unfold"></i> icon-unfold</div>
								<div class="col-md-3 col-sm-4"><i class="icon-versions"></i> icon-versions</div>
								<div class="col-md-3 col-sm-4"><i class="icon-x"></i> icon-x</div>
							</div>
						</div>
					</div>
					<!-- /icomoon icon set -->


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
