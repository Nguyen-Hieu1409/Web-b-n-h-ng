<?php
namespace App\Models;
use PDO;
class BaseModel{
    protected $conn = null;
    protected $tableName= null;
    protected $primaryKey = 'id';
    protected $sqlBuilder = null;
    public function __construct()
    {
        try {
            $this->conn = new \PDO("mysql:host=localhost;dbname=asm;charset=utf8;port=3306", "root", "");
        } catch (\PDOxception $e) {
           echo"lỗi kết nối CSDL: ".$e->getMessage();
        }
    }
    public static function all(){
        $model= new static;
        $model->sqlBuilder="SELECT * FROM $model->tableName";
        $stmt =$model-> conn-> prepare($model->sqlBuilder);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
    //  create: thêm mới dữ liệu từ 1 bảng
    //$data: dữ liệu mảng có key và value trong key là tên cột còn value là giá trị tương ứng 
    
    public static function create($data){
        $model = new static;
        $sql="INSERT INTO $model->tableName(";
        $value="VALUES(";

        foreach ($data as $column => $val){
            $sql.="`$column`, ";
            $value.=":$column, ";
        }
     
        $sql = rtrim($sql, ', ') . ") " . rtrim($value, ', ') . ")";
        // dd($sql);
        $stmt=$model->conn->prepare($sql);
          return $stmt->execute($data);
    }

    // delete: là phương thức xóa dữ liệu theo id
    public static function delete($id){
        $model = new static;
        $sql="DELETE FROM $model->tableName WHERE $model->primaryKey=:$model->primaryKey";
        $stmt=$model->conn->prepare($sql);
        $stmt->execute(["$model->primaryKey"=>$id]);
    }
    // update: phuong thuc cap nhat
    // @data: là dữ liệu dùng để cập nhật có key là tên cột và value tương ứng
    // @id: là giá trị của khóa chính
    public static function update($data,$id){
        $model = new static;
        $sql= "UPDATE $model->tableName SET";
        foreach ($data as $column => $val){
            $sql .="`$column` = :$column, ";
        }
        // loại bỏ dấu ", "và thêm điều kiện
        $sql= rtrim($sql, ", ") . " WHERE $model->primaryKey=:$model->primaryKey";
        $stmt = $model->conn->prepare($sql);
        // thêm $id vào trong mảng
        $data["$model->primaryKey"]=$id;
        return $stmt->execute($data);

    }
    // @find: phương thức lấy 1 dữ liệu theo id

    public static function find($id){
        $model =  new static;
        $sql="SELECT * FROM $model->tableName WHERE $model->primaryKey=:$model->primaryKey";

        $stmt =$model->conn->prepare($sql);
         $stmt->execute(["$model->primaryKey"=>$id]);
         $result = $stmt->fetchAll(PDO::FETCH_CLASS);
         return $result[0] ?? [];
    }
   /**  @where : phương thức lấy dữ liệu theo điều kiện
    *@param $column : tên cột làm điều kiện
    *@param $operator: biểu thức điều kiện
    *@param $value: giá trị 
    */
    public static function where($column, $operator, $value){
        $model = new static;
        if($model->sqlBuilder == null){
        $model->sqlBuilder ="SELECT * FROM $model->tableName WHERE `$column` $operator
        '$value'";
        }else{
            $model->sqlBuilder .= " WHERE `$column` $operator '$value' ";
        }
        return $model;
    }
    /**
     *  @method get: lấy dữ liệu
     */
    public function get(){
        $stmt = $this->conn->prepare($this->sqlBuilder);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
    /**
     * @method first: lấy ra phần tử đầu tiên
     */
    public function first(){
        $stmt = $this->conn->prepare($this->sqlBuilder);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS)[0] ?? [];
    }
    /**
     * @method andWhere : Phương thức kết hợp với where thêm nhiều AND
     * @param $column : tên cột làm điều kiện
     *@param $operator: biểu thức điều kiện
     *@param $value: giá trị 
     */
    public function andWhere($column,$operator,$value)
    {
       $this->sqlBuilder .=" AND `$column` $operator '$value'";
       return $this;
    }

     /**
     * @method orWhere : Phương thức kết hợp với where thêm nhiều OR
     * @param $column : tên cột làm điều kiện
     *@param $operator: biểu thức điều kiện
     *@param $value: giá trị 
     */
    public function orWhere($column,$operator,$value)
    {
       $this->sqlBuider .=" OR `$column` $operator '$value'";
       return $this;
    }
    /**
     * @method select: phương thức lấy dữ liệu theo lựa chọn cột cần lấy
     */
    public static function select($column = ['*']){
        $model = new static;
        $model->sqlBuilder = "SELECT ";
        foreach ($column as $col){
            $model->sqlBuilder .= " $col, ";
        }
        $model->sqlBuilder = rtrim($model->sqlBuilder, ", ") . " FROM 
        $model->tableName";
        return $model;
    }

    /**
     * @method join: phương thức dùng để nối 2 bảng
     * @param $table1: bảng 1 là bảng hiện tại đang chọn
     * @param $table2: bảng 2 là bảng nối
     * @param $reference: khóa ngoại
     * @param $primary: Khóa chính
     */
    public function join($table1,$table2,$reference,$primary){
        $this->sqlBuilder .= " JOIN $table2 ON $table1.$reference = $table2.$primary ";
        // dd($this->sqlBuilder);
        return $this;
    }
}