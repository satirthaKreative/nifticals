@extends('backend.app')
@section('content')
<style>
.scroll-demo-table {
    min-height: auto;
    max-height: 254px;
    overflow-y: auto;
    padding-right: 5px;
}
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
        <div class="modal-body">
          <form action="">
            <div class="form-group">
              <label for="email">Category:</label>
                <select class="form-control" placeholder="Enter Category Name" id="category-name-id">
                    <option value="">Choose your category name</option>
                </select>
            </div>
            <div class="form-group">
              <label for="email">Sub Category:</label>
                <select class="form-control" placeholder="Enter Sub Category Name" id="sub-category-name-id">
                    <option value="">Choose your sub-category name</option>
                </select>
            </div>
            <div class="form-group">
              <label for="pwd">Product Name:</label>
              <input type="text" class="form-control" placeholder="Enter Product Name" id="product-name-id">
            </div>
            <div class="form-group">
              <label for="pwd">Product price:</label>
              <input type="number" class="form-control" placeholder="Enter Product Price" id="product-price-id">
            </div>
            <div class="form-group">
              <label for="pwd">Product Short Description:</label>
              <textarea class="form-control" placeholder="Enter Product Short Description" id="product-short-des-id"></textarea>
            </div>
            <div class="form-group">
              <label for="pwd">Product Description:</label>
              <textarea class="form-control" placeholder="Enter Product Description" rows=6 id="product-des-id"></textarea>
            </div>
            <div class="form-group">
              <label for="pwd">Product Additional Details:</label>
              <textarea class="form-control" placeholder="Enter Product Description" rows=4 id="product-additional-des-id"></textarea>
            </div>
            <div class="form-group">
              <label for="pwd">Product Stock:</label>
              <input type="number" class="form-control" placeholder="Enter Product Stock" min=0 id="product-stock-id">
            </div>
            <div class="form-group">
              <label for="pwd">Product Thumbnail:</label>
              <input type="file" class="form-control" placeholder="Enter Product Thumbnail" id="product-thumbnail-id">
            </div>
            <button type="button" onclick="add_cate_data_fx()" id="category-modal-call-id" class="btn btn-primary">Submit</button>&nbsp;<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
                    <th>Product Thumbnail</th>
                    <th>Product Name</th>
                    <th>Product Description</th>
                    <th>Availability</th>
                    <th>Status</th>
                    <th>Admin Action</th>
                  </tr>
                </thead>
                <tbody id="campaign-tbl-id">
                  <tr>
                    <td colspan="7"><center class="text-info"><i class="fa fa-spinner"></i> Loading data's</center></td>
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
// load product category
$(function(){
    load_product_category();
});

// show product categories
function load_product_category()
{
    $.ajax({
        url: "{{ route('admin.show-actual-product') }}",
        type: "GET",
        dataType: "json",
        success: function(event){
            if(event.action_type == "yes"){
              $("#campaign-tbl-id").html(event.product_full_data);
              $("table").dataTable();
            }else if(event.action_type == "no"){
              $("#campaign-tbl-id").html(event.product_full_data);
            }else{
              $("#campaign-tbl-id").html('<tr><td colspan="7"><center class="text-danger"><i class="fa fa-times"></i> Something went wrong</center></td></tr>');
            }
        }, error: function(event){

        }
    })
}

// modal open
function add_product_category()
{
  $("#category-show-modal").modal('show');
  $("#category-modal-call-id").attr('onclick','add_cate_data_fx()');
  $.ajax({
      url: "{{ route('admin.get-category-for-subcate') }}",
      type: "GET",
      dataType: "json",
      success: function(event){
        $('#category-name-id').html(event);
      }, error: function(event){

      }
  })
}

