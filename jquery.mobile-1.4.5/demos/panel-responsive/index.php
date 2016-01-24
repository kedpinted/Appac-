<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel responsive - jQuery Mobile Demos</title>
    <link rel="stylesheet" type="text/css" href="assets/css/accordion.css">
    <link rel="stylesheet" href="../css/themes/default/jquery.mobile-1.4.5.min.css">
    <link rel="stylesheet" href="../_assets/css/jqm-demos.css">
	<link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<script src="../js/jquery.js"></script>
    <script src="../_assets/js/index.js"></script>
    <script src="../js/jquery.mobile-1.4.5.min.js"></script>
    <script type="text/javascript" src="../../../assets/js/main.js"></script>
</head>
<body>

<div data-role="page" class="jqm-demos ui-responsive-panel" id="panel-responsive-page1" data-title="Panel responsive page">

    <div data-role="header">
        <h1></h1>
        <a href="#nav-panel" data-icon="gear" data-iconpos="notext">Add</a>
        <a href="#nav-panel" data-icon="arrow-l" data-iconpos="notext">Add</a>
    </div><!-- /header -->

    <div role="main" class="ui-content jqm-content jqm-fullwidth">
        <div style="text-align: center">

           

        </div>

	</div><!-- /content -->

	<div data-role="panel" data-position="right" data-display="reveal" data-theme="b" id="nav-panel">
		<ul data-role="listview">
            <li data-icon="delete"><a href="#" data-position="right" data-rel="close">Close</a></li>
            <li data-icon="plus"><a href="">Transitions</a></li>
                <li>
                    <div>
                        <?php
                            include("../../../comment.php");
                        ?>
                    </div>
            </li>
        </ul>
	</div><!-- /panel -->

</div><!-- /page -->

<div data-role="page" id="panel-responsive-page2">

    <div data-role="header">
        <h1>Landing page</h1>
    </div><!-- /header -->

    <div role="main" class="ui-content jqm-content">

        <p>This is just a landing page.</p>

        <a href="#panel-responsive-page1" class="ui-btn ui-shadow ui-corner-all ui-btn-inline ui-mini ui-icon-back ui-btn-icon-left">Back</a>

    </div><!-- /content -->

</div><!-- /page -->

</body>
</html>
