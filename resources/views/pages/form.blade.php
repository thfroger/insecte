<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="style.css" rel="stylesheet" type="text/css">

        <title>Form</title>
    </head>
    <body>
        <h1> In order to know you better, we ask you to answer this form: </h1>
        <form>
            How old are you?<br>
            <input type="number" name="age" placeholder="What's your age?" value=""><br>
            What's your family?<br>
            <input type="text" name="family" placeholder="What's your family?" value=""><br>
            What's your race?<br>
            <input type="text" name="race" placeholder="saisissez votre race" value=""><br>
            We will serve you meals: what do you eat? <br>
            <input type="text" name="food" placeholder="tell us what do you eat" value=""><br><br>
            <input type="submit" value="Submit">
        </form> 
    </body>
</html>