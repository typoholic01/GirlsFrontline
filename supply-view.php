<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>군수지원표</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/btn.css">
    <link rel="stylesheet" href="./css/myTable.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="./js/SortTable.js" type="text/javascript"></script>
    <script src="./js/LogisticsSupport.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        common("normal");
      })
      //보통
      function btnNormalFocus() {
        common("normal");
        descSortTable(10);
      }
      //인력 중심
      function btnHumanFocus() {
        common("human");
        descSortTable(10);
      }
      //탄환 중심
      function btnBulletFocus() {
        common("bullet");
        descSortTable(10);
      }
      //식량 중심
      function btnFoodFocus() {
        common("food");
        descSortTable(10);
      }
      //부품 중심
      function btnPartFocus() {
        common("part");
        descSortTable(10);
      }
      //쾌속수복
      function btnQuickRepairFocus() {
        stringSortTable('쾌속수복');
      }
      //쾌속제조
      function btnQuickMarionetteFocus() {
        stringSortTable('쾌속제조');
      }
      //인형제조
      function btnMarionetteFocus() {
        stringSortTable('인형제조');
      }
      //장비제조
      function btnArmsFocus() {
        stringSortTable('장비제조');
      }
      //구매토큰
      function btnCoinFocus() {
        stringSortTable('구매토큰');
      }

      function changeText( that) {
        that.innerHTML = "인력X2";
      }

    </script>
    <style media="screen">
      .btnGroup {
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div align="center">
      <h1>소녀전선 군수조합표</h1>
      <div class="btn-group">
        <button type="button" class="btn btn-primary" name="button" onclick="btnNormalFocus()">보통</button>
        <button type="button" class="btn btn-primary" name="button" onclick="btnHumanFocus()">인력X2</button>
        <button type="button" class="btn btn-primary" name="button" onclick="btnBulletFocus()">탄약X2</button>
        <button type="button" class="btn btn-primary" name="button" onclick="btnFoodFocus()">식량X2</button>
        <button type="button" class="btn btn-primary" name="button" onclick="btnPartFocus()">부품X6</button>
      </div>
      <p style="font-size:8px">부품은 기본적으로 X3 되어있습니다</p>
      <div class="btn-group">
        <button type="button" class="btn btn-success forestgreen" name="button" onclick="btnQuickRepairFocus()">쾌속수복</button>
        <button type="button" class="btn btn-success" name="button" onclick="btnQuickMarionetteFocus()">쾌속제조</button>
        <button type="button" class="btn btn-default" name="button" onclick="btnMarionetteFocus()">인형제조</button>
        <button type="button" class="btn btn-primary" name="button" onclick="btnArmsFocus()">장비제조</button>
        <button type="button" class="btn btn-warning" name="button" onclick="btnCoinFocus()">구매토큰</button>
      </div>
    </div>
    <div align="center">
      <table id="myTable2" class="table table-hover">
        <caption><h1>보통</h1></caption>
        <thead>
          <tr class="info">
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
          <td data-column="획득 아이템">
            <?php
            if ( $QuickRepair[$i] == 1) {
             echo '<button type="button" class="btn btn-success btn-xs forestgreen" onclick="btnQuickRepairFocus()">쾌속수복</button><br/>';
            }
            if ($QuickMarionette[$i] == 1) {
             echo '<button type="button" class="btn btn-success btn-xs" onclick="btnQuickMarionetteFocus()">쾌속제조</button><br/>';
            }
            if ($Marionette[$i] == 1) {
             echo '<button type="button" class="btn btn-default btn-xs" onclick="btnMarionetteFocus()">인형제조</button><br/>';
            }
            if ($Arms[$i] == 1) {
             echo '<button type="button" class="btn btn-primary btn-xs" onclick="btnArmsFocus()">장비제조</button><br/>';
            }
            if ($Coin[$i] == 1) {
             echo '<button type="button" class="btn btn-warning btn-xs" onclick="btnCoinFocus()">구매토큰</button><br/>';
            }
            ?>
          </td>
        </tr>
        <?php } ?>
      </tbody>
      </table>
    </div>


  </body>
</html>
