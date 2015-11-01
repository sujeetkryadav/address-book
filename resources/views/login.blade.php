@include('layout.header')
<!--Main Content-->
<div class="login-box">
  <div class="login-logo">
    <b>LOGIN</b></a>
</div><!-- /.login-logo -->
<div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
    @if(Session::get('err_msg')!='')
    <div class="alert alert-danger">{{ session('err_msg') }}</div>
    @endif
     @if(Session::get('msg')!='')
    <div class="alert alert-success">{{ session('msg') }}</div>
    @endif
    <form action="login" method="post">
      <div class="form-group has-feedback">
        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
        <input type="email" class="form-control" placeholder="Email" name="email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <div class="row" >
      
        <div class="col-xs-4" >
            <center>
               <button type="submit" class="btn btn-primary btn-block btn-flat" style="width:371%">Sign In</button> 
           </center>

           </div>
           
       </div><!-- /.col -->
   </div>
</form>
<a href="register" class="text-center">Register a new membership</a>
</div><!-- /.login-box-body -->
</div><!-- /.login-box -->

@include('layout.footer')
</body>
</html>
