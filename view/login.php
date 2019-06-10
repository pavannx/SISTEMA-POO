<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<form action="index.php?Login" method="POST">

    <div class="form-group">
        <label for="exampleInputEmail1">User</label>
        <input name="user" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="User">
    </div>


    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>


    <button type="submit" class="btn btn-primary">Logar</button>
</form>