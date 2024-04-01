<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com-->
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/index1.css">
    <meta charset="utf-8">
        <title>Rau chủ chất lượng cao </title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet"> 
        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
        <!-- Libraries Stylesheet -->
        <link href="././lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="././lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <!-- Customized Bootstrap Stylesheet -->
        <link href="././css/bootstrap.min.css" rel="stylesheet">
        <!-- Template Stylesheet -->
        <link href="././css/style.css" rel="stylesheet">
   </head>


<body>
<header>
@include('layout.header')

</header>
<br>
<br>
<br>
<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Đăng ký </h2>

              <form method="POST" action="{{ route('register') }}">
    @csrf

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg"  name="name"/>
                  <label class="form-label" for="form3Example1cg">Tên </label>
                </div>

                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3cg" class="form-control form-control-lg"  name="email"/>
                  <label class="form-label" for="form3Example3cg">Your Email</label>
                </div>

         

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example4cg" class="form-control form-control-lg" name="phone" />
                  <label class="form-label" for="form3Example4cg">phone</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example4cg" class="form-control form-control-lg" name="Address" />
                  <label class="form-label" for="form3Example4cg">Địa chỉ</label>
                </div>

                <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Upload CV</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input class="form-control form-control-lg" id="formFileLg" type="file" name="avata" />
                <div class="small text-muted mt-2">Upload your CV/Resume or any other relevant file. Max file
                  size 50 MB</div>

              </div>
            </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cg" class="form-control form-control-lg" name="password" />
                  <label class="form-label" for="form3Example4cg">Password</label>
                </div>

                <div class="d-flex justify-content-center">
                <button type="submit">Đăng ký</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="#!"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>
              @if (Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<footer>
@include('layout.footer')
</footer>
         
      </div>
    </div>
    </div>
  </div>
</body>
</html>
</body>
</html>