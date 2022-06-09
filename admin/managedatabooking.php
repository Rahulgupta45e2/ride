
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link  rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"><?php include('dashboard.php')?></div>
            <div class="col-md-9 mt-5 pt-5">
            <div class="select">
        <h1> edit and <span>update data</span></h1>
        <form action="" method="post" class="feild">
         <div class="txt">
             <input type="number" name="id" placeholder="id" required>
         </div>
         <div class="txt">
            <input type="number" name="user_id" placeholder="user_id" required>
        </div>
        <div class="txt">
            <input type="number" name="car_id" placeholder="car-id">
        </div>
        <div class="txt">
            <input type="text" name="name" placeholder="user">
        </div>
        <div class="txt">
            <input type="email" name="email" placeholder="enter your email" required>
        </div>
        <div class="txt">
            <input type="date" name="data" placeholder="picup">
        </div>
        <div class="txt">
            <input type="date" name="dropup" placeholder="dropup date">
        </div>
        <div class="txt">
            <input type="text" name="location" placeholder="enter your location">
        </div>
        <div class="txt">
            <input type="number" name="status" placeholder="status">
        </div>
        <div class="btn">
            <input type="submit" class="book">
            <button> edit</button>
        </div>
        </form>
    </div></div>
        </div>
    </div>
</body>
</html>