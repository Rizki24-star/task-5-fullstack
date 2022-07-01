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
<body class="login-page">
    <div class="login">
        <div class="login-content center col-md-10">
            <div class="row container">
                <div class="col-md-5 container">
                    <h1 class="fw-bold jumbotron-title">Haii.. &#128075; Welcome to the <b class="tx-oke">Blogs</b> User Area</h1>
                    <h5 class="mt-4">
                        Sign in now and create your blogs
                    </h5>
                    <h6 class="mt-3">
                        Don't have an account? <a class="tx-main text-decoration-underline fw-bold" href="">Sign-up here</a>
                    </h6>
                    
                </div>
                <div class="col-md-5 container">
                    <div class="mt-3 login-form p-3 bg-white">
                        <div>
                            <h4 class="text-center fw-bold">Sign In</h4>
                        </div>
                        <div class="">
                            <form action="" method="post">
                                @csrf
                                <div class="text-center mt-4">
                                    <small class="text-center tx-oke">Let's create blogs now</small>
                                </div>
                                <div class="mt-4 container">
                                <input class="form-control" type="text" placeholder="Email">
                                <br>
                                <input class="form-control" type="text" placeholder="Password">
                                </div>
                                <div class="mt-5 py-4 text-center">
                                    <button type="submit" class="btn btn-auth rounded-pill btn-lg bg-main text-white">&nbsp;&nbsp;Sign in&nbsp;&nbsp;</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>  
      
      


<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>