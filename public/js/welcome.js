window.onload = function()
	{
		document.getElementById("btn-login").onclick = login();
	}

function login()
	{
		window.location.href = '{{ route("login"); }}';
	}