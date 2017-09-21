function onEva_in(value){
	var eva_tv = document.getElementById('eva_tv');
	var numValue = parseFloat(value) / 100;
	eva_tv.innerHTML = (numValue * 5).toFixed(1);
	changeColor(numValue);
	eva_tv.style.color = colorCode;
}
function onEva_change(value){
	var eva_tv = document.getElementById('eva_tv');
	var numValue = parseFloat(value) / 100;
	eva_tv.innerHTML = (numValue * 5).toFixed(1);
	changeColor(numValue);
	eva_tv.style.color = colorCode;
}

var colorCode;
function changeColor(num){
	var colorNum = (128 * num) + 128;
	var eva_tv = document.getElementById('eva_tv');
	colorCode = "#" + parseInt(colorNum).toString(16) + "0000";
	console.log(colorCode);
}