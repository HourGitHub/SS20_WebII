<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>@yield("myTitleBlock")</title>


</head>
<body>
    <div id="wrapper">
        <div id="header">@yield("myHeaderBlock")</div>
        <div id="nav">@yield("myNavBlock")
            <ul>
                <!-- <li><a href="{{ route('myindex') }}">Go Home</a></li> -->
            </ul>
        </div>
        <div id="content">@yield("myContentBlock")</div>
        <div id="footer">@yield("myFooterBlock")</div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>