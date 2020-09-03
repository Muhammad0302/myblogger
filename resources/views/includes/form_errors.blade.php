

@if($errors->count() > 0)
  <p>The following errors have occurred:</p>
  <div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $message)
      <li>{{$message}}</li>
    @endforeach
  </ul>
  </div>
@endif