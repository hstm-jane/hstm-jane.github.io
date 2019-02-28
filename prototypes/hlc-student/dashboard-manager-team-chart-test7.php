
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
            font-weight: 600;
        }

        .chart-container {
            height: 100% !important;

        }

        #people {
            /*width: 75% !important;*/
            /*height: 97% !important;*/
            height: 100% !important;
        }

        .btn {
            font-weight: 400;
            display: inline-block;
            margin-bottom: 0;
            text-align: center;
            vertical-align: middle;
            cursor: pointer;
            border: 1px solid transparent;
            white-space: nowrap;
            padding: 6px 12px;
            font-size: 16px !important;
            border-radius: 4px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            -o-user-select: none;
            user-select: none;
            color: #333;
            background-color: #fff;
            text-shadow: 0 -1px 0 rgba(0, 0, 0, .2);
            -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .15), 0 1px 1px rgba(0, 0, 0, .075);
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, .15), 0 1px 1px rgba(0, 0, 0, .075);
            background-image: -webkit-linear-gradient(top, #fff 0, #e0e0e0 100%);
            background-image: linear-gradient(to bottom, #fff 0, #e0e0e0 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffe0e0e0', GradientType=0);
            filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
            background-repeat: repeat-x;
            text-shadow: 0 1px 0 #fff;
            border-color: #ccc;
            /*line-height: 1.5;*/
            border-radius: 3px;
            height: 100%;
            width: 100%;
        }
        </style>
    </head>

    <body class="">

    <!-- /site-header -->
    <div id="people"></div>
    <!-- PROTOTYPE ONLY -->
    <script src="/scripts/jquery.js"></script>
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
            '<feGaussianBlur result="blurOut" in="offOut" stdDeviation="4" />' +
            '<feBlend in="SourceGraphic" in2="blurOut" mode="normal" /></filter>',
        box: '<rect x="0" y="0" height="188" width="350" rx="10" ry="10" class="myCustomTheme-box" filter="url(#f1)"  />',
        text: '<text text-anchor="start" width="[width]" class="get-text get-text-[index]" x="[x]" y="[y]">[text]</text>',
        tasks: '<text text-anchor="start" width="[width]" class="get-text get-text-[index]" x="110" y="110">[tasks]</text>',
        pastdue: '<text text-anchor="start" width="[width]" class="text-pastdue get-text get-text-[index]" x="110" y="135">[pastdue]</text>',
        image: '<clipPath id="personClipPath"><circle cx="50" cy="50" r="40" /></clipPath>' +
            '<image clip-path="url(#personClipPath)" xlink:href="[href]" x="10" y="10" height="80" width="80"/>',
        reporters: '[reporters]',
        CustomHtml: '[CustomHtml]'

        //ddddd: '<text x="0" y="0">1</text>'
    };
    var data = [
        { id: 0, parentId: null, name: "Boss", title: "Manager", image: "/content/images/avatar-default.png", CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 100, parentId: 0, name: "Co-worker", title: "Manager", image: "/content/images/avatar-default.png", CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 200, parentId: 0, name: "Co-worker", title: "Manager", image: "/content/images/avatar-default.png", CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 1, parentId: 0, name: "Darcy Crane", title: "Clinical Nurse Supervisorsadfsdfdsa", tasks: "17", pastdue: "3", image: "https://s3.amazonaws.com/uifaces/faces/twitter/allisongrayce/128.jpg", CustomHtml: "<button class='btn btn-default'>View Profile</button>" },

        { id: 3, parentId: 1, name: "Michele Brown", title: "Nurse Manager - Acute Care", tasks: "3", image: "/content/images/prototype-actors/19.jpg", CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 4, parentId: 1, name: "Nicholas Frazier", title: "Quality Coordinator (RN)", tasks: "0", compliance: 2, image: "/content/images/prototype-actors/72.jpg", CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 5, parentId: 2, name: "Chris Horton", title: "Diabetes Educator", tasks: "1", pastdue: "1", image: "/content/images/prototype-actors/83.jpg" },
        { id: 2, parentId: 1, name: "Ella Lane", title: "Case Manager (RN)", tasks: "2", image: "/content/images/prototype-actors/76.jpg", CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 6, parentId: 1, name: "Brad Bruno", title: "Nurse Manager - Acute Care", tasks: "3", image: "/content/images/prototype-actors/bbrune.jpg", CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 7, parentId: 1, name: "Andrea Martinez", title: "LPN - I.V. Certified", tasks: "9", pastdue: "2", image: "/content/images/prototype-actors/78.jpg", CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 8, parentId: 1, name: "Tanya Rivera", title: "Nurse - Staff (RN) - Acute Care", tasks: "8", image: "/content/images/prototype-actors/8.jpg", CustomHtml: "<button class='btn btn-default'>View Profile</button>" },

        { id: 9, parentId: 1, name: "Elmer Romero", title: "Nurse - Staff (RN) - Telephone", tasks: "5", pastdue: "1", image: "/content/images/prototype-actors/98.jpg", CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 10, parentId: 3, name: "Jon Sims", title: "Medical Assistant", tasks: "5", pastdue: "1", image: "/content/images/prototype-actors/63.jpg", secondParenId: 1, CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 11, parentId: 3, name: "Amber McKenzie", title: "Nurse - Staff (RN)", tasks: "4", image: "/content/images/prototype-actors/8.jpg", CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 12, parentId: 3, name: "Ava Field", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/alewis.jpg", secondParenId: 6, CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 13, parentId: 3, name: "Evie Johnson", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/brynn.jpg", CustomHtml: "<button class='btn btn-default'>View Profile</button>" },

        { id: 28, parentId: 4, name: "Jon Sims", title: "Medical Assistant", tasks: "5", pastdue: "1", image: "/content/images/prototype-actors/63.jpg", secondParenId: 1, CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 29, parentId: 4, name: "Amber McKenzie", title: "Nurse - Staff (RN)", tasks: "4", image: "/content/images/prototype-actors/8.jpg", CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 30, parentId: 4, name: "Ava Field", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/alewis.jpg", secondParenId: 6, CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 31, parentId: 4, name: "Evie Johnson", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/brynn.jpg", CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 32, parentId: 4, name: "Paul Shetler", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/himanshuchanda.jpg", CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 33, parentId: 4, name: "Rebecca Francis", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/himanshuchanda.jpg" },
        { id: 34, parentId: 4, name: "Jon Sims", title: "Medical Assistant", tasks: "5", pastdue: "1", image: "/content/images/prototype-actors/63.jpg", secondParenId: 1, CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 35, parentId: 4, name: "Amber McKenzie", title: "Nurse - Staff (RN)", tasks: "4", image: "/content/images/prototype-actors/8.jpg", CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 36, parentId: 4, name: "Ava Field", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/alewis.jpg", secondParenId: 6, CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 37, parentId: 4, name: "Evie Johnson", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/brynn.jpg", CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 38, parentId: 4, name: "Paul Shetler", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/himanshuchanda.jpg", CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 39, parentId: 4, name: "Rebecca Francis", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/himanshuchanda.jpg", CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 40, parentId: 4, name: "Jon Sims", title: "Medical Assistant", tasks: "5", pastdue: "1", image: "/content/images/prototype-actors/63.jpg", secondParenId: 1, CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 41, parentId: 4, name: "Amber McKenzie", title: "Nurse - Staff (RN)", tasks: "4", image: "/content/images/prototype-actors/8.jpg", CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 42, parentId: 4, name: "Ava Field", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/alewis.jpg", secondParenId: 6, CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 43, parentId: 4, name: "Evie Johnson", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/brynn.jpg", CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 44, parentId: 4, name: "Paul Shetler", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/himanshuchanda.jpg", CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 45, parentId: 4, name: "Rebecca Francis", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/himanshuchanda.jpg", CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 46, parentId: 8, name: "Rebecca Randall", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/ladylexy.jpg", CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 47, parentId: 8, name: "Spencer May", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/ladylexy.jpg", CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 48, parentId: 9, name: "Max Ford", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/mtnmissy.jpg", CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 49, parentId: 1, name: "Riley Bray", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/rhein_wein.jpg", CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 50, parentId: 1, name: "Callum Whitehouse", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/uxceo.jpg", CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 53, parentId: 13, name: "Evie Johnson", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/brynn.jpg", CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 54, parentId: 13, name: "Paul Shetler", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/himanshuchanda.jpg", CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 55, parentId: 13, name: "Rebecca Francis", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/himanshuchanda.jpg", CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 56, parentId: 13, name: "Jon Sims", title: "Medical Assistant", tasks: "5", pastdue: "1", image: "/content/images/prototype-actors/63.jpg", secondParenId: 1, CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 57, parentId: 13, name: "Amber McKenzie", title: "Nurse - Staff (RN)", tasks: "4", image: "/content/images/prototype-actors/8.jpg", CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 58, parentId: 13, name: "Ava Field", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/alewis.jpg", secondParenId: 6, CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 59, parentId: 13, name: "Evie Johnson", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/brynn.jpg", CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 60, parentId: 13, name: "Paul Shetler", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/himanshuchanda.jpg", CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 61, parentId: 13, name: "Rebecca Francis", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/himanshuchanda.jpg", CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 62, parentId: 13, name: "Jon Sims", title: "Medical Assistant", tasks: "5", pastdue: "1", image: "/content/images/prototype-actors/63.jpg", secondParenId: 1, CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 64, parentId: 50, name: "Paul Shetler", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/himanshuchanda.jpg", CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 65, parentId: 50, name: "Rebecca Francis", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/himanshuchanda.jpg", CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 66, parentId: 50, name: "Jon Sims", title: "Medical Assistant", tasks: "5", pastdue: "1", image: "/content/images/prototype-actors/63.jpg", secondParenId: 1, CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 67, parentId: 50, name: "Amber McKenzie", title: "Nurse - Staff (RN)", tasks: "4", image: "/content/images/prototype-actors/8.jpg", CustomHtml: "<button >Hey</button>" },
        { id: 68, parentId: 50, name: "Ava Field", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/alewis.jpg", secondParenId: 6, CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 69, parentId: 50, name: "Evie Johnson", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/brynn.jpg", CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 70, parentId: 50, name: "Paul Shetler", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/himanshuchanda.jpg", CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 71, parentId: 70, name: "Rebecca Francis", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/himanshuchanda.jpg", CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 72, parentId: 70, name: "Jon Sims", title: "Medical Assistant", tasks: "5", pastdue: "1", image: "/content/images/prototype-actors/63.jpg", secondParenId: 1, CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 69, parentId: 50, name: "Evie Johnson", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/brynn.jpg", CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 70, parentId: 50, name: "Paul Shetler", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/himanshuchanda.jpg", CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 71, parentId: 47, name: "Rebecca Francis", title: "Nurse - Staff (RN)", tasks: "3", image: "/content/images/prototype-actors/himanshuchanda.jpg", CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
        { id: 72, parentId: 47, name: "Jon Sims", title: "Medical Assistant", tasks: "5", pastdue: "1", image: "/content/images/prototype-actors/63.jpg", secondParenId: 1, CustomHtml: "<button class='btn btn-default'>View Profile</button>" },
    ];

    var peopleElement = document.getElementById("people");
    var orgChart = new getOrgChart(peopleElement, {
        theme: "myCustomTheme",
        enableGridView: true,
        primaryFields: ["name", "title", "tasks", "pastdue"],
        photoFields: ["image"],
        enableEdit: false,
        enableDetailsView: false,
        enableGridView: true,
        enablePrint: true,
        linkType: 'M',
        scale: 0.4,
        enableExportToImage: true,
        levelSeparation: 100,
        renderNodeEvent: renderNodeHandler,
        clickNodeEvent: clickHandler,
        // secondParentIdField: "secondParenId",
        layout: getOrgChart.MIXED_HIERARCHY_RIGHT_LINKS,
        expandToLevel: 2,

        dataSource: data
    });
    orgChart.highlightNode("6"); //Highlight and Expand Brad Bruno
    $('#people').css('width','100%');


    $(document).ready(function(e) {

       setInterval(function(){ $('a[title="GetOrgChart jquery plugin"]').hide(); }, 10);

    });


    function clickHandler(sender, args) {
        // location.href = "dashboard-profile-dev-ready.php";
    }


    function renderNodeHandler(sender, args) {
        for (var i = 0; i < args.content.length; i++) {
            // console.log(args.content[i].indexOf("[reporters]"));

            if (args.node.children.length != 0) {
                args.content[i] = args.content[i].replace("[reporters]", '<circle cx="80" cy="80" r="20" class="reporters"></circle><text class="reporters-text" text-anchor="middle" width="100" x="80" y="85">' + args.node.children.length + '</text>');

            } else {
                args.content[i] = args.content[i].replace("[reporters]", '');
            }
            // if (args.node.data['tasks'] != -1 != -1) {

            // }
            if (args.node.data['pastdue'] !== undefined) {
                args.content[i] = args.content[i].replace("[pastdue]", args.node.data['pastdue'] + ' Past Due');
            } else {
                args.content[i] = args.content[i].replace("[pastdue]", '');
            }

            if (args.node.data['tasks'] !== undefined) {
                args.content[i] = args.content[i].replace("[tasks]", args.node.data['tasks'] + ' Tasks');
            } else {
                args.content[i] = args.content[i].replace("[tasks]", '');
            }
            if (args.node.data['CustomHtml'] !== undefined) {
                args.content[i] = args.content[i].replace("[CustomHtml]", "<foreignObject x='210' y='143' width='130' height='35'><a href='dashboard-profile-iframe.php'>" + args.node.data["CustomHtml"] + "</a></foreignObject>");
            }

        }
    }
    </script>
    </body>

    </html>