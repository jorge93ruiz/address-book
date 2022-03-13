<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Address Book</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>

    <div class="flex items-center justify-center p-10">
        <div class="container max-w-3xl">
            <nav class="bg-gray-800 rounded-t">
                <div class="relative flex items-center justify-center h-16">
                    <div class="flex space-x-4">
                    <a href="/" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>

                    <a href="{{ route('contacts') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Contacts</a>

                    <a href="{{ route('add_contact') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Add contact</a>
                    </div>
                </div>
            </nav>

            {{-- <nav class="p-6 flex justify-center">
                <ul class="flex items-center">
                    <li>
                        <a href="/" class="p-3 m-2 bg-white rounded">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('contacts') }}" class="p-3 m-2 bg-white rounded">Contacts</a>
                    </li>
                    <li>
                        <a href="{{ route('add_contact') }}" class="p-3 m-2 bg-white rounded">Add contact</a>
                    </li>
                    <li>
                        <a href="" class="p-3 m-2 bg-white rounded">Edit contact</a>
                    </li>
                </ul>
            </nav> --}}

            <div class="bg-gray-400 rounded-b">
                @yield('content')
            </div>
        </div>
    </div>
    </body>
</html>