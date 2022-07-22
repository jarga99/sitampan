<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('AdminLTE/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        {{-- hader navigasi --}}
        <li class="active">
            <a href="#">
                <i class="fa fa-arrows-alt text-teal"></i> <span>MAIN NAVIGASI</span>
              </a>
        </li>
        {{-- end navigasi --}}
        <li >
            <a href="#">
                <i class="fa fa-dashboard text-navy"></i> <span>Dashboard</span>
              </a>
        </li>
        <li class=" treeview">
          <a href="#">
            <i class="fa fa-th text-danger"></i> <span>Master Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu " style="display: none">
            <li><a href="#"><i class="fa fa-th-list"></i>Form Kecamatan</a></li>
            <li><a href="#"><i class="fa fa-th-list"></i>Form Desa</a></li>
            <li><a href="#"><i class="fa fa-th-list"></i>Form Tanaman</a></li>
            <li><a href="#"><i class="fa fa-th-list"></i>Form Panen</a></li>
          </ul>
        </li>

        {{-- Tanam --}}
        <li class="active">
            <a href="#">
                <i class="fa fa-tree text-success"></i> <span>TANAM</span>
              </a>
        </li>
        <li><a href="#"><i class="fa fa-arrow-down text-red"></i> <span>Tanam Pajale</span></a></li>
        <li><a href="#"><i class="fa fa-arrow-down text-yellow"></i> <span>Tanam Horti</span></a></li>
        <li><a href="#"><i class="fa fa-arrow-down text-aqua"></i> <span>Tanam Perkebunan</span></a></li>
        {{-- end Tanam --}}

        {{-- Panen --}}
        <li class="active">
            <a href="#">
                <i class="fa fa-shopping-cart text-warning"></i> <span>PANEN</span>
              </a>
        </li>
        <li><a href="#"><i class="fa fa-arrow-up text-red"></i> <span>Panen Pajale</span></a></li>
        <li><a href="#"><i class="fa fa-arrow-up text-yellow"></i> <span>Panen Horti</span></a></li>
        <li><a href="#"><i class="fa fa-arrow-up text-aqua"></i> <span>Panen Perkebunan</span></a></li>

        {{-- User & setting --}}
        <li class="active">
            <a href="#">
                <i class="fa fa-users text-primary"></i> <span>User</span>
              </a>
        </li>
        <li><a href="#"><i class="fa fa-user-plus text-aqua"></i> <span>User</span></a></li>
      </ul>


      {{-- end Panen --}}
    </section>
    <!-- /.sidebar -->
  </aside>
