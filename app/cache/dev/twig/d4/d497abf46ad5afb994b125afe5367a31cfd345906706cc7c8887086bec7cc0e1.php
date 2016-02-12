<?php

/* base.html.twig */
class __TwigTemplate_7c5d9214989f0cba53c68441fb02d738821739773089e40cf0b299d4447d1ade extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5af5e1c2848df4b9f34faf48073326863a0b08444cd780d72a123a0eff2a679 = $this->env->getExtension("native_profiler");
        $__internal_b5af5e1c2848df4b9f34faf48073326863a0b08444cd780d72a123a0eff2a679->enter($__internal_b5af5e1c2848df4b9f34faf48073326863a0b08444cd780d72a123a0eff2a679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_b5af5e1c2848df4b9f34faf48073326863a0b08444cd780d72a123a0eff2a679->leave($__internal_b5af5e1c2848df4b9f34faf48073326863a0b08444cd780d72a123a0eff2a679_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_57484d7bf191aa9208ce705be1fd9e1727b2d552f2574fdc453eff115ee59c89 = $this->env->getExtension("native_profiler");
        $__internal_57484d7bf191aa9208ce705be1fd9e1727b2d552f2574fdc453eff115ee59c89->enter($__internal_57484d7bf191aa9208ce705be1fd9e1727b2d552f2574fdc453eff115ee59c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_57484d7bf191aa9208ce705be1fd9e1727b2d552f2574fdc453eff115ee59c89->leave($__internal_57484d7bf191aa9208ce705be1fd9e1727b2d552f2574fdc453eff115ee59c89_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2ef031f7cc5fee3c4e7d9d1ac4fce0cdd7e80865d2c18208ddda9d43d0ca287a = $this->env->getExtension("native_profiler");
        $__internal_2ef031f7cc5fee3c4e7d9d1ac4fce0cdd7e80865d2c18208ddda9d43d0ca287a->enter($__internal_2ef031f7cc5fee3c4e7d9d1ac4fce0cdd7e80865d2c18208ddda9d43d0ca287a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2ef031f7cc5fee3c4e7d9d1ac4fce0cdd7e80865d2c18208ddda9d43d0ca287a->leave($__internal_2ef031f7cc5fee3c4e7d9d1ac4fce0cdd7e80865d2c18208ddda9d43d0ca287a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_531fc0af4f7a2fdd4c1c2b8fed0c22713fa99206b8d0c6e4b55745b1dec0b744 = $this->env->getExtension("native_profiler");
        $__internal_531fc0af4f7a2fdd4c1c2b8fed0c22713fa99206b8d0c6e4b55745b1dec0b744->enter($__internal_531fc0af4f7a2fdd4c1c2b8fed0c22713fa99206b8d0c6e4b55745b1dec0b744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_531fc0af4f7a2fdd4c1c2b8fed0c22713fa99206b8d0c6e4b55745b1dec0b744->leave($__internal_531fc0af4f7a2fdd4c1c2b8fed0c22713fa99206b8d0c6e4b55745b1dec0b744_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fb261b5d64f2e6c0e6d33e3698c4ec21b2d47ba388f4cae36a3b1010dd5848f1 = $this->env->getExtension("native_profiler");
        $__internal_fb261b5d64f2e6c0e6d33e3698c4ec21b2d47ba388f4cae36a3b1010dd5848f1->enter($__internal_fb261b5d64f2e6c0e6d33e3698c4ec21b2d47ba388f4cae36a3b1010dd5848f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fb261b5d64f2e6c0e6d33e3698c4ec21b2d47ba388f4cae36a3b1010dd5848f1->leave($__internal_fb261b5d64f2e6c0e6d33e3698c4ec21b2d47ba388f4cae36a3b1010dd5848f1_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
