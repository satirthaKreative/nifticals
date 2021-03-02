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
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Payment Tables</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Banner Details</li>
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
              <h3 class="card-title">Banner Data Table</h3>
                <div class="row">
                    <div class="col-12" id="status_report">

                    </div>
                </div>
              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <a href="{{ route('admin.addBanner') }}" class="btn btn-info btn-sm" id="add-banner-id">Add Banner</a>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive scroll-demo-table p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Banner1 Image</th>
                    <th>Banner1 Heading</th>
                    <th>Banner2 Image</th>
                    <th>Banner2 Heading </th>
                  </tr>
                </thead>
                <tbody id="campaign-tbl-id">
                  <tr>
                    <td colspan="5"><center class="text-info"><i class="fa fa-spinner"></i> Loading data's</center></td>
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
    //All campign show
    $(document).ready(function(){
        $.ajax({
        url: "{{ route('admin.allBanner') }}",
        type: "GET",
        dataType: "json",
            success:  function(event){
                $("#campaign-tbl-id").html(event);
                // banner checking data have or not ? 
                $.ajax({
                  url: "{{ route('admin.countBanner') }}",
                  type: "GET",
                  dataType: "json",
                  success:  function(res){
                    if(res == "success")
                    {
                      $("#add-banner-id").html('Update Banner');
                    }
                    else
                    {
                      $("#add-banner-id").html('Add Banner');
                    }
                  }, error:  function(res){

                  }
                })
            }, error:  function(event){

            }
        });
    });
</script>
@endsection