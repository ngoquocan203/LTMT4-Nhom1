<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<base href="{{asset('')}}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integritysha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="admin_asset/dd.css">
	<title>Shop Eco Love</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container-fluid">
	  <a class="navbar-brand" href="#">
	  <strong>
	  	<span class="text-success">Eco</span>
	  	<span>Love</span>
	  	<span class="text-success"></span>
	  </strong>
	  </a>

	 <div class="collapse navbar-collapse" id="navbarNavDropdown">
	    <ul class="navbar-nav">
	        <li class="nav-item active">
	          	<a class="nav-link" href="#">Trang chủ <span class="sr-only">(current)</span></a>
	        </li>
	        <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          	Sản phẩm</a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		        	@foreach($category as $cate)
		         		 <a class="dropdown-item" href="" >{{$cate->name}}</a>
		            @endforeach 	
		        </div>
		     </li>
		     <li class="nav-item">
		       	<a class="nav-link" href="#">Hỗ Trợ</a>
		     </li>
		</ul>
	</div>

	<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
	     <form class="form-inline" method="get" action="{{'font/search/'}}">
		    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="result">
		    <button class="btn btn-outline-success my-1 my-sm-0" type="submit">Tìm kiếm</button>
		 </form>


	    <ul class="navbar-nav">
		   	<li class="nav-item">
		   		<a class="nav-link" href="login.html">Đăng Nhập </a>
		   	</li>
		   	<li class="nav-item">
		   		<a class="nav-link" href="sign.html">Đăng Ký</a>
		   	</li>
	    </ul>
	</div>
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="	  false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	</button>
</div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  	<ol class="carousel-indicators">
	  	<?php $i=0; ?>
	  	@foreach($slide as $sl)
	   		 <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}"
	   		 	@if($i == 0)
	   		  	class="active">
	   		  	@endif	
	   		  </li>
	    <?php $i++; ?>
	    @endforeach
  	</ol>
	<div class="carousel-inner">
	  		<?php $i=0 ?>
	  	@foreach($slide as $sl)  
		    <div 
		    	@if($i == 0)
		    		class="carousel-item active"
		    	@else
		    		class="carousel-item" 	
		    	@endif	>
		    <?php $i++; ?>			
		    	<img class="d-block w-100" src="{{asset('admin_asset/img/'.$sl->image)}}" alt="{{$sl->name}}">      
		  	</div>
	  	@endforeach
	</div>

  	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
  	</a>
  	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
  	</a>
</div>


 <main>
	<div class="container">
		<section>
			<h3 class="text-center mt-4 pt-5">Tìm thấy {{count($products)}} sản phẩm:</h3>

			<div class="row mt-5">
				@foreach($products as $item)
				<div class="col-md-6 col-lg-3 mb-4">
		          	<div class="">
		                <img class="img-fluid w-100" src="{{asset('admin_asset/img/'.$item->feature_image)}}" alt="Sample">
		                <a href="#!">
		                  <div class="mask waves-effect waves-light"></div>
		                </a>
		            </div>
		            <div class="text-center pt-4">
		                <h5 class="mb-0">{{$item->name}}</h5>
		                <h5>({{$item->content}})</h5>
		                <h6 class="mb-3">{{$item->price}} VND</h6>
		                <button type="button" class="btn btn-primary btn-sm mr-1 waves-effect waves-light"><i class="fas fa-shopping-cart pr-2"></i>Thêm vào giỏ</button>
		            </div>
		        </div>
		      	@endforeach        
			</div>
		</section>

		<section>
			<div class="row d-flex justify-content-center text-center mt-3 mt-md-5 mb-4 pt-5">
	            <div class="col-lg-3 col-md-6 mb-4 mb-md-3 pb-1 pb-md-0">
		            <i class="fas fa-tree fa-3x text-success mb-4"></i>
		            <h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1 đơn đặt hàng </font></font></h5>
		            <h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1 cây xanh phát triển</font></font></h5>
	            </div>
	            <div class="col-lg-3 col-md-6 mb-4 mb-md-3 pb-1 pb-md-0">
	                <i class="fas fa-shipping-fast fa-3x text-dark mb-4"></i>
	                <h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Giao hàng miễn phí từ</font></font></h5>
	                <h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">từ 200.000vnd</font></font></h5>
	            </div>
	            <div class="col-lg-3 col-md-6 mb-4 mb-md-3 pb-1 pb-md-0">
	                <i class="fas fa-box-open fa-3x text-dark mb-4"></i>
	                <h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lô hàng</font></font></h5>
	                <h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hộp an toàn Môi trường của chúng tôi</font></font></h5>
	            </div>
	            <div class="col-lg-3 col-md-6 mb-3">
	                <i class="fas fa-hand-holding-usd fa-3x text-dark mb-4"></i>
	                <h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Giảm giá vĩnh viễn</font></font></h5>
	                <h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tích điểm</font></font></h5>
	            </div>
	        </div>
		</section>
	</div>
