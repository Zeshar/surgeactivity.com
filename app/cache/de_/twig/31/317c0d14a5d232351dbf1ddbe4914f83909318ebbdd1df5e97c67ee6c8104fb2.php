<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:edit_account_tab.html.twig */
class __TwigTemplate_e222a11f5460b8a780418f8bc36ea1bb9148b399a5a6337b4d7e41a71e9c32bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87d9a6de43a3584e26ddfde2367a06ec99e55ddab9ab798a1d3084846f242604 = $this->env->getExtension("native_profiler");
        $__internal_87d9a6de43a3584e26ddfde2367a06ec99e55ddab9ab798a1d3084846f242604->enter($__internal_87d9a6de43a3584e26ddfde2367a06ec99e55ddab9ab798a1d3084846f242604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD/DisplayPartial:edit_account_tab.html.twig"));

        // line 1
        $context["currentYear"] = twig_date_format_filter($this->env, "now", "Y");
        // line 2
        $context["maxYear"] = ((isset($context["currentYear"]) ? $context["currentYear"] : $this->getContext($context, "currentYear")) + 7);
        // line 3
        echo "
";
        // line 4
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "successMsg"), "method")) {
            // line 5
            echo "    <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "successMsg"), "method"), "html", null, true);
            echo "
    </div>
";
        }
        // line 10
        echo "

