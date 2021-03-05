<!DOCTYPE html>
<html>
@include('admin.layout.head')
<body>
   @include('admin.layout.header')
        
    @include('admin.layout.menu')
        
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tài Khoản</h1>
            </div>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                
                <div class="panel panel-primary">
                    <div class="panel-heading">Danh sách tài khoản</div>
                    <div class="panel-body">
                    
                        <div class="bootstrap-table">
                            <div class="table-responsive">
                                <table class="table table-bordered" style="margin-top:20px;" >              
                                    <thead>
                                        <tr class="bg-primary">
                                            <th>ID</th>
                                            <th>Level</th>
                                            <th width="30%">Full Name</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Tùy chọn</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $us)
                                        <tr>
                                            <td>{{$us->id}}</td>
                                            <td>{{$us->level}}</td>
                                            <td>{{$us->fullname}}</td>
                                            <td>{{$us->email}}</td>
                                            <td>{{$us->password}}</td>
                                            <td>
                                                <a href="admin\user\edit\{{$us->id}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
                                                <a href="admin\user\user\{{$us->id}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
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
    </div>  <!--/.main-->
    @include('admin.layout.footer')
</body>

</html>
