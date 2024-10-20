
<div>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Time</th>
            <th>Experience</th>
            <th>Location</th>
        </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{ {$category->id} }</td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
