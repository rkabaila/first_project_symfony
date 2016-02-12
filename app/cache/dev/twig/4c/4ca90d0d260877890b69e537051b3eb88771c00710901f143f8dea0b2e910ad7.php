<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_96115fc7ce3f98d15a452d1ca1adc050a6a0f3ea65625b324a4acdf5541453f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50bb246e2a6f763dea81072e6a6b9e63ce0201d5ea3ec3606732bd8a5bff396c = $this->env->getExtension("native_profiler");
        $__internal_50bb246e2a6f763dea81072e6a6b9e63ce0201d5ea3ec3606732bd8a5bff396c->enter($__internal_50bb246e2a6f763dea81072e6a6b9e63ce0201d5ea3ec3606732bd8a5bff396c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50bb246e2a6f763dea81072e6a6b9e63ce0201d5ea3ec3606732bd8a5bff396c->leave($__internal_50bb246e2a6f763dea81072e6a6b9e63ce0201d5ea3ec3606732bd8a5bff396c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0218b0f693f5267eeb9f8b120b5c1ee6625e2a511d3f4c8b740ef7cd27f48d78 = $this->env->getExtension("native_profiler");
        $__internal_0218b0f693f5267eeb9f8b120b5c1ee6625e2a511d3f4c8b740ef7cd27f48d78->enter($__internal_0218b0f693f5267eeb9f8b120b5c1ee6625e2a511d3f4c8b740ef7cd27f48d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0218b0f693f5267eeb9f8b120b5c1ee6625e2a511d3f4c8b740ef7cd27f48d78->leave($__internal_0218b0f693f5267eeb9f8b120b5c1ee6625e2a511d3f4c8b740ef7cd27f48d78_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1121d474ac242ddc02d176a28237300e8e41490b8708fdcbaa5e650ea260aa2f = $this->env->getExtension("native_profiler");
        $__internal_1121d474ac242ddc02d176a28237300e8e41490b8708fdcbaa5e650ea260aa2f->enter($__internal_1121d474ac242ddc02d176a28237300e8e41490b8708fdcbaa5e650ea260aa2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1121d474ac242ddc02d176a28237300e8e41490b8708fdcbaa5e650ea260aa2f->leave($__internal_1121d474ac242ddc02d176a28237300e8e41490b8708fdcbaa5e650ea260aa2f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_baa950d38f544f3ea7a3860198e9de8e68b27ac804c88c9211bdd90cc0da88c5 = $this->env->getExtension("native_profiler");
        $__internal_baa950d38f544f3ea7a3860198e9de8e68b27ac804c88c9211bdd90cc0da88c5->enter($__internal_baa950d38f544f3ea7a3860198e9de8e68b27ac804c88c9211bdd90cc0da88c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_baa950d38f544f3ea7a3860198e9de8e68b27ac804c88c9211bdd90cc0da88c5->leave($__internal_baa950d38f544f3ea7a3860198e9de8e68b27ac804c88c9211bdd90cc0da88c5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
