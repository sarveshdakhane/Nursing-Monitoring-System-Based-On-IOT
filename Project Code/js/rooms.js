class js
{
	
	      tankjs(rid)
				{
					if(rid==1)
					{
						$.get("get.php",function (data){
							
							var amount=data.dist1,
							height=12+parseInt((amount)/18*100);
							var colour="#93A3F4";
							$('.lq').css({height :height+ '%'});
							$('.tk').css({background: colour });
						   }, "json" );
					}
					 else if(rid==3)
					{
						$.get("get.php",function (data){
							
							var amount=data.dist2,
							height=12+parseInt((amount)/18*100);
							var colour="#93A3F4";
							$('.lq').css({height :height+ '%'});
							$('.tk').css({background: colour });
						   }, "json" );
					}
					else
					{

					}
					
				}
				


}

function call(rid)
{
//alert(rid);
var dataPoints1 = [];
var updateInterval =50;
var yValue1=600; 
var time = new Date;
//var str = "[40.4]";
//alert(str.replace(/[^a-zA-Z0-9-.]/g, ''));
let obj = new js();
obj.tankjs(rid);


if(rid==1)
{
var chart = new CanvasJS.Chart("chartContainer", {
	
	animationEnabled: true,
	axisX: {
		title: "Time"
	},
	axisY: {
		title: "Bits",
	},
	data: [{
		type: "spline",
		name: "HardBeat",
		markerSize: 0,
		connectNullData: true,
		xValueType: "dateTime",
		xValueFormatString: "DD MMM hh:mm TT",
		yValueFormatString: "##",
		dataPoints:dataPoints1
			
	}]
});


chart.render();
setInterval(function(){updateChart()}, updateInterval);
}


function updateChart() 
{


 	
$.get("get.php",function (data){ 
 time.setTime(time.getTime()+ updateInterval);
  yValue1=data.bits;
// pushing the new values
	dataPoints1.push({
		x: time.getTime(),
		y: parseInt(yValue1)
	});


	chart.render();

}, "json" ); 



obj.tankjs(rid);
}

updateChart();	
setInterval(function(){updateChart()}, updateInterval);

    	
}

