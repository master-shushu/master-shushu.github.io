<html>
    
    <head>
    
        <title></title>
    <head>

    <body>
    <span>qpqpqpqpqpq</span>
    
    <?php $list_file = fopen("list.csv", "r"); $list_array = []; while (($list = fgetcsv($list_file, 1000, ",")) !== FALSE) { $list_array[] = $list; } fclose($list_file); echo "<pre> 111111"; var_dump($list_array); echo "</pre>"; ?>

        </body>
        </html>

