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
        echo "      ";
        $this->env->loadTemplate("partials/header.html")->display($context);
        // line 2
        echo "
<br> 
   
<div class=\"container\">
    <div class=\"row\">
        ";
        // line 7
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "siblings")) {
            // line 8
            echo "            ";
            $this->env->loadTemplate("partials/next-project.html")->display($context);
            // line 9
            echo "            ";
            $this->env->loadTemplate("partials/previous-project.html")->display($context);
            // line 10
            echo "          ";
        }
        // line 11
        echo "    </div>       

    <div class=\"row\">
";
        // line 14
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "type");
        echo "
        <div class=\"grid-2 grid-flip\">
          <h3><span class=\"marker-left\"></span>";
        // line 16
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "title");
        echo "<span class=\"marker-right\"></span></h3>
           <small>";
        // line 17
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "content");
        echo "</small>
          <span class=\"ending\">
            <span class=\"date\"> ";
        // line 19
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo twig_date_format_filter($this->getAttribute($_page_, "date"), "M d, Y");
        echo " </span>
            <br><span class=\"tags text-muted\">";
        // line 20
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "tags");
        echo "</span>
          </span>
        </div>
        <br>
        <div class=\"grid-4 sidebar\">
            ";
        // line 25
        $this->env->loadTemplate("partials/assets/gallery.html")->display($context);
        // line 26
        echo "        </div>
    </div>


</div>



      ";
        // line 34
        $this->env->loadTemplate("partials/project-footer.html")->display($context);
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
