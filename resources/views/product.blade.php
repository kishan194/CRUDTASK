<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Header</title>
</head>
<body>
<style>

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #333;
    color: #fff;
    padding: 10px;
    text-align: center;
}

nav {
    background-color: #444;
    padding: 10px;
    text-align: center;
}

nav a {
    color: #fff;
    text-decoration: none;
    padding: 10px;
    margin: 0 5px;
}

nav a:hover {
    background-color: #555;
}

</style>

    <header>
        <h1>CRUD TASKS</h1>
    </header>

    <nav>
        <a href="/insert">Add Product</a>
        <a href="/display" >Display</a> 
        <a href="/category/addcategory">Add Category</a>
        <a href="/regitration">Registration</a>
    </nav>
    <section>

    @if(isset($imageUrl))
        <img src="{{ $imageUrl }}" alt="Your Image">
    @endif
    </section>

    <!-- Your content goes here -->
    

</body>
</html>


  
