<nav class="navbar navbar-light navbar-expand bg-light nav-dashboard">
    <div class="container">
      <a href="/" class="navbar-brand">
        <di class="d-flex">
            <div class="" style="max-width: 40px;">
                <img src="{{asset('storage/image/logo.png')}}" style="width: 100%;"alt="">
             </div>&nbsp;
            <h1 class="fw-bold tx-main">Blogs</h1>
        </di></a>
        <div class="">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle fw-bold" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="far fa-user-circle"></i> {{Auth::user()->name}}
                  </a>
                  <ul class="dropdown-menu dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                    <li class="container">
                      <button class="btn btn-sm text-danger" data-bs-toggle="modal" data-bs-target="#logout"><i class="fas fa-sign-out-alt"></i> Sign out</button>
                    </li>
                  </ul>
                </li>
            </ul>
        </div>
    </div>
  </nav>

  <!-- Modal logout-->
  <div class="modal fade" id="logout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-body text-center">
          <h4 class="fw-bold mt-3"> Are you sure want to Sign out?</h4>
       </div>
       <div class="d-flex justify-content-center py-4 mb-2">
          <form action="{{route('logout')}}" method="post" class="">@csrf<button type="submit" class="btn bg-main text-white"><i class="fas fa-sign-out-alt"></i> Yes</button></form>&nbsp;
         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
       </div>
     </div>
   </div>
 </div>