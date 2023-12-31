<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box
        }
        
        .container {
            width: 80%;
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

        .contents {
            margin-top: 20px;
        }

        #content {
            height: 300px;
            font-size: 25px;
            margin-bottom: 50px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 25px;
            margin-left: 20px;
            margin-bottom: 20px;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

        a {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 25px;
            margin-left: 20px;
            margin-bottom: 20px;
            text-decoration: none;
        }
        
        a:hover {
            background-color: #555;
        }

    </style>
</head>
<body>
    <form action="{{route('edit',$post->id)}}" method="POST">
        <div class="container">
            <div class="titlebox">
                <p>Notice</p>
            </div>
                @csrf
                <div class="contents">
                    <h3>title</h3>
                    <input type="text" name="title" id="title" value="{{$post->title}}"><br>
            
                    <h3>content</h3>
                    <input type="text" name="content" id="content" value="{{$post->content}}"><br>
                </div>
                <input type="submit" id="savebutton" value="수정">
                
                <a href="{{route('delete',$post->id)}}">
                    삭제
                </a>
            </div>
    </form>
</body>
</html>