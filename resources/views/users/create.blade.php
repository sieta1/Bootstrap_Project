<!DOCTYPE HTML>
<html>
<head>
    <title>
        Sign Up
    </title>
    <style>
        form{
            margin: 10%;
            margin-right: 50%;
            color: #F0FFFF;
        }
        h4{
            text-align: center;
        }
        form{
            background-color: #708090;
        }
        body{
            color: red;
        }
        .all{
            background-color: red;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
</head>
<body>
        <form method="POST" class="border border-light p-5">
            <h4 style="">Kullanıcı Kayıt Formu:</h4>
            <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" class="form-control" id="inputName"/>
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Beni hatırla</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</body>
</html>


