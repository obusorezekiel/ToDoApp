@extends('layout.app')

@section('body')
<br/>
<a href="todo/create" class="btn btn-info">New Item</a>
<div class="col-lg-4 col-lg-offset-4">
    <center><h1>Todo Lists</h1></center>
    <ul class="list-group">
    @foreach($todos as $todo)
  <li class="list-group-item">
    <span class="tag tag-default tag-pill float-xs-right">{{$todo->id}}</span>
    {{$todo->body}}
    <span class="pull-right">{{$todo->created_at->diffForHumans()}}</span>

  </li>
  @endforeach
</ul>
</div>
@endsection