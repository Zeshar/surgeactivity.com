<?php

/* ZesharCRMCoreBundle:CRUD:contact_card_list_field_action_show.html.twig */
class __TwigTemplate_6e53deb35a65130619392cfd4d5c5bfc7ea4b9461b62398eb4b0678b54ec29f9 extends Twig_Template
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
        $__internal_00afe1a2aad7b5bc19f6ebafc7bb28ed19786c9e861d0e5273e4b479446fabe9 = $this->env->getExtension("native_profiler");
        $__internal_00afe1a2aad7b5bc19f6ebafc7bb28ed19786c9e861d0e5273e4b479446fabe9->enter($__internal_00afe1a2aad7b5bc19f6ebafc7bb28ed19786c9e861d0e5273e4b479446fabe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD:contact_card_list_field_action_show.html.twig"));

        // line 1
        echo "<li>
    <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "show", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
        <i class=\"glyphicon glyphicon-show\"></i>
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action_show", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
<li>";
        
        $__internal_00afe1a2aad7b5bc19f6ebafc7bb28ed19786c9e861d0e5273e4b479446fabe9->leave($__internal_00afe1a2aad7b5bc19f6ebafc7bb28ed19786c9e861d0e5273e4b479446fabe9_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD:contact_card_list_field_action_show.html.twig";
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
/*     <a href="{{ admin.generateObjectUrl('show', object) }}">*/
/*         <i class="glyphicon glyphicon-show"></i>*/
/*         {{ 'action_show'|trans({}, 'SonataAdminBundle') }}*/
/*     </a>*/
/* <li>*/
