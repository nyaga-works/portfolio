'use strict';

//書き方１
function dateCounter() {
  var targetDate = new Date("2020/05/31 16:10:00");

  var timer = setInterval(function() { //1秒ごとに以下のデータを取得（更新）
  var nowDate = new Date();
  var ms = (targetDate - nowDate);

  if (ms >= 0) {
    var day = Math.ceil((targetDate - nowDate)/(1000 * 60 * 60 * 24) - 1); //day
    var h = Math.floor(ms / 3600000); //total hour
    var hour = h % 24; //hour
    var hourData = ('00' + hour).slice(-2);
    var minute = Math.floor((ms - h * 3600000) / 60000); //minute
    var minuteData = ('00' + minute).slice(-2);
    var second = Math.round((ms - h * 3600000 - minute * 60000) / 1000); //second
    var secondData = ('00' + second).slice(-2);
    console.log(day);

    //HTML上に出力
    document.getElementById("countdown").innerHTML = "あと" + day + "日と" +hourData + "時間" + ('00' + minute).slice(-2) + "分" + ('00' + second).slice(-2) + "秒";

    if ((hour == 0) && (minute == 0) && (second == 0)) {
    clearInterval(timer);
    document.getElementById("countdown").innerHTML = "経過しました";
    }
  }else{
    document.getElementById("countdown").innerHTML = "経過しました";
  }
  }, 1000);
}
dateCounter();


//書き方２
let dateCounter02 = () => {
  const targetDate = new Date("2020/05/26 16:10:00");

  let timer = setInterval(() => {
    let nowDate = new Date();
    let dateDiff = (targetDate - nowDate);
  
    if(dateDiff >= 0) {
      let day = Math.ceil((targetDate - nowDate) / (1000 * 60 * 60 * 24) - 1); //day
      let dayData = `<span>あと${day}日</span>`;
      let totalhour = Math.floor(dateDiff / 3600000); //total-hour
      let hour = totalhour % 24;
      let hourData = `<span>${('00' + hour).slice(-2)}:</span>`;
      let minute = Math.floor((dateDiff - hour * 3600000) / 60000); //minute
      let minuteData = `<span>${('00' + minute).slice(-2)}:</span>`;
      let second = Math.round((dateDiff - hour * 3600000 - minute * 60000) / 1000); //second
      let secondData = `<span>${('00' + second).slice(-2)}</span>`;

      //html書き換え
      document.getElementById('countdown02').innerHTML = dayData + hourData + minuteData + secondData;

      if ((hour == 0) && (minute == 0) && (second == 0)) {
        document.getElementById('countdown02').innerHTML = "終了";
      }
    } else {
      document.getElementById('countdown02').innerHTML = "終了";
    }
  }, 1000);
}

dateCounter02();