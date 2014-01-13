<?php

/* feed.atom */
class __TwigTemplate_e211d63cdceb4e6034d62f551ce9514a extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
  <feed xmlns=\"http://www.w3.org/2005/Atom\" xml:lang=\"en\">

  <title>";
        // line 4
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "name");
        echo "'s ";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "feed_name");
        echo "</title>
  <subtitle>";
        // line 5
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "profession");
        echo "</subtitle>
  <link href=\"http://";
        // line 6
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "base_url");
        echo "/";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "permalink");
        echo "\" hreflang=\"en\" rel=\"self\" type=\"application/atom+xml\"/>
  <link href=\"http://";
        // line 7
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "base_url");
        echo "/\" hreflang=\"en\" rel=\"alternate\" type=\"text/html\"/>
  
  <updated>";
        // line 9
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "site_updated");
        echo "</updated>
  <generator uri=\"http://staceyapp.com/\" version=\"";
        // line 10
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "stacey_version");
        echo "\">Stacey</generator>

  <author>
    <name>";
        // line 13
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "name");
        echo "</name>
    <uri>http://";
        // line 14
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "base_url");
        echo "</uri>
  </author>

  <id>tag:";
        // line 17
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "domain_name");
        echo ",";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "current_year");
        echo ":/";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "permalink");
        echo "</id>
  <rights>©";
        // line 18
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "current_year");
        echo " ";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "name");
        echo "</rights>
  ";
        // line 19
        $this->env->loadTemplate("partials/feed/feed-loop.atom")->display($context);
        // line 20
        echo "
</feed>";
    }

    public function getTemplateName()
    {
        return "feed.atom";
    }

    public function isTraitable()
    {
        return false;
    }
}
