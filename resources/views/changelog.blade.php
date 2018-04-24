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
	<script type="text/javascript" src="{{url('assets/js/plugins/ui/prism.min.js')}}"></script>
	
	<script type="text/javascript" src="{{url('assets/js/core/app.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/pages/sidebar_detached_sticky_native.js')}}"></script>
	<!-- /theme JS files -->

</head>

<body data-spy="scroll" data-target=".sidebar-detached" class="has-detached-right">

	<!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="index"><img src="assets/images/logo_light.png" alt=""></a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
				<li><a class="sidebar-mobile-detached-toggle"><i class="icon-grid7"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li>
					<a class="sidebar-control sidebar-main-toggle hidden-xs">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>

				<li>
					<a class="sidebar-control sidebar-detached-hide hidden-xs">
						<i class="icon-drag-right"></i>
					</a>
				</li>

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
								<li class="active"><a href="changelog"><i class="icon-list-unordered"></i> <span>Changelog <span class="label bg-blue-400">1.6</span></span></a></li>
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
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Limitless</span> - Changelog</h4>
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
							<li><a href="index">Limitless</a></li>
							<li class="active">Changelog</li>
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

					<!-- Detached content -->
					<div class="container-detached">
						<div class="content-detached">

							<!-- Version 1.6 -->
							<div class="panel panel-flat" id="v_1_6">
								<div class="panel-heading">
									<h5 class="panel-title">Version 1.6</h5>
									<div class="heading-elements">
										<span class="text-muted heading-text">April 20, 2017</span>
										<span class="label bg-blue heading-text">v. 1.6</span>
					            	</div>
								</div>

								<div class="panel-body">
									<p class="content-group">Version 1.6 is the final release of 1.* versions and includes important bug fixes, improvements and a couple of new pages - Ecommerce set, Pricing tables and Statistics widgets. Also includes 10 updated plugins, some of them were planned for previous version, but included in 1.6 for some reasons. Next version will have major improvements, Bootstrap 4.0 version and will be available for download withint next few months.</p>

<pre class="language-javascript"><code>// # List of new components
// ------------------------------

[new]  Ecommerce - Product list (ecommerce_product_list)
[new]  Ecommerce - Product grid (ecommerce_product_grid)
[new]  Ecommerce - Orders history (ecommerce_orders_history)
[new]  Ecommerce - Customers list (ecommerce_customers)
[new]  Ecommerce - Pricing tables (ecommerce_pricing)

[new]  General pages - Statistics widgets (general_widgets_stats)



// # List of updated plugins
// ------------------------------

[updated]  Bootstrap Select - bootstrap_select.min.js - to 1.12.2
[updated]  Image Cropper - cropper.min.js - to 3.0.0
[updated]  Fullcalendar - fullcalendar.min.js - to 3.3.1
[updated]  Dual Listbox - duallistbox.min.js - to 3.0.6
[updated]  Bootstrap Switch - switch.min.js - to 3.3.4
[updated]  Form Validation - validate.min.js and related files - to 1.16.0
[updated]  Anytime picker - anytime.min.js - to 5.2.0
[updated]  ION Range Slider - ion_rangelider.min.js - to 2.1.7
[updated]  NoUI Slider - nouislider.min.js - to 9.2.0
[updated]  Bootstrap File Input - fileinput.min.js - to 4.4.0
[updated]  Fancytree - fancytree_all.min.js, fancytree_childcounter.js - to 2.22.1



// # List of fixed
// ------------------------------

[fixed]  Daterangepicker doesn’t update values and dates in calendar entered manually in date range input fields
[fixed]  .media-annotation, .task-details list and .timeline-time classes - dot separator has incorrect HTML value
[fixed]  Wrong paths to locales in internationalization examples
[fixed]  Added missed .no-shadow class to helpers.less in default theme
[fixed]  Links with .text-muted class should have default text color on hover and focus
[fixed]  Fixed .media-body width bug if used inside tables
[fixed]  jQuery UI datepicker has wrong z-index and displays behind form group
[fixed]  Removed path to user_pages_team.js in user_pages_cards and removed file itself from assets/js/pages/
[fixed]  Deprecation warning about date formats everywhere where daterangepicker is used
[fixed]  Bootstrap file input - can’t remove thumb
[fixed]  Bootstrap file input - thumbnails are not draggable
[fixed]  Ripple throws JS error when used in dragging handler in bootstrap file input
[fixed]  Panel body should not inherit background color from panel
[fixed]  In coloured panel multiple panel bodies have wrong top border color

[fixed]  RTL layout - Bootstrap switch in RTL doesn’t work



// # List of improvements
// ------------------------------

