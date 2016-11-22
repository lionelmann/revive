<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
<title>Revive Engineering</title>
<?php wp_head(); ?>
</head>
<body>

<div style="position: absolute; top: 0; left: 0;">
    <a id="logo-container" href="/" class="brand-logo" ><img src="http://s216853.gridserver.com/custom/themes/revive/dist/images/revive.png" style="width: 40%; padding: 2em;"></a>
</div>

<div class="nav-wrapper" style="position: absolute; top: 0; right: 10px; z-index: 10;">
    <ul class="right hide-on-med-and-down">
        <li style="color: white;"><a href="/about">About</a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="/services">Services</a></li>
    </ul>
</div>

<?php if ( is_home() ) { ?>
<div class="row">
    <div class="col m6" style="padding:0;">
        <div class="parallax-container valign-wrapper" style="height: 100vh;">
            <div class="container">
                <div class="row">
                    <h5 class="header col s12 light">Revive Engineering works in partnership with architects, designers, and builders offering structural engineering solutions.  From home renovations and new builds to light commercial renovations, to specialized projects like timber buildings, and custom steel sculptures, we offer structural solutions.</h5>
                </div>
            </div>
            <div class="parallax overlay"><img src="<?php echo get_template_directory_uri();?>/dist/images/blueprint-bg.jpg"></div>
        </div>
    </div>
    <div class="col m6 indigo lighten-5" style="height: 100vh;">
        
    </div>
</div>

<?php } else { ?>

<div class="row">
    <div class="col m12" style="padding:0;">
        <div class="parallax-container valign-wrapper">
            <div class="container">
                <div class="row">
                    <h1 class="header col s12 light center"><?php the_title();?></h1>
                </div>
            </div>
            <div class="parallax overlay"><img src="<?php echo get_template_directory_uri();?>/dist/images/building1.jpg"></div>
        </div>
    </div>
</div>

<?php } ?>


