<!doctype html>
<html lang="en">

<head>
	<title>Designer</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">

	
	<?php
    /** https://www.stimulsoft.com/en/documentation/online/programming-manual/index.html?reports_and_dashboards_for_php_web_designer_deployment.htm */
        $js = new \Stimulsoft\StiJavaScript(\Stimulsoft\StiComponentType::Designer);
        $js->renderHtml();
    ?>

    <script type="text/javascript">
        <?php
        $handler = new \Stimulsoft\StiHandler();
        $handler->options->url = '/handler';
        //$handler->license->setKey('6vJhGtLLLz2GNviWmUTrhSqnO...');
        //$handler->license->setFile('license.key');
        $handler->renderHtml();

        /** https://www.stimulsoft.com/en/documentation/online/programming-manual/index.html?reports_and_dashboards_for_php_web_designer_settings.htm */
        $options = new \Stimulsoft\Designer\StiDesignerOptions();
        $options->appearance->fullScreenMode = false;

        /** https://www.stimulsoft.com/en/documentation/online/programming-manual/index.html?reports_and_dashboards_for_php_web_designer_deployment.htm */
        $designer = new \Stimulsoft\Designer\StiDesigner($options);

        /** https://www.stimulsoft.com/en/documentation/online/programming-manual/index.html?reports_and_dashboards_for_php_engine_connecting_sql_data.htm */
        $designer->onBeginProcessData = true;

        /** https://www.stimulsoft.com/en/documentation/online/programming-manual/index.html?reports_and_dashboards_for_php_web_designer_saving_report.htm */
        $designer->onSaveReport = true;

        /** https://www.stimulsoft.com/en/documentation/online/programming-manual/index.html?reports_and_dashboards_for_php_web_designer_creating_editing_report.htm */
        $report = new \Stimulsoft\Report\StiReport();
        $report->loadFile('reports/SimpleList.mrt');
        $report->onBeforeRender = "onBeforeRender";

        /*$var1 = new \Stimulsoft\Report\StiVariable('var1', \Stimulsoft\Report\StiVariableType::String, "abc");
        $report->dictionary->variables[] = $var1;

        $var2 = new \Stimulsoft\Report\StiVariable('var2', \Stimulsoft\Report\StiVariableType::Decimal, 4.34);
        $report->dictionary->variables[] = $var2;*/

        $designer->report = $report;
        ?>

        function onBeforeRender(args) {
            let var1 = new Stimulsoft.Report.Dictionary.StiVariable('', 'var1', 'var1', '', Stimulsoft.System.Decimal, '4.34');
            args.report.dictionary.variables.add(var1);
        }

        // After loading the HTML page, display the visual part of the Designer in the specified container.
        function onLoad() {
            <?php
            	$designer->renderHtml('designerContent');
            ?>
        }
    </script>	
</head>

<body onload="onLoad();">
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.html"><img src="assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
								<i class="lnr lnr-alarm"></i>
								<span class="badge bg-danger">5</span>
							</a>
							<ul class="dropdown-menu notifications">
								<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>System space is almost full</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-danger"></span>You have 9 unfinished tasks</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Monthly report is available</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Weekly meeting in 1 hour</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Your request has been approved</a></li>
								<li><a href="#" class="more">See all notifications</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#">Basic Use</a></li>
								<li><a href="#">Working With Data</a></li>
								<li><a href="#">Security</a></li>
								<li><a href="#">Troubleshooting</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/user.png" class="img-circle" alt="Avatar"> <span>Samuel</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
								<li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
								<li><a href="#"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
						<!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		
		<!-- LEFT SIDEBAR -->
		<?php
		$menus = DB::select('select * from menus m order by app_id, parent_id, sort');

		// Buat array kosong untuk menampung menu berjenjang
		$nestedMenus = [];

		// Iterasi setiap menu dari hasil query, convert data menjadi Nested Array
		foreach ($menus as $menu) {
			// Jika parent_id NULL, maka menu ini adalah parent utama
			if ($menu->parent_id === 0) {
				$nestedMenus[$menu->id] = [
					'name' => $menu->menu,
					'caption' => $menu->caption,
					'url' => $menu->url,
					'icon' => $menu->icon,
					'class' => $menu->class,
					'report' => $menu->report,
					'is_sparator' => $menu->is_sparator,
					'children' => []
				];
			} else {
				// Jika memiliki parent, tambahkan sebagai child pada parent yang sesuai
				$nestedMenus[$menu->parent_id]['children'][] = [
					'name' => $menu->menu,
					'caption' => $menu->caption,
					'url' => $menu->url,
					'icon' => $menu->icon,
					'class' => $menu->class,
					'report' => $menu->report,
					'is_sparator' => $menu->is_sparator,                    
					'id' => $menu->id
				];
			}
		}

		?>
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						@foreach ($nestedMenus as $menu)
							@if (!empty($menu['children']))
							<li>
								<a href="#{{ $menu['name'] }}" data-toggle="collapse" class="collapsed">
									<i class="{{ $menu['class'] }}"></i> 
										<span>{{ $menu['caption'] }}</span>
										<i class="icon-submenu lnr lnr-chevron-left">
									</i>
								</a>
								<div id="{{ $menu['name'] }}" class="collapse">
									<ul class="nav"> 
										@foreach ($menu['children'] as $child)
											<li>
												@if($child['report'] === '' )
													<a href="{{ route($child['url']) }}"">
												@else
													<a href="{{ route($child['url'], ['rpt' => $child['report'], 'caption' => $child['caption']]) }}"">
												@endif										
													<i class="{{ $child['class'] }}"></i> {{ $child['caption'] }}
												</a>
											</li>
										@endforeach
									</ul>
								</div>
							</li>		
							@else
								<li>
									@if($menu['report'] === '' )
										<a href="{{ route($menu['url']) }}" class="">
									@else
										<a href="{{ route($menu['url'], ['rpt' => $menu['report'], 'caption' => $menu['caption'] ]) }}" class="">
									@endif								
									<i class="{{ $menu['class'] }}""></i><span>{{ $menu['caption'] }}</span></a>
								</li>
							@endif						
						@endforeach							
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
        
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
                    <div>
						<div id="designerContent"></div>
                    </div>
					<!-- END OVERVIEW -->
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
</body>

</html>
