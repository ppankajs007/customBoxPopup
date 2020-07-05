<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="custombox.min.css">
<div class="container-fluid">  <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="">CRM</a></li>
                        <li class="breadcrumb-item active">Category</li>
                    </ol>
                </div>
                <h4 class="page-title">Categories</h4>
            </div>
        </div>
    </div> <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                  <div class="row mb-2">
                        <div class="col-sm-4">
                            <a href="add_cat.php" class="btn btn-danger waves-effect waves-light" data-animation="push" data-plugin="custommodalEdit" data-overlaycolor="#38414a" id="modal_disable"><i class="mdi mdi-plus-circle mr-1"></i> Add Category</a>
                        </div>
                        <div class="col-sm-8">
                            <div class="text-sm-right">
                            </div>
                        </div><!-- end col-->
                    </div>
                    <table id="scroll-vertical-datatable" class="table dt-responsive nowrap" id="DataTable">
					   <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Description</th>
                                <!--<th>Parent</th>-->
                                <th>Action</th>
                            </tr>
                         </thead>
                    </table>
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div> <!-- end row-->
</div> <!-- container -->
<script src="custombox.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('[data-plugin="custommodalEdit"]').on('click', function(e) {
        e.preventDefault();
            var modal = new Custombox.modal({
                content: {
                    target: $(this).attr("href"),
                    effect: $(this).attr("data-animation"),
                    },
                overlay: {
                    color: $(this).attr("data-overlayColor"),
                    close:false
                },
                fullscreen: true,
                positionX: 'center',
            });
             modal.open();
        });
    })
</script>
