<div class="row justify-content-center marginRight">
  <div class="col-8 col-md-9 col-lg-9">
    <br>
    <p style="color:white">Mi Garage 2018™-Todos los derechos reservados</p
  </div>
</div>
<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/bootstrap.js"></script>

<script type="text/javascript">
 window.onload = () => {
   const $themeSelector = $("#theme-selector");

   $themeSelector.change((event) => {
     setTheme(event.currentTarget.value)
   });

   const setTheme = (theme) => {
       $("body").removeClass('night');
       if (theme === 'night') $("body").addClass('night');
       localStorage.setItem('theme', theme);
   };

   $themeSelector.val('day');

   if (localStorage.getItem('theme') === 'night') {
      setTheme(localStorage.getItem('theme'));
      $themeSelector.val('night');
   }


  };

</script>
