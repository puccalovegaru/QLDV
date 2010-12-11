<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $html->charset('utf-8'); ?>
<title>Đoàn thanh niên - ĐHCNTT</title>
<?php echo $html->css(array('qldv/reset', 'style', 'qldv/screen', 'qldv/fancybox', 
	'qldv/jquery.wysiwyg', 'qldv/jquery.ui', 'qldv/visualize', 'qldv/visualize-light')); ?>
<?php echo $html->script(array('jquery','jquery.corner', 'admin/jquery.visualize', 
	'admin/wysiwyg', 'admin/tiny_mce/jquery.tinymce', 'admin/jquery.fancybox', 'admin/jquery.idtabs', 'admin/jquery.datatables',
	'admin/jquery.jeditable', 'admin/jquery.ui', 'admin/jquery.jcarousel',
	'admin/jquery.validate', 'admin/excanvas', 'admin/cufon', 'admin/Zurich_Condensed_Lt_Bd',
	'admin/script')); ?>
<script type="text/javascript">
$('.content-box').corner();
</script>
</head>

<body>
	<div id="container">
    	<div id="banner">
        	<h1><a href="#">Banner</a></h1>
        </div><!--banner-->
        <?php echo $this->element('menu'); ?>
        <div class="main-container"> <!-- *** mainpage layout *** -->
            <div class="main-wrap">
                <div class="clear">
                    
                    <!-- ICONBAR -->
                    <?php echo $this->element('iconbar'); ?>
                    <!-- MODAL WINDOW -->
                    <div id="modal" class="modal-window modal-600">
                        
                        <div class="notification note-info">
                            <a href="#" class="close" title="Close notification"><span>close</span></a>
                            <span class="icon"></span>
                            <p><strong>Information:</strong> The examples of modal windows are set on the LABELS in H1 tags.</p>
                        </div>
                        
                        <h2>Modal Window : size 600</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tristique, lorem id hendrerit sodales, nisl felis sollicitudin lacus, et facilisis felis quam at quam. Nullam vel nunc at sapien sagittis feugiat. Vestibulum est eros, condimentum ac sodales vel, iaculis vitae neque.</p>
                        <h4 class="bt-space10">You can set the 4 types of modal:</h4>
                        <div class="clear">
                            <div class="half fl">
                            <div class="mark bt-space5">
                                <ul class="standard clean-padding bt-space10">
                                <li><span class="fr">class "modal-400"</span> <span><strong>Size 400px</strong></span></li>
                                <li><span class="fr">class "modal-600"</span> <span><strong>Size 600px</strong></span></li>
                                <li><span class="fr">class "modal-800"</span> <span><strong>Size 800px</strong></span></li>
                                <li><span class="fr">no other class</span> <span><strong>Size undefined (auto)</strong></span></li>
                                </ul>
                            </div>
                            </div>
                            <p class="half fr"><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tristique, lorem id hendrerit sodales, nisl felis sollicitudin lacus, et facilisis felis quam at quam.</small></p>
                        </div>
                    </div>
                    <!-- CONTENT BOXES -->
                    <div id="content">
                    <?php echo $content_for_layout; ?>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer">
        	Footer
        </div>
    </div><!--container-->
    
</body>
</html>