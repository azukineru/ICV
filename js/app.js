// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();

// Show Cluster List
var viewListCluster = document.getElementById('viewListCluster');
viewListCluster.onclick = function(){
	document.getElementById('second-column').style.display = 'block';
}

// Show ODC List
var $ListCluster= document.getElementsByClassName('ListCluster');
function showODCList() {
    document.getElementById('third-column').style.display = 'block';
}
for(var i=0; i<$ListCluster.length; i++) {
    $ListCluster[i].onclick = showODCList;
}

// Get the modal
var modal = document.getElementById('myModal');
var isMobile = false;

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");

if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
	isMobile = true;
}

if( isMobile == false){
	img.onclick = function(){
		modal.style.display = "block";
		modalImg.src = this.src;
		captionText.innerHTML = this.alt;
	}
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
	modal.style.display = "none";
}