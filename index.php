<?php 
    class Worker { //объявляем класс

        // объявляем приватные свойства
        private $name; 
        private $age;
        private $salary;

        // объявляем методы получения и установки имени, возраста и зарплаты
        public function getName() {
            return $this->name;
        }
        public function setName($name) {
            $this->name = $name;
        }
        public function getSalary() {
            return $this->salary;
        }
        public function setSalary($salary) {
            $this->salary = $salary;
        }
        public function getAge() {
            return $this->age;
        }

        // здесь возраст установится только если сработал приватный checkAge и вернул true
        public function setAge($age) {
            if($this->checkAge($age) == true) {
            $this->age = $age;
            }
        } 

        // задаём метод проверки соответствия возраста реальности
        private function checkAge($age) {
            if($age > 1 && $age < 100) {
                return true;
            } else {
                return false;
            }
        }
    }

$vasyan = new Worker; // Создаём объект класса


// Заполняем его свойства данными с помощью сет-методов 

$vasyan->setName("Vasyan");
$vasyan->setSalary("45000");
$vasyan->setAge("28");

$ivan = new Worker;

$ivan->setName("Ivan");
$ivan->setSalary("75000");
$ivan->setAge("18");

//ТЫ НЕ ПРОЙДЁШЬ!!!
$vasyan->setAge("118");

//А ты - без проблем
$ivan->setAge("38");

//Для удобства засовываем сумму возраста и общак в переменные
$sumAge = $vasyan->getAge() + $ivan->getAge();
$obschak = $vasyan->getSalary() + $ivan->getSalary();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Выводим внутри HTML -->
    <p>Сумма возраста Ивана и Васяна: <i><?=$sumAge?></i></p>
    <p>Общак Ивана и Васяна: <i><?=$obschak . ' рублей' ?></i></p>
</body>
</html>