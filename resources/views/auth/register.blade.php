@extends('layouts.app')

@section('content')


    <div class="container mx-auto max-w-screen-md">
        <div class="flex flex-wrap justify-center">
            <div class="md:w-1/2 md:order-1 order-2">
                <!-- width: 50% -->
                <div class="w-full max-w-md">
                    <div class="flex flex-col break-words bg-white border border-2 shadow-md mt-20">
                        <div class="bg-gray-300 text-gray-700 uppercase text-center py-3 px-6 mb-0">
                            {{__('Register')}}
                        </div>
                        <form method="POST" action="{{ route('register') }}" class="py-10 px-5" novalidate>
                            @csrf

                            <div class="flex flex-wrap mb-6">
                                <label for="name" class="w-full text-gray-700 text-sm mb-2">{{ __('Name') }}</label>
                                <input id="name" type="text"
                                       class=" p-2 bg-gray-300 rounded form-input w-full @error('name') border-red-500 border @enderror"
                                       name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>

                                @error('name')
                                <span class="bg-red-100 border-l-4 border-red-500 text-red-700 p-2 w-full mt-5 text-sm" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="flex flex-wrap mb-6">
                                <label for="email"
                                       class="w-full text-gray-700 text-sm mb-2">{{ __('E-Mail Address') }}</label>

                                <input id="email" type="email"
                                       class="p-2 bg-gray-300 rounded form-input w-full  @error('email') border-red-500 border @enderror"
                                       name="email" value="{{ old('email') }}"  autocomplete="email">

                                @error('email')
                                <span class="bg-red-100 border-l-4 border-red-500 text-red-700 p-2 w-full mt-5 text-sm" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="flex flex-wrap mb-6">
                                <label for="password"
                                       class="w-full text-gray-700 text-sm mb-2">{{ __('Password') }}</label>

                                <input id="password" type="password"
                                       class="p-2 bg-gray-300 rounded form-input w-full @error('password') border-red-500 border @enderror"
                                       name="password" autocomplete="new-password">

                                @error('password')
                                <span class="bg-red-100 border-l-4 border-red-500 text-red-700 p-2 w-full mt-5 text-sm" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="flex flex-wrap mb-6">
                                <label for="password-confirm"
                                       class="w-full text-gray-700 text-sm mb-2">{{ __('Confirm Password') }}</label>

                                <input id="password-confirm" type="password"
                                       class="p-2 bg-gray-300 rounded form-input w-full" name="password_confirmation"
                                       required autocomplete="new-password">
                            </div>

                            <div class="flex flex-wrap mb-0">
                                <button type="submit"
                                        class="bg-teal-500 w-full hover:bg-teal-700 text-gray-100 p-3 focus:outline-none focus:shadow-outline uppercase font-bold">
                                    {{ __('Register') }}
                                </button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
            <div class="md:w-1/2 text-center flex flex-col justify-center md:order-2 order-1 px-10 mt-10">
                <!-- width 50% -->
                <h1 class="text-teal-500 text-3xl">
                    ¿Eres reclutador?
                </h1>
                <p class="text-xl mt-5 leading-7">Crea una cuenta totalmente gratis y comienza a publicar hasta 10 vacantes</p>
            </div>
        </div>
    </div>
@endsection