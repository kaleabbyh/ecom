<div class="box"><!-- box Begin -->
    
  <div class="box-header"><!-- box-header Begin -->
      
      <center><!-- center Begin -->
          
          <h1> Login </h1>
          
          
          
          <p class="text-muted"> ADMIN PANEL </p>
          
      </center><!-- center Finish -->
      
  </div><!-- box-header Finish -->
   
  <form method="post" action="checkout.php"><!-- form Begin -->
      
      <div class="form-group"><!-- form-group Begin -->
          
          <label> Email </label>
          
          <input name="a_email" type="text" class="form-control" required>
          
      </div><!-- form-group Finish -->
      
       <div class="form-group"><!-- form-group Begin -->
          
          <label> Password </label>
          
          <input name="a_pass" type="password" class="form-control" required>
          
      </div><!-- form-group Finish -->
      
      <div class="text-center"><!-- text-center Begin -->
          
          <button name="login" value="Login" class="btn btn-primary">
              
              <i class="fa fa-sign-in"></i> Login
              
          </button>
          
      </div><!-- text-center Finish -->     
      
  </form><!-- form Finish -->
   
  <center><!-- center Begin -->
      
     <a href="#">
         
         <h5> Dont have account..? only for registered admins</h5>
         
     </a> 
      
  </center><!-- center Finish -->
    
</div><!-- box Finish -->


<?php 

if(isset($_POST['login'])){
    
    $admin_email = $_POST['a_email'];
    
    $admin_pass = $_POST['a_pass'];
    
    $select_admin = "select * from admin where admin_email='$admin_email' AND admin_pass='$admin_pass'";
    
    $run_admin = mysqli_query($con,$select_admin);
    
    
    $check_admin = mysqli_num_rows($run_admin);
    
   
    
    if($check_admin==0){
        
        echo "<script>alert('Your email or password is wrong')</script>";
        
    
        
    }
    
    if($check_customer > 0){
        
        $_SESSION['admin_email']=$admin_email;
        
       echo "<script>alert('You are Logged in')</script>"; 
        
       echo "<script>window.open('insert_product.php')</script>";
        
    }
    }
    

?>