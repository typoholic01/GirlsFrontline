var humans = new Array();
var bullets = new Array();
var foods = new Array();
var parts = new Array();
var WatingTimes = new Array();
var sums = new Array();
var avarages = new Array();

/////////////////////////////////////////
//        각 행의 데이터를 가져온다      //
/////////////////////////////////////////
function getData() {
  var rows = $("#myTable2 tbody tr");

  for (var i = 1; i <= rows.length; i++) {
    humans[i-1] = $("#myTable2 > tbody > tr:nth-child("+i+") > td:nth-child(6)").text();
    bullets[i-1] = $("#myTable2 > tbody > tr:nth-child("+i+") > td:nth-child(7)").text();
    foods[i-1] = $("#myTable2 > tbody > tr:nth-child("+i+") > td:nth-child(8)").text();
    parts[i-1] = $("#myTable2 > tbody > tr:nth-child("+i+") > td:nth-child(9)").text();
    var time = $("#myTable2 > tbody > tr:nth-child("+i+") > td:nth-child(5)").text();
    time = time.trim();
    var hour = time.substring(0,2);
    console.log("시간: " + hour);

    var minute = time.substring(3,5);
    console.log("분: " + minute);
    WatingTimes[i-1] = hour * 60 + minute * 1;
    console.log("대기시간: " + WatingTimes[i-1]);
  }
}

/////////////////////////////////////////
//        데이터를 계산,출력한다         //
/////////////////////////////////////////
function common(choice) {
  getData();

  for (var i = 0; i < humans.length; i++) {
    //합계 저장
    switch (choice) {
      case "normal":
        $("#myTable2 > caption > h1").text("보통");
        sums[i] = Number(humans[i])+Number(bullets[i])+Number(foods[i])+Number(parts[i])*3;
        break;
      case "human":
        $("#myTable2 > caption > h1").text("인력 중심");
        sums[i] = Number(humans[i])*2+Number(bullets[i])+Number(foods[i])+Number(parts[i])*3;
        break;
      case "bullet":
        $("#myTable2 > caption > h1").text("탄환 중심");
        sums[i] = Number(humans[i])+Number(bullets[i])*2+Number(foods[i])+Number(parts[i])*3;
        break;
      case "food":
        $("#myTable2 > caption > h1").text("식량 중심");
        sums[i] = Number(humans[i])+Number(bullets[i])+Number(foods[i])*2+Number(parts[i])*3;
        break;
      case "part":
        $("#myTable2 > caption > h1").text("부품 중심");
        sums[i] = Number(humans[i])+Number(bullets[i])+Number(foods[i])+Number(parts[i])*6;
        break;
      default :
        alert("function common 잘못된 호출입니다");
        break;
    }

    //평균 저장
    avarages[i] = Math.round(sums[i]*180/WatingTimes[i]);

    //출력
    $("#myTable2 > tbody > tr:nth-child("+(i+1)+") > td:nth-child(10)").text(sums[i]);
    $("#myTable2 > tbody > tr:nth-child("+(i+1)+") > td:nth-child(11)").text(avarages[i]);
  }
}

//보통
function btnNormalFocus() {
  common("normal");
}
//인력 중심
function btnHumanFocus() {
  common("human");
}
//탄환 중심
function btnBulletFocus() {
  common("bullet");
}
//식량 중심
function btnFoodFocus() {
  common("food");
}
//부품 중심
function btnPartFocus() {
  common("part");
}
