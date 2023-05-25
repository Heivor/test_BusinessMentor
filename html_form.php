
<?php if (isset($id)) {
    $url = 'form.php?id='.$id;
}
else {
    $url = 'form.php';
} ?>

<form action="<?=$url?>" method="post">

    <?php if (isset($id)) { ?>
        <input type="hidden" value="<?=$id?>">
    <?php } ?>

    <p>
        <label for="payload">Отправляемые данные</label>
        <textarea id="payload" name="Job[payload]"><?=$data['payload']?></textarea>
    </p>
    <p>
        <label for="data">Ответ</label>
        <textarea id="data" name="Job[response]"><?=$data['response']?></textarea>
    </p>
    <p>
        <label for="url">Ссылка</label>
        <input id="url"  type="text" name="Job[url]" value="<?=$data['url']?>" />
    </p>
    <p>
        <input type="submit">
    </p>
</form>