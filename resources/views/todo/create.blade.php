@extends('layout.app')


@section('body')

<br>
<a href="/todo" class="btn btn-info">Go Back</a>
<div class="col-lg-4 col-lg-offset-4">
    <h1>{{ucfirst(substr(Route::currentRouteName(),5))}} Item</h1>
    <form class="form-horizontal" action="/todo/@yield('editId')" method="POST">
    {{csrf_field()}}
    @section('editMethod')
      @show
  <fieldset>
    <div class="form-group">
      <input placeholder="Title" class="form-control" name="title" value="@yield('editTitle')" id="exampleTextarea" rows="3"/>
      <br>
    </div>
    <div class="form-group">
      <textarea placeholder="Body" class="form-control" name="body" id="exampleTextarea" rows="3">@yield('editBody')</textarea>
      <br>
      <button type="submit" class="btn btn-success">Submit</button>
    </div>
  </fieldset>
</form>
@include('todo.partials.errors')
</div>


@endsection