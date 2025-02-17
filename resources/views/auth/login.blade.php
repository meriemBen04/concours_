{{-- <!doctype html>
<html lang="en">
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="">
     <meta name="author" content="">
     <link rel="icon" href="{{ asset('assets\images\vector.png') }}" type="image/x-icon"/>
     <link rel="shortcut icon" href="{{ asset('assets\images\vector.png') }}" type="image/x-icon"/>
     <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
     <link href="../assets/css/font-awesome.min.css" rel="stylesheet">
     <link href="../assets/css/style.css" rel="stylesheet">
     <head>
        <!-- Design by foolishdeveloper.com -->
          <title>Connexion</title>
       
          <link rel="preconnect" href="https://fonts.gstatic.com">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
          <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
          <!--Stylesheet-->
          <style media="screen">
            *,
      *:before,
      *:after{
          padding: 0;
          margin: 0;
          box-sizing: border-box;
      }
      body{
          background-color: #080710;
      }
      .background{
          width: 430px;
          height: 520px;
          position: absolute;
          transform: translate(-50%,-50%);
          left: 50%;
          top: 50%;
      }
      .background .shape{
          height: 200px;
          width: 200px;
          position: absolute;
          border-radius: 50%;
      }
      .shape:first-child{
          background: linear-gradient(
              #1845ad,
              #23a2f6
          );
          left: -80px;
          top: -80px;
      }
      .shape:last-child{
          background: linear-gradient(
              to right,
              #ff512f,
              #f09819
          );
          right: -30px;
          bottom: -80px;
      }
      form{
          height: 520px;
          width: 400px;
          background-color: rgba(255,255,255,0.13);
          position: absolute;
          transform: translate(-50%,-50%);
          top: 50%;
          left: 50%;
          border-radius: 10px;
          backdrop-filter: blur(10px);
          border: 2px solid rgba(255,255,255,0.1);
          box-shadow: 0 0 40px rgba(8,7,16,0.6);
          padding: 50px 35px;
      }
      form *{
          font-family: 'Poppins',sans-serif;
          color: #ffffff;
          letter-spacing: 0.5px;
          outline: none;
          border: none;
      }
      form h3{
          font-size: 32px;
          font-weight: 500;
          line-height: 42px;
          text-align: center;
      }
      
      label{
          display: block;
          margin-top: 30px;
          font-size: 16px;
          font-weight: 500;
      }
      input{
          display: block;
          height: 50px;
          width: 100%;
          background-color: rgba(255,255,255,0.07);
          border-radius: 3px;
          padding: 0 10px;
          margin-top: 8px;
          font-size: 14px;
          font-weight: 300;
      }
      ::placeholder{
          color: #e5e5e5;
      }
      button{
          margin-top: 50px;
          width: 100%;
          background-color: #ffffff;
          color: #080710;
          padding: 15px 0;
          font-size: 18px;
          font-weight: 600;
          border-radius: 5px;
          cursor: pointer;
      }
      .social{
        margin-top: 30px;
        display: flex;
      }
      .social div{
        background: red;
        width: 150px;
        border-radius: 3px;
        padding: 5px 10px 10px 5px;
        background-color: rgba(255,255,255,0.27);
        color: #eaf0fb;
        text-align: center;
      }
      .social div:hover{
        background-color: rgba(255,255,255,0.47);
      }
      .social .fb{
        margin-left: 25px;
      }
      .social i{
        margin-right: 4px;
      }
  </style>
    <title>Connexion</title>
</head>
  <body>

    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <form method="POST" action="{{ route('login.submit') }}">

       @csrf
       <div class="form-group">
            <label for="email">Username</label>

            <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" >
                <strong style="color: red;">{{ $message }}</strong>
            </span>
            @enderror

       </div>

       <div class="form-group">
         <label for="password">Password</label>
         <input id="password" type="password"  class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        @error('password')
                <span class="invalid-feedback"  >
                    <strong style="color: red;" >{{ $message }}</strong>
                </span>
        @enderror

       <i id="togglePassword" class="fa fa-fw fa-eye toggle-password field-icon"></i>

       </div>

       <div class="form-group">
           <button class="btn btn-primary">
            <span>Connexion</span>
           </button>
      </div>

    </form>

</div>

</div>
   </div>
  </div>
  </div>
 </section>

 <script>
    const passwordInput = document.getElementById('password');
    const togglePassword = document.getElementById('togglePassword');

    togglePassword.addEventListener('click', function() {
      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        togglePassword.classList.add('fa-eye-slash');
      } else {
        passwordInput.type = 'password';
        togglePassword.classList.remove('fa-eye-slash');
      }
    });
  </script>

  </body>
</html> --}}
<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<!-- Meta data -->
		<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

		<!--favicon -->
		<link rel="icon" href={{ asset("solic_pro/assets/images/brand/favicon.ico")}} type="image/x-icon" >

		<!-- TITLE -->
		<title>login page</title>

		<!-- BOOTSTRAP CSS -->
		<link id="style" href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- STYLES CSS -->
		<link href={{ asset("solic_pro/assets/css/style.css")}} rel="stylesheet" >

		<!-- PLUGIN CSS -->
		<link href={{ asset("solic_pro/assets/css/plugin.css")}} rel="stylesheet">

		<!--- FONT-ICONS CSS -->
		<link href={{ asset("solic_pro/assets/css/icons.css")}} rel="stylesheet" >

		<!-- Switcher css -->
		<link href={{ asset("solic_pro/assets/switcher/css/switcher.css")}} rel="stylesheet" id="switcher-css" type="text/css" media="all" >
		<link href={{ asset("solic_pro/assets/switcher/demo.css")}} rel="stylesheet" >
    <style>
    

