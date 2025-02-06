<?php require_once "connect-db.php";?>

<!doctype html>
<html lang="tr-TR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Çoklu Kayıt Silme</title>
</head>
<body>
<form action="sonuc.php" method="post">
    <table width="500" align="center" border="0" cellpadding="0" cellspacing="0">
        <tbody>
        <?php

        $query = $db_connect->prepare('SELECT * FROM kisiler');
        $query->execute();

        $record_row = $query->rowCount();
        $records = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach ($records as $row) {
            ?>
            <tr>
                <td width="25" height="30" align="left"><input type="checkbox" name="secim[]"
                                                               value="<?php echo $row['id']; ?>" id=""></td>
                <td height="30" align="left"><?php echo $row['adi'] . ' ' . $row['soyadi']; ?></td>
            </tr>
            <?php
        }

        ?>
        <tr>
            <td colspan="2" align="left"><input type="submit" value="Seçili Olanları Sil"></td>
        </tr>
        </tbody>
    </table>
</form>
</body>
</html>
