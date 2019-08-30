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

/* C:\xampp-new\htdocs\octobercms/plugins/suresoftware/powerseo/components/blogpost/default.htm */
class __TwigTemplate_073e1e1c20b9e53d80d0001b61388e109d12a3e922293796129beca9bcc7f206 extends \Twig\Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('meta'        );
        // line 2
        echo "    ";
        echo '<!-- X_OCTOBER_DEFAULT_BLOCK_CONTENT -->';
        // line 3
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "powerseo_redirect_url", [], "any", false, false, false, 3)) {
            // line 4
            echo "        <meta http-equiv=\"refresh\" content=\"0; url=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "powerseo_redirect_url", [], "any", false, false, false, 4), "html", null, true);
            echo "\" />
    ";
        }
        // line 6
        echo "
    ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "powerseo_title", [], "any", false, false, false, 7)) {
            // line 8
            echo "        <title>";
            echo call_user_func_array($this->env->getFilter('generateTitle')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "powerseo_title", [], "any", false, false, false, 8)]);
            echo "</title>
    ";
        } else {
            // line 10
            echo "        <title>";
            echo call_user_func_array($this->env->getFilter('generateTitle')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 10)]);
            echo "</title>
    ";
        }
        // line 12
        echo "
    ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "powerseo_description", [], "any", false, false, false, 13)) {
            // line 14
            echo "        <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "powerseo_description", [], "any", false, false, false, 14), "html", null, true);
            echo "\">
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "powerseo_keywords", [], "any", false, false, false, 17)) {
            // line 18
            echo "        <meta name=\"keywords\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "powerseo_keywords", [], "any", false, false, false, 18), "html", null, true);
            echo "\">
    ";
        }
        // line 20
        echo "
    ";
        // line 21
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "powerseo_canonical_url", [], "any", false, false, false, 21)) {
            // line 22
            echo "        <link rel=\"canonical\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "powerseo_canonical_url", [], "any", false, false, false, 22), "html", null, true);
            echo "\" />
    ";
        } else {
            // line 24
            echo "        ";
            echo call_user_func_array($this->env->getFilter('generateCanonicalUrl')->getCallable(), [""]);
            echo "
    ";
        }
        // line 26
        echo "
    <meta name=\"robots\" content=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "powerseo_robot_index", [], "any", false, false, false, 27), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "powerseo_robot_follow", [], "any", false, false, false, 27), "html", null, true);
        echo "\">

    ";
        // line 29
        echo call_user_func_array($this->env->getFilter('otherMetaTags')->getCallable(), [""]);
        echo "

    ";
        // line 31
        echo call_user_func_array($this->env->getFilter('generateOgTags')->getCallable(), [($context["post"] ?? null)]);
        echo "
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\xampp-new\\htdocs\\octobercms/plugins/suresoftware/powerseo/components/blogpost/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 1,  120 => 31,  115 => 29,  108 => 27,  105 => 26,  99 => 24,  93 => 22,  91 => 21,  88 => 20,  82 => 18,  80 => 17,  77 => 16,  71 => 14,  69 => 13,  66 => 12,  60 => 10,  54 => 8,  52 => 7,  49 => 6,  43 => 4,  40 => 3,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% put meta %}
    {% default %}
    {% if post.powerseo_redirect_url %}
        <meta http-equiv=\"refresh\" content=\"0; url={{post.powerseo_redirect_url}}\" />
    {% endif %}

    {% if post.powerseo_title %}
        <title>{{ post.powerseo_title | generateTitle}}</title>
    {% else %}
        <title>{{ post.title | generateTitle }}</title>
    {% endif %}

    {% if post.powerseo_description %}
        <meta name=\"description\" content=\"{{post.powerseo_description}}\">
    {% endif %}

    {% if post.powerseo_keywords %}
        <meta name=\"keywords\" content=\"{{post.powerseo_keywords}}\">
    {% endif %}

    {% if post.powerseo_canonical_url %}
        <link rel=\"canonical\" href=\"{{post.powerseo_canonical_url}}\" />
    {% else %}
        {{ '' | generateCanonicalUrl}}
    {% endif %}

    <meta name=\"robots\" content=\"{{post.powerseo_robot_index}},{{post.powerseo_robot_follow}}\">

    {{ ''|otherMetaTags|raw }}

    {{ post|generateOgTags }}
{% endput %}
", "C:\\xampp-new\\htdocs\\octobercms/plugins/suresoftware/powerseo/components/blogpost/default.htm", "");
    }
}
