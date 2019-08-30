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

/* C:\xampp-new\htdocs\octobercms/themes/zanor-zanor-mdb-loaded/partials/sidebarPost.htm */
class __TwigTemplate_b89e376a81969bee09812054392af8aa7548fbcdeec10d045bad1c16b180e92f extends \Twig\Template
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
        $context["currentCategorySlug1"] = twig_get_attribute($this->env, $this->source, ($context["CategoryTwoLevel"] ?? null), "currentCategorySlug1", [], "any", false, false, false, 1);
        // line 2
        $context["currentCategorySlug2"] = twig_get_attribute($this->env, $this->source, ($context["CategoryTwoLevel"] ?? null), "currentCategorySlug2", [], "any", false, false, false, 2);
        // line 3
        $context["categoryParent"] = twig_get_attribute($this->env, $this->source, ($context["CategoryTwoLevel"] ?? null), "categoryParent", [], "any", false, false, false, 3);
        // line 4
        $context["categories"] = twig_get_attribute($this->env, $this->source, ($context["CategoryTwoLevel"] ?? null), "categoriesChild", [], "any", false, false, false, 4);
        // line 5
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["CategoryTwoLevel"] ?? null), "posts", [], "any", false, false, false, 5);
        // line 6
        $context["currentPostSlug"] = twig_get_attribute($this->env, $this->source, ($context["CategoryTwoLevel"] ?? null), "currentPostSlug", [], "any", false, false, false, 6);
        // line 7
        $context["categoryChildSlugDefault"] = twig_get_attribute($this->env, $this->source, ($context["CategoryTwoLevel"] ?? null), "categoryChildSlugDefault", [], "any", false, false, false, 7);
        // line 8
        echo "
";
        // line 9
        if ((($context["currentPostSlug"] ?? null) == "")) {
            // line 10
            $context["postDefault"] = twig_get_attribute($this->env, $this->source, ($context["CategoryTwoLevel"] ?? null), "postDefault", [], "any", false, false, false, 10);
        }
        // line 12
        echo "
<div class=\"detail-category\">
    <h2>
        <span class=\"fa fa-bars btn-category-mobile d-inline-block d-md-none\"></span>
            ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categoryParent"] ?? null), "name", [], "any", false, false, false, 16), "html", null, true);
        echo "
    </h2>
    <ul class=\"lv1\">
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 20
            echo "            ";
            if ((($context["currentCategorySlug2"] ?? null) == "")) {
                // line 21
                echo "                ";
                $context["currentCategorySlug2"] = ($context["categoryChildSlugDefault"] ?? null);
                // line 22
                echo "            ";
            }
            // line 23
            echo "
            <li class=\" ";
            // line 24
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 24) == ($context["currentCategorySlug2"] ?? null))) {
                echo " active-text ";
            }
            echo "\">

                <a href=\"";
            // line 26
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("post", ["category1" => twig_get_attribute($this->env, $this->source, ($context["categoryParent"] ?? null), "slug", [], "any", false, false, false, 26), "category2" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 26), "slug" => twig_get_attribute($this->env, $this->source, $context["category"], "slugPostDefault", [], "any", false, false, false, 26)]);
            echo "\"
                    title=\"";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 27), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 27), "html", null, true);
            echo "</a>

                ";
            // line 29
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 29) == ($context["currentCategorySlug2"] ?? null))) {
                // line 30
                echo "                    <ul class=\"lv2\">
                        ";
                // line 31
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                    // line 32
                    echo "                        <li class=\"";
                    if ((twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 32) == ($context["currentPostSlug"] ?? null))) {
                        echo " active
                                ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 33
$context["post"], "slug", [], "any", false, false, false, 33) == twig_get_attribute($this->env, $this->source, ($context["postDefault"] ?? null), "slug", [], "any", false, false, false, 33))) {
                        echo " active ";
                    }
                    echo "\">
                            <a href=\"";
                    // line 34
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("post", ["category1" => twig_get_attribute($this->env, $this->source, ($context["categoryParent"] ?? null), "slug", [], "any", false, false, false, 34), "category2" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 34), "slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 34)]);
                    echo "\"  title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 34), "html", null, true);
                    echo "\">
                                ";
                    // line 35
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 35), "html", null, true);
                    echo "</a>
                        </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "                    </ul>
                ";
            }
            // line 40
            echo "            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp-new\\htdocs\\octobercms/themes/zanor-zanor-mdb-loaded/partials/sidebarPost.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 42,  142 => 40,  138 => 38,  129 => 35,  123 => 34,  117 => 33,  112 => 32,  108 => 31,  105 => 30,  103 => 29,  96 => 27,  92 => 26,  85 => 24,  82 => 23,  79 => 22,  76 => 21,  73 => 20,  69 => 19,  63 => 16,  57 => 12,  54 => 10,  52 => 9,  49 => 8,  47 => 7,  45 => 6,  43 => 5,  41 => 4,  39 => 3,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set currentCategorySlug1 = CategoryTwoLevel.currentCategorySlug1 %}
{% set currentCategorySlug2 = CategoryTwoLevel.currentCategorySlug2 %}
{% set categoryParent = CategoryTwoLevel.categoryParent %}
{% set categories = CategoryTwoLevel.categoriesChild %}
{% set posts = CategoryTwoLevel.posts %}
{% set currentPostSlug = CategoryTwoLevel.currentPostSlug %}
{% set categoryChildSlugDefault = CategoryTwoLevel.categoryChildSlugDefault %}

{% if(currentPostSlug == '')%}
{% set postDefault = CategoryTwoLevel.postDefault %}
{% endif %}

<div class=\"detail-category\">
    <h2>
        <span class=\"fa fa-bars btn-category-mobile d-inline-block d-md-none\"></span>
            {{ categoryParent.name }}
    </h2>
    <ul class=\"lv1\">
        {% for category in categories %}
            {% if( currentCategorySlug2 == '') %}
                {% set currentCategorySlug2 = categoryChildSlugDefault %}
            {% endif %}

            <li class=\" {% if(category.slug == currentCategorySlug2) %} active-text {%endif%}\">

                <a href=\"{{ 'post'|page({category1: categoryParent.slug, category2: category.slug, slug: category.slugPostDefault }) }}\"
                    title=\"{{ category.name }}\">{{ category.name }}</a>

                {% if( category.slug == currentCategorySlug2 ) %}
                    <ul class=\"lv2\">
                        {% for post in posts %}
                        <li class=\"{% if post.slug == currentPostSlug %} active
                                {% elseif post.slug == postDefault.slug %} active {% endif %}\">
                            <a href=\"{{ 'post'|page({category1: categoryParent.slug, category2: category.slug, slug: post.slug}) }}\"  title=\"{{ post.title }}\">
                                {{ post.title }}</a>
                        </li>
                        {% endfor %}
                    </ul>
                {% endif %}
            </li>
        {% endfor %}
    </ul>
</div>", "C:\\xampp-new\\htdocs\\octobercms/themes/zanor-zanor-mdb-loaded/partials/sidebarPost.htm", "");
    }
}
