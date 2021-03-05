<!DOCTYPE html>
<html>
@include('admin.layout.head')
<body>
			
	@include('admin.layout.header')
		
	@include('admin.layout.menu')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh mục sản phẩm</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Sửa danh mục 
						</div>
						<div class="panel-body">
							@if(session('thongbao1'))
									<div class="alert alert-success">
										{{session('thongbao')}}
									</div>
								@endif 
							<form method="post">
								<div class="form-group">
								<label>Tên danh mục:</label>
    							<input type="text" name="name" class="form-control" placeholder="Điền tên danh mục..." value="{{$category->name}}"/>
    							
								</div>
								<div class="form-group">
									<input type="submit" name="submit" class="form-control btn btn-primary"  value="Sửa">
								</div>
								<div class="form-group">
									<a class="form-control btn btn-danger" href="{{asset('admin/category/category')}}">Hủy </a>
								</div>
								{{csrf_field()}}
							</form>
						</div>
					</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	@include('admin.layout.footer')
</body>

</html>