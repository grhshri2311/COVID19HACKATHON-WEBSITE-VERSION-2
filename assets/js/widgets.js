var key1=["day1","day2","day3","day4","day5","day6","day7"];
var data1=[100,300,500,800,100,1000,1527];

var online=0;
firebase.database().ref('/online/').once('value').then(function(snapshot) {
 snapshot.forEach(function(childSnapshot) {
   if(childSnapshot.val().a>new Date().getTime()){
     online++;
      window.localStorage.setItem("monline",online);
      document.getElementById("monline").innerHTML=window.localStorage.getItem("monline");
   }
 });

});

var key=[];
var data=[];
var rtotal=0;
firebase.database().ref('/count/').once('value').then(function(snapshot) {
key=[];
data=[];

 snapshot.forEach(function(childSnapshot) {
   var childKey = childSnapshot.key;
   var childData = childSnapshot.val();
   if(rtotal<childData)
   rtotal=childData;
   if(childKey!="total"){
   key.push(childKey);
   if(childData==null || childData==0)
   data.push(1);
   else
   data.push(childData+1);
   widget4();
 }

 });
 window.localStorage.setItem("tregistered",rtotal);
 document.getElementById("rtotal").innerHTML=window.localStorage.getItem("tregistered");
});
document.getElementById("rtotal").innerHTML=window.localStorage.getItem("tregistered");
  var myChart ;
function widget4(){
    //WidgetChart 4

    var ctx = document.getElementById( "widgetChart4" );
    ctx.height = 100;
    if (myChart) {
        myChart.destroy();
      }
     myChart = new Chart( ctx, {
        type: 'bar',
        data: {
            labels: key,
            datasets: [
                {
                    label: "#",
                    data: data,
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    //borderWidth: "0",
                    backgroundColor: "rgba(255,255,255,.3)"
                }
            ]
        },
        options: {
              maintainAspectRatio: true,
              legend: {
                display: false
            },
            scales: {
                xAxes: [{
                  display: false,
                  categoryPercentage: 1,
                  barPercentage: 0.5
                }],
                yAxes: [{
                  display: false,
                      ticks: {
                        autoSkip: true,
                        beginAtZero: true,
                        maxTicksLimit: 5,
                        max: rtotal+2
                      },
                      gridLines: {
                        display: false
                      }
                }]
            }
        }
    } );

}

firebase.database().ref('/visits/').once('value').then(function(snapshot) {
  var date=new Date().toString();
  var todate=date.substr(0,15);
  window.localStorage.setItem("tvisit",snapshot.val().total);
    window.localStorage.setItem("tdvisit",snapshot.val()[todate]);
    document.getElementById("tvisits").innerHTML=window.localStorage.getItem("tvisit");
    document.getElementById("tdvisits").innerHTML=window.localStorage.getItem("tdvisit");
});
document.getElementById("tvisits").innerHTML=window.localStorage.getItem("tvisit");
document.getElementById("tdvisits").innerHTML=window.localStorage.getItem("tdvisit");
document.getElementById("monline").innerHTML=window.localStorage.getItem("monline");

( function ( $ ) {
    "use strict";


    // Counter Number
    $('.count').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 3000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });

    //WidgetChart 1
    var ctx = document.getElementById( "widgetChart1" );
    ctx.height = 150;
    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: key1,
            type: 'line',
            datasets: [ {
                data: data1,
                label: '#',
                backgroundColor: 'transparent',
                borderColor: 'rgba(255,255,255,.55)',
            }, ]
        },
        options: {

            maintainAspectRatio: false,
            legend: {
                display: false
            },
            responsive: true,
            scales: {
                xAxes: [ {
                    gridLines: {
                        color: 'transparent',
                        zeroLineColor: 'transparent'
                    },
                    ticks: {
                        fontSize: 2,
                        fontColor: 'transparent'
                    }
                } ],
                yAxes: [ {
                    display:false,
                    ticks: {
                        display: false,
                    }
                } ]
            },
            title: {
                display: false,
            },
            elements: {
                line: {
                    borderWidth: 1
                },
                point: {
                    radius: 4,
                    hitRadius: 10,
                    hoverRadius: 4
                }
            }
        }
    } );


    //WidgetChart 2
    var ctx = document.getElementById( "widgetChart2" );
    ctx.height = 150;
    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: key1,
            type: 'line',
            datasets: [ {
                data: data1,
                label: '#',
                backgroundColor: '#63c2de',
                borderColor: 'rgba(255,255,255,.55)',
            }, ]
        },
        options: {

            maintainAspectRatio: false,
            legend: {
                display: false
            },
            responsive: true,
            scales: {
                xAxes: [ {
                    gridLines: {
                        color: 'transparent',
                        zeroLineColor: 'transparent'
                    },
                    ticks: {
                        fontSize: 2,
                        fontColor: 'transparent'
                    }
                } ],
                yAxes: [ {
                    display:false,
                    ticks: {
                        display: false,
                    }
                } ]
            },
            title: {
                display: false,
            },
            elements: {
                line: {
                    tension: 0.00001,
                    borderWidth: 1
                },
                point: {
                    radius: 4,
                    hitRadius: 10,
                    hoverRadius: 4
                }
            }
        }
    } );



    //WidgetChart 3
    var ctx = document.getElementById( "widgetChart3" );
    ctx.height = 70;
    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: key1,
            type: 'line',
            datasets: [ {
                data: data1,
                label: '#',
                backgroundColor: 'rgba(255,255,255,.2)',
                borderColor: 'rgba(255,255,255,.55)',
            }, ]
        },
        options: {

            maintainAspectRatio: true,
            legend: {
                display: false
            },
            responsive: true,
            scales: {
                xAxes: [ {
                    gridLines: {
                        color: 'transparent',
                        zeroLineColor: 'transparent'
                    },
                    ticks: {
                        fontSize: 2,
                        fontColor: 'transparent'
                    }
                } ],
                yAxes: [ {
                    display:false,
                    ticks: {
                        display: false,
                    }
                } ]
            },
            title: {
                display: false,
            },
            elements: {
                line: {
                    borderWidth: 2
                },
                point: {
                    radius: 0,
                    hitRadius: 10,
                    hoverRadius: 4
                }
            }
        }
    } );

} )( jQuery );
