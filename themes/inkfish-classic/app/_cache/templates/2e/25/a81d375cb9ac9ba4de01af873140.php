<?php

/* partials/header.html */
class __TwigTemplate_2e25a81d375cb9ac9ba4de01af873140 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

    <head>
        <meta charset=\"utf-8\">

      <!-- Force latest available IE rendering engine and Chrome Frame (if installed) -->
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        
        <title>";
        // line 10
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "name");
        echo "</title>
        <meta name=\"description\" content=\"\">

        
        <!-- Mobile Screen Resizing -->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no\">
        
        <!-- stylesheet -->
        <link rel=\"stylesheet\" href=\"";
        // line 18
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "public/docs/css/inkfish-australis.css\" type=\"text/css\">
        <link href=\"//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css\" rel=\"stylesheet\">
        <link rel=\"alternate\" type=\"application/atom+xml\" href=\"";
        // line 20
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "?/feed/\">
         
        <script src=\"http://cdnjs.cloudflare.com/ajax/libs/headjs/0.99/head.load.min.js\"></script>

    </head>

    <body>


<header id=\"header\">

        <nav class=\"nav-wrap\">
            <section class=\"container\">
            <a class=\"logo\" href=\"";
        // line 33
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "\">";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "name");
        echo "<br><span class=\"tagline\">";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "profession");
        echo "</span></a>
            <a class=\"nav-toggle\" data-target=\"#nav-menu\" href=\"#\"><img src=\"";
        // line 34
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "public/docs/img/menu-btn.png\"></a>
            <div class=\"nav-collapse\" id=\"nav-menu\">
               ";
        // line 36
        $this->env->loadTemplate("partials/navigation/navigation.html")->display($context);
        // line 37
        echo "            </div>
            </section>
        </nav>

</header>


";
    }

    public function getTemplateName()
    {
        return "partials/header.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
