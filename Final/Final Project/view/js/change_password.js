function validate() {
				var x = document.getElementById('user_name').value;
				var y = document.getElementById('email').value;
				var z = document.getElementById('phone').value;
				var a = document.getElementById('password').value;
				var b = document.getElementById('repassword').value;
				 console.log(x);
				if(x == "") {
					document.getElementById('errorMsg').innerHTML = "Name cannot be empty";
					document.getElementById('errorMsg').style.color = "red";
					return false;	
				}
				else if(y == "") {
					document.getElementById('errorMsg').innerHTML = "Email cannot be empty";
					document.getElementById('errorMsg').style.color = "red";
					return false;	
				}
				else if(z == "") {
					document.getElementById('errorMsg').innerHTML = "Phone cannot be empty";
					document.getElementById('errorMsg').style.color = "red";
					return false;	
				}
				else if(a == "") {
					document.getElementById('errorMsg').innerHTML = "Password cannot be empty";
					document.getElementById('errorMsg').style.color = "red";
					return false;	
				}
				else if(b == "") {
					document.getElementById('errorMsg').innerHTML = "Password cannot be empty";
					document.getElementById('errorMsg').style.color = "red";
					return false;	
				}
				return true;