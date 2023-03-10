@extends('layout.layout')

@section('content')

    <main>
      <section>
        <div class="container mx-auto px-4 mb-10">
          <form class="lg:w-3/6 lg:mx-auto">
            <div class="mb-4">
              <label
                for="email"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
              >
                Email</label
              >
              <div class="relative">
                <div
                  class="flex absolute h-full inset-y-0 left-0 items-center pl-3 pointer-events-none"
                >
                  <i class="uil uil-envelope-alt text-2xl text-blue-500"></i>
                </div>
                <input
                  type="text"
                  id="email"
                  placeholder="abc@gmail.com"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                />
              </div>
            </div>

            <div class="mb-4">
              <label
                for="email"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                >Password</label
              >
              <div class="relative">
                <div
                  class="flex absolute h-full inset-y-0 left-0 items-center pl-3 pointer-events-none"
                >
                  <i class="uil uil-lock text-2xl text-blue-500"></i>
                </div>
                <input
                  type="text"
                  id="email"
                  placeholder="********"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                />
              </div>
            </div>
            <button
              type="submit"
              class="text-white w-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            >
              LOGIN
            </button>
          </form>
        </div>
      </section>
    </main>
 @endsection
