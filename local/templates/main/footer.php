<?php
/**
 * Created by PhpStorm.
 * User: Лева
 * Date: 18.12.2015
 * Time: 21:58
 */
?>
<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
?>
<footer id="footer">
    <section class="top-footer regular">
        <div class="container">
            <div class="row">

                <h3 class="hidden">More Resources</h3>

                <div class="col-lg-9">
                    <div class="footer-content-left">

                        <p style="font-size:14px; color:#aaa;">
                            <a href="page.html">About Us</a> &nbsp; | &nbsp;
                            <a href="login.html">Sign in</a> &nbsp; | &nbsp;
                            <a href="cover-with-page-content.html">Be an Explorer!</a> &nbsp; | &nbsp;
                            <a href="destinations.html">Destinations</a> &nbsp; | &nbsp;
                            <a href="blog.html">Blog</a> &nbsp; | &nbsp;
                            <a href="contact.html">Contact us</a>
                        </p>

                        <p style="font-size:14px; color: #999; margin-bottom:0;">
                            <strong>An HTML travel template for destinations, guides, blogs, hotels, resorts, tours, vacations, events, and more for a perfect travel experience!</strong>

                            <br>Created by <a href="">Parallelus</a> and available for purchase on <a href="http://bayguzin.ru" target="_blank">bayguzin.ru</a>.
                        </p>

                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="footer-content-right">
                        <div style="text-align: right;" class="visible-lg-block">
                            <img src="images/logo.png" alt="GLOBUS" width="1024" height="565" style="max-width: 175px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sub-footer">
        <div class="container">
            <div class="row">

                <h3 class="hidden">About</h3>

                <div class="col-xs-12">
							<span style="color:#999; font-size: 15px;" class="pull-right">
								<a href="http://bayguzin.ru/assets/files/2015/09/travel.zip" target="_blank" class="text-info" style="text-decoration:none;">
                                    <strong><i class="fa fa-download"></i> &nbsp; Download GoExplore!</strong>
                                </a>
							</span>
                    <span style="color:#999; font-size: 13px;" class="copy">Copyright &copy; Globus <?echo (date("Y"));?>. All Rights Reserved</span>
                    <a href="#" class="design"> © Levan Goshadze </a>
                </div>
            </div>
        </div>
    </section>
</footer>

<script <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js", true);?>></script>
<script <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/bootstrap.min.js", true);?>></script>
<script <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/owl.carousel.min.js", true);?>></script>
<script <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/owl.carousel.min.js", true);?>></script>
</body>
</html>
