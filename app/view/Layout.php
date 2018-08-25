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
            <input type="checkbox" id="btn_menu">
            <label for="btn_menu">&#9776;</label>
            <nav class="menu">
                <ul>
                    <li><a href="<?php echo DIRPAGE.'inscricao'; ?>">Lista de Espera</a></li>
                    <li><a>Turmas</a>
                        <ul>                           
                             <li><a href="<?php echo DIRPAGE.'turma'; ?>">Turma</a></li>
                             <li><a href="<?php echo DIRPAGE.'matricula'; ?>">Matricula</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo DIRPAGE.'estudante'; ?>">Estudante</a></li>
                    <li><a>Professores</a>
                        <ul>
                            <li><a href="<?php echo DIRPAGE.'professor'; ?>">Professor</a></li>
                            <li><a href="<?php echo DIRPAGE.'disciplina'; ?>">Disciplina</a></li>
                            <li><a href="<?php echo DIRPAGE.'disciplinaMinistrada'; ?>">Disciplinas Ministradas</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
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

