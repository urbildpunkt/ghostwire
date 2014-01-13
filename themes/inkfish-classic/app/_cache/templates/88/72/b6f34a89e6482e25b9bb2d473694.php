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
    


<section class=\"space-top\">
 <article class=\"container\">
  <div class=\"row\">

        <div class=\"grid-1\">
            <h3 class=\"project-category space-bottom\">";
        // line 10
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "title");
        echo "</h3>
        </div>

";
        // line 13
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "children")) {
            // line 14
            echo " <div class=\"grid-5 row\">
";
            // line 15
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Stacey')->sortbydate($this->getAttribute($_page_, "children"), $this->getAttribute($_child_, "date")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 16
                echo "  <div class=\"project-listing grid-6 row\">
      <div class=\"grid-2\">
      ";
                // line 18
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                if ($this->getAttribute($_child_, "thumb")) {
                    // line 19
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
                // line 21
                echo "     </div>
      <div class=\"grid-4 space-bottom\">                    
          <h3 class=\"no-space\"><a href=\"";
                // line 23
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                echo $this->getAttribute($_child_, "url");
                echo "\" class=\"post-title\">";
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                echo $this->getAttribute($_child_, "title");
                echo "</a></h3>
          <br><small class=\"date\">";
                // line 24
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                echo twig_date_format_filter($this->getAttribute($_child_, "date"), "M d, Y");
                echo "</small>
          <br><small class=\"text-muted\">";
                // line 25
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                echo $this->getAttribute($_child_, "tags");
                echo "</small>
          <br><span>";
                // line 26
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                echo $this->getAttribute($_child_, "description");
                echo "</span>
      </div>
  </div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 30
            echo "</div>
";
        }
        // line 32
        echo "</div>
</article>
</section>
";
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
