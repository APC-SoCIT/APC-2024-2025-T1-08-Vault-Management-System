<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2 - Applicant Form</title>
</head>
<body>
    <h1>Applicant Form - Page 2</h1>
    <form action="{{ route('applicant.savePage2') }}" method="POST">
        @csrf
        <label for="date_of_birth">Date of Birth:</label>
        <input type="date" id="date_of_birth" name="date_of_birth" required>
        <br>

        <label for="place_of_birth">Place of Birth:</label>
        <input type="text" id="place_of_birth" name="place_of_birth" required>
        <br>

        <label for="citizenship">Citizenship:</label>
        <input type="text" id="citizenship" name="citizenship" required>
        <br>

        <label for="place_of_catholic_baptism">Place of Catholic Baptism:</label>
        <input type="text" id="place_of_catholic_baptism" name="place_of_catholic_baptism">
        <br>

        <label for="date_of_catholic_baptism">Date of Catholic Baptism:</label>
        <input type="date" id="date_of_catholic_baptism" name="date_of_catholic_baptism">
        <br>

        <label for="religious_organization_affiliated_with">Religious Organization Affiliated With:</label>
        <input type="text" id="religious_organization_affiliated_with" name="religious_organization_affiliated_with">
        <br>

        <button type="submit">Next</button>
    </form>
</body>
</html>
