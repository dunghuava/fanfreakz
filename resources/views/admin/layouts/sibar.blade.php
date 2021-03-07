<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
      <div class="clearfix"></div>
      <!-- menu profile quick info -->
      <div class="profile clearfix">
        <div class="profile_pic">
          <img src="{{asset('public/images/img.jpg')}}" alt="..." class="img-circle profile_img">
        </div>
        <div class="profile_info">
          <span>Online</span>
          <h2>{{Auth::user()->fullname}}</h2>
        </div>
      </div>
      <!-- /menu profile quick info -->
      <br>
      <!-- sidebar menu -->
      <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
          <h3>Danh mục hệ thống</h3>
          <ul class="nav side-menu">
            {{-- sysmenu --}}
            <li>
              <a><i class="fa fa-home"></i>&nbsp;Trang chủ</a>
            </li>
            <li>
              <a><i class="fa fa-database"></i>&nbsp;Danh mục
                  <span class="fa fa-chevron-down"></span>
              </a>
                <ul class="nav child_menu">
                    <li><a href="">Submenu</a></li>
                    <li><a href="">Submenu</a></li>
                    <li><a href="">Submenu</a></li>
                </ul>
            </li>
              <li>
                <a><i class="fa fa-database"></i>&nbsp;Sản phẩm
                    <span class="fa fa-chevron-down"></span>
                </a>
                  <ul class="nav child_menu">
                      <li><a href="">Submenu</a></li>
                      <li><a href="">Submenu</a></li>
                      <li><a href="">Submenu</a></li>
                  </ul>
              </li>
              <li>
                <a><i class="fa fa-anchor"></i>&nbsp;Mở rộng
                    <span class="fa fa-chevron-down"></span>
                </a>
                  <ul class="nav child_menu">
                      <li><a href="">Submenu</a></li>
                      <li><a href="">Submenu</a></li>
                      <li><a href="">Submenu</a></li>
                  </ul>
              </li>
              <li>
                <a><i class="fa fa-users"></i>&nbsp;Tài khoản
                    <span class="fa fa-chevron-down"></span>
                </a>
                  <ul class="nav child_menu">
                      <li><a href="">Submenu</a></li>
                      <li><a href="">Submenu</a></li>
                      <li><a href="">Submenu</a></li>
                  </ul>
              </li>
              <li>
                <a><i class="fa fa-cogs"></i>&nbsp;Cài đặt
                    <span class="fa fa-chevron-down"></span>
                </a>
                  <ul class="nav child_menu">
                      <li><a href="">Submenu</a></li>
                      <li><a href="">Submenu</a></li>
                      <li><a href="">Submenu</a></li>
                  </ul>
              </li>
              <li>
                <a href="admin/logout"><i class="fa fa-sign-out"></i>&nbsp;Thoát</a>
              </li>
            {{-- sysmenu --}}
          </ul>
        </div>
      </div>
      <!-- /sidebar menu -->
      <!-- /menu footer buttons -->
      <div class="sidebar-footer hidden-small">
        <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Settings">
          <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="" data-original-title="FullScreen">
          <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Lock">
          <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Logout">
          <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
        </a>
      </div>
      <!-- /menu footer buttons -->
    </div>
  </div>