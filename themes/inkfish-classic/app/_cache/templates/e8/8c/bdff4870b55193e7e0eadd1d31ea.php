<?php

/* project.html */
class __TwigTemplate_e88cbdff4870b55193e7e0eadd1d31ea extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->loadTemplate("partials/header.html")->display($context);
        // line 2
        echo "

<section class=\"space-top\">
  <article class=\"container\">

    <div class=\"row\">

        <div class=\"grid-2 space-bottom grid-flip\">
            <h3 class=\"project-title space-bottom\">";
        // line 10
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "title");
        echo "</h3>
            ";
        // line 11
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "content");
        echo "
            <br><small class=\"date\">";
        // line 12
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo twig_date_format_filter($this->getAttribute($_page_, "date"), "M d, Y");
        echo "</small>
            <br><small class=\"text-muted\">";
        // line 13
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "tags");
        echo "</small>
              <br>
              <!-- AddToAny BEGIN -->
              <br><a class=\"a2a_dd\" href=\"http://www.addtoany.com/share_save\" target=\"_blank\"><i class=\"icon-share\"> Share ";
        // line 16
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "title");
        echo "</i></a>
              <!-- AddToAny END -->
        </div>

        <div class=\"grid-4 page row\">
          <br>
            ";
        // line 22
        $this->env->loadTemplate("partials/assets/gallery.html")->display($context);
        // line 23
        echo "        </div>
        <br>
    </div>
    <br>
    <div class=\"row page space-top\">
        ";
        // line 28
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "siblings")) {
            // line 29
            echo "            ";
            $this->env->loadTemplate("partials/next-project.html")->display($context);
            // line 30
            echo "            ";
            $this->env->loadTemplate("partials/previous-project.html")->display($context);
            // line 31
            echo "          ";
        }
        // line 32
        echo "    </div> 
  </article>
</section>



";
        // line 38
        $this->env->loadTemplate("partials/footer.html")->display($context);
        // line 39
        echo "




";
    }

    public function getTemplateName()
    {
        return "project.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
