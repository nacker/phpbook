<?php
class Credit
{
    private $name;
    private $idNum;
    public function __construct($name, $idNum)
    {
        $this->name = $name;
        $this->idNum = $idNum;
    }


    // 中转站
    public function __set($name, $value)
    {

        // $this->$name = $value;

        // return $this->$name;

        // 拼接实际调用的私有方法的名称
        $method = 'set' . ucfirst($name);
        return method_exists($this, $method) ? $this->$method($name, $value) : null;
    }


    private function setIdNum($name, $value)
    {

        // 设置身份证号 做一些验证
        // 检查对象中否存在该属性
        if (property_exists($this, $name))
            $this->$name = strlen($value) == 18 ? $value : null;
    }


    private function getIdNum($name)
    {
        // 只返回后六位
        $flag = property_exists($this, $name) && !empty($this->$name);
        if ($flag) {
            return '*******' . mb_substr($this->$name, -6, 6);
        } else {
            return '身份证信息不合法';
        }
    }

    private function setAge($name, $value)
    {
        echo  '休想访问到我，我是私有的';
    }


    // 中转站
    public function __get($name)
    {
        // return $this->$name;
        // 拼接实际调用的私有方法的名称
        $method = 'get' . ucfirst($name);
        return method_exists($this, $method) ? $this->$method($name) : null;
    }
}

$c = new Credit('胡歌', '341621198501215484');
$c->age = 20;
// echo $c->name;
$c->idNum = '341621198501215483'; //__set
echo $c->idNum;//__get
