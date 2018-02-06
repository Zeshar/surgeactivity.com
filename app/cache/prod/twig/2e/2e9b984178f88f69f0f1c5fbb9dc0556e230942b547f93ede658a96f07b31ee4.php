<?php

/* ZesharCRMCoreBundle:Dashboard:ultra-index.html.twig */
class __TwigTemplate_e1ceb67e270618cfde903d387e8fd076bcdfa57b33e87245c2967ef24d9cecd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ZesharCRMCoreBundle:Dashboard:ultra-index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_title' => array($this, 'block_page_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Dashboard";
    }

    // line 4
    public function block_page_title($context, array $blocks = array())
    {
        echo "Dashboard";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        $this->loadTemplate("ZesharCRMCoreBundle:CRUD:DisplayPartial/product_block_actions_js.html.twig", "ZesharCRMCoreBundle:Dashboard:ultra-index.html.twig", 9)->display($context);
        // line 10
        echo "
\t<link rel=\"stylesheet\" type=\"text/css\"  href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sonataadmin/vendor/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\"  />
\t<link rel=\"stylesheet\" type=\"text/css\"  href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sonataadmin/vendor/AdminLTE/css/AdminLTE.css"), "html", null, true);
        echo "\"  />
\t<link rel=\"stylesheet\" type=\"text/css\"  href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/zesharcrmcore/css/jquery-ui.css"), "html", null, true);
        echo "\"  />
\t<style>
\t\tfooter {
\t\t\tmargin-top: 0px;
\t\t}
\t\t.show-display-per-block-actions{
\t\t\tdisplay: block!important;
\t\t\tmargin-left: 0px; 
\t\t}
\t\t.menu-wrap{
\t\t\theight: 49px!important;
\t\t}
        .ui-dialog{
            height:200px!important;
            width:400px!important;
            top:300px!important;
        }
        #dialog-confirm{
            height:90px!important;
        }
