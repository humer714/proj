@extends('layout.layout')

@section('content')

    <main>
      <section>
        <div class="container mx-auto px-4 mb-10 flex flex-col gap-4">
          <h3 class="text-2xl font-medium uppercase text-center">
            Collect Reward
          </h3>
          <span class="flex items-center justify-center">
            <button onclick='collectreward()' class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
              Collect Reward
            </button>
          </span>
        </div>
      </section>
    </main>
    <script>
function collectreward(){
  fetch('/reward')
  .then(data=>{
    return data.json();
  })
  .then(post=>{
    if(post=='true')
    {

      Toastify({
    text: "Collect Reward sucessfully",
    duration: 3000,
    destination: "https://github.com/apvarun/toastify-js",
    newWindow: true,
    close: true,
    gravity: "top", // `top` or `bottom`
    position: "center", // `left`, `center` or `right`
    stopOnFocus: true, // Prevents dismissing of toast on hover
    style: {
      background: "linear-gradient(to right, #00b09b, #96c93d)",
    },
    onClick: function(){} // Callback after click
  }).showToast();
    }
    else
    {
      Toastify({
    text: "Already collected Today Reward",
    duration: 3000,
    destination: "https://github.com/apvarun/toastify-js",
    newWindow: true,
    close: true,
    gravity: "top", // `top` or `bottom`
    position: "center", // `left`, `center` or `right`
    stopOnFocus: true, // Prevents dismissing of toast on hover
    style: {
      background: "linear-gradient(to right, #00b09b, #96c93d)",
    },
    onClick: function(){} // Callback after click
  }).showToast();
    }
  })
}
    </script>
  @endsection