// adding category
function add_cate_data_fx()
{
  var category_name = $("#category-name-id").val();
  var sub_category_name = $("#sub-category-name-id").val();
  var sub_category_quote = $("#sub-category-quote-id").val();

  if(category_name == null || category_name == "")
  {
    error_pass_alert_show_msg("Choose a category");
  }
  else if(sub_category_name == "" || sub_category_name == null)
  {
    error_pass_alert_show_msg("Subcategory can't be null");
  }
  else
  {
    $.ajax({
      url: "{{ route('admin.product-add-sub-category') }}",
      type: "GET",
      data: {c_name: category_name, c_sub_name: sub_category_name, c_sub_quote: sub_category_quote},
      dataType: 'json',
      success: function(event){
        if(event.status_code == "success")
        {
          success_pass_alert_show_msg("Sub-category added successfully");
          load_product_category();
          $("#category-name-id").val("");
          $("#sub-category-name-id").val("");
          $("#sub-category-quote-id").val("");
          $("#category-show-modal").modal('hide');
        }
        else
        {
          error_pass_alert_show_msg(event.status_code);
        }
      }, error: function(event){

      }
    })
  }
}

/// edit category
function edit_action(id)
{
  $("#category-show-modal").modal('show');
    $.ajax({
        url: "{{ route('admin.show-edit-actual-sub-category') }}",
        type: "GET",
        data: {id: id},
        dataType: "json",
        success: function(event){
          $("#category-name-id").html(event.category_name);
          $("#sub-category-name-id").val(event.cname);
          $("#sub-category-quote-id").val(event.cquote);
          $("#category-modal-call-id").attr('onclick','edit_cate_data_fx('+id+')');
        }, error: function(event){

        }
    })
}

/// update category
function edit_cate_data_fx(id)
{
    
  var category_name = $("#category-name-id").val();
  var sub_category_name = $("#sub-category-name-id").val();
  var sub_category_quote = $("#sub-category-quote-id").val();

  if(category_name == null || category_name == "")
  {
    error_pass_alert_show_msg("Choose a category ");
  }
  else if(sub_category_name == null || sub_category_name == "")
  {
    error_pass_alert_show_msg("Sub-category name can't be null");
  }
  else
  {
    $.ajax({
      url: "{{ route('admin.product-update-sub-category') }}",
      type: "GET",
      data: {cname: category_name, csubname: sub_category_name, csubquote: sub_category_quote, cid: id},
      dataType: 'json',
      success: function(event){
        if(event.status_code == "success")
        {
          success_pass_alert_show_msg("Sub-category Updated successfully");
          load_product_category();
                $.ajax({
                    url: "{{ route('admin.get-category-for-subcate') }}",
                    type: "GET",
                    dataType: "json",
                    success: function(event){
                        $('#category-name-id').html(event);
                    }, error: function(event){

                    }
                })
          $("#sub-category-name-id").val("");
          $("#sub-category-quote-id").val("");
          $("#category-show-modal").modal('hide');
        }
        else
        {
          error_pass_alert_show_msg(event.status_code);
        }
      }, error: function(event){

      }
    })
  }
}

// change status
function change_action(id,status_call)
{
    $.ajax({
      url: "{{ route('admin.product-change-action-sub-category') }}",
      type: "GET",
      data: {id: id, status_call: status_call},
      dataType: 'json',
      success: function(event){
        if(event.status_code == "success")
        {
          success_pass_alert_show_msg("Sub-category Status Changed successfully");
          load_product_category();
        }
        else
        {
          error_pass_alert_show_msg("Something went wrong");
        }
      }, error: function(event){

      }
    })
}


// del action 
function del_action(id)
{
  var x = confirm("Are you really want to delete the sub category?");
  if(x)
  {
    $.ajax({
      url: "{{ route('admin.product-del-action-sub-category') }}",
      type: "GET",
      data: {id: id},
      dataType: 'json',
      success: function(event){
        if(event.status_code == "success")
        {
          success_pass_alert_show_msg("Sub-category deleted successfully");
          load_product_category();
        }
        else
        {
          error_pass_alert_show_msg("Something went wrong");
        }
      }, error: function(event){

      }
    })
  }
}
</script>
@endsection