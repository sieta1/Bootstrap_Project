<!DOCTYPE HTML>
<html>
<head>
    <style>
        body{
            backgorund-color: black;
        }
        table, th, td{
            border: 1px solid black;
        }
        p{
            font-family: "Comic Sans MS";
            color: green;
            text-decoration: blink underline;
        }

        .container{
            margin-top: 50px;
        }
    </style>
    <title>Users form database</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <table class="table">
        <p>USERS'S INFORMATIONS:</p>
        <thead class="thead-dark">
            <tr>
                <th>Name:</th>
                <th>E-mail:</th>
                <th>Remember Token:</th>
            </tr>
        </thead>
            @foreach($users as $user)
                <tbody>
                    <tr>
                        <td>{{$user -> name}}</td>
                        <td>{{$user -> email}}</td>
                        <td>{{$user -> remember_token}}</td>
                    </tr>
                </tbody>
            @endforeach
    </table>
</div>
</body>
</html>

