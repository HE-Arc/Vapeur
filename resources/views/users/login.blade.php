@extends("layout.app")

@section("content")
<div class="row mb-3 justify-content-center">
    <div class="col-12 col-md-6 col-lg-4">
        <div class="row">
            <h3>Log in</h3>
        </div>
        <form class="row g-3" action="{{route("users.loginInput")}}" method="POST">
            @csrf
            <div class="col-12">
                <label for="name" class="form-label">Username</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Username" required autofocus>
            </div>
            <div class="col-12">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-secondary">Log in</button>
            </div>
            <div class="col-12">
                <a href="{{route("users.register")}}">Don't have an account?</a>
            </div>
        </form>
    </div>
</div>
@endsection
