<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feet to Meters Conversion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('https://images.unsplash.com/photo-1715708473213-e0d8869f4834?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') no-repeat center center fixed;
            background-size: cover;
            padding: 20px;
            color: #fff;
            background-attachment: fixed; /* Keeps the background fixed */
        }

        
        .container {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.3);
        }

        .result {
            font-size: 20px;
            font-weight: bold;
            margin-top: 20px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #fff;
            border-radius: 4px;
            background-color: transparent;
            color: #fff;
        }

        button.btn-primary {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button.btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center">Feet to Meters Conversion</h2>
    <form action="" method="post">
        <input type="text" name="feet" placeholder="Enter feet value">
        <button class="btn btn-primary">Convert</button>
    </form>
    <?php
    // feet to meters conversion
    class ft2mconv {
        private $ftm;
        public function convert($ft) {
            $this->ftm = $ft * 0.3048; //Convert feet to meters
            return $this->ftm;
        }
    }
    
    // Process
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $feet = $_POST["feet"];
        $conversion = new ft2mconv();
        $result = $conversion->convert($feet);
        echo '<div class="result">The feet conversion of '.$feet.' to meters is: '.$result.'</div>';
    }
?>

</div>

</body>
</html>
