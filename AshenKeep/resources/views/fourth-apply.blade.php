<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 4 - Applicant Form</title>
</head>
<body>
    <h1>Applicant Form - Page 4</h1>
    <form action="{{ route('applicant.savePage4') }}" method="POST">
        @csrf
        <label for="spouses_name">Spouse's Name:</label>
        <input type="text" id="spouses_name" name="spouses_name">
        <br>

        <label for="spouses_date_of_birth">Spouse's Date of Birth:</label>
        <input type="date" id="spouses_date_of_birth" name="spouses_date_of_birth">
        <br>

        <label for="spouses_place_of_birth">Spouse's Place of Birth:</label>
        <input type="text" id="spouses_place_of_birth" name="spouses_place_of_birth">
        <br>

        <label for="spouses_email_address">Spouse's Email:</label>
        <input type="email" id="spouses_email_address" name="spouses_email_address">
        <br>

        <label for="spouses_landline_number">Spouse's Landline Number:</label>
        <input type="text" id="spouses_landline_number" name="spouses_landline_number">
        <br>

        <label for="spouses_mobile_number">Spouse's Mobile Number:</label>
        <input type="text" id="spouses_mobile_number" name="spouses_mobile_number">
        <br>

        <button type="submit">Next</button>
    </form>
</body>
</html>
