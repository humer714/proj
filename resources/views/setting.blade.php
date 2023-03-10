@extends('layout.layout')

@section('content')

    <main>
      <section>
        <div class="container mx-auto px-4 mb-10">
          <h3 class="text-2xl font-medium uppercase text-center">
            Account Setting
          </h3>
          @if($data)
          <form action="{{route('updateaccount',['id'=>$data->id])}}" method="post" enctype="multipart/form-data" class="lg:w-3/6 lg:mx-auto">
            @csrf
            <div class="mb-4">
              <label
                for="name"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
              >
                Bank Name</label
              >
              <input
                type="text"
                value="{{$data->bankname}}"
                name="name"
                id="title"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                required
              />
            </div>
            <div class="mb-4">
              <label
                for="phone"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
              >
                Account Title</label
              >
              <input
                type="tel"
                value="{{$data->title}}"
                id="phone"
                name="title"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                required
              />
            </div>
            <div class="mb-4">
              <label
              for="number"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                >Account Number</label
              >
              <input
                type="text"
                value="{{$data->number}}"
                id=""
                name="number"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                required
              />
            </div>
            <button
              type="submit"
              class="text-white bg-blue-700 float-right hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text- px-3 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            >
              SAVE
            </button>
          </form>

@else





          <form action="{{route('addaccount')}}" method="post" enctype="multipart/form-data" class="lg:w-3/6 lg:mx-auto">
            @csrf
            <div class="mb-4">
              <label
                for="name"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
              >
                Bank Name</label
              >
              <input
                type="text"
                
                name="name"
                id="title"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                required
              />
            </div>
            <div class="mb-4">
              <label
                for="phone"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
              >
                Account Title</label
              >
              <input
                type="tel"
                
                id="phone"
                name="title"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                required
              />
            </div>
            <div class="mb-4">
              <label
              for="number"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                >Account Number</label
              >
              <input
                type="text"
                id=""
                name="number"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                required
              />
            </div>
            <button
              type="submit"
              class="text-white bg-blue-700 float-right hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text- px-3 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            >
              SAVE
            </button>
          </form>
          @endif
        </div>
      </section>
    </main>
 @endsection
