window.onload = initAll;
var xhr = false;
var dataArray = new Array();
var url = "asset/grounds.xml"

function initAll() {
	if (window.XMLHttpRequest) {
		xhr = new XMLHttpRequest();
	}
	else {
		if (window.ActiveXObject) {
			try {
				xhr = new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch (e) { }
		}
	}

	if (xhr) {
		xhr.onreadystatechange = setDataArray;
		xhr.open("GET", url, true);
		xhr.send(null);
	}
	else {
		alert("Sorry, but I couldn't create an XMLHttpRequest");
	}

	var allDivs = document.getElementsByTagName("div");
	for (var i=2; i<allDivs.length; i++) {
		
		allDivs[i].onmouseover = featureOneDiv;
		allDivs[i].onmouseout = function() {
			document.getElementById("detail").style.visibility = "hidden";}
			
		  if(i==7){ break;}
	}
}

function setDataArray() {
	if (xhr.readyState == 4) {
		if (xhr.status == 200) {
			if (xhr.responseXML) {
				var allData = xhr.responseXML.getElementsByTagName("ground");

				for (var i=0; i<allData.length; i++) {
					var tempObj = new Object;
					tempObj.firstName = getVal(allData[i],"firstName");
					tempObj.lastName = getVal(allData[i],"lastName");
					tempObj.seat = getVal(allData[i],"seat");
					tempObj.Contact = getVal(allData[i],"Contact");
					tempObj.Type = getVal(allData[i],"Type");
					dataArray[i] = tempObj;
				}
			}
		}
		else {
			alert("There was a problem with the request " + xhr.status);
		}
	}
	
	function getVal(theData,theTag) {
		return theData.getElementsByTagName(theTag)[0].firstChild.nodeValue;
	}
}

function featureOneDiv(evt) {
	var allDivs = document.getElementsByTagName("div");
	for (var i=2; i<allDivs.length; i++) {
		allDivs[i].className = "";
	}

	var theDiv = (evt) ? evt.target : window.event.srcElement;
	theDiv.className = "pickedDiv";
	var theStudent = null;

	for (var i=0; i<dataArray.length; i++) {
		if (theDiv.id == dataArray[i].seat) {
			theStudent = dataArray[i];
		}
	}
	if (theStudent) {
		var studentInfo = document.getElementById("detail");
		var theMsg = "<span id='closeBox'>X</span> <h3>";
		theMsg += theStudent.firstName + " " + theStudent.lastName;
		theMsg += "</h3>Seat: "  + theStudent.seat;
		theMsg += "<br />Ground Type: "  + theStudent.Type;
		theMsg += "<br />Contact No : "  + theStudent.Contact;
		theMsg += "<br /> <img src=images/grounds/"+theStudent.seat+".gif> ";
		
		studentInfo.innerHTML = theMsg;
		studentInfo.style.top = (theDiv.offsetTop-5) + "px";
		studentInfo.style.left = (theDiv.offsetLeft+35) + "px";
		studentInfo.style.visibility = "visible";

		document.getElementById("closeBox").onclick = function() {
			document.getElementById("detail").style.visibility = "hidden";
		}
	}
}
