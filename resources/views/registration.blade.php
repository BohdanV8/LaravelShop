@extends('layouts.app')


@section('titleOfPage')
Registration
@endsection


@section('content')
<section class="vh-100 mt-5" style="background-color: #eee;"> <div class="container h-100"> <div class="row d-flex
    justify-content-center align-items-center h-100"> <div class="col-lg-12 col-xl-11"> <div class="card text-black"
    style="border-radius: 25px;">
    <div class="card-body p-md-5"> <div class="row justify-content-center"> <div class="col-md-10 col-lg-6
        col-xl-5order-2 order-lg-1"> @if($errors->any())
        <div class="alert alert-danger">
        <ul> @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
        </ul>
    </div>
    @endif
    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-3">Sign up</p>
    <form class="mx-1 mx-md-4" action="/register" method="post">
        @csrf
        <div class="d-flex flex-row align-items-center mb-4">
            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
            <div class="form-outline flex-fill mb-0">
                <label class="form-label" for="name">Your Name</label>
                <input type="text" name="name" id="name" class="form-control" />
            </div>
        </div>
        <div class="d-flex flex-row align-items-center mb-4">
            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
            <div class="form-outline flex-fill mb-0">
                <label class="form-label" for="surname">Your Surname</label>
                <input type="text" name="surname" id="surname" class="form-control" />
            </div>
        </div>
        <div class="d-flex flex-row align-items-center mb-4">
            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
            <div class="form-outline flex-fill mb-0">
                <label class="form-label" for="middle_name">Your Middlename</label>
                <input type="text" name="middle_name" id="middle_name" class="form-control" />
            </div>
        </div>
        <div class="d-flex flex-row align-items-center mb-4">
            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
            <div class="form-outline flex-fill mb-0">
                <label class="form-label" for="email">Your email</label>
                <input type="email" name="email" id="email" class="form-control" />
            </div>
        </div>
        <div class="d-flex flex-row align-items-center mb-4">
            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
            <div class="form-outline flex-fill mb-0">
                <label class="form-label" for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" />
            </div>
        </div>
        <div class="d-flex flex-row align-items-center mb-4">
            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
            <div class="form-outline flex-fill mb-0">
                <div class="container mt-4">
                    <div class="form-group">
                        <label for="type">Виберіть роль:</label>
                        <select class="form-control" name="type" id="type">
                            <option value="admin">Адміністратор</option>
                            <option value="user">Звичайний користувач</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
            <button type="submit" class="btn btn-primary btn-lg">Register</button>
        </div>

    </form>

    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</section>
@endsection