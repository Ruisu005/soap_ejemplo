<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Products</title>
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
        <h1 class="mb-4">Administrar Productos</h1>

        <!-- Get Product Form -->
        <div class="card mb-3">
            <div class="card-header">Obtener Producto</div>
            <div class="card-body">
                <form id="getProductForm" class="form-inline">
                    <div class="form-group mb-2">
                        <label for="productId" class="sr-only">Producto ID:</label>
                        <input type="text" class="form-control" id="productId" placeholder="Ingrese ID">
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Buscar</button>
                </form>
                <div id="productDetails"></div>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-header">Crear Producto</div>
            <div class="card-body">
                <form id="createProductForm">
                    <div class="form-group">
                        <label for="createName">Nombre:</label>
                        <input type="text" class="form-control" id="createName">
                    </div>
                    <div class="form-group">
                        <label for="createDescription">Descripcion:</label>
                        <input type="text" class="form-control" id="createDescription">
                    </div>
                    <div class="form-group">
                        <label for="createPrice">Precio:</label>
                        <input type="number" step="0.01" class="form-control" id="createPrice">
                    </div>
                    <button type="submit" class="btn btn-success">Crear</button>
                </form>
            </div>
        </div>


        <div class="card mb-3">
            <div class="card-header">Actualizar Producto</div>
            <div class="card-body">
                <form id="updateProductForm">
                    <div class="form-group">
                        <label for="updateId">Producto ID:</label>
                        <input type="text" class="form-control" id="updateId">
                    </div>
                    <div class="form-group">
                        <label for="updateName">Nombre:</label>
                        <input type="text" class="form-control" id="updateName">
                    </div>
                    <div class="form-group">
                        <label for="updateDescription">Descripcion:</label>
                        <input type="text" class="form-control" id="updateDescription">
                    </div>
                    <div class="form-group">
                        <label for="updatePrice">Precio:</label>
                        <input type="number" step="0.01" class="form-control" id="updatePrice">
                    </div>
                    <button type="submit" class="btn btn-warning">Actualizar</button>
                </form>
            </div>
        </div>

        <!-- Delete Product Form -->
        <div class="card">
            <div class="card-header">Eliminar Producto</div>
            <div class="card-body">
                <form id="deleteProductForm" class="form-inline">
                    <div class="form-group mb-2">
                        <label for="deleteId" class="sr-only">Producto ID:</label>
                        <input type="text" class="form-control" id="deleteId" placeholder="Ingresa ID">
                    </div>
                    <button type="submit" class="btn btn-danger mb-2">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
