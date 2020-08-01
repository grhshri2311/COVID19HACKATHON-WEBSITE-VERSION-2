
( function ( $ ) {
    "use strict";


// const brandPrimary = '#20a8d8'
const brandSuccess = '#4dbd74'
const brandInfo = '#63c2de'
const brandDanger = '#f86c6b'

function convertHex (hex, opacity) {
  hex = hex.replace('#', '')
  const r = parseInt(hex.substring(0, 2), 16)
  const g = parseInt(hex.substring(2, 4), 16)
  const b = parseInt(hex.substring(4, 6), 16)

  const result = 'rgba(' + r + ',' + g + ',' + b + ',' + opacity / 100 + ')'
  return result
}

function random (min, max) {
  return Math.floor(Math.random() * (max - min + 1) + min)
}


})( jQuery );

var case_start=-1;
var myChart;
var type="confirmed";

function cases(typ){
  type=typ;
  case_start++;
  var data1 = []
  var data2 = []

var max=0;

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var res = JSON.parse(this.responseText);

      document.getElementById("total_cases").innerHTML=res["statewise"][0]["confirmed"]+"<br>100%";
      document.getElementById("active_cases").innerHTML=res["statewise"][0]["active"]+"<br> "+Math.ceil((res["statewise"][0]["active"]/res["statewise"][0]["confirmed"])*100)+"%";
      document.getElementById("death_cases").innerHTML=res["statewise"][0]["deaths"]+"<br> "+Math.ceil((res["statewise"][0]["deaths"]/res["statewise"][0]["confirmed"])*100)+"%";
      document.getElementById("today_confirmed").innerHTML=res["statewise"][0]["deltaconfirmed"]+"<br> "+Math.ceil((res["statewise"][0]["deltaconfirmed"]/res["statewise"][0]["confirmed"])*100)+"%";;
      document.getElementById("today_death").innerHTML=res["statewise"][0]["deltadeaths"]+"<br> "+Math.ceil((res["statewise"][0]["deltadeaths"]/res["statewise"][0]["confirmed"])*100)+"%";;
      document.getElementById("active_cases_percent").style.width=Math.ceil((res["statewise"][0]["active"]/res["statewise"][0]["confirmed"])*100)+"%";
      document.getElementById("death_cases_percent").style.width=Math.ceil((res["statewise"][0]["deaths"]/res["statewise"][0]["confirmed"])*800)+"%";

      var i=0;
      for(i=case_start%res["statewise"].length;i<(case_start+5)%res["statewise"].length;i=(i+1)%res["statewise"].length)
      {
        if(i==36){
          case_start=-1;
          cases(type);
          break;
        }
        if(res["statewise"][i][type]){
        if(res["statewise"][i]["state"]=="Dadra and Nagar Haveli and Daman and Diu")
        data1.push("Daman and Diu");
        else
        data1.push(res["statewise"][i]["state"]);
        data2.push(res["statewise"][i][type]);
        if(max<res["statewise"][i][type])
          max=parseInt(res["statewise"][i][type]);
      }
      }

  //Traffic Chart
  var ctx = document.getElementById( "trafficChart" );
  //ctx.height = 200;
  if (myChart) {
      myChart.destroy();
    }
  myChart = new Chart( ctx, {
    animationEnabled: true,
      type: 'bar',
      data: {
        labels: data1,
        datasets: [
          { label: '# '+type,
            data: data2,
            backgroundColor :['rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
    ],

    borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
    borderWidth : 1
          }
        ]
      },

      options: {
        //   maintainAspectRatio: true,
        //   legend: {
        //     display: false
        // },
        // scales: {
        //     xAxes: [{
        //       display: false,
        //       categoryPercentage: 1,
        //       barPercentage: 0.5
        //     }],
        //     yAxes: [ {
        //         display: false
        //     } ]
        // }


        maintainAspectRatio: true,
        legend: {
            display: true
        },
        responsive: true,
        scales: {
            xAxes: [{
              ticks: {
                autoSkip: false,
              },
              gridLines: {
                drawOnChartArea: false,
              }
            }],
            yAxes: [ {
                  ticks: {
                    autoSkip: true,
                    beginAtZero: false,
                    maxTicksLimit: 5,
                    stepSize: Math.ceil(parseInt(max) / 7),
                    max: parseInt(max)
                  },
                  gridLines: {
                    display: true
                  }
            } ]
        },
        elements: {
            point: {
              radius: 0,
              hitRadius: 10,
              hoverRadius: 4,
              hoverBorderWidth: 3
          }
      }


        }
  } );

}
};
xhttp.open("GET", "https://api.covid19india.org/data.json", false);
xhttp.send();
}
   var date=new Date().toString();
 document.getElementById("casesreport").innerHTML=date.substr(0,15);
 document.getElementById("casesreport1").innerHTML=date.substr(0,15);
cases(type);
function go6() {
cases(type);
  var time=5000;
    setTimeout(go6, time); // callback
}

go6();
cases1();
var myChart1;
function cases1(stat="ap",typ="Confirmed"){
 var state=stat;
 var type=typ;
  var data11 = []
  var data21 = []


  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var res = JSON.parse(this.responseText)["states_daily"];

      var max=0;

      var i=0;
      for(i=0;i<res.length;i++)
{

        if(res[i]["status"]==type){
          data11.push(res[i]["date"]);
          data21.push(res[i][state]);
          if(parseInt(max)<res[i][state])
          max=parseInt(res[i][state])+(parseInt(res[i][state])/100)*10;
        }


      }

if(max==parseInt(0))
max=parseInt(10);
  //Traffic Chart
  var ctx = document.getElementById( "trafficChart1" );
  //ctx.height = 200;
  if (myChart1) {
      myChart1.destroy();
    }
  myChart1 = new Chart( ctx, {
    animationEnabled: true,
      type: 'line',
      data: {
        labels: data11,
        datasets: [
          { label: '# '+type+" ( "+state.toUpperCase()+" ) ",
            data: data21,
            backgroundColor :['rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
    ],

    borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
    borderWidth : 1
          }
        ]
      },

      options: {
        //   maintainAspectRatio: true,
        //   legend: {
        //     display: false
        // },
        // scales: {
        //     xAxes: [{
        //       display: false,
        //       categoryPercentage: 1,
        //       barPercentage: 0.5
        //     }],
        //     yAxes: [ {
        //         display: false
        //     } ]
        // }


        maintainAspectRatio: true,
        legend: {
            display: true
        },
        responsive: true,
        scales: {
            xAxes: [{
              ticks: {
                autoSkip: true,
              },
              gridLines: {
                drawOnChartArea: false,
              }
            }],
            yAxes: [ {
                  ticks: {
                    autoSkip: true,
                    beginAtZero: false,
                    maxTicksLimit: 5,
                    stepSize: Math.ceil(parseInt(max) / 10),
                    max: parseInt(max)
                  },
                  gridLines: {
                    display: false
                  }
            } ]
        },
        elements: {
            point: {
              radius: 0,
              hitRadius: 10,
              hoverRadius: 4,
              hoverBorderWidth: 3
          }
      }


        }
  } );

}
};
xhttp.open("GET", "https://api.covid19india.org/states_daily.json", false);
xhttp.send();
}
