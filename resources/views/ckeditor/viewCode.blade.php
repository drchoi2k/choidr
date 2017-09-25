<!DOCTYPE html>
<html>
	<head>
		<title>TEST CKEDITOR</title>
		<meta charset="utf-8">
		{!!Html::style('css/app.css')!!}
		<style type="text/css">
		/*      html, body{
		width: 100%;
		margin: 0 auto;
		
		}*/
		.posi{
		margin: 0 0 0 180px;
		}
		.tex{
			font-size: 18px;
			/*padding: 0 0 0 130px;*/
		}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>Test Editor</h4>
				</div>
				<div class="panel-body">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Title</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($data as $key => $d)
							<tr>
								<td>{!!$d ->title!!}</td>
								<td>
									<a href="{{url('readInfo',array($d->id))}}">View /</a>
									<a href="{{url('editInfo',array($d->id))}}">Edit /</a>
									<a href="{{url('deleteInfo',array($d->id))}}">Delete</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
			<div class="panel panel-default" width="50%">
				<div class="panel-info">
					<div class="panel-heading">
						<h4>ETC</h4>
					</div>
					<table class="table table-striped tex">
						<tr>
							<td>1111111111111111</td>
						</tr>
						<tr>
							<td>2222222222222222</td>
  						</tr>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>