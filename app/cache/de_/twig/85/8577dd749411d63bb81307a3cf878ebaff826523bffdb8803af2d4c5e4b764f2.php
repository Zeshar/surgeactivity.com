<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_4a6daa0da0bd811dd042cb7bd9134232e41185708314fef04e89799909c78a6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81ffbf4a7468bcdc17f274c8bce8a567833b50b272620b8614f420f47fb7587c = $this->env->getExtension("native_profiler");
        $__internal_81ffbf4a7468bcdc17f274c8bce8a567833b50b272620b8614f420f47fb7587c->enter($__internal_81ffbf4a7468bcdc17f274c8bce8a567833b50b272620b8614f420f47fb7587c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81ffbf4a7468bcdc17f274c8bce8a567833b50b272620b8614f420f47fb7587c->leave($__internal_81ffbf4a7468bcdc17f274c8bce8a567833b50b272620b8614f420f47fb7587c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}*/
/* */
