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

/* C:\xampp-new\htdocs\octobercms/themes/zanor-zanor-mdb-loaded/partials/blog/video.htm */
class __TwigTemplate_2ab8cdf90e25d840ffb7f301c77a054d81fbf50c9f6b850751ab88fcc17a71ee extends \Twig\Template
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
        echo "<!-- Trigger the Modal -->

    <!-- The Modal -->
    <div id=\"myModal\" class=\"modal\">

        <!-- The Close Button -->
        <span class=\"close\">&times;</span>

        <!-- Modal Content (The iframe video) -->
        <div class=\"modal-contain\" id=\"modalContain\">

        </div>
        <!-- Modal Caption (The video title) -->
        <a id=\"caption\"></a>
    </div>
<div class=\"video\">
    <div class=\"row\" style=\"width: 100%\" >
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 20
            echo "        ";
            $context["postUrl"] = $this->extensions['Cms\Twig\Extension']->pageFilter("post", ["category1" => call_user_func_array($this->env->getFilter('_')->getCallable(), ["tai-lieu-huong-dan"]), "category2" => ($context["currentCategorySlug1"] ?? null), "slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 20)]);
            // line 21
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["post"], "iframe", [], "any", false, false, false, 21)) {
                // line 22
                echo "            <div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-4\" style=\"padding: 0px\" >

                <!--video content-->
                    <div class=\"image-video\">
                        <div class=\"video-link\">
                            <img src= \"storage/app/media";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 27), "html", null, true);
                echo "\" width=\"100%\" height=\"140px\" class=\"img-responsive\" alt=\"Image\">
                            <span class=\"video-play\"><i class=\"fa fa-play\"></i></span>
                            <div class=\"video-iframe\" style=\"display: none\">";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["post"], "iframe", [], "any", false, false, false, 29);
                echo "</div>
                            <a style=\"display: none\" class=\"video-url\" href=\"";
                // line 30
                echo twig_escape_filter($this->env, ($context["postUrl"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 30), "html", null, true);
                echo "</a>
                        </div>
                    </div>

                <!--Title-->
                <div class=\"video-title\"><a href=\"";
                // line 35
                echo twig_escape_filter($this->env, ($context["postUrl"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 35), "html", null, true);
                echo "</a></div>
            </div>
        ";
            }
            // line 38
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp-new\\htdocs\\octobercms/themes/zanor-zanor-mdb-loaded/partials/blog/video.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 39,  100 => 38,  92 => 35,  82 => 30,  78 => 29,  73 => 27,  66 => 22,  63 => 21,  60 => 20,  56 => 19,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set currentCategorySlug1 = CategoryThreeLevel.currentCategorySlug1 %}
<!-- Trigger the Modal -->

    <!-- The Modal -->
    <div id=\"myModal\" class=\"modal\">

        <!-- The Close Button -->
        <span class=\"close\">&times;</span>

        <!-- Modal Content (The iframe video) -->
        <div class=\"modal-contain\" id=\"modalContain\">

        </div>
        <!-- Modal Caption (The video title) -->
        <a id=\"caption\"></a>
    </div>
<div class=\"video\">
    <div class=\"row\" style=\"width: 100%\" >
        {% for post in posts %}
        {% set postUrl = 'post'|page({category1: 'tai-lieu-huong-dan'|_, category2: currentCategorySlug1 , slug: post.slug})%}
        {% if post.iframe %}
            <div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-4\" style=\"padding: 0px\" >

                <!--video content-->
                    <div class=\"image-video\">
                        <div class=\"video-link\">
                            <img src= \"storage/app/media{{ post.image }}\" width=\"100%\" height=\"140px\" class=\"img-responsive\" alt=\"Image\">
                            <span class=\"video-play\"><i class=\"fa fa-play\"></i></span>
                            <div class=\"video-iframe\" style=\"display: none\">{{ post.iframe|raw }}</div>
                            <a style=\"display: none\" class=\"video-url\" href=\"{{ postUrl }}\">{{ post.title }}</a>
                        </div>
                    </div>

                <!--Title-->
                <div class=\"video-title\"><a href=\"{{ postUrl }}\">{{ post.title }}</a></div>
            </div>
        {% endif %}
        {% endfor %}
    </div>
</div>", "C:\\xampp-new\\htdocs\\octobercms/themes/zanor-zanor-mdb-loaded/partials/blog/video.htm", "");
    }
}
