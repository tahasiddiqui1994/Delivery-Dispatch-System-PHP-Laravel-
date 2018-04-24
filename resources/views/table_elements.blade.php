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
	<script type="text/javascript" src="{{url('assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/forms/selects/select2.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/forms/selects/selectboxit.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/forms/inputs/touchspin.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/uploaders/fileinput/plugins/purify.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/uploaders/fileinput/plugins/sortable.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/uploaders/fileinput/fileinput.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/forms/editable/editable.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/extensions/contextmenu.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/visualization/sparkline.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/core/app.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/pages/table_elements.js')}}"></script>
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
										<li class="active"><a href="table_elements">Table elements</a></li>
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
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Tables</span> - Elements</h4>
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
							<li><a href="table_elements">Tables</a></li>
							<li class="active">Elements</li>
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

					<!-- Table components -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Table components</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							Table below contains different examples of components, that can be used in the table: form components, interface components, buttons etc. All of them are adapted for different cases, such as multiple elements in the same table cell. These components support all available sizes and styles. Also added a few examples of sparklines based on <code>sparklines.js</code> library. For more advanced sparklines <code>D3.js</code> library suits best
						</div>

						<div class="table-responsive">
							<table class="table table-bordered table-lg">
								<tbody>
									<tr class="active">
										<th colspan="3">Control buttons and icons</th>
									</tr>
									<tr>
										<td class="col-md-2 col-sm-3">Control links</td>
										<td class="col-sm-3">
											<ul class="icons-list">
												<li><a href="#"><i class="icon-pencil7"></i></a></li>
												<li><a href="#"><i class="icon-trash"></i></a></li>
												<li><a href="#"><i class="icon-cog7"></i></a></li>
											</ul>
										</td>
										<td>Basic table row control buttons. These links appear as a list of links with icons</td>
									</tr>
									<tr>
										<td>Colored links</td>
										<td>
											<ul class="icons-list">
												<li class="text-primary-600"><a href="#"><i class="icon-pencil7"></i></a></li>
												<li class="text-danger-600"><a href="#"><i class="icon-trash"></i></a></li>
												<li class="text-teal-600"><a href="#"><i class="icon-cog7"></i></a></li>
											</ul>
										</td>
										<td>Control links support different colors: default Bootstrap contextual colors and custom text colors from the custom color system. To use these colors add <code>.text-*</code> class to the parent <code>&lt;li></code> element</td>
									</tr>
									<tr>
										<td>Links with tooltip</td>
										<td>
											<ul class="icons-list">
												<li><a href="#" data-popup="tooltip" title="Edit"><i class="icon-pencil7"></i></a></li>
												<li><a href="#" data-popup="tooltip" title="Remove"><i class="icon-trash"></i></a></li>
												<li><a href="#" data-popup="tooltip" title="Options"><i class="icon-cog7"></i></a></li>
											</ul>
										</td>
										<td>Table row control links with default Bootstrap tooltip triggered on <code>hover</code></td>
									</tr>
									<tr>
										<td>Links with modals</td>
										<td>
											<ul class="icons-list">
												<li><a href="#" data-toggle="modal" data-target="#edit_modal"><i class="icon-pencil7"></i></a></li>
												<li><a href="#" data-toggle="modal" data-target="#remove_modal"><i class="icon-trash"></i></a></li>
												<li><a href="#" data-toggle="modal" data-target="#options_modal"><i class="icon-cog7"></i></a></li>
											</ul>
										</td>
										<td>These control links launch <code>modals</code> with table row options. Click each icon to see it in action</td>
									</tr>
									<tr>
										<td>Links with dropdown</td>
										<td>
											<ul class="icons-list">
												<li><a href="#"><i class="icon-pencil7"></i></a></li>
												<li><a href="#"><i class="icon-trash"></i></a></li>
												<li class="dropdown">
													<a href="#" class="dropdown-toggle" data-toggle="dropdown">
														<i class="icon-cog7"></i>
														<span class="caret"></span>
													</a>

													<ul class="dropdown-menu">
														<li><a href="#"><i class="icon-file-pdf"></i> Export to PDF</a></li>
														<li><a href="#"><i class="icon-file-excel"></i> Export to CSV</a></li>
														<li><a href="#"><i class="icon-file-word"></i> Export to DOC</a></li>
													</ul>
												</li>
											</ul>
										</td>
										<td>Control links with optional <code>dropdown</code> menu appended to one of the links</td>
									</tr>
									<tr>
										<td>Options dropdown</td>
										<td>
											<ul class="icons-list">
												<li class="dropdown">
													<a href="#" class="dropdown-toggle" data-toggle="dropdown">
														<i class="icon-cog7"></i>
														<span class="caret"></span>
													</a>

													<ul class="dropdown-menu dropdown-menu-solid">
														<li class="dropdown-header">Options</li>
														<li><a href="#"><i class="icon-pencil7"></i>Edit entry</a></li>
														<li><a href="#"><i class="icon-bin"></i>Remove entry</a></li>
														<li class="dropdown-header">Export</li>
														<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
														<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
														<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
													</ul>
												</li>
											</ul>
										</td>
										<td>Here all table row controls are moved to one <code>general dropdown</code> menu, that is appended to 1 link</td>
									</tr>
									<tr>
										<td>Links with text</td>
										<td>
											<ul class="list list-inline no-margin">
												<li class="dropdown">
													<a href="#" class="dropdown-toggle text-default" data-toggle="dropdown">
														<i class="icon-cog7 position-left"></i>
														Options
														<span class="caret"></span>
													</a>

													<ul class="dropdown-menu dropdown-menu-right">
														<li class="dropdown-header">Options</li>
														<li><a href="#"><i class="icon-pencil7"></i>Edit entry</a></li>
														<li><a href="#"><i class="icon-bin"></i>Remove entry</a></li>
														<li class="dropdown-header">Export</li>
														<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
														<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
														<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
													</ul>
												</li>
											</ul>
										</td>
										<td>Control link with text and icon. Text can be placed <code>before</code> icon or <code>after</code> it. Optional <code>.position-left</code> class adds extra right margin to the icon</td>
									</tr>

									<tr class="border-double active">
										<th colspan="3">Labels and badges</th>
									</tr>
									<tr>
										<td>Label</td>
										<td>
											<span class="label label-danger">In progress</span>
											<span class="label label-flat border-success text-success-600 position-right">Done</span>
										</td>
										<td>Basic Bootstrap <code>label</code>. Supports default contextual colors and custom colors from the color system</td>
									</tr>
									<tr>
										<td>Badge</td>
										<td>
											<span class="badge badge-primary">92</span>
											<span class="badge badge-flat border-danger text-danger-600 position-right">190</span>
										</td>
										<td>Basic Bootstrap <code>badge</code>. As as labels, badges support contextual colors and custom colors</td>
									</tr>
									<tr>
										<td>Linked label</td>
										<td>
											<a href="#" class="label label-warning">Click me</a>
										</td>
										<td>Liked label. To use label as a link, add <code>.label</code> class to the link element</td>
									</tr>
									<tr>
										<td>Linked badge</td>
										<td>
											<a href="#" class="badge badge-default">59</a>
										</td>
										<td>Liked badge. To use badge as a link, add <code>.badge</code> class to the link element</td>
									</tr>
									<tr>
										<td>Label with dropdown</td>
										<td>
											<div class="btn-group">
												<a href="#" class="label bg-teal dropdown-toggle" data-toggle="dropdown">Priority <span class="caret"></span></a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><span class="status-mark bg-danger position-left"></span> High priority</a></li>
													<li><a href="#"><span class="status-mark bg-info position-left"></span> Normal priority</a></li>
													<li><a href="#"><span class="status-mark bg-primary position-left"></span> Low priority</a></li>
												</ul>
											</div>
										</td>
										<td>Label with dropdown menu</td>
									</tr>
									<tr>
										<td>Badge with dropdown</td>
										<td>
											<div class="btn-group">
												<a href="#" class="badge bg-indigo-400 dropdown-toggle" data-toggle="dropdown">50% <span class="caret"></span></a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-arrow-up12 text-success"></i> Increase to 100%</a></li>
													<li><a href="#"><i class="icon-arrow-up12 text-success"></i> Increase to 90%</a></li>
													<li><a href="#"><i class="icon-arrow-up12 text-success"></i> Increase to 70%</a></li>
													<li><a href="#"><i class="icon-arrow-down12 text-danger"></i> Decrease to 30%</a></li>
													<li><a href="#"><i class="icon-arrow-down12 text-danger"></i> Decrease to 10%</a></li>
													<li><a href="#"><i class="icon-arrow-down12 text-danger"></i> Decrease to 0%</a></li>
												</ul>
											</div>
										</td>
										<td>Badge with dropdown menu</td>
									</tr>

									<tr class="border-double active">
										<th colspan="3">Styled checkboxes</th>
									</tr>
									<tr>
										<td>Styled checkbox</td>
										<td>
											<input type="checkbox" class="styled" checked="checked">
										</td>
										<td>Single styled checkbox without label</td>
									</tr>
									<tr>
										<td>Left position</td>
										<td>
											<label class="checkbox-inline">
												<input type="checkbox" class="styled" checked="checked">
												Left styled checkbox
											</label>
										</td>
										<td>Styled checkbox with label, <code>left</code> position</td>
									</tr>
									<tr>
										<td>Right position</td>
										<td>
											<label class="checkbox-inline checkbox-right">
												<input type="checkbox" class="styled" checked="checked">
												Right styled checkbox
											</label>
										</td>
										<td>Styled checkbox with label, <code>right</code> position. Does not require <code>.checkbox</code> classes</td>
									</tr>

									<tr class="border-double active">
										<th colspan="3">Styled radios</th>
									</tr>
									<tr>
										<td>Styled radio</td>
										<td>
											<input type="radio" class="styled" checked="checked">
										</td>
										<td>Single styled radio without label. Does not require <code>.radio</code> classes</td>
									</tr>
									<tr>
										<td>Left position</td>
										<td>
											<label class="radio-inline">
												<input type="radio" name="radio-styled" class="styled" checked="checked">
												Left styled radio
											</label>
										</td>
										<td>Styled radio with label, <code>left</code> position</td>
									</tr>
									<tr>
										<td>Right position</td>
										<td>
											<label class="radio-inline radio-right">
												<input type="radio" name="radio-styled" class="styled">
												Right styled radio
											</label>
										</td>
										<td>Styled radio with label, <code>right</code> position</td>
									</tr>

									<tr class="border-double active">
										<th colspan="3">Default checkboxes</th>
									</tr>
									<tr>
										<td>Default checkbox</td>
										<td>
											<input type="checkbox" checked="checked">
										</td>
										<td>Single default checkbox without label. Does not require <code>.checkbox</code> classes</td>
									</tr>
									<tr>
										<td>Left position</td>
										<td>
											<label class="checkbox-inline">
												<input type="checkbox" checked="checked">
												Left default checkbox
											</label>
										</td>
										<td>Default checkbox with label, <code>left</code> position</td>
									</tr>
									<tr>
										<td>Right position</td>
										<td>
											<label class="checkbox-inline checkbox-right">
												<input type="checkbox" checked="checked">
												Right default checkbox
											</label>
										</td>
										<td>Default checkbox with label, <code>right</code> position</td>
									</tr>

									<tr class="border-double active">
										<th colspan="3">Default radios</th>
									</tr>
									<tr>
										<td>Default radio</td>
										<td>
											<input type="radio" checked="checked">
										</td>
										<td>Single default radio without label. Does not require <code>.radio</code> classes</td>
									</tr>
									<tr>
										<td>Left position</td>
										<td>
											<label class="radio-inline">
												<input type="radio" name="radio-default" checked="checked">
												Left default radio
											</label>
										</td>
										<td>Default radio with label, <code>left</code> position</td>
									</tr>
									<tr>
										<td>Right position</td>
										<td>
											<label class="radio-inline radio-right">
												<input type="radio" name="radio-default">
												Right default radio
											</label>
										</td>
										<td>Default radio with label, <code>right</code> position</td>
									</tr>

									<tr class="border-double active">
										<th colspan="3">Switchery toggles</th>
									</tr>
									<tr>
										<td>Switchery toggle</td>
										<td>
											<div class="switchery-xs">
												<input type="checkbox" class="switchery" checked="checked">
											</div>
										</td>
										<td>Single switchery checkbox in <code>mini</code> size</td>
									</tr>
									<tr>
										<td>Left position</td>
										<td>
											<label class="checkbox-inline checkbox-switchery switchery-xs">
												<input type="checkbox" class="switchery" checked="checked">
												Left switch
											</label>
										</td>
										<td>Switchery checkbox with label, <code>left</code> position</td>
									</tr>
									<tr>
										<td>Right position</td>
										<td>
											<label class="checkbox-inline checkbox-right checkbox-switchery switchery-xs">
												<input type="checkbox" class="switchery" checked="checked">
												Right switch
											</label>
										</td>
										<td>Switchery checkbox with label, <code>right</code> position</td>
									</tr>

									<tr class="border-double active">
										<th colspan="3">File uploaders</th>
									</tr>
									<tr>
										<td>Default upload</td>
										<td>
											<input type="file" class="form-control">
										</td>
										<td>Default single file uploader</td>
									</tr>
									<tr>
										<td>Styled uploader</td>
										<td>
											<input type="file" class="file-styled">
										</td>
										<td>Single file uploader, styled with <code>uniform.js</code> plugin</td>
									</tr>
									<tr>
										<td>Multiple uploader</td>
										<td>
											<input type="file" class="bootstrap-uploader">
										</td>
										<td>Multiple file uploader, using <code>file_input.js</code> plugin</td>
									</tr>

									<tr class="border-double active">
										<th colspan="3">Inputs and selects</th>
									</tr>
									<tr>
										<td>Text edit</td>
										<td>
											<a href="#" id="edit" data-title="Edit username">Eugene Kopyov</a>
										</td>
										<td>Simple example of editable text inside table cell, using <code>x-editable.js</code> library</td>
									</tr>
									<tr>
										<td>Edit with switch</td>
										<td>
											<a href="#" id="switchery-editable" data-type="checklist" data-pk="1" data-title="Select state"></a>
										</td>
										<td>Example of in-place editing with simple implementation of <code>switchery</code> checkbox</td>
									</tr>
									<tr>
										<td>Input field</td>
										<td>
											<input type="text" class="form-control" placeholder="Text input">
										</td>
										<td>Basic input field with <code>.form-control</code> class. Supports all available sizes</td>
									</tr>
									<tr>
										<td>Input group</td>
										<td>
											<div class="input-group">
												<span class="input-group-addon">	
													<i class="icon-menu6"></i>
												</span>
												<input type="text" class="form-control" placeholder="Input group">
												<div class="input-group-btn">
													<button type="button" class="btn btn-default dropdown-toggle btn-icon" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></button>
					                                <ul class="dropdown-menu dropdown-menu-right">
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li><a href="#">One more line</a></li>
													</ul>
												</div>
											</div>
										</td>
										<td>Extended form controls with appended and prepended text of buttons</td>
									</tr>
									<tr>
										<td>Spinner</td>
										<td>
											<input type="text" value="20" class="touchspin">
										</td>
										<td>Basic implementation of spinners based on <code>bootspin.js</code> library</td>
									</tr>
									<tr>
										<td>Default select</td>
										<td>
											<select name="select" class="form-control">
			                                    <option value="opt1">Basic select box</option>
			                                    <option value="opt2">Option 2</option>
			                                    <option value="opt3">Option 3</option>
			                                    <option value="opt4">Option 4</option>
			                                    <option value="opt5">Option 5</option>
			                                    <option value="opt6">Option 6</option>
			                                    <option value="opt7">Option 7</option>
			                                    <option value="opt8">Option 8</option>
			                                </select>
										</td>
										<td>Default simple selects with <code>.form-control</code> class. Supports all available sizes</td>
									</tr>
									<tr>
										<td>Select2 single</td>
										<td>
											<select name="select" class="select">
			                                    <option value="opt1">Select2 select</option>
			                                    <option value="opt2">Option 2</option>
			                                    <option value="opt3">Option 3</option>
			                                    <option value="opt4">Option 4</option>
			                                    <option value="opt5">Option 5</option>
			                                    <option value="opt6">Option 6</option>
			                                    <option value="opt7">Option 7</option>
			                                    <option value="opt8">Option 8</option>
			                                </select>
										</td>
										<td>Single select based on <code>select2.js</code> library</td>
									</tr>
									<tr>
										<td>Select2 multiple</td>
										<td>
											<select name="select" multiple="multiple" class="select select-sm">
			                                    <option value="opt1" selected="selected">Option 1</option>
			                                    <option value="opt2" selected="selected">Option 2</option>
			                                    <option value="opt3">Option 3</option>
			                                    <option value="opt4">Option 4</option>
			                                    <option value="opt5">Option 5</option>
			                                    <option value="opt6">Option 6</option>
			                                    <option value="opt7">Option 7</option>
			                                    <option value="opt8">Option 8</option>
			                                </select>
										</td>
										<td>Multiple select based on <code>select2.js</code> library</td>
									</tr>
									<tr>
										<td>Selectbox select</td>
										<td>
											<select class="selectbox">
			                                    <option value="opt1">SelectBox select</option>
			                                    <option value="opt2">Option 2</option>
			                                    <option value="opt3">Option 3</option>
			                                    <option value="opt4">Option 4</option>
			                                    <option value="opt5">Option 5</option>
			                                    <option value="opt6">Option 6</option>
			                                    <option value="opt7">Option 7</option>
			                                    <option value="opt8">Option 8</option>
			                                </select>
										</td>
										<td>Single select based on <code>selectBoxIt.js</code> library</td>
									</tr>
									<tr>
										<td>Multiselect</td>
										<td>
											<select class="multiselect" multiple="multiple">
			                                    <option value="opt1">Option 1</option>
			                                    <option value="opt2">Option 2</option>
			                                    <option value="opt3">Option 3</option>
			                                    <option value="opt4">Option 4</option>
			                                    <option value="opt5">Option 5</option>
			                                    <option value="opt6">Option 6</option>
			                                    <option value="opt7">Option 7</option>
			                                    <option value="opt8">Option 8</option>
			                                </select>
										</td>
										<td>Multiple select with checkboxes based on <code>multiselect.js</code> library</td>
									</tr>

									<tr class="border-double active">
										<th colspan="3">UI components</th>
									</tr>
									<tr>
										<td>Context menu</td>
										<td data-toggle="context" data-target=".context-data-menu">
											Right click on this cell

											<div class="context-data-menu">
												<ul class="dropdown-menu">
													<li class="dropdown-header">Options</li>
													<li><a href="#"><i class="icon-pencil7"></i>Edit entry</a></li>
													<li><a href="#"><i class="icon-bin"></i>Remove entry</a></li>
													<li class="dropdown-header">Export</li>
													<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
													<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
												</ul>
											</div>
										</td>
										<td>Basic implementation of a <code>context menu</code> attached to the table cell</td>
									</tr>
									<tr>
										<td>Button</td>
										<td>
											<button type="button" class="btn btn-success">Basic button</button>
										</td>
										<td>Simple button, supports all sizes and colors</td>
									</tr>
									<tr>
										<td>Buttons with icon</td>
										<td>
											<button type="button" class="btn btn-danger btn-icon"><i class="icon-menu7"></i></button>

											<div class="btn-group position-right">
												<button type="button" class="btn btn-info btn-icon dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i><span class="caret"></span></button>

												<ul class="dropdown-menu">
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li><a href="#">One more line</a></li>
												</ul>
											</div>
										</td>
										<td>Simple button and button dropdowns with icon only, require <code>.btn-icon</code> class for padding correction</td>
									</tr>
									<tr>
										<td>Button dropdown</td>
										<td>
											<div class="btn-group">
												<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Button dropdown <span class="caret"></span></button>

												<ul class="dropdown-menu">
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li><a href="#">One more line</a></li>
												</ul>
											</div>
										</td>
										<td>Button dropdown. Also supports segmented buttons and button toggles</td>
									</tr>
									<tr>
										<td>Progress bar</td>
										<td>
											<div class="progress">
												<div class="progress-bar progress-bar-info" style="width: 60%;">
													<span class="sr-only">60% Complete</span>
												</div>
											</div>
										</td>
										<td>Progress bar, supports all available color and sizing options</td>
									</tr>

									<tr class="border-double active">
										<th colspan="3">Simple sparklines</th>
									</tr>
									<tr>
										<td>Line</td>
										<td>
											<span class="spark-line">5,6,7,9,9,5,3,2,2,4,6,7,9,9,9,9,9,9,3,4,5,1,7,4,3,2,7,8,4,1,7,3,4,7,8,9,8,7,8,9,5,6,7,9,9</span>
										</td>
										<td>Simple sparkline based on <code>sparklines.js</code> library</td>
									</tr>
									<tr>
										<td>Filled area</td>
										<td>
											<span class="spark-line" sparkFillColor="false">5,6,7,9,9,5,3,2,2,4,6,7,9,9,9,9,9,9,3,4,5,1,7,4,3,2,7,8,4,1,7,3,4,7,8,9,8,7,8,9,5,6,7,9,9</span>
										</td>
										<td>Line with filled area</td>
									</tr>
									<tr>
										<td>Bars</td>
										<td>
											<span class="spark-bars">10,8,9,3,5,8,5,9,4,4,9,11</span>
										</td>
										<td>Bars with positive values</td>
									</tr>
									<tr>
										<td>Negative values</td>
										<td>
											<span class="spark-bars">4,1,5,7,-9,9,8,7,-6,6,4,-7,-8,4,3,2,2,5,-6,-7</span>
										</td>
										<td>Bars with positive and negative values</td>
									</tr>
									<tr>
										<td>Stacked bars</td>
										<td>
											<span class="spark-bars">4:1,5:7,9:9,8:7,6:6,4:7,8:4,3:2,2:5,6:7</span>
										</td>
										<td>Stacked bars</td>
									</tr>
									<tr>
										<td>Composite</td>
										<td>
											<span class="spark-comoposite">4,1,5,7,9,9,8,7,6,6,4,7,8,4,3,2,2,5,6,7</span>
										</td>
										<td>Composite chart with line and bars</td>
									</tr>
									<tr>
										<td>Pies</td>
										<td>
											<span class="spark-pies">4,1,5</span>
											<span class="spark-pies">7,9,4</span>
											<span class="spark-pies">2,5,7</span>
										</td>
										<td>Multiple pies</td>
									</tr>
									<tr>
										<td>Bullet</td>
										<td>
											<span class="spark-bullet">10,12,12,9,7</span>
										</td>
										<td>Simple bullet chart</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<!-- /table components -->


		            <!-- Edit modal -->
					<div id="edit_modal" class="modal fade" role="dialog">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h5 class="modal-title">Edit table</h5>
								</div>

								<div class="modal-body">
									<div class="table-responsive">
										<table class="table">
											<thead>
												<tr>
													<th>First Name</th>
													<th>Last Name</th>
													<th>Username</th>
													<th class="col-xs-1">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><input type="text" class="form-control" value="Mark"></td>
													<td><input type="text" class="form-control" value="Otto"></td>
													<td><input type="text" class="form-control" value="@mdo"></td>
													<td class="text-center">
														<ul class="icons-list">
															<li><a href="#"><i class="icon-plus22"></i></a></li>
															<li><a href="#"><i class="icon-cross3"></i></a></li>
														</ul>
													</td>
												</tr>
												<tr>
													<td><input type="text" class="form-control" value="Jacob"></td>
													<td><input type="text" class="form-control" value="Thornton"></td>
													<td><input type="text" class="form-control" value="@fat"></td>
													<td class="text-center">
														<ul class="icons-list">
															<li><a href="#"><i class="icon-plus22"></i></a></li>
															<li><a href="#"><i class="icon-cross3"></i></a></li>
														</ul>
													</td>
												</tr>
												<tr>
													<td><input type="text" class="form-control" value="Larry"></td>
													<td><input type="text" class="form-control" value="the Bird"></td>
													<td><input type="text" class="form-control" value="@twitter"></td>
													<td class="text-center">
														<ul class="icons-list">
															<li><a href="#"><i class="icon-plus22"></i></a></li>
															<li><a href="#"><i class="icon-cross3"></i></a></li>
														</ul>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>

								<div class="modal-footer">
									<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
								</div>
							</div>
						</div>
					</div>
					<!-- /edit modal -->


		            <!-- Remove modal -->
					<div id="remove_modal" class="modal fade" role="dialog">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h5 class="modal-title">Confirm action</h5>
								</div>

								<div class="modal-body">
									You are about to remove this row. Are you sure?
								</div>

								<div class="modal-footer">
									<button type="button" class="btn btn-primary" data-dismiss="modal">Yes, remove</button>
									<button type="button" class="btn btn-default" data-dismiss="modal">No, thanks</button>
								</div>
							</div>
						</div>
					</div>
					<!-- /remove modal -->


		            <!-- Options modal -->
					<div id="options_modal" class="modal fade" role="dialog">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h5 class="modal-title">Row options</h5>
								</div>

								<div class="modal-body">
									<form class="form-horizontal">
										<div class="form-group">
											<label class="text-semibold control-label col-sm-3">Allow select:</label>
											<div class="col-sm-9">
												<select class="select">
													<option value="single" selected="selected">Single</option>
													<option value="multiple">Multiple</option>
													<option value="disabled">Disabled</option>
												</select>
											</div>
										</div>

										<div class="form-group">
											<label class="text-semibold control-label col-sm-3">Allow edit:</label>
											<div class="col-sm-9">
												<select class="select">
													<option value="inline">Edit inline</option>
													<option value="modal" selected="selected">Edit in modal</option>
													<option value="popover">Edit in popover</option>
													<option value="disabled">Disabled</option>
												</select>
											</div>
										</div>

										<div class="form-group">
											<label class="text-semibold control-label col-sm-3">Add status:</label>
											<div class="col-sm-9">
												<select class="select">
													<option value="completed" selected="selected">Completed</option>
													<option value="progress">In progress</option>
													<option value="assigned">Assigned</option>
													<option value="created">Created</option>
												</select>
											</div>
										</div>

										<div class="form-group">
											<label class="text-semibold control-label col-sm-3">Set priority:</label>
											<div class="col-sm-9">
												<select class="select-actions">
													<option value="urgent" data-icon="radio-checked text-danger" selected="selected">Urgent</option>
													<option value="high" data-icon="radio-checked text-primary">High</option>
													<option value="normal" data-icon="radio-checked text-success">Normal</option>
													<option value="low" data-icon="radio-checked text-info">Low</option>
												</select>
											</div>
										</div>

										<div class="form-group">
											<label class="text-semibold control-label col-sm-3" for="enable-controls">Enable controls:</label>
											<div class="col-sm-9">
												<div class="checkbox switchery-sm">
													<input type="checkbox" class="display-controls" id="enable-controls" checked="checked">
												</div>
											</div>
										</div>

										<div class="form-group">
											<label class="text-semibold control-label col-sm-3">Controls:</label>
											<div class="col-sm-9">
												<select class="select-actions select-sm" id="available_controls" multiple="multiple">
													<option value="edit" data-icon="pencil7" selected="selected">Edit</option>
													<option value="remove" data-icon="trash" selected="selected">Remove</option>
													<option value="options" data-icon="cog4" selected="selected">Options</option>
													<option value="add" data-icon="plus22">Add</option>
													<option value="add" data-icon="versions">Copy</option>
													<option value="select" data-icon="check">Select</option>
													<option value="mark" data-icon="file-download">Export</option>
													<option value="mark" data-icon="file-upload">Import</option>
													<option value="mark" data-icon="printer">Print</option>
												</select>
											</div>
										</div>
									</form>
								</div>

								<div class="modal-footer">
									<button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
									<button type="button" class="btn btn-primary" data-dismiss="modal">Save settings</button>
								</div>
							</div>
						</div>
					</div>
					<!-- /options modal -->


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
