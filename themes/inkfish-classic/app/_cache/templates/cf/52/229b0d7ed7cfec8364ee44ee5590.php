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
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_page_, "root"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 2
            echo "
\t";
            // line 3
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            if ($this->getAttribute($_child_, "children")) {
                // line 4
                echo "
\t\t";
                // line 5
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_child_, "children"));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 6
                    echo "
\t\t\t";
                    // line 7
                    if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                    if ($this->getAttribute($_child_, "children")) {
                        // line 8
                        echo "
\t\t\t\t";
                        // line 9
                        if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->getAttribute($_child_, "children")));
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 10
                            echo "
\t\t\t\t";
                            // line 11
                            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                            if (($this->getAttribute($_child_, "featured") == true)) {
                                // line 12
                                echo "\t\t\t\t<div class=\"space-bottom\">                    
\t\t            <a href=\"";
                                // line 13
                                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                                echo $this->getAttribute($_child_, "url");
                                echo "\">";
                                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                                echo $this->getAttribute($_child_, "title");
                                echo "</a>
\t\t        </div>
\t\t        ";
                            }
                            // line 16
                            echo "
\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 18
                        echo "\t\t\t\t
\t\t\t";
                    }
                    // line 20
                    echo "
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 22
                echo "
\t";
            }
            // line 24
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
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
