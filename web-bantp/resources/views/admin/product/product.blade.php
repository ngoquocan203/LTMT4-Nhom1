<!DOCTYPE html>
<html>
@include('admin.layout.head')
<body>
	@include('admin.layout.header')
		
	@include('admin.layout.menu')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sản phẩm</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách sản phẩm</div>
					<div class="panel-body">
					
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="{{asset('admin/product/addproduct')}}" class="btn btn-primary">Thêm sản phẩm</a>
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
											<th>ID</th>
											<th>ID Category</th>
											<th width="">Tên Sản phẩm</th>
											<th>Giá sản phẩm</th>
											<th>Giá Khuyến mãi</th>
											<th width="20%">Ảnh sản phẩm</th>
											<th >Định Lượng</th>
											<th >Nội Dung</th>
											<th width="15%">Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
										@foreach($products as $pd)
										<tr>
											<td>{{$pd->id}}</td>
											<td>{{$pd->category_id}}</td>
											<td>{{$pd->name}}</td>
											<td>{{$pd->price}} VND</td>
											<td>{{$pd->promotion_price}} VND</td>
											<td>
												<img width="150px" src="{{asset('admin_asset/img/'.$pd->feature_image)}}">
											</td>
											<td>{{$pd->quantity}}</td>
											<td>{{$pd->content}}</td>
											<td>
												<a href="admin\product\editproduct\{{$pd->id}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a href="admin\product\product\{{$pd->id}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
											</td>
										</tr>

										@endforeach
										
									</tbody>

								</table>	
								<div>
									{{$products->links()}}
								</div>						
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
