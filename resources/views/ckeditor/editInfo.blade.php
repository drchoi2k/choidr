<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        {!!Html::style('css/app.css')!!}
        <!--    {!!Html::script('js/app.js')!!} -->
        <style type="text/css">
        /*      html, body{
        width: 100%;
        margin: 0 auto;
        
        }*/
        .btn{
        float: right;
        margin: 0px 80px 0 0px;
        }
        .aaa{
        	font-size: 18px;
        	font-weight: bold;
        }
        </style>
        <title>A Simple Page with CKEditor</title>
        <!-- Make sure the path to CKEditor is correct. -->
        <!-- <script src="//cdn.ckeditor.com/4.7.2/standard/ckeditor.js"></script> -->
        <script src="/ckeditor/ckeditor.js"></script>
    </head>
	<body>
		<div class="container">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>Edit Info</h4>
				</div>
					<form action="{{url('updateInfo')}}" method="post">
						<div class="form-group">
							<label for="title">Title</label>
							<input type="hidden" name="id" value="{{$data->id}}">
						<input type="text" name="title" id="title" class="aaa form-control" value="{{$data->title}}">
						</div>
                        <div class="form-group">
                            <textarea name="editor1" id="editor1" class="form-control">
                            	{!!$data->content!!}
                            </textarea>
                            
                        </div>
						<div class="form-group">
							<input type="submit" name="send" id="send" value="저 장" class="btn btn-success">
						{{ csrf_field() }}
						</div>					
					</form>
				</div>
			</div>
		</div>
		 <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace(
        'editor1',{
        // toolbar : 'basic',
        // uiColor:'#9ab8f3',
        width : '100%',
        height : '500',
        });
        </script>
	</body>
</html>