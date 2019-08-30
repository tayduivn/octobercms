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

/* C:\xampp-new\htdocs\octobercms/themes/zanor-zanor-mdb-loaded/pages/homepage.htm */
class __TwigTemplate_e250c02402feff38ff9d72cf0cb04381a8fa7143f1849afb1be7132359afbae1 extends \Twig\Template
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
        echo "<main>
    <!--Main layout--> 
    <!-- Câu hỏi thường gặp -->     
    ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("homePage/cauHoiThuongGap"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "    <!-- Hướng dẫn sử dụng -->
    ";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("homePage/taiLieuHuongDan"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "    <!-- Video hướng dẫn -->
    ";
        // line 8
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("homePage/videoHuongDan"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 9
        echo "    <!--/.Main layout-->
</main>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp-new\\htdocs\\octobercms/themes/zanor-zanor-mdb-loaded/pages/homepage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  54 => 8,  51 => 7,  47 => 6,  44 => 5,  40 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<main>
    <!--Main layout--> 
    <!-- Câu hỏi thường gặp -->     
    {% partial 'homePage/cauHoiThuongGap' %}
    <!-- Hướng dẫn sử dụng -->
    {% partial 'homePage/taiLieuHuongDan' %}
    <!-- Video hướng dẫn -->
    {% partial 'homePage/videoHuongDan' %}
    <!--/.Main layout-->
</main>", "C:\\xampp-new\\htdocs\\octobercms/themes/zanor-zanor-mdb-loaded/pages/homepage.htm", "");
    }
}
