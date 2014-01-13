<?php

/* partials/assets/gallery.html */
class __TwigTemplate_5d49c5750cfadaf8600a4e1ecb6a005a extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "    <div class=\"callbacks_container\">
      <ul class=\"rslides\" id=\"slider\">
";
        // line 3
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_page_, "images"));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 4
            echo "        <li>
          <img src=\"";
            // line 5
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo $this->getAttribute($_image_, "url");
            echo "\" alt=\"";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo $this->getAttribute($_image_, "title");
            echo "\" width=\"";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo $this->getAttribute($_image_, "width");
            echo "\" height=\"";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo $this->getAttribute($_image_, "height");
            echo "\">
          ";
            // line 6
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            if ($this->getAttribute($_image_, "caption")) {
                // line 7
                echo "          <p class=\"caption\">";
                if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                echo $this->getAttribute($_image_, "caption");
                echo "</p>
           ";
            }
            // line 9
            echo "        </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 10
        echo "      
      </ul>
    </div>

    

    

";
    }

    public function getTemplateName()
    {
        return "partials/assets/gallery.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
