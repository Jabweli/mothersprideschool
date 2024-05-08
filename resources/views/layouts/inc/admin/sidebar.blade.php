  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('uploads/profile/'.auth()->user()->image)}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Mother's Pride</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('uploads/profile/'.auth()->user()->image)}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{auth()->user()->name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{url('admin/dashboard')}}" class="nav-link {{ request()->is('admin/dashboard') ? 'active':''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/teachers')}}" class="nav-link {{ request()->is('admin/teachers') ? 'active':''}}">
              <i class="nav-icon fas fa-tags"></i>
              <p>
                Teachers
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/posts')}}" class="nav-link {{ request()->is('admin/posts') ? 'active':''}} {{ request()->is('admin/post/create') ? 'active':''}} {{ request()->is('admin/post/edit/{post_id}') ? 'active':''}}">
                <i class="nav-icon fas fa-edit"></i>
              <p>
                News Posts
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/events')}}" class="nav-link {{ request()->is('admin/events') ? 'active':''}} {{ request()->is('admin/event/create') ? 'active':''}}">
              <i class="nav-icon fas fa-shopping-bag"></i>
              <p>
                Events
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/contacts')}}" class="nav-link {{ request()->is('admin/contacts') ? 'active':''}}">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Contacts
              </p>
            </a>
          </li>
          {{-- <li class="nav-item">
            <a href="{{url('admin/newsletter')}}" class="nav-link {{ request()->is('admin/newsletter') ? 'active':''}}">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
                Newsletter
              </p>
            </a>
          </li> --}}
          
          <li class="nav-item">
            <a href="{{url('admin/gallery')}}" class="nav-link {{ request()->is('admin/gallery') ? 'active':''}}">
              <i class="nav-icon fas fa-ad"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/settings')}}" class="nav-link {{ request()->is('admin/settings') ? 'active':''}}">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Website Settings
              </p>
            </a>
          </li>

          <li class="nav-header">Your Account</li>
          <li class="nav-item">
            <a href="{{url('admin/profile')}}" class="nav-link {{ request()->is('admin/profile') ? 'active':''}}">
              <i class="nav-icon far fa-user"></i>
              <p>
                User List
              </p>
            </a>
          </li>
          <li class="nav-item">

            <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class="nav-icon fas fa-sign-out-alt"></i> {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>