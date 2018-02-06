<?php

/* ZesharCRMCoreBundle:FormItems:contactStatusSelect.html.twig */
class __TwigTemplate_6d00d9096a0e1cbebd4bc9f41f417a0dcef31116958267516e180f4df8ec722b extends Twig_Template
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
        echo "<ul class=\"lead-type four-list\">
    <li>
        <input type=\"radio\" class=\"radio\" id=\"yes\" name=\"contact_status\" value=\"1\" ";
        // line 3
        if (( !twig_test_empty((isset($context["activeValue"]) ? $context["activeValue"] : null)) && ((isset($context["activeValue"]) ? $context["activeValue"] : null) == 1))) {
            echo "checked=\"checked\"";
        }
        echo " />
        <label for=\"yes\" class=\"contact-status yes\">Yes</label>
    </li>
    <li>
        <input type=\"radio\" class=\"radio\" id=\"no\" name=\"contact_status\" value=\"2\" ";
        // line 7
        if (( !twig_test_empty((isset($context["activeValue"]) ? $context["activeValue"] : null)) && ((isset($context["activeValue"]) ? $context["activeValue"] : null) == 2))) {
            echo "checked=\"checked\"";
        }
        echo "/>
        <label for=\"no\" class=\"contact-status no\">No</label>
    </li>
    <li class=\"larger\">
        <input type=\"radio\" class=\"radio\" id=\"neglected\" name=\"contact_status\" value=\"3\" ";
        // line 11
        if (( !twig_test_empty((isset($context["activeValue"]) ? $context["activeValue"] : null)) && ((isset($context["activeValue"]) ? $context["activeValue"] : null) == 3))) {
            echo "checked=\"checked\"";
        }
        echo "/>
        <label for=\"neglected\" class=\"contact-status neglect\">Neglected</label>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:FormItems:contactStatusSelect.html.twig";
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
/* <ul class="lead-type four-list">*/
/*     <li>*/
/*         <input type="radio" class="radio" id="yes" name="contact_status" value="1" {% if activeValue is not empty and activeValue == 1 %}checked="checked"{% endif %} />*/
/*         <label for="yes" class="contact-status yes">Yes</label>*/
/*     </li>*/
/*     <li>*/
/*         <input type="radio" class="radio" id="no" name="contact_status" value="2" {% if activeValue is not empty and activeValue == 2 %}checked="checked"{% endif %}/>*/
/*         <label for="no" class="contact-status no">No</label>*/
/*     </li>*/
/*     <li class="larger">*/
/*         <input type="radio" class="radio" id="neglected" name="contact_status" value="3" {% if activeValue is not empty and activeValue == 3 %}checked="checked"{% endif %}/>*/
/*         <label for="neglected" class="contact-status neglect">Neglected</label>*/
/*     </li>*/
/* </ul>*/
/* */
