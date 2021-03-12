<!DOCTYPE html>
<html>
@include('admin.layout.head')
<body>
@include('admin.layout.header')
        
    @include('admin.layout.menu')
        
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tài khoản</h1>
            </div>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                
                <div class="panel panel-primary">
                    <div class="panel-heading">Sửa tài khoản</div>
                    <div class="panel-body">
                        @include('admin.errors.not')
                        @if(session('thongbao'))
                            <div class="alert alert-success">
                              {{session('thongbao')}}
                            </div>
                        @endif
                            <form method="post">
                                <div class="form-group">
                                    <label>Fullname</label>
                                    <input type="text" name="fullname" class="form-control" placeholder="Fullname" value="{{$users->fullname}}" required />
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="Email"  value="{{$users->email}}" required />
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" name="password" class="form-control" placeholder="Password" value="{{$users->password}}" required />
                                </div>
                                <div class="form-group">
                                    <label>Level</label>
                                    <input type="text" name="level" class="form-control" placeholder="Password" value="{{$users->level}}" required />
                                </div>
                                <input type="submit" name="submit" value="Sửa" class="btn btn-primary" />
                                <a href="{{asset('admin/user/user')}}" class="btn btn-danger">Hủy bỏ</a>
                                {{csrf_field()}}
                            </form>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->
    </div>  <!--/.main-->
    <script src="admin_asset/js/bootstrap.min.js"></script>
    <script src="admin_asset/js/chart.min.js"></script>
    <script src="admin_asset/js/chart-data.js"></script>
    <script src="admin_asset/js/easypiechart.js"></script>
    <script src="admin_asset/js/easypiechart-data.js"></script>
    <script src="admin_asset/js/bootstrap-datepicker.js"></script>
    <script>
        $('#calendar').datepicker({
        });
        !function ($) {
            $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
                $(this).find('em:first').toggleClass("glyphicon-minus");      
            }); 
            $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
        }(window.jQuery);

        $(window).on('resize', function () {
          if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
        })
        $(window).on('resize', function () {
          if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
        });
        function changeImg(input){
            //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
            if(input.files && input.files[0]){
                var reader = new FileReader();
                //Sự kiện file đã được load vào website
                reader.onload = function(e){
                    //Thay đổi đường dẫn ảnh
                    $('#avatar').attr('src',e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $(document).ready(function() {
            $('#avatar').click(function(){
                $('#img').click();
            });
        });
    </script>   
</body>

</html>
