<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="source/scripts.js"></script>
    <link rel="stylesheet" href="source/styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Admin Dashboard</a>
    </nav>
    <div class="container mt-5">
        <h1 class="mb-4">Administrar Usuarios</h1>

        <div class="card mb-3">
            <div class="card-header">Obtener usuario</div>
            <div class="card-body">
                <form id="getUserForm" class="form-inline">
                    <div class="form-group mb-2">
                        <label for="userId" class="sr-only">User ID:</label>
                        <input type="text" class="form-control" id="userId" placeholder="Ingrese ID">
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Buscar</button>
                </form>
                <div id="userDetails"></div>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-header">Crear Usuario</div>
            <div class="card-body">
                <form id="createUserForm">
                    <div class="form-group">
                        <label for="createUserEmail">Email:</label>
                        <input type="email" class="form-control" id="createUserEmail">
                    </div>
                    <div class="form-group">
                        <label for="createUserPassword">Password:</label>
                        <input type="password" class="form-control" id="createUserPassword">
                    </div>
                    <div class="form-group">
                        <label for="createUserFirstName">Nombres:</label>
                        <input type="text" class="form-control" id="createUserFirstName">
                    </div>
                    <div class="form-group">
                        <label for="createUserLastName">Apellidos:</label>
                        <input type="text" class="form-control" id="createUserLastName">
                    </div>

                    <button type="submit" class="btn btn-success">Crear Usuario</button>
                </form>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-header">Actualizar Usuario</div>
            <div class="card-body">
                <form id="updateUserForm">
                    <div class="form-group">
                        <label for="updateUserId">Usuario ID:</label>
                        <input type="text" class="form-control" id="updateUserId">
                    </div>
                    <div class="form-group">
                        <label for="updateUserEmail">Email:</label>
                        <input type="email" class="form-control" id="updateUserEmail">
                    </div>
                    <div class="form-group">
                        <label for="updateUserPassword">Password:</label>
                        <input type="password" class="form-control" id="updateUserPassword">
                    </div>
                    <div class="form-group">
                        <label for="updateUserFirstName">Nombres:</label>
                        <input type="text" class="form-control" id="updateUserFirstName">
                    </div>
                    <div class="form-group">
                        <label for="updateUserLastName">Apellidos:</label>
                        <input type="text" class="form-control" id="updateUserLastName">
                    </div>
                    
                    <button type="submit" class="btn btn-warning">Actualizar</button>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-header">Eliminar Usuario</div>
            <div class="card-body">
                <form id="deleteUserForm" class="form-inline">
                    <div class="form-group mb-2">
                        <label for="deleteUserId" class="sr-only">Usuario ID:</label>
                        <input type="text" class="form-control" id="deleteUserId" placeholder="Ingrese ID">
                    </div>
                    <button type="submit" class="btn btn-danger mb-2">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
