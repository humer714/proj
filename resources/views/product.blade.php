@extends('layout.layout')

@section('content')
    <main>
        
      <section>
        <div class="container mx-auto px-4 mb-10 flex flex-col gap-4">
          <h3 class="text-2xl font-medium uppercase text-center">Products</h3>
          <div class="grid sm:grid-cols-1 lg:grid-cols-3 gap-4 lg:w-4/5 lg:mx-auto">
            @foreach($products as $product)
            <div class="p-3 border border-gray-200 rounded-lg shadow-md flex flex-col gap-2">
              <span>
                <img src="{{$product->pic}}" alt="" class="rounded-lg" />
              </span>
              <span class="flex item-center justify-between">
                <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                  YES
                </button>
                <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                  NO
                </button>
              </span>
            </div>
            @endforeach
          </div>
          <span class="flex items-center justify-center">
            <a
              href="{{route('collectreward')}}"
              class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            >
              Submit
            </a>
          </span>
        </div>
      </section>
    </main>
  @endsection
