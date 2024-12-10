<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="css/style.css" rel="stylesheet">

</head>
<body>
    
    <main class="form-signin w-100 m-auto">
        <form action="actions/register_action.php" method="post">
            <h1 class="text-center">Threads</h1>
            <h3 class="h3 mb-3 fw-normal">Please register</h3>

            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Name" name="name">
                <label for="floatingInput">Name</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Name" name="username">
                <label for="floatingInput">Username</label>
            </div>
            
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                <label for="floatingPassword">Password</label>
            </div>
            <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Register</button>
            <p class="mt-5 mb-3 text-body-secondary">© 2017–2024</p>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>