@extends('layout.login')
@section('content')
    <div class="bg-gray-100 flex justify-center items-center h-screen">
        <div class="w-1/2 h-screen hidden lg:block">
            <img src="https://placehold.co/800x/667fff/ffffff.png?text=Your+Image&font=Montserrat" alt="Placeholder Image" class="object-cover w-full h-full">
        </div>
        <div class="lg:p-36 md:p-52 sm:20 p-8 w-full lg:w-1/2">
            <h1 class="text-2xl font-semibold mb-4">Login</h1>
            <form action="{{route('login')}}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-gray-600">Correo</label>
                    <div class="@error('email') relative @enderror">
                        <input type="email"
                               id="email"
                               name="email"
                               class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500 transition-height duration-1000 ease-in-out @error('email') h-20 @else h-10 @enderror"
                               autocomplete="off">
                        @error('email')
                            <span class="absolute inset-y-0 left-2 top-0 flex items-start pr-3 text-red-500 text-xs transition-opacity duration-1000 ease-in-out @error('email') opacity-100 @else opacity-0 @enderror" style="top: 10%;">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-600">Contraseña</label>
                    <div class="@error('password') relative @enderror">
                        <input type="password" id="password" name="password"
                               class="w-full h-10 border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500 transition-height duration-1000 ease-in-out @error('password') h-20 @else h-10 @enderror"
                               autocomplete="off">
                        @error('password')
                            <span class="absolute inset-y-0 left-2 top-0 flex items-start pr-3 text-red-500 text-xs transition-opacity duration-1000 ease-in-out @error('password') opacity-100 @else opacity-0 @enderror" style="top: 10%;">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-md py-2 px-4 w-full">Login</button>
            </form>
        </div>
    </div>
@endsection
