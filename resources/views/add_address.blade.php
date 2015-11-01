 <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Add new address book
            <small>Preview</small>
          </h1>
        
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- SELECT2 EXAMPLE -->
          <div class="box box-default">
            <div class="box-header with-border">
              
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div><!-- /.box-header -->
            <form action="add" method="post">
            <div class="box-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                   <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                    <label>Title</label>
                   <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Title" name="title" required>
                  </div><!-- /.form-group -->
                  <div class="form-group">
                    <label>Person Name</label>
                   <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Person Name" name="name" required>
                  </div><!-- /.form-group -->
                </div><!-- /.col -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Address Line 1</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Address Linw 1" name="add1" required>
                  </div><!-- /.form-group -->
                  <div class="form-group">
                    <label>Address Line 2</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Address Line 2" name="add2" required>
                  </div><!-- /.form-group -->
                </div><!-- /.col -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Contact</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Contact" name="contact" required>
                  </div><!-- /.form-group -->
                  <div class="form-group">
                    <label>State</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="State" name="state" required>
                  </div><!-- /.form-group -->
                </div><!-- /.col -->
                <div class="col-md-6">
                 
                  <div class="form-group">
                    <label>District</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="District" name="district" required>
                  </div><!-- /.form-group -->
                   <div class="form-group">
                    <label>City</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="City" name="city" required>
                  </div><!-- /.form-group -->
                </div><!-- /.col -->
                 <div class="col-md-6">
                 
                  <div class="form-group">
                  
                    <input type="submit" name="save" value="Save" class="btn btn-primary btn-block form-control">
                  </div><!-- /.form-group -->
                  </div>
        </form>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.box-body -->
            <div class="box-footer">
            
            </div>
          </div><!-- /.box -->