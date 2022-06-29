@extends('layouts.guest')
    <x-auth-card>
       

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{route('register')}}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('First Name')" />

                <x-input id="name" class="block mt-1 w-full " type="text" name="first_name"  required autofocus/>
            </div>
            <div>
                <x-label for="name" :value="__('Last Name')" />

                <x-input id="name" class="block mt-1 w-full " type="text" name="last_name"  required autofocus/>
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')"/>

                <x-input id="email" class="block mt-1 w-full " type="email" name="email" placeholder="@example.gmail.com"  required />
            </div>
            <div>
                <x-label for="name" :value="__('Phone')" />

                <x-input id="name" class="block mt-1 w-full " type="text" name="phone"  required  placeholder="+254xxxxxxxxx" autofocus/>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                id="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password" id="conf_password" name="password_confirmation" required />
              <script>
                  if(document.querySelector('.conf_password').value !== document.querySelector('.password').value ){
                     document.querySelector('.reg_btn').disabled();
                     alert("Password do not match"); 
                  }
              </script>
            </div>

            <div class="items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4" id="reg_btn">
                {{__('Register')}}
                </x-button>
            </div>
        </form>
    </x-auth-card>

