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
";
        // line 2
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if (($this->getAttribute($_page_, "categories") == true)) {
            // line 3
            echo "
  ";
            // line 4
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_page_, "children"));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 5
                echo "  ";
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                if ($this->getAttribute($_child_, "children")) {
                    // line 6
                    echo "    <section class=\"projects-list space-top row\">
      <section class=\"category\">
        <h3 class=\"text-small text-muted text-left\"><a  href=\"";
                    // line 8
                    if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                    echo $this->getAttribute($_child_, "url");
                    echo "\">";
                    if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                    echo $this->getAttribute($_child_, "title");
                    echo "  &rarr;</a></h3>
      </section>
      <br>
    ";
                    // line 11
                    if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Stacey')->sortbydate($this->getAttribute($_child_, "children"), $this->getAttribute($_child_, "date")));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 12
                        echo "      <div class=\"grid-2 project-listing\">
        <div class=\"space-bottom\">
          ";
                        // line 14
                        if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                        if ($this->getAttribute($_child_, "thumb")) {
                            // line 15
                            echo "
            <a href=\"";
                            // line 16
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
                        // line 19
                        echo "          <p>
          <a href=\"";
                        // line 20
                        if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                        echo $this->getAttribute($_child_, "url");
                        echo "\" class=\"project-title\">";
                        if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                        echo $this->getAttribute($_child_, "title");
                        echo "</a>
          <br><small class=\"date\">";
                        // line 21
                        if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                        echo twig_date_format_filter($this->getAttribute($_child_, "date"), "M d, Y");
                        echo "</small>
          <br><small class=\"tags text-muted\">";
                        // line 22
                        if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                        echo $this->getAttribute($_child_, "tags");
                        echo "</small>
          </p>
        </div>
      </div>
    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 27
                    echo "    </section>
  ";
                }
                // line 29
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 30
            echo "
";
        } else {
            // line 32
            echo "
  ";
            // line 33
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            if ($this->getAttribute($_page_, "children")) {
                // line 34
                echo "    <section class=\"projects-list space-top row\">
      <section class=\"category\">
        <h3 class=\"text-small text-muted text-left\"><a  href=\"";
                // line 36
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                echo $this->getAttribute($_page_, "root_path");
                echo "?/portfolio/\">&larr; ";
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                echo $this->getAttribute($_page_, "title");
                echo "</a></h3>
      </section>
      <br>
    ";
                // line 39
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Stacey')->sortbydate($this->getAttribute($_page_, "children"), $this->getAttribute($_child_, "date")));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 40
                    echo "      <div class=\"grid-2 project-listing\">
        <div class=\"space-bottom\">
          ";
                    // line 42
                    if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                    if ($this->getAttribute($_child_, "thumb")) {
                        // line 43
                        echo "
            <a href=\"";
                        // line 44
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
                    // line 47
                    echo "          <p>
          <a href=\"";
                    // line 48
                    if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                    echo $this->getAttribute($_child_, "url");
                    echo "\" class=\"project-title\">";
                    if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                    echo $this->getAttribute($_child_, "title");
                    echo "</a>
          <br><small class=\"date\">";
                    // line 49
                    if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                    echo twig_date_format_filter($this->getAttribute($_child_, "date"), "M d, Y");
                    echo "</small>
          <br><small class=\"tags text-muted\">";
                    // line 50
                    if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                    echo $this->getAttribute($_child_, "tags");
                    echo "</small>
          </p>
        </div>
      </div>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 55
                echo "    </section>
  ";
            }
            // line 57
            echo "
";
        }
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
