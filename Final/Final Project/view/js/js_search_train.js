function search_train(){
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if(this.readyState == 4 && this.status == 200) {
					console.log("test");

					document.getElementById('mid').innerHTML = xhttp.responseText;
				}
			}
			xhttp.open("GET", "http://localhost/final_rms/view/search_train.php", true);
			xhttp.send();
		}
