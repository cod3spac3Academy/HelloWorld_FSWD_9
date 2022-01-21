<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login Ejercicio 1.2</title>
</head>

<body>
    <form method="POST" action="access_control.php">

        <!-- en el formulario (padre) fundamental indicar el metodo (poner post siempre)y en action con que otra pagina quiero linkarlo -->

        <!-- En este ejercicio no hay q inyectar php en el html, ya que unicamente lo q vamos es a linkar lo q se escriba en cada input a la otra pagina -->

        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <!-- en cada input del formulario (hijo) fundamental poner name=" " e indicar en cada input lo q será, pq ese nombre sera el que usemos luego en la pagina en que recibimos dicha info -->
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            <!-- en cada input del formulario (hijo) fundamental poner name=" " e indicar en cada input lo q será, pq ese nombre sera el que usemos luego en la pagina en que recibimos dicha info -->
        </div>

        <div class="form-check">
            <input type="checkbox" name="checkbox" class="form-check-input" id="exampleCheck1">
            <!-- en cada input del formulario (hijo) fundamental poner name=" " e indicar en cada input lo q será, pq ese nombre sera el que usemos luego en la pagina en que recibimos dicha info -->
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>


        <button type="submit" class="btn btn-primary">Submit </button>


    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>