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
    <div class="content_field">
        <h2>edit a Category</h2>
        <form class="form" method="POST">
        @csrf <!-- {{ csrf_field() }} -->
            <input type="hidden" name="id" readonly value={{ $user->id }}>
            <input class="input_field" type="text" name="name" value={{ $user->name }}>
            <input class="input_field" type="text" name="email" value={{ $user->email }}>
            <input class="input_field" type="text" name="password" value={{ $user->password }}>
            <input class="input_field" type="text" name="description" value={{ $user->description }}>
            <input class="input_field" type="text" name="curriculum_vitae_path" value={{ $user->curriculum_vitae_path }}>
            <input class="input_field" type="text" name="applications" value={{ $user->applications }}>
            <input class="button" type="submit" value="apply">
        </form>
        <a href="http://127.0.0.1:8000/user"><button class="custom_button">Back to User</button></a>
    </div>
</div>
    
<div class="footer"><a class="breadcrump_link" href="https://github.com/FRITZZZZZZZZZZ/Fallstudie-Stellenanzeigen-Schnuppertag">Dieses Projekt auf GitHub</a></div>
</body>