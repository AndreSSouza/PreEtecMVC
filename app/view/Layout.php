<!DOCTYPE html>
<html lang="pt-br">
    <head>        
        <meta charset="UTF-8">
        <meta name="description" content="<?php echo $this->getDescription(); ?>">
        <meta name="author" content="Tcc Info Etec Francisco Morato SP p/ Pré-Etec">
        <meta name="keywords" content="<?php echo $this->getKeywords(); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $this->getTitle(); ?></title>
        <link rel="stylesheet" href="<?php echo DIRCSS.'Style.css'; ?>">
        <?php echo $this->addHead(); ?>
    </head>
    <body>
        <div class="Header">
            <?php echo $this->addHeader(); ?>
        </div>       
        <div class="Main">
            <?php echo $this->addMain(); ?>
        </div>
        <div class="Footer">
            <?php echo $this->addFooter(); ?>
        </div>        
    </body>
</html>

