<?php

/* portfolio.html */
class __TwigTemplate_aecb3bea0f7a5383619ad933d85eade7 extends Twig_Template
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
<div class=\"container\">   

  <div class=\"row\">

        <div class=\"grid-4 offset-1\">
            ";
        // line 8
        $this->env->loadTemplate("partials/navigation/projects-list.html")->display($context);
        // line 9
        echo "        </div>

  </div>

</div>

      ";
        // line 15
        $this->env->loadTemplate("partials/footer.html")->display($context);
    }

    public function getTemplateName()
    {
        return "portfolio.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