/* Message d'erreur avec texte rouge et petit */
.input100.is-invalid {
    border: 1px solid #dc3545;
}
.password-container {
    position: relative;
    display: flex;
    align-items: center;
    width: 100%;
}

.password-container input {
    width: 100%;
    padding-right: 40px; /* Assurez-vous que l'icône ne couvre pas le texte */
}

.field-icon {
    position: absolute ;
    right: 10px; /* Positionne l'icône à droite */
    top: 70%;
    transform: translateY(-50%);
    cursor: pointer;
    color: #666;
    
}

.field-icon:hover {
    color: #333;
}


    </style>

	</head>
  <body class="">

		<!-- BACKGROUND-IMAGE -->
		<div class="login-img">

			<!-- GLOABAL LOADER -->
			<div id="global-loader">
				<img src={{ asset("solic_pro/assets/images/svgs/loader.svg")}} class="loader-img" alt="Loader">
			</div>

			<!-- START PAGE -->
			<div class="page">
				<div class="">
				    <!-- CONTAINER OPEN -->
					<div class="col col-login mx-auto">
						<div class="main-logo text-center">
							<img src={{ asset("solic_pro/assets/images/brand/light-logo.png" )}}class="header-brand-img" alt="">
							<img src={{ asset("solic_pro/assets/images/brand/dark-logo.png")}} class="header-brand-img theme-logos" alt="">
						</div>
					</div>
					<div class="container-login100">
						<div class="wrap-login100 p-6">
							<form class="login100-form validate-form" method="POST" action="{{ route('login.submit') }}">
                @csrf
                
								<span class="login100-form-title">
									Login
								</span>
                <p class="mb-4 text-muted op-7 fw-normal text-center">Welcome back!</p>
								<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
									<div class="form-group">
                    <label class="form-label text-default" for="email">Email</label>
                    <input id="email" class="input100  @error('email') is-invalid @enderror" 
                           type="email" name="email" placeholder="Email"  
                           value="{{ old('email') }}" required autocomplete="email" autofocus>

                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="ri-mail-send-line" aria-hidden="true"></i>
                    </span>
                </div>
                @error('email')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                @enderror
                  
								</div>
								<div class="wrap-input100 validate-input" data-validate="Password is required">
                  <div class="form-group">
                      <label class="form-label text-default" for="password">Password</label>
                      <input id="password" class="input100 @error('password') is-invalid @enderror" 
                              type="password" name="password" placeholder="Password">
                      <span class="focus-input100">

                      </span>
                      <span class="symbol-input100">
                          <i class="ri-lock-line" aria-hidden="true"></i>

                      </span>
                      <i id="togglePassword" class="field-icon fa fa-fw fa-eye toggle-password "></i>


                      
              
                      @error('password')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror
                  </div>
              
              
								</div>
								<div class="text-end pt-1">
									<p class="mb-0"><a href="" class="float-end text-danger">Forgot Password?</a></p>
								</div>
                <label class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="remeber_me" >
                  <span class="custom-control-label">Remeber me</span>
              </label>

								<div class="container-login100-form-btn">
                  <button class="btn btn-lg btn-primary">
										Login
									</button>
								</div>
								<div class="text-center pt-3">
									<p class="text-dark mb-0">Not a member? <a href="" class="text-primary ms-1">Sign UP now</a></p>
								</div>
								<div class=" flex-c-m text-center mt-3">
								    <p>Or</p>
									<div class="btn-list">
										<button type="button" class="btn btn-icon btn-primary-light"><i class="fa fa-facebook"></i></button>
										<button type="button" class="btn btn-icon btn-secondary-light"><i class="fa fa-twitter"></i></button>
										<button type="button" class="btn btn-icon btn-orange-light"><i class="fa fa-google"></i></button>
										<button type="button" class="btn btn-icon btn-danger-light"><i class="fa fa-youtube"></i></button>
									</div>
								</div>
							</form>
						</div>
					</div>
					<!-- CONTAINER CLOSED -->
				</div>
			</div>
			<!-- END PAGE -->
		</div>
		<!-- BACKGROUND-IMAGE CLOSED -->

		<!-- JQUERY SCRIPTS -->
		<script src={{ asset("solic_pro/assets/js/vendors/jquery.min.js")}}></script>

		<!-- BOOTSTRAP SCRIPTS -->
		<script src={{ asset("solic_pro/assets/plugins/bootstrap/js/popper.min.js")}}></script>
    	<script src={{ asset("solic_pro/assets/plugins/bootstrap/js/bootstrap.min.js")}}></script>

		<!-- CUSTOM-SWICTHER JS -->
		<script src={{ asset("solic_pro/assets/js/custom-switcher.js")}}></script>

		<!-- SWITCHER JS -->
		<script src={{ asset("solic_pro/assets/switcher/js/switcher.js")}}></script>

		<!-- CUSTOM JS-->
		<script src={{ asset("solic_pro/assets/js/custom.js")}}></script>

	</body>
  <script>
    const passwordInput = document.getElementById('password');
    const togglePassword = document.getElementById('togglePassword');

    togglePassword.addEventListener('click', function() {
      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        togglePassword.classList.add('fa-eye-slash');
      } else {
        passwordInput.type = 'password';
        togglePassword.classList.remove('fa-eye-slash');
      }
    });
  </script>
  <script src={{asset("solic_pro/assets/plugins/notify/js/sample.js")}}></script> <!-- Replace with actual path -->

  <script>
      $(document).ready(function () {
          @if ($errors->has('email') || $errors->has('password'))
              $.growl.error({
                  message: "Invalid email or password. Please try again."
              });
          @endif
      });
  </script>
</html>
