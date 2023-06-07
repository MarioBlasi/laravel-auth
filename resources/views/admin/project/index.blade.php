@extends('layouts.app')
@section('title', 'Project' )

@section('content')

<div class="container">

    @if (session('message'))
    <div class="alert alert-primary" role="alert">
        <strong>{{session('message')}}</strong>
    </div>

    @endif

    <h1>project List</h1>

    <a class="btn btn-primary my-4" href="{{route('admin.project.create')}}" role="button">Create</a>

    <div class="table-responsive">
        <table class="table table-secondary">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">PASSWORD</th>
                </tr>
            </thead>
            <tbody>

                @forelse ($projectList as $project)
                <tr>
                    <td scope="row">{{$project->id}}</td>
                    <td>{{$project->name}}</td>
                    <td>{{$project->email}}</td>
                    <td>{{$project->password}}</td>
                    <td>
                        <img width="100" class="img-fluid" src="{{$project->image}}" alt="{{$project->name .' ' . $project->email}}">
                    </td>
                    <td>
                        <div class="d-flex align-items-center gap-2">
                            <a href="{{ route('admin.project.show', $project->id) }}" class="btn btn-outline-dark d-flex align-items-center gap-1" title="{{ __('View') }}">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a href="{{ route('admin.project.edit', $project->id) }}" class="btn btn-outline-dark d-flex align-items-center gap-1" title="{{ __('Edit') }}">
                                <i class="fa-solid fa-pencil"></i>
                            </a>
                            <!-- Modal trigger button -->
                            <button type="button" class="btn btn-outline-danger d-flex align-items-center gap-1" data-bs-toggle="modal" data-bs-target="{{ '#modal' . $project->id }}" title="{{ __('Delete') }}">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                            <div class="modal fade" id="{{ 'modal' . $project->id }}" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="{{ 'modalTitle' . $project->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-danger" id="{{ 'modalTitle' . $project->id }}">{{ __('Danger Zone') }}
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div>{{ __("This operation is irreversible.") }}</div>
                                            <div class="fw-semibold">{{ __("Are you sure?") }}</div>
                                        </div>
                                        <div class="modal-footer d-flex justify-content-between">
                                            <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">{{ __('Close') }}</button>
                                            <form action="{{ route('admin.project.destroy', $project) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger">
                                                    <i class="fa-solid fa-trash me-1"></i>
                                                    {{ __('Delete permanently') }}
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </td>

                </tr>

                @empty
                <tr class="">
                    <td>No results</td>
                </tr>
                @endforelse


            </tbody>
        </table>
    </div>

</div>





@endsection


