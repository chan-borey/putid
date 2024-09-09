<?= $this->extend('form')?>

<?= $this->Section('title')?>
Welcome
<?= $this->endsection()?>

<?= $this->Section('style')?>
<style>
        body {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center; /* Horizontally center */
            align-items: center;    /* Vertically center */
        }
        .centered-content {
            text-align: center;
        }
    </style>
<?= $this->endSection()?>

<?= $this->Section('content')?>

    <h1><a href="<?= base_url('/input')?>">Welcome</a><h1>
<?= $this->endsection()?>