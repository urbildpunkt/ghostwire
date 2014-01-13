<?php

/* page.html */
class __TwigTemplate_bcc80b882cb60bce731e01e1c9334e91 extends Twig_Template
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
        // line 3
        $this->env->loadTemplate("partials/header.html")->display($context);
        // line 4
        echo "
<section class=\"space-top\">
  <article class=\"container\">
  
    <div class=\"row\">

        <div class=\"grid-1 space-bottom\">
            <h3 class=\"project-category space-bottom\">";
        // line 11
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "title");
        echo "</h3>
            ";
        // line 12
        $this->env->loadTemplate("partials/assets/pdfs.html")->display($context);
        // line 13
        echo "        </div>

        <div class=\"grid-5 row\">
            <section class=\"grid-6 page\">
              <br>
            ";
        // line 18
        $this->env->loadTemplate("partials/assets/media.html")->display($context);
        // line 19
        echo "            ";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "content");
        echo "
            </section>
        </div>

    </div>

  </article>
</section>


      ";
        // line 29
        $this->env->loadTemplate("partials/footer.html")->display($context);
    }

    public function getTemplateName()
    {
        return "page.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
