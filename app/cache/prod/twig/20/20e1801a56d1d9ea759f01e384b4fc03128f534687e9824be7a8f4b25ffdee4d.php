<?php

/* ZesharCRMCoreBundle:FormItems:insuredAddressesTypeSelect.html.twig */
class __TwigTemplate_056fb6e071735c46d6312704d7e5bbc23fc3f9f1f49d37e14a8385e787e977dc extends Twig_Template
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
        echo "<ul class=\"three-list clearfix\">
    <li>
        <input type=\"radio\" class=\"radio\" name=\"ins_address_type[\$\$name\$\$]\" value=\"1\" id=\"own\" val=\"val1\" ";
        // line 3
        if (( !twig_test_empty((isset($context["activeValue"]) ? $context["activeValue"] : null)) && ((isset($context["activeValue"]) ? $context["activeValue"] : null) == 1))) {
            echo "checked=\"checked\"";
        }
        echo " />
        <label for=\"own\">Own</label>
    </li>
    <li>
        <input type=\"radio\" class=\"radio\" name=\"ins_address_type[\$\$name\$\$]\" value=\"2\" id=\"rent\" val=\"val2\" ";
        // line 7
        if (( !twig_test_empty((isset($context["activeValue"]) ? $context["activeValue"] : null)) && ((isset($context["activeValue"]) ? $context["activeValue"] : null) == 2))) {
            echo "checked=\"checked\"";
        }
        echo "/>
        <label for=\"rent\">Rent</label>
    </li>
</ul>";
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
        return array (  32 => 7,  23 => 3,  19 => 1,);
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
