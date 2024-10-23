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
            <a class="breadcrump_link" href="http://127.0.0.1:8000/">Home > </a><a class="breadcrump_link" href="http://127.0.0.1:8000/job">Job > </a><a class="breadcrump_link"> show </a>
        </div>
    </div>
</div>

<div class="main">
    <div class=content_field>
        <h2>Detail Job {{ $job_offer->id }}</h2>
        <table class="tabelle">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Company id</th>
                    <th>Titel</th>
                    <th>Applicant id</th>
                    <th>Category id</th>
                    <th>location</th>
                    <th>responsibilities</th>
                    <th>requierements</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $job_offer->id }}</td>
                    <td>{{ $job_offer->company_id }}</td>
                    <td>{{ $job_offer->titel }}</td>
                    <td>{{ $job_offer->applicant_id }}</td>
                    <td>{{ $job_offer->category_id }}</td>
                    <td>{{ $job_offer->location }}</td>
                    <td>{{ $job_offer->responsibilities }}</td>
                    <td>{{ $job_offer->requierements }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div>
        <a href="http://127.0.0.1:8000/job_offer"><button class="button">Back to Job</button></a>
    </div>
</div>
    
<div class="footer">
    <a class="breadcrump_link" href="https://github.com/FRITZZZZZZZZZZ/Fallstudie-Stellenanzeigen-Schnuppertag">Dieses Projekt auf GitHub</a>
</div>

</body>


