@extends('layouts.app')

@section('name', 'Add new project')

@section('content')

    <div class="container">

        <h1 class="text-center p-3 text-uppercase">Add Projects</h1>
        <form action="{{ route('admin.projects.store') }}" method="post">
            @csrf

            <div class="mb-3 mt-5">
                <label for="name" class="form-label text-dark"><strong>name</strong></label>
                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                    aria-describedby="nameHelper" placeholder="" value="{{ old('name') }}">
                <small id="nameHelper" class="text-muted">
                    Digita il nome</small>
            </div>

            <div class="mb-3 mt-5">
                <label for="email" class="form-label text-dark"><strong>email</strong></label>
                <input type="text" name="email" id="email"
                    class="form-control @error('email') is-invalid @enderror" aria-describedby="emailHelper"
                    placeholder="" value="{{ old('email') }}">
                <small id="emailHelper" class="text-muted"></small>
            </div>

            <div class="mb-3 mt-5">
                <label for="password" class="form-label text-dark"><strong>password</strong></label>
                <input type="password" name="password" id="password"
                    class="form-control @error('password') is-invalid @enderror" aria-describedby="passwordHelper"
                    placeholder="">
                <small id="passwordHelper" class="text-muted"></small>
            </div>

            <div class="mb-3 mt-5">
                <label for="password_confirmation" class="form-label text-dark"><strong>confirm password</strong></label>
                <input type="password" name="password_confirmation" id="password_confirmation"
                    class="form-control @error('password_confirmation') is-invalid @enderror" aria-describedby="passwordConfirmationHelper"
                    placeholder="">
                <small id="passwordConfirmationHelper" class="text-muted"></small>
            </div>

            <div class="mb-3 mt-5">
                <label for="remember_token" class="form-label text-dark"><strong>remember token</strong></label>
                <input type="text" name="remember_token" id="remember_token"
                    class="form-control @error('remember_token') is-invalid @enderror" aria-describedby="rememberTokenHelper"
                    placeholder="" value="{{ old('remember_token') }}">
                <small id="rememberTokenHelper" class="text-muted"></small>
            </div>

            <div class="mb-3 mt-5">
                <label for="email_verified_at" class="form-label text-dark"><strong>email verified at</strong></label>
                <input type="text" name="email_verified_at" id="email_verified_at"
                    class="form-control @error('email_verified_at') is-invalid @enderror" aria-describedby="emailVerifiedAtHelper"
                    placeholder="" value="{{ old('email_verified_at') }}">
                <small id="emailVerifiedAtHelper" class="text-muted"></small>
            </div>

            <div class="mb-3 mt-5">
                <label for="timestamps" class="form-label text-dark"><strong>timestamps</strong></label>
                <input type="text" name="timestamps" id="timestamps"
                    class="form-control @error('timestamps') is-invalid @enderror" aria-describedby="timestampsHelper"
                    placeholder="" value="{{ old('timestamps') }}">
                <small id="timestampsHelper" class="text-muted"></small>
            </div>

            <td class="shadow">
                <button type="submit" class="btn btn-primary btn-lg btn-block m-3">Add</button>
                <button type="reset" class="btn btn-warning btn-lg btn-block m-3">Reset</button>
            </td>
        </form>

    </div>
@endsection

