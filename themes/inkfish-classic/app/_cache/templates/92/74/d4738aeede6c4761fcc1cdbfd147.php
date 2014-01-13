<?php

/* partials/navigation/projects-list.html */
class __TwigTemplate_9274d4738aeede6c4761fcc1cdbfd147 extends Twig_Template
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
";
        // line 6
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if (($this->getAttribute($_page_, "categories") == true)) {
            // line 7
            echo "
  ";
            // line 8
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_page_, "children"));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 9
                echo "  ";
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                if ($this->getAttribute($_child_, "children")) {
                    // line 10
                    echo "  <div class=\"row\">

      <div class=\"grid-1\">
          <h3 class=\"project-category space-bottom\"><a  href=\"";
                    // line 13
                    if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                    echo $this->getAttribute($_child_, "url");
                    echo "\">";
                    if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                    echo $this->getAttribute($_child_, "title");
                    echo "  &rarr;</a></h3>
      </div>

  <div class=\"grid-5 row text-center\">
    ";
                    // line 17
                    if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->getAttribute($_child_, "children")));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 18
                        echo "      <div class=\"grid-img project-listing row\">
        <div class=\"grid-2\">
          ";
                        // line 20
                        if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                        if ($this->getAttribute($_child_, "thumb")) {
                            // line 21
                            echo "
            <a href=\"";
                            // line 22
                            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                            echo $this->getAttribute($_child_, "url");
                            echo "\" class=\"project-thumb\"><img src=\"";
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
                        // line 25
                        echo "          </div>
          <div class=\"grid-4 space-bottom\">                    
            <h3 class=\"no-space\"><a href=\"";
                        // line 27
                        if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                        echo $this->getAttribute($_child_, "url");
                        echo "\" class=\"project-title\">";
                        if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                        echo $this->getAttribute($_child_, "title");
                        echo "</a></h3>
            <br><small class=\"date\">";
                        // line 28
                        if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                        echo twig_date_format_filter($this->getAttribute($_child_, "date"), "M d, Y");
                        echo "</small>
            <br><small class=\"text-muted\">";
                        // line 29
                        if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                        echo $this->getAttribute($_child_, "tags");
                        echo "</small>
         </div>
      </div>
    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 33
                    echo "  </div>
  </div>
  ";
                }
                // line 36
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 37
            echo "
";
        } else {
            // line 39
            echo "
  ";
            // line 40
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            if ($this->getAttribute($_page_, "children")) {
                // line 41
                echo "  <div class=\"row\">

      <div class=\"grid-1\">
          <h3 class=\"project-category space-bottom\"><a  href=\"";
                // line 44
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                echo $this->getAttribute($_page_, "root_path");
                echo "?/portfolio/\">&larr; ";
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                echo $this->getAttribute($_page_, "title");
                echo "</a></h3>
      </div>

    <div class=\"grid-5 row text-center\">
    ";
                // line 48
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Stacey')->sortbydate($this->getAttribute($_page_, "children"), $this->getAttribute($_child_, "date")));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 49
                    echo "      <div class=\"grid-img project-listing row\">
        <div class=\"grid-2\">
          ";
                    // line 51
                    if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                    if ($this->getAttribute($_child_, "thumb")) {
                        // line 52
                        echo "
            <a href=\"";
                        // line 53
                        if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                        echo $this->getAttribute($_child_, "url");
                        echo "\" class=\"project-thumb\"><img src=\"";
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
                    // line 56
                    echo "          </div>
          <div class=\"grid-4 space-bottom\">                    
            <h3 class=\"no-space\"><a href=\"";
                    // line 58
                    if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                    echo $this->getAttribute($_child_, "url");
                    echo "\" class=\"project-title\">";
                    if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                    echo $this->getAttribute($_child_, "title");
                    echo "</a></h3>
            <br><small class=\"date\">";
                    // line 59
                    if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                    echo twig_date_format_filter($this->getAttribute($_child_, "date"), "M d, Y");
                    echo "</small>
            <br><small class=\"text-muted\">";
                    // line 60
                    if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                    echo $this->getAttribute($_child_, "tags");
                    echo "</small>
         </div>
      </div>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 64
                echo "    </div>
  </div>
  ";
            }
            // line 67
            echo "
";
        }
        // line 69
        echo "</article>
</section>";
    }

    public function getTemplateName()
    {
        return "partials/navigation/projects-list.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
