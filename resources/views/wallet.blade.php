@extends('layout.layout')

@section('content')

    <main>
      <section>
        <div
          class="container mx-auto px-4 mb-10 flex flex-col items-center justify-center gap-4"
        >
          <div class="flex gap-4 text-center">
            <span class="flex-1">
              <h3 class="text-xl font-bold">TOTAL POINTS</h3>
              <h2 id="points" class="text-xl font-medium mb-4">{{Auth()->user()->points}}</h2>
              <button onclick='change_currency()'
                class="text-white w-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
              >
                Change to Currency
              </button>
            </span>
            <span class="flex-1">
              <h3 class="text-xl font-bold">EXTRA POINTS</h3>
              <h2 class="text-xl font-medium mb-4">1278635</h2>
              <button
                class="text-white w-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
              >
                Change to Currency
              </button>
            </span>
          </div>
          <div>
            <span class="flex-1 text-center flex flex-col gap-4">
              <h3 id="balance" class="text-4xl font-bold">{{Auth()->user()->current_balance}}</h3>
              <button onclick="withdraw({{$flag}})"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
              >
                Get In Your Bank
              </button>
            </span>
          </div>

          <div
            class="sm:w-full lg:w-3/6 lg:mx-auto relative shadow-md sm:rounded-lg"
          >
            <table
              class="w-full text-sm text-center text-gray-500 dark:text-gray-400"
            >
              <thead
                class="text-xs text-gray-700 uppercase bg-blue-100 dark:bg-gray-700 dark:text-gray-400"
              >
                <tr>
                  <th scope="col" class="py-3 px-3">Date & Time</th>
                  <th scope="col" class="py-3 px-3">Amount</th>
                  <th scope="col" class="py-3 px-3">Status</th>
                  
                </tr>
              </thead>
              <tbody>
                @foreach($withdarws as $withdraw)
                <tr
                  class="bg-white border-b dark:bg-gray-900 dark:border-gray-700"
                >
                 
                  <td class="py-3 px-3">{{$withdraw->created_at->format('d/m/Y')}}</td>
                  <td class="py-3 px-3">{{$withdraw->balance}}</td>
                  <td class="py-3 px-3">{{$withdraw->status}}</td>
                </tr>
              @endforeach
                
              </tbody>
            </table>
          </div>
          <!-- <button
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
          >
            Change to Currency
          </button> -->
        </div>
      </section>
    </main>
    <script>
function change_currency(){

  fetch('/change_currency')
  .then(data=>{
    return data.json();
  })
  .then(post=>{
   document.getElementById('balance').innerText=post;
   document.getElementById('points').innerText=0;

  })
}
function withdraw(flag){
  if(flag == true){
    fetch('/withdrawrequest')
    .then(data=>{
      return data.json();
    })
    .then(post=>{
      console.log(post)
      if(post== 'true'){
        Swal.fire('Withdraw request sucessfully')
        location.reload(true);
      }
      if(post == 'limit')
      {
        Swal.fire('Low balance')
      }
      else
      {
        Swal.fire('pervious withdraw is pendding')
      }
     
    })
  }
  else
{
  window.location.href = "/setting";
}  
}
    </script>
    
 @endsection
