

@include('layout.header')

@include('layout.sidebar')


<div class="col-10" style="width: 80%">
@include('layout.navbar')
<div class="row">
<div class="col-8">
@include('layout.linechart')
<div class="row">
  @include('layout.doughnutchart')
  @include('layout.barchart')
</div>
<div class="row">

  @include('layout.total')


</div>

</div>
<div class="col-4">
  {{-- todo --}}
  @include('layout.todo')
  @include('layout.calender')
  </div>
  
</div>

</div>


</div>



@include('layout.footer')