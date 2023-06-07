@extends('layouts.app')
@section('title', '' )

@section('content')
<div class=" container w-50">

    <a name="" id="" class="btn btn-primary my-3" href="{{route('admin.projects.index')}}" role="button">return</a>

    <div class="row shadow my-5 rounded rounded-2 p-3">
        <div class="col-12 col-lg-6">
            <img src="{{$project->image}}" alt="">
        </div>
        <div class="col-12 col-lg-6">
            <h3>{{$project->name. ' '. $project->email}}</h3>
            <p><strong>E-mail: </strong>{{$project->email}}</p>
            <p><strong>E-mail Verificata: </strong>{{$project->email_verified_at}}</p>
            <p><strong>Password: </strong>{{$project->password}}</p>
            
        </div>
    </div>
</div>
@endsection
@endsection


