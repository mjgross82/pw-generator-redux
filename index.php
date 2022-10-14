<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>

<div class="wrapper">
      <header>
        <h1>Password Generator</h1>
      </header>
      <div class="card">
        <div class="card-header">
          <h2>Generate a Password</h2>
        </div>
        <div class="card-body">
          <textarea
            readonly
            id="password"
            placeholder="Your Secure Password"
            aria-label="Generated Password"
         >
         <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $pwLength = $_POST['pwLength'];
                if (empty($pwLength)) {
                    echo "Please enter a password length.";
                } else {
                    echo $pwLength;
                }
            }
            ?>
        </textarea>
        </div>
        <div class="card-footer">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                Password Length (Enter a number between 8 and 64):
                <input type="number" name="pwLength" min="8" max="64"><br><br>
                Contain lowercase letters?
                <input type="radio" name="lower" id="lowerYes" value=1>
                <label for="lowerYes">Yes</label> 
                <input type="radio" name="lower" id="lowerNo" value=0>
                <label for="lowerNo">No</label><br><br>
                Contain uppercase letters?
                <input type="radio" name="upper" id="upperYes" value=1>
                <label for="upperYes">Yes</label> 
                <input type="radio" name="upper" id="upperNo" value=0>
                <label for="upperNo">No</label><br><br>
                Contain special characters?
                <input type="radio" name="special" id="specialYes" value=1>
                <label for="specialYes">Yes</label> 
                <input type="radio" name="special" id="specialNo" value=0>
                <label for="specialNo">No</label><br><br>
                <input type="submit" id="generate" class="btn" value="Generate Password">
            </form>
        </div>
      </div>
    </div>
    
</body>
</html>