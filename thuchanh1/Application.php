<?php
class  Application{
    private $name;
    public static $count =1;
    public function __construct($name)
    {
        $this->name = $name;
        self::$count++;

    }
    public function __toString()

    {
        return 'Application name: '. $this->name;
    }
}
echo "tổng số lượng: ". Application::$count ."<br/>";
$app1 = new Application('App One');
echo "tổng số lượng: ". Application::$count ."<br/>";
$app2 = new Application('App Two');
echo "tổng số lượng: ". Application::$count ."<br/>";
echo $app1 .'<br/>';
echo $app2 .'<br/>';