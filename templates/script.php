<script>
    jQuery(document).ready(function(){
        document.querySelector('.to-top-button').hide();
        jQuery(window).scroll(function(){
            var value=400;
            var scrolling=jQuery(window).scrollTop();
            if(scrolling>value){
                jQuery('.to-top-button').fadeIn();
            } else{
                jQuery('.to-top-button').fadeOut();
            }
        });
        jQuery('.to-top-button').click(function(){
            jQuery('html, body').animate({scrollTop:'0px'},800);
            return !1;
        });
    });
    (function changeDownloadLinks() {
        let allLinks = document.getElementById('footer-navigation').getElementsByTagName('a');
        for (let i = 0; i < allLinks.length; i++) {
            if (allLinks[i].pathname === '/mitgliedsantrag.html') {
                allLinks[i].pathname = '/files/dokumente/beitrittserklaerung.docx';
            }
        }
    })();
</script>