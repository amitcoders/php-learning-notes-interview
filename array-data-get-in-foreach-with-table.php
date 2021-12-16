<?php
$arr = array("amit"=>"fiter", "shyam"=>"welder", "sita"=>"riger", "mohan"=>"riger", "Jitendra"=>"welder", "Sikandar"=>"fiter");
foreach ($arr as $key => $value) {
    ?>
<table border="2">
                <tr>
                    <th>Name</th>
                    <th>Email </th>
					<th>Address</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td><?php echo "$key"; ?></td>
                    <td><?php echo "$value"; ?></td>
                </tr>
            </table>
<?php
    }
?>