<div class=\"custom-block calendar-block\">
    <div class=\"custom-head clearfix\">
        <div class=\"custom-menu\">
            <button class=\"up-custom\"></button>
        </div>
        <h3>Payment Update</h3>
    </div>
    <div class=\"clearfix\">
        <div id=\"account-info-edit\" class=\"display-block-persistent\" data-controller=\"leads_display\" data-action=\"leadEvent\">
            <div class=\"form-column\">
                <div class=\"before-error\"></div>
                <div class=\"small-table\">
                    <table>
                        <tbody>
                        <p style=\"text-align: center; margin: 5px; font-weight: bold; color: red\">To continue enjoying your account, please update your payment information, then log in once again<p>
                        <tr>
                            <th colspan=\"2\" >Credit Card Information</th>
                            <th colspan=\"2\" width=\"50%\"></th>
                        </tr>
                        <tr>
                            <td colspan = \"2\">
                                <select id=\"timeZone\">
                                    <option disabled selected>Select Your Time Zone</option>
                                </select>
                            </td>
                            <td colspan = \"2\">
                                <select class=\"active-select\" id=\"product\">
                                    <option disabled selected data-mRate=\"\" data-yRate=\"\">Select Your Product</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td style=\"width: 105px;\"><span> Number of users : </span></td>
                            <td>
                                <select class=\"active-select\" style=\"width: 62%;\" id=\"usersNumber\">
                                    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 48
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                                </select>
                            </td>
                            <td style=\"width: 105px;\"><span> Amount : </span></td>
                            <td>
                                <input id=\"amount\" style=\"width: 60%;\" type=\"text\" disabled name=\"amount\" class=\"form-control\" />
                            </td>
                        </tr>
                        <tr>
                            <td colspan = \"2\"><input id=\"cardFirstName\" class=\"form-control\" type=\"text\" placeholder=\"Card Holder First Name\" /></td>
                            <td colspan = \"2\"><input id=\"cardLastName\" class=\"form-control\" type=\"text\" placeholder=\"Card Holder Last Name\" /></td>
                        </tr>
                        <tr>
                            <td colspan = \"2\"><input id=\"cardNumber\" class=\"form-control digits\" type=\"text\" placeholder=\"Card Number\" /><span class=\"errmsg\"></span></td>
                            <td colspan = \"2\">
                                <select id=\"cardType\">
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td style=\"width: 105px;\">
                                <select id=\"month\">
                                    ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 72
            echo "                                        <option value=\"";
            if (($context["i"] < 10)) {
                echo "0";
            }
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">(";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo ") ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_converter($this->env, (("2012-" . $context["i"]) . "-01")), "M"), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                                </select>
                            </td>
                            <td>
                                <select style=\"width: 62%;\" id=\"year\">
                                    ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range((isset($context["currentYear"]) ? $context["currentYear"] : $this->getContext($context, "currentYear")), (isset($context["maxYear"]) ? $context["maxYear"] : $this->getContext($context, "maxYear"))));
        foreach ($context['_seq'] as $context["i"] => $context["year"]) {
            // line 79
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                                </select>
                            </td>
                            <td colspan = \"2\"><input id=\"cardCode\" class=\"form-control digits\" type=\"text\" placeholder=\"Card Security Code\" /><span class=\"errmsg\"></span></td>
                        </tr>
                        <tr>
                            <td colspan=\"2\">
                                <select class=\"active-select\" id=\"frequency\">
                                    <option value=\"0\">Monthly</option>
                                    <option value=\"1\">Yearly</option>
                                </select>
                            </td>
                            <td colspan = \"2\">
                                <input id=\"acceptTerms\" type=\"checkbox\" />
                                I accept <a href=\"https://surgeactivity.com/terms-and-conditions/\">Terms</a> and <a href=\"https://surgeactivity.com/privacy-policy/\">Private Policy</a
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <br />
            </div>

            <div class=\"show-display-per-block-actions\" style=\"margin-bottom: 15px; margin-left:20px;\">
                <button class=\"btn-save-block btn btn-green\">Payment Update</button>
            </div>
        </div>
    </div>
</div>


";
        
        $__internal_87d9a6de43a3584e26ddfde2367a06ec99e55ddab9ab798a1d3084846f242604->leave($__internal_87d9a6de43a3584e26ddfde2367a06ec99e55ddab9ab798a1d3084846f242604_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD/DisplayPartial:edit_account_tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 81,  148 => 79,  144 => 78,  138 => 74,  122 => 72,  118 => 71,  95 => 50,  84 => 48,  80 => 47,  41 => 10,  35 => 7,  31 => 5,  29 => 4,  26 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% set currentYear = "now"|date("Y") %}*/
/* {% set maxYear = currentYear + 7 %}*/
/* */
/* {% if app.session.get('successMsg') %}*/
/*     <div class="alert alert-success alert-dismissible" role="alert">*/
/*         <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*         {{app.session.get('successMsg')}}*/
/*     </div>*/
/* {% endif %}*/
/* */
/* */
/* <div class="custom-block calendar-block">*/
/*     <div class="custom-head clearfix">*/
/*         <div class="custom-menu">*/
/*             <button class="up-custom"></button>*/
/*         </div>*/
/*         <h3>Payment Update</h3>*/
/*     </div>*/
/*     <div class="clearfix">*/
/*         <div id="account-info-edit" class="display-block-persistent" data-controller="leads_display" data-action="leadEvent">*/
/*             <div class="form-column">*/
/*                 <div class="before-error"></div>*/
/*                 <div class="small-table">*/
/*                     <table>*/
/*                         <tbody>*/
/*                         <p style="text-align: center; margin: 5px; font-weight: bold; color: red">To continue enjoying your account, please update your payment information, then log in once again<p>*/
/*                         <tr>*/
/*                             <th colspan="2" >Credit Card Information</th>*/
/*                             <th colspan="2" width="50%"></th>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td colspan = "2">*/
/*                                 <select id="timeZone">*/
/*                                     <option disabled selected>Select Your Time Zone</option>*/
/*                                 </select>*/
/*                             </td>*/
/*                             <td colspan = "2">*/
/*                                 <select class="active-select" id="product">*/
/*                                     <option disabled selected data-mRate="" data-yRate="">Select Your Product</option>*/
/*                                 </select>*/
/*                             </td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td style="width: 105px;"><span> Number of users : </span></td>*/
/*                             <td>*/
/*                                 <select class="active-select" style="width: 62%;" id="usersNumber">*/
/*                                     {% for i in 1..15 %}*/
/*                                         <option value="{{ i }}">{{ i }}</option>*/
/*                                     {% endfor %}*/
/*                                 </select>*/
/*                             </td>*/
/*                             <td style="width: 105px;"><span> Amount : </span></td>*/
/*                             <td>*/
/*                                 <input id="amount" style="width: 60%;" type="text" disabled name="amount" class="form-control" />*/
/*                             </td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td colspan = "2"><input id="cardFirstName" class="form-control" type="text" placeholder="Card Holder First Name" /></td>*/
/*                             <td colspan = "2"><input id="cardLastName" class="form-control" type="text" placeholder="Card Holder Last Name" /></td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td colspan = "2"><input id="cardNumber" class="form-control digits" type="text" placeholder="Card Number" /><span class="errmsg"></span></td>*/
/*                             <td colspan = "2">*/
/*                                 <select id="cardType">*/
/*                                 </select>*/
/*                             </td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td style="width: 105px;">*/
/*                                 <select id="month">*/
/*                                     {% for i in 1 .. 12 %}*/
/*                                         <option value="{% if i < 10 %}0{% endif %}{{ i }}">({{ i }}) {{ date('2012-' ~ i ~ '-01') |date('M') }}</option>*/
/*                                     {% endfor %}*/
/*                                 </select>*/
/*                             </td>*/
/*                             <td>*/
/*                                 <select style="width: 62%;" id="year">*/
/*                                     {% for i, year in currentYear .. maxYear %}*/
/*                                         <option value="{{ year }}">{{ year }}</option>*/
/*                                     {% endfor %}*/
/*                                 </select>*/
/*                             </td>*/
/*                             <td colspan = "2"><input id="cardCode" class="form-control digits" type="text" placeholder="Card Security Code" /><span class="errmsg"></span></td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td colspan="2">*/
/*                                 <select class="active-select" id="frequency">*/
/*                                     <option value="0">Monthly</option>*/
/*                                     <option value="1">Yearly</option>*/
/*                                 </select>*/
/*                             </td>*/
/*                             <td colspan = "2">*/
/*                                 <input id="acceptTerms" type="checkbox" />*/
/*                                 I accept <a href="https://surgeactivity.com/terms-and-conditions/">Terms</a> and <a href="https://surgeactivity.com/privacy-policy/">Private Policy</a*/
/*                             </td>*/
/*                         </tr>*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*                 <br />*/
/*             </div>*/
/* */
/*             <div class="show-display-per-block-actions" style="margin-bottom: 15px; margin-left:20px;">*/
/*                 <button class="btn-save-block btn btn-green">Payment Update</button>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* */
