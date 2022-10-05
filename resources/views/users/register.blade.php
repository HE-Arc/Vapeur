@extends("layout.app")

@section("content")
<div class="row mb-3">
    <h3>Register account</h3>
</div>
<form class="row g-3" action="{{route("users.registerInput")}}" method="POST">
    @csrf
    <div class="col-12">
        <label for="name" class="form-label">Username</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Username" required autofocus>
    </div>
    <div class="col-12">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
    </div>
    <div class="col-12">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-dark">Register</button>
    </div>
    <div class="col-12">
        <a href="{{route("users.login")}}">Already have an account?</a>
    </div>
</form>
@endsection