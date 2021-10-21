<?
global $link;
$link = mysqli_connect("localhost", "mysql", "mysql", "sdadqsa");
if (!$link) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
}
$beg_stroka = "Оденьте маску и перчатки. Берегите своё здоровье.";
$sql = "SELECT * FROM `beg_stroka`";
if ($result = $link->query($sql)) {
        while($obj = $result->fetch_object()){
           $beg_stroka=$obj->text_;
        }
    }