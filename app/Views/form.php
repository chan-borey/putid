<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title')?></title>
    <?= $this->renderSection('style') ?>
</head>

<body>
    
    <?= $this->renderSection('header')?>
    <?= $this->renderSection('content')?>
    <?= $this->renderSection('footer')?>

</body>
</html>