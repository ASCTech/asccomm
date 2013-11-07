<p>
<?php if(user_is_logged_in()) { ?>
	<a href="http://jigsaw.w3.org/css-validator/check/referer" style="margin-right: 5px; text-decoration: none; border-bottom: none;"><img src="<?=base_path();?><?=path_to_theme();?>/icons/w3c_css.png" height="13px" title="Validate CSS" alt="Validate CSS" /></a>
	<a href="http://validator.w3.org/check?uri=referer" style="margin-right: 5px; text-decoration: none; border-bottom: none;"><img src="<?=base_path();?><?=path_to_theme();?>/icons/w3c_xhtml.png" height="13px" title="Validate XHTML" alt="Validate XHTML" /></a>
<?php } ?>

<?php if(!user_is_logged_in()) { ?>
	<a href="<?php print "https://asccomm.osu.edu/Shibboleth.sso/Login?target=https%3A%2F%2Fasccomm.osu.edu%2F%3Fq%3Dshib_login%252Fnode";?>/Shibboleth.sso/Login?target=<?php print urlencode("https://" . $_SERVER['HTTP_HOST'] . base_path());?>" style="text-decoration: none; border-bottom: none;"><img src="<?=base_path();?><?=path_to_theme();?>/icons/user.gif" height="13px" title="Login" alt="Login" /></a>
<?php } else { ?>
	<a href="/logout" style="text-decoration: none; border-bottom: none;"><img src="<?php print base_path() . path_to_theme() ;?>/icons/user_out.gif" height="13px" title="Logout" alt="Logout" /></a>
<?php } ?>
</p>
<script type="text/javascript">
var oldonload = window.onload;
var newonload = function(){
	if(document.getElementById("edit-name")){
		document.getElementById("edit-name").focus();
	}
};
if(typeof window.onload != 'function'){
	window.onload = newonload;
}else{
	window.onload = function(){
		oldonload();
		newonload();
	};
}
</script>
