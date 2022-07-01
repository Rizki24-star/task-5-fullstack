<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     {{-- font awesome --}}
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="/css/style.css"/>
    <title>Document</title>
</head>
<body class="register-page">
    <div class="login mb-4">
        <div class="register-content center col-md-10">
            <div class="row container">
                <div class="col-md-5 container">

                    <div class="mt-3 login-form p-3 bg-white">
                        <div>
                            <h4 class="text-center fw-bold">Sign Up</h4>
                        </div>
                        <div class="">
                            <form method="post" action="{{ route('register') }}">
                                @csrf
                                <div class="text-center mt-4">
                                    <small class="text-center tx-main">Let's create blogs now</small>
                                </div>
                                <div class="mt-4 container">
                                <input name="name" type="text"  class="form-control  @error('name') is-invalid @enderror" value="{{ old('name') }}"  placeholder="Name">
                                @error('name')
                                <div class="text-danger" role="alert">
                                    <small><i class="fas fa-exclamation-circle"></i> {{ $message }}</small>
                                </div>
                                @enderror
                                <br>
                                <input name="email" type="text"  class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email">
                                @error('email')
                                <div class="text-danger" role="alert">
                                    <small><i class="fas fa-exclamation-circle"></i> {{ $message }}</small>
                                </div>
                                @enderror
                                <br>
                                <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" placeholder="Password">
                                @error('password')
                                <div class="text-danger" role="alert">
                                    <small><i class="fas fa-exclamation-circle"></i> {{ $message }}</small>
                                </div>
                                @enderror
                                <br>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmation password">
                                @error('password_confirmation')
                                <div class="text-danger" role="alert">
                                    <small><i class="fas fa-exclamation-circle"></i> {{ $message }}</small>
                                </div>
                                @enderror
                                </div>
                                <div class="mt-5 py-4 text-center">
                                    <button type="submit" class="btn btn-auth rounded-pill btn-lg bg-black text-white">&nbsp;&nbsp;Sign up&nbsp;&nbsp;</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-5 container">
                   
                    <h1 class="fw-bold jumbotron-title tx-main">Haii.. &#128075;Join us and start your <b class="tx-sun">Blogs</b> now!!</h1>
                    <h5 class="mt-4">
                       Makes your blogs carrer starts here!
                    </h5>
                    <h6 class="mt-3">
                        Already have an account?? <a class="tx-oke text-decoration-underline fw-bold" href="/login">Sign-in here</a>
                    </h6>

                </div>
            </div>
        </div>
      </div>  

      {{-- <div>
        <br><br>
      </div> --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>