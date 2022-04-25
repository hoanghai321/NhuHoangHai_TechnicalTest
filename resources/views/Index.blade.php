<!DOCTYPE html>
<html lang="vn">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Technical_Test</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>

<body>
    <table id="customers">
        <thead>
            <tr>
                <th>Section1Q1</th>
            <tr>
                <td><button class="btn btn-dark"><a href="{{ route('Section1Q1') }}">Section1Q1</a></button></td>
            </tr>
            <th>Section1Q2</th>
            <tr>
                <td><button class="btn btn-dark"><a href="{{ route('Section1Q2') }}">Section1Q2</a></button></td>
            </tr>
            <th>Section1Q3</th>
            <tr>
                <td><button class="btn btn-dark"><a href="{{ route('Section1Q3') }}">Section1Q3</a></button></td>
            </tr>
            <th>Section1Q4</th>
            <tr>
                <td><button class="btn btn-dark"><a href="{{ route('Section1Q4') }}">Section1Q4</a></button></td>
            </tr>
            <th>Section1Q5</th>
            <tr>
                <td><button class="btn btn-dark"><a href="{{ route('Section1Q5') }}">Section1Q5</a></button></td>
            </tr>
            <th>Section1Q6</th>
            <tr>
                <td><button class="btn btn-dark"><a href="{{ route('Section1Q6') }}">Section1Q6</a></button></td>
            </tr>
            <th>Section1Q7a</th>
            <tr>
                <td><button class="btn btn-dark"><a href="{{ route('Section1Q7a') }}">Section1Q7a</a></button></td>
            </tr>
            <th>Section1Q7b</th>
            <tr>
                <td><button class="btn btn-dark"><a href="{{ route('Section1Q7b') }}">Section1Q7b</a></button></td>
            </tr>
            <th>Section2Q1</th>
            <tr>
                <td><button class="btn btn-dark"><a href="{{ route('Section2Q1') }}">Section2Q1</a></button></td>
            </tr>
            <th>Section2Q2</th>
            <tr>
                <td><button class="btn btn-dark"><a href="{{ route('Section2Q2') }}">Section2Q2</a></button></td>
            </tr>
            <th>Section2Q3a</th>
            <tr>
                <td><button class="btn btn-dark"><a href="{{ route('Section2Q3a') }}">Section2Q3a</a></button></td>
            </tr>
            <th>Section2Q3b</th>
            <tr>
                <td><button class="btn btn-dark"><a href="{{ route('Section2Q3b') }}">Section1Q3b</a></button></td>
            </tr>
            <th>Section3Q1</th>
            <tr>
                <td><button class="btn btn-dark"><a href="{{ route('Section3Q1') }}">Section3Q1</a></button></td>
            </tr>
            <th>Section3Q2</th>
            <tr>
                <td><button class="btn btn-dark"><a href="{{ route('Section3Q2') }}">Section3Q2</a></button></td>
            </tr>
            </tr>
        </thead>
    </table>

</body>