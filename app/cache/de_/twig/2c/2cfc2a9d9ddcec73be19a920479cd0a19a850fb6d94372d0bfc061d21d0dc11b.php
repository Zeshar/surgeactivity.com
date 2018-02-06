<?php

/* ZesharCRMCoreBundle:FormItems:leadTypeSelect.html.twig */
class __TwigTemplate_c020f563af726e6063b751db178f1731a32dca486e563cf135dcd1b7980ddd0a extends Twig_Template
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
        $__internal_7618af43632045d3092e9840ebdb7a4201b547d21c81aca3040ce15a128f7bfc = $this->env->getExtension("native_profiler");
        $__internal_7618af43632045d3092e9840ebdb7a4201b547d21c81aca3040ce15a128f7bfc->enter($__internal_7618af43632045d3092e9840ebdb7a4201b547d21c81aca3040ce15a128f7bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:FormItems:leadTypeSelect.html.twig"));

        // line 1
        echo "<ul class=\"lead-subject-type lead-type four-list\">
    <li>
        <input type=\"radio\" class=\"radio\" id=\"yes\" name=\"lead_subject_type\" value=\"1\" ";
        // line 3
        if (( !twig_test_empty((isset($context["activeValue"]) ? $context["activeValue"] : $this->getContext($context, "activeValue"))) && ((isset($context["activeValue"]) ? $context["activeValue"] : $this->getContext($context, "activeValue")) == 1))) {
            echo "checked=\"checked\"";
        }
        echo " />
        <label for=\"yes\" class=\"lead-type recycled\">Recycled</label>
    </li>
    <li>
        <input type=\"radio\" class=\"radio\" id=\"no\" name=\"lead_subject_type\" value=\"2\" ";
        // line 7
        if (( !twig_test_empty((isset($context["activeValue"]) ? $context["activeValue"] : $this->getContext($context, "activeValue"))) && ((isset($context["activeValue"]) ? $context["activeValue"] : $this->getContext($context, "activeValue")) == 2))) {
            echo "checked=\"checked\"";
        }
        echo "/>
        <label for=\"no\" class=\"lead-type winback\">Winback</label>
    </li>
    <li class=\"larger\">
        <input type=\"radio\" class=\"radio\" id=\"neglected\" name=\"lead_subject_type\" value=\"3\" ";
        // line 11
        if (( !twig_test_empty((isset($context["activeValue"]) ? $context["activeValue"] : $this->getContext($context, "activeValue"))) && ((isset($context["activeValue"]) ? $context["activeValue"] : $this->getContext($context, "activeValue")) == 3))) {
            echo "checked=\"checked\"";
        }
        echo "/>
        <label for=\"neglected\" class=\"lead-type cross_sell\">Cross Sell</label>
    </li>
</ul>";
        
        $__internal_7618af43632045d3092e9840ebdb7a4201b547d21c81aca3040ce15a128f7bfc->leave($__internal_7618af43632045d3092e9840ebdb7a4201b547d21c81aca3040ce15a128f7bfc_prof);

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
        return array (  44 => 11,  35 => 7,  26 => 3,  22 => 1,);
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
