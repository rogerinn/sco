	function Mudar(ad) {
	var mostar = document.getElementById(ad).style.display; 
	if (mostar == 'none') 
		document.getElementById(ad).style.display = 'block';
	else 
		document.getElementById(ad).style.display = 'none';
}
