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
        <div class="pl-6 pr-6 bg-gray-200 rounded">
            <nav class="p-6 flex justify-center">
                <ul class="flex items-center">
                    <li>
                        <a href="" class="p-3 m-2 bg-white rounded">Home</a>
                    </li>
                    <li>
                        <a href="" class="p-3 m-2 bg-white rounded">Contacts</a>
                    </li>
                    <li>
                        <a href="" class="p-3 m-2 bg-white rounded">Add contact</a>
                    </li>
                    <li>
                        <a href="" class="p-3 m-2 bg-white rounded">Edit contact</a>
                    </li>
                </ul>
            </nav>

            @yield('content')
        </div>
    </div>
    </body>
</html>