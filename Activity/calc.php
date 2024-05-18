<?php
class Calc{
    public $num1;
    public $num2;
    public $cal;

    private $result;

    public function __construct($num1Inserted, $num2Inserted, $calInserted) {
        $this->num1 = $num1Inserted;
        $this->num2 = $num2Inserted;
        $this->cal = $calInserted;
        $this->result = null;
    }

    public function calcMethod() {
        switch ($this->cal) {
            case 'add':
                $this->result = $this->num1 + $this->num2;
                break;
            case 'sub':
                $this->result = $this->num1 - $this->num2;
                break;
            case 'mul':
                $this->result = $this->num1 * $this->num2;
                break;
                case 'div':
                    $this->result = $this->num1 / $this->num2;
                    break;
            default:
                $this->result = "Error";
                break;
        }
        return $this->result;
    }

    public function getResult(){
        return $this->result;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1Inserted'];
    $num2 = $_POST['num2Inserted'];
    $cal = $_POST['calInserted'];

    $calculator = new Calc($num1, $num2, $cal);
    $calculator->calcMethod();

    // Execute JavaScript actions only if the form has been submitted
    echo "<script>
            alert('{$calculator->getResult()}');
            window.location.href = 'cal_form.php?total={$calculator->getResult()}';
          </script>";
}
?>