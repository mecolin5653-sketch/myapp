<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f7f7f7;
        padding: 20px;
    }

    h1 {
        color: #333;
        text-align: center;
        padding-top: 55px;

    }

    form {
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        max-width: 500px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    input[type="text"],
    input[type="email"],
    select {
        width: 100%;
        padding: 8px 12px;
        margin-bottom: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 16px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }

    label {
        font-weight: bold;
        display: block;
        margin-bottom: 4px;
    }
</style>

<h1>Add New Student</h1>
<center>
<form action="{{ route('students.store') }}" method="POST">
    @csrf
    <input type="text" name="studentNumber" placeholder="Student Number" required><br>
    <input type="text" name="lname" placeholder="Last Name" required><br>
    <input type="text" name="fname" placeholder="First Name" required><br>
    <input type="text" name="mi" placeholder="MI"><br>
    <input type="email" name="email" placeholder="Email"><br>
    <input type="text" name="contactNumber" placeholder="Contact Number"><br>

    <label for="section_id">Select Section</label><br>
    <select name="section_id" id="section_id" required style="color: black; background-color: white;">
        <option value="">-- Choose Section --</option>
        @foreach($sections as $section)
            <option value="{{ $section->id }}">{{ $section->sectionName }}</option>
        @endforeach
    </select><br><br>

    <button type="submit">Save</button>
</form>
</center>