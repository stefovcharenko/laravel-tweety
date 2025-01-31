<div class="flex p-4 {{ $loop->last ? '' : 'border-b border-gray-300' }}">
    <div class="mr-4 flex-shrink-0">
        <a href="{{ $tweet->user->path() }}">
            <img
                src="{{$tweet->user->avatar}}"
                alt=""
                width="40"
                class="rounded-full"
            >
        </a>
    </div>
    <div>
        <h5 class="font-bold mb-2">
            <a href="{{ $tweet->user->path() }}">
                {{ $tweet->user->name }}
            </a>
        </h5>

        <p class="text-sm mb-3">
            {{ $tweet->body }}
        </p>

        <x-like-buttons :tweet="$tweet"/>
    </div>
</div>
