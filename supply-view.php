<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>군수지원표</title>
    <link rel="stylesheet" href="./css/responsible-table.css">
    <link rel="stylesheet" href="./css/table.css">
    <link rel="stylesheet" href="./css/btn.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="./js/SortTable.js" type="text/javascript"></script>
    <script src="./js/LogisticsSupport.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        common("normal");
      })
    </script>
    <style media="screen">
      .btnGroup {
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div class="btnGroup">
      <button type="button" name="button" onclick="btnNormalFocus()">보통</button>
      <button type="button" name="button" onclick="btnHumanFocus()">인력 중심</button>
      <button type="button" name="button" onclick="btnBulletFocus()">탄약</button>
      <button type="button" name="button" onclick="btnFoodFocus()">식량</button>
      <button type="button" name="button" onclick="btnPartFocus()">부품</button>
    </div>
    <table id="myTable2" class="number-table">
      <thead>
        <tr>
          <th onclick="sortTable(0)">지역</th>
          <th onclick="sortTable(1)">맵</th>
          <th onclick="sortTable(2)">리더Lv</th>
          <th onclick="sortTable(3)">최소인원</th>
          <th onclick="sortTable(4)">시간</th>
          <th onclick="sortTable(5)">인력</th>
          <th onclick="sortTable(6)">탄약</th>
          <th onclick="sortTable(7)">식량</th>
          <th onclick="sortTable(8)">부품</th>
          <th onclick="sortTable(9)">총합</th>
          <th onclick="sortTable(10)">효율</th>
          <th onclick="sortTable(11)">획득 아이템</th>
        </tr>
      </thead>
    <tbody>
      <?php
        for ($i=0; $i < count($Nos); $i++) {
      ?>
      <tr>
        <td data-column="지역"><?php echo $Nos[$i]; ?></td>
        <td data-column="맵"><?php echo $SubNos[$i]; ?></td>
        <td data-column="리더Lv"><?php echo $LeaderLVs[$i]; ?></td>
        <td data-column="최소인원"><?php echo $MinMemNums[$i]; ?></td>
        <td data-column="시간"><?php echo $times[$i]; ?></td>
        <td data-column="인력"><?php echo $Humans[$i]; ?></td>
        <td data-column="탄약"><?php echo $Bullets[$i]; ?></td>
        <td data-column="식량"><?php echo $Foods[$i]; ?></td>
        <td data-column="부품"><?php echo $Parts[$i]; ?></td>
        <td data-column="총합"><?php echo $Total[$i]; ?></td>
        <td data-column="효율"><?php echo $Efficiency[$i]; ?></td>
        <td data-column="획득 아이템"><?php echo $ItemCodes[$i]; ?></td>
      </tr>
      <?php } ?>
    </tbody>
    </table>

  </body>
</html>
