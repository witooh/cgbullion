<?php //YiiBase::beginProfile('wholePage') ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="th" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
    <link rel="shortcut icon" href="/favicon.ico" />
    
	<?php
	   Yii::app()->clientScript->registerCoreScript('jquery');
       addCss(baseurl('css/bootstrap.css'));
       addCss(baseurl('css/bootstrap-responsive.min.css'));
       addCss(baseurl('css/layout.css'));
       addJs(baseurl('js/bootstrap.min.js'));
       addJs(baseurl('js/layout.js'), CClientScript::POS_END);
    ?>
	<title><?php echo $this->title ?></title>
</head>
<?php flush(); ?>
<body>
    <div class="navbar">
      <div class="navbar-inner" style="border-radius: 0px !important;">
        <div class="container">
        	<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo baseurl('site/index') ?>">VAA</a>
          	<div class="nav-collapse">
	            <?php
	                $this->widget('zii.widgets.CMenu', array(
	                    'items'=>array(
	                    	array('label'=>'Report VAA', 'url'=>array('report/index')),
	                    ),
	                    'htmlOptions'=>(array(
	                        'class'=>'nav'
	                    )),
	                ));
	            ?>
	            <ul class="nav">
	                <li class="dropdown" id="menu1">
		                <a class="dropdown-toggle" data-toggle="dropdown" href="#menu1">VAA Function <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<?php if(checkAccess('av.menu')):?>
								<li><a href="<?php echo url('av001/index'); ?>">AV VAA Activity (AV001)</a></li>
								<li class="divider"></li>
							<?php endif; ?>
							<?php if(checkAccess('gb.menu')):?>
								<li><a href="<?php echo url('gb001/index'); ?>">GB Get Back Shipment (GB001)</a></li>
								<li class="divider"></li>
							<?php endif; ?>
							<?php if(checkAccess('iv.menu')):?>
								<li><a href="<?php echo url('iv/iv001'); ?>">IV Inbound VAA (IV001)</a></li>
								<li class="divider"></li>
							<?php endif; ?>
							<?php if(checkAccess('ov.menu')):?>
								<li><a href="<?php echo url('ov001/index'); ?>">OV Outbound VAA (OV001)</a></li>
								<li class="divider"></li>
							<?php endif; ?>
							<?php if(checkAccess('pio.menu')):?>
								<li><a href="<?php echo url('pio001/index'); ?>">Property In Bound (PIO001)</a></li>
								<li class="divider"></li>
							<?php endif; ?>
							<?php if(checkAccess('te.menu')):?>
								<li><a href="<?php echo url('te/te001'); ?>">TE Temporary Export (TE001)</a></li>
							<?php endif; ?>
						</ul>
	                </li>
	                <?php if(checkAccess('user.menu')): ?>
	                	<li class="nav"><a href="<?php echo url('user/index') ?>">User Manager</a></li>
	               	<?php endif;?>
	               	<?php if(checkAccess('role.menu')): ?>
	               		<li class="nav"><a href="<?php echo url('role/index') ?>">Role Manager</a></li>
	               	<?php endif;?>
	               	<?php if(checkAccess('log.menu')): ?>
	               		<li class="nav"><a href="<?php echo url('log/index/ajax/yw0/Log_sort/datetime.desc') ?>">Log</a></li>
	               	<?php endif;?>
                    <?php if(checkAccess('track.menu')): ?>
                           <li class="nav"><a href="<?php echo url('track/index') ?>">Tracking</a></li>
                       <?php endif;?>
	            </ul>
	            <ul class="nav pull-right">
	                <li class="dropdown" id="menu2">
	                <a class="dropdown-toggle" data-toggle="dropdown" href="#menu2"><?php echo userName() ?> <b class="caret"></b>
	                </a>
	                <ul class="dropdown-menu">
	                	<?php if(!checkAccess('isMaster') && checkAccess('user.changepwd')):?>
	                    <li><a href="<?php echo url('user/changepwd',array('userid'=>userId())) ?>">Change Password</a></li>
	                    <li class="divider"></li>
	                    <?php endif; ?>
						<li><a href="<?php echo url('login/logout'); ?>">Logout</a></li>
	                </ul>
	                </li>
	            </ul>
            </div>
        </div>
      </div>
    </div>
    <div class="main-container container" style="opacity: 0;">
    	<?php echo $content; ?>
    </div>
    <div class="footer" style="height: 100px;">
	</div>
</body>
</html>
<?php //YiiBase::endProfile('wholePage') ?>