[improved]  Added responsive text alignment helper classes (.text-right-xs, .text-right-sm, .text-right-md, .text-right-lg)
[improved]  Added opacity helper classes (.opacity-75, .opacity-50, .opacity-25, .opacity-0)
[improved]  Removed all styles for images inside .stack-media-on-mobile container
[improved]  Added .img-md to helpers.less and changed fixed image size in .media-left/.media-right elements
[improved]  Added .datatable-header-accent and .datatable-footer-accent classes to highlight datatable header/footer
[improved]  Added scrollable block to sidebar
[improved]  Removed custom JS code for datatables filter field placeholder and replaced with DT searchPlaceholder option
[improved]  Added an option to panel to use background image in background
[improved]  Image sizing in thumbnails
</code></pre>
								</div>
							</div>
							<!-- /version 1.6 -->


							<!-- Version 1.5 -->
							<div class="panel panel-flat" id="v_1_5">
								<div class="panel-heading">
									<h5 class="panel-title">Version 1.5</h5>
									<div class="heading-elements">
										<span class="text-muted heading-text">January 15, 2017</span>
										<span class="label bg-blue heading-text">v. 1.5</span>
					            	</div>
								</div>

								<div class="panel-body">
									<p class="content-group">Version 1.5 is a second part of version 1.4, which includes 22 new pages from 7 categories, various improvements and bug fixes. Please check documentation for a full list of changes and files that need to be updated.</p>

<pre class="language-javascript"><code>// # List of new components
// ------------------------------

[new]  Blog - Vertical layout (blog_classic_v)
[new]  Blog - Horizontal layout (blog_classic_h)
[new]  Blog - Grid layout (blog_grid)
[new]  Blog - Single post (blog_single)
[new]  Blog - With left sidebar (blog_sidebar_left)
[new]  Blog - With right sidebar (blog_sidebar_right)

[new]  General pages - Feed layouts (general_feed)
[new]  General pages - Content widgets (general_widgets_content)
[new]  General pages - Responsive embeds (general_embeds)

[new]  Service pages - Sitemap (service_sitemap)

[new]  User pages - Tabbed profile (user_pages_profile_tabbed)

[new]  Mailbox - Mail list (mail_list)
[new]  Mailbox - List with detached sidebar (layout 1 and 2) (mail_list_detached)
[new]  Mailbox - Read mail (mail_read)
[new]  Mailbox - Write mail (mail_write)

[new]  Job search - Cards view (job_list_cards)
[new]  Job search - Panel view (job_list_panel)
[new]  Job search - Detailed view (job_detailed)
[new]  Job search - Apply (job_apply)

[new]  Learning kit - List view (learning_list)
[new]  Learning kit - Grid view (learning_grid)
[new]  Learning kit - Detailed view (learning_detailed)



// # List of updated plugins
// ------------------------------

[updated]  Switchery library - switchery.min.js - to 0.8.2
[updated]  Touchspin spinners - touchspin.min.js - to 3.1.2
[updated]  Autosize extension - autosize.min.js - to 3.0.20
[updated]  Bootstrap Select - bootstrap_select.min.js to 1.12.1
[updated]  Moment.js - moment.min.js, moment_locales.min.js - to 2.17.1

[updated]  Image Cropper - cropper.min.js - to 2.3.4
[updated]  Plupload file uploader - plupload bundle - to 2.2.1
[updated]  Bootstrap File Input library - fileinput.min.js to 4.3.7

[updated]  Datatables library - datatables.min.js - to 1.10.13
[updated]  Autofill DT extention - autofill.min.js - to 2.1.3
[updated]  Buttons DT extention - buttons.min.js - to 1.2.4
[updated]  Key Table DT extention - key_table.min.js - to 2.2.0
[updated]  Row Reorder DT extention - row_reorder.min.js - to 1.2.0



// # List of fixed
// ------------------------------

[fixed]  Button with icon doesn't support checkboxes/radios
[fixed]  Float button - if text is too long, it wraps on the second line
[fixed]  Mini sidebar - in collapsed more, items with child levels have wrong right padding
[fixed]  Sidebar container bottom spacing fixes
[fixed]  In separate sidebar, panels and categories have double bottom spacing
[fixed]  Badge and label are transparent in active navigation item in default sidebar
[fixed]  Login and registration pages - password fields have wrong input types
[fixed]  Dropzone uploader - if uploader is not inside panel, background and border colors don't match
[fixed]  If responsive table goes after panel heading, table container and table itself need top border
[fixed]  Panel title doesn’t respect font size classes
[fixed]  Mini sidebar - children level dropdown in main navigation appears behind footer
[fixed]  Stacked media lists don't respect text alignment classes
[fixed]  If media object is displayed as panel body, it has extra top margin
[fixed]  Datatables fixed header - when click click sidebar control button, headers do not adjust to a new width
[fixed]  Anytime picker - empty cells are hidden in date grid
[fixed]  In material layout, multiple navbar buttons don't have horizontal spacing
[fixed]  FAB button in 5th layout has extra border

[fixed]  RTL layout - Dropzone uploader adds extra horizontal space to body and scrollbar appears
[fixed]  RTL layout - default pace theme doesn't show up



// # List of improvements
// ------------------------------

