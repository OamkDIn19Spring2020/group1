<div class="container">
<div class="text-muted">
<h3 class="font-weight-bold" style="margin-top: 10px">Shopping Cart</h3><br>
<table class="table">
  <thead>
    <tr class="text-muted">
      <th>idProducts</th>
      <th>idCustomers</th>
      <th>Price</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
  <?php

  foreach ($items as $row) {
    echo '<tr class="text-muted">';
    echo '<td>'.$row['idProducts'].'</td><td>'.$row['idCustomers'].'</td><td>'.$row['totalPrice'].'</td>';
    echo '<td><button type="button" id="deleteBtn" class="btn btn-danger myBtn" data-toggle="modal" data-target="#deleteModal" data-id="'.$row['idShoppingCart'].'" data-idProducts="'.$row['idProducts'].'" data-idCustomers="'.$row['idCustomers'].'" data-price="'.$row['totalPrice'].'">
        Delete
      </button></td>';
    echo '</tr>';

    }
  
    ?>
  </tbody>
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#sendModal">Send order</button><br/><br/>
</table>
</div>
</div>
            <!-- deleteModal -->
                  <div class="modal fade" id="deleteModal" role="dialog">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Delete Item</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <form class="" action="<?php echo site_url('shoppingcart/delete_cart'); ?>" method="post">
                              <div class="form-group">
                                <input type="hidden" id="delete_idShoppingCart" name="idShoppingCart" value="" >
                                <input type="hidden" id="delete_idProducts" name="idProducts" value="" >
                                Do you really want to delete this item?<br><br>
                                
                                <label for="delete_title">idSellers</label> <br>
                                <input type="text" id="delete_idSellers" name="idSellers" value="" disabled> <br>

                                <label for="delete_totalPrice" ">Price</label> <br>
                                <input type="text" id="delete_totalPrice" name="totalPrice" value="" disabled> <br>
                              </div>
                              <input type="submit" class="btn btn-danger " name="" value="Delete">
                            </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>
<!-- addModal -->
      <div class="modal fade" id="sendModal" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Do you want send the order?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
                <form class="" action="<?php echo site_url('shoppingcart/send_order'); ?>" method="post">
                  <div class="form-group">

                  </div>
                  <input type="submit" class="btn btn-success" name="" value="Send order">
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
          </div>
        </div>
      </div>

            <script>

              $(document).on( "click", '#deleteBtn',function() {
                  console.log("delete modal open");
                  var idShoppingCart = $(this).data('id');
                  var idProducts = $(this).data('idProducts');
                  var idSellers = $(this).data('idSellers');
                  var price = $(this).data('price');;
                  console.log('idShoppingCart = '+idShoppingCart);

                  $("#delete_idShoppingCart").val(idShoppingCart);
                  $("#delete_idProducts").val(idProducts);
                  $("#delete_idSellers").val(idSellers);
                  $("#delete_totalPrice").val(price);
                  });
              </script>
            </div>