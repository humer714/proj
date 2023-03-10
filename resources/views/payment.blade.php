@extends('layout.layout')

@section('content')
    <main>
      <section>
        <div class="container mx-auto px-4 mb-10 space-y-4">
          <div>
            <p class="text-center text-lg">
              {{$data->text}}
            </p>
          </div>
          <div class="flex items-center justify-center flex-col">
            <span>
              <img src="assets/easypaisa.png" alt="" class="w-12" />
            </span>
            <span class="flex gap-2">
              <h4 class="text-xl font-semibold">Account Title:</h4>
              <h4 class="text-xl font-semibold">{{$data->easypaisa_title}}</h4>
            </span>
            <span class="flex gap-2">
              <h4 class="text-xl font-semibold">Account Number:</h4>
              <h4 class="text-xl font-semibold"> {{$data->easypaisa_no}}</h4>
            </span>
          </div>
          <form action="{{route('trxid')}}" method="post" enctype="multipart/form-data" class="lg:w-3/6 lg:mx-auto">
            @csrf
            <div class="mb-2">
              <label
                for="trx"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
              >
                Enter TRX ID</label
              >
              <input
                type="number"
                id="trx"
                name="trx_id"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                required
              />
            </div>
            <div class="mb-2">
              <label
                for="number"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
              >
                Enter Number</label
              >
              <input
                type="number"
                id="number"
                name="senderno"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                required
              />
            </div>
            <button
              type="submit"
              class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            >
              Submit
            </button>
          </form>
        </div>
      </section>
    </main>
  @endsection
