<head>
<link rel="stylesheet" href="\css\viewStyles.css">
</head>
<body class="body">
<div class="header">
    <div class="navigation">
        <div class="home">
            <a href="http://127.0.0.1:8000/"><button class="button">Fallstudie</button></a>
        </div>
        <div class="view_select">
            <a href="http://127.0.0.1:8000/job"><button class="button">Job</button></a>
            <a href="http://127.0.0.1:8000/company"><button class="button">Company</button></a>
            <a href="http://127.0.0.1:8000/category"><button class="button">Category</button></a>
            <a href="http://127.0.0.1:8000/user"><button class="button">User</button></a>
        </div>
    </div>
    <div class="breadcrumps">
        <div class="breadcrump_env">
            <a class="breadcrump_link" href="http://127.0.0.1:8000/">Home > </a><a class="breadcrump_link" >Category</a>
        </div>
    </div>
</div>

<div class="main">
    <div class=content_field>
        <h2>Detal Category {{ $category->id }}</h2>
        <table class="tabelle">
            <thead>
                <tr>
                    <th>Industry</th>
                    <th>Experience Level</th>
                    <th>Employement Type</th>
                    <th>id</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $category->industry }}</td>
                    <td>{{ $category->experience_level }}</td>
                    <td>{{ $category->employement_type }}</td>
                    <td>{{ $category->id }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div>
        <a href="http://127.0.0.1:8000/category"><button class="button">Back to Category</button></a>
    </div>
</div>
    
<div class="footer">
    <a class="breadcrump_link" href="https://github.com/FRITZZZZZZZZZZ/Fallstudie-Stellenanzeigen-Schnuppertag">Dieses Projekt auf GitHub</a>
</div>

</body>


