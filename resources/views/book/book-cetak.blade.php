<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Category</title>
    <style>
        .table-data {
            border-collapse: collapse;
            width: 100%;
        }

        .table-data tr th,
        .table-data tr td {
            border: 1px solid black;
            font-size: 11pt;
            padding: 10px 20px;
            text-align: center;
        }

        .table-data tr th {
            background-color: #2c3e50;
            color: white;
        }

        .table-data tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .table-data tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>

<body>
    <h3>Data Book</h3>
    <table class="table-data">
        <thead>
            <tr>
                <th width=8.02%>ID Book</th>
                <th width=28.8%>Book Title</th>
                <th width=19.4%>Book Author</th>
                <th width=9.55%>Book Publisher</th>
                <th width=19.55%>Publication Year</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @forelse ($book as $show)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $show->book_title }}</td>
                    <td>{{ $show->book_author }}</td>
                    <td>{{ $show->book_publisher }}</td>
                    <td>{{ $show->publication_year }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" align="center">Tidak ada data</td>
                </tr>
            @endforelse
        </tbody>
</body>

</html>
