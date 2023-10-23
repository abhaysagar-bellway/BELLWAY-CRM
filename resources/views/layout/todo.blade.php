<section class="section dashboard">


    <!-- todo -->
    <div class="card">
      <div class="filter">
        <button type="button" class="btn icon" style="background-color: #1B2137" data-toggle="modal" data-target="#exampleModal">
            <i class="bi bi-plus-square"></i> Add New
          </button>
           
    
    </div>

      <div class="card-body pb-0">
        <h5 class="card-title">To do</h5>

        <div id="" style="min-height: 200px;" class="echart">
          <ul class="todo-list"> 
            @foreach ($todo as $todos) 
                <li>{{ $todos->todo }}</li> 
            @endforeach 
          </ul> 
                </div>
              </div>
        </div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Todo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{url('/todo')}}" method="post">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="todo" id="todo" aria-describedby="emailHelp" placeholder="Enter email">

              </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save Todo</button>
        </div>
    </form>
</div>
      </div>
    </div>
  </div>
{{-- end modal --}}




<script>
$('#myModal').modal('toggle')
</script>
</section>

