<?php

/* partials/footer.html */
class __TwigTemplate_fd39524ef9c5128f77374b8a6af61435 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<br>
<footer class=\"footer\">
    <section class=\"inner-footer\">
    <div class=\"container\">
        <article class=\"grid-2 widget\">
            <br>
        </article>
        <article class=\"grid-2 grid-flip text-center\">
          ";
        // line 9
        $this->env->loadTemplate("partials/assets/social-widget.html")->display($context);
        // line 10
        echo "        </article>
        <article class=\"grid-2 copyright\">
            <small class=\"text-muted\">&copy; ";
        // line 12
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "current_year");
        echo " ";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "name");
        echo " - <a class=\"atom-rss\" href=\"";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "/?/feed/\"> RSS</a>
            <br>Built with <a href=\"http://jquealy.com/portfolio/website-themes/\"  target=\"_blank\"><em>Inkfish</em></a> and <a href=\"http://www.staceyapp.com\" target=\"_blank\">Stacey</a> CMS. </small>
        </article>
    </div>
    </section>
</footer>

        <!-- Javascript -->
        <!-- In the footer for better performance -->
        <script>

            // call a function immediately after jQuery is loaded
        head.ready(\"jquery\", function() {
         
           // Navigation
               \$('.nav-toggle').click(function(e) { // When a link or button with the .nav-toggle class is clicked
                e.preventDefault(); // Prevent the default action from occurring
                var dataID = \$(this).attr('data-target'); // Get the ID of navigation menu
                \$(dataID).toggleClass('active'); // Add or remove the .active class from the navigation menu
            });

               \$('body').addClass('js'); // On page load, add the .js class to the <body> element.
         
        });

            // call a function immediately after jQuery Tools is loaded
        head.ready(\"gallery\", function() {
         
           // Slideshow
              \$(\"#slider\").responsiveSlides({
                maxwidth: 800,
                auto: false,
                pager: false,
                nav: true,
                prevText: \" Prev. image\",  
                nextText: \"Next image \",      
                speed: 1000,
                timeout: 4600,
                pause: true
              });
           
        });
         
        // load scripts by assigning a label for them
        head.js(
           {jquery: \"//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"},
           {gallery: \"//cdnjs.cloudflare.com/ajax/libs/ResponsiveSlides.js/1.53/responsiveslides.min.js\"},
           {addto: \"//static.addtoany.com/menu/page.js\"}
        );
        </script>

    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
