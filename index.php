<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sachovnica</title>
</head>
<body>
    <table>
    <?php 
        // nakreslime sachovnicu
        $figurky = [
            ["bR","bN","bB","bQ","bK","bB","bN","bR"],
            ["bp","bp","bp","bp","bp","bp","bp","bp"],
            ["--","--","--","--","--","--","--","--"],
            ["--","--","--","--","--","--","--","--"],
            ["--","--","--","--","--","--","--","--"],
            ["--","--","--","--","--","--","--","--"],
            ["wp","wp","wp","wp","wp","wp","wp","wp"],
            ["wR","wN","wB","wQ","wK","wB","wN","wR"],
        ];

        for ($i = 0; $i < 8; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 8; $j++) {
                if (($i + $j) % 2 == 0) {
                    if($figurky[$i][$j] != "--"){
                        echo "<td style='background-color: grey; width: 50px; height: 50px;'> <img src='./img/{$figurky[$i][$j]}.png'> </td>";
                    } else{
                        echo "<td style='background-color: grey; width: 50px; height: 50px;'>";
                    }
                } else {
                    if($figurky[$i][$j] != "--"){
                        echo "<td style='background-color: white; width: 50px; height: 50px;'> <img src='./img/{$figurky[$i][$j]}.png'> </td>";
                    } else{
                        echo "<td style='background-color: white; width: 50px; height: 50px;'>";
                    }
                }
            }
            echo "</tr>";
        }
    ?>
    </table>
</body>
</html>