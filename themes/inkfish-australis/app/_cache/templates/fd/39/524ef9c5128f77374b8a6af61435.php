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
        echo "<footer class=\"footer\">
    <section class=\"inner-footer\">
    <div class=\"container\">
        <article class=\"grid-2 widget\">
            <br>
        </article>
        <article class=\"grid-2 grid-flip \">
            <nav class=\"social-nav\">
              <ul>
                ";
        // line 10
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "linkedin", array(), "any", true, true)) {
            // line 11
            echo "                <li class=\"linkedin\"><a href=\"";
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo $this->getAttribute($_page_, "linkedin");
            echo "\" target=\"_blank\"><i class=\"icon-linkedin-sign\"></i></a></li>
                 ";
        }
        // line 13
        echo "                ";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "facebook", array(), "any", true, true)) {
            // line 14
            echo "                <li class=\"facebook\"><a href=\"";
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo $this->getAttribute($_page_, "facebook");
            echo "\" target=\"_blank\"><i class=\"icon-facebook-sign\"></i></a></li>
                ";
        }
        // line 16
        echo "                 ";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "googleplus", array(), "any", true, true)) {
            // line 17
            echo "                <li class=\"googleplus\"><a href=\"";
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo $this->getAttribute($_page_, "googleplus");
            echo "\" target=\"_blank\"><i class=\"icon-google-plus-sign\"></i></a></li>
                 ";
        }
        // line 19
        echo "                 ";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "twitter", array(), "any", true, true)) {
            // line 20
            echo "                <li class=\"twitter\"><a href=\"";
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo $this->getAttribute($_page_, "twitter");
            echo "\" target=\"_blank\"><i class=\"icon-twitter-sign\"></i></a></li>
                 ";
        }
        // line 22
        echo "                 ";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "adn", array(), "any", true, true)) {
            // line 23
            echo "                <li class=\"adn\"><a href=\"";
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo $this->getAttribute($_page_, "adn");
            echo "\" target=\"_blank\"><i class=\"icon-adn\"></i></a></li>
                 ";
        }
        // line 25
        echo "                 ";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "tumblr", array(), "any", true, true)) {
            // line 26
            echo "                <li class=\"tumblr\"><a href=\"";
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo $this->getAttribute($_page_, "tumblr");
            echo "\" target=\"_blank\"><i class=\"icon-tumblr-sign\"></i></a></li>
                 ";
        }
        // line 28
        echo "                 ";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "instagram", array(), "any", true, true)) {
            // line 29
            echo "                <li class=\"instagram\"><a href=\"";
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo $this->getAttribute($_page_, "instagram");
            echo "\" target=\"_blank\"><i class=\"icon-instagram\"></i></a></li>
                 ";
        }
        // line 31
        echo "                 ";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "pinterest", array(), "any", true, true)) {
            // line 32
            echo "                <li class=\"pinterest\"><a href=\"";
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo $this->getAttribute($_page_, "pinterest");
            echo "\" target=\"_blank\"><i class=\"icon-pinterest-sign\"></i></a></li>
                 ";
        }
        // line 34
        echo "                 ";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "dribbble", array(), "any", true, true)) {
            // line 35
            echo "                <li class=\"dribbble\"><a href=\"";
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo $this->getAttribute($_page_, "dribbble");
            echo "\" target=\"_blank\"><i class=\"icon-dribbble\"></i></a></li>
                 ";
        }
        // line 37
        echo "                 ";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "flickr", array(), "any", true, true)) {
            // line 38
            echo "                <li class=\"flickr\"><a href=\"";
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo $this->getAttribute($_page_, "flickr");
            echo "\" target=\"_blank\"><i class=\"icon-flickr\"></i></a></li>
                 ";
        }
        // line 40
        echo "                 ";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "youtube", array(), "any", true, true)) {
            // line 41
            echo "                <li class=\"youtube\"><a href=\"";
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo $this->getAttribute($_page_, "youtube");
            echo "\" target=\"_blank\"><i class=\"icon-youtube-play\"></i></a></li>
                 ";
        }
        // line 43
        echo "              </ul>
            </nav>
        </article>
        <article class=\"grid-2 copyright\">
            <small class=\"text-muted\">&copy; ";
        // line 47
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
        <script src=\"";
        // line 56
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "/public/docs/js/inkfish.js\"></script>
        <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js\"></script>

   
        <script type=\"text/javascript\">
            \$(document).ready(function() {
              \$('body').addClass('js');
                  var \$menu = \$('#menu'),
                    \$menulink = \$('.menu-link');
                    \$menulink.click(function() {
                    \$menulink.toggleClass('active');
                    \$menu.toggleClass('active');
                    return false;
                });

            });               
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
