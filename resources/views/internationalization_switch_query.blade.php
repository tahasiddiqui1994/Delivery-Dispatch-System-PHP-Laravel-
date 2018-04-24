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
	<script type="text/javascript" src="{{url('assets/js/plugins/internationalization/i18next.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/ui/prism.min.js')}}"></script>

	<script type="text/javascript" src="{{url('assets/js/core/app.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/pages/internationalization_switch_query.js')}}"></script>
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
								<li class="navigation-header" data-i18n="nav.category.main" data-i18n-target="span">
									<span></span>
									<i class="icon-menu" data-i18n="[title]nav.category.main"></i>
								</li>
								<li>
									<a href="index" data-i18n="nav.dash.main" data-i18n-target="span">
										<i class="icon-home4"></i>
										<span></span>
									</a>
								</li>
								<li>
									<a href="#" data-i18n="nav.page_layouts.main" data-i18n-target="span"><i class="icon-stack2"></i> <span></span></a>
									<ul>
										<li><a href="layout_navbar_fixed" data-i18n="nav.page_layouts.fixed_navbar"></a></li>
										<li><a href="layout_navbar_sidebar_fixed" data-i18n="nav.page_layouts.fixed_all"></a></li>
										<li><a href="layout_sidebar_fixed_native" data-i18n="nav.page_layouts.fixed_native"></a></li>
										<li><a href="layout_navbar_hideable" data-i18n="nav.page_layouts.hideable"></a></li>
										<li><a href="layout_navbar_hideable_sidebar" data-i18n="nav.page_layouts.fixed_hideable"></a></li>
										<li><a href="layout_footer_fixed" data-i18n="nav.page_layouts.fixed_footer"></a></li>
										<li class="navigation-divider"></li>
										<li><a href="boxed_default" data-i18n="nav.page_layouts.boxed_default"></a></li>
										<li><a href="boxed_mini" data-i18n="nav.page_layouts.boxed_mini"></a></li>
										<li><a href="boxed_full" data-i18n="nav.page_layouts.boxed_full"></a></li>
									</ul>
								</li>
								<li>
									<a href="#" data-i18n="nav.layouts.main" data-i18n-target="span"><i class="icon-copy"></i> <span></span></a>
									<ul>
										<li><a href="../../layout_1/LTR/index" data-i18n="nav.layouts.layout1"></a></li>
										<li><a href="../../layout_2/LTR/index" id="layout2" data-i18n="nav.layouts.layout2"></a></li>
										<li><a href="../../layout_3/LTR/index" id="layout3" data-i18n="nav.layouts.layout3"></a></li>
										<li><a href="../../layout_4/LTR/index" id="layout4" data-i18n="nav.layouts.layout4"></a></li>
										<li><a href="index" id="layout5" data-i18n="nav.layouts.layout5;[append]nav.layouts.current"></a></li>
										<li class="disabled"><a href="../../layout_6/LTR/index" id="layout6" data-i18n="nav.layouts.layout6;[append]nav.layouts.next"></a></li>
									</ul>
								</li>
								<li>
									<a href="#" data-i18n="nav.colors.main" data-i18n-target="span"><i class="icon-droplet2"></i> <span></span></a>
									<ul>
										<li><a href="colors_primary" data-i18n="nav.colors.primary"></a></li>
										<li><a href="colors_danger" data-i18n="nav.colors.danger"></a></li>
										<li><a href="colors_success" data-i18n="nav.colors.success"></a></li>
										<li><a href="colors_warning" data-i18n="nav.colors.warning"></a></li>
										<li><a href="colors_info" data-i18n="nav.colors.info"></a></li>
										<li class="navigation-divider"></li>
										<li><a href="colors_pink" data-i18n="nav.colors.pink"></a></li>
										<li><a href="colors_violet" data-i18n="nav.colors.violet"></a></li>
										<li><a href="colors_purple" data-i18n="nav.colors.purple"></a></li>
										<li><a href="colors_indigo" data-i18n="nav.colors.indigo"></a></li>
										<li><a href="colors_blue" data-i18n="nav.colors.blue"></a></li>
										<li><a href="colors_teal" data-i18n="nav.colors.teal"></a></li>
										<li><a href="colors_green" data-i18n="nav.colors.green"></a></li>
										<li><a href="colors_orange" data-i18n="nav.colors.orange"></a></li>
										<li><a href="colors_brown" data-i18n="nav.colors.brown"></a></li>
										<li><a href="colors_grey" data-i18n="nav.colors.grey"></a></li>
										<li><a href="colors_slate" data-i18n="nav.colors.slate"></a></li>
									</ul>
								</li>
								<li>
									<a href="#" data-i18n="nav.starter.main" data-i18n-target="span"><i class="icon-stack"></i> <span></span></a>
									<ul>
										<li><a href="starters/horizontal_nav" data-i18n="nav.starter.hnav"></a></li>
										<li><a href="starters/1_col" data-i18n="nav.starter.1col"></a></li>
										<li><a href="starters/2_col" data-i18n="nav.starter.2col"></a></li>
										<li>
											<a href="#" data-i18n="nav.starter.3col.main"></a>
											<ul>
												<li><a href="starters/3_col_dual" data-i18n="nav.starter.3col.dual"></a></li>
												<li><a href="starters/3_col_double" data-i18n="nav.starter.3col.double"></a></li>
											</ul>
										</li>
										<li><a href="starters/4_col" data-i18n="nav.starter.4col"></a></li>
										<li>
											<a href="#" data-i18n="nav.starter.detached.main"></a>
											<ul>
												<li><a href="starters/detached_left" data-i18n="nav.starter.detached.left"></a></li>
												<li><a href="starters/detached_right" data-i18n="nav.starter.detached.right"></a></li>
												<li><a href="starters/detached_sticky" data-i18n="nav.starter.detached.sticky"></a></li>
											</ul>
										</li>
										<li><a href="starters/layout_boxed" data-i18n="nav.starter.boxed"></a></li>
										<li class="navigation-divider"></li>
										<li><a href="starters/layout_navbar_fixed_main" data-i18n="nav.starter.fixed_main"></a></li>
										<li><a href="starters/layout_navbar_fixed_secondary" data-i18n="nav.starter.fixed_secondary"></a></li>
										<li><a href="starters/layout_navbar_fixed_both" data-i18n="nav.starter.fixed_both"></a></li>
										<li><a href="starters/layout_fixed" data-i18n="nav.starter.fixed_layout"></a></li>
									</ul>
								</li>
								<li>
									<a href="changelog" data-i18n="[html]nav.changelog.main" data-i18n-target="span">
										<i class="icon-list-unordered"></i>
										<span></span>
									</a>
								</li>
								<li>
									<a href="../../RTL/default/index" data-i18n="nav.rtl.main" data-i18n-target="span">
										<i class="icon-width"></i>
										<span></span>
									</a>
								</li>
								<!-- /main -->

								<!-- Forms -->
								<li class="navigation-header" data-i18n="nav.category.form" data-i18n-target="span">
									<span></span>
									<i class="icon-menu" data-i18n="[title]nav.category.form"></i>
								</li>
								<li>
									<a href="#" data-i18n="nav.form.main" data-i18n-target="span"><i class="icon-pencil3"></i> <span></span></a>
									<ul>
										<li><a href="form_inputs_basic" data-i18n="nav.form.basic"></a></li>
										<li><a href="form_checkboxes_radios" data-i18n="nav.form.checkers"></a></li>
										<li><a href="form_input_groups" data-i18n="nav.form.groups"></a></li>
										<li><a href="form_controls_extended" data-i18n="nav.form.extended"></a></li>
										<li><a href="form_floating_labels" data-i18n="nav.form.labels"></a></li>
										<li>
											<a href="#" data-i18n="nav.form.selects.main"></a>
											<ul>
												<li><a href="form_select2" data-i18n="nav.form.selects.select2"></a></li>
												<li><a href="form_multiselect" data-i18n="nav.form.selects.multi"></a></li>
												<li><a href="form_select_box_it" data-i18n="nav.form.selects.selectbox"></a></li>
												<li><a href="form_bootstrap_select" data-i18n="nav.form.selects.bootstrap"></a></li>
											</ul>
										</li>
										<li><a href="form_tag_inputs" data-i18n="nav.form.tags"></a></li>
										<li><a href="form_dual_listboxes" data-i18n="nav.form.listboxes"></a></li>
										<li><a href="form_editable" data-i18n="nav.form.editable"></a></li>
										<li><a href="form_validation" data-i18n="nav.form.validation"></a></li>
										<li><a href="form_inputs_grid" data-i18n="nav.form.grid"></a></li>
									</ul>
								</li>
								<li>
									<a href="#" data-i18n="nav.alpaca.main" data-i18n-target="span"><i class="icon-file-css"></i> <span></span></a>
									<ul>
										<li><a href="alpaca_basic" data-i18n="nav.alpaca.basic"></a></li>
										<li><a href="alpaca_advanced" data-i18n="nav.alpaca.advanced"></a></li>
										<li><a href="alpaca_controls" data-i18n="nav.alpaca.controls"></a></li>
									</ul>
								</li>
								<li>
									<a href="#" data-i18n="nav.wizard.main" data-i18n-target="span"><i class="icon-footprint"></i> <span></span></a>
									<ul>
										<li><a href="wizard_steps" data-i18n="nav.wizard.steps"></a></li>
										<li><a href="wizard_form" data-i18n="nav.wizard.toform"></a></li>
										<li><a href="wizard_stepy" data-i18n="nav.wizard.stepy"></a></li>
									</ul>
								</li>
								<li>
									<a href="#" data-i18n="nav.editor.main" data-i18n-target="span"><i class="icon-spell-check"></i> <span></span></a>
									<ul>
										<li><a href="editor_summernote" data-i18n="nav.editor.summernote"></a></li>
										<li><a href="editor_ckeditor" data-i18n="nav.editor.ckeditor"></a></li>
										<li><a href="editor_wysihtml5" data-i18n="nav.editor.wysihtml5"></a></li>
										<li><a href="editor_code" data-i18n="nav.editor.code"></a></li>
									</ul>
								</li>
								<li>
									<a href="#" data-i18n="nav.picker.main" data-i18n-target="span"><i class="icon-select2"></i> <span></span></a>
									<ul>
										<li><a href="picker_date" data-i18n="nav.picker.datetime"></a></li>
										<li><a href="picker_color" data-i18n="nav.picker.color"></a></li>
										<li><a href="picker_location" data-i18n="nav.picker.location"></a></li>
									</ul>
								</li>
								<li>
									<a href="#" data-i18n="nav.form_layout.main" data-i18n-target="span"><i class="icon-insert-template"></i> <span></span></a>
									<ul>
										<li><a href="form_layout_vertical" data-i18n="nav.form_layout.vertical"></a></li>
										<li><a href="form_layout_horizontal" data-i18n="nav.form_layout.horizontal"></a></li>
									</ul>
								</li>
								<!-- /forms -->

								<!-- Appearance -->
								<li class="navigation-header" data-i18n="nav.category.appearance" data-i18n-target="span">
									<span></span>
									<i class="icon-menu" data-i18n="[title]nav.category.appearance"></i>
								</li>
								<li>
									<a href="#" data-i18n="nav.component.main" data-i18n-target="span"><i class="icon-grid"></i> <span></span></a>
									<ul>
										<li><a href="components_modals" data-i18n="nav.component.modals"></a></li>
										<li><a href="components_dropdowns" data-i18n="nav.component.dropdowns"></a></li>
										<li><a href="components_tabs" data-i18n="nav.component.tabs"></a></li>
										<li><a href="components_pills" data-i18n="nav.component.pills"></a></li>
										<li><a href="components_navs" data-i18n="nav.component.navs"></a></li>
										<li><a href="components_buttons" data-i18n="nav.component.buttons"></a></li>
										<li><a href="components_notifications_pnotify" data-i18n="nav.component.pnotify"></a></li>
										<li><a href="components_notifications_others" data-i18n="nav.component.notices"></a></li>
										<li><a href="components_popups" data-i18n="nav.component.popups"></a></li>
										<li><a href="components_alerts" data-i18n="nav.component.alerts"></a></li>
										<li><a href="components_pagination" data-i18n="nav.component.pagination"></a></li>
										<li><a href="components_labels" data-i18n="nav.component.labels"></a></li>
										<li><a href="components_loaders" data-i18n="nav.component.bars"></a></li>
										<li><a href="components_thumbnails" data-i18n="nav.component.thumbs"></a></li>
										<li><a href="components_page_header" data-i18n="nav.component.header"></a></li>
										<li><a href="components_breadcrumbs" data-i18n="nav.component.breadcrumbs"></a></li>
										<li><a href="components_media" data-i18n="nav.component.media"></a></li>
										<li><a href="components_affix" data-i18n="nav.component.affix"></a></li>
									</ul>
								</li>
								<li>
									<a href="#" data-i18n="nav.appearance.main" data-i18n-target="span"><i class="icon-puzzle2"></i> <span></span></a>
									<ul>
										<li><a href="appearance_content_panels" data-i18n="nav.appearance.panels"></a></li>
										<li><a href="appearance_panel_heading" data-i18n="nav.appearance.heading"></a></li>
										<li><a href="appearance_panel_footer" data-i18n="nav.appearance.footer"></a></li>
										<li><a href="appearance_draggable_panels" data-i18n="nav.appearance.draggable"></a></li>
										<li><a href="appearance_text_styling" data-i18n="nav.appearance.text"></a></li>
										<li><a href="appearance_typography" data-i18n="nav.appearance.typo"></a></li>
										<li><a href="appearance_helpers" data-i18n="nav.appearance.helpers"></a></li>
										<li><a href="appearance_syntax_highlighter" data-i18n="nav.appearance.syntax"></a></li>
										<li><a href="appearance_content_grid" data-i18n="nav.appearance.grid"></a></li>
									</ul>
								</li>
								<li>
									<a href="#" data-i18n="nav.extra.main" data-i18n-target="span"><i class="icon-gift"></i> <span></span></a>
									<ul>
										<li><a href="extra_sliders_noui" data-i18n="nav.extra.noui"></a></li>
										<li><a href="extra_sliders_ion" data-i18n="nav.extra.ion"></a></li>
										<li><a href="extra_session_timeout" data-i18n="nav.extra.session"></a></li>
										<li><a href="extra_idle_timeout" data-i18n="nav.extra.idle"></a></li>
										<li><a href="extra_trees" data-i18n="nav.extra.tree"></a></li>
										<li><a href="extra_context_menu" data-i18n="nav.extra.context"></a></li>
										<li><a href="extra_fab" data-i18n="nav.extra.fab"></a></li>
									</ul>
								</li>
								<li>
									<a href="#" data-i18n="nav.animations.main" data-i18n-target="span"><i class="icon-spinner2 spinner"></i> <span></span></a>
									<ul>
										<li><a href="animations_css3" data-i18n="nav.animations.css3"></a></li>
										<li>
											<a href="#" data-i18n="nav.animations.velocity.main"></a>
											<ul>
												<li><a href="animations_velocity_basic" data-i18n="nav.animations.velocity.basic"></a></li>
												<li><a href="animations_velocity_ui" data-i18n="nav.animations.velocity.ui"></a></li>
												<li><a href="animations_velocity_examples" data-i18n="nav.animations.velocity.advanced"></a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li>
									<a href="#" data-i18n="nav.icons.main" data-i18n-target="span"><i class="icon-thumbs-up2"></i> <span></span></a>
									<ul>
										<li><a href="icons_glyphicons" data-i18n="nav.icons.glyphicons"></a></li>
										<li><a href="icons_icomoon" data-i18n="nav.icons.icomoon"></a></li>
										<li><a href="icons_fontawesome" data-i18n="nav.icons.fontawesome"></a></li>
									</ul>
								</li>
								<!-- /appearance -->

								<!-- Layout -->
								<li class="navigation-header" data-i18n="nav.category.layout" data-i18n-target="span">
									<span></span>
									<i class="icon-menu" data-i18n="[title]nav.category.layout"></i>
								</li>
								<li>
									<a href="#" data-i18n="nav.sidebar.main" data-i18n-target="span"><i class="icon-indent-decrease2"></i> <span></span></a>
									<ul>
										<li><a href="sidebar_default_collapse" data-i18n="nav.sidebar.default.collapse"></a></li>
										<li><a href="sidebar_default_hide" data-i18n="nav.sidebar.default.hide"></a></li>
										<li><a href="sidebar_mini_collapse" data-i18n="nav.sidebar.mini.collapse"></a></li>
										<li><a href="sidebar_mini_hide" data-i18n="nav.sidebar.mini.hide"></a></li>
										<li>
											<a href="#" data-i18n="nav.sidebar.dual.main"></a>
											<ul>
												<li><a href="sidebar_dual" data-i18n="nav.sidebar.dual.base"></a></li>
												<li><a href="sidebar_dual_double_collapse" data-i18n="nav.sidebar.dual.dcollapse"></a></li>
												<li><a href="sidebar_dual_double_hide" data-i18n="nav.sidebar.dual.dhide"></a></li>
												<li><a href="sidebar_dual_swap" data-i18n="nav.sidebar.dual.swap"></a></li>
											</ul>
										</li>
										<li>
											<a href="#" data-i18n="nav.sidebar.double.main"></a>
											<ul>
												<li><a href="sidebar_double_collapse" data-i18n="nav.sidebar.double.collapse"></a></li>
												<li><a href="sidebar_double_hide" data-i18n="nav.sidebar.double.hide"></a></li>
												<li><a href="sidebar_double_fix_default" data-i18n="nav.sidebar.double.dfix"></a></li>
												<li><a href="sidebar_double_fix_mini" data-i18n="nav.sidebar.double.mfix"></a></li>
												<li><a href="sidebar_double_visible" data-i18n="nav.sidebar.double.ovisible"></a></li>
											</ul>
										</li>
										<li>
											<a href="#" data-i18n="nav.sidebar.detached.main"></a>
											<ul>
												<li><a href="sidebar_detached_left" data-i18n="nav.sidebar.detached.left"></a></li>
												<li><a href="sidebar_detached_right" data-i18n="nav.sidebar.detached.right"></a></li>
												<li><a href="sidebar_detached_sticky_custom" data-i18n="nav.sidebar.detached.custom"></a></li>
												<li><a href="sidebar_detached_sticky_native" data-i18n="nav.sidebar.detached.native"></a></li>
												<li><a href="sidebar_detached_separate" data-i18n="nav.sidebar.detached.separate"></a></li>
											</ul>
										</li>
										<li><a href="sidebar_hidden" data-i18n="nav.sidebar.hidden"></a></li>
										<li><a href="sidebar_light" data-i18n="nav.sidebar.light"></a></li>
										<li><a href="sidebar_components" data-i18n="nav.sidebar.components"></a></li>
									</ul>
								</li>
								<li>
									<a href="#" data-i18n="nav.vnav.main" data-i18n-target="span"><i class="icon-sort"></i> <span></span></a>
									<ul>
										<li><a href="navigation_vertical_collapsible" data-i18n="nav.vnav.collapse"></a></li>
										<li><a href="navigation_vertical_accordion" data-i18n="nav.vnav.accordion"></a></li>
										<li><a href="navigation_vertical_sizing" data-i18n="nav.vnav.sizing"></a></li>
										<li><a href="navigation_vertical_bordered" data-i18n="nav.vnav.bordered"></a></li>
										<li><a href="navigation_vertical_right_icons" data-i18n="nav.vnav.ricons"></a></li>
										<li><a href="navigation_vertical_labels_badges" data-i18n="nav.vnav.labels"></a></li>
										<li><a href="navigation_vertical_disabled" data-i18n="nav.vnav.disabled"></a></li>
									</ul>
								</li>
								<li>
									<a href="#" data-i18n="nav.hnav.main" data-i18n-target="span"><i class="icon-transmission"></i> <span></span></a>
									<ul>
										<li><a href="navigation_horizontal_click" data-i18n="nav.hnav.click"></a></li>
										<li><a href="navigation_horizontal_hover" data-i18n="nav.hnav.hover"></a></li>
										<li><a href="navigation_horizontal_elements" data-i18n="nav.hnav.custom"></a></li>
										<li><a href="navigation_horizontal_tabs" data-i18n="nav.hnav.tabbed"></a></li>
										<li><a href="navigation_horizontal_disabled" data-i18n="nav.hnav.disabled"></a></li>
										<li><a href="navigation_horizontal_mega" data-i18n="nav.hnav.mega"></a></li>
									</ul>
								</li>
								<li>
									<a href="#" data-i18n="nav.navbar.main" data-i18n-target="span"><i class="icon-menu3"></i> <span></span></a>
									<ul>
										<li><a href="navbar_single" data-i18n="nav.navbar.single"></a></li>
										<li>
											<a href="#" data-i18n="nav.navbar.multiple.main"></a>
											<ul>
												<li><a href="navbar_multiple_navbar_navbar" data-i18n="nav.navbar.multiple.nn"></a></li>
												<li><a href="navbar_multiple_navbar_header" data-i18n="nav.navbar.multiple.nh"></a></li>
												<li><a href="navbar_multiple_header_navbar" data-i18n="nav.navbar.multiple.hn"></a></li>
												<li><a href="navbar_multiple_top_bottom" data-i18n="nav.navbar.multiple.tb"></a></li>
											</ul>
										</li>
										<li><a href="navbar_colors" data-i18n="nav.navbar.colors"></a></li>
										<li><a href="navbar_sizes" data-i18n="nav.navbar.sizing"></a></li>
										<li><a href="navbar_hideable" data-i18n="nav.navbar.hideable"></a></li>
										<li><a href="navbar_components" data-i18n="nav.navbar.components"></a></li>
									</ul>
								</li>
								<li>
									<a href="#" data-i18n="nav.levels.main" data-i18n-target="span"><i class="icon-tree5"></i> <span></span></a>
									<ul>
										<li><a href="#" data-i18n="[html]nav.levels.ie"></a></li>
										<li>
											<a href="#" data-i18n="[html]nav.levels.firefox"></a>
											<ul>
												<li><a href="#" data-i18n="[html]nav.levels.android"></a></li>
												<li>
													<a href="#" data-i18n="[html]nav.levels.apple"></a>
													<ul>
														<li><a href="#" data-i18n="[html]nav.levels"></a></li>
														<li><a href="#" data-i18n="[html]nav.levels.css"></a></li>
													</ul>
												</li>
												<li><a href="#" data-i18n="[html]nav.levels.win"></a></li>
											</ul>
										</li>
										<li><a href="#" data-i18n="[html]nav.levels.chrome"></a></li>
									</ul>
								</li>
								<!-- /layout -->

								<!-- Data visualization -->
								<li class="navigation-header" data-i18n="nav.category.datavis" data-i18n-target="span">
									<span></span>
									<i class="icon-menu" data-i18n="[title]nav.category.datavis"></i>
								</li>
								<li>
									<a href="#" data-i18n="nav.echarts.main" data-i18n-target="span"><i class="icon-graph"></i> <span></span></a>
									<ul>
										<li><a href="echarts_lines_areas" data-i18n="nav.echarts.line"></a></li>
										<li><a href="echarts_columns_waterfalls" data-i18n="nav.echarts.column"></a></li>
										<li><a href="echarts_bars_tornados" data-i18n="nav.echarts.bar"></a></li>
										<li><a href="echarts_scatter" data-i18n="nav.echarts.scatter"></a></li>
										<li><a href="echarts_pies_donuts" data-i18n="nav.echarts.pie"></a></li>
										<li><a href="echarts_funnels_chords" data-i18n="nav.echarts.funnel"></a></li>
										<li><a href="echarts_candlesticks_others" data-i18n="nav.echarts.other"></a></li>
										<li><a href="echarts_combinations" data-i18n="nav.echarts.combo"></a></li>
									</ul>
								</li>
								<li>
									<a href="#" data-i18n="nav.d3.main" data-i18n-target="span"><i class="icon-statistics"></i> <span></span></a>
									<ul>
										<li><a href="d3_lines_basic" data-i18n="nav.d3.line.basic"></a></li>
										<li><a href="d3_lines_advanced" data-i18n="nav.d3.line.advanced"></a></li>
										<li><a href="d3_bars_basic" data-i18n="nav.d3.bar.basic"></a></li>
										<li><a href="d3_bars_advanced" data-i18n="nav.d3.bar.advanced"></a></li>
										<li><a href="d3_pies" data-i18n="nav.d3.pie"></a></li>
										<li><a href="d3_circle_diagrams" data-i18n="nav.d3.circle"></a></li>
										<li><a href="d3_tree" data-i18n="nav.d3.tree"></a></li>
										<li><a href="d3_other" data-i18n="nav.d3.other"></a></li>
									</ul>
								</li>
								<li>
									<a href="#" data-i18n="nav.dimple.main" data-i18n-target="span"><i class="icon-stats-dots"></i> <span></span></a>
									<ul>
										<li>
											<a href="#" data-i18n="nav.dimple.line.main"></a>
											<ul>
												<li><a href="dimple_lines_horizontal" data-i18n="nav.dimple.line.hor"></a></li>
												<li><a href="dimple_lines_vertical" data-i18n="nav.dimple.line.ver"></a></li>
											</ul>
										</li>
										<li>
											<a href="#" data-i18n="nav.dimple.bar.main"></a>
											<ul>
												<li><a href="dimple_bars_horizontal" data-i18n="nav.dimple.bar.hor"></a></li>
												<li><a href="dimple_bars_vertical" data-i18n="nav.dimple.bar.ver"></a></li>
											</ul>
										</li>
										<li>
											<a href="#" data-i18n="nav.dimple.area.main"></a>
											<ul>
												<li><a href="dimple_area_horizontal" data-i18n="nav.dimple.area.hor"></a></li>
												<li><a href="dimple_area_vertical" data-i18n="nav.dimple.area.ver"></a></li>
											</ul>
										</li>
										<li>
											<a href="#" data-i18n="nav.dimple.step.main"></a>
											<ul>
												<li><a href="dimple_step_horizontal" data-i18n="nav.dimple.step.hor"></a></li>
												<li><a href="dimple_step_vertical" data-i18n="nav.dimple.step.ver"></a></li>
											</ul>
										</li>
										<li><a href="dimple_pies" data-i18n="nav.dimple.pie"></a></li>
										<li><a href="dimple_rings" data-i18n="nav.dimple.ring"></a></li>
										<li><a href="dimple_scatter" data-i18n="nav.dimple.scatter"></a></li>
										<li><a href="dimple_bubble" data-i18n="nav.dimple.bubble"></a></li>
									</ul>
								</li>
								<li>
									<a href="#" data-i18n="nav.c3.main" data-i18n-target="span"><i class="icon-stats-bars"></i> <span></span></a>
									<ul>
										<li><a href="c3_lines_areas" data-i18n="nav.c3.line"></a></li>
										<li><a href="c3_bars_pies" data-i18n="nav.c3.bar"></a></li>
										<li><a href="c3_advanced" data-i18n="nav.c3.advanced"></a></li>
										<li><a href="c3_axis" data-i18n="nav.c3.axis"></a></li>
										<li><a href="c3_grid" data-i18n="nav.c3.grid"></a></li>
									</ul>
								</li>
								<li>
									<a href="#" data-i18n="nav.google.main" data-i18n-target="span"><i class="icon-google"></i> <span></span></a>
									<ul>
										<li><a href="google_lines" data-i18n="nav.google.line"></a></li>
										<li><a href="google_bars" data-i18n="nav.google.bar"></a></li>
										<li><a href="google_pies" data-i18n="nav.google.pie"></a></li>
										<li><a href="google_scatter_bubble" data-i18n="nav.google.bubble"></a></li>
										<li><a href="google_other" data-i18n="nav.google.other"></a></li>
									</ul>
								</li>
								<li>
									<a href="#" data-i18n="nav.maps.main" data-i18n-target="span"><i class="icon-map5"></i> <span></span></a>
									<ul>
										<li>
											<a href="#" data-i18n="nav.maps.gmaps.main"></a>
											<ul>
												<li><a href="maps_google_basic" data-i18n="nav.maps.gmaps.basic"></a></li>
												<li><a href="maps_google_controls" data-i18n="nav.maps.gmaps.controls"></a></li>
												<li><a href="maps_google_markers" data-i18n="nav.maps.gmaps.markers"></a></li>
												<li><a href="maps_google_drawings" data-i18n="nav.maps.gmaps.drawings"></a></li>
												<li><a href="maps_google_layers" data-i18n="nav.maps.gmaps.layers"></a></li>
											</ul>
										</li>
										<li><a href="maps_vector" data-i18n="nav.maps.vmaps"></a></li>
									</ul>
								</li>
								<!-- /data visualization -->

								<!-- Extensions -->
								<li class="navigation-header" data-i18n="nav.category.extensions" data-i18n-target="span">
									<span></span>
									<i class="icon-menu" data-i18n="[title]nav.category.extensions"></i>
								</li>
								<li>
									<a href="#" data-i18n="nav.ext.main" data-i18n-target="span"><i class="icon-puzzle4"></i> <span></span></a>
									<ul>
										<li><a href="extension_image_cropper" data-i18n="nav.ext.cropper"></a></li>
										<li><a href="extension_blockui" data-i18n="nav.ext.blockui"></a></li>
										<li><a href="extension_dnd" data-i18n="nav.ext.dnd"></a></li>
									</ul>
								</li>
								<li>
									<a href="#" data-i18n="nav.jui.main" data-i18n-target="span"><i class="icon-popout"></i> <span></span></a>
									<ul>
										<li><a href="jqueryui_interactions" data-i18n="nav.jui.interactions"></a></li>
										<li><a href="jqueryui_forms" data-i18n="nav.jui.forms"></a></li>
										<li><a href="jqueryui_components" data-i18n="nav.jui.components"></a></li>
										<li><a href="jqueryui_sliders" data-i18n="nav.jui.sliders"></a></li>
										<li><a href="jqueryui_navigation" data-i18n="nav.jui.nav"></a></li>
									</ul>
								</li>
								<li>
									<a href="#" data-i18n="nav.uploaders.main" data-i18n-target="span"><i class="icon-upload"></i> <span></span></a>
									<ul>
										<li><a href="uploader_plupload" data-i18n="nav.uploaders.plupload"></a></li>
										<li><a href="uploader_bootstrap" data-i18n="nav.uploaders.bs"></a></li>
										<li><a href="uploader_dropzone" data-i18n="nav.uploaders.dropzone"></a></li>
									</ul>
								</li>
								<li>
									<a href="#" data-i18n="nav.fc.main" data-i18n-target="span"><i class="icon-calendar3"></i> <span></span></a>
									<ul>
										<li><a href="extension_fullcalendar_views" data-i18n="nav.fc.views"></a></li>
										<li><a href="extension_fullcalendar_styling" data-i18n="nav.fc.styling"></a></li>
										<li><a href="extension_fullcalendar_formats" data-i18n="nav.fc.lang"></a></li>
										<li><a href="extension_fullcalendar_advanced" data-i18n="nav.fc.advanced"></a></li>
									</ul>
								</li>
								<li>
									<a href="#" data-i18n="nav.int.main" data-i18n-target="span"><i class="icon-sphere"></i> <span></span></a>
									<ul>
										<li><a href="internationalization_switch_direct" data-i18n="nav.int.direct"></a></li>
										<li class="active"><a href="internationalization_switch_query" data-i18n="nav.int.qs"></a></li>
										<li><a href="internationalization_on_init" data-i18n="nav.int.oninit"></a></li>
										<li><a href="internationalization_after_init" data-i18n="nav.int.afterinit"></a></li>
										<li><a href="internationalization_fallback" data-i18n="nav.int.fallback"></a></li>
										<li><a href="internationalization_callbacks" data-i18n="nav.int.callback"></a></li>
									</ul>
								</li>
								<!-- /extensions -->

								<!-- Tables -->
								<li class="navigation-header" data-i18n="nav.category.tables" data-i18n-target="span">
									<span></span>
									<i class="icon-menu" data-i18n="[title]nav.category.tables"></i>
								</li>
								<li>
									<a href="#" data-i18n="nav.btable.main" data-i18n-target="span"><i class="icon-table2"></i> <span></span></a>
									<ul>
										<li><a href="table_basic" data-i18n="nav.btable.basic"></a></li>
										<li><a href="table_sizing" data-i18n="nav.btable.sizing"></a></li>
										<li><a href="table_borders" data-i18n="nav.btable.borders"></a></li>
										<li><a href="table_styling" data-i18n="nav.btable.styling"></a></li>
										<li><a href="table_elements" data-i18n="nav.btable.elements"></a></li>
									</ul>
								</li>
								<li>
									<a href="#" data-i18n="nav.dtable.main" data-i18n-target="span"><i class="icon-grid7"></i> <span></span></a>
									<ul>
										<li><a href="datatable_basic" data-i18n="nav.dtable.basic"></a></li>
										<li><a href="datatable_styling" data-i18n="nav.dtable.styling"></a></li>
										<li><a href="datatable_advanced" data-i18n="nav.dtable.advanced"></a></li>
										<li><a href="datatable_sorting" data-i18n="nav.dtable.sorting"></a></li>
										<li><a href="datatable_api" data-i18n="nav.dtable.api"></a></li>
										<li><a href="datatable_data_sources" data-i18n="nav.dtable.sources"></a></li>
									</ul>
								</li>
								<li>
									<a href="#" data-i18n="nav.dtext.main" data-i18n-target="span"><i class="icon-alignment-unalign"></i> <span></span></a>
									<ul>
										<li><a href="datatable_extension_reorder" data-i18n="nav.dtext.reorder"></a></li>
										<li><a href="datatable_extension_row_reorder" data-i18n="nav.dtext.rowreorder"></a></li>
										<li><a href="datatable_extension_fixed_columns" data-i18n="nav.dtext.fixed"></a></li>
										<li><a href="datatable_extension_fixed_header" data-i18n="nav.dtext.fixedheader"></a></li>
										<li><a href="datatable_extension_autofill" data-i18n="nav.dtext.autofill"></a></li>
										<li><a href="datatable_extension_key_table" data-i18n="nav.dtext.key"></a></li>
										<li><a href="datatable_extension_scroller" data-i18n="nav.dtext.scroller"></a></li>
										<li><a href="datatable_extension_select" data-i18n="nav.dtext.select"></a></li>
										<li>
											<a href="#" data-i18n="nav.dtext.buttons.main"></a>
											<ul>
												<li><a href="datatable_extension_buttons_init" data-i18n="nav.dtext.buttons.init"></a></li>
												<li><a href="datatable_extension_buttons_flash" data-i18n="nav.dtext.buttons.flash"></a></li>
												<li><a href="datatable_extension_buttons_print" data-i18n="nav.dtext.buttons.print"></a></li>
												<li><a href="datatable_extension_buttons_html5" data-i18n="nav.dtext.buttons5"></a></li>
											</ul>
										</li>
										<li><a href="datatable_extension_colvis" data-i18n="nav.dtext.visibility"></a></li>
									</ul>
								</li>
								<li>
									<a href="#" data-i18n="nav.hot.main" data-i18n-target="span"><i class="icon-file-spreadsheet"></i> <span></span></a>
									<ul>
										<li><a href="handsontable_basic" data-i18n="nav.hot.basic"></a></li>
										<li><a href="handsontable_advanced" data-i18n="nav.hot.advanced"></a></li>
										<li><a href="handsontable_cols" data-i18n="nav.hot.cols"></a></li>
										<li><a href="handsontable_cells" data-i18n="nav.hot.cells"></a></li>
										<li><a href="handsontable_types" data-i18n="nav.hot.types"></a></li>
										<li><a href="handsontable_custom_checks" data-i18n="nav.hot.checks"></a></li>
										<li><a href="handsontable_ac_password" data-i18n="nav.hot.ac"></a></li>
										<li><a href="handsontable_search" data-i18n="nav.hot.search"></a></li>
										<li><a href="handsontable_context" data-i18n="nav.hot.context"></a></li>
									</ul>
								</li>
								<li>
									<a href="#" data-i18n="nav.tresp.main" data-i18n-target="span"><i class="icon-versions"></i> <span></span></a>
									<ul>
										<li><a href="table_responsive" data-i18n="nav.tresp.basic"></a></li>
										<li><a href="datatable_responsive" data-i18n="nav.tresp.data"></a></li>
									</ul>
								</li>
								<!-- /tables -->

								<!-- Page kits -->
								<li class="navigation-header" data-i18n="nav.category.pages" data-i18n-target="span">
									<span></span>
									<i class="icon-menu" data-i18n="[title]nav.category.pages"></i>
								</li>
								<li>
									<a href="#" data-i18n="nav.tasks.main" data-i18n-target="span"><i class="icon-task"></i> <span></span></a>
									<ul>
										<li><a href="task_manager_grid" data-i18n="nav.tasks.grid"></a></li>
										<li><a href="task_manager_list" data-i18n="nav.tasks.list"></a></li>
										<li><a href="task_manager_detailed" data-i18n="nav.tasks.detailed"></a></li>
									</ul>
								</li>
								<li>
									<a href="#" data-i18n="nav.invoice.main" data-i18n-target="span"><i class="icon-cash3"></i> <span></span></a>
									<ul>
										<li><a href="invoice_template" data-i18n="nav.invoice.template"></a></li>
										<li><a href="invoice_grid" data-i18n="nav.invoice.grid"></a></li>
										<li><a href="invoice_archive" data-i18n="nav.invoice.archive"></a></li>
									</ul>
								</li>
								<li>
									<a href="#" data-i18n="nav.user.main" data-i18n-target="span"><i class="icon-people"></i> <span></span></a>
									<ul>
										<li><a href="user_pages_cards" data-i18n="nav.user.cards"></a></li>
										<li><a href="user_pages_list" data-i18n="nav.user.list"></a></li>
										<li><a href="user_pages_profile" data-i18n="nav.user.profile"></a></li>
										<li><a href="user_pages_profile_cover" data-i18n="nav.user.cover"></a></li>
									</ul>
								</li>
								<li>
									<a href="#" data-i18n="nav.login.main" data-i18n-target="span"><i class="icon-user-plus"></i> <span></span></a>
									<ul>
										<li><a href="login_simple" data-i18n="nav.login.simple"></a></li>
										<li><a href="login_advanced" data-i18n="nav.login.advanced"></a></li>
										<li><a href="login_registration" data-i18n="nav.login.reg"></a></li>
										<li><a href="login_registration_advanced" data-i18n="nav.login.reg_advanced"></a></li>
										<li><a href="login_unlock" data-i18n="nav.login.unlock"></a></li>
										<li><a href="login_password_recover" data-i18n="nav.login.forgot"></a></li>
										<li><a href="login_hide_navbar" data-i18n="nav.login.nonavbar"></a></li>
										<li><a href="login_transparent" data-i18n="nav.login.transparent"></a></li>
										<li><a href="login_background" data-i18n="nav.login.bg"></a></li>
										<li><a href="login_validation" data-i18n="nav.login.validation"></a></li>
										<li><a href="login_tabbed" data-i18n="nav.login.tabs"></a></li>
										<li><a href="login_modals" data-i18n="nav.login.modals"></a></li>
									</ul>
								</li>
								<li>
									<a href="#" data-i18n="nav.timeline.main" data-i18n-target="span"><i class="icon-magazine"></i> <span></span></a>
									<ul>
										<li><a href="timelines_left" data-i18n="nav.timeline.left"></a></li>
										<li><a href="timelines_right" data-i18n="nav.timeline.right"></a></li>
										<li><a href="timelines_center" data-i18n="nav.timeline.center"></a></li>
									</ul>
								</li>
								<li>
									<a href="#" data-i18n="nav.support.main" data-i18n-target="span"><i class="icon-lifebuoy"></i> <span></span></a>
									<ul>
										<li><a href="chat_layouts" data-i18n="nav.support.chat_layouts"></a></li>
										<li><a href="chat_options" data-i18n="nav.support.chat_options"></a></li>
										<li><a href="support_knowledgebase" data-i18n="nav.support.base"></a></li>
										<li><a href="support_faq" data-i18n="nav.support.faq"></a></li>
									</ul>
								</li>
								<li>
									<a href="#" data-i18n="nav.search.main" data-i18n-target="span"><i class="icon-search4"></i> <span></span></a>
									<ul>
										<li><a href="search_basic" data-i18n="nav.search.basic"></a></li>
										<li><a href="search_users" data-i18n="nav.search.user"></a></li>
										<li><a href="search_images" data-i18n="nav.search.image"></a></li>
										<li><a href="search_videos" data-i18n="nav.search.video"></a></li>
									</ul>
								</li>
								<li>
									<a href="#" data-i18n="nav.gallery.main" data-i18n-target="span"><i class="icon-images2"></i> <span></span></a>
									<ul>
										<li><a href="gallery_grid" data-i18n="nav.gallery.grid"></a></li>
										<li><a href="gallery_titles" data-i18n="nav.gallery.title"></a></li>
										<li><a href="gallery_description" data-i18n="nav.gallery.desc"></a></li>
										<li><a href="gallery_library" data-i18n="nav.gallery.library"></a></li>
									</ul>
								</li>
								<li>
									<a href="#" data-i18n="nav.error.main" data-i18n-target="span"><i class="icon-warning"></i> <span></span></a>
									<ul>
										<li><a href="error_403" data-i18n="nav.error.403"></a></li>
										<li><a href="error_404" data-i18n="nav.error.404"></a></li>
										<li><a href="error_405" data-i18n="nav.error.405"></a></li>
										<li><a href="error_500" data-i18n="nav.error.500"></a></li>
										<li><a href="error_503" data-i18n="nav.error.503"></a></li>
										<li><a href="error_offline" data-i18n="nav.error.offline"></a></li>
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
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Translation</span> - Query String</h4>
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
							<li><a href="internationalization_switch_query">Translation</a></li>
							<li class="active">Query string</li>
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

					<!-- Switch on query string change -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Query string parameter</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<p class="content-group">This example demonstrates language switching on <code>query string</code> parameter change. Every time the link is clicked, i18next loads <code>json</code> file with selected language and initialize translation on a new page load. Other languages are accessible directly via <code>?lang=en</code> querystring parameter. To change the language on click, use <code>&lt;a href="?lang=en">EN&lt;/a></code> markup. This language selection method also supports user navigator language detection and cookies support.</p>

							<p class="text-semibold">Switch on parameter change:</p>

							<div class="navbar navbar-inverse bg-teal-400 navbar-component" style="position: relative;">
								<div class="navbar-header">
									<a class="navbar-brand" href="index"><img src="assets/images/logo_light.png" alt=""></a>

									<ul class="nav navbar-nav pull-right visible-xs-block">
										<li><a data-toggle="collapse" data-target="#navbar-demo-mobile"><i class="icon-grid3"></i></a></li>
									</ul>
								</div>

								<div class="navbar-collapse collapse" id="navbar-demo-mobile">
									<ul class="nav navbar-nav">
										<li class="dropdown language-switch">
											<a class="dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a href="?lang=en" class="english"><img src="assets/images/flags/gb.png" alt=""> English</a></li>
												<li><a href="?lang=ru" class="russian"><img src="assets/images/flags/ru.png" alt=""> Русский</a></li>
												<li><a href="?lang=ua" class="ukrainian"><img src="assets/images/flags/ua.png" alt=""> Українська</a></li>
											</ul>
										</li>
									</ul>

									<ul class="nav navbar-nav navbar-right language-switch">
										<li><a href="?lang=en" class="english"><img src="assets/images/flags/gb.png" class="position-left" alt=""> EN &rarr;</a></li>
										<li><a href="?lang=ru" class="russian"><img src="assets/images/flags/ru.png" class="position-left" alt=""> RU &rarr;</a></li>
										<li><a  href="?lang=ua" class="ukrainian"><img src="assets/images/flags/ua.png" class="position-left" alt=""> UA &rarr;</a></li>
									</ul>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<p class="text-semibold">Example markup:</p>
									<pre class="content-group"><code class="language-markup">&lt;!-- Basic markup -->
