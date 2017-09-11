<!DOCTYPE html>
<html>
	@include('jquery.update')
	<head>
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>Test jquery</title>
		{!!Html::style('css/app.css')!!}
		{!!Html::script('js/app.js')!!}
		<!-- <style type="text/css">
			tbody tr:first-child{
				background: #ddd;
				font-weight: : bold;
			}
		</style> -->
	</head>
	<body>
		<div class="container">
			

			<!-- @if ($errors->any())
				<div class="alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif -->



			<div class="panel panel-default">
				<div class="panel-heading">제 이 쿼 리</div>
				<div class="panel-body">
				   
					{!!Form::open(['url'=>'postJquery', 'method'=>'POST', 'id'=>'frm-insert'])!!}
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								{!!Form::label('name','이 름')!!}
								{!!Form::text('name', null,['id'=>'name','class'=>'form-control'])!!}
							</div>
						</div>
						<div class="col-md-5">
							<div class="form-group">
								{!!Form::label('email','Email')!!}
								{!!Form::email('email', null,['id'=>'email','class'=>'form-control'])!!}
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								{!!Form::label('password','비밀번호')!!}
								{!!Form::password('password',['id'=>'password','class'=>'form-control'])!!}
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								{!!Form::label('role','직 책')!!}
								{!!Form::select('role_id',$roles,null,['id'=>'role_id','class'=>'form-control role-id'])!!}
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-5">
							<hr>
							{!!Form::submit('저 장',['class'=>'btn btn-primary'])!!}
						</div>
					</div>
					{!!Form::close()!!}
				</div>
				<div class="table-responsive">
				</div>
			</div>
			<a type="button" class="btn btn-success" href="{{ url('ckedit')}}">글작성</a>
		</div>

		
		<!-- @include('jquery.update')  -->
		<script type="text/javascript">
		$(document).ready(function(){
			$.ajaxSetup({
			headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});
			});
			//----------------create---------------
			$('#frm-insert').on('submit',function(e){
				e.preventDefault();
				var url = $(this).attr('action');
				var post = $(this).attr('method');
				var data = $(this).serialize();
				$.ajax({
					type : post,
					url  : url,
					data : data,
					success:function(data)
					{
						$('#frm-insert').trigger('reset');
						console.log(data);
						readByAjax();

					}
				})
			});
			//-------------------delete----------------------
			$(document).on('click','.btn-dell',function(e){
				var id = $(this).val();
				$.ajax({
					type : 'post',
					url  : "{{ url('deleteByAjax')}}",
					data : {id:id},
					dataType : 'json',
					success:function(data)
					{
						alert(id);
						console.log(data);
						$('tbody tr.id'+id).remove();
						readByAjax();
					}
				})
			})
			//------------------edit---------------------------
			$(document).on('click','.btn-edit',function(e){
				var id = $(this).val();
				$.ajax({
					type : 'get',
					url  : "{{ url('getEditAjax')}}",
					data : {id:id},
					success:function(data)
					{
					var frmupdate = $('#frm-update');
						frmupdate.find('#id').val(data.id);
						frmupdate.find('#name').val(data.name);
						frmupdate.find('#email').val(data.email);
						frmupdate.find('#role_id').val(data.role_id);
						$('#popup-update').modal('show');
						console.log(data);
					}
				})
			})
			//----------------update---------------------------
			$('#frm-update').on('submit', function(e){
				e.preventDefault();
				var data = $(this).serialize();
				var url = $(this).attr('action');
				var post = $(this).attr('method');
				$.post(url,data,function(data){
					console.log(data);
					$('#frm-update').trigger('reset');
					$('#popup-update').hide('reset');
					////////////////화면정리방법??
					readByAjax();
				})
			})
			//-----------------------------------------
			readByAjax();
			//-----------------------------------------
			function readByAjax()
			{
				$.ajax({
					type : 'get',
					url  :"{{ url('readByAjax')}}",
					dataType : 'html',
					success:function(data)
					{
						$('.table-responsive').html(data);
					}
				})
			}
		</script>
	</body>
</html>