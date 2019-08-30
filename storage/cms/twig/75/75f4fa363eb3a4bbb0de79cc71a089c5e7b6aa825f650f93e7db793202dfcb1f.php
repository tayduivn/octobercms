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

/* C:\xampp-new\htdocs\octobercms/themes/zanor-zanor-mdb-loaded/partials/footer/4-column.htm */
class __TwigTemplate_8b2538c625dcb27673f4212129fbe459f541eda88ad21e48a16aea5438a2ba60 extends \Twig\Template
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
        echo "<!--Footer-->
<footer class=\"page-footer center-on-small-only\">

    <!--Footer links-->
    <div class=\"footer container\">
        <div class=\"row\">
            <div class=\"col-md-11 mg-auto\">
                <div class=\"row\">
                    <!--First column-->
                    <div class=\"col-md-3\">
                        <h5 class=\"title mb-3\"><strong>";
        // line 11
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["crmsolution"]);
        echo "</strong></h5>
                        <ul id=\"footer_links\">
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">";
        // line 15
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["crmforeducation"]);
        echo "</a>
                            </li>
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">";
        // line 19
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["crmforbank"]);
        echo "</a>
                            </li>
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">";
        // line 23
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["crmforheadhunter"]);
        echo "</a>
                            </li>
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">";
        // line 27
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["crmfortravel"]);
        echo "</a>
                            </li>
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">";
        // line 31
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["crmforlogistics"]);
        echo "</a>
                            </li>
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">";
        // line 35
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["crmforretail"]);
        echo "</a>
                            </li>
                        </ul>
                    </div>
                    <!--/.First column-->
                    <hr class=\"w-100 clearfix d-sm-none\">
                    <!--Second column-->
                    <div class=\"col-md-4\">
                        <h5 class=\"title mb-3\"><strong>";
        // line 43
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["crmsolution"]);
        echo "</strong></h5>
                        <ul id=\"footer_links\">
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">";
        // line 47
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["integratewithippbx"]);
        echo "</a>
                            </li>
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">";
        // line 51
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["integratewithbrandsms"]);
        echo "</a>
                            </li>
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">";
        // line 55
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["integratewithwebsite"]);
        echo "</a>
                            </li>
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">";
        // line 59
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["integratewithaccountingsoftware"]);
        echo "</a>
                            </li>
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">";
        // line 63
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["integratewitherpsoftware"]);
        echo "</a>
                            </li>
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">";
        // line 67
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["integratewithzalo"]);
        echo "</a>
                            </li>
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">";
        // line 71
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["integratewithfacebook"]);
        echo "</a>
                            </li>
                        </ul>
                    </div>
                    <!--/.Second column-->
                    <hr class=\"w-100 clearfix d-sm-none\">
                    <!--Third column-->
                    <div class=\"col-md-2\">
                        <h5 class=\"title mb-3\"><strong>";
        // line 79
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["support"]);
        echo "</strong></h5>
                        <ul id=\"footer_links\">
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">";
        // line 83
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["faqs"]);
        echo "</a>
                            </li>
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">";
        // line 87
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["forum"]);
        echo "</a>
                            </li>
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">";
        // line 91
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["introduce"]);
        echo "</a>
                            </li>
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">";
        // line 95
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["news"]);
        echo "</a>
                            </li>
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">";
        // line 99
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["recruitment"]);
        echo "</a>
                            </li>
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">";
        // line 103
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["contact"]);
        echo "</a>
                            </li>
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">";
        // line 107
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["policy"]);
        echo "</a>
                            </li>
                        </ul>
                    </div>
                    <!--/.Third column-->
                    <hr class=\"w-100 clearfix d-sm-none\">
                    <!--Fourth column-->
                    <div class=\"col-md-3 \">
                        <h5 class=\"title mb-3\"><strong>";
        // line 115
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["contact"]);
        echo "</strong></h5>
                        <ul>
                            <li>
                                <a href=\"#!\">";
        // line 118
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["sales"]);
        echo ": support@onlinecrm.vn</a>
                            </li>
                            <li>
                                <a href=\"#!\">";
        // line 121
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["technical"]);
        echo ": support@onlinecrm.vn</a>
                            </li>
                            <li>
                                <a href=\"#!\">Hotline 24/7: 1900 29 29 90&nbsp<i>(ext 2)</i> </a>
                            </li>
                            <li>
                                ";
        // line 127
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["montofri"]);
        echo "
                            </li>
                            <li>
                                + ";
        // line 130
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["morning"]);
        echo ": 8h30-12h00
                            </li>
                            <li>
                                + ";
        // line 133
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["afternoon"]);
        echo ": 14h00-17h45
                            </li>
                        </ul>
                    </div>
                    <!--/.Fourth column-->
                </div>
                <div class=\"row\">
                    <div class=\"col-md-5\">
                        <h5 class=\"title mb-3\"><strong>";
        // line 141
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["crmknowleadge"]);
        echo "</strong></h5>
                        <ul id=\"footer_links\">
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">Quy trình CRM tiêu chuẩn</a>
                            </li>
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">Làm thế nào để lựa chọn đúng 1 phần mềm CRM</a>
                            </li>
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">10 dịch vụ phần mềm CRM tốt nhất hiện nay</a>
                            </li>
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">10 lợi ích thiết thực nhất của phần mềm CRM mang tới DN</a>
                            </li>
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">Làm thế nào để lựa chọn đúng 1 phần mềm CRM</a>
                            </li>
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">10 dịch vụ phần mềm CRM tốt nhất hiện nay</a>
                            </li>
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">10 lợi ích thiết thực nhất của phần mềm CRM mang tới DN</a>
                            </li>
                        </ul>
                    </div>
                    <hr class=\"w-100 clearfix d-sm-none\">
                    <div class=\"col-md-7\">
                        <h5 class=\"title mb-3\"><strong>";
        // line 175
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["news"]);
        echo "</strong></h5>
                        <ul id=\"footer_news\">
                            <li>
                                <i class=\"fa fa-newspaper-o\"></i>&nbsp&nbsp<a href=\"#!\"> Hoàn thành triển khai giai đoạn 1 phần mềm CRM cho GREENCAP </a><p>(08/06/2019)</p>
                            </li>
                            <li>
                                <i class=\"fa fa-newspaper-o\"></i>&nbsp&nbsp<a href=\"#!\"> Hoàn thành triển khai giai đoạn 1 phần mềm CRM cho GREENCAP </a><p>(08/06/2019)</p>
                            </li>
                            <li>
                                <i class=\"fa fa-newspaper-o\"></i>&nbsp&nbsp <a href=\"#!\"> Hoàn thành triển khai giai đoạn 1 phần mềm CRM cho GREENCAP </a><p>(08/06/2019)</p>
                            </li>
                            <li>
                                <i class=\"fa fa-newspaper-o\"></i>&nbsp&nbsp <a href=\"#!\"> Hoàn thành triển khai giai đoạn 1 phần mềm CRM cho GREENCAP</a><p>(08/06/2019)</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.Footer links-->

    <hr>

    <!--Copyright-->
    <div class=\"footer-copyright container\">
        <div class=\"row pd-0-50\">
            <div class=\"col-md-6\">
                <p style=\"color: #505154\">Copyright © from 2010 OnlineCRM.VN. All rights reserved</p>
            </div>
            <div class=\"col-md-6\">
                <div class=\"row\">
                    <div class=\"col-md-3 col-xs-3\">
                        <img src=\"themes/zanor-zanor-mdb-loaded/assets/images/footer_image/bocongthuong.png\" alt=\"\">
                    </div>
                    <div class=\"col-md-3 col-xs-3\">
                        <a href=\"https://apps.apple.com/vn/app/cloudpro-crm/id1450222444\" target=\"_blank\" style=\"padding-top: 0px\"><img src=\"themes/zanor-zanor-mdb-loaded/assets/images/footer_image/app-apple.png\" alt=\"\"></a>
                    </div>
                    <div class=\"col-md-3 col-xs-3\">
                        <a href=\" https://play.google.com/store/apps/details?id=vn.cloudpro.salesapp&hl=vi\" target=\"_blank\" style=\"padding-top: 0px\"><img src=\"themes/zanor-zanor-mdb-loaded/assets/images/footer_image/app-google.png\" alt=\"\"></a>
                    </div>
                    <div class=\"col-md-3 col-xs-3\" style=\"padding: 0px;padding-top: 5px;\">
                            <ul class=\"social\">
                                <li>
                                    <a href=\"https://www.facebook.com/onlinecrm/\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a>
                                </li>
                                <li>
                                    <a href=\"https://www.youtube.com/channel/UCMOTxoXTxqyyqOxJS7Sjj7A\" target=\"_blank\"><i class=\"fa fa-youtube\"></i></a>
                                </li>
                                <li>
                                    <a href=\"https://onlinecrm.vn/lien-he\"><i class=\"fa fa-safari\"></i></a>
                                </li>
                            </ul>
                    </div>
                 </div>
            </div>
        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp-new\\htdocs\\octobercms/themes/zanor-zanor-mdb-loaded/partials/footer/4-column.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 175,  264 => 141,  253 => 133,  247 => 130,  241 => 127,  232 => 121,  226 => 118,  220 => 115,  209 => 107,  202 => 103,  195 => 99,  188 => 95,  181 => 91,  174 => 87,  167 => 83,  160 => 79,  149 => 71,  142 => 67,  135 => 63,  128 => 59,  121 => 55,  114 => 51,  107 => 47,  100 => 43,  89 => 35,  82 => 31,  75 => 27,  68 => 23,  61 => 19,  54 => 15,  47 => 11,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--Footer-->
