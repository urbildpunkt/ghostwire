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
<br> 

<div class=\"container\">       

    <div class=\"row\">
        <article class=\"grid-4 main grid-flip\">
          <section class=\"title\">
              <h3><span class=\"marker-left\"></span>";
        // line 12
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "title");
        echo "<span class=\"marker-right\"></span></h3>
          </section>
            <section class=\"content\">
           <small>";
        // line 15
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "content");
        echo "</small>
            </section>
        </article>

        <div class=\"grid-2 sidebar\">
          <br>
            ";
        // line 21
        $this->env->loadTemplate("partials/assets/media.html")->display($context);
        // line 22
        echo "            ";
        $this->env->loadTemplate("partials/assets/pdfs.html")->display($context);
        // line 23
        echo "        </div>
    </div>

</div>



      ";
        // line 30
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