[improved]  @table-cell-padding variable does not use padding variable
[improved]  Removed unused .icons-list-vertical class from html pages
[improved]  Removed unused .btn-slide class from html files
[improved]  Added inline list with vertical borders (.list-inline-bordered)
[improved]  Added group of block buttons (.btn-block-group)
[improved]  Added seamless row option which doesn't page spacing between columns (.row-seamless)
[improved]  Added border radius helpers (helpers.less)
[improved]  Added no-border option for jQuery UI datepicker if used inside panel
[improved]  Added class name for scrollable panel to limit panel viewport (.has-scroll)
[improved]  Added top border if panel has multiple bodies
[improved]  Added class name for slightly darker panel body (.panel-body-accent)
[improved]  Added nav tabs toolbar with grey background (.nav-tabs-toolbar)
[improved]  Improved navigation and file naming
</code></pre>
								</div>
							</div>
							<!-- /version 1.5 -->


							<!-- Version 1.4 -->
							<div class="panel panel-flat" id="v_1_4">
								<div class="panel-heading">
									<h5 class="panel-title">Version 1.4 (part 1)</h5>
									<div class="heading-elements">
										<span class="text-muted heading-text">September 1, 2016</span>
										<span class="label bg-blue heading-text">v. 1.4</span>
					            	</div>
								</div>

								<div class="panel-body">
									<p class="content-group">Version 1.4 consists of 2 parts - first part contains updated libraries to the latest stable versions, fixed reported bugs and general template improvements; second part will include new pages and new components only. In general, this update doesn't include critical changes, but some of the features were completely re-thought: hiding panel heading and page header elements is now optional and file structure in Starter Kit has been slightly changed: now each layout uses common LESS and JS files for both main and starters layouts.</p>

<pre class="language-javascript"><code>// # List of updated plugins
// ------------------------------

[updated]  Bootstrap library - bootstrap.min.js, bootstrap LESS files - to 3.3.7
[updated]  Font Awesome icon set - bundle - to 4.6.3

[updated]  Hover Dropdown extension - hover_dropdown.min.js - to 2.2.1
[updated]  Typeahead engine - typeahead.bundle.min.js to 0.11.1
[updated]  Dual Listbox - duallistbox.min.js - to 3.0.5
[updated]  Select2 library - select2.min.js - to 4.0.3
[updated]  Bootstrap Select library - bootstrap_select.min.js - to 1.11.1
[updated]  Uniform library - uniform.min.js - to 3.0
[updated]  Summernote editor - summernote.min.js - to 0.8.2

[updated]  Ladda extensions - ladda.min.js - to 1.0.0
[updated]  Bootstrap Progress Bars - progressbar.min.js - to 0.9.0
[updated]  Bootbox dialogs extension - bootbox.min.js to 4.4.0
[updated]  Bootpag pagination - bootpag.min.js - to 1.0.7
[updated]  Bootstrap pagination extension - bs_pagination.min.js - to 1.4

[updated]  Spectrum color picker - spectrum.js - to 1.8.0
[updated]  Pickadate pickers - pickadate.js bundle - to 3.5.6
[updated]  Anytime picker - anytime.min.js - to 5.1.2
[updated]  Bootstrap daterange picker - daterangepicker.js - to 2.1.23
[updated]  Moment.js library - moment.min.js and moment_locales.min.js - to 2.14.1

[updated]  ION Range sliders - ion_rangeslider.min.js - to 2.1.4
[updated]  NoUI sliders - nouislider.min.js - to 8.5.1
[updated]  jQuery UI slider pips - slider_pips.min.js - to 1.11.3 (in LTR only)

[updated]  Datatables library - datatables.min.js - to 1.10.12
[updated]  Autofill DT extention - autofill.min.js - to 2.1.2
[updated]  Buttons DT extention - buttons.min.js - to 1.2.1
[updated]  Column Reorder DT extention - col_reorder.min.js - to 1.3.2
[updated]  Fixed Columns DT extention - fixed_columns.min.js - to 3.2.2
[updated]  Fixed Header DT extention - fixed_header.min.js - to 3.1.2
[updated]  Key Table DT extention - key_table.min.js - to 2.1.2
[updated]  Responsive DT extention - responsive.min.js - to 2.1.0
[updated]  Row Reorder DT extention - row_reorder.min.js - to 1.1.2
[updated]  Scroller DT extention - scroller.min.js - to 1.4.2
[updated]  Select DT extention - select.min.js - to 1.2.0
[updated]  Handsontable library - handsontable.min.js - to 0.26.0

[updated]  Image Cropper - cropper.min.js to 2.3.3
[updated]  Typeahead Addresspicker - typeahead_addresspicker.js to the latest version
[updated]  Fancytree library - fancytree.min.js - to 2.18.0
[updated]  Fullcalendar library - fullcalendar.min.js - to 2.9.1
[updated]  Headroom.js extension - headroom.min.js and headroom_jquery.min.js - to 0.9.3
[updated]  Nicescroll custom scrollbar - nicescroll.min.js - to 3.6.8
[updated]  D3.js charting library - d3.min.js - to 3.5.17

