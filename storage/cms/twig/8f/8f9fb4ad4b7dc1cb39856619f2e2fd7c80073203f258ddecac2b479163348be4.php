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

/* C:\xampp-new\htdocs\octobercms/themes/zanor-zanor-mdb-loaded/partials/homePage/taiLieuHuongDan.htm */
class __TwigTemplate_92cda2758b8f5fd8f0472e78f48caf73d213e66c2f2666eed082a56c5da95a98 extends \Twig\Template
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
        $context["categoriesByCrmTieuChuan"] = twig_get_attribute($this->env, $this->source, ($context["postsCategoryCrmTieuChuan"] ?? null), "categories", [], "any", false, false, false, 1);
        // line 2
        $context["categoriesByCrmTheoNganh"] = twig_get_attribute($this->env, $this->source, ($context["postsCategoryCrmTheoNganh"] ?? null), "categories", [], "any", false, false, false, 2);
        // line 3
        echo "    <!-- Hướng dẫn sử dụng -->

    <div class=\"guide\" id=\"guide1\">
        <div class=\"container\">
            <div class=\"block-title\">
                <img src=\"themes/zanor-zanor-mdb-loaded/assets/images/icon-guide.png\">
                ";
        // line 9
        $context["postDefault"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["postsCategoryCrmTieuChuan"] ?? null), "postsCategory", [], "any", false, false, false, 9)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null);
        // line 10
        echo "                <h2>&nbsp<a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("post", ["category1" => call_user_func_array($this->env->getFilter('_')->getCallable(), ["guide-crm-tieu-chuan"])]);
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["userguide"]);
        echo "</a></h2>
            </div>
            <div class=\"row\">
                ";
        // line 13
        if (($context["categoriesByCrmTieuChuan"] ?? null)) {
            // line 14
            echo "                    ";
            $context["i"] = 0;
            echo " 
                        ";
            // line 15
            $context["j"] = 0;
            // line 16
            echo "                            ";
            $context["k"] = 0;
            echo "  
                            ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categoriesByCrmTieuChuan"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 18
                echo "                                ";
                if ((($context["j"] ?? null) > 3)) {
                    // line 19
                    echo "                                <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-3 MoreColumn\" >
                                    <div class=\"guide-item\">
                                        <div class=\"guide-item-title\">
                                            ";
                    // line 22
                    $context["postDefaultForeachCategory"] = (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, ($context["postsCategoryCrmTieuChuan"] ?? null), "postsCategory", [], "any", false, false, false, 22)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["i"] ?? null)] ?? null) : null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null);
                    // line 23
                    echo "                                            <a class=\"";
                    if ((twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 23) == ($context["currentCategorySlug"] ?? null))) {
                        echo "active";
                    }
                    echo "\"
                                            href=\"";
                    // line 24
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("post", ["category1" => call_user_func_array($this->env->getFilter('_')->getCallable(), ["guide-crm-tieu-chuan"]), "category2" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 24), "slug" => twig_get_attribute($this->env, $this->source, ($context["postDefaultForeachCategory"] ?? null), "slug", [], "any", false, false, false, 24)]);
                    echo "\"><h3 class=\"fz-24\" >";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 24), "html", null, true);
                    echo "</h3> 
                                            </a>
                                        </div>
                                    <ul class=\"PostList\"> 
                                        ";
                    // line 28
                    $context["postsCategory"] = (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, ($context["postsCategoryCrmTieuChuan"] ?? null), "postsCategory", [], "any", false, false, false, 28)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[($context["i"] ?? null)] ?? null) : null);
                    // line 29
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["postsCategory"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                        // line 30
                        echo "                                        <li>
                                            <a title = \"";
                        // line 31
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 31), "html", null, true);
                        echo "\" href=\"";
                        echo $this->extensions['Cms\Twig\Extension']->pageFilter("post", ["category1" => call_user_func_array($this->env->getFilter('_')->getCallable(), ["guide-crm-tieu-chuan"]), "category2" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 31), "slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 31)]);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 31), "html", null, true);
                        echo "</a>
                                        </li>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 34
                    echo "                                        <li class='sub_accordian'><a class='show_more'>";
                    echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["seemore"]);
                    echo "</a><a class='show_less'>";
                    echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["hideless"]);
                    echo "</a></li>
                                    </ul>
                                    </div>
                                </div>
                                ";
                } else {
                    // line 39
                    echo "                                <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-3 \">
                                    <div class=\"guide-item\">
                                        <div class=\"guide-item-title\">
                                            ";
                    // line 42
                    $context["postDefaultForeachCategory"] = (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, ($context["postsCategoryCrmTieuChuan"] ?? null), "postsCategory", [], "any", false, false, false, 42)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[($context["i"] ?? null)] ?? null) : null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[0] ?? null) : null);
                    // line 43
                    echo "                                            <a class=\"";
                    if ((twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 43) == ($context["currentCategorySlug"] ?? null))) {
                        echo "active";
                    }
                    echo "\"
                                            href=\"";
                    // line 44
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("post", ["category1" => call_user_func_array($this->env->getFilter('_')->getCallable(), ["guide-crm-tieu-chuan"]), "category2" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 44), "slug" => twig_get_attribute($this->env, $this->source, ($context["postDefaultForeachCategory"] ?? null), "slug", [], "any", false, false, false, 44)]);
                    echo "\"><h3 class=\"fz-24\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 44), "html", null, true);
                    echo "</h3>
                                            </a>
                                        </div>
                                    <ul class=\"PostList\">
                                        ";
                    // line 48
                    $context["postsCategory"] = (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = twig_get_attribute($this->env, $this->source, ($context["postsCategoryCrmTieuChuan"] ?? null), "postsCategory", [], "any", false, false, false, 48)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[($context["i"] ?? null)] ?? null) : null);
                    // line 49
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["postsCategory"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                        // line 50
                        echo "                                        <li>
                                            <a title=\"";
                        // line 51
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 51), "html", null, true);
                        echo "\" href=\"";
                        echo $this->extensions['Cms\Twig\Extension']->pageFilter("post", ["category1" => call_user_func_array($this->env->getFilter('_')->getCallable(), ["guide-crm-tieu-chuan"]), "category2" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 51), "slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 51)]);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 51), "html", null, true);
                        echo "</a>
                                        </li>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 54
                    echo "                                        <li class='sub_accordian'><a class='show_more'>";
                    echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["seemore"]);
                    echo "</a><a class='show_less'>";
                    echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["hideless"]);
                    echo "</a></li>
                                    </ul>
                                    </div>
                                </div>
                                ";
                }
                // line 59
                echo "                                ";
                $context["j"] = (($context["j"] ?? null) + 1);
                // line 60
                echo "                    ";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 61
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                ";
        }
        // line 63
        echo "            </div>
            <div class=\"continues-guide\"><a id=\"SeeMore\"><img src=\"themes/zanor-zanor-mdb-loaded/assets/images/icon-viewmore.png\" alt=\"\">&nbsp";
        // line 64
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["seemore"]);
        echo "</a><a id=\"HideLess\"><img src=\"themes/zanor-zanor-mdb-loaded/assets/images/icon-viewmore.png\" alt=\"\">&nbsp";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["hideless"]);
        echo "</a></div>

        </div>
    </div>

    <!-- CRM theo ngành -->

    <div class=\"guide\" id=\"guide2\">
        <div class=\"container\">
            <div class=\"block-title\">
                <img src=\"themes/zanor-zanor-mdb-loaded/assets/images/icon-guide.png\">
                ";
        // line 75
        $context["postDefault"] = (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = twig_get_attribute($this->env, $this->source, ($context["postsCategoryCrmTheoNganh"] ?? null), "postsCategory", [], "any", false, false, false, 75)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[0] ?? null) : null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[0] ?? null) : null);
        // line 76
        echo "                <h2>&nbsp<a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("post", ["category1" => call_user_func_array($this->env->getFilter('_')->getCallable(), ["guide-crm-theo-nganh"])]);
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["crmindustry"]);
        echo "</a></h2>
            </div>
            <div class=\"row\">
                ";
        // line 79
        if (($context["categoriesByCrmTheoNganh"] ?? null)) {
            // line 80
            echo "                    ";
            $context["i"] = 0;
            // line 81
            echo "                        ";
            $context["j"] = 0;
            echo " 
                            ";
            // line 82
            $context["k"] = 0;
            // line 83
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categoriesByCrmTheoNganh"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 84
                echo "                                ";
                if ((($context["j"] ?? null) > 3)) {
                    // line 85
                    echo "                                <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-3 MoreColumn1\" >
                                    <div class=\"guide-item\">
                                        <div class=\"guide-item-title\">
                                            ";
                    // line 88
                    $context["postDefaultForeachCategory"] = (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = twig_get_attribute($this->env, $this->source, ($context["postsCategoryCrmTheoNganh"] ?? null), "postsCategory", [], "any", false, false, false, 88)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[($context["i"] ?? null)] ?? null) : null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[0] ?? null) : null);
                    // line 89
                    echo "                                            <a class=\"";
                    if ((twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 89) == ($context["currentCategorySlug"] ?? null))) {
                        echo "active";
                    }
                    echo "\"
                                            href=\"";
                    // line 90
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("post", ["category1" => call_user_func_array($this->env->getFilter('_')->getCallable(), ["guide-crm-theo-nganh"]), "category2" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 90), "slug" => twig_get_attribute($this->env, $this->source, ($context["postDefaultForeachCategory"] ?? null), "slug", [], "any", false, false, false, 90)]);
                    echo "\"><h3 class=\"fz-24\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 90), "html", null, true);
                    echo "</h3> 
                                            </a>  
                                        </div>
                                    <ul class=\"PostList\">
                                        ";
                    // line 94
                    $context["postsCategory"] = (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = twig_get_attribute($this->env, $this->source, ($context["postsCategoryCrmTheoNganh"] ?? null), "postsCategory", [], "any", false, false, false, 94)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[($context["i"] ?? null)] ?? null) : null);
                    // line 95
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["postsCategory"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                        // line 96
                        echo "                                        <li>
                                            <a title=\"";
                        // line 97
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 97), "html", null, true);
                        echo "\" href=\"";
                        echo $this->extensions['Cms\Twig\Extension']->pageFilter("post", ["category1" => call_user_func_array($this->env->getFilter('_')->getCallable(), ["guide-crm-theo-nganh"]), "category2" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 97), "slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 97)]);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 97), "html", null, true);
                        echo "</a>
                                        </li>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 100
                    echo "                                        <li class='sub_accordian'><a class='show_more'>";
                    echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["seemore"]);
                    echo "</a><a class='show_less'>";
                    echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["hideless"]);
                    echo "</a></li>
                                    </ul>
                                    </div>
                                </div>
                                ";
                } else {
                    // line 105
                    echo "                                <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-3 \">
                                    <div class=\"guide-item\">
                                        <div class=\"guide-item-title\">
                                            ";
                    // line 108
                    $context["postDefaultForeachCategory"] = (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = twig_get_attribute($this->env, $this->source, ($context["postsCategoryCrmTheoNganh"] ?? null), "postsCategory", [], "any", false, false, false, 108)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[($context["i"] ?? null)] ?? null) : null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[0] ?? null) : null);
                    // line 109
                    echo "                                            <a class=\"";
                    if ((twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 109) == ($context["currentCategorySlug"] ?? null))) {
                        echo "active";
                    }
                    echo "\"
                                            href=\"";
                    // line 110
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("post", ["category1" => call_user_func_array($this->env->getFilter('_')->getCallable(), ["guide-crm-theo-nganh"]), "category2" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 110), "slug" => twig_get_attribute($this->env, $this->source, ($context["postDefaultForeachCategory"] ?? null), "slug", [], "any", false, false, false, 110)]);
                    echo "\"><h3 class=\"fz-24\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 110), "html", null, true);
                    echo "</h3>
                                            </a>
                                        </div>
                                    <ul class=\"PostList\">
                                        ";
                    // line 114
                    $context["postsCategory"] = (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = twig_get_attribute($this->env, $this->source, ($context["postsCategoryCrmTheoNganh"] ?? null), "postsCategory", [], "any", false, false, false, 114)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[($context["i"] ?? null)] ?? null) : null);
                    // line 115
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["postsCategory"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                        // line 116
                        echo "                                        <li>
                                            <a title = \"";
                        // line 117
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 117), "html", null, true);
                        echo "\" href=\"";
                        echo $this->extensions['Cms\Twig\Extension']->pageFilter("post", ["category1" => call_user_func_array($this->env->getFilter('_')->getCallable(), ["guide-crm-theo-nganh"]), "category2" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 117), "slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 117)]);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 117), "html", null, true);
                        echo "</a>
                                        </li>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 120
                    echo "                                        <li class='sub_accordian'><a class='show_more'>";
                    echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["seemore"]);
                    echo "</a><a class='show_less'>";
                    echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["hideless"]);
                    echo "</a></li>
                                    </ul>
                                    </div>
                                </div>
                                ";
                }
                // line 125
                echo "                                ";
                $context["j"] = (($context["j"] ?? null) + 1);
                // line 126
                echo "                    ";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 127
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "                ";
        }
        // line 129
        echo "            </div>
            <div class=\"continues-guide\"><a id=\"SeeMore1\"><img src=\"themes/zanor-zanor-mdb-loaded/assets/images/icon-viewmore.png\" alt=\"\">&nbsp";
        // line 130
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["seemore"]);
        echo "</a><a id=\"HideLess1\"><img src=\"themes/zanor-zanor-mdb-loaded/assets/images/icon-viewmore.png\" alt=\"\">&nbsp";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["hideless"]);
        echo "</a></div>

        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp-new\\htdocs\\octobercms/themes/zanor-zanor-mdb-loaded/partials/homePage/taiLieuHuongDan.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  390 => 130,  387 => 129,  384 => 128,  378 => 127,  375 => 126,  372 => 125,  361 => 120,  348 => 117,  345 => 116,  340 => 115,  338 => 114,  329 => 110,  322 => 109,  320 => 108,  315 => 105,  304 => 100,  291 => 97,  288 => 96,  283 => 95,  281 => 94,  272 => 90,  265 => 89,  263 => 88,  258 => 85,  255 => 84,  250 => 83,  248 => 82,  243 => 81,  240 => 80,  238 => 79,  229 => 76,  227 => 75,  211 => 64,  208 => 63,  205 => 62,  199 => 61,  196 => 60,  193 => 59,  182 => 54,  169 => 51,  166 => 50,  161 => 49,  159 => 48,  150 => 44,  143 => 43,  141 => 42,  136 => 39,  125 => 34,  112 => 31,  109 => 30,  104 => 29,  102 => 28,  93 => 24,  86 => 23,  84 => 22,  79 => 19,  76 => 18,  72 => 17,  67 => 16,  65 => 15,  60 => 14,  58 => 13,  49 => 10,  47 => 9,  39 => 3,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set categoriesByCrmTieuChuan = postsCategoryCrmTieuChuan.categories %}
{% set categoriesByCrmTheoNganh = postsCategoryCrmTheoNganh.categories %}
    <!-- Hướng dẫn sử dụng -->

    <div class=\"guide\" id=\"guide1\">
        <div class=\"container\">
            <div class=\"block-title\">
                <img src=\"themes/zanor-zanor-mdb-loaded/assets/images/icon-guide.png\">
                {% set postDefault = postsCategoryCrmTieuChuan.postsCategory[0][0] %}
                <h2>&nbsp<a href=\"{{ 'post'| page({ category1:'guide-crm-tieu-chuan'|_}) }}\">{{ 'userguide'|_ }}</a></h2>
            </div>
            <div class=\"row\">
                {% if(categoriesByCrmTieuChuan ) %}
                    {% set i = 0 %} 
                        {% set j = 0 %}
                            {% set k = 0 %}  
                            {% for category in categoriesByCrmTieuChuan  %}
                                {% if(j>3) %}
                                <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-3 MoreColumn\" >
                                    <div class=\"guide-item\">
                                        <div class=\"guide-item-title\">
                                            {% set postDefaultForeachCategory = postsCategoryCrmTieuChuan.postsCategory[i][0] %}
                                            <a class=\"{% if category.slug == currentCategorySlug %}active{% endif %}\"
                                            href=\"{{ 'post'| page({ category1:'guide-crm-tieu-chuan'|_,category2: category.slug, slug: postDefaultForeachCategory.slug }) }}\"><h3 class=\"fz-24\" >{{ category.name }}</h3> 
                                            </a>
                                        </div>
                                    <ul class=\"PostList\"> 
                                        {% set postsCategory = postsCategoryCrmTieuChuan.postsCategory[i] %}
                                        {% for post in postsCategory %}
                                        <li>
                                            <a title = \"{{ post.title }}\" href=\"{{ 'post'| page({ category1:'guide-crm-tieu-chuan'|_,category2: category.slug, slug: post.slug}) }}\">{{ post.title }}</a>
                                        </li>
                                        {% endfor %}
                                        <li class='sub_accordian'><a class='show_more'>{{ 'seemore'|_ }}</a><a class='show_less'>{{ 'hideless'|_ }}</a></li>
                                    </ul>
                                    </div>
                                </div>
                                {% else %}
                                <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-3 \">
                                    <div class=\"guide-item\">
                                        <div class=\"guide-item-title\">
                                            {% set postDefaultForeachCategory = postsCategoryCrmTieuChuan.postsCategory[i][0] %}
                                            <a class=\"{% if category.slug == currentCategorySlug %}active{% endif %}\"
                                            href=\"{{ 'post'| page({ category1:'guide-crm-tieu-chuan'|_,category2: category.slug, slug: postDefaultForeachCategory.slug }) }}\"><h3 class=\"fz-24\">{{ category.name }}</h3>
                                            </a>
                                        </div>
                                    <ul class=\"PostList\">
                                        {% set postsCategory = postsCategoryCrmTieuChuan.postsCategory[i] %}
                                        {% for post in postsCategory %}
                                        <li>
                                            <a title=\"{{ post.title }}\" href=\"{{ 'post'| page({ category1:'guide-crm-tieu-chuan'|_,category2: category.slug, slug: post.slug}) }}\">{{ post.title }}</a>
                                        </li>
                                        {% endfor %}
                                        <li class='sub_accordian'><a class='show_more'>{{ 'seemore'|_ }}</a><a class='show_less'>{{ 'hideless'|_ }}</a></li>
                                    </ul>
                                    </div>
                                </div>
                                {% endif %}
                                {% set j = j + 1 %}
                    {% set i = i + 1 %}
                    {% endfor %}
                {% endif %}
            </div>
            <div class=\"continues-guide\"><a id=\"SeeMore\"><img src=\"themes/zanor-zanor-mdb-loaded/assets/images/icon-viewmore.png\" alt=\"\">&nbsp{{ 'seemore'|_ }}</a><a id=\"HideLess\"><img src=\"themes/zanor-zanor-mdb-loaded/assets/images/icon-viewmore.png\" alt=\"\">&nbsp{{ 'hideless'|_ }}</a></div>

        </div>
    </div>

    <!-- CRM theo ngành -->

    <div class=\"guide\" id=\"guide2\">
        <div class=\"container\">
            <div class=\"block-title\">
                <img src=\"themes/zanor-zanor-mdb-loaded/assets/images/icon-guide.png\">
                {% set postDefault = postsCategoryCrmTheoNganh.postsCategory[0][0] %}
                <h2>&nbsp<a href=\"{{ 'post'| page({ category1:'guide-crm-theo-nganh'|_}) }}\">{{ 'crmindustry'|_ }}</a></h2>
            </div>
            <div class=\"row\">
                {% if(categoriesByCrmTheoNganh) %}
                    {% set i = 0 %}
                        {% set j = 0 %} 
                            {% set k = 0 %}
                            {% for category in categoriesByCrmTheoNganh %}
                                {% if(j>3) %}
                                <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-3 MoreColumn1\" >
                                    <div class=\"guide-item\">
                                        <div class=\"guide-item-title\">
                                            {% set postDefaultForeachCategory = postsCategoryCrmTheoNganh.postsCategory[i][0] %}
                                            <a class=\"{% if category.slug == currentCategorySlug %}active{% endif %}\"
                                            href=\"{{ 'post'| page({ category1:'guide-crm-theo-nganh'|_,category2: category.slug, slug: postDefaultForeachCategory.slug }) }}\"><h3 class=\"fz-24\">{{ category.name }}</h3> 
                                            </a>  
                                        </div>
                                    <ul class=\"PostList\">
                                        {% set postsCategory = postsCategoryCrmTheoNganh.postsCategory[i] %}
                                        {% for post in postsCategory %}
                                        <li>
                                            <a title=\"{{ post.title }}\" href=\"{{ 'post'| page({ category1:'guide-crm-theo-nganh'|_,category2: category.slug, slug: post.slug}) }}\">{{ post.title }}</a>
                                        </li>
                                        {% endfor %}
                                        <li class='sub_accordian'><a class='show_more'>{{ 'seemore'|_ }}</a><a class='show_less'>{{ 'hideless'|_ }}</a></li>
                                    </ul>
                                    </div>
                                </div>
                                {% else %}
                                <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-3 \">
                                    <div class=\"guide-item\">
                                        <div class=\"guide-item-title\">
                                            {% set postDefaultForeachCategory = postsCategoryCrmTheoNganh.postsCategory[i][0] %}
                                            <a class=\"{% if category.slug == currentCategorySlug %}active{% endif %}\"
                                            href=\"{{ 'post'| page({ category1:'guide-crm-theo-nganh'|_,category2: category.slug, slug: postDefaultForeachCategory.slug }) }}\"><h3 class=\"fz-24\">{{ category.name }}</h3>
                                            </a>
                                        </div>
                                    <ul class=\"PostList\">
                                        {% set postsCategory = postsCategoryCrmTheoNganh.postsCategory[i] %}
                                        {% for post in postsCategory %}
                                        <li>
                                            <a title = \"{{ post.title }}\" href=\"{{ 'post'| page({ category1:'guide-crm-theo-nganh'|_,category2: category.slug, slug: post.slug}) }}\">{{ post.title }}</a>
                                        </li>
                                        {% endfor %}
                                        <li class='sub_accordian'><a class='show_more'>{{ 'seemore'|_ }}</a><a class='show_less'>{{ 'hideless'|_ }}</a></li>
                                    </ul>
                                    </div>
                                </div>
                                {% endif %}
                                {% set j = j + 1 %}
                    {% set i = i + 1 %}
                    {% endfor %}
                {% endif %}
            </div>
            <div class=\"continues-guide\"><a id=\"SeeMore1\"><img src=\"themes/zanor-zanor-mdb-loaded/assets/images/icon-viewmore.png\" alt=\"\">&nbsp{{ 'seemore'|_ }}</a><a id=\"HideLess1\"><img src=\"themes/zanor-zanor-mdb-loaded/assets/images/icon-viewmore.png\" alt=\"\">&nbsp{{ 'hideless'|_ }}</a></div>

        </div>
    </div>", "C:\\xampp-new\\htdocs\\octobercms/themes/zanor-zanor-mdb-loaded/partials/homePage/taiLieuHuongDan.htm", "");
    }
}
