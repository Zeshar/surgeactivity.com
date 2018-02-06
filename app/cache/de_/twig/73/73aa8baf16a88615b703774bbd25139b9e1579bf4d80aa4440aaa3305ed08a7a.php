<?php

/* SonataAdminBundle:CRUD:show.html.twig */
class __TwigTemplate_57941b684ef5684c507ab96f58f2e9cd5ef67e55de61b85a95038be6bbf3e058 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94e39424744a68476cd97bcbe1e06b6195c974c0cf0de9ac9a640a560f24519b = $this->env->getExtension("native_profiler");
        $__internal_94e39424744a68476cd97bcbe1e06b6195c974c0cf0de9ac9a640a560f24519b->enter($__internal_94e39424744a68476cd97bcbe1e06b6195c974c0cf0de9ac9a640a560f24519b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94e39424744a68476cd97bcbe1e06b6195c974c0cf0de9ac9a640a560f24519b->leave($__internal_94e39424744a68476cd97bcbe1e06b6195c974c0cf0de9ac9a640a560f24519b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}*/
/* */
