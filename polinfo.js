function pol(Cit,Pol)
{
	var Ci = document.getElementById(Cit);
	var P = document.getElementById(Pol);
	P.innerHTML = "";
	var optionArray;
	if(Ci.value == "Select")
	{
	    optionArray = ["Select"];
	}
	else if(Ci.value == "Ahmednagar")
	{
	  optionArray = ["Select","Kotwali Police Station"];
	}
	else if(Ci.value == "Shirdi")
	{
	  optionArray = ["Select","Shirdi Police Station"];
	}
	else if(Ci.value == "Gangapur")
	{
	  optionArray = ["Select","Gangapur Police Station"];
	}
    else if(Ci.value == "Paithan")
	{
	  optionArray = ["Select","Paithan Police Station"];
	}
	else if(Ci.value == "Beed")
	{
	  optionArray = ["Select","Beed Police Station"];
	}
    else if(Ci.value == "Chausala")
	{
	  optionArray = ["Select","Chausala Police Station"];
	}
		else if(Ci.value == "Chalisgaon")
	{
	  optionArray = ["Select","Chalisgaon Police Station"];
	}
    else if(Ci.value == "Bhusawal")
	{
	  optionArray = ["Select","Bhusawal Police Station"];
	}
    else if(Ci.value == "Chicholi")
	{
	  optionArray = ["Select","Chicholi Police Station"];
	}
	else if(Ci.value == "Bhiwapur")
	{
	  optionArray = ["Select","Bhiwapur Police Station"];
	}
	else if(Ci.value == "Mowad")
	{
	  optionArray = ["Select","Mowad Police Station"];
	}
	else if(Ci.value == "Tekadi")
	{
	  optionArray = ["Select","Tekadi Police Station"];
	}
	else if(Ci.value == "Umred")
	{
	  optionArray = ["Select","Umred Police Station"];
	}
	else if(Ci.value == "Wadi")
	{
	  optionArray = ["Select","Wadi Police Station"];
	}
	else if(Ci.value == "Igatpuri")
	{
	  optionArray = ["Select","Igatpuri Police Station"];
	}
	else if(Ci.value == "Manmad")
	{
	  optionArray = ["Select","Manmad Police Station"];
	}
	else if(Ci.value == "Baramati")
	{
	  optionArray = ["Select","Baramati Police Station"];
	}
	else if(Ci.value == "Chinchawad")
	{
	  optionArray = ["Select","Chinchawad Police Station"];
	}
	else if(Ci.value == "Lonawala")
	{
	  optionArray = ["Select","Lonawala Police Station"];
	}
	else if(Ci.value == "Bhivpuri")
	{
	  optionArray = ["Select","Bhivpuri Police Station"];
	}
	else if(Ci.value == "Goregaon")
	{
	  optionArray = ["Select","Goregaon Police Station"];
	}
	else if(Ci.value == "Kamothe")
	{
	  optionArray = ["Select","Kamothe Police Station"];
	}
	else if(Ci.value == "Karjat")
	{
	  optionArray = ["Select","Karjat Police Station"];
	}
	else if(Ci.value == "Khopoli")
	{
	  optionArray = ["Select","Khopoli Police Station"];
	}
	else if(Ci.value == "Roha")
	{
	  optionArray = ["Select","Roha Police Station"];
	}
	else if(Ci.value == "Neral")
	{
	  optionArray = ["Select","Neral Police Station"];
	}
	else if(Ci.value == "Panvel")
	{
	  optionArray = ["Select","Panvel Police Station"];
	}
	else if(Ci.value == "Ambernath")
	{
	  optionArray = ["Select","Ambernath Police Station"];
	}
	else if(Ci.value == "Badlapur")
	{
	  optionArray = ["Select","Badlapur Police Station"];
	}
	else if(Ci.value == "Kalwa")
	{
	  optionArray = ["Select","Kalwa Police Station"];
	}
	else if(Ci.value == "Kalyan")
	{
	  optionArray = ["Select","Kalyan Police Station"];
	}
	else if(Ci.value == "Mumbra")
	{
	  optionArray = ["Select","Mumbra Police Station"];
	}
	else if(Ci.value == "Dombivli")
	{
	  optionArray = ["Select","Dombivli Police Station"];
	}
	else if(Ci.value == "Thane")
	{
	  optionArray = ["Select","Thane Police Station"];
	}
	else if(Ci.value == "Khoparkhairne")
	{
	  optionArray = ["Select","Khoparkhairne Police Station"];
	}
	else if(Ci.value == "Kasara")
	{
	  optionArray = ["Select","Kasara Police Station"];
	}
	else if(Ci.value == "Vashi")
	{
	  optionArray = ["Select","Vashi Police Station"];
	}
	else if(Ci.value == "Sanpada")
	{
	  optionArray = ["Select","Sanpada Police Station"];
	}
	else if(Ci.value == "Nerul")
	{
	  optionArray = ["Select","Nerul Police Station"];
	}
	for(var opt in optionArray)
	{
	  var newOption = document.createElement("option");
	  newOption.value = optionArray[opt];
	  newOption.innerHTML = optionArray[opt];
	  P.options.add(newOption);
	}
}