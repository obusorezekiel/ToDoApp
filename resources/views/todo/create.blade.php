@extends('layout.app')


@section('body')

<br>
<a href="/todo" class="btn btn-info">Go Back</a>
<div class="col-lg-4 col-lg-offset-4">
    <h1>Create New Todo Item</h1>
    <form class="form-horizontal" action="/todo" method="POST">
    {{csrf_field()}}
  <fieldset>
    <div class="form-group">
      <textarea class="form-control" name="body" id="exampleTextarea" rows="3"></textarea>
      <br>
      <button type="submit" class="btn btn-success">Submit</button>

    </div>
  </fieldset>
</form>
@if(count($errors) > 0)
<div class="alert alert-danger">
  @foreach($errors->all() as $error)
    {{$error}}
  @endforeach
</div>
@endif
</div>


@endsection