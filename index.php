	<!DOCTYPE html>
	<html lang="">
		<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Title Page</title>

			<!-- Bootstrap CSS -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

			<style type="text/css">
	       		.contactform{
	       			border: solid 1px #ccc;
	    			padding: 40px;
	    			margin: 40px 0 40px;
	    			font-weight: 300;
	    			font-size: 18px;
	       		}
	    	</style>

			<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
			<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
			<!--[if lt IE 9]>
				<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
				<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
			<![endif]-->
		</head>
		<body>	
				<h1 class="text-center">Contact form</h1>
				<div class="contactform">
				<div class="container">

	            <div class="row">

	                <div class="col-lg-8 col-lg-offset-2">

	                    <form id="contact-form" method="post" action="savecontact.php" role="form">

	                        <div class="messages"></div>

	                        <div class="controls">

	                            <div class="row">
	                                <div class="col-md-6">
	                                    <div class="form-group">
	                                        <label for="form_name">Name *</label>
											<input type="text" name="name" id="form_name" class="form-control" value="" required="required" title="name" pattern="[a-zA-Z]+"  placeholder="Please enter your Name *" data-error="Name is required."/>
	                                        <div class="help-block with-errors"></div>
	                                    </div>
	                                </div>
	                                <div class="col-md-6">
	                                    <div class="form-group">
	                                        <label for="form_lastname">Email *</label>
	                                        <input type="email" name="email" id="form_email" class="form-control" value="" required="required" title="email" placeholder="Please enter your lastname *" data-error="Email is required.">

	                                        <div class="help-block with-errors"></div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="row">
	                                <div class="col-md-6">
	                                    <div class="form-group">
	                                        <label for="form_email">Cityzen(13digit) *</label>
	                                        <input type="number" name="cityzen" id="form_cityzen" class="form-control" value="" pattern=".{13,13}" step="" required="required" title="cityzen" placeholder="Please enter your cityzen *" data-error="Valid cityzen">

	                                        <div class="help-block with-errors"></div>
	                                    </div>
	                                </div>
	                                <div class="col-md-6">
	                                    <div class="form-group">
	                                        <label for="form_phone">Phone</label>
	                                        <input id="form_phone" type="number" name="phone" class="form-control" placeholder="Please enter your phone" data-error="Please,leave us a phone.">
	                                        <div class="help-block with-errors"></div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="row">
	                                <div class="col-md-6">
	                                    <div class="form-group">
	                                        <label for="form_salary">Expected Salary *</label>
	                                        <input type="number" name="" id="form_salary" class="form-control" value="" min="" max="" step="" required="required" title="Expected salary" placeholder="Please enter your expected salary*" data-error="Please,leave us a salary.">

	                                        <div class="help-block with-errors"></div>
	                                    </div>
	                                </div>
	                                <div class="col-md-6">
	                                	<div class="form_group">
	                                		<label for="form_workdate">Work Date</label>
											<input type="text" name="workdate" id="form_workdate" class="form-control" value="" title="workdate" readonly="readonly" placeholder="Start Date">
	                                	</div>
	                                </div>
								</div>
								<div class="row">
	                                <div class="col-md-12">
	                                	<div class="form_group">
	                                		<label class="control-label">Upload file resume(pdf, doc,jpg,jpeg)</label>
											<input id="inputResume" name="inputresume" type="file" multiple class="file-loading" data-allowed-file-extensions='["pdf", "doc","jpg","jpeg"]'>
	                                	</div>
	                                </div>
								</div>
								<div class="row">
	                                <div class="col-md-12">
	                                    <input type="submit" name="submit-contact" class="btn btn-success btn-send" value="Register" style="float:right;">
	                                </div>
								</div>
	                            
							
	                    </form>

	                </div><!-- /.8 -->

	            </div> <!-- /.row-->

	        </div> <!-- /.container-->
			</div>

			<!-- jQuery -->
			<script src="//code.jquery.com/jquery.js"></script>
			<!-- jQueryUI -->
			<script type="text/javascript" src="js/jqueryui/jquery-ui.min.js"></script>
			<link rel="stylesheet" type="text/css" href="js/jqueryui/jquery-ui.min.css"/>
			<link rel="stylesheet" type="text/css" href="js/jqueryui/jquery-ui.structure.min.css"/>
			<link rel="stylesheet" type="text/css" href="js/jqueryui/jquery-ui.theme.min.css"/>

			<!-- Fileinput plugin -->
			<link href="js/fileinput/js/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />

	<!-- canvas-to-blob.min.js is only needed if you wish to resize images before upload.
	     This must be loaded before fileinput.min.js -->
	<script src="js/fileinput/js/plugins/canvas-to-blob.min.js" type="text/javascript"></script>
	<!-- sortable.min.js is only needed if you wish to sort / rearrange files in initial preview.
	     This must be loaded before fileinput.min.js -->
	<script src="js/fileinput/js/plugins/sortable.min.js" type="text/javascript"></script>
	<!-- purify.min.js is only needed if you wish to purify HTML content in your preview for HTML files.
	     This must be loaded before fileinput.min.js -->
	<script src="js/fileinput/js/plugins/purify.min.js" type="text/javascript"></script>
	<!-- the main fileinput plugin file -->
	<script src="js/fileinput/js/fileinput.min.js"></script>

			
			<!-- Bootstrap JavaScript -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
			<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		</body>
		<script>
					$(document).ready(function() {

				
						isDatePicker($('#form_workdate'));

						$("#inputResume").fileinput({
							showUpload: false,
							showCaption: false,
							showRemove: false
						});

		function isDatePicker(dpk){
	    $( dpk ).datepicker({
	        dateFormat: 'dd/mm/yy',
	        yearRange: "1930:",
	        changeYear: true,
	        changeMonth: true,
	        monthNamesShort: ["1","2","3","4","5","6","7","8","9","10","11","12"]
	    });
		}
		});
		</script>
	</html>