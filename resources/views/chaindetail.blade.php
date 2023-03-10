@extends('layout.layout')

@section('content')

    <main>
      <section>
        <div
          class="container mx-auto px-4 mb-10 flex flex-col items-center justify-center gap-4"
        >
          <h2 class="text-3xl font-bold uppercase">{{$data->name}}</h2>
          <div
            class="sm:w-full lg:w-3/6 lg:mx-auto relative shadow-md sm:rounded-lg"
          >
            <table
              class="w-full text-sm text-gray-500 text-center dark:text-gray-400"
            >
              <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                <tr class="border-b border-gray-200">
                  <th
                    scope="col"
                    class="py-3 px-3 bg-blue-200 dark:bg-gray-800"
                  >
                    Name
                  </th>
                  <th scope="col" class="py-3 px-3">Level</th>
                  <th
                    scope="col"
                    class="py-3 px-3 bg-blue-200 dark:bg-gray-800"
                  >
                    Detail
                  </th>
                  <th scope="col" class="py-3 px-3">Chain</th>
                </tr>
              </thead>
              <tbody>
                @foreach($datas as $data)
                <tr class="border-b border-gray-200 dark:border-gray-700">
                  <th
                    scope="row"
                    class="py-3 px-3 font-medium text-gray-900 whitespace-nowrap bg-blue-200 dark:text-white dark:bg-gray-800"
                  >
                   {{$data->name}}
                  </th>
                  <td class="py-3 px-3">{{$data->level_id}}</td>
                  <td class="py-3 px-3 bg-blue-200 dark:bg-gray-800">
                    <button
                      id="dropdownMenuIconHorizontalButton1"
                      data-dropdown-toggle="dropdownDotsHorizontal2"
                      class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                      type="button"
                    >
                      <svg
                        class="w-6 h-6"
                        aria-hidden="true"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"
                        ></path>
                      </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div
                      id="dropdownDotsHorizontal2"
                      class="hidden z-10 w-28 text-left bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600"
                    >
                      <ul
                        class="py-1 text-sm text-gray-700 dark:text-gray-200"
                        aria-labelledby="dropdownMenuIconHorizontalButton1"
                      >
                        <li>
                          <a
                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                            >{{$data->email}}</a
                          >
                        </li>
                        <li>
                          <a
                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                            >{{$data->phone}}</a
                          >
                          
                        </li>
                      </ul>
                    </div>
                  </td>
                  <td class="py-3 px-3">
                    <a href="{{route('chaindetail',['id'=>$data->id])}}">

                    <button
                      id="dropdownMenuIconHorizontalButton"
                      data-dropdown-toggle="dropdownDotsHorizontal"
                      class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                      type="button"
                    >
                      <svg
                        class="w-6 h-6"
                        aria-hidden="true"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"
                        ></path>
                      </svg>
                    </button>

                    </a>
                   
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </section>
      
    </main>
    @endsection
 
