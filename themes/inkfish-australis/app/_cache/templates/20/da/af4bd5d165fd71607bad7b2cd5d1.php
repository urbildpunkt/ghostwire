<?php

/* blog.html */
class __TwigTemplate_20daaf4bd5d165fd71607bad7b2cd5d1 extends Twig_Template
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

<br>

<div class=\"container\">   
    ";
        // line 7
        $this->env->loadTemplate("partials/navigation/posts-list.html")->display($context);
        // line 8
        echo "</div>


      ";
        // line 11
        $this->env->loadTemplate("partials/footer.html")->display($context);
    }

    public function getTemplateName()
    {
        return "blog.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
