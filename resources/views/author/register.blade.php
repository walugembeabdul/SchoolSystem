@extends("layout.auth")
@section("style")
<style>
    html,
body {
  height: 100%;
}

.form-signin {
  max-width: 330px;
  padding: 1rem;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
    </style>
@endsection
@section("content")
<main class="form-signin w-100 m-auto mt-4 p-4">
    <form method="post" action="{{route("registerpost")}}">
        @csrf
      <img class="mb-4" src="{{asset("E:\projects\mydream\mydream\public\asset\img")}}" alt="logo" width="100%" height="70">
      <h1 class="h3 mb-3 fw-normal">Please create your account</h1>

      <div class="form-floating">
        <input name="name" type="text" class="form-control" id="floatingInput" placeholder="full name">
        <label for="name">full name</label>
        @error("name")
        <span class="text-danger">{{$message}}</span
        @enderror
      </div>
      <div class="form-floating">
        <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
        @error("email")
        <span class="text-danger">{{$message}}</span
        @enderror
      </div>
      <div class="form-group">
        <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="e.g aA2!...">
        <label for="Password">Password</label>
        @error("password")
        <span class="text-danger">{{$message}}</span
        @enderror
      </div>
      @if(@session()->has("success"))
<div class="alert alert-secondary">
    {{session()->get("success")}}
</div>
@endif
@if(@session("error"))
<div class="alert alert-danger">
    {{session("error")}}
</div>
@endif
      <button class="btn btn-primary w-100 py-2" type="submit">create an account</button>
      <br>
      <div class="mb-4 p-7 text-center">
        <a href="{{route("login")}}"class="btn btn-secondary w-150 mb-4 p-2" type="submit">sign up!</a>
      </div>
      <p class="mt-5 mb-3 text-body-secondary">&copy; students profile</p>

    </form>
  </main>
@endsection
