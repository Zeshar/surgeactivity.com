<?php

/* ZesharCRMCoreBundle:CRUD:contact_card_list_field_action_delete.html.twig */
class __TwigTemplate_281f6e04abb62e48a0b501917bda27b2b2e465207fe6226a568656fb7d58e882 extends Twig_Template
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
        echo "<li>
    <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
        echo "\">
        <i class=\"glyphicon glyphicon-remove\"></i>
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action_delete", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
<li>";
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
        return array (  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <li>*/
/*     <a href="{{ admin.generateObjectUrl('delete', object) }}">*/
/*         <i class="glyphicon glyphicon-remove"></i>*/
/*         {{ 'action_delete'|trans({}, 'SonataAdminBundle') }}*/
/*     </a>*/
/* <li>*/
