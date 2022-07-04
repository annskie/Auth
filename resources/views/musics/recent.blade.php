@extends('base')

@section('content')


<h1>Musics</h1>
<hr>

<div class="d-flex justify-content-between">
  @foreach($recentMusic as $lis)

  <div class="card align-self-stretched  border-info mb-3 " style="width: 31%">
  <div class="card-header">Musics Info</div>
       <div class="card-body align-self-stretched ">
            <div class="card-title">
            <table class="table table-bordered border-primary">
            <tr>
                  <th scope = "row"> Title :</th><td>{{$lis->title}}</td>
                  </tr>
                  <tr>
                  <th scope = "row"> Singer :</th><td>{{$lis->singer}}</td>
                  </tr>
              </table>

            </div>
            <div class="d-flex justify-content-end ">
                <a href="{{url('/musics/edit/' . $lis->id)}}" class="btn btn-secondary btn-sm btn-outline-dark" style="margin: 1%"> Edit </a>
                <a href="{{url('/musics/list/' . $lis->id)}}" class="btn btn-secondary btn-sm btn-outline-warning" style="margin: 1%"> Open </a>
                <a href="{{url('/musics/open/' . $lis->id)}}" class="btn btn-secondary btn-sm btn-outline-danger" style="margin: 1%"> Delete </a>
            </div>

       </div>
  </div>
  @endforeach
</div>



@endsection
