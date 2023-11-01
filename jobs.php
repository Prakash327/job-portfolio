<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Apply for job</title>
</head>
<body>
    <main>
<form action="apply.php" method="post">
        <h1>Apply For Job </h1>
        <div>
            <label for="fname">Firstname:</label>
            <input type="text" name="fname" id="fname">
        </div>
        <div>
            <label for="lname">Lasttname:</label>
            <input type="text" name="lname" id="lname">
        </div>
        <div>
            <label for="contact">Contact no:</label>
            <input type="number" name="contact" id="contact">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="info">Job intrested in:</label>
            <input type="text" name="info" id="info">
        </div>
        <div>
            <label for="description">Your Gualification:</label>
            <input type="text" name="description" id="discription">
        </div>
        
       
        <button type="submit">Apply !!</button>
        <footer>find best jobs for you</footer>
    </form>
</main>
</body>
</html>