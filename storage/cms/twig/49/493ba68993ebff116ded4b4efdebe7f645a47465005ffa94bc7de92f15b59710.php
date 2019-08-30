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

/* C:\xampp-new\htdocs\octobercms/plugins/suresoftware/powerseo/components/cmspage/default.htm */
class __TwigTemplate_68d82fe821f10080a1eba191436186423fa8b40c11c3c56c4097b6a6965568a4 extends \Twig\Template
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
        if (($context["hasBlog"] ?? null)) {
            // line 2
            echo "    ";
            $context['__placeholder_meta_default_contents'] = null;            ob_start();            // line 3
            echo "
    ";
            $context['__placeholder_meta_default_contents'] = ob_get_clean();            // line 2
            echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('meta', $context['__placeholder_meta_default_contents']);
            unset($context['__placeholder_meta_default_contents']);            // line 5
            echo "
";
        } else {
            // line 7
            echo "
    ";
            // line 8
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "redirect_url", [], "any", false, false, false, 8)) {
                // line 9
                echo "        <meta http-equiv=\"refresh\" content=\"0; url=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "redirect_url", [], "any", false, false, false, 9), "html", null, true);
                echo "\" />
    ";
            }
            // line 11
            echo "
    ";
            // line 12
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_title", [], "any", false, false, false, 12)) {
                // line 13
                echo "        <title>";
                echo call_user_func_array($this->env->getFilter('generateTitle')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_title", [], "any", false, false, false, 13)]);
                echo "</title>
    ";
            }
            // line 15
            echo "
    ";
            // line 16
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_description", [], "any", false, false, false, 16)) {
                // line 17
                echo "        <meta name=\"description\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_description", [], "any", false, false, false, 17), "html", null, true);
                echo "\">
    ";
            }
            // line 19
            echo "
    ";
            // line 20
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_keywords", [], "any", false, false, false, 20)) {
                // line 21
                echo "        <meta name=\"keywords\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_keywords", [], "any", false, false, false, 21), "html", null, true);
                echo "\">
    ";
            }
            // line 23
            echo "
    ";
            // line 24
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "canonical_url", [], "any", false, false, false, 24)) {
                // line 25
                echo "        <link rel=\"canonical\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "canonical_url", [], "any", false, false, false, 25), "html", null, true);
                echo "\" />
    ";
            } else {
                // line 27
                echo "        ";
                echo call_user_func_array($this->env->getFilter('generateCanonicalUrl')->getCallable(), [""]);
                echo "
    ";
            }
            // line 29
            echo "
    <meta name=\"robots\" content=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "robot_index", [], "any", false, false, false, 30), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "robot_follow", [], "any", false, false, false, 30), "html", null, true);
            echo "\">

    ";
            // line 32
            echo call_user_func_array($this->env->getFilter('otherMetaTags')->getCallable(), [""]);
            echo "

    ";
            // line 34
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogTitle", [], "any", false, false, false, 34)) {
                // line 35
                echo "        <meta property=\"og:title\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogTitle", [], "any", false, false, false, 35), "html", null, true);
                echo "\" />
    ";
            }
            // line 37
            echo "
    ";
            // line 38
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogUrl", [], "any", false, false, false, 38)) {
                // line 39
                echo "        <meta property=\"og:url\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogUrl", [], "any", false, false, false, 39), "html", null, true);
                echo "\" />
    ";
            }
            // line 41
            echo "
    ";
            // line 42
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogSiteName", [], "any", false, false, false, 42)) {
                // line 43
                echo "        <meta property=\"og:site_name\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogSiteName", [], "any", false, false, false, 43), "html", null, true);
                echo "\" />
    ";
            }
            // line 45
            echo "
    ";
            // line 46
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogDescription", [], "any", false, false, false, 46)) {
                // line 47
                echo "        <meta property=\"og:description\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogDescription", [], "any", false, false, false, 47), "html", null, true);
                echo "\" />
    ";
            }
            // line 49
            echo "
    ";
            // line 50
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogFbAppId", [], "any", false, false, false, 50)) {
                // line 51
                echo "        <meta property=\"fb:app_id\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogFbAppId", [], "any", false, false, false, 51), "html", null, true);
                echo "\" />
    ";
            }
            // line 53
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp-new\\htdocs\\octobercms/plugins/suresoftware/powerseo/components/cmspage/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 53,  170 => 51,  168 => 50,  165 => 49,  159 => 47,  157 => 46,  154 => 45,  148 => 43,  146 => 42,  143 => 41,  137 => 39,  135 => 38,  132 => 37,  126 => 35,  124 => 34,  119 => 32,  112 => 30,  109 => 29,  103 => 27,  97 => 25,  95 => 24,  92 => 23,  86 => 21,  84 => 20,  81 => 19,  75 => 17,  73 => 16,  70 => 15,  64 => 13,  62 => 12,  59 => 11,  53 => 9,  51 => 8,  48 => 7,  44 => 5,  42 => 2,  39 => 3,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if hasBlog %}
    {% placeholder meta default %}

    {% endplaceholder %}

{% else %}

    {% if __SELF__.redirect_url %}
        <meta http-equiv=\"refresh\" content=\"0; url={{__SELF__.redirect_url}}\" />
    {% endif %}

    {% if __SELF__.seo_title %}
        <title>{{__SELF__.seo_title | generateTitle}}</title>
    {% endif %}

    {% if __SELF__.seo_description %}
        <meta name=\"description\" content=\"{{__SELF__.seo_description}}\">
    {% endif %}

    {% if __SELF__.seo_keywords %}
        <meta name=\"keywords\" content=\"{{__SELF__.seo_keywords}}\">
    {% endif %}

    {% if __SELF__.canonical_url %}
        <link rel=\"canonical\" href=\"{{__SELF__.canonical_url}}\" />
    {% else %}
        {{ '' | generateCanonicalUrl}}
    {% endif %}

    <meta name=\"robots\" content=\"{{__SELF__.robot_index}},{{__SELF__.robot_follow}}\">

    {{ ''|otherMetaTags|raw }}

    {% if __SELF__.ogTitle %}
        <meta property=\"og:title\" content=\"{{ __SELF__.ogTitle }}\" />
    {% endif %}

    {% if __SELF__.ogUrl %}
        <meta property=\"og:url\" content=\"{{ __SELF__.ogUrl }}\" />
    {% endif %}

    {% if __SELF__.ogSiteName %}
        <meta property=\"og:site_name\" content=\"{{ __SELF__.ogSiteName }}\" />
    {% endif %}

    {% if __SELF__.ogDescription %}
        <meta property=\"og:description\" content=\"{{ __SELF__.ogDescription }}\" />
    {% endif %}

    {% if __SELF__.ogFbAppId %}
        <meta property=\"fb:app_id\" content=\"{{ __SELF__.ogFbAppId  }}\" />
    {% endif %}

{% endif %}
", "C:\\xampp-new\\htdocs\\octobercms/plugins/suresoftware/powerseo/components/cmspage/default.htm", "");
    }
}
