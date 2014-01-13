<?php

/* partials/assets/social-widget.html */
class __TwigTemplate_753879c2fa6f095d0f40466f142d4184 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<nav class=\"social-nav\">
  <ul>
    ";
        // line 3
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "linkedin", array(), "any", true, true)) {
            // line 4
            echo "    <li class=\"linkedin\"><a href=\"";
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo $this->getAttribute($_page_, "linkedin");
            echo "\" target=\"_blank\"><i class=\"icon-linkedin\"></i></a></li>
     ";
        }
        // line 6
        echo "    ";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "facebook", array(), "any", true, true)) {
            // line 7
            echo "    <li class=\"facebook\"><a href=\"";
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo $this->getAttribute($_page_, "facebook");
            echo "\" target=\"_blank\"><i class=\"icon-facebook\"></i></a></li>
    ";
        }
        // line 9
        echo "     ";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "googleplus", array(), "any", true, true)) {
            // line 10
            echo "    <li class=\"googleplus\"><a href=\"";
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo $this->getAttribute($_page_, "googleplus");
            echo "\" target=\"_blank\"><i class=\"icon-google-plus\"></i></a></li>
     ";
        }
        // line 12
        echo "     ";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "twitter", array(), "any", true, true)) {
            // line 13
            echo "    <li class=\"twitter\"><a href=\"";
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo $this->getAttribute($_page_, "twitter");
            echo "\" target=\"_blank\"><i class=\"icon-twitter\"></i></a></li>
     ";
        }
        // line 15
        echo "     ";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "adn", array(), "any", true, true)) {
            // line 16
            echo "    <li class=\"adn\"><a href=\"";
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo $this->getAttribute($_page_, "adn");
            echo "\" target=\"_blank\"><i class=\"icon-adn\"></i></a></li>
     ";
        }
        // line 18
        echo "     ";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "tumblr", array(), "any", true, true)) {
            // line 19
            echo "    <li class=\"tumblr\"><a href=\"";
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo $this->getAttribute($_page_, "tumblr");
            echo "\" target=\"_blank\"><i class=\"icon-tumblr\"></i></a></li>
     ";
        }
        // line 21
        echo "     ";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "instagram", array(), "any", true, true)) {
            // line 22
            echo "    <li class=\"instagram\"><a href=\"";
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo $this->getAttribute($_page_, "instagram");
            echo "\" target=\"_blank\"><i class=\"icon-instagram\"></i></a></li>
     ";
        }
        // line 24
        echo "     ";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "pinterest", array(), "any", true, true)) {
            // line 25
            echo "    <li class=\"pinterest\"><a href=\"";
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo $this->getAttribute($_page_, "pinterest");
            echo "\" target=\"_blank\"><i class=\"icon-pinterest\"></i></a></li>
     ";
        }
        // line 27
        echo "     ";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "dribbble", array(), "any", true, true)) {
            // line 28
            echo "    <li class=\"dribbble\"><a href=\"";
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo $this->getAttribute($_page_, "dribbble");
            echo "\" target=\"_blank\"><i class=\"icon-dribbble\"></i></a></li>
     ";
        }
        // line 30
        echo "     ";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "flickr", array(), "any", true, true)) {
            // line 31
            echo "    <li class=\"flickr\"><a href=\"";
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo $this->getAttribute($_page_, "flickr");
            echo "\" target=\"_blank\"><i class=\"icon-flickr\"></i></a></li>
     ";
        }
        // line 33
        echo "     ";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "youtube", array(), "any", true, true)) {
            // line 34
            echo "    <li class=\"youtube\"><a href=\"";
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo $this->getAttribute($_page_, "youtube");
            echo "\" target=\"_blank\"><i class=\"icon-youtube-play\"></i></a></li>
     ";
        }
        // line 36
        echo "  </ul>
</nav>";
    }

    public function getTemplateName()
    {
        return "partials/assets/social-widget.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
