<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOA Site</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <form class="w-full max-w-lg" action="{{ route('data.store') }}" method="POST">
         <div class="flex flex-wrap -mx-3 mb-6">
            @csrf
                <div class="w-full px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="uuid">
                        Page UUID
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" id="uuid" name="page_uuid">
                    </label>
                </div>
                <div class="w-full px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                        Page Name
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" id="name" name="page_name">
                    </label>
                </div>
                <div class="w-full px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                        Page Content
                       <textarea name="page_content" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 resize border rounded focus:outline-none focus:shadow-outline" rows="10"></textarea>
                    </label>
                </div>

                <div class="w-full px-3 mb-6 md:mb-0">
                    @if($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            @foreach($errors->all() as $error)
                                <div class="block">{{ $error }}</div>
                            @endforeach
                        </div>
                    @endif
                    
                    {{ Str::uuid() }}
                </div>
                <div class="w-full px-3 mb-6 md:mb-0">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">
                    Check & Create
                    </button>
                </div>
            </div>
        </form>
        @isset($data)
            <table class="table-fixed">
            <thead>
                <tr>
                <th class="w-1/4 px-4 py-2">Page UUID</th>
                <th class="w-1/4 px-4 py-2">Page Name</th>
                <th class="w-1/2 px-4 py-2">Page Content</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td class="border px-4 py-2">{{ $data['page_uuid'] }}</td>
                <td class="border px-4 py-2">{{ $data['page_name'] }}</td>
                <td class="border px-4 py-2">{{ $data['page_content'] }}</td>
                </tr>
            </tbody>
            </table>
        @endisset
    </div>
</body>
</html>