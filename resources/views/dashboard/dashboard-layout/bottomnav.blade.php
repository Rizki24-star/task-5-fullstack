  {{-- Navbar   --}}
  <nav class="navbar navbar-expand-lg navbar-light bg-main border border-1 fixed-bottom dashboard-bottom-nav">
    <div class="container navbar">
      <div class="d-flex container">
        <div class="w-50 ">
            <a href="/mypost" class="tx-oke">
            <div class="container  @if($title === "My Post") tx-oke @endif  mt-1 text-center" style="text-align:left">
                <h5><i class="fas fa-book"></i></h5>
                <small>MyPost</small>
            </div>
            </a>
        </div>
        <div class="w-50 ">
            <a href="/categories" class="text-white">
            <div class="container  @if($title === "Categories") tx-oke @endif  mt-1 text-center" style="text-align:left">
                <h5><i class="fas fa-list-alt"></i></h5>
                <small>Categories</small>
            </div>
            </a>
        </div>
      </div>
    </div>
  </nav>