@extends('layout')
@includes('parts/headers/header-small')
<div class="container mx-auto flex flex-col space-x-0 lg:space-x-8 space-y-16 lg:space-y-0 px-8 py-8 md:py-16">
    <div class="items-center flex flex-col">
        <h1 class="text-3xl font-bold">
            Log in
        </h1>
        <form
            method="post"
            action="{{ $logInAction }}"
            class="flex flex-col w-full space-y-4 max-w-xl log-in-form"
        >
            @if(session()->has('login_errors'))
                <ol class="list-disc text-red-500 log-in-errors">
                    @foreach(session()->get('login_errors') as $field => $errors)
                        @foreach($errors as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    @endforeach
                </ol>
            @endif
            <input type="hidden" name="csrf" value="{{ $csrf }}" />
            <label for="email" class="flex flex-col w-full">
                <span class="flex">Email:</span>
                <input
                    id="email"
                    name="email"
                    type="text"
                    class="bg-gray-50 rounded-lg p-2 text-gray-900"
                    placeholder="alex.42@gmail.com"
                />
            </label>
            <label for="password" class="flex flex-col w-full">
                <span class="flex">Password:</span>
                <input
                    id="password"
                    name="password"
                    type="password"
                    class="bg-gray-50 rounded-lg p-2 text-gray-900"
                />
            </label>
            <button
                type="submit"
                class="bg-indigo-500 rounded-lg p-2 text-white log-in-button"
            >
                Log in
            </button>
        </form>
    </div>
</div>
@includes('parts/footers/footer-small')