</main>
<footer class="page-footer font-small elegant-color">

    <div class="color-primary">
     	 <div class="container">

	        <!-- Grid row-->
	        <div class="row py-4 d-flex align-items-center">

	          <!-- Grid column -->
		        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
		            <h6 class="mb-0">Tham gia cùng chúng tôi </h6>
		        </div>
		          <!-- Grid column -->

		          <!-- Grid column -->
		        	<div class="col-md-6 col-lg-7 text-center text-md-right">

			            <!-- Facebook -->
			            <a class="fb-ic">
			                <i class="fab fa-facebook-f text-primary mr-4"> </i>
			            </a>
			            <!-- Twitter -->
			            <a class="tw-ic">
			                <i class="fab fa-twitter text-info mr-4"> </i>
			            </a>
			            <!--Instagram-->
			            <a class="ins-ic">
			                <i class="fab fa-instagram text-danger"> </i>
			            </a>
		          	</div>
	        </div>
      	</div>
    </div>

    <!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
   
    <section class="">
      <form action="">
        <div class="row d-flex justify-content-center">
          <div class="col-auto">
            <p class="pt-2">
              <strong>Đăng ký nhận tin tức sớm nhất</strong>
            </p>
          </div>
          <div class="col-md-5 col-12">
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example2" class="form-control" />
              <label class="form-label" for="form5Example2">Email address</label>
            </div>
          </div>
          <div class="col-auto">
            <button type="submit" class="btn btn-outline-light mb-4">
              Subscribe
            </button>
          </div>
        </div>
      </form>
    </section>
   
      <div class="row">
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Về Chúng Tôi</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Về Nhãn Hiệu</a>
            </li>
            <li>
              <a href="#!" class="text-white">Thuần chay</a>
            </li>
            <li>
              <a href="#!" class="text-white">Sinh Thái Eco</a>
            </li>
            <li>
              <a href="#!" class="text-white">Trách nhiệm Xã hội</a>
            </li>
          </ul>
        </div>
       
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Account</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Đơn đặt hàng</a>
            </li>
            <li>
              <a href="#!" class="text-white">Cài đặt tài khoản</a>
            </li>
            <li>
              <a href="#!" class="text-white">Cửa Hàng</a>
            </li>
          </ul>
        </div>
    
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Thanh toán & Giao hàng</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Miễn phí vận chuyển</a>
            </li>
            <li>
              <a href="#!" class="text-white">Không chất bảo quản</a>
            </li>
            <li>
              <a href="#!" class="text-white">Thanh toán</a>
            </li>
            <li>
              <a href="#!" class="text-white">Vận chuyển & trở lại</a>
            </li>
          </ul>
        </div>
    
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Liên lạc</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Liên hệ & hợp tác</a>
            </li>
            <li>
              <a href="#!" class="text-white">Điều khoản sử dụng</a>
            </li>
            <li>
              <a href="#!" class="text-white">Chính sách bảo mật</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="#">EcoLove.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</body>
</html>