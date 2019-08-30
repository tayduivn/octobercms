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

/* C:\xampp-new\htdocs\octobercms/themes/zanor-zanor-mdb-loaded/partials/sidebarCategory.htm */
class __TwigTemplate_edbb660520067ba90f50e183b58a7f3daee4e51df53faa307b212555c5586f83 extends \Twig\Template
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
        $context["currentCategorySlug1"] = twig_get_attribute($this->env, $this->source, ($context["CategoryThreeLevel"] ?? null), "currentCategorySlug1", [], "any", false, false, false, 1);
        // line 2
        $context["currentCategorySlug2"] = twig_get_attribute($this->env, $this->source, ($context["CategoryThreeLevel"] ?? null), "currentCategorySlug2", [], "any", false, false, false, 2);
        // line 3
        $context["categoriesLevel1"] = twig_get_attribute($this->env, $this->source, ($context["CategoryThreeLevel"] ?? null), "categoriesParent", [], "any", false, false, false, 3);
        // line 4
        $context["categoriesLevel2"] = twig_get_attribute($this->env, $this->source, ($context["CategoryThreeLevel"] ?? null), "categoriesChild", [], "any", false, false, false, 4);
        // line 5
        $context["categoryMaster"] = twig_get_attribute($this->env, $this->source, ($context["CategoryThreeLevel"] ?? null), "categoryMaster", [], "any", false, false, false, 5);
        // line 6
        echo "
<div class=\"detail-category\">
    <h2>
        <span class=\"fa fa-bars btn-category-mobile d-inline-block d-md-none\"></span>
            ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categoryMaster"] ?? null), "name", [], "any", false, false, false, 10), "html", null, true);
        echo "
    </h2>
    <ul class=\"lv1\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categoriesLevel1"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["categoryLevel1"]) {
            // line 14
            echo "
        <li class=\" ";
            // line 15
            if ((twig_get_attribute($this->env, $this->source, $context["categoryLevel1"], "slug", [], "any", false, false, false, 15) == ($context["currentCategorySlug1"] ?? null))) {
                echo " active-text ";
            }
            echo "\">
            ";
            // line 16
            $context["category2SLugDefault"] = twig_get_attribute($this->env, $this->source, $context["categoryLevel1"], "slug2", [], "any", false, false, false, 16);
            // line 17
            echo "            <a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["currentCategorySlug"] ?? null), ["category1" => twig_get_attribute($this->env, $this->source, $context["categoryLevel1"], "slug", [], "any", false, false, false, 17), "category2" => ($context["category2SLugDefault"] ?? null)]);
            echo "\"
                title=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoryLevel1"], "name", [], "any", false, false, false, 18), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoryLevel1"], "name", [], "any", false, false, false, 18), "html", null, true);
            echo "</a>

            ";
            // line 20
            if ((twig_get_attribute($this->env, $this->source, $context["categoryLevel1"], "slug", [], "any", false, false, false, 20) == ($context["currentCategorySlug1"] ?? null))) {
                // line 21
                echo "            <ul class=\"lv2\">

                ";
                // line 23
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categoriesLevel2"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["categoryLevel2"]) {
                    // line 24
                    echo "
                    ";
                    // line 25
                    if ((($context["currentCategorySlug2"] ?? null) == "")) {
                        // line 26
                        echo "                        ";
                        $context["currentCategorySlug2"] = ($context["category2SLugDefault"] ?? null);
                        // line 27
                        echo "                    ";
                    } elseif ((($context["currentCategorySlug2"] ?? null) == "default")) {
                        // line 28
                        echo "                        ";
                        $context["currentCategorySlug2"] = ($context["category2SLugDefault"] ?? null);
                        // line 29
                        echo "                    ";
                    }
                    // line 30
                    echo "
                    <li class=\" ";
                    // line 31
                    if ((twig_get_attribute($this->env, $this->source, $context["categoryLevel2"], "slug", [], "any", false, false, false, 31) == ($context["currentCategorySlug2"] ?? null))) {
                        echo " active
                                ";
                    }
                    // line 32
                    echo " \">

                        <a href=\"";
                    // line 34
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["currentCategorySlug"] ?? null), ["category1" => twig_get_attribute($this->env, $this->source, $context["categoryLevel1"], "slug", [], "any", false, false, false, 34), "category2" => twig_get_attribute($this->env, $this->source, $context["categoryLevel2"], "slug", [], "any", false, false, false, 34)]);
                    echo "\"  title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoryLevel2"], "name", [], "any", false, false, false, 34), "html", null, true);
                    echo "\">
                            ";
                    // line 35
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoryLevel2"], "name", [], "any", false, false, false, 35), "html", null, true);
                    echo "</a>

                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoryLevel2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "            </ul>
            ";
            }
            // line 41
            echo "        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoryLevel1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp-new\\htdocs\\octobercms/themes/zanor-zanor-mdb-loaded/partials/sidebarCategory.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 43,  143 => 41,  139 => 39,  129 => 35,  123 => 34,  119 => 32,  114 => 31,  111 => 30,  108 => 29,  105 => 28,  102 => 27,  99 => 26,  97 => 25,  94 => 24,  90 => 23,  86 => 21,  84 => 20,  77 => 18,  72 => 17,  70 => 16,  64 => 15,  61 => 14,  57 => 13,  51 => 10,  45 => 6,  43 => 5,  41 => 4,  39 => 3,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set currentCategorySlug1 = CategoryThreeLevel.currentCategorySlug1 %}
{% set currentCategorySlug2 = CategoryThreeLevel.currentCategorySlug2 %}
{% set categoriesLevel1 = CategoryThreeLevel.categoriesParent %}
{% set categoriesLevel2 = CategoryThreeLevel.categoriesChild %}
{% set categoryMaster = CategoryThreeLevel.categoryMaster %}

<div class=\"detail-category\">
    <h2>
        <span class=\"fa fa-bars btn-category-mobile d-inline-block d-md-none\"></span>
            {{ categoryMaster.name }}
    </h2>
    <ul class=\"lv1\">
        {% for categoryLevel1 in categoriesLevel1 %}

        <li class=\" {% if(categoryLevel1.slug == currentCategorySlug1) %} active-text {%endif%}\">
            {% set category2SLugDefault = categoryLevel1.slug2 %}
            <a href=\"{{ currentCategorySlug|page({category1: categoryLevel1.slug, category2: category2SLugDefault }) }}\"
                title=\"{{ categoryLevel1.name }}\">{{ categoryLevel1.name }}</a>

            {% if( categoryLevel1.slug == currentCategorySlug1 ) %}
            <ul class=\"lv2\">

                {% for categoryLevel2 in categoriesLevel2 %}

                    {% if currentCategorySlug2 == '' %}
                        {% set currentCategorySlug2 = category2SLugDefault %}
                    {% elseif currentCategorySlug2 == 'default' %}
                        {% set currentCategorySlug2 = category2SLugDefault %}
                    {% endif %}

                    <li class=\" {% if categoryLevel2.slug == currentCategorySlug2 %} active
                                {% endif %} \">

                        <a href=\"{{ currentCategorySlug|page({category1: categoryLevel1.slug, category2: categoryLevel2.slug}) }}\"  title=\"{{ categoryLevel2.name }}\">
                            {{ categoryLevel2.name }}</a>

                    </li>
                {% endfor %}
            </ul>
            {% endif %}
        </li>
        {% endfor %}
    </ul>
</div>", "C:\\xampp-new\\htdocs\\octobercms/themes/zanor-zanor-mdb-loaded/partials/sidebarCategory.htm", "");
    }
}
