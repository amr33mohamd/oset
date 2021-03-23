<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="icon" href="/images/oset.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Oset</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<style>
@font-face {
  font-family: myFirstFont;
  src: url('/fonts/Lato-Black.ttf');
}
body{
  color: #000;
  font-family: myFirstFont;
  font-weight: 50;
      font-size: 15px;

}
footer {
  bottom: 0;
	width: 100%;
  position: relative;
  bottom: 0;
  height: 50px;
	background-color: gray;
	color: white;
	text-align: center;
}
.button{
  background-color: #5DA5DB;
  border-radius: 20px;
  color: #fff;
  border: solid #5DA5DB 1px;
  padding-left: 20px;
      padding-right: 20px;
      padding-top: 5px;
      padding-bottom: 5px;
}

.button2{
  background-color: #fff;
  border-radius: 20px;
  color: #fff;
  border: solid #5DA5DB 1px;
  padding-left: 20px;
      padding-right: 20px;
      padding-top: 5px;
      padding-bottom: 5px;
}
#snackbar {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: #333;
  color: #fff;
  text-align: center;
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 9999;
  left: 50%;
  bottom: 30px;
  font-size: 17px;
}

#snackbar.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
</style>
    <title></title>
    <!--Jquery-->

  </head>
  <body style="background-color:#efefef">
    <div id="snackbar">Thanks for your info</div>

  <script>
  function myFunction() {
    var x = document.getElementById("snackbar");
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 10000);
  }

  </script>
  @if($err == 1)
  <script>
  myFunction()
  </script>

  @endif

    <nav class="navbar navbar-expand-lg navbar-light " style="background-color:#efefef;height: 150px
">
      <div class="container">
  <a class="navbar-brand" href="#"><img src="/images/500px.png" style="height:70px"/></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
    <ul class="navbar-nav ">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#services">How to use ?</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutus">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal">Request</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactus">Call Us</a>
      </li>


      <li class="nav-item" style="margin-left:5px">
        <a class="nav-link" href="#contactus">عربي</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link button" style="color:#fff;margin-left:5px" href="#">Sign Up</a>
      </li> -->


    </ul>


  </div>
</div>
</nav>


<div class="container-fluid">


  <!-- start -->
  <div class="row d-flex " style="background:url('/images/Page 1 EN.png');background-size:cover;background-repeat: no-repeat;height:700px">
    <div class="container align-middle justify-content-center align-self-center">
    <div class="col-lg-6 col-sm-12 " >
      <h1 style="font-weight:100;color:#fff;font-size:60px" >Auth it with <span style="font-weight:100;color:#0e2722;font-size:60px">OSET </span></h1>

    </div>
    <div class="col-lg-4 col-sm-12 " >

    <h7 >an easy-to-use online platform helps suppliers to register the required Products and certificates of conformity easily quality authorization services registration in saber ... <span style="color:#fff">and more</span></h7>
</div>



</div>
  </div>




<!-- form -->


  <!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Request</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">


          <div class="row"  id="form">
            <div class="col-lg-12 col-sm-12">
              <form action="/add-designer" enctype="multipart/form-data" method="post">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Phone</label>
                  <input type="number" name="phone" class="form-control" id="exampleInputPassword1" required>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input type="email" name="email" class="form-control" id="exampleInputPassword1" required>
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>

                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Company</label>
                  <input type="text" class="form-control" name="company" id="exampleInputPassword1" required>
                </div>


                <div class="form-group">
          <label for="exampleFormControlFile1">File</label>
          <input type="file" class="form-control-file" name="file" id="exampleFormControlFile1" required>
          </div>
          <input type="hidden" value="en" name="lang"/>




            </div>




          </div>



                </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button class="btn " style="background-color:#2aa184;color:#efefef" type="submit">Apply Now</button>
        </form>

        </div>
      </div>
    </div>
  </div>


</div>
<div class="container">
<div  style="background:#efefef;border-radius:10px;margin-top:-50px;height:100px;padding:20px" class="col-lg-5 col-10 text-center">

  <h1>How to use #OSET</h1>
</div>
</div>
<div class="services" style="padding-top:100px">

  <div class="container">
  <div class="row">

    <div class="col-lg-6 col-12 row d-flex" style="padding:20px;cursor:pointer" data-toggle="modal" data-target="#exampleModal" >
      <div class="col-lg-2 col-4">
      <img src="/images/upload.png" style="height:70px;"/>

      </div>
      <p style="color:#00ae8d;font-size:40px;display:inline;padding:1px" class="col-1 text-center d-none d-sm-block">1</p>

      <div class="col-8 text-left">
        <p style="  margin: auto;padding: 10px;">Send your contact info and upload your files and your request details without signing up <a style="color:red">here</a></p>
      </div>
    </div>

    <div class="col-12 col-lg-6 row d-flex" style="padding:20px">
      <div class="col-lg-2 col-4">
      <img src="/images/money.png" style="height:70px;display:inline;"/>

      </div>
      <p style="color:#00ae8d;font-size:40px;display:inline;padding:1px" class="col-1 text-center d-none d-sm-block">2</p>

      <div class="col-8 text-left">
        <p style="  margin: auto;padding: 10px;">#OSET review your request to approve and set the documentation budget</p>
      </div>
    </div>
  </div>


  <div class="row ">

    <div class="col-12 col-lg-6 row d-flex" style="padding:20px">
      <div class="col-lg-2 col-4">
      <img src="/images/oset.png" style="height:70px;display:inline;"/>

      </div>
      <p style="color:#00ae8d;font-size:40px;display:inline;padding:1px" class="col-1 text-center d-none d-sm-block">3</p>

      <div class="col-8 text-left">
        <p style="  margin: auto;padding: 10px;">Your deposite the required amount online via credit cards or sadad</p>
      </div>
    </div>
    <div class="col-12 col-lg-6 row d-flex" style="padding:20px">
      <div class="col-lg-2 col-4">
      <img src="/images/review.png" style="height:70px;display:inline;"/>

      </div>
      <p style="color:#00ae8d;font-size:40px;display:inline;padding:1px" class="col-1 text-center d-none d-sm-block">4</p>

      <div class="col-8 text-left">
        <p style="  margin: auto;padding: 10px;">#OSET start working on your tasks and then send it to you copleted for 100%</p>
      </div>
    </div>
  </div>




</div>
</div>

<div class="container-fluid " style="background:#2aa184;height:200px;color:#fff;padding:50px;margin-top:150px">
  <div class="container ">
    <div class="row">
<div class="col-lg-3 col-6">
<i class="fab fa-facebook-f" style="color:#000; background-color:#fff;padding:9px;border-radius:100px;width:35px;text-align:center"></i>
<i class="fab fa-twitter" style="color:#000; background-color:#fff;padding:9px;border-radius:100px;width:35px;text-align:center"></i>
<i class="fab fa-linkedin-in" style="color:#000; background-color:#fff;padding:9px;border-radius:100px;width:35px;text-align:center"></i>

</div>

<div class="col-lg-3 col-6">
<p>Email</p>
<p>info@OSETsaudi.com</p>

</div>

<div class="col-lg-3 col-6">
<p>Whatsapp<p>
<p>002233445566</p>

</div>

<div class="col-lg-3 col-6">
<p>call us</p>
<p>002233445566<p>
</div>
</div>
</div>
</div>






<footer class="d-flex justify-content-center">
  <p class="d-flex justify-content-center align-self-center" style="  margin: auto;
  width: 50%;
  padding: 10px;
">Copyright &copy; 2020 Oset.</p>
</footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>
