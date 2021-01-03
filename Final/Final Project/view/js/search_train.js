function myFunction() {
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if(this.readyState == 4 && this.status == 200) {
					console.log("Hello");

					document.getElementById('mid').innerHTML = xhttp.responseText;
				}
			}
			xhttp.open("GET", "test.php", true);
			xhttp.send();
		}