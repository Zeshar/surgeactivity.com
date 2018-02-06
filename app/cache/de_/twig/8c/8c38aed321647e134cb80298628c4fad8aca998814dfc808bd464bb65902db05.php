<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_314f1e4fd179ee1652e3282596a5a418f4843238d2e71900af0605edc765a956 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d51801b6a39e9ee98e4cf0d226fca3ab9d22e61d6b01a666ba74f1638076c18 = $this->env->getExtension("native_profiler");
        $__internal_0d51801b6a39e9ee98e4cf0d226fca3ab9d22e61d6b01a666ba74f1638076c18->enter($__internal_0d51801b6a39e9ee98e4cf0d226fca3ab9d22e61d6b01a666ba74f1638076c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_0d51801b6a39e9ee98e4cf0d226fca3ab9d22e61d6b01a666ba74f1638076c18->leave($__internal_0d51801b6a39e9ee98e4cf0d226fca3ab9d22e61d6b01a666ba74f1638076c18_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_7b79cb39c4ff02c530613cb430cf5fb39ff048f8db7dcc7f920fddaffe4b2106 = $this->env->getExtension("native_profiler");
        $__internal_7b79cb39c4ff02c530613cb430cf5fb39ff048f8db7dcc7f920fddaffe4b2106->enter($__internal_7b79cb39c4ff02c530613cb430cf5fb39ff048f8db7dcc7f920fddaffe4b2106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_7b79cb39c4ff02c530613cb430cf5fb39ff048f8db7dcc7f920fddaffe4b2106->leave($__internal_7b79cb39c4ff02c530613cb430cf5fb39ff048f8db7dcc7f920fddaffe4b2106_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
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
/* <div id="cms-block-{{ block.id }}" class="cms-block cms-block-element">*/
/*     {% block block %}EMPTY CONTENT{% endblock %}*/
/* </div>*/
/* */
