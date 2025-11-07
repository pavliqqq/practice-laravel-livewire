<div class="h-screen flex items-center justify-center">
    <div class="w-100 shadow">
        <input type="text" name="search" placeholder="Search..." wire:model.live.debounce.300ms="searchString"
               class="border border-gray-500 bg-gray-300 rounded p-3 w-full outline-none">

        <div class="px-3">
            <div class="flex flex-col gap-5 mt-10 ">
                @if($result->isNotEmpty())
                    @foreach($result as $res)
                        <div class="border-b border-gray-300">
                            {{ $res->title }}
                        </div>
                    @endforeach
                @else
                    <div class="text-center">
                        <p>No posts found</p>
                    </div>
                @endif
            </div>

            <div class="my-10">
                {{ $result->links() }}
            </div>
        </div>
    </div>
</div>
