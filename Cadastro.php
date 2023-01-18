<!DOCTYPE html>
<html style="font-size: 16px;" lang="pt"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="SacLive">
    <meta name="description" content="">
    <title>Cadastrar Clínica - SacLive</title>
    <link rel="stylesheet" href="Nicepage assets/nicepage.css" media="screen">
<link rel="stylesheet" href="Nicepage assets/Cadastro.css" media="screen">
    <script class="u-script" type="text/javascript" src="Nicepage assets/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="Nicepage assets/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.18.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link rel="stylesheet" href="css/formStyle.css">
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "SacLive",
		"logo": "images/logo.png"
    }</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Cadastro">
    <meta property="og:type" content="website">
  </head>


  
  <body class="u-body u-xl-mode" data-lang="pt"><header class="u-clearfix u-header u-palette-4-base u-header" id="sec-c32d"><div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-default u-text-1">SacLive</h1>
        <a href="index.html" class="u-image u-logo u-image-1" data-image-width="860" data-image-height="738">
          <img src="assets/img/logo.png" class="u-logo-image u-logo-image-1">
        </a>
      </div></header>
    <section class="u-clearfix u-section-1" id="sec-48e0">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-form u-form-1">
          <form action="ClinicInsert.php" method="post">
            <div class = "formDiv">
              <script src="scripts/cnpjInputMask.js" type="text/javascript"> </script>
              <label class ="formLabel" for="txtCnpj">CNPJ:</label>
              <input class = "formInputField" type="text" id = "txtCnpj" onkeypress= "aplicarCnpjMask('txtCnpj')" name="txtCnpj" minlength="18" maxlength="18" required>
            </div>

            <div class = "formDiv">
              <label class = "formLabel" for="txtNome">Nome:</label>
              <input class = "formInputField" type="text" id = "txtNome" name="txtNome" minlength="3" required>
            </div>

            <div class = "formDiv">
              <label class = "formLabel" for="txtEmail">Email:</label>
              <input class = "formInputField" type="email" id = "txtEmail" name="txtEmail" required>
            </div>

            <div class="formDiv">
              <label for="txtSenha" class = "formLabel">Senha:</label>
              <input type="password" id ="txtSenha" class ="formInputField" name="txtSenha">
            </div>

            <div class="formDivBotao">
              <input class = "formBotao" type="submit" value="Cadastrar">
            </div>
          </form>
        </div>
        <a href="index.html" class="u-active-palette-4-base u-border-none u-btn u-btn-round u-button-style u-hover-palette-1-base u-palette-4-base u-radius-50 u-btn-2">Cancelar<span style="font-weight: 400;"></span>
        </a>
      </div>
    </section>
  
</body></html>