[updated]  Plupload file uploader - plupload bundle - to 2.1.9
[updated]  Bootstrap File Input library - fileinput.min.js to 4.3.5



// # List of fixed
// ------------------------------

[fixed]  Wrong horizontal padding in typeahead suggestions menu items in material layout
[fixed]  WYSIHTML5 text editor color picker doesn’t work and doesn't respect text styles
[fixed]  Fullcalendar table overflow is visible on small screens and some responsive issues
[fixed]  Datatable buttons collection dropdown has wrong horizontal padding
[fixed]  Alpaca horizontal selects extra gap between selects
[fixed]  Fancytree Child Counter extension missing styles
[fixed]  Pager has negative bottom margin
[fixed]  Tabs inside panel don’t have padding on mobile
[fixed]  Nested tabs in vertical tabs layout are also vertical
[fixed]  Styled single file input doesn’t respect width if file name is too long
[fixed]  Mega menu isn’t scrollable on mobile if inside fixed secondary navbar
[fixed]  jQuery UI datepicker is hidden if inside jQuery UI dialog
[fixed]  Dropdown menu in material layout inside breadcrumb elements has wrong placement
[fixed]  Bootstrap file input loading indicator has wrong position when loading begins
[fixed]  jQuery UI Select with icons - icons don’t have horizontal spacing
[fixed]  Steps wizard content overflow is hidden, so components inside wizard are partially hidden
[fixed]  Bootstrap select in panel heading elements triggers native select on click
[fixed]  Dropdown submenus on Android don’t open
[fixed]  Breadcrumb line component inside page header in material layout displayed incorrectly
[fixed]  Single styled file inputs are displayed inline on drag&amp;drop page, in material layout
[fixed]  Search field in search and knowledgebase has background color in material layout
[fixed]  Contextual panels don't have background color on mobile, if heading elements are collapsed
[fixed]  Image cropper in Summernote editor has wrong position and appears behind image

[fixed]  RTL layout - typeahead inputs in material layout have wrong direction
[fixed]  RTL layout - fancy box has incorrect position
[fixed]  RTL layout - handsontable tables have wrong styles
[fixed]  RTL layout - daterangepicker is missing RTL direction in plugin configurations



// # List of improvements
// ------------------------------

[improved]  Improved file structure in Starter Kits
[improved]  Removed paths to extra JS files in Handsontable pages
[improved]  gulpfile.js - minifycss replaced with clean-css due to deprecation
[improved]  Improved Typeahead initializations accross JS files
[improved]  Added missing badges component to panel and page header components list
[improved]  Added 3 new examples of Bootbox dialog extension
[improved]  Added option to disable collapsing of heading elements on mobile (using .not-collapsible class added to .heading-elements container)
[improved]  Now heading elements on mobile push content down instead of covering elements below, so that all responsive containers have consistent appearance
[improved]  Panel heading elements now have background color different from panel background color on mobiles
[improved]  Each layout now uses 1 gulp file for main layout and Starter Kits
</code></pre>
								</div>
							</div>
							<!-- /version 1.4 -->


							<!-- Version 1.3 -->
							<div class="panel panel-flat" id="v_1_3">
								<div class="panel-heading">
									<h5 class="panel-title">Version 1.3</h5>
									<div class="heading-elements">
										<span class="text-muted heading-text">April 1, 2016</span>
										<span class="label bg-blue heading-text">v. 1.3</span>
					            	</div>
								</div>

								<div class="panel-body">

<pre class="language-javascript"><code>// # List of new components
// ------------------------------

[new]  New layout
[new]  Material design theme for all layouts
[new]  Alpaca forms - JSON driven form generator
[new]  Floating Action Menu - material style floating action button with menu, supports 4 positions
[new]  Panel footer components - a great addition to panel component to display panel header components in panel footer
[new]  Floating labels - display hidden labels on input fields
[new]  New heading components - image thumbnails and inline lists
[new]  New page header options - transparent, light, dark, light image and dark image
[new]  New tabs - vertical left/right, with top icons
[new]  Modal with remote source - configuration example
[new]  Navbar navigation - added status mark support
[new]  Forms - added large and extra large input sizes
[new]  Footer - now footer can be either text or navbar component (static and fixed)
[new]  Components animation - added optional transitions to all components, now they are animated by default



// # List of updated plugins
// ------------------------------

[updated]  PNotify notifications - pnotify.min.js - to 3.0.0
[updated]  Noty notifications - noty.min.js - to 2.3.8

[updated]  Datatables library - datatables.min.js - to 1.10.11 and extensions
[updated]  Autofill extension - autofill.min.js - to 2.1.1
[updated]  Buttons extension - buttons.min.js - to 1.1.2
[updated]  Column reorder extension - col_reorder.min.js - to 1.3.1
[updated]  Fixed columns extension - fixed_columns.min.js - to 3.2.1
[updated]  Fixed header extension - fixed_header.min.js - to 3.1.1
[updated]  Key table extension - key_table.min.js - to 2.1.1
[updated]  Responsive extension - responsive.min.js - to 2.0.2
[updated]  Row reorder extension - row_reorder.min.js - to 1.1.1
[updated]  Scroller extension - scroller.min.js - to 1.4.1
[updated]  Select extension - select.min.js - to 1.1.2

