<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('https://images.unsplash.com/photo-1715708473213-e0d8869f4834?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') no-repeat center center fixed;
            background-size: cover;
            padding: 20px;
            color: #fff;
        }

        h2 {
            color: #fff;
            text-align: center;
            margin-bottom: 30px;
        }

        form {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.3);
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #fff;
            border-radius: 4px;
            background-color: transparent;
            color: #fff;
        }

        button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Yamete Calculator</h2>
    <form action="calc.php" method="POST">
        <div class="row mb-3">
            <div class="col-md-6">
                <input type="text" name="num1Inserted" class="form-control" placeholder="Enter first number">
            </div>
            <div class="col-md-6">
                <input type="text" name="num2Inserted" class="form-control" placeholder="Enter second number">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <select name="calInserted" class="form-select">
                    <option value="add">Add</option>
                    <option value="sub">Subtract</option>
                    <option value="mul">Multiply</option>
                    <option value="div">Division</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Calculate</button>
            </div>
        </div>
    </form>
</div>

</body>
</html>
