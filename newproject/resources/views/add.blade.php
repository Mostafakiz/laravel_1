<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <center>
        <form  method="post" action="Add">
            {{csrf_field()}}
        <label>Name Product:</label><br>
        <input type='text' name='name'><br>
        <label>Type Product</label><br>
        <input type='text' name='type'><br>
        <label>Price Product:</label><br>
        <input type='text' name='price'><br>
        <input type="submit" value="add"><br>
        </form>
    </center>
    
</body>
</html>