[updated]  Select2 library - select2.min.js - to 4.0.2
[updated]  ECharts charting library - echarts.js - to 2.2.7
[updated]  FullCalendar - fullcalendar.min.js - to 2.6.1
[updated]  Dropzone file uploader - dropzone.min.js - to 4.3.0 (done, replace dropzone.less everywhere)
[updated]  Plupload file uploader - plupload.full.min.js - to 2.1.8
[updated]  D3.js visualization library - d3.min.js -  to 3.5.16
[updated]  Noui slider - nouislider.min - to 8.3.0 (done)
[updated]  BlockUI extension - blockui.min.js - to 2.7.0
[updated]  Jasny Bootstrap - jasny_bootstrap.min.js - to 3.1.3
[updated]  Passy - passy.js - to the latest version
[updated]  Auto growing textarea - autosize.js - to 3.0.15 (requires fixes in form_controls_extended.js) (done)
[updated]  Bootstrap selects - bootstrap_select.min.js - to 1.10.0 (requires fixes in bootstrap-select.less) (done)
[updated]  Touchspin spinners - touchspin.min.js - to 3.1.1
[updated]  Bootstrap tags input - bootstrap_tagsinput.min.js - to 0.8.0
[updated]  Form validation - validate.min.js - to 1.15.0 (also needs to be updated form_validation.js - replace card with creditcard)
[updated]  Summernote editor - summernote.min.js - to 0.8.1 (needs new font files to be added)
[updated]  Hideable navbar - headroom.min.js - to 0.8.0
[updated]  Bootstrap file input - file-input.min.js - to 4.3.1
[updated]  Handlebars - handlebars.min.js - to 4.0.5



// # List of fixed
// ------------------------------

[fixed]  Extra horizontal scrollbar in Fullcalendar in Firefox
[fixed]  Multiple Select2 - wrong cross icon placement in FF
[fixed]  Container height hack for FF caused footer issues on mobile
[fixed]  Select2 multiple select with custom bg color - wrong placeholder color
[fixed]  Typo in navbar.less, which caused compilation warnings
[fixed]  When collapsing/expanding sidebar category, class name is added to a wrong item
[fixed]  Panel heading - incorrect vertical alignment in icons and text (wrong calculation) 
[fixed]  Descriptions list have incorrect titles on mobiles
[fixed]  If badges have border, border radius is too small to make them rounded
[fixed]  Panel heading - wrong position of tabs and pills
[fixed]  Incorrect height of ION range slider
[fixed]  noUI vertical slider has wrong range width
[fixed]  Color picker overflows fixed navbar
[fixed]  Growl notification generated by BlockUI has double border
[fixed]  jQuery UI selects - long text overlaps arrow icon
[fixed]  Dropzone icon marks appear on the left side overflowing thumb
[fixed]  In 3rd and 4th layout, collapsed sidebar has extra top spacing
[fixed]  Links with default bootstrap contextual background colors have wrong colors on hover/focus
[fixed]  If panel is collapsed by default, arrow icon isn’t rotated
[fixed]  Single daterange picker with time picker - empty calendars container shows up
[fixed]  Floating button inside page header (link buttons) don’t have vertical padding
[fixed]  On mobiles, flat button inside navbar has wrong color text color
[fixed]  Invoice template first row has wrong breakpoint
[fixed]  Datatables doesn’t have horizontal spacing in header/footer if table is inside form
[fixed]  Hideable navbar doesn’t support optional navbar sizes
[fixed]  Border radius inconsistency in input elements
[fixed]  Icon inside input group disappears when input is focused
[fixed]  Default and flat labels/badges heights are inconsistent
[fixed]  Pagination and pager have extra bottom spacing
[fixed]  Datatables fixed columns extension - complex header example not resizable
[fixed]  Dual list boxes inconsistent border radiuses



// # List of improvements
// ------------------------------

