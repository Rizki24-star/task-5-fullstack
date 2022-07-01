<!doctype html>
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
    <link rel="stylesheet" type="text/css" href="{{asset('/css/trix.css')}}">
    <script rel="stylesheet" type="text/javascript" src="{{asset('/js/trix.js')}}"></script>
    <style>
      trix-toolbar [data-trix-button-group = "file-tools"] {
        display: none;
      }
    </style>
    <title>BLOG | {{$title}}</title>
  </head>
  <body>

    @include('dashboard.dashboard-layout.navbar')

    {{-- toast --}}
    @if (session()->has('success'))
    <div class="toast-container position-fixed top-0 end-0 p-3">
      <div id="liveToast" class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header text-white bg-oke">
          <i class="fas fa-check-circle"></i>
          <strong class="me-auto">&nbsp;Success</strong>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body tx-main fw-bold d-flex">
          <h5>&#128522;</h5>&nbsp;<h6 class="fw-bold">{{session('success')}}</h6>
        </div>
      </div>
    </div>
    @endif
    {{-- end toast --}}

    @include('dashboard.dashboard-layout.sidebar')

        <div class="main-content">
            @yield('container')
        </div>
        
    @include('dashboard.dashboard-layout.bottomnav')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </body>
</html>