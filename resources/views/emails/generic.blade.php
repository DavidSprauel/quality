<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h4>Email from quality congress 2018</h4>
        <dl>
            <dt>Name:</dt>
            <dd>{{ $data->firstname . ' '.$data->lastname }}</dd>

            <dt>Email:</dt>
            <dd>{{ $data->email }}</dd>

            <dt>Company:</dt>
            <dd>{{ $data->company }}</dd>

            <dt>Subject:</dt>
            <dd>{{ $data->subject }}</dd>

            <dt>Message:</dt>
            <dd>{!! nl2br($data->message) !!}</dd>

        </dl>
    </div>
</body>
</html>