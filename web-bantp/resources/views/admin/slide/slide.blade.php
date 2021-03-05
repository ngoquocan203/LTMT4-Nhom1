<!DOCTYPE html>
<html>
@include('admin.layout.head')
<body>
	@include('admin.layout.header')
		
	@include('admin.layout.menu')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Slide</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách slide</div>
					<div class="panel-body">
					
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="{{asset('admin/slide/addslide')}}" class="btn btn-primary">Thêm slide</a>
								@if(session('thongbao'))
									<div class="alert alert-success">
										{{session('thongbao')}}
									</div>
								@endif 
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
								<table class="table table-bordered" style="margin-top:20px;" >				
									<thead>
										<tr class="bg-primary">
											<th width="10%">ID</th>
											<th width="20%">Name</th>
											<th width="50%">Image</th>
											<th width="20%">Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
										@foreach($slide as $sl)
										<tr>
											<td>{{$sl->id}}</td>
											<td>{{$sl->name}}</td>
											<td>

												<img width="700px" src="{{asset('admin_asset/img/'.$sl->image)}}">
												
											</td>
											<td>
												<a href="admin\slide\editslide\{{$sl->id}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a href="admin\slide\slide\{{$sl->id}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>							
							</div>
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
