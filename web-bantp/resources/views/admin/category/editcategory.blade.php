<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Edit Category</title>
<base href="{{asset('')}}">
<link href="admin_asset/css/bootstrap.min.css" rel="stylesheet">
<link href="admin_asset/css/datepicker3.css" rel="stylesheet">
<link href="admin_asset/css/styles.css" rel="stylesheet">
<script src="admin_asset/js/lumino.glyphs.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#"> Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li role="presentation" class="divider"></li>
			<li><a href="{{asset('admin/layout/index')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Trang chủ</a></li>
			<li><a href="{{asset('admin/product/product')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Sản phẩm</a></li>
			<li class="active"><a href="#"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Danh mục</a></li>
			<li><a href="{{asset('admin/user/user')}}"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Tài khoản</a></li>
			<li><a href="{{asset('admin/slide/slide')}}"><svg class="glyph stroked landscape"><use xlink:href="#stroked-landscape"/></use></svg>Slide</a></li>
			<li role="presentation" class="divider"></li>
		</ul>
		
	</div><!--/.sidebar-->
		
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
	<script src="admin_asset/js/jquery-1.11.1.min.js"></script>
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
		})
	</script>	
</body>

</html>