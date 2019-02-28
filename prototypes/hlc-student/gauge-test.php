<html>
<head>
<script src="https://cdn.anychart.com/releases/v8/js/anychart-bundle.min.js"></script>
<style>
    html, body, #container {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
    }
    #ac_path_f, #ac_path_g, #ac_path_h, #ac_path_i {
        transform: translate(-10px,-15px);
        -ms-transform: translate(-10px,-15px); /* IE 9 */
        -webkit-transform: translate(-10px,-15px); /* Safari and Chrome */
        -o-transform: translate(-10px,-15px); /* Opera */
        -moz-transform: translate(-10px,-15px); /* Firefox */
          fill: #A4A29E;
    }
    #ac_path_j{
        transform: translate(10px,-10px);

      fill: #A4A29E
    }
    #ac_path_j, #ac_path_k, #ac_path_l, #ac_path_m{
        transform: translate(10px,-10px);

      fill: #A4A29E
    }
</style>

</head>
<body>
<div id="container"></div>

<script>
anychart.onDocumentReady(function () {
    var gauge = anychart.gauges.circular();
    gauge.fill('#fff')
            .stroke(null)
            .padding(0)
            .margin(100)
            .startAngle(270)
            .sweepAngle(180);

    gauge.axis()
            .labels()
            .padding(5)
            .fontSize(14)
            .position('outside')
            .format('{%Value}%');

    gauge.data([73.2]);
    gauge.axis().scale()
            .minimum(0)
            .maximum(100)
            .ticks({interval: 50})
            .minorTicks({interval: 10});

    gauge.axis()
            .fill('#545f69')
            .width(0)
            .ticks({type: 'line', fill: '#69B5E6', length: 5, stroke: '#fff'})
  			.minorTicks()
					.enabled(true)
  					.type("circle")
					.length("3")
  					.position('outside')
  					.fill ('#A4A29E');

    gauge.title('');
    gauge.title()
            .useHtml(true)
            .padding(0)
            .fontColor('#212121')
            .hAlign('center')
            .margin([0, 0, 10, 0]);

    // needle
    gauge.needle(0)
		.enabled(true)
		.startRadius("-5%")
		.endRadius("80%")
		.middleRadius(0)
		.startWidth("0.1%")
		.endWidth("0.1%")
		.middleWidth("9%")
  		.fill("#DA675D")
  		.stroke("#DA675D");

     // cap
    gauge.cap()
		.radius("22%")
		.enabled(true)
  		.fill("#DA675D")
  		.stroke("#DA675D");


    // range
    gauge.range({
      	from: 0,
      	to: 80,
      	fill: "#A5C46D",
      	position: "inside",
      	radius: 100,
      	endSize: "50px",
      	startSize:"50px",
      	zIndex: 10
  	});

    gauge.container('container');
    gauge.draw();
});


</script>

</body>
</html>