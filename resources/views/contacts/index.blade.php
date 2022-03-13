@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center pb-6 px-4">
    <div class="w-full space-y-8">
        <div>
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Your contacts</h2>
        </div>

        @if ($contacts->count())

            @foreach ($contacts as $contact)
                <div class="bg-white rounded-lg p-6 mb-4">
                    <div class="flex justify-between items-center mb-2">
                        {{-- name --}}
                        <p class="text-xl font-bold">{{ $contact->name }}</p>
                        {{-- date o birth --}}
                        <p>
                            {{ $contact->date_of_birth->format('M, j') }} - 
                            <span class="text-gray-600 text-sm">
                                @if ($contact->date_of_birth->format('m-d') < now()->format('m-d'))
                                    {{ $contact->date_of_birth->age }} years old
                                @elseif ($contact->date_of_birth->format('m-d') == now()->format('m-d')) 
                                    turning {{ $contact->date_of_birth->age }} today!
                                @else
                                    turning {{ $contact->date_of_birth->age+1 }}
                                @endif
                            </span>
                        </p>
                    </div>
                    <div class="flex">
                        <span class="font-bold w-1/4">Address:</span><span class="w-3/4">{{ $contact->address }}</span>
                    </div>
                    <div class="flex">
                        <span class="font-bold w-1/4">Email:</span><span class="w-3/4">{{ $contact->email }}</span>
                    </div>
                    <div class="flex">
                        <span class="font-bold w-1/4">Phone:</span><span class="w-3/4">{{ $contact->phone_number }}</span>
                    </div>

                    {{-- @can ('delete', $contact)
                        <form action="{{ route('contacts.destroy', $contact) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-blue-500">Delete</button>
                        </form>
                    @endcan --}}
                </div>
            @endforeach

            {{ $contacts->links() }}

        @else
            <div class="bg-white rounded-lg p-6 mb-4">
                <p>No contacts yet</p>
            </div>
        @endif
    </div>
</div>
@endsection