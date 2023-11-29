<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>

        *{
            text-decoration: none;
            list-style: none;
            color: black;
            box-sizing: border-box;
        }

        .container {
            margin: 0 auto;
            padding: 10px;  
            width: 80%;
        }

        .head {
            background-color: #fdcc69;
            color: #000;
            padding: 10px;
            display: flex;
            justify-content: space-between;
        }

        .head p {
            margin: 0;
            font-weight: bold;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 25px;
        }

        #writelink {
            color: #000;
            text-decoration: none;
            border: 1px solid #000;
            padding: 5px 10px;
            border-radius: 15px;
            text-align: center;
        }

        #writelink:hover {
            background-color: #fdee70;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, tr, th {
            border: 1px solid #ccc;
        }

        tr, th {
            padding: 10px;
            text-align: center;
        }

        tbody, tr, td {
            color: black;
            text-decoration: none;
        }

        .paging {
            margin-top: 20px;
            text-align: center;
        }

        #prevpage, #nextpage, .pagenumber {
            text-decoration: none;
            color: #333;
            font-size: 25px;
            padding: 10px;
            display: none;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="head">
            <p>Notice</p>
            <a href="{{route('create')}}" id="writelink">글쓰기</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>제목</th>
                    <th>작성자</th>
                    <th>작성 날짜</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $key => $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td><a href="{{route('read',$post->id)}}">{{$post->title}}</a></td>
                        <td><a href="{{route('updatepost',$post->id)}}">{{$post->writer}}</a></td>
                        <td>{{$post->created_at}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div style="width: 450px; margin:auto;">
        {{ $posts->links() }}
    </div>
</body>
</html>