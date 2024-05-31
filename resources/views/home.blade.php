<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script>
        window.onload = function() {
            fetch('{{ route('api/v1/perfiles') }}') // Replace 'perfiles.get' with your actual route name
                .then(response => response.json())
                .then(data => {
                    displayPerfiles(data);
                })
                .catch(error => {
                    console.error('Error fetching profiles:', error);
                    // Handle errors (e.g., display an error message)
                });
        };

        function displayPerfiles(perfiles) {
            const tableBody = document.getElementById('perfiles-table-body');

            perfiles.forEach(perfil => {
                const tableRow = document.createElement('tr');

                const idCell = document.createElement('td');
                idCell.textContent = perfil.id;
                tableRow.appendChild(idCell);

                const nombreCell = document.createElement('td');
                nombreCell.textContent = perfil.nombre; // Replace with your property name
                tableRow.appendChild(nombreCell);

                // Add cells for other perfil properties as needed
                tableBody.appendChild(tableRow);
            });
        }
    </script>
</head>
<body>
	<div class="container">
	    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      		<a class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
	      		Página privada @auth de {{Auth::user()->name}} @endauth
	    	</a>
	    	<div class="col-md-3 text-end">
	        	<a href="/"><button type="button" class="btn btn-outline-primary me-2">Salir</button></a>
	        </div>
	    </header>

        <table id="perfiles-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                </tr>
        </thead>
        <tbody id="perfiles-table-body">
        </tbody>
    </table>
	</div>
    
	<article class="container">
		<h2>Tu sección privada</h2>
	</article>
</body>
</html>