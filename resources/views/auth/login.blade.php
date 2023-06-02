{{-- <x-guest-layout>
    <!-- Session Status -->
    {{-- <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </x-guest-layout>
    </form> --}}


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
     
      <div class="contaner">
        <div class="row">
            <div class="col-md-6 shadow px-5 mx-auto p-3 position-absolute top-50 start-50 translate-middle">
                <div class="text-center">
                    <h1>Se connecter</h1>
                </div>
                <form  method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label"> Email </label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('email')}}" name="email">
                      @if($errors->has('email'))
                           <h6 style="color:red;">Veuillez remplir le champ Email
                           </h6>

                        @endif
                      <div id="emailHelp" class="form-text">Nous ne partagerons jamais votre e-mail avec quelqu'un d'autre.</div>
                    </div>
                    
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label"> Mot de passe </label>
                      <input type="password" class="form-control" id="exampleInputPassword1"   value="{{old('password')}}" name="password">     
                      @if($errors->has('password'))
                      <h6 style="color:red;">Veuillez remplir le champ Mot de passe
                      </h6>

                     @endif
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Vérifiez-moi</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                
                    <a href="{{route('auth.register')}}">je n'ai pas de compte, créer un nouveau</a>
                  </form>
            </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>

