<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 5 - Applicant Form</title>
</head>
<body>
    <h1>Applicant Form - Page 5</h1>
    <form action="{{ route('applicant.savePage5') }}" method="POST">
        @csrf
        <label for="fathers_name">Father's Name:</label>
        <input type="text" id="fathers_name" name="fathers_name">
        <br>

        <label for="fathers_email_address">Father's Email:</label>
        <input type="email" id="fathers_email_address" name="fathers_email_address">
        <br>

        <label for="fathers_landline_number">Father's Landline Number:</label>
        <input type="text" id="fathers_landline_number" name="fathers_landline_number">
        <br>

        <label for="fathers_mobile_number">Father's Mobile Number:</label>
        <input type="text" id="fathers_mobile_number" name="fathers_mobile_number">
        <br>

        <label for="mothers_name">Mother's Name:</label>
        <input type="text" id="mothers_name" name="mothers_name">
        <br>

        <label for="mothers_email_address">Mother's Email:</label>
        <input type="email" id="mothers_email_address" name="mothers_email_address">
        <br>

        <label for="mothers_landline_number">Mother's Landline Number:</label>
        <input type="text" id="mothers_landline_number" name="mothers_landline_number">
        <br>

        <label for="mothers_mobile_number">Mother's Mobile Number:</label>
        <input type="text" id="mothers_mobile_number" name="mothers_mobile_number">
        <br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
