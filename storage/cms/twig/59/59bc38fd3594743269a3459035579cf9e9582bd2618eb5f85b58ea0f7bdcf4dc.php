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

/* C:\xampp-new\htdocs\octobercms/themes/zanor-zanor-mdb-loaded/partials/homePage/videoHuongDan.htm */
class __TwigTemplate_9f736d800d9f4c3a034b3ddfbe278111b31247a765cdc589d05cc3b4392f17bb extends \Twig\Template
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
        $context["videos"] = twig_get_attribute($this->env, $this->source, ($context["postsVideo"] ?? null), "posts", [], "any", false, false, false, 1);
        // line 2
        echo "
<!-- The modal to display video -->
        <div id=\"myModal\" class=\"modal\">

            <!-- The Close Button -->
            <span class=\"close\">&times;</span>

            <!-- Modal Content (The iframe video) -->
            <div class=\"modal-contain\" id=\"modalContain\">

            </div>
            <!-- Modal Caption (The video title) -->
            <a id=\"caption\"></a>
        </div>

        <!-- Video huong dan -->

        <div class=\"guide-video\" style=\"display: block\">
            <div class=\"container\" >
                <div class=\"block-title\">
                <img src=\"themes/zanor-zanor-mdb-loaded/assets/images/icon-video-guide.png\">
                <h2>&nbsp<a href=\" ";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("video", ["category1" => call_user_func_array($this->env->getFilter('_')->getCallable(), ["guide-crm-tieu-chuan"])]);
        echo " \">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["video"]);
        echo "</a></h2>
                </div>
                <!-- The video -->

                <div class=\"row\">
                    <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\"  >
                        <div class=\"image-video\">
                            <div class=\"video-link\">
                                <img src= \"storage/app/media";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["videos"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "image", [], "any", false, false, false, 31), "html", null, true);
        echo "\" width=\"100%\" height=\"312px\" alt=\"Avatar\" class=\"image\">
                                <span class=\"video-play\"><i class=\"fa fa-play\" ></i></span>
                                <div style=\"display: none\" class=\"video-iframe\" >";
        // line 33
        echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["videos"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "iframe", [], "any", false, false, false, 33);
        echo "</div>

                                <a style=\"display: none\" class=\"video-url\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["videos"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null), "url", [], "any", false, false, false, 35), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["videos"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[0] ?? null) : null), "title", [], "any", false, false, false, 35), "html", null, true);
        echo "</a>
                            </div>
                            <span class=\"video-title\"><a class=\"video-url\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["videos"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[0] ?? null) : null), "url", [], "any", false, false, false, 37), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["videos"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[0] ?? null) : null), "title", [], "any", false, false, false, 37), "html", null, true);
        echo "</a></span>
                        </div>
                    </div>
                    <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                        <div class=\"row\">
                        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["videos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 43
            echo "                           ";
            if (($context["video"] != (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["videos"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[0] ?? null) : null))) {
                // line 44
                echo "                                <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                                    <div class=\"image-video-small\">
                                        <div class=\"video-link\">
                                            <img src= \"storage/app/media";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "image", [], "any", false, false, false, 47), "html", null, true);
                echo "\" width=\"100%\" height=\"150px\" class=\"img-responsive\" alt=\"Image\">
                                            <span class=\"video-play-small\"><i class=\"fa fa-play\"></i></span>
                                            <div class=\"video-iframe\" style=\"display: none\">";
                // line 49
                echo twig_get_attribute($this->env, $this->source, $context["video"], "iframe", [], "any", false, false, false, 49);
                echo "</div>
                                            <a style=\"display: none\" class=\"video-url\" href=\"";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "url", [], "any", false, false, false, 50), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "title", [], "any", false, false, false, 50), "html", null, true);
                echo "</a>
                                        </div>
                                        <span class=\"video-title-small\"><a href=\"";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "url", [], "any", false, false, false, 52), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "title", [], "any", false, false, false, 52), "html", null, true);
                echo "</a></s>
                                    </div>
                                </div>
                            ";
            }
            // line 56
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                        </div>

                    </div>
                </div>
                <br>
                <div class=\"continues-video\"><a href=\"";
        // line 62
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("video", ["category1" => call_user_func_array($this->env->getFilter('_')->getCallable(), ["guide-crm-tieu-chuan"])]);
        echo "\"><img src=\"themes/zanor-zanor-mdb-loaded/assets/images/icon-viewmore.png\" alt=\"\">&nbsp";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["seemore"]);
        echo "</a></div>

            </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp-new\\htdocs\\octobercms/themes/zanor-zanor-mdb-loaded/partials/homePage/videoHuongDan.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 62,  143 => 57,  137 => 56,  128 => 52,  121 => 50,  117 => 49,  112 => 47,  107 => 44,  104 => 43,  100 => 42,  90 => 37,  83 => 35,  78 => 33,  73 => 31,  60 => 23,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set videos = postsVideo.posts %}