&lt;ul class="dropdown-menu">
	&lt;li>
		&lt;a href="?lang=en" class="english">
			&lt;img src="assets/images/flags/gb.png" alt=""> English
		&lt;/a>
	&lt;/li>
	&lt;li>
		&lt;a href="?lang=ua" class="ukrainian">
			&lt;img src="assets/images/flags/ua.png" alt=""> Ukrainian
		&lt;/a>
	&lt;/li>
	...
&lt;/ul>
</code></pre>
								</div>

								<div class="col-md-6">
									<p class="text-semibold">JS code example:</p>
									<pre class="content-group"><code class="language-javascript">/* Set init options */
i18n.init({
	resGetPath: 'assets/locales/__lng__.json',
	load: 'unspecific',
	detectLngQS: 'lang',
	debug: true,
	useCookie: true,
	fallbackLng : false
}, function () {

	//Run translation
	$('body').i18n();

});
</code></pre>
								</div>
							</div>
						</div>
					</div>
					<!-- /switch on query string change -->


					<!-- i18next overview -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">i18next library</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<h6 class="text-semibold">Overview</h6>
							<p class="content-group"><code>Internationalization</code> and <code>localization</code> are means of adapting web applications to different languages, regional differences and technical requirements of a target market. <code>Internationalization</code> is the process of designing an application so that it can potentially be adapted to various languages and regions. <code>Localization</code> is the process of adapting internationalized application for a specific region or language by adding locale-specific components and translating text. Framework template uses <code>i18next</code> library for internationalization and localization.</p>

							<p>Main i18next benefits:</p>
							<div class="row content-group">
								<div class="col-md-4">
									<ul class="list">
										<li>Support of variables</li>
										<li>Support of nesting</li>
										<li>Support of context</li>
										<li>Support of multiple plural forms</li>
									</ul>
								</div>

								<div class="col-md-4">
									<ul class="list">
										<li>Gettext support</li>
										<li>Sprintf support</li>
										<li>Detect language</li>
										<li>Graceful translation lookup</li>
									</ul>
								</div>

								<div class="col-md-4">
									<ul class="list">
										<li>Custom post processing</li>
										<li>Post missing resources to server</li>
										<li>Resource caching in browser</li>
										<li>Fetch resources from server</li>
									</ul>
								</div>
							</div>


							<h6 class="text-semibold">Basic usage</h6>
							<p class="content-group"><strong>i18next</strong> is a full-featured i18n javascript library for translating your web application. By default, Framework template supports language switching in 2 different ways, language detection according to the user navigator language and fallback languages. All plugin settings also support and use cookies by default. For demonstration purposes, main structure of this page was translated to <span class="text-semibold">russian</span>, <span class="text-semibold">ukrainian</span> and default <span class="text-semibold">english</span> languages. You can change current language by choosing it in the dropdown menu located in top navbar.</p>

							<p class="text-semibold">Page markup:</p>
							<pre class="content-group"><code class="language-markup">&lt;!DOCTYPE html>
