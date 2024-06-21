

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Registration</title>
</head>
<body>
    <h2>Student Registration Form</h2>
    <form action="save_student.php" method="post">
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required><br><br>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required><br><br>

        <label for="date_of_birth">Date of Birth:</label>
        <input type="date" id="date_of_birth" name="date_of_birth"><br><br>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>

        <label for="phone_number">Phone Number:</label>
        <input type="text" id="phone_number" name="phone_number"><br><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address"><br><br>

        <label for="city">City:</label>
        <input type="text" id="city" name="city"><br><br>

        <label for="state">State:</label>
        <input type="text" id="state" name="state"><br><br>

        <label for="zipcode">Zipcode:</label>
        <input type="text" id="zipcode" name="zipcode"><br><br>

        <label for="country">Country:</label>
        <input type="text" id="country" name="country"><br><br>

        <label for="college_name">College Name:</label>
        <input type="text" id="college_name" name="college_name"><br><br>

        <label for="major">Major:</label>
        <input type="text" id="major" name="major"><br><br>

        <label for="year_of_study">Year of Study:</label>
        <input type="number" id="year_of_study" name="year_of_study"><br><br>

        <label for="gpa">GPA:</label>
        <input type="text" id="gpa" name="gpa"><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
