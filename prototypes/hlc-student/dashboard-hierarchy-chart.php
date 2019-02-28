<!DOCTYPE html>
<html>
<meta charset="utf-8" />
<style>

html
{
    font-family: Century Gothic, Arial, Helvetica;
    font-size:1em;
}

body
{
    padding:10px;
}

form
{

}

#code_hierarchy
{
    position:relative;
    width:600px;
    margin:0 auto;
}

#code_hierarchy_legend
{
    height:100px;
    font-size:1.4em;
    text-align:center;
}
</style>
<head>
<script src="http://d3js.org/d3.v3.js"></script>
<script lang="text/javascript">

function init_code_hierarchy_plot(element_id,data,count_function,color_function,title_function,legend_function)
{
    var plot = document.getElementById(element_id);

    while (plot.hasChildNodes())
    {
        plot.removeChild(plot.firstChild);
    }

    var width = plot.offsetWidth;
    var height = width;
    var x_margin = 40;
    var y_margin = 40;
    
    var max_depth=3;
    
    var data_slices = [];
    var max_level = 4;

    var svg = d3.select("#"+element_id).append("svg")
        .attr("width", width)
        .attr("height", height)
        .append("g")
        .attr("transform", "translate(" + width / 2 + "," + height * .52 + ")");
          
    function process_data(data,level,start_deg,stop_deg)
    {
        var name = data[0];
        var total = count_function(data);
        var children = data[2];
        var current_deg = start_deg;
        if (level > max_level)
        {
            return;
        }
        if (start_deg == stop_deg)
        {
            return;
        }
        data_slices.push([start_deg,stop_deg,name,level,data[1]]);
        for (var key in children)
        {
            child = children[key];
            var inc_deg = (stop_deg-start_deg)/total*count_function(child);
            var child_start_deg = current_deg;
            current_deg+=inc_deg;
            var child_stop_deg = current_deg;
            var span_deg = child_stop_deg-child_start_deg;
            process_data(child,level+1,child_start_deg,child_stop_deg);
        }
    }
    
    process_data(data,0,0,360./180.0*Math.PI);

    var ref = data_slices[0];
    var next_ref = ref;
    var last_refs = [];

    var thickness = width/2.0/(max_level+2)*1.1;
        
    var arc = d3.svg.arc()
    .startAngle(function(d) { if(d[3]==0){return d[0];}return d[0]+0.01; })
    .endAngle(function(d) { if(d[3]==0){return d[1];}return d[1]-0.01; })
    .innerRadius(function(d) { return 1.1*d[3]*thickness; })
    .outerRadius(function(d) { return (1.1*d[3]+1)*thickness; });    

    var slices = svg.selectAll(".form")
        .data(function(d) { return data_slices; })
        .enter()
        .append("g");
        slices.append("path")
        .attr("d", arc)
        .attr("id",function(d,i){return element_id+i;})
        .style("fill", function(d) { return color_function(d);})
        .attr("class","form");
    slices.on("click",animate);

    if (title_function != undefined)
    {
        slices.append("svg:title")
              .text(title_function);        
    }
    if (legend_function != undefined)
    {
        slices.on("mouseover",update_legend)
              .on("mouseout",remove_legend);
        var legend = d3.select("#"+element_id+"_legend")
            
        function update_legend(d)
        {
            legend.html(legend_function(d));
            legend.transition().duration(200).style("opacity","1");
        }
        
        function remove_legend(d)
        {
            legend.transition().duration(1000).style("opacity","0");
        }
    }
    function get_start_angle(d,ref)
    {
        if (ref)
        {
            var ref_span = ref[1]-ref[0];
            return (d[0]-ref[0])/ref_span*Math.PI*2.0
        }
        else
        {
            return d[0];
        }
    }
    
    function get_stop_angle(d,ref)
    {
        if (ref)
        {
            var ref_span = ref[1]-ref[0];
            return (d[1]-ref[0])/ref_span*Math.PI*2.0
        }
        else
        {
            return d[0];
        }
    }
    
    function get_level(d,ref)
    {
        if (ref)
        {
            return d[3]-ref[3];
        }
        else
        {
            return d[3];
        }
    }
    
    function rebaseTween(new_ref)
    {
        return function(d)
        {
            var level = d3.interpolate(get_level(d,ref),get_level(d,new_ref));
            var start_deg = d3.interpolate(get_start_angle(d,ref),get_start_angle(d,new_ref));
            var stop_deg = d3.interpolate(get_stop_angle(d,ref),get_stop_angle(d,new_ref));
            var opacity = d3.interpolate(100,0);
            return function(t)
            {
                return arc([start_deg(t),stop_deg(t),d[2],level(t)]);
            }
        }
    }
    
    var animating = false;
    
    function animate(d) {
        if (animating)
        {
            return;
        }
        animating = true;
        var revert = false;
        var new_ref;
        if (d == ref && last_refs.length > 0)
        {
            revert = true;
            last_ref = last_refs.pop();
        }
        if (revert)
        {
            d = last_ref;
            new_ref = ref;
            svg.selectAll(".form")
            .filter(
                function (b)
                {
                    if (b[0] >= last_ref[0] && b[1] <= last_ref[1]  && b[3] >= last_ref[3])
                    {
                        return true;
                    }
                    return false;
                }
            )
            .transition().duration(1000).style("opacity","1").attr("pointer-events","all");
        }
        else
        {
            new_ref = d;
            svg.selectAll(".form")
            .filter(
                function (b)
                {
                    if (b[0] < d[0] || b[1] > d[1] || b[3] < d[3])
                    {
                        return true;
                    }
                    return false;
                }
            )
            .transition().duration(1000).style("opacity","0").attr("pointer-events","none");
        }
        svg.selectAll(".form")
        .filter(
            function (b)
            {
                if (b[0] >= new_ref[0] && b[1] <= new_ref[1] && b[3] >= new_ref[3])
                {
                    return true;
                }
                return false;
            }
        )
        .transition().duration(1000).attrTween("d",rebaseTween(d));
        setTimeout(function(){
            animating = false;
            if (! revert)
            {
                last_refs.push(ref);
                ref = d;
            }
            else
            {
                ref = d;
            }
            },1000);
    };    

}

