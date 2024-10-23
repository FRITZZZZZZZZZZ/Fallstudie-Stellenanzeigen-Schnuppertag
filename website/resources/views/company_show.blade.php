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
            <a class="breadcrump_link" href="http://127.0.0.1:8000/">Home > </a><a class="breadcrump_link" href="http://127.0.0.1:8000/company/">Company > </a><a class="breadcrump_link"> show</a>
        </div>
    </div>
</div>

<div class="main">
    <div class=content_field>
        <h2>Detal Category {{ $company->id }}</h2>
        <table class="tabelle">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>description</th>
                    <th>post_ids</th>
                    <th>industry_category_ids</th>
                    <th>open_position_ids</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $company->id }}</td>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->description }}</td>
                    <td>{{ $company->post_ids }}</td>
                    <td>{{ $company->industry_category_ids }}</td>
                    <td>{{ $company->open_position_ids }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div>
        <a href="http://127.0.0.1:8000/company"><button class="button">Back to Category</button></a>
    </div>
</div>
    
<div class="footer">
    <a class="breadcrump_link" href="https://github.com/FRITZZZZZZZZZZ/Fallstudie-Stellenanzeigen-Schnuppertag">Dieses Projekt auf GitHub</a>
</div>

</body>


