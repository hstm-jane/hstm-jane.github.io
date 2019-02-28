getOrgChart.themes.myCustomTheme = {
    size: [380, 215],
    toolbarHeight: 0,
    textPoints: [
        { x: 230, y: 50, width: 240 },
        { x: 230, y: 80, width: 215 }
    ],
    textPointsNoImage: [
        { x: 230, y: 50, width: 240 },
        { x: 230, y: 80, width: 215 }
    ],
    expandCollapseBtnRadius: 15,
    // defs: '<filter id="f1" x="0" y="0" width="200%" height="200%"><feOffset result="offOut" in="SourceAlpha" dx="5" dy="5"></feOffset><feGaussianBlur result="blurOut" in="offOut" stdDeviation="5"></feGaussianBlur><feBlend in="SourceGraphic" in2="blurOut" mode="normal"></feBlend></filter>',
    defs: '<filter id="dropshadow" height="130%">' +
  '<feGaussianBlur in="SourceAlpha" stdDeviation="2"/> <!-- stdDeviation is how much to blur -->' +
  '<feOffset dx="2" dy="2" result="offsetblur"/> <!-- how much to offset -->' +
  '<feComponentTransfer>' +
    '<feFuncA type="linear" slope="0.3"/> <!-- slope is the opacity of the shadow -->' +
  '</feComponentTransfer>' +
  '<feMerge> ' +
    '<feMergeNode/> <!-- this contains the offset blurred image -->' +
    '<feMergeNode in="SourceGraphic"/> <!-- this contains the element that the filter is applied to -->' +
  '</feMerge>' +
'</filter>',
    // box: '<rect x="0" y="0" height="188" width="350" rx="10" ry="10" class="myCustomTheme-box"   />',
    box: '  <rect x="0" y="0" width="380" height="215" rx="10" ry="10" class="mainbox" style="filter:url(#dropshadow)"/><polyline points="6,3 374,3" class="topline" />',
    text: '<text text-anchor="middle" width="[width]" class="get-text get-text-[index]" x="[x]" y="[y]">[text]</text>',
    // tasks: '<text text-anchor="start" width="[width]" class="get-text get-text-[index]" x="120" y="110">[tasks]</text>',
    // pastdue: '<text text-anchor="start" width="[width]" class="text-pastdue get-text get-text-[index]" x="120" y="135">[pastdue]</text>',
    image: '<circle cx="60" cy="70" r="43" class="circlebg" /><clipPath id="personClipPath"><circle cx="60" cy="70" r="40" /></clipPath>' +
        '<image clip-path="url(#personClipPath)" xlink:href="[href]" x="10" y="20" height="100" width="100"/>',
    button: '<rect rx="5" ry="5" x="288" y="123" width="80" height="35" class="viewbtn"></rect><text class="viewbtn-text" text-anchor="middle" width="100" x="330" y="147">View</text>',
    noimage: '[noimage]',
    reporters: '[reporters]',

};
$.getJSON("http://localhost:3000/plans", function (source) {
    var peopleElement = document.getElementById("people");
    var orgChart = new getOrgChart(peopleElement, {
        theme: "myCustomTheme",
        enableGridView: false,
        primaryFields: ["name", "title", "tasks", "pastdue", "noimage", "button"],
        photoFields: ["image"],
        enableEdit: false,
        enableZoom: false,
        enableDetailsView: false,
        enableGridView: false,
        enablePrint: false,
        enableMove: false,
        linkType: 'B',
        scale: 0.8,
        enableExportToImage: false,
        levelSeparation: 100,
        renderNodeEvent: renderNodeHandler,
        clickNodeEvent: clickHandler,
        // secondParentIdField: "secondParenId",
        // layout: getOrgChart.MIXED_HIERARCHY_RIGHT_LINKS,
        expandToLevel: 3,

        dataSource: source
    });
orgChart.highlightNode("6"); //Highlight and Expand Brad Bruno
$('#people').css('width','100%');


$(document).ready(function(e) {

   setInterval(function(){ $('a[title="GetOrgChart jquery plugin"]').hide(); }, 10);

   $(".viewbtn").bind("click", function(event){ViewProfile();});
   $(".viewbtn-text").bind("click", function(event){ViewProfile();});

   function ViewProfile() {
    location.href = "dashboard-profile-quickview.php";
   }

});


function clickHandler(sender, args) {
    // location.href = "dashboard-profile-dev-ready.php";
}


function renderNodeHandler(sender, args) {
    for (var i = 0; i < args.content.length; i++) {
        // console.log(args.content[i].indexOf("[reporters]"));
        // console.log('------------' + i + '-------------');
        // console.log(args.content[i]);
        if (args.node.children.length != 0) {
            // args.content[i] = args.content[i].replace("[reporters]", '<circle cx="80" cy="80" r="20" class="reporters"></circle><text class="reporters-text" text-anchor="middle" width="100" x="80" y="85">' + args.node.children.length + '</text>');
            args.content[i] = args.content[i].replace("[reporters]", '<rect rx="5" ry="5" x="0" y="170" width="380" height="45" class="reportsbox get-btn"></rect>' +
                                                      '<text class="reportsbox-text" text-anchor="middle" width="380" x="190" y="194">' + args.node.children.length + ' Direct Reports</text>');

        } else {
            args.content[i] = args.content[i].replace("[reporters]", '');
            args.content[2] = args.content[2].replace("215", '180');
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

        if (args.node.data['noimage'] !== undefined) {
            // args.content[i] = args.content[i].replace("[tasks]", args.node.data['tasks'] + ' Tasks');
            // args.content[i] = args.content[i].replace("[noimage]", '<circle cx="50" cy="50" r="40" class="noimage"></circle><text class="noimage-text" text-anchor="middle" width="380" x="50" y="65">' + args.node.data["noimage"] + '</text>');
            args.content[i] = args.content[i].replace("[noimage]", '<circle cx="60" cy="70" r="43" class="circlebg" /> <circle cx="60" cy="70" r="40" class="noimage" />' +
        '<text class="noimage-text" text-anchor="middle" width="380" x="60" y="85">' + args.node.data["noimage"] + '</text>');
            args.content[i] = args.content[i].replace("[image]", '');
        } else {
            args.content[i] = args.content[i].replace("[image]", args.node.data['image']);
            args.content[i] = args.content[i].replace("[noimage]", '');
        }


    }
} 
});