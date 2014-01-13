<?php

/* partials/previous-post.html */
class __TwigTemplate_ac36deacf9a915f7c7c7b9f92a4afb19 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_page_, "previous_sibling"));
        foreach ($context['_seq'] as $context["_key"] => $context["sibling"]) {
            // line 2
            echo "        <section class=\"float-left\">
        \t";
            // line 3
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            if ($this->getAttribute($_page_, "is_first")) {
                // line 4
                echo "        \t";
            } else {
                // line 5
                echo "            <p class=\"text-left\"><small>";
                if (isset($context["sibling"])) { $_sibling_ = $context["sibling"]; } else { $_sibling_ = null; }
                echo $this->getAttribute($_sibling_, "title");
                echo "</small>
            <br><a href=\"";
                // line 6
                if (isset($context["sibling"])) { $_sibling_ = $context["sibling"]; } else { $_sibling_ = null; }
                echo $this->getAttribute($_sibling_, "url");
                echo "\">&larr; Prev. post</a></p>
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
        return "partials/previous-post.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
