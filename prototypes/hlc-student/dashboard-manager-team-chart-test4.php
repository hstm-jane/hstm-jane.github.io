<!DOCTYPE html>
<html>
<head>
  <title>Hello, yFiles for HTML</title>
  <link type="text/css" rel="stylesheet" href="lib/yfiles.css">

  <style>
  html, body, #graphCanvas, .canvascontrol {
    width: 100%;
    height: 100%;
    padding: 0;
    margin: 0;
  }
  </style>
</head>
<body>
  <div id="graphCanvas"></div>

  <!-- Adding type information support during application development. -->
  <script src="lib/yfiles-typeinfo.js"></script>

  <script src="lib/yfiles/es2015-shim.js"></script>
  <script src="lib/require.js"></script>

  <script>
    /****************************************************************************
     **
     ** This demo file is part of yFiles for HTML 2.0.1.2.
     ** Copyright (c) 2000-2017 by yWorks GmbH, Vor dem Kreuzberg 28,
     ** 72070 Tuebingen, Germany. All rights reserved.
     **
     ** yFiles demo files exhibit yFiles for HTML functionalities. Any redistribution
     ** of demo files in source code or binary form, with or without
     ** modification, is not permitted.
     **
     ** Owners of a valid software license for a yFiles for HTML version that this
     ** demo is shipped with are allowed to use the demo source code as basis
     ** for their own yFiles for HTML powered applications. Use of such programs is
     ** governed by the rights and conditions as set out in the yFiles for HTML
     ** license agreement.
     **
     ** THIS SOFTWARE IS PROVIDED ''AS IS'' AND ANY EXPRESS OR IMPLIED
     ** WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
     ** MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN
     ** NO EVENT SHALL yWorks BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
     ** SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
     ** TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
     ** PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF
     ** LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
     ** NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
     ** SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
     **
     ***************************************************************************/

    'use strict';require.config({paths:{yfiles:'lib/yfiles',demo:'lib'}}),require(['lib/yfiles/view-component','lib/demo-util','lib/OrgChartData.js','lib/OrgChartPropertiesView.js','lib/OrgChartPrintingSupport.js','lib/LevelOfDetailNodeStyle.js','yfiles/view-graphml','yfiles/view-layout-bridge','yfiles/layout-tree','demo/license'],function(a,f,u,x,y,A){function E(){b=new a.view.HSA('graphComponent'),p(b.graph),b.$gbo.showFocusPolicy=a.view.PVA.ALWAYS,b.$mgo.enabled=!1,b.$gbo.enabled=!1,b.$lgo.enabled=!1,s(),i=new a.view.ISA('overviewComponent'),i.__pc=b,F(),b.$sEo(function(a,c){j.showProperties(b.currentItem)}),Q(),R(),S(),f.$Dpo(),z(u)}function F(){var a=document.getElementById('propertiesView');j=new x(a,r)}function Q(){var d=a.input.JHB;f.bindCommand('button[data-command=\'ZoomIn\']',d.$w,b,null),f.bindCommand('button[data-command=\'ZoomOut\']',d.$u,b,null),f.bindCommand('button[data-command=\'FitContent\']',d.$N,b,null),f.bindAction('button[data-command=\'ZoomOriginal\']',function(){a.input.JHB.$Z.execute(1,b)});var c=b.inputMode.__vf,e=d.__uc();c.__Qg(e,G,H);var g=d.__uc();c.__Qg(g,I,J);var h=d.__uc();c.__Qg(h,M,N);var i=d.__uc();c.__Qg(i,K,L);var j=d.__uc();c.__Qg(j,O,P),f.bindCommand('button[data-command=\'ShowParent\']',i,b,null),f.bindCommand('button[data-command=\'HideParent\']',h,b,null),f.bindCommand('button[data-command=\'ShowChildren\']',g,b,null),f.bindCommand('button[data-command=\'HideChildren\']',e,b,null),f.bindCommand('button[data-command=\'ShowAll\']',j,b,null),c.__Tg(a.view.NHB.SUBTRACT,a.view.SHB.NONE,e),c.__Tg(a.view.NHB.ADD,a.view.SHB.NONE,g),c.__Tg(a.view.NHB.PAGE_DOWN,a.view.SHB.NONE,h),c.__Tg(a.view.NHB.PAGE_UP,a.view.SHB.NONE,i),c.__Tg(a.view.NHB.MULTIPLY,a.view.SHB.NONE,j),f.bindAction('button[data-command=\'Print\']',D)}function R(){window.highlight=function(c){var b=c.parentNode.childNodes;for(var a=0;a<b.length;a++)if(b[a].className&&b[a].className.baseVal==='hoverable'){b[a].className.baseVal+=' onhover';return}},window.unhighlight=function(c){var b=c.parentNode.childNodes;for(var a=0;a<b.length;a++)if(b[a].className&&b[a].className.baseVal==='hoverable onhover'){b[a].className.baseVal='hoverable';return}}}function S(){var a=window.orgchartconverters={};a.borderconverter=function(a,b){return typeof a==='boolean'?a?'#FFBB33':'rgba(0,0,0,0)':'#FFF'},a.overviewconverter=function(a,b){return typeof a==='string'&&a.length>0?a.replace(/^(.)(\S*)(.*)/,'$1.$3'):''},a.intermediateconverter=function(a,b){return typeof a==='string'&&a.length>17?a.replace(/^(.)(\S*)(.*)/,'$1.$3'):a},a.linebreakconverter=function(b,c){if(typeof b==='string'){var a=b;while(a.length>20&&a.indexOf(' ')>-1)a=a.substring(0,a.lastIndexOf(' '));return c==='true'?a:b.substring(a.length)}return''},a.addhashconverter=function(a,b){return typeof a==='string'?typeof b==='string'?'#'+a+b:'#'+a:a}}function s(){var c=new a.input.IYA;c.$RMo=a.graph.KDB.NODE,c.selectableItems=a.graph.KDB.NONE,c.$Ydo=a.graph.KDB.NONE,c.toolTipItems=a.graph.KDB.NONE,c.contextMenuItems=a.graph.KDB.NONE,c.focusableItems=a.graph.KDB.NODE,c.$aEo(t),b.inputMode=c}function t(a,b){q()}function p(b){b.nodeDefaults.style=new A(new a.styles.TemplateNodeStyle('detailNodeStyleTemplate'),new a.styles.TemplateNodeStyle('intermediateNodeStyleTemplate'),new a.styles.TemplateNodeStyle('overviewNodeStyleTemplate')),b.nodeDefaults.size=new a.geometry.Size(285,100),b.edgeDefaults.style=new a.styles.PolylineEdgeStyle({stroke:new a.view.Stroke(170,170,170,255,2),targetArrow:a.styles.WCB.NONE})}function v(a){b.currentItem=a,q(),b.focus()}function w(a){return a===null?null:c.$TH.__Y.first(function(b){return b.tag!==null&&a===b.tag.email})}function r(b){var a=w(b);a!==null&&v(a)}function k(d){var b=d.subordinates;if(b!==undefined){var a=void 0;for(a=0;a<b.length;a++){var c=b[a];c.parent=d,k(c)}}}function z(e){k(e[0]);var d=new a.binding.URA(b.graph);d.$OH='subordinates',d.nodesSource=e,p(d.graph),c=new a.graph.KBB(d.__hc(),B,function(a){return!0}),b.graph=c,C(),b.__kg(),l()}function l(){b.$cUo(new a.geometry.Insets(100));var c=b.$gOo;c.honorBothDimensions=!1,c.__Ac=b.contentRect}function B(a){return!e.has(a)}function C(){var c=b.graph;m(c),c.__Ke(new a.tree.SFC),o(c)}function m(b){var c=b.$HW,d=c.__Ie(a.tree.SFC.NODE_PLACER_DP_KEY),e=c.__Ie(a.tree.REC.ASSISTANT_NODE_DP_KEY);b.__Y.forEach(function(a){b.__nb(a)===0&&n(a,d,e,b)})}function n(b,c,o,d){var e=b.tag;if(e!==null){var k=e.layout;switch(k){case'rightHanging':{var f=new a.tree.UEC(a.tree.YXB.VERTICAL_TO_RIGHT,a.tree.ZXB.LEADING_ON_BUS,30,30);f.__Ek=a.tree.__sk.FORK_AT_ROOT,c.set(b,f);break}case'leftHanging':{var j=new a.tree.UEC(a.tree.YXB.VERTICAL_TO_LEFT,a.tree.ZXB.LEADING_ON_BUS,30,30);j.__Ek=a.tree.__sk.FORK_AT_ROOT,c.set(b,j);break}case'bothHanging':{var h=new a.tree.IFC;h.$IUo=!1,c.set(b,h);break}default:{c.set(b,new a.tree.UEC(a.tree.YXB.HORIZONTAL_DOWNWARD,a.tree.ZXB.MEDIAN,30,30));break}}var l=e.assistant;if(l&&d.__nb(b)>0){var m=d.__De(b).get(0),g=m.$yO,p=c.get(g),i=new a.tree.REC;i.$yQo=p,c.set(g,i),o.set(b,!0)}}d.__Ge(b).forEach(function(b){var a=b.targetPort.owner;n(a,c,o,d)})}function o(c){var b=c.$HW;b.$ha(a.tree.REC.ASSISTANT_NODE_DP_KEY),b.$ha(a.tree.SFC.NODE_PLACER_DP_KEY)}function G(){var f=b.currentItem;if(a.graph.INode.isInstance(f)&&!d){var i=e.size;c.__Ge(f).forEach(function(a){h(a.targetPort.owner,f)}),g(i,f)}}function H(){var e=b.currentItem;return a.graph.INode.isInstance(e)&&!d&&c!==null?c.__sb(e)>0:!1}function I(){var f=b.currentItem;if(a.graph.INode.isInstance(f)&&!d){var h=e.size;c.$TH.__Ge(f).forEach(function(b){var a=b.$zO;e.delete(a)&&(c.$TH.$yl(a,f.layout.center),c.$TH.__Ee(b))}),g(h,f)}}function J(){var e=b.currentItem;return a.graph.INode.isInstance(e)&&!d&&c!==null?c.__sb(e)!==c.$TH.__sb(e):!1}function K(){var f=b.currentItem;if(a.graph.INode.isInstance(f)&&!d){var h=e.size;c.$TH.__De(f).forEach(function(b){var a=b.$yO;e.delete(a)&&(c.$TH.$yl(a,f.layout.center),c.$TH.__Ee(b))}),g(h,f)}}function L(){var e=b.currentItem;return a.graph.INode.isInstance(e)&&!d&&c!==null?c.__nb(e)===0&&c.$TH.__nb(e)>0:!1}function M(){var f=b.currentItem;if(a.graph.INode.isInstance(f)&&!d){var i=e.size;c.$TH.__Y.forEach(function(a){a!==f&&c.__m(a)&&c.__nb(a)===0&&h(a,f)}),g(i,f)}}function N(){var e=b.currentItem;return a.graph.INode.isInstance(e)&&!d&&c!==null?c.__nb(e)>0:!1}function O(){d||(e.clear(),g(-1,b.currentItem))}function P(){return c!==null&&e.size!==0&&!d}function g(n,h){if(d)return;if(d=!0,n!==e.size){c.__Vf(),a.input.JHB.$WM();var g=b.graph,i=b.graph.$HW;i.__Ne(a.layout.__jk.FIXED_NODE_DP_KEY,function(a){return a===h}),m(g);var j=new a.layout.__jk(new a.tree.SFC),f=new a.layout.FOB(b,j);f.$UQo=h===null,f.$lNo=!0,f.$cUo=!0,f.duration=a.lang.QRA.$Q(500);var k=f.start();k.then(function(){b.graph.$HW.$ha(a.layout.__jk.FIXED_NODE_DP_KEY),o(g),d=!1,l(),a.input.JHB.$WM()}).catch(function(a){typeof window.reportError==='function'&&window.reportError(a)})}}function h(a,b){e.set(a,a),c.$TH.__Ge(a).forEach(function(c){var a=c.targetPort.owner;b!==a&&h(a,b)})}function q(){var d=b.currentItem;a.graph.INode.isInstance(d)&&(b.graph.__m(d)?a.input.JHB.$Q.execute(null,b):c.$TH.__Y.$NO(d)&&(e.clear(),c.$TH.__Y.forEach(function(a){a!==d&&c.$TH.__nb(a)===0&&h(a,d)}),c.__Y.forEach(function(b){c.$yl(b,a.geometry.Point.ORIGIN)}),c.__gb.forEach(function(a){c.__Ee(a)}),g(-1,null)))}function D(){var a=new y;a.tiledPrinting=!0,a.scale=0.29,a.margin=1,a.tileWidth=842,a.tileHeight=595,a.print(b,null)}var b=null,i=null,j=null,e=new a.collections.__f,c=null,d=!1;E()});


    require.baseUrl = 'lib/';
    // load the license (required) and, exemplary, the 'complete' module
    require([
      'lib/license.js',
      'yfiles/complete'
    ], function () {
var /*yfiles.canvas.GraphControl*/ graphControl = new yfiles.canvas.GraphControl.ForId('graphCanvas');

// creates and configures a node style
var /**yfiles.drawing.ShinyPlateNodeStyle*/ nodeStyle = new yfiles.drawing.ShinyPlateNodeStyle.WithColor(yfiles.system.Colors.ORANGE);
nodeStyle.drawShadow = true;
// sets a default style
graphControl.graph.nodeDefaults.style = new yfiles.drawing.ShinyPlateNodeStyle.WithColor(yfiles.system.Colors.BLUE);

// gets the IGraph
var /**yfiles.graph.IGraph*/ graph = graphControl.graph;
// and creates some nodes
graph.createNodeWithBoundsAndStyle(new yfiles.geometry.RectD(10, 10, 100, 100), nodeStyle);
graph.createNodeWithBoundsAndStyle(new yfiles.geometry.RectD(150, 150, 100, 100), nodeStyle);
graph.createNodeWithBoundsAndStyle(new yfiles.geometry.RectD(250, 250, 100, 100), nodeStyle);

graphControl.inputMode = new yfiles.input.GraphEditorInputMode();
       });
  </script>
</body>
</html>