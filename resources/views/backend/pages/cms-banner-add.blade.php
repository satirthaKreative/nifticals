@extends('backend.app')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Banner Form</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Banner Form</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Form Details</h3>
              <span class="float-right"><a href="{{ route('admin.banner') }}" class="btn btn-danger btn-sm">View Banner</a></span>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" enctype="multipart/form-data" method="POST" action="{{ route('admin.submitBanner') }}">
            @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputFile">Banner Image One</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" name="bannerOne" class="custom-file-input" id="exampleInputFile1">
                      <label class="custom-file-label" for="exampleInputFile1">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text" id="">Upload</span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Banner One Heading</label>
                  <input type="text" class="form-control banner1-head-class" name="bannerOneHead" id="exampleInputEmail1" placeholder="Enter Banner One Heading">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Banner One Highlighted Heading</label>
                  <input type="text" class="form-control banner1-head-hl-class" name="bannerOneHeadHighlight" id="exampleInputEmail1" placeholder="Enter Banner One Highlighted Heading">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Banner One Short Description</label>
                  <textarea rows="10" class="form-control banner1-para-class" name="bannerParaOne" id="exampleInputPassword1" placeholder="Enter Banner One Short Description"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Banner Image Two</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="bannerTwo" id="exampleInputFile2">
                      <label class="custom-file-label" for="exampleInputFile2">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text" id="">Upload</span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Banner Two Heading</label>
                  <input type="text" class="form-control banner2-head-class" name="bannerTwoHead" id="exampleInputEmail1" placeholder="Enter Banner Two Heading">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Banner Two Highlighted Heading</label>
                  <input type="text" class="form-control banner2-head-hl-class" name="bannerTwoHeadHighlight" id="exampleInputEmail1" placeholder="Enter Banner Two Highlighted Heading">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Banner Two Short Description</label>
                  <textarea rows="10" class="form-control banner2-para-class" name="bannerParaTwo" id="exampleInputPassword1" placeholder="Enter Banner Two Short Description"></textarea>
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->

        </div>
        <!--/.col (left) -->
        <!-- Right column -->
        <div class="col-md-6">
          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">Banner Images</h3>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Banner Image One</label>
                <div class="show-banner-image-class-one">
                  <span class="text-info"> <i class="fa fa-spinner"></i> Loading images </span>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Banner Image Two</label>
                <div class="show-banner-image-class-two">
                  <span class="text-info"> <i class="fa fa-spinner"></i> Loading images </span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /Right Column -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
  <!-- /.content -->
@endsection
@section('adminjsContent')
<script>
$.ajax({
  url: "{{ route('admin.countBanner') }}",
  type: "GET",
  dataType: "json",
  success:  function(res){
    if(res == "success")
    {
      $.ajax({
        url: "{{ route('admin.updateBanner') }}",
        type: "GET",
        dataType: "json",
        success: function(event){
          if(event.length > 0)
          {
            $(".banner1-head-class").val(event[0].banner_heading_one);
            $(".banner2-head-class").val(event[0].banner_heading_two);
            $(".banner1-para-class").val(event[0].banner_paragraph_one);
            $(".banner2-para-class").val(event[0].banner_paragraph_two);
            $(".banner1-head-hl-class").val(event[0].head1_hl);
            $(".banner2-head-hl-class").val(event[0].head2_hl);
            // for image one
            var path_origin = window.location.origin;
            var str = event[0].banner_img_one;
            var str_re = str.replace('public','storage/app/public');

            // for image two
            var str2 = event[0].banner_img_two;
            var str_re2 = str2.replace('public','storage/app/public');

            $(".show-banner-image-class-one").html("<img src='"+path_origin+"/"+str_re+"' alt='no image' width='200px' />");
            $(".show-banner-image-class-two").html("<img src='"+path_origin+"/"+str_re2+"' alt='no image' width='200px' />");
          }
          else
          {

          }
        }, error: function(event){

        }
      });
    }
    else
    {
      
    }
  }, error:  function(res){

  }
})

</script>
@endsection