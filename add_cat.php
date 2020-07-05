<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="custombox.min.css">
<div class="modal-demo">
    <button type="button" class="close" onclick="Custombox.modal.close();">
        <span>&times;</span><span class="sr-only">Close</span>
    </button>
    <h4 class="custom-modal-title">Add Category</h4>
    <div class="custom-modal-text text-left">
        <div class="form-group">
            <label for="name">Category Name</label>
            <input type="text" class="form-control" id="name" name="cat_name" placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label for="">Category Description</label>
           <textarea name="cat_desc" class="form-control"></textarea> 
        </div>
        <div class="form-group">
            <label for="parent-select">Select Parent Category</label>
            <select class="form-control" name="cat_parent" id="parent-select">
                <option value="" id="selected" selected>Select...</option>
            </select>
        </div>
        <div class="text-right">
            <button type="submit" class="btn btn-success waves-effect waves-light" id="save_">Save</button>
            <button type="button" class="btn btn-danger waves-effect waves-light m-l-10" onclick="Custombox.modal.close();">Cancel</button>
        </div>          
    </div>
</div>
<script src="custombox.min.js"></script>
<style type="text/css">
.error { 
    color:red;
}
</style>