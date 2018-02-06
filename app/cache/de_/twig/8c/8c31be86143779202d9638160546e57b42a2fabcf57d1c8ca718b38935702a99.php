<?php

/* ZesharCRMCoreBundle:FormItems:insuredAddressesTypeSelect.html.twig */
class __TwigTemplate_7223131a766c4c90bd8bb6013c46554214f241464cf9ce99ee9f297dd04dd5df extends Twig_Template
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
        $__internal_88771515024d4f5f8de5e6c8b988bc344c5cbab381c04d88f212bf2d3bd7a764 = $this->env->getExtension("native_profiler");
        $__internal_88771515024d4f5f8de5e6c8b988bc344c5cbab381c04d88f212bf2d3bd7a764->enter($__internal_88771515024d4f5f8de5e6c8b988bc344c5cbab381c04d88f212bf2d3bd7a764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:FormItems:insuredAddressesTypeSelect.html.twig"));

        // line 1
        echo "<ul class=\"three-list clearfix\">
    <li>
        <input type=\"radio\" class=\"radio\" name=\"ins_address_type[\$\$name\$\$]\" value=\"1\" id=\"own\" val=\"val1\" ";
        // line 3
        if (( !twig_test_empty((isset($context["activeValue"]) ? $context["activeValue"] : $this->getContext($context, "activeValue"))) && ((isset($context["activeValue"]) ? $context["activeValue"] : $this->getContext($context, "activeValue")) == 1))) {
            echo "checked=\"checked\"";
        }
        echo " />
        <label for=\"own\">Own</label>
    </li>
    <li>
        <input type=\"radio\" class=\"radio\" name=\"ins_address_type[\$\$name\$\$]\" value=\"2\" id=\"rent\" val=\"val2\" ";
        // line 7
        if (( !twig_test_empty((isset($context["activeValue"]) ? $context["activeValue"] : $this->getContext($context, "activeValue"))) && ((isset($context["activeValue"]) ? $context["activeValue"] : $this->getContext($context, "activeValue")) == 2))) {
            echo "checked=\"checked\"";
        }
        echo "/>
        <label for=\"rent\">Rent</label>
    </li>
</ul>";
        
        $__internal_88771515024d4f5f8de5e6c8b988bc344c5cbab381c04d88f212bf2d3bd7a764->leave($__internal_88771515024d4f5f8de5e6c8b988bc344c5cbab381c04d88f212bf2d3bd7a764_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:FormItems:insuredAddressesTypeSelect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  26 => 3,  22 => 1,);
    }
}
/* <ul class="three-list clearfix">*/
/*     <li>*/
/*         <input type="radio" class="radio" name="ins_address_type[$$name$$]" value="1" id="own" val="val1" {% if activeValue is not empty and activeValue == 1 %}checked="checked"{% endif %} />*/
/*         <label for="own">Own</label>*/
/*     </li>*/
/*     <li>*/
/*         <input type="radio" class="radio" name="ins_address_type[$$name$$]" value="2" id="rent" val="val2" {% if activeValue is not empty and activeValue == 2 %}checked="checked"{% endif %}/>*/
/*         <label for="rent">Rent</label>*/
/*     </li>*/
/* </ul>*/