&lt;html>
	&lt;head>
		&lt;script type="text/javascript" src="[PATH]/jquery.js" /> // optional
		&lt;script type="text/javascript" src="[PATH]/i18next.min.js" />
	&lt;/head>
	&lt;body>
		&lt;ul class="navigation">
			&lt;li>&lt;a href="#" data-i18n="nav.dash.main">&lt;/a>&lt;/li>
			&lt;li>&lt;a href="#" data-i18n="nav.email.main">&lt;/a>&lt;/li>
			&lt;li>&lt;a href="#" data-i18n="nav.snippets.main">&lt;/a>&lt;/li>
		&lt;/ul>
	&lt;/body>
&lt;/html></code></pre>

							
							<div class="row">
								<div class="col-md-6">
									<p class="text-semibold">Loaded resource file (assets/locales/*.json):</p>
									<pre class="content-group"><code class="language-javascript">{
	"app": {
		"name": "Framework template"
	},
	"nav": {
	    "dash": {
	        "main": "Dashboards"
	    },
	    "email": {
	        "main": "Email templates"
	    },
	    "snippets": {
	        "main": "Snippets"
	    }
	}
}</code></pre>
								</div>

								<div class="col-md-6">
									<p class="text-semibold">Javascript code:</p>
									<pre class="content-group"><code class="language-javascript">// Initialize i18next
$.i18n.init({
	resGetPath: 'assets/locales/__lng__.json',
	debug: true,
	load: 'unspecific',
	fallbackLng: false
}, function (t) {
	$('body').i18n(); // translate nav
});

// Change language on button click
$('.russian').on('click', function () {
	i18n.setLng('ru', function() {
	    $('body').i18n();
	});
})
</code></pre>
								</div>
							</div>


							<h6 class="text-semibold">Set language on init and after init</h6>
							<p class="content-group">The plugin allows you to set specified language <code>on init</code> and <code>after init</code>. If language is set on init, resources will be resolved in this order: 1) try <span class="text-semibold">languageCode</span> plus <span class="text-semibold">countryCode</span>, eg. <code>'en-US'</code>; 2) alternative look it up in <span class="text-semibold">languageCode</span> only, eg. <code>'en'</code>; 3) finally look it up in definded fallback language, default: <code>'dev'</code>. <br>If language is not set explicitly, i18next tries to detect the user language by: 1) querystring parameter <code>?setLng=en-US</code>; 2) cookie; 3) language set in navigator.</p>

							<div class="row">
								<div class="col-md-6">
									<p class="text-semibold">On init example:</p>
<pre class="content-group"><code class="language-javascript">i18n.init({ lng: 'en-US' }, function(t) {
	$('body').i18n();
});</code></pre>
								</div>

								<div class="col-md-6">
									<p class="text-semibold">After init example:</p>
<pre class="content-group"><code class="language-javascript">i18n.setLng('en-US', function(t) {
	$('body').i18n();
});</code></pre>
								</div>
							</div>
						</div>
					</div>
					<!-- /i18next overview -->


					<!-- i18next options -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Library options</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body form-horizontal">
							<div class="form-group">
								<label class="col-lg-3 control-label text-semibold">Querystring param:</label>
								<div class="col-lg-9">
									<pre><code class="language-javascript">i18n.init({
	detectLngQS: 'lang'
});</code></pre>
									<span class="help-block">The current locale to set will be looked up in the new parameter: <code>?lang=en-US</code>. Default is <code>?setLng=en-US</code>.</span>
								</div>
							</div>

							<div class="form-group">
								<label class="col-lg-3 control-label text-semibold">Cookie name:</label>
								<div class="col-lg-9">
									<pre><code class="language-javascript">i18n.init({
	cookieName: 'lang' // default 'i18next'
});</code></pre>
									<span class="help-block">The current locale to set and looked up in the given cookie parameter.</span>
								</div>
							</div>

							<div class="form-group">
								<label class="col-lg-3 control-label text-semibold">Cookie domain:</label>
								<div class="col-lg-9">
									<pre><code class="language-javascript">i18n.init({
	cookieDomain: '*.mydomain.com'
});</code></pre>
									<span class="help-block">Sets the cookie domain to given value.</span>
								</div>
							</div>

							<div class="form-group">
								<label class="col-lg-3 control-label text-semibold">Cookie usage:</label>
								<div class="col-lg-9">
									<pre><code class="language-javascript">i18n.init({
	useCookie: false
});</code></pre>
									<span class="help-block">Use this only if your sure that language will be provided by the other lookup options or set programatically.</span>
								</div>
							</div>

							<div class="form-group">
								<label class="col-lg-3 control-label text-semibold">Preload additional languages on init:</label>
								<div class="col-lg-9">
									<pre><code class="language-javascript">i18n.init({
	preload: ['de-DE', 'fr']
});</code></pre>
									<span class="help-block">The additional languages will be preloaded <code>on init</code>.</span>
								</div>
							</div>

							<div class="form-group">
								<label class="col-lg-3 control-label text-semibold">Preload additional languages after init:</label>
								<div class="col-lg-9">
									<pre><code class="language-javascript">i18n.preload([lngs], callback)</code></pre>
									<span class="help-block">The additional languages will be preloaded <code>after init</code> by calling this function.</span>
								</div>
							</div>

							<div class="form-group">
								<label class="col-lg-3 control-label text-semibold">Languages whitelist:</label>
								<div class="col-lg-9">
									<pre><code class="language-javascript">i18n.init({
	lngWhitelist: ['de-DE', 'de', 'fr']
});</code></pre>
									<span class="help-block">Only specified languages will be allowed to load.</span>
								</div>
							</div>

							<div class="form-group">
								<label class="col-lg-3 control-label text-semibold">Additional namespaces:</label>
								<div class="col-lg-9">
									<pre><code class="language-javascript">// Single 
i18n.loadNamespace('myNamespace', function() {
	// loaded
});

// or multiple
i18n.loadNamespaces([
	'myNamespace1',
	'myNamespace2'
], function() {
	// loaded
});</code></pre>
									<span class="help-block">The additional namespaces will be loaded.</span>
								</div>
							</div>

							<div class="form-group">
								<label class="col-lg-3 control-label text-semibold">Unset/Set fallback language:</label>
								<div class="col-lg-9">
									<pre><code class="language-javascript">// Single 
i18n.init({
	fallbackLng: 'en'
});

// or multiple
i18n.init({
	fallbackLng: ['fr', 'en']
});</code></pre>
									<span class="help-block">If not set it will default to <code>'dev'</code>. If turned on, all missing key/values will be sent to this language.</span>
								</div>
							</div>

							<div class="form-group">
								<label class="col-lg-3 control-label text-semibold">Turn off fallback:</label>
								<div class="col-lg-9">
									<pre><code class="language-javascript">i18n.init({
	fallbackLng: false
});</code></pre>
									<span class="help-block">As the fallbackLng will default to <code>'dev'</code> you can turn it off by setting the option value to <code>false</code>. This will prevent loading the fallbacks resource file and any futher look up of missing value inside a fallback file.</span>
								</div>
							</div>

							<div class="form-group">
								<label class="col-lg-3 control-label text-semibold">Load locales:</label>
								<div class="col-lg-9">
									<pre><code class="language-javascript">i18n.init({
	load: 'current'
});</code></pre>
									<span class="help-block content-group">If load option is set to <code>current</code> i18next will load the current set language (this could be a specific (en-US) or unspecific (en) resource file).</span>

									<pre><code class="language-javascript">i18n.init({
	load: 'unspecific'
});</code></pre>
									<span class="help-block">If set to unspecific i18next will always load the unspecific resource file (eg. en instead of en-US).</span>
								</div>
							</div>

							<div class="form-group">
								<label class="col-lg-3 control-label text-semibold">Caching with localStorage:</label>
								<div class="col-lg-9">
									<pre><code class="language-javascript">i18n.init({ 
	useLocalStorage: true | false,
	localStorageExpirationTime: 86400000 // in ms, default 1 week
});</code></pre>
									<span class="help-block">Caching is turned off by default. If the resouces in a given language had been stored to <code>localStorage</code> they won't be fetched / reloaded from online until set <code>localStorageExpirationTime</code> expired. So if they had been cached once and you add new resources, they won't be reloaded until expired. But you can easily remove the values from localstorage by calling, eg.: <code>localStorage.removeItem("res_en" )</code>.</span>
								</div>
							</div>

							<div class="form-group">
								<label class="col-lg-3 control-label text-semibold">Null values:</label>
								<div class="col-lg-9">
									<pre><code class="language-javascript">i18n.init({
	fallbackOnNull: true | false
});</code></pre>
									<span class="help-block">Default is <code>true</code>.</span>
								</div>
							</div>

							<div class="form-group">
								<label class="col-lg-3 control-label text-semibold">Empty string values:</label>
								<div class="col-lg-9">
									<pre><code class="language-javascript">i18n.init({
	fallbackOnEmpty: true | false
});</code></pre>
									<span class="help-block">Default is <code>false</code>.</span>
								</div>
							</div>

							<div class="form-group">
								<label class="col-lg-3 control-label text-semibold">Debug output:</label>
								<div class="col-lg-9">
									<pre><code class="language-javascript">i18n.init({
	debug: true
});</code></pre>
									<span class="help-block">If something went wrong you might find some helpful information on console log.</span>
								</div>
							</div>
						</div>
					</div>
					<!-- /i18next options -->


					<!-- Footer -->
					<div class="footer text-muted">
						Copyright &copy; 2014. <a href="#">Framework admin template</a> by <a href="http://interface.club">Eugene Kopyov</a>
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
