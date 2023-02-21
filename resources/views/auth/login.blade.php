<x-layout>
    <x-header
        title ='Login'
    />
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-12 my-5">
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3">
                        <label  class="form-label">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div> 
                        <button type="submit" class="btn btn-primary">Entra</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>