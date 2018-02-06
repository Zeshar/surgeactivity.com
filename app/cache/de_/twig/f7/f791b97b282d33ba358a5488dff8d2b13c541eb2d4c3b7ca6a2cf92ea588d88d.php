<?php

/* ZesharCRMCoreBundle:CRUD:show_opportunity_attachments.html.twig */
class __TwigTemplate_91535b398c7c0b1651fe36a09aa9d91b60e61ea0a4640653172312e18c616d02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_many.html.twig", "ZesharCRMCoreBundle:CRUD:show_opportunity_attachments.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_many.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ba6958dd25ce5b2e37cacbdde2b2c7ccef2b6b3b8e839c6a5bff363fed5e9a9 = $this->env->getExtension("native_profiler");
        $__internal_2ba6958dd25ce5b2e37cacbdde2b2c7ccef2b6b3b8e839c6a5bff363fed5e9a9->enter($__internal_2ba6958dd25ce5b2e37cacbdde2b2c7ccef2b6b3b8e839c6a5bff363fed5e9a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD:show_opportunity_attachments.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ba6958dd25ce5b2e37cacbdde2b2c7ccef2b6b3b8e839c6a5bff363fed5e9a9->leave($__internal_2ba6958dd25ce5b2e37cacbdde2b2c7ccef2b6b3b8e839c6a5bff363fed5e9a9_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_eac7ea34d11e267b7d36e6bd658d669194b2e80578bcef3258ec98aac876943d = $this->env->getExtension("native_profiler");
        $__internal_eac7ea34d11e267b7d36e6bd658d669194b2e80578bcef3258ec98aac876943d->enter($__internal_eac7ea34d11e267b7d36e6bd658d669194b2e80578bcef3258ec98aac876943d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 5
            echo "        <ul class=\"sonata-ba-show-one-to-many\">
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 7
                echo "                <li>
                    ";
                // line 8
                if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["element"], "getAttachment", array(), "method"), "getText", array(), "method"))) {
                    // line 9
                    echo "                        <p>";
                    echo nl2br(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["element"], "getAttachment", array(), "method"), "getText", array(), "method"), "html", null, true));
                    echo "</p>
                    ";
                }
                // line 11
                echo "                    ";
                if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["element"], "getAttachment", array(), "method"), "getFile", array(), "method"))) {
                    // line 12
                    echo "                        <p>File:&nbsp;&nbsp;";
                    echo $this->getAttribute($this->getAttribute($context["element"], "getAttachment", array(), "method"), "getDownloadLink", array(), "method");
                    echo "</p>
                    ";
                }
                // line 14
                echo "                    ";
                if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["element"], "getAttachment", array(), "method"), "getCreator", array(), "method"))) {
                    // line 15
                    echo "                        <p>Posted by:&nbsp;&nbsp;";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["element"], "getAttachment", array(), "method"), "getCreator", array(), "method"), "getUsername", array(), "method"), "html", null, true);
                    echo "</p>
                    ";
                }
                // line 17
                echo "                    <p>Posted at:&nbsp;&nbsp;";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["element"], "getAttachment", array(), "method"), "getCreatedAt", array(), "method"), "Y-m-d H:i:s"), "html", null, true);
                echo "</p>
                    <p>Updated at:&nbsp;&nbsp;";
                // line 18
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["element"], "getAttachment", array(), "method"), "getUpdatedAt", array(), "method"), "Y-m-d H:i:s"), "html", null, true);
                echo "</p>
                    <p>
                        <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "generateAttachmentEditURL", array(0 => $this->getAttribute($context["element"], "getAttachment", array(), "method")), "method"), "html", null, true);
                echo "\">Edit this attachment</a>&nbsp;&nbsp;&nbsp;
                        <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "generateAttachmentRemoveURL", array(0 => $this->getAttribute($context["element"], "getAttachment", array(), "method")), "method"), "html", null, true);
                echo "\">Remove this attachment</a>
                    </p>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "        </ul>
    ";
        } else {
            // line 27
            echo "        <br />
        <div>This opportunity has no attachments yet.</div>
    ";
        }
        // line 30
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "generateAttachmentCreateURL", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">Add new attachment</a>
";
        
        $__internal_eac7ea34d11e267b7d36e6bd658d669194b2e80578bcef3258ec98aac876943d->leave($__internal_eac7ea34d11e267b7d36e6bd658d669194b2e80578bcef3258ec98aac876943d_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD:show_opportunity_attachments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 30,  107 => 27,  103 => 25,  93 => 21,  89 => 20,  84 => 18,  79 => 17,  73 => 15,  70 => 14,  64 => 12,  61 => 11,  55 => 9,  53 => 8,  50 => 7,  46 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'Sonata\DoctrineORMAdminBundle:CRUD:show_orm_one_to_many.html.twig' %}*/
/* */
/* {% block field%}*/
/*     {% if value is not empty %}*/
/*         <ul class="sonata-ba-show-one-to-many">*/
/*             {% for element in value%}*/
/*                 <li>*/
/*                     {% if element.getAttachment().getText() is not empty %}*/
/*                         <p>{{ element.getAttachment().getText()|nl2br }}</p>*/
/*                     {% endif %}*/
/*                     {% if element.getAttachment().getFile() is not empty %}*/
/*                         <p>File:&nbsp;&nbsp;{{ element.getAttachment().getDownloadLink() | raw }}</p>*/
/*                     {% endif %}*/
/*                     {% if element.getAttachment().getCreator() is not empty %}*/
/*                         <p>Posted by:&nbsp;&nbsp;{{ element.getAttachment().getCreator().getUsername() }}</p>*/
/*                     {% endif %}*/
/*                     <p>Posted at:&nbsp;&nbsp;{{ element.getAttachment().getCreatedAt()|date('Y-m-d H:i:s') }}</p>*/
/*                     <p>Updated at:&nbsp;&nbsp;{{ element.getAttachment().getUpdatedAt()|date('Y-m-d H:i:s') }}</p>*/
/*                     <p>*/
/*                         <a href="{{ field_description.associationadmin.generateAttachmentEditURL(element.getAttachment()) }}">Edit this attachment</a>&nbsp;&nbsp;&nbsp;*/
/*                         <a href="{{ field_description.associationadmin.generateAttachmentRemoveURL(element.getAttachment()) }}">Remove this attachment</a>*/
/*                     </p>*/
/*                 </li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*     {% else %}*/
/*         <br />*/
/*         <div>This opportunity has no attachments yet.</div>*/
/*     {% endif %}*/
/*     <a href="{{ field_description.associationadmin.generateAttachmentCreateURL(object) }}">Add new attachment</a>*/
/* {% endblock %}*/
