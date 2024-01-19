<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #333;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color:#DCFFB7 ;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 2px solid black;
            border-radius: 4px;
        }
        h2{
             background-color:#9DBC98;
             width:270px;
        }

        select {
            width: 100%;
            padding: 10px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>User Registration Form</h2>
        <form action="#" method="post">
            <label for="id">ID:</label>
            <input type="text" id="id" name="id">

            <label for="image">Image</label>
            <input type="file" id="image" name="image">

            <label for="name">Name:</label>
            <input type="text" id="name" name="name">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email">

            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone">

            <label for="password">Password:</label>
            <input type="password" id="password" name="password">

            <label for="gender">Gender:</label>
            <select id="gender" name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob">

            <label for="address">Address:</label>
            <textarea id="address" name="address"></textarea>

            <label for="city">City:</label>
            <input type="text" id="city" name="city">

            <label for="state">State:</label>
            <input type="text" id="state" name="state">

            <label for="country">Country:</label>
            <input type="text" id="country" name="country">

            <label for="zipcode">Zipcode:</label>
            <input type="text" id="zipcode" name="zipcode">

            <input type="submit" value="Submit">
        </form>
    </div>

</body>
</html>
