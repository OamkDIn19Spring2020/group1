<div class="text-muted">
<h2>Create listing</h2>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">Add New Item</button>
<table class="table">
  <thead>
    <tr>
      <th>id</th>
      <th>Category</th>
      <th>Title</th>
      <th>Description</th>
      <th>Price</th>
      <th>Image</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($items as $row) {
    echo '<tr>';
    echo '<td>'.$row['idProducts'].'</td><td>'.$row['idProductCategories'].'</td><td>'.$row['title'].'</td><td>'.$row['description'].'</td><td>'.$row['price'].'</td><td>'.$row['image'].'</td>';
    echo '<td><button type="button" id="editBtn" class="btn btn-primary myBtn" data-toggle="modal" data-target="#editModal" data-id="'.$row['idProducts'].'" data-title="'.$row['title'].'" data-description="'.$row['description'].'" data-price="'.$row['price'].'" data-image="'.$row['image'].'">
        Edit
      </button></td>';
    echo '<td><button type="button" id="deleteBtn" class="btn btn-danger myBtn" data-toggle="modal" data-target="#deleteModal" data-id="'.$row['idProducts'].'" data-idProductCategories="'.$row['idProductCategories'].'" data-title="'.$row['title'].'" data-description="'.$row['description'].'" data-price="'.$row['price'].'" data-image="'.$row['image'].'">
        Delete
      </button></td>';
    echo '</tr>';
    }
    ?>
  </tbody>
</table>
<!-- addModal -->
      <div class="modal fade" id="addModal" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Add New Item</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
                <form class="" action="<?php echo site_url('create/insert_item'); ?>" method="post">
                  <div class="form-group">
                    
                    <label for="idProductCategories">Item category</label> <br>
                    <input type="text" id="idProductCategories" name="idProductCategories" value=""> <br>

                    <label for="title">Item title</label> <br>
                    <input type="text" id="title" name="title" value=""> <br>

                    <label for="description">Description</label> <br>
                    <input type="text" id="description" name="description" value=""> <br>

                    <label for="price">Price</label> <br>
                    <input type="text" id="price" name="price" value=""> <br>

                    <label for="image">Image</label> <br>
                    <input type="text" id="image" name="image" value=""> <br>

                    <label for="idSellers">Seller ID</label> <br>
                    <input type="text" id="idSellers" name="idSellers" value=""> <br>
                  </div>
                  <input type="submit" class="btn btn-primary" name="" value="Add">
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
          </div>
        </div>
      </div>
      <!-- editModal -->
            <div class="modal fade" id="editModal" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Edit Item</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      <form class="" action="<?php echo site_url('create/edit_item'); ?>" method="post">
                        <div class="form-group">
                          <input type="hidden" id="edit_idProducts" name="idProducts" value="" >
                          
                          <label for="edit_title">Title</label> <br>
                          <input type="text" id="edit_title" name="title" value=""> <br>

                          <label for="edit_description">Description</label> <br>
                          <input type="text" id="edit_description" name="description" value=""> <br>

                          <label for="edit_price">Price</label> <br>
                          <input type="text" id="edit_price" name="price" value=""> <br>
                        
                        </div>
                        <input type="submit" class="btn btn-primary" name="" value="Update">
                      </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  </div>
                </div>
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
                            <form class="" action="<?php echo site_url('create/delete_item'); ?>" method="post">
                              <div class="form-group">
                                <input type="hidden" id="delete_idProducts" name="idProducts" value="" >
                                Do you really want to delete this item?<br><br>
                                
                                <label for="delete_title">Title</label> <br>
                                <input type="text" id="delete_title" name="title" value="" disabled> <br>

                                <label for="delete_description">Description</label> <br>
                                <input type="text" id="delete_description" name="description" value="" disabled> <br>

                                <label for="delete_price">Price</label> <br>
                                <input type="text" id="delete_price" name="price" value="" disabled> <br>
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
            <script>
              $(document).on( "click", '#editBtn',function() {
                  console.log("Update modal open");
                  var idProducts = $(this).data('id');
                  var description = $(this).data('description');
                  var title=$(this).data('title');
                  var price=$(this).data('price');
                  console.log('idProducts = '+idProducts);

                  $("#edit_idProducts").val(idProducts);
                  $("#edit_description").val(description);
                  $("#edit_title").val(title);
                  $("#edit_price").val(price);
              });

              $(document).on( "click", '#deleteBtn',function() {
                  console.log("delete modal open");
                  var idProducts = $(this).data('id');
                  var title = $(this).data('title');
                  var description = $(this).data('description');
                  var image = $(this).data('image');
                  var price = $(this).data('price');
                  console.log('idProducts = '+idProducts);

                  $("#delete_idProducts").val(idProducts);
                  $("#delete_title").val(title);
                  $("#delete_description").val(description);
                  $("#delete_price").val(price);
                  $("#delete_image").val(image);
              });
              </script>
</div>