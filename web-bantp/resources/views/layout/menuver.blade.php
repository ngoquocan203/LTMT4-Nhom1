 <div class="col-lg-3">            <!-- Filters -->
      <div class="card sidebar-menu ">
        <div class="card-header">
          <h3 class="h4 card-title active a" style="font-weight: bold;">Danh Mục Sản Phẩm</h3>
        </div>
        <div class="card-body">
          <ul class="nav nav-pills flex-column category-menu">
            @foreach($category as $cg)
              <li class="list-group-item" ><a href="{{asset('font/product/'.$cg->id)}}" class="nav-link text-success">{{$cg->name}}</a> </li>                    
            @endforeach
          </ul>
        </div>
      </div>
    </div>