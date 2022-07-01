  {{-- Navbar   --}}
  <nav class="navbar navbar-expand-lg navbar-light bg-light border border-1 py-2">
    <div class="container navbar">
      <div class="row container">
        <div class="col-md-4 col-sm-4 container">
            <div class="container tx-oke mt-1" style="text-align:left">
                <h4><a href="#" class="tx-oke"  data-bs-toggle="modal" data-bs-target="#modalSearch"><i class="fas fa-search"></i></a></h4>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 container">
           <div class="container" style="text-align:center;">
            <div class="logo-area container border border-1">
                <div class="" style="margin-top: 50%;">
                   <img src="storage/image/logo.png" style="width: 100%;"alt="">
                </div>
            </div>
           </div>
        </div>
        <div class="col-md-4 col-sm-4 container">
            <div class="container mt-1 " style="text-align:right">
              
              @auth
                <div class="dropdown ms-auto" style="width: max-content;">
                  <a class="dropdown-toggle fw-bold tx-oke" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="far fa-user-circle"></i> {{Auth::user()->name}}
                  </a>
                
                  <ul class="dropdown-menu ml-4 text-center container" aria-labelledby="dropdownMenuLink">
                    <button class="btn btn-sm text-danger" data-bs-toggle="modal" data-bs-target="#logout"><i class="fas fa-sign-out-alt"></i> Sign out</button>
                  </ul>
                </div>
              @else
                <a class="tx-oke" href="/login"><h4><i class="far fa-user"></i></h4></a>
              @endauth

            </div>
        </div>
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

  <!-- Modal search-->
<div class="modal modal-search fade" id="modalSearch" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content bg-transparent" style="border: none; margin-top: 30%;">
      <div class="modal-header bg-tranparent" style="border: none; text-align center">
        <button type="button" style="color: white;" class="btn-close bg-white container text-white text-center" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="">
          <form action="/blogs/search/list" method="get" class="">
            <div class="d-flex">
            <input name="search" type="text" style="font-size: 32px; width:100%;" class="transparent-input bg-transparent text-white p-4" placeholder="Search something..." required>
            <button class="btn btn-search bg-transparent border-none" style="border: none; color: #2ECC71;"><i class="fas fa-search" style="font-size: 20px;"></i></button>
            </div>
          </form>
      </div>
    </div>
  </div>
</div>