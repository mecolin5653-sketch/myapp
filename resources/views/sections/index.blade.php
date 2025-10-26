<!DOCTYPE html>
<html>
<head>
    <title>Sections List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            padding: 20px;
        }

        h1 {
            color: #333;
            text-align: center;
            padding-top: 75px;
        }

        a.button {
            background-color: #4CAF50;
            color: white;
            padding: 8px 12px;
            border-radius: 4px;
            text-decoration: none;
            margin-bottom: 10px;
            margin-left: 31%;
            display: inline-block;
        }

        a.button:hover {
            background-color: #45a049;
        }

        table {
            width: 38%;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #f0f0f0;
            text-align: center;
        }

        button.delete {
            background-color: #f44336;
            color: white;
            border: none;
            padding: 6px 10px;
            border-radius: 4px;
            cursor: pointer;
        }

        button.delete:hover {
            background-color: #d32f2f;
        }

        form.inline {
            display: inline;
        }
    </style>
</head>
<body>
    <h1>Sections List</h1>
    <a href="{{ route('sections.create') }}" class="button">Add Section</a>
    
    <center>
    <table>
        <thead>
            <tr>
                <th>Section Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sections as $section)
                <tr>
                    <td>{{ $section->sectionName }}</td>
                    <td>{{ $section->description }}</td>
                    <td>
                        <a href="{{ route('sections.edit', $section->id) }}">Edit</a>
                        |
                        <form action="{{ route('sections.destroy', $section->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete" onclick="return confirm('Delete this section?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </center>
    
</body>
</html>
