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
            <a class="breadcrump_link" href="http://127.0.0.1:8000/">Home > </a><a class="breadcrump_link">Category</a>
        </div>
    </div>
</div>

<div class="main">
    
    <div>
        <a href="http://127.0.0.1:8000/category/create"><button class="button">Create new Category</button></a>
    </div>

    <div class=content_field>
        <h2>Listenansicht Category</h2>
        <table class="tabelle">
            <thead>
                <tr>
                    <th>Industry</th>
                    <th>Experience Level</th>
                    <th>Employement Type</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorys as $category)
                <tr>
                    <td>{{ $category->industry_id }}</td>
                    <td>{{ $category->experience_level }}</td>
                    <td>{{ $category->employement_type }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class=content_field>
            <h2>Detailansicht Category</h2>
            <table class="tabelle">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Industry</th>
                        <th>Experience Level</th>
                        <th>Employement Type</th>
                    </tr>
                </thead>
                
                <tbody>
                @foreach ($categorys as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->industry_id }}</td>
                        <td>{{ $category->experience_level }}</td>
                        <td>{{ $category->employement_type }}</td>
                    </tr>
                @endforeach
            </tbody>
            </table>
    </div>
</div>
    
<div class="footer">
    <a class="breadcrump_link" href="https://github.com/FRITZZZZZZZZZZ/Fallstudie-Stellenanzeigen-Schnuppertag">Dieses Projekt auf GitHub</a>
</div>

</body>