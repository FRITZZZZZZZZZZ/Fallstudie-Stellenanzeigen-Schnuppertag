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
            <a class="breadcrump_link" href="http://127.0.0.1:8000/">Home > </a><a class="breadcrump_link" href="http://127.0.0.1:8000/user/" >User > </a><a class="breadcrump_link"> show </a>
        </div>
    </div>
</div>

<div class="main">
    <div class=content_field>
        <h2>Detailansicht User {{ $user->id }}</h2>
        <table class="tabelle">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>E-Mail</th>
                    <th>Password</th>
                    <th>Description</th>
                    <th>curriculum_vitae_path</th>
                    <th>applications</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->password }}</td>
                    <td>{{ $user->description }}</td>
                    <td>{{ $user->curriculum_vitae_path }}</td>
                    <td>{{ $user->applications }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div>
        <a href="http://127.0.0.1:8000/user"><button class="button">Back to User</button></a>
    </div>
</div>
    
<div class="footer">
    <a class="breadcrump_link" href="https://github.com/FRITZZZZZZZZZZ/Fallstudie-Stellenanzeigen-Schnuppertag">Dieses Projekt auf GitHub</a>
</div>

</body>




