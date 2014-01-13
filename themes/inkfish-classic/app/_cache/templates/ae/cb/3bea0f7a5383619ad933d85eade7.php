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


            ";
        // line 5
        $this->env->loadTemplate("partials/navigation/projects-list.html")->display($context);
        // line 6
        echo "    



      ";
        // line 10
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
