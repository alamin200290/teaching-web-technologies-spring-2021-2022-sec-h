
let name = "alamin";
let student = ['abc','xyz',1];
console.log(student);
//alert(name);

function f1(name){
	document.getElementsByTagName('h1')[0].innerHTML = name;
}

function f2(){
	let name = document.getElementById('name').value;
	f1(name);
}

function username(){
	let username = document.getElementById('name').value;
	if(username == ""){
		document.getElementById('d1').innerHTML = "null value...try again.";
	}else{
		document.getElementById('d1').innerHTML = "";
	}
}

function move(){
	let current = document.getElementById('d1').style.left;
	
	if(current == ""){
		document.getElementById('d1').style.left = "10px";
		setTimeout(move, 500); 	
	}else{
		let num = parseInt(current.replace('px', ''));
		num +=10;

		/*if(num%20){
			document.getElementById('d1').style.background = "red";
		}else{
			document.getElementById('d1').style.background = "green";
		}*/

		let color = "#"+Math.floor(Math.random() * 100) +""+ 1+ Math.floor(Math.random() * 100) + 1;
		//(color);

		document.getElementById('d1').style.background = color;
		document.getElementById('d1').style.left = num+"px";	
		setTimeout(move, 500);
	}
}

function ajax(){
		let username = document.getElementById('name').value;

		let student = {
			id: 12,
			name: 'alamin',
			email: 'xyz@aiub.edu'
		};

		let json = JSON.stringify(student);

		let http = new XMLHttpRequest();
		http.open('GET', 'abc.php?myjson='+json, true);
		http.send();
		http.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200 ){
				
				let obj = JSON.parse(this.responseText);
				console.log(obj);
				alert(obj.email);

				//document.getElementsByTagName('h1')[0].innerHTML= this.responseText;
			}
		}
	}
