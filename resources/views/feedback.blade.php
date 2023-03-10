@extends('layout.layout')

@section('content')

    <main>
      <section>
        <div
          class="container mx-auto px-4 mb-10 flex flex-col items-center justify-center gap-4"
        >
          <h3 class="text-2xl font-medium uppercase">Give Feedback</h3>
          <form action="" class="sm:w-full lg:w-3/6 lg:mx-auto">
            <textarea
              id="feedback"
              rows="8"
              placeholder="Your Feedback..."
              class="block mb-1 p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            ></textarea>
            <button
              type="submit"
              class="text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            >
              Submit
            </button>
          </form>
        </div>
      </section>
    </main>
  @endsection
