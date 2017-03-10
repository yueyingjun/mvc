<?php
class db
{

    public $hostname = "localhost";
    private $username = "root";
    private $password = "root";
    public $dbname = "blog1";
    public $opts;
    public $tablename = "";
    public $connect;

    /*  早绑定  弱类型 严谨  强制类型*/
    function __construct($tablename="")
    {
        $this->tablename = $tablename;
        $this->config();
    }

    function config()
    {
        $this->connect = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);

        if (mysqli_connect_errno($this->connect)) {
            echo "数据库连接有误";
            exit();
        }
        $this->connect->query("set names utf8");
        $this->opts["where"] = $this->opts["order"] = $this->opts["limit"] = "";

    }

    function filed($info = "",$type=""){
        $sql = empty($info) ? "*" : $info;
        $keys = "";
        $values = "";

        if (strpos($sql, ";")&&$type=="insert") {
            $arr = explode(";", $sql);

            foreach ($arr as $v) {
                $arr1 = explode("=", $v);
                $keys .= $arr1[0] . ",";
                $values .= $arr1[1] . ",";
            }

            $keys = substr($keys, 0, -1);
            $values = substr($values, 0, -1);

            $sql = "(" . $keys . ") values (" . $values . ")";

        }else if($type=="insert"){

            $arr=explode("=",$info);
            $keys=$arr[0];
            $values=$arr[1];
            $sql = "(" . $keys . ") values (" . $values . ")";
        }


         $this->opts["filed"]=$sql;
        return $this;
    }
    function select($info=""){



      if(strpos($info,"elect")){
          $sql=$info;
      }else{
          $this->filed($info);
          $sql="select ".$this->opts["filed"]." from ".$this->tablename. " ".$this->opts["where"]." ".$this->opts["order"]." ".$this->opts["limit"];
      }
      $arr=array();
      $result=$this->connect->query($sql);
      while ($row=$result->fetch_assoc()){
        $arr[]=$row;
      }
      return $arr;

    }

    function where ($info=""){
        $sql=empty($info)?"":"WHERE ".$info;
        $this->opts["where"]=$sql;
        return $this;
    }
    function order ($info=""){
        $sql=empty($info)?"":"ORDER BY ".$info;
        $this->opts["order"]=$sql;
        return $this;
    }
    function limit ($info=""){
        $sql=empty($info)?"":"LIMIT  ".$info;
        $this->opts["limit"]=$sql;
        return $this;
    }

    function del($info=""){
        if(strpos($info,"elete")){
            $sql=$info;
        }else{
            $sql="delete from ".$this->tablename." ".$this->opts["where"];
        }

        $this->connect->query($sql);
        return $this->connect->affected_rows;

    }

    function update($info=""){
        if(strpos($info,"pdate")){
            $sql=$info;
        }else{
            if(empty($info)){
                $sql="update ".$this->tablename." set ".$this->opts["filed"]." ".$this->opts["where"];
            }else {
                $this->filed($info);
                $sql = "update " . $this->tablename . " set " . $this->opts["filed"] . " " . $this->opts["where"];
            }
        }

        $this->connect->query($sql);
        return $this->connect->affected_rows;
    }

    function insert ($info){
        if(strpos($info,"nsert")){
            $sql=$info;
        }else{
            if(empty($info)){
                $sql="insert into ".$this->tablename." ".$this->opts["filed"];
            }else {
                $this->filed($info,"insert");
                $sql="insert into ".$this->tablename." ".$this->opts["filed"];
            }
        }


        $this->connect->query($sql);
        return $this->connect->affected_rows;
    }

}

$obj=new db("category");














