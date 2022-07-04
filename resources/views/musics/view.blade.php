@extends('base')

@section('content')

<div>{{$lis->user->lname}}, {{$lis->user->fname}} <br />
    {{$lis->created_at->format('F d, Y g:i A')}}
</div>

<table class="table table-bordered border-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Singer</th>
      <th scope="col">Genre</th>
      <th scope="col">Year of Release</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$lis->id}}</th>
      <td>{{$lis->title}}</td>
      <td>{{$lis->singer}}</td>
      <td>{{$lis->genre}}</td>
      <td>{{$lis->year_of_release}}</td>
    </tr>
  </tbody>
</table>
@endsection
