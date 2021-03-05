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
							Thêm danh mục
						</div>
						<div class="panel-body">
							@include('admin.errors.not')
							
								
							@if(session('thongbao'))
								<div class="alert alert-success">
									{{session('thongbao')}}
								</div>
							@endif
							
							<form method="post" >
								<input type="hidden" name="_token" value="{{csrf_token()}}"/>
								<div class="form-group">
								<label>Tên danh mục:</label>
    							<input type="text" name="name" class="form-control" placeholder="Tên danh mục...">
    							
								</div>
								<div class="form-group">
									<input type="submit" name="submit" class="form-control btn btn-primary"  value="Thêm mới">
								</div>
								
							</form>
							
						</div>
					</div>
			</div>


			<div class="col-xs-12 col-md-7 col-lg-7">
				<div class="panel panel-primary">
					<!--Danh sách danh mục-->
					<div class="panel-heading">Danh sách danh mục</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<table class="table table-bordered">
								@if(session('thongbao1'))
									<div class="alert alert-success">
										{{session('thongbao1')}}
									</div>
								@endif
								@if(session('thongbao2'))
								<div class="alert alert-success">
									{{session('thongbao2')}}
								</div>
							@endif
				              	<thead>
					                <tr class="bg-primary">
					                  <th>Tên danh mục</th>
					                  <th style="width:30%">Tùy chọn</th>
					                </tr>
				              	</thead>
				              	<tbody>
				              	@foreach($category as $tl)
									<tr>
										<td>{{$tl->name}}</td>
										<td>
				                    		<a href="admin/category/editcategory/{{$tl->id}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
				                    		<a href="admin/category/category/{{$tl->id}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
				                  		</td>
				                  	</tr>
			                  	@endforeach
				                </tbody>
				            </table>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@include('admin.layout.footer')
</body>

</html>