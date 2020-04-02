@if ($errors->any())
    <div class="alert alert-danger">
    	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (Session::has('success_delete'))
   
     <div class="alert alert-danger">
        <p>{{ Session::get('success_delete') }}</p> 
    </div>   

@endif

@if (Session::has('success_add'))
   
     <div class="alert alert-warning">
        <p>{{ Session::get('success_add') }}</p> 
    </div>   

@endif

@if (Session::has('success_updated'))
   
     <div class="alert alert-info">
        <p>{{ Session::get('success_updated') }}</p> 
    </div>   

@endif