[improved]  Improved *-sm and *-xs styles in inputs, buttons, selects and input groups
[improved]  Additional placements of labels/badges in dropdown (badges/labels are always on the far right)
[improved]  Fancy box close button position
[improved]  Added horizontal spacing to images inside user dropdown menu
[improved]  Single styled file input (supports text and icons with all available button styles)
[improved]  Use buttons instead of inputs in steps actions
[improved]  Label/badge and flat label/badge size inconsistency
[improved]  Increased caret width
[improved]  Added .no-shadow helper class - removes shadow from element
[improved]  Tabs inside panel header
[improved]  Removed input highlights in contextual feedback states
[improved]  Look and feel of CKEditor toolbar
[improved]  Added multiselect dropdown support to navbar
[improved]  Sidebar navigation appearance
[improved]  Significantly improved LESS file structure
</code></pre>
								</div>
							</div>
							<!-- /version 1.3 -->


							<!-- Version 1.2.1 -->
							<div class="panel panel-flat" id="v_1_2_1">
								<div class="panel-heading">
									<h5 class="panel-title">Version 1.2.1</h5>
									<div class="heading-elements">
										<span class="text-muted heading-text">December 15, 2015</span>
										<span class="label bg-blue heading-text">v. 1.2.1</span>
					            	</div>
								</div>

								<div class="panel-body">
									<p class="content-group">Version 1.2.1 is a quick update that contains some reported bugs fixes and plugins update. Nothing new is added since this is an addition to global 1.2 version. Important milestone for 1.3 version is footer and container height enhancements - jquery solution for calculating minimum container height will be replaced with pure CSS.</p>

<pre class="language-javascript"><code>// # List of updated plugins
// ------------------------------

[updated]  Bootstrap file input - to the latest version
[updated]  Select2 - from RC1 to stable 4.0.1 version


// # List of fixed bugs
// ------------------------------

// Core fixes
[fixed]  Documentation - correct release date on main page, fixed path to globalize/ library, gulp plugins to install
[fixed]  Navbar - added sticky sidebar top spacing if used with fixed top single navbar. To be enhanced in 1.3
[fixed]  Fixed sidebar and navbar - removed unnecessary affix code from the page

// Components fixes
[fixed]  Centered timeline - extra dots on desktop
[fixed]  Datatables Select extension - checkboxes are not selectable
[fixed]  Datatables Autofill and Select - wrong columns sorting in examples with checkboxes
[fixed]  Select2 selects - selected text overlaps arrow in single select
[fixed]  Select2 selects validation - wrong error/success label placement
</code></pre>

								</div>
							</div>
							<!-- /version 1.2.1 -->


							<!-- Version 1.2 -->
							<div class="panel panel-flat" id="v_1_2">
								<div class="panel-heading">
									<h5 class="panel-title">Version 1.2</h5>
									<div class="heading-elements">
										<span class="text-muted heading-text">December 2, 2015</span>
										<span class="label bg-blue heading-text">v. 1.2</span>
					            	</div>
								</div>

								<div class="panel-body">
									<p class="content-group">Version 1.2 includes bug fixing for reported issues, new components and updated plugins/libraries to the latest stable versions. Also i've included <code>gulp</code> file to simplify development process, including <code>package.json</code> file. New components added: <strong>Handsontable</strong> library, <strong>Dragula</strong> drag and drop library, full set of jQuery UI components, new <strong>Select2</strong> version and updated examples, full set of <strong>Datatables</strong> extensions and new <strong>login</strong> pages. Changes in this update affect all layouts, both LTR and RTL directions.</p>

<pre class="language-javascript"><code>// # List of new components
// ------------------------------

[new]  Handsontable - excel-like spreadsheet for apps
[new]  Dragula - drag and drop library
[new]  jQuery UI - full set of components
[new]  Row Reorder - Datatables extension
[new]  Fixed Header - Datatables extension
[new]  Auto Fill - Datatables extension
[new]  Key Table - Datatables extension
[new]  Select - Datatables extension
[new]  Buttons - Datatables extension
[new]  Login/registration form with validation
[new]  Login/registration forms inside modals
[new]  Login/registration form inside tabs
[new]  Vertical navigation with labels and badges
[new]  Ion Range Sliders - responsive range slider library
[new]  gulpfile.js and package.json for Gulp task runner


// # List of updated plugins
// ------------------------------

[updated]  Bootstrap library - to version 3.3.6
[updated]  jQuery UI library - to the latest version (1.11.4)
[updated]  Select2 - to version 4.0.1, including examples
[updated]  Sweet Alerts - to the latest version, including examples
[updated]  Datatables - to the latest version (1.10.10)
[updated]  Daterangepicker - to the latest version (2.1.13)
[updated]  NoUI sliders library - to the latest version (8.1.0)
[updated]  Velocity animations library - to the latest version (1.2.3 and 5.0.4)
[updated]  i18next internationalization library - to the latest version (1.11.1)


// # List of fixed bugs
// ------------------------------

// Core fixes
[fixed]  Filled page header - extra scroll when content height is smaller than page height (2nd, 3rd and 4th layouts)
[fixed]  Vertical navigation sizing in Mini sidebar mode (wrong top spacing in sub menu)
[fixed]  Added missing margin and padding helper classes to the helpers table

