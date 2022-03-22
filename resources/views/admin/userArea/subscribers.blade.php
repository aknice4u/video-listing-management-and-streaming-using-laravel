@extends('layouts.adminLayout2')


@section('content')


<div class=" eq" style="padding-left: 15px; padding-right: 15px; margin-top:20px;">

  <h3 class="text-center text-highlight sr-item">List of Subcribers</h3>
<!-- video upload form -->
<div class="column">
<div class="" style="background:#FFF; padding: 15px; margin-top:20px;">
  <table class="table table-striped table-vcenter table-condensed">
  <thead>
    <tr>
   <th>SN</th>
   <th>Name</th>
   <th>Date of Subscription</th>
   </tr>
  </thead>

  <tbody>
    @php
    $sn = 1;
    @endphp
    @foreach($subscribe as $list)
    <tr>
      <td>{{$sn++}}</td>
      <td>{{$list->name}}</td>
      <td>{{$list->date_subscribed}}</td>
    </tr>
    @endforeach
  </tbody>
    
  </table>
</div>
<div class="pagination">{{$subscribe->links()}}</div>
</div>

<!-- end video upload form -->
</div>
@endsection

@section('styles')
 <link href="{{ asset('assets/css/sidebar.css') }}" rel="stylesheet">
 <style type="text/css">
     .table
     {
        font-family: "Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;
        font-size: 14px;
     }
     .table tbody tr td
     {
        padding: 10px;
     }
    
 </style>
@endsection

@section('script')
<script src="{{ asset('assets/js/bootstrap-tagsinput.js') }}"></script>
<script type="text/javascript">
	(function( $ ) {
    // the sameHeight functions makes all the selected elements of the same height
    $.fn.sameHeight = function() {
        var selector = this;
        var heights = [];

        // Save the heights of every element into an array
        selector.each(function(){
            var height = $(this).height();
            heights.push(height);
        });

        // Get the biggest height
        var maxHeight = Math.max.apply(null, heights);
        // Show in the console to verify
        console.log(heights,maxHeight);

        // Set the maxHeight to every selected element
        selector.each(function(){
            $(this).height(maxHeight);
        }); 
    };
 
}( jQuery ));

	$(document).ready(function(){
	$('.eq .column').sameHeight();

$(window).resize(function(){
    // Do it when the window resizes too
    $('.eq .column').sameHeight();
});

});
</script>

@endsection

