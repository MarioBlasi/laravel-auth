@extends('layouts.app')

@section('content')
    <div class="my_container bg-dark">
        <div class="container">
            <h1 class="text-uppercase text-center py-3 display-3 text-white ">Projects</h1>
            <div class="row row-cols-md-4 g-4 pb-5">
                @forelse ($projectList as $project)
                    <div class="col">
                        <div class="card h-100 rounded-0 border-0 shadow">
                            <img class="card-img-top rounded-0" src="{{ $project->image }}" alt="Title">
                            <div class="card-body">
                                <h4 class="card-title">{{ $project->name . ' ' . $project->email }}</h4>
                                <span class="card-text m-0">{{ $project->email }} </span>
                                <p class="card-text m-0">
                                    email_verified
                                    <strong class="text-capitalize">{{ $project->email_verified_at }}</strong>
                                </p>
                                <p class="card-text m-0">
                                    <strong>password: </strong>
                                    {{ $project->password}}
                                </p>
                            </div>
                            <div class="card-footer bg-white">
                                <
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col">
                        <p>Sorry </p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
sdgsd