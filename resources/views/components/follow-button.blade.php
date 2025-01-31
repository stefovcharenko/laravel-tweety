@unless(auth()->user()->is($user))
    <form method="POST" action="{{ route('follow', $user->username) }}">
        @csrf

        <button
            type="submit"
            class="bg-blue-500 shadow rounded-full py-2 px-4 text-white text-xs"
        >{{ auth()->user()->following($user) ? 'Unfollow' : 'Follow Me' }}</button>
    </form>
@endunless
