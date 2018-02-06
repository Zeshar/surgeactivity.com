<?php

/* ZesharCRMCoreBundle:CRUD:contact_card_list_field_action_edit.html.twig */
class __TwigTemplate_94925d8f945c22cb692782c51985022611651623ab66bbcf207942f836fbf59c extends Twig_Template
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
        $__internal_a53f97db5b3cabf1f744871c730114d1b2f1c55506c738222fbf352311041e08 = $this->env->getExtension("native_profiler");
        $__internal_a53f97db5b3cabf1f744871c730114d1b2f1c55506c738222fbf352311041e08->enter($__internal_a53f97db5b3cabf1f744871c730114d1b2f1c55506c738222fbf352311041e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD:contact_card_list_field_action_edit.html.twig"));

        // line 1
        echo "<li>
    <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
        <i class=\"glyphicon glyphicon-edit\"></i>
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action_edit", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
<li>";
        
        $__internal_a53f97db5b3cabf1f744871c730114d1b2f1c55506c738222fbf352311041e08->leave($__internal_a53f97db5b3cabf1f744871c730114d1b2f1c55506c738222fbf352311041e08_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD:contact_card_list_field_action_edit.html.twig";
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
/*     <a href="{{ admin.generateObjectUrl('edit', object) }}">*/
/*         <i class="glyphicon glyphicon-edit"></i>*/
/*         {{ 'action_edit'|trans({}, 'SonataAdminBundle') }}*/
/*     </a>*/
/* <li>*/
