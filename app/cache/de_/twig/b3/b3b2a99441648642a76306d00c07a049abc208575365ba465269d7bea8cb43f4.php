<?php

/* ZesharCRMCoreBundle:FormItems:entityDetails.html.twig */
class __TwigTemplate_93adf171b74f35fdac6b06cc1643cf8f55ba18e312d07036964c6f20917c784e extends Twig_Template
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
        $__internal_994d774f988769be6ff0257d30f88d8c1361a35757d751e9a7a441e922b31c1f = $this->env->getExtension("native_profiler");
        $__internal_994d774f988769be6ff0257d30f88d8c1361a35757d751e9a7a441e922b31c1f->enter($__internal_994d774f988769be6ff0257d30f88d8c1361a35757d751e9a7a441e922b31c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:FormItems:entityDetails.html.twig"));

        // line 1
        $context["contactCard"] = ((((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "lead")) ? ($this->getAttribute((isset($context["subject"]) ? $context["subject"] : $this->getContext($context, "subject")), "getContactCard", array(), "method")) : ($this->getAttribute((isset($context["subject"]) ? $context["subject"] : $this->getContext($context, "subject")), "getContactCardOpportunity", array(), "method")));
        // line 2
        echo "
<table class=\"table editable-table form-column entity-details-table-form\">
    <input type=\"hidden\" name=\"formType\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"leadId\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subject"]) ? $context["subject"] : $this->getContext($context, "subject")), "id", array()), "html", null, true);
        echo "\">
    ";
        // line 6
        if ((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard"))) {
            // line 7
            echo "        <input type=\"hidden\" name=\"contactCardId\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")), "id", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 9
        echo "    <tr class=\"form-group\">
        <td>First Name</td>
        <td><input tabindex=\"1\" class=\"form-control length-validate\" name=\"firstName\" type=\"text\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : null), "firstName", array(), "any", true, true)) ? ($this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")), "firstName", array())) : ("")), "html", null, true);
        echo "\"/></td>
        <td>Address</td>
        <td class=\"address\"><input tabindex=\"4\" class=\"form-control length-validate\" name=\"address\" type=\"text\"  value=\"";
        // line 13
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : null), "streetAddress", array(), "any", true, true)) ? ($this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")), "streetAddress", array())) : ("")), "html", null, true);
        echo "\"/></td>
    </tr>
    <tr>
        <td>Last Name</td>
        <td><input tabindex=\"3\" class=\"form-control length-validate\" name=\"lastName\" type=\"text\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : null), "lastName", array(), "any", true, true)) ? ($this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")), "lastName", array())) : ("")), "html", null, true);
        echo "\"/></td>
        <td>City</td>
        <td><input id=\"city\" tabindex=\"5\" class=\"form-control\" name=\"city\" type=\"text\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : null), "city", array(), "any", true, true)) ? ($this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")), "city", array())) : ("")), "html", null, true);
        echo "\"/> </td>
    </tr>
    <tr>
        <td>Middle Name</td>
        <td><input tabindex=\"2\" class=\"form-control length-validate\" name=\"middleName\" type=\"text\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : null), "middleInitial", array(), "any", true, true)) ? ($this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")), "middleInitial", array())) : ("")), "html", null, true);
        echo "\"/></td>
        <td>State</td>
        <td><input id=\"state\" tabindex=\"6\" class=\"form-control\" name=\"state\" type=\"text\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : null), "state", array(), "any", true, true)) ? ($this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")), "state", array())) : ("")), "html", null, true);
        echo "\"/></td>
    </tr>
    <tr>
        <td>Phone</td>
        <td>
            <input tabindex=\"8\" class=\"form-control length-validate\" name=\"phone\" type=\"text\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : null), "phone", array(), "any", true, true)) ? ($this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")), "phone", array())) : ("")), "html", null, true);
        echo "\"/>
        </td>
        <td>Zipcode</td>
        <td><input tabindex=\"7\" class=\"form-control\" name=\"zipcode\" type=\"text\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : null), "zip", array(), "any", true, true)) ? ($this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")), "zip", array())) : ("")), "html", null, true);
        echo "\"/></td>
    </tr>
    <tr>
        <td>Email</td>
        <td>
            <input tabindex=\"9\" class=\"form-control length-validate\" name=\"email\" type=\"text\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : null), "email", array(), "any", true, true)) ? ($this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")), "email", array())) : ("")), "html", null, true);
        echo "\"/>
        </td>
        <td>Other</td>
        <td><input tabindex=\"10\" class=\"form-control length-validate\" name=\"other\" type=\"text\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : null), "other", array(), "any", true, true)) ? ($this->getAttribute((isset($context["contactCard"]) ? $context["contactCard"] : $this->getContext($context, "contactCard")), "other", array())) : ("")), "html", null, true);
        echo "\"/></td>
    </tr>

</table>";
        
        $__internal_994d774f988769be6ff0257d30f88d8c1361a35757d751e9a7a441e922b31c1f->leave($__internal_994d774f988769be6ff0257d30f88d8c1361a35757d751e9a7a441e922b31c1f_prof);

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
        return array (  105 => 41,  99 => 38,  91 => 33,  85 => 30,  77 => 25,  72 => 23,  65 => 19,  60 => 17,  53 => 13,  48 => 11,  44 => 9,  38 => 7,  36 => 6,  32 => 5,  28 => 4,  24 => 2,  22 => 1,);
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
