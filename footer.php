<div class="vbox wb_container" id="wb_footer">

    <div class="wb_cont_inner" style="height: 130px;"><div id="wb_element_instance158" class="wb_element wb_text_element" style=" line-height: normal;"><p><br><span style="color:rgba(0,0,0,1);"><strong>© 2018 agrosouzplus.ru</strong></span></p></div>
        <div id="wb_element_instance170" class="wb_element" style="text-align: center; width: 100%;">
            <div class="wb_footer"></div>
            <script type="text/javascript">
                $(function() {
                    var footer = $(".wb_footer");
                    var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
                    if (!html) {
                        footer.parent().remove();
                        footer = $("#wb_footer, #wb_footer .wb_cont_inner");
                        footer.css({height: ""});
                    }
                });
            </script></div></div><div class="wb_cont_outer"></div><div class="wb_cont_bg"></div></div><div class="wb_sbg"></div>
</div>
</body>
<?php wp_footer(); ?>
</html>