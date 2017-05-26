function configureDropDownLists(ddl1,ddl2) {
	var HS1 = ['All', 'SMT', 'JHR', 'SSL'];
	var HS2 = ['All', 'MJP', 'BMK', 'SMC'];
	
	switch (ddl1.value) {
		case 'HS 1':
			ddl2.options.length = 0;
			for (i = 0; i < HS1.length; i++) {
				createOption(ddl2, HS1[i], HS1[i]);
			}
		break;
		case 'HS 2':
			ddl2.options.length = 0; 
			for (i = 0; i < HS2.length; i++) {
				createOption(ddl2, HS2[i], HS2[i]);
			}
		break;
		default:
			ddl2.options.length = 0;
		break;
	}
}

function createOption(ddl, text, value) {
	var opt = document.createElement('option');
	opt.value = value;
	opt.text = text;
	ddl.options.add(opt);
}
