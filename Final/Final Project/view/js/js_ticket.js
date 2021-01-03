function purchase_ticket() {
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if(this.readyState == 4 && this.status == 200) {
					console.log("test");

					document.getElementById('mid').innerHTML = xhttp.responseText;
				}
			}
			xhttp.open("GET", "http://localhost/final_rms/controller/action_purchase_ticket.php", true);
			xhttp.send();
		}
function return_ticket() {
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if(this.readyState == 4 && this.status == 200) {
					document.getElementById('mid').innerHTML = xhttp.responseText;
				}
			}
			xhttp.open("GET", "http://localhost/final_rms/controller/action_return_ticket.php", true);
			xhttp.send();
		}
function active_ticket() {
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if(this.readyState == 4 && this.status == 200) {
					document.getElementById('mid').innerHTML = xhttp.responseText;
				}
			}
			xhttp.open("GET", "http://localhost/final_rms/controller/action_active_ticket.php", true);
			xhttp.send();
		}
function purchase_history() {
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if(this.readyState == 4 && this.status == 200) {
					document.getElementById('mid').innerHTML = xhttp.responseText;
				}
			}
			xhttp.open("GET", "http://localhost/final_rms/controller/action_purchase_history.php", true);
			xhttp.send();
		}
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
