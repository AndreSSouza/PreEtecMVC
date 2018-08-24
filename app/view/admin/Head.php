<link href="<?php echo DIRCSS.'Style.css'; ?>" rel="stylesheet" type="text/css" />
        <script language="javascript" src="<?php echo DIRJS.'jquery-1.7.2.min.js'; ?>"></script>
        <script src="<?php echo DIRJS.'lightbox.js'; ?>"></script>
        <link href="<?php echo DIRCSS.'lightbox.css'; ?>" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo DIRCSS.'jquery.superbox.css'; ?>" type="text/css" media="all" />
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo DIRJS.'jquery.superbox-min.js'; ?>"></script>
        <script type="text/javascript">
            $(function(){
                $.superbox.settings = {
                    closeTxt: "Fechar",
                    loadTxt: "Carregando...",
                    nextTxt: "Next",
                    prevTxt: "Previous"
                };
                $.superbox();
            });
        </script>
//Vou fazer um novo menu com Jquery
