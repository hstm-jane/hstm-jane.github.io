<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Page Needs
            ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>View Chart - Manager Dashboard | HealthStream</title>
    <!-- Styles
            ================================================== -->

    <!-- <link href="content/styles/healthstream.goals.stiffchart.css" rel="stylesheet" media="screen" /> -->
    <!-- IE 7/8 Handling
            ================================================== -->

    <!-- Feature Detection Using Modernizr
            ================================================== -->

    <style>
    .node {
      cursor: pointer;
    }

    .node circle {
      fill: #fff;
      stroke: steelblue;
      stroke-width: 1.5px;
    }

    .node text {
      font: 10px sans-serif;
    }

    .link {
      fill: none;
      stroke: #ccc;
      stroke-width: 1.5px;
    }

    </style>
</head>

<body class="">


     <!--    <script src="/scripts/jquery.js"></script>
        <script src="/scripts/bootstrap.plugins.js"></script>
        <script src="/scripts/bootstrap-datepicker.js"></script>
        <script src="/scripts/bootstrap-timepicker.js"></script>
        <script src="/scripts/charts.js"></script>
        <script src="/scripts/gritter.js"></script>
        <script src="/scripts/select2.js"></script>
        <script src="/scripts/slick.js"></script>
        <script src="/scripts/tinysort.js"></script>
        <script src="/scripts/healthstream.js"></script>
        <script src="/scripts/healthstream.jquery.js"></script>
        <script src="/scripts/healthstream.utilities.equalize.js"></script>
        <script src="/scripts/healthstream.utilities.limitHeight.js"></script>
        <script src="/scripts/healthstream.utilities.toggleText.js"></script>
        <script src="/scripts/healthstream.utilities.growl.js"></script>
        <script src="/scripts/healthstream.utilities.interrupt.js"></script>
        <script src="/scripts/healthstream.focusbar.js"></script>
        <script src="/scripts/healthstream.stickybar.js"></script>
        <script src="/scripts/healthstream.filtermini.js"></script>
        <script src="/scripts/healthstream.checklist.js"></script>
        <script src="/scripts/healthstream.checkable.js"></script>
        <script src="/scripts/prototype.validation/formValidation.min.js"></script>
        <script src="/scripts/prototype.validation/framework/bootstrap.min.js"></script> -->
        
        
        <!-- <script src="/scripts/portlet.js"></script> -->
        <!-- <script src="/scripts/stiffchart.js"></script> -->
       <script src="//d3js.org/d3.v3.min.js"></script>
        <!-- <script src="/scripts/prototype.dashboard-manager.js"></script> -->
       <script>

       var margin = {top: 20, right: 120, bottom: 20, left: 120},
           width = 960 - margin.right - margin.left,
           height = 800 - margin.top - margin.bottom;

       var i = 0,
           duration = 750,
           root;

       var tree = d3.layout.tree()
           .size([height, width]);

       var diagonal = d3.svg.diagonal()
           .projection(function(d) { return [d.y, d.x]; });

       var svg = d3.select("body").append("svg")
           .attr("width", width + margin.right + margin.left)
           .attr("height", height + margin.top + margin.bottom)
         .append("g")
           .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

       d3.json("flare.json", function(error, flare) {
         if (error) throw error;

         root = flare;
         root.x0 = height / 2;
         root.y0 = 0;

         function collapse(d) {
           if (d.children) {
             d._children = d.children;
             d._children.forEach(collapse);
             d.children = null;
           }
         }

         root.children.forEach(collapse);
         update(root);
       });

       d3.select(self.frameElement).style("height", "800px");

       function update(source) {

         // Compute the new tree layout.
         var nodes = tree.nodes(root).reverse(),
             links = tree.links(nodes);

         // Normalize for fixed-depth.
         nodes.forEach(function(d) { d.y = d.depth * 180; });

         // Update the nodes…
         var node = svg.selectAll("g.node")
             .data(nodes, function(d) { return d.id || (d.id = ++i); });

         // Enter any new nodes at the parent's previous position.
         var nodeEnter = node.enter().append("g")
             .attr("class", "node")
             .attr("transform", function(d) { return "translate(" + source.y0 + "," + source.x0 + ")"; })
             .on("click", click);

         nodeEnter.append("circle")
             .attr("r", 1e-6)
             .style("fill", function(d) { return d._children ? "lightsteelblue" : "#fff"; });

         nodeEnter.append("text")
             .attr("x", function(d) { return d.children || d._children ? -10 : 10; })
             .attr("dy", ".35em")
             .attr("text-anchor", function(d) { return d.children || d._children ? "end" : "start"; })
             .text(function(d) { return d.name; })
             .style("fill-opacity", 1e-6);

         // Transition nodes to their new position.
         var nodeUpdate = node.transition()
             .duration(duration)
             .attr("transform", function(d) { return "translate(" + d.y + "," + d.x + ")"; });

         nodeUpdate.select("circle")
             .attr("r", 4.5)
             .style("fill", function(d) { return d._children ? "lightsteelblue" : "#fff"; });

         nodeUpdate.select("text")
             .style("fill-opacity", 1);

         // Transition exiting nodes to the parent's new position.
         var nodeExit = node.exit().transition()
             .duration(duration)
             .attr("transform", function(d) { return "translate(" + source.y + "," + source.x + ")"; })
             .remove();

         nodeExit.select("circle")
             .attr("r", 1e-6);

         nodeExit.select("text")
             .style("fill-opacity", 1e-6);

         // Update the links…
         var link = svg.selectAll("path.link")
             .data(links, function(d) { return d.target.id; });

         // Enter any new links at the parent's previous position.
         link.enter().insert("path", "g")
             .attr("class", "link")
             .attr("d", function(d) {
               var o = {x: source.x0, y: source.y0};
               return diagonal({source: o, target: o});
             });

         // Transition links to their new position.
         link.transition()
             .duration(duration)
             .attr("d", diagonal);

         // Transition exiting nodes to the parent's new position.
         link.exit().transition()
             .duration(duration)
             .attr("d", function(d) {
               var o = {x: source.x, y: source.y};
               return diagonal({source: o, target: o});
             })
             .remove();

         // Stash the old positions for transition.
         nodes.forEach(function(d) {
           d.x0 = d.x;
           d.y0 = d.y;
         });
       }

       // Toggle children on click.
       function click(d) {
         if (d.children) {
           d._children = d.children;
           d.children = null;
         } else {
           d.children = d._children;
           d._children = null;
         }
         update(d);
       }

       </script>

</body>

</html>