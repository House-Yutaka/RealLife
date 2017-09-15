var byList = new Array(false, false);

function checkSubmit(byList){
	var submitBtn = document.getElementById('fake_submit');
	var submitInput = document.getElementById('Submit');
	var submitIcon = document.getElementById('submitIcon');
	submitInput.disabled = true;
	submitBtn.disabled = true;
	submitIcon.classList.remove("animated");

	console.log(byList);
	if (byCheckList(byList)) {
		submitInput.disabled = false;
		submitBtn.disabled = false;
		submitIcon.classList.add("animated");
	}
}

function byCheckList(byList){
	for (var i = 0; i < this.byList.length; i++)
		if(!this.byList[i])
			return false;
	return true;
}

function onUsername(value){
	var tv = document.getElementById('inputUsername');
	byList[0] = false;
	if (tv.value != "")
		byList[0] = true;
	checkSubmit(byList);
}

function onPassword(value){
	var tv = document.getElementById('inputPassword');
	byList[1] = false;
	if (tv.value != "")
		byList[1] = true;
	checkSubmit(byList);
}