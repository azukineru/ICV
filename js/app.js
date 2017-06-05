// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();

// Show Cluster List
var viewListCluster = document.getElementById('viewListCluster');
viewListCluster.onclick = function(){
	document.getElementById('second-column').style.display = 'block';
}

// Show ODC List
//var $ListCluster= document.getElementsByClassName('ListCluster');
function showODCList(cname) {
    document.getElementById('third-column').style.display = 'block';
	var aodc = document.getElementsByClassName('odc');
	for(var i=0; i<aodc.length; i++){
		aodc[i].style.display = 'none';
	}
	
	var bodc = document.getElementsByClassName(cname);
	for(var i=0; i<bodc.length; i++){
		bodc[i].style.display = 'block';
	}
	//document.getElementsByName(cname).style.display = 'block';
	//document.getElementById('cname').value = cname;
}