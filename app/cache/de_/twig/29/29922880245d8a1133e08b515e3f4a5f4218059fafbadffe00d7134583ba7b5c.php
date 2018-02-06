<?php

/* ZesharCRMCoreBundle:FormItems:leadStatusSelect.html.twig */
class __TwigTemplate_7521cdb42bf204475e224c63d13a8fe18c2fef4efdba3fb60a1af27db614abb4 extends Twig_Template
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
        $__internal_f0b28c99c12406c4eaecb1868ee38d2082d8ae5360406989de666def204be1f8 = $this->env->getExtension("native_profiler");
        $__internal_f0b28c99c12406c4eaecb1868ee38d2082d8ae5360406989de666def204be1f8->enter($__internal_f0b28c99c12406c4eaecb1868ee38d2082d8ae5360406989de666def204be1f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:FormItems:leadStatusSelect.html.twig"));

        // line 1
        echo "<ul class=\"lead-type four-list\">
    <li>
        <input type=\"radio\" class=\"radio\" id=\"cold2\" name=\"lead_type2\" value=\"1\" ";
        // line 3
        if (( !twig_test_empty((isset($context["activeValue"]) ? $context["activeValue"] : $this->getContext($context, "activeValue"))) && ((isset($context["activeValue"]) ? $context["activeValue"] : $this->getContext($context, "activeValue")) == 1))) {
            echo "checked=\"checked\"";
        }
        echo " />
        <label for=\"cold2\" class=\"tile-type cold\">Cold</label>
    </li>
    <li>
        <input type=\"radio\" class=\"radio\" id=\"warm2\" name=\"lead_type2\" value=\"2\" ";
        // line 7
        if (( !twig_test_empty((isset($context["activeValue"]) ? $context["activeValue"] : $this->getContext($context, "activeValue"))) && ((isset($context["activeValue"]) ? $context["activeValue"] : $this->getContext($context, "activeValue")) == 2))) {
            echo "checked=\"checked\"";
        }
        echo " />
        <label for=\"warm2\" class=\"tile-type warm\">Warm</label>
    </li>
    <li>
        <input type=\"radio\" class=\"radio\" id=\"hot2\" name=\"lead_type2\" value=\"3\" ";
        // line 11
        if (( !twig_test_empty((isset($context["activeValue"]) ? $context["activeValue"] : $this->getContext($context, "activeValue"))) && ((isset($context["activeValue"]) ? $context["activeValue"] : $this->getContext($context, "activeValue")) == 3))) {
            echo "checked=\"checked\"";
        }
        echo " />
        <label for=\"hot2\" class=\"tile-type hot\">Hot</label>
    </li>
</ul>
";
        
        $__internal_f0b28c99c12406c4eaecb1868ee38d2082d8ae5360406989de666def204be1f8->leave($__internal_f0b28c99c12406c4eaecb1868ee38d2082d8ae5360406989de666def204be1f8_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:FormItems:leadStatusSelect.html.twig";
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
/*         <input type="radio" class="radio" id="cold2" name="lead_type2" value="1" {% if activeValue is not empty and activeValue == 1 %}checked="checked"{% endif %} />*/
/*         <label for="cold2" class="tile-type cold">Cold</label>*/
/*     </li>*/
/*     <li>*/
/*         <input type="radio" class="radio" id="warm2" name="lead_type2" value="2" {% if activeValue is not empty and activeValue == 2 %}checked="checked"{% endif %} />*/
/*         <label for="warm2" class="tile-type warm">Warm</label>*/
/*     </li>*/
/*     <li>*/
/*         <input type="radio" class="radio" id="hot2" name="lead_type2" value="3" {% if activeValue is not empty and activeValue == 3 %}checked="checked"{% endif %} />*/
/*         <label for="hot2" class="tile-type hot">Hot</label>*/
/*     </li>*/
/* </ul>*/
/* */
