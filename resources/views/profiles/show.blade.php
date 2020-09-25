@extends('components.app')

@section('content')
    <header class="mb-6">
        <img
            src="/images/default-profile-banner.jpg"
            class="mb-2"
            alt=""
        >

        <div class="flex justify-between items-center mb-4">
            <div>
                <h2 class="font-bold text-2xl mb-0">
                    {{ $user->name }}
                </h2>
                <p class="text-sm">
                    Joined {{ $user->created_at->diffForHumans() }}
                </p>
            </div>

            <div>
                <a href="" class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">Edit Profile</a>
                <a href="" class="bg-blue-500 shadow rounded-full py-2 px-4 text-white text-xs">Follow Me</a>
            </div>
        </div>

        <p class="text-sm">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
    </header>

    @include('_timeline', [
        'tweets' => $user->tweets
    ])
@endsection
