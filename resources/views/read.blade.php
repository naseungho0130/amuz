<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
        }
        .container {
            width: 80%;
            height: 450px;
            margin: 0 auto;
            border: 1px solid #ddd;
        }

        .titlebox {
            background-color: #fdcc69;
            color: black;
            padding: 10px;
            text-align: center;
        }

        .titlebox p {
            font-size: 20px;
            margin: 0;
        }

        h3 {
            margin-left: 10px;
        }

        .cont1,
        .cont2,
        .cont3 {
            margin: 5px;
            padding: 5px;
            border: 1px solid lightgray;
        }

        .contents {
            margin-top: 20px;
        }

        #content {
            height: 300px;
            font-size: 25px;
            margin-bottom: 50px;
        }

        a {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border-radius: 25px;
            margin-left: 10px;
            margin-bottom: 10px;
            text-decoration: none;
        }
        
        a:hover {
            background-color: #555;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="titlebox">
            <p>Notice</p>
        </div>
            @csrf
            <div class="contents">
                <h3>title</h3>
                <p class="cont1">{{$post->title}}</p><br>
                <h3>writer</h3>
                <p class="cont2">{{$post->writer}}</p><br>
                <h3>content</h3>
                <p class="cont3">{{$post->content}}</p><br>
            </div>
            <a href="{{route('list')}}">나가기</a>
        </form>
    </div>
</body>
</html>