@include('layout.header')


<div class="container">
    <div class="row">
        <div class="col-1">
            @include('layout.sidebar')
        </div>
        <div class="col-2">
            @include('layout.chatlist')
        </div>
        <div class="col-9">
        @include('layout.navbar')
       <div class="row">
      @include('layout.chatbox')

       </div>



        </div>
    </div>



</div>


























@include('layout.footer')