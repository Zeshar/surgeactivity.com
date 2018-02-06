<?php

/* ZesharCRMCoreBundle:CRUD:show_opportunity_attachments.html.twig */
class __TwigTemplate_0ece336873f2ac46ffaa58caa5d0f8c29ac15170b42c221c4d9448986acdc322 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
            // line 5
            echo "        <ul class=\"sonata-ba-show-one-to-many\">
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : null));
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
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "associationadmin", array()), "generateAttachmentEditURL", array(0 => $this->getAttribute($context["element"], "getAttachment", array(), "method")), "method"), "html", null, true);
                echo "\">Edit this attachment</a>&nbsp;&nbsp;&nbsp;
                        <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "associationadmin", array()), "generateAttachmentRemoveURL", array(0 => $this->getAttribute($context["element"], "getAttachment", array(), "method")), "method"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "associationadmin", array()), "generateAttachmentCreateURL", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
        echo "\">Add new attachment</a>
";
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
        return array (  103 => 30,  98 => 27,  94 => 25,  84 => 21,  80 => 20,  75 => 18,  70 => 17,  64 => 15,  61 => 14,  55 => 12,  52 => 11,  46 => 9,  44 => 8,  41 => 7,  37 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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
