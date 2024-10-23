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
            <a class="breadcrump_link" href="http://127.0.0.1:8000/">Home > </a><a class="breadcrump_link" href="http://127.0.0.1:8000/user">User > </a><a class="breadcrump_link"> Create</a>
        </div>
    </div>
</div>

<div class="main">
    <div class="content_field">
        <h2>Create User</h2>
        <form class="form" method="POST">
        @csrf <!-- {{ csrf_field() }} -->
            <input type="text" name="name"  placeholder="name">
            <input type="text" name="email"  placeholder="email">
            <input type="text" name="password"  placeholder="password">
            <input type="text" name="description"  placeholder="description">
            <input type="text" name="curriculum_vitae_path"  placeholder="curriculum_vitae_path">
            <input type="text" name="applications" placeholder="applications">
            <input class="button" type="submit" value="create">
        </form>
    </div>

    <div>
        <a href="http://127.0.0.1:8000/user"><button class="button">Back to User</button></a>
    </div>
</div>
    
<div class="footer"><a class="breadcrump_link" href="https://github.com/FRITZZZZZZZZZZ/Fallstudie-Stellenanzeigen-Schnuppertag">Dieses Projekt auf GitHub</a></div>
</body>