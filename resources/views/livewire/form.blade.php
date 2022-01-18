<div class="relative max-w-lg mx-auto text-center lg:text-left lg:pr-12">
    <div class=" w-96 shadow-2xl subpixel-antialiased rounded h-64 bg-black border-black mx-auto">
        <div class="flex items-center h-6 rounded-t bg-gray-100 border-b border-gray-500 text-center text-black" id="headerTerminal">
            <div class="flex ml-2 items-center text-center border-red-900 bg-red-500 shadow-inner rounded-full w-3 h-3" id="closebtn">
            </div>
            <div class="ml-2 border-yellow-900 bg-yellow-500 shadow-inner rounded-full w-3 h-3" id="minbtn">
            </div>
            <div class="ml-2 border-green-900 bg-green-500 shadow-inner rounded-full w-3 h-3" id="maxbtn">
            </div>
            <div class="mx-auto pr-16" id="terminaltitle">
                <p class="text-center text-sm">Terminal</p>
            </div>

        </div>

        <div class="pl-1 pt-1 h-auto  text-green-200 font-mono text-xs bg-black" id="console">
            <p class="pb-1">Last login: Wed Sep 25 09:11:04 on ttys002</p>
            <p class="pb-1">Post:Timeline $</p>
            {{-- <textarea id="text-input-textarea" class="text-xs pb-1 bg-black border-black border-transparent focus:border-transparent focus:ring-0 focus:outline-none" cols="70" rows="8" placeholder="">Kong: est une plateforme digitale professionnelle privée qui a pour but d'améliorer les relations, l’engagement, la collaboration et la productivité des collaborateurs. Nous croyons à un monde plus connecté, dans lequel tout le monde peut discuter et collaborer à distance.</textarea> --}}
            <form method="post" class="mb-4" wire:submit.prevent="createPost">
                @csrf
        
                <div class="form-group">
                    <textarea name="body" id="body" cols="30" rows="10" class="form-control text-xs pb-1 bg-black border-black border-transparent focus:border-transparent focus:ring-0 focus:outline-none @error('body') is-invalid @enderror" wire:model="body"></textarea>
                    @error('body')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <button class="absolute right-0  inline-block px-4 py-2 font-medium group" type="submit">
                    <span class="absolute inset-0 w-full h-full transition duration-200 ease-out transform translate-x-1 translate-y-1 bg-black group-hover:-translate-x-0 group-hover:-translate-y-0"></span>
                    <span class="absolute inset-0 w-full h-full bg-white border-2 border-black group-hover:bg-black"></span>
                    <span class="relative text-black group-hover:text-white">Publier</span>
                </button>
            </form>
        </div>
        
    </div>
</div>

