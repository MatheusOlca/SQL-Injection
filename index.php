
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body class="h-100 d-flex justify-content-center" style="min-height: 100vh;">
    <div class="h-100 my-auto">
        <form action="" method="post" class="form-group border rounded overflow-hidden">
            <?php
                include("connection.php");

                $flag = isset($_POST["username"]) && isset($_POST["password"]);

                if($flag){
                    $errors = "";

                    if(!strlen($_POST["username"])){
                        $flag = false;
                        $errors = $errors."<span class='px-3 py-1' style='background-color:black; color: white;'>Username Empty</span>";
                    }

                    if(!strlen($_POST["password"])){
                        $flag = false;
                        $errors = $errors."<span class='px-3 py-1' style='background-color:black; color: white;'>Password Empty</span>";
                    }

                    if(strlen($errors) == 0){
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        
                        $sql_query = "select * from users where username='".$username."' and password='".$password."'";
                        $query = $conn->query($sql_query) or die("Falha no código sql: ".$conn->error);
                        $has_reusult = $query->num_rows > 0;
                        
                        if($has_reusult){
                            $table = [];
                            echo "<div class='d-flex flex-column'><span class='px-3 py-1' style='background-color:black; color: white;'>";
                            while($row = $query->fetch_row()) {
                                $table[] = implode(" ", $row)."</br>";
                            }
                            echo implode(" ", $table)."</span></div>";
                        }else{
                            echo "
                                <span class='px-3 py-1' style='background-color:black; color: white;'>
                                    Username or Password incorrect!
                                </span>";
                        }
                    }else{
                        echo "<div class='d-flex flex-column'>"
                        .$errors.
                        "</div>";
                    }
                }
            ?>
            <div class="m-3">
                <h3>Database Login</h3>
                <label for="username">Username: </label>
                <input type="text" name="username" id="username" class="form-control">
                </br>

                <label for="password">Password: </label>
                <input type="password" name="password" id="password" class="form-control">
                </br>
                <div class="d-flex">
                    <button type="submit" class="btn btn-dark mx-auto">Mandar</button>
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>