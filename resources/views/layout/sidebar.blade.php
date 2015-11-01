<header class="main-header">
        <!-- Logo -->
        <a href="homepage" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>LT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
             
              <!-- Notifications: style can be found in dropdown.less -->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                   
                @if(Auth::user()['image']!='')
                <img class="user-image" src="public/assets/prifile_pic/{{Auth::user()['image']}}" alt="User profile picture">
                @else
                  <img class="profile-user-img img-responsive img-circle" src="public/assets/dist/img/avatar.png" alt="User profile picture">
                 @endif
                  <span class="hidden-xs">{{Auth::user()['firstname']}} {{Auth::user()['lastname']}}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <div class="box-body box-profile">
                @if(Auth::user()['image']!='')
                <img class="profile-user-img img-responsive img-circle" src="public/assets/prifile_pic/{{Auth::user()['image']}}" alt="User profile picture">
                @else
                  <img class="profile-user-img img-responsive img-circle" src="public/assets/dist/img/avatar.png" alt="User profile picture">
                 @endif
                    <p>
                      
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                 
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="profile" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="auth/logout" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
             
                @if(Auth::user()['image']!='')
                <img class="profile-user-img img-responsive img-circle" src="public/assets/prifile_pic/{{Auth::user()['image']}}" alt="User profile picture">
                @else
                  <img class="profile-user-img img-responsive img-circle" src="public/assets/dist/img/avatar.png" alt="User profile picture">
                 @endif
            </div>
            <div class="pull-left info">
              <p>{{Auth::user()['firstname']}} {{Auth::user()['lastname']}}</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class=" treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Address Book</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="add"><i class="fa fa-circle-o"></i>Add</a></li>
                <li><a href="modify"><i class="fa fa-circle-o"></i>Modify</a></li>
              </ul>
            </li>
           
            <li><a href="profile"><i class="fa fa-book"></i> <span>Profile</span></a></li>
            
        </section>
        <!-- /.sidebar -->
      </aside>
