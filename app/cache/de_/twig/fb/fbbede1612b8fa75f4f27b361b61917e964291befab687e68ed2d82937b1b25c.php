<?php

/* ZesharCRMCoreBundle:FormItems:contactStatusSelect.html.twig */
class __TwigTemplate_601a57b8227d08d6266b426dc485f8521f42b1c1fe728edd0ba3601c7389706a extends Twig_Template
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
        $__internal_320dc8394cf4bf6aa6fa0e05181f76d3c4b91f9bb0c1b2c9de997f3f077c29c6 = $this->env->getExtension("native_profiler");
        $__internal_320dc8394cf4bf6aa6fa0e05181f76d3c4b91f9bb0c1b2c9de997f3f077c29c6->enter($__internal_320dc8394cf4bf6aa6fa0e05181f76d3c4b91f9bb0c1b2c9de997f3f077c29c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:FormItems:contactStatusSelect.html.twig"));

        // line 1
        echo "<ul class=\"lead-type four-list\">
    <li>
        <input type=\"radio\" class=\"radio\" id=\"yes\" name=\"contact_status\" value=\"1\" ";
        // line 3
        if (( !twig_test_empty((isset($context["activeValue"]) ? $context["activeValue"] : $this->getContext($context, "activeValue"))) && ((isset($context["activeValue"]) ? $context["activeValue"] : $this->getContext($context, "activeValue")) == 1))) {
            echo "checked=\"checked\"";
        }
        echo " />
        <label for=\"yes\" class=\"contact-status yes\">Yes</label>
    </li>
    <li>
        <input type=\"radio\" class=\"radio\" id=\"no\" name=\"contact_status\" value=\"2\" ";
        // line 7
        if (( !twig_test_empty((isset($context["activeValue"]) ? $context["activeValue"] : $this->getContext($context, "activeValue"))) && ((isset($context["activeValue"]) ? $context["activeValue"] : $this->getContext($context, "activeValue")) == 2))) {
            echo "checked=\"checked\"";
        }
        echo "/>
        <label for=\"no\" class=\"contact-status no\">No</label>
    </li>
    <li class=\"larger\">
        <input type=\"radio\" class=\"radio\" id=\"neglected\" name=\"contact_status\" value=\"3\" ";
        // line 11
        if (( !twig_test_empty((isset($context["activeValue"]) ? $context["activeValue"] : $this->getContext($context, "activeValue"))) && ((isset($context["activeValue"]) ? $context["activeValue"] : $this->getContext($context, "activeValue")) == 3))) {
            echo "checked=\"checked\"";
        }
        echo "/>
        <label for=\"neglected\" class=\"contact-status neglect\">Neglected</label>
    </li>
</ul>
";
        
        $__internal_320dc8394cf4bf6aa6fa0e05181f76d3c4b91f9bb0c1b2c9de997f3f077c29c6->leave($__internal_320dc8394cf4bf6aa6fa0e05181f76d3c4b91f9bb0c1b2c9de997f3f077c29c6_prof);

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
        return array (  44 => 11,  35 => 7,  26 => 3,  22 => 1,);
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
