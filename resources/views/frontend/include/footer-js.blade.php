

<script type="text/javascript">
$(document).ready(function() {	
	$('#navigation nav').slimNav_sk78();
	var owl = $('.main-slider');
    owl.owlCarousel({
        autoplay: true,
        autoplayTimeout: 4000,
        loop: true,
        items: 1,
        center: true,
        nav: true,
        thumbs: false,
        thumbImage: false,
        thumbsPrerendered: true,
        thumbContainerClass: 'owl-thumbs',
        thumbItemClass: 'owl-thumb-item',
        navText: ['<span class="prev"><i class="fas fa-angle-left"></i></span>','<span class="next"><i class="fas fa-angle-right"></i></span>'],

    });	
    var owl = $('.testi_slider');
    owl.owlCarousel({
        autoplay: true,
        autoplayTimeout: 4000,
        loop: true,
        items: 1,
        center: true,
        nav: true,
        thumbs: true,
        thumbImage: false,
        thumbsPrerendered: true,
        thumbContainerClass: 'owl-thumbs',
        thumbItemClass: 'owl-thumb-item',
        navText: ['<span class="prev"><i class="fas fa-angle-left"></i></span>','<span class="next"><i class="fas fa-angle-right"></i></span>'],
    });
    var owl = $('.product_rolling');
    owl.owlCarousel({
        autoplay: true,
        autoplayTimeout: 4000,
        loop: true,
        items:4,
        itemsMobile:[568,2],
        itemsTablet:[768,3],
        itemsTablet:[1024,3],
        center: false,
        nav: true,
        thumbs: true,
        thumbImage: false,
        thumbsPrerendered: true,
        thumbContainerClass: 'owl-thumbs',
        thumbItemClass: 'owl-thumb-item',
        navText: ['<span class="prev"><i class="fas fa-angle-left"></i></span>','<span class="next"><i class="fas fa-angle-right"></i></span>'],
        responsive: {
            0: {
              items: 1
            },

            600: {
              items: 2
            },

            1024: {
              items: 3
            },

            1366: {
              items: 4
            }
          }
    });

    if (window.File && window.FileList && window.FileReader) {
    $("#files").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
      for (var i = 0; i < filesLength; i++) {
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<span class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"remove\">Remove image</span>" +
            "</span>").insertAfter("#files");
          $(".remove").click(function(){
            $(this).parent(".pip").remove();
          });        
        });
        fileReader.readAsDataURL(f);
      }
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});
</script>


@if(Session::has('success_msg'))
<script>
    swal({
      title: "Successful!",
      text: "{{ Session::get('success_msg') }}",
      icon: "success",
      button: false,
      timer: 3000
    });
</script>
@endif

<!-- error alert -->
@if(Session::has('error_msg'))
<script>
    swal({
      title: "Error!",
      text: "{{ Session::get('error_msg') }}",
      icon: "error",
      button: false,
      timer: 3000
    });
</script>
@endif

<script>
  function success_pass_alert_show_msg(alert_main_msg)
  {
    swal({
      title: "Successful!",
      text: alert_main_msg,
      icon: "success",
      button: false,
      timer: 3000
    });
  }

 

  function error_pass_alert_show_msg(alert_main_msg)
  {
    swal({
      title: "Error!",
      text: alert_main_msg,
      icon: "error",
      button: false,
      timer: 3000
    });
  }

  
</script>
