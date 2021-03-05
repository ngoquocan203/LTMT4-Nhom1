<!DOCTYPE html>
<html lang="en">
@include('layout.head')

<body>
  <!-- Header --> 
   @include('layout.header')
  <!-- Navigation -->
<div class="container ">
  <div class="row">
  <div class="col-lg-12 my-4">
    <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{asset('font/home')}}" class="text-success">Home</a></li>
     
    </ul>
  </div>
<!-- Menu dọc -->  
@include('layout.menuver')

<div class="col-lg-9">
  <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
  
  <!-- Slide -->
  @include('layout.slide')

    <div class="container">
		<section>
			<h3 class="text-center mt-4 pt-5"><b>Tìm thấy <span style="color:red; " >{{count($products)}}</span> sản phẩm</b> :</h3>
			<div class="row my-4">
		      @foreach($products as $item)
		      <div class="col-lg-4 col-md-6 mb-4">
		        <div class="card h-100">
		          <a href="{{asset('font/detail/'.$item->id)}}">
	                <img class="img-fluid w-100" src="{{asset('admin_asset/img/'.$item->feature_image)}}" alt="Sample">
	              </a>
		          <div class="card-body text-center">
		            <h5 class="mb-0">{{$item->name}}</h5>
		                <h5>({{$item->quantity}})</h5>
		                <h6 class="mb-3">{{$item->price}} VNĐ</h6>
		              </div>
		          <div class="card-footer text-center">
		            <button type="button" class="btn btn-primary btn-sm mr-1 waves-effect waves-light"><i class="fas fa-shopping-cart pr-2"></i>Thêm vào giỏ</button>
		          </div>
		        </div>
		      </div>
		      @endforeach  
		    </div>  
		</section>
	</div>
  </div> 
</div>
</div>
    <!--bottom main -->
	@include('layout.bottommain')

</div>

  <!-- Footer -->
	@include('layout.footer')  

  
</body>
</html>
