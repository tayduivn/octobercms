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

/* C:\xampp-new\htdocs\octobercms/themes/zanor-zanor-mdb-loaded/partials/blog/post.htm */
class __TwigTemplate_e3d2293dd89da17c016a2377fb7a0407f8611feb7fda984e1fde84e34c34f6ca extends \Twig\Template
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
        $context["currentPostSlug"] = twig_get_attribute($this->env, $this->source, ($context["CategoryTwoLevel"] ?? null), "currentPostSlug", [], "any", false, false, false, 1);
        // line 2
        if ((($context["currentPostSlug"] ?? null) == "")) {
            // line 3
            $context["post"] = twig_get_attribute($this->env, $this->source, ($context["CategoryTwoLevel"] ?? null), "postDefault", [], "any", false, false, false, 3);
        }
        // line 5
        echo "<!--post-->
<div class=\"post\">
    <div class=\"col-md-12\">
        <!--Content-->
        <div class=\"mb-3 col-md-12 mt-2\">
            <!--Title-->
            <div class=\"card-title mt-2\">
               <h1>";
        // line 12
        echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 12);
        echo "</h1>
            </div>
            <!--Text-->
            <div class=\"card-text\">
                ";
        // line 16
        echo call_user_func_array($this->env->getFilter('md')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content", [], "any", false, false, false, 16)]);
        echo "
            </div>
        </div>

        <div class=\"text-muted\">
            ";
        // line 21
        if ((($context["currentPostSlug"] ?? null) != "")) {
            // line 22
            echo "            <small class=\"float-right ml-5 mt-1\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", [], "any", false, false, false, 22), "d M Y"), "html", null, true);
            echo "</small><br>
            <small class=\"float-right ml-5 mt-1\">";
            // line 23
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["views"]);
            echo ":&nbsp</small>
            ";
        }
        // line 25
        echo "        </div>
    </div>
</div>
<!--/.post-->
";
        // line 29
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['data'] = ($context["post"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("SeoBlogPost"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp-new\\htdocs\\octobercms/themes/zanor-zanor-mdb-loaded/partials/blog/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 29,  78 => 25,  73 => 23,  68 => 22,  66 => 21,  58 => 16,  51 => 12,  42 => 5,  39 => 3,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set currentPostSlug = CategoryTwoLevel.currentPostSlug %}
{% if(currentPostSlug == '')%}
{% set post = CategoryTwoLevel.postDefault %}
{% endif %}
<!--post-->
<div class=\"post\">
    <div class=\"col-md-12\">
        <!--Content-->
        <div class=\"mb-3 col-md-12 mt-2\">
            <!--Title-->
            <div class=\"card-title mt-2\">
               <h1>{{ post.title|raw}}</h1>
            </div>
            <!--Text-->
            <div class=\"card-text\">
                {{ post.content|md|raw }}
            </div>
        </div>

        <div class=\"text-muted\">
            {% if(currentPostSlug != '')%}
            <small class=\"float-right ml-5 mt-1\">{{ post.published_at|date('d M Y') }}</small><br>
            <small class=\"float-right ml-5 mt-1\">{{ 'views'|_ }}:&nbsp</small>
            {% endif %}
        </div>
    </div>
</div>
<!--/.post-->
{% component 'SeoBlogPost' data=post %}", "C:\\xampp-new\\htdocs\\octobercms/themes/zanor-zanor-mdb-loaded/partials/blog/post.htm", "");
    }
}
