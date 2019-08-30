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

/* C:\xampp-new\htdocs\octobercms/themes/zanor-zanor-mdb-loaded/partials/site/nav.htm */
class __TwigTemplate_d92ba294430c51df2da80df7f4bf8e2aea70fd81942a22b13927f3e498f58170 extends \Twig\Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("menu"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "
";
        // line 3
        $context["resultPage"] = twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "resultPage", [], "any", false, false, false, 3);
        // line 4
        echo "<div class=\"search-banner\">
    <div class=\"container\">
\t\t<h2>";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["customersupportcenter"]);
        echo "<span class=\"d-none d-lg-inline-block\">&nbsp;-&nbsp;</span><br class=\"d-block d-lg-none\">Hotline: <a href=\"\"><strong>1900 29 29 90</strong></a><small><i>&nbsp(ext 2)</i></small></h2>
        <form  action=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["resultPage"] ?? null));
        echo "\" method=\"Get\" class=\"search-form\">
            <input type=\"text\" name=\"search\" placeholder=\"";
        // line 8
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["typetosearch"]);
        echo "\" value=\"\" required=\"\" pattern=\".{3,}\" title=\"";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["pleasetypeatleast"]);
        echo "\">
            <button type=\"submit\" class=\"btn-search\">";
        // line 9
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["search"]);
        echo "</button>
        </form>
    </div>
</div>
<!--/.Navbar-->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp-new\\htdocs\\octobercms/themes/zanor-zanor-mdb-loaded/partials/site/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 9,  56 => 8,  52 => 7,  48 => 6,  44 => 4,  42 => 3,  39 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% component 'menu' %}

{% set resultPage = searchForm.resultPage %}
<div class=\"search-banner\">
    <div class=\"container\">
\t\t<h2>{{ 'customersupportcenter'|_ }}<span class=\"d-none d-lg-inline-block\">&nbsp;-&nbsp;</span><br class=\"d-block d-lg-none\">Hotline: <a href=\"\"><strong>1900 29 29 90</strong></a><small><i>&nbsp(ext 2)</i></small></h2>
        <form  action=\"{{ resultPage|page }}\" method=\"Get\" class=\"search-form\">
            <input type=\"text\" name=\"search\" placeholder=\"{{ 'typetosearch'|_ }}\" value=\"\" required=\"\" pattern=\".{3,}\" title=\"{{ 'pleasetypeatleast'|_ }}\">
            <button type=\"submit\" class=\"btn-search\">{{ 'search'|_ }}</button>
        </form>
    </div>
</div>
<!--/.Navbar-->", "C:\\xampp-new\\htdocs\\octobercms/themes/zanor-zanor-mdb-loaded/partials/site/nav.htm", "");
    }
}
