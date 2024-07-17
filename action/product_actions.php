<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['action'])) {
        $wsdl = "http://localhost/soap/userservice.wsdl";
        $client = new SoapClient($wsdl);
        $action = $_POST['action'];

        try {
            switch ($action) {
                case 'get':
                    if (!empty($_POST['id'])) {
                        $id = intval($_POST['id']);
                        $response = $client->getProduct(['id' => $id]);
                        if (isset($response->product)) {
                            echo "Product ID: " . $response->product->id . "<br>";
                            echo "Name: " . $response->product->name . "<br>";
                            echo "Description: " . $response->product->description . "<br>";
                            echo "Price: $" . $response->product->price . "<br>";
                        } else {
                            echo "Product not found.";
                        }
                    }
                    break;
                case 'create':
                    $response = $client->createProduct([
                        'product' => [
                            'name' => $_POST['name'],
                            'description' => $_POST['description'],
                            'price' => floatval($_POST['price'])
                        ]
                    ]);
                    echo $response->success ? "Product created successfully." : "Failed to create product.";
                    break;
                case 'update':
                    $response = $client->updateProduct([
                        'product' => [
                            'id' => intval($_POST['id']),
                            'name' => $_POST['name'],
                            'description' => $_POST['description'],
                            'price' => floatval($_POST['price'])
                        ]
                    ]);
                    echo $response->success ? "Product updated successfully." : "Failed to update product.";
                    break;
                case 'delete':
                    $response = $client->deleteProduct(['id' => intval($_POST['id'])]);
                    echo $response->success ? "Product deleted successfully." : "Failed to delete product.";
                    break;
            }
        } catch (SoapFault $fault) {
            echo "Error: " . $fault->getMessage();
        }
    }
}
?>
