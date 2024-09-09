
//get form
<?= $this->extend('form')?>

//use title login
<?= $this->Section('title')?>
Input Username
<?= $this->endSection('title')?>


//use content on body
<?= $this->Section('content')?>
<h2>Input Your Username</h2>
    <div>
        <form action="<?= base_url('inputuser')?>" method="POST">
            <label>UserName:
            <input type="text" name="name" id="name" placeholder="Name" >
            </label><br><br>
            <label>Password:  
            <input type="password" name="password" id="password" placeholder="Password" >
            </label><br><br>
            <button type="submit">Confirm</button>
        </form>
    </div><br>
    <div>
        <a href="getid">Get ID</a>
    </div>
<?= $this->endSection()?>
