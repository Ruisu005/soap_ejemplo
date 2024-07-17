<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="source/styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Admin Dashboard</a>
    </nav>
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Admin Dashboard</h1>
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h2>Administrar Usuarios</h2>
                        <p>Acceda al sistema de gestión de usuarios para agregar, actualizar, eliminar o ver usuarios.</p>
                        <a href="manage_users.php" class="btn btn-primary">Ir a Gestion de Usuarios</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h2>Administrar productos</h2>
                        <p>Acceda al sistema de gestión de productos para agregar, actualizar, eliminar o ver productos.</p>
                        <a href="manage_products.php" class="btn btn-primary">Ir a Gestion de Productos</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Indicadores de CRM con Gráficos -->
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                        Ventas Totales
                    </div>
                    <div class="card-body">
                        <canvas id="totalSalesChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                        Nuevos clientes
                    </div>
                    <div class="card-body">
                        <canvas id="newCustomersChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                    Productos mas vendidos
                    </div>
                    <div class="card-body">
                        <canvas id="bestSellingProductsChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                    Ingresos por categoria
                    </div>
                    <div class="card-body">
                        <canvas id="revenueByCategoryChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                    Ordenes pendientes
                    </div>
                    <div class="card-body">
                        <canvas id="pendingOrdersChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="source/scripts.js"></script>
</body>
</html>
