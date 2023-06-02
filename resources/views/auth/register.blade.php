{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
     
      <div class="contaner">
        <div class="row">
            <div class="col-md-6 shadow px-5 mx-auto p-3 position-absolute top-50 start-50 translate-middle">
                <div class="text-center">
                    <h1>Créer un compte</h1>
                   <p>C’est rapide et facile.</p> 
                </div>
                <form method="POST" action="">

                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"> Prénom </label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Prénom"  name="Prenom" value="{{old('Prenom')}}" >
                        @if($errors->has('Prenom'))
                        <h6 style="color:red;">Veuillez remplir le champ  Prénom 
                        </h6>

                       @endif
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"> Nom de famille </label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Nom de famille" name="nomfamille" value="{{old('nomfamille')}}" >
                        @if($errors->has('nomfamille'))
                        <h6 style="color:red;">Veuillez remplir le champ Email
                        </h6>

                     @endif
                      </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label"> Email </label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{old('email')}}">
                      @if($errors->has('email'))
                      <h6 style="color:red;">Veuillez remplir le champ Email
                      </h6>

                   @endif
                     </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label"> Mot de passe </label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="password" >
                      @if($errors->has('password'))
                      <h6 style="color:red;">Veuillez remplir le champ Mot de passe
                      </h6>

                   @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                
                    <a href="{{route('auth.login')}}">j'ai déjà un compte, me connecter</a>
                  </form>
            </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>



