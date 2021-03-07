<!DOCTYPE html>
<html lang="en">

@include('layout.head')

<body>
  <!-- header -->
  @include('layout.header')

  <!-- Navigation -->
<div class="container ">
  <div class="row">
  <div class="col-lg-12 my-4">
    <nav aria-label="breadcrumb">
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{asset('font/home')}}" class="text-success">Home</a></li>
        <li aria-current="page" class="breadcrumb-item active">Sản Phẩm </li>      
      </ul>
    </nav>
  </div>

  <!-- Menu Dọc -->
  @include('layout.menuver')

  <div class="col-lg-9">
    <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
      <!-- Slide -->
      @include('layout.slide')
      <br>
        <h4>Có {{count($products)}} Sản Phẩm:</h4>
        <div class="row my-4">

          @foreach($products as $item)

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="{{asset('font/detail/'.$item->id)}}">
                <img class="img-fluid w-100" height="100px" src="{{asset('admin_asset/img/'.$item->feature_image)}}" alt="Sample">
              </a>
              <div class="card-body text-center">
                <h5 class="mb-0">{{$item->name}}</h5>
                <h5>({{$item->quantity}})</h5>

                @if($item->promotion_price == 0)
                  <p>
                    <span style="font-weight: bold;">{{$item->price}} VNĐ </span> 
                  </p>
                @else  
                  <p>
                    <span><strike>{{$item->price}} VNĐ </strike></span> &nbsp;
                    <span style="color: orange;font-weight: bold;">{{$item->promotion_price}} VNĐ</span>
                  </p>
                @endif 
                
              </div>
              <div class="card-footer text-center">
                <button type="button" class="btn btn-primary btn-sm mr-1 waves-effect waves-light"><i class="fas fa-shopping-cart pr-2"></i>Thêm vào giỏ</button>
              </div>
            </div>
          </div>
          @endforeach  
        </div>
        <div class="row">
          {{$products->links()}}
        </div>
        
        <!-- /.row -->
      </div>
    </div>
   </div> 
    @include('layout.bottommain')

  </div>
  <!-- /.container -->

  <!-- Footer -->
  @include('layout.footer')
</body>
</html>
