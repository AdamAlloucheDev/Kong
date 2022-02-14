<div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-1">
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error')}}
        </div>
    @endif
    @foreach ($posts as $post)


    <livewire:post :post="$post" :key="$post->id"/>
    
    
    @endforeach
  
</div>