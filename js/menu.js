// JavaScript Document

function fullScreen(theURL) {
	
	window.open(theURL, '', 'fullscreen=yes, scrollbars=auto');
}

function hidemenu(){
	
	document.getElementById('top').style.opacity='0';
	document.getElementById('show').style.opacity='1';
	document.getElementById('show').style.visibility='visible';

}

function showmenu(){

	document.getElementById('top').style.opacity='1';
	document.getElementById('show').style.opacity='0';
	document.getElementById('show').style.visibility='hidden';	

}

function environment(){
	
	document.getElementById('title-about').style.width='0px';	
	document.getElementById('environment').style.color='#fff';	
	document.getElementById('content-service').style.opacity='0';
	document.getElementById('service').style.color='#8e8e8e';		
	document.getElementById('content-envir').style.opacity='1';	
	document.getElementById('member').style.color='#8e8e8e';	
	document.getElementById('content-member').style.opacity='0';	
}

function service(){
	
	document.getElementById('title-about').style.width='0px';	
	document.getElementById('service').style.color='#fff';	
	document.getElementById('content-service').style.opacity='1';	
	document.getElementById('content-envir').style.opacity='0';
	document.getElementById('environment').style.color='#8e8e8e';		
	document.getElementById('member').style.color='#8e8e8e';	
	document.getElementById('content-member').style.opacity='0';	
}

function member(){
	
	document.getElementById('title-about').style.width='0px';	
	document.getElementById('member').style.color='#fff';	
	document.getElementById('content-member').style.opacity='1';	
	document.getElementById('content-envir').style.opacity='0';
	document.getElementById('environment').style.color='#8e8e8e';		
	document.getElementById('content-service').style.opacity='0';
	document.getElementById('service').style.color='#8e8e8e';
	
}

function mainabout(){
	
	document.getElementById('content-envir').style.opacity='0';	
	document.getElementById('environment').style.color='#8e8e8e';	
	document.getElementById('content-service').style.opacity='0';
	document.getElementById('service').style.color='#8e8e8e';
	document.getElementById('member').style.color='#8e8e8e';	
	document.getElementById('content-member').style.opacity='0';			
	document.getElementById('title-about').style.width='830px';
}