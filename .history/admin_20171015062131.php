<?php
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <title>Admin Panel</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">Attendance App</a>
            <div class="collapse navbar-collapse" style="justify-content: flex-end">
                <a href="/admin.php"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Admin</button></a>
            </div>
    </nav>

    <div class="container">
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>User</th>
            <th>Came in at</th>
        </tr>
        </thead>
        <tbody class="result">
        </tbody>
</table>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $(() => {
        $.ajax({
            url: '/getController.php',
            method: 'GET'
        }).done((res) => {
            console.log(res)
        }).fail((err) => {
            console.log(err)
        })
    })
</script>
</html>