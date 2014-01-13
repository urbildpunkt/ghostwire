<?php

/* post.html */
class __TwigTemplate_ed92b6303904e66d35af76cf75e97366 extends Twig_Template
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
        $this->env->loadTemplate("partials/header.html")->display($context);
        // line 3
        echo "

<section class=\"space-top\">
  <article class=\"container\">

    <div class=\"row\">

        <div class=\"grid-2 page row\">
          <br>
            ";
        // line 12
        $this->env->loadTemplate("partials/assets/media.html")->display($context);
        // line 13
        echo "            ";
        $this->env->loadTemplate("partials/assets/pdfs.html")->display($context);
        // line 14
        echo "        </div>

        <div class=\"grid-4 space-bottom\">
            <h3 class=\"post-title space-bottom\">";
        // line 17
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "title");
        echo "</h3>
            ";
        // line 18
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "content");
        echo "
            <br><small class=\"date\">";
        // line 19
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo twig_date_format_filter($this->getAttribute($_page_, "date"), "M d, Y");
        echo "</small>
            <br><small class=\"text-muted\">";
        // line 20
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "tags");
        echo "</small>
            <br>
              <!-- AddToAny BEGIN -->
              <br><a class=\"a2a_dd\" href=\"http://www.addtoany.com/share_save\" target=\"_blank\"><i class=\"icon-share\"> Share ";
        // line 23
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "title");
        echo "</i></a>
              <!-- AddToAny END -->
        </div>

        <br>
    </div>
    <br>
    <div class=\"row page space-top\">
        ";
        // line 31
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "siblings")) {
            // line 32
            echo "            ";
            $this->env->loadTemplate("partials/next-post.html")->display($context);
            // line 33
            echo "            ";
            $this->env->loadTemplate("partials/previous-post.html")->display($context);
            // line 34
            echo "          ";
        }
        // line 35
        echo "    </div> 
  </article>
</section>



";
        // line 41
        $this->env->loadTemplate("partials/footer.html")->display($context);
    }

    public function getTemplateName()
    {
        return "post.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
