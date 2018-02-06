<?php

/* ZesharCRMCoreBundle:FormItems:leadPrequalificationInsuredAddressBlock.html.twig */
class __TwigTemplate_b55df3f9bf742b1b48f06df0a215f7f0a32269bdd3edbdabfcc9607b62874d11 extends Twig_Template
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
        $__internal_e8805c3bbe061940f8702ff47a0557266c356eb28d6b06edc9b23fbb8299f8f3 = $this->env->getExtension("native_profiler");
        $__internal_e8805c3bbe061940f8702ff47a0557266c356eb28d6b06edc9b23fbb8299f8f3->enter($__internal_e8805c3bbe061940f8702ff47a0557266c356eb28d6b06edc9b23fbb8299f8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:FormItems:leadPrequalificationInsuredAddressBlock.html.twig"));

        // line 1
        echo "<div class=\"group-forms\">
    <div class=\"form-group\">
        <div class=\"clearfix\">
            ";
        // line 4
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:insuredAddressesTypeSelect", array("activeValue" =>         // line 5
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")))));
        // line 6
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"compaign\">Address</label>
        <input type=\"text\" id=\"compaign\" name=\"ins_address_address[\$\$name\$\$]\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, ((array_key_exists("address", $context)) ? ((isset($context["address"]) ? $context["address"] : $this->getContext($context, "address"))) : ("")), "html", null, true);
        echo "\" class=\"form-control\"/>
    </div>
    <div class=\"form-group\">
        <label for=\"compaign\">City</label>
        <input type=\"text\" id=\"compaign\" name=\"ins_address_city[\$\$name\$\$]\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, ((array_key_exists("city", $context)) ? ((isset($context["city"]) ? $context["city"] : $this->getContext($context, "city"))) : ("")), "html", null, true);
        echo "\" class=\"form-control class-autocomplete\"/>
    </div>
    <div class=\"form-group row\">
        <div class=\"col-md-6\">
            <label for=\"compaign\">State</label>
            <input type=\"text\" id=\"compaign\" name=\"ins_address_state[\$\$name\$\$]\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, ((array_key_exists("state", $context)) ? ((isset($context["state"]) ? $context["state"] : $this->getContext($context, "state"))) : ("")), "html", null, true);
        echo "\" class=\"form-control state-autocomplete\"/>
        </div>
        <div class=\"col-md-6\">
            <label for=\"compaign\">Zip Code</label>
            <input type=\"text\" id=\"compaign\" name=\"ins_address_zipCode[\$\$name\$\$]\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, ((array_key_exists("zipCode", $context)) ? ((isset($context["zipCode"]) ? $context["zipCode"] : $this->getContext($context, "zipCode"))) : ("")), "html", null, true);
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
        echo twig_escape_filter($this->env, ((array_key_exists("previousCarrierName", $context)) ? ((isset($context["previousCarrierName"]) ? $context["previousCarrierName"] : $this->getContext($context, "previousCarrierName"))) : ("")), "html", null, true);
        echo "\" class=\"form-control\"/>
    </div>
    <div class=\"form-group row\">
        <div class=\"col-md-6\">
            <label for=\"name\">Policy №</label>
            <input type=\"text\" id=\"ins_address_policy\" name=\"ins_address_policy[\$\$name\$\$]\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, ((array_key_exists("previousCarrierPolice", $context)) ? ((isset($context["previousCarrierPolice"]) ? $context["previousCarrierPolice"] : $this->getContext($context, "previousCarrierPolice"))) : ("")), "html", null, true);
        echo "\" class=\"form-control\"/>
        </div>
        <div class=\"col-md-6\">
            <label for=\"name\">X-Date</label>
            <input type=\"text\" class=\"form-control datepicker-product\" id=\"ins_address_xdate\" name=\"ins_address_xdate[\$\$name\$\$]\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, ((array_key_exists("previousCarrierXDate", $context)) ? (twig_date_format_filter($this->env, (isset($context["previousCarrierXDate"]) ? $context["previousCarrierXDate"] : $this->getContext($context, "previousCarrierXDate")), "M d, Y")) : ("")), "html", null, true);
        echo "\" class=\"form-control\"/>
        </div>
    </div>

    <input type=\"hidden\" class=\"insuredAddressId\" name=\"insuredAddressId[\$\$name\$\$]\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, ((array_key_exists("insuredAddressId", $context)) ? ((isset($context["insuredAddressId"]) ? $context["insuredAddressId"] : $this->getContext($context, "insuredAddressId"))) : ("")), "html", null, true);
        echo "\" />
    ";
        // line 46
        $this->loadTemplate("ZesharCRMCoreBundle:FormItems:prequalificationButtonGroup.html.twig", "ZesharCRMCoreBundle:FormItems:leadPrequalificationInsuredAddressBlock.html.twig", 46)->display(array_merge($context, array("empty" => (isset($context["empty"]) ? $context["empty"] : $this->getContext($context, "empty")), "singleEmpty" => (isset($context["singleEmpty"]) ? $context["singleEmpty"] : $this->getContext($context, "singleEmpty")), "last" => (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last")), "save" => false)));
        // line 47
        echo "</div>";
        
        $__internal_e8805c3bbe061940f8702ff47a0557266c356eb28d6b06edc9b23fbb8299f8f3->leave($__internal_e8805c3bbe061940f8702ff47a0557266c356eb28d6b06edc9b23fbb8299f8f3_prof);

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
        return array (  98 => 47,  96 => 46,  92 => 45,  85 => 41,  78 => 37,  70 => 32,  59 => 24,  52 => 20,  44 => 15,  37 => 11,  30 => 6,  28 => 5,  27 => 4,  22 => 1,);
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
