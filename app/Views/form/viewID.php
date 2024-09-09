<?= $this->extend('form')?>

<?= $this->Section('title')?>
ViewID
<?= $this->endSection()?>

<?= $this->Section('content')?>
    <form action="<?= base_url('update/'.$id) ?>" method="POST" >  
     
              <h2>Edit ID</h2>             
              <?php echo "ID: ".$id?><br><br>
              <input type="text" name="name" class="form-control is-valid" value="<?= esc($name) ?> "><br><br>
              <input type="text" name="password" class="form-control is-valid" value="<?= esc($password) ?>"><br><br>
              <button type="submit" >Confirm</button> 
    </form> 
<?= $this->endSection()?>