function init_plots()
{
    
    function count_function(d)
    {
        return d[1][0];
    }
    
    function label_function(d)
    {
        return d[2]+": "+d[4][0]+" Available seats, "+d[4][1]+" Registrations, "+d[4][2]+" Instructors";
    }
    
    function legend_function(d)
    {
        return "<h2>"+d[2]+"&nbsp;</h2><p>"+d[4][0]+" Available seats<br> "+d[4][1]+" Registrations<br> "+d[4][2]+" Instructors</p>";
    }
    
    var color = d3.scale.category20c();

    function color_function(d)
    {
        return color(d[2]);
    }
    d3.select(self.frameElement).style("height", "800px");
    init_code_hierarchy_plot("code_hierarchy",code_hierarchy_data,count_function,color_function,label_function,legend_function);
}

window.onload = init_plots;
window.onresize = init_plots;


</script>
<!-- <script type="text/javascript" src="data.js"></script> -->
</head>
<body>
    <div id="code_hierarchy_legend">&nbsp;</div>
    <div id="code_hierarchy">&nbsp;</div>
    <script>
    code_hierarchy_data = [
        "", 
        [
            487, //available seats
            347, //registrations 
            25 //instructors
        ], 
        {
            "site-a": [
                "General Hospital - Main Campus", 
                [
                    61, 
                    41,
                    4
                ], 
                {
                    "class-a": [
                        "SimManager Essentials Boot Camp - Live Training", 
                        [
                            20, 
                            5,
                            2
                        ], 
                        {}
                    ], 
                    "class-b": [
                        "SimManager Review for Ops Management and Customer Support", 
                        [
                            25, 
                            20,
                            1
                        ], 
                        {}
                    ], 
                    "class-c": [
                        "Simulation Training - Internal Only", 
                        [
                            16, 
                            16,
                            1
                        ], 
                        {}
                    ]
                }
            ], 
            "site-b": [
                "General Hospital - Southside Campus", 
                [
                    310, 
                    198,
                    14

                ], 
                {
                    "class-d": [
                      "SimManager Essentials Boot Camp - Webinar Training", 
                      [
                          25, 
                          12,
                          1
                      ], 
                      {}
                  ], 
                  "class-e": [
                      "HeartCode® ACLS", 
                      [
                          60, 
                          55,
                          3
                      ], 
                      {}
                  ], 
                  "class-f": [
                      "SimManager 101 with HLC Refresher", 
                      [
                          30, 
                          29,
                          1
                      ], 
                      {}
                  ],
                  "class-g": [
                      "HLC Refresher for Sim Sales", 
                      [
                          45, 
                          15,
                          4
                      ], 
                      {}
                  ],
                  "class-h": [
                      "SimManager Essentials Boot Camp - Webinar Training", 
                      [
                          50, 
                          50,
                          2
                      ], 
                      {}
                  ],
                  "class-i": [
                      "SimManager Update via Webex", 
                      [
                          25, 
                          17,
                          1
                      ], 
                      {}
                  ],
                  "class-j": [
                      "SimManager Review for Ops Management and Customer Support", 
                      [
                          75, 
                          2,
                          1
                      ], 
                      {}
                  ],
                  "class-k": [
                      "SimManager Essentials Boot Camp - Live Training", 
                      [
                          20, 
                          18,
                          1
                      ], 
                      {}
                  ]
              }
            ], 
            "site-c": [
                "General Hospital - Northside Campus", 
                [
                    116, 
                    95,
                    7
                ], 
                 {
                    "class-l": [
                      "Alarm Management - AARC", 
                      [
                          25, 
                          22,
                          1
                      ], 
                      {}
                  ], 
                  "class-m": [
                      "Pressure Ulcer Prevention", 
                      [
                          15, 
                          15,
                          1
                      ], 
                      {}
                  ], 
                  "class-n": [
                      "SimManager Update via Webex", 
                      [
                          21, 
                          15,
                          2
                      ], 
                      {}
                  ],
                  "class-o": [
                      "RELATE(SM) for Clinical Staff", 
                      [
                          30, 
                          22,
                          1
                      ], 
                      {}
                  ],
                  "class-p": [
                      "RELATE(SM) for Physicians", 
                      [
                          15, 
                          11,
                          1
                      ], 
                      {}
                  ],
                  "class-q": [
                      "SimManager Essentials Boot Camp - Webinar Training", 
                      [
                          10, 
                          10,
                          1
                      ], 
                      {}
                  ]
              }
            ] 
            // "site-d": [
            //     "Site D", 
            //     [
            //         87, 
            //         55,
            //         5
            //     ], 
            //      {
            //         "class-r": [
            //           "Class R", 
            //           [
            //               20, 
            //               19,
            //               1
            //           ], 
            //           {}
            //       ], 
            //       "class-s": [
            //           "Class S", 
            //           [
            //               25, 
            //               25,
            //               1
            //           ], 
            //           {}
            //       ], 
            //       "class-t": [
            //           "Class T", 
            //           [
            //               7, 
            //               6,
            //               1
            //           ], 
            //           {}
            //       ],
            //       "class-u": [
            //           "Class U", 
            //           [
            //               35, 
            //               5,
            //               2
            //           ], 
            //           {}
            //       ]
            //   }
            // ] 
           
        }
    ];

    </script>
</body>
</html>