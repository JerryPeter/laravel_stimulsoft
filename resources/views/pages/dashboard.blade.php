@extends('layouts/main')

@section('title','REPORT :: Dashboard ')

@section('header_script')
	<!-- Stimulsoft Reports.JS -->
	<script src="scripts/stimulsoft.reports.js" type="text/javascript"></script>
	<script src="scripts/stimulsoft.viewer.js" type="text/javascript"></script>

	<!-- Report viewer scripts, may be external -->
	<script type="text/javascript">
		// Create the report viewer with default options
		var viewer = new Stimulsoft.Viewer.StiViewer(null, "StiViewer", false);
		// Create a new report instance
		var report = new Stimulsoft.Report.StiReport();
		// Load report from url
		report.loadFile("reports/SalesOverview.mrt");
		// Assign report to the viewer, the report will be built automatically after rendering the viewer
		viewer.report = report;
	</script>
@endsection()

@section('container')
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">SAMPLE REPORT TITLE</h3>
							<p class="panel-subtitle">Description Report out in this area</p>
                            <br><br>
                            <div>
                                <script type="text/javascript">
                                    // Show the report viewer in this place
                                    viewer.renderHtml();
                                </script>
                            </div>                    
						</div>
						<div class="panel-body">

						</div>
					</div>
					<!-- END OVERVIEW -->
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
@endsection()