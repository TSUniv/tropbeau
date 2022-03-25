<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
    <header>
        <h1> Upload une image </h1>
    </header>
    <main>
        <form class="form" action="" method="POST">
            @csrf 
            <h2> Inserer votre image :</h2>
            <div id="div_file">
                <input id="file" type="file" name="img" required>
            </div>
            <h2> Entrer votre message :</h2>
            <div id="message">

                <input type="text" name="message">
            
            </div>
            <div id="button">
                <input  type="submit" value="Upload !">
            </div>
        </form>
    <main>
    <script>

    </script>
        
</body>
</html>