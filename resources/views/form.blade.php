<x-layout>

  <form method="POST" action="{{route('form.iscriviti')}}">
    @csrf
    <div class="form-group p-5">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email"  name="name" >
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group p-5">
      <label for="exampleInputPassword1">Password</label>
      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" name="email">
    </div>
    <div class="form-check m-5">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary m-5">Submit</button>
  </form>
</x-layout>


