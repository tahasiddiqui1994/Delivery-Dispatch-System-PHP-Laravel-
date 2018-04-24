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
	<script type="text/javascript" src="{{url('assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/tables/datatables/extensions/pdfmake/pdfmake.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/tables/datatables/extensions/pdfmake/vfs_fonts.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/tables/datatables/extensions/buttons.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/forms/selects/select2.min.js')}}"></script>

	<script type="text/javascript" src="{{url('assets/js/core/app.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/pages/ecommerce_orders_history.js')}}"></script>
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
												<li class="active"><a href="ecommerce_orders_history">Orders history</a></li>
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
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">ECommerce</span> - Orders History</h4>
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
							<li><a href="ecommerce_orders_history">ECommerce</a></li>
							<li class="active">Orders history</li>
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

					<!-- Orders history (static table) -->
					<div class="panel panel-white">
						<div class="panel-heading">
							<h6 class="panel-title">Orders history (static table)</h6>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th colspan="2">Product name</th>
										<th>Size</th>
										<th>Colour</th>
										<th>Article number</th>
										<th>Units</th>
										<th>Price</th>
										<th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i></th>
									</tr>
								</thead>
								<tbody>
									<tr class="active border-double">
										<td colspan="7" class="text-semibold">New orders</td>
										<td class="text-right">
											<span class="badge badge-default">24</span>
										</td>
									</tr>

									<tr>
										<td class="no-padding-right" style="width: 45px;">
											<a href="#">
												<img src="assets/images/placeholder.jpg" height="60" class="" alt="">
											</a>
										</td>
										<td>
											<a href="#" class="text-semibold">Fathom Backpack</a>
											<div class="text-muted text-size-small">
												<span class="status-mark bg-grey position-left"></span>
												Processing
											</div>
										</td>
										<td>34cm x 29cm</td>
										<td>Orange</td>
										<td>
											<a href="#">1237749</a>
										</td>
										<td>1</td>
										<td>
											<h6 class="no-margin text-semibold">&euro; 79.00</h6>
										</td>
										<td class="text-center">
											<ul class="icons-list">
												<li class="dropdown">
													<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
													<ul class="dropdown-menu dropdown-menu-right">
														<li><a href="#"><i class="icon-truck"></i> Track parcel</a></li>
														<li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
														<li><a href="#"><i class="icon-wallet"></i> Payment details</a></li>
														<li class="divider"></li>
														<li><a href="#"><i class="icon-warning2"></i> Report problem</a></li>
													</ul>
												</li>
											</ul>
										</td>
									</tr>

									<tr>
										<td class="no-padding-right">
											<a href="#">
											<img src="assets/images/placeholder.jpg" height="60" class="" alt="">
											</a>
										</td>
										<td>
											<a href="#" class="text-semibold">Mystery Air Long Sleeve T Shirt</a>
											<div class="text-muted text-size-small">
												<span class="status-mark bg-grey position-left"></span>
												Processing
											</div>
										</td>
										<td>L</td>
										<td>Process Red</td>
										<td>
											<a href="#">345634</a>
										</td>
										<td>1</td>
										<td>
											<h6 class="no-margin text-semibold">&euro; 38.00</h6>
										</td>
										<td class="text-center">
											<ul class="icons-list">
												<li class="dropdown">
													<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
													<ul class="dropdown-menu dropdown-menu-right">
														<li><a href="#"><i class="icon-truck"></i> Track parcel</a></li>
														<li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
														<li><a href="#"><i class="icon-wallet"></i> Payment details</a></li>
														<li class="divider"></li>
														<li><a href="#"><i class="icon-warning2"></i> Report problem</a></li>
													</ul>
												</li>
											</ul>
										</td>
									</tr>

									<tr>
										<td class="no-padding-right">
											<a href="#">
												<img src="assets/images/placeholder.jpg" height="60" class="" alt="">
											</a>
										</td>
										<td>
											<a href="#" class="text-semibold">Women’s Prospect Backpack</a>
											<div class="text-muted text-size-small">
												<span class="status-mark bg-grey position-left"></span>
												Processing
											</div>
										</td>
										<td>46cm x 28cm</td>
										<td>Neu Nordic Print</td>
										<td>
											<a href="#">5739584</a>
										</td>
										<td>1</td>
										<td>
											<h6 class="no-margin text-semibold">&euro; 60.00</h6>
										</td>
										<td class="text-center">
											<ul class="icons-list">
												<li class="dropdown">
													<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
													<ul class="dropdown-menu dropdown-menu-right">
														<li><a href="#"><i class="icon-truck"></i> Track parcel</a></li>
														<li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
														<li><a href="#"><i class="icon-wallet"></i> Payment details</a></li>
														<li class="divider"></li>
														<li><a href="#"><i class="icon-warning2"></i> Report problem</a></li>
													</ul>
												</li>
											</ul>
										</td>
									</tr>

									<tr>
										<td class="no-padding-right">
											<a href="#">
												<img src="assets/images/placeholder.jpg" height="60" class="" alt="">
											</a>
										</td>
										<td>
											<a href="#" class="text-semibold">Overlook Short Sleeve T Shirt</a>
											<div class="text-muted text-size-small">
												<span class="status-mark bg-grey position-left"></span>
												Processing
											</div>
										</td>
										<td>M</td>
										<td>Gray Heather</td>
										<td>
											<a href="#">434450</a>
										</td>
										<td>1</td>
										<td>
											<h6 class="no-margin text-semibold">&euro; 35.00</h6>
										</td>
										<td class="text-center">
											<ul class="icons-list">
												<li class="dropdown">
													<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
													<ul class="dropdown-menu dropdown-menu-right">
														<li><a href="#"><i class="icon-truck"></i> Track parcel</a></li>
														<li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
														<li><a href="#"><i class="icon-wallet"></i> Payment details</a></li>
														<li class="divider"></li>
														<li><a href="#"><i class="icon-warning2"></i> Report problem</a></li>
													</ul>
												</li>
											</ul>
										</td>
									</tr>

									<tr class="active border-double">
										<td colspan="7" class="text-semibold">Shipped orders</td>
										<td class="text-right">
											<span class="badge bg-success">42</span>
										</td>
									</tr>

									<tr>
										<td class="no-padding-right">
											<a href="#">
												<img src="assets/images/placeholder.jpg" height="60" class="" alt="">
											</a>
										</td>
										<td>
											<a href="#" class="text-semibold">Infinite Ride Liner</a>
											<div class="text-muted text-size-small">
												<span class="status-mark bg-success position-left"></span>
												Shipped
											</div>
										</td>
										<td>43</td>
										<td>Black</td>
										<td>
											<a href="#">34739</a>
										</td>
										<td>1</td>
										<td>
											<h6 class="no-margin text-semibold">&euro; 210.00</h6>
										</td>
										<td class="text-center">
											<ul class="icons-list">
												<li class="dropdown">
													<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
													<ul class="dropdown-menu dropdown-menu-right">
														<li><a href="#"><i class="icon-truck"></i> Track parcel</a></li>
														<li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
														<li><a href="#"><i class="icon-wallet"></i> Payment details</a></li>
														<li class="divider"></li>
														<li><a href="#"><i class="icon-warning2"></i> Report problem</a></li>
													</ul>
												</li>
											</ul>
										</td>
									</tr>

									<tr>
										<td class="no-padding-right">
											<a href="#">
												<img src="assets/images/placeholder.jpg" height="60" class="" alt="">
											</a>
										</td>
										<td>
											<a href="#" class="text-semibold">Custom Snowboard</a>
											<div class="text-muted text-size-small">
												<span class="status-mark bg-success position-left"></span>
												Shipped
											</div>
										</td>
										<td>151</td>
										<td>Black/Blue</td>
										<td>
											<a href="#">5574832</a>
										</td>
										<td>1</td>
										<td>
											<h6 class="no-margin text-semibold">&euro; 600.00</h6>
										</td>
										<td class="text-center">
											<ul class="icons-list">
												<li class="dropdown">
													<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
													<ul class="dropdown-menu dropdown-menu-right">
														<li><a href="#"><i class="icon-truck"></i> Track parcel</a></li>
														<li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
														<li><a href="#"><i class="icon-wallet"></i> Payment details</a></li>
														<li class="divider"></li>
														<li><a href="#"><i class="icon-warning2"></i> Report problem</a></li>
													</ul>
												</li>
											</ul>
										</td>
									</tr>

									<tr>
										<td class="no-padding-right">
											<a href="#">
												<img src="assets/images/placeholder.jpg" height="60" class="" alt="">
											</a>
										</td>
										<td>
											<a href="#" class="text-semibold">Kids' Day Hiker 20L Backpack</a>
											<div class="text-muted text-size-small">
												<span class="status-mark bg-success position-left"></span>
												Shipped
											</div>
										</td>
										<td>24cm x 29cm</td>
										<td>Figaro Stripe</td>
										<td>
											<a href="#">6684902</a>
										</td>
										<td>1</td>
										<td>
											<h6 class="no-margin text-semibold">&euro; 55.00</h6>
										</td>
										<td class="text-center">
											<ul class="icons-list">
												<li class="dropdown">
													<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
													<ul class="dropdown-menu dropdown-menu-right">
														<li><a href="#"><i class="icon-truck"></i> Track parcel</a></li>
														<li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
														<li><a href="#"><i class="icon-wallet"></i> Payment details</a></li>
														<li class="divider"></li>
														<li><a href="#"><i class="icon-warning2"></i> Report problem</a></li>
													</ul>
												</li>
											</ul>
										</td>
									</tr>

									<tr>
										<td class="no-padding-right">
											<a href="#">
												<img src="assets/images/placeholder.jpg" height="60" class="" alt="">
											</a>
										</td>
										<td>
											<a href="#" class="text-semibold">Lunch Sack</a>
											<div class="text-muted text-size-small">
												<span class="status-mark bg-success position-left"></span>
												Shipped
											</div>
										</td>
										<td>24cm x 20cm</td>
										<td>Junk Food Print</td>
										<td>
											<a href="#">5574829</a>
										</td>
										<td>1</td>
										<td>
											<h6 class="no-margin text-semibold">&euro; 20.00</h6>
										</td>
										<td class="text-center">
											<ul class="icons-list">
												<li class="dropdown">
													<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
													<ul class="dropdown-menu dropdown-menu-right">
														<li><a href="#"><i class="icon-truck"></i> Track parcel</a></li>
														<li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
														<li><a href="#"><i class="icon-wallet"></i> Payment details</a></li>
														<li class="divider"></li>
														<li><a href="#"><i class="icon-warning2"></i> Report problem</a></li>
													</ul>
												</li>
											</ul>
										</td>
									</tr>

									<tr>
										<td class="no-padding-right">
											<a href="#">
												<img src="assets/images/placeholder.jpg" height="60" class="" alt="">
											</a>
										</td>
										<td>
											<a href="#" class="text-semibold">Cambridge Jacket</a>
											<div class="text-muted text-size-small">
												<span class="status-mark bg-success position-left"></span>
												Shipped
											</div>
										</td>
										<td>XL</td>
										<td>Nomad/Railroad</td>
										<td>
											<a href="#">475839</a>
										</td>
										<td>1</td>
										<td>
											<h6 class="no-margin text-semibold">&euro; 175.00</h6>
										</td>
										<td class="text-center">
											<ul class="icons-list">
												<li class="dropdown">
													<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
													<ul class="dropdown-menu dropdown-menu-right">
														<li><a href="#"><i class="icon-truck"></i> Track parcel</a></li>
														<li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
														<li><a href="#"><i class="icon-wallet"></i> Payment details</a></li>
														<li class="divider"></li>
														<li><a href="#"><i class="icon-warning2"></i> Report problem</a></li>
													</ul>
												</li>
											</ul>
										</td>
									</tr>

									<tr>
										<td class="no-padding-right">
											<a href="#">
												<img src="assets/images/placeholder.jpg" height="60" class="" alt="">
											</a>
										</td>
										<td>
											<a href="#" class="text-semibold">Covert Jacket</a>
											<div class="text-muted text-size-small">
												<span class="status-mark bg-success position-left"></span>
												Shipped
											</div>
										</td>
										<td>XXL</td>
										<td>Mocha/Glacier Sierra</td>
										<td>
											<a href="#">589439</a>
										</td>
										<td>1</td>
										<td>
											<h6 class="no-margin text-semibold">&euro; 126.00</h6>
										</td>
										<td class="text-center">
											<ul class="icons-list">
												<li class="dropdown">
													<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
													<ul class="dropdown-menu dropdown-menu-right">
														<li><a href="#"><i class="icon-truck"></i> Track parcel</a></li>
														<li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
														<li><a href="#"><i class="icon-wallet"></i> Payment details</a></li>
														<li class="divider"></li>
														<li><a href="#"><i class="icon-warning2"></i> Report problem</a></li>
													</ul>
												</li>
											</ul>
										</td>
									</tr>

									<tr class="active border-double">
										<td colspan="7" class="text-semibold">Cancelled orders</td>
										<td class="text-right">
											<span class="badge bg-danger">9</span>
										</td>
									</tr>

									<tr>
										<td class="no-padding-right">
											<a href="#">
												<img src="assets/images/placeholder.jpg" height="60" class="" alt="">
											</a>
										</td>
										<td>
											<a href="#" class="text-semibold">Day Hiker Pinnacle 31L Backpack</a>
											<div class="text-muted text-size-small">
												<span class="status-mark bg-danger position-left"></span>
												Cancelled
											</div>
										</td>
										<td>42cm x 26.5cm</td>
										<td>Blotto Ripstop</td>
										<td>
											<a href="#">5849305</a>
										</td>
										<td>1</td>
										<td>
											<h6 class="no-margin text-semibold">&euro; 130.00</h6>
										</td>
										<td class="text-center">
											<ul class="icons-list">
												<li class="dropdown">
													<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
													<ul class="dropdown-menu dropdown-menu-right">
														<li><a href="#"><i class="icon-truck"></i> Track parcel</a></li>
														<li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
														<li><a href="#"><i class="icon-wallet"></i> Payment details</a></li>
														<li class="divider"></li>
														<li><a href="#"><i class="icon-warning2"></i> Report problem</a></li>
													</ul>
												</li>
											</ul>
										</td>
									</tr>

									<tr>
										<td class="no-padding-right">
											<a href="#">
												<img src="assets/images/placeholder.jpg" height="60" class="" alt="">
											</a>
										</td>
										<td>
											<a href="#" class="text-semibold">Kids' Gromlet Backpack</a>
											<div class="text-muted text-size-small">
												<span class="status-mark bg-danger position-left"></span>
												Cancelled
											</div>
										</td>
										<td>22cm x 20cm</td>
										<td>Slime Camo Print</td>
										<td>
											<a href="#">4438495</a>
										</td>
										<td>1</td>
										<td>
											<h6 class="no-margin text-semibold">&euro; 35.00</h6>
										</td>
										<td class="text-center">
											<ul class="icons-list">
												<li class="dropdown">
													<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
													<ul class="dropdown-menu dropdown-menu-right">
														<li><a href="#"><i class="icon-truck"></i> Track parcel</a></li>
														<li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
														<li><a href="#"><i class="icon-wallet"></i> Payment details</a></li>
														<li class="divider"></li>
														<li><a href="#"><i class="icon-warning2"></i> Report problem</a></li>
													</ul>
												</li>
											</ul>
										</td>
									</tr>

									<tr>
										<td class="no-padding-right">
											<a href="#">
												<img src="assets/images/placeholder.jpg" height="60" class="" alt="">
											</a>
										</td>
										<td>
											<a href="#" class="text-semibold">Tinder Backpack</a>
											<div class="text-muted text-size-small">
												<span class="status-mark bg-danger position-left"></span>
												Cancelled
											</div>
										</td>
										<td>42cm x 26cm</td>
										<td>Dark Tide Twill</td>
										<td>
											<a href="#">4759383</a>
										</td>
										<td>2</td>
										<td>
											<h6 class="no-margin text-semibold">&euro; 180.00</h6>
										</td>
										<td class="text-center">
											<ul class="icons-list">
												<li class="dropdown">
													<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
													<ul class="dropdown-menu dropdown-menu-right">
														<li><a href="#"><i class="icon-truck"></i> Track parcel</a></li>
														<li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
														<li><a href="#"><i class="icon-wallet"></i> Payment details</a></li>
														<li class="divider"></li>
														<li><a href="#"><i class="icon-warning2"></i> Report problem</a></li>
													</ul>
												</li>
											</ul>
										</td>
									</tr>

									<tr>
										<td class="no-padding-right">
											<a href="#">
												<img src="assets/images/placeholder.jpg" height="60" class="" alt="">
											</a>
										</td>
										<td>
											<a href="#" class="text-semibold">Almighty Snowboard Boot</a>
											<div class="text-muted text-size-small">
												<span class="status-mark bg-danger position-left"></span>
												Cancelled
											</div>
										</td>
										<td>45</td>
										<td>Multiweave</td>
										<td>
											<a href="#">34432</a>
										</td>
										<td>1</td>
										<td>
											<h6 class="no-margin text-semibold">&euro; 370.00</h6>
										</td>
										<td class="text-center">
											<ul class="icons-list">
												<li class="dropdown">
													<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
													<ul class="dropdown-menu dropdown-menu-right">
														<li><a href="#"><i class="icon-truck"></i> Track parcel</a></li>
														<li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
														<li><a href="#"><i class="icon-wallet"></i> Payment details</a></li>
														<li class="divider"></li>
														<li><a href="#"><i class="icon-warning2"></i> Report problem</a></li>
													</ul>
												</li>
											</ul>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<!-- /orders history (static table) -->


					<!-- Orders history (datatable) -->
					<div class="panel panel-white">
						<div class="panel-heading">
							<h6 class="panel-title">Orders history (Datatable)</h6>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<table class="table table-orders-history text-nowrap">
							<thead>
								<tr>
									<th>Status</th>
									<th>Product name</th>
									<th>Size</th>
									<th>Colour</th>
									<th>Article number</th>
									<th>Units</th>
									<th>Price</th>
									<th class="text-center"><i class="icon-arrow-down12"></i></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1. New orders</td>
									<td>
										<div class="media">
											<a href="#" class="media-left">
												<img src="assets/images/placeholder.jpg" height="60" class="" alt="">
											</a>

											<div class="media-body media-middle">
												<a href="#" class="text-semibold">Fathom Backpack</a>
												<div class="text-muted text-size-small">
													<span class="status-mark bg-grey position-left"></span>
													Processing
												</div>
											</div>
										</div>
									</td>
									<td>34cm x 29cm</td>
									<td>Orange</td>
									<td>
										<a href="#">1237749</a>
									</td>
									<td>1</td>
									<td>
										<h6 class="no-margin text-semibold">&euro; 79.00</h6>
									</td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-truck"></i> Track parcel</a></li>
													<li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
													<li><a href="#"><i class="icon-wallet"></i> Payment details</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-warning2"></i> Report problem</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>

								<tr>
									<td>1. New orders</td>
									<td>
										<div class="media">
											<a href="#" class="media-left">
												<img src="assets/images/placeholder.jpg" height="60" class="" alt="">
											</a>

											<div class="media-body media-middle">
												<a href="#" class="text-semibold">Mystery Air Long Sleeve T Shirt</a>
												<div class="text-muted text-size-small">
													<span class="status-mark bg-grey position-left"></span>
													Processing
												</div>
											</div>
										</div>
									</td>
									<td>L</td>
									<td>Process Red</td>
									<td>
										<a href="#">345634</a>
									</td>
									<td>1</td>
									<td>
										<h6 class="no-margin text-semibold">&euro; 38.00</h6>
									</td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-truck"></i> Track parcel</a></li>
													<li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
													<li><a href="#"><i class="icon-wallet"></i> Payment details</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-warning2"></i> Report problem</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>

								<tr>
									<td>1. New orders</td>
									<td>
										<div class="media">
											<a href="#" class="media-left">
												<img src="assets/images/placeholder.jpg" height="60" class="" alt="">
											</a>
											
											<div class="media-body media-middle">
												<a href="#" class="text-semibold">Women’s Prospect Backpack</a>
												<div class="text-muted text-size-small">
													<span class="status-mark bg-grey position-left"></span>
													Processing
												</div>
											</div>
										</div>
									</td>
									<td>46cm x 28cm</td>
									<td>Neu Nordic Print</td>
									<td>
										<a href="#">5739584</a>
									</td>
									<td>1</td>
									<td>
										<h6 class="no-margin text-semibold">&euro; 60.00</h6>
									</td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-truck"></i> Track parcel</a></li>
													<li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
													<li><a href="#"><i class="icon-wallet"></i> Payment details</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-warning2"></i> Report problem</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>

								<tr>
									<td>1. New orders</td>
									<td>
										<div class="media">
											<a href="#" class="media-left">
												<img src="assets/images/placeholder.jpg" height="60" class="" alt="">
											</a>

											<div class="media-body media-middle">
												<a href="#" class="text-semibold">Overlook Short Sleeve T Shirt</a>
												<div class="text-muted text-size-small">
													<span class="status-mark bg-grey position-left"></span>
													Processing
												</div>
											</div>
										</div>
									</td>
									<td>M</td>
									<td>Gray Heather</td>
									<td>
										<a href="#">434450</a>
									</td>
									<td>1</td>
									<td>
										<h6 class="no-margin text-semibold">&euro; 35.00</h6>
									</td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-truck"></i> Track parcel</a></li>
													<li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
													<li><a href="#"><i class="icon-wallet"></i> Payment details</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-warning2"></i> Report problem</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>

								<tr>
									<td>2. Shipped orders</td>
									<td>
										<div class="media">
											<a href="#" class="media-left">
												<img src="assets/images/placeholder.jpg" height="60" class="" alt="">
											</a>

											<div class="media-body media-middle">
												<a href="#" class="text-semibold">Infinite Ride Liner</a>
												<div class="text-muted text-size-small">
													<span class="status-mark bg-success position-left"></span>
													Shipped
												</div>
											</div>
										</div>
									</td>
									<td>43</td>
									<td>Black</td>
									<td>
										<a href="#">34739</a>
									</td>
									<td>1</td>
									<td>
										<h6 class="no-margin text-semibold">&euro; 210.00</h6>
									</td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-truck"></i> Track parcel</a></li>
													<li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
													<li><a href="#"><i class="icon-wallet"></i> Payment details</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-warning2"></i> Report problem</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>

								<tr>
									<td>2. Shipped orders</td>
									<td>
										<div class="media">
											<a href="#" class="media-left">
												<img src="assets/images/placeholder.jpg" height="60" class="" alt="">
											</a>

											<div class="media-body media-middle">
												<a href="#" class="text-semibold">Custom Snowboard</a>
												<div class="text-muted text-size-small">
													<span class="status-mark bg-success position-left"></span>
													Shipped
												</div>
											</div>
										</div>
									</td>
									<td>151</td>
									<td>Black/Blue</td>
									<td>
										<a href="#">5574832</a>
									</td>
									<td>1</td>
									<td>
										<h6 class="no-margin text-semibold">&euro; 600.00</h6>
									</td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-truck"></i> Track parcel</a></li>
													<li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
													<li><a href="#"><i class="icon-wallet"></i> Payment details</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-warning2"></i> Report problem</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>

								<tr>
									<td>2. Shipped orders</td>
									<td>
										<div class="media">
											<a href="#" class="media-left">
												<img src="assets/images/placeholder.jpg" height="60" class="" alt="">
											</a>

											<div class="media-body media-middle">
												<a href="#" class="text-semibold">Kids' Day Hiker 20L Backpack</a>
												<div class="text-muted text-size-small">
													<span class="status-mark bg-success position-left"></span>
													Shipped
												</div>
											</div>
										</div>
									</td>
									<td>24cm x 29cm</td>
									<td>Figaro Stripe</td>
									<td>
										<a href="#">6684902</a>
									</td>
									<td>1</td>
									<td>
										<h6 class="no-margin text-semibold">&euro; 55.00</h6>
									</td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-truck"></i> Track parcel</a></li>
													<li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
													<li><a href="#"><i class="icon-wallet"></i> Payment details</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-warning2"></i> Report problem</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>

								<tr>
									<td>2. Shipped orders</td>
									<td>
										<div class="media">
											<a href="#" class="media-left">
												<img src="assets/images/placeholder.jpg" height="60" class="" alt="">
											</a>

											<div class="media-body media-middle">
												<a href="#" class="text-semibold">Lunch Sack</a>
												<div class="text-muted text-size-small">
													<span class="status-mark bg-success position-left"></span>
													Shipped
												</div>
											</div>
										</div>
									</td>
									<td>24cm x 20cm</td>
									<td>Junk Food Print</td>
									<td>
										<a href="#">5574829</a>
									</td>
									<td>1</td>
									<td>
										<h6 class="no-margin text-semibold">&euro; 20.00</h6>
									</td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-truck"></i> Track parcel</a></li>
													<li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
													<li><a href="#"><i class="icon-wallet"></i> Payment details</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-warning2"></i> Report problem</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>

								<tr>
									<td>2. Shipped orders</td>
									<td>
										<div class="media">
											<a href="#" class="media-left">
												<img src="assets/images/placeholder.jpg" height="60" class="" alt="">
											</a>

											<div class="media-body media-middle">
												<a href="#" class="text-semibold">Cambridge Jacket</a>
												<div class="text-muted text-size-small">
													<span class="status-mark bg-success position-left"></span>
													Shipped
												</div>
											</div>
										</div>
									</td>
									<td>XL</td>
									<td>Nomad/Railroad</td>
									<td>
										<a href="#">475839</a>
									</td>
									<td>1</td>
									<td>
										<h6 class="no-margin text-semibold">&euro; 175.00</h6>
									</td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-truck"></i> Track parcel</a></li>
													<li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
													<li><a href="#"><i class="icon-wallet"></i> Payment details</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-warning2"></i> Report problem</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>

								<tr>
									<td>2. Shipped orders</td>
									<td>
										<div class="media">
											<a href="#" class="media-left">
												<img src="assets/images/placeholder.jpg" height="60" class="" alt="">
											</a>

											<div class="media-body media-middle">
												<a href="#" class="text-semibold">Covert Jacket</a>
												<div class="text-muted text-size-small">
													<span class="status-mark bg-success position-left"></span>
													Shipped
												</div>
											</div>
										</div>
									</td>
									<td>XXL</td>
									<td>Mocha/Glacier Sierra</td>
									<td>
										<a href="#">589439</a>
									</td>
									<td>1</td>
									<td>
										<h6 class="no-margin text-semibold">&euro; 126.00</h6>
									</td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-truck"></i> Track parcel</a></li>
													<li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
													<li><a href="#"><i class="icon-wallet"></i> Payment details</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-warning2"></i> Report problem</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>

								<tr>
									<td>3. Cancelled orders</td>
									<td>
										<div class="media">
											<a href="#" class="media-left">
												<img src="assets/images/placeholder.jpg" height="60" class="" alt="">
											</a>

											<div class="media-body media-middle">
												<a href="#" class="text-semibold">Day Hiker Pinnacle 31L Backpack</a>
												<div class="text-muted text-size-small">
													<span class="status-mark bg-danger position-left"></span>
													Cancelled
												</div>
											</div>
										</div>
									</td>
									<td>42cm x 26.5cm</td>
									<td>Blotto Ripstop</td>
									<td>
										<a href="#">5849305</a>
									</td>
									<td>1</td>
									<td>
										<h6 class="no-margin text-semibold">&euro; 130.00</h6>
									</td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-truck"></i> Track parcel</a></li>
													<li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
													<li><a href="#"><i class="icon-wallet"></i> Payment details</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-warning2"></i> Report problem</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>

								<tr>
									<td>3. Cancelled orders</td>
									<td>
										<div class="media">
											<a href="#" class="media-left">
												<img src="assets/images/placeholder.jpg" height="60" class="" alt="">
											</a>

											<div class="media-body media-middle">
												<a href="#" class="text-semibold">Kids' Gromlet Backpack</a>
												<div class="text-muted text-size-small">
													<span class="status-mark bg-danger position-left"></span>
													Cancelled
												</div>
											</div>
										</div>
									</td>
									<td>22cm x 20cm</td>
									<td>Slime Camo Print</td>
									<td>
										<a href="#">4438495</a>
									</td>
									<td>1</td>
									<td>
										<h6 class="no-margin text-semibold">&euro; 35.00</h6>
									</td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-truck"></i> Track parcel</a></li>
													<li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
													<li><a href="#"><i class="icon-wallet"></i> Payment details</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-warning2"></i> Report problem</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>

								<tr>
									<td>3. Cancelled orders</td>
									<td>
										<div class="media">
											<a href="#" class="media-left">
												<img src="assets/images/placeholder.jpg" height="60" class="" alt="">
											</a>

											<div class="media-body media-middle">
												<a href="#" class="text-semibold">Tinder Backpack</a>
												<div class="text-muted text-size-small">
													<span class="status-mark bg-danger position-left"></span>
													Cancelled
												</div>
											</div>
										</div>
									</td>
									<td>42cm x 26cm</td>
									<td>Dark Tide Twill</td>
									<td>
										<a href="#">4759383</a>
									</td>
									<td>2</td>
									<td>
										<h6 class="no-margin text-semibold">&euro; 180.00</h6>
									</td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-truck"></i> Track parcel</a></li>
													<li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
													<li><a href="#"><i class="icon-wallet"></i> Payment details</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-warning2"></i> Report problem</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>

								<tr>
									<td>3. Cancelled orders</td>
									<td>
										<div class="media">
											<a href="#" class="media-left">
												<img src="assets/images/placeholder.jpg" height="60" class="" alt="">
											</a>

											<div class="media-body media-middle">
												<a href="#" class="text-semibold">Almighty Snowboard Boot</a>
												<div class="text-muted text-size-small">
													<span class="status-mark bg-danger position-left"></span>
													Cancelled
												</div>
											</div>
										</div>
									</td>
									<td>45</td>
									<td>Multiweave</td>
									<td>
										<a href="#">34432</a>
									</td>
									<td>1</td>
									<td>
										<h6 class="no-margin text-semibold">&euro; 370.00</h6>
									</td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-truck"></i> Track parcel</a></li>
													<li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
													<li><a href="#"><i class="icon-wallet"></i> Payment details</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-warning2"></i> Report problem</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<!-- /orders history (datatable) -->


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
