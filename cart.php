<?php 

    $active='Cart';
    include("includes/header.php");

?>
   
   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       Cart
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div id="cart" class="col-md-9"><!-- col-md-9 Begin -->
               
               <div class="box"><!-- box Begin -->
                   
                   <form action="cart.php" method="post" enctype="multipart/form-data"><!-- form Begin -->
                       
                       <h1>Demo Shopping Cart</h1>
                       <p class="text-muted">You currently have 3 item(s) in your cart</p>
                       
                       <div class="table-responsive"><!-- table-responsive Begin -->
                           
                           <table class="table"><!-- table Begin -->
                               
                               <thead><!-- thead Begin -->
                                   
                                   <tr><!-- tr Begin -->
                                       
                                       <th colspan="2">Product</th>
                                       <th>Quantity</th>
                                       <th>Unit Price</th>
                                       <th>Size</th>
                                       <th colspan="1">Delete</th>
                                       <th colspan="2">Sub-Total</th>
                                       
                                   </tr><!-- tr Finish -->
                                   
                               </thead><!-- thead Finish -->
                               
                               <tbody><!-- tbody Begin -->
                                   
                                   <tr><!-- tr Begin -->
                                       
                                       <td>
                                           
                                           <img class="img-responsive" src="admin_area/product_images/33a.jpg" alt="Product 3a">
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           <a href="#">nice women dress</a>
                                           
                                       </td>
                                       
                                       <td>
                                          
                                           2
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           500birr
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           Large
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           <input type="checkbox" name="remove[]">
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           300birr
                                           
                                       </td>
                                       
                                   </tr><!-- tr Finish -->
                                   
                               </tbody><!-- tbody Finish -->
                               
                               <tbody><!-- tbody Begin -->
                                   
                                   <tr><!-- tr Begin -->
                                       
                                       <td>
                                           
                                           <img class="img-responsive" src="admin_area/product_images/11.jpg" alt="Product 3a">
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           <a href="#">Woman dress </a>
                                           
                                       </td>
                                       
                                       <td>
                                          
                                           2
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           500birr
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           Large
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           <input type="checkbox" name="remove[]">
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           410birr
                                           
                                       </td>
                                       
                                   </tr><!-- tr Finish -->
                                   
                               </tbody><!-- tbody Finish -->
                               
                               <tbody><!-- tbody Begin -->
                                   
                                   <tr><!-- tr Begin -->
                                       
                                       <td>
                                           
                                           <img class="img-responsive" src="admin_area/product_images/66a.jpg" alt="Product 3a">
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           <a href="#">Demo cart </a>
                                           
                                       </td>
                                       
                                       <td>
                                          
                                           2
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           500birr
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           Large
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           <input type="checkbox" name="remove[]">
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           1000birr
                                           
                                       </td>
                                       
                                   </tr><!-- tr Finish -->
                                   
                               </tbody><!-- tbody Finish -->
                               
                               <tfoot><!-- tfoot Begin -->
                                   
                                   <tr><!-- tr Begin -->
                                       
                                       <th colspan="5">Total</th>
                                       <th colspan="2">1500birr</th>
                                       
                                   </tr><!-- tr Finish -->
                                   
                               </tfoot><!-- tfoot Finish -->
                               
                           </table><!-- table Finish -->
                           
                       </div><!-- table-responsive Finish -->
                       
                       <div class="box-footer"><!-- box-footer Begin -->
                           
                           <div class="pull-left"><!-- pull-left Begin -->
                               
                               <a href="index.php" class="btn btn-default"><!-- btn btn-default Begin -->
                                   
                                   <i class="fa fa-chevron-left"></i> Continue Shopping
                                   
                               </a><!-- btn btn-default Finish -->
                               
                           </div><!-- pull-left Finish -->
                           
                           <div class="pull-right"><!-- pull-right Begin -->
                               
                               <button type="submit" name="update" value="Update Cart" class="btn btn-default"><!-- btn btn-default Begin -->
                                   
                                   <i class="fa fa-refresh"></i> Update Cart
                                   
                               </button><!-- btn btn-default Finish -->
                               
                               <a href="checkout.php" class="btn btn-primary">
                                   
                                   Proceed Checkout <i class="fa fa-chevron-right"></i>
                                   
                               </a>
                               
                           </div><!-- pull-right Finish -->
                           
                       </div><!-- box-footer Finish -->
                       
                   </form><!-- form Finish -->
                   
               </div><!-- box Finish -->
               
               <div id="row same-heigh-row"><!-- #row same-heigh-row Begin -->
                   <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 Begin -->
                       <div class="box same-height headline"><!-- box same-height headline Begin -->
                           <h3 class="text-center">Products You May Like</h3>
                       </div><!-- box same-height headline Finish -->
                   </div><!-- col-md-3 col-sm-6 Finish -->
                   
                   <div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 center-responsive Begin -->
                       <div class="product same-height"><!-- product same-height Begin -->
                           <a href="details.php">
                               <img class="img-responsive" src="admin_area/product_images/66a.jpg" alt="Product 6">
                            </a>
                            
                            <div class="text"><!-- text Begin -->
                                <h3><a href="details.php">buy it</a></h3>
                                
                                <p class="price">400birr</p>
                                
                            </div><!-- text Finish -->
                            
                        </div><!-- product same-height Finish -->
                   </div><!-- col-md-3 col-sm-6 center-responsive Finish -->
                   
                   <div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 center-responsive Begin -->
                       <div class="product same-height"><!-- product same-height Begin -->
                           <a href="details.php">
                               <img class="img-responsive" src="admin_area/product_images/55a.jpg" alt="Product 6">
                            </a>
                            
                            <div class="text"><!-- text Begin -->
                                <h3><a href="details.php">nicer one</a></h3>
                                
                                <p class="price">450birr</p>
                                
                            </div><!-- text Finish -->
                            
                        </div><!-- product same-height Finish -->
                   </div><!-- col-md-3 col-sm-6 center-responsive Finish -->
                   
                   <div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 center-responsive Begin -->
                       <div class="product same-height"><!-- product same-height Begin -->
                           <a href="details.php">
                               <img class="img-responsive" src="admin_area/product_images/44a.jpg" alt="Product 6">
                            </a>
                            
                            <div class="text"><!-- text Begin -->
                                <h3><a href="details.php">do you want it</a></h3>
                                
                                <p class="price">500birr</p>
                                
                            </div><!-- text Finish -->
                            
                        </div><!-- product same-height Finish -->
                   </div><!-- col-md-3 col-sm-6 center-responsive Finish -->
                   
               </div><!-- #row same-heigh-row Finish -->
               
           </div><!-- col-md-9 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 Begin -->
               
               <div id="order-summary" class="box"><!-- box Begin -->
                   
                   <div class="box-header"><!-- box-header Begin -->
                       
                       <h3>Order Summary</h3>
                       
                   </div><!-- box-header Finish -->
                   
                   <p class="text-muted"><!-- text-muted Begin -->
                       
                       Shipping and additional costs are calculated based on value you have entered
                       
                   </p><!-- text-muted Finish -->
                   
                   <div class="table-responsive"><!-- table-responsive Begin -->
                       
                       <table class="table"><!-- table Begin -->
                           
                           <tbody><!-- tbody Begin -->
                               
                               <tr><!-- tr Begin -->
                                   
                                   <td> Order Sub-Total </td>
                                   <th> 1500birr </th>
                                   
                               </tr><!-- tr Finish -->
                               
                               <tr><!-- tr Begin -->
                                   
                                   <td> Shipping and Handling </td>
                                   <td> 0 </td>
                                   
                               </tr><!-- tr Finish -->
                               
                               <tr><!-- tr Begin -->
                                   
                                   <td> Tax </td>
                                   <th> 0 </th>
                                   
                               </tr><!-- tr Finish -->
                               
                               <tr class="total"><!-- tr Begin -->
                                   
                                   <td> Total </td>
                                   <th>1500birr </th>
                                   
                               </tr><!-- tr Finish -->
                               
                           </tbody><!-- tbody Finish -->
                           
                       </table><!-- table Finish -->
                       
                   </div><!-- table-responsive Finish -->
                   
               </div><!-- box Finish -->
               
           </div><!-- col-md-3 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>