\t</style>


    <div id=\"dialog-confirm\" title=\"Remove product?\" style=\"display:none;\">
        <p><span class=\"ui-icon ui-icon-alert\" style=\"float:left; margin:0 7px 20px 0;\"></span>These item will be permanently deleted and cannot be recovered. Are you sure?</p>
    </div>

    <div class=\"custom-block calendar-block\">
    <div class=\"clearfix\">
        <div id=\"billing-info\" class=\"display-block-persistent\" data-controller=\"leads_display\" data-action=\"leadEvent\">
            <div class=\"form-column\">
                <form action=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("changeProduct");
        echo "\" method=\"POST\" >
                    <div class=\"small-table\">
                            <table style=\"width:100%;\">
                                <tbody>
                                <tr>
                                    <th width=\"23%\">Product</th>
                                    <th width=\"23%\">Product Type</th>
                                    <th width=\"23%\">Monthly Rate</th>
                                    <th width=\"23%\">Yearly Rate</th>
                                    <th width=\"8%\">Action</th>
                                </tr>
                                ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 56
            echo "                                        <tr>
                                            <td>
                                                <input class=\"id\" class=\"form-control\" type=\"hidden\" name=\"id[]\" value=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "\" />
                                                <input class=\"form-control\" type=\"text\" name=\"name[]\" value=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "\" />
                                            </td>
                                            <td>
                                                <select class=\"active-select\" name=\"type[]\">
                                                    ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productTypes"]) ? $context["productTypes"] : null));
            foreach ($context['_seq'] as $context["i"] => $context["type"]) {
                // line 64
                echo "                                                        <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" ";
                if (($this->getAttribute($context["product"], "productType", array()) == $context["i"])) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "</option>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                                                </select>
                                            </td>
                                            <td><input class=\"form-control\" type=\"text\" name=\"mRate[]\" value=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "monthlyRate", array()), "html", null, true);
            echo "\" /></td>
                                            <td><input class=\"form-control\" type=\"text\" name=\"yRate[]\" value=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "yearlyRate", array()), "html", null, true);
            echo "\" /></td>
                                            <td>
                                                <div class=\"show-display-per-block-actions\" style=\"margin-left: 65px;\">
                                                    <a class=\"delete\" href=\"#\" class=\"btn-cancel-block\" data-id=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "\">Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                                    <tr>
                                        <td>
                                            <input class=\"form-control\" type=\"hidden\" name=\"id[]\"  />
                                            <input class=\"form-control\" type=\"text\" name=\"name[]\"  />
                                        </td>
                                        <td>
                                            <select class=\"active-select\" name=\"type[]\">
                                                ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productTypes"]) ? $context["productTypes"] : null));
        foreach ($context['_seq'] as $context["i"] => $context["type"]) {
            // line 85
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                                            </select>
                                        </td>
                                        <td><input class=\"form-control\" type=\"text\" name=\"mRate[]\" /></td>
                                        <td><input class=\"form-control\" type=\"text\" name=\"yRate[]\" /></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                    </div>
                    ";
        // line 96
        $this->loadTemplate("ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_block_actions.html.twig", "ZesharCRMCoreBundle:Dashboard:ultra-index.html.twig", 96)->display(array_merge($context, array("show_cancel_link" => false, "save_button_title" => "Save")));
        echo "\t\t
                </form>
                <br />
            </div>

        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:Dashboard:ultra-index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 96,  196 => 87,  185 => 85,  181 => 84,  172 => 77,  161 => 72,  155 => 69,  151 => 68,  147 => 66,  132 => 64,  128 => 63,  121 => 59,  117 => 58,  113 => 56,  109 => 55,  95 => 44,  61 => 13,  57 => 12,  53 => 11,  50 => 10,  48 => 9,  45 => 8,  42 => 7,  36 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}Dashboard{% endblock %}*/
/* {% block page_title %}Dashboard{% endblock %}*/
/* */
/* */
/* {% block content %}*/
/* */
/* {% include('ZesharCRMCoreBundle:CRUD:DisplayPartial/product_block_actions_js.html.twig') %}*/
/* */
/* 	<link rel="stylesheet" type="text/css"  href="{{ asset('bundles/sonataadmin/vendor/bootstrap/dist/css/bootstrap.min.css') }}"  />*/
/* 	<link rel="stylesheet" type="text/css"  href="{{ asset('bundles/sonataadmin/vendor/AdminLTE/css/AdminLTE.css') }}"  />*/
/* 	<link rel="stylesheet" type="text/css"  href="{{ asset('bundles/zesharcrmcore/css/jquery-ui.css') }}"  />*/
/* 	<style>*/
/* 		footer {*/
/* 			margin-top: 0px;*/
/* 		}*/
/* 		.show-display-per-block-actions{*/
/* 			display: block!important;*/
/* 			margin-left: 0px; */
/* 		}*/
/* 		.menu-wrap{*/
/* 			height: 49px!important;*/
/* 		}*/
/*         .ui-dialog{*/
/*             height:200px!important;*/
/*             width:400px!important;*/
/*             top:300px!important;*/
/*         }*/
/*         #dialog-confirm{*/
/*             height:90px!important;*/
/*         }*/
/* 	</style>*/
/* */
/* */
/*     <div id="dialog-confirm" title="Remove product?" style="display:none;">*/
/*         <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>These item will be permanently deleted and cannot be recovered. Are you sure?</p>*/
/*     </div>*/
/* */
/*     <div class="custom-block calendar-block">*/
/*     <div class="clearfix">*/
/*         <div id="billing-info" class="display-block-persistent" data-controller="leads_display" data-action="leadEvent">*/
/*             <div class="form-column">*/
/*                 <form action="{{ path('changeProduct') }}" method="POST" >*/
/*                     <div class="small-table">*/
/*                             <table style="width:100%;">*/
/*                                 <tbody>*/
/*                                 <tr>*/
/*                                     <th width="23%">Product</th>*/
/*                                     <th width="23%">Product Type</th>*/
/*                                     <th width="23%">Monthly Rate</th>*/
/*                                     <th width="23%">Yearly Rate</th>*/
/*                                     <th width="8%">Action</th>*/
/*                                 </tr>*/
/*                                 {% for product in products %}*/
/*                                         <tr>*/
/*                                             <td>*/
/*                                                 <input class="id" class="form-control" type="hidden" name="id[]" value="{{ product.id }}" />*/
/*                                                 <input class="form-control" type="text" name="name[]" value="{{ product.name }}" />*/
/*                                             </td>*/
/*                                             <td>*/
/*                                                 <select class="active-select" name="type[]">*/
/*                                                     {% for i,type in productTypes %}*/
/*                                                         <option value="{{ i }}" {% if product.productType == i %}selected{% endif %}>{{ type }}</option>*/
/*                                                     {% endfor %}*/
/*                                                 </select>*/
/*                                             </td>*/
/*                                             <td><input class="form-control" type="text" name="mRate[]" value="{{ product.monthlyRate }}" /></td>*/
/*                                             <td><input class="form-control" type="text" name="yRate[]" value="{{ product.yearlyRate }}" /></td>*/
/*                                             <td>*/
/*                                                 <div class="show-display-per-block-actions" style="margin-left: 65px;">*/
/*                                                     <a class="delete" href="#" class="btn-cancel-block" data-id="{{ product.id }}">Delete</a>*/
/*                                                 </div>*/
/*                                             </td>*/
/*                                         </tr>*/
/*                                 {% endfor %}*/
/*                                     <tr>*/
/*                                         <td>*/
/*                                             <input class="form-control" type="hidden" name="id[]"  />*/
/*                                             <input class="form-control" type="text" name="name[]"  />*/
/*                                         </td>*/
/*                                         <td>*/
/*                                             <select class="active-select" name="type[]">*/
/*                                                 {% for i,type in productTypes %}*/
/*                                                     <option value="{{ i }}">{{ type }}</option>*/
/*                                                 {% endfor %}*/
/*                                             </select>*/
/*                                         </td>*/
/*                                         <td><input class="form-control" type="text" name="mRate[]" /></td>*/
/*                                         <td><input class="form-control" type="text" name="yRate[]" /></td>*/
/*                                         <td></td>*/
/*                                     </tr>*/
/*                                 </tbody>*/
/*                             </table>*/
/*                     </div>*/
/*                     {% include('ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_block_actions.html.twig') with {'show_cancel_link': false, 'save_button_title': 'Save'} %}		*/
/*                 </form>*/
/*                 <br />*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
