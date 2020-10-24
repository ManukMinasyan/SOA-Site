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
    </div>
</body>
</html>