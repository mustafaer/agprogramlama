
<script type="text/javascript">
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100)    
            $("#yukari").fadeIn(500);  
        else
            $("#yukari").fadeOut(500);    
    });
    $(document).ready(function () {
        $("#yukari").click(function () {  
            $("html, body").animate({scrollTop: "0"}, 500);
            return false;
        });
    });
</script>
<div id="yukari">
    <a href="javascript:;"><img alt="Yukarı Çık" title="Yukarı Çık" id="yukari_boyut" src="public/view/img/yukari.png"></a>
</div>
</div>
<div id="footer" class="col-lg-12 col-md-12 ">
    <p style="height: 40px; border-top-left-radius: 0; border-top-right-radius: 0;padding-top: 7px; margin: 0; "><a style="text-decoration:none; color: #333333;" href="http://saueem.com">SAUEEM.COM</a> © <?php echo date("Y"); ?> » Developed by <a style=" font-size: 14px; font-weight: 600; color: #2e4453; line-height: 24px; text-decoration:none;" href="http://mustafaer.pro" target="_blank">Mustafa ER</a></p>
</div>
</div>
</div>
</body>
</html>
<?php ob_end_flush();?>
