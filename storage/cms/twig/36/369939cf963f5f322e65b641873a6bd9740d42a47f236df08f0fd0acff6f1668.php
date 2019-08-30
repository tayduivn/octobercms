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

/* C:\xampp-new\htdocs\octobercms/themes/zanor-zanor-mdb-loaded/partials/homePage/cauHoiThuongGap.htm */
class __TwigTemplate_f795a3e0bf6905b6be936001edccf4238c0c848e3723fee1d74fd9f3b700b838 extends \Twig\Template
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
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["postsCauHoiThuongGap"] ?? null), "posts", [], "any", false, false, false, 1);
        // line 2
        echo "<div class=\"faqs\">
    <div class=\"container\">
        <div class=\"block-title\">
            <img src=\"themes/zanor-zanor-mdb-loaded/assets/images/icon-question.png\">
\t\t\t<h2>&nbsp<a href=\" ";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("faqs", ["category1" => call_user_func_array($this->env->getFilter('_')->getCallable(), ["faqs-crm-tieu-chuan"])]);
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["faq"]);
        echo "</h2></a>
\t\t</div>
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
        </div>
        <div class=\"row\">

            <!--Main column-->
            <!-- Câu hỏi thường gặp -->
                ";
        // line 14
        $context["i"] = 1;
        // line 15
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 16
            echo "                <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">

                    <ul>
                        <li class=\"question-item\">
                            <a class=\"question-title\" >
                                <span class=\"number-circle\">";
            // line 21
            echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
            echo "</span>
                                ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 22), "html", null, true);
            echo "
                                <span class=\"fa fa-angle-down\"></span>
                            </a>
                            <div class=\"question-content\">
                                ";
            // line 26
            echo twig_get_attribute($this->env, $this->source, $context["post"], "content_html", [], "any", false, false, false, 26);
            echo "
                            </div>
                        </li>
                    </ul>

                </div>
                ";
            // line 32
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 33
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
        </div>
        <br>
        <div class=\"continues-faqs\"><a href=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("faqs", ["category1" => "faqs-crm-tieu-chuan", "category2" => call_user_func_array($this->env->getFilter('_')->getCallable(), ["cau-hoi-thuong-gap"])]);
        echo "\"><img src=\"themes/zanor-zanor-mdb-loaded/assets/images/icon-viewmore.png\" alt=\"\">&nbsp";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["seemore"]);
        echo "</a></div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp-new\\htdocs\\octobercms/themes/zanor-zanor-mdb-loaded/partials/homePage/cauHoiThuongGap.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 37,  98 => 34,  92 => 33,  90 => 32,  81 => 26,  74 => 22,  70 => 21,  63 => 16,  58 => 15,  56 => 14,  43 => 6,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set posts = postsCauHoiThuongGap.posts %}
<div class=\"faqs\">
    <div class=\"container\">
        <div class=\"block-title\">
            <img src=\"themes/zanor-zanor-mdb-loaded/assets/images/icon-question.png\">
\t\t\t<h2>&nbsp<a href=\" {{ 'faqs'|page({category1: 'faqs-crm-tieu-chuan'|_ }) }}\">{{ 'faq'|_ }}</h2></a>
\t\t</div>
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
        </div>
        <div class=\"row\">

            <!--Main column-->
            <!-- Câu hỏi thường gặp -->
                {% set i = 1 %}
                {% for post in posts %}
                <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">

                    <ul>
                        <li class=\"question-item\">
                            <a class=\"question-title\" >
                                <span class=\"number-circle\">{{ i }}</span>
                                {{ post.title }}
                                <span class=\"fa fa-angle-down\"></span>
                            </a>
                            <div class=\"question-content\">
                                {{ post.content_html|raw }}
                            </div>
                        </li>
                    </ul>

                </div>
                {% set i = i + 1 %}
                {% endfor %}

        </div>
        <br>
        <div class=\"continues-faqs\"><a href=\"{{ 'faqs'|page({ category1: 'faqs-crm-tieu-chuan', category2: 'cau-hoi-thuong-gap'|_ })}}\"><img src=\"themes/zanor-zanor-mdb-loaded/assets/images/icon-viewmore.png\" alt=\"\">&nbsp{{ 'seemore'|_ }}</a></div>
    </div>
</div>", "C:\\xampp-new\\htdocs\\octobercms/themes/zanor-zanor-mdb-loaded/partials/homePage/cauHoiThuongGap.htm", "");
    }
}
