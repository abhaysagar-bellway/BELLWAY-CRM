@include('layout.header')
 
@include('layout.sidebar')


<div class="col-9">
@include('layout.navbar')
<div class="row">
<div class="col-8">
@include('layout.linechart')

</div>
<div class="col-4">
  {{-- todo --}}
  @include('layout.todo')
  </div>
  
  
  
</div>
  
  <div class="row">
<div class="col-6">
@include('layout.doughnutchart')
</div>
<div class="col-6">

@include('layout.barchart')
</div>
  </div>
  <div class="row">
<div class="col-12">
  <h1>sales</h1>
</div>
</div>
</div>


</div>




@include('layout.footer')