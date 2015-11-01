 <?php 
    $obj=new App\Http\Controllers\AddressBookController;
        $info=$obj->getAddressBook();
       
?>
 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">All Address Boook</h3>
                </div><!-- /.box-header -->
                @if(Session::get('msg'))
                <div class="alert alert-success" align="center">{{session('msg')}}</div>
                @endif
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Sr.No</th>
                        <th>Title</th>
                        <th>Person Name</th>
                        <th>Contact</th>
                        <th>Address1</th>
                        <th>Address2</th>
                        <th>State</th>
                         <th>Diastrict</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach($info as $value)
                       <tr>
                         <td></td>
                         <td>{{$value->title}}</td>
                         <td>{{$value->person_name}}</td>
                         <td>{{$value->contact}}</td>
                         <td>{{$value->address1}}</td>
                         <td>{{$value->address2}}</td>
                         <td>{{$value->state}}</td>
                         <td>{{$value->district}}</td>
                         <td><div class="btn-group">
                          <a href="#"><button type="button" class="btn btn-danger" onclick="deleteBook({{$value->id}})">Delete</button></a>
                          <a href="#"><button type="button" class="btn btn-success" data-toggle="modal" onclick="openModal({{$value->id}})">Edit</button></a>

                          
                        </div></td>
                       </tr>
                     @endforeach
                      
                    </tbody>

                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
<script type="text/javascript">
  function deleteBook(id)
{
  if(confirm("Do you want to delete..?"))
  {
    window.location="delete?id="+id
  }
}
</script>
            
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
 <style>
      .example-modal .modal {
        position: relative;
        top: auto;
        bottom: auto;
        right: auto;
        left: auto;
        display: block;
        z-index: 1;
      }
      .example-modal .modal {
        background: transparent !important;
      }
    </style>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Address Book</h4>
      </div>
      <div class="modal-body">
     
         
        <form role="form" action="update" method="post">
        <input type="hidden" name="id" id="id">
        <input type="hidden" name="_token" id="token" value="<?php echo csrf_token() ?>">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Name</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                    </div>
                     <div class="form-group">
                      <label for="exampleInputPassword1">Contact</label>
                      <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Address 1</label>
                      <input type="text" class="form-control" id="add1" name="add1" placeholder="Address 1">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Address 2</label>
                      <input type="text" class="form-control" id="add2" name="add2" placeholder="Address 2">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">State</label>
                      <input type="text" class="form-control" id="state" name="state" placeholder="Satet">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">District</label>
                      <input type="text" class="form-control" id="dist" name="district" placeholder="District">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">City</label>
                      <input type="text" class="form-control" id="city" name="city" placeholder="City">
                    </div>
                   
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                
      </div>
     
    </div>
  </div>
</div>
<script type="text/javascript">

  function openModal(id)
  {
     var csrf_token=$("#token").val();
     $.ajax({
        url:'getBooks',
        type:'POST',
        data:{"id":id,"_token":csrf_token},
        success:function(res)
        {
           $("#id").val(res.id);
           $("#title").val(res.title);
           $("#name").val(res.person_name);
           $("#contact").val(res.contact);
           $("#add1").val(res.address1);
           $("#add2").val(res.address2);
           $("#state").val(res.state);
           $("#dist").val(res.district);
           $("#city").val(res.city);
           $("#myModal").modal();
        }
     })
    
  }
</script>