<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:company_info_tab.html.twig */
class __TwigTemplate_32b97ddf93bbdae3d660695fe93145822182ddfb636bd5b3ef56332c627e3dc9 extends Twig_Template
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
        $__internal_5132fec0d93a17f5ac8fbebdaeb48c436579fb89c5af8decee88bdb20875d0ec = $this->env->getExtension("native_profiler");
        $__internal_5132fec0d93a17f5ac8fbebdaeb48c436579fb89c5af8decee88bdb20875d0ec->enter($__internal_5132fec0d93a17f5ac8fbebdaeb48c436579fb89c5af8decee88bdb20875d0ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD/DisplayPartial:company_info_tab.html.twig"));

        // line 1
        echo "<div class=\"custom-block calendar-block\">
    <div class=\"custom-head clearfix\">
        <div class=\"custom-menu\">
            <button class=\"up-custom\"></button>
        </div>
        <h3>Company Info</h3>
    </div>
    <div class=\"clearfix\">
        <div id=\"company-info-edit\" class=\"display-block-persistent\" data-controller=\"leads_display\" data-action=\"leadEvent\">
            <div class=\"form-column\">
                <h4 class=\"company-id\">Company ID : ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "creator", array()), "company", array()), "id", array()), "html", null, true);
        echo " </h4><br />

                <div class=\"small-table\">
                    <table>
                        <tbody>
                        <tr>
                            <th width=\"15%\"></th>
                            <th width=\"35%\">Company Information</th>
                            <th width=\"15%\"></th>
                            <th width=\"35%\"></th>
                        </tr>
                        <tr>
                            <td><b>Company Name</b></td>
                            <td>
                                <input class=\"form-control\" type=\"text\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "creator", array()), "company", array()), "name", array()), "html", null, true);
        echo "\" ";
        if ( !$this->env->getExtension('security')->isGranted("ROLE_ULTRA_ADMIN")) {
            echo " disabled ";
        }
        echo " />
                            </td>
                            <td><b>Phone number</b></td>
                            <td>
                                <input class=\"form-control\" type=\"text\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "creator", array()), "company", array()), "phoneNumber", array()), "html", null, true);
        echo "\" ";
        if ( !$this->env->getExtension('security')->isGranted("ROLE_ULTRA_ADMIN")) {
            echo " disabled ";
        }
        echo " />
                            </td>
                        </tr>
                        <tr>
                            <td><b>Address Line 1</b></td>
                            <td>
                                <input id=\"companyFirstAddress\" class=\"form-control\" type=\"text\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "creator", array()), "company", array()), "firstAddress", array()), "html", null, true);
        echo "\" />
                            </td>
                            <td><b>Address Line 2</b></td>
                            <td>
                                <input id=\"companySecondAddress\" class=\"form-control\" type=\"text\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "creator", array()), "company", array()), "secondAddress", array()), "html", null, true);
        echo "\" />
                            </td>
                        </tr>
                        <tr>
                            <td><b>City</b></td>
                            <td>
                                <input id=\"companyCity\" class=\"form-control\" type=\"text\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "creator", array()), "company", array()), "city", array()), "html", null, true);
        echo "\" />
                            </td>
                            <td><b>State</b></td>
                            <td>
                                <input id=\"companyState\" class=\"form-control\" type=\"text\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "creator", array()), "company", array()), "state", array()), "html", null, true);
        echo "\" />
                            </td>
                        </tr>
                        <tr>
                            <td><b>Postal Code</b></td>
                            <td>
                                <input id=\"companyPostalCode\" class=\"form-control\" type=\"text\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "creator", array()), "company", array()), "postalCode", array()), "html", null, true);
        echo "\" />
                            </td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <br />
            </div>

            ";
        // line 66
        $this->loadTemplate("ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_block_actions.html.twig", "ZesharCRMCoreBundle:CRUD/DisplayPartial:company_info_tab.html.twig", 66)->display(array_merge($context, array("show_cancel_link" => false, "save_button_title" => "Save")));
        // line 67
        echo "        </div>
    </div>
</div>


";
        
        $__internal_5132fec0d93a17f5ac8fbebdaeb48c436579fb89c5af8decee88bdb20875d0ec->leave($__internal_5132fec0d93a17f5ac8fbebdaeb48c436579fb89c5af8decee88bdb20875d0ec_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD/DisplayPartial:company_info_tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 67,  121 => 66,  107 => 55,  98 => 49,  91 => 45,  82 => 39,  75 => 35,  62 => 29,  51 => 25,  34 => 11,  22 => 1,);
    }
}
/* <div class="custom-block calendar-block">*/
/*     <div class="custom-head clearfix">*/
/*         <div class="custom-menu">*/
/*             <button class="up-custom"></button>*/
/*         </div>*/
/*         <h3>Company Info</h3>*/
/*     </div>*/
/*     <div class="clearfix">*/
/*         <div id="company-info-edit" class="display-block-persistent" data-controller="leads_display" data-action="leadEvent">*/
/*             <div class="form-column">*/
/*                 <h4 class="company-id">Company ID : {{ object.creator.company.id }} </h4><br />*/
/* */
/*                 <div class="small-table">*/
/*                     <table>*/
/*                         <tbody>*/
/*                         <tr>*/
/*                             <th width="15%"></th>*/
/*                             <th width="35%">Company Information</th>*/
/*                             <th width="15%"></th>*/
/*                             <th width="35%"></th>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td><b>Company Name</b></td>*/
/*                             <td>*/
/*                                 <input class="form-control" type="text" value="{{ object.creator.company.name }}" {% if not is_granted('ROLE_ULTRA_ADMIN') %} disabled {% endif %} />*/
/*                             </td>*/
/*                             <td><b>Phone number</b></td>*/
/*                             <td>*/
/*                                 <input class="form-control" type="text" value="{{ object.creator.company.phoneNumber }}" {% if not is_granted('ROLE_ULTRA_ADMIN') %} disabled {% endif %} />*/
/*                             </td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td><b>Address Line 1</b></td>*/
/*                             <td>*/
/*                                 <input id="companyFirstAddress" class="form-control" type="text" value="{{ object.creator.company.firstAddress }}" />*/
/*                             </td>*/
/*                             <td><b>Address Line 2</b></td>*/
/*                             <td>*/
/*                                 <input id="companySecondAddress" class="form-control" type="text" value="{{ object.creator.company.secondAddress }}" />*/
/*                             </td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td><b>City</b></td>*/
/*                             <td>*/
/*                                 <input id="companyCity" class="form-control" type="text" value="{{ object.creator.company.city }}" />*/
/*                             </td>*/
/*                             <td><b>State</b></td>*/
/*                             <td>*/
/*                                 <input id="companyState" class="form-control" type="text" value="{{ object.creator.company.state }}" />*/
/*                             </td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td><b>Postal Code</b></td>*/
/*                             <td>*/
/*                                 <input id="companyPostalCode" class="form-control" type="text" value="{{ object.creator.company.postalCode }}" />*/
/*                             </td>*/
/*                             <td></td>*/
/*                             <td></td>*/
/*                         </tr>*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*                 <br />*/
/*             </div>*/
/* */
/*             {% include('ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_block_actions.html.twig') with {'show_cancel_link': false, 'save_button_title': 'Save'} %}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* */
