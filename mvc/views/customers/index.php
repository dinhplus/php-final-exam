<h2>
	Hello
</h2>

<?php



?>
<table>
<tr>
    <th>id</th>
    <th>name</th>
    <th>phone</th>
    <th>email</th>
    <th>gender</th>
    <th>img</th>
</tr>

<?php foreach ($data["customers"] as $customer) {?>
    <tr>
    <td><?=$customer["id"]?></td>
    <td><?=$customer["name"]?></td>
    <td><?=$customer["phone"]?></td>
    <td><?=$customer["gender"]?></td>
    <td><?=$customer["email"]?></td>
    <td>
        <img src="<?=$customer["img"]?>" alt="" width="100">
    </td>
    </tr>
<?php }?>
</table>