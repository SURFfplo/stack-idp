<?php
$this->data['header'] = $this->t('{login:user_pass_header}');

if (strlen($this->data['username']) > 0) {
    $this->data['autofocus'] = 'password';
} else {
    $this->data['autofocus'] = 'username';
}
?>

<?php
	
//Dit is volgens mij verkeerd inloggen scherm
if ($this->data['errorcode'] !== null) {
    ?>
    <div style="border-left: 1px solid #e8e8e8; border-bottom: 1px solid #e8e8e8; background: #f5f5f5">
        <img src="/<?php echo $this->data['baseurlpath']; ?>resources/icons/experience/gtk-dialog-error.48x48.png"
             class="float-l erroricon" style="margin: 15px" alt=""/>

        <h1><?php echo $this->t('{login:error_header}'); ?></h1>

        <p><strong><?php
                echo htmlspecialchars($this->t(
                    '{errors:title_'.$this->data['errorcode'].'}',
                    $this->data['errorparams']
                )); ?></strong></p>

        <p><?php
            echo htmlspecialchars($this->t(
                '{errors:descr_'.$this->data['errorcode'].'}',
                $this->data['errorparams']
            )); ?></p>
    </div>
<?php
}

?> 



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SURF demo modulaire leeromgeving - Identity Providor</title>

    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   
<br>
<br>
<br>
<div class="row"> 
  <div class="col-md-4"></div>
  <div class="col-md-4" align="center"><img src="<?php echo SimpleSAML_Module::getModuleURL('surfuni/logo.png') ?>" width="100px" height=""/></div>
  <div class="col-md-4"></div>
</div>
<h2 align="center">SURF demo modulaire leeromgeving</h2>
<br>
<div class="row"> 
  <div class="col-md-4"></div>
  <div class="col-md-4"><div class="well">
	  
	   <h3 style="break: both">Inloggen</h3>
	   
	  
	  
<form action="?" method="post" name="f" >
       
<table>
  <tr>
    <td><label for="username">E-mail adres</label></td>
  </tr>
  <tr>
    <td><input id="username" <?php echo ($this->data['forceUsername']) ? 'disabled="disabled"' : ''; ?>type="text" name="username"<?php if (!$this->data['forceUsername']) {
    echo 'tabindex="1"';
} ?> value="<?php echo htmlspecialchars($this->data['username']); ?>"/><br><br></td>
  </tr>
  <tr>
    <td><label for="password"><?php echo $this->t('{login:password}'); ?></label></td>
  </tr>
  <tr>
    <td><input id="password" type="password" tabindex="2" name="password"/></td>
  </tr>
             
            <tr id="regularsubmit">
                
                <td>
	                <br>
                    <button class="btn btn-default"
                            onclick="this.value='<?php echo $this->t('{login:processing}'); ?>';
                                this.disabled=true; this.form.submit(); return true;" tabindex="6">
                        <?php echo $this->t('{login:login_button}'); ?>
                    </button>
                </td>
            </tr>
            
</table>
        
        
        
        
        
        <?php
        foreach ($this->data['stateparams'] as $name => $value) {
            echo('<input type="hidden" name="'.htmlspecialchars($name).'" value="'.htmlspecialchars($value).'" />');
        }
        ?>
</form>
	  
	  
	  <?php
if (!empty($this->data['links'])) {
    echo '<ul class="links" style="margin-top: 2em">';
    foreach ($this->data['links'] as $l) {
        echo '<li><a href="'.htmlspecialchars($l['href']).'">'.htmlspecialchars($this->t($l['text'])).'</a></li>';
    }
    echo '</ul>';
}
//echo('<h2 class="logintext">'.$this->t('{login:help_header}').'</h2>');
//echo('<p class="logintext">'.$this->t('{login:help_text}').'</p>');?>
	   
  </div></div>
  <div class="col-md-4"></div>
</div>





 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<div class="row"> 
  <div class="col-md-4"></div>
  <div class="col-md-4"></div>
  <div class="col-md-4"></div>
</div>

  </body>
</html>




   
    

    


