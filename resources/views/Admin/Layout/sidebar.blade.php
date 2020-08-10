 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

  <!-- Sidebar -->
  <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="" class="img-circle elevation-2" alt="">
      </div>
      <div class="info">
          <a href="#" class="d-block">{{session('email')}}</a>
      </div>
  </div>

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->

        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <p>
                    Danh mục
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('listcategory')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách</p>
                </a>
             </li>
             <li class="nav-item">
                <a href="{{route('addcategory')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                        <p>Thêm mới danh mục</p>
                </a>
            </li>
            </ul>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                  <p>
                    Sản phẩm
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('listproduct') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách</p>
              </a>
            </li>
            <li class="nav-item">
                <a href="{{route('addproduct')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm mới sản phẩm</p>
              </a>
            </li>

            </ul>

        </li>
         <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                  <p>
                    Tin tức - Sự kiện
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('listblogs')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách tin tức</p>
              </a>
            </li>
            <li class="nav-item">
                <a href="{{route('addblog')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm tin tức</p>
              </a>
            </li>

            </ul>

        </li>
         <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                  <p>
                    Admin
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('addadmin')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm mới</p>
              </a>
            </li>
              <li class="nav-item">
                <a href="{{route('listadmin')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách Admin</p>
              </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Vai trò</p>
              </a>
            </li>

            </ul>

        </li>
         <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                  <p>
                    Banner
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('listBanner')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách banner</p>
              </a>
            </li>
            <li class="nav-item">
                <a href="{{route('addbanner')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm mới banner</p>
              </a>
            </li>
            </ul>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                  <p>
                    Phương thức thanh toán
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('listaddmethodpay')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách phương thức</p>
              </a>
            </li>
            <li class="nav-item">
                <a href="{{route('getaddmethodpay')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm mới phương thức</p>
              </a>
            </li>
            </ul>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                  <p>
                    Phương thức giao hàng
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('listaddmethodship')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách</p>
              </a>
            </li>
            <li class="nav-item">
                <a href="{{route('getaddmethodship')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm mới </p>
              </a>
            </li>
            </ul>
        </li>
         <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                  <p>
                    Địa chỉ
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('listcontact')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Địa chỉ</p>
              </a>
            </li>
            <li class="nav-item">
                <a href="{{route('contact')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm địa chỉ</p>
              </a>
            </li>
            </ul>
        </li>
         <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                  <p>
                    Bình luận
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bình luận bài viết</p>
              </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bình luận sản phẩm</p>
              </a>
            </li>
            </ul>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                  <p>
                    Đơn hàng
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách đơn hàng</p>
              </a>
            </li>

            </ul>
        </li>
</ul>
</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>
