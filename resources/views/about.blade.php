@extends("layout.app")
@section("content")

<div class="container-sm">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-6">
            <div class="row mt-3 mb-3">
                <h3>About us</h3>
            </div>
            <div class="row g-3">
                <p>We are Vapor, we've been helping you to organise your collection of the latest and greatest games since 1995.</p>
                <div class="text-center">
                    <img src="{{asset("images/logo.jpg")}}" class="rounded" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
