<!DOCTYPE html>
 <html>
   <head> 
     <title>Grenada Links</title>
     <meta charset='utf-8'>
     <meta name='viewport' content='width=device-width, initial-scale = 1.0' />
     <link rel='stylesheet' href='./styles.css' />
     <script src="https://unpkg.com/vue/dist/vue.js"></script>
   </head>
   <body>
     <div id="exercise" class='container'>
       <div>
         <img v-bind:src='link'>
       </div>
     </div>
     <footer> 
      

       <p class='coming_soon'>Coming Soon!!!<br/>This website is being developed by DCM Grenada</p>
       <p class='copyright'>&copy;Grenada Links<?php echo date("Y"); ?>.  
                            All rights reserved</p>
     </footer>
     <script>
	   new Vue({
			      el: '#exercise',
			      data: {
				           link: './dcm_logo.png'
			            }
			  })
	 </script>
 </body>
 </html>