    
<?php
require_once('views/header.php');

?>

  <h2>Catagory</h2>
  <h4><button id="btnAddCatagory" class="add" name="add_catagory"
  onclick="addCatagoryForm()" >Add Catagory</button></h4>
  
  
  <div class="bg-form">
    <div class="addFormContent">
      <div class="close">+</div>

      <form>
        <div class="block">
        <lable id="addActivityTitle">Add Catagory</lable>
        <div class="input_div">
        <lable>Catagory Name:</lable>
        <input type="text" id="CatagoryName" placeholder="Catagory Name">
        </div>
        </div>

        <button class="button" id="btnSubmit">Submit</button>
      </form>
    </div>
  </div>
  <table id="example" class="table table-striped table-bordered" style="width:100%">
  <tr>
    <th>Catagory Name</th>
    <th>Action</th>

  </tr>
  <tr>
    <td>Shopping</td>
    <td>
      <button class="btnedit" name="btn_edit">Edit</button>  
      <button class="btndelete" name="btn_delete">Delete</button>
    </td>
  </tr>
</table>
<script>

document.getElementById('btnAddCatagory').addEventListener('click',function (){
    document.querySelector('.bg-form').style.display = 'flex';
  });

  document.querySelector('.close').addEventListener('click', function () {
    document.querySelector('.bg-form').style.display = 'none';
  });
</script>
  

<?php require_once('views/footer.php')  ?>






