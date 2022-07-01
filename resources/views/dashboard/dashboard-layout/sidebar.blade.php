<section class="">
    <div class="">
      <input type="checkbox" id="check">
      <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>
      </label>
      <div class="sidebar">
        <header>My Menu</header>
        <a class="linked {{Request::is('dashboard/blogs')? 'active' : ''}}" href="/dashboard/blogs" >
          <i class="fas fa-qrcode"></i>
          <span>Mypost</span>
        </a>
        <a class="linked {{Request::is('dashboard/category')? 'active' : ''}}" href="/dashboard/category">
          <i class="fas fa-stream"></i>
          <span>Category</span>
        </a>
      </div>
      </div>
    </section>