<!DOCTYPE html>
<html>
<head>
	<title>Sticky Notes</title>
	<link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="assets/css/skeleton.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light+Two' rel='stylesheet' type='text/css'>
	<script type="text/javascript">

		///////////////////// GET ALL NOTES ///////////////////

		$(document).ready(function() {
			$.get('notes/index_html', function(res) {
				$('#notes').html(res);
			});

			///////////////////// ADD A NEW NOTE ///////////////////

			$(document).on('submit', 'form', function(e){
				e.preventDefault();
				$.post($(this).attr('action'), $(this).serialize(), function(res) {
					$('#notes').html(res);
				});
				$('#note_title').val('');
			});

			///////////////////// UPDATE TEXTAREA ///////////////////

			$(document).on('change', 'textarea', function() {
				$(this).parent().submit();
			});

			return false;

		});
	</script>
</head>
<body>
<div class="row">
	<div class="twelve columns" id='header'>
		<h4>Sticky Notes</h4>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="twelve columns form">
			<form action='/notes/create'>
				<input id='note_title' type='text' placeholder='Insert note title here...' name='titles'>
				<input id='new_note' type='submit' value='Post It!'>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="twelve columns">
			<div id='notes'>
<!-- 				insert data here! -->
			</div>
		</div>
	</div>
</div>
</body>
</html>