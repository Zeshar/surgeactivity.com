<?php

/* ZesharCRMCoreBundle:CRUD:contact_card_list_field_action_edit.html.twig */
class __TwigTemplate_bc06bbbe1894837f830be8bc2fb93437a54b0f437a98f50deb5784f70fea5460 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
        echo "\">
        <i class=\"glyphicon glyphicon-edit\"></i>
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action_edit", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
<li>";
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
        return array (  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <li>*/
/*     <a href="{{ admin.generateObjectUrl('edit', object) }}">*/
/*         <i class="glyphicon glyphicon-edit"></i>*/
/*         {{ 'action_edit'|trans({}, 'SonataAdminBundle') }}*/
/*     </a>*/
/* <li>*/
