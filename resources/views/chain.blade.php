@extends('layout.layout')

@section('content')

    <main>
      <section>
        <div
          class="container mx-auto px-4 mb-10 flex flex-col items-center justify-center gap-4"
        >
          <h2 class="text-3xl font-bold uppercase">{{auth()->user()->name}}</h2>
          <div class="flex items-center sm:w-full gap-3 lg:w-3/6 lg:mx-auto">
            <button
            onclick="copy('{{Crypt::encrypt(auth()->user()->id)}}')"
              class="text-white w-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            >
              Invite Link
            </button>
            <button
            onclick="share('{{Crypt::encrypt(auth()->user()->id)}}')"
              class="text-white w-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            >
              Share
            </button>
          </div>

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
              @foreach ($datas as $date)
                <tr class="border-b border-gray-200 dark:border-gray-700">
                  <th
                    scope="row"
                    class="py-3 px-3 font-medium text-gray-900 whitespace-nowrap bg-blue-200 dark:text-white dark:bg-gray-800"
                  >
                  {{$loop->index}}-{{$date->name}}
                  </th>
                  <td class="py-3 px-3">{{$date->level_id}}</td>
                  <td class="py-3 px-3 bg-blue-200 dark:bg-gray-800">
                 
<div class="dropdown dropdown-inline mr-4">
    <button type="button" class="btn btn-light-primary btn-icon btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="ki ki-bold-more-hor"></i>
    </button>
    <div class="dropdown-menu">
        ...
    </div>
</div>

<div class="dropdown dropdown-inline">
    <button type="button" class="btn btn-light-primary btn-icon btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="ki ki-bold-more-ver"></i>
    </button>
    <div class="dropdown-menu">
        ...
    </div>
</div>
                  </td>
                  
                  <td class="py-3 px-3">
                  <button
                      id="dropdownMenuIconHorizontalButton"
                      data-dropdown-toggle="dropdownDotsHorizontal"
                      class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50"
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
                    <div
                      id="dropdownDotsHorizontal"
                      class="hidden z-10 w-24 text-left bg-white rounded divide-y divide-gray-100 shadow"
                    >
                      <ul
                        class="py-1 text-sm text-gray-700"
                        aria-labelledby="dropdownMenuIconHorizontalButton"
                      >
                      @foreach($date->invite as $detail)
                 @if($detail->role == 'approved')
                        <li>
                          <a
                            class="block py-2 px-4 hover:bg-gray-100"
                            >{{$detail->name}}</a
                          >
                        </li>
                        @endif
                  @endforeach
                        
                      </ul>
                    </div>
                    
                  </td>
                 
                </tr>
                @endforeach
              </tbody>
             
            </table>
          </div>
        </div>
      </section>
      <script>
        function copy(id)
        {
            var link = 'http://127.0.0.1:8000/invitee/'+id;
            navigator.clipboard.writeText(link)
            alert('Link copy')
        }

       
      
        async function share(data) {
  try {
    await navigator.share({
      url: 'http://127.0.0.1:8000/invitee/'+data
    })
  } catch (error) {
    console.log('Sharing failed!', error)
  }
}
      
      </script>
    </main>
    @endsection
 
