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

/* C:\xampp-new\htdocs\octobercms/themes/zanor-zanor-mdb-loaded/partials/site/footer.htm */
class __TwigTemplate_6782d46c21067ec54bc6d5a78c55251874df405182c9045ce67e0ece8eb6d9d8 extends \Twig\Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer/4-column"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "

<script src=\"themes/zanor-zanor-mdb-loaded/assets/js/jquery-3.2.1.min.js\"></script>
<script src=\"themes/zanor-zanor-mdb-loaded/assets/js/popper.js\"></script>
<script src=\"themes/zanor-zanor-mdb-loaded/assets/js/bootstrap.min.js\"></script>
<script src=\"themes/zanor-zanor-mdb-loaded/assets/js/mdb.min.js\"></script>
<script src=\"themes/zanor-zanor-mdb-loaded/assets/js/scrollTop.js\"></script>
<script src=\"themes/zanor-zanor-mdb-loaded/assets/js/dropdownMenu.js\"></script>
<script src=\"themes/zanor-zanor-mdb-loaded/assets/js/dropdownSidebar.js\"></script>

    ";
        // line 12
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 13
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 14
        echo "
<script>
    new WOW().init();
</script>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp-new\\htdocs\\octobercms/themes/zanor-zanor-mdb-loaded/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 14,  66 => 13,  51 => 12,  39 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'footer/4-column' %}


<script src=\"themes/zanor-zanor-mdb-loaded/assets/js/jquery-3.2.1.min.js\"></script>
<script src=\"themes/zanor-zanor-mdb-loaded/assets/js/popper.js\"></script>
<script src=\"themes/zanor-zanor-mdb-loaded/assets/js/bootstrap.min.js\"></script>
<script src=\"themes/zanor-zanor-mdb-loaded/assets/js/mdb.min.js\"></script>
<script src=\"themes/zanor-zanor-mdb-loaded/assets/js/scrollTop.js\"></script>
<script src=\"themes/zanor-zanor-mdb-loaded/assets/js/dropdownMenu.js\"></script>
<script src=\"themes/zanor-zanor-mdb-loaded/assets/js/dropdownSidebar.js\"></script>

    {% framework extras %}
    {% scripts %}

<script>
    new WOW().init();
</script>

</body>
</html>", "C:\\xampp-new\\htdocs\\octobercms/themes/zanor-zanor-mdb-loaded/partials/site/footer.htm", "");
    }
}
