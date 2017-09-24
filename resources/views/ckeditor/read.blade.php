<!DOCTYPE html>
<html>
	<head>
		<title>TEST CKEDITOR</title>
		<meta charset="utf-8">
		{!!Html::style('css/app.css')!!}
	</head>
	<body>
		<div class="container">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>Read Editor</h4>
				</div>
				<div class="panel-body">
					<h3>{!!$data->title!!}</h3>
					<hr>
					{!!$data->content!!}

				</div>
			</div>
		</div>
	</body>
</html>