<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<title>Template Form</title>

</head>
<body>
<div class="container">
    <form method="get" action="/submit-template" accept-charset="UTF-8" id="templateForm">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                Name
            </div>
        </div>
        <div class="row ">
            <div class="col-2"></div>
            <div class="col-8">
                <input type="text" name="name" id="id" size="100">
            </div>
        </div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                Template
            </div>
        </div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <textarea name="template_text" id="template_text" cols="102" rows="5"></textarea>
            </div>
            
        </div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-10">
            
                <button type="submit" class="btn btn-primary" formaction="{{ action('submitController@create') }}">Add Template</button>
                <button type="submit" class="btn btn-primary" formaction="{{ action('submitController@show') }}">Show Template</button>
                <button type="submit" class="btn btn-primary" formaction="{{ action('submitController@showAll') }}">Show All Templates</button>
            </div>
        </div>
        
    </form>

</div>
    
</body>
</html>