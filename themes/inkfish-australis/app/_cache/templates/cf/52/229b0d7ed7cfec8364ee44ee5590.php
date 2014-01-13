<?php

/* partials/navigation/featured-list.html */
class __TwigTemplate_cf52229b0d7ed7cfec8364ee44ee5590 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_page_, "images"));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 3
            echo "        <li>
          <a href=\"";
            // line 4
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo $this->getAttribute($_page_, "root_path");
            echo "?/portfolio/";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo $this->getAttribute($_image_, "link");
            echo "/\"><img src=\"";
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
            echo "\"></a>
        </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 6
        echo "      ";
    }

    public function getTemplateName()
    {
        return "partials/navigation/featured-list.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
