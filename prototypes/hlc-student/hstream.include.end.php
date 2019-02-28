<script src="/scripts/jquery.js"></script>

<script>
         $(function(){
            $('.box').click(function() {
                console.log($(this).data("link"));

                if($(this).data("link") != 'hstream.blueprint.php') {
                    console.log("here");
                    window.location.href = $(this).data("link");   
                }
             });  

              $('.return').click(function() {
                 window.location.href = "hstream.php";   
             }); 
       
            var icons = document.createElement('link');
            icons.setAttribute('rel','stylesheet');
            icons.setAttribute('type','text/css');
            icons.setAttribute('href','/content/styles/healthstream.icons.css');
            document.getElementsByTagName('head')[0].appendChild(icons);
          
         });
            
</script>

</body>
</html>