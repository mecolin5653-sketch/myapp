<!DOCTYPE html>
<html>
<head>
    <title>Add Section</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            max-width: 500px;
            width: 100%;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        input[type="text"],
        textarea {
            width: 96.5%;
            padding: 8px;
            margin-bottom: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            color: #333;
            background-color: #fff;
            resize: vertical;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="{{ route('sections.store') }}" method="POST">
        @csrf
        <h1>Add Section</h1>
        <input type="text" name="sectionName" placeholder="Section Name" required><br>
        <textarea name="description" placeholder="Description (optional)"></textarea><br>
        <button type="submit">Save</button>
    </form>
</body>
</html>
