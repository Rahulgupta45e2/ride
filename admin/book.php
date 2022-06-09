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
            <h1>car data</h1>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
<thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
<tr>
<th scope="col" class="p-4">
<div class="flex items-center">
<input id="checkbox-all" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
<label for="checkbox-all" class="sr-only">checkbox</label>
</div>
</th>
<th scope="col" class="px-6 py-3">
Sno.
</th>
<th scope="col" class="px-6 py-3">
carid
</th>
<th scope="col" class="px-6 py-3">
car-name
</th>
<th scope="col" class="px-6 py-3">
model
</th>
<th scope="col" class="px-6 py-3">
type
</th>
<th scope="col" class="px-6 py-3">
fuel
</th>
<th scope="col" class="px-6 py-3">
price
</th>
<th scope="col" class="px-6 py-3">
image
</th>
<th scope="col" class="px-6 py-3">
year
</th>
<th scope="col" class="px-6 py-3">
<span class="">Edit</span>
</th>
<th class="text-center">
    <span class="">delete</span>
</th>
</tr>
</thead>
<tbody>

<?php
$sql = "SELECT * FROM `cars` ORDER BY `img` ASC";
$res = mysqli_query($conn, $sql);
$i = 0;
while($rows = mysqli_fetch_assoc($res)){
    $i++;
?>

<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
<td class="w-4 p-4">
<div class="flex items-center">
<input id="checkbox-table-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
<label for="checkbox-table-1" class="sr-only">checkbox</label>
</div>
</td>
<th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
<?= $i ?>
</th>
<td class="px-6 py-4">
<!-- user id -->
<?= $rows['id'] ?> 
</td>
<td class="px-6 py-4">
<!-- car id -->
<?= $rows['name'] ?>
</td>
<td class="px-6 py-4">
<!-- name -->
<?= $rows['model'] ?>
</td>
<td class="px-6 py-4">
<!-- email -->
<?= $rows['type'] ?>
</td>
<td class="px-6 py-4">
<!-- email -->
<?= $rows['fuel'] ?>
</td>
<td class="px-6 py-4">
<!-- email -->
<?= $rows['price'] ?>
</td>
<td class="px-6 py-4">
<!-- email -->
<?= $rows['img'] ?>
</td>
<td class="px-6 py-4">
<!-- email -->
<?= $rows['year'] ?>
</td>
<td class="px-6 py-4 text-right">
<a href="car-update.php?i=<?= $rows['id'] ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
</td>
<td class="px-6 py-4 text-right">
    <a href="deleteCar.php?i=<?= $rows['id'] ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">delete</a>
    </td>
</tr>
<?php
}
?>
</tbody>
</table>
</div></div>
        </div>
    </div>
</body>
</html>