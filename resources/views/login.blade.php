
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body>
<?php
        if (isset($_GET['product_id'])) {
            $product_id = $_GET['product_id'];
        } else {
            $product_id = "";
        }
    ?>
    <div class="flex items-center justify-center h-screen w-screen">
        <div class="w-4/12 border border-gray-200 rounded-md p-10 shadow-md outline outline-offset-2 outline-blue-500">
            <label for="product_id" class="block mb-1">
                <span class="text-gray-700">Product Id</span>
                <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="" value="<?php echo $product_id;?>">
            </label>
            <div class="flex place-content-center mt-4">
                <button type="submit" class="text-white bg-gradient-to-r w-1/2 p-1 from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 ">Cek</button>
            </div>            
        </div>          
    </div>

</body>
</html>
