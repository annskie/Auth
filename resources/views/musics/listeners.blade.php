@extends('base')

@section('content')

<div class="float-end mt-2">
   <a href="{{'/musics/create'}}" class="btn btn-outline-primary">
       Add Music
   </a>
</div>

<h1>Musics</h1>
<hr>

<div class="d-flex justify-content-between">
  @foreach($musicList as $lis)

  <div class="card align-self-stretched border-warning mb-3 " style="width: 31%">
  <div class="card-header">Musics Info</div>
       <div class="card-body">
            <div class="card-title">
            <table class="table table-bordered border-dark">
                <tr>
                  <th scope = "row"> Title :</th><td>{{$lis->title}}</td>
                  </tr>
                  <tr>
                  <th scope = "row"> Singer :</th><td>{{$lis->singer}}</td>
                  </tr>
              </table>

            </div>
            <div class="mb-2 d-flex justify-content-end ">
                <a href="{{url('/musics/edit/' . $lis->id)}}" class="btn btn-primary btn-sm btn-outline-dark" style="margin: 1%"> Edit </a>
                <a href="{{url('/musics/list/' . $lis->id)}}" class="btn btn-primary btn-sm btn-outline-warning" style="margin: 1%"> Open </a>
                <a href="{{url('/musics/open/' . $lis->id)}}" class="btn btn-primary btn-sm btn-outline-danger" style="margin: 1%"> Delete </a>
            </div>

       </div>
  </div>
  @endforeach
</div>



@endsection
