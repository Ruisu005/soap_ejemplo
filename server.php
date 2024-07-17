<?php
include 'db.php';

class UserService {
    public function getUser($parameters) {
        global $conn;
        $id = $parameters->id;
        $sql = "SELECT * FROM users WHERE id = $id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            return [
                'user' => [
                    'id' => $user['id'],
                    'email' => $user['email'],
                    'firstname' => $user['firstname'],
                    'lastname' => $user['lastname'],
                    'address' => $user['address'],
                    'contact_info' => $user['contact_info'],
                    'photo' => $user['photo'],
                    'status' => $user['status']
                ]
            ];
        } else {
            return [
                'user' => null
            ];
        }
    }

    public function createUser($parameters) {
        global $conn;
        $user = $parameters->user;
        $sql = "INSERT INTO users (email, password, type, firstname, lastname, address, contact_info, photo, status, activate_code, reset_code, created_on) VALUES ('".$user->email."', '".$user->password."', ".$user->type.", '".$user->firstname."', '".$user->lastname."', '".$user->address."', '".$user->contact_info."', '".$user->photo."', ".$user->status.", '".$user->activate_code."', '".$user->reset_code."', '".$user->created_on."')";
        
        if ($conn->query($sql) === TRUE) {
            return ['success' => true];
        } else {
            return ['success' => false];
        }
    }

    public function updateUser($parameters) {
        global $conn;
        $user = $parameters->user;
        $sql = "UPDATE users SET email='".$user->email."', password='".$user->password."', type=".$user->type.", firstname='".$user->firstname."', lastname='".$user->lastname."', address='".$user->address."', contact_info='".$user->contact_info."', photo='".$user->photo."', status=".$user->status." WHERE id=".$user->id;
        
        if ($conn->query($sql) === TRUE) {
            return ['success' => true];
        } else {
            return ['success' => false];
        }
    }

    public function deleteUser($parameters) {
        global $conn;
        $id = $parameters->id;
        $sql = "DELETE FROM users WHERE id = $id";
        
        if ($conn->query($sql) === TRUE) {
            return ['success' => true];
        } else {
            return ['success' => false];
        }
    }

    public function getProduct($parameters) {
        global $conn;
        $id = $parameters->id;
        $sql = "SELECT * FROM products WHERE id = $id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $product = $result->fetch_assoc();
            return [
                'product' => [
                    'id' => $product['id'],
                    'category_id' => $product['category_id'],
                    'name' => $product['name'],
                    'description' => $product['description'],
                    'slug' => $product['slug'],
                    'price' => $product['price'],
                    'photo' => $product['photo'],
                    'date_view' => $product['date_view'],
                    'counter' => $product['counter']
                ]
            ];
        } else {
            return [
                'product' => null
            ];
        }
    }

    public function createProduct($parameters) {
        global $conn;
        $product = $parameters->product;
        $sql = "INSERT INTO products (category_id, name, description, slug, price, photo, date_view, counter) VALUES (".$product->category_id.", '".$product->name."', '".$product->description."', '".$product->slug."', ".$product->price.", '".$product->photo."', '".$product->date_view."', ".$product->counter.")";
        
        if ($conn->query($sql) === TRUE) {
            return ['success' => true];
        } else {
            return ['success' => false];
        }
    }

    public function updateProduct($parameters) {
        global $conn;
        $product = $parameters->product;
        $sql = "UPDATE products SET category_id=".$product->category_id.", name='".$product->name."', description='".$product->description."', slug='".$product->slug."', price=".$product->price.", photo='".$product->photo."', date_view='".$product->date_view."', counter=".$product->counter." WHERE id=".$product->id;
        
        if ($conn->query($sql) === TRUE) {
            return ['success' => true];
        } else {
            return ['success' => false];
        }
    }

    public function deleteProduct($parameters) {
        global $conn;
        $id = $parameters->id;
        $sql = "DELETE FROM products WHERE id = $id";
        
        if ($conn->query($sql) === TRUE) {
            return ['success' => true];
        } else {
            return ['success' => false];
        }
    }
}

$server = new SoapServer('userservice.wsdl');
$server->setClass('UserService');
$server->handle();
?>
