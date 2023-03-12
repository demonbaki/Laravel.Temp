<x-layout class="">
    <x-header
        title ='Login'
    />
    <div class="container login-box ">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-6 col-12 my-5">
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3">
                        <label  class="form-label user-box">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label user-box">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div> 
                    <p>Don't have an account? <a href="{{route('register')}}" class="a2">Sign up!</a></p>
                        <button type="submit" class="btn btn-secondary text-white">Entra</button>
                  </form>
            </div>
        </div>
    </div>
   
</x-layout>