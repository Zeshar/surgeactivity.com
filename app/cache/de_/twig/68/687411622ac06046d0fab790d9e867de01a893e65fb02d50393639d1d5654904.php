<?php

/* ZesharCRMCoreBundle:CRUD:contact_card_list_field_action_delete.html.twig */
class __TwigTemplate_63564f01a7e52c9ec62b733edeb8f4b924524be7baf69bdaecd89c2cda26c35c extends Twig_Template
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
        $__internal_40ad85b665aea2c8ee395104547a7060a472490ab5072b921657223176f7e64e = $this->env->getExtension("native_profiler");
        $__internal_40ad85b665aea2c8ee395104547a7060a472490ab5072b921657223176f7e64e->enter($__internal_40ad85b665aea2c8ee395104547a7060a472490ab5072b921657223176f7e64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD:contact_card_list_field_action_delete.html.twig"));

        // line 1
        echo "<li>
    <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
        <i class=\"glyphicon glyphicon-remove\"></i>
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action_delete", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
<li>";
        
        $__internal_40ad85b665aea2c8ee395104547a7060a472490ab5072b921657223176f7e64e->leave($__internal_40ad85b665aea2c8ee395104547a7060a472490ab5072b921657223176f7e64e_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD:contact_card_list_field_action_delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 2,  22 => 1,);
    }
}
/* <li>*/
/*     <a href="{{ admin.generateObjectUrl('delete', object) }}">*/
/*         <i class="glyphicon glyphicon-remove"></i>*/
/*         {{ 'action_delete'|trans({}, 'SonataAdminBundle') }}*/
/*     </a>*/
/* <li>*/
