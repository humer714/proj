@extends('layout.layout')

@section('content')

    <main>
      <section>
        <div
          class="container mx-auto px-4 mb-10 flex flex-col items-center justify-center gap-4"
        >
          <h3 class="text-2xl font-medium uppercase">Invite Friends</h3>
          <div >
            
            <button
                onclick="copy('{{Crypt::encrypt(auth()->user()->id)}}')"
              class="text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            >
              Copy Link
            </button>
            <button
            onclick="share('{{Crypt::encrypt(auth()->user()->id)}}')"
              class="text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            >
              Share
            </button>
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
      text: 'Follow me to get more web development content.',
      url: 'http://127.0.0.1:8000/invitee/'+data
    })
  } catch (error) {
    console.log('Sharing failed!', error)
  }
}
      
      </script>
    </main>
  @endsection
