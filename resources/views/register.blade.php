
<div class="login-box">
  <div class="login-logo">
    <b>REGISTER</b></a>
</div><!-- /.login-logo -->
<div class="login-box-body">
    
    <form action="register" method="post">
      <div class="form-group ">
        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
         <input type="text" class="form-control" placeholder="First Name" name="fname" required>
         </div>
         <div class="form-group ">
        <input type="text" class="form-control" placeholder="Last Name" name="lname" required>
         </div>
         <div class="form-group ">
        <input type="text" class="form-control" placeholder="Contact" patternt="[0-9]{10}"name="contact" required>
         </div>
         <div class="form-group ">
            <input type="email" class="form-control" placeholder="Email" name="email" required>
             </div>
        
    
    <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <div class="row" >
      
        <div class="col-xs-4" >
            <center>
               <button type="submit" class="btn btn-primary btn-block btn-flat" style="width:371%">Register</button> 
           </center>
           
           </div>
           
       </div><!-- /.col -->
   </div>
</form>

</div><!-- /.login-box-body -->
</div><!-- /.login-box -->
