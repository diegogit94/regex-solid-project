<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Show</title>
</head>
<body>
<form action="{{ route('user.store') }}" method="POST">
    @csrf
    <div class="grid bg-gray-900 h-screen place-items-center">
        <div class="bg-gray-800 shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
            <table class="min-w-full text-center">
                <th></th>
                <tbody>
                <tr class="border-b">
                    <td class="text-sm text-gray-200 font-medium px-6 py-4 whitespace-nowrap font-bold text-center">
                        Name:
                    </td>
                    <td class="text-sm text-gray-200 font-light px-6 py-4 whitespace-nowrap">
                        {{ $user->names }}
                    </td>
                </tr>
                <tr class="border-b">
                    <td class="text-sm text-gray-200 font-medium px-6 py-4 whitespace-nowrap font-bold">
                        Surname:
                    </td>
                    <td class="text-sm text-gray-200 font-light px-6 py-4 whitespace-nowrap">
                        {{ $user->surnames }}
                    </td>
                </tr>
                <tr class="border-b">
                    <td class="text-sm text-gray-200 font-medium px-6 py-4 whitespace-nowrap font-bold">
                        Document type:
                    </td>
                    <td class="text-sm text-gray-200 font-light px-6 py-4 whitespace-nowrap">
                        {{ $user->document_type }}
                    </td>
                </tr>
                <tr class="border-b">
                    <td class="text-sm text-gray-200 font-medium px-6 py-4 whitespace-nowrap font-bold">
                        Document:
                    </td>
                    <td class="text-sm text-gray-200 font-light px-6 py-4 whitespace-nowrap">
                        {{ $user->identification }}
                    </td>
                </tr>
                <tr class="border-b">
                    <td class="text-sm text-gray-200 font-medium px-6 py-4 whitespace-nowrap font-bold">
                        Email:
                    </td>
                    <td class="text-sm text-gray-200 font-light px-6 py-4 whitespace-nowrap">
                        {{ $user->email }}
                    </td>
                </tr>
                </tbody>
            </table>
            <a type="button" href="{{ route('user.create') }}" class="bg-pink-500 hover:bg-pink-400 text-white font-bold py-2 px-4 rounded w-full">Go Back</a>
        </div>
    </div>
</form>
</body>
</html>
