<form {{ $attributes->merge(['class' => 'w-full']) }} action="{{ route('search.view') }}">
    <div class="relative flex max-w-xl mx-auto">
        <span class="absolute text-lg text-gray-400 left-4 top-3">
            <i class="fa-solid fa-magnifying-glass"></i>
        </span>
        <input type="search" name="term" id="search"
            class="w-full py-3 pl-12 pr-3 border border-r-0 border-primary rounded-l-md focus:outline-none"
            placeholder="search"
            value="{{ $this->term }}" />
        <button
            class="px-8 text-white transition border bg-primary border-primary rounded-r-md hover:bg-transparent hover:text-primary">Search</button>
    </div>
</form>
