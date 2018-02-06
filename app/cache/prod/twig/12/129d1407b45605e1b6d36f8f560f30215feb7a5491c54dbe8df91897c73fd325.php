<?php

/* ZesharCRMCoreBundle:FormItems:entityDetails.html.twig */
class __TwigTemplate_d5add45099a76d4839fa190454273aa16a4dc89ab14930070b453bb3c87b5eac extends Twig_Template
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
        $context["contactCard"] = ((((isset($context["type"]) ? $context["type"] : null) == "lead")) ? ($this->getAttribute((isset($context["subject"]) ? $context["subject"] : null), "getContactCard", array(), "method")) : ($this->getAttribute((isset($context["subject"]) ? $context["subject"] : null), "getContactCardOpportunity", array(), "method")));
        // line 2
        echo "
<table class=\"table editable-table form-column entity-details-table-form\">
    <input type=\"hidden\" name=\"formType\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"leadId\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subject"]) ? $context["subject"] : null), "id", array()), "html", null, true);
        echo "\">
    ";
        // line 6
        if ((isset($context["contactCard"]) ? $context["contactCard"] : null)) {
            // line 7
            echo "        <input type=\"hidden\" name=\"contactCardId\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : null), "id", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 9
        echo "    <tr class=\"form-group\">
        <td>First Name</td>
        <td><input tabindex=\"1\" class=\"form-control length-validate\" name=\"firstName\" type=\"text\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : null), "firstName", array(), "any", true, true)) ? ($this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : null), "firstName", array())) : ("")), "html", null, true);
        echo "\"/></td>
        <td>Address</td>
        <td class=\"address\"><input tabindex=\"4\" class=\"form-control length-validate\" name=\"address\" type=\"text\"  value=\"";
        // line 13
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : null), "streetAddress", array(), "any", true, true)) ? ($this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : null), "streetAddress", array())) : ("")), "html", null, true);
        echo "\"/></td>
    </tr>
    <tr>
        <td>Last Name</td>
        <td><input tabindex=\"3\" class=\"form-control length-validate\" name=\"lastName\" type=\"text\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : null), "lastName", array(), "any", true, true)) ? ($this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : null), "lastName", array())) : ("")), "html", null, true);
        echo "\"/></td>
        <td>City</td>
        <td><input id=\"city\" tabindex=\"5\" class=\"form-control\" name=\"city\" type=\"text\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : null), "city", array(), "any", true, true)) ? ($this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : null), "city", array())) : ("")), "html", null, true);
        echo "\"/> </td>
    </tr>
    <tr>
        <td>Middle Name</td>
        <td><input tabindex=\"2\" class=\"form-control length-validate\" name=\"middleName\" type=\"text\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : null), "middleInitial", array(), "any", true, true)) ? ($this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : null), "middleInitial", array())) : ("")), "html", null, true);
        echo "\"/></td>
        <td>State</td>
        <td><input id=\"state\" tabindex=\"6\" class=\"form-control\" name=\"state\" type=\"text\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : null), "state", array(), "any", true, true)) ? ($this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : null), "state", array())) : ("")), "html", null, true);
        echo "\"/></td>
    </tr>
    <tr>
        <td>Phone</td>
        <td>
            <input tabindex=\"8\" class=\"form-control length-validate\" name=\"phone\" type=\"text\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : null), "phone", array(), "any", true, true)) ? ($this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : null), "phone", array())) : ("")), "html", null, true);
        echo "\"/>
        </td>
        <td>Zipcode</td>
        <td><input tabindex=\"7\" class=\"form-control\" name=\"zipcode\" type=\"text\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : null), "zip", array(), "any", true, true)) ? ($this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : null), "zip", array())) : ("")), "html", null, true);
        echo "\"/></td>
    </tr>
    <tr>
        <td>Email</td>
        <td>
            <input tabindex=\"9\" class=\"form-control length-validate\" name=\"email\" type=\"text\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : null), "email", array(), "any", true, true)) ? ($this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : null), "email", array())) : ("")), "html", null, true);
        echo "\"/>
        </td>
        <td>Other</td>
        <td><input tabindex=\"10\" class=\"form-control length-validate\" name=\"other\" type=\"text\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : null), "other", array(), "any", true, true)) ? ($this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : null), "other", array())) : ("")), "html", null, true);
        echo "\"/></td>
    </tr>

</table>";
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:FormItems:entityDetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 41,  96 => 38,  88 => 33,  82 => 30,  74 => 25,  69 => 23,  62 => 19,  57 => 17,  50 => 13,  45 => 11,  41 => 9,  35 => 7,  33 => 6,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% set contactCard = (type == 'lead' ? subject.getContactCard() : subject.getContactCardOpportunity() )%}*/
/* */
/* <table class="table editable-table form-column entity-details-table-form">*/
/*     <input type="hidden" name="formType" value="{{ type }}">*/
/*     <input type="hidden" name="leadId" value="{{ subject.id }}">*/
/*     {% if contactCard %}*/
/*         <input type="hidden" name="contactCardId" value="{{ contactCard.id }}">*/
/*     {% endif %}*/
/*     <tr class="form-group">*/
/*         <td>First Name</td>*/
/*         <td><input tabindex="1" class="form-control length-validate" name="firstName" type="text" value="{{ contactCard.firstName is defined ?  contactCard.firstName  : '' }}"/></td>*/
/*         <td>Address</td>*/
/*         <td class="address"><input tabindex="4" class="form-control length-validate" name="address" type="text"  value="{{ contactCard.streetAddress is defined ?  contactCard.streetAddress  : '' }}"/></td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>Last Name</td>*/
/*         <td><input tabindex="3" class="form-control length-validate" name="lastName" type="text" value="{{ contactCard.lastName is defined ?  contactCard.lastName  : '' }}"/></td>*/
/*         <td>City</td>*/
/*         <td><input id="city" tabindex="5" class="form-control" name="city" type="text" value="{{ contactCard.city is defined ?  contactCard.city  : '' }}"/> </td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>Middle Name</td>*/
/*         <td><input tabindex="2" class="form-control length-validate" name="middleName" type="text" value="{{ contactCard.middleInitial is defined ?  contactCard.middleInitial  : '' }}"/></td>*/
/*         <td>State</td>*/
/*         <td><input id="state" tabindex="6" class="form-control" name="state" type="text" value="{{ contactCard.state is defined ?  contactCard.state  : '' }}"/></td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>Phone</td>*/
/*         <td>*/
/*             <input tabindex="8" class="form-control length-validate" name="phone" type="text" value="{{ contactCard.phone is defined ?  contactCard.phone  : '' }}"/>*/
/*         </td>*/
/*         <td>Zipcode</td>*/
/*         <td><input tabindex="7" class="form-control" name="zipcode" type="text" value="{{ contactCard.zip is defined ?  contactCard.zip  : '' }}"/></td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>Email</td>*/
/*         <td>*/
/*             <input tabindex="9" class="form-control length-validate" name="email" type="text" value="{{ contactCard.email is defined ?  contactCard.email  : '' }}"/>*/
/*         </td>*/
/*         <td>Other</td>*/
/*         <td><input tabindex="10" class="form-control length-validate" name="other" type="text" value="{{ contactCard.other is defined ?  contactCard.other  : '' }}"/></td>*/
/*     </tr>*/
/* */
/* </table>*/
