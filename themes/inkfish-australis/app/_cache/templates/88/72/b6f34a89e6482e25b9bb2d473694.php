<?php

/* partials/navigation/posts-list.html */
class __TwigTemplate_8872b6f34a89e6482e25b9bb2d473694 extends Twig_Template
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
        // line 6
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "children")) {
            // line 7
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Stacey')->sortbydate($this->getAttribute($_page_, "children"), $this->getAttribute($_child_, "date")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 8
                echo "  <article class=\"post-listing row\">
    <aside class=\"grid-2\">
      ";
                // line 10
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                if ($this->getAttribute($_child_, "thumb")) {
                    // line 11
                    echo "       <a href=\"";
                    if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                    echo $this->getAttribute($_child_, "url");
                    echo "\" class=\"post-thumb\"><img src=\"";
                    if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                    echo $this->getAttribute($this->getAttribute($_child_, "thumb"), "url");
                    echo "\" width=\"";
                    if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                    echo $this->getAttribute($this->getAttribute($_child_, "thumb"), "width");
                    echo "\" height=\"";
                    if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                    echo $this->getAttribute($this->getAttribute($_child_, "thumb"), "height");
                    echo "\" alt=\"\"></a>
      ";
                }
                // line 13
                echo "    </aside>
    <section class=\"grid-4\">
      <a href=\"";
                // line 15
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                echo $this->getAttribute($_child_, "url");
                echo "\" class=\"post-title\">";
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                echo $this->getAttribute($_child_, "title");
                echo "</a>
      <br><small class=\"date\">";
                // line 16
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                echo twig_date_format_filter($this->getAttribute($_child_, "date"), "M d, Y");
                echo "</small>
      <br><small class=\"tags text-muted\">";
                // line 17
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                echo $this->getAttribute($_child_, "tags");
                echo "</small>
      <br><small class=\"post-text\">";
                // line 18
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                echo $this->getAttribute($_child_, "description");
                echo "</small>
    </section>
  </article>
<hr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        }
    }

    public function getTemplateName()
    {
        return "partials/navigation/posts-list.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
