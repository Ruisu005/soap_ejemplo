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
                        $response = $client->getUser(['id' => $id]);
                        if (isset($response->user)) {
                            echo "User ID: " . $response->user->id . "<br>";
                            echo "Email: " . $response->user->email . "<br>";
                            echo "First Name: " . $response->user->firstname . "<br>";
                            echo "Last Name: " . $response->user->lastname . "<br>";
                        } else {
                            echo "User not found.";
                        }
                    }
                    break;
                case 'create':
                    $response = $client->createUser([
                        'user' => [
                            'email' => $_POST['email'],
                            'password' => $_POST['password'],
                            'firstname' => $_POST['firstname'],
                            'lastname' => $_POST['lastname']
                        ]
                    ]);
                    echo $response->success ? "User created successfully." : "Failed to create user.";
                    break;
                case 'update':
                    $response = $client->updateUser([
                        'user' => [
                            'id' => intval($_POST['id']),
                            'email' => $_POST['email'],
                            'password' => $_POST['password'],
                            'firstname' => $_POST['firstname'],
                            'lastname' => $_POST['lastname']
                        ]
                    ]);
                    echo $response->success ? "User updated successfully." : "Failed to update user.";
                    break;
                case 'delete':
                    $response = $client->deleteUser(['id' => intval($_POST['id'])]);
                    echo $response->success ? "User deleted successfully." : "Failed to delete user.";
                    break;
            }
        } catch (SoapFault $fault) {
            echo "Error: " . $fault->getMessage();
        }
    }
}
?>
