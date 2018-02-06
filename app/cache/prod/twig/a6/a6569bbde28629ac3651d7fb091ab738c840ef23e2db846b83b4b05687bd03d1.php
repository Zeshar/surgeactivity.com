<?php

/* ZesharCRMCoreBundle:FormItems:leadTypeSelect.html.twig */
class __TwigTemplate_2ce5e79b7163f6db36a61fd53f7bc6d30ce5a6b117d7970272a162044dc26903 extends Twig_Template
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
        echo "<ul class=\"lead-subject-type lead-type four-list\">
    <li>
        <input type=\"radio\" class=\"radio\" id=\"yes\" name=\"lead_subject_type\" value=\"1\" ";
        // line 3
        if (( !twig_test_empty((isset($context["activeValue"]) ? $context["activeValue"] : null)) && ((isset($context["activeValue"]) ? $context["activeValue"] : null) == 1))) {
            echo "checked=\"checked\"";
        }
        echo " />
        <label for=\"yes\" class=\"lead-type recycled\">Recycled</label>
    </li>
    <li>
        <input type=\"radio\" class=\"radio\" id=\"no\" name=\"lead_subject_type\" value=\"2\" ";
        // line 7
        if (( !twig_test_empty((isset($context["activeValue"]) ? $context["activeValue"] : null)) && ((isset($context["activeValue"]) ? $context["activeValue"] : null) == 2))) {
            echo "checked=\"checked\"";
        }
        echo "/>
        <label for=\"no\" class=\"lead-type winback\">Winback</label>
    </li>
    <li class=\"larger\">
        <input type=\"radio\" class=\"radio\" id=\"neglected\" name=\"lead_subject_type\" value=\"3\" ";
        // line 11
        if (( !twig_test_empty((isset($context["activeValue"]) ? $context["activeValue"] : null)) && ((isset($context["activeValue"]) ? $context["activeValue"] : null) == 3))) {
            echo "checked=\"checked\"";
        }
        echo "/>
        <label for=\"neglected\" class=\"lead-type cross_sell\">Cross Sell</label>
    </li>
</ul>";
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:FormItems:leadTypeSelect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 11,  32 => 7,  23 => 3,  19 => 1,);
    }
}
/* <ul class="lead-subject-type lead-type four-list">*/
/*     <li>*/
/*         <input type="radio" class="radio" id="yes" name="lead_subject_type" value="1" {% if activeValue is not empty and activeValue == 1 %}checked="checked"{% endif %} />*/
/*         <label for="yes" class="lead-type recycled">Recycled</label>*/
/*     </li>*/
/*     <li>*/
/*         <input type="radio" class="radio" id="no" name="lead_subject_type" value="2" {% if activeValue is not empty and activeValue == 2 %}checked="checked"{% endif %}/>*/
/*         <label for="no" class="lead-type winback">Winback</label>*/
/*     </li>*/
/*     <li class="larger">*/
/*         <input type="radio" class="radio" id="neglected" name="lead_subject_type" value="3" {% if activeValue is not empty and activeValue == 3 %}checked="checked"{% endif %}/>*/
/*         <label for="neglected" class="lead-type cross_sell">Cross Sell</label>*/
/*     </li>*/
/* </ul>*/