<!-- The modal to display video -->
        <div id=\"myModal\" class=\"modal\">

            <!-- The Close Button -->
            <span class=\"close\">&times;</span>

            <!-- Modal Content (The iframe video) -->
            <div class=\"modal-contain\" id=\"modalContain\">

            </div>
            <!-- Modal Caption (The video title) -->
            <a id=\"caption\"></a>
        </div>

        <!-- Video huong dan -->

        <div class=\"guide-video\" style=\"display: block\">
            <div class=\"container\" >
                <div class=\"block-title\">
                <img src=\"themes/zanor-zanor-mdb-loaded/assets/images/icon-video-guide.png\">
                <h2>&nbsp<a href=\" {{ 'video'| page({category1: 'guide-crm-tieu-chuan'|_}) }} \">{{ 'video'|_ }}</a></h2>
                </div>
                <!-- The video -->

                <div class=\"row\">
                    <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\"  >
                        <div class=\"image-video\">
                            <div class=\"video-link\">
                                <img src= \"storage/app/media{{ videos[0].image }}\" width=\"100%\" height=\"312px\" alt=\"Avatar\" class=\"image\">
                                <span class=\"video-play\"><i class=\"fa fa-play\" ></i></span>
                                <div style=\"display: none\" class=\"video-iframe\" >{{ videos[0].iframe|raw }}</div>

                                <a style=\"display: none\" class=\"video-url\" href=\"{{ videos[0].url }}\">{{ videos[0].title }}</a>
                            </div>
                            <span class=\"video-title\"><a class=\"video-url\" href=\"{{ videos[0].url }}\">{{ videos[0].title }}</a></span>
                        </div>
                    </div>
                    <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                        <div class=\"row\">
                        {% for video in videos %}
                           {% if video != videos[0] %}
                                <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
                                    <div class=\"image-video-small\">
                                        <div class=\"video-link\">
                                            <img src= \"storage/app/media{{ video.image }}\" width=\"100%\" height=\"150px\" class=\"img-responsive\" alt=\"Image\">
                                            <span class=\"video-play-small\"><i class=\"fa fa-play\"></i></span>
                                            <div class=\"video-iframe\" style=\"display: none\">{{ video.iframe|raw }}</div>
                                            <a style=\"display: none\" class=\"video-url\" href=\"{{ video.url }}\">{{ video.title }}</a>
                                        </div>
                                        <span class=\"video-title-small\"><a href=\"{{ video.url }}\">{{ video.title }}</a></s>
                                    </div>
                                </div>
                            {% endif %}
                        {% endfor %}
                        </div>

                    </div>
                </div>
                <br>
                <div class=\"continues-video\"><a href=\"{{ 'video'| page({ category1:'guide-crm-tieu-chuan'|_ }) }}\"><img src=\"themes/zanor-zanor-mdb-loaded/assets/images/icon-viewmore.png\" alt=\"\">&nbsp{{ 'seemore'|_ }}</a></div>

            </div>
        </div>", "C:\\xampp-new\\htdocs\\octobercms/themes/zanor-zanor-mdb-loaded/partials/homePage/videoHuongDan.htm", "");
    }
}
