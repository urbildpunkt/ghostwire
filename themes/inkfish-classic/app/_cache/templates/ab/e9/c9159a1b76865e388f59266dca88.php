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
<section class=\"space-top\">
  <article class=\"container\">

    <div class=\"row\">

        <div class=\"grid-1 space-bottom\">
            <h3 class=\"project-title space-bottom\">";
        // line 9
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "title");
        echo "</h3>
            ";
        // line 10
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "content");
        echo "
             ";
        // line 11
        $this->env->loadTemplate("partials/navigation/featured-list.html")->display($context);
        // line 12
        echo "
        </div>

        <div class=\"grid-5 text page row\">
          <br>
            ";
        // line 17
        $this->env->loadTemplate("partials/assets/gallery.html")->display($context);
        // line 18
        echo "        </div>
        <br>
    </div>
    <br>
  </article>
</section>


      ";
        // line 26
        $this->env->loadTemplate("partials/footer.html")->display($context);
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
