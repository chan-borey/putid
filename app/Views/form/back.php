<?= $this->extend('form')?>
<?= $this->endSection()?>

//get content
<?= $this->Section('content')?>
<h2>Your Id</h2>

    <div>
        <?php echo "ID:".$id?>
    </div>
    <div>
        <a href="/getid">Back</a>
    </div>

<?= $this->endSection()?>