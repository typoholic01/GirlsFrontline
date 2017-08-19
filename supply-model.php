<?php
require "./DBSetting.php";
class SupplyModel
{
  private $conn;


  public function __construct()
  {
    $host = DBSetting::host;
    $user = DBSetting::user;
    $pw = DBSetting::pw;
    $dbName = DBSetting::dbName;

    // Create connection
    $this->conn = new mysqli($host, $user, $pw, $dbName);
  }

  public function all()
  {
    $conn = $this->conn;

    $tasks = [];

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM
              supplydefots";
    $result = $conn->query($sql);

    while($row = $result->fetch_array($resulttype = MYSQLI_ASSOC))
    {
      $rows[] = $row;
    }
    return $rows;
  }

  //아이템 코드를 받아 아이템 이름을 출력한다
  public function getItemName($ItemCode)
  {
    $conn = $this->conn;

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT  QuickRepair, QuickMarionette, Marionette, Arms, Coin FROM
              itemcodes
              where ItemCode = '$ItemCode'";

    $result = $conn->query($sql);

    while($row = $result->fetch_array($resulttype = MYSQLI_ASSOC))
    {
      $rows[] = $row;
    }
    return $rows;
  }
}
?>
