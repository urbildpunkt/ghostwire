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
        // line 3
        $this->env->loadTemplate("partials/header.html")->display($context);
        // line 4
        echo "      

<br>

<div class=\"container\"> 

    <div class=\"row\">
        ";
        // line 11
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "siblings")) {
            // line 12
            echo "            ";
            $this->env->loadTemplate("partials/next-post.html")->display($context);
            // line 13
            echo "            ";
            $this->env->loadTemplate("partials/previous-post.html")->display($context);
            // line 14
            echo "          ";
        }
        // line 15
        echo "    </div>      

    <div class=\"row\">

        <div class=\"grid-4 main grid-flip\">
            <h3><span class=\"marker-left\"></span>";
        // line 20
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "title");
        echo "<span class=\"marker-right\"></span></h3>
           <small>";
        // line 21
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "content");
        echo "</small>
          <span class=\"ending\">
            <span class=\"date\"> ";
        // line 23
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo twig_date_format_filter($this->getAttribute($_page_, "date"), "M d, Y");
        echo " </span>
            <br><span class=\"tags text-muted\">";
        // line 24
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "tags");
        echo "</span>
          </span>
        </div>

        <div class=\"grid-2 sidebar\">
          <br>
            ";
        // line 30
        $this->env->loadTemplate("partials/assets/media.html")->display($context);
        // line 31
        echo "            ";
        $this->env->loadTemplate("partials/assets/pdfs.html")->display($context);
        // line 32
        echo "        </div>
    </div>

</div>



      ";
        // line 39
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
