<?php

$logfile = __DIR__ . '/access.log';

$file = @fopen($logfile, 'r') or die('ファイルを開けません');
?>
<!DOCTYPE html>
<html lang="ja">
        <head>
            <meta charset="UTF-8">
            <title>アクセスログ</title>
        </head>
    <body>

        <table border="1">
                <tr>
                    <th>日時</th>
                    <th>スクリプト名</th>
                    <th>User Agent</th>
                </tr>

            <?php

            while ($line = fgets($file)) {
                $line = trim($line);                 
                $data = explode("\t", $line); 

                if (count($data) !== 3) {
                    continue;
                }

                echo '<tr>';
                echo '<td>' . htmlspecialchars($data[0], ENT_QUOTES, 'UTF-8') . '</td>';
                echo '<td>' . htmlspecialchars($data[1], ENT_QUOTES, 'UTF-8') . '</td>';
                echo '<td>' . htmlspecialchars($data[2], ENT_QUOTES, 'UTF-8') . '</td>';
                echo '</tr>';
            }

            fclose($file);
            ?>

        </table>

    </body>
</html>
