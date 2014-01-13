<?php

/* partials/next-post.html */
class __TwigTemplate_92c9d3eb5276d38fc41ce73ed1834333 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_page_, "next_sibling"));
        foreach ($context['_seq'] as $context["_key"] => $context["sibling"]) {
            // line 2
            echo "        <section class=\"float-right\">
        \t";
            // line 3
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            if ($this->getAttribute($_page_, "is_last")) {
                // line 4
                echo "        \t";
            } else {
                // line 5
                echo "            <p class=\"text-right\">";
                if (isset($context["sibling"])) { $_sibling_ = $context["sibling"]; } else { $_sibling_ = null; }
                echo $this->getAttribute($_sibling_, "title");
                echo "
            <br><a href=\"";
                // line 6
                if (isset($context["sibling"])) { $_sibling_ = $context["sibling"]; } else { $_sibling_ = null; }
                echo $this->getAttribute($_sibling_, "url");
                echo "\">Next post &rarr;</a></p>
            ";
            }
            // line 8
            echo "        </section>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sibling'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 10
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/next-post.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
