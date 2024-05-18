<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speed Calculator</title>
    <style>
       body {
    font-family: Arial, sans-serif;
    background-image: url('https://images.unsplash.com/photo-1715708473213-e0d8869f4834?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
    background-size: cover;
    background-position: center;
    margin: 0;
    padding: 0;
}
.container {
    max-width: 400px;
    margin: 100px auto;
    background-color: rgba(255, 255, 255, 0.8);
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}
h1 {
    text-align: center;
}
.input-group {
    margin-bottom: 10px;
}
.input-group label {
    display: block;
    margin-bottom: 5px;
}
.input-group input[type="number"] {
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    width: calc(100% - 22px); /* Adjusted width to accommodate padding and border */
}
.result {
    margin-top: 20px;
    text-align: center;
    font-size: 20px;
    color: #007bff;
}
.btn-container {
    text-align: center; /* Center align the button */
}
.btn {
    display: inline-block;
    padding: 10px 20px;
    border-radius: 5px;
    border: none;
    background-color: #007bff;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}
.btn:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>
    
    <div class="container">
        <h1>Speed Calculator</h1>
        <form method="post">
            <div class="input-group">
                <label for="distance">Enter Distance (in km):</label>
                <input type="number" id="distance" name="distance" placeholder="Enter distance in km" required>
            </div>
            <div class="input-group">
                <label for="time">Enter Time (in hours):</label>
                <input type="number" id="time" name="time" placeholder="Enter time in hours" required>
            </div>
            <button type="submit" class="btn">Calculate Speed</button>
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $distance = $_POST['distance'];
                $time = $_POST['time'];

                class Speed {
                    private $distance;
                    private $time;

                    public function setEquation($distance, $time) {
                        $this->distance = $distance;
                        $this->time = $time;
                    }

                    public function calculateSpeed() {
                        if ($this->time <= 0) {
                            return false;
                        }
                        return $this->distance / $this->time;
                    }

                    public function __toString() {
                        $speed = $this->calculateSpeed();
                        if ($speed !== false) {
                            return $speed . " km/h";
                        } else {
                            return "Error: Time must be greater than zero.";
                        }
                    }
                }

                $Speed = new Speed();
                $Speed->setEquation($distance, $time);
                echo '<div class="result">The speed is = ' . $Speed . '</div>';
            }
        ?>
    </div>
</body>
</html>