// Components fixes
[fixed]  Login/registration and error pages - jump on page load
[fixed]  Removed modals with remote source as deprecated in 3.3.0 version (to be replaced with AJAX modals)
[fixed]  Badges now have transparent background color by default - no dependency on parent container bg color
[fixed]  Form wizard with validation - doesn’t go to the second step when all inputs filled
[fixed]  Daterangepicker picker - invisible text in selects
[fixed]  Daterange single date picker extra horizontal spacing
[fixed]  Fancybox lightbox jumps to the top of the page on button click
[fixed]  Fancybox loading icon doesn't show up
[fixed]  Blockquote footer overlapping
[fixed]  NoUI slider RTL direction support
[fixed]  Bootstrap tags input RTL Typeahead input direction (appears in LTR direction)
[fixed]  jQuery UI datepicker selects wrong margin that causes stacking
[fixed]  Form control feedback icon inside input group is hidden on focus
[fixed]  Horizontal multi level menu with nice scroll causes js error, because initialized twice


// # List of enhancements
// ------------------------------

[enhanced]  Added extra styles for syntax highlighter, doesn't look so boring with stripes
[enhanced]  Re-structured less files for tables, now they more organized
[enhanced]  Changed structure of jQuery UI components and less files - grouped by widgets, effects, core and interactions
[enhanced]  jQueryUI and NoUI sliders default color changed from grey to dark blue


// # List of new pages
// ------------------------------

[new page] navigation_vertical_labels_badges
[new page] jqueryui_interactions
[new page] jqueryui_forms
[new page] jqueryui_components
[new page] jqueryui_navigation
[new page] extension_dnd
[new page] datatable_extension_row_reorder
[new page] datatable_extension_fixed_header
[new page] datatable_extension_autofill
[new page] datatable_extension_key_table
[new page] datatable_extension_select
[new page] datatable_extension_buttons_init
[new page] datatable_extension_buttons_flash
[new page] datatable_extension_buttons_print
[new page] datatable_extension_buttons_html5
[new page] handsontable_basic
[new page] handsontable_advanced
[new page] handsontable_cols
[new page] handsontable_cells
[new page] handsontable_types
[new page] handsontable_custom_checks
[new page] handsontable_ac_password
[new page] handsontable_search
[new page] handsontable_context
[new page] login_validation
[new page] login_tabbed
[new page] login_modals


// # List of removed components
// ------------------------------

[removed] TableTools - Datatables extension
[removed] ColVis - Datatables extension
</code></pre>
								</div>
							</div>
							<!-- /version 1.2 -->


							<!-- Version 1.1 -->
							<div class="panel panel-flat" id="v_1_1">
								<div class="panel-heading">
									<h5 class="panel-title">Version 1.1</h5>
									<div class="heading-elements">
										<span class="text-muted heading-text">October 21, 2015</span>
										<span class="label bg-blue heading-text">v. 1.1</span>
					            	</div>
								</div>

								<div class="panel-body">

<pre class="language-javascript"><code>// # List of new components
// ------------------------------

[new]  RTL layout for all 4 main layout variations
[new]  bootbox.less - new LESS file for extended Bootstrap modal dialogs


// # List of updated plugins
// ------------------------------

[updated]  CKEditor - latest version
[updated]  Select2 - latest 3.5.x version, 4.0 is coming
[updated]  Bootstrap Multiselect - latest version
[updated]  Datatables - latest version


// # List of fixed bugs
// ------------------------------

// Core fixes
[fixed]  Sidebar - side border overlaped content in light sidebar (layout 1 and 2)
[fixed]  Breadcrumbs - in colored version links had wrong background color on hover/active
[fixed]  Breadcrumbs - dropdown menu didn't have borders in breadcrumb line component
[fixed]  Labels - striped labels didn't have right border variation as supposed to
[fixed]  Navbars - unnecessary dropdown menu re-position in navbar component
[fixed]  Button groups - extra space between buttons in toolbar
[fixed]  Tables - extra border in framed table in responsive table container

