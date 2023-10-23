<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        .container {
            margin: 0 auto;
            width: 80%;
            border: 1px solid #000;
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

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        .paging {
            margin-top: 20px;
            text-align: center;
        }

        #prevpage, #nextpage, .pagenumber {
            text-decoration: none;
            color: #333;
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
                @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->writer}}</td>
                        <td>{{$post->created_at}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="paging">
            <a href="#" id="prevpage"><-</a>
            <a href="#" class="pagenumber">1</a>
            <a href="#" class="pagenumber">2</a>
            <a href="#" class="pagenumber">3</a>
            <a href="#" class="pagenumber">4</a>
            <a href="#" class="pagenumber">5</a>
            <a href="#" id="nextpage">-></a>
        </div>
    </div>
</body>
</html>