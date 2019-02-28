
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Page Needs
            ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>View Chart - Manager Dashboard | HealthStream</title>

    <link type="text/css" rel="stylesheet" href="getorgchart/getorgchart.css">
    <script src="/scripts/modernizr.js"></script>
    <style>
        html,
        body {
            margin: 0px;
            padding: 0px;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        #people {
            width: 100%;
            height: 100%;
        }

        .get-text {
            fill: #686868 !important;
        }

        .myCustomTheme-box {
            fill: #FFFFFF;
            stroke: #DDDAB9;
        }

        .reporters {
            fill: #0072C6;
        }

        .reporters-text {
            fill: #ffffff;
        }
        .text-pastdue {
            fill: #fc7b00 !important;
            font-weight:600;
        }
        .chart-container {
            /*height:95%;*/
        }

        #people {
            /*width:75% !important;*/
        }
        </style>
</head>

<body class="">

    <!-- /site-header -->
<div id="people"></div>

                    <input id="insertNodes" type="button" value="insert nodes" />


           <!-- PROTOTYPE ONLY -->


           <script src="getorgchart/getorgchart.js"></script>
           <script>
           getOrgChart.themes.myCustomTheme = {
               size: [350, 188],
               toolbarHeight: 46,
               textPoints: [
                   { x: 100, y: 50, width: 250 },
                   { x: 110, y: 80, width: 240 }
               ],
               textPointsNoImage: [
                   { x: 10, y: 50, width: 350 },
                   { x: 10, y: 90, width: 350 }
               ],
               expandCollapseBtnRadius: 20,
               defs: '<filter id="f1" x="0" y="0" width="200%" height="200%"><feOffset result="offOut" in="SourceAlpha" dx="5" dy="5" />' +
                     '<feGaussianBlur result="blurOut" in="offOut" stdDeviation="5" />' +
                     '<feBlend in="SourceGraphic" in2="blurOut" mode="normal" /></filter>',
               box: '<rect x="0" y="0" height="188" width="350" rx="10" ry="10" class="myCustomTheme-box" filter="url(#f1)"  />',
               text: '<text text-anchor="start" width="[width]" class="get-text get-text-[index]" x="[x]" y="[y]">[text]</text>',
               tasks:'<text text-anchor="start" width="[width]" class="get-text get-text-[index]" x="110" y="110">[tasks] Tasks</text>',
               pastdue:'<text text-anchor="start" width="[width]" class="text-pastdue get-text get-text-[index]" x="110" y="135">[pastdue]</text>',
               image:'<clipPath id="personClipPath"><circle cx="50" cy="50" r="40" /></clipPath>' +
                     '<image clip-path="url(#personClipPath)" xlink:href="[href]" x="10" y="10" height="80" width="80"/>',
               reporters: '<circle cx="80" cy="80" r="20" class="reporters"></circle><text class="reporters-text" text-anchor="middle" width="100" x="80" y="85">[reporters]</text>'

               //ddddd: '<text x="0" y="0">1</text>'
           };
              var data = [
                               { id: 1, parentId: null, name: "Darcy Crane", title: "Clinical Nurse Supervisorsadfsdfdsa", tasks: "17", pastdue: "3", image: "https://s3.amazonaws.com/uifaces/faces/twitter/allisongrayce/128.jpg" },
                               { id: 2, parentId: 1, name: "Brad Bruno", title: "Nurse Manager - Acute Care", tasks: "3",  image: "/content/images/prototype-actors/bbrune.jpg" },
                               { id: 3, parentId: 1, name: "Michele Brown", title: "Nurse Manager - Acute Care", tasks: "3", image: "/content/images/prototype-actors/19.jpg" },
                               { id: 4, parentId: 1, name: "Nicholas Frazier", title: "Quality Coordinator (RN)", tasks: "0", compliance: 2,  image: "/content/images/prototype-actors/72.jpg" },
                               { id: 5, parentId: 2, name: "Chris Horton", title: "Diabetes Educator", tasks: "1", pastdue:"1", image: "/content/images/prototype-actors/83.jpg" },
                               { id: 6, parentId: 1, name: "Ella Lane", title: "Case Manager (RN)", tasks: "2",  image: "/content/images/prototype-actors/76.jpg" },
                               { id: 7, parentId: 1, name: "Andrea Martinez", title: "LPN - I.V. Certified", tasks: "9", pastdue: "2", image: "/content/images/prototype-actors/78.jpg" },
                               { id: 8, parentId: 1, name: "Tanya Rivera", title: "Nurse - Staff (RN) - Acute Care", tasks: "8",  image: "/content/images/prototype-actors/8.jpg" },
                               { id: 9, parentId: 1, name: "Elmer Romero", title: "Nurse - Staff (RN) - Telephone", tasks: "5", pastdue: "1", image: "/content/images/prototype-actors/98.jpg" },
                               { id: 10, parentId: 3, name: "Jon Sims", title: "Medical Assistant", tasks: "5", pastdue: "1", image: "/content/images/prototype-actors/63.jpg" ,secondParenId: 1},
                               { id: 11, parentId: 3, name: "Amber McKenzie", title: "Nurse - Staff (RN)", tasks: "4", image: "/content/images/prototype-actors/8.jpg" },
                               { id: 12, parentId: 3, name: "Ava Field", title: "Nurse - Staff (RN)", tasks: "3",image: "/content/images/prototype-actors/alewis.jpg" , secondParenId: 6},
                               { id: 13, parentId: 3, name: "Evie Johnson", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/brynn.jpg" },
                               { id: 14, parentId: 3, name: "Paul Shetler", title: "Nurse - Staff (RN)", tasks: "3",image: "/content/images/prototype-actors/himanshuchanda.jpg"},
                               { id: 15, parentId: 3, name: "Rebecca Francis", title: "Nurse - Staff (RN)", tasks: "3",image: "/content/images/prototype-actors/himanshuchanda.jpg" },
                               { id: 16, parentId: 3, name: "Jon Sims", title: "Medical Assistant", tasks: "5", pastdue: "1", image: "/content/images/prototype-actors/63.jpg" ,secondParenId: 1},
                               { id: 17, parentId: 3, name: "Amber McKenzie", title: "Nurse - Staff (RN)", tasks: "4", image: "/content/images/prototype-actors/8.jpg" },
                               { id: 18, parentId: 3, name: "Ava Field", title: "Nurse - Staff (RN)", tasks: "3",image: "/content/images/prototype-actors/alewis.jpg" , secondParenId: 6},
                               { id: 19, parentId: 3, name: "Evie Johnson", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/brynn.jpg" },
                               { id: 20, parentId: 3, name: "Paul Shetler", title: "Nurse - Staff (RN)", tasks: "3",image: "/content/images/prototype-actors/himanshuchanda.jpg"},
                               { id: 21, parentId: 3, name: "Rebecca Francis", title: "Nurse - Staff (RN)", tasks: "3",image: "/content/images/prototype-actors/himanshuchanda.jpg" },
                               { id: 22, parentId: 3, name: "Jon Sims", title: "Medical Assistant", tasks: "5", pastdue: "1", image: "/content/images/prototype-actors/63.jpg" ,secondParenId: 1},
                               { id: 23, parentId: 3, name: "Amber McKenzie", title: "Nurse - Staff (RN)", tasks: "4", image: "/content/images/prototype-actors/8.jpg" },
                               { id: 24, parentId: 3, name: "Ava Field", title: "Nurse - Staff (RN)", tasks: "3",image: "/content/images/prototype-actors/alewis.jpg" , secondParenId: 6},
                               { id: 25, parentId: 3, name: "Evie Johnson", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/brynn.jpg" },
                               { id: 26, parentId: 3, name: "Paul Shetler", title: "Nurse - Staff (RN)", tasks: "3",image: "/content/images/prototype-actors/himanshuchanda.jpg"},
                               { id: 27, parentId: 3, name: "Rebecca Francis", title: "Nurse - Staff (RN)", tasks: "3",image: "/content/images/prototype-actors/himanshuchanda.jpg" },
                               { id: 28, parentId: 4, name: "Jon Sims", title: "Medical Assistant", tasks: "5", pastdue: "1", image: "/content/images/prototype-actors/63.jpg" ,secondParenId: 1},
                               { id: 29, parentId: 4, name: "Amber McKenzie", title: "Nurse - Staff (RN)", tasks: "4", image: "/content/images/prototype-actors/8.jpg" },
                               { id: 30, parentId: 4, name: "Ava Field", title: "Nurse - Staff (RN)", tasks: "3",image: "/content/images/prototype-actors/alewis.jpg" , secondParenId: 6},
                               { id: 31, parentId: 4, name: "Evie Johnson", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/brynn.jpg" },
                               { id: 32, parentId: 4, name: "Paul Shetler", title: "Nurse - Staff (RN)", tasks: "3",image: "/content/images/prototype-actors/himanshuchanda.jpg"},
                               { id: 33, parentId: 4, name: "Rebecca Francis", title: "Nurse - Staff (RN)", tasks: "3",image: "/content/images/prototype-actors/himanshuchanda.jpg" },
                               { id: 34, parentId: 4, name: "Jon Sims", title: "Medical Assistant", tasks: "5", pastdue: "1", image: "/content/images/prototype-actors/63.jpg" ,secondParenId: 1},
                               { id: 35, parentId: 4, name: "Amber McKenzie", title: "Nurse - Staff (RN)", tasks: "4", image: "/content/images/prototype-actors/8.jpg" },
                               { id: 36, parentId: 4, name: "Ava Field", title: "Nurse - Staff (RN)", tasks: "3",image: "/content/images/prototype-actors/alewis.jpg" , secondParenId: 6},
                               { id: 37, parentId: 4, name: "Evie Johnson", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/brynn.jpg" },
                               { id: 38, parentId: 4, name: "Paul Shetler", title: "Nurse - Staff (RN)", tasks: "3",image: "/content/images/prototype-actors/himanshuchanda.jpg"},
                               { id: 39, parentId: 4, name: "Rebecca Francis", title: "Nurse - Staff (RN)", tasks: "3",image: "/content/images/prototype-actors/himanshuchanda.jpg" },
                               { id: 40, parentId: 4, name: "Jon Sims", title: "Medical Assistant", tasks: "5", pastdue: "1", image: "/content/images/prototype-actors/63.jpg" ,secondParenId: 1},
                               { id: 41, parentId: 4, name: "Amber McKenzie", title: "Nurse - Staff (RN)", tasks: "4", image: "/content/images/prototype-actors/8.jpg" },
                               { id: 42, parentId: 4, name: "Ava Field", title: "Nurse - Staff (RN)", tasks: "3",image: "/content/images/prototype-actors/alewis.jpg" , secondParenId: 6},
                               { id: 43, parentId: 4, name: "Evie Johnson", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/brynn.jpg" },
                               { id: 44, parentId: 4, name: "Paul Shetler", title: "Nurse - Staff (RN)", tasks: "3",image: "/content/images/prototype-actors/himanshuchanda.jpg"},
                               { id: 45, parentId: 4, name: "Rebecca Francis", title: "Nurse - Staff (RN)", tasks: "3",image: "/content/images/prototype-actors/himanshuchanda.jpg" },
                               { id: 46, parentId: 8, name: "Rebecca Randall", title: "Nurse - Staff (RN)",tasks: "3", image: "/content/images/prototype-actors/ladylexy.jpg" },
                               { id: 47, parentId: 8, name: "Spencer May", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/ladylexy.jpg" },
                               { id: 48, parentId: 9, name: "Max Ford", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/mtnmissy.jpg" },
                               { id: 49, parentId: 1, name: "Riley Bray", title: "Nurse - Staff (RN)", tasks: "3",image: "/content/images/prototype-actors/rhein_wein.jpg" },
                               { id: 50, parentId: 1, name: "Callum Whitehouse", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/uxceo.jpg" }
                                 ];


               var peopleElement = document.getElementById("people");
               var orgChart = new getOrgChart(peopleElement, {
                   theme: "myCustomTheme",
                   enableGridView: true,
                   primaryFields: ["name", "title", "tasks", "pastdue"],
                   photoFields: ["image"],
                   enableEdit: false,
                   enableGridView: true,
                   enablePrint: true,
                   linkType: 'B',
                   scale: 0.5,
                   enableExportToImage: true,
                   levelSeparation: 100,
                   renderNodeEvent: renderNodHandler,
                   secondParentIdField: "secondParenId",

                   dataSource: data
               });
              document.getElementById("insertNodes").addEventListener("click", function(){

                var data = [
                  { id: 1, parentId: null, name: "Darcy Crane", title: "Clinical Nurse Supervisorsadfsdfdsa", tasks: "17", pastdue: "3", image: "https://s3.amazonaws.com/uifaces/faces/twitter/allisongrayce/128.jpg" },
                  { id: 2, parentId: 1, name: "Brad Bruno", title: "Nurse Manager - Acute Care", tasks: "3",  image: "/content/images/prototype-actors/bbrune.jpg" },
                  { id: 3, parentId: 1, name: "Michele Brown", title: "Nurse Manager - Acute Care", tasks: "3", image: "/content/images/prototype-actors/19.jpg" },
                  { id: 4, parentId: 1, name: "Nicholas Frazier", title: "Quality Coordinator (RN)", tasks: "0", compliance: 2,  image: "/content/images/prototype-actors/72.jpg" },
                  { id: 5, parentId: 2, name: "Chris Horton", title: "Diabetes Educator", tasks: "1", pastdue:"1", image: "/content/images/prototype-actors/83.jpg" },
                  { id: 6, parentId: 1, name: "Ella Lane", title: "Case Manager (RN)", tasks: "2",  image: "/content/images/prototype-actors/76.jpg" },
                  { id: 7, parentId: 1, name: "Andrea Martinez", title: "LPN - I.V. Certified", tasks: "9", pastdue: "2", image: "/content/images/prototype-actors/78.jpg" },
                  { id: 8, parentId: 1, name: "Tanya Rivera", title: "Nurse - Staff (RN) - Acute Care", tasks: "8",  image: "/content/images/prototype-actors/8.jpg" },
                  { id: 9, parentId: 1, name: "Elmer Romero", title: "Nurse - Staff (RN) - Telephone", tasks: "5", pastdue: "1", image: "/content/images/prototype-actors/98.jpg" },
                  { id: 10, parentId: 3, name: "Jon Sims", title: "Medical Assistant", tasks: "5", pastdue: "1", image: "/content/images/prototype-actors/63.jpg" ,secondParenId: 1},
                  { id: 11, parentId: 3, name: "Amber McKenzie", title: "Nurse - Staff (RN)", tasks: "4", image: "/content/images/prototype-actors/8.jpg" },
                  { id: 12, parentId: 3, name: "Ava Field", title: "Nurse - Staff (RN)", tasks: "3",image: "/content/images/prototype-actors/alewis.jpg" , secondParenId: 6},
                  { id: 13, parentId: 3, name: "Evie Johnson", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/brynn.jpg" },
                  { id: 14, parentId: 3, name: "Paul Shetler", title: "Nurse - Staff (RN)", tasks: "3",image: "/content/images/prototype-actors/himanshuchanda.jpg"},
                  { id: 15, parentId: 3, name: "Rebecca Francis", title: "Nurse - Staff (RN)", tasks: "3",image: "/content/images/prototype-actors/himanshuchanda.jpg" },
                  { id: 16, parentId: 3, name: "Jon Sims", title: "Medical Assistant", tasks: "5", pastdue: "1", image: "/content/images/prototype-actors/63.jpg" ,secondParenId: 1},
                  { id: 17, parentId: 3, name: "Amber McKenzie", title: "Nurse - Staff (RN)", tasks: "4", image: "/content/images/prototype-actors/8.jpg" },
                  { id: 18, parentId: 3, name: "Ava Field", title: "Nurse - Staff (RN)", tasks: "3",image: "/content/images/prototype-actors/alewis.jpg" , secondParenId: 6},
                  { id: 19, parentId: 3, name: "Evie Johnson", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/brynn.jpg" },
                  { id: 20, parentId: 3, name: "Paul Shetler", title: "Nurse - Staff (RN)", tasks: "3",image: "/content/images/prototype-actors/himanshuchanda.jpg"},
                  { id: 21, parentId: 3, name: "Rebecca Francis", title: "Nurse - Staff (RN)", tasks: "3",image: "/content/images/prototype-actors/himanshuchanda.jpg" },
                  { id: 22, parentId: 3, name: "Jon Sims", title: "Medical Assistant", tasks: "5", pastdue: "1", image: "/content/images/prototype-actors/63.jpg" ,secondParenId: 1},
                  { id: 23, parentId: 3, name: "Amber McKenzie", title: "Nurse - Staff (RN)", tasks: "4", image: "/content/images/prototype-actors/8.jpg" },
                  { id: 24, parentId: 3, name: "Ava Field", title: "Nurse - Staff (RN)", tasks: "3",image: "/content/images/prototype-actors/alewis.jpg" , secondParenId: 6},
                  { id: 25, parentId: 3, name: "Evie Johnson", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/brynn.jpg" },
                  { id: 26, parentId: 3, name: "Paul Shetler", title: "Nurse - Staff (RN)", tasks: "3",image: "/content/images/prototype-actors/himanshuchanda.jpg"},
                  { id: 27, parentId: 3, name: "Rebecca Francis", title: "Nurse - Staff (RN)", tasks: "3",image: "/content/images/prototype-actors/himanshuchanda.jpg" },
                  { id: 28, parentId: 4, name: "Jon Sims", title: "Medical Assistant", tasks: "5", pastdue: "1", image: "/content/images/prototype-actors/63.jpg" ,secondParenId: 1},
                  { id: 29, parentId: 4, name: "Amber McKenzie", title: "Nurse - Staff (RN)", tasks: "4", image: "/content/images/prototype-actors/8.jpg" },
                  { id: 30, parentId: 4, name: "Ava Field", title: "Nurse - Staff (RN)", tasks: "3",image: "/content/images/prototype-actors/alewis.jpg" , secondParenId: 6},
                  { id: 31, parentId: 4, name: "Evie Johnson", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/brynn.jpg" },
                  { id: 32, parentId: 4, name: "Paul Shetler", title: "Nurse - Staff (RN)", tasks: "3",image: "/content/images/prototype-actors/himanshuchanda.jpg"},
                  { id: 33, parentId: 4, name: "Rebecca Francis", title: "Nurse - Staff (RN)", tasks: "3",image: "/content/images/prototype-actors/himanshuchanda.jpg" },
                  { id: 34, parentId: 4, name: "Jon Sims", title: "Medical Assistant", tasks: "5", pastdue: "1", image: "/content/images/prototype-actors/63.jpg" ,secondParenId: 1},
                  { id: 35, parentId: 4, name: "Amber McKenzie", title: "Nurse - Staff (RN)", tasks: "4", image: "/content/images/prototype-actors/8.jpg" },
                  { id: 36, parentId: 4, name: "Ava Field", title: "Nurse - Staff (RN)", tasks: "3",image: "/content/images/prototype-actors/alewis.jpg" , secondParenId: 6},
                  { id: 37, parentId: 4, name: "Evie Johnson", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/brynn.jpg" },
                  { id: 38, parentId: 4, name: "Paul Shetler", title: "Nurse - Staff (RN)", tasks: "3",image: "/content/images/prototype-actors/himanshuchanda.jpg"},
                  { id: 39, parentId: 4, name: "Rebecca Francis", title: "Nurse - Staff (RN)", tasks: "3",image: "/content/images/prototype-actors/himanshuchanda.jpg" },
                  { id: 40, parentId: 4, name: "Jon Sims", title: "Medical Assistant", tasks: "5", pastdue: "1", image: "/content/images/prototype-actors/63.jpg" ,secondParenId: 1},
                  { id: 41, parentId: 4, name: "Amber McKenzie", title: "Nurse - Staff (RN)", tasks: "4", image: "/content/images/prototype-actors/8.jpg" },
                  { id: 42, parentId: 4, name: "Ava Field", title: "Nurse - Staff (RN)", tasks: "3",image: "/content/images/prototype-actors/alewis.jpg" , secondParenId: 6},
                  { id: 43, parentId: 4, name: "Evie Johnson", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/brynn.jpg" },
                  { id: 44, parentId: 4, name: "Paul Shetler", title: "Nurse - Staff (RN)", tasks: "3",image: "/content/images/prototype-actors/himanshuchanda.jpg"},
                  { id: 45, parentId: 4, name: "Rebecca Francis", title: "Nurse - Staff (RN)", tasks: "3",image: "/content/images/prototype-actors/himanshuchanda.jpg" },
                  { id: 46, parentId: 8, name: "Rebecca Randall", title: "Nurse - Staff (RN)",tasks: "3", image: "/content/images/prototype-actors/ladylexy.jpg" },
                  { id: 47, parentId: 8, name: "Spencer May", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/ladylexy.jpg" },
                  { id: 48, parentId: 9, name: "Max Ford", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/mtnmissy.jpg" },
                  { id: 49, parentId: 1, name: "Riley Bray", title: "Nurse - Staff (RN)", tasks: "3",image: "/content/images/prototype-actors/rhein_wein.jpg" },
                  { id: 50, parentId: 1, name: "Callum Whitehouse", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/uxceo.jpg" }
                    ];

                orgChart.config.dataSource = data;

                orgChart.load();
              });


               function renderNodHandler(sender, args) {
                 console.log(args.node.data['pastdue']);
                   for (var i = 0; i < args.content.length; i++) {
                       if (args.content[i].indexOf("[reporters]") != -1) {
                           args.content[i] = args.content[i].replace("[reporters]", args.node.children.length);
                       }
                       // if (args.node.data['tasks'] != -1 != -1) {
                           args.content[i] = args.content[i].replace("[tasks]", args.node.data['tasks']);
                       // }
                       if (args.node.data['pastdue'] !== undefined) {
                           args.content[i] = args.content[i].replace("[pastdue]", args.node.data['pastdue'] + ' Past Due');
                       }
                       else
                       {
                           args.content[i] = args.content[i].replace("[pastdue]", '');
                       }
                   }
               }



           </script>

   </body>

   </html>

