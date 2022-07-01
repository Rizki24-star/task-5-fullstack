  {{-- Navbar   --}}
  <nav class="navbar navbar-expand-lg navbar-light bg-light border border-1 fixed-bottom">




    <div class="container navbar">
      <div class="row container">
        <div class="col-md-4 col-sm-4 container">
            <a href="/" class=" tx-long">
            <div class="container @if($title === "Home") tx-oke @endif   mt-1 text-center" style="text-align:left">
                <h5><i class="fas fa-home"></i></h5>
                <small>Home</small>
            </div>
             </a>
        </div>
        <div class="col-md-4 col-sm-4 container">
            <a href="/blogs" class=" tx-long">
            <div class="container  @if($title === "Blogs") tx-oke @endif  mt-1 text-center" style="text-align:left">
                <h5><i class="fab fa-blogger-b"></i></h5>
                <small>Blogs</small>
            </div>
            </a>
        </div>
        <div class="col-md-4 col-sm-4 container">
            <a href="/categories" class=" tx-long">
            <div class="container  @if($title === "Categories") tx-oke @endif  mt-1 text-center" style="text-align:left">
                <h5><i class="fas fa-list-alt"></i></h5>
                <small>Categories</small>
            </div>
            </a>
        </div>
      </div>
    </div>

    @auth
    <a href="/dashboard/blogs" class="dashboard-link text-center text-white">
      <ul class="link-dash container">
        <li style="font-size: 30px;"> <i class="fas fa-tasks"></i></li>
        <li> <small class="desc-dash">Dashboard</small></li>
      </ul>
    </a>
    @endauth
    
    </div>
  </nav>