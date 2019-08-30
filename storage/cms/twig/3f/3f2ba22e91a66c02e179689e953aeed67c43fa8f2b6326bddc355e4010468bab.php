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

/* C:\xampp-new\htdocs\octobercms/themes/zanor-zanor-mdb-loaded/partials/site/head.htm */
class __TwigTemplate_461b97c677f9fecaade1005e1b885f036a2c0ef3da365b2a6fa2762964e0b4a7 extends \Twig\Template
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
        echo "<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">

    <title>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "title", [], "any", false, false, false, 7), "html", null, true);
        echo "</title>
    <base href=\"";
        // line 8
        echo asset("");
        echo "\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <!-- <link href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/bootstrap.css", 1 => "assets/css/style.css"]);
        // line 14
        echo "\" rel=\"stylesheet\"> -->
    <link href=\"themes/zanor-zanor-mdb-loaded/assets/css/mdb.css\" rel=\"stylesheet\">
    <link href=\"themes/zanor-zanor-mdb-loaded/assets/css/style.css\" rel=\"stylesheet\">
    <link href=\"themes/zanor-zanor-mdb-loaded/assets/css/bootstrap.css\" rel=\"stylesheet\">
    <link href=\"themes/zanor-zanor-mdb-loaded/assets/css/searchForm.css\" rel=\"stylesheet\">
    <link href=\"themes/zanor-zanor-mdb-loaded/assets/css/scrollTop.css\" rel=\"stylesheet\">
    <link href=\"themes/zanor-zanor-mdb-loaded/assets/css/dropdownMenu.css\" rel=\"stylesheet\">
    <link href=\"themes/zanor-zanor-mdb-loaded/assets/css/sendticket.css\" rel=\"stylesheet\">
    <link rel=\"shortcut icon\" href=\"themes/zanor-zanor-mdb-loaded/assets/images/favicon.png\">

    ";
        // line 24
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 25
        echo "
    ";
        // line 26
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("SeoCmsPage"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 27
        echo "</head>
<body>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp-new\\htdocs\\octobercms/themes/zanor-zanor-mdb-loaded/partials/site/head.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 27,  73 => 26,  70 => 25,  67 => 24,  55 => 14,  53 => 11,  47 => 8,  43 => 7,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">

    <title>{{ this.page.title }}</title>
    <base href=\"{{ asset('') }}\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <!-- <link href=\"{{ [
        'assets/css/bootstrap.css',
        'assets/css/style.css',
    ]|theme }}\" rel=\"stylesheet\"> -->
    <link href=\"themes/zanor-zanor-mdb-loaded/assets/css/mdb.css\" rel=\"stylesheet\">
    <link href=\"themes/zanor-zanor-mdb-loaded/assets/css/style.css\" rel=\"stylesheet\">
    <link href=\"themes/zanor-zanor-mdb-loaded/assets/css/bootstrap.css\" rel=\"stylesheet\">
    <link href=\"themes/zanor-zanor-mdb-loaded/assets/css/searchForm.css\" rel=\"stylesheet\">
    <link href=\"themes/zanor-zanor-mdb-loaded/assets/css/scrollTop.css\" rel=\"stylesheet\">
    <link href=\"themes/zanor-zanor-mdb-loaded/assets/css/dropdownMenu.css\" rel=\"stylesheet\">
    <link href=\"themes/zanor-zanor-mdb-loaded/assets/css/sendticket.css\" rel=\"stylesheet\">
    <link rel=\"shortcut icon\" href=\"themes/zanor-zanor-mdb-loaded/assets/images/favicon.png\">

    {% styles %}

    {% component 'SeoCmsPage' %}
</head>
<body>", "C:\\xampp-new\\htdocs\\octobercms/themes/zanor-zanor-mdb-loaded/partials/site/head.htm", "");
    }
}
