@extends('backend.app')
@section('content')
<style>
.md_pic_con{
  position: relative;
  width: 23%;
    margin: 0 1% 10px;
    float: left;
}
#edit-type-gallery-images-id, #edit-type-thumbnail-image-id{
  padding-top: 10px;
}
.edit-modal-btn-view-class{
  width: 100%;
  clear: both;
}
.md_pic_con a{
  position: absolute;
    top: 5px;
    left: 5px;
    width: 24px;
    height: 24px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #fff;
    border-radius: 50%;
    font-size: 12px;
}
.scroll-demo-table {
    min-height: auto;
    max-height: 254px;
    overflow-y: auto;
    padding-right: 5px;
}
.product-modal-open-height-scroll{
    overflow-y: auto;
    max-height: 400px;
    min-height: auto;
}

/* on off panel */
.MainContainer .Switch {
	position: relative;
	display: inline-block;
	font-size: 1.6em;
	font-weight: bold;
	color: #ccc;
	text-shadow: 0px 1px 1px rgba(255,255,255,0.8);
	height: 18px;
	padding: 6px 6px 5px 6px;
	border: 1px solid #ccc;
	border: 1px solid rgba(0,0,0,0.2);
	border-radius: 4px;
	background: #ececec;
	box-shadow: 0px 0px 4px rgba(0,0,0,0.1), inset 0px 1px 3px 0px rgba(0,0,0,0.1);
	cursor: pointer;
	font-size: 16px;
}
body.IE7 .Switch { width: 78px; }
.Switch span {
	display: inline-block;
	width: 35px;
}
.MainContainer .Switch span.On { color: #33d2da; }
.MainContainer .Switch .Toggle {
	position: absolute;
	top: 1px;
	width: 37px;
	height: 25px;
	border: 1px solid #ccc;
	border: 1px solid rgba(0,0,0,0.3);
	border-radius: 4px;
	background: #fff;
	background: -moz-linear-gradient(top, #ececec 0%, #ffffff 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ececec), color-stop(100%, #ffffff));
	background: -webkit-linear-gradient(top, #ececec 0%, #ffffff 100%);
	background: -o-linear-gradient(top, #ececec 0%, #ffffff 100%);
	background: -ms-linear-gradient(top, #ececec 0%, #ffffff 100%);
	background: linear-gradient(top, #ececec 0%, #ffffff 100%);
	box-shadow: inset 0px 1px 0px 0px rgba(255,255,255,0.5);
	z-index: 999;
	-webkit-transition: all 0.15s ease-in-out;
	-moz-transition: all 0.15s ease-in-out;
	-o-transition: all 0.15s ease-in-out;
	-ms-transition: all 0.15s ease-in-out;
}
.MainContainer .Switch.On .Toggle { left: 2%; }
.MainContainer .Switch.Off .Toggle { left: 54%; }
/* Round Switch */
.MainContainer .Switch.Round {
	padding: 0px 20px;
	border-radius: 40px;
}
body.IE7 .Switch.Round { width: 1px; }
.MainContainer .Switch.Round .Toggle {
	border-radius: 40px;
	width: 14px;
	height: 14px;
}
.MainContainer .Switch.Round.Off .Toggle {
	left: 3%;
	background: #33d2da;
}
.MainContainer .Switch.Round.On .Toggle { left: 58%; }
.info {
	font-size: 1.2em;
	margin-bottom: 4px;
}
/* end on off panel */
</style>
  <!-- The Modal -->
  <div class="modal" id="category-show-modal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add Product</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body product-modal-open-height-scroll">
          <form action="{{ route('admin.banner-add') }}" id="product-admin-modal-id" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="form-group">
              <label for="email">Category:</label>
                <select class="form-control" placeholder="Enter Category Name" name="category_name" id="category-name-id" onchange="category_change_for_subcategory_fx()" required>
                    <option value="">Choose your category name</option>
                </select>
            </div>
            <div class="form-group">
              <label for="email">Sub Category:</label>
                <select class="form-control" placeholder="Enter Sub Category Name" name="sub_category_name" id="sub-category-name-id" required>
                    <option value="">Choose your sub-category name</option>
                </select>
            </div>
            <div class="form-group">
              <label for="pwd">Product Name:</label>
              <input type="text" class="form-control" placeholder="Enter Product Name" name="product_name" id="product-name-id" required> 
            </div>
            <div class="form-group">
              <label for="pwd">Product price:</label>
              <input type="number" class="form-control" placeholder="Enter Product Price" name="product_price" id="product-price-id" required>
            </div>
            <div class="form-group">
              <label for="pwd">Product Short Description:</label>
              <textarea class="form-control" placeholder="Enter Product Short Description" name="product_short_description" id="product-short-des-id"></textarea>
            </div>
            <div class="form-group">
              <label for="pwd">Product Description:</label>
              <textarea class="form-control" placeholder="Enter Product Description" name="product_description" rows=6 id="product-des-id"></textarea>
            </div>
            <div class="form-group">
              <label for="pwd">Product Additional Details:</label>
              <textarea class="form-control" placeholder="Enter Product Description" name="product_additional_details" rows=4 id="product-additional-des-id"></textarea>
            </div>
            <div class="form-group">
              <label for="pwd">Product Stock:</label>
              <input type="number" name="product_stock" class="form-control" placeholder="Enter Product Stock" min=0 id="product-stock-id" required>
            </div>
            <div class="form-group">
              <label for="pwd">Product Thumbnail:</label>
              <input type="file" class="form-control" name="product_thumbnail_name" placeholder="Enter Product Thumbnail" id="product-thumbnail-id" required>
            </div>
            <div class="form-group">
              <label for="pwd">Product Gallery Images:</label>
              <input type="file" class="form-control" name="product_gallery_images_name[]" multiple placeholder="Enter Product Thumbnail" id="product-gallery-img-id" required>
            </div>
            <button type="submit" id="category-modal-call-id" class="btn btn-primary">Submit</button>&nbsp;<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </form>
        </div>

      </div>
    </div>
  </div>
  <!-- edit modal -->
  <div class="modal" id="product-edit-show-modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <input type="hidden" name="product_hidden_long_id" value="">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit Product</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body product-modal-open-height-scroll">
          <form action="{{ route('admin.banner-update') }}" id="product-admin-modal-id" method="POST" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="edit_product_name_first_id" id="edit_product_name_first_id" value="" />
            <div class="form-group">
              <label for="email">Category:</label>
                <select class="form-control" placeholder="Enter Category Name" name="category_name" id="edit-category-name-id" onchange="edit_category_change_for_subcategory_fx()" required>
                    <option value="">Choose your category name</option>
                </select>
            </div>
            <div class="form-group">
              <label for="email">Sub Category:</label>
                <select class="form-control" placeholder="Enter Sub Category Name" name="sub_category_name" id="edit-sub-category-name-id" required>
                    <option value="">Choose your sub-category name</option>
                </select>
            </div>
            <div class="form-group">
              <label for="pwd">Product Name:</label>
              <input type="text" class="form-control" placeholder="Enter Product Name" name="product_name" id="edit-product-name-id" required> 
            </div>
            <div class="form-group">
              <label for="pwd">Product price:</label>
              <input type="number" class="form-control" placeholder="Enter Product Price" name="product_price" id="edit-product-price-id" required>
            </div>
            <div class="form-group">
              <label for="pwd">Product Short Description:</label>
              <textarea class="form-control" placeholder="Enter Product Short Description" name="product_short_description" id="edit-product-short-des-id"></textarea>
            </div>
            <div class="form-group">
              <label for="pwd">Product Description:</label>
              <textarea class="form-control" placeholder="Enter Product Description" name="product_description" rows=6 id="edit-product-des-id"></textarea>
            </div>
            <div class="form-group">
              <label for="pwd">Product Additional Details:</label>
              <textarea class="form-control" placeholder="Enter Product Description" name="product_additional_details" rows=4 id="edit-product-additional-des-id"></textarea>
            </div>
            <div class="form-group">
              <label for="pwd">Product Stock:</label>
              <input type="number" name="product_stock" class="form-control" placeholder="Enter Product Stock" min=0 id="edit-product-stock-id" required>
            </div>
            <div class="form-group">
              <label for="pwd">Product Thumbnail:</label>
              <input type="file" class="form-control" name="product_thumbnail_name" placeholder="Enter Product Thumbnail" id="edit-product-thumbnail-id" >
              <!-- thumbnail image -->
              <div id="edit-type-thumbnail-image-id">
                
                </div>
              <!-- /thumbnail image -->
            </div>
            <div class="form-group">
              <label for="pwd">Product Gallery Images:</label>
              <input type="file" class="form-control" name="product_gallery_images_name[]" multiple placeholder="Enter Product Thumbnail" id="edit-product-gallery-img-id" >
              <!-- gallery image -->
              <div id="edit-type-gallery-images-id">
                
              </div>
              
              <!-- /gallery image -->
            </div>
            <div class="clearfix"></div>
            <div class="edit-modal-btn-view-class">
              <button type="submit" id="category-modal-call-id" class="btn btn-primary">Submit</button>&nbsp;<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
  <!-- Content Header (Page header) -->

  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Product Details</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Product Details</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- /.row -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Product Details</h3>
                <div class="row">
                    <div class="col-12" id="status_report">

                    </div>
                </div>
              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <a href="javascript: ;" class="btn btn-info btn-sm" id="add-banner-id" onclick="add_product_category()">Add Product</a>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive scroll-demo-table p-0" id="backend-table-id">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Banner Images</th>
                    <th>Banner Heading</th>
                    <th>Banner Description</th>
                    <th>Status</th>
                    <th>Admin Action</th>
                  </tr>
                </thead>
                <tbody id="campaign-tbl-id">
                  <tr>
                    <td colspan="6"><center class="text-info"><i class="fa fa-spinner"></i> Loading data's</center></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
@endsection
@section('adminjsContent')
<script>
$(function(){
  load_banner_fx();
});


// banner show 
function load_banner_fx()
{
  $.ajax({
    url: "{{ route('admin.show-actual-banner') }}",
    type: "GET",
    dataType: "json",
    success: function(e){

    }, error: function(e){

    }
  })
}
</script>
@endsection