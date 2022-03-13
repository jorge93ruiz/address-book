@extends('layouts.app')

@section('content')

<div class="flex items-center justify-center pb-6 px-4 sm:px-6 lg:px-8">
    <div class="w-full space-y-8">
        <div>
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Add new contact</h2>
        </div>

        <form class="mt-8 space-y-6" action="{{ route('add_contact') }}" method="post">
            @csrf
            <div class="rounded-md shadow-sm -space-y-px">
            <div>
                <label for="name" class="sr-only">Full name</label>
                <input id="name" name="name" type="text" class="appearance-none rounded-none relative block w-full px-3 py-2 border  text-gray-900 rounded-t-md focus:outline-none focus:ring-gray-500 focus:border-gray-500 focus:z-10 sm:text-sm 
                    @error('name') 
                        placeholder-red-500 border-red-500 
                    @else 
                        placeholder-gray-500 border-gray-300 
                    @enderror" 
                    @error('name')
                        placeholder="{{ $message }}"
                    @else
                        placeholder="Full name" 
                    @enderror
                value="{{ old('name') }}">
            </div>
            <div>
                <label for="email" class="sr-only">Email address</label>
                <input id="email" name="email" type="text" class="appearance-none rounded-none relative block w-full px-3 py-2 border text-gray-900 focus:outline-none focus:ring-gray-500 focus:border-gray-500 focus:z-10 sm:text-sm 
                    @error('email') 
                        placeholder-red-500 border-red-500 
                    @else 
                        placeholder-gray-500 border-gray-300 
                    @enderror" 
                    @error('email')
                        placeholder="{{ $message }}"
                    @else
                        placeholder="Email address" 
                    @enderror
                value="{{ old('email') }}">
            </div>
            <div>
                <label for="phone_number" class="sr-only">Phone number</label>
                <input id="phone_number" name="phone_number" type="number" class="appearance-none rounded-none relative block w-full px-3 py-2 border text-gray-900 focus:outline-none focus:ring-gray-500 focus:border-gray-500 focus:z-10 sm:text-sm 
                    @error('phone_number') 
                        placeholder-red-500 border-red-500 
                    @else 
                        placeholder-gray-500 border-gray-300 
                    @enderror" 
                    @error('phone_number')
                        placeholder="{{ $message }}"
                    @else
                        placeholder="Phone number" 
                    @enderror
                value="{{ old('phone_number') }}">
            </div>
            <div>
                <label for="date_of_birth" class="sr-only">Date of birth</label>
                <input id="date_of_birth" name="date_of_birth" type="text" class="appearance-none rounded-none relative block w-full px-3 py-2 border text-gray-900 focus:outline-none focus:ring-gray-500 focus:border-gray-500 focus:z-10 sm:text-sm 
                    @error('date_of_birth') 
                        placeholder-red-500 border-red-500 
                    @else 
                        placeholder-gray-500 border-gray-300 
                    @enderror" 
                    @error('date_of_birth')
                        placeholder="{{ $message }}"
                    @else
                        placeholder="Date of birth (YYYY-MM-DD)" 
                    @enderror
                value="{{ old('date_of_birth') }}">
            </div>
            <div>
                <label for="address" class="sr-only">Physical address</label>
                <input id="address" name="address" type="text" class="appearance-none rounded-none relative block w-full px-3 py-2 border text-gray-900 rounded-b-md focus:outline-none focus:ring-gray-500 focus:border-gray-500 focus:z-10 sm:text-sm 
                    @error('address') 
                        placeholder-red-500 border-red-500 
                    @else 
                        placeholder-gray-500 border-gray-300 
                    @enderror" 
                    @error('address')
                        placeholder="{{ $message }}"
                    @else
                        placeholder="Physical address" 
                    @enderror
                value="{{ old('address') }}">
            </div>
            </div>
    
            <div>
                <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                    Add
                </button>
            </div>
        </form>
    </div>
</div>
@endsection