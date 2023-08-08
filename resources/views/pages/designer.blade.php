@extends('layouts/main')

@section('title','Report Designner')

@section('header_script')
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
@endsection()

@section('container')
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
@endsection()


@section('addtional_script')

@endsection()