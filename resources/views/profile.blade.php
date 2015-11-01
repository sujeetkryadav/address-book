<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            User Profile
          </h1>
          <ol class="breadcrumb">
           
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <div class="row">
            <div class="col-md-3">

              <!-- Profile Image -->
              <div class="box box-primary">
                <div class="box-body box-profile">
                @if(Auth::user()['image']!='')
                <img class="profile-user-img img-responsive img-circle" src="public/assets/prifile_pic/{{Auth::user()['image']}}" alt="User profile picture">
                @else
                  <img class="profile-user-img img-responsive img-circle" src="public/assets/dist/img/avatar.png" alt="User profile picture">
                 @endif
                  <h3 class="profile-username text-center">{{Auth::user()['firstname']}} {{Auth::user()['lastname']}}</h3>
                 

                  <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                      <b>Followers</b> <a class="pull-right">1,322</a>
                    </li>
                    <li class="list-group-item">
                      <b>Following</b> <a class="pull-right">543</a>
                    </li>
                    <li class="list-group-item">
                      <b>Friends</b> <a class="pull-right">13,287</a>
                    </li>
                  </ul>

                  <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- About Me Box -->
             
            </div><!-- /.col -->
            <div class="col-md-9">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                
                  <li class="active"><a href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
               
                  
                      

                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal" action="updateUser" method="post"  enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">First Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName" name="fname" placeholder="First Name" value="{{Auth::user()['firstname']}}" required>
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Last Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName" name="lname" placeholder="Last Name" value="{{Auth::user()['lastname']}}" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email" value="{{Auth::user()['email']}}" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Contact</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="contact" id="inputName" placeholder="contact" value="{{Auth::user()['contact']}}" required>
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Upload Image</label>
                        <div class="col-sm-10">
                          <input type="file" class="form-control" id="inputName" name="file" required>
                        </div>
                      </div>
                       <input type="hidden" name="_token" id="token" value="<?php echo csrf_token() ?>">
                     
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->