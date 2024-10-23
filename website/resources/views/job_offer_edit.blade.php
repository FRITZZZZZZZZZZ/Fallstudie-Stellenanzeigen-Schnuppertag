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
            <a class="breadcrump_link" href="http://127.0.0.1:8000/">Home > </a><a class="breadcrump_link" href="http://127.0.0.1:8000/job">Job > </a><a class="breadcrump_link">edit</a>
        </div>
    </div>
</div>

<div class="main">
    <div class="content_field">
        <h2>edit a Job</h2>
        <form class="form" method="POST">
        @csrf <!-- {{ csrf_field() }} -->
            <input class="input_field" type="text" name="company_id" value={{ $job_offer->company_id }}>
            <input class="input_field" type="text" name="titel" value={{ $job_offer->titel }}>
            <input class="input_field" type="text" name="applicant_id" value={{ $job_offer->applicant_id }}>
            <input class="input_field" type="text" name="category_id" value={{ $job_offer->category_id }}>
            <input class="input_field" type="text" name="location" value={{ $job_offer->location }}>
            <input class="input_field" type="text" name="responsibilities" value={{ $job_offer->responsibilities }}>
            <input class="input_field" type="text" name="requierements" value={{ $job_offer->requierements }}>
            <input class="button" type="submit" value="apply">
        </form>
        <a href="http://127.0.0.1:8000/job_offer"><button class="custom_button">Back to Job</button></a>
    </div>
</div>
    
<div class="footer"><a class="breadcrump_link" href="https://github.com/FRITZZZZZZZZZZ/Fallstudie-Stellenanzeigen-Schnuppertag">Dieses Projekt auf GitHub</a></div>
</body>