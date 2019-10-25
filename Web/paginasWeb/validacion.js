function login(){
	var user = document.getElementById('user').value;
	var pass = document.getElementById('pass').value;

	if (user == '' && pass == '') {
		document.getElementById('mensaje').innerHTML = 'El campo user y password son obligatorios';
		document.getElementById('mensaje').style.display = 'block';
		document.getElementById('user').style.border = '2px solid red';
		document.getElementById('pass').style.border = '2px solid red';
		return false;
	}else if(user == ''){
		document.getElementById('mensaje').innerHTML = 'El campo user es obligatorio';
		document.getElementById('mensaje').style.display = 'block';
		document.getElementById('user').style.border = '2px solid red';
		return false;
	}else if(pass == ''){
		document.getElementById('mensaje').innerHTML = 'El campo password es obligatorio';
		document.getElementById('mensaje').style.display = 'block';
		document.getElementById('pass').style.border = '2px solid red';
		return false;
	}else{
		return true;
	}
}

function subir(){
	var user = document.getElementById('user').value;
	var file = document.getElementById('file').value;

	if (user == '' && file == '') {
		document.getElementById('mensaje').innerHTML = 'El campo nombre y foto son obligatorios';
		document.getElementById('mensaje').style.display = 'block';
		document.getElementById('user').style.border = '2px solid red';
		document.getElementById('file').style.border = '2px solid red';
		return false;
	}else if(user == ''){
		document.getElementById('mensaje').innerHTML = 'El campo nombre es obligatorio';
		document.getElementById('mensaje').style.display = 'block';
		document.getElementById('user').style.border = '2px solid red';
		return false;
	}else if(file == ''){
		document.getElementById('mensaje').innerHTML = 'El campo de foto es obligatorio';
		document.getElementById('mensaje').style.display = 'block';
		document.getElementById('file').style.border = '2px solid red';
		return false;
	}else{
		return true;
	}
}