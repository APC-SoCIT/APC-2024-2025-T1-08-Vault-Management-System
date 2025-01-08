<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1 - Applicant Form</title>
</head>
<body>
    <h1>Applicant Form - Page 1</h1>
    <form action="{{ route('applicant.savePage1') }}" method="POST">
        @csrf
        <label for="full_name">Full Name:</label>
        <input type="text" id="full_name" name="full_name" required>
        <br>

        <label for="permanent_address">Permanent Address:</label>
        <input type="text" id="permanent_address" name="permanent_address" required>
        <br>

        <label for="current_address">Current Address:</label>
        <input type="text" id="current_address" name="current_address" required>
        <br>

        <label for="provincial_address">Provincial Address:</label>
        <input type="text" id="provincial_address" name="provincial_address" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>

        <label for="landline_number">Landline Number:</label>
        <input type="text" id="landline_number" name="landline_number">
        <br>

        <label for="mobile_number">Mobile Number:</label>
        <input type="text" id="mobile_number" name="mobile_number" required>
        <br>

        <button type="submit">Next</button>
    </form>
</body>
</html>