<footer class=\"page-footer center-on-small-only\">

    <!--Footer links-->
    <div class=\"footer container\">
        <div class=\"row\">
            <div class=\"col-md-11 mg-auto\">
                <div class=\"row\">
                    <!--First column-->
                    <div class=\"col-md-3\">
                        <h5 class=\"title mb-3\"><strong>{{ 'crmsolution'|_ }}</strong></h5>
                        <ul id=\"footer_links\">
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">{{ 'crmforeducation'|_ }}</a>
                            </li>
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">{{ 'crmforbank'|_ }}</a>
                            </li>
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">{{ 'crmforheadhunter'|_ }}</a>
                            </li>
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">{{ 'crmfortravel'|_ }}</a>
                            </li>
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">{{ 'crmforlogistics'|_ }}</a>
                            </li>
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">{{ 'crmforretail'|_ }}</a>
                            </li>
                        </ul>
                    </div>
                    <!--/.First column-->
                    <hr class=\"w-100 clearfix d-sm-none\">
                    <!--Second column-->
                    <div class=\"col-md-4\">
                        <h5 class=\"title mb-3\"><strong>{{ 'crmsolution'|_ }}</strong></h5>
                        <ul id=\"footer_links\">
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">{{ 'integratewithippbx'|_ }}</a>
                            </li>
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">{{ 'integratewithbrandsms'|_ }}</a>
                            </li>
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">{{ 'integratewithwebsite'|_ }}</a>
                            </li>
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">{{ 'integratewithaccountingsoftware'|_ }}</a>
                            </li>
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">{{ 'integratewitherpsoftware'|_ }}</a>
                            </li>
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">{{ 'integratewithzalo'|_ }}</a>
                            </li>
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">{{ 'integratewithfacebook'|_ }}</a>
                            </li>
                        </ul>
                    </div>
                    <!--/.Second column-->
                    <hr class=\"w-100 clearfix d-sm-none\">
                    <!--Third column-->
                    <div class=\"col-md-2\">
                        <h5 class=\"title mb-3\"><strong>{{ 'support'|_ }}</strong></h5>
                        <ul id=\"footer_links\">
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">{{ 'faqs'|_ }}</a>
                            </li>
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">{{ 'forum'|_ }}</a>
                            </li>
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">{{ 'introduce'|_ }}</a>
                            </li>
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">{{ 'news'|_ }}</a>
                            </li>
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">{{ 'recruitment'|_ }}</a>
                            </li>
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">{{ 'contact'|_ }}</a>
                            </li>
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">{{ 'policy'|_ }}</a>
                            </li>
                        </ul>
                    </div>
                    <!--/.Third column-->
                    <hr class=\"w-100 clearfix d-sm-none\">
                    <!--Fourth column-->
                    <div class=\"col-md-3 \">
                        <h5 class=\"title mb-3\"><strong>{{ 'contact'|_ }}</strong></h5>
                        <ul>
                            <li>
                                <a href=\"#!\">{{ 'sales'|_ }}: support@onlinecrm.vn</a>
                            </li>
                            <li>
                                <a href=\"#!\">{{ 'technical'|_ }}: support@onlinecrm.vn</a>
                            </li>
                            <li>
                                <a href=\"#!\">Hotline 24/7: 1900 29 29 90&nbsp<i>(ext 2)</i> </a>
                            </li>
                            <li>
                                {{ 'montofri'|_ }}
                            </li>
                            <li>
                                + {{ 'morning'|_ }}: 8h30-12h00
                            </li>
                            <li>
                                + {{ 'afternoon'|_ }}: 14h00-17h45
                            </li>
                        </ul>
                    </div>
                    <!--/.Fourth column-->
                </div>
                <div class=\"row\">
                    <div class=\"col-md-5\">
                        <h5 class=\"title mb-3\"><strong>{{ 'crmknowleadge'|_ }}</strong></h5>
                        <ul id=\"footer_links\">
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">Quy trình CRM tiêu chuẩn</a>
                            </li>
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">Làm thế nào để lựa chọn đúng 1 phần mềm CRM</a>
                            </li>
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">10 dịch vụ phần mềm CRM tốt nhất hiện nay</a>
                            </li>
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">10 lợi ích thiết thực nhất của phần mềm CRM mang tới DN</a>
                            </li>
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">Làm thế nào để lựa chọn đúng 1 phần mềm CRM</a>
                            </li>
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">10 dịch vụ phần mềm CRM tốt nhất hiện nay</a>
                            </li>
                            <li>
                                <i class=\"fa fa-caret-right\"></i>
                                <a href=\"#!\">10 lợi ích thiết thực nhất của phần mềm CRM mang tới DN</a>
                            </li>
                        </ul>
                    </div>
                    <hr class=\"w-100 clearfix d-sm-none\">
                    <div class=\"col-md-7\">
                        <h5 class=\"title mb-3\"><strong>{{ 'news'|_ }}</strong></h5>
                        <ul id=\"footer_news\">
                            <li>
                                <i class=\"fa fa-newspaper-o\"></i>&nbsp&nbsp<a href=\"#!\"> Hoàn thành triển khai giai đoạn 1 phần mềm CRM cho GREENCAP </a><p>(08/06/2019)</p>
                            </li>
                            <li>
                                <i class=\"fa fa-newspaper-o\"></i>&nbsp&nbsp<a href=\"#!\"> Hoàn thành triển khai giai đoạn 1 phần mềm CRM cho GREENCAP </a><p>(08/06/2019)</p>
                            </li>
                            <li>
                                <i class=\"fa fa-newspaper-o\"></i>&nbsp&nbsp <a href=\"#!\"> Hoàn thành triển khai giai đoạn 1 phần mềm CRM cho GREENCAP </a><p>(08/06/2019)</p>
                            </li>
                            <li>
                                <i class=\"fa fa-newspaper-o\"></i>&nbsp&nbsp <a href=\"#!\"> Hoàn thành triển khai giai đoạn 1 phần mềm CRM cho GREENCAP</a><p>(08/06/2019)</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.Footer links-->

    <hr>

    <!--Copyright-->
    <div class=\"footer-copyright container\">
        <div class=\"row pd-0-50\">
            <div class=\"col-md-6\">
                <p style=\"color: #505154\">Copyright © from 2010 OnlineCRM.VN. All rights reserved</p>
            </div>
            <div class=\"col-md-6\">
                <div class=\"row\">
                    <div class=\"col-md-3 col-xs-3\">
                        <img src=\"themes/zanor-zanor-mdb-loaded/assets/images/footer_image/bocongthuong.png\" alt=\"\">
                    </div>
                    <div class=\"col-md-3 col-xs-3\">
                        <a href=\"https://apps.apple.com/vn/app/cloudpro-crm/id1450222444\" target=\"_blank\" style=\"padding-top: 0px\"><img src=\"themes/zanor-zanor-mdb-loaded/assets/images/footer_image/app-apple.png\" alt=\"\"></a>
                    </div>
                    <div class=\"col-md-3 col-xs-3\">
                        <a href=\" https://play.google.com/store/apps/details?id=vn.cloudpro.salesapp&hl=vi\" target=\"_blank\" style=\"padding-top: 0px\"><img src=\"themes/zanor-zanor-mdb-loaded/assets/images/footer_image/app-google.png\" alt=\"\"></a>
                    </div>
                    <div class=\"col-md-3 col-xs-3\" style=\"padding: 0px;padding-top: 5px;\">
                            <ul class=\"social\">
                                <li>
                                    <a href=\"https://www.facebook.com/onlinecrm/\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a>
                                </li>
                                <li>
                                    <a href=\"https://www.youtube.com/channel/UCMOTxoXTxqyyqOxJS7Sjj7A\" target=\"_blank\"><i class=\"fa fa-youtube\"></i></a>
                                </li>
                                <li>
                                    <a href=\"https://onlinecrm.vn/lien-he\"><i class=\"fa fa-safari\"></i></a>
                                </li>
                            </ul>
                    </div>
                 </div>
            </div>
        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->", "C:\\xampp-new\\htdocs\\octobercms/themes/zanor-zanor-mdb-loaded/partials/footer/4-column.htm", "");
    }
}
