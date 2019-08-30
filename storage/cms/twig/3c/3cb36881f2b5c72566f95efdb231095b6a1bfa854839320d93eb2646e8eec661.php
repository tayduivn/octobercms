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

/* C:\xampp-new\htdocs\octobercms/plugins/benfreke/menumanager/components/menu/default.htm */
class __TwigTemplate_27013d544beb6d6c07e8fafb081b61973b17bb5375a90dda73aa53cfaab007fb extends \Twig\Template
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
        if ((($context["parentNode"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["parentNode"] ?? null), "getChildCount", [], "any", false, false, false, 1))) {
            // line 2
            echo "<ul class=\"";
            echo twig_escape_filter($this->env, ($context["primaryClasses"] ?? null), "html", null, true);
            echo "\">
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["parentNode"] ?? null), "getChildren", [], "any", false, false, false, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["primaryNav"]) {
                // line 4
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["primaryNav"], "enabled", [], "any", false, false, false, 4)) {
                    // line 5
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["primaryNav"], "getChildCount", [], "any", false, false, false, 5) && (($context["numberOfLevels"] ?? null) > 1))) {
                        // line 6
                        echo "                <li class=\"dropdown ";
                        echo twig_escape_filter($this->env, ($context["listItemClasses"] ?? null), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["primaryNav"], "getListItemClasses", [0 => ($context["activeLeft"] ?? null), 1 => ($context["activeRight"] ?? null)], "method", false, false, false, 6), "html", null, true);
                        echo "\">
                    <a href=\"";
                        // line 7
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["primaryNav"], "getLinkHref", [], "any", false, false, false, 7), "html", null, true);
                        echo "\" target=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["primaryNav"], "getLinkTarget", [], "any", false, false, false, 7), "html", null, true);
                        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        ";
                        // line 8
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["primaryNav"], "title", [], "any", false, false, false, 8), "html", null, true);
                        echo " <span class=\"caret\"></span>
                    </a>
            ";
                    } else {
                        // line 11
                        echo "                <li class=\"";
                        echo twig_escape_filter($this->env, ($context["listItemClasses"] ?? null), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["primaryNav"], "getListItemClasses", [0 => ($context["activeLeft"] ?? null), 1 => ($context["activeRight"] ?? null)], "method", false, false, false, 11), "html", null, true);
                        echo "\">
                    <a href=\"";
                        // line 12
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["primaryNav"], "getLinkHref", [], "any", false, false, false, 12), "html", null, true);
                        echo "\" target=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["primaryNav"], "getLinkTarget", [], "any", false, false, false, 12), "html", null, true);
                        echo "\">
                        ";
                        // line 13
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["primaryNav"], "title", [], "any", false, false, false, 13), "html", null, true);
                        echo "
                    </a>
            ";
                    }
                    // line 16
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["primaryNav"], "getChildCount", [], "any", false, false, false, 16) && (($context["numberOfLevels"] ?? null) > 1))) {
                        // line 17
                        echo "                <ul class=\"";
                        echo twig_escape_filter($this->env, ($context["secondaryClasses"] ?? null), "html", null, true);
                        echo "\">
                    ";
                        // line 18
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["primaryNav"], "getChildren", [], "any", false, false, false, 18));
                        foreach ($context['_seq'] as $context["_key"] => $context["secondaryNav"]) {
                            // line 19
                            echo "                        ";
                            if (twig_get_attribute($this->env, $this->source, $context["secondaryNav"], "enabled", [], "any", false, false, false, 19)) {
                                // line 20
                                echo "                            <li class=\"";
                                echo twig_escape_filter($this->env, ($context["listItemClasses"] ?? null), "html", null, true);
                                echo " ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["secondaryNav"], "getListItemClasses", [0 => ($context["activeLeft"] ?? null), 1 => ($context["activeRight"] ?? null)], "method", false, false, false, 20), "html", null, true);
                                echo "\">
                                <a href=\"";
                                // line 21
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["secondaryNav"], "getLinkHref", [], "any", false, false, false, 21), "html", null, true);
                                echo "\" target=\"";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["secondaryNav"], "getLinkTarget", [], "any", false, false, false, 21), "html", null, true);
                                echo "\">
                                    ";
                                // line 22
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["secondaryNav"], "title", [], "any", false, false, false, 22), "html", null, true);
                                echo "
                                </a>
                                ";
                                // line 24
                                if ((twig_get_attribute($this->env, $this->source, $context["secondaryNav"], "getChildCount", [], "any", false, false, false, 24) && (($context["numberOfLevels"] ?? null) > 2))) {
                                    // line 25
                                    echo "                                    <ul class=\"";
                                    echo twig_escape_filter($this->env, ($context["tertiaryClasses"] ?? null), "html", null, true);
                                    echo "\">
                                        ";
                                    // line 26
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["secondaryNav"], "getChildren", [], "any", false, false, false, 26));
                                    foreach ($context['_seq'] as $context["_key"] => $context["tertiaryNav"]) {
                                        // line 27
                                        echo "                                            ";
                                        if (twig_get_attribute($this->env, $this->source, $context["tertiaryNav"], "enabled", [], "any", false, false, false, 27)) {
                                            // line 28
                                            echo "                                                <li class=\"";
                                            echo twig_escape_filter($this->env, ($context["listItemClasses"] ?? null), "html", null, true);
                                            echo " ";
                                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tertiaryNav"], "getListItemClasses", [0 => ($context["activeLeft"] ?? null), 1 => ($context["activeRight"] ?? null)], "method", false, false, false, 28), "html", null, true);
                                            echo "\">
                                                    <a href=\"";
                                            // line 29
                                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tertiaryNav"], "getLinkHref", [], "any", false, false, false, 29), "html", null, true);
                                            echo "\" target=\"";
                                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tertiaryNav"], "getLinkTarget", [], "any", false, false, false, 29), "html", null, true);
                                            echo "\">
                                                        ";
                                            // line 30
                                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tertiaryNav"], "title", [], "any", false, false, false, 30), "html", null, true);
                                            echo "
                                                    </a>
                                                </li>
                                            ";
                                        }
                                        // line 34
                                        echo "                                        ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tertiaryNav'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 35
                                    echo "                                    </ul>
                                ";
                                }
                                // line 37
                                echo "                            </li>
                        ";
                            }
                            // line 39
                            echo "                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['secondaryNav'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 40
                        echo "                </ul>
            ";
                    }
                    // line 42
                    echo "                </li>
        ";
                }
                // line 44
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['primaryNav'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp-new\\htdocs\\octobercms/plugins/benfreke/menumanager/components/menu/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 45,  185 => 44,  181 => 42,  177 => 40,  171 => 39,  167 => 37,  163 => 35,  157 => 34,  150 => 30,  144 => 29,  137 => 28,  134 => 27,  130 => 26,  125 => 25,  123 => 24,  118 => 22,  112 => 21,  105 => 20,  102 => 19,  98 => 18,  93 => 17,  90 => 16,  84 => 13,  78 => 12,  71 => 11,  65 => 8,  59 => 7,  52 => 6,  49 => 5,  46 => 4,  42 => 3,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if parentNode and parentNode.getChildCount %}
<ul class=\"{{ primaryClasses }}\">
    {% for primaryNav in parentNode.getChildren %}
        {% if primaryNav.enabled %}
            {% if primaryNav.getChildCount and numberOfLevels > 1 %}
                <li class=\"dropdown {{ listItemClasses }} {{ primaryNav.getListItemClasses(activeLeft, activeRight) }}\">
                    <a href=\"{{ primaryNav.getLinkHref }}\" target=\"{{ primaryNav.getLinkTarget }}\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        {{ primaryNav.title }} <span class=\"caret\"></span>
                    </a>
            {% else %}
                <li class=\"{{ listItemClasses }} {{ primaryNav.getListItemClasses(activeLeft, activeRight) }}\">
                    <a href=\"{{ primaryNav.getLinkHref }}\" target=\"{{ primaryNav.getLinkTarget }}\">
                        {{ primaryNav.title }}
                    </a>
            {% endif %}
            {% if primaryNav.getChildCount and numberOfLevels > 1 %}
                <ul class=\"{{ secondaryClasses }}\">
                    {% for secondaryNav in primaryNav.getChildren %}
                        {% if secondaryNav.enabled %}
                            <li class=\"{{ listItemClasses }} {{ secondaryNav.getListItemClasses(activeLeft, activeRight) }}\">
                                <a href=\"{{ secondaryNav.getLinkHref }}\" target=\"{{ secondaryNav.getLinkTarget }}\">
                                    {{ secondaryNav.title }}
                                </a>
                                {% if secondaryNav.getChildCount and numberOfLevels > 2 %}
                                    <ul class=\"{{ tertiaryClasses }}\">
                                        {% for tertiaryNav in secondaryNav.getChildren %}
                                            {% if tertiaryNav.enabled %}
                                                <li class=\"{{ listItemClasses }} {{ tertiaryNav.getListItemClasses(activeLeft, activeRight) }}\">
                                                    <a href=\"{{ tertiaryNav.getLinkHref }}\" target=\"{{ tertiaryNav.getLinkTarget }}\">
                                                        {{ tertiaryNav.title }}
                                                    </a>
                                                </li>
                                            {% endif %}
                                        {% endfor %}
                                    </ul>
                                {% endif %}
                            </li>
                        {% endif %}
                    {% endfor %}
                </ul>
            {% endif %}
                </li>
        {% endif %}
    {% endfor %}
</ul>
{% endif %}
", "C:\\xampp-new\\htdocs\\octobercms/plugins/benfreke/menumanager/components/menu/default.htm", "");
    }
}
