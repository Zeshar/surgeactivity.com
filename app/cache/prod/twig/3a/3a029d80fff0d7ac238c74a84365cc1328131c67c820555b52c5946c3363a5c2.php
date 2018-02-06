<?php

/* ZesharCRMCoreBundle:FormItems:leadPrequalificationInsuredAddressBlock.html.twig */
class __TwigTemplate_1da5486845ca21768199e33b13405a4f953ca2e2f7c5d69d5cd9401ccce8ac07 extends Twig_Template
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
        // line 1
        echo "<div class=\"group-forms\">
    <div class=\"form-group\">
        <div class=\"clearfix\">
            ";
        // line 4
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:insuredAddressesTypeSelect", array("activeValue" =>         // line 5
(isset($context["type"]) ? $context["type"] : null))));
        // line 6
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"compaign\">Address</label>
        <input type=\"text\" id=\"compaign\" name=\"ins_address_address[\$\$name\$\$]\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, ((array_key_exists("address", $context)) ? ((isset($context["address"]) ? $context["address"] : null)) : ("")), "html", null, true);
        echo "\" class=\"form-control\"/>
    </div>
    <div class=\"form-group\">
        <label for=\"compaign\">City</label>
        <input type=\"text\" id=\"compaign\" name=\"ins_address_city[\$\$name\$\$]\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, ((array_key_exists("city", $context)) ? ((isset($context["city"]) ? $context["city"] : null)) : ("")), "html", null, true);
        echo "\" class=\"form-control class-autocomplete\"/>
    </div>
    <div class=\"form-group row\">
        <div class=\"col-md-6\">
            <label for=\"compaign\">State</label>
            <input type=\"text\" id=\"compaign\" name=\"ins_address_state[\$\$name\$\$]\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, ((array_key_exists("state", $context)) ? ((isset($context["state"]) ? $context["state"] : null)) : ("")), "html", null, true);
        echo "\" class=\"form-control state-autocomplete\"/>
        </div>
        <div class=\"col-md-6\">
            <label for=\"compaign\">Zip Code</label>
            <input type=\"text\" id=\"compaign\" name=\"ins_address_zipCode[\$\$name\$\$]\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, ((array_key_exists("zipCode", $context)) ? ((isset($context["zipCode"]) ? $context["zipCode"] : null)) : ("")), "html", null, true);
        echo "\" class=\"form-control\"/>
        </div>
    </div>
    <div>
        Previous carrier
    </div>
    <div class=\"form-group\">
        <label for=\"name\">Name</label>
        <input type=\"text\" id=\"ins_address_name\" name=\"ins_address_name[\$\$name\$\$]\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, ((array_key_exists("previousCarrierName", $context)) ? ((isset($context["previousCarrierName"]) ? $context["previousCarrierName"] : null)) : ("")), "html", null, true);
        echo "\" class=\"form-control\"/>
    </div>
    <div class=\"form-group row\">
        <div class=\"col-md-6\">
            <label for=\"name\">Policy №</label>
            <input type=\"text\" id=\"ins_address_policy\" name=\"ins_address_policy[\$\$name\$\$]\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, ((array_key_exists("previousCarrierPolice", $context)) ? ((isset($context["previousCarrierPolice"]) ? $context["previousCarrierPolice"] : null)) : ("")), "html", null, true);
        echo "\" class=\"form-control\"/>
        </div>
        <div class=\"col-md-6\">
            <label for=\"name\">X-Date</label>
            <input type=\"text\" class=\"form-control datepicker-product\" id=\"ins_address_xdate\" name=\"ins_address_xdate[\$\$name\$\$]\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, ((array_key_exists("previousCarrierXDate", $context)) ? (twig_date_format_filter($this->env, (isset($context["previousCarrierXDate"]) ? $context["previousCarrierXDate"] : null), "M d, Y")) : ("")), "html", null, true);
        echo "\" class=\"form-control\"/>
        </div>
    </div>

    <input type=\"hidden\" class=\"insuredAddressId\" name=\"insuredAddressId[\$\$name\$\$]\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, ((array_key_exists("insuredAddressId", $context)) ? ((isset($context["insuredAddressId"]) ? $context["insuredAddressId"] : null)) : ("")), "html", null, true);
        echo "\" />
    ";
        // line 46
        $this->loadTemplate("ZesharCRMCoreBundle:FormItems:prequalificationButtonGroup.html.twig", "ZesharCRMCoreBundle:FormItems:leadPrequalificationInsuredAddressBlock.html.twig", 46)->display(array_merge($context, array("empty" => (isset($context["empty"]) ? $context["empty"] : null), "singleEmpty" => (isset($context["singleEmpty"]) ? $context["singleEmpty"] : null), "last" => (isset($context["last"]) ? $context["last"] : null), "save" => false)));
        // line 47
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:FormItems:leadPrequalificationInsuredAddressBlock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 47,  93 => 46,  89 => 45,  82 => 41,  75 => 37,  67 => 32,  56 => 24,  49 => 20,  41 => 15,  34 => 11,  27 => 6,  25 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="group-forms">*/
/*     <div class="form-group">*/
/*         <div class="clearfix">*/
/*             {{ render(controller('ZesharCRMCoreBundle:FormItems:insuredAddressesTypeSelect', {*/
/*             'activeValue': type*/
/*             })) }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <label for="compaign">Address</label>*/
/*         <input type="text" id="compaign" name="ins_address_address[$$name$$]" value="{{ address is defined ?  address  : '' }}" class="form-control"/>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <label for="compaign">City</label>*/
/*         <input type="text" id="compaign" name="ins_address_city[$$name$$]" value="{{ city is defined ?  city  : '' }}" class="form-control class-autocomplete"/>*/
/*     </div>*/
/*     <div class="form-group row">*/
/*         <div class="col-md-6">*/
/*             <label for="compaign">State</label>*/
/*             <input type="text" id="compaign" name="ins_address_state[$$name$$]" value="{{ state is defined ?  state  : '' }}" class="form-control state-autocomplete"/>*/
/*         </div>*/
/*         <div class="col-md-6">*/
/*             <label for="compaign">Zip Code</label>*/
/*             <input type="text" id="compaign" name="ins_address_zipCode[$$name$$]" value="{{ zipCode is defined ?  zipCode  : '' }}" class="form-control"/>*/
/*         </div>*/
/*     </div>*/
/*     <div>*/
/*         Previous carrier*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <label for="name">Name</label>*/
/*         <input type="text" id="ins_address_name" name="ins_address_name[$$name$$]" value="{{ previousCarrierName is defined ?  previousCarrierName  : '' }}" class="form-control"/>*/
/*     </div>*/
/*     <div class="form-group row">*/
/*         <div class="col-md-6">*/
/*             <label for="name">Policy №</label>*/
/*             <input type="text" id="ins_address_policy" name="ins_address_policy[$$name$$]" value="{{ previousCarrierPolice is defined ?  previousCarrierPolice  : '' }}" class="form-control"/>*/
/*         </div>*/
/*         <div class="col-md-6">*/
/*             <label for="name">X-Date</label>*/
/*             <input type="text" class="form-control datepicker-product" id="ins_address_xdate" name="ins_address_xdate[$$name$$]" value="{{ previousCarrierXDate is defined ?  previousCarrierXDate|date('M d, Y')  : '' }}" class="form-control"/>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <input type="hidden" class="insuredAddressId" name="insuredAddressId[$$name$$]" value="{{ insuredAddressId is defined ?  insuredAddressId  : '' }}" />*/
/*     {% include('ZesharCRMCoreBundle:FormItems:prequalificationButtonGroup.html.twig') with {'empty': empty, 'singleEmpty': singleEmpty, 'last': last, 'save': false} %}*/
/* </div>*/
