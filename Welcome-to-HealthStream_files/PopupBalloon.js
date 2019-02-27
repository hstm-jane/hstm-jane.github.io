/*----------------------------------------------------------------------------\
|Created by Arkady (Alex) Lesniara (arkady@lesniara.com)                             |
|Copyright (c) 2005 Arkady Lesniara                         |
| This software is provided "as is", without warranty of any kind, express or |
| implied, including  but not limited  to the warranties of  merchantability, |
| fitness for a particular purpose and noninfringement. In no event shall the |
| authors or  copyright  holders be  liable for any claim,  damages or  other |
| liability, whether  in an  action of  contract, tort  or otherwise, arising |
| from,  out of  or in  connection with  the software or  the  use  or  other |
| dealings in the software.                                                   |
\----------------------------------------------------------------------------*/

//2007.08.10 RS modified for HLC usage
//http://www.codeproject.com/jscript/jsballoon.asp
var JSBIP = "/hstmsts/images/JSBalloon/";
function JSB()
{
var tmrBP;
var blbWidth=200;
var tFS='font-family: Arial;font-weight: bold; font-size:9pt;color:black;';
var mFS='font-family: Arial; font-size:8pt;color:black;';
var fFS='font-family: Arial\ font-size:8pt;color:black;';
var tShow=false;
var tHide=false;
var tSF='progid:DXImageTransform.Microsoft.Fade(Overlap=1.00)';
var tHF='progid:DXImageTransform.Microsoft.Fade(Overlap=1.00)';
var aH=false;
var aHInterval=4000; // 4 sec
var autoAway=false;
var sCBox=false;

if(JSB.arguments.length>0)
{
var oArg=JSB.arguments[0];

if(oArg.width!=null)
{
blbWidth=oArg.width;
}

if(oArg.tFS!=null)
{
tFS=oArg.tFS;
}

if(oArg.mFS!=null)
{
mFS=oArg.mFS;
}

if(oArg.fFS!=null)
{
fFS=oArg.fFS;
}

if(oArg.tShow!=null)
{
tShow=oArg.tShow;
}

if(oArg.tHide!=null)
{
tHide=oArg.tHide;
}

if(oArg.tSF!=null)
{
tSF=oArg.tSF;
}

if(oArg.tHF!=null)
{
tHF=oArg.tHF;
}

if(oArg.aH!=null)
{
aH=oArg.aH;
}

if(oArg.aHInterval!=null)
{
aHInterval=oArg.aHInterval;
}

if(oArg.autoAway!=null)
{
autoAway=oArg.autoAway;
}

if(oArg.sCBox!=null)
{
sCBox=oArg.sCBox;
}
}
this.tFS=tFS;
this.mFS=mFS;
this.fFS=fFS;
this.tSF=tSF;
this.tHF=tHF;
this.tShow=tShow;
this.tHide=tHide;
this.aH=aH;
this.aHInterval=aHInterval;
this.autoAway=autoAway;
this.width=blbWidth;
this.sCBox=sCBox;
var childID;
var bDIV = document.createElement("DIV");
bDIV.style.width=String(blbWidth);
bDIV.style.position="absolute";
bDIV.style.visibility="hidden";
bDIV.style.zIndex=2001;
this.visible=false;
this.balloon=bDIV;
this.Show=Show;
this.Hide=Hide;
this.balloon.onclick=this.Hide; //click the balloon to hide

function Show()
{
var title;
var message='';
var icon='';
var footer='';
var btop=0, bleft=0;
var atop=0, aleft=0;
var anchor;
var direction='SE';

blbWidth=String(this.width);
tFS=this.tFS;
mFS=this.mFS;
fFS=this.fFS;
tSF=this.tSF;
tHF=this.tHF;
tShow=this.tShow;
tHide=this.tHide;
aH=this.aH;
aHInterval=this.aHInterval;
autoAway=this.autoAway;

if(Show.arguments.length>0)
{
var oArg=Show.arguments[0];

if(oArg.title!=null)
{
title=oArg.title;
}

if(oArg.message!=null)
{
message=oArg.message;
}

if(oArg.icon!=null)
{
icon=oArg.icon;

switch(icon.toUpperCase())
{
case 'EXCLAIM':
icon = 'exclaim.ico';
SoundFx = 'Exclaim';
break;
case 'STOP':
icon = 'stop.ico';
SoundFx = 'Stop';
break;
case 'INFO':
icon = 'info.ico';
SoundFx = 'Info';
break;
case 'HELP':
icon = 'help.ico';
SoundFx = 'Info';
break;
default:
SoundFx = 'Info';
}
}

if(oArg.footer!=null)
{
footer=oArg.footer;
}

if(oArg.top!=null)
{
btop=oArg.top;
}

if(oArg.left!=null)
{
bleft=oArg.left;
}

if(oArg.anchor!=null)
{
anchor=oArg.anchor;
atop=getTop(anchor);
aleft=getLeft(anchor);
}

this.visibile=true;
}

var ret=bI(bB(title, 
icon, 
message, 
footer, 
this.tFS,
this.mFS,
this.fFS,
this.sCBox), direction);

bDIV.innerHTML=ret;

var btnClose=bDIV.children[0].children[0].children[1].children[0].children[0].children[0].children[0].children[2].children[0];
btnClose.onclick=this.Hide;

if(typeof(childID)!='object')
{
childID=document.body.appendChild(bDIV);
}

if(anchor!=null)
{

bDIV.style.left = aleft+bleft;
bDIV.style.top = (atop-bDIV.offsetHeight)+btop;
}
else
{
bDIV.style.left = bleft;
bDIV.style.top = btop;
}


var bAdjustedLeft=parseInt(bDIV.style.left, 10);
var showSE;


if(document.body.offsetWidth < (bAdjustedLeft+bDIV.offsetWidth+20))
{
direction='SW';

ret=bI(bB(title, 
icon, 
message, 
footer, 
this.tFS,
this.mFS,
this.fFS,
this.sCBox), direction);
bDIV.innerHTML=ret;

bDIV.style.left = bAdjustedLeft-bDIV.offsetWidth+20;
showSE=false;
}
else
{
direction='SE';
showSE=true;
} 

if(parseInt(bDIV.style.top, 10)<0)
{
if(showSE)
{
direction='NE';
ret=bI(bB(title, 
icon, 
message, 
footer, 
this.tFS,
this.mFS,
this.fFS,
this.sCBox), direction);
bDIV.innerHTML=ret;
}
else
{
direction='NW';
ret=bI(bB(title, 
icon, 
message, 
footer, 
this.tFS,
this.mFS,
this.fFS,
this.sCBox), direction);
bDIV.innerHTML=ret;
}
bDIV.style.top = parseInt(bDIV.style.top, 10)+bDIV.offsetHeight;
if(anchor!=null)
{
bDIV.style.top = parseInt(bDIV.style.top, 10)+anchor.offsetHeight
}
}

if(this.sCBox)
{
if(direction=='SE' || direction=='SW')
{
btnClose=bDIV.children[0].children[0].children[1].children[0].children[0].children[0].children[0].children[2].children[0];
}
else
{
btnClose=bDIV.children[0].children[0].children[2].children[0].children[0].children[0].children[0].children[2].children[0];
}
btnClose.onclick=this.Hide;
}

// Adjust all srollers
var scrollOffsets=ScrollOffsets(anchor);
bDIV.style.top=parseInt(bDIV.style.top, 10)-scrollOffsets[0];
bDIV.style.left=parseInt(bDIV.style.left, 10)-scrollOffsets[1];

// Hide any overlapping selects
SuppressSelects();

// Show balloon
if(this.tShow)
{
bDIV.style.filter=this.tSF+' '+this.tHF;
if(bDIV.filters(0).status==2 || bDIV.filters(0).status==1)
{
bDIV.filters(0).Stop();
}
bDIV.filters(0).Apply();
bDIV.style.visibility='visible';
bDIV.filters(0).Play();
}
else
{
bDIV.style.visibility='visible';
}

// Init autohide if true
if(this.aH)
{
clearTimeout(this.tmrBP);
tHide=this.tHide;
this.tmrBP=setTimeout(this.Hide, this.aHInterval);
}

if(this.autoAway)
{
bDIV.onmouseover=Hide;
}
else
{
bDIV.onmouseover='';
}
}

function Hide()
{
if(bDIV.style.visibility=='hidden')
{
return;
}

if(tHide)
{
if(bDIV.filters(1).status==2 || bDIV.filters(1).status==1)
{
bDIV.filters(1).Stop();
}
bDIV.filters(1).Apply();
bDIV.style.visibility='hidden';
bDIV.filters(1).Play();
}
else
{
bDIV.style.visibility='hidden';
}

RestoreSelects();

this.visibile=false;
}

function SuppressSelects()
{
var selObjects=document.getElementsByTagName("SELECT");

for(var i=0;i<selObjects.length;i++)
{
if(selObjects[i].balloonMember!='true')
{
if(selObjects[i].style.visibility=='visible' || selObjects[i].style.visibility=='')
{
if(ObjectOverlap(bDIV, selObjects[i]))
{
selObjects[i].style.visibility='hidden';
// Mark as ballonhidden
selObjects[i].baloonHidden=true;
}
}
}
}
}

function RestoreSelects()
{
var selObjects=document.getElementsByTagName("SELECT");

for(var i=0;i<selObjects.length;i++)
{
if(selObjects[i].baloonHidden)
{
selObjects[i].style.visibility='visible';
selObjects[i].baloonHidden=false;
}
}
}

function ObjectOverlap(obj1, obj2)
{
var obj1TopX = getLeft(obj1);
var obj1TopY = getTop(obj1);
var obj1BottomX = getLeft(obj1)+obj1.offsetWidth;
var obj1BottomY = getTop(obj1)+obj1.offsetHeight;

var obj2TopX = getLeft(obj2);
var obj2TopY = getTop(obj2);
var obj2BottomX = getLeft(obj2)+obj2.offsetWidth;
var obj2BottomY = getTop(obj2)+obj2.offsetHeight;

var overlapOnX = (obj1TopX < obj2BottomX && obj2TopX < obj1BottomX);
var overlapOnY = (obj1TopY < obj2BottomY && obj2TopY < obj1BottomY);

return (overlapOnX && overlapOnY);
}

function getObjLeft(anObject) 
{
  return(anObject.offsetParent ? (getObjLeft(anObject.offsetParent) + anObject.offsetLeft) : anObject.offsetLeft);
}
 
function getObjTop(anObject) 
{
  return(anObject.offsetParent ? (getObjTop(anObject.offsetParent) + anObject.offsetTop) : anObject.offsetTop); 
}
 
function getLeft(anObject) 
{
    return(getObjLeft(anObject));
}
 
function getTop(anObject) 
{
    return(getObjTop(anObject));
}

function ScrollOffsets(anchor)
{
var aryScrolls = new Array(0,0);

//RS: commented out so balloon will always be anchored to our object, no matter how page scrolls
return aryScrolls;
}

function bI(body, direction)
{
var ret;

switch(direction)
{
case 'SE':
// South East
ret ='<table class="JSB" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;filter:progid:DXImageTransform.Microsoft.DropShadow(OffX=1,OffY=1,Color=black);" >'+
'  <tr>'+
'    <td height="1" width="10">'+
'    <img border="0" src="'+JSBIP+'cLeftTop.gif" width="100%" height="100%"></td>'+
'    <td height="7" width=100% style="border-top:1px solid #999999; border-left-width:1; border-right-width:1; border-bottom-width:1; background-color:#FFFFEA" colspan="4"></td>'+
'    <td height="7"  width="10">'+
'    <img border="0" src="'+JSBIP+'cRightTop.gif" width="100%" height="100%"></td>'+
'  </tr>'+
'  <tr>'+
'    <td valign=top colspan="6" style="border-left: 1px solid #999999; border-right: 1px solid #999999; background-color: #FFFFEA">'+
body +
'    </td>'+
'  </tr>'+
'  <tr>'+
'    <td width="10" height="7">'+
'    <img border="0" src="'+JSBIP+'cLeftBottom.gif" width="100%" height="100%"></td>'+
'    <td height="7" style="background-color: #FFFFEA" colspan="4" width="280"></td>'+
'    <td width="10" height="7">'+
'    <img border="0" src="'+JSBIP+'cRightBottom.gif" width="100%" height="100%"></td>'+
'  </tr>'+
'  <tr>'+
'    <td width="10" height="10"></td>'+
'    <td width="1" style="border-top: 1px solid #999999; padding-left: 4; padding-right: 4; padding-top: 1; padding-bottom: 1" height="10"></td>'+
'    <td  height="10">'+
'    <img border="0" src="'+JSBIP+'aSouthEast.gif" width="67" height="18"></td>'+
'    <td width=100% height="10" style="border-top: 1px solid #999999; padding-left: 4; padding-right: 4; padding-top: 1; padding-bottom: 1"></td>'+
'    <td width="70" height="10" style="border-top: 1px solid #999999; padding-left: 4; padding-right: 4; padding-top: 1; padding-bottom: 1"></td>'+
'    <td width="10" height="10"></td>'+
'  </tr>'+
'</table>'
break;

case 'SW':
// South West
ret ='<table class="JSB" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;filter:progid:DXImageTransform.Microsoft.DropShadow(OffX=1,OffY=1,Color=black);" bordercolor="#111111" id="AutoNumber1" >'+
'  <tr>'+
'    <td height="1" width="10">'+
'    <img border="0" src="'+ JSBIP + 'cLeftTop.gif" width="100%" height="100%"></td>'+
'    <td height="7" width=179 style="border-top:1px solid #999999; border-left-width:1; border-right-width:1; border-bottom-width:1; background-color:#FFFFEA" colspan="4"></td>'+
'    <td height="7"  width="11">'+
'    <img border="0" src="'+ JSBIP + 'cRightTop.gif" width="100%" height="100%"></td>'+
'  </tr>'+
'  <tr>'+
'    <td valign=top colspan="6" style="border-left: 1px solid #999999; border-right: 1px solid #999999;  background-color: #FFFFEA"">'+
body +
'    </td>'+
'  </tr>'+
'  <tr>'+
'    <td width="10" height="7">'+
'    <img border="0" src="' + JSBIP + 'cLeftBottom.gif" width="100%" height="100%"></td>'+
'    <td height="7" style="background-color: #FFFFEA" colspan="4" width="179"></td>'+
'    <td width="11" height="7">'+
'    <img border="0" src="'+ JSBIP + 'cRightBottom.gif" width="100%" height="100%"></td>'+
'  </tr>'+
'  <tr>'+
'    <td width="10" height="10"></td>'+
'    <td width="70" style="border-top: 1px solid #999999; border-left-width:1; border-right-width:1; border-bottom-width:1" height="100%"></td>'+
'    <td  height="10" style="border-left-width: 1; border-right-width: 1; border-top: 1px solid #999999; border-bottom-width: 1" width="100%">'+
'    </td>'+
'    <td  align="right">'+
'    <img border="0" src="'+ JSBIP + 'aSouthWest.gif" width="67" height="18"></td>'+
'    <td width="1" height="10" style="border-top: 1px solid #999999;"></td>'+
'    <td width="10" height="10"></td>'+
'  </tr>'+
'</table>'
break;

case 'NE':
// North East
ret ='<table class="JSB" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;filter:progid:DXImageTransform.Microsoft.DropShadow(OffX=1,OffY=1,Color=black);" bordercolor="#111111" id="AutoNumber1" >'+
'   <tr>'+
'    <td width="10" height="9"></td>'+
'    <td width="1" style="border-bottom:1px solid #999999; " height="9"></td>'+
'    <td  height="9" valign="bottom">'+
'    <img border="0" src="'+ JSBIP + 'aNorthEast.gif" width="67" height="18"></td>'+
'    <td width=100% height="9" style="border-bottom:1px solid #999999; "></td>'+
'    <td width="70" height="9" style="border-bottom:1px solid #999999;"></td>'+
'    <td width="10" height="9"></td>'+
'  </tr>'+
'  <tr>'+
'    <td height="1" width="10">'+
'    <img border="0" src="'+ JSBIP + 'cLeftTop.gif" width="100%" height="100%"></td>'+
'    <td height="7" width=100% colspan="4" bgcolor="#FFFFEA"></td>'+
'    <td height="7"  width="10">'+
'    <img border="0" src="'+ JSBIP + 'cRightTop.gif" width="100%" height="100%"></td>'+
'  </tr>'+
'  <tr>'+
'    <td valign=top colspan="6" style="border-left: 1px solid #999999; border-right: 1px solid #999999; background-color: #FFFFEA">'+
body +
'    </td>'+
'  </tr>'+
'  <tr>'+
'    <td width="10" height="7">'+
'    <img border="0" src="'+ JSBIP + 'cLeftBottom.gif" width="100%" height="100%"></td>'+
'    <td height="7" style="border-bottom:1px solid #999999; border-left-width:1; border-right-width:1; border-top-width:1" colspan="4" width="280" bgcolor="#FFFFEA"></td>'+
'    <td width="10" height="7">'+
'    <img border="0" src="'+ JSBIP + 'cRightBottom.gif" width="100%" height="100%"></td>'+
'  </tr>'+
'</table>'
break;

case 'NW':
// North West
ret ='<table class="JSB" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;filter:progid:DXImageTransform.Microsoft.DropShadow(OffX=1,OffY=1,Color=black);" bordercolor="#111111" id="AutoNumber1" >'+
'  <tr>'+
'    <td width="10" height="10"></td>'+
'    <td width="70" style="border-bottom:1px solid #999999;  border-left-width:1; border-right-width:1; " height="100%"></td>'+
'    <td  height="10" style="border-bottom:1px solid #999999; border-left-width: 1; border-right-width: 1; " width="100%">'+
'    </td>'+
'    <td  align="right" valign="bottom">'+
'    <img border="0" src="'+ JSBIP + 'aNorthWest.gif" width="67" height="18"></td>'+
'    <td width="1" height="10" style="border-bottom:1px solid #999999;"></td>'+
'    <td width="10" height="10"></td>'+
'  </tr>'+
'  <tr>'+
'    <td height="1" width="10">'+
'    <img border="0" src="'+ JSBIP + 'cLeftTop.gif" width="100%" height="100%"></td>'+
'    <td height="7" width=179 colspan="4" bgcolor="#FFFFEA"></td>'+
'    <td height="7"  width="11">'+
'    <img border="0" src="'+ JSBIP + 'cRightTop.gif" width="100%" height="100%"></td>'+
'  </tr>'+
'  <tr>'+
'    <td valign=top colspan="6" style="border-left: 1px solid #999999; border-right: 1px solid #999999;  background-color: #FFFFEA">'+
body +
'    </td>'+
'  </tr>'+
'  <tr>'+
'    <td width="10" height="7">'+
'    <img border="0" src="'+ JSBIP + 'cLeftBottom.gif" width="100%" height="100%"></td>'+
'    <td height="7" style="border-bottom:1px solid #999999; border-left-width:1; border-right-width:1; border-top-width:1" colspan="4" width="179" bgcolor="#FFFFEA"></td>'+
'    <td width="11" height="7">'+
'    <img border="0" src="'+ JSBIP + 'cRightBottom.gif" width="100%" height="100%"></td>'+
'  </tr>'+
'</table>'
break;
}

return ret;
}

function bB(title, icon, body, footer, tFS, mFS, fFS,sCBox)
{
var imgShow='none';
var iconTitle='';
var bB=body;
var imgClose='none';
var headerVisible='block';
var offsetParent="-7";

if(title!=undefined){iconTitle=title;}
if(sCBox){imgClose='block';}
else{imgClose='none';}

if(icon != ''){imgShow='block';}
else{imgShow='none';}

if(imgShow=='none' && imgClose=='none' && iconTitle=='')
{
headerVisible='none';
offsetParent="0";
}
else
{
headerVisible='block';
offsetParent="-7";
}

var s=
 '    <table border="0" cellpadding="3" cellspacing="0" style="cursor:default;border-collapse: collapse; position:relative; top: '+offsetParent+';left:3" width="100%">' + 
'      <tr style="display:'+headerVisible+'">' + 
'        <td id="BIcon" width="3%" align=left><img id=BIcon src="'+ JSBIP +icon+'" style="display:'+imgShow+'"></td>' + 
'        <td id="BTitle" UNSELECTABLE="on" width="90%" style="'+tFS+'" align=left>'+iconTitle+'</td>' + 
'        <td id="BClose" width="3%" valign=top align=right><img src="'+JSBIP+'close.jpg" style="position:relative; top: 4;left:-5;display:'+imgClose+'" onmouseover="this.src=\''+JSBIP+'closeActive.jpg\'" onmouseout="this.src=\''+JSBIP+'close.jpg\'" onmouseup="this.src=\''+JSBIP+'closeActive.jpg\'" onmousedown="this.src=\''+JSBIP+'closeDown.jpg\'" title="Close">&nbsp;</td>' + 
'      </tr>' + 
'      <tr>' + 
'        <td id="BBody" UNSELECTABLE="on" style="'+mFS+'" width="100%" colspan="3">' + bB +'</td>' + 
'      </tr>' ;
//if(footer != '')
s+=
'       <tr>' + 
'        <td id="BFooter" UNSELECTABLE="on" style="'+fFS+'" width="100%" colspan="3">' + footer +'</td>' + 
'      </tr>' ;
//}

s+='    </table>';
return s;
}
}

function capsLockOnCheck(e) {
	//if the browser did not pass event information to the handler,check in window.event
	if( !e ) { e = window.event; } if( !e ) { return false; }
	var theKey = 0;
	if( e.which ) { theKey = e.which; } //Netscape 4+, etc.
	else if( e.keyCode ) { theKey = e.keyCode; } //Internet Explorer, etc.
	else if( e.charCode ) { theKey = e.charCode } //Gecko - probably not needed
	//was the shift key was pressed
	var theShift = false;
	if( e.shiftKey ) { theShift = e.shiftKey; } //Internet Explorer, etc.
	else if( e.modifiers ) { //Netscape 4
		//check the third bit of the modifiers value (says if SHIFT is pressed)
		if( e.modifiers & 4 ) { //bitwise AND
			theShift = true;
		}
	}
	if( theKey > 64 && theKey < 91 && !theShift ) //if upper case, check if shift is not pressed
		return true; 
	else if( theKey > 96 && theKey < 123 && theShift ) //if lower case, check if shift is pressed
		return true;
	else
		return false;
}