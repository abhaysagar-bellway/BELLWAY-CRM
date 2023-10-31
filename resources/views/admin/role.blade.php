@include('layout.header')
<div class="container">
<div class="row">
@include('layout.sidebar')
<div class="col-10">
@include('layout.navbar')
</div>
</div>

</div>
   
   @if ($message = Session::get('status'))
<div class="alert alert-success alert-block text-center">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong>{{ $message }}</strong>
</div>
@endif

    <div class="logo-head">
        <div class="inquiry-header">
            <label for="date"class="inquiry-lable"><img src="assets/img/search-enquiry.png" alt=""
                    class="inquiry-logo"></label>
            <h3 id="inquiry-header">Employee Role</h3>
        </div>
    </div>

    <div class="enquiry-container">
        <form action="{{url('/role')}}" method="POST">
            @csrf
            <div class="enquiry-row row ">
                <div class="form-group col-md-6">
                    <label for="name" class="row-text">Role Name</label>
                    <div class="input-inline-inquiry"><label for="name" class="inquiry-lable"><img
                                src="assets/img/user.png" alt="" class="form-icon"></label>
                        <input type="name" class="form-control input-box-enquiry rectangle" name="rolename"
                            id="" aria-describedby="role" placeholder="Enter the role">
                    </div>

                </div>
             <div class="enquiry-title">
                    <h3 id="module-permission" style="margin: 12px">Module Permission</h3>
                </div>
                <div class="form-group col-md-6">
                    <div class="form-check form-check-inline form-role form-role">
                        <input class="form-check-input" type="checkbox" name="checkbox[]" value="Dashboard">
                        <label class="form-check-label" for="inlineCheckbox1"id="inlineCheckbox3">Dashboard</label>
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <div class="form-check form-check-inline form-role">
                        <input class="form-check-input" type="checkbox" name="checkbox[]" value="TodoList">
                        <label class="form-check-label" for="inlineCheckbox2"id="inlineCheckbox3">Todo List</label>
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <div class="form-check form-check-inline form-role">
                        <input class="form-check-input" type="checkbox" name="checkbox[]" value="SearchEnquiry">
                        <label class="form-check-label" for="inlineCheckbox3"id="inlineCheckbox3">Search Enquiry</label>
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <div class="form-check form-check-inline form-role">
                        <input class="form-check-input" type="checkbox" name="checkbox[]" value="AddEnquiry">
                        <label class="form-check-label" for="inlineCheckbox3"id="inlineCheckbox3">Add Enquiry</label>
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <div class="form-check form-check-inline form-role">
                        <input class="form-check-input" type="checkbox" name="checkbox[]" value="NewEnquiry">
                        <label class="form-check-label" for="inlineCheckbox3"id="inlineCheckbox3">New Enquiry</label>
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <div class="form-check form-check-inline form-role">
                        <input class="form-check-input" type="checkbox" name="checkbox[]" value="ClientDetails">
                        <label class="form-check-label" for="inlineCheckbox3"id="inlineCheckbox3">Client Details</label>
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <div class="form-check form-check-inline form-role">
                        <input class="form-check-input" type="checkbox" name="checkbox[]" value="PurposalDetails">
                        <label class="form-check-label" for="inlineCheckbox3"id="inlineCheckbox3">Purposal Details</label>
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <div class="form-check form-check-inline form-role">
                        <input class="form-check-input" type="checkbox" name="checkbox[]" value="PendingFollowup">
                        <label class="form-check-label" for="inlineCheckbox3"id="inlineCheckbox3">Pending Follow up</label>
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <div class="form-check form-check-inline form-role">
                        <input class="form-check-input" type="checkbox" name="checkbox[]" value="DoneFollowUp">
                        <label class="form-check-label" for="inlineCheckbox3"id="inlineCheckbox3">Done Follow Up</label>
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <div class="form-check form-check-inline form-role">
                        <input class="form-check-input" type="checkbox"name="checkbox[]" value="LeadAllcated">
                        <label class="form-check-label" for="inlineCheckbox3"id="inlineCheckbox3" >Lead Allcated</label>
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <div class="form-check form-check-inline form-role">
                        <input class="form-check-input" type="checkbox"name="checkbox[]"  value="Chat">
                        <label class="form-check-label" for="inlineCheckbox3"id="inlineCheckbox3">Chat</label>
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <div class="form-check form-check-inline form-role">
                        <input class="form-check-input" type="checkbox"name="checkbox[]" value="CreateUser">
                        <label class="form-check-label" for="inlineCheckbox3"id="inlineCheckbox3" >Create User</label>
                      </div>
                    </div>
               
                <div class="form-group col-md-6">
                    <div class="submit-inquiry">
                        <label for="text" class="row-text"></label>
                        <div class="input-inline-inquiry "id="role-submit"> <button type="submit"
                                class="submit-btn">Submit</button>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>

    <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">Sno.</th>
            <th scope="col">Employee Name</th>
            <th scope="col">Module Permission</th>
          </tr>
        </thead>
        <tbody> 
            @foreach ( $role as $roles )     
           <tr>
            <th scope="row">{{$roles->id}}</th>
            <td>{{$roles->rolename}}</td>
            <td>{{$roles->checkbox}}</td>
          </tr>
           @endforeach
        </tbody>
      </table>

    @include('layout.footer')