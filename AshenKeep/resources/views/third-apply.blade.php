<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 3 - Applicant Form</title>
</head>
<body>
    <h1>Applicant Form - Page 3</h1>
    <form action="{{ route('applicant.savePage3') }}" method="POST">
        @csrf
        <label for="donors_occupation">Donor's Occupation:</label>
        <input type="text" id="donors_occupation" name="donors_occupation">
        <br>

        <label for="employers_name_or_business_name">Employer's Name or Business Name:</label>
        <input type="text" id="employers_name_or_business_name" name="employers_name_or_business_name">
        <br>

        <label for="business_address">Business Address:</label>
        <input type="text" id="business_address" name="business_address">
        <br>

        <label for="employers_email_or_business_email_address">Employer's Email:</label>
        <input type="email" id="employers_email_or_business_email_address" name="employers_email_or_business_email_address">
        <br>

        <label for="business_landline_number">Business Landline Number:</label>
        <input type="text" id="business_landline_number" name="business_landline_number">
        <br>

        <label for="business_mobile_number">Business Mobile Number:</label>
        <input type="text" id="business_mobile_number" name="business_mobile_number">
        <br>

        <label for="position">Position:</label>
        <input type="text" id="position" name="position">
        <br>

        <label for="years_in_employment_or_business">Years in Employment/Business:</label>
        <input type="number" id="years_in_employment_or_business" name="years_in_employment_or_business">
        <br>

        <button type="submit">Next</button>
    </form>
</body>
</html>
