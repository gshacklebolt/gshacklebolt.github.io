<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="author" content="Ghazali">
    <meta name="robots" content="noindex" />

    <title>Ghazali's Portfolio | Page Not Found</title>

    <link rel="icon" type="image/ico" href="/images/ghazali.ico" />

    <!-- For Performance Improvements -->  
    <link
      crossorigin
      rel="preload"
      href="https://fonts.googleapis.com/css?family=Great+Vibes|Lato:300,400,700,900&display=swap"
      as="style"
      onload="this.onload=null;this.rel='stylesheet'"
    />
    <link
      crossorigin="anonymous"
      integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw=="
      rel="preload"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css"
      as="style"
      onload="this.onload=null;this.rel='stylesheet'"
    />
    <link
      crossorigin
      rel="preload"
      href="https://cdnjs.cloudflare.com/ajax/libs/devicon/2.4/devicon.min.css"
      as="style"
      onload="this.onload=null;this.rel='stylesheet'"
    />
	  
    <link rel="preload" href="/styles/bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'" />

    <link href="/styles/styles.min.css" rel="stylesheet" />

    <noscript>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Great+Vibes|Lato:300,400,700,900&display=swap" />
      <link
        crossorigin="anonymous"
        integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw=="
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css"
      />
		
      <link crossorigin rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/devicon/2.4/devicon.min.css" />

      <link href="/styles/bootstrap.min.css" rel="stylesheet" />
      
		<style>
        #heading {
          padding-bottom: 20px;
        }
        #subheading {
          display: none;
        }
      </style>
    </noscript>
  </head>

  <body>
  	<section id="pnf404" class="background-alt" accesskey="p">
      <h2 class="heading heading_404">OH NO! <span>ERROR 404</span></h2>
      <div class="pnf404_block">
        <div class="project shadow">
        	<div class="error_details">
        		<h3>Page Not Found</h3>
        		<img src="/images/sad_face.webp" alt="Sad Face" />
        		<p>This is probably not what you are looking for. </p>
        		<a href="/index.php" target="_self" rel="noopener" class="btn-rounded-blue">Go back to home</a>
		        </div>
	        </div> 
        </div>
      </div>
    </section>
    <!-- End #projects -->
    <footer>
      <?php include("./common/footer.php"); ?>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript">
    	window.onload = function (s){
    		s("html").removeClass("no-js"),
    		s("#to-top").click(function () {
				s("html, body").animate({
					scrollTop: 0
				}, 500)
			})
      }(jQuery);
    </script>
  </body>
</html>