<?php

/* index.html */
class __TwigTemplate_abe9c9159a1b76865e388f59266dca88 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "      ";
        $this->env->loadTemplate("partials/header.html")->display($context);
        // line 2
        echo "      
<ul class=\"subnav\">
    <li class=\"text-small text-muted\"></li>
</ul>

<div class=\"container\">   

  <div class=\"row\">
        <div class=\"grid-4 offset-1 main\">
            <div class=\"callbacks_container\">
              <ul class=\"rslides\" id=\"slider\">
                ";
        // line 13
        $this->env->loadTemplate("partials/navigation/featured-list.html")->display($context);
        // line 14
        echo "              </ul>
            </div>
        </div>


  </div>

</div>

      ";
        // line 23
        $this->env->loadTemplate("partials/index-footer.html")->display($context);
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
