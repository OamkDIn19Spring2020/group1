<div class="text-muted">
<h3>Sold Products</h3>
<table class="table">
  <thead>
    <tr class="text-muted">
      <th>Image</th>
      <th>Category</th>
      <th>Title</th>
      <th>Description</th>
      <th>Price</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  <?php

  foreach ($items as $row) {
    echo '<tr>';
    echo '<td>'.$row['image'].'</td><td>'.$row['idProductCategories'].'</td><td>'.$row['title'].'</td><td>'.$row['description'].'</td><td>'.$row['price'].'</td>';
    echo '<td><button type="button" id="buyBtn" class="btn btn-success myBtn" data-toggle="modal" data-target="#buyModal" data-id="'.$row['idProducts'].'" data-title="'.$row['title'].'" data-description="'.$row['description'].'" data-price="'.$row['price'].'" data-image="'.$row['image'].'">
        Buy
      </button></td>';
    }
    ?>
  </tbody>
</table>
      <!-- buyModal -->
            <div class="modal fade" id="buyModal" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Do you want to purchase this product?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      <form class="" action="<?php echo site_url('browse/add_to_cart'); ?>" method="post">
                        <div class="form-group">
                          <input type="hidden" id="buy_idProducts" name="idProducts" value="" >
                          
                          <label for="buy_title">Title</label> <br>
                          <input type="text" id="buy_title" name="title" value=""> <br>

                          <label for="buy_description">Description</label> <br>
                          <input type="text" id="buy_description" name="description" value=""> <br>

                          <label for="buy_price">Price</label> <br>
                          <input type="text" id="buy_price" name="price" value=""> <br>
                        
                        </div>
                        <input type="submit" id="add_cart" class="btn add_cart btn-success" name="" value="Buy">
                      </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  </div>
                </div>
              </div>
            </div>
            <script>
              $(document).on( "click", '#buyBtn',function() {
                  console.log("Update modal open");
                  var idProducts = $(this).data('id');
                  var description = $(this).data('description');
                  var title=$(this).data('title');
                  var price=$(this).data('price');
                  console.log('idProducts = '+idProducts);

                  $("#buy_idProducts").val(idProducts);
                  $("#buy_description").val(description);
                  $("#buy_title").val(title);
                  $("#buy_price").val(price);
              });
              
              $(document).ready(function(){
              $('.add_cart').click(function(){
              var idProducts    = $(this).data("idProducts");
              var description  = $(this).data("title");
              var title = $(this).data("price");
              var price = $('#' + idProducts).val();

              $.ajax({
              url : "<?php echo site_url('view/add_to_cart');?>",
              method : "POST",
              data : {idProducts: idProducts, title: title, price: price, totalPrice: totalPrice},
              success: function(data){
              $('#detail_cart').html(data);
                }
              });
            });
          });

          $('#detail_cart').load("<?php echo site_url('browse/load_cart');?>");

          $(document).on('click','.romove_cart',function(){
          var row_id=$(this).attr("id");

           $.ajax({
          url : "<?php echo site_url('view/delete_cart');?>",
          method : "POST",
          data : {row_id : row_id},
          success :function(data){
          $('#detail_cart').html(data); 
        }
  });
});
</script>
</div>