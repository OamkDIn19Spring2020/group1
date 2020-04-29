<h2>Add a new item</h2>
<h2 class="text-muted">Add a new item</h2>
<form class="" action="<?php echo site_url('item/insert_item'); ?>" method="post">
  <label for="title">Item name</label> <br>
  <input type="text" id="title" name="title" value=""> <br>

  <label for="description">Description</label> <br>
  <input type="text" id="description" name="description" value=""> <br>
  <br>
  <input type="submit" name="" value="Add">

</form>
