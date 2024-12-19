<h2>Вы уверенны что хотите удалить данную картинку?</h2>
<form action="">
    <table>
        <tr>
            <td>ID</td>
            <td><input name="ID" placeholder="int" value="<?= $data['id'] ?>"></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input name="image_name" placeholder="text" value="<?= $data['name'] ?>"></td>
        </tr>
        <tr>
            <td>URL</td>
            <td><input name="image_url" placeholder="text" value="<?= $data['image_url'] ?>"></td>
        </tr>
        <tr>
            <td>Category Name</td>
            <td><input name="category_name" placeholder="text" value="<?= $data['category'] ?>"></td>
        </tr>
        <tr>
            <td>Category ID</td>
            <td><input name="category_ID" placeholder="int" value="<?= $data['category_id'] ?>"></td>
        </tr>
        <tr>
            <td colspan=2><button type="submit">Удалить Картинку</button></td>
        </tr>
    </table>
</form>
<a href="/hillel/gallery/">Вернутся в галерею</a>