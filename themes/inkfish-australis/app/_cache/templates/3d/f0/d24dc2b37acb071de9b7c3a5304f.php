<?php

/* partials/navigation/navigation.html */
class __TwigTemplate_3df0d24dc2b37acb071de9b7c3a5304f extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "    <nav  id=\"menu\" role=\"navigation\" class=\"nav\">
            <ul>
            \t";
        // line 3
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_page_, "root"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 4
            echo "                <li><a class=\"";
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            echo $this->getAttribute($_child_, "slug");
            echo "\" href=\"";
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            echo $this->getAttribute($_child_, "url");
            echo "\">";
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            echo $this->getAttribute($_child_, "title");
            echo "</a></li>
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 6
        echo "                 ";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "email", array(), "any", true, true)) {
            // line 7
            echo "\t\t\t\t   <li><a class=\"contact\" href=\"mailto:";
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo $this->getAttribute($_page_, "email");
            echo "\">Contact</a></li>
\t\t\t\t";
        }
        // line 9
        echo "            </ul>
    </nav>";
    }

    public function getTemplateName()
    {
        return "partials/navigation/navigation.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
