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
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"viewport\" content=\"target-densitydpi=device-dpi, initial-scale=1.0, user-scalable=no\" />
        
        <!-- stylesheet -->
        <link rel=\"stylesheet\" href=\"";
        // line 19
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "/public/docs/css/inkfish-australis.css\" type=\"text/css\">
        <link href=\"//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css\" rel=\"stylesheet\">
        <link rel=\"alternate\" type=\"application/atom+xml\" href=\"";
        // line 21
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "/?/feed/\">

        <!-- HTML5 Shim for IE 6-8 -->
        <!--[if lt IE 9]>
            <script src=\"http://html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->

    </head>

    <body>


<header id=\"header\">
     <div class=\"container\">
    <div id=\"branding\">
        <h1><a href=\"";
        // line 36
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "\">";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "name");
        echo "</a> <span class=\"divider\">/</span> <span class=\"tagline\">";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "profession");
        echo "</span><img src=\"";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "/public/docs/img/menu-btn.png\" class=\"menu-link\"></h1>
    </div>
    ";
        // line 38
        $this->env->loadTemplate("partials/navigation/navigation.html")->display($context);
        // line 39
        echo "</div>
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
