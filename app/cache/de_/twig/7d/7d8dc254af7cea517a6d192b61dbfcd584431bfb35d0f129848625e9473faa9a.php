<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_acc60a4d1b853f1b17dc074266e376b7c064a30d38897d785a7b37e74add5504 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b3308ef564d07a6a75538dbc77915e7923f3e51eed0398000451db33bbfb19e = $this->env->getExtension("native_profiler");
        $__internal_4b3308ef564d07a6a75538dbc77915e7923f3e51eed0398000451db33bbfb19e->enter($__internal_4b3308ef564d07a6a75538dbc77915e7923f3e51eed0398000451db33bbfb19e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b3308ef564d07a6a75538dbc77915e7923f3e51eed0398000451db33bbfb19e->leave($__internal_4b3308ef564d07a6a75538dbc77915e7923f3e51eed0398000451db33bbfb19e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}*/
/* */
