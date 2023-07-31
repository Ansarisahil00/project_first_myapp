<div class="row my-5 d-flex justify-content-center align-items-center">
  <div class="col-6 my-5 myform">
    <form id="login_form" action="" method="post">
      <div class="row">
      <div class="col-lg-12">
          <h2><em>Login</em></h2>
      </div>
      <div class="col-lg-12 my-3">
          <input type="text" class="form-control" name="username" placeholder="Your Name..." autocomplete="on" required>
      </div>
      <div class="col-lg-12 my-3">
          <input type="password" class="form-control"  name="password" placeholder="Password" autocomplete="on" required>
      </div>                   
      <div class="col-lg-12 text-end">
        <div class="row">
        <div class="col-lg-6 text-start">
          <a href="<?php echo base_url()?>register">
        Register Now</a>        
      </div>
      <div class="col-lg-6 text-end">
          <button type="submit"  class="btn btn-danger" >Login</button>
        </fieldset>
      </div>
        </div>
      </div>

      
    </div>
  </form>
</div>
</div>