<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>sign in</title>
</head>
<body>
	<div class="container text-center py-5">
          <h3 class="mb-0">Sign in</h3>
        </div>
<div class="container">

      <!--Grid row-->
      <div class="row d-flex justify-content-center">
        <div class="col-md-6">

          <!--Section: Content-->
          <section class="mb-5">
            <form action="" method="Post" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              @include('admin.errors.not')
              <div class="md-form md-outline">
                <label data-error="wrong" data-success="right" for="defaultForm-email1">Email</label>
                <input type="email" id="defaultForm-email1" class="form-control" name="email" value="{{old('email')}}">
              </div><br>
              <div class="md-form md-outline">
                 <label data-error="wrong" data-success="right" for="defaultForm-pass1">Mật khẩu</label>
                <input type="password" id="defaultForm-pass1" class="form-control" name="password">
              </div><br>
              <div class="text-center pb-2">
                <button type="submit" class="btn btn-primary mb-4 waves-effect waves-light">Đăng nhập</button>
                <p>Not a member? <a href="">Register</a></p>
              </div>

              {{csrf_field()}}
            </form>
          </section>
        </div>
      </div>
    </div>
</body>
</html>