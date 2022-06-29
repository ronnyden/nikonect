@extends('layouts.guest')
    <x-auth-card>
       

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{route('/users/update/{$user->id}')}}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('First Name')" />

                <x-input id="name" class="block mt-1 w-full " type="text" name="first_name" value={{$user->first_name}}  required autofocus/>
            </div>
            <div>
                <x-label for="name" :value="__('Last Name')" />

                <x-input id="name" class="block mt-1 w-full " type="text" name="last_name" value={{$user->last_name}} required autofocus/>
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')"/>

                <x-input id="email" class="block mt-1 w-full " type="email" name="email" value={{$user->email}} required />
            </div>
            <div>
                <x-label for="name" :value="__('Phone')" />

                <x-input id="name" class="block mt-1 w-full " type="text" name="phone"  required value={{$user->phone}} autofocus/>
            </div>

            <div class="items-center justify-end mt-4">
               <x-button class="ml-4" id="reg_btn">
                {{__('UPDATE')}}
                </x-button>
            </div>
        </form>
    </x-auth-card>