// Components fixes
[fixed]  Bootstrap Select - wrong rounded corners inside input group
[fixed]  Bootstrap Select - no styling of dropdown menu
[fixed]  SelectBox - wrong rounded corners inside input group
[fixed]  Tags Input - input field didn't have bottom spacing
[fixed]  Typeahead - small menu width if text options are too short
[fixed]  Sweet alerts - title was too big for motification size
[fixed]  Anytime picker - wrong title margin and unnecessary close button
[fixed]  jQuery UI Datepicker - extra RTL-related code in less file
[fixed]  Fullcalendar - extra RTL-related code in less file
[fixed]  Chats - wrong variables in LESS file
[fixed]  Dropzone Uploader - success/error markers moved down in thumbnails is name is visible
[fixed]  Colors - default BS styles overrided text hover state
[fixed]  SelectBox page - extra panel control buttons
</code></pre>
								</div>
							</div>
							<!-- /version 1.1 -->


							<!-- Initial release -->
							<div class="panel panel-flat" id="release">
								<div class="panel-heading">
									<h5 class="panel-title">Initial release</h5>
									<div class="heading-elements">
										<span class="text-muted heading-text">October 1, 2015</span>
										<span class="label bg-blue heading-text">v. 1.0</span>
					            	</div>
								</div>

								<div class="panel-body">
									Limitless is in active development. All updates will be properly documented and explained, to make your upgrade process as easy as possible. In all new updates will be included: bug fixing, new functionality, plugins version control and code improvement. Feel free to contact me if you have any suggestions or requests!
								</div>

								<div class="table-responsive">
									<table class="table table-bordered table-striped table-xs">
										<thead>
											<tr>
												<th class="col-xs-3">What</th>
												<th>Quantity</th>
												<th>Description</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th colspan="3" class="active">Core files</th>
											</tr>
											<tr>
												<td>Folders</td>
												<td>268</td>
												<td>Folders with files, excluding CKEditor and Starter kit folders</td>
											</tr>
											<tr>
												<td>HTML files</td>
												<td>249</td>
												<td>Depending on layout, around 249 main HTML files in each layout</td>
											</tr>
											<tr>
												<td>CSS files</td>
												<td>7</td>
												<td>4 main CSS files, 2 CSS for icon fonts and 1 <code>animate.min.css</code> animation library</td>
											</tr>
											<tr>
												<td>LESS files</td>
												<td>203</td>
												<td>All LESS files, including Bootstrap core</td>
											</tr>
											<tr>
												<td>JS files</td>
												<td>896</td>
												<td>All JS files, excluding starter kit and CKEditor folders</td>
											</tr>
											<tr>
												<td>Image files</td>
												<td>256</td>
												<td>Logos, flag icons and notification icons</td>
											</tr>
											<tr>
												<th colspan="3" class="active">Other files</th>
											</tr>
											<tr>
												<td>JSON files</td>
												<td>23</td>
												<td>Different demo data sources. For demo purposes</td>
											</tr>
											<tr>
												<td>CSV files</td>
												<td>11</td>
												<td>Mainly for charts based on <code>D3.js</code> library. For demo purposes</td>
											</tr>
											<tr>
												<td>TSV files</td>
												<td>13</td>
												<td>Mainly for charts based on <code>D3.js</code> library. For demo purposes</td>
											</tr>
											<tr>
												<td>SWF files</td>
												<td>3</td>
												<td>Additional files for datatables TableTools extension and Plupload file uploader</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- /initial release -->

						</div>
					</div>
					<!-- /detached content -->


					<!-- Detached sidebar -->
					<div class="sidebar-detached">
			        	<div class="sidebar sidebar-default">
							<div class="sidebar-content">

				        		<!-- Support -->
								<div class="sidebar-category no-margin">
									<div class="category-title">
										<span>Changelog</span>
										<i class="icon-menu7 pull-right"></i>
									</div>

									<div class="category-content">
										<a href="http://kopyov.ticksy.com" class="btn bg-danger-400 btn-block" target="_blank"><i class="icon-lifebuoy position-left"></i> Item support</a>
									</div>
								</div>
								<!-- /support -->

			        			
			        			<!-- Navigation -->
								<div class="sidebar-category">
									<div class="category-content no-padding">
										<ul class="nav navigation">
											<li class="navigation-divider no-margin-top"></li>
											<li class="navigation-header"><i class="icon-history pull-right"></i> Version history</li>
											<li><a href="#v_1_6">Version 1.6 <span class="text-muted text-regular pull-right">20.04.2017</span></a></li>
											<li><a href="#v_1_5">Version 1.5 <span class="text-muted text-regular pull-right">15.01.2017</span></a></li>
											<li><a href="#v_1_4">Version 1.4 <span class="text-muted text-regular pull-right">01.09.2016</span></a></li>
											<li><a href="#v_1_3">Version 1.3 <span class="text-muted text-regular pull-right">01.04.2016</span></a></li>
											<li>
												<a href="#v_1_2_1">Version 1.2 <span class="text-muted text-regular pull-right">16.12.2015</span></a>
												<ul>
													<li><a href="#v_1_2_1">Version 1.2.1 <span class="text-muted text-regular pull-right">16.12.2015</span></a></li>
													<li><a href="#v_1_2">Version 1.2 <span class="text-muted text-regular pull-right">02.12.2015</span></a></li>
												</ul>
											</li>
											<li><a href="#v_1_1">Version 1.1 <span class="text-muted text-regular pull-right">21.10.2015</span></a></li>
											<li><a href="#release">Initial release <span class="text-muted text-regular pull-right">01.10.2015</span></a></li>
											<li class="navigation-divider"></li>
											<li class="navigation-header"><i class="icon-gear pull-right"></i> Extras</li>
											<li><a href="http://themeforest.net/user/kopyov" target="_blank"><i class="icon-bubbles4 text-slate-400"></i> Contact me</a></li>
											<li><a href="http://kopyov.ticksy.com" target="_blank"><i class="icon-lifebuoy text-slate-400"></i> Support</a></li>
											<li><a href="http://themeforest.net/user/kopyov/portfolio?ref=Kopyov" target="_blank"><i class="icon-rocket text-slate-400"></i> Other templates</a></li>
							            </ul>
						            </div>
					            </div>
					            <!-- /navigation -->

				            </div>
			            </div>
		            </div>
		            <!-- /detached sidebar -->


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
