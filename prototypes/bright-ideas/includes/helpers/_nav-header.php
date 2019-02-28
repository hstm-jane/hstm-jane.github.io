<style>
.site-header .nav-main .nav>li>a.active {
    background: #ddd;
}
</style>
<script language="javascript" type="text/javascript">
function setActive() {
    aObj = document.getElementById('nav').getElementsByTagName('a');
    for (i = 0; i < aObj.length; i++) {
        if (document.location.href.indexOf(aObj[i].href) >= 0) {
            aObj[i].className = 'active';
        }
    }
}
window.onload = setActive;
</script>
