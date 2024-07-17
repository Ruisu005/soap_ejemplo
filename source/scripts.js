// scripts.js
$(document).ready(function() {
    // Handle Get Product
    $('#getProductForm').submit(function(e) {
        e.preventDefault();
        var productId = $('#productId').val();
        $.ajax({
            url: 'action/product_actions.php',
            type: 'POST',
            data: { action: 'get', id: productId },
            success: function(response) {
                $('#productDetails').html(response);
            }
        });
    });

    // Handle Create Product
    $('#createProductForm').submit(function(e) {
        e.preventDefault();
        var name = $('#createName').val();
        var description = $('#createDescription').val();
        var price = $('#createPrice').val();
        $.ajax({
            url: 'action/product_actions.php',
            type: 'POST',
            data: { action: 'create', name: name, description: description, price: price },
            success: function(response) {
                alert(response);
            }
        });
    });

    // Handle Update Product
    $('#updateProductForm').submit(function(e) {
        e.preventDefault();
        var id = $('#updateId').val();
        var name = $('#updateName').val();
        var description = $('#updateDescription').val();
        var price = $('#updatePrice').val();
        $.ajax({
            url: 'action/product_actions.php',
            type: 'POST',
            data: { action: 'update', id: id, name: name, description: description, price: price },
            success: function(response) {
                alert(response);
            }
        });
    });

    // Handle Delete Product
    $('#deleteProductForm').submit(function(e) {
        e.preventDefault();
        var id = $('#deleteId').val();
        $.ajax({
            url: 'action/product_actions.php',
            type: 'POST',
            data: { action: 'delete', id: id },
            success: function(response) {
                alert(response);
            }
        });
    });

    // Handle Get User
    $('#getUserForm').submit(function(e) {
        e.preventDefault();
        var userId = $('#userId').val();
        $.ajax({
            url: 'action/user_actions.php',
            type: 'POST',
            data: { action: 'get', id: userId },
            success: function(response) {
                $('#userDetails').html(response);
            }
        });
    });

    // Handle Create User
    $('#createUserForm').submit(function(e) {
        e.preventDefault();
        var email = $('#createUserEmail').val();
        var password = $('#createUserPassword').val();
        var firstName = $('#createUserFirstName').val();
        var lastName = $('#createUserLastName').val();
        $.ajax({
            url: 'action/user_actions.php',
            type: 'POST',
            data: { action: 'create', email: email, password: password, firstname: firstName, lastname: lastName },
            success: function(response) {
                alert(response);
            }
        });
    });

    // Handle Update User
    $('#updateUserForm').submit(function(e) {
        e.preventDefault();
        var id = $('#updateUserId').val();
        var email = $('#updateUserEmail').val();
        var password = $('#updateUserPassword').val();
        var firstName = $('#updateUserFirstName').val();
        var lastName = $('#updateUserLastName').val();
        $.ajax({
            url: 'action/user_actions.php',
            type: 'POST',
            data: { action: 'update', id: id, email: email, password: password, firstname: firstName, lastname: lastName },
            success: function(response) {
                alert(response);
            }
        });
    });

    // Handle Delete User
    $('#deleteUserForm').submit(function(e) {
        e.preventDefault();
        var id = $('#deleteUserId').val();
        $.ajax({
            url: 'action/user_actions.php',
            type: 'POST',
            data: { action: 'delete', id: id },
            success: function(response) {
                alert(response);
            }
        });
    });
});




// Mock data for the charts
$(document).ready(function() {
    const totalSalesCtx = document.getElementById('totalSalesChart').getContext('2d');
    new Chart(totalSalesCtx, {
        type: 'line',
        data: {
            labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            datasets: [{
                label: 'Ventas Totales',
                data: [12000, 15000, 13000, 17000, 19000, 21000, 25000, 23000, 22000, 24000, 26000, 28000],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    const newCustomersCtx = document.getElementById('newCustomersChart').getContext('2d');
    new Chart(newCustomersCtx, {
        type: 'bar',
        data: {
            labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            datasets: [{
                label: 'Nuevos Clientes',
                data: [50, 60, 55, 70, 65, 80, 75, 90, 85, 95, 100, 110],
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    const bestSellingProductsCtx = document.getElementById('bestSellingProductsChart').getContext('2d');
    new Chart(bestSellingProductsCtx, {
        type: 'doughnut',
        data: {
            labels: ['Procesador', 'Tarjetas Madre', 'RAM', 'Gabinetes', 'Fuente de Poder', 'almacenamiento', 'Ventiladores', 'Refrigeracion Liquida', 'Refrigeracion de Aire'],
            datasets: [{
                label: 'Productos mas vendidos',
                data: [200, 150, 180, 100, 120, 140, 60, 80, 90],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true
        }
    });

    const revenueByCategoryCtx = document.getElementById('revenueByCategoryChart').getContext('2d');
    new Chart(revenueByCategoryCtx, {
        type: 'bar',
        data: {
            labels: ['Procesador', 'Tarjetas Madre', 'RAM', 'Gabinetes', 'Fuente de Poder', 'almacenamiento', 'Ventiladores', 'Refrigeracion Liquida', 'Refrigeracion de Aire'],
            datasets: [{
                label: 'Ingresos por categoria',
                data: [40000, 30000, 20000, 10000, 15000, 25000, 5000, 10000, 5000],
                backgroundColor: 'rgba(255, 159, 64, 0.2)',
                borderColor: 'rgba(255, 159, 64, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    const pendingOrdersCtx = document.getElementById('pendingOrdersChart').getContext('2d');
    new Chart(pendingOrdersCtx, {
        type: 'pie',
        data: {
            labels: ['Pendiente', 'Completado'],
            datasets: [{
                label: 'Pending Orders',
                data: [12, 88],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true
        }
    });
});