@extends('layout.layout')

@section('content')

    <main>
      <section>
        <div class="container mx-auto px-4 mb-10">
          <form method="POST" action="{{ route('register') }}" class="lg:w-3/6 lg:mx-auto">
            @csrf
            <div class="mb-4">
              @if(isset($detail))
              <label
                for="name"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
              >
                 Invited By: {{$detail->name}}</label>
                 <input
                type="hidden"
                id="invite-id"
                value="{{$detail->id}}"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                name="invite_id"
              />
              @endif
              <label
                for="name"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
              >
                Name</label>
              <input
                type="text"
                id="name"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                required
                name="name"
              />

              
              <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            <div class="mb-4">
              <label
                for="email"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
              >
                Email</label
              >
              <input
                type="email"
                id="email"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                required
                name="email"
              />
              <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div class="mb-4 flex justify-center gap-12">
              <span class="flex">
                <input
                  id="male"
                  type="radio"
                  required
                  name="gender"
                  value="male"
                  class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                />
                <label
                  for="male"
                  class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                >
                  Male
                </label>
              </span>
              <span class="flex">
                <input
                  id="female"
                  type="radio"
                  required
                  name="gender"
                  value="female"
                  class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                />
                <label
                  for="female"
                  class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                >
                  Female
                </label>
              </span>
            </div>
            <div class="mb-4">
              <label
                for="phone"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
              >
                Phone</label
              >
              <input
                type="tel"
                id="phone"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                required
                name="phone"
              />
              <x-input-error :messages="$errors->get('phone')" class="mt-2" />
            </div>
            <div class="mb-4">
              <label
                for="country"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
              >
                Country</label
              >
              <input
                type="text"
                id="country"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                required
                name="country"
              />
              <x-input-error :messages="$errors->get('country')" class="mt-2" />
            </div>
            <div class="mb-4">
              <label
                for="city"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
              >
                City</label
              >
              <input
                type="city"
                id="name"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                required
                name="city"
              />
              <x-input-error :messages="$errors->get('city')" class="mt-2" />
            </div>
            <div class="mb-4">
              <label
                for="address"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                >Complete Address</label
              >
              <textarea
                id="address"
                rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              name="address"></textarea>
              <x-input-error :messages="$errors->get('address')" class="mt-2" />
            </div>
            <div class="mb-4">
              <label
                for="password"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                >Your password</label
              >
              <input
                type="password"
                id="password"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                required
                name="password"
              />
              <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <div class="mb-4">
              <label
                for="repeat-password"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                >Repeat password</label
              >
              <input
                type="password"
                id="password_confirmation"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                required
                name="password_confirmation"
              />
              <x-input-error :messages="$errors->get('repeat-password')" class="mt-2" />
            </div>
            <div class="flex items-start mb-4">
              <div class="flex items-center h-5">
                <input
                  id="terms"
                  type="checkbox"
                  value=""
                  class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800"
                  required
                />
              </div>
              <label
                for="terms"
                class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                >I agree with the
                <a
                  href="#"
                  class="text-blue-600 hover:underline dark:text-blue-500"
                  >terms and conditions</a
                ></label>
                
            </div>
            <div class="flex items-start mb-4">
               <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
            </div>
            <button
            style="background-color: black;"
              type="submit"
              class="text-white  hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            >
              Register account
            </button>
          </form>
        </div>
      </section>
    </main>
  @endsection
