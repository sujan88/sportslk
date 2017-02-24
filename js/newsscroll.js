// JavaScript Document
var tickercontent=new Array()
			tickercontent[0]='<a href="http://www.javascriptkit.com">JavaScript Kit</a><br />Comprehensive JavaScript tutorials and over 400+ free scripts!'
			tickercontent[1]='<a href="http://www.codingforums.com">Coding Forums</a><br />Web coding and development forums.'
			tickercontent[2]='<a href="http://www.cssdrive.com" target="_new">CSS Drive</a><br />Categorized CSS gallery and examples.'
	


		
/***********************************************
			* DHTML Ticker script- © Dynamic Drive (www.dynamicdrive.com)
			* This notice MUST stay intact for legal use
			* Visit http://www.dynamicdrive.com/ for this script and 100s more.
			***********************************************/
			
			function domticker(content, divId, divClass, delay, fadeornot){
			this.content=content
			this.tickerid=divId //ID of master ticker div. Message is contained inside first child of ticker div
			this.delay=delay //Delay between msg change, in miliseconds.
			this.mouseoverBol=0 //Boolean to indicate whether mouse is currently over ticker (and pause it if it is)
			this.pointer=1
			this.opacitystring=(typeof fadeornot!="undefined")? "width: 100%; filter:progid:DXImageTransform.Microsoft.alpha(opacity=100); -moz-opacity: 1" : ""
			if (this.opacitystring!="") this.delay+=500 //add 1/2 sec to account for fade effect, if enabled
			this.opacitysetting=0.2 //Opacity value when reset. Internal use.
			document.write('<div id="'+divId+'" class="'+divClass+'"><div style="'+this.opacitystring+'">'+content[0]+'</div></div>')
			var instanceOfTicker=this
			setTimeout(function(){instanceOfTicker.initialize()}, delay)
			}
			
			domticker.prototype.initialize=function(){
			var instanceOfTicker=this
			this.contentdiv=document.getElementById(this.tickerid).firstChild //div of inner content that holds the messages
			document.getElementById(this.tickerid).onmouseover=function(){instanceOfTicker.mouseoverBol=1}
			document.getElementById(this.tickerid).onmouseout=function(){instanceOfTicker.mouseoverBol=0}
			this.rotatemsg()
			}
			
			domticker.prototype.rotatemsg=function(){
			var instanceOfTicker=this
			if (this.mouseoverBol==1) //if mouse is currently over ticker, do nothing (pause it)
			setTimeout(function(){instanceOfTicker.rotatemsg()}, 100)
			else{
			this.fadetransition("reset") //FADE EFFECT- RESET OPACITY
			this.contentdiv.innerHTML=this.content[this.pointer]
			this.fadetimer1=setInterval(function(){instanceOfTicker.fadetransition('up', 'fadetimer1')}, 100) //FADE EFFECT- PLAY IT
			this.pointer=(this.pointer<this.content.length-1)? this.pointer+1 : 0
			setTimeout(function(){instanceOfTicker.rotatemsg()}, this.delay) //update container
			}
			}
			
			// -------------------------------------------------------------------
			// fadetransition()- cross browser fade method for IE5.5+ and Mozilla/Firefox
			// -------------------------------------------------------------------
			
			domticker.prototype.fadetransition=function(fadetype, timerid){
			var contentdiv=this.contentdiv
			if (fadetype=="reset")
			this.opacitysetting=0.2
			if (contentdiv.filters && contentdiv.filters[0]){
			if (typeof contentdiv.filters[0].opacity=="number") //IE6+
			contentdiv.filters[0].opacity=this.opacitysetting*100
			else //IE 5.5
			contentdiv.style.filter="alpha(opacity="+this.opacitysetting*100+")"
			}
			else if (typeof contentdiv.style.MozOpacity!="undefined" && this.opacitystring!=""){
			contentdiv.style.MozOpacity=this.opacitysetting
			}
			else
			this.opacitysetting=1
			if (fadetype=="up")
			this.opacitysetting+=0.2
			if (fadetype=="up" && this.opacitysetting>=1)
			clearInterval(this[timerid])
			}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}