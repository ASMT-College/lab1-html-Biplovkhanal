
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="submit.php" method="post">
        <fieldset class="fieldset">
            <legend class="legend">Register Form</legend>

            <div class="section">
            <label for="username">Username: </label> <br>
            <input name="username" placeholder="Biplov" type="text">
            </div> 
            <br>

            <div class="section">
                <label for="email">Email:</label> <br>
                <input name="email" placeholder="example@gmail.com" type="email">
                </div> 
                <br>

                <div class="section">
                    <label for="gender">Gender:</label> <br>
                    <select name="gender" id="">
                        <option value="male">male</option>
                        <option value="fermale">female</option>
                        <option value="other">other</option>
                    </select>
                    </div> 
                    <br>

                    <div class="section">
                    <label for="country">Country:</label> <br>
                    <input list="conuntry" name="country">
                    <datalist id="country">
                        <option value="nepal">nepal</option>
                        <option value="bhutan">bhutan</option>
                        <option value="india">india</option>
                    </datalist>
                    </div> 
                    <br>
                <div class="section">
                    <label for="password">Password:</label> <br>
                    <input name="password" placeholder="Enter your password" type="password">
                    </div> <br>
                    <button type="submit">Submit</button>
        </fieldset>
    </form>
</body>
</html>