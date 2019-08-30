<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\xampp-new\htdocs\octobercms/themes/zanor-zanor-mdb-loaded/partials/site/scrollTop.htm */
class __TwigTemplate_a4cd3ca9aa76dbcd53913024525a6d87cb868748cd52fc58a31f6cb0793dbdb1 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<button onclick=\"topFunction()\" id=\"btnScrollTop\" title=\"Go to top\"><img src=\"themes/zanor-zanor-mdb-loaded/assets/images/icon-totop.png\" alt=\"\" style=\"cursor: pointer;position: fixed;bottom: 10px;right: 33px;z-index: 99;\">
</button>
<div id=\"overlay\"></div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp-new\\htdocs\\octobercms/themes/zanor-zanor-mdb-loaded/partials/site/scrollTop.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<button onclick=\"topFunction()\" id=\"btnScrollTop\" title=\"Go to top\"><img src=\"themes/zanor-zanor-mdb-loaded/assets/images/icon-totop.png\" alt=\"\" style=\"cursor: pointer;position: fixed;bottom: 10px;right: 33px;z-index: 99;\">
</button>
<div id=\"overlay\"></div>", "C:\\xampp-new\\htdocs\\octobercms/themes/zanor-zanor-mdb-loaded/partials/site/scrollTop.htm", "");
    }
}
