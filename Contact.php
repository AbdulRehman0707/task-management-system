<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="stylee.css">
    <style>
        /* Reuse the styles from the About page CSS */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #fff;
    color: #7296a4;
}

header {
    background-color: #1e1e1e;
    padding: 10px 0;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    text-align: center;
}

nav ul li {
    display: inline;
    margin: 0 15px;
}

nav ul li a {
    text-decoration: none;
    color: #f0f0f0;
}

nav ul li a.active {
    color: #007bff;
}

.contact {
    padding: 50px 20px;
    text-align: center;
}

.container {
    max-width: 800px;
    margin: 0 auto;
}

h1 {
    color: #000;
}

.form-group {
    margin-bottom: 20px;
    text-align: left;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"], input[type="email"], textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #7296a4;
    border-radius: 4px;
    box-sizing: border-box;
}

button {
    padding: 10px 20px;
    background-color: #000;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #7296a4;
}



    </style>
</head>
<body>


    <section class="contact">
        <div class="container">
            <h1>Contact Us</h1>
            <p>If you have any questions, feedback, or need support, please reach out to us using the contact form below.</p>
            <form action="submit_form.php" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>
    </section>

    <div class="container-fluid">
    <div class="row">
        <div class="div" style="height:8.5vh;background-color:white;color:#517e8f;">
        <center><h6>&copy;Copyright | All right reserved by Sage Solutions.</h6></center>

        </div>
    </div>
</div>
</body>
</html>
