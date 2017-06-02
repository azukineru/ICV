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