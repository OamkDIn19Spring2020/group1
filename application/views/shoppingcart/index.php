<div class="col-md-4">
<div class="text-muted">
  <h4><?= $title ?></h4>
      <table class="table table-striped">
        <thead>
          <tr>
          <th class="text-muted">Items</th>
          <th class="text-muted">Price</th>
          <th class="text-muted">Total</th>
          <th class="text-muted">Actions</th>
          </tr>
        </thead>
      <tbody id="detail_cart"></tbody>
      </table>
  
      </table>
</div>

<script>
  $('#detail_cart').load("<?php echo site_url('products/load_cart');?>");
  $(document).on('click','.romove_cart',function(){
  
  var row_id=$(this).attr("id");

  $.ajax({
    url : "<?php echo site_url('products/delete_cart');?>",
    method : "POST",
    data : {row_id : row_id},
    success :function(data){
    $('#detail_cart').html(data); 
    }
  });
});
</script>
</div>