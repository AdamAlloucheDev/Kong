<div data-aos="fade-left" data-aos-duration="1500" class="block p-4 mt-4 bg-white border border-gray-100 shadow-sm rounded-xl" >
  <a href="{{ url('/user-info/'.$post->user->id) }}" class=" font-medium text-blue-500">{{ $post->user->firstname}} </a>
  <p class="text-xs font-medium text-slate-500">{{$post->created_at->diffForHumans()}}</p>
  <h5 class="mt-1 text-xl font-bold text-gray-900">
    {{ $post->body}}
  </h5>
  <dl class="flex items-center mt-6 space-x-8">
    <div class="flex items-center">
        <span class="p-2 text-white bg-green-600 rounded-full">
        <svg
            class="w-4 h-4"
            fill="currentColor"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
        >
            <path
            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
            ></path>
        </svg>
        </span>

        <span
        class="flex ml-3 space-x-1 space-x-reverse text-sm font-medium text-gray-600 "
        >
        <dt>{{ $post->likes }}</dt>
        <dd class="sr-only">Employment type</dd>
        </span>
    </div>
    <div class="flex items-center">
        <span class="p-2 text-white bg-green-600 rounded-full">
        <svg
            class="w-4 h-4"
            fill="currentColor"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
        >
            <path
            d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"
            ></path>
        </svg>
        </span>

      </div>
    </dl>
    <span
    class=" ml-3 space-x-1 space-x-reverse text-sm font-medium text-gray-600 "
    >
    <dt>Commentaires</dt>
    <div>
      @foreach ($comments as $comment)
      <span class="relative block p-8 overflow-hidden border border-gray-100 rounded-lg">
        <span
          class="absolute inset-x-0 bottom-0 h-2  bg-gradient-to-r from-green-300 via-blue-500 to-purple-600"
        ></span>
      
        <div class="justify-between sm:flex">
          <div>
            <p class="mt-1 text-xs font-medium text-gray-600">Par {{ $comment->user->firstname }}</p>
          </div>
        </div>
      
        <div class="mt-4 sm:pr-8">
          <p class="text-sm text-gray-500">
            {{ $comment->body }}
          </p>
        </div>
      
        <dl class=" mt-6">
      
          <div class="">
            <dd class="text-xs text-gray-500">{{$comment->created_at->diffForHumans()}}</dd>
            <dt class="text-sm font-medium text-gray-600">Publié</dt>
          </div>
        </dl>
      </span>
      @endforeach
    </div>
      <div class="mt-4">
        <form method="post" action="{{ route('comments.store') }}">
            @csrf
            <div class="form-group">
                <textarea class="form-control border-solid border border-slate-800/10 rounded-md" name="body" cols="58" rows="3"></textarea>
              

                <input type="hidden" name="post_id" value="{{ $post->id }}" />
            </div>
            <div class="form-group">
              <button class="relative inline-flex mt-2 items-center justify-center p-4 px-6 py-3 overflow-hidden font-medium text-blue-600 transition duration-300 ease-out border-2 border-slate-400 rounded-full shadow-md group" type="submit">
                <span class="absolute inset-0 flex items-center justify-center w-full h-full text-white duration-300 -translate-x-full bg-slate-400 group-hover:translate-x-0 ease">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </span>
                <span class="absolute flex items-center justify-center w-full h-full text-blue-500 transition-all duration-300 transform group-hover:translate-x-full ease">Ajouter</span>
                <span class="relative invisible">Ajouter</span>
              </button>
            </div>
        </form>
      </div>
    </span>
</div>





