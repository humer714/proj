@extends('layout.layout')

@section('content')
<main>

      
      <section>
        <div
          class="container mx-auto px-4 mb-22 flex flex-col items-center justify-center gap-4"
        >
          <div
            class="block w-4/5 lg:w-3/6 lg:mx-auto p-6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700"
          >
            <span class="grid grid-cols-2 gap-4">
              <h4 class="text-xl font-semibold text-left">ID Number</h4>
              <h4 class="text-xl font-semibold">{{auth()->user()->id}}</h4>
            </span>
            <span class="grid grid-cols-2 gap-4">
              <h4 class="text-xl font-semibold text-left">Name</h4>
              <h4 class="text-xl font-semibold">{{auth()->user()->name}}</h4>
            </span>
            <span class="grid grid-cols-2 gap-4">
              <h4 class="text-xl font-semibold text-left">Credit</h4>
              <h4 class="text-xl font-semibold">{{auth()->user()->points}}</h4>
            </span>
          </div>
          <div class="grid grid-cols-3 gap-3">
            @if(auth()->user()->role=='approved')
              <a
              href="{{route('product')}}"
              class="border border-gray-200 rounded-lg shadow-md hover:bg-gray-100"
            >
              <i
                class="uil uil-user text-7xl p-2 flex items-center justify-center text-blue-500"
              ></i>
            </a>
          
            @endif
            <a
              href=""
              class="border border-gray-200 rounded-lg shadow-md hover:bg-gray-100"
            >
              <i
                class="uil uil-user text-7xl p-2 flex items-center justify-center text-blue-500"
              ></i>
            </a>
            <a
              href="{{route('wallet')}}"
              class="border border-gray-200 rounded-lg shadow-md hover:bg-gray-100"
            >
              <i
                class="uil uil-moneybag text-7xl p-2 flex items-center justify-center text-blue-500"
              ></i>
            </a>
            <a
              href="{{route('chain')}}"
              class="border border-gray-200 rounded-lg shadow-md hover:bg-gray-100"
            >
              <i
                class="uil uil-users-alt text-7xl p-2 flex items-center justify-center text-blue-500"
              ></i>
            </a>
            <a
              href="{{route('setting')}}"
              class="border border-gray-200 rounded-lg shadow-md hover:bg-gray-100"
            >
              <i
                class="uil uil-setting text-7xl p-2 flex items-center justify-center text-blue-500"
              ></i>
            </a>
            <a
              href="{{route('invite')}}"
              class="border border-gray-200 rounded-lg shadow-md hover:bg-gray-100"
            >
              <i
                class="uil uil-info-circle text-7xl p-2 flex items-center justify-center text-blue-500"
              ></i>
            </a>
          </div>
        </div>
      
</section>

@if (Session::has('hasValue')==true)
    <script>
        $(document).ready(function() {
          Swal.fire('Account details added sucessfully')
        });
    </script>
@endif
  
    </main>

    @endsection
    