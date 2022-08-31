<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
{{--@if (session('status'))--}}
{{--    <div class="flex bg-gradient-to-r from-green-300 rounded-lg p-4 mb-4 text-sm text-gray-500">--}}
{{--        {{ session('status') }}--}}
{{--    </div>--}}
{{--@endif--}}

{{--@if(count($errors) > 0)--}}
{{--    <div class="spacer"></div>--}}
{{--    <div class="alert alert-danger">--}}
{{--        <ul>--}}
{{--            @foreach ($errors->all() as $error)--}}
{{--                <li>{!! $error !!}</li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--@endif--}}

{{--@if ($errors->any())--}}
{{--    @foreach ($errors->all() as $error)--}}
{{--        <div>{{$error}}</div>--}}
{{--    @endforeach--}}
{{--@endif--}}


<form action="#" method="POST">
    @csrf
    <div class="grid bg-gray-900 h-screen place-items-center">
        <div class="bg-gray-800 shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
            <div class="-mx-3 md:flex mb-6">
                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-200 text-xs font-bold mb-2" for="names">
                        First Name
                    </label>
                    <input class="appearance-none block w-full bg-grey-lighter text-gray-700 border border-red rounded py-3 px-4 mb-3" id="names" name="names" type="text" placeholder="Pepito">
                    @if($errors->has('names'))
                        <p class="text-red-700 text-xs italic">{{ $errors->first('names') }}</p>
                    @endif
                </div>
                <div class="md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-200 text-xs font-bold mb-2" for="surnames">
                        Surname
                    </label>
                    <input class="appearance-none block w-full bg-grey-lighter text-gray-700 border border-grey-lighter rounded py-3 px-4 mb-3" id="surnames" name="surnames" type="text" placeholder="Perez">
                    @if($errors->has('surnames'))
                        <p class="text-red-700 text-xs italic">{{ $errors->first('surnames') }}</p>
                    @endif
                </div>
            </div>
            <div class="-mx-3 md:flex mb-6">
                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-200 text-xs font-bold mb-2" for="document-type">
                        Document Type
                    </label>
                    <input class="appearance-none block w-full bg-grey-lighter text-gray-700 border border-red rounded py-3 px-4 mb-3" id="document-type" name="document-type" type="text" placeholder="CC">
                    @if($errors->has('document-type'))
                        <p class="text-red-700 text-xs italic">{{ $errors->first('document-type') }}</p>
                    @endif
                </div>
                <div class="md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-200 text-xs font-bold mb-2" for="identification">
                        Document
                    </label>
                    <input class="appearance-none block w-full bg-grey-lighter text-gray-700 border border-grey-lighter rounded py-3 px-4 mb-3" id="identification" name="identification" type="text" placeholder="1037456855">
                    @if($errors->has('identification'))
                        <p class="text-red-700 text-xs italic">{{ $errors->first('identification') }}</p>
                    @endif
                </div>
            </div>
            <div class="-mx-3 md:flex mb-6">
                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-200 text-xs font-bold mb-2" for="email">
                        Email
                    </label>
                    <input class="appearance-none block w-full bg-grey-lighter text-gray-700 border border-red rounded py-3 px-4 mb-3" id="email" name="email" type="email" placeholder="pepito@mail.com">
                    @if($errors->has('email'))
                        <p class="text-red-700 text-xs italic">{{ $errors->first('email') }}</p>
                    @endif
                </div>
                <div class="md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-200 text-xs font-bold mb-2" for="password">
                        Password
                    </label>
                    <input class="appearance-none block w-full bg-grey-lighter text-gray-700 border border-grey-lighter rounded py-3 px-4 mb-3" id="password" name="password" type="password" placeholder="******************">
                    @if($errors->has('password'))
                        <p class="text-red-700 text-xs italic">{{ $errors->first('password') }}</p>
                    @endif
                </div>
            </div>
            <div class="-mx-3 flex mb-6">
                <div class="md:w-1/1 px-3 w-full">
                    <button type="submit" class="bg-pink-500 hover:bg-pink-400 text-white font-bold py-2 px-4 rounded w-full">Continue</button>
                </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>
