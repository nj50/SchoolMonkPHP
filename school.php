<?php if(file_exists(dirname(__FILE__)."/includes/session.php")){ include(dirname(__FILE__)."/includes/session.php"); }  
Validate();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>SchoolMonk</title>
	<?php if(file_exists("templates/head_tag.php")){ include("templates/head_tag.php");} ?>
	<style>
	 /* original source: http://elvery.net/demo/responsive-tables/ */
        @media only screen and (max-width: 800px){
            .demo-reponsiveTable table,
            .demo-reponsiveTable thead,
            .demo-reponsiveTable tbody,
            .demo-reponsiveTable th,
            .demo-reponsiveTable td,
            .demo-reponsiveTable tr {
                display: block;
            }
            /* Hide table sorting (but not display: none;, for accessibility) */
            /* Note: we're hiding the sorting because it looks terrible! Making this pretty is an exercise for the reader*/
            .demo-reponsiveTable thead tr:first-child {
                position: absolute;
                top: -9999px;
                left: -9999px;
            }
            .demo-reponsiveTable tr {
                border: 1px solid #ccc;
            }
            .demo-reponsiveTable table>tbody>tr>td,
            .demo-reponsiveTable table>thead>tr>th {
                /* Behave  like a "row" */
                border: none;
                border-bottom: 1px solid #eee;
                position: relative;
                padding-left: 50%;
                white-space: normal;
                text-align: left;
            }
            .demo-reponsiveTable table>tbody>tr>td:before,
            .demo-reponsiveTable table>thead>tr>th:before {
                /* Now like a table header */
                position: absolute;
                /* Top/left values mimic padding */
                top: 6px;
                left: 6px;
                width: 45%;
                padding-right: 10px;
                white-space: nowrap;
                text-align: left;
                font-weight: bold;
                /* Label the data */
                content: attr(data-title-text);
            }
        }
	</style>
</head>
<body ng-app="SMonk" ng-controller='ii' ng-init="userInit('<?php echo 'sssss'; ?>')">
	<div id="wrapper">
		<?php if(file_exists("templates/header.php")){ include("templates/header.php");} ?>
		
        <div id="page-wrapper">
			
				<?php if(file_exists("templates/schoolside_nav.php")){ include("templates/schoolside_nav.php");} ?>
				
				<div class='aside navbar-static-side fade-in-up' ng-view></div>
			
        </div>
        <!-- /#page-wrapper -->
		
		<?php if(file_exists("templates/footer.php")){ include("templates/footer.php");} ?>
		
		
    </div>
    <!-- /#wrapper -->
	<?php include('templates/modular.php');?>
	<script>
    $(document).ready(function() {
        /*$('#dataTables-example').DataTable({
                responsive: true
        });*/
		
		/*$('#dashboard_tiles .panel-default').click(function(){
			$('#dashboard_tiles .panel-default').removeClass('currentActive');
			$(this).addClass('currentActive')
		})*/
    });
    </script>
</body>
</html>