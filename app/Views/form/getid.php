//get form 
<?= $this->extend('form')?>

//get title
<?= $this->Section('title')?>
GetID
<?= $this->endSection()?>

//get content
<?= $this->Section('content')?>
<h2>Get Your ID</h2>
    <div>
        <form action="<?= base_url('chooseID')?>" method="POST">
            <input type="id" name="id" id="id" placeholder="INput ID..."><br><br>
            <button type="submit">GetID</button>
        </form>
    </div>  
    <div>
        <a href="input">Input Username</a>
    </div>
<?= $this->endSection()?>