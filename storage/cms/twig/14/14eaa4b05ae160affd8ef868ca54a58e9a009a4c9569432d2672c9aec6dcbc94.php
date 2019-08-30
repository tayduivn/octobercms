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

/* C:\xampp-new\htdocs\octobercms/themes/zanor-zanor-mdb-loaded/layouts/withSidebarPost.htm */
class __TwigTemplate_83a139a2bd25e3ff47980a8b9d915e629bbb3744625b61ab8dff4514b032e01d extends \Twig\Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/head"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "
<div class=\"container mt-2 px-sm-3\">
    <div class=\"row no-gutters\">
        <div class=\"col-md-3 d-none d-md-block blog-sidebar\">
            ";
        // line 7
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebarPost"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 8
        echo "        </div>
        <div class=\"col-md-3 pt-3 d-md-none d-sm-block\">
            ";
        // line 10
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebarPost"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "        </div>
        <div class=\"col-md-9 pt-1 p-sm-3\">
            ";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 14
        echo "        </div>
    </div>
</div>
";
        // line 17
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/scrollTop"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 18
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp-new\\htdocs\\octobercms/themes/zanor-zanor-mdb-loaded/layouts/withSidebarPost.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 18,  72 => 17,  67 => 14,  65 => 13,  61 => 11,  57 => 10,  53 => 8,  49 => 7,  43 => 3,  39 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'site/head' %}
{% partial 'site/nav' %}

<div class=\"container mt-2 px-sm-3\">
    <div class=\"row no-gutters\">
        <div class=\"col-md-3 d-none d-md-block blog-sidebar\">
            {% partial 'sidebarPost' %}
        </div>
        <div class=\"col-md-3 pt-3 d-md-none d-sm-block\">
            {% partial 'sidebarPost' %}
        </div>
        <div class=\"col-md-9 pt-1 p-sm-3\">
            {% page %}
        </div>
    </div>
</div>
{% partial 'site/scrollTop' %}
{% partial 'site/footer' %}", "C:\\xampp-new\\htdocs\\octobercms/themes/zanor-zanor-mdb-loaded/layouts/withSidebarPost.htm", "");
    }
}
