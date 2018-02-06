<?php

/* ZesharCRMCoreBundle:FormItems:leadStatusSelect.html.twig */
class __TwigTemplate_aa0d917b1e2cb3c71318d7a171c7f783dc8b92d8298487f65a27182009f33d55 extends Twig_Template
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
        <input type=\"radio\" class=\"radio\" id=\"cold2\" name=\"lead_type2\" value=\"1\" ";
        // line 3
        if (( !twig_test_empty((isset($context["activeValue"]) ? $context["activeValue"] : null)) && ((isset($context["activeValue"]) ? $context["activeValue"] : null) == 1))) {
            echo "checked=\"checked\"";
        }
        echo " />
        <label for=\"cold2\" class=\"tile-type cold\">Cold</label>
    </li>
    <li>
        <input type=\"radio\" class=\"radio\" id=\"warm2\" name=\"lead_type2\" value=\"2\" ";
        // line 7
        if (( !twig_test_empty((isset($context["activeValue"]) ? $context["activeValue"] : null)) && ((isset($context["activeValue"]) ? $context["activeValue"] : null) == 2))) {
            echo "checked=\"checked\"";
        }
        echo " />
        <label for=\"warm2\" class=\"tile-type warm\">Warm</label>
    </li>
    <li>
        <input type=\"radio\" class=\"radio\" id=\"hot2\" name=\"lead_type2\" value=\"3\" ";
        // line 11
        if (( !twig_test_empty((isset($context["activeValue"]) ? $context["activeValue"] : null)) && ((isset($context["activeValue"]) ? $context["activeValue"] : null) == 3))) {
            echo "checked=\"checked\"";
        }
        echo " />
        <label for=\"hot2\" class=\"tile-type hot\">Hot</label>
    </li>
</ul>
";
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
        return array (  41 => 11,  32 => 7,  23 => 3,  19 => 1,);
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
