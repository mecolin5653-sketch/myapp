<!DOCTYPE html>
<html>
<head>
    <title>Students List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            background-color: #f9f9f9;
        }
        h1 {
            color: #333;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 15px;
            background-color: #fff;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #f0f0f0;
        }
        a, button {
            text-decoration: none;
            padding: 5px 10px;
            margin-right: 5px;
            border-radius: 3px;
            color: white;
            background-color: #4CAF50;
            border: none;
            cursor: pointer;
        }
        button.delete {
            background-color: #e74c3c;
        }
        a:hover, button:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>

<h1>Students List</h1>
<a href="{{ route('students.create') }}">Add Student</a>
<a href="{{ route('sections.create') }}">Add Section</a>
<a href="{{ route('sections.index') }}">Section List</a>

<table>
    <thead>
        <tr>
            <th>Student Number</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>MI</th>
            <th>Section</th>
            <th>Email</th>
            <th>Contact Number</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
        <tr>
            <td>{{ $student->studentNumber }}</td>
            <td>{{ $student->lname }}</td>
            <td>{{ $student->fname }}</td>
            <td>{{ $student->mi }}</td>
            <td>{{ $student->section->sectionName ?? 'No Section' }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->contactNumber }}</td>
            <td>
                <a href="{{ route('students.edit', $student->id) }}">Edit</a>
                <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete" onclick="return confirm('Delete this student?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
