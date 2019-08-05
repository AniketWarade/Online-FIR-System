function cit(Di,Ci)
  {
	  var D = document.getElementById(Di);
	  var C = document.getElementById(Ci);
	  C.innerHTML = "";
	  var optionArray;
	  if(D.value == "Ahmednagar")
	  {
		  optionArray = ["Select","Ahmednagar","Shirdi"];
	  }
	  else if(D.value == "Aurangabad")
	  {
		  optionArray = ["Select","Gangapur","Paithan"];
	  }
	  else if(D.value == "Beed")
	  {
		  optionArray = ["Select","Beed","Chausala"];
	  }
	  else if(D.value == "Jalgaon")
	  {
		  optionArray = ["Select","Chalisgaon","Bhusawal"];
	  }
	  else if(D.value == "Nagpur City")
	  {
		  optionArray = ["Select","Chicholi","Bhiwapur","Mowad","Tekadi","Umred","Wadi"];
	  }
	  else if(D.value == "Nashik City")
	  {
		  optionArray = ["Select","Igatpuri","Manmad"];
	  }
	  else if(D.value == "Pune City")
	  {
		  optionArray = ["Select","Baramati","Chinchwad","Lonawala"];
	  }
	  else if(D.value == "Raigad")
	  {
		  optionArray = ["Select","Bhivpuri","Goregaon","Kamothe","Karjat","Khopoli","Roha","Neral","Panvel"];
	  }
	  else if(D.value == "Thane City")
	  {
		  optionArray = ["Select","Ambernath","Badlapur","Kalwa","Kalyan","Mumbra","Dombivli","Thane","Khoparkhairne","Kasara","Vashi","Sanpada","Nerul"];
	  }
	  for(var opt in optionArray)
	  {
		  var newOption = document.createElement("option");
		  newOption.value = optionArray[opt];
		  newOption.innerHTML = optionArray[opt];
		  C.options.add(newOption);
	  }
  }