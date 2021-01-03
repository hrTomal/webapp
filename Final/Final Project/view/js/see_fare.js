function see_fare() {
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if(this.readyState == 4 && this.status == 200) {
					document.getElementById('mid').innerHTML = xhttp.responseText;
				}
			}
			xhttp.open("GET", "http://localhost/final_rms/controller/action_see_fare.php", true);
			xhttp.send();
		}