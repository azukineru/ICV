function configureDropDownLists(ddl1,ddl2,ddl3) {
	var All = ['All', 'SMT', 'JHR', 'SSL', 'MJP', 'BMK', 'SMC'];
	var HS1 = ['All', 'SMT', 'JHR', 'SSL'];
	var HS2 = ['All', 'MJP', 'BMK', 'SMC'];
	
	var BF = ['All', 'Kuadran 1 (Retensi)', 'Kuadran 2 (Akuisisi)', 'Kuadran 3 (Penetrasi)'];
	
	switch (ddl1.value) {
		case 'All':
			ddl2.options.length = 0;
			for (i = 0; i < All.length; i++) {
				createOption(ddl2, All[i], All[i]);
			}
			ddl3.options.length = 0;
			for (i = 0; i < BF.length; i++) {
				createOption(ddl3, BF[i], BF[i]);
			}
		break;
		case 'HS 1':
			ddl2.options.length = 0;
			for (i = 0; i < HS1.length; i++) {
				createOption(ddl2, HS1[i], HS1[i]);
			}
			ddl3.options.length = 0;
			for (i = 0; i < BF.length; i++) {
				createOption(ddl3, BF[i], BF[i]);
			}
		break;
		case 'HS 2':
			ddl2.options.length = 0; 
			for (i = 0; i < HS2.length; i++) {
				createOption(ddl2, HS2[i], HS2[i]);
			}
			ddl3.options.length = 0;
			for (i = 0; i < BF.length; i++) {
				createOption(ddl3, BF[i], BF[i]);
			}
		break;
		default:
			ddl2.options.length = 0;
			ddl3.options.length = 0;
		break;
	}
}

function createOption(ddl, text, value) {
	var opt = document.createElement('option');
	opt.value = value;
	opt.text = text;
	ddl.options.add(opt);
}
