<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form</title>
</head>

<style>
    body{
        margin:0 auto;

    }
form {
    display: flex;
    padding: 40px;
    background-color: lightblue;
    text-align: baseline;
    flex-direction: column;
    width: 25%;
    margin: 5% auto;
    border-radius: 10px;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman';
}
input{
    margin: 10px;
    outline: none;
    border-radius:5px
    }
    button{
        border-radius: 5px;
    }
    button:hover{
        background: green;
    }
    textarea{ border-radius: 5px;

    }

</style>
<body>
    <form action="process1.php" method="post">
        <h1>LOGIN FORM</h1>
name :<input type="text" placeholder="enter name" name="name"> 
<br> 
email: <input type="email" name="email" id="">
<br> 
password: <input type="password" name="password" id="">
<br> 
confirm: <input type="password" name="confirm" id="">
<br> 
<address>
    enter address
    <textarea name="address" id="" cols="30" rows="10" placeholder="Enter address"></textarea>
</address>
<br>

<button type="submit">SUMBIT</button>

</form>
</body>
</html>