
<!-- // $i = 6;

// do {
//     echo "Hello, World!";
//     $i++;
// } while($i < 5 || $i <10 ); -->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan P-3</title>
    <style>
        .warna-background {
            background-color: grey;
        }
    </style>
</head>
<body>
    
<table border="1" cellspacing="10" cellpadding="10">
    <?php for ( $i = 1; $i <= 5; $i++): ?>
        <?php if ( $i %2 == 0): ?>
            <tr class = "warna-background">
        <?php else :?>
            </tr>
        <?php endif ?>    
        <?php for ( $j = 1; $j <= 5; $j++): ?>
            <?php if ( $j %2 == 0): ?>
                <td class = "warna-background">
            <?php else: ?>
                <td>
            <?php endif?>
                <?php echo "$i,$j"; ?>
            </td>  
        <?php endfor?>
            </tr>
    <?php endfor?>
</table>
</body>
</html>