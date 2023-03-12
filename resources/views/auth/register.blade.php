<x-layout
title="registrati"
>
   <div class="container my-3 login-box ">
    <div class="row justify-content-center">
        <div class="col-12">
            <form method="POST" action="{{route('register')}}">
                @csrf
                <div class="mb-3">
                    <label class="form-label ">Nome</label>
                    <input type="text" class="form-control" name="name">
                  </div>
                <div class="mb-3">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control" name="password">
                </div>
                <div class="mb-3">
                    <label class="form-label">Conferma Password</label>
                    <input type="password" class="form-control" name="password_confirmation">
                  </div>
                <button type="submit" class="btn btn-secondary text-white">Submit</button>
               
              </form>


        </div>

    </div>

   </div>

</x-layout>