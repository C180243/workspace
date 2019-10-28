<?php
class Building{
  //properties
  /**
   * 属性
   * @var string $name 建物名
   * @var int $height 建物高さ
   */
   private $name;
   private $height;
  
  //constructor
  /**
   * コンストラクタ
   * @param string $name;
   * @param int $height;
   */
   function __construct(string $name, int $height) {
       $this->name = $name;
       $this->height = $height;
   }
  
  //accessor method
  function getName():string {
      return $this->name;
  }
  function setName(string $name){
      $this->name = $name;
  }
  function getAge():int {
      return $this->age;
  }
  function setAge(int $age):void{
      $this->age = $age;
  }
  
  
  
  //method
  function getProfile():string{
      $profile = "{$this->name} の高さ {$this->height} mです。";
      return $profile;
  